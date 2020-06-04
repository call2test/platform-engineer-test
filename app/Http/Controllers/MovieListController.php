<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\MovieListService;

class MovieListController extends Controller
{
    public static function timestampToDateTime($timestamp) {
        if (!$timestamp) {
            return null;
        }

        $dt = new \DateTime();
        // Set timezone to mountain time for ABQ.
        $dt->setTimeZone(new \DateTimeZone('America/Denver'));
        $dt->setTimestamp($timestamp / 1000);
        return $dt;
    }

    public static function compileProductionsByTitle($productions, $feature)
    {
        $attributes = $feature['attributes'];
        $title = $attributes['Title'];
        $type = $attributes['Type'];
        $site = $attributes['Site'];
        $shootDate = MovieListController::timestampToDateTime($attributes['ShootDate']);

        if (!array_key_exists($title, $productions)) {
            $production = [
                'title' => $title,
                'type' => $type,
                'sites' => [],
            ];
            $productions[$title] = $production;
        }

        $productions[$title]['sites'][] = [
            'name' => $site,
            'shoot_date' => $shootDate,
        ];

        return $productions;
    }

    public static function countShootDates($count, $production)
    {
        $sites = $production['sites'];
        return $count + sizeof($sites);
    }

    public static function compileMovieData($features, $start, $end)
    {
        $features = array_filter($features, function ($feature) use ($start, $end) {
            $shootDate = MovieListController::timestampToDateTime($feature['attributes']['ShootDate']);
            return $start <= $shootDate && $end >= $shootDate;
        });

        $productionsByTitle = array_reduce($features, ['App\Http\Controllers\MovieListController', 'compileProductionsByTitle'], []);
        $production_count = sizeof($productionsByTitle);
        $shoot_date_count = array_reduce($productionsByTitle, ['App\Http\Controllers\MovieListController', 'countShootDates'], 0);

        return [
            'production_count' => $production_count,
            'shoot_date_count' => $shoot_date_count,
            'productions' => array_values($productionsByTitle),
        ];
    }

    public function __invoke(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after:start_date',
        ]);

        $format = 'Y-m-d';
        $start = \DateTime::createFromFormat($format, $request->input('start_date'));
        $end = \DateTime::createFromFormat($format, $request->input('end_date'));

        $movieListService = new MovieListService();
        $data = $movieListService->getMovieList();
        $features = $data['features'];

        $movieData = $this->compileMovieData($features, $start, $end);

        return view('show', [
            'production_count' => $movieData['production_count'],
            'shoot_date_count' => $movieData['shoot_date_count'],
            'productions' => $movieData['productions']
        ]);
    }
}
