import requests
from flask import jsonify, Flask
import json

app = Flask(__name__)


@app.route('/api/films', methods=['GET'])
def get_user():
    url = ('https://c2t-cabq-open-data.s3.amazonaws.com/'
           'film-locations-json-all-records_03-19-2020.json')
    req = requests.get(url)
    data = req.content
    data = json.loads(data)
    films = []

    for records in data["features"]:
        recs = records["attributes"]
        films.append(recs)

    # Filter out duplicate productions
    seen = set()
    uniq_films = []
    for rec in films:
        tup = tuple(rec.items())
        if tup not in seen:
            seen.add(tup)
            uniq_films.append(rec)

    return jsonify({'films': [uniq_films]})

if __name__ == '__main__':
    app.run(host="0.0.0.0", debug=False)
