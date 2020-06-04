@extends('layouts.app')

@section('title', 'Here is your data')

@section('content')
    <div>
        <h2>{{ $production_count }} Productions with a total of {{ $shoot_date_count }} shoot dates found.</h2>
        <ul>
        @foreach ($productions as $production)
            <li>
                {{ $production['title'] }}
                <ol>
                @foreach ($production['sites'] as $site)
                    <li>
                        <span>{{ $site['name'] }}</span>
                        &nbsp;
                        <span>{{ $site['shoot_date'] ? $site['shoot_date']->format('m-d-Y') : '' }}</span>
                    </li>
                @endforeach
                </ol>
            </li>
        @endforeach
        </ul>
    </div>
@endsection
