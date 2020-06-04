<?php

namespace App\Services;

class MovieListService
{
    public function getMovieList()
    {
        $json_text = <<<JSON
{
 "displayFieldName": "Status",
 "fieldAliases": {
  "OBJECTID": "OBJECTID",
  "Title": "Title",
  "Type": "Type",
  "IMDbLink": "IMDB Link",
  "Address": "Address",
  "Site": "Site",
  "ShootDate": "Shoot Date",
  "OriginalDetails": "Original Details"
 },
 "geometryType": "esriGeometryPoint",
 "spatialReference": {
  "wkid": 4326,
  "latestWkid": 4326
 },
 "fields": [
  {
   "name": "OBJECTID",
   "type": "esriFieldTypeOID",
   "alias": "OBJECTID"
  },
  {
   "name": "Title",
   "type": "esriFieldTypeString",
   "alias": "Title",
   "length": 255
  },
  {
   "name": "Type",
   "type": "esriFieldTypeString",
   "alias": "Type",
   "length": 255
  },
  {
   "name": "IMDbLink",
   "type": "esriFieldTypeString",
   "alias": "IMDB Link",
   "length": 255
  },
  {
   "name": "Address",
   "type": "esriFieldTypeString",
   "alias": "Address",
   "length": 255
  },
  {
   "name": "Site",
   "type": "esriFieldTypeString",
   "alias": "Site",
   "length": 255
  },
  {
   "name": "ShootDate",
   "type": "esriFieldTypeDate",
   "alias": "Shoot Date",
   "length": 8
  },
  {
   "name": "OriginalDetails",
   "type": "esriFieldTypeString",
   "alias": "Original Details",
   "length": 255
  }
 ],
 "features": [
  {
   "attributes": {
    "OBJECTID": 4474,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "3211 Monte Vista Boulevard NE",
    "Site": "Monte Vista Elementary School",
    "ShootDate": 1254441600000,
    "OriginalDetails": "Monte Vista Elementary - no ITC/no closures"
   },
   "geometry": {
    "x": -106.6094197299104,
    "y": 35.082445092601411
   }
  },
  {
   "attributes": {
    "OBJECTID": 4475,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291161600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4476,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291248000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4477,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291334400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4478,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291420800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4479,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291593600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4480,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291680000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4481,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291766400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4482,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291852800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4483,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1291939200000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4484,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1292025600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4485,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1292198400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4486,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1292284800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4487,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1292371200000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4488,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1292457600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4489,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1292544000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4490,
    "Title": "0000",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1710927/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1292630400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4491,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "4800 Osuna NE",
    "Site": "Cliffs Amusement Park",
    "ShootDate": 1189382400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58930783949441,
    "y": 35.14488944855426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4492,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "4800 Osuna NE",
    "Site": "Cliffs Amusement Park",
    "ShootDate": 1189468800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58930783949441,
    "y": 35.14488944855426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4493,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "4800 Osuna NE",
    "Site": "Cliffs Amusement Park",
    "ShootDate": 1189468800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58930783949441,
    "y": 35.14488944855426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4494,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "1 Hotel Circle ",
    "Site": "Chevron",
    "ShootDate": 1189555200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.52999721515583,
    "y": 35.085773865548802
   }
  },
  {
   "attributes": {
    "OBJECTID": 4495,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "11200 Montgomery NE",
    "Site": "Stag Tobacconist",
    "ShootDate": 1189555200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.51558371587942,
    "y": 35.130640885158336
   }
  },
  {
   "attributes": {
    "OBJECTID": 4496,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "2500 Carlisle NE",
    "Site": "Park Plaza Hotel",
    "ShootDate": 1189641600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60416732895321,
    "y": 35.107510851144383
   }
  },
  {
   "attributes": {
    "OBJECTID": 4497,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "2500 Carlisle NE",
    "Site": "Park Plaza Hotel",
    "ShootDate": 1189728000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60416732895321,
    "y": 35.107510851144383
   }
  },
  {
   "attributes": {
    "OBJECTID": 4498,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "6401 San Mateo NE",
    "Site": "Davis Cadillac",
    "ShootDate": 1190160000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58643771856839,
    "y": 35.148790137089229
   }
  },
  {
   "attributes": {
    "OBJECTID": 4499,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "5701 Zuni SE",
    "Site": "Saigon Beauty Salon",
    "ShootDate": 1190332800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58263853931427,
    "y": 35.072842321351452
   }
  },
  {
   "attributes": {
    "OBJECTID": 4500,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "4200 Central SE",
    "Site": "Martini Grille",
    "ShootDate": 1190678400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59754809817206,
    "y": 35.078967228677698
   }
  },
  {
   "attributes": {
    "OBJECTID": 4501,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "6600 Zuni SE",
    "Site": "Ballut Abyad Shrine Center",
    "ShootDate": 1191369600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57407056174624,
    "y": 35.072700947930123
   }
  },
  {
   "attributes": {
    "OBJECTID": 4502,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "840 San Mateo SE",
    "Site": "Acapulco Tacos and Burritos",
    "ShootDate": 1191456000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58632914997978,
    "y": 35.068057478054939
   }
  },
  {
   "attributes": {
    "OBJECTID": 4503,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "2200 Sunport SE",
    "Site": "Albuquerque Sunport",
    "ShootDate": 1191456000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6186417358025,
    "y": 35.049710416686651
   }
  },
  {
   "attributes": {
    "OBJECTID": 4504,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "6600 Zuni SE",
    "Site": "Ballut Abyad Shrine Center",
    "ShootDate": 1191456000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57407056174624,
    "y": 35.072700947930123
   }
  },
  {
   "attributes": {
    "OBJECTID": 4505,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Hotel",
    "ShootDate": 1191542400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 4506,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "610 Gold SW",
    "Site": "Naral Office",
    "ShootDate": 1191542400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65481753638603,
    "y": 35.083926840133678
   }
  },
  {
   "attributes": {
    "OBJECTID": 4507,
    "Title": "$5 a Day",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1024733/?ref_=nv_sr_1",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1191542400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4508,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294099200000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4509,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294185600000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4510,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294272000000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4511,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294358400000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4512,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294617600000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4513,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "1 Civic Plaza NW",
    "Site": "Albuquerque Civic Plaza",
    "ShootDate": 1294704000000,
    "OriginalDetails": "Civic Plaza - park area"
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 4514,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294704000000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4515,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1294704000000,
    "OriginalDetails": "Albuquerque Convention Center parking garage"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 4516,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294790400000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4517,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "2200 Sunport Boulevard SE",
    "Site": "Albuquerque International Sunport",
    "ShootDate": 1294790400000,
    "OriginalDetails": "Albuquerque Sunport"
   },
   "geometry": {
    "x": -106.6186417358025,
    "y": 35.049710416686651
   }
  },
  {
   "attributes": {
    "OBJECTID": 4518,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294876800000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4519,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294963200000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4520,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1295222400000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4521,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1295308800000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4522,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1295395200000,
    "OriginalDetails": "Hotel Andaluz - 125 2nd St. NW"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 4523,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1295481600000,
    "OriginalDetails": "El Madrid Bar- 423 1st SW"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4524,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1295568000000,
    "OriginalDetails": "El Madrid Bar- 423 1st SW"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4525,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1295827200000,
    "OriginalDetails": "El Madrid Bar- 423 1st SW"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4526,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1295913600000,
    "OriginalDetails": "El Madrid Bar- 423 1st SW"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4527,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1296000000000,
    "OriginalDetails": "El Madrid Bar- 423 1st SW"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4528,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1296086400000,
    "OriginalDetails": "El Madrid Bar- 423 1st SW"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4529,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "5555 Zuni Road SE",
    "Site": "John Brooks Food Town",
    "ShootDate": 1296172800000,
    "OriginalDetails": "John Brooks Grocery Store - 5555 Zuni SE"
   },
   "geometry": {
    "x": -106.58519652173021,
    "y": 35.072890089561625
   }
  },
  {
   "attributes": {
    "OBJECTID": 4530,
    "Title": "15 Good Reasons to go to Albuquerque",
    "Type": "TV Production",
    "IMDbLink": "na",
    "Address": "9201 Balloon Museum Drive NE",
    "Site": "Anderson Abruzzo Albuquerque Intl Balloon Fiesta Park",
    "ShootDate": 1336435200000,
    "OriginalDetails": "Balloon Museum"
   },
   "geometry": {
    "x": -106.59778427514172,
    "y": 35.186578900351641
   }
  },
  {
   "attributes": {
    "OBJECTID": 4531,
    "Title": "2 Guns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1272878/",
    "Address": "51 Lead Avenue SW",
    "Site": "Lead Avenue Overpass",
    "ShootDate": 1346025600000,
    "OriginalDetails": "Lead overpass (between Broadway and Second Streets) SW - Road closure on WB Lead overpass btw Broadway and Second St SW"
   },
   "geometry": {
    "x": -106.64758854985129,
    "y": 35.081019745823227
   }
  },
  {
   "attributes": {
    "OBJECTID": 4532,
    "Title": "2 Guns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1272878/",
    "Address": "101 Atrisco Vista Boulevard NW",
    "Site": "Atrisco Vista Boulevard between I40 and Jim McDowell Road",
    "ShootDate": 1347235200000,
    "OriginalDetails": "Atrisco Vista (formerly Paseo Del Volcan) between I-40 and Jim McDowell Rd"
   },
   "geometry": {
    "x": -106.78657209163494,
    "y": 35.062784023447243
   }
  },
  {
   "attributes": {
    "OBJECTID": 4533,
    "Title": "2 Guns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1272878/",
    "Address": "901 2nd Street SW",
    "Site": "2nd Street SW between Atlantic Avenue SW and Bridge Boulevard SW",
    "ShootDate": 1347321600000,
    "OriginalDetails": "Second Street between Bridge and Atlantic - ITC on 2nd between Bridge and Atlantic"
   },
   "geometry": {
    "x": -106.650861080092,
    "y": 35.076625256747441
   }
  },
  {
   "attributes": {
    "OBJECTID": 4534,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "1901 University Boulevard NE",
    "Site": "Albuquerque Crowne Plaza interior",
    "ShootDate": 1347926400000,
    "OriginalDetails": "Albuquerque Crowne Plaza - interior - 1901 University NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 4535,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "4208 Central Avenue SW",
    "Site": "KMart",
    "ShootDate": 1348099200000,
    "OriginalDetails": "4208 Central SW - K-mart - no ITC/no closures"
   },
   "geometry": {
    "x": -106.68648894787813,
    "y": 35.08533927427456
   }
  },
  {
   "attributes": {
    "OBJECTID": 4536,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "7500 Central Avenue SW",
    "Site": "Westward Ho Motel",
    "ShootDate": 1348099200000,
    "OriginalDetails": "Westward Ho Motel - 7500 Central Ave SW - ITC  on Central between Unser and Airport and on 75th Street from 75th to Central"
   },
   "geometry": {
    "x": -106.71902146104533,
    "y": 35.077936734258103
   }
  },
  {
   "attributes": {
    "OBJECTID": 4537,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "2601 Yale Boulevard SE",
    "Site": "Hilton Garden Inn",
    "ShootDate": 1348185600000,
    "OriginalDetails": "Hilton Garden Inn - 2601 Yale Blvd SE - Closure on Yale (one Lane) from Randolph to Sunport Ct"
   },
   "geometry": {
    "x": -106.62200070104153,
    "y": 35.053740323004249
   }
  },
  {
   "attributes": {
    "OBJECTID": 4538,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "109 4th Street NW",
    "Site": "Relux Hookah Lounge",
    "ShootDate": 1348272000000,
    "OriginalDetails": "Relux Lounge - 4th st. pedestrian mall - interior - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65160158563521,
    "y": 35.084744658985677
   }
  },
  {
   "attributes": {
    "OBJECTID": 4539,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Regency Albuquerque",
    "ShootDate": 1348272000000,
    "OriginalDetails": "Hyatt Regency - 330 Tijeras Ave NW - ITC (9/22 only) on Tijeras from 5th to 3rd St, closure on Tijeras (one lane) from 5th st to 4th st"
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 4540,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Regency Albuquerque",
    "ShootDate": 1348358400000,
    "OriginalDetails": "Hyatt Regency - 330 Tijeras Ave NW - ITC (9/22 only) on Tijeras from 5th to 3rd St, closure on Tijeras (one lane) from 5th st to 4th st"
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 4541,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "7401 Atrisco Vista Boulevard NW",
    "Site": "Bode Aviation at Double Eagle Airport note that Atrisco Vista was formerly named Paseo Del Volcan",
    "ShootDate": 1348617600000,
    "OriginalDetails": "Bode Aviation - Double Eagle Airport - ITC shooting range road"
   },
   "geometry": {
    "x": -106.78684748545665,
    "y": 35.126039287192576
   }
  },
  {
   "attributes": {
    "OBJECTID": 4542,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "120 Woodward Road SW",
    "Site": "Reynolds Auto Services",
    "ShootDate": 1349481600000,
    "OriginalDetails": "Reynolds Auto Service - 120 Woodward SW - ITC on 2nd Street from South of Woodward to North of Woodward, and on Woodward from William St to 2nd St"
   },
   "geometry": {
    "x": -106.65608710291922,
    "y": 35.049444759138083
   }
  },
  {
   "attributes": {
    "OBJECTID": 4543,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "806 Dr Martin Luther King Jr Avenue NE",
    "Site": "Eye Associates",
    "ShootDate": 1349481600000,
    "OriginalDetails": "Eye Associates - 806 Martin Luther King Jr NE - ITC on MLK from Elm St to Locust St, on Elm St from Copper to MLK Jr, closure on MLK Jr from High Street to Locust St"
   },
   "geometry": {
    "x": -106.63778817264668,
    "y": 35.08531886306848
   }
  },
  {
   "attributes": {
    "OBJECTID": 4544,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1349568000000,
    "OriginalDetails": "Gibson Medical Center - No ITC/No closures"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4545,
    "Title": "500 MPH Storm",
    "Type": "Movie aka Hypercane",
    "IMDbLink": "http://www.imdb.com/title/tt2518848/",
    "Address": "7401 Atrisco Vista Boulevard NW",
    "Site": "Double Eagle Airport note that Atrisco Vista was formerly named Paseo Del Volcan",
    "ShootDate": 1349136000000,
    "OriginalDetails": "Double Eagle Airport "
   },
   "geometry": {
    "x": -106.78684748545665,
    "y": 35.126039287192576
   }
  },
  {
   "attributes": {
    "OBJECTID": 4546,
    "Title": "500 MPH Storm",
    "Type": "Movie aka Hypercane",
    "IMDbLink": "http://www.imdb.com/title/tt2518848/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": null,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4547,
    "Title": "500 MPH Storm",
    "Type": "Movie aka Hypercane",
    "IMDbLink": "http://www.imdb.com/title/tt2518848/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": null,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4548,
    "Title": "500 MPH Storm",
    "Type": "Movie aka Hypercane",
    "IMDbLink": "http://www.imdb.com/title/tt2518848/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": null,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4549,
    "Title": "500 MPH Storm",
    "Type": "Movie aka Hypercane",
    "IMDbLink": "http://www.imdb.com/title/tt2518848/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": null,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4550,
    "Title": "500 MPH Storm",
    "Type": "Movie aka Hypercane",
    "IMDbLink": "http://www.imdb.com/title/tt2518848/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": null,
    "OriginalDetails": "Bobby Foster Rd."
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4551,
    "Title": "Adam Feldman",
    "Type": "Political Ad",
    "IMDbLink": "na",
    "Address": "7100 Tramway Boulevard NE",
    "Site": "Elena Gallegos Park",
    "ShootDate": 1281657600000,
    "OriginalDetails": "Elena Gallegos Park"
   },
   "geometry": {
    "x": -106.49718282592383,
    "y": 35.158347321159404
   }
  },
  {
   "attributes": {
    "OBJECTID": 4552,
    "Title": "Adventures of a Teenage Dragonslayer",
    "Type": "Movie aka I was a 7th Grade Dragonslayer",
    "IMDbLink": "http://www.imdb.com/title/tt1373149/",
    "Address": "3300 Princeton Drive NE",
    "Site": "Warehouse",
    "ShootDate": 1245024000000,
    "OriginalDetails": "Warehouse on 3300 Princeton, Suite n21"
   },
   "geometry": {
    "x": -106.6203397169795,
    "y": 35.116674435931735
   }
  },
  {
   "attributes": {
    "OBJECTID": 4553,
    "Title": "Adventures of a Teenage Dragonslayer",
    "Type": "Movie aka I was a 7th Grade Dragonslayer",
    "IMDbLink": "http://www.imdb.com/title/tt1373149/",
    "Address": "4910 Lomas Boulevard NE",
    "Site": "Golfernoggins closed",
    "ShootDate": null,
    "OriginalDetails": "4910 Lomas Blvd (Golfernoggin's)- No ITC/ No closures"
   },
   "geometry": {
    "x": -106.59029965053497,
    "y": 35.087410104142954
   }
  },
  {
   "attributes": {
    "OBJECTID": 4554,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "2000 Mountain Road NW",
    "Site": "Albuquerque Museum ",
    "ShootDate": 1212192000000,
    "OriginalDetails": "Albuquerque Museum "
   },
   "geometry": {
    "x": -106.66860623851775,
    "y": 35.098424458888971
   }
  },
  {
   "attributes": {
    "OBJECTID": 4555,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "2000 Mountain Road NW",
    "Site": "Albuquerque Museum ",
    "ShootDate": 1212364800000,
    "OriginalDetails": "Albuquerque Museum "
   },
   "geometry": {
    "x": -106.66860623851775,
    "y": 35.098424458888971
   }
  },
  {
   "attributes": {
    "OBJECTID": 4556,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1212364800000,
    "OriginalDetails": "KiMo Theatre"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 4557,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "100 1st Street SW",
    "Site": "Alvarado Transportation Center Railrunner Station",
    "ShootDate": 1212451200000,
    "OriginalDetails": "Railrunner Station"
   },
   "geometry": {
    "x": -106.64812378855547,
    "y": 35.083567803386266
   }
  },
  {
   "attributes": {
    "OBJECTID": 4558,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "202 Romero Street NW",
    "Site": "Old Town area",
    "ShootDate": 1212451200000,
    "OriginalDetails": "Old Town"
   },
   "geometry": {
    "x": -106.67047263584421,
    "y": 35.095931947334329
   }
  },
  {
   "attributes": {
    "OBJECTID": 4559,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1212537600000,
    "OriginalDetails": "Hotel Albuquerque"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 4560,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "1701 4th Street SW",
    "Site": "National Hispanic Cultural Center",
    "ShootDate": 1212624000000,
    "OriginalDetails": "National Hispanic Cultural Center"
   },
   "geometry": {
    "x": -106.65448169942046,
    "y": 35.069169511969754
   }
  },
  {
   "attributes": {
    "OBJECTID": 4561,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "1701 4th Street SW",
    "Site": "National Hispanic Cultural Center",
    "ShootDate": 1212710400000,
    "OriginalDetails": "National Hispanic Cultural Center"
   },
   "geometry": {
    "x": -106.65448169942046,
    "y": 35.069169511969754
   }
  },
  {
   "attributes": {
    "OBJECTID": 4562,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "1801 Mountain Road NW",
    "Site": "New Mexico Museum of Natural History",
    "ShootDate": 1212710400000,
    "OriginalDetails": "Museum of Natural History"
   },
   "geometry": {
    "x": -106.66608322751583,
    "y": 35.097624984819831
   }
  },
  {
   "attributes": {
    "OBJECTID": 4563,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Regency Albuquerque",
    "ShootDate": 1212710400000,
    "OriginalDetails": "Hyatt Downtown"
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 4564,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "500 Central Avenue SW",
    "Site": "Central Avenue SW between 5th and 6th Streets SW",
    "ShootDate": 1212796800000,
    "OriginalDetails": "Central ave. between 5th & 6th close central between 2nd & 6th"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 4565,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "2000 Mountain Road NW",
    "Site": "Albuquerque Museum",
    "ShootDate": 1212883200000,
    "OriginalDetails": "Albuquerque Museum "
   },
   "geometry": {
    "x": -106.66860623851775,
    "y": 35.098424458888971
   }
  },
  {
   "attributes": {
    "OBJECTID": 4566,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "2200 Sunport Boulevard SE",
    "Site": "Albuquerque International Sunport",
    "ShootDate": 1212883200000,
    "OriginalDetails": "Sunport"
   },
   "geometry": {
    "x": -106.6186417358025,
    "y": 35.049710416686651
   }
  },
  {
   "attributes": {
    "OBJECTID": 4567,
    "Title": "Albuquerque Convention and Visitors Bureau",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1212883200000,
    "OriginalDetails": "Convention Center"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 4568,
    "Title": "Albuquerque Economic Development",
    "Type": "Commerical by Production Outfitters",
    "IMDbLink": "na",
    "Address": "1100 Central Avenue SE",
    "Site": "ABQ Uptown Growers Market",
    "ShootDate": 1347321600000,
    "OriginalDetails": "Uptown Farmer's Market"
   },
   "geometry": {
    "x": -106.63423504733879,
    "y": 35.082311602292648
   }
  },
  {
   "attributes": {
    "OBJECTID": 4569,
    "Title": "Albuquerque Economic Development",
    "Type": "Commerical by Production Outfitters",
    "IMDbLink": "na",
    "Address": "901 Rio Grande Boulevard NW",
    "Site": "Lavu Inc interior",
    "ShootDate": 1347321600000,
    "OriginalDetails": "LAVU - interior only"
   },
   "geometry": {
    "x": -106.67073997177782,
    "y": 35.102418707961164
   }
  },
  {
   "attributes": {
    "OBJECTID": 4570,
    "Title": "Albuquerque Economic Development",
    "Type": "Commerical by Production Outfitters",
    "IMDbLink": "na",
    "Address": "10421 Research Road SE ",
    "Site": "Heel Inc",
    "ShootDate": 1347408000000,
    "OriginalDetails": "Heel - 10421 Research Rd. SE "
   },
   "geometry": {
    "x": -106.53059309373495,
    "y": 35.055409485447406
   }
  },
  {
   "attributes": {
    "OBJECTID": 4571,
    "Title": "Albuquerque Economic Development",
    "Type": "Commerical by Production Outfitters",
    "IMDbLink": "na",
    "Address": "1313 Goddard Street SE",
    "Site": "UNM Center for High Technology Materials ",
    "ShootDate": 1347408000000,
    "OriginalDetails": "UNM Center for High Technology Materials "
   },
   "geometry": {
    "x": -106.63510517169267,
    "y": 35.069616805195075
   }
  },
  {
   "attributes": {
    "OBJECTID": 4572,
    "Title": "Albuquerque Economic Development",
    "Type": "Commerical by Production Outfitters",
    "IMDbLink": "na",
    "Address": "733 Chavez Road NW",
    "Site": "Casa Rondena Winery",
    "ShootDate": 1347408000000,
    "OriginalDetails": "Casa Rondena"
   },
   "geometry": {
    "x": -106.64719249521895,
    "y": 35.154580489373735
   }
  },
  {
   "attributes": {
    "OBJECTID": 4573,
    "Title": "Albuquerque Economic Development",
    "Type": "Commerical by Production Outfitters",
    "IMDbLink": "na",
    "Address": "1324 Alameda Boulevard NW",
    "Site": "Alameda Boulevard Bridge",
    "ShootDate": 1347494400000,
    "OriginalDetails": "Alameda Bridge - Bernalillo County"
   },
   "geometry": {
    "x": -106.63910615567873,
    "y": 35.195554849840526
   }
  },
  {
   "attributes": {
    "OBJECTID": 4574,
    "Title": "Albuquerque Economic Development",
    "Type": "Commerical by Production Outfitters",
    "IMDbLink": "na",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1347494400000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4575,
    "Title": "Albuquerque Economic Development",
    "Type": "Commerical by Production Outfitters",
    "IMDbLink": "na",
    "Address": "6301 Jefferson Street NE",
    "Site": "Lowes Call Center",
    "ShootDate": 1347494400000,
    "OriginalDetails": "Lowe's call center"
   },
   "geometry": {
    "x": -106.5932649389822,
    "y": 35.152844026804317
   }
  },
  {
   "attributes": {
    "OBJECTID": 4576,
    "Title": "All in a Days Work",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2979966/",
    "Address": "202 Romero Street NW",
    "Site": "Old Town area",
    "ShootDate": 1350691200000,
    "OriginalDetails": "Old Town"
   },
   "geometry": {
    "x": -106.67047263584421,
    "y": 35.095931947334329
   }
  },
  {
   "attributes": {
    "OBJECTID": 4577,
    "Title": "All in a Days Work",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2979966/",
    "Address": "1 Trailhead Road NE",
    "Site": "Embudito Canyon Open Space",
    "ShootDate": 1351296000000,
    "OriginalDetails": "Embudito Canyon Open Space"
   },
   "geometry": {
    "x": -106.48388418172908,
    "y": 35.135874248554572
   }
  },
  {
   "attributes": {
    "OBJECTID": 4578,
    "Title": "All in a Days Work",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2979966/",
    "Address": "202 Romero Street NW",
    "Site": "Old Town area",
    "ShootDate": 1351296000000,
    "OriginalDetails": "Old Town"
   },
   "geometry": {
    "x": -106.67047263584421,
    "y": 35.095931947334329
   }
  },
  {
   "attributes": {
    "OBJECTID": 4579,
    "Title": "All in a Days Work",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2979966/",
    "Address": "202 Romero Street NW",
    "Site": "Old Town area",
    "ShootDate": 1351900800000,
    "OriginalDetails": "Old Town"
   },
   "geometry": {
    "x": -106.67047263584421,
    "y": 35.095931947334329
   }
  },
  {
   "attributes": {
    "OBJECTID": 4580,
    "Title": "All of Us",
    "Type": "Political Ad Martin Heinrich",
    "IMDbLink": "na",
    "Address": "7100 Tramway Boulevard NE",
    "Site": "Elena Gallegos Park",
    "ShootDate": 1350518400000,
    "OriginalDetails": "Elena Gallegos Park Tollefsrud Memorial"
   },
   "geometry": {
    "x": -106.49718282592383,
    "y": 35.158347321159404
   }
  },
  {
   "attributes": {
    "OBJECTID": 4581,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "8801 Horizon Boulevard NE",
    "Site": "Molina Healthcare",
    "ShootDate": 1304899200000,
    "OriginalDetails": "Molina Healthcare = 8801 Horizon NE - No ITC no closures"
   },
   "geometry": {
    "x": -106.60095141862654,
    "y": 35.184708145054529
   }
  },
  {
   "attributes": {
    "OBJECTID": 4582,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "912 3rd Street NW",
    "Site": "Production Office",
    "ShootDate": 1304899200000,
    "OriginalDetails": "Production Office - 912 3rd NW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64870600375909,
    "y": 35.093352567431694
   }
  },
  {
   "attributes": {
    "OBJECTID": 4583,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "8801 Horizon Boulevard NE",
    "Site": "Molina Healthcare",
    "ShootDate": 1304985600000,
    "OriginalDetails": "Molina Healthcare = 8801 Horizon NE - No ITC no closures"
   },
   "geometry": {
    "x": -106.60095141862654,
    "y": 35.184708145054529
   }
  },
  {
   "attributes": {
    "OBJECTID": 4584,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "1 Civic Plaza NW",
    "Site": "Albuquerque Civic Plaza",
    "ShootDate": 1305763200000,
    "OriginalDetails": "Civic Plaza - park area - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 4585,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "4700 Coal Avenue SE",
    "Site": "Highland High School",
    "ShootDate": 1306972800000,
    "OriginalDetails": "Highland High School - no ITC/no closures"
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 4586,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "8020 Central Avenue SE",
    "Site": "Fair N Square Food Store",
    "ShootDate": 1307404800000,
    "OriginalDetails": "Fair N' Square 8020 Central SE- no ITC/no closures"
   },
   "geometry": {
    "x": -106.5570764110677,
    "y": 35.074568617876345
   }
  },
  {
   "attributes": {
    "OBJECTID": 4587,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "2401 Jefferson Street NE",
    "Site": "Liberty Gym",
    "ShootDate": 1307664000000,
    "OriginalDetails": "Liberty Gym 2401 Jefferson NE - no ITC/no closure"
   },
   "geometry": {
    "x": -106.59323879441418,
    "y": 35.105588414808828
   }
  },
  {
   "attributes": {
    "OBJECTID": 4588,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "2525 Tingley Drive SW",
    "Site": "Tingley Beach Street driving scene",
    "ShootDate": 1307750400000,
    "OriginalDetails": "Tingley Drive - ITC Tingley btwn Alcalde and Marquez"
   },
   "geometry": {
    "x": -106.67922609934872,
    "y": 35.091179847152631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4589,
    "Title": "As Cool As I Am",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1906329/",
    "Address": "6521 Americas Parkway NE ",
    "Site": "Japanese Kitchen",
    "ShootDate": 1307750400000,
    "OriginalDetails": "Japanese Kitchen - no ITC/no closures"
   },
   "geometry": {
    "x": -106.57202909894059,
    "y": 35.100548361020977
   }
  },
  {
   "attributes": {
    "OBJECTID": 4590,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "111 Marble Avenue NW",
    "Site": "Alleyway between Granite Avenue NW and Marble Avenue NW",
    "ShootDate": 1277424000000,
    "OriginalDetails": "Alley btwn Granite & Marble, 1st & 2nd (close the alley)"
   },
   "geometry": {
    "x": -106.64657923693404,
    "y": 35.092588305641797
   }
  },
  {
   "attributes": {
    "OBJECTID": 4591,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "1200 2nd Street SW",
    "Site": "2nd Street SW between Cromwell Avenue SW and Bridge Boulevard SW",
    "ShootDate": 1277424000000,
    "OriginalDetails": "2nd btwn Cesar Chavez & Cromwell;  ITC 2nd btwn Cesar Chavez & Cromwell"
   },
   "geometry": {
    "x": -106.6514721806236,
    "y": 35.073640139355845
   }
  },
  {
   "attributes": {
    "OBJECTID": 4592,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "1318 Coal Avenue SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1278028800000,
    "OriginalDetails": "Roosevelt Park - no ITC, no closures"
   },
   "geometry": {
    "x": -106.66405503013196,
    "y": 35.082121014470651
   }
  },
  {
   "attributes": {
    "OBJECTID": 4593,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "1318 Coal Avenue SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1278547200000,
    "OriginalDetails": "Roosevelt Park - no ITC, no closures"
   },
   "geometry": {
    "x": -106.66405503013196,
    "y": 35.082121014470651
   }
  },
  {
   "attributes": {
    "OBJECTID": 4594,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1278633600000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4595,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "4700 Coal Avenue SE",
    "Site": "Highland High School",
    "ShootDate": 1278806400000,
    "OriginalDetails": "Highland High"
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 4596,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1278892800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4597,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "4700 Coal Avenue SE",
    "Site": "Highland High School",
    "ShootDate": 1278979200000,
    "OriginalDetails": "Highland High"
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 4598,
    "Title": "Beyond the Blackboard",
    "Type": "Movie aka Let Them Shine",
    "IMDbLink": "http://www.imdb.com/title/tt1699225/",
    "Address": "201 Bridge Boulevard SW",
    "Site": "Cesar Chavez Bridge",
    "ShootDate": null,
    "OriginalDetails": "Cesar Chavez Bridge btwn Broadway & 4th - ITC BNridge btwn 4th & Broadway/ 2rd @ Bridge.  Close?  Left Lane Bridge btwn 3rd & Broadway"
   },
   "geometry": {
    "x": -106.65441591758884,
    "y": 35.070096894402127
   }
  },
  {
   "attributes": {
    "OBJECTID": 4599,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1216166400000,
    "OriginalDetails": "Albuquerque Studios"
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4600,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1216252800000,
    "OriginalDetails": "Albuquerque Studios"
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4601,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1216684800000,
    "OriginalDetails": "Simms Building - 400 Gold Ave."
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4602,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1216771200000,
    "OriginalDetails": "Simms Building - 400 Gold Ave."
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4603,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1216 Central Avenue NW",
    "Site": "The Dog House Drive In",
    "ShootDate": 1216857600000,
    "OriginalDetails": "The Dog House - 1216 Central - ITC on Central from 11th to 14th St."
   },
   "geometry": {
    "x": -106.66140325282058,
    "y": 35.087901265331297
   }
  },
  {
   "attributes": {
    "OBJECTID": 4604,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5500 Broadway Boulevard SE",
    "Site": "All Mini Trucks",
    "ShootDate": 1216857600000,
    "OriginalDetails": "All Mini Truck and Mini Van - 5500 Broadway SE"
   },
   "geometry": {
    "x": -106.65193833708575,
    "y": 35.000091417909708
   }
  },
  {
   "attributes": {
    "OBJECTID": 4605,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1001 Central Avenue NE",
    "Site": "Crossroads Motel",
    "ShootDate": 1217203200000,
    "OriginalDetails": "Crossroads Motel (1001 Central Ave. NE) - Closure on Mulberry from Central to Copper"
   },
   "geometry": {
    "x": -106.63615181499986,
    "y": 35.08263334568273
   }
  },
  {
   "attributes": {
    "OBJECTID": 4606,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1217203200000,
    "OriginalDetails": "Simms Building (400 Gold Ave.) - ITC on 4th St. from Gold to S. of Gold Ave. "
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4607,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5550 Gibson Boulevard SE",
    "Site": "Bus stop east of Valencia on Gibson Boulevard SE",
    "ShootDate": 1217548800000,
    "OriginalDetails": "Bus stop east of Valencia on Gibson - ITC on Gibson from Cardenas Dr. NE to W. of Valencia"
   },
   "geometry": {
    "x": -106.57988801289865,
    "y": 35.058297445484278
   }
  },
  {
   "attributes": {
    "OBJECTID": 4608,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5550 Gibson Boulevard SE",
    "Site": "Bus stop east of Valencia on Gibson Boulevard SE",
    "ShootDate": 1217635200000,
    "OriginalDetails": "Bus stop east of Valencia on Gibson - ITC on Gibson from Cardenas Dr. NE to W. of Valencia"
   },
   "geometry": {
    "x": -106.57988801289865,
    "y": 35.058297445484278
   }
  },
  {
   "attributes": {
    "OBJECTID": 4609,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "225 Yale Boulevard SE",
    "Site": "TriH Convenience Store",
    "ShootDate": 1218499200000,
    "OriginalDetails": "225 Yale SE Tri-H Store closure "
   },
   "geometry": {
    "x": -106.62212045006216,
    "y": 35.077101258388844
   }
  },
  {
   "attributes": {
    "OBJECTID": 4610,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "225 Yale Boulevard SE",
    "Site": "TriH Convenience Store",
    "ShootDate": 1218499200000,
    "OriginalDetails": "Tri-H Convenience Store"
   },
   "geometry": {
    "x": -106.62212045006216,
    "y": 35.077101258388844
   }
  },
  {
   "attributes": {
    "OBJECTID": 4611,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "120 Woodward Road SW",
    "Site": "Reynolds Auto Service",
    "ShootDate": 1218672000000,
    "OriginalDetails": "120 Woodward SW"
   },
   "geometry": {
    "x": -106.65608710291922,
    "y": 35.049444759138083
   }
  },
  {
   "attributes": {
    "OBJECTID": 4612,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "120 Woodward Road SW",
    "Site": "Reynolds Auto Service",
    "ShootDate": 1218758400000,
    "OriginalDetails": "120 Woodward SW"
   },
   "geometry": {
    "x": -106.65608710291922,
    "y": 35.049444759138083
   }
  },
  {
   "attributes": {
    "OBJECTID": 4613,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1219363200000,
    "OriginalDetails": "Simms Building"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4614,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1220832000000,
    "OriginalDetails": "Simms Building"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4615,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "2525 Tingley Drive SW",
    "Site": "Tingley Beach Street driving scene",
    "ShootDate": 1221091200000,
    "OriginalDetails": "Tingley Dr. - Rolling ITC"
   },
   "geometry": {
    "x": -106.67922609934872,
    "y": 35.091179847152631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4616,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1905 Mountain Road NW ",
    "Site": "National Atomic Museum moved and is now the Alice King Community School",
    "ShootDate": 1222128000000,
    "OriginalDetails": "National Atomic Museum1905 Mountain Rd. NW - close 20th between Mountain and Bellamah (between 5am - 11am)"
   },
   "geometry": {
    "x": -106.66712444230376,
    "y": 35.098161772623847
   }
  },
  {
   "attributes": {
    "OBJECTID": 4617,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1901 University Boulevard SE",
    "Site": "Vagabond Executive Inn Albuquerque closed",
    "ShootDate": 1222732800000,
    "OriginalDetails": "Vagabond Inn-1901 University SE"
   },
   "geometry": {
    "x": -106.63172162136094,
    "y": 35.06102732858043
   }
  },
  {
   "attributes": {
    "OBJECTID": 4618,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1222732800000,
    "OriginalDetails": "Simms Building - 400 Gold Ave. - No closure/no ITC"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4619,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1223251200000,
    "OriginalDetails": "Simms Building - no closures or ITC"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4620,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1101 Park Avenue SW",
    "Site": "Washington Middle School Park",
    "ShootDate": 1223337600000,
    "OriginalDetails": "Washington Middle School Park - ITC/Closure on Gold from 9th to 11th; Park, from 9th to 11th; 10th, from Tijeras to Silver"
   },
   "geometry": {
    "x": -106.66000116502008,
    "y": 35.085380800150801
   }
  },
  {
   "attributes": {
    "OBJECTID": 4621,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1009 Bradbury Drive SE",
    "Site": "State Land Office",
    "ShootDate": 1223856000000,
    "OriginalDetails": "State Land Office"
   },
   "geometry": {
    "x": -106.63274892663502,
    "y": 35.069728612310982
   }
  },
  {
   "attributes": {
    "OBJECTID": 4622,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "9621 Menaul Boulevard NE",
    "Site": "Taco Sal Restaurant",
    "ShootDate": 1226448000000,
    "OriginalDetails": "9621 Menaul Blvd. NE - Taco Sal's"
   },
   "geometry": {
    "x": -106.53426607855624,
    "y": 35.108975262413288
   }
  },
  {
   "attributes": {
    "OBJECTID": 4623,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "801 University Boulevard SE",
    "Site": "UNM Science and Technology Park",
    "ShootDate": 1226966400000,
    "OriginalDetails": "UNM Science & Tech Park"
   },
   "geometry": {
    "x": -106.63000437042278,
    "y": 35.073004793291169
   }
  },
  {
   "attributes": {
    "OBJECTID": 4624,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1228694400000,
    "OriginalDetails": "Simms building"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4625,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1229040000000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4626,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1410 Central Avenue SW",
    "Site": "Castle Apartments burnt and torn down in 2010",
    "ShootDate": 1250553600000,
    "OriginalDetails": "Central Ave /Burnt Apt Building  "
   },
   "geometry": {
    "x": -106.66321410551637,
    "y": 35.088854349303773
   }
  },
  {
   "attributes": {
    "OBJECTID": 4627,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "4257 Isleta Boulevard SW",
    "Site": "Twisters",
    "ShootDate": 1250553600000,
    "OriginalDetails": "Twisters- County"
   },
   "geometry": {
    "x": -106.68545541188922,
    "y": 35.014936521659202
   }
  },
  {
   "attributes": {
    "OBJECTID": 4628,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "3901 University Boulevard SE",
    "Site": "University Boulevard SE between Clark Carr Road SE and Rio Bravo Boulevard SE",
    "ShootDate": 1250726400000,
    "OriginalDetails": "University / Clark Carr drive shot- ITC on University nb from Rio Bravo to Clark Carr"
   },
   "geometry": {
    "x": -106.63508084890803,
    "y": 35.023246615707784
   }
  },
  {
   "attributes": {
    "OBJECTID": 4629,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "11000 Broadway Boulevard SE",
    "Site": "Isleta Resort and Casino formerly called Hard Rock Casino",
    "ShootDate": 1251158400000,
    "OriginalDetails": "Isleta Casino"
   },
   "geometry": {
    "x": -106.6608103090375,
    "y": 34.960087728327032
   }
  },
  {
   "attributes": {
    "OBJECTID": 4630,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1617 Candelaria Road NE",
    "Site": "Delta Uniforms and Linens",
    "ShootDate": 1251417600000,
    "OriginalDetails": "Delta Linen - 1617 Candelaria NE"
   },
   "geometry": {
    "x": -106.62763929312928,
    "y": 35.114900130432957
   }
  },
  {
   "attributes": {
    "OBJECTID": 4631,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1600 Kit Carson Avenue SW",
    "Site": "Kit Carson Park",
    "ShootDate": 1251763200000,
    "OriginalDetails": "Kit Carson Park- no ITC/no Closures - reduced unit"
   },
   "geometry": {
    "x": -106.66872832405643,
    "y": 35.08286304536049
   }
  },
  {
   "attributes": {
    "OBJECTID": 4632,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "320 Central Avenue SW",
    "Site": "Rosenwald Building",
    "ShootDate": 1251763200000,
    "OriginalDetails": "320 Central (Rosenwald Bldg) No ITC/ No Closure"
   },
   "geometry": {
    "x": -106.6512043640913,
    "y": 35.084493620356852
   }
  },
  {
   "attributes": {
    "OBJECTID": 4633,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1251849600000,
    "OriginalDetails": "415 Tijeras Bernallio Cty Courthouse- ITC on 5th St from Marquette to 6th st nb,sb/ eastbound lane closure on Tijeras fr 5th to 4th st "
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4634,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "201 Prosperity Avenue SE",
    "Site": "Mountain View Community Center",
    "ShootDate": 1251936000000,
    "OriginalDetails": "Mountain View Community Center - bernalillo county"
   },
   "geometry": {
    "x": -106.65737267204085,
    "y": 35.015061879104969
   }
  },
  {
   "attributes": {
    "OBJECTID": 4635,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE driving shot",
    "ShootDate": 1251936000000,
    "OriginalDetails": "Bobby Foster Road - County - driving shot"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4636,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "3010 Eubank Boulevard NE",
    "Site": "Silva Lanes",
    "ShootDate": 1252540800000,
    "OriginalDetails": "Silva Lanes - 3010 Eubank NE interior"
   },
   "geometry": {
    "x": -106.53322140345784,
    "y": 35.116366734586421
   }
  },
  {
   "attributes": {
    "OBJECTID": 4637,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "224 San Pasquale Avenue SW",
    "Site": "Albuquerque Little Theatre parking lot",
    "ShootDate": 1252627200000,
    "OriginalDetails": "Albuquerque Little Theatre parking lot"
   },
   "geometry": {
    "x": -106.66931048805608,
    "y": 35.091496418416263
   }
  },
  {
   "attributes": {
    "OBJECTID": 4638,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1119 Candelaria Road NW",
    "Site": "Leos Bar",
    "ShootDate": 1252972800000,
    "OriginalDetails": "Leo's bar 1119 Candelaria NW"
   },
   "geometry": {
    "x": -106.65445768745292,
    "y": 35.122574070389035
   }
  },
  {
   "attributes": {
    "OBJECTID": 4639,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "9615 Broadway Boulevard SE",
    "Site": "Cal Maine Chicken Farm",
    "ShootDate": 1253059200000,
    "OriginalDetails": "Cal-Maine - 9615 Broadway SE - COUNTY"
   },
   "geometry": {
    "x": -106.66085313981193,
    "y": 34.959641819025592
   }
  },
  {
   "attributes": {
    "OBJECTID": 4640,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "2200 Sunport Boulevard SE",
    "Site": "Albuquerque International Sunport",
    "ShootDate": 1253491200000,
    "OriginalDetails": "Sunport"
   },
   "geometry": {
    "x": -106.6186417358025,
    "y": 35.049710416686651
   }
  },
  {
   "attributes": {
    "OBJECTID": 4641,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "11300 Montgomery Boulevard NE",
    "Site": "Eldorado High School",
    "ShootDate": 1253664000000,
    "OriginalDetails": "El Dorado High School - 11300 Montgomery NE"
   },
   "geometry": {
    "x": -106.51274833370375,
    "y": 35.130655075502339
   }
  },
  {
   "attributes": {
    "OBJECTID": 4642,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "2000 Commerical Street NE",
    "Site": "Intersection of Indian School Road NE and Commercial Street NE",
    "ShootDate": 1253750400000,
    "OriginalDetails": "Intersection of Indian School & Commercial- no ITC/ Street Closure on Commercial fr Arvada to McKnight and a street closure on Indian School fr 1st to Broadway"
   },
   "geometry": {
    "x": -106.65038364977302,
    "y": 35.062987899742673
   }
  },
  {
   "attributes": {
    "OBJECTID": 4643,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "8100 Sage Road SW",
    "Site": "Intersection of Sage Road SW and Unser Boulevard SW",
    "ShootDate": 1253836800000,
    "OriginalDetails": "Intersection of Unser & Sage- no ITC/ Street Closure on Sage eb, wb fr Coors to 86th st/ Street Closure Unser Blvd nb, sb fr Tower to Arenal/ Street Closure on San Iygnacio eb, wb from Tower rd to 86th st. 10am-4pm"
   },
   "geometry": {
    "x": -106.72247792852697,
    "y": 35.058095633323497
   }
  },
  {
   "attributes": {
    "OBJECTID": 4644,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1254960000000,
    "OriginalDetails": "Simms Building"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4645,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1255046400000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4646,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1255132800000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4647,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5600 University Boulevard SE",
    "Site": "University Boulevard SE between Bobby Foster Road and Sunport Boulevard SE",
    "ShootDate": 1255564800000,
    "OriginalDetails": "University Blvd- ITC on University fr Bobby Foster to Sunport Blvd nb,sb"
   },
   "geometry": {
    "x": -106.62172715505436,
    "y": 34.997153803092878
   }
  },
  {
   "attributes": {
    "OBJECTID": 4648,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1617 Candelaria Road NE",
    "Site": "Delta Uniforms and Linens",
    "ShootDate": 1256083200000,
    "OriginalDetails": "Delta Linen - 1617 Candelaria NE"
   },
   "geometry": {
    "x": -106.62763929312928,
    "y": 35.114900130432957
   }
  },
  {
   "attributes": {
    "OBJECTID": 4649,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1256083200000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4650,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1257379200000,
    "OriginalDetails": "5400 Gibson SE- closure of pedestrian bridge"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4651,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1257379200000,
    "OriginalDetails": "5400 Gibson SE- closure of pedestrian bridge"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4652,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1257379200000,
    "OriginalDetails": "5400 Gibson SE- Right hand eastbound lane closure on Gibson  between Madiera to Valencia"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4653,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1257465600000,
    "OriginalDetails": "5400 Gibson SE- Right hand eastbound lane closure on Gibson  between Madiera to Valencia"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4654,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1257724800000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4655,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1258329600000,
    "OriginalDetails": "Bobby Foster Road"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4656,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "9200 Broadway Boulevard Southeast,",
    "Site": "Interstate 25 southbound on ramp at Broadway Boulevard",
    "ShootDate": 1258416000000,
    "OriginalDetails": "i-25 onramp @ sb @ Broadway 8:30am - 3:30pm"
   },
   "geometry": {
    "x": -106.66055021262679,
    "y": 34.961177473961257
   }
  },
  {
   "attributes": {
    "OBJECTID": 4657,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "9615 Broadway Boulevard SE",
    "Site": "Cal Maine Chicken Farm",
    "ShootDate": 1258416000000,
    "OriginalDetails": "9615 Broadway SE-Chicken Farm-Cal Maine-COUNTY"
   },
   "geometry": {
    "x": -106.66085313981193,
    "y": 34.959641819025592
   }
  },
  {
   "attributes": {
    "OBJECTID": 4658,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "4500 Osuna Rd NE",
    "Site": "Presidential Plaza Quiznos and  Zen Nail Spa",
    "ShootDate": 1258502400000,
    "OriginalDetails": "Presidential Plaza - Quiznos & Zen Nail Spa 4500 Osuna"
   },
   "geometry": {
    "x": -106.65084882617322,
    "y": 34.995785010651744
   }
  },
  {
   "attributes": {
    "OBJECTID": 4659,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "2210 Silver Avenue SE",
    "Site": "University Heights Methodist Church",
    "ShootDate": 1258588800000,
    "OriginalDetails": "University Heights Methodist Church - 2210 Silver SE"
   },
   "geometry": {
    "x": -106.6208362023623,
    "y": 35.079079124432717
   }
  },
  {
   "attributes": {
    "OBJECTID": 4660,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1617 Candelaria Road NE",
    "Site": "Delta Uniforms and Linens",
    "ShootDate": 1260230400000,
    "OriginalDetails": "Delta Linen - 1617 Candelaria NE"
   },
   "geometry": {
    "x": -106.62763929312928,
    "y": 35.114900130432957
   }
  },
  {
   "attributes": {
    "OBJECTID": 4661,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "9621 Menaul Boulevard NE",
    "Site": "Taco Sal Restaurant",
    "ShootDate": 1260748800000,
    "OriginalDetails": "Taco Sal's - 9621 Menaul Blvd. NE - no ITC/no closure"
   },
   "geometry": {
    "x": -106.53426607855624,
    "y": 35.108975262413288
   }
  },
  {
   "attributes": {
    "OBJECTID": 4662,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1000 Juan Tabo Boulevard NE",
    "Site": "Pauls Monterey Inn",
    "ShootDate": 1262736000000,
    "OriginalDetails": "Paul's Monterrey Inn - 1000 Juan Tabo NE"
   },
   "geometry": {
    "x": -106.51502401874502,
    "y": 35.088341552177631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4663,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "3420 La Sala Grande NE",
    "Site": "La Sala Grande Community",
    "ShootDate": 1262736000000,
    "OriginalDetails": "Comanche Blvd at La Sala Grande (La Sala Grande Community)-Rolling ITC on La Sala Grande Ct."
   },
   "geometry": {
    "x": -106.54549493336948,
    "y": 35.123009178830252
   }
  },
  {
   "attributes": {
    "OBJECTID": 4664,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1001 Central Avenue NE",
    "Site": "Crossroads Motel",
    "ShootDate": 1263168000000,
    "OriginalDetails": "Crossroads Motel - 1001 Central NE"
   },
   "geometry": {
    "x": -106.63615181499986,
    "y": 35.08263334568273
   }
  },
  {
   "attributes": {
    "OBJECTID": 4665,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "9615 Broadway Boulevard SE",
    "Site": "Cal Maine Chicken Farm",
    "ShootDate": 1263254400000,
    "OriginalDetails": "9615 Broadway SE-Chicken Farm-Cal Maine-COUNTY"
   },
   "geometry": {
    "x": -106.66085313981193,
    "y": 34.959641819025592
   }
  },
  {
   "attributes": {
    "OBJECTID": 4666,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "12000 Indian School Road NE",
    "Site": "Indian School Road NE between Juan Tabo Boulevard and Chelwood Park driving shot",
    "ShootDate": 1263945600000,
    "OriginalDetails": "Indian School between Juan Tabo and Chelwood Park- Rolling ITC on Indian School eb,wb from Juan Tabo to Chelwood Park"
   },
   "geometry": {
    "x": -106.51304627164585,
    "y": 35.10137987056401
   }
  },
  {
   "attributes": {
    "OBJECTID": 4667,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "2608 Central Avenue SE",
    "Site": "Dennys",
    "ShootDate": 1294876800000,
    "OriginalDetails": "Denny's - 2608 Central Ave. SE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.6166759901955,
    "y": 35.080957054128682
   }
  },
  {
   "attributes": {
    "OBJECTID": 4668,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "4610 Eubank Boulevard NE",
    "Site": "Mesa Verde Apartments",
    "ShootDate": 1294963200000,
    "OriginalDetails": "Mesa Verde Apartments- 4610 Eubank. NE"
   },
   "geometry": {
    "x": -106.53331704618783,
    "y": 35.132842369734945
   }
  },
  {
   "attributes": {
    "OBJECTID": 4669,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "9800 Montgomery Boulevard NE",
    "Site": "Pelicans Restaurant",
    "ShootDate": 1294963200000,
    "OriginalDetails": "9800 Montgomery NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.53208450102413,
    "y": 35.130624631829832
   }
  },
  {
   "attributes": {
    "OBJECTID": 4670,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "4611 Central Avenue NE",
    "Site": "Zia Motor Lodge sign",
    "ShootDate": 1295827200000,
    "OriginalDetails": "4611 Central Ave. - Zia Motor Lodge Madison closure from Central Ave to Copper NB/SB"
   },
   "geometry": {
    "x": -106.59275332866497,
    "y": 35.078472398959711
   }
  },
  {
   "attributes": {
    "OBJECTID": 4671,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "5603 Menaul Boulevard NE",
    "Site": "Louies Pub and Grill",
    "ShootDate": 1296000000000,
    "OriginalDetails": "5603 Menaul NE (Louies pub)"
   },
   "geometry": {
    "x": -106.58249338144584,
    "y": 35.109145815808908
   }
  },
  {
   "attributes": {
    "OBJECTID": 4672,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "12700 Montgomery Boulevard NE",
    "Site": "APD Substation",
    "ShootDate": 1297123200000,
    "OriginalDetails": "APD Substation - 12700 Montgomery - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.49582280532977,
    "y": 35.130670993076123
   }
  },
  {
   "attributes": {
    "OBJECTID": 4673,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "5110 Copper Avenue NE",
    "Site": "Albuquerque Indoor Karting",
    "ShootDate": 1297296000000,
    "OriginalDetails": "Albuquerque Indoor Karting - 5110 Copper NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.58758514925721,
    "y": 35.080158979060457
   }
  },
  {
   "attributes": {
    "OBJECTID": 4674,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "4710 Juan Tabo Boulevard NE",
    "Site": "Hope Evangelical Church",
    "ShootDate": 1298505600000,
    "OriginalDetails": "Hope Evangelical Church - "
   },
   "geometry": {
    "x": -106.51566572038678,
    "y": 35.135425476279906
   }
  },
  {
   "attributes": {
    "OBJECTID": 4675,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1298937600000,
    "OriginalDetails": "Los Picaros Rd (Near University Bridge)- ITC on Los Picaros from Bobby Foster to Ira Sprektor (eb, wb) "
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 4676,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1299801600000,
    "OriginalDetails": "Railyards - ITC on 1st."
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4677,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "4500 Central Avenue SE",
    "Site": "Loyolas Family Restaurant",
    "ShootDate": 1300320000000,
    "OriginalDetails": "Loyola's 4500 Central Ave - Close Adams btwn Central and Silver"
   },
   "geometry": {
    "x": -106.5943005788255,
    "y": 35.078615257675352
   }
  },
  {
   "attributes": {
    "OBJECTID": 4678,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "4525 Lomas Boulevard NE",
    "Site": "Affordable Auto Sales",
    "ShootDate": 1300320000000,
    "OriginalDetails": "Affordable Auto Sales - 4525 Lomas NE - ITC Lomas btwn Jefferson & Washington & ITC:  Adams btwn Lomas & Marble"
   },
   "geometry": {
    "x": -106.59431857118233,
    "y": 35.08743502374314
   }
  },
  {
   "attributes": {
    "OBJECTID": 4679,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1300752000000,
    "OriginalDetails": "Bobby Foster Road - Bernalillo County"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4680,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1301356800000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4681,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1301443200000,
    "OriginalDetails": "Simms Building - 400 Gold SW - ITC 4th btwn Gold and Silver"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4682,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "2210 Silver Avenue SE",
    "Site": "University Heights Methodist Church",
    "ShootDate": 1301529600000,
    "OriginalDetails": "Church - 2210 Silver SE"
   },
   "geometry": {
    "x": -106.6208362023623,
    "y": 35.079079124432717
   }
  },
  {
   "attributes": {
    "OBJECTID": 4683,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "9516 Snow Heights Circle NE",
    "Site": "Octopus Car Wash",
    "ShootDate": 1301529600000,
    "OriginalDetails": "Octopus Car Wash - 9516 Snow Heights - ITC Snowheights btwn Menaul and Eubank"
   },
   "geometry": {
    "x": -106.53572969556383,
    "y": 35.108820757638235
   }
  },
  {
   "attributes": {
    "OBJECTID": 4684,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1302134400000,
    "OriginalDetails": "Amy Biehl HS - no ITC/ no closures"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 4685,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "9615 Broadway Boulevard SE",
    "Site": "Cal Maine Chicken Farm",
    "ShootDate": 1302825600000,
    "OriginalDetails": "Chicken Farm - Bernalillo County"
   },
   "geometry": {
    "x": -106.66085313981193,
    "y": 34.959641819025592
   }
  },
  {
   "attributes": {
    "OBJECTID": 4686,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "5700 University Boulevard SE",
    "Site": "Airplane landing in Mesa Del Sol area",
    "ShootDate": 1304985600000,
    "OriginalDetails": "Airplane Landing @ Mesa Del Sol"
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 4687,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "2300 Aztec Road NE",
    "Site": "Driving grid of Princeton Drive NE and Aztec Road NE and Girard Boulevard NE and Candelaria Road NE",
    "ShootDate": 1305244800000,
    "OriginalDetails": "Driving grids - Princeton/Aztec/Girard/Candelaria - Rolling ITC"
   },
   "geometry": {
    "x": -106.62024858469056,
    "y": 35.120184009284891
   }
  },
  {
   "attributes": {
    "OBJECTID": 4688,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "2900 Girard Boulevard NE",
    "Site": "Girard Boulevard NE and Los Arboles Avenue NE intersection",
    "ShootDate": 1305244800000,
    "OriginalDetails": "Intersection of Girard and Los Arboles. No ITC. Street closure on Los Arboles from Vassar to Girard, EB/WB. "
   },
   "geometry": {
    "x": -106.61379087548909,
    "y": 35.114395422228426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4689,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "320 Gold Avenue SW",
    "Site": "New Mexico Bank and Trust",
    "ShootDate": 1306281600000,
    "OriginalDetails": "320 Gold SW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.6516571913513,
    "y": 35.083521838758791
   }
  },
  {
   "attributes": {
    "OBJECTID": 4690,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1306281600000,
    "OriginalDetails": "415 Tijeras NW - ITC Tijeras btwn 5th & 3rd/ ITC 5th btwn Copper & Marquette"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4691,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Dragway Road near Los Picaros Road SE",
    "ShootDate": 1306800000000,
    "OriginalDetails": "Dragway Rd.  ITC on Dragway road (near Los Picaros)"
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 4692,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1306972800000,
    "OriginalDetails": "Gibson Medical Center - No ITC/No closures"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4693,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1307059200000,
    "OriginalDetails": "Gibson Medical Center - No ITC/No closures"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4694,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "476 Copper Avenue NW",
    "Site": "Copper Avenue NW and 5th Parking Garage",
    "ShootDate": 1307404800000,
    "OriginalDetails": "5th & Copper Parking Garage - close eb Copper btwn 5th & 3rd."
   },
   "geometry": {
    "x": -106.65263586812409,
    "y": 35.085701694908323
   }
  },
  {
   "attributes": {
    "OBJECTID": 4695,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Dragway Road near Los Picaros Road SE",
    "ShootDate": 1307923200000,
    "OriginalDetails": "Dragway Rd.  ITC on Dragway road (near Los Picaros)"
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 4696,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1736 Central Avenue SW",
    "Site": "Garcias Kitchen",
    "ShootDate": 1308009600000,
    "OriginalDetails": "Garcia's -  1736 Central SW - Close EB Central btwn Rancho Seco & Laguna - Traffic shift to WB Central"
   },
   "geometry": {
    "x": -106.66676047010345,
    "y": 35.091764168465744
   }
  },
  {
   "attributes": {
    "OBJECTID": 4697,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "100 Pacific Avenue SE",
    "Site": "Commercial Street SE and Pacific Avenue SE intersection",
    "ShootDate": null,
    "OriginalDetails": "Intersection of Commercial and Pacific - Close commercial between Cromwell and Broadway/ close Pacific between Commercial and William"
   },
   "geometry": {
    "x": -106.648615027777,
    "y": 35.074388830982002
   }
  },
  {
   "attributes": {
    "OBJECTID": 4698,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "300 Gold Avenue SW",
    "Site": "Gold Avenue SW between 3rd and 4th Street phone booth",
    "ShootDate": null,
    "OriginalDetails": "Gold Ave. between 3rd & 4th St. (phone booth) - ITC on Gold from 3rd to 4th St."
   },
   "geometry": {
    "x": -106.65062537473787,
    "y": 35.083387303420864
   }
  },
  {
   "attributes": {
    "OBJECTID": 4699,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "2241 Phoenix Avenue NE",
    "Site": "Gonzalez Mechanical",
    "ShootDate": null,
    "OriginalDetails": "Gonzales Mechanical - 2241 Phoenix NE"
   },
   "geometry": {
    "x": -106.61805960144724,
    "y": 35.11102671790124
   }
  },
  {
   "attributes": {
    "OBJECTID": 4700,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "2241 Phoenix Avenue NE",
    "Site": "Gonzalez Mechanical",
    "ShootDate": null,
    "OriginalDetails": "Gonzales Mechanical - 2241 Phoenix NE"
   },
   "geometry": {
    "x": -106.61805960144724,
    "y": 35.11102671790124
   }
  },
  {
   "attributes": {
    "OBJECTID": 4701,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5601 University Boulevard SE",
    "Site": "Isleta Amphitheater parking lot formerly called Journal Pavilion",
    "ShootDate": null,
    "OriginalDetails": "Journal Pavilion Parking lot"
   },
   "geometry": {
    "x": -106.62177349734323,
    "y": 34.995465777434681
   }
  },
  {
   "attributes": {
    "OBJECTID": 4702,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "9800 Montgomery Boulevard NE",
    "Site": "Luckys Lounge",
    "ShootDate": null,
    "OriginalDetails": "Lucky's Lounge r - 9800 Montgomery Suite 3"
   },
   "geometry": {
    "x": -106.53208450102413,
    "y": 35.130624631829832
   }
  },
  {
   "attributes": {
    "OBJECTID": 4703,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "616 Central SW",
    "Site": null,
    "ShootDate": 1173398400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65475577990522,
    "y": 35.08494938826081
   }
  },
  {
   "attributes": {
    "OBJECTID": 4704,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "9201 Balloon Museum Drive NE",
    "Site": "Albuquerque Balloon Musuem",
    "ShootDate": 1190073600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59778427514172,
    "y": 35.186578900351641
   }
  },
  {
   "attributes": {
    "OBJECTID": 4705,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "1001 Central NE",
    "Site": "Crossroads Motel",
    "ShootDate": 1190246400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63615181499986,
    "y": 35.08263334568273
   }
  },
  {
   "attributes": {
    "OBJECTID": 4706,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "205 Rio Bravo SW",
    "Site": "Raks Building Supply",
    "ShootDate": 1190246400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65881695460857,
    "y": 35.027273846260826
   }
  },
  {
   "attributes": {
    "OBJECTID": 4707,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1191196800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4708,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1191283200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4709,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1191369600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4710,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1191456000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4711,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1191542400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4712,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1192406400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4713,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5018 Lomas NE",
    "Site": "Danny's Auto Service",
    "ShootDate": 1192492800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58869448688641,
    "y": 35.087391299583132
   }
  },
  {
   "attributes": {
    "OBJECTID": 4714,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1192579200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4715,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1192665600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4716,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "225 Gold SW",
    "Site": "Sunrise Bank Building",
    "ShootDate": 1192752000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6503938115155,
    "y": 35.08338575528731
   }
  },
  {
   "attributes": {
    "OBJECTID": 4717,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "225 Yale Boulevard SE",
    "Site": "Tri H Store",
    "ShootDate": 1192752000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62212045006216,
    "y": 35.077101258388844
   }
  },
  {
   "attributes": {
    "OBJECTID": 4718,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "313 Gold SW",
    "Site": "Burt's Tiki Lounge",
    "ShootDate": 1192752000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65130113600361,
    "y": 35.083503234721356
   }
  },
  {
   "attributes": {
    "OBJECTID": 4719,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "1105 Central Avenue NW",
    "Site": "Wash Tub Laundromat",
    "ShootDate": 1194307200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65988133874431,
    "y": 35.087271083933565
   }
  },
  {
   "attributes": {
    "OBJECTID": 4720,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "906 Park SW",
    "Site": "Java Joe's",
    "ShootDate": 1194307200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65782147844163,
    "y": 35.085316075611949
   }
  },
  {
   "attributes": {
    "OBJECTID": 4721,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "906 Park SW",
    "Site": "Java Joe's",
    "ShootDate": 1194393600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65782147844163,
    "y": 35.085316075611949
   }
  },
  {
   "attributes": {
    "OBJECTID": 4722,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1194912000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4723,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1194998400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4724,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "11300 Montomgery Blvd. NE",
    "Site": "Eldorado High School",
    "ShootDate": 1195084800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.51274833370375,
    "y": 35.130655075502339
   }
  },
  {
   "attributes": {
    "OBJECTID": 4725,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "4201 2nd Street SW",
    "Site": "Water plant",
    "ShootDate": 1195171200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.658606919512,
    "y": 35.025550237502252
   }
  },
  {
   "attributes": {
    "OBJECTID": 4726,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5500 Broadway SE",
    "Site": "All Mini Trucks",
    "ShootDate": 1195257600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65193833708575,
    "y": 35.000091417909708
   }
  },
  {
   "attributes": {
    "OBJECTID": 4727,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1195603200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 4728,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/?ref_=fn_al_tt_1",
    "Address": "9516 Snow Heights Circle NE",
    "Site": "Octopus Car Wash",
    "ShootDate": 1362700800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53572969556383,
    "y": 35.108820757638235
   }
  },
  {
   "attributes": {
    "OBJECTID": 4729,
    "Title": "Camera Obscura",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1794754/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1280188800000,
    "OriginalDetails": "Bobby Foster - Bernalillo county"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4730,
    "Title": "Cineflix Productions",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "1 Civic Plaza NW",
    "Site": "City Hall Law Library",
    "ShootDate": 1278633600000,
    "OriginalDetails": "City Hall - law library"
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 4731,
    "Title": "CNM Student Film",
    "Type": "Movie CNM Student Film",
    "IMDbLink": "na",
    "Address": "4000 Central Avenue NE",
    "Site": "Central Avenue NE and Morningside Drive NE intersection",
    "ShootDate": 1307664000000,
    "OriginalDetails": "Central & Morningside - no ITC/no closures"
   },
   "geometry": {
    "x": -106.59983549904125,
    "y": 35.079206802838094
   }
  },
  {
   "attributes": {
    "OBJECTID": 4732,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1212451200000,
    "OriginalDetails": "5400 Gibson SE "
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4733,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "3000 Monte Vista Boulevard NE",
    "Site": "Alleyway between Monte Vista Boulevard NE and Dartmouth Drive NE",
    "ShootDate": 1212537600000,
    "OriginalDetails": "Alley off Monte Vista and Dartmouth - ITC on alley from Monte Vista to behind Central"
   },
   "geometry": {
    "x": -106.61197028325896,
    "y": 35.081507538930964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4734,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "600 1st Street NW",
    "Site": "1st Street NW and Roma Avenue NW intersection",
    "ShootDate": 1212537600000,
    "OriginalDetails": "1st & Roma NW - ITC on 1st from Lomas to Roma and Roma from 2nd to 1st"
   },
   "geometry": {
    "x": -106.64713568216712,
    "y": 35.088747496957843
   }
  },
  {
   "attributes": {
    "OBJECTID": 4735,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "600 1st Street NW",
    "Site": "1st Street NW and Roma Avenue NW intersection",
    "ShootDate": 1212624000000,
    "OriginalDetails": "1st & Roma NW - ITC on alley from Roma to 1st. Closure on 1st from Lomas to Roma and Roma from 2nd to 1st St."
   },
   "geometry": {
    "x": -106.64713568216712,
    "y": 35.088747496957843
   }
  },
  {
   "attributes": {
    "OBJECTID": 4736,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "3200 Gibson Boulevard SE",
    "Site": "Gibson Boulevard SE and Girard Boulevard SE intersection",
    "ShootDate": 1212710400000,
    "OriginalDetails": "Overflow lot south of Gibson on Girard (at the Sunport)"
   },
   "geometry": {
    "x": -106.61058161000058,
    "y": 35.058332743626309
   }
  },
  {
   "attributes": {
    "OBJECTID": 4737,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "301 San Pedro Drive NE",
    "Site": "Fade Tite Hair Studio",
    "ShootDate": 1213747200000,
    "OriginalDetails": "301 & 323 San Pedro - Barbershop scene - closure on Copper (no parking lane) from San Pedro to Cagua"
   },
   "geometry": {
    "x": -106.57747424062853,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 4738,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "1504 Central Avenue SE",
    "Site": "Copper Lounge",
    "ShootDate": 1214265600000,
    "OriginalDetails": "Copper Lounge - 1504 & 1400 Central SE - ITC on Central from Sycamore to 1/2 block E. of Maple. Closure on Maple from Central to Gold. "
   },
   "geometry": {
    "x": -106.63028963223789,
    "y": 35.08180855877638
   }
  },
  {
   "attributes": {
    "OBJECTID": 4739,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 3",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "100 Deputy Dean Miera Drive SW",
    "Site": "Metropolitan Detention Center",
    "ShootDate": 1214524800000,
    "OriginalDetails": "West Side Detention Center"
   },
   "geometry": {
    "x": -106.86000108005152,
    "y": 35.005425232988806
   }
  },
  {
   "attributes": {
    "OBJECTID": 4740,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 3",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "16001 Shooting Range Access Road NW",
    "Site": "Shooting Range Park",
    "ShootDate": 1214611200000,
    "OriginalDetails": "Shooting Range Road - ITC on Shooting Range Rd. from Paseo del Volcan to Shooting Range. Closure on Shooting Range Rd. from Sorting Plant Rd. to Shooting Range. "
   },
   "geometry": {
    "x": -106.85719034585061,
    "y": 35.134170571634961
   }
  },
  {
   "attributes": {
    "OBJECTID": 4741,
    "Title": "Crash",
    "Type": "TV Series Season 1 Episode 3",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "16001 Shooting Range Access Road NW",
    "Site": "Shooting Range Park",
    "ShootDate": 1214611200000,
    "OriginalDetails": "Shooting Range Road - ITC on Shooting Range Rd. from Paseo del Volcan to Shooting Range. Closure on Shooting Range Rd. from Sorting Plant Rd. to Shooting Range. "
   },
   "geometry": {
    "x": -106.85719034585061,
    "y": 35.134170571634961
   }
  },
  {
   "attributes": {
    "OBJECTID": 4742,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1215734400000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4743,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "901 Ridgecrest Drive SE",
    "Site": "Ridgecrest Park",
    "ShootDate": 1215993600000,
    "OriginalDetails": "Ridgecrest Park - ITC/rolling road block on Ridgecrest from Sundown to Monroe. Clsoure on Ridgecrest from Morningside to Parkland; Servia from Laurel Cir. To Ridgecrest; Laurel Circle from Laurel Dr. to Ridgecrest."
   },
   "geometry": {
    "x": -106.59998853693136,
    "y": 35.068039897627763
   }
  },
  {
   "attributes": {
    "OBJECTID": 4744,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "3200 Central Avenue SE",
    "Site": "Hiway House Motel",
    "ShootDate": 1216080000000,
    "OriginalDetails": "Hiway House Motel - 3200 Central Ave. SE"
   },
   "geometry": {
    "x": -106.60950283844723,
    "y": 35.08041594517325
   }
  },
  {
   "attributes": {
    "OBJECTID": 4745,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "3200 Central Avenue SE",
    "Site": "Hiway House Motel",
    "ShootDate": 1216166400000,
    "OriginalDetails": "Motel Hiway House"
   },
   "geometry": {
    "x": -106.60950283844723,
    "y": 35.08041594517325
   }
  },
  {
   "attributes": {
    "OBJECTID": 4746,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "2901 Candelaria Road NW",
    "Site": "Rio Grande Nature Center State Park",
    "ShootDate": 1217548800000,
    "OriginalDetails": "Rio Grande Nature Center"
   },
   "geometry": {
    "x": -106.68425086990788,
    "y": 35.128797365423438
   }
  },
  {
   "attributes": {
    "OBJECTID": 4747,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "3701 Carlisle Boulevard NE ",
    "Site": "First Unitarian Church",
    "ShootDate": 1217548800000,
    "OriginalDetails": "Unitarian Church"
   },
   "geometry": {
    "x": -106.60411933556082,
    "y": 35.122624567730973
   }
  },
  {
   "attributes": {
    "OBJECTID": 4748,
    "Title": "Crash",
    "Type": "TV Series Season 1 Christian and Joe",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "100 San Pedro Drive SE",
    "Site": "San Pedro Drive SE between Central Avenue SE and Gibson Boulevard SE",
    "ShootDate": 1218499200000,
    "OriginalDetails": "San Pedro btwn Central & Gibson - rolling ITC"
   },
   "geometry": {
    "x": -106.57742455570849,
    "y": 35.076757300732091
   }
  },
  {
   "attributes": {
    "OBJECTID": 4749,
    "Title": "Crash",
    "Type": "TV Series Season 1 Christian and Joe",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "301 San Pedro Drive NE",
    "Site": "Fade Tite Hair Studio",
    "ShootDate": 1218499200000,
    "OriginalDetails": "301 San Pedro"
   },
   "geometry": {
    "x": -106.57747424062853,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 4750,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "400 Central Avenue SW",
    "Site": "Central Avenue SW between 4th and 5th Streets SW",
    "ShootDate": 1220313600000,
    "OriginalDetails": "400 - 500 block of Central - ITC on Central from 4th to 5th"
   },
   "geometry": {
    "x": -106.65166134605948,
    "y": 35.084554357654717
   }
  },
  {
   "attributes": {
    "OBJECTID": 4751,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "400 Copper Avenue NW",
    "Site": "Copper Avenue between 4th and 5th Streets NW",
    "ShootDate": 1220313600000,
    "OriginalDetails": "400 Copper - closure on Copper from 4th - 5th"
   },
   "geometry": {
    "x": -106.65144879478179,
    "y": 35.085545627333971
   }
  },
  {
   "attributes": {
    "OBJECTID": 4752,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "100 Laguna Boulevard SW",
    "Site": "Laguna Boulevard SW between Central and San Pasquale Avenues SW",
    "ShootDate": 1220400000000,
    "OriginalDetails": "Laguna between Central & San Pasquale - ITC on Laguna from Central Ave. to San Pasquale (rolling road block)"
   },
   "geometry": {
    "x": -106.66500741231809,
    "y": 35.090200050903618
   }
  },
  {
   "attributes": {
    "OBJECTID": 4753,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "1425 San Mateo Boulevard NE",
    "Site": "Tullys Italian Deli and Meats",
    "ShootDate": 1221004800000,
    "OriginalDetails": "Tully's - 1425 San Mateo Blvd. NE"
   },
   "geometry": {
    "x": -106.58623698462824,
    "y": 35.092081213023988
   }
  },
  {
   "attributes": {
    "OBJECTID": 4754,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "2294 Wyoming Boulevard NE",
    "Site": "All Fours Strip Club closed",
    "ShootDate": 1221696000000,
    "OriginalDetails": "2294 Wyoming - All Fours Strip Club - no closure no ITC"
   },
   "geometry": {
    "x": -106.55087492833471,
    "y": 35.108647526400325
   }
  },
  {
   "attributes": {
    "OBJECTID": 4755,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "4100 Avenida La Resolana NE",
    "Site": "Prado Del Sol and Campo Manana Parks",
    "ShootDate": 1221782400000,
    "OriginalDetails": "Twin Parks/Del Sol Dividers - ITC between Avenida Del Resolano and Avenida Del Sol between Washinton and Morningside"
   },
   "geometry": {
    "x": -106.59816136813505,
    "y": 35.091735307482686
   }
  },
  {
   "attributes": {
    "OBJECTID": 4756,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "2114 Ridgecrest Drive SE",
    "Site": "Ridgecrest Drive SE driving shot",
    "ShootDate": 1222819200000,
    "OriginalDetails": "Ridgecrest Dr.  - driving shot no ITC"
   },
   "geometry": {
    "x": -106.58569091403839,
    "y": 35.057784792352734
   }
  },
  {
   "attributes": {
    "OBJECTID": 4757,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "300 Tijeras Avenue NW",
    "Site": "Tijeras Avenue NW between 3rd and 5th Streets NW",
    "ShootDate": 1224115200000,
    "OriginalDetails": "Tijeras from 5th to 3rd, 3rd from Tijeras to Central"
   },
   "geometry": {
    "x": -106.65003380358054,
    "y": 35.086529638569878
   }
  },
  {
   "attributes": {
    "OBJECTID": 4758,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "325 Central Avenue NW",
    "Site": "Maloneys Tavern alley",
    "ShootDate": 1224115200000,
    "OriginalDetails": "Alley off 4th (behind Maloneys) - No ITC, closure on Copper from 3rd to 5th"
   },
   "geometry": {
    "x": -106.65135298766012,
    "y": 35.084541198707043
   }
  },
  {
   "attributes": {
    "OBJECTID": 4759,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "510 2nd Street SW",
    "Site": "Alleyway between 2nd and 3rd Streets SW and Coal and Iron Avenues SW",
    "ShootDate": 1224115200000,
    "OriginalDetails": "Alley off 3rd between iron & coal - ITC on 3rd from coal to iron,on 2nd  fr. Coal to iron NB SB/  no closure"
   },
   "geometry": {
    "x": -106.65002210212566,
    "y": 35.079977602620801
   }
  },
  {
   "attributes": {
    "OBJECTID": 4760,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "5701 Gibson Boulevard SE",
    "Site": "Samurai Grill now called Izumi Sushi and Grill",
    "ShootDate": 1224115200000,
    "OriginalDetails": "5701 Gibson-Samurai Grill"
   },
   "geometry": {
    "x": -106.5785389903786,
    "y": 35.0582848565967
   }
  },
  {
   "attributes": {
    "OBJECTID": 4761,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "320 Central Avenue SW",
    "Site": "Rosenwald Building",
    "ShootDate": 1224460800000,
    "OriginalDetails": "320 Central - no ITC, no closure"
   },
   "geometry": {
    "x": -106.6512043640913,
    "y": 35.084493620356852
   }
  },
  {
   "attributes": {
    "OBJECTID": 4762,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "514 Central Avenue SW ",
    "Site": "514 Arts now called Levy Gallery",
    "ShootDate": 1224547200000,
    "OriginalDetails": "514 Central Ave. SW (514 Arts) - closure on 5th St. from Central to Gold"
   },
   "geometry": {
    "x": -106.65343120683227,
    "y": 35.084778935671963
   }
  },
  {
   "attributes": {
    "OBJECTID": 4763,
    "Title": "Crash",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=1&ref_=tt_eps_sn_1",
    "Address": "10000 Tramway Boulevard NE",
    "Site": "Tramway Boulevard NE driving shot",
    "ShootDate": 1224806400000,
    "OriginalDetails": "Tramway driving shot"
   },
   "geometry": {
    "x": -106.49610219755279,
    "y": 35.190344335146285
   }
  },
  {
   "attributes": {
    "OBJECTID": 4764,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1244160000000,
    "OriginalDetails": "500 Central SW/ ITC Central btwn 5th & 6th eb & wb"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 4765,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "301 San Pedro Drive NE",
    "Site": "Fade Tite Hair Studio",
    "ShootDate": 1244505600000,
    "OriginalDetails": "301 San Pedro NE - ITC San Pedro btwn Nambe & Domingo nb, sb/ ITC Copper btwn Cagua & San Pedro (eb) Close: Copper btwn Cagua & San Pedro wb"
   },
   "geometry": {
    "x": -106.57747424062853,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 4766,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "7801 Candelaria Road NE",
    "Site": "Sandia High School",
    "ShootDate": 1244678400000,
    "OriginalDetails": "7801 Candelaria NE- Sandia High School- ITC on Candelaria eb, wb from Utah to Pennsylvania"
   },
   "geometry": {
    "x": -106.55763151601438,
    "y": 35.116427339390548
   }
  },
  {
   "attributes": {
    "OBJECTID": 4767,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "4022 Rio Grande Boulevard NW",
    "Site": "Bookworks Bookstore",
    "ShootDate": 1244764800000,
    "OriginalDetails": "4022 Rio Grande Blvd (Bookworks Bookstore)- ITC on Rio Grande nb, sb fr Griegos to Dietz Pl."
   },
   "geometry": {
    "x": -106.66813403459706,
    "y": 35.138591378664515
   }
  },
  {
   "attributes": {
    "OBJECTID": 4768,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "2101 Central Avenue NW",
    "Site": "Central Avenue NW and Rio Grande Boulevard NW intersection",
    "ShootDate": 1244851200000,
    "OriginalDetails": "Rio Grande Blvd & Central Ave- ITC Rolling Road Block on Central eb, wb fr Rio Grande to Rio Grande Bridge- ITC on Rio Grande nb, sb fr Central to I-40"
   },
   "geometry": {
    "x": -106.67146155341125,
    "y": 35.095152567249421
   }
  },
  {
   "attributes": {
    "OBJECTID": 4769,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1245110400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4770,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "111 6th Street SW",
    "Site": "Alleyway between 6th and 7th Streets SW and Central and Gold Avenues SW",
    "ShootDate": 1245110400000,
    "OriginalDetails": "Alley btwn Central & Gold, 6th & 7th Sts."
   },
   "geometry": {
    "x": -106.65417127309931,
    "y": 35.083878896079618
   }
  },
  {
   "attributes": {
    "OBJECTID": 4771,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1600 Central Avenue SE",
    "Site": "Yasmines Café",
    "ShootDate": 1245110400000,
    "OriginalDetails": "1600 Central Ave (Yasmines Café) ITC on Central eb & wb from Pine to Maple/ ITC on Ash nb&sb from Gold to Central "
   },
   "geometry": {
    "x": -106.62907662632995,
    "y": 35.081660614199727
   }
  },
  {
   "attributes": {
    "OBJECTID": 4772,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1201 Mountain Road NE",
    "Site": "American Legion parking lot",
    "ShootDate": 1245801600000,
    "OriginalDetails": "American Legion Parking lot - 1201 Mountian NE"
   },
   "geometry": {
    "x": -106.63324593124408,
    "y": 35.09337996663043
   }
  },
  {
   "attributes": {
    "OBJECTID": 4773,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "201 California Street NE",
    "Site": "Albuquerque Downs Racetrack",
    "ShootDate": 1245801600000,
    "OriginalDetails": "The Downs at Expo NM"
   },
   "geometry": {
    "x": -106.57527227672939,
    "y": 35.077643858909262
   }
  },
  {
   "attributes": {
    "OBJECTID": 4774,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "7801 Candelaria Road NE",
    "Site": "Sandia High School",
    "ShootDate": 1245888000000,
    "OriginalDetails": "7801 Candelaria NE- Sandia High School- ITC on Candelaria eb, wb from Utah to Pennsylvania"
   },
   "geometry": {
    "x": -106.55763151601438,
    "y": 35.116427339390548
   }
  },
  {
   "attributes": {
    "OBJECTID": 4775,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "7801 Candelaria Road NE",
    "Site": "Sandia High School",
    "ShootDate": 1245974400000,
    "OriginalDetails": "7801 Candelaria NE- Sandia High School- ITC on Candelaria eb, wb from Utah to Pennsylvania"
   },
   "geometry": {
    "x": -106.55763151601438,
    "y": 35.116427339390548
   }
  },
  {
   "attributes": {
    "OBJECTID": 4776,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1246233600000,
    "OriginalDetails": "415 Tijeras- Tijeras eb from 5th to 4th/ parking lane & north lane"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4777,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1246320000000,
    "OriginalDetails": "500 Central ( Alley ) - Close Alley between 5th and 6th eb, wb"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 4778,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "615 Gold Avenue SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1246320000000,
    "OriginalDetails": "615 Gold SW- Close Alley behind Valliant on 6th from 7th eb, wb"
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 4779,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "100 Roma Avenue NW",
    "Site": "Roma Avenue NW and 1st Street NW intersection",
    "ShootDate": 1247529600000,
    "OriginalDetails": "100 Roma NW- ITC on 1st st nb,sb from Lomas to Convention Center/ Street Closure on Roma nb,sb fr 1st to Tracks. Sidewalk closure westside of 1st from Lomas to Roma/ Sidewalk closure on northside of Roma fr 1st to 2nd"
   },
   "geometry": {
    "x": -106.64719630856733,
    "y": 35.088710658791513
   }
  },
  {
   "attributes": {
    "OBJECTID": 4780,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "100 Roma Avenue NW",
    "Site": "Roma Avenue NW and 1st Street NW intersection",
    "ShootDate": 1247616000000,
    "OriginalDetails": "100 Roma NW- ITC on 1st st nb,sb from Lomas to Convention Center/ Street Closure on Roma nb,sb fr 1st to Tracks. Sidewalk closure westside of 1st from Lomas to Roma/ Sidewalk closure on northside of Roma fr 1st to 2nd"
   },
   "geometry": {
    "x": -106.64719630856733,
    "y": 35.088710658791513
   }
  },
  {
   "attributes": {
    "OBJECTID": 4781,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "311 Central Avenue NW",
    "Site": "Knockouts",
    "ShootDate": 1247616000000,
    "OriginalDetails": "311 Central Ave NW (Knockouts) & 4th St.Promenade- No ITC/Street Closure on Copper eb from 3rd st to 5th st."
   },
   "geometry": {
    "x": -106.65081413503357,
    "y": 35.084469608437132
   }
  },
  {
   "attributes": {
    "OBJECTID": 4782,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "7801 Candelaria Road NE",
    "Site": "Sandia High School",
    "ShootDate": 1247616000000,
    "OriginalDetails": "7801 Candelaria NE- Sandia High School- No ITC/No Closures"
   },
   "geometry": {
    "x": -106.55763151601438,
    "y": 35.116427339390548
   }
  },
  {
   "attributes": {
    "OBJECTID": 4783,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1247702400000,
    "OriginalDetails": "415 Tijeras (Old Bernallio Cty Courthouse)- ITC on Tijeras eb from 5th st to 4th st/Street Closure on 5th st nb & sb fr Tijeras to Marquette/ one lane closure on Tijeras from 5th to 4th st eb."
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4784,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "100 4th Street SW",
    "Site": "4th Street SW between Central Avenue SW and Gold Avenue SW and alley behind Amy Biel High School",
    "ShootDate": 1247788800000,
    "OriginalDetails": "4th st from Central to Gold & alley behind Amy Beil School- ITC on Central eb & wb from 3rd st to 4th st/ Street Closure on 4th st nb&sb from Central to Gold"
   },
   "geometry": {
    "x": -106.65161200519421,
    "y": 35.084531034537662
   }
  },
  {
   "attributes": {
    "OBJECTID": 4785,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "325 Central Avenue NW",
    "Site": "4th Street Promenade and alley behind Maloneys Tavern",
    "ShootDate": 1247788800000,
    "OriginalDetails": "4th st Promenade (Alley behind Maloneys) & Copper Parking Garage- ITC on 5th St nb & sb from Central to Copper/ ITC on Copper wb from 3rd st to 5th st./ Street Closure on Copper eb only from 5th to 3rd st"
   },
   "geometry": {
    "x": -106.65135298766012,
    "y": 35.084541198707043
   }
  },
  {
   "attributes": {
    "OBJECTID": 4786,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1900 Edith Boulevard NE",
    "Site": "Mount Calvary Cemetary",
    "ShootDate": 1248739200000,
    "OriginalDetails": "Mt. Calvary Cemetary - no ITC/closures"
   },
   "geometry": {
    "x": -106.63753249774378,
    "y": 35.102926815900204
   }
  },
  {
   "attributes": {
    "OBJECTID": 4787,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "7801 Candelaria Road NE",
    "Site": "Sandia High School",
    "ShootDate": 1248739200000,
    "OriginalDetails": "7801 Candelaria NE- Sandia High School- ITC on Candelaria eb, wb from Utah to Pennsylvania"
   },
   "geometry": {
    "x": -106.55763151601438,
    "y": 35.116427339390548
   }
  },
  {
   "attributes": {
    "OBJECTID": 4788,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5000 Uptown Boulevard NE",
    "Site": "Uptown Boulevard NE between San Pedro Drive NE and Coronado Mall Entrance at Americas Parkway NE",
    "ShootDate": 1250035200000,
    "OriginalDetails": "Uptown Blvd fr Americas Pkwy to San Pedro- ITC on Uptown eb fr San Pedro to Americas Pkwy/ Street Closure on Uptown wb fr Americas Pkwy to San Pedro"
   },
   "geometry": {
    "x": -106.57740682026983,
    "y": 35.10544917057809
   }
  },
  {
   "attributes": {
    "OBJECTID": 4789,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "218 Gold Avenue SW",
    "Site": "Gold Street Caffe",
    "ShootDate": 1250121600000,
    "OriginalDetails": "218 Gold St -Gold St Café- No ITC, No Closures"
   },
   "geometry": {
    "x": -106.6501190519044,
    "y": 35.083323325638801
   }
  },
  {
   "attributes": {
    "OBJECTID": 4790,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "601 Dr Martin Luther King Jr Avenue NE",
    "Site": "Lovelace Medical Center Albuquerque",
    "ShootDate": 1250121600000,
    "OriginalDetails": "601 MLK Jr Ave- ITC on Elm nb,sb fr MLK Jr Marquette"
   },
   "geometry": {
    "x": -106.64048934112903,
    "y": 35.085597763340203
   }
  },
  {
   "attributes": {
    "OBJECTID": 4791,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "400 4th Street NW",
    "Site": "Parking Lot at 4th Street NW",
    "ShootDate": 1250812800000,
    "OriginalDetails": "400 4th st(City Parking lot on 3rd & Marquette- ITC on 4th & Roma In all directions starting at 5pm/Street closure on 3rd nb,sb from Marquette to Roma"
   },
   "geometry": {
    "x": -106.65090429624368,
    "y": 35.088226994234901
   }
  },
  {
   "attributes": {
    "OBJECTID": 4792,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "2000 Mountain Road NW",
    "Site": "Albuquerque Museum",
    "ShootDate": 1252540800000,
    "OriginalDetails": "2000 Mountain Rd- Museum- ITC on 19th nb, sb fr Mountian to Old Town"
   },
   "geometry": {
    "x": -106.66860623851775,
    "y": 35.098424458888971
   }
  },
  {
   "attributes": {
    "OBJECTID": 4793,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1252540800000,
    "OriginalDetails": "500 Central Ave- Lindys- No ITC/  Street Closure on 5th st sb only fr Central to Gold"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 4794,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "100 Roma Avenue NW",
    "Site": "Roma Avenue NW and 1st Street NW intersection",
    "ShootDate": 1252627200000,
    "OriginalDetails": "100 Roma Ave NW- YDI no ITC/ Street Closure on Roma eb, wb fr 1st to RR Tracks"
   },
   "geometry": {
    "x": -106.64719630856733,
    "y": 35.088710658791513
   }
  },
  {
   "attributes": {
    "OBJECTID": 4795,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "120 Central Avenue SW",
    "Site": "Sunshine Building",
    "ShootDate": 1253664000000,
    "OriginalDetails": "120 Central Ave SW-(Sunshine Building) ITC on 2nd st fr Gold to Central nb, sb "
   },
   "geometry": {
    "x": -106.64894942204826,
    "y": 35.084191024811133
   }
  },
  {
   "attributes": {
    "OBJECTID": 4796,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1901 University Boulevard NE",
    "Site": "The Ranchers Club of New Mexico",
    "ShootDate": 1253664000000,
    "OriginalDetails": "Rancher's Club - no ITC/no closure"
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 4797,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1253664000000,
    "OriginalDetails": "500 Central Ave SW (Ext. Lindys Diner on 5th st- Street Closure on 5th st fr Gold to Central nb, sb"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 4798,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1900 Edith Boulevard NE",
    "Site": "Mount Calvary Cemetary",
    "ShootDate": 1253750400000,
    "OriginalDetails": "Mt. Calvary Cemetary - no ITC/closures"
   },
   "geometry": {
    "x": -106.63753249774378,
    "y": 35.102926815900204
   }
  },
  {
   "attributes": {
    "OBJECTID": 4799,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "325 Central Avenue NW",
    "Site": "Maloneys Tavern patio and 4th Street Promenade",
    "ShootDate": 1253750400000,
    "OriginalDetails": "4th st Promenade Maloney's Patio & Promenade- ITC on Central fr 5th st to 3rd st eb, wb, ITC on 4th st fr Gold to Central nb, sb/Street Closure on Copper fr 3rd to 5th st eb"
   },
   "geometry": {
    "x": -106.65135298766012,
    "y": 35.084541198707043
   }
  },
  {
   "attributes": {
    "OBJECTID": 4800,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1254355200000,
    "OriginalDetails": "El Madrid Bar - ITC 1st st.  From Iron to  Lead nb, sb"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4801,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1254355200000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4802,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "102 4th Street NW",
    "Site": "Slices Patio and 4th Street Promenade",
    "ShootDate": 1254441600000,
    "OriginalDetails": "4th st Promenade Slices Patio- No ITC/ Street Closure on Copper from 3rd st to 5th st eb"
   },
   "geometry": {
    "x": -106.65159262404192,
    "y": 35.084627932606566
   }
  },
  {
   "attributes": {
    "OBJECTID": 4803,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "301 San Pedro Drive NE",
    "Site": "Fade Tite Hair Studio",
    "ShootDate": 1254441600000,
    "OriginalDetails": "301 San Pedro NE - ITC San Pedro btwn Nambe & Domingo nb, sb/ ITC Copper btwn Cagua & San Pedro (eb) Close: Copper btwn Cagua & San Pedro wb"
   },
   "geometry": {
    "x": -106.57747424062853,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 4804,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1255305600000,
    "OriginalDetails": "415 Tijeras Ave SE- Street eb lane closure fr 5th st to 4th st"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4805,
    "Title": "Crash",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt1178636/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1601 Avenida Cesar Chavez SE",
    "Site": "Isotopes Park",
    "ShootDate": 1255392000000,
    "OriginalDetails": "Isotopes baseball park"
   },
   "geometry": {
    "x": -106.63068759399358,
    "y": 35.068480404157597
   }
  },
  {
   "attributes": {
    "OBJECTID": 4806,
    "Title": "Crazy Heart",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1263670/",
    "Address": "20 1st Plaza Center NW",
    "Site": "Fist Plaza Galeria",
    "ShootDate": 1221523200000,
    "OriginalDetails": "Galeria"
   },
   "geometry": {
    "x": -106.64999645791923,
    "y": 35.086541055062661
   }
  },
  {
   "attributes": {
    "OBJECTID": 4807,
    "Title": "Crazy Heart",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1263670/",
    "Address": "300 Marquette Avenue NW",
    "Site": "Driving grid of 3rd Street NW and Marquette Avenue NW to 5th Street NW to Gold Avenue NW",
    "ShootDate": 1221523200000,
    "OriginalDetails": "Downtown -rolling ITC 3rd, marquette, 5th, gold (loop)"
   },
   "geometry": {
    "x": -106.64975971141769,
    "y": 35.088031323298424
   }
  },
  {
   "attributes": {
    "OBJECTID": 4808,
    "Title": "Crazy Heart",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1263670/",
    "Address": "1000 Juan Tabo Boulevard NE",
    "Site": "Pauls Monterey Inn",
    "ShootDate": 1221609600000,
    "OriginalDetails": "Paul's Monterey Inn - ITC Juan Tabo at Lomas"
   },
   "geometry": {
    "x": -106.51502401874502,
    "y": 35.088341552177631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4809,
    "Title": "Crazy Heart",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1263670/",
    "Address": "5601 University Boulevard SE",
    "Site": "Isleta Amphitheater formerly called Journal Pavilion",
    "ShootDate": 1221696000000,
    "OriginalDetails": "Journal Pavilion"
   },
   "geometry": {
    "x": -106.62177349734323,
    "y": 34.995465777434681
   }
  },
  {
   "attributes": {
    "OBJECTID": 4810,
    "Title": "Danappel Creative",
    "Type": "Commercial for Kia",
    "IMDbLink": "na",
    "Address": "402 Silver Avenue SW",
    "Site": "Silver Avenue SW between 4th and 5th Streets SW",
    "ShootDate": 1267315200000,
    "OriginalDetails": "402 Silver Ave SW- Street Closure on Silver from 4th st to 5th st (eb, wb)"
   },
   "geometry": {
    "x": -106.65218394367098,
    "y": 35.082576852969837
   }
  },
  {
   "attributes": {
    "OBJECTID": 4811,
    "Title": "Dark Country",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0469318/?ref_=fn_al_tt_1",
    "Address": "3711 Central NE",
    "Site": "University Lodge",
    "ShootDate": 1194739200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60255520156453,
    "y": 35.079583732249716
   }
  },
  {
   "attributes": {
    "OBJECTID": 4812,
    "Title": "Dead Billy",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2558996/",
    "Address": "2901 Candelaria Road NW",
    "Site": "Rio Grande Nature Center State Park",
    "ShootDate": 1351814400000,
    "OriginalDetails": "Rio Grande Valley State Park Access Road"
   },
   "geometry": {
    "x": -106.68425086990788,
    "y": 35.128797365423438
   }
  },
  {
   "attributes": {
    "OBJECTID": 4813,
    "Title": "Dead Billy",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2558996/",
    "Address": "407 Central Avenue NW",
    "Site": "Sister Bar",
    "ShootDate": 1351900800000,
    "OriginalDetails": "Sister "
   },
   "geometry": {
    "x": -106.65193187909719,
    "y": 35.084618338881768
   }
  },
  {
   "attributes": {
    "OBJECTID": 4814,
    "Title": "Dead Billy",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2558996/",
    "Address": "407 Central Avenue NW",
    "Site": "Sister Bar",
    "ShootDate": 1351987200000,
    "OriginalDetails": "Sister "
   },
   "geometry": {
    "x": -106.65193187909719,
    "y": 35.084618338881768
   }
  },
  {
   "attributes": {
    "OBJECTID": 4815,
    "Title": "Dead Billy",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2558996/",
    "Address": "500 2nd Street SW",
    "Site": "Orpheum Arts Space",
    "ShootDate": 1352073600000,
    "OriginalDetails": "Orpheum Arts Space"
   },
   "geometry": {
    "x": -106.64996392722786,
    "y": 35.080283547629023
   }
  },
  {
   "attributes": {
    "OBJECTID": 4816,
    "Title": "Dead Billy",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2558996/",
    "Address": "1001 Stanford Drive NE",
    "Site": "UNM Domenici Center",
    "ShootDate": 1352505600000,
    "OriginalDetails": "UNM Dominici Center - 1001 Stanford NE"
   },
   "geometry": {
    "x": -106.6175623372251,
    "y": 35.091834307263937
   }
  },
  {
   "attributes": {
    "OBJECTID": 4817,
    "Title": "Dead Billy",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2558996/",
    "Address": "3101 Tiley Drive NE",
    "Site": "Grisham Park",
    "ShootDate": 1352764800000,
    "OriginalDetails": "Grisham Park"
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4818,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "205 Rio Bravo SW",
    "Site": "Raks Building Supply",
    "ShootDate": 1187308800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65881695460857,
    "y": 35.027273846260826
   }
  },
  {
   "attributes": {
    "OBJECTID": 4819,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "313 Gold SW",
    "Site": "Burt's Tiki Lounge",
    "ShootDate": 1187568000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65130113600361,
    "y": 35.083503234721356
   }
  },
  {
   "attributes": {
    "OBJECTID": 4820,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "6000 Pan American NW",
    "Site": "Nativo Lodge",
    "ShootDate": 1187740800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58683738173323,
    "y": 35.151601575896699
   }
  },
  {
   "attributes": {
    "OBJECTID": 4821,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "720 1st st. NW",
    "Site": "JuStorage",
    "ShootDate": 1187827200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64678577758416,
    "y": 35.09060743740433
   }
  },
  {
   "attributes": {
    "OBJECTID": 4822,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "301 Central Avenue NW",
    "Site": "Carom Club",
    "ShootDate": 1188172800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6504292410703,
    "y": 35.084418472176587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4823,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "301 Central Avenue NW",
    "Site": "Carom Club",
    "ShootDate": 1188259200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6504292410703,
    "y": 35.084418472176587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4824,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "616 Central SW",
    "Site": null,
    "ShootDate": 1188864000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65475577990522,
    "y": 35.08494938826081
   }
  },
  {
   "attributes": {
    "OBJECTID": 4825,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189123200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4826,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189209600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4827,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189296000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4828,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189382400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4829,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189468800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4830,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189555200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4831,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189555200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4832,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189641600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4833,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189641600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4834,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189728000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4835,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1189987200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4836,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1190073600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4837,
    "Title": "Deadly Impact",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1082577/?ref_=nm_flmg_msc_9",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1190160000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4838,
    "Title": "Desert Gems Productions",
    "Type": "Commercial for Transportation Security Administration",
    "IMDbLink": "na",
    "Address": "11500 Sunset Gardens Road SW",
    "Site": "Albuquerque Fire Academy",
    "ShootDate": 1211414400000,
    "OriginalDetails": "Albuquerque Fire Academy - 11510 Sunset Gardens"
   },
   "geometry": {
    "x": -106.758807910556,
    "y": 35.066042433228006
   }
  },
  {
   "attributes": {
    "OBJECTID": 4839,
    "Title": "Desert Gems Productions",
    "Type": "Commercial for Transportation Security Administration",
    "IMDbLink": "na",
    "Address": "11510 Sunset Gardens Road SW",
    "Site": "Albuquerque Emergency Management Office",
    "ShootDate": 1211414400000,
    "OriginalDetails": "Office of Emergency Management"
   },
   "geometry": {
    "x": -106.7588616414881,
    "y": 35.066031328559163
   }
  },
  {
   "attributes": {
    "OBJECTID": 4840,
    "Title": "Desert Vamps 101",
    "Type": "Movie CNM Student Film",
    "IMDbLink": "na",
    "Address": "525 Buena Vista Drive SE",
    "Site": "CNM Main Campus interior",
    "ShootDate": 1260835200000,
    "OriginalDetails": "CNM - interior"
   },
   "geometry": {
    "x": -106.62408151634483,
    "y": 35.076493751427392
   }
  },
  {
   "attributes": {
    "OBJECTID": 4841,
    "Title": "Desert Vamps 101",
    "Type": "Movie CNM Student Film",
    "IMDbLink": "na",
    "Address": "525 Buena Vista Drive SE",
    "Site": "CNM Main Campus interior",
    "ShootDate": 1260921600000,
    "OriginalDetails": "CNM - interior"
   },
   "geometry": {
    "x": -106.62408151634483,
    "y": 35.076493751427392
   }
  },
  {
   "attributes": {
    "OBJECTID": 4842,
    "Title": "Digital Filmmaking Institute",
    "Type": "Commerical by Marcia Woske",
    "IMDbLink": "na",
    "Address": "9301 San Mateo Boulevard NE",
    "Site": "Wildflower Park",
    "ShootDate": 1335657600000,
    "OriginalDetails": "Wildflower Park"
   },
   "geometry": {
    "x": -106.58643800602927,
    "y": 35.1936809646648
   }
  },
  {
   "attributes": {
    "OBJECTID": 4843,
    "Title": "Doritos",
    "Type": "Commercial for Doritos",
    "IMDbLink": "na",
    "Address": "100 3rd Street NW",
    "Site": "3rd Street NW between Central Avenue NW and Copper Avenue NW",
    "ShootDate": 1288224000000,
    "OriginalDetails": "3rd st. Sidewalk - westside only betwn central and copper"
   },
   "geometry": {
    "x": -106.65037279902269,
    "y": 35.084428189421139
   }
  },
  {
   "attributes": {
    "OBJECTID": 4844,
    "Title": "Due Date",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1231583/",
    "Address": "Interstate 40 westbound between exit 154 Unser Boulevard and exit 149 Atrisco Vista Boulevard",
    "Site": "Interstate 40 westbound between exit 154 Unser Boulevard and exit 149 Atrisco Vista Boulevard",
    "ShootDate": 1256342400000,
    "OriginalDetails": "I-40 at Unser & Paseo del Volcan"
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4845,
    "Title": "Due Date",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1231583/",
    "Address": "Interstate 40 eastbound between exit 153 98th Street and exit 154 Unser Boulevard",
    "Site": "Interstate 40 eastbound between exit 153 98th Street and exit 154 Unser Boulevard",
    "ShootDate": 1257292800000,
    "OriginalDetails": "I-40 eastbound btwn 98th & Unser- Sidewalk closure on NB Unser at I-40 Overpass"
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4846,
    "Title": "Due Date",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1231583/",
    "Address": "Interstate 40 eastbound between exit 153 98th Street and exit 154 Unser Boulevard",
    "Site": "Interstate 40 eastbound between exit 153 98th Street and exit 154 Unser Boulevard",
    "ShootDate": 1257379200000,
    "OriginalDetails": "I-40 eastbound btwn 98th & Unser- Sidewalk closure on NB Unser at I-40 Overpass"
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4847,
    "Title": "Due Date",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1231583/",
    "Address": "1200 Sunport Boulevard Southeast",
    "Site": "Interstate 25 southbound between exit 221 Sunport Boulevard SE and exit 220 Rio Bravo Boulevard SE",
    "ShootDate": 1257638400000,
    "OriginalDetails": "I-25 close SB between Sunport and Rio Bravo"
   },
   "geometry": {
    "x": -106.62180085823015,
    "y": 35.049743020324279
   }
  },
  {
   "attributes": {
    "OBJECTID": 4848,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "2424 Central Avenue SW",
    "Site": "Casa Grande Restaurant closed",
    "ShootDate": 1209340800000,
    "OriginalDetails": "Casa Grande Restaurant 2424 Central Ave. SW"
   },
   "geometry": {
    "x": -106.67701461240924,
    "y": 35.094760895048609
   }
  },
  {
   "attributes": {
    "OBJECTID": 4849,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "8521 Central Avenue SE",
    "Site": "Foxes Booze N Cruise",
    "ShootDate": 1209513600000,
    "OriginalDetails": "Foxes Booze & Cruise"
   },
   "geometry": {
    "x": -106.55165764301819,
    "y": 35.074032804769331
   }
  },
  {
   "attributes": {
    "OBJECTID": 4850,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "610 Central Avenue NW",
    "Site": "The Launchpad Bar alley",
    "ShootDate": 1209600000000,
    "OriginalDetails": "610 Central Alleyway (behind Launchpad) - closure on alley from 6th to 7th"
   },
   "geometry": {
    "x": -106.65447741625317,
    "y": 35.084910849580488
   }
  },
  {
   "attributes": {
    "OBJECTID": 4851,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "618 Central Avenue SW",
    "Site": "The Launchpad Bar",
    "ShootDate": 1209600000000,
    "OriginalDetails": "Foxes Booze & Cruise, Launchpad Bar"
   },
   "geometry": {
    "x": -106.65484856778923,
    "y": 35.08496223399348
   }
  },
  {
   "attributes": {
    "OBJECTID": 4852,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "1020 Central Avenue SW",
    "Site": "Express Inn",
    "ShootDate": 1209686400000,
    "OriginalDetails": "Express Inn 1020 Central Ave. SW"
   },
   "geometry": {
    "x": -106.65944942965403,
    "y": 35.087014555466162
   }
  },
  {
   "attributes": {
    "OBJECTID": 4853,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "610 Central Avenue NW",
    "Site": "The Launchpad Bar alley",
    "ShootDate": 1209686400000,
    "OriginalDetails": "611 Central Alleyway (behind Launchpad) - closure on alley from 6th to 7th"
   },
   "geometry": {
    "x": -106.65447741625317,
    "y": 35.084910849580488
   }
  },
  {
   "attributes": {
    "OBJECTID": 4854,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "1002 Central Avenue SW",
    "Site": "Washington Luxury Apartments",
    "ShootDate": 1209945600000,
    "OriginalDetails": "Washington Luxury Apartments"
   },
   "geometry": {
    "x": -106.65866616520161,
    "y": 35.086546005810845
   }
  },
  {
   "attributes": {
    "OBJECTID": 4855,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "1002 Central Avenue SW",
    "Site": "Washington Luxury Apartments",
    "ShootDate": 1210032000000,
    "OriginalDetails": "Washington Luxury Apts. 1002 Central Ave. SW - ITC on Central from 10th to 11th St., Hotel Blue"
   },
   "geometry": {
    "x": -106.65866616520161,
    "y": 35.086546005810845
   }
  },
  {
   "attributes": {
    "OBJECTID": 4856,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "9200 Central Avenue SW",
    "Site": "Duke City Lights Diner now renamed Café 66",
    "ShootDate": 1210204800000,
    "OriginalDetails": "Dukes Diner 9200 Central Ave. SW"
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 4857,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "300 Central Avenue SE",
    "Site": "Central Avenue SE from Broadway to Unser Boulevards SE driving shot",
    "ShootDate": 1210723200000,
    "OriginalDetails": "Driving shots on process trailer - ITC on Central from Broadway to Unser"
   },
   "geometry": {
    "x": -106.64458288842025,
    "y": 35.083627455624956
   }
  },
  {
   "attributes": {
    "OBJECTID": 4858,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "300 Central Avenue SE",
    "Site": "Central Avenue SE from Broadway to Unser Boulevards SE driving shot",
    "ShootDate": 1210809600000,
    "OriginalDetails": "Driving shots on process trailer - ITC on Central from Broadway to Unser"
   },
   "geometry": {
    "x": -106.64458288842025,
    "y": 35.083627455624956
   }
  },
  {
   "attributes": {
    "OBJECTID": 4859,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "8300 Central Avenue SE",
    "Site": "Bow and Arrow Lodge",
    "ShootDate": 1210809600000,
    "OriginalDetails": "Bow 'n Arrow 8300 Central Ave. SE"
   },
   "geometry": {
    "x": -106.55480257475929,
    "y": 35.074347950151576
   }
  },
  {
   "attributes": {
    "OBJECTID": 4860,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "1013 San Mateo Boulevard SE",
    "Site": "Dons Paperback Books",
    "ShootDate": 1210896000000,
    "OriginalDetails": "Bird Song 1708 Central Ave. SE Don's Books 1013 San Mateo SE"
   },
   "geometry": {
    "x": -106.58637567013507,
    "y": 35.066942086523063
   }
  },
  {
   "attributes": {
    "OBJECTID": 4861,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "1500 Central Avenue SW",
    "Site": "Huning Castle Apartments",
    "ShootDate": 1210896000000,
    "OriginalDetails": "Castle Apts. 1410 Central Ave. - ITC on Central from 14th to 15th St."
   },
   "geometry": {
    "x": -106.6639066023959,
    "y": 35.089265854414087
   }
  },
  {
   "attributes": {
    "OBJECTID": 4862,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "1708 Central Avenue SE",
    "Site": "Bird Song Used Books moved to 526 Washington Street NE",
    "ShootDate": 1210896000000,
    "OriginalDetails": "Bird Song 1708 Central Ave. SE Don's Books 1013 San Mateo SE"
   },
   "geometry": {
    "x": -106.62739709295562,
    "y": 35.081439176867363
   }
  },
  {
   "attributes": {
    "OBJECTID": 4863,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "1500 Central Avenue SW",
    "Site": "Huning Castle Apartments",
    "ShootDate": 1210982400000,
    "OriginalDetails": "Castle Apts. 1410 Central Ave. - ITC on Central from 14th to 15th St."
   },
   "geometry": {
    "x": -106.6639066023959,
    "y": 35.089265854414087
   }
  },
  {
   "attributes": {
    "OBJECTID": 4864,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "900 Park Avenue SW",
    "Site": "Park Avenue SW from 9th to 10th Streets SW",
    "ShootDate": 1211155200000,
    "OriginalDetails": "Park Avenue - closure on Park Avenue from 9th to 10th St. "
   },
   "geometry": {
    "x": -106.65760142982458,
    "y": 35.085296087811287
   }
  },
  {
   "attributes": {
    "OBJECTID": 4865,
    "Title": "Easier With Practice",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1217426/",
    "Address": "1901 University Boulevard NE",
    "Site": "Hilton Albuquerque now Crowne Plaza Albuquerque",
    "ShootDate": 1211500800000,
    "OriginalDetails": "Hilton Hotel"
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 4866,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "3101 4th Street NW",
    "Site": "Autowerks is current business",
    "ShootDate": 1217808000000,
    "OriginalDetails": "3101 4th St. NW - ITC on 4th St. from Mathew St. to Cordova Ave."
   },
   "geometry": {
    "x": -106.64577792981916,
    "y": 35.115129127848036
   }
  },
  {
   "attributes": {
    "OBJECTID": 4867,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "3101 4th Street NW",
    "Site": "Autowerks is current business",
    "ShootDate": 1217808000000,
    "OriginalDetails": "3101 4th St. NW - ITC on 4th St. from Mathew St. to Cordova Ave."
   },
   "geometry": {
    "x": -106.64577792981916,
    "y": 35.115129127848036
   }
  },
  {
   "attributes": {
    "OBJECTID": 4868,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "401 Broadway Boulevard NE",
    "Site": "Tiwa Building",
    "ShootDate": 1217808000000,
    "OriginalDetails": "401 Broadway (Tiwa Building)"
   },
   "geometry": {
    "x": -106.64409326526791,
    "y": 35.086339403150042
   }
  },
  {
   "attributes": {
    "OBJECTID": 4869,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "1 University Boulevard NE",
    "Site": "University of New Mexico campus",
    "ShootDate": 1217894400000,
    "OriginalDetails": "UNM Campus"
   },
   "geometry": {
    "x": -106.62683216493133,
    "y": 35.081433748713899
   }
  },
  {
   "attributes": {
    "OBJECTID": 4870,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "3110 Monte Vista Boulevard NE",
    "Site": "Office building",
    "ShootDate": 1217894400000,
    "OriginalDetails": "3110 Monte Vista Blvd. NE - ITC on Monte Vista from Richmond to Campus"
   },
   "geometry": {
    "x": -106.61032370547913,
    "y": 35.08209152816552
   }
  },
  {
   "attributes": {
    "OBJECTID": 4871,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "931 San Pedro Drive SE",
    "Site": "San Pedro Strip Mall",
    "ShootDate": 1217980800000,
    "OriginalDetails": "931 San Pedro SE - ITC on San Pedro from Kathryn Ave. to Anderson Ave."
   },
   "geometry": {
    "x": -106.57755715872253,
    "y": 35.06451672007308
   }
  },
  {
   "attributes": {
    "OBJECTID": 4872,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "931 San Pedro Drive SE",
    "Site": "San Pedro Strip Mall",
    "ShootDate": 1218067200000,
    "OriginalDetails": "931 San Pedro SE - ITC on San Pedro from Kathryn Ave. to Anderson Ave."
   },
   "geometry": {
    "x": -106.57755715872253,
    "y": 35.06451672007308
   }
  },
  {
   "attributes": {
    "OBJECTID": 4873,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "931 San Pedro Drive SE",
    "Site": "San Pedro Strip Mall",
    "ShootDate": 1218153600000,
    "OriginalDetails": "931 San Pedro SE - ITC on San Pedro from Kathryn Ave. to Anderson Ave."
   },
   "geometry": {
    "x": -106.57755715872253,
    "y": 35.06451672007308
   }
  },
  {
   "attributes": {
    "OBJECTID": 4874,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "10000 Coors Boulevard Bypass NW",
    "Site": "Cottonwood Mall",
    "ShootDate": 1218499200000,
    "OriginalDetails": "Cottonwood Mall"
   },
   "geometry": {
    "x": -106.6600978506941,
    "y": 35.196995167521344
   }
  },
  {
   "attributes": {
    "OBJECTID": 4875,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "9201 Pan American Freeway NE",
    "Site": "I25 Studios formerly Philips Semiconductor Plant",
    "ShootDate": 1218844800000,
    "OriginalDetails": "Philips Building - 9201 Pan American Fwy."
   },
   "geometry": {
    "x": -106.58054369861443,
    "y": 35.190552050534443
   }
  },
  {
   "attributes": {
    "OBJECTID": 4876,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "931 San Pedro Drive SE",
    "Site": "San Pedro Strip Mall",
    "ShootDate": 1219104000000,
    "OriginalDetails": "931 San Pedro - Strip Mall"
   },
   "geometry": {
    "x": -106.57755715872253,
    "y": 35.06451672007308
   }
  },
  {
   "attributes": {
    "OBJECTID": 4877,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "931 San Pedro Drive SE",
    "Site": "San Pedro Strip Mall",
    "ShootDate": 1219190400000,
    "OriginalDetails": "931 San Pedro - Strip Mall"
   },
   "geometry": {
    "x": -106.57755715872253,
    "y": 35.06451672007308
   }
  },
  {
   "attributes": {
    "OBJECTID": 4878,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "10000 Tramway Boulevard NE",
    "Site": "Tramway Boulevard NE driving shot",
    "ShootDate": 1219363200000,
    "OriginalDetails": "driving work on Tramway"
   },
   "geometry": {
    "x": -106.49610219755279,
    "y": 35.190344335146285
   }
  },
  {
   "attributes": {
    "OBJECTID": 4879,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "1001 University Boulevard SE ",
    "Site": "UNM Tech Lab",
    "ShootDate": 1219881600000,
    "OriginalDetails": "UNM Tech Lab"
   },
   "geometry": {
    "x": -106.63092441954689,
    "y": 35.07117681937946
   }
  },
  {
   "attributes": {
    "OBJECTID": 4880,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "3101 4th Street NW",
    "Site": "Autowerks is current business",
    "ShootDate": 1219968000000,
    "OriginalDetails": "3101 4th St. NW"
   },
   "geometry": {
    "x": -106.64577792981916,
    "y": 35.115129127848036
   }
  },
  {
   "attributes": {
    "OBJECTID": 4881,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "110 Lomas Boulevard NE",
    "Site": "No Holds Barred Gym or Fit NHB",
    "ShootDate": 1220400000000,
    "OriginalDetails": "No Hold's Barred Gym"
   },
   "geometry": {
    "x": -106.64555112587115,
    "y": 35.090550626060818
   }
  },
  {
   "attributes": {
    "OBJECTID": 4882,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "1425 San Mateo Boulevard NE",
    "Site": "Happy Jade Day Spa out of business",
    "ShootDate": 1221004800000,
    "OriginalDetails": "Happy Jade Day Spa - 1425 San Mateo Blvd. NE"
   },
   "geometry": {
    "x": -106.58623698462824,
    "y": 35.092081213023988
   }
  },
  {
   "attributes": {
    "OBJECTID": 4883,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "101 Atrisco Vista Boulevard NW",
    "Site": "Atrisco Vista Boulevard unspecified",
    "ShootDate": 1221523200000,
    "OriginalDetails": "Paseo del Volcan (static ITC)"
   },
   "geometry": {
    "x": -106.78657209163494,
    "y": 35.062784023447243
   }
  },
  {
   "attributes": {
    "OBJECTID": 4884,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "6440 Coors Boulevard NW",
    "Site": "Sagebrush Community Church",
    "ShootDate": 1221609600000,
    "OriginalDetails": "Sagebrush Community Church - 6440 Coors Blvd NW"
   },
   "geometry": {
    "x": -106.67784874486293,
    "y": 35.16218712139834
   }
  },
  {
   "attributes": {
    "OBJECTID": 4885,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "851 University Boulevard SE ",
    "Site": "UNM Science and Tech Park",
    "ShootDate": 1221696000000,
    "OriginalDetails": "Science & Tech park"
   },
   "geometry": {
    "x": -106.63073273882819,
    "y": 35.071990367286027
   }
  },
  {
   "attributes": {
    "OBJECTID": 4886,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "6440 Coors Boulevard NW",
    "Site": "Sagebrush Community Church",
    "ShootDate": 1221782400000,
    "OriginalDetails": "Sagebrush Community Church - 6440 Coors Blvd NW"
   },
   "geometry": {
    "x": -106.67784874486293,
    "y": 35.16218712139834
   }
  },
  {
   "attributes": {
    "OBJECTID": 4887,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "931 San Pedro Drive SE",
    "Site": "San Pedro Strip Mall",
    "ShootDate": 1221782400000,
    "OriginalDetails": "San Pedro Strip Mall"
   },
   "geometry": {
    "x": -106.57755715872253,
    "y": 35.06451672007308
   }
  },
  {
   "attributes": {
    "OBJECTID": 4888,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "6800 Oakland Avenue NE",
    "Site": "Alameda Storage",
    "ShootDate": 1222041600000,
    "OriginalDetails": "Alameda Storage - 6800 Oakland NE"
   },
   "geometry": {
    "x": -106.5721361619528,
    "y": 35.185874361651237
   }
  },
  {
   "attributes": {
    "OBJECTID": 4889,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "5200 San Diego Avenue NE",
    "Site": "La Cueva Arroyo",
    "ShootDate": 1222128000000,
    "OriginalDetails": "La Cueva Arroyo - no closures/no IT C"
   },
   "geometry": {
    "x": -106.58625414784008,
    "y": 35.193167718247828
   }
  },
  {
   "attributes": {
    "OBJECTID": 4890,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "4201 Montano Road NW",
    "Site": "Whisque Mesquite Grill and Bar closed",
    "ShootDate": 1222646400000,
    "OriginalDetails": "Whisque"
   },
   "geometry": {
    "x": -106.686253308101,
    "y": 35.149676773463931
   }
  },
  {
   "attributes": {
    "OBJECTID": 4891,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "10000 Coors Boulevard Bypass NW",
    "Site": "Cottonwood Mall",
    "ShootDate": 1222732800000,
    "OriginalDetails": "Cottonwood Mall"
   },
   "geometry": {
    "x": -106.6600978506941,
    "y": 35.196995167521344
   }
  },
  {
   "attributes": {
    "OBJECTID": 4892,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "2901 Candelaria Road NW",
    "Site": "Rio Grande Nature Center State Park",
    "ShootDate": 1222819200000,
    "OriginalDetails": "Rio Grande Valley State Park- No ITC"
   },
   "geometry": {
    "x": -106.68425086990788,
    "y": 35.128797365423438
   }
  },
  {
   "attributes": {
    "OBJECTID": 4893,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "9201 Pan American Freeway NE",
    "Site": "I25 Studios formerly Philips Semiconductor Plant",
    "ShootDate": 1222992000000,
    "OriginalDetails": "Philips Building - 9201 Pan American Fwy."
   },
   "geometry": {
    "x": -106.58054369861443,
    "y": 35.190552050534443
   }
  },
  {
   "attributes": {
    "OBJECTID": 4894,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "9755 Interstate 25",
    "Site": "Pan American Frontage Road South between Tramway Road NE exit 234 and Alameda Boulevard exit 233",
    "ShootDate": 1222992000000,
    "OriginalDetails": "Pan American Pwy - ITC on Pan Amer fr. Tramway to Alameda"
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4895,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "9201 Pan American Freeway NE",
    "Site": "I25 Studios formerly Philips Semiconductor Plant",
    "ShootDate": 1223251200000,
    "OriginalDetails": "Phillips Building"
   },
   "geometry": {
    "x": -106.58054369861443,
    "y": 35.190552050534443
   }
  },
  {
   "attributes": {
    "OBJECTID": 4896,
    "Title": "Easy Money",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1252367/",
    "Address": "10420 Coors Bypass NW",
    "Site": "Borders Bookstore",
    "ShootDate": 1224028800000,
    "OriginalDetails": "10420 Coors By Pass (Borders)"
   },
   "geometry": {
    "x": -106.65891348038248,
    "y": 35.206376521786105
   }
  },
  {
   "attributes": {
    "OBJECTID": 4897,
    "Title": "Enemy Way",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2258285/",
    "Address": "400 Roma Avenue NW",
    "Site": "Bernalillo County Sheriffs Office Parking Lot",
    "ShootDate": 1367798400000,
    "OriginalDetails": "Bernalillo County - Westside shooting range (Bern Co. Sheriff's Office Parking Lot)"
   },
   "geometry": {
    "x": -106.65078121537167,
    "y": 35.089171935883442
   }
  },
  {
   "attributes": {
    "OBJECTID": 4898,
    "Title": "Enemy Way",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2258285/",
    "Address": "16001 Shooting Range Access Road NW",
    "Site": "Shooting Range Park",
    "ShootDate": 1367884800000,
    "OriginalDetails": "Bernalillo County - Westside shooting range (Bern Co. Sheriff's Office Parking Lot)"
   },
   "geometry": {
    "x": -106.85719034585061,
    "y": 35.134170571634961
   }
  },
  {
   "attributes": {
    "OBJECTID": 4899,
    "Title": "Enemy Way",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2258285/",
    "Address": "401 Roma Avenue NW",
    "Site": "Regional Correction Center",
    "ShootDate": 1368489600000,
    "OriginalDetails": "RCC Downtown 401 Roma NW"
   },
   "geometry": {
    "x": -106.65077705976516,
    "y": 35.089199199031761
   }
  },
  {
   "attributes": {
    "OBJECTID": 4900,
    "Title": "Enemy Way",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2258285/",
    "Address": "9200 Central Avenue SW",
    "Site": "Calf A Diner now renamed Café 66",
    "ShootDate": 1369353600000,
    "OriginalDetails": "Calf-A Diner 9200 Central SW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 4901,
    "Title": "Energy Advances New Mexico",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "600 Lomas Boulevard NW",
    "Site": "Lomas Boulevard NW and 6th Street NW",
    "ShootDate": 1218672000000,
    "OriginalDetails": "6th & Lomas"
   },
   "geometry": {
    "x": -106.65279912165565,
    "y": 35.091480805577767
   }
  },
  {
   "attributes": {
    "OBJECTID": 4902,
    "Title": "Fatal Encounters",
    "Type": "TV Series Wicked episode",
    "IMDbLink": "http://www.imdb.com/title/tt2340719/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1335484800000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 4903,
    "Title": "Fatal Encounters",
    "Type": "TV Series Wicked episode",
    "IMDbLink": "http://www.imdb.com/title/tt2340719/",
    "Address": "2524 Morningside Drive NE",
    "Site": "J and D Cycle",
    "ShootDate": 1335571200000,
    "OriginalDetails": "J&D Cycle, 2524-B Morningside Drive NE"
   },
   "geometry": {
    "x": -106.59922555284481,
    "y": 35.108091832219898
   }
  },
  {
   "attributes": {
    "OBJECTID": 4904,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1358208000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4905,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "4025 Broadway Boulevard SE",
    "Site": "Southwest Auto Recyclers",
    "ShootDate": 1358208000000,
    "OriginalDetails": "BernCo - SW Auto Recycling - 4025 Broadway SE"
   },
   "geometry": {
    "x": -106.64680316447649,
    "y": 35.023709780386774
   }
  },
  {
   "attributes": {
    "OBJECTID": 4906,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1358294400000,
    "OriginalDetails": "Lindy's 500 Central SW-closure on Central fr 4th to 6th EB-WB and on 5th fr Gold to Copper NB-SB"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 4907,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1358553600000,
    "OriginalDetails": "Lindy's  500 Central SW - closure on Central fr 4th to 6th EB-WB and on 5th fr Gold to Copper NB-SB"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 4908,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1358640000000,
    "OriginalDetails": "El Madrid  Bar - 423 1st SW - noITC-closure on 1st fr Lead to Iron NB-SB"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4909,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "211 Gold Avenue SW",
    "Site": "Lotus Nightclub and VIP Ultralounge",
    "ShootDate": 1358899200000,
    "OriginalDetails": "Lotus - 211 Gold SW - close 3rd btwn Gold & Central"
   },
   "geometry": {
    "x": -106.64984970643948,
    "y": 35.083317172060319
   }
  },
  {
   "attributes": {
    "OBJECTID": 4910,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "211 Gold Avenue SW",
    "Site": "Lotus Nightclub and VIP Ultralounge",
    "ShootDate": 1358985600000,
    "OriginalDetails": "Lotus - 211 Gold SW - close 3rd btwn Gold & Central"
   },
   "geometry": {
    "x": -106.64984970643948,
    "y": 35.083317172060319
   }
  },
  {
   "attributes": {
    "OBJECTID": 4911,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "401 Roma Avenue NW",
    "Site": "Regional Correction Center",
    "ShootDate": 1359849600000,
    "OriginalDetails": "RCC Downtown 401 Roma NW -close WB parking lane on Roma fr 4th to 6th  Close NB right and lane of 5th between Roma and Fruit"
   },
   "geometry": {
    "x": -106.65077705976516,
    "y": 35.089199199031761
   }
  },
  {
   "attributes": {
    "OBJECTID": 4912,
    "Title": "Force of Execution",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2611626/",
    "Address": "401 Roma Avenue NW",
    "Site": "Regional Correction Center",
    "ShootDate": 1359936000000,
    "OriginalDetails": "RCC Downtown 401 Roma NW -close WB parking lane on Roma fr 4th to 6th  Close NB right and lane of 5th between Roma and Fruit"
   },
   "geometry": {
    "x": -106.65077705976516,
    "y": 35.089199199031761
   }
  },
  {
   "attributes": {
    "OBJECTID": 4913,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "201 Marquette Avenue NW ",
    "Site": "Doubletree by Hilton Hotel",
    "ShootDate": 1357603200000,
    "OriginalDetails": "Doubletree Hotel - 201 Marquette NW "
   },
   "geometry": {
    "x": -106.64857966290091,
    "y": 35.087915523394642
   }
  },
  {
   "attributes": {
    "OBJECTID": 4914,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "9317 Central Avenue NW",
    "Site": "French Quarter Motel",
    "ShootDate": 1357689600000,
    "OriginalDetails": "The French Quarter Motel - 9317 Central Ave NW - ITC Frontage rd btwn 140th & 144th"
   },
   "geometry": {
    "x": -106.7377106850543,
    "y": 35.073785827466253
   }
  },
  {
   "attributes": {
    "OBJECTID": 4915,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "1715 2nd Street SW",
    "Site": "El Modelo",
    "ShootDate": 1357776000000,
    "OriginalDetails": "El Modelo - 1715 2nd SW - ITC 2nd St. "
   },
   "geometry": {
    "x": -106.65229752935045,
    "y": 35.068627963104667
   }
  },
  {
   "attributes": {
    "OBJECTID": 4916,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "2124 Central Avenue SW",
    "Site": "Lams Chinese Restaurant",
    "ShootDate": 1357776000000,
    "OriginalDetails": "Lam's Chinese Restaurant - 2124 Central SW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.67277516344448,
    "y": 35.095254602103658
   }
  },
  {
   "attributes": {
    "OBJECTID": 4917,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "5801 Central Avenue NE",
    "Site": "Kaps Coffee Shop",
    "ShootDate": 1357862400000,
    "OriginalDetails": "KAPs - 5801 Central Ave NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.5817786413816,
    "y": 35.077286228809257
   }
  },
  {
   "attributes": {
    "OBJECTID": 4918,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School alleyway",
    "ShootDate": 1358121600000,
    "OriginalDetails": "Amy Biehl Alley - Close 4th street btwn Gold & Central - Alley btwn 4th & 5th/Central & Gold - closure "
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 4919,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1358121600000,
    "OriginalDetails": "El Madrid  Bar - 423 1st SW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4920,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "100 4th Street NW",
    "Site": "4th Street Promenade",
    "ShootDate": 1358208000000,
    "OriginalDetails": "4th street pedestrian mall"
   },
   "geometry": {
    "x": -106.65160061096313,
    "y": 35.084590610357132
   }
  },
  {
   "attributes": {
    "OBJECTID": 4921,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1358208000000,
    "OriginalDetails": "Convention Center - 401 2nd St. NW -  no ITC/no closures"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 4922,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "407 Central Avenue NW ",
    "Site": "Sister Bar",
    "ShootDate": 1358208000000,
    "OriginalDetails": "Sister Bar - 407 Central NW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65193187909719,
    "y": 35.084618338881768
   }
  },
  {
   "attributes": {
    "OBJECTID": 4923,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1358294400000,
    "OriginalDetails": "El Madrid  Bar - 423 1st SW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 4924,
    "Title": "Frank",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1605717/",
    "Address": "120 Central Avenue SW",
    "Site": "Sunshine Building Theatre",
    "ShootDate": 1358380800000,
    "OriginalDetails": "Sunshine Theatre - 120 Central Ave. SW - no ITC/no closures - driving scene but will go with the flow of traffic"
   },
   "geometry": {
    "x": -106.64894942204826,
    "y": 35.084191024811133
   }
  },
  {
   "attributes": {
    "OBJECTID": 4925,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1228176000000,
    "OriginalDetails": "415 Tijeras Ave NW, No ITC, Closure on Tijeras from 4th to 6th NB"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 4926,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "5000 Central Avenue SW",
    "Site": "Victors Tire Shop",
    "ShootDate": 1228176000000,
    "OriginalDetails": "5000 Central Ave SW, no ITC and no closure"
   },
   "geometry": {
    "x": -106.6932795385879,
    "y": 35.083821682358931
   }
  },
  {
   "attributes": {
    "OBJECTID": 4927,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1228435200000,
    "OriginalDetails": "401 2nd ST NW, No ITC, No closures"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 4928,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "320 Central Avenue SW",
    "Site": "Rosenwald Building and Roosters alley",
    "ShootDate": 1229385600000,
    "OriginalDetails": "320 Central Ave, No ITC, Closure in Alley behind Roosters south of Central between 3rd & 4th"
   },
   "geometry": {
    "x": -106.6512043640913,
    "y": 35.084493620356852
   }
  },
  {
   "attributes": {
    "OBJECTID": 4929,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "5000 Central Avenue SE",
    "Site": "Desert Sands Motel",
    "ShootDate": 1229558400000,
    "OriginalDetails": "Desert Sands Motel - 5000 Central Ave. SE"
   },
   "geometry": {
    "x": -106.5888186124991,
    "y": 35.078025538023084
   }
  },
  {
   "attributes": {
    "OBJECTID": 4930,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "4800 Osuna Road NE",
    "Site": "Cliffs Amusement Park",
    "ShootDate": 1229644800000,
    "OriginalDetails": "Cliffs Amusement Park"
   },
   "geometry": {
    "x": -106.65084882617322,
    "y": 34.995785010651744
   }
  },
  {
   "attributes": {
    "OBJECTID": 4931,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1231200000000,
    "OriginalDetails": "123 4th st sw, ITC on 4th fr Silver to Gold, ITC on Gold fr 3rd to 5th,closure on 4th fr gold to central nb,sb/Alle closure south of central fr 3rd to 5th st.eb, wb"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 4932,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1231286400000,
    "OriginalDetails": "123 4th st sw, ITC on 4th fr Silver to Gold, ITC on Gold fr 3rd to 5th,closure on 4th fr gold to central nb,sb/Alle closure south of central fr 3rd to 5th st.eb, wb"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 4933,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "8020 Central Avenue SE",
    "Site": "Fair N Square Food Store",
    "ShootDate": 1231891200000,
    "OriginalDetails": "Fair 'n Square - entirely on property"
   },
   "geometry": {
    "x": -106.5570764110677,
    "y": 35.074568617876345
   }
  },
  {
   "attributes": {
    "OBJECTID": 4934,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "3013 Central Avenue NE",
    "Site": "Lobo Theater",
    "ShootDate": 1231977600000,
    "OriginalDetails": "3013 Central Ave- NW Bound lane Closure on Central from Richmond to Dartmouth Dr. wb./ Alley clousre north of Central from Richmond to Dartmouth eb wb"
   },
   "geometry": {
    "x": -106.61150159714094,
    "y": 35.080718484884962
   }
  },
  {
   "attributes": {
    "OBJECTID": 4935,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "2425 Isleta Boulevard SW",
    "Site": "Driving shot from Isleta Boulevard SW to Bridge Blvd onto Cesar Chavez to University Ave to Coal Ave",
    "ShootDate": 1232064000000,
    "OriginalDetails": "Driving Shot on 2425 Isleta to Bridge/Cesar Chavez to University to Coal, 5000 Central Ave to Girard"
   },
   "geometry": {
    "x": -106.67951140518127,
    "y": 35.039507999018298
   }
  },
  {
   "attributes": {
    "OBJECTID": 4936,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "5000 Central Avenue SE",
    "Site": "Driving shot from Desert Sands Motel on Central Avenue SE to Girard Boulevard NE",
    "ShootDate": 1232064000000,
    "OriginalDetails": "Driving Shot on 2425 Isleta to Bridge/Cesar Chavez to University to Coal, 5000 Central Ave to Girard"
   },
   "geometry": {
    "x": -106.5888186124991,
    "y": 35.078025538023084
   }
  },
  {
   "attributes": {
    "OBJECTID": 4937,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1232496000000,
    "OriginalDetails": "123 4th St SW (Amy Biehl)-Closure on 4th St fr.Gold to Central nb, sb/Alley closure S.of Central fr. 3rd st to 4th St. eb wb fr.8pm 1/20 till 1/22 at 12am."
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 4938,
    "Title": "Friendship!",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1247657/",
    "Address": "315 Gold Avenue SW",
    "Site": "Atomic Cantina closed",
    "ShootDate": 1232496000000,
    "OriginalDetails": "315 Gold Ave (Atomic cantina)-  westbound lane closure in Gold fr 3rd to 4th from Noon-10pm/ eastbound lane closure on Gold from 3rd to 4th from 6pm-10pm making it a full Closure  after 6pm on Gold Ave fr. 3rd st. to 4th st eb wb"
   },
   "geometry": {
    "x": -106.65141463724143,
    "y": 35.083518032385406
   }
  },
  {
   "attributes": {
    "OBJECTID": 4939,
    "Title": "Frontera",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2510028/",
    "Address": "415 Roma Avenue NW",
    "Site": "Regional Correction Center",
    "ShootDate": 1354665600000,
    "OriginalDetails": "415 Roma NW - Closure on Roma from 4th to 5th"
   },
   "geometry": {
    "x": -106.651392195529,
    "y": 35.089262527563427
   }
  },
  {
   "attributes": {
    "OBJECTID": 4940,
    "Title": "Frontera",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2510028/",
    "Address": "4700 Coal Avenue SE",
    "Site": "Highland High School",
    "ShootDate": 1354752000000,
    "OriginalDetails": "Highland High School - no ITC/no closures"
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 4941,
    "Title": "Frontera",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2510028/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE and Los Picaros Road SE",
    "ShootDate": null,
    "OriginalDetails": "Bobby Foster - Bernalillo county"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 4942,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "201 Marquette Avenue NW ",
    "Site": "DoubleTree Hotel",
    "ShootDate": 1192838400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857966290091,
    "y": 35.087915523394642
   }
  },
  {
   "attributes": {
    "OBJECTID": 4943,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194048000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4944,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194048000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4945,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194134400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4946,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194134400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4947,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194220800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4948,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194220800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4949,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194307200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4950,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194307200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4951,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194393600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4952,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1194393600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 4953,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "5th & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1194566400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65317547084392,
    "y": 35.082737755175124
   }
  },
  {
   "attributes": {
    "OBJECTID": 4954,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "5th & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1194652800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65317547084392,
    "y": 35.082737755175124
   }
  },
  {
   "attributes": {
    "OBJECTID": 4955,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "201 Marquette Avenue NW ",
    "Site": "DoubleTree Hotel",
    "ShootDate": 1194739200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857966290091,
    "y": 35.087915523394642
   }
  },
  {
   "attributes": {
    "OBJECTID": 4956,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "5th & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1194739200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65317547084392,
    "y": 35.082737755175124
   }
  },
  {
   "attributes": {
    "OBJECTID": 4957,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1903 Avenida Cesar Chavez SE",
    "Site": "Albuquerque Veloport & BMX Track",
    "ShootDate": 1194912000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62446003945611,
    "y": 35.069559513096529
   }
  },
  {
   "attributes": {
    "OBJECTID": 4958,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1903 Avenida Cesar Chavez SE",
    "Site": "Albuquerque Veloport & BMX Track",
    "ShootDate": 1194998400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62446003945611,
    "y": 35.069559513096529
   }
  },
  {
   "attributes": {
    "OBJECTID": 4959,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "1903 Avenida Cesar Chavez SE",
    "Site": "Albuquerque Veloport & BMX Track",
    "ShootDate": 1195084800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62446003945611,
    "y": 35.069559513096529
   }
  },
  {
   "attributes": {
    "OBJECTID": 4960,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "4th & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1195171200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6519854806719,
    "y": 35.082561400148847
   }
  },
  {
   "attributes": {
    "OBJECTID": 4961,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "4th & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1195257600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6519854806719,
    "y": 35.082561400148847
   }
  },
  {
   "attributes": {
    "OBJECTID": 4962,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "One Civic Plaza ",
    "Site": "Civic Plaza ",
    "ShootDate": 1195257600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 4963,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "4th & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1195344000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6519854806719,
    "y": 35.082561400148847
   }
  },
  {
   "attributes": {
    "OBJECTID": 4964,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "One Civic Plaza ",
    "Site": "Civic Plaza  ",
    "ShootDate": 1195344000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 4965,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "4th & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1195430400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6519854806719,
    "y": 35.082561400148847
   }
  },
  {
   "attributes": {
    "OBJECTID": 4966,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "4th & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1195862400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6519854806719,
    "y": 35.082561400148847
   }
  },
  {
   "attributes": {
    "OBJECTID": 4967,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "201 Marquette Avenue NW ",
    "Site": "DoubleTree Hotel",
    "ShootDate": 1195948800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857966290091,
    "y": 35.087915523394642
   }
  },
  {
   "attributes": {
    "OBJECTID": 4968,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "201 Marquette Avenue NW ",
    "Site": "DoubleTree Hotel",
    "ShootDate": 1195948800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857966290091,
    "y": 35.087915523394642
   }
  },
  {
   "attributes": {
    "OBJECTID": 4969,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "20 First Plaza",
    "Site": "Galeria",
    "ShootDate": 1196035200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64999645791923,
    "y": 35.086541055062661
   }
  },
  {
   "attributes": {
    "OBJECTID": 4970,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "201 Marquette Avenue NW ",
    "Site": "DoubleTree Hotel",
    "ShootDate": 1196035200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857966290091,
    "y": 35.087915523394642
   }
  },
  {
   "attributes": {
    "OBJECTID": 4971,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "201 Marquette Avenue NW ",
    "Site": "DoubleTree Hotel",
    "ShootDate": 1196035200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857966290091,
    "y": 35.087915523394642
   }
  },
  {
   "attributes": {
    "OBJECTID": 4972,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "One Civic Plaza ",
    "Site": "Civic Plaza underground parking",
    "ShootDate": 1196121600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 4973,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "One Civic Plaza ",
    "Site": "Civic Plaza underground parking",
    "ShootDate": 1196208000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 4974,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "Alley btwn 3rd & 4th/Central & Gold",
    "Site": "Alleyway ",
    "ShootDate": 1196467200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4975,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "Alley btwn 3rd & 4th/Central & Gold",
    "Site": "Alleyway ",
    "ShootDate": 1196553600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4976,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "3rd & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1196640000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65078474664904,
    "y": 35.082406699025817
   }
  },
  {
   "attributes": {
    "OBJECTID": 4977,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "Alley btwn 3rd & 4th/Central & Gold",
    "Site": "Alleyway ",
    "ShootDate": 1196640000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4978,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "3rd & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1196726400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65078474664904,
    "y": 35.082406699025817
   }
  },
  {
   "attributes": {
    "OBJECTID": 4979,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "3rd & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1196812800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65078474664904,
    "y": 35.082406699025817
   }
  },
  {
   "attributes": {
    "OBJECTID": 4980,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "507 Roma NW",
    "Site": "Round Building",
    "ShootDate": 1197244800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65232062773134,
    "y": 35.089393061143596
   }
  },
  {
   "attributes": {
    "OBJECTID": 4981,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "3rd & Silver",
    "Site": "Intersection  ",
    "ShootDate": 1197331200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65078474664904,
    "y": 35.082406699025817
   }
  },
  {
   "attributes": {
    "OBJECTID": 4982,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "615 Gold Ave. SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1197417600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 4983,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "615 Gold Ave. SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1197504000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 4984,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "210 Marquette NW",
    "Site": "DoubleTree Hotel",
    "ShootDate": 1197504000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64869715445523,
    "y": 35.087902005542254
   }
  },
  {
   "attributes": {
    "OBJECTID": 4985,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "201 Marquette Avenue NW ",
    "Site": "DoubleTree Hotel",
    "ShootDate": 1197504000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857966290091,
    "y": 35.087915523394642
   }
  },
  {
   "attributes": {
    "OBJECTID": 4986,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "615 Gold Ave. SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1197590400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 4987,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "615 Gold Ave. SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1197849600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 4988,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "One Civic Plaza ",
    "Site": "Civic Plaza underground parking",
    "ShootDate": 1197849600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 4989,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/?ref_=nv_sr_1",
    "Address": "One University of New Mexico",
    "Site": "Rodey Theatre",
    "ShootDate": 1198022400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 4990,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "200 Copper Avenue NW",
    "Site": "Copper Avenue NW between 2nd and 4th Streets",
    "ShootDate": 1200009600000,
    "OriginalDetails": "Copper between 2nd & 4th/3rd from Central to Marquette. ITC on Copper from 3rd to 4th and Tijeras between 2nd & 5th. Closure on Copper from 2nd to 4th and 3rd from Central to Marquette and Tijeras from 2nd to 3rd."
   },
   "geometry": {
    "x": -106.64906267535108,
    "y": 35.085237691590599
   }
  },
  {
   "attributes": {
    "OBJECTID": 4991,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "400 Gold Avenue SW",
    "Site": "Gold Avenue SW between 4th and 6th Streets",
    "ShootDate": 1200009600000,
    "OriginalDetails": "Gold from 4th to 6th St. ITC on 4th from Central to Silver and 6th from Central to Silver. Closure on Gold from 4th to 6th and 5th from Central to Silver."
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4992,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "200 Gold Avenue SW",
    "Site": "Gold Avenue SW between 2nd and 7th Streets",
    "ShootDate": 1200096000000,
    "OriginalDetails": "Gold from 2nd to 7th. Closure on Gold from 2nd to 7th. All cross streets avove 2nd to 7th Central to Silver."
   },
   "geometry": {
    "x": -106.64946612760978,
    "y": 35.083241023050171
   }
  },
  {
   "attributes": {
    "OBJECTID": 4993,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "400 3rd Street NW",
    "Site": "3rd Street NW between Marquette Avenue NW and Central Avenue NW ",
    "ShootDate": 1200096000000,
    "OriginalDetails": "Copper between 2nd & 4th/3rd from Central to Marquette. ITC on Copper from 3rd to 4th and Tijeras between 2nd & 5th. Closure on Copper from 2nd to 4th and 3rd from Central to Marquette and Tijeras from 2nd to 3rd."
   },
   "geometry": {
    "x": -106.64969857297775,
    "y": 35.088067640611264
   }
  },
  {
   "attributes": {
    "OBJECTID": 4994,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "400 Gold Avenue SW",
    "Site": "Gold Avenue SW between 4th and 6th Streets",
    "ShootDate": 1200096000000,
    "OriginalDetails": "Gold from 4th to 6th St. ITC on 4th from Central to Silver and 6th from Central to Silver. Closure on Gold from 4th to 6th and 5th from Central to Silver."
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4995,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "200 Copper Avenue NW",
    "Site": "Copper Avenue NW between 2nd and 4th Streets",
    "ShootDate": 1200182400000,
    "OriginalDetails": "Copper between 2nd & 4th/3rd from Central to Marquette. ITC on Copper from 3rd to 4th and Tijeras between 2nd & 5th. Closure on Copper from 2nd to 4th and 3rd from Central to Marquette and Tijeras from 2nd to 3rd."
   },
   "geometry": {
    "x": -106.64906267535108,
    "y": 35.085237691590599
   }
  },
  {
   "attributes": {
    "OBJECTID": 4996,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "200 Gold Avenue SW",
    "Site": "Gold Avenue SW between 2nd and 7th Streets",
    "ShootDate": 1200182400000,
    "OriginalDetails": "Gold from 2nd to 7th. Closure on Gold from 2nd to 7th. All cross streets avove 2nd to 7th Central to Silver."
   },
   "geometry": {
    "x": -106.64946612760978,
    "y": 35.083241023050171
   }
  },
  {
   "attributes": {
    "OBJECTID": 4997,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "400 Gold Avenue SW",
    "Site": "Gold Avenue SW between 4th and 6th Streets",
    "ShootDate": 1200182400000,
    "OriginalDetails": "Gold from 4th to 6th St. ITC on 4th from Central to Silver and 6th from Central to Silver. Closure on Gold from 4th to 6th and 5th from Central to Silver."
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 4998,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "200 Gold Avenue SW",
    "Site": "Gold Avenue SW between 2nd and 7th Streets",
    "ShootDate": 1200268800000,
    "OriginalDetails": "Gold from 2nd to 7th. Closure on Gold from 2nd to 7th. All cross streets avove 2nd to 7th Central to Silver."
   },
   "geometry": {
    "x": -106.64946612760978,
    "y": 35.083241023050171
   }
  },
  {
   "attributes": {
    "OBJECTID": 4999,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "400 Gold Avenue SW",
    "Site": "Gold Avenue SW between 4th and 6th Streets",
    "ShootDate": 1200268800000,
    "OriginalDetails": "Gold from 4th to 6th St. ITC on 4th from Central to Silver and 6th from Central to Silver. Closure on Gold from 4th to 6th and 5th from Central to Silver."
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5000,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "200 Gold Avenue SW",
    "Site": "Gold Avenue SW between 2nd and 6th Streets",
    "ShootDate": 1200787200000,
    "OriginalDetails": "Gold from 2nd to 6th. Closure on Gold from 2nd to 6th. Closure on 3rd, 4th, and 5th St.from Central to Silver. ITC on 2nd St. from Central to Silver and 6th St. from Central to Silver."
   },
   "geometry": {
    "x": -106.64946612760978,
    "y": 35.083241023050171
   }
  },
  {
   "attributes": {
    "OBJECTID": 5001,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "200 Gold Avenue SW",
    "Site": "Gold Avenue SW between 2nd and 6th Streets",
    "ShootDate": 1200873600000,
    "OriginalDetails": "Gold from 2nd to 6th. Closure on Gold from 2nd to 6th. Closure on 3rd, 4th, and 5th St.from Central to Silver. ITC on 2nd St. from Central to Silver and 6th St. from Central to Silver."
   },
   "geometry": {
    "x": -106.64946612760978,
    "y": 35.083241023050171
   }
  },
  {
   "attributes": {
    "OBJECTID": 5002,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "500 5th Street NW",
    "Site": "5th Street NW between Roma Avenue NW and Central Avenue NW",
    "ShootDate": 1201219200000,
    "OriginalDetails": "5th from Central to Roma. ITC on 5th from Roma to Fruit. Closure on 5th from Central to Roma. All Cross streets on 5th from Central to Roma and 4th "
   },
   "geometry": {
    "x": -106.6519357589209,
    "y": 35.089334803105828
   }
  },
  {
   "attributes": {
    "OBJECTID": 5003,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "2 Central Avenue SW",
    "Site": "Central Avenue SW between 1st Street SW and Broadway Boulevard SE",
    "ShootDate": 1201305600000,
    "OriginalDetails": "Central between 1st & Broadway - ITC on Central between 1st St. and Broadway"
   },
   "geometry": {
    "x": -106.64809990235206,
    "y": 35.084080261505406
   }
  },
  {
   "attributes": {
    "OBJECTID": 5004,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "500 5th Street NW",
    "Site": "5th Street NW between Roma Avenue NW and Central Avenue NW",
    "ShootDate": 1201305600000,
    "OriginalDetails": "5th from Central to Roma. ITC on 5th from Roma to Fruit. Closure on 5th from Central to Roma. All Cross streets on 5th from Central to Roma and 4th "
   },
   "geometry": {
    "x": -106.6519357589209,
    "y": 35.089334803105828
   }
  },
  {
   "attributes": {
    "OBJECTID": 5005,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "500 5th Street NW",
    "Site": "5th Street NW between Roma Avenue NW and Central Avenue NW",
    "ShootDate": 1201392000000,
    "OriginalDetails": "5th from Central to Roma. ITC on 5th from Roma to Fruit. Closure on 5th from Central to Roma. All Cross streets on 5th from Central to Roma and 4th "
   },
   "geometry": {
    "x": -106.6519357589209,
    "y": 35.089334803105828
   }
  },
  {
   "attributes": {
    "OBJECTID": 5006,
    "Title": "Gamer",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1034032/",
    "Address": "500 5th Street NW",
    "Site": "5th Street NW between Roma Avenue NW and Central Avenue NW",
    "ShootDate": 1201478400000,
    "OriginalDetails": "5th from Central to Roma. ITC on 5th from Roma to Fruit. Closure on 5th from Central to Roma. All Cross streets on 5th from Central to Roma and 4th "
   },
   "geometry": {
    "x": -106.6519357589209,
    "y": 35.089334803105828
   }
  },
  {
   "attributes": {
    "OBJECTID": 5007,
    "Title": "Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1577052/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1300233600000,
    "OriginalDetails": "Amy Biehl HS - no ITC/ no closures"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5008,
    "Title": "Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1577052/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1300320000000,
    "OriginalDetails": "Amy Biehl HS - no ITC/ no closures"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5009,
    "Title": "Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1577052/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1300406400000,
    "OriginalDetails": "Amy Biehl HS - no ITC/ no closures"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5010,
    "Title": "Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1577052/",
    "Address": "6400 Wyoming Boulevard NE",
    "Site": "Albuquerque Academy",
    "ShootDate": 1300492800000,
    "OriginalDetails": "Albuquerque Academy"
   },
   "geometry": {
    "x": -106.56036673154429,
    "y": 35.151827397747468
   }
  },
  {
   "attributes": {
    "OBJECTID": 5011,
    "Title": "Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1577052/",
    "Address": "6400 Wyoming Boulevard NE",
    "Site": "Albuquerque Academy",
    "ShootDate": 1300579200000,
    "OriginalDetails": "Albuquerque Academy"
   },
   "geometry": {
    "x": -106.56036673154429,
    "y": 35.151827397747468
   }
  },
  {
   "attributes": {
    "OBJECTID": 5012,
    "Title": "Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1577052/",
    "Address": "2513 4th Street NW",
    "Site": "Hi Lo Market",
    "ShootDate": 1300838400000,
    "OriginalDetails": "2513 4th ST. - HiLoMarket - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64668488330304,
    "y": 35.110366520456729
   }
  },
  {
   "attributes": {
    "OBJECTID": 5013,
    "Title": "Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1577052/",
    "Address": "2525 Tingley Drive SW",
    "Site": "Tingley Beach driving scene",
    "ShootDate": 1301011200000,
    "OriginalDetails": "Driving grids - AM - Tingley Beach no ITC/no closures, PM - Nob Hill, no ITC/no closures"
   },
   "geometry": {
    "x": -106.67922609934872,
    "y": 35.091179847152631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5014,
    "Title": "Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1577052/",
    "Address": "2900 Central Avenue SE",
    "Site": "Nob Hill driving shot Girard Boulevard SE  heading east on Central Avenue SE",
    "ShootDate": 1301011200000,
    "OriginalDetails": "Driving grids - AM - Tingley Beach no ITC/no closures, PM - Nob Hill, no ITC/no closures"
   },
   "geometry": {
    "x": -106.61313277420351,
    "y": 35.081007330989564
   }
  },
  {
   "attributes": {
    "OBJECTID": 5015,
    "Title": "Good Luck Mr Gorski",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1895371/",
    "Address": "7515 Lomas Boulevard NE",
    "Site": "Skidmores Holiday Bowl",
    "ShootDate": 1289520000000,
    "OriginalDetails": "Holiday Bowl - no closures/no ITC"
   },
   "geometry": {
    "x": -106.5632412766731,
    "y": 35.087265010775631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5016,
    "Title": "Great American Road Trip",
    "Type": "TV Series Road Warriors episode",
    "IMDbLink": "http://www.imdb.com/title/tt1465655/",
    "Address": "4401 Alameda Boulevard NE",
    "Site": "Anderson Abruzzo Albuquerque Intl Balloon Fiesta Park",
    "ShootDate": 1243555200000,
    "OriginalDetails": "Balloon Park - location agreement issued only"
   },
   "geometry": {
    "x": -106.59857185510076,
    "y": 35.184546038252044
   }
  },
  {
   "attributes": {
    "OBJECTID": 5017,
    "Title": "Great American Road Trip",
    "Type": "TV Series Road Warriors episode",
    "IMDbLink": "http://www.imdb.com/title/tt1465655/",
    "Address": "4401 Alameda Boulevard NE",
    "Site": "Anderson Abruzzo Albuquerque Intl Balloon Fiesta Park",
    "ShootDate": 1243641600000,
    "OriginalDetails": "Balloon Park - location agreement issued only"
   },
   "geometry": {
    "x": -106.59857185510076,
    "y": 35.184546038252044
   }
  },
  {
   "attributes": {
    "OBJECTID": 5018,
    "Title": "Habitat for Humanity",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "1900 Stanford Drive NE",
    "Site": "Cutler Avenue NE and Stanford Drive NE intersection",
    "ShootDate": 1365724800000,
    "OriginalDetails": "Intersection of Cutler & Stanford Dr NE-ITC on Stanford fr Cutler to Ada NB"
   },
   "geometry": {
    "x": -106.62072574551497,
    "y": 35.105081943203693
   }
  },
  {
   "attributes": {
    "OBJECTID": 5019,
    "Title": "halflife digital",
    "Type": "Commerical",
    "IMDbLink": "na",
    "Address": "1 Civic Plaza NW",
    "Site": "Albuquerque Civic Plaza",
    "ShootDate": 1204329600000,
    "OriginalDetails": "Civic Plaza"
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5020,
    "Title": "halflife digital",
    "Type": "Commerical",
    "IMDbLink": "na",
    "Address": "100 3rd Street SW",
    "Site": "3rd Street SW between Central Avenue SW and Gold Avenue SW",
    "ShootDate": 1204329600000,
    "OriginalDetails": "3rd between Central & Gold; "
   },
   "geometry": {
    "x": -106.65038428937348,
    "y": 35.084367770326487
   }
  },
  {
   "attributes": {
    "OBJECTID": 5021,
    "Title": "halflife digital",
    "Type": "Commerical",
    "IMDbLink": "na",
    "Address": "100 Gold Avenue SW",
    "Site": "Gold Avenue SW between 1st and 2nd Streets",
    "ShootDate": 1204329600000,
    "OriginalDetails": "Gold between 1st & 2nd; "
   },
   "geometry": {
    "x": -106.64826164671392,
    "y": 35.083070957234334
   }
  },
  {
   "attributes": {
    "OBJECTID": 5022,
    "Title": "halflife digital",
    "Type": "Commerical",
    "IMDbLink": "na",
    "Address": "300 Central Avenue SW",
    "Site": "Central Avenue SW between 3rd and 4th Streets SW",
    "ShootDate": 1204329600000,
    "OriginalDetails": "Central between 3rd & 4th;"
   },
   "geometry": {
    "x": -106.65043457436813,
    "y": 35.084391348568907
   }
  },
  {
   "attributes": {
    "OBJECTID": 5023,
    "Title": "halflife digital",
    "Type": "Commerical",
    "IMDbLink": "na",
    "Address": "300 Copper Avenue NW",
    "Site": "Copper Avenue NW between 3rd and 4th Streets",
    "ShootDate": 1204329600000,
    "OriginalDetails": "Copper between 3rd & 4th; "
   },
   "geometry": {
    "x": -106.65024227291359,
    "y": 35.085400513007798
   }
  },
  {
   "attributes": {
    "OBJECTID": 5024,
    "Title": "halflife digital",
    "Type": "PSA on DWI",
    "IMDbLink": "na",
    "Address": "100 Roma Avenue NW",
    "Site": "Roma Avenue NW and 1st Street NW intersection",
    "ShootDate": 1333929600000,
    "OriginalDetails": "Intersection of 1st & Roma - Close 1st btwn Lomas and Marquette, Close Roma btwn 2nd & 1st"
   },
   "geometry": {
    "x": -106.64719630856733,
    "y": 35.088710658791513
   }
  },
  {
   "attributes": {
    "OBJECTID": 5025,
    "Title": "halflife digital",
    "Type": "PSA on bicycle safety",
    "IMDbLink": "na",
    "Address": "1600 Kit Carson Avenue SW",
    "Site": "Kit Carson Park",
    "ShootDate": 1337385600000,
    "OriginalDetails": "Kit Carson Park - no ITC/no closures"
   },
   "geometry": {
    "x": -106.66872832405643,
    "y": 35.08286304536049
   }
  },
  {
   "attributes": {
    "OBJECTID": 5026,
    "Title": "halflife digital",
    "Type": "Commercial for Hard Rock Casino",
    "IMDbLink": "na",
    "Address": "2525 Tingley Drive SW",
    "Site": "Tingley Beach Street driving scene",
    "ShootDate": 1338336000000,
    "OriginalDetails": "Tingley Beach - no ITC/no closures"
   },
   "geometry": {
    "x": -106.67922609934872,
    "y": 35.091179847152631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5027,
    "Title": "halflife digital",
    "Type": "Commercial for Hard Rock Casino",
    "IMDbLink": "na",
    "Address": "8020 Central Avenue SE",
    "Site": "Fair N Square Food Store",
    "ShootDate": 1338336000000,
    "OriginalDetails": "Fair N' Square 8020 Central SE- no ITC/no closures"
   },
   "geometry": {
    "x": -106.5570764110677,
    "y": 35.074568617876345
   }
  },
  {
   "attributes": {
    "OBJECTID": 5028,
    "Title": "halflife digital",
    "Type": "Commerical",
    "IMDbLink": "na",
    "Address": "7100 Tramway Boulevard NE",
    "Site": "Elena Gallegos Picnic Area and Domingo Baca and Pino Trails",
    "ShootDate": 1345248000000,
    "OriginalDetails": "Domingo Baca/Pino Trail near Elena Gallegos Picnic Area"
   },
   "geometry": {
    "x": -106.49718282592383,
    "y": 35.158347321159404
   }
  },
  {
   "attributes": {
    "OBJECTID": 5029,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "5925 Central NW",
    "Site": "Ski-Hi Liquors",
    "ShootDate": 1190332800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.70382340284415,
    "y": 35.081470946701593
   }
  },
  {
   "attributes": {
    "OBJECTID": 5030,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "5925 Central NW",
    "Site": "Ski-Hi Liquors",
    "ShootDate": 1190419200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.70382340284415,
    "y": 35.081470946701593
   }
  },
  {
   "attributes": {
    "OBJECTID": 5031,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "300 Central Avenue SE",
    "Site": "Academy Reprographics",
    "ShootDate": 1190764800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64458288842025,
    "y": 35.083627455624956
   }
  },
  {
   "attributes": {
    "OBJECTID": 5032,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "300 Central Avenue SE",
    "Site": "Academy Reprographics",
    "ShootDate": 1190851200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64458288842025,
    "y": 35.083627455624956
   }
  },
  {
   "attributes": {
    "OBJECTID": 5033,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191024000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5034,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191110400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5035,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191196800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5036,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191283200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5037,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191369600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5038,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191628800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5039,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191715200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5040,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191801600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5041,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191888000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5042,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1191974400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5043,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1192233600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5044,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "6401 Fortuna NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1192320000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.7114489856954,
    "y": 35.094367455479215
   }
  },
  {
   "attributes": {
    "OBJECTID": 5045,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "4595 San Mateo NE",
    "Site": "Itz",
    "ShootDate": 1192406400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58640342268747,
    "y": 35.134817565660647
   }
  },
  {
   "attributes": {
    "OBJECTID": 5046,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1192492800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5047,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1192579200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5048,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1192838400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5049,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1192924800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5050,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1193011200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5051,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1193097600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5052,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1193184000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5053,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1193443200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5054,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1193529600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5055,
    "Title": "Hamlet 2",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1104733/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1193616000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5056,
    "Title": "Hector Balderas",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "1600 Kit Carson Avenue SW",
    "Site": "Kit Carson Park",
    "ShootDate": 1335052800000,
    "OriginalDetails": "Kit Carson Park - no ITC/no closures"
   },
   "geometry": {
    "x": -106.66872832405643,
    "y": 35.08286304536049
   }
  },
  {
   "attributes": {
    "OBJECTID": 5057,
    "Title": "Honeylicious",
    "Type": "Movie",
    "IMDbLink": "na",
    "Address": "3615 Los Picaros Road SE",
    "Site": "Montessa Park",
    "ShootDate": 1365897600000,
    "OriginalDetails": "Montessa Park - Open Space (Location Agreement only)"
   },
   "geometry": {
    "x": -106.59879760891818,
    "y": 35.017793864723757
   }
  },
  {
   "attributes": {
    "OBJECTID": 5058,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "313 Gold SW",
    "Site": "Burt's Tiki Lounge",
    "ShootDate": 1181088000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65130113600361,
    "y": 35.083503234721356
   }
  },
  {
   "attributes": {
    "OBJECTID": 5059,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "313 Gold SW",
    "Site": "Burt's Tiki Lounge",
    "ShootDate": 1181174400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65130113600361,
    "y": 35.083503234721356
   }
  },
  {
   "attributes": {
    "OBJECTID": 5060,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "7777 Jefferson Street NE",
    "Site": "Albuquerque Publishing Company",
    "ShootDate": 1181174400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58882101459417,
    "y": 35.169801614636455
   }
  },
  {
   "attributes": {
    "OBJECTID": 5061,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "7401 Paseo del Volcan NW",
    "Site": "Double Eagle Airport note that Atrisco Vista was formerly named Paseo Del Volcan",
    "ShootDate": 1181520000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.79270735056519,
    "y": 35.159839940962151
   }
  },
  {
   "attributes": {
    "OBJECTID": 5062,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "7401 Paseo del Volcan NW",
    "Site": "Double Eagle Airport note that Atrisco Vista was formerly named Paseo Del Volcan",
    "ShootDate": 1181606400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.79270735056519,
    "y": 35.159839940962151
   }
  },
  {
   "attributes": {
    "OBJECTID": 5063,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "30 Rainbow Rd. NE",
    "Site": "Sandia Casino & Resort",
    "ShootDate": 1182211200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.572655106116,
    "y": 35.204799449752144
   }
  },
  {
   "attributes": {
    "OBJECTID": 5064,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "30 Rainbow Rd. NE",
    "Site": "Sandia Casino & Resort",
    "ShootDate": 1182297600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.572655106116,
    "y": 35.204799449752144
   }
  },
  {
   "attributes": {
    "OBJECTID": 5065,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "30 Rainbow Rd. NE",
    "Site": "Sandia Casino & Resort",
    "ShootDate": 1182384000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.572655106116,
    "y": 35.204799449752144
   }
  },
  {
   "attributes": {
    "OBJECTID": 5066,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "30 Rainbow Rd. NE",
    "Site": "Sandia Casino & Resort",
    "ShootDate": 1182470400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.572655106116,
    "y": 35.204799449752144
   }
  },
  {
   "attributes": {
    "OBJECTID": 5067,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "30 Rainbow Rd. NE",
    "Site": "Sandia Casino & Resort",
    "ShootDate": 1182556800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.572655106116,
    "y": 35.204799449752144
   }
  },
  {
   "attributes": {
    "OBJECTID": 5068,
    "Title": "Husband for Hire",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1043904/?ref_=ttrel_rel_tt",
    "Address": "30 Rainbow Rd. NE",
    "Site": "Sandia Casino & Resort",
    "ShootDate": 1182816000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.572655106116,
    "y": 35.204799449752144
   }
  },
  {
   "attributes": {
    "OBJECTID": 5069,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "3100 Central Avenue SE",
    "Site": "Central Avenue SE between Richmond Drive SE and Jackson Street SE Driving shot",
    "ShootDate": 1225411200000,
    "OriginalDetails": "Driving Shot Central from Richmond to Jackson St.EB WB/Street Closure on Jackson from Central to Silver NB SB"
   },
   "geometry": {
    "x": -106.61076581404116,
    "y": 35.080589580440822
   }
  },
  {
   "attributes": {
    "OBJECTID": 5070,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "4910 Central Avenue NE",
    "Site": "Central Avenue NE",
    "ShootDate": 1225411200000,
    "OriginalDetails": "4910 Central Ave NE/ ITC on Central fr. Manzano to Quincy EB, WB/ Street Closure on Jackson fr. Central to Silver NB, SB"
   },
   "geometry": {
    "x": -106.58935518609978,
    "y": 35.078070520640992
   }
  },
  {
   "attributes": {
    "OBJECTID": 5071,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "9500 Louisiana Boulevard NE",
    "Site": "Dirt Lot privately owned",
    "ShootDate": 1225756800000,
    "OriginalDetails": "Louisiana & Florence  Dirt Lot (private) NW west corner/ NO ITC/No closures"
   },
   "geometry": {
    "x": -106.56875048800374,
    "y": 35.19459130327494
   }
  },
  {
   "attributes": {
    "OBJECTID": 5072,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1225929600000,
    "OriginalDetails": "415 Tijeras Ave NW-No ITC- Closure on Parking Lane and  1 Lane  EB on Tijeras fr 5th to 3rd.& 1 lane NB on 5th fr Tijeras to Roma"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5073,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "300 Tijeras Avenue NW",
    "Site": "Tijeras Avenue NW and 3rd Street NW",
    "ShootDate": 1226016000000,
    "OriginalDetails": "3rd & Tijeras/ ITC on Tijeras fr. 4th and 2nd EB/ ITC on 3rd fr. Marquette and Cooper NB, SB"
   },
   "geometry": {
    "x": -106.65003380358054,
    "y": 35.086529638569878
   }
  },
  {
   "attributes": {
    "OBJECTID": 5074,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1226016000000,
    "OriginalDetails": "415 Tijeras Ave NW-No ITC- Closure on Parking Lane and  1 Lane  EB on Tijeras fr 5th to 3rd.& 1 lane NB on 5th fr Tijeras to Roma"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5075,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1601 Avenida Cesar Chavez SE",
    "Site": "Isotopes Park",
    "ShootDate": 1226275200000,
    "OriginalDetails": "Isotopes Park"
   },
   "geometry": {
    "x": -106.63068759399358,
    "y": 35.068480404157597
   }
  },
  {
   "attributes": {
    "OBJECTID": 5076,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "10000 Candelaria Road NE",
    "Site": "Asbury United Methodist Church",
    "ShootDate": 1226361600000,
    "OriginalDetails": "10000 Candelaria NE - Methodist Church"
   },
   "geometry": {
    "x": -106.53057948066512,
    "y": 35.11615878710024
   }
  },
  {
   "attributes": {
    "OBJECTID": 5077,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "2300 Wisconsin Street NE",
    "Site": "Wisconsin Street NE between Phoenix and Menaul Avenues NE",
    "ShootDate": 1226448000000,
    "OriginalDetails": "Wisconsin/ITC on Wisconsin fr Phoenix to Menaul NB SB, no Closures"
   },
   "geometry": {
    "x": -106.5521035011482,
    "y": 35.109266895018187
   }
  },
  {
   "attributes": {
    "OBJECTID": 5078,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1226880000000,
    "OriginalDetails": "415 Tijeras (Civic Plaza) Lane Shift on 5th from Marquette to Copper EB WB/and on Tijeras fr 6th to 3rd Parking lane plus 1 Traffic lane EB WB"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5079,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "2525 Tingley Drive SW",
    "Site": "Tingley Beach Duck Ponds",
    "ShootDate": 1226966400000,
    "OriginalDetails": "Tingley Ponds Biopark- ITC on Tingley Drive from Central to Alcalde NB SB"
   },
   "geometry": {
    "x": -106.67922609934872,
    "y": 35.091179847152631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5080,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "4000 Central Avenue NW",
    "Site": "Central Avenue Bridge between Atrisco Drive SW and Tingley Drive SW",
    "ShootDate": 1226966400000,
    "OriginalDetails": "Central Ave/ Rio Grande Bridge/ ITC on Central fr Atrisco to Tingley EB WB"
   },
   "geometry": {
    "x": -106.68390421003976,
    "y": 35.086296597252591
   }
  },
  {
   "attributes": {
    "OBJECTID": 5081,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1226966400000,
    "OriginalDetails": "415 Tijeras (Civic Plaza) Lane Shift on 5th from Marquette to Copper EB WB/and on Tijeras fr 6th to 3rd Parking lane plus 1 Traffic lane EB WB"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5082,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1227052800000,
    "OriginalDetails": "415 Tijeras (Civic Plaza) Lane Shift on 5th from Marquette to Copper EB WB/and on Tijeras fr 6th to 3rd Parking lane plus 1 Traffic lane EB WB"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5083,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1227139200000,
    "OriginalDetails": "415 Tijeras (Civic Plaza) Lane Shift on 5th from Marquette to Copper EB WB/and on Tijeras fr 6th to 3rd Parking lane plus 1 Traffic lane EB WB"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5084,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228089600000,
    "OriginalDetails": "6th & Central(Anasazi Building) 1 Northbound Lane Closure on 6th St fr. Gold to Central"
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5085,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228176000000,
    "OriginalDetails": "6th & Central(Anasazi Building)ITC on Gold from5th to 7th, on/central from 6th-7th, closure on 6th from Gold to central, on 5th from Central to Gold . "
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5086,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228262400000,
    "OriginalDetails": "6th & Central(Anasazi Building) Close NB & SB 6th between Central and Gold"
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5087,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228348800000,
    "OriginalDetails": "6th & Central(Anasazi Building) Close NB & SB 6th between Central and Gold"
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5088,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228435200000,
    "OriginalDetails": "6th & Central(Anasazi Building) Close NB & SB 6th between Central and Gold"
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5089,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228521600000,
    "OriginalDetails": "6th & Central(Anasazi Building) Close NB & SB 6th between Central and Gold"
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5090,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228608000000,
    "OriginalDetails": "6th & Central(Anasazi Building) Close NB & SB 6th between Central and Gold"
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5091,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228694400000,
    "OriginalDetails": "6th & Central(Anasazi Building) Close NB & SB 6th between Central and Gold"
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5092,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "500 Copper Avenue NW",
    "Site": "Copper Avenue NW and 5th Street",
    "ShootDate": 1228780800000,
    "OriginalDetails": "5th & Copper-ITC on 5th fr. Central to Copper, NB SB/Street closure on Copper fr. 5th st. to 4th st.EB"
   },
   "geometry": {
    "x": -106.65263586812409,
    "y": 35.085701694908323
   }
  },
  {
   "attributes": {
    "OBJECTID": 5093,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "520 Central Avenue SW",
    "Site": "Anasazi Building",
    "ShootDate": 1228780800000,
    "OriginalDetails": "6th & Central(Anasazi Building) Close NB & SB 6th between Central and Gold"
   },
   "geometry": {
    "x": -106.65368667602097,
    "y": 35.084808260755331
   }
  },
  {
   "attributes": {
    "OBJECTID": 5094,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "5601 Balloon Fiesta Parkway NE",
    "Site": "MIOX Corporation parking lot",
    "ShootDate": 1229299200000,
    "OriginalDetails": "5601 Ballon Fiesta Parking- no ITC/ One WB lane closure on Balloon Parkway fr Frontage  to San Mateo."
   },
   "geometry": {
    "x": -106.58203788618944,
    "y": 35.198993532861081
   }
  },
  {
   "attributes": {
    "OBJECTID": 5095,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "8101 Rainbow Boulevard NW",
    "Site": "Tony Hillerman Middle School",
    "ShootDate": 1231718400000,
    "OriginalDetails": "Volcano Vista Middle School 8101 Rainbow Blvd., ITC on Rainbow fr. Rosa Parks to Woodmont, no closures"
   },
   "geometry": {
    "x": -106.73372051408931,
    "y": 35.174618020564161
   }
  },
  {
   "attributes": {
    "OBJECTID": 5096,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "3200 Central Avenue SE",
    "Site": "Hiway House Motel",
    "ShootDate": 1231804800000,
    "OriginalDetails": "3200 Central Ave., ITC on Central fr. Bryn Mawr to Wellesley, Closures on Central from Bryn Mawr to Wellesley (eastbound only)"
   },
   "geometry": {
    "x": -106.60950283844723,
    "y": 35.08041594517325
   }
  },
  {
   "attributes": {
    "OBJECTID": 5097,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "3222 Central Avenue SE",
    "Site": "Kellys Brew Pub",
    "ShootDate": 1231804800000,
    "OriginalDetails": "Hiway House, Gruet, Kelly's"
   },
   "geometry": {
    "x": -106.60864813637015,
    "y": 35.080304506299569
   }
  },
  {
   "attributes": {
    "OBJECTID": 5098,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "8400 Pan American Freeway NE",
    "Site": "Gruet Winery",
    "ShootDate": 1231804800000,
    "OriginalDetails": "Hiway House, Gruet, Kelly's"
   },
   "geometry": {
    "x": -106.58230087697201,
    "y": 35.178663709480041
   }
  },
  {
   "attributes": {
    "OBJECTID": 5099,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "3100 Central Avenue SE",
    "Site": "Central Avenue SE between Richmond Drive NE and Washington Street NE driving shot",
    "ShootDate": 1231891200000,
    "OriginalDetails": "Driving Shot on Central from Washington to Richmond "
   },
   "geometry": {
    "x": -106.61076581404116,
    "y": 35.080589580440822
   }
  },
  {
   "attributes": {
    "OBJECTID": 5100,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "100 4th Street NW",
    "Site": "4th Street Promenade street scene",
    "ShootDate": 1233100800000,
    "OriginalDetails": "4th st Pedestrian Mall & 401 2nd st.- ITC on Copper wb, fr 5th st to 3rd st, closure on Copper eb fr 5th st to 3rd st"
   },
   "geometry": {
    "x": -106.65160061096313,
    "y": 35.084590610357132
   }
  },
  {
   "attributes": {
    "OBJECTID": 5101,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center street scene",
    "ShootDate": 1233100800000,
    "OriginalDetails": "4th st Pedestrian Mall & 401 2nd st.- ITC on Copper wb, fr 5th st to 3rd st, closure on Copper eb fr 5th st to 3rd st"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5102,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "100 Central Avenue SW",
    "Site": "Central Avenue SW between 1st and 2nd Streets SW",
    "ShootDate": 1233878400000,
    "OriginalDetails": "Central Ave between 1st & 2nd- ITC on Central eb, wb bewteen 2nd and 1st st./ nb. Right lane, parking lane closure on 2nd st. from Central to Gold"
   },
   "geometry": {
    "x": -106.64809990235206,
    "y": 35.084080261505406
   }
  },
  {
   "attributes": {
    "OBJECTID": 5103,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Regency Albuquerque",
    "ShootDate": 1235001600000,
    "OriginalDetails": "330 Tijeras (Hyatt) & 415 Tijeras (Old Courthouse) One lane closure, eastbound on Tijeras from 5th st. to 3rd st./ No ITC"
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5104,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Regency Albuquerque",
    "ShootDate": 1235088000000,
    "OriginalDetails": "330 Tijeras (Hyatt) & 415 Tijeras (Old Courthouse) One lane closure, eastbound on Tijeras from 5th st. to 3rd st./ No ITC"
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5105,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1 University Boulevard NE",
    "Site": "University of New Mexico campus",
    "ShootDate": 1235433600000,
    "OriginalDetails": "UNM"
   },
   "geometry": {
    "x": -106.62683216493133,
    "y": 35.081433748713899
   }
  },
  {
   "attributes": {
    "OBJECTID": 5106,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "725 Central Avenue NE",
    "Site": "Miltons Family Restaurant closed",
    "ShootDate": 1237420800000,
    "OriginalDetails": "Milton's - 725 Central NE / ITC on Central right hand wb lane only from Elm Street to High St./ No closures"
   },
   "geometry": {
    "x": -106.6386430301323,
    "y": 35.082873753719682
   }
  },
  {
   "attributes": {
    "OBJECTID": 5107,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "9221 Coors Boulevard NW",
    "Site": "Painting Corral closed",
    "ShootDate": 1238112000000,
    "OriginalDetails": "Paint Corral - 9221Coors Blvd"
   },
   "geometry": {
    "x": -106.66754441997045,
    "y": 35.18142390091036
   }
  },
  {
   "attributes": {
    "OBJECTID": 5108,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1238544000000,
    "OriginalDetails": "500 Central Ave- ITC on Central fr. 4th to 6th eb,wb, and on 5th between Gold and Copper. Closure sb lane only on 5th bwtn Central & Gold. Closure in alleyway behind Central & Copper and 4th & 5th."
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 5109,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "615 Gold Avenue SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1238544000000,
    "OriginalDetails": "615 Gold Ave SW(Valliant Printing)-Alley Closure on Gold between 5th & 7th/Gold & Central "
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 5110,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "8220 San Pedro Drive NE",
    "Site": "Paseo Nuevo Office Complex",
    "ShootDate": 1238716800000,
    "OriginalDetails": "Paseo Nuevo, 8220 San Pedro Blvd NE- Close nb left turn lane on nb San Pedro from Holly to Carmel"
   },
   "geometry": {
    "x": -106.57757365897766,
    "y": 35.176535725045724
   }
  },
  {
   "attributes": {
    "OBJECTID": 5111,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "1736 Central Avenue SW",
    "Site": "Garcias Kitchen",
    "ShootDate": 1238976000000,
    "OriginalDetails": "Garcias Kitchen/ 1736 Central SW"
   },
   "geometry": {
    "x": -106.66676047010345,
    "y": 35.091764168465744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5112,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "317 Gold Avenue SW",
    "Site": "Glowing Maternity closed",
    "ShootDate": 1238976000000,
    "OriginalDetails": "317 Gold Ave. SW(Glowing) -ITC on 4th nb, sb from Central to Gold, ITC on Gold eb, wb from 3rd to 4th"
   },
   "geometry": {
    "x": -106.65152813578433,
    "y": 35.083532831517005
   }
  },
  {
   "attributes": {
    "OBJECTID": 5113,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 2",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=2&ref_=tt_eps_sn_2",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1239667200000,
    "OriginalDetails": "Ira Sprecher Dr SE- ITC on Ira Sprecher Rd bwtn Los Picaros and Kirtland/ ITC on Los Picaros between road west of Ira Sprecher and road east of Ira Sprecher"
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5114,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1263945600000,
    "OriginalDetails": "Gibson Medical Center - No ITC/No closures"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5115,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "200 Romero Street NW",
    "Site": "Old Town Plaza",
    "ShootDate": 1265068800000,
    "OriginalDetails": "200 Romero St NW (Old Town Plaza) ITC on San Felipe fr Old town to North Plaza and ITC on South Plaza fr Romero to North Plaza"
   },
   "geometry": {
    "x": -106.67059678750806,
    "y": 35.095887666929897
   }
  },
  {
   "attributes": {
    "OBJECTID": 5116,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1265068800000,
    "OriginalDetails": "Hotel Albuquerque"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5117,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1265068800000,
    "OriginalDetails": "Hotel Albuquerque"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5118,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1760 Menaul Boulevard NE",
    "Site": "Fairfield Inn Albuquerque",
    "ShootDate": 1265155200000,
    "OriginalDetails": "Fairfield Inn - no ITC/no closures 1760 Menaul Blvd NE"
   },
   "geometry": {
    "x": -106.62699713424507,
    "y": 35.109200139141805
   }
  },
  {
   "attributes": {
    "OBJECTID": 5119,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1901 University Boulevard NE",
    "Site": "Hilton Albuquerque now Crowne Plaza Albuquerque",
    "ShootDate": 1265155200000,
    "OriginalDetails": "Hilton Albuquerque - no ITC/no closures 1901 University Blvd"
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 5120,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1265155200000,
    "OriginalDetails": "Hotel Albuquerque"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5121,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "2108 Menaul Boulevard NE",
    "Site": "Rodeway Inn",
    "ShootDate": 1265241600000,
    "OriginalDetails": "Roadway Inn - Menaul no ITC/no closures 2108 Menaul Blvd"
   },
   "geometry": {
    "x": -106.62156963996085,
    "y": 35.109142078239969
   }
  },
  {
   "attributes": {
    "OBJECTID": 5122,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "2204 Menaul Boulevard NE",
    "Site": "Pump N Save",
    "ShootDate": 1265241600000,
    "OriginalDetails": "Pump n' Save - 2204 Menaul NE - ITC Menaul btwn Vassar & Richmond"
   },
   "geometry": {
    "x": -106.62021007840589,
    "y": 35.109162096939293
   }
  },
  {
   "attributes": {
    "OBJECTID": 5123,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1265673600000,
    "OriginalDetails": "Hotel Albuquerque"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5124,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1265846400000,
    "OriginalDetails": "415 Tijeras Ave NW- Lane Closure on Tijeras eb from 5th st to 4th st"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5125,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "303 Romero Street NW",
    "Site": "Old Town area",
    "ShootDate": 1266537600000,
    "OriginalDetails": "303 Romero St NW- ITC on Rio Grande from Central to Mountain"
   },
   "geometry": {
    "x": -106.67040914651318,
    "y": 35.096362375778959
   }
  },
  {
   "attributes": {
    "OBJECTID": 5126,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "2500 Schell Court NE",
    "Site": "Netherwood Park",
    "ShootDate": 1266969600000,
    "OriginalDetails": "Netherwood Park - no closures/noITC"
   },
   "geometry": {
    "x": -106.61852395948222,
    "y": 35.102644581710138
   }
  },
  {
   "attributes": {
    "OBJECTID": 5127,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "7777 Jefferson Street NE",
    "Site": "Albuquerque Publishing Company",
    "ShootDate": 1267056000000,
    "OriginalDetails": "Albuquerque Journal Building- no ITC/no Closures"
   },
   "geometry": {
    "x": -106.58882101459417,
    "y": 35.169801614636455
   }
  },
  {
   "attributes": {
    "OBJECTID": 5128,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "110 Lomas Boulevard NE",
    "Site": "No Holds Barred Gym or Fit NHB",
    "ShootDate": 1267142400000,
    "OriginalDetails": "Fit Gym -110 Lomas NW - noITC/no Closures"
   },
   "geometry": {
    "x": -106.64555112587115,
    "y": 35.090550626060818
   }
  },
  {
   "attributes": {
    "OBJECTID": 5129,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "114 Amherst Drive SE",
    "Site": "Papers",
    "ShootDate": 1267660800000,
    "OriginalDetails": "Papers - 114 Amherst Close Amherst btwn Central & Lead / close Silver btwn Carlisle & Tulane"
   },
   "geometry": {
    "x": -106.60576351034724,
    "y": 35.079270231020779
   }
  },
  {
   "attributes": {
    "OBJECTID": 5130,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "940 Eubank Boulevard NE",
    "Site": "Fins and Critters",
    "ShootDate": 1268006400000,
    "OriginalDetails": "Fin's and Critters - 940 Eubank NE - No ITC/no Closures"
   },
   "geometry": {
    "x": -106.53258174278844,
    "y": 35.088668979513201
   }
  },
  {
   "attributes": {
    "OBJECTID": 5131,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "940 Eubank Boulevard NE",
    "Site": "Fins and Critters",
    "ShootDate": 1268092800000,
    "OriginalDetails": "Fin's and Critters - 940 Eubank NE - No ITC/no Closures"
   },
   "geometry": {
    "x": -106.53258174278844,
    "y": 35.088668979513201
   }
  },
  {
   "attributes": {
    "OBJECTID": 5132,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "2601 Central Avenue NW",
    "Site": "BioPark Aquarium interior",
    "ShootDate": 1268179200000,
    "OriginalDetails": "Aquarium - interior of Aquarium"
   },
   "geometry": {
    "x": -106.67786653509883,
    "y": 35.093776258402983
   }
  },
  {
   "attributes": {
    "OBJECTID": 5133,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "3417 Central Avenue NE",
    "Site": "Kurts Camera Corral",
    "ShootDate": 1268179200000,
    "OriginalDetails": "Kurt's Camera Corral - 3417 Central NE - ITC on Central to move crew across the street"
   },
   "geometry": {
    "x": -106.60621039884489,
    "y": 35.080014166849679
   }
  },
  {
   "attributes": {
    "OBJECTID": 5134,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "3128 Central Avenue SE",
    "Site": "Nob Hill Bar and Grill",
    "ShootDate": 1268265600000,
    "OriginalDetails": "Nob Hill Bar & Grill -3128 Central sE - No ITC/no Closures"
   },
   "geometry": {
    "x": -106.60972655129233,
    "y": 35.080446478177706
   }
  },
  {
   "attributes": {
    "OBJECTID": 5135,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "4500 Osuna Road NE",
    "Site": "Alphagraphics moved to 3700 Osuna Road NE",
    "ShootDate": 1268784000000,
    "OriginalDetails": "Alphagraphics - 4500 Osuna NE  - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65084882617322,
    "y": 34.995785010651744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5136,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "940 Eubank Boulevard NE",
    "Site": "Fins and Critters",
    "ShootDate": 1268784000000,
    "OriginalDetails": "Fin's and Critters - 2nd unit- 940 Eubank NE - No ITC/no Closures"
   },
   "geometry": {
    "x": -106.53258174278844,
    "y": 35.088668979513201
   }
  },
  {
   "attributes": {
    "OBJECTID": 5137,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1119 Candelaria Road NW",
    "Site": "Leos Bar",
    "ShootDate": 1268870400000,
    "OriginalDetails": "Leo's bar 1119 Candelaria NW"
   },
   "geometry": {
    "x": -106.65445768745292,
    "y": 35.122574070389035
   }
  },
  {
   "attributes": {
    "OBJECTID": 5138,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "500 Eubank Boulevard SE",
    "Site": "Costco",
    "ShootDate": 1268956800000,
    "OriginalDetails": "Costco - 500 Eubank SE"
   },
   "geometry": {
    "x": -106.53249918851212,
    "y": 35.068133236116985
   }
  },
  {
   "attributes": {
    "OBJECTID": 5139,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5555 Zuni Road SE",
    "Site": "John Brooks Food Town",
    "ShootDate": 1268956800000,
    "OriginalDetails": "John Brooks Grocery Store - 5555 Zuni SE"
   },
   "geometry": {
    "x": -106.58519652173021,
    "y": 35.072890089561625
   }
  },
  {
   "attributes": {
    "OBJECTID": 5140,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "5200 Alameda Boulevard NE",
    "Site": "Dannys Used Cars",
    "ShootDate": 1269302400000,
    "OriginalDetails": "Danny's Used Cars - 5200 Alameda NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.58633747197257,
    "y": 35.184524121107934
   }
  },
  {
   "attributes": {
    "OBJECTID": 5141,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "2900 Central Avenue SE",
    "Site": "Central Avenue SE between Girard Boulevard NE and Morningside Drive NE",
    "ShootDate": 1271289600000,
    "OriginalDetails": "Central between Morningside and Girard (Rolling ITC)- ITC Rolling on Central from Girard to Morningside"
   },
   "geometry": {
    "x": -106.61313277420351,
    "y": 35.081007330989564
   }
  },
  {
   "attributes": {
    "OBJECTID": 5142,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "120 Woodward Road SW",
    "Site": "Reynolds Auto Service",
    "ShootDate": 1271376000000,
    "OriginalDetails": "151 & 120 Woodward Rd SW (Reynolds Auto Service)- ITC on 2nd st fr North of Woodward to South of Woodward & ITC on Woodward from William St to end of Woodward Rd"
   },
   "geometry": {
    "x": -106.65608710291922,
    "y": 35.049444759138083
   }
  },
  {
   "attributes": {
    "OBJECTID": 5143,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "6400 Wyoming Boulevard NE",
    "Site": "Albuquerque Academy",
    "ShootDate": 1271635200000,
    "OriginalDetails": "Albuquerque Academy"
   },
   "geometry": {
    "x": -106.56036673154429,
    "y": 35.151827397747468
   }
  },
  {
   "attributes": {
    "OBJECTID": 5144,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "7601 Loma Del Norte Road NE",
    "Site": "Loma Del Norte Park",
    "ShootDate": 1271635200000,
    "OriginalDetails": "Loma Del Norte Park and Loma Del Norte Rd- No ITC no Closures"
   },
   "geometry": {
    "x": -106.5632699535919,
    "y": 35.164315869127741
   }
  },
  {
   "attributes": {
    "OBJECTID": 5145,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "900 Medical Arts Avenue NE",
    "Site": "Plaza Inn",
    "ShootDate": 1272844800000,
    "OriginalDetails": "Plaza Inn 900 Medical Arts Ave NE - no closures/no ITC"
   },
   "geometry": {
    "x": -106.63302676567093,
    "y": 35.091762979186129
   }
  },
  {
   "attributes": {
    "OBJECTID": 5146,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1318 Coal Avenue SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1272931200000,
    "OriginalDetails": "Roosevelt Park - location agreement -no ITC/no closures"
   },
   "geometry": {
    "x": -106.66405503013196,
    "y": 35.082121014470651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5147,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "801 Barelas Street SW",
    "Site": "Barelas Community Center ",
    "ShootDate": 1272931200000,
    "OriginalDetails": "Barelas Community Center "
   },
   "geometry": {
    "x": -106.65548911329921,
    "y": 35.077638398156317
   }
  },
  {
   "attributes": {
    "OBJECTID": 5148,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "615 Gold Avenue SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1273017600000,
    "OriginalDetails": "Valliant Printing "
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 5149,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "421 Gold Avenue SW",
    "Site": "Albuquerque Old Federal Building and Courthouse alleyway",
    "ShootDate": 1273449600000,
    "OriginalDetails": "Old Federal Bldg - 5th & Gold"
   },
   "geometry": {
    "x": -106.65276408466461,
    "y": 35.083681561464395
   }
  },
  {
   "attributes": {
    "OBJECTID": 5150,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1273449600000,
    "OriginalDetails": "KiMo Theatre - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5151,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1 Civic Plaza NW",
    "Site": "Albuquerque Civic Plaza",
    "ShootDate": 1273795200000,
    "OriginalDetails": "Civic Plaza - ITC on Tijeras at 5th - close eb copper at 5th"
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5152,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "100 4th Street NW",
    "Site": "4th Street Promenade",
    "ShootDate": 1273795200000,
    "OriginalDetails": "4th street pedestrian mall"
   },
   "geometry": {
    "x": -106.65160061096313,
    "y": 35.084590610357132
   }
  },
  {
   "attributes": {
    "OBJECTID": 5153,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1273795200000,
    "OriginalDetails": "Amy Biehl High School - no ITC/no closures"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5154,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "405 Central Avenue NW",
    "Site": "Sauce Liquid Lounge and Raw closed",
    "ShootDate": 1273795200000,
    "OriginalDetails": "405 Central NW (old Raw) - Pedestrian ITC/no closures"
   },
   "geometry": {
    "x": -106.65183991317167,
    "y": 35.084606051032168
   }
  },
  {
   "attributes": {
    "OBJECTID": 5155,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "6051 Winter Haven Road NW",
    "Site": "Hastings Bookstore",
    "ShootDate": 1274227200000,
    "OriginalDetails": "6051 Winter Haven - Bookstore - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.68315188715897,
    "y": 35.149838509820924
   }
  },
  {
   "attributes": {
    "OBJECTID": 5156,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1274918400000,
    "OriginalDetails": "Hotel Albuquerque 800 Rio Grande"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5157,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "11300 Montgomery Boulevard NE",
    "Site": "Eldorado High School",
    "ShootDate": 1275004800000,
    "OriginalDetails": "Eldorado High 11300 Montgomery"
   },
   "geometry": {
    "x": -106.51274833370375,
    "y": 35.130655075502339
   }
  },
  {
   "attributes": {
    "OBJECTID": 5158,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "225 Gold Avenue SW",
    "Site": "Gold Avenue SW and 3rd Street",
    "ShootDate": 1275350400000,
    "OriginalDetails": "Gold & 3rd 225 Gold "
   },
   "geometry": {
    "x": -106.6503938115155,
    "y": 35.08338575528731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5159,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Regency Albuquerque lobby",
    "ShootDate": 1275350400000,
    "OriginalDetails": "Hyatt Regency Lobby330 Tijeras "
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5160,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1020 Central Avenue SW",
    "Site": "Express Inn",
    "ShootDate": 1275868800000,
    "OriginalDetails": "Express Inn - 1020 Central SE - no closures/no ITC"
   },
   "geometry": {
    "x": -106.65944942965403,
    "y": 35.087014555466162
   }
  },
  {
   "attributes": {
    "OBJECTID": 5161,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1600 Kit Carson Avenue SW",
    "Site": "Kit Carson Park",
    "ShootDate": 1275868800000,
    "OriginalDetails": "Kit Carson Park - no ITC/no closures"
   },
   "geometry": {
    "x": -106.66872832405643,
    "y": 35.08286304536049
   }
  },
  {
   "attributes": {
    "OBJECTID": 5162,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "3211 Central Avenue NE",
    "Site": "Two Fools",
    "ShootDate": 1275955200000,
    "OriginalDetails": "Two Fools - 3211 Central NE - lights in parking lane of Central - sidewalk closure?"
   },
   "geometry": {
    "x": -106.60908135071256,
    "y": 35.080388810677952
   }
  },
  {
   "attributes": {
    "OBJECTID": 5163,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "200 4th Street SW",
    "Site": "Parking lot at 4th Street SW and Gold Avenue SW",
    "ShootDate": 1276041600000,
    "OriginalDetails": "Parking lot on 4th & Gold - Close SB 3rd btwn Central & Gold"
   },
   "geometry": {
    "x": -106.65178321690084,
    "y": 35.083521665273999
   }
  },
  {
   "attributes": {
    "OBJECTID": 5164,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "318 Silver Avenue SW",
    "Site": "Cathedral of Saint Johns ",
    "ShootDate": 1276041600000,
    "OriginalDetails": "St. John's Episcopal Church - 318 Silver SW - Close 4th btwn Silver and Lead - close alley south of the church"
   },
   "geometry": {
    "x": -106.651952045377,
    "y": 35.082543187707984
   }
  },
  {
   "attributes": {
    "OBJECTID": 5165,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "100 1st Street SW",
    "Site": "Alvarado Transportation Center",
    "ShootDate": 1276214400000,
    "OriginalDetails": "Alvarado Transit Center 100 1st st SW"
   },
   "geometry": {
    "x": -106.64812378855547,
    "y": 35.083567803386266
   }
  },
  {
   "attributes": {
    "OBJECTID": 5166,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "8920 Pan American Freeway NE",
    "Site": "Mercedes Benz of Albuquerque",
    "ShootDate": 1295481600000,
    "OriginalDetails": "Mercedes Benz of ABQ - 8920 Pan American Fwy NE - ITC San Pedro btwn Oakland and Eagle Ranch"
   },
   "geometry": {
    "x": -106.58044447609802,
    "y": 35.186266585366191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5167,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "8920 Pan American Freeway NE",
    "Site": "Mercedes Benz of Albuquerque",
    "ShootDate": 1295568000000,
    "OriginalDetails": "Mercedes Benz of ABQ - 8920 Pan American Fwy NE - Close EB Eagle Rock btwn Pan American and San Pedro"
   },
   "geometry": {
    "x": -106.58044447609802,
    "y": 35.186266585366191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5168,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "4500 Central Avenue SE",
    "Site": "Loyolas Family Restaurant",
    "ShootDate": 1296000000000,
    "OriginalDetails": "Loyola's 4500 Central Ave - Close Adams btwn Central and Silver"
   },
   "geometry": {
    "x": -106.5943005788255,
    "y": 35.078615257675352
   }
  },
  {
   "attributes": {
    "OBJECTID": 5169,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "476 Copper Avenue NW",
    "Site": "Copper Avenue NW and 5th Parking Garage",
    "ShootDate": 1296000000000,
    "OriginalDetails": "5th & Copper Parking Garage - close eb Copper btwn 5th & 3rd."
   },
   "geometry": {
    "x": -106.65263586812409,
    "y": 35.085701694908323
   }
  },
  {
   "attributes": {
    "OBJECTID": 5170,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "7777 Jefferson Street NE",
    "Site": "Albuquerque Publishing Company",
    "ShootDate": 1296691200000,
    "OriginalDetails": "Albuquerque Publishing Company  - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.58882101459417,
    "y": 35.169801614636455
   }
  },
  {
   "attributes": {
    "OBJECTID": 5171,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "120 Madeira Drive NE",
    "Site": "Fox Executive Office Suite",
    "ShootDate": 1297036800000,
    "OriginalDetails": "Fox executive Office Suite / Intersection of La Veta Dr and Domingo Rd - ITC on Madeira from Central to Zia NB, Street Closure on La Veta from entral to Zia EB/WB & Street closure on Domingo from Madriera to Palomas NB/SB"
   },
   "geometry": {
    "x": -106.58440606806055,
    "y": 35.078028652872398
   }
  },
  {
   "attributes": {
    "OBJECTID": 5172,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "4330 Lomas Boulevard NE",
    "Site": "Hurricanes Restaurant",
    "ShootDate": 1297036800000,
    "OriginalDetails": "Hurricane's Café - ITC Lomas EB only at Montclaire"
   },
   "geometry": {
    "x": -106.59641048606929,
    "y": 35.08741149121979
   }
  },
  {
   "attributes": {
    "OBJECTID": 5173,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "110 Lomas Boulevard NE",
    "Site": "No Holds Barred Gym or Fit NHB",
    "ShootDate": 1297209600000,
    "OriginalDetails": "Fit Gym -110 Lomas NW - ITC on Lomas from 1st Street NE 87102 to John Street NE EB/WB"
   },
   "geometry": {
    "x": -106.64555112587115,
    "y": 35.090550626060818
   }
  },
  {
   "attributes": {
    "OBJECTID": 5174,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "325 Central Avenue NW",
    "Site": "Maloneys Tavern",
    "ShootDate": 1297209600000,
    "OriginalDetails": "Maloney's -  No ITC/no closures"
   },
   "geometry": {
    "x": -106.65135298766012,
    "y": 35.084541198707043
   }
  },
  {
   "attributes": {
    "OBJECTID": 5175,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1297209600000,
    "OriginalDetails": "KiMo Theatre -   close NB 5th btwn Central & Copper - traffic split allowing NB & SB traffic through"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5176,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "100 Sun Avenue NE ",
    "Site": "Northrop Grumman",
    "ShootDate": 1297296000000,
    "OriginalDetails": "Northrop Grumann  - 100 Sun NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.58826217894412,
    "y": 35.166422905686744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5177,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "101 Sun Avenue NE",
    "Site": "Sun Healthcare Building",
    "ShootDate": 1297296000000,
    "OriginalDetails": "Sun Healthcare Bldg - 101 Sun NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.58826722837432,
    "y": 35.166395745485502
   }
  },
  {
   "attributes": {
    "OBJECTID": 5178,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "200 Romero Street NW",
    "Site": "Old Town Plaza",
    "ShootDate": 1298419200000,
    "OriginalDetails": "Old Town Plaza - close North Plaza btwn San Felipe and Romero"
   },
   "geometry": {
    "x": -106.67059678750806,
    "y": 35.095887666929897
   }
  },
  {
   "attributes": {
    "OBJECTID": 5179,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1298419200000,
    "OriginalDetails": "Hotel Albuquerque 800 Rio Grande"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5180,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1298505600000,
    "OriginalDetails": "Hotel Albuquerque 800 Rio Grande"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5181,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "8920 Pan American Freeway NE",
    "Site": "Mercedes Benz of Albuquerque",
    "ShootDate": 1299196800000,
    "OriginalDetails": "Mercedes Benz - 8920 Pan American - no ITC/no closures"
   },
   "geometry": {
    "x": -106.58044447609802,
    "y": 35.186266585366191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5182,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "303 Romero Street NW",
    "Site": "Old Town area",
    "ShootDate": 1299456000000,
    "OriginalDetails": "Old Town - 303 Romero - no closures, no ITC"
   },
   "geometry": {
    "x": -106.67040914651318,
    "y": 35.096362375778959
   }
  },
  {
   "attributes": {
    "OBJECTID": 5183,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "3009 Central Avenue NE ",
    "Site": "Zinc Wine Bar and Bistro",
    "ShootDate": 1299542400000,
    "OriginalDetails": "Zinc - 3009 Central NE "
   },
   "geometry": {
    "x": -106.61166814299798,
    "y": 35.080741353311446
   }
  },
  {
   "attributes": {
    "OBJECTID": 5184,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "901 Ridgecrest Drive SE",
    "Site": "Ridgecrest Park",
    "ShootDate": 1299542400000,
    "OriginalDetails": "Ridgecrest Park "
   },
   "geometry": {
    "x": -106.59998853693136,
    "y": 35.068039897627763
   }
  },
  {
   "attributes": {
    "OBJECTID": 5185,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1014 San Pedro Drive NE",
    "Site": "Helens Bakery",
    "ShootDate": 1301270400000,
    "OriginalDetails": "Helen's Bakery - 1014 San Pedro NE"
   },
   "geometry": {
    "x": -106.57746139741492,
    "y": 35.087752551163753
   }
  },
  {
   "attributes": {
    "OBJECTID": 5186,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "120 Amherst Drive NE",
    "Site": "Yarn Store at Nob Hill",
    "ShootDate": 1301270400000,
    "OriginalDetails": "The Yarn Store - ITC Amherst btwn Central and Monte Vista"
   },
   "geometry": {
    "x": -106.60574692924374,
    "y": 35.080792596265461
   }
  },
  {
   "attributes": {
    "OBJECTID": 5187,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "10 Atlantic Avenue SW",
    "Site": "Tingley Field ",
    "ShootDate": 1301616000000,
    "OriginalDetails": "Tingley Softball Field "
   },
   "geometry": {
    "x": -106.65085120401376,
    "y": 35.076629688334343
   }
  },
  {
   "attributes": {
    "OBJECTID": 5188,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1301616000000,
    "OriginalDetails": "Railyards no ITC/no closures"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5189,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "801 Barelas Street SW",
    "Site": "Barelas Community Center ",
    "ShootDate": 1301616000000,
    "OriginalDetails": "Barelas Community Center "
   },
   "geometry": {
    "x": -106.65548911329921,
    "y": 35.077638398156317
   }
  },
  {
   "attributes": {
    "OBJECTID": 5190,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "100 4th Street NW",
    "Site": "4th Street Promenade",
    "ShootDate": 1301875200000,
    "OriginalDetails": "4th street pedestrian mall"
   },
   "geometry": {
    "x": -106.65160061096313,
    "y": 35.084590610357132
   }
  },
  {
   "attributes": {
    "OBJECTID": 5191,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "400 Tijeras Avenue NW",
    "Site": "4th Street NW and Tijeras NW area",
    "ShootDate": 1301875200000,
    "OriginalDetails": "4th & Tijeras - ITC on Tijeras btwn 5th & 3rd/ITC on 3rd btwn Copper and Marquette"
   },
   "geometry": {
    "x": -106.6512391414692,
    "y": 35.08661250237963
   }
  },
  {
   "attributes": {
    "OBJECTID": 5192,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1301875200000,
    "OriginalDetails": "Albuquerque Convention Center"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5193,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1600 Kit Carson Avenue SW",
    "Site": "Kit Carson Park",
    "ShootDate": 1301961600000,
    "OriginalDetails": "Kit Carson Park - no ITC/no closures"
   },
   "geometry": {
    "x": -106.66872832405643,
    "y": 35.08286304536049
   }
  },
  {
   "attributes": {
    "OBJECTID": 5194,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1736 Central Avenue SW",
    "Site": "Garcias Kitchen",
    "ShootDate": 1302739200000,
    "OriginalDetails": "Garcia's -  Central - no ITC/no  Closures"
   },
   "geometry": {
    "x": -106.66676047010345,
    "y": 35.091764168465744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5195,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "333 Lomas Boulevard NW",
    "Site": "US District Courthouse",
    "ShootDate": 1302739200000,
    "OriginalDetails": "Courthouse -  WB right lane closure of Lomas btwn 4th & 5th"
   },
   "geometry": {
    "x": -106.65018841801398,
    "y": 35.091174751148543
   }
  },
  {
   "attributes": {
    "OBJECTID": 5196,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "301 Central Avenue NW",
    "Site": "One Up Elevated Lounge closed",
    "ShootDate": 1303084800000,
    "OriginalDetails": "One Up - close EB Copper btwn 3rd & 5th"
   },
   "geometry": {
    "x": -106.6504292410703,
    "y": 35.084418472176587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5197,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "476 Copper Avenue NW",
    "Site": "Copper Avenue NW and 5th Street Parking Garage ",
    "ShootDate": 1303084800000,
    "OriginalDetails": "Parking Garage - 5th & Copper - close EB Copper btwn 3rd & 5th"
   },
   "geometry": {
    "x": -106.65263586812409,
    "y": 35.085701694908323
   }
  },
  {
   "attributes": {
    "OBJECTID": 5198,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "500 Copper Avenue NW",
    "Site": "Axis Hair Salon and Spa",
    "ShootDate": 1303084800000,
    "OriginalDetails": "Axis hair salon - close EB Copper btwn 3rd & 5th"
   },
   "geometry": {
    "x": -106.65263586812409,
    "y": 35.085701694908323
   }
  },
  {
   "attributes": {
    "OBJECTID": 5199,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1701 Mountain Road NW",
    "Site": "Explora",
    "ShootDate": 1303776000000,
    "OriginalDetails": "Explora - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.66504514425496,
    "y": 35.097048797667348
   }
  },
  {
   "attributes": {
    "OBJECTID": 5200,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "4800 Osuna Road NE",
    "Site": "Cliffs Amusement Park",
    "ShootDate": 1303862400000,
    "OriginalDetails": "Cliff's Amusement Park - 4800 Osuna Rd. NE"
   },
   "geometry": {
    "x": -106.65084882617322,
    "y": 34.995785010651744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5201,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "301 Gold Avenue SW",
    "Site": "Occidental Life Building ",
    "ShootDate": 1304467200000,
    "OriginalDetails": "301 Gold - ITC Gold btwn 2nd & 3rd"
   },
   "geometry": {
    "x": -106.65062013845805,
    "y": 35.083414440594311
   }
  },
  {
   "attributes": {
    "OBJECTID": 5202,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "7400 Lomas Boulevard NE",
    "Site": "Leisure Bowl ",
    "ShootDate": 1304553600000,
    "OriginalDetails": "Leisure Bowl - no ITC/no Closure"
   },
   "geometry": {
    "x": -106.5647440683119,
    "y": 35.087234646449382
   }
  },
  {
   "attributes": {
    "OBJECTID": 5203,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "11300 Montgomery Boulevard NE",
    "Site": "Eldorado High School",
    "ShootDate": 1304899200000,
    "OriginalDetails": "El Dorado High School"
   },
   "geometry": {
    "x": -106.51274833370375,
    "y": 35.130655075502339
   }
  },
  {
   "attributes": {
    "OBJECTID": 5204,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "111 3rd Street SW",
    "Site": "Alleyway between 3rd and 4th Streets SW and Central and Gold Avenues SW",
    "ShootDate": 1305244800000,
    "OriginalDetails": "Alley btwn 3rd & 4th/Central & Gold - ITC 3rd btwn Gold & Central"
   },
   "geometry": {
    "x": -106.65043567839764,
    "y": 35.084275737563168
   }
  },
  {
   "attributes": {
    "OBJECTID": 5205,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "219 Central Avenue NW ",
    "Site": "Sunrise Bank Building",
    "ShootDate": 1305244800000,
    "OriginalDetails": "Sunrise Bank Building - 219 Central NW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.6500854171835,
    "y": 35.08437180527546
   }
  },
  {
   "attributes": {
    "OBJECTID": 5206,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "315 Gold Avenue SW",
    "Site": "Atomic Cantina closed",
    "ShootDate": 1305244800000,
    "OriginalDetails": "Atomic Cantina - 315 Gold SW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65141463724143,
    "y": 35.083518032385406
   }
  },
  {
   "attributes": {
    "OBJECTID": 5207,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "476 Copper Avenue NW",
    "Site": "Copper Avenue NW and 5th Street Parking Garage ",
    "ShootDate": 1305244800000,
    "OriginalDetails": "Parking garage @ 5th & Copper  - Close EB Copper btwn 3rd & 5th"
   },
   "geometry": {
    "x": -106.65263586812409,
    "y": 35.085701694908323
   }
  },
  {
   "attributes": {
    "OBJECTID": 5208,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1900 Edith Boulevard NE",
    "Site": "Mount Calvary Cemetary",
    "ShootDate": 1305849600000,
    "OriginalDetails": "Mt. Calvary Cemetary - no ITC/closures"
   },
   "geometry": {
    "x": -106.63753249774378,
    "y": 35.102926815900204
   }
  },
  {
   "attributes": {
    "OBJECTID": 5209,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "13000 Elena Gallegos Place NE",
    "Site": "Academy Road NE and Elena Gallegos Place NE intersection",
    "ShootDate": 1306195200000,
    "OriginalDetails": "Intersection of Academy and Elena Gallegos - ITC Canada del Oso btwn Enclave & Desert Star"
   },
   "geometry": {
    "x": -106.48575296677758,
    "y": 35.152249215074214
   }
  },
  {
   "attributes": {
    "OBJECTID": 5210,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "3405 Broadway Boulevard SE",
    "Site": "Broadway Fabrication",
    "ShootDate": 1306972800000,
    "OriginalDetails": "County - 3405 Broadway SE"
   },
   "geometry": {
    "x": -106.64730659383646,
    "y": 35.042295261768629
   }
  },
  {
   "attributes": {
    "OBJECTID": 5211,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "11000 Broadway Boulevard SE",
    "Site": "Isleta Resort and Casino formerly called Hard Rock Casino",
    "ShootDate": 1307059200000,
    "OriginalDetails": "Hard Rock Casino"
   },
   "geometry": {
    "x": -106.6608103090375,
    "y": 34.960087728327032
   }
  },
  {
   "attributes": {
    "OBJECTID": 5212,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "9400 Central Avenue SW",
    "Site": "M and S Transmissions",
    "ShootDate": 1307923200000,
    "OriginalDetails": "9400 Central SW - ITC on Central btwn 94th & Westland Road (for sound)"
   },
   "geometry": {
    "x": -106.73788310319837,
    "y": 35.073721673060334
   }
  },
  {
   "attributes": {
    "OBJECTID": 5213,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "7401 Atrisco Vista Boulevard NW",
    "Site": "Double Eagle Airport note that Atrisco Vista was formerly named Paseo Del Volcan",
    "ShootDate": 1308096000000,
    "OriginalDetails": "Double Eagle Airport - ITC but in Bernalillo County"
   },
   "geometry": {
    "x": -106.78684748545665,
    "y": 35.126039287192576
   }
  },
  {
   "attributes": {
    "OBJECTID": 5214,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "1 Civic Plaza NW",
    "Site": "Albuquerque Civic Plaza",
    "ShootDate": 1308268800000,
    "OriginalDetails": "Civic Plaza - south stairwell area - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5215,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 4",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=4&ref_=tt_eps_sn_4",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1308268800000,
    "OriginalDetails": "Old Bernalillo County Courthouse - parking and one lane of traffic closure btwn 4th & 5th on Tijeras"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5216,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1500 Coal Avenue SW",
    "Site": "Alcalde Place SW and Coal Avenue SW intersection",
    "ShootDate": 1326067200000,
    "OriginalDetails": "Intersection of Alcalde and Coal - Close Alcalde btwn Kit Carson & 14th st. CLOSE:  Coal btwn 14& Alcalde CLOSE:  Broadcast Plaza Rd. btwn Coal & Iron"
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 5217,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Hotel Albuquerque at Old Town",
    "ShootDate": 1326067200000,
    "OriginalDetails": "Hotel Albuquerque No ITC/Closures"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5218,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1326153600000,
    "OriginalDetails": "Amy Biehl HS - no ITC/ no closures"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5219,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "312 Central Avenue SE",
    "Site": "Lofts at Albuquerque High",
    "ShootDate": 1326153600000,
    "OriginalDetails": "Albuquerque High Lofts - No ITC/no closures"
   },
   "geometry": {
    "x": -106.64394087326649,
    "y": 35.083545190833426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5220,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "424 Central Avenue NE",
    "Site": "Artichoke Café",
    "ShootDate": 1328140800000,
    "OriginalDetails": "Artichoke Café, 424 Central Ave. NE - No ITC. No street closures. No SPFX. All interior."
   },
   "geometry": {
    "x": -106.64230425600654,
    "y": 35.08333867760593
   }
  },
  {
   "attributes": {
    "OBJECTID": 5221,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "476 Copper Avenue NW",
    "Site": "Copper Avenue NW and 5th Street Parking Garage ",
    "ShootDate": 1328140800000,
    "OriginalDetails": "Parking Garage - 5th St and Copper - No ITC, Street closure on Copper from 3rd to 5th EB only. "
   },
   "geometry": {
    "x": -106.65263586812409,
    "y": 35.085701694908323
   }
  },
  {
   "attributes": {
    "OBJECTID": 5222,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "6400 Wyoming Boulevard NE",
    "Site": "Albuquerque Academy",
    "ShootDate": 1329091200000,
    "OriginalDetails": "Albuquerque Academy - no closures/no ITC"
   },
   "geometry": {
    "x": -106.56036673154429,
    "y": 35.151827397747468
   }
  },
  {
   "attributes": {
    "OBJECTID": 5223,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1901 University Boulevard NE",
    "Site": "Crown Plaza Hotel",
    "ShootDate": 1329177600000,
    "OriginalDetails": "Crown Plaza Hotel - no closures/no ITC"
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 5224,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "125 2nd Street NW",
    "Site": "Lucia at the Hotel Andaluz",
    "ShootDate": 1329264000000,
    "OriginalDetails": "Lucia - Hotel Andaluz - close sidewalk Copper btwn 2nd & 3rd/2nd btwn Copper and Central"
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 5225,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "400 Central Avenue SW",
    "Site": "Nicks Crossroads Café",
    "ShootDate": 1329264000000,
    "OriginalDetails": "Nick's Crossroads Café - close sidewalks next to nicks"
   },
   "geometry": {
    "x": -106.65166134605948,
    "y": 35.084554357654717
   }
  },
  {
   "attributes": {
    "OBJECTID": 5226,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "476 Copper Avenue NW",
    "Site": "Copper Avenue NW and 5th Street Parking Garage ",
    "ShootDate": 1329264000000,
    "OriginalDetails": "Parking Garage - 5th St and Copper - No ITC, Street closure on Copper from 3rd to 5th EB only. "
   },
   "geometry": {
    "x": -106.65263586812409,
    "y": 35.085701694908323
   }
  },
  {
   "attributes": {
    "OBJECTID": 5227,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "5600 Holly Avenue NE",
    "Site": "Calibers Shooting Range",
    "ShootDate": 1329350400000,
    "OriginalDetails": "Calibers - 5600 Holly NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.58113881093058,
    "y": 35.175745182057604
   }
  },
  {
   "attributes": {
    "OBJECTID": 5228,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "5601 Balloon Fiesta Parkway NE",
    "Site": "MIOX Corporation parking lot",
    "ShootDate": 1329350400000,
    "OriginalDetails": "5601 Ballon Fiesta pkwy- ITC nb Balloon Fiesta Pkwy"
   },
   "geometry": {
    "x": -106.58203788618944,
    "y": 35.198993532861081
   }
  },
  {
   "attributes": {
    "OBJECTID": 5229,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "200 Tijeras Avenue NW",
    "Site": "Tijeras Avenue NW between 2nd Street NW and Commercial Street NE",
    "ShootDate": 1329436800000,
    "OriginalDetails": "WB Tijeras btwn Commercial & 2nd-close WB Tijeras only"
   },
   "geometry": {
    "x": -106.64940657739129,
    "y": 35.086488097106802
   }
  },
  {
   "attributes": {
    "OBJECTID": 5230,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9314 San Mateo Boulevard NE",
    "Site": "San Mateo Boulevard NE between Modesto Avenue NE and Balloon Fiesta Parkway NE",
    "ShootDate": 1329436800000,
    "OriginalDetails": "San Mateo btwn Modesto & Balloon Fiesta Pkway - rolling ITC"
   },
   "geometry": {
    "x": -106.58643847944143,
    "y": 35.193734589976899
   }
  },
  {
   "attributes": {
    "OBJECTID": 5231,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "202 Romero Street NW",
    "Site": "Old Town area",
    "ShootDate": 1330041600000,
    "OriginalDetails": "Old Town - no closures, no ITC"
   },
   "geometry": {
    "x": -106.67047263584421,
    "y": 35.095931947334329
   }
  },
  {
   "attributes": {
    "OBJECTID": 5232,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "109 4th Street NW",
    "Site": "Relux Hookah Lounge",
    "ShootDate": 1330387200000,
    "OriginalDetails": "Redux Hookah Lounge - 4th street pedestrian Mall"
   },
   "geometry": {
    "x": -106.65160158563521,
    "y": 35.084744658985677
   }
  },
  {
   "attributes": {
    "OBJECTID": 5233,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "409 Central Avenue NW",
    "Site": "Anodyne Pool Hall and Cocktails alley behind",
    "ShootDate": 1330387200000,
    "OriginalDetails": "Alley behind Anodyne - close alley btwn 4th & 5th/Central & Copper - close 5th btwn Central & Copper"
   },
   "geometry": {
    "x": -106.6520238441244,
    "y": 35.084630625259344
   }
  },
  {
   "attributes": {
    "OBJECTID": 5234,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1330387200000,
    "OriginalDetails": "Lindy's - no ITC/no closures "
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 5235,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "407 Central Avenue NW ",
    "Site": "Sister Bar",
    "ShootDate": 1330473600000,
    "OriginalDetails": "Sister Bar - Close EB Copper btwn 3rd & 5th"
   },
   "geometry": {
    "x": -106.65193187909719,
    "y": 35.084618338881768
   }
  },
  {
   "attributes": {
    "OBJECTID": 5236,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "200 Romero Street NW",
    "Site": "Old Town Plaza",
    "ShootDate": 1330905600000,
    "OriginalDetails": "Old Town - Plaza Don Luis & Plaza no ITC/no closures"
   },
   "geometry": {
    "x": -106.67059678750806,
    "y": 35.095887666929897
   }
  },
  {
   "attributes": {
    "OBJECTID": 5237,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "5700 University Boulevard SE",
    "Site": "Aperture Center at Mesa del Sol",
    "ShootDate": 1330992000000,
    "OriginalDetails": "Aperture Building - Mesa del Sol"
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 5238,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1736 Central Avenue SW",
    "Site": "Garcias Kitchen",
    "ShootDate": 1331078400000,
    "OriginalDetails": "Garcias Kitchen/ 1736 Central SW- No ITC. No Street Closure. Sidewalk closure on Central Ave. in front of 1736 Central Ave. SW."
   },
   "geometry": {
    "x": -106.66676047010345,
    "y": 35.091764168465744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5239,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1800 Atrisco Drive NW",
    "Site": "I40 Pedestrian Bridge east of Coors Boulevard",
    "ShootDate": 1331078400000,
    "OriginalDetails": "I-40 pedestrian bridge - ITC pedestrian bridge"
   },
   "geometry": {
    "x": -106.70067090549172,
    "y": 35.107791901485562
   }
  },
  {
   "attributes": {
    "OBJECTID": 5240,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1100 Rio Grande Boulevard NW ",
    "Site": "Neds on the Rio Grande moved",
    "ShootDate": 1331596800000,
    "OriginalDetails": "Ned's on the Rio Grande - No ITC/no closures"
   },
   "geometry": {
    "x": -106.67079603383807,
    "y": 35.106129833702205
   }
  },
  {
   "attributes": {
    "OBJECTID": 5241,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "809 Tijeras Avenue NW",
    "Site": "Tijeras Dental Services",
    "ShootDate": 1331596800000,
    "OriginalDetails": "Tijeras Dental - 809 Tijeras  - Close Tijeras btwn 10th & Keleher/ Close 9th btwn marquette & Copper"
   },
   "geometry": {
    "x": -106.65643353731022,
    "y": 35.087611454970805
   }
  },
  {
   "attributes": {
    "OBJECTID": 5242,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "5555 Zuni Road SE",
    "Site": "John Brooks Food Town",
    "ShootDate": 1331769600000,
    "OriginalDetails": "John Brooks Grocery Store - 5555 Zuni SE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.58519652173021,
    "y": 35.072890089561625
   }
  },
  {
   "attributes": {
    "OBJECTID": 5243,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "300 Gold Avenue SW",
    "Site": "Gold Avenue SW and 3rd Street intersection",
    "ShootDate": 1331856000000,
    "OriginalDetails": "3rd & Gold intersection - close 3rd btwn Silver & Central / close Gold btwn 2nd & 4th"
   },
   "geometry": {
    "x": -106.65062537473787,
    "y": 35.083387303420864
   }
  },
  {
   "attributes": {
    "OBJECTID": 5244,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "201 California Street NE",
    "Site": "Albuquerque Downs Racetrack",
    "ShootDate": 1332806400000,
    "OriginalDetails": "The Downs at Albuquerque"
   },
   "geometry": {
    "x": -106.57527227672939,
    "y": 35.077643858909262
   }
  },
  {
   "attributes": {
    "OBJECTID": 5245,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "3500 Central Avenue SE",
    "Site": "Scalo",
    "ShootDate": 1332806400000,
    "OriginalDetails": "Scalo  - no ITC/close Nob Hill parking lot only"
   },
   "geometry": {
    "x": -106.60574857855059,
    "y": 35.079927575072034
   }
  },
  {
   "attributes": {
    "OBJECTID": 5246,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1900 Edith Boulevard NE",
    "Site": "Mount Calvary Cemetary",
    "ShootDate": 1332892800000,
    "OriginalDetails": "Mount Calvary Cemetery - 1900 Edith NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.63753249774378,
    "y": 35.102926815900204
   }
  },
  {
   "attributes": {
    "OBJECTID": 5247,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1901 University Boulevard NE",
    "Site": "The Ranchers Club of New Mexico",
    "ShootDate": 1332892800000,
    "OriginalDetails": "The Rancher's Club - 1901 University NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 5248,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1800 Mountain Road NW",
    "Site": "Tiguex Park",
    "ShootDate": 1332979200000,
    "OriginalDetails": "Tiguex Park - no ITC/no closures"
   },
   "geometry": {
    "x": -106.66517083024131,
    "y": 35.097073360795534
   }
  },
  {
   "attributes": {
    "OBJECTID": 5249,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "2000 Mountain Road NW",
    "Site": "Albuquerque Museum",
    "ShootDate": 1332979200000,
    "OriginalDetails": "Albuquerque Museum - no ITC/no closures"
   },
   "geometry": {
    "x": -106.66860623851775,
    "y": 35.098424458888971
   }
  },
  {
   "attributes": {
    "OBJECTID": 5250,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "318 Silver Avenue SW",
    "Site": "Cathedral of Saint Johns ",
    "ShootDate": 1332979200000,
    "OriginalDetails": "St. John's Cathedral - 318 Silver Ave. SW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.651952045377,
    "y": 35.082543187707984
   }
  },
  {
   "attributes": {
    "OBJECTID": 5251,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "5000 Central Avenue SE",
    "Site": "Desert Sands Motel",
    "ShootDate": null,
    "OriginalDetails": "5000 Central Ave (Desert Sands Motel) "
   },
   "geometry": {
    "x": -106.5888186124991,
    "y": 35.078025538023084
   }
  },
  {
   "attributes": {
    "OBJECTID": 5252,
    "Title": "In Plain Sight",
    "Type": "TV Series Season 3",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/episodes?season=3&ref_=tt_eps_sn_3",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": null,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5253,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "107 Amherst SE",
    "Site": "Elsa Ross",
    "ShootDate": 1188259200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60579871083165,
    "y": 35.079606512777438
   }
  },
  {
   "attributes": {
    "OBJECTID": 5254,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "109 4th NW",
    "Site": "Ralli's",
    "ShootDate": 1188864000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65160158563521,
    "y": 35.084744658985677
   }
  },
  {
   "attributes": {
    "OBJECTID": 5255,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "228 Gold SW",
    "Site": "Ooh Aah Jewelry Store",
    "ShootDate": 1188864000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65048178892117,
    "y": 35.083369047793106
   }
  },
  {
   "attributes": {
    "OBJECTID": 5256,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "100 1st St. SE",
    "Site": "Alvarado Transportation Center",
    "ShootDate": 1189468800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64812378855547,
    "y": 35.083567803386266
   }
  },
  {
   "attributes": {
    "OBJECTID": 5257,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "219 Central Avenue NW ",
    "Site": "Banque Lofts",
    "ShootDate": 1189555200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6500854171835,
    "y": 35.08437180527546
   }
  },
  {
   "attributes": {
    "OBJECTID": 5258,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "228 Gold SW",
    "Site": "Ooh Aah Jewelry Store",
    "ShootDate": 1189555200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65048178892117,
    "y": 35.083369047793106
   }
  },
  {
   "attributes": {
    "OBJECTID": 5259,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "516 Central SW",
    "Site": "516 Arts",
    "ShootDate": 1189987200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65351636262962,
    "y": 35.084788710945972
   }
  },
  {
   "attributes": {
    "OBJECTID": 5260,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "1129 6th NW",
    "Site": "Harwood Arts Studio",
    "ShootDate": 1189987200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65192022255806,
    "y": 35.096373299187519
   }
  },
  {
   "attributes": {
    "OBJECTID": 5261,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "516 Central SW",
    "Site": "516 Arts",
    "ShootDate": 1190073600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65351636262962,
    "y": 35.084788710945972
   }
  },
  {
   "attributes": {
    "OBJECTID": 5262,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "Alley btwn 6th & 7th/Gold & Central",
    "Site": "Alley",
    "ShootDate": 1190073600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5263,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "3711 Central NE",
    "Site": "University Lodge",
    "ShootDate": 1190160000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60255520156453,
    "y": 35.079583732249716
   }
  },
  {
   "attributes": {
    "OBJECTID": 5264,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "109 4th NW",
    "Site": "Ralli's",
    "ShootDate": 1190678400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65160158563521,
    "y": 35.084744658985677
   }
  },
  {
   "attributes": {
    "OBJECTID": 5265,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "109 4th NW",
    "Site": "Ralli's",
    "ShootDate": 1190678400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65160158563521,
    "y": 35.084744658985677
   }
  },
  {
   "attributes": {
    "OBJECTID": 5266,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "109 4th NW",
    "Site": "Ralli's",
    "ShootDate": 1190764800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65160158563521,
    "y": 35.084744658985677
   }
  },
  {
   "attributes": {
    "OBJECTID": 5267,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "806 Central SE",
    "Site": "Memorial Hospital now Hotel Parq Central",
    "ShootDate": 1190764800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6374117102707,
    "y": 35.082763240768635
   }
  },
  {
   "attributes": {
    "OBJECTID": 5268,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "314 Lead SW",
    "Site": "First United Methodist Church",
    "ShootDate": 1191196800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65212771272743,
    "y": 35.081564669735606
   }
  },
  {
   "attributes": {
    "OBJECTID": 5269,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "3715 Silver SE",
    "Site": "Trinity United Methodist Church",
    "ShootDate": 1191283200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6022531475418,
    "y": 35.078452021322661
   }
  },
  {
   "attributes": {
    "OBJECTID": 5270,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "3715 Silver Ave. SE",
    "Site": "Trinity United Methoist Church",
    "ShootDate": 1191369600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6022531475418,
    "y": 35.078452021322661
   }
  },
  {
   "attributes": {
    "OBJECTID": 5271,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1191369600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5272,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1191456000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5273,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "312 Central SW",
    "Site": "Library Bar & Grill",
    "ShootDate": 1191456000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65089644856137,
    "y": 35.084452712245152
   }
  },
  {
   "attributes": {
    "OBJECTID": 5274,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1191542400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5275,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "312 Central SW",
    "Site": "Library Bar & Grill",
    "ShootDate": 1191542400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65089644856137,
    "y": 35.084452712245152
   }
  },
  {
   "attributes": {
    "OBJECTID": 5276,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1191628800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5277,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "6301 Indian School NE",
    "Site": "Citadel Building",
    "ShootDate": 1191801600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57389035520869,
    "y": 35.101882783077272
   }
  },
  {
   "attributes": {
    "OBJECTID": 5278,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "317 Commercial NE",
    "Site": "The Verge Building",
    "ShootDate": 1191974400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64579609195755,
    "y": 35.086752015477266
   }
  },
  {
   "attributes": {
    "OBJECTID": 5279,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1193184000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5280,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "1736 Central Avenue SW",
    "Site": "Garcia's Restaurant",
    "ShootDate": 1194307200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66676047010345,
    "y": 35.091764168465744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5281,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "5000 Central SE",
    "Site": "Desert Sands Motel",
    "ShootDate": 1194825600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5888186124991,
    "y": 35.078025538023084
   }
  },
  {
   "attributes": {
    "OBJECTID": 5282,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "624 Central SW",
    "Site": "El Rey Theatre",
    "ShootDate": 1195084800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65512693144126,
    "y": 35.085000771914373
   }
  },
  {
   "attributes": {
    "OBJECTID": 5283,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "8th & Gold",
    "Site": "Intersection  ",
    "ShootDate": 1195084800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65654991495359,
    "y": 35.084148149421978
   }
  },
  {
   "attributes": {
    "OBJECTID": 5284,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "1601 Avenida Cesar Chavez SE",
    "Site": "Isotopes Park",
    "ShootDate": 1196380800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63068759399358,
    "y": 35.068480404157597
   }
  },
  {
   "attributes": {
    "OBJECTID": 5285,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "9201 Pan American Freeway NE",
    "Site": "I-25 Studios",
    "ShootDate": 1196726400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58054369861443,
    "y": 35.190552050534443
   }
  },
  {
   "attributes": {
    "OBJECTID": 5286,
    "Title": "In Plain Sight season 1",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt0935095/?ref_=nv_sr_1",
    "Address": "9201 Pan American Freeway NE",
    "Site": "I-25 Studios",
    "ShootDate": 1196812800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58054369861443,
    "y": 35.190552050534443
   }
  },
  {
   "attributes": {
    "OBJECTID": 5287,
    "Title": "Justice Denied",
    "Type": "Movie by 9 Point Productions",
    "IMDbLink": "http://www.imdb.com/title/tt2926768/",
    "Address": "1 Civic Plaza NW",
    "Site": "Albuquerque Civic Plaza",
    "ShootDate": 1352937600000,
    "OriginalDetails": "One Civic Plaza"
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5288,
    "Title": "LadyFingers",
    "Type": "Video",
    "IMDbLink": "http://www.imdb.com/title/tt1792106/",
    "Address": "618 Central Avenue NW",
    "Site": "The Launchpad Bar",
    "ShootDate": 1216512000000,
    "OriginalDetails": "The Launchpad - 618 Central Ave. "
   },
   "geometry": {
    "x": -106.65484856778923,
    "y": 35.08496223399348
   }
  },
  {
   "attributes": {
    "OBJECTID": 5289,
    "Title": "Larsons Field",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3083826/",
    "Address": "4121 Cutler Avenue NE",
    "Site": "Soundstage 41",
    "ShootDate": 1348617600000,
    "OriginalDetails": "Soundstage 41"
   },
   "geometry": {
    "x": -106.60066940152623,
    "y": 35.105593925868803
   }
  },
  {
   "attributes": {
    "OBJECTID": 5290,
    "Title": "Legion",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1038686/",
    "Address": "111 3rd Street NW",
    "Site": "Alleyway between 3rd and 4th Streets NW and Copper and Central Avenues NW",
    "ShootDate": 1212105600000,
    "OriginalDetails": "Alley between 3rd/4th and Central/Copper - ITC on 3rd from Copper to Tijeras. Copper from 3rd to 4th (w/ traffic shift). Closure on 3rd St. from Central to Copper."
   },
   "geometry": {
    "x": -106.65033084680061,
    "y": 35.084827890685183
   }
  },
  {
   "attributes": {
    "OBJECTID": 5291,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "6701 Fortuna Road NW",
    "Site": "West Mesa High Sschool",
    "ShootDate": 1280793600000,
    "OriginalDetails": "West Mesa HS"
   },
   "geometry": {
    "x": -106.71648865481355,
    "y": 35.094400765997385
   }
  },
  {
   "attributes": {
    "OBJECTID": 5292,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "800 Odelia Road NE",
    "Site": "Albuquerque High School",
    "ShootDate": 1280880000000,
    "OriginalDetails": "Albuquerque High"
   },
   "geometry": {
    "x": -106.63665688109025,
    "y": 35.098848111746115
   }
  },
  {
   "attributes": {
    "OBJECTID": 5293,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "800 Odelia Road NE",
    "Site": "Albuquerque High School",
    "ShootDate": 1280966400000,
    "OriginalDetails": "Albuquerque High"
   },
   "geometry": {
    "x": -106.63665688109025,
    "y": 35.098848111746115
   }
  },
  {
   "attributes": {
    "OBJECTID": 5294,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "800 Odelia Road NE",
    "Site": "Albuquerque High School",
    "ShootDate": 1281052800000,
    "OriginalDetails": "Albuquerque High"
   },
   "geometry": {
    "x": -106.63665688109025,
    "y": 35.098848111746115
   }
  },
  {
   "attributes": {
    "OBJECTID": 5295,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "10800 Dennis Chavez Boulevard SW",
    "Site": "Atrisco Heritage Academy High School",
    "ShootDate": 1281312000000,
    "OriginalDetails": "Atrisco Heritage Academy"
   },
   "geometry": {
    "x": -106.74067515962788,
    "y": 35.024568863318137
   }
  },
  {
   "attributes": {
    "OBJECTID": 5296,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "10800 Dennis Chavez Boulevard SW",
    "Site": "Atrisco Heritage Academy High School",
    "ShootDate": 1281398400000,
    "OriginalDetails": "Atrisco Heritage Academy"
   },
   "geometry": {
    "x": -106.74067515962788,
    "y": 35.024568863318137
   }
  },
  {
   "attributes": {
    "OBJECTID": 5297,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "10800 Dennis Chavez Boulevard SW",
    "Site": "Atrisco Heritage Academy High School",
    "ShootDate": 1281484800000,
    "OriginalDetails": "Atrisco Heritage Academy"
   },
   "geometry": {
    "x": -106.74067515962788,
    "y": 35.024568863318137
   }
  },
  {
   "attributes": {
    "OBJECTID": 5298,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "10800 Dennis Chavez Boulevard SW",
    "Site": "Atrisco Heritage Academy High School",
    "ShootDate": 1281571200000,
    "OriginalDetails": "Atrisco Heritage Academy"
   },
   "geometry": {
    "x": -106.74067515962788,
    "y": 35.024568863318137
   }
  },
  {
   "attributes": {
    "OBJECTID": 5299,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "10800 Dennis Chavez Boulevard SW",
    "Site": "Atrisco Heritage Academy High School",
    "ShootDate": 1281657600000,
    "OriginalDetails": "Atrisco Heritage Academy"
   },
   "geometry": {
    "x": -106.74067515962788,
    "y": 35.024568863318137
   }
  },
  {
   "attributes": {
    "OBJECTID": 5300,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1281916800000,
    "OriginalDetails": "KiMo Theatre -   close 5th btwn Central & Copper"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5301,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1282003200000,
    "OriginalDetails": "KiMo Theatre -   close 5th btwn Central & Copper"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5302,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1282262400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5303,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "3615 Los Picaros Road SE",
    "Site": "Open Space Division Offices",
    "ShootDate": 1282694400000,
    "OriginalDetails": "Open Space Offices - 3615 Los Picaros SE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.59879760891818,
    "y": 35.017793864723757
   }
  },
  {
   "attributes": {
    "OBJECTID": 5304,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "200 Romero Street NW",
    "Site": "Old Town Plaza",
    "ShootDate": 1283126400000,
    "OriginalDetails": "Old Town Plaza -  ITC on South Plaza St. from Romero St. to San Felipe St."
   },
   "geometry": {
    "x": -106.67059678750806,
    "y": 35.095887666929897
   }
  },
  {
   "attributes": {
    "OBJECTID": 5305,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "207 High Street NE",
    "Site": "Heritage House",
    "ShootDate": 1283212800000,
    "OriginalDetails": "207 High St NE - closure on Copper Ave. from Locust to Walter. Closure on High St. from Copper Ave to Doctor Martin Luther King, Jr. Blvd. "
   },
   "geometry": {
    "x": -106.63960186312049,
    "y": 35.084289833803609
   }
  },
  {
   "attributes": {
    "OBJECTID": 5306,
    "Title": "Lemonade Mouth",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1648204/",
    "Address": "1224 Bellamah Avenue NW ",
    "Site": "Southwest Lumber Sales",
    "ShootDate": 1283385600000,
    "OriginalDetails": "1224 Bellamah NW - no closures/no ITC"
   },
   "geometry": {
    "x": -106.65860973932368,
    "y": 35.100792429948477
   }
  },
  {
   "attributes": {
    "OBJECTID": 5307,
    "Title": "Let Me In",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1228987/",
    "Address": "5314 Central Avenue SW ",
    "Site": "Samons Electric and Plumbling Supply",
    "ShootDate": 1263859200000,
    "OriginalDetails": "5314 Central Ave SW (Samons Electric)- ITC on Central fr 53rd st to Yucca"
   },
   "geometry": {
    "x": -106.69776980436652,
    "y": 35.082812289615582
   }
  },
  {
   "attributes": {
    "OBJECTID": 5308,
    "Title": "Let Me In",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1228987/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1264550400000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5309,
    "Title": "Let Me In",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1228987/",
    "Address": "301 Menaul Boulevard NE",
    "Site": "Menaul School",
    "ShootDate": 1264636800000,
    "OriginalDetails": "Menaul School - no closure/itc"
   },
   "geometry": {
    "x": -106.63882066389489,
    "y": 35.109996087705987
   }
  },
  {
   "attributes": {
    "OBJECTID": 5310,
    "Title": "Lone Survivor",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1091191/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE at University Boulevard SE",
    "ShootDate": 1352937600000,
    "OriginalDetails": "Los Picaros/University area"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5311,
    "Title": "Longmire ",
    "Type": "TV Series by A& E",
    "IMDbLink": "http://www.imdb.com/title/tt1836037/",
    "Address": "1 Pajarito Road",
    "Site": "Pajarito Mesa Dirt Road (Longmire 6/1/2012)",
    "ShootDate": 1274140800000,
    "OriginalDetails": "Pajarito Mesa Dirt Road"
   },
   "geometry": {
    "x": -106.69669468536311,
    "y": 34.986753807620659
   }
  },
  {
   "attributes": {
    "OBJECTID": 5312,
    "Title": "Longmire ",
    "Type": "TV Series by A& E",
    "IMDbLink": "http://www.imdb.com/title/tt1836037/",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1274140800000,
    "OriginalDetails": "Kimo Theater Area"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5313,
    "Title": "Longmire ",
    "Type": "TV Series by A& E",
    "IMDbLink": "http://www.imdb.com/title/tt1836037/",
    "Address": "4700 Coal Avenue SE",
    "Site": "Highland High School",
    "ShootDate": 1274227200000,
    "OriginalDetails": "Highland High"
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 5314,
    "Title": "Longmire ",
    "Type": "TV Series by A& E",
    "IMDbLink": "http://www.imdb.com/title/tt1836037/",
    "Address": "207 High Street NE",
    "Site": "Heritage House",
    "ShootDate": 1274313600000,
    "OriginalDetails": "Heritage House "
   },
   "geometry": {
    "x": -106.63960186312049,
    "y": 35.084289833803609
   }
  },
  {
   "attributes": {
    "OBJECTID": 5315,
    "Title": "Love Lies Bleeding",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0984204/?ref_=fn_al_tt_2",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Hotel",
    "ShootDate": 1173052800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5316,
    "Title": "Love Lies Bleeding",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0984204/?ref_=fn_al_tt_2",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Hotel",
    "ShootDate": 1173139200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5317,
    "Title": "Love Lies Bleeding",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0984204/?ref_=fn_al_tt_2",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Hotel",
    "ShootDate": 1173225600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5318,
    "Title": "Love Lies Bleeding",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0984204/?ref_=fn_al_tt_2",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1173312000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5319,
    "Title": "Love Lies Bleeding",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0984204/?ref_=fn_al_tt_2",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Hotel",
    "ShootDate": 1173312000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5320,
    "Title": "Love Lies Bleeding",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0984204/?ref_=fn_al_tt_2",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1173398400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5321,
    "Title": "Love Lies Bleeding",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0984204/?ref_=fn_al_tt_2",
    "Address": "1901 University Boulevard NE",
    "Site": "Hilton Hotel",
    "ShootDate": 1173657600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 5322,
    "Title": "Love Lies Bleeding",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0984204/?ref_=fn_al_tt_2",
    "Address": "Alley btwn Central & Copper/3rd & 4th",
    "Site": "Alley",
    "ShootDate": 1174521600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5323,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "5121 Masthead NE",
    "Site": "State Bar of NM",
    "ShootDate": 1186099200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58751148920054,
    "y": 35.164456597499722
   }
  },
  {
   "attributes": {
    "OBJECTID": 5324,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "5301 St. Josephs Dr. NW",
    "Site": "St. Pius High School",
    "ShootDate": 1186099200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.70011670335192,
    "y": 35.128017578871031
   }
  },
  {
   "attributes": {
    "OBJECTID": 5325,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "5301 St. Josephs Dr. NW",
    "Site": "St. Pius High School",
    "ShootDate": 1186185600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.70011670335192,
    "y": 35.128017578871031
   }
  },
  {
   "attributes": {
    "OBJECTID": 5326,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "5301 St. Josephs Dr. NW",
    "Site": "St. Pius High School",
    "ShootDate": 1186272000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.70011670335192,
    "y": 35.128017578871031
   }
  },
  {
   "attributes": {
    "OBJECTID": 5327,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "218 Gold SW",
    "Site": "Gold Street Caffe",
    "ShootDate": 1186444800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6501190519044,
    "y": 35.083323325638801
   }
  },
  {
   "attributes": {
    "OBJECTID": 5328,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1186704000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5329,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "1000 Woodward NE",
    "Site": "Embassy Suites",
    "ShootDate": 1186790400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63711106750128,
    "y": 35.090236694345492
   }
  },
  {
   "attributes": {
    "OBJECTID": 5330,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1186790400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5331,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "7605 Central NE",
    "Site": "Caravan East",
    "ShootDate": 1186876800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56255426400841,
    "y": 35.075243952892279
   }
  },
  {
   "attributes": {
    "OBJECTID": 5332,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "7605 Central NE",
    "Site": "Caravan East",
    "ShootDate": 1186963200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56255426400841,
    "y": 35.075243952892279
   }
  },
  {
   "attributes": {
    "OBJECTID": 5333,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "7605 Central NE",
    "Site": "Caravan East",
    "ShootDate": 1187049600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56255426400841,
    "y": 35.075243952892279
   }
  },
  {
   "attributes": {
    "OBJECTID": 5334,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "330 Tijeras Avenue NW",
    "Site": "Hyatt Hotel",
    "ShootDate": 1187654400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5335,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1187913600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5336,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1188000000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5337,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1188086400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5338,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1188172800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5339,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1188950400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5340,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1189036800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5341,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1189123200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5342,
    "Title": "Love 'n Dancing",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1028581/?ref_=nv_sr_1",
    "Address": "218 Gold SW",
    "Site": "Gold Street Caffe",
    "ShootDate": 1189468800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6501190519044,
    "y": 35.083323325638801
   }
  },
  {
   "attributes": {
    "OBJECTID": 5343,
    "Title": "Love Ranch",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1125929/",
    "Address": "4 Sandia Crest Road",
    "Site": "Driving shot on way to Sandia Crest",
    "ShootDate": 1202428800000,
    "OriginalDetails": "Hwy. 536 (road to Sandia Crest)"
   },
   "geometry": {
    "x": -106.34808133361801,
    "y": 35.163313744331056
   }
  },
  {
   "attributes": {
    "OBJECTID": 5344,
    "Title": "Love Ranch",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1125929/",
    "Address": "1000 Juan Tabo Boulevard NE",
    "Site": "Pauls Monterey Inn",
    "ShootDate": 1202688000000,
    "OriginalDetails": "Paul's Monterey Inn"
   },
   "geometry": {
    "x": -106.51502401874502,
    "y": 35.088341552177631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5345,
    "Title": "Love Ranch",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1125929/",
    "Address": "1130 University Boulevard NE",
    "Site": "KNME TV Studio",
    "ShootDate": 1202774400000,
    "OriginalDetails": "KNME TV Studio"
   },
   "geometry": {
    "x": -106.62622071944666,
    "y": 35.094227905428234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5346,
    "Title": "Love Ranch",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1125929/",
    "Address": "201 California Street NE",
    "Site": "Albuquerque Downs Racetrack",
    "ShootDate": 1203552000000,
    "OriginalDetails": "Albuquerque Downs Racetrack"
   },
   "geometry": {
    "x": -106.57527227672939,
    "y": 35.077643858909262
   }
  },
  {
   "attributes": {
    "OBJECTID": 5347,
    "Title": "Love Ranch",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1125929/",
    "Address": "201 California Street NE",
    "Site": "Albuquerque Downs Racetrack",
    "ShootDate": 1203552000000,
    "OriginalDetails": "Albuquerque Downs Racetrack"
   },
   "geometry": {
    "x": -106.57527227672939,
    "y": 35.077643858909262
   }
  },
  {
   "attributes": {
    "OBJECTID": 5348,
    "Title": "Love Ranch",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1125929/",
    "Address": "300 San Pedro Drive NE",
    "Site": "Tingley Coliseum",
    "ShootDate": 1204070400000,
    "OriginalDetails": "Tingley Coliseum"
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 5349,
    "Title": "Love Ranch",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1125929/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1204156800000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5350,
    "Title": "Love Ranch",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1125929/",
    "Address": "973 Altura Avenue NE",
    "Site": "Maloof House",
    "ShootDate": 1205539200000,
    "OriginalDetails": "Maloof House"
   },
   "geometry": {
    "x": -106.59770771173004,
    "y": 35.094794885284145
   }
  },
  {
   "attributes": {
    "OBJECTID": 5351,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "11510 Sunset Gardens Road SW",
    "Site": "Albuquerque Emergency Management Office",
    "ShootDate": 1250467200000,
    "OriginalDetails": "Emergency Operations Center"
   },
   "geometry": {
    "x": -106.7588616414881,
    "y": 35.066031328559163
   }
  },
  {
   "attributes": {
    "OBJECTID": 5352,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "111 3rd Street SW",
    "Site": "Alleyway between 3rd and 4th Streets SW and Central and Gold Avenues SW",
    "ShootDate": 1250553600000,
    "OriginalDetails": "Alleyway north of Gold/btwn 3rd & 4th/ Close ally btwn 3rd & 4th eb, wb"
   },
   "geometry": {
    "x": -106.65043567839764,
    "y": 35.084275737563168
   }
  },
  {
   "attributes": {
    "OBJECTID": 5353,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "218 Gold Avenue SW",
    "Site": "Gold Street Caffe",
    "ShootDate": 1250553600000,
    "OriginalDetails": "218 Gold Ave SW- Gold St Café- ITC on Gold fr 3rd to 2nd eb, wb/ street closure on Gold from 3rd to 2nd eb"
   },
   "geometry": {
    "x": -106.6501190519044,
    "y": 35.083323325638801
   }
  },
  {
   "attributes": {
    "OBJECTID": 5354,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1250640000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5355,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1250726400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5356,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "1318 Coal Avenue SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1250899200000,
    "OriginalDetails": "Roosevelt Park"
   },
   "geometry": {
    "x": -106.66405503013196,
    "y": 35.082121014470651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5357,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "2525 Tingley Drive SW",
    "Site": "Tingley Beach Street driving scene",
    "ShootDate": 1250985600000,
    "OriginalDetails": "Tingley Dr SW-Street Closure on Tingley Dr nb,sb fr Alcalde to Marquez"
   },
   "geometry": {
    "x": -106.67922609934872,
    "y": 35.091179847152631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5358,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "1 Civic Plaza NW",
    "Site": "Albuquerque Civic Plaza underground parking garage",
    "ShootDate": 1251331200000,
    "OriginalDetails": "Civic Plaza underground parking garage"
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5359,
    "Title": "MacGruber",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1470023/",
    "Address": "246 5th Street NW",
    "Site": "Qwest Building Loading Dock",
    "ShootDate": 1251331200000,
    "OriginalDetails": "Qwest Building Loading Dock- ITC on 5th st nb, sb fr Copper to Tijeras"
   },
   "geometry": {
    "x": -106.65246898809377,
    "y": 35.086268814902482
   }
  },
  {
   "attributes": {
    "OBJECTID": 5360,
    "Title": "Miss Barb",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2814546/",
    "Address": "100 1st Street SW",
    "Site": "Alvarado Transportation Center",
    "ShootDate": 1347753600000,
    "OriginalDetails": "Alvarado Transportation Center"
   },
   "geometry": {
    "x": -106.64812378855547,
    "y": 35.083567803386266
   }
  },
  {
   "attributes": {
    "OBJECTID": 5361,
    "Title": "Montar la Cabra",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3111474/",
    "Address": "1 Kim Place SE",
    "Site": "Foothills Open Space in Four Hills",
    "ShootDate": 1354406400000,
    "OriginalDetails": "Open Space - Foothills in Four Hills"
   },
   "geometry": {
    "x": -106.48061996629467,
    "y": 35.048376354598872
   }
  },
  {
   "attributes": {
    "OBJECTID": 5362,
    "Title": "Montar la Cabra",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3111474/",
    "Address": "14101 Piedras Road NE",
    "Site": "Supper Rock Park",
    "ShootDate": 1354406400000,
    "OriginalDetails": "Supper Rock Park"
   },
   "geometry": {
    "x": -106.49173462277739,
    "y": 35.073218391310682
   }
  },
  {
   "attributes": {
    "OBJECTID": 5363,
    "Title": "Montar la Cabra",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3111474/",
    "Address": "4400 Central Avenue SE",
    "Site": "Piggies Hot Dogs",
    "ShootDate": 1354406400000,
    "OriginalDetails": "Piggies Hot Dogs 4400 Central SE"
   },
   "geometry": {
    "x": -106.59530870596657,
    "y": 35.078734670802326
   }
  },
  {
   "attributes": {
    "OBJECTID": 5364,
    "Title": "Motorcycle vs Car Drift Battle 3 The Driftpocalypse",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2725834/",
    "Address": "200 Tijeras Avenue NW",
    "Site": "Tijeras Avenue NW between 2nd Street NW and Commercial Street NE",
    "ShootDate": 1365811200000,
    "OriginalDetails": "Tijeras NE & NW - ITC on Tijeras NW/NE fr 2nd to Commercial"
   },
   "geometry": {
    "x": -106.64940657739129,
    "y": 35.086488097106802
   }
  },
  {
   "attributes": {
    "OBJECTID": 5365,
    "Title": "Motorcycle vs Car Drift Battle 3 The Driftpocalypse",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2725834/",
    "Address": "312 Central Avenue SW",
    "Site": "Library Bar alley",
    "ShootDate": 1365811200000,
    "OriginalDetails": "Alley behind the Library Bar 3rd to 4th SW-ITC on 4th fr Central to Gold NB/SB and on 3rd fr Central to Gold"
   },
   "geometry": {
    "x": -106.65089644856137,
    "y": 35.084452712245152
   }
  },
  {
   "attributes": {
    "OBJECTID": 5366,
    "Title": "Motorcycle vs Car Drift Battle 3 The Driftpocalypse",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2725834/",
    "Address": "400 Broadway Boulevard NE",
    "Site": "Marquette Avenue NW Overpass between Broadway Boulevard NE and 2nd Street NW",
    "ShootDate": 1365811200000,
    "OriginalDetails": "Marquette Overpass Broadway to 2nd-ITC on Marquette Overpass fr Broadway NE to 2nd NW"
   },
   "geometry": {
    "x": -106.64406021445198,
    "y": 35.086335295525501
   }
  },
  {
   "attributes": {
    "OBJECTID": 5367,
    "Title": "Motorcycle vs Car Drift Battle 3 The Driftpocalypse",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2725834/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1365811200000,
    "OriginalDetails": "Convention Center Parking Garage-ITC on garage and on Marquette fr Entrance to Tijeras Exit"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5368,
    "Title": "Motorcycle vs Car Drift Battle 3 The Driftpocalypse",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2725834/",
    "Address": "312 Central Avenue SW",
    "Site": "Library Bar alley",
    "ShootDate": 1365897600000,
    "OriginalDetails": "Alley behind the Library Bar 3rd to 4th SW-ITC on 4th fr Central to Gold NB/SB and on 3rd fr Central to Gold"
   },
   "geometry": {
    "x": -106.65089644856137,
    "y": 35.084452712245152
   }
  },
  {
   "attributes": {
    "OBJECTID": 5369,
    "Title": "Motorcycle vs Car Drift Battle 3 The Driftpocalypse",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2725834/",
    "Address": "400 Broadway Boulevard NE",
    "Site": "Marquette Avenue NW Overpass between Broadway Boulevard NE and 2nd Street NW",
    "ShootDate": 1365897600000,
    "OriginalDetails": "Marquette Overpass Broadway to 2nd-ITC on Marquette Overpass fr Broadway NE to 2nd NW"
   },
   "geometry": {
    "x": -106.64406021445198,
    "y": 35.086335295525501
   }
  },
  {
   "attributes": {
    "OBJECTID": 5370,
    "Title": "Motorcycle vs Car Drift Battle 3 The Driftpocalypse",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2725834/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1365897600000,
    "OriginalDetails": "Convention Center Parking Garage-ITC on garage and on Marquette fr Entrance to Tijeras Exit"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5371,
    "Title": "My One and Only",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1185431/",
    "Address": "725 Central Avenue NE",
    "Site": "Miltons Family Restaurant closed",
    "ShootDate": 1217980800000,
    "OriginalDetails": "Milton's - 725 Central NE - ITC on Central from Locust St. to High St."
   },
   "geometry": {
    "x": -106.6386430301323,
    "y": 35.082873753719682
   }
  },
  {
   "attributes": {
    "OBJECTID": 5372,
    "Title": "My One and Only",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1185431/",
    "Address": "2437 Central Avenue NW",
    "Site": "Village Inn closed",
    "ShootDate": 1218067200000,
    "OriginalDetails": "Village Inn - 2437 Central Ave. - ITC on Central from New York to Rio Grande Blvd."
   },
   "geometry": {
    "x": -106.67732925721897,
    "y": 35.094587431068661
   }
  },
  {
   "attributes": {
    "OBJECTID": 5373,
    "Title": "My One and Only",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1185431/",
    "Address": "4330 Lomas Boulevard NE",
    "Site": "Hurricanes Restaurant",
    "ShootDate": 1218067200000,
    "OriginalDetails": "Hurricane's Restaurant - 4330 Lomas NE - ITC on Lomas from Montclaire to Washington"
   },
   "geometry": {
    "x": -106.59641048606929,
    "y": 35.08741149121979
   }
  },
  {
   "attributes": {
    "OBJECTID": 5374,
    "Title": "My One and Only",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1185431/",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1218326400000,
    "OriginalDetails": "Simms Building - 4th & gold"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5375,
    "Title": "My One and Only",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1185431/",
    "Address": "5400 Central Avenue SE",
    "Site": "Economy Inn torn down",
    "ShootDate": 1218412800000,
    "OriginalDetails": "Economy Inn - 5400 Central SE - ITC on Central from La Veta Dr. to San Mateo"
   },
   "geometry": {
    "x": -106.58478193305692,
    "y": 35.077592599274389
   }
  },
  {
   "attributes": {
    "OBJECTID": 5376,
    "Title": "NBC Today Show",
    "Type": "TV Spot entitled Lend A Hand",
    "IMDbLink": "na",
    "Address": "1500 Walter Street SE",
    "Site": "Cuidando Los Ninos",
    "ShootDate": 1208304000000,
    "OriginalDetails": "Cuidando Los Ninos - 1500 Walter St. NE"
   },
   "geometry": {
    "x": -106.64185364848362,
    "y": 35.068668521089762
   }
  },
  {
   "attributes": {
    "OBJECTID": 5377,
    "Title": "Never Land",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1837612/",
    "Address": "7400 Lomas Boulevard NE",
    "Site": "Leisure Bowl interior",
    "ShootDate": 1257033600000,
    "OriginalDetails": "Leisure Bowl - all interior"
   },
   "geometry": {
    "x": -106.5647440683119,
    "y": 35.087234646449382
   }
  },
  {
   "attributes": {
    "OBJECTID": 5378,
    "Title": "Never Land",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1837612/",
    "Address": "1601 4th Street NW",
    "Site": "On the Corner Café interior now called Cipotes Restaurant",
    "ShootDate": 1257120000000,
    "OriginalDetails": "On the Corner Café - interior 1601 4th st. NW"
   },
   "geometry": {
    "x": -106.6486606064979,
    "y": 35.100024116259668
   }
  },
  {
   "attributes": {
    "OBJECTID": 5379,
    "Title": "Never Land",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1837612/",
    "Address": "3405 Central Avenue NE",
    "Site": "Guild Theatre alley",
    "ShootDate": 1257206400000,
    "OriginalDetails": "Alleyway behind the Guild Theatre"
   },
   "geometry": {
    "x": -106.60679786559966,
    "y": 35.080088306805145
   }
  },
  {
   "attributes": {
    "OBJECTID": 5380,
    "Title": "Never Land",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1837612/",
    "Address": "111 4th Street SW",
    "Site": "Alleyway between 4th and 5th Streets SW and Central and Gold Avenues SW",
    "ShootDate": 1257292800000,
    "OriginalDetails": "Alley closure north of Gold wb from 5th st to 4th st"
   },
   "geometry": {
    "x": -106.65166147182364,
    "y": 35.084437970617962
   }
  },
  {
   "attributes": {
    "OBJECTID": 5381,
    "Title": "Never Land",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1837612/",
    "Address": "111 5th Street SW",
    "Site": "Alleyway between 5th and 7th Streets SW and Central and Gold Avenues SW",
    "ShootDate": 1257292800000,
    "OriginalDetails": "Alley closure north of Gold wb from 6th st to 5th st"
   },
   "geometry": {
    "x": -106.65283818669238,
    "y": 35.08459297809901
   }
  },
  {
   "attributes": {
    "OBJECTID": 5382,
    "Title": "Never Land",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1837612/",
    "Address": "111 6th Street SW",
    "Site": "Alleyway between 6th and 7th Streets SW and Central and Gold Avenues SW",
    "ShootDate": 1257292800000,
    "OriginalDetails": "Alley closure north of Gold wb from 7th st to 6th st"
   },
   "geometry": {
    "x": -106.65417127309931,
    "y": 35.083878896079618
   }
  },
  {
   "attributes": {
    "OBJECTID": 5383,
    "Title": "Never Land",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1837612/",
    "Address": "500 Marquette Avenue NW",
    "Site": "Pedestrian walkway between Bank of the West and City Hall",
    "ShootDate": 1257897600000,
    "OriginalDetails": "Pedestrian Walkway btwn Bank of the West bldg & city hall"
   },
   "geometry": {
    "x": -106.65217120017036,
    "y": 35.088311647665762
   }
  },
  {
   "attributes": {
    "OBJECTID": 5384,
    "Title": "Never Land",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1837612/",
    "Address": "111 4th Street NW",
    "Site": "Alleyway between 4th and 5th Streets NW and Copper and Central Avenues NW",
    "ShootDate": 1258329600000,
    "OriginalDetails": "Alley closure north of Central from 4th st to 5th st wb"
   },
   "geometry": {
    "x": -106.651593598714,
    "y": 35.084781981164667
   }
  },
  {
   "attributes": {
    "OBJECTID": 5385,
    "Title": "Night and Day",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt1231578/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1224633600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5386,
    "Title": "Night and Day",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt1231578/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1224720000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5387,
    "Title": "Night and Day",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt1231578/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1224806400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5388,
    "Title": "NMDOT",
    "Type": "PSA Anti Drinking Campaign",
    "IMDbLink": "na",
    "Address": "100 General Stillwell Street NE",
    "Site": "Central Avenue NE and General Stillwell Street NE intersection",
    "ShootDate": 1234569600000,
    "OriginalDetails": "100 General Stillwell St. NE @ Corner of Central/ No Closures- No ITC"
   },
   "geometry": {
    "x": -106.54645652149064,
    "y": 35.07351510629384
   }
  },
  {
   "attributes": {
    "OBJECTID": 5389,
    "Title": "NMDOT",
    "Type": "PSA starring Erik Estrada",
    "IMDbLink": "na",
    "Address": "500 Iron Avenue SW",
    "Site": "Iron Avenue SW and 5th Street intersection",
    "ShootDate": 1242000000000,
    "OriginalDetails": "Intersection of 5th and Iron - close 5th between Coal and Stover/ close Iron between 4th & 6th"
   },
   "geometry": {
    "x": -106.65375357445848,
    "y": 35.07977864052814
   }
  },
  {
   "attributes": {
    "OBJECTID": 5390,
    "Title": "NMDOT",
    "Type": "PSA",
    "IMDbLink": "na",
    "Address": "5000 Uptown Boulevard NE",
    "Site": "San Pedro Drive NE and Uptown Boulevard NE intersection",
    "ShootDate": 1304467200000,
    "OriginalDetails": "Intersection of San Pedro and Uptown - Traffic Shift NB/SB San Pedro - Close the wb right lane on Uptown just east of San Pedro"
   },
   "geometry": {
    "x": -106.57740682026983,
    "y": 35.10544917057809
   }
  },
  {
   "attributes": {
    "OBJECTID": 5391,
    "Title": "NMDOT",
    "Type": "PSA",
    "IMDbLink": "na",
    "Address": "5000 Uptown Boulevard NE",
    "Site": "Uptown Boulevard NE between San Pedro Drive NE and Coronado Mall Entrance at Americas Parkway NE",
    "ShootDate": 1337472000000,
    "OriginalDetails": "Uptown Blvd NE, East of San Pedro up to Coronado Mall Entrance - closure on Uptown Blvd NW from San Pedro NE to Jeannedale Dr NE"
   },
   "geometry": {
    "x": -106.57740682026983,
    "y": 35.10544917057809
   }
  },
  {
   "attributes": {
    "OBJECTID": 5392,
    "Title": "NMDOT",
    "Type": "PSA Crossing Paths",
    "IMDbLink": "na",
    "Address": "111 4th Street SW",
    "Site": "Alleyway between 4th and 5th Streets SW and Central and Gold Avenues SW",
    "ShootDate": 1365638400000,
    "OriginalDetails": "Alley btwn Central & Gold & 4th & 5th-closure on alley fr 4th to 5th south of central EB/WB"
   },
   "geometry": {
    "x": -106.65166147182364,
    "y": 35.084437970617962
   }
  },
  {
   "attributes": {
    "OBJECTID": 5393,
    "Title": "NMDOT",
    "Type": "PSA Crossing Paths",
    "IMDbLink": "na",
    "Address": "2525 Tingley Drive SW",
    "Site": "Tingley Beach Street driving scene",
    "ShootDate": 1365638400000,
    "OriginalDetails": "Tingley Dr SW & 8th Street-no ITC; closure on Tingley fr Alcalde to Marquez EB/WB"
   },
   "geometry": {
    "x": -106.67922609934872,
    "y": 35.091179847152631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5394,
    "Title": "NMDOT",
    "Type": "PSA for DWI",
    "IMDbLink": "na",
    "Address": "407 Central Avenue NW ",
    "Site": "Sister Bar",
    "ShootDate": 1369180800000,
    "OriginalDetails": "Sister Bar - 407 Central NW - close Alley btwn Tijeras & Central/4th & 5th"
   },
   "geometry": {
    "x": -106.65193187909719,
    "y": 35.084618338881768
   }
  },
  {
   "attributes": {
    "OBJECTID": 5395,
    "Title": "NMDOT",
    "Type": "PSA",
    "IMDbLink": "na",
    "Address": "1701 Mountain Road NW",
    "Site": "Explora",
    "ShootDate": null,
    "OriginalDetails": "Explora/ Tiquex Park Mountain Rd- Closure on  Old town rd from 19th st - 17th"
   },
   "geometry": {
    "x": -106.66504514425496,
    "y": 35.097048797667348
   }
  },
  {
   "attributes": {
    "OBJECTID": 5396,
    "Title": "Not Forgotten",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1127221/",
    "Address": "9200 Central Avenue SW",
    "Site": "Duke City Lites now renamed Café 66",
    "ShootDate": 1205107200000,
    "OriginalDetails": "Duke City Lites - 9200 Central Ave. SW - no closure or ITC"
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 5397,
    "Title": "Not Forgotten",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1127221/",
    "Address": "111 5th Street SW",
    "Site": "Alleyway between 5th and 7th Streets SW and Central and Gold Avenues SW",
    "ShootDate": 1205193600000,
    "OriginalDetails": "Alley between 5th St. & 7th St - ITC on alley south of Central from 5th to 7th St."
   },
   "geometry": {
    "x": -106.65283818669238,
    "y": 35.08459297809901
   }
  },
  {
   "attributes": {
    "OBJECTID": 5398,
    "Title": "Not Forgotten",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1127221/",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1205193600000,
    "OriginalDetails": "Lindy's Diner (upstairs) - 500 Central Ave. SW - no closure or ITC"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 5399,
    "Title": "Not Forgotten",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1127221/",
    "Address": "806 Central Avenue SE",
    "Site": "Memorial Hospital now Hotel Parq Central",
    "ShootDate": 1205193600000,
    "OriginalDetails": "Memorial Hospital"
   },
   "geometry": {
    "x": -106.6374117102707,
    "y": 35.082763240768635
   }
  },
  {
   "attributes": {
    "OBJECTID": 5400,
    "Title": "Not Forgotten",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1127221/",
    "Address": "51 Lead Avenue SW",
    "Site": "Lead Avenue Overpass",
    "ShootDate": 1205798400000,
    "OriginalDetails": "Lead Ave. Bridge - closure on Lead from Broadway to 2nd St."
   },
   "geometry": {
    "x": -106.64758854985129,
    "y": 35.081019745823227
   }
  },
  {
   "attributes": {
    "OBJECTID": 5401,
    "Title": "Nothing But Besties",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1720179/",
    "Address": "14000 Menaul Boulevard NE",
    "Site": "Embudo Canyon at Menaul Trailhead Parking Lot",
    "ShootDate": 1279929600000,
    "OriginalDetails": "Embudo Canyon Park - location agreement"
   },
   "geometry": {
    "x": -106.48975175078949,
    "y": 35.105311198236073
   }
  },
  {
   "attributes": {
    "OBJECTID": 5402,
    "Title": "Nothing But Besties",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1720179/",
    "Address": "14000 Menaul Boulevard NE",
    "Site": "Embudo Canyon at Menaul Trailhead Parking Lot",
    "ShootDate": 1280016000000,
    "OriginalDetails": "Embudo Canyon Park - location agreement"
   },
   "geometry": {
    "x": -106.48975175078949,
    "y": 35.105311198236073
   }
  },
  {
   "attributes": {
    "OBJECTID": 5403,
    "Title": "Nothing But Besties",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1720179/",
    "Address": "14000 Menaul Boulevard NE",
    "Site": "Embudo Canyon at Menaul Trailhead Parking Lot",
    "ShootDate": 1280102400000,
    "OriginalDetails": "Embudo Canyon Park - location agreement"
   },
   "geometry": {
    "x": -106.48975175078949,
    "y": 35.105311198236073
   }
  },
  {
   "attributes": {
    "OBJECTID": 5404,
    "Title": "Nothing But Besties",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1720179/",
    "Address": "14000 Menaul Boulevard NE",
    "Site": "Embudo Canyon at Menaul Trailhead Parking Lot",
    "ShootDate": 1280188800000,
    "OriginalDetails": "Embudo Canyon Park - location agreement"
   },
   "geometry": {
    "x": -106.48975175078949,
    "y": 35.105311198236073
   }
  },
  {
   "attributes": {
    "OBJECTID": 5405,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "2100 Louisiana Boulevard NE",
    "Site": "Winrock Mall",
    "ShootDate": 1208995200000,
    "OriginalDetails": "Winrock Mall"
   },
   "geometry": {
    "x": -106.56875346861385,
    "y": 35.099133013771002
   }
  },
  {
   "attributes": {
    "OBJECTID": 5406,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "5001 Jefferson Street NE",
    "Site": "Landrys Restaurant",
    "ShootDate": 1209513600000,
    "OriginalDetails": "Landry's Restaurant"
   },
   "geometry": {
    "x": -106.59346881522922,
    "y": 35.13944364840858
   }
  },
  {
   "attributes": {
    "OBJECTID": 5407,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "3590 Menaul Boulevard NE",
    "Site": "Menaul Boulevard NE between Carlisle and Wyoming Boulevards NE",
    "ShootDate": 1209686400000,
    "OriginalDetails": "Menaul from Carlisle to Wyoming - ITC on Menaul from Carlisle to Wyoming"
   },
   "geometry": {
    "x": -106.60408315860769,
    "y": 35.109233220198071
   }
  },
  {
   "attributes": {
    "OBJECTID": 5408,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "6600 Menaul Boulevard NE",
    "Site": "Coronado Mall",
    "ShootDate": 1209945600000,
    "OriginalDetails": "Coronado Mall"
   },
   "geometry": {
    "x": -106.57093802226449,
    "y": 35.109085908863726
   }
  },
  {
   "attributes": {
    "OBJECTID": 5409,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "5412 2nd Street NW",
    "Site": "Albuquerque Police Academy",
    "ShootDate": 1210032000000,
    "OriginalDetails": "Albuquerque Police Academy"
   },
   "geometry": {
    "x": -106.63700613439462,
    "y": 35.137340943758822
   }
  },
  {
   "attributes": {
    "OBJECTID": 5410,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "5600 Holly Avenue NE",
    "Site": "Calibers Shooting Range",
    "ShootDate": 1210032000000,
    "OriginalDetails": "Caliber's Shooting Range - no closure or ITC"
   },
   "geometry": {
    "x": -106.58113881093058,
    "y": 35.175745182057604
   }
  },
  {
   "attributes": {
    "OBJECTID": 5411,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1210723200000,
    "OriginalDetails": "415 Tijeras NW - closure on Tijeras (north curb) from 4th to 6th"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5412,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1210809600000,
    "OriginalDetails": "415 Tijeras NW - closure on Tijeras (north curb) from 4th to 6th"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5413,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "400 Roma Avenue NW",
    "Site": "Police Department",
    "ShootDate": 1210896000000,
    "OriginalDetails": "400 Roma NW - south side of building on Marquette - ITC on Marquette from 3rd to 5th, 5th from Tijeras to Roma. Closure on Marquette from 4th to 5th, Tijeras (north curb and traffic lane) from 4th to 6th."
   },
   "geometry": {
    "x": -106.65078121537167,
    "y": 35.089171935883442
   }
  },
  {
   "attributes": {
    "OBJECTID": 5414,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "400 4th Street SW",
    "Site": "4th Street SW between Lead AvenueSW and Bridge Boulevard SW",
    "ShootDate": 1211414400000,
    "OriginalDetails": "4th St. between Avenida Caesar Chavez & Lead - ITC on 4th from Avenida to Lead"
   },
   "geometry": {
    "x": -106.65215026762759,
    "y": 35.081551572055965
   }
  },
  {
   "attributes": {
    "OBJECTID": 5415,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "700 2nd Street SW",
    "Site": "2nd Street SW between Stover Avenue SW and Bridge Boulevard SW",
    "ShootDate": 1211414400000,
    "OriginalDetails": "2nd St. SW between Avenida Caesar Chavez & Stover - ITC on 2nd from Avenida to Stover"
   },
   "geometry": {
    "x": -106.65035524055214,
    "y": 35.078319210376705
   }
  },
  {
   "attributes": {
    "OBJECTID": 5416,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "200 Atlantic Avenue SW",
    "Site": "Atlantic Avenue SW between 1st and 2nd Streets SW",
    "ShootDate": 1211500800000,
    "OriginalDetails": "Intersection of 1st St., 2nd St., Atlantic SW - ITC on 2nd from Stover to Cromwell. Closure on 1st from Stover to 1st and 2nd St. from Stover to Cromwell, and Hazeldine from 1st to 3rd."
   },
   "geometry": {
    "x": -106.65085120401376,
    "y": 35.076629688334343
   }
  },
  {
   "attributes": {
    "OBJECTID": 5417,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "200 Atlantic Avenue SW",
    "Site": "Atlantic Avenue SW between 1st and 2nd Streets SW",
    "ShootDate": 1211587200000,
    "OriginalDetails": "Intersection of 1st St., 2nd St., Atlantic SW - ITC on 2nd from Stover to Cromwell. Closure on 1st from Stover to 1st and 2nd St. from Stover to Cromwell, and Hazeldine from 1st to 3rd."
   },
   "geometry": {
    "x": -106.65085120401376,
    "y": 35.076629688334343
   }
  },
  {
   "attributes": {
    "OBJECTID": 5418,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "200 Atlantic Avenue SW",
    "Site": "Atlantic Avenue SW between 1st and 2nd Streets SW",
    "ShootDate": 1212192000000,
    "OriginalDetails": "Intersection of 1st St., 2nd St., Atlantic SW - ITC on 2nd from Stover to Cromwell. Closure on 1st from Stover to 1st and 2nd St. from Stover to Cromwell, and Hazeldine from 1st to 3rd."
   },
   "geometry": {
    "x": -106.65085120401376,
    "y": 35.076629688334343
   }
  },
  {
   "attributes": {
    "OBJECTID": 5419,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "200 Atlantic Avenue SW",
    "Site": "Atlantic Avenue SW between 1st and 2nd Streets SW",
    "ShootDate": 1212278400000,
    "OriginalDetails": "Intersection of 1st St., 2nd St., Atlantic SW - ITC on 2nd from Stover to Cromwell. Closure on 1st from Stover to 1st and 2nd St. from Stover to Cromwell, and Hazeldine from 1st to 3rd."
   },
   "geometry": {
    "x": -106.65085120401376,
    "y": 35.076629688334343
   }
  },
  {
   "attributes": {
    "OBJECTID": 5420,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "6800 Menaul Boulevard Northeast",
    "Site": "Menaul Boulevard NE between Louisiana and Wyoming Boulevards NE",
    "ShootDate": 1212710400000,
    "OriginalDetails": "Menaul NE from Louisiana to Wyoming Blvd. - ITC on Menaul from Louisiana to Wyoming"
   },
   "geometry": {
    "x": -106.56878015576432,
    "y": 35.109104487958085
   }
  },
  {
   "attributes": {
    "OBJECTID": 5421,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "6800 Menaul Boulevard Northeast",
    "Site": "Menaul Boulevard NE between Louisiana and Wyoming Boulevards NE",
    "ShootDate": 1212796800000,
    "OriginalDetails": "Menaul NE from Louisiana to Wyoming Blvd. - ITC on Menaul from Louisiana to Wyoming"
   },
   "geometry": {
    "x": -106.56878015576432,
    "y": 35.109104487958085
   }
  },
  {
   "attributes": {
    "OBJECTID": 5422,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "6800 Menaul Boulevard Northeast",
    "Site": "Menaul Boulevard NE between Louisiana and Wyoming Boulevards NE",
    "ShootDate": 1214006400000,
    "OriginalDetails": "Menaul NE from Louisiana to Wyoming Blvd. - ITC on Menaul from Louisiana to Wyoming"
   },
   "geometry": {
    "x": -106.56878015576432,
    "y": 35.109104487958085
   }
  },
  {
   "attributes": {
    "OBJECTID": 5423,
    "Title": "Observe and Report",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1197628/",
    "Address": "6800 Menaul Boulevard Northeast",
    "Site": "Menaul Boulevard NE between Louisiana and Wyoming Boulevards NE",
    "ShootDate": 1214092800000,
    "OriginalDetails": "Menaul NE from Louisiana to Wyoming Blvd. - ITC on Menaul from Louisiana to Wyoming"
   },
   "geometry": {
    "x": -106.56878015576432,
    "y": 35.109104487958085
   }
  },
  {
   "attributes": {
    "OBJECTID": 5424,
    "Title": "Odd Thomas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1767354/",
    "Address": "2100 Louisiana Boulevard NE",
    "Site": "Winrock Mall",
    "ShootDate": 1312502400000,
    "OriginalDetails": "Winrock Mall "
   },
   "geometry": {
    "x": -106.56875346861385,
    "y": 35.099133013771002
   }
  },
  {
   "attributes": {
    "OBJECTID": 5425,
    "Title": "Odd Thomas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1767354/",
    "Address": "10000 Coors Boulevard Bypass NW",
    "Site": "Cottonwood Mall",
    "ShootDate": null,
    "OriginalDetails": "Cottonwood Mall"
   },
   "geometry": {
    "x": -106.6600978506941,
    "y": 35.196995167521344
   }
  },
  {
   "attributes": {
    "OBJECTID": 5426,
    "Title": "Odd Thomas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1767354/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": null,
    "OriginalDetails": "Convention Center - close Marquette btwn 2nd & 3rd.  Close 1 lane Tijeras btwn 2nd & 3rd"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5427,
    "Title": "On the Border",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1683467/",
    "Address": "3106 Central Avenue SE",
    "Site": "Masks Y Mas",
    "ShootDate": 1255478400000,
    "OriginalDetails": "3106 Central SE- (Masks Y Mas)- No ITC/ No Closures"
   },
   "geometry": {
    "x": -106.61054311449571,
    "y": 35.080558917371604
   }
  },
  {
   "attributes": {
    "OBJECTID": 5428,
    "Title": "On the Border",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1683467/",
    "Address": "225 Yale Boulevard SE",
    "Site": "TriH Convenience Store",
    "ShootDate": 1255737600000,
    "OriginalDetails": "225 Yale Blvd SE (Tri H Mini Mart)- No ITC/no Closures"
   },
   "geometry": {
    "x": -106.62212045006216,
    "y": 35.077101258388844
   }
  },
  {
   "attributes": {
    "OBJECTID": 5429,
    "Title": "Outside TV",
    "Type": "TV Spot for Outside TV",
    "IMDbLink": "na",
    "Address": "1318 Coal Avenue SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1271030400000,
    "OriginalDetails": "Roosevelt Park - location agreement - 5 people"
   },
   "geometry": {
    "x": -106.66405503013196,
    "y": 35.082121014470651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5430,
    "Title": "Pascal's Bullet",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1717188/",
    "Address": "9200 Central Avenue SW",
    "Site": "Calf A Diner now renamed Café 66",
    "ShootDate": 1279929600000,
    "OriginalDetails": "9200 Central NW - Calf-A diner - no ITC/no closures"
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 5431,
    "Title": "Pascal's Bullet",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1717188/",
    "Address": "9200 Central Avenue SW",
    "Site": "Calf A Diner now renamed Café 66",
    "ShootDate": 1280016000000,
    "OriginalDetails": "9200 Central NW - Calf-A diner - no ITC/no closures"
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 5432,
    "Title": "Pascal's Bullet",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1717188/",
    "Address": "9200 Central Avenue SW",
    "Site": "Calf A Diner now renamed Café 66",
    "ShootDate": 1280102400000,
    "OriginalDetails": "9200 Central NW - Calf-A diner - no ITC/no closures"
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 5433,
    "Title": "Pascal's Bullet",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1717188/",
    "Address": "9200 Central Avenue SW",
    "Site": "Calf A Diner now renamed Café 66",
    "ShootDate": 1280188800000,
    "OriginalDetails": "9200 Central NW - Calf-A diner - no ITC/no closures"
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 5434,
    "Title": "Passion Play",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1396221/",
    "Address": "1105 Central Avenue NW",
    "Site": "Washtub Laundromat",
    "ShootDate": 1262908800000,
    "OriginalDetails": "1105 Central NW-(Washtub laundromat)- Street Closure on 11th from Central to Tijeras nb,sb and closure on Kent fr 10th to 12th eb,wb"
   },
   "geometry": {
    "x": -106.65988133874431,
    "y": 35.087271083933565
   }
  },
  {
   "attributes": {
    "OBJECTID": 5435,
    "Title": "Passion Play",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1396221/",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1262908800000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5436,
    "Title": "Passion Play",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1396221/",
    "Address": "421 Gold Avenue SW",
    "Site": "Albuquerque Old Federal Building and Courthouse alleyway",
    "ShootDate": 1262908800000,
    "OriginalDetails": "421 Gold Ave SW- ITC in Alleyway from 4th to 5th (eb, wb)"
   },
   "geometry": {
    "x": -106.65276408466461,
    "y": 35.083681561464395
   }
  },
  {
   "attributes": {
    "OBJECTID": 5437,
    "Title": "Passion Play",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1396221/",
    "Address": "120 Central Avenue SW",
    "Site": "Sunshine Building Moonlight Lounge",
    "ShootDate": 1263254400000,
    "OriginalDetails": "120 Central Ave SW-( Sunshine Building/Moonlight Lounge)- Street Closure on 2nd fr Central to Gold nb, sb"
   },
   "geometry": {
    "x": -106.64894942204826,
    "y": 35.084191024811133
   }
  },
  {
   "attributes": {
    "OBJECTID": 5438,
    "Title": "Passion Play",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1396221/",
    "Address": "1000 Juan Tabo Boulevard NE",
    "Site": "Pauls Monterey Inn",
    "ShootDate": 1264982400000,
    "OriginalDetails": "1000 Juan Tabo NE- Paul's Monterey Inn"
   },
   "geometry": {
    "x": -106.51502401874502,
    "y": 35.088341552177631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5439,
    "Title": "Passion Play",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1396221/",
    "Address": "120 Central Avenue SW",
    "Site": "Sunshine Building",
    "ShootDate": 1264982400000,
    "OriginalDetails": "Sunshine building - splinter unit establishing shot 15 people.  No ITC/no Closures"
   },
   "geometry": {
    "x": -106.64894942204826,
    "y": 35.084191024811133
   }
  },
  {
   "attributes": {
    "OBJECTID": 5440,
    "Title": "Paul",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1092026/",
    "Address": "9200 Central Avenue SW",
    "Site": "Duke City Café now renamed Café 66",
    "ShootDate": 1245715200000,
    "OriginalDetails": "9200 Central Ave SW (Duke City Café) ITC on Central eb, wb from 98th st to 90th st. & ITC on Bridge eb, wb from Central to 90th"
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 5441,
    "Title": "Paul",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1092026/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1249948800000,
    "OriginalDetails": "Albuquerque Convention Center"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5442,
    "Title": "Paul",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1092026/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1250035200000,
    "OriginalDetails": "Albuquerque Convention Center"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5443,
    "Title": "Paul",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1092026/",
    "Address": "13500 Central Avenue SW",
    "Site": "American RV Park",
    "ShootDate": 1250121600000,
    "OriginalDetails": "American RV Park- Alb."
   },
   "geometry": {
    "x": -106.79981496302696,
    "y": 35.060221569417138
   }
  },
  {
   "attributes": {
    "OBJECTID": 5444,
    "Title": "Putnam Partner LLC",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "900 Girard Boulevard SE",
    "Site": "Ernie Pyle Library",
    "ShootDate": 1309132800000,
    "OriginalDetails": "Ernie Pyle Library - ITC Girard btwn Santa Monica and Santa Cruz"
   },
   "geometry": {
    "x": -106.61332235466107,
    "y": 35.070019434642823
   }
  },
  {
   "attributes": {
    "OBJECTID": 5445,
    "Title": "Rags to Rubies",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1996368/",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1270252800000,
    "OriginalDetails": "423 Central SW (Kimo) no ITC no closures"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5446,
    "Title": "Rags to Rubies",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1996368/",
    "Address": "615 Gold Avenue SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1271980800000,
    "OriginalDetails": "615 Gold Ave- on sidewalk adjacent to Valliant printing bldg. No closures/ No ITC"
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 5447,
    "Title": "Random Natural Occurrence",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1715342/",
    "Address": "100 Monroe Street SE",
    "Site": "Monroe Street SE between Central Avenue SE and Silver Avenue SE",
    "ShootDate": 1279929600000,
    "OriginalDetails": "Monroe btwn Central & Silver - E Sidewalk ITC only"
   },
   "geometry": {
    "x": -106.59129479881685,
    "y": 35.078259926978753
   }
  },
  {
   "attributes": {
    "OBJECTID": 5448,
    "Title": "Random Natural Occurrence",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1715342/",
    "Address": "1011 Lamberton Place NE",
    "Site": "Digtal Arts and Technology Charter School",
    "ShootDate": 1279929600000,
    "OriginalDetails": "Data Charter School - 1011 Lamberton NE - no ITC/noClosures"
   },
   "geometry": {
    "x": -106.63252056051675,
    "y": 35.110713596212911
   }
  },
  {
   "attributes": {
    "OBJECTID": 5449,
    "Title": "Random Natural Occurrence",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1715342/",
    "Address": "1 Civic Plaza NW",
    "Site": "Albuquerque Civic Plaza",
    "ShootDate": 1280016000000,
    "OriginalDetails": "Civic Plaza parking garage elevator (southside) "
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5450,
    "Title": "Random Natural Occurrence",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1715342/",
    "Address": "1500 1st Street NW",
    "Site": "Factory",
    "ShootDate": 1280016000000,
    "OriginalDetails": "Factory - 1500 1st NW - no ITC/noclosures"
   },
   "geometry": {
    "x": -106.64543951828193,
    "y": 35.097595805460713
   }
  },
  {
   "attributes": {
    "OBJECTID": 5451,
    "Title": "Random Natural Occurrence",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1715342/",
    "Address": "1011 Lamberton Place NE",
    "Site": "Digtal Arts and Technology Charter School",
    "ShootDate": 1280102400000,
    "OriginalDetails": "Data Charter School - 1011 Lamberton NE - no ITC/noClosures"
   },
   "geometry": {
    "x": -106.63252056051675,
    "y": 35.110713596212911
   }
  },
  {
   "attributes": {
    "OBJECTID": 5452,
    "Title": "Random Natural Occurrence",
    "Type": "Movie Duke City Shootout ",
    "IMDbLink": "http://www.imdb.com/title/tt1715342/",
    "Address": "1011 Lamberton Place NE",
    "Site": "Digtal Arts and Technology Charter School",
    "ShootDate": 1280188800000,
    "OriginalDetails": "Data Charter School - 1011 Lamberton NE - no ITC/noClosures"
   },
   "geometry": {
    "x": -106.63252056051675,
    "y": 35.110713596212911
   }
  },
  {
   "attributes": {
    "OBJECTID": 5453,
    "Title": "Rebecca Elise Productions",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1281571200000,
    "OriginalDetails": "Amy Biehl HS - Close alley btwn Gold & Central/4th & 5th"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5454,
    "Title": "Rio Grande Community Farm",
    "Type": "TV Feature by USDA",
    "IMDbLink": "na",
    "Address": "1701 Mountain Road NW",
    "Site": "Rio Grande Community Farm",
    "ShootDate": 1343865600000,
    "OriginalDetails": "Rio Grande Community Farm - no permit issued"
   },
   "geometry": {
    "x": -106.66504514425496,
    "y": 35.097048797667348
   }
  },
  {
   "attributes": {
    "OBJECTID": 5455,
    "Title": "Saige Paints the Sky",
    "Type": "Movie aka American Girl Saige Paints the Sky",
    "IMDbLink": "http://www.imdb.com/title/tt2818348/",
    "Address": "4401 Alameda Boulevard NE",
    "Site": "Anderson Abruzzo Albuquerque Intl Balloon Fiesta Park",
    "ShootDate": 1350086400000,
    "OriginalDetails": "Balloon Fiesta  - 2nd Unit"
   },
   "geometry": {
    "x": -106.59857185510076,
    "y": 35.184546038252044
   }
  },
  {
   "attributes": {
    "OBJECTID": 5456,
    "Title": "Saige Paints the Sky",
    "Type": "Movie aka American Girl Saige Paints the Sky",
    "IMDbLink": "http://www.imdb.com/title/tt2818348/",
    "Address": "202 Romero Street NW",
    "Site": "Old Town area",
    "ShootDate": 1350432000000,
    "OriginalDetails": "Old Town - close north and south plaza btwn San Felipe and Romero/close San Felipe @ Old Town Rd./close Romero @church"
   },
   "geometry": {
    "x": -106.67047263584421,
    "y": 35.095931947334329
   }
  },
  {
   "attributes": {
    "OBJECTID": 5457,
    "Title": "Saige Paints the Sky",
    "Type": "Movie aka American Girl Saige Paints the Sky",
    "IMDbLink": "http://www.imdb.com/title/tt2818348/",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1350604800000,
    "OriginalDetails": "KiMo Theatre  - exterior no ITC/n closure - 2nd UNIT"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5458,
    "Title": "Saige Paints the Sky",
    "Type": "Movie aka American Girl Saige Paints the Sky",
    "IMDbLink": "http://www.imdb.com/title/tt2818348/",
    "Address": "9201 Balloon Museum Drive NE",
    "Site": "Anderson Abruzzo Albuquerque Intl Balloon Fiesta Park",
    "ShootDate": 1350604800000,
    "OriginalDetails": "Balloon Museum - 2nd Unit"
   },
   "geometry": {
    "x": -106.59778427514172,
    "y": 35.186578900351641
   }
  },
  {
   "attributes": {
    "OBJECTID": 5459,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "1000 Lanier Drive SE",
    "Site": "Lanier Drive SE and Wenonah Avenue SE intersection",
    "ShootDate": 1217203200000,
    "OriginalDetails": "Lanier & Wenonah Ave. Intersection - Closure on Wenonah Ave. from Lanier to Kaylyn Dr. SE"
   },
   "geometry": {
    "x": -106.49487102591318,
    "y": 35.065018148188592
   }
  },
  {
   "attributes": {
    "OBJECTID": 5460,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "4421 McLeod Road NE",
    "Site": "Production Office",
    "ShootDate": 1217203200000,
    "OriginalDetails": "Production Office - 4421 Mcleod NE"
   },
   "geometry": {
    "x": -106.59717802371603,
    "y": 35.138284401430937
   }
  },
  {
   "attributes": {
    "OBJECTID": 5461,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "10401 Central Avenue NW",
    "Site": "Timco Trailer Park now called Loma Vista Mobile Home Park",
    "ShootDate": 1217376000000,
    "OriginalDetails": "Timco Trailer Park & 106 St. NW - ITC on 106th St. from Central to Volcano Rd. NW"
   },
   "geometry": {
    "x": -106.74806713558947,
    "y": 35.071397235413485
   }
  },
  {
   "attributes": {
    "OBJECTID": 5462,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "4401 Alameda Boulevard NE",
    "Site": "Anderson Abruzzo Albuquerque Intl Balloon Fiesta Park",
    "ShootDate": 1217980800000,
    "OriginalDetails": "Balloon Fiesta Parking Lot"
   },
   "geometry": {
    "x": -106.59857185510076,
    "y": 35.184546038252044
   }
  },
  {
   "attributes": {
    "OBJECTID": 5463,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "4401 Alameda Boulevard NE",
    "Site": "Anderson Abruzzo Albuquerque Intl Balloon Fiesta Park",
    "ShootDate": 1218067200000,
    "OriginalDetails": "Balloon Fiesta Parking Lot"
   },
   "geometry": {
    "x": -106.59857185510076,
    "y": 35.184546038252044
   }
  },
  {
   "attributes": {
    "OBJECTID": 5464,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "4401 Alameda Boulevard NE",
    "Site": "Anderson Abruzzo Albuquerque Intl Balloon Fiesta Park",
    "ShootDate": 1218153600000,
    "OriginalDetails": "Balloon Fiesta Parking Lot"
   },
   "geometry": {
    "x": -106.59857185510076,
    "y": 35.184546038252044
   }
  },
  {
   "attributes": {
    "OBJECTID": 5465,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "8920 Pan American Freeway NE",
    "Site": "Porsche of Albuquerque",
    "ShootDate": 1218758400000,
    "OriginalDetails": "Porsche ABQ - 8900 Pan American Fwy NE"
   },
   "geometry": {
    "x": -106.58044447609802,
    "y": 35.186266585366191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5466,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "6150 Iliff Road NW",
    "Site": "Hampton Inn and Suites",
    "ShootDate": 1219190400000,
    "OriginalDetails": "Hampton Inn (west side)"
   },
   "geometry": {
    "x": -106.70959962042672,
    "y": 35.103384333534386
   }
  },
  {
   "attributes": {
    "OBJECTID": 5467,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1219276800000,
    "OriginalDetails": "El Madrid Lounge"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5468,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "8705 Broadway Boulevard SE",
    "Site": "Acme Towing",
    "ShootDate": 1219276800000,
    "OriginalDetails": "Acme Towing - 8705 Broadway"
   },
   "geometry": {
    "x": -106.65948122103194,
    "y": 34.96633705521117
   }
  },
  {
   "attributes": {
    "OBJECTID": 5469,
    "Title": "Saint John of Las Vegas",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1276105/",
    "Address": "8705 Broadway Boulevard SE",
    "Site": "Acme Towing",
    "ShootDate": 1219363200000,
    "OriginalDetails": "Acme Towing - 8705 Broadway"
   },
   "geometry": {
    "x": -106.65948122103194,
    "y": 34.96633705521117
   }
  },
  {
   "attributes": {
    "OBJECTID": 5470,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "1505 Candelaria Road NW",
    "Site": "Valley High School",
    "ShootDate": 1268697600000,
    "OriginalDetails": "Valley High School  - 1505 Candelaria NW"
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5471,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1269216000000,
    "OriginalDetails": "Railyards - 1100 2nd SW - ITC 2nd btwn Cromwell to Santa Fe"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5472,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1269388800000,
    "OriginalDetails": "Los Picaros Rd (Near University Bridge)- ITC on Los Picaros from Bobby Foster to Ira Sprektor (eb, wb) "
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5473,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "8020 Central Avenue SE",
    "Site": "Fair N Square Food Store",
    "ShootDate": 1270512000000,
    "OriginalDetails": "8020 Central SE - Fair N Square - ITC Central btwn Pennsylvania & Tennessee"
   },
   "geometry": {
    "x": -106.5570764110677,
    "y": 35.074568617876345
   }
  },
  {
   "attributes": {
    "OBJECTID": 5474,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "8020 Central Avenue SE",
    "Site": "Fair N Square Food Store",
    "ShootDate": 1270598400000,
    "OriginalDetails": "8020 Central SE - Fair N Square - ITC Central btwn Pennsylvania & Tennessee"
   },
   "geometry": {
    "x": -106.5570764110677,
    "y": 35.074568617876345
   }
  },
  {
   "attributes": {
    "OBJECTID": 5475,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1270684800000,
    "OriginalDetails": "423 1st SW - El Madrid"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5476,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1270771200000,
    "OriginalDetails": "423 1st. St. El Madrid Bar - ITC 1st st.  From Iron to  Lead nb, sb"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5477,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "1825 Edith Boulevard NE",
    "Site": "Santa Barbara Martineztown Park",
    "ShootDate": 1271635200000,
    "OriginalDetails": "Martineztown-Santa Barbara Park - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.63764614181375,
    "y": 35.102585424762644
   }
  },
  {
   "attributes": {
    "OBJECTID": 5478,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "1900 Edith Boulevard NE",
    "Site": "Mount Calvary Cemetary",
    "ShootDate": 1271635200000,
    "OriginalDetails": "Mt. Calvary Cemetary 1900 Edith NE - no ITC/closures"
   },
   "geometry": {
    "x": -106.63753249774378,
    "y": 35.102926815900204
   }
  },
  {
   "attributes": {
    "OBJECTID": 5479,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "5704 Lomas Boulevard NE",
    "Site": "Cross Country Auto Sales",
    "ShootDate": 1271721600000,
    "OriginalDetails": "Cross Country Auto Sales - 5704 Lomas NE - ITC on Lomas btwn Palomas & Valencia/ ITC Alvarado btwn Alice and Lomas"
   },
   "geometry": {
    "x": -106.58224830666326,
    "y": 35.087364567286308
   }
  },
  {
   "attributes": {
    "OBJECTID": 5480,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "8220 San Pedro Drive NE",
    "Site": "Paseo Nuevo Office Complex",
    "ShootDate": 1271894400000,
    "OriginalDetails": "Paseo Nuevo Office Complex -  8220 San Pedro NE - ITC San Pedro btwn Holly & Carmel"
   },
   "geometry": {
    "x": -106.57757365897766,
    "y": 35.176535725045724
   }
  },
  {
   "attributes": {
    "OBJECTID": 5481,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "8220 San Pedro Drive NE",
    "Site": "Paseo Nuevo Office Complex",
    "ShootDate": 1271980800000,
    "OriginalDetails": "Paseo Nuevo Office Complex -  8220 San Pedro NE - no ITC/no closure"
   },
   "geometry": {
    "x": -106.57757365897766,
    "y": 35.176535725045724
   }
  },
  {
   "attributes": {
    "OBJECTID": 5482,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "1002 Coal Avenue SW",
    "Site": "Coal Avenue SW and 10th Street SW intersection",
    "ShootDate": 1272499200000,
    "OriginalDetails": "Intersection of 10th & Coal - ITC on Coal & 10th"
   },
   "geometry": {
    "x": -106.65959025225293,
    "y": 35.081550626688191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5483,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "8500 La Sala Grande NE",
    "Site": "La Palomita Park",
    "ShootDate": 1272585600000,
    "OriginalDetails": "Palomitas Park - ITC on La Camila btwn Wyoming and Candelaria"
   },
   "geometry": {
    "x": -106.54893367798888,
    "y": 35.117759196414646
   }
  },
  {
   "attributes": {
    "OBJECTID": 5484,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "2294 Wyoming Boulevard NE",
    "Site": "All Fours Strip Club closed",
    "ShootDate": 1273622400000,
    "OriginalDetails": "All Fours - 2294 Wyoming NE - no closures/no ITC"
   },
   "geometry": {
    "x": -106.55087492833471,
    "y": 35.108647526400325
   }
  },
  {
   "attributes": {
    "OBJECTID": 5485,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "906 Park Avenue SW",
    "Site": "Java Joes",
    "ShootDate": 1274054400000,
    "OriginalDetails": "Java Joe's - 906 Park SW - Close Park between 9th & 10th"
   },
   "geometry": {
    "x": -106.65782147844163,
    "y": 35.085316075611949
   }
  },
  {
   "attributes": {
    "OBJECTID": 5486,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1274140800000,
    "OriginalDetails": "El Madrid Bar - no ITC/no Closure"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5487,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1274227200000,
    "OriginalDetails": "El Madrid Bar - no ITC/no Closure"
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5488,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "1205 Broadway Boulevard SE",
    "Site": "Lozoya Studios",
    "ShootDate": 1274313600000,
    "OriginalDetails": "Lozoyas - 1222 Broadway SE - ITC on Broadway btwn Bell and Lewis"
   },
   "geometry": {
    "x": -106.64563613614145,
    "y": 35.071331789563068
   }
  },
  {
   "attributes": {
    "OBJECTID": 5489,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "518 1st Street SW",
    "Site": "YDI Wool Warehouse",
    "ShootDate": 1274313600000,
    "OriginalDetails": "Wool Warehouse - 518 1st St. SW - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64896857772339,
    "y": 35.079214806348311
   }
  },
  {
   "attributes": {
    "OBJECTID": 5490,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "5601 University Boulevard SE",
    "Site": "Isleta Amphitheater formerly called Journal Pavilion",
    "ShootDate": 1275523200000,
    "OriginalDetails": "Journal Pavilion"
   },
   "geometry": {
    "x": -106.62177349734323,
    "y": 34.995465777434681
   }
  },
  {
   "attributes": {
    "OBJECTID": 5491,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "4400 Wyoming Boulevard NE",
    "Site": "Shopping Center",
    "ShootDate": 1275868800000,
    "OriginalDetails": "La Mirada Shopping Ctr - 4400 Wyoming Blvd. NE- no ITC/no closures "
   },
   "geometry": {
    "x": -106.55099616496545,
    "y": 35.128256868583058
   }
  },
  {
   "attributes": {
    "OBJECTID": 5492,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "800 Rio Grande Boulevard NW",
    "Site": "Q Bar at the Hotel Albuquerque at Old Town",
    "ShootDate": 1275868800000,
    "OriginalDetails": "Q Bar - hotel Albuquerque"
   },
   "geometry": {
    "x": -106.67063012039499,
    "y": 35.100850546774744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5493,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "4800 Central Avenue SW",
    "Site": "Central Appliance",
    "ShootDate": 1275955200000,
    "OriginalDetails": "4800 Central SW - Central Appliance - Close right hand EB land of Central btwn Cypress & 47th, Close 48th btwn Central & end of 48th.  ITC Central btwn Cypress & 47th"
   },
   "geometry": {
    "x": -106.69169678610905,
    "y": 35.084163493882848
   }
  },
  {
   "attributes": {
    "OBJECTID": 5494,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "609 Gold Avenue SW",
    "Site": "Office building",
    "ShootDate": 1275955200000,
    "OriginalDetails": "609 Gold SW - ITC Gold btwn 6th & 7th"
   },
   "geometry": {
    "x": -106.6547499139064,
    "y": 35.08394503829868
   }
  },
  {
   "attributes": {
    "OBJECTID": 5495,
    "Title": "Scoundrels",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt1595860/",
    "Address": "2108 Menaul Boulevard NE",
    "Site": "Rodeway Inn",
    "ShootDate": 1276041600000,
    "OriginalDetails": "Rodeway Inn 3108 Menaul NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.62156963996085,
    "y": 35.109142078239969
   }
  },
  {
   "attributes": {
    "OBJECTID": 5496,
    "Title": "SOS Commercial Productions",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "400 San Jose Avenue SE",
    "Site": "Jack Candelaria Community Center",
    "ShootDate": 1332806400000,
    "OriginalDetails": "Jack Candelaria Community Center - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64725498652169,
    "y": 35.054808500742695
   }
  },
  {
   "attributes": {
    "OBJECTID": 5497,
    "Title": "SOS Commercial Productions",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "400 San Jose Avenue SE",
    "Site": "Jack Candelaria Community Center",
    "ShootDate": 1332806400000,
    "OriginalDetails": "Jack Candelaria Community Center - no ITC/no closures"
   },
   "geometry": {
    "x": -106.64725498652169,
    "y": 35.054808500742695
   }
  },
  {
   "attributes": {
    "OBJECTID": 5498,
    "Title": "Southwest Productions",
    "Type": "PSA for DUI",
    "IMDbLink": "na",
    "Address": "1100 4th Street NW",
    "Site": "4th Street NW between Mountain Road NW and Lomas Boulevard NW",
    "ShootDate": 1202947200000,
    "OriginalDetails": "4th between Mountain & Lomas"
   },
   "geometry": {
    "x": -106.64957574543067,
    "y": 35.095152562839459
   }
  },
  {
   "attributes": {
    "OBJECTID": 5499,
    "Title": "Southwest Productions",
    "Type": "PSA for DUI",
    "IMDbLink": "na",
    "Address": "200 Marquette Avenue NW",
    "Site": "Marquette Avenue NW and 2nd Street NW",
    "ShootDate": 1203033600000,
    "OriginalDetails": "2nd & Marquette - ITC"
   },
   "geometry": {
    "x": -106.64858454524446,
    "y": 35.087888342144595
   }
  },
  {
   "attributes": {
    "OBJECTID": 5500,
    "Title": "Southwest Productions",
    "Type": "PSA for NMDOT",
    "IMDbLink": "na",
    "Address": "200 Gold Avenue SW",
    "Site": "Gold Avenue and 2nd Street parking lot  ",
    "ShootDate": 1209513600000,
    "OriginalDetails": "Parking lot NW corner of 2nd & Gold"
   },
   "geometry": {
    "x": -106.64946612760978,
    "y": 35.083241023050171
   }
  },
  {
   "attributes": {
    "OBJECTID": 5501,
    "Title": "Southwest Productions",
    "Type": "PSA for NMDOT Seatbelt Safety",
    "IMDbLink": "na",
    "Address": "200 Silver Avenue SW",
    "Site": "Old Greyhound Bus Station moved",
    "ShootDate": 1210118400000,
    "OriginalDetails": "Old Greyhound bus station - NE corner of Silver Ave. & 2nd St."
   },
   "geometry": {
    "x": -106.64962351154927,
    "y": 35.082254716069684
   }
  },
  {
   "attributes": {
    "OBJECTID": 5502,
    "Title": "Southwest Productions",
    "Type": "PSA for NMDOT Seatbelt Safety",
    "IMDbLink": "na",
    "Address": "2501 Carlisle Boulevard NE",
    "Site": "State Police Office alleyway",
    "ShootDate": 1211241600000,
    "OriginalDetails": "Alley behind State Police office Carlisle and Menaul"
   },
   "geometry": {
    "x": -106.60420075975648,
    "y": 35.107511311184716
   }
  },
  {
   "attributes": {
    "OBJECTID": 5503,
    "Title": "Southwest Productions",
    "Type": "PSA for NMDOT Seatbelt Safety",
    "IMDbLink": "na",
    "Address": "600 1st Street NW",
    "Site": "1st Street NW and Roma Avenue NW intersection",
    "ShootDate": 1211241600000,
    "OriginalDetails": "1st between Roma and Lomas"
   },
   "geometry": {
    "x": -106.64713568216712,
    "y": 35.088747496957843
   }
  },
  {
   "attributes": {
    "OBJECTID": 5504,
    "Title": "Southwest Productions",
    "Type": "Commercial for PNM",
    "IMDbLink": "na",
    "Address": "10700 Lagrima De Oro Road NE",
    "Site": "Roadrunner Ball Park",
    "ShootDate": 1249948800000,
    "OriginalDetails": "Roadrunner Ball Park"
   },
   "geometry": {
    "x": -106.52048581519836,
    "y": 35.132012117936952
   }
  },
  {
   "attributes": {
    "OBJECTID": 5505,
    "Title": "Southwest Productions",
    "Type": "Commercial for PNM",
    "IMDbLink": "na",
    "Address": "5700 University Boulevard SE",
    "Site": "Mesa Del Sol area",
    "ShootDate": 1250467200000,
    "OriginalDetails": "Mesa del Sol property"
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 5506,
    "Title": "Southwest Productions",
    "Type": "Commercial for PNM",
    "IMDbLink": "na",
    "Address": "125 Truman Street NE",
    "Site": "Kilmer & Kilmer",
    "ShootDate": 1250726400000,
    "OriginalDetails": "Kilmer & Kilmer - 125 Truman St NE # 200"
   },
   "geometry": {
    "x": -106.5873302388206,
    "y": 35.078994319537038
   }
  },
  {
   "attributes": {
    "OBJECTID": 5507,
    "Title": "Southwest Productions",
    "Type": "Commercial for PNM",
    "IMDbLink": "na",
    "Address": "2645 Baylor Drive SE",
    "Site": "Roadrunner Food Bank has since moved",
    "ShootDate": 1250726400000,
    "OriginalDetails": "Roadrunner Food Bank - 2645 Baylor Dr"
   },
   "geometry": {
    "x": -106.61670797471122,
    "y": 35.057915305702288
   }
  },
  {
   "attributes": {
    "OBJECTID": 5508,
    "Title": "Southwest Productions",
    "Type": "Commercial by Diane Denish",
    "IMDbLink": "na",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1271462400000,
    "OriginalDetails": "Amy Biehl High School"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5509,
    "Title": "Southwest Productions",
    "Type": "Commercial by Diane Denish",
    "IMDbLink": "na",
    "Address": "800 20th Street NW",
    "Site": "Contract Associates",
    "ShootDate": 1271462400000,
    "OriginalDetails": "Contract Associates - 800 20th St. NW"
   },
   "geometry": {
    "x": -106.66752384226221,
    "y": 35.100140237783208
   }
  },
  {
   "attributes": {
    "OBJECTID": 5510,
    "Title": "Southwest Productions",
    "Type": "Commercial by Diane Denish",
    "IMDbLink": "na",
    "Address": "201 San Pedro Drive NE",
    "Site": "El Mezquite Market",
    "ShootDate": 1271548800000,
    "OriginalDetails": "El Mezquite Market  - 201 San Pedro NE"
   },
   "geometry": {
    "x": -106.57747350939989,
    "y": 35.078786961866889
   }
  },
  {
   "attributes": {
    "OBJECTID": 5511,
    "Title": "Southwest Productions ",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "2111 Church Street NW",
    "Site": "Church Street Café",
    "ShootDate": 1282262400000,
    "OriginalDetails": "Old Town-Church street café - no closures no ITC"
   },
   "geometry": {
    "x": -106.66999482643617,
    "y": 35.097129897856263
   }
  },
  {
   "attributes": {
    "OBJECTID": 5512,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "725 Central Avenue NE",
    "Site": "Milton's Coffee Shop",
    "ShootDate": 1171065600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6386430301323,
    "y": 35.082873753719682
   }
  },
  {
   "attributes": {
    "OBJECTID": 5513,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "8908 Menaul NE",
    "Site": "Charlie's Sporting Goods",
    "ShootDate": 1171411200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.54343568032795,
    "y": 35.109092235397831
   }
  },
  {
   "attributes": {
    "OBJECTID": 5514,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "1001 Central NE",
    "Site": "Crossroads Motel",
    "ShootDate": 1171497600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63615181499986,
    "y": 35.08263334568273
   }
  },
  {
   "attributes": {
    "OBJECTID": 5515,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "2020 Menaul NE",
    "Site": "MCM Elegante",
    "ShootDate": 1171929600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62188630777661,
    "y": 35.109138126087679
   }
  },
  {
   "attributes": {
    "OBJECTID": 5516,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "1800 Tingley Dr. SW",
    "Site": "Tingley Beach  ",
    "ShootDate": 1171929600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66996488828269,
    "y": 35.082061731629906
   }
  },
  {
   "attributes": {
    "OBJECTID": 5517,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "7001 Lomas NE",
    "Site": "Buffet's Candy",
    "ShootDate": 1172016000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56976175116347,
    "y": 35.087270108494188
   }
  },
  {
   "attributes": {
    "OBJECTID": 5518,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1172102400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5519,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "1801 Hazeldine SE",
    "Site": "St. Charles Borromeo School",
    "ShootDate": 1172880000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62816156914388,
    "y": 35.076656878482197
   }
  },
  {
   "attributes": {
    "OBJECTID": 5520,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "8920 Menaul NE",
    "Site": "Economy Gasoline",
    "ShootDate": 1173225600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.54205139803466,
    "y": 35.10907543175766
   }
  },
  {
   "attributes": {
    "OBJECTID": 5521,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "3521 Constitution NE",
    "Site": "Lucky Boy Hamburgers",
    "ShootDate": 1173312000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60523733294936,
    "y": 35.094748660177352
   }
  },
  {
   "attributes": {
    "OBJECTID": 5522,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "6500 Central SE",
    "Site": "Los Arcos Restaurant",
    "ShootDate": 1173398400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57518403521902,
    "y": 35.076563970257283
   }
  },
  {
   "attributes": {
    "OBJECTID": 5523,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "6614 Central SE",
    "Site": "Consignment Auto & Truck",
    "ShootDate": 1173398400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57311686442655,
    "y": 35.076346823509553
   }
  },
  {
   "attributes": {
    "OBJECTID": 5524,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "8020 Central Avenue SE",
    "Site": "Fair 'n Square Grocery Store",
    "ShootDate": 1173398400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5570764110677,
    "y": 35.074568617876345
   }
  },
  {
   "attributes": {
    "OBJECTID": 5525,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "12931 Indian School NE",
    "Site": "Hinkle Family Fun Center",
    "ShootDate": 1173657600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.4976882612218,
    "y": 35.094779982355504
   }
  },
  {
   "attributes": {
    "OBJECTID": 5526,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "1801 Wyoming NE",
    "Site": "Brad's Auto Repair",
    "ShootDate": 1174003200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5508251041758,
    "y": 35.102032997942203
   }
  },
  {
   "attributes": {
    "OBJECTID": 5527,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "9617 Menaul NE",
    "Site": "Comic Warehouse",
    "ShootDate": 1174003200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5343950083591,
    "y": 35.108977711018319
   }
  },
  {
   "attributes": {
    "OBJECTID": 5528,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "707 Broadway NE",
    "Site": "7 Broadway Place",
    "ShootDate": 1174348800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5520156090825,
    "y": 35.156651403997337
   }
  },
  {
   "attributes": {
    "OBJECTID": 5529,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "1216 Central SW",
    "Site": "Doghouse",
    "ShootDate": 1174348800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66140325282058,
    "y": 35.087901265331297
   }
  },
  {
   "attributes": {
    "OBJECTID": 5530,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "5525 Gibson SE",
    "Site": "Dunkin Donuts",
    "ShootDate": 1174521600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58003460088504,
    "y": 35.058326274176501
   }
  },
  {
   "attributes": {
    "OBJECTID": 5531,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "2714 4th NW",
    "Site": "On the Spot Vacuum",
    "ShootDate": 1174867200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64623635627829,
    "y": 35.112636822124117
   }
  },
  {
   "attributes": {
    "OBJECTID": 5532,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "2714 4th NW",
    "Site": "On the Spot Vacuum",
    "ShootDate": 1174953600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64623635627829,
    "y": 35.112636822124117
   }
  },
  {
   "attributes": {
    "OBJECTID": 5533,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "2714 4th NW",
    "Site": "On the Spot Vacuum",
    "ShootDate": 1175040000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64623635627829,
    "y": 35.112636822124117
   }
  },
  {
   "attributes": {
    "OBJECTID": 5534,
    "Title": "Sunshine Cleaning",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0862846/?ref_=nv_sr_4",
    "Address": "3023 Central NW",
    "Site": "Spy Shop",
    "ShootDate": 1194393600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.67941499079846,
    "y": 35.091066953645203
   }
  },
  {
   "attributes": {
    "OBJECTID": 5535,
    "Title": "Swing Vote",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1027862/?ref_=nv_sr_1",
    "Address": "726 Claudine NE",
    "Site": "Duke City Diner",
    "ShootDate": 1187740800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.52204223625961,
    "y": 35.083927493638704
   }
  },
  {
   "attributes": {
    "OBJECTID": 5536,
    "Title": "Swing Vote",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1027862/?ref_=nv_sr_1",
    "Address": "726 Claudine NE",
    "Site": "Duke City Diner",
    "ShootDate": 1187827200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.52204223625961,
    "y": 35.083927493638704
   }
  },
  {
   "attributes": {
    "OBJECTID": 5537,
    "Title": "Swing Vote",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1027862/?ref_=nv_sr_1",
    "Address": "414 Central SW",
    "Site": "Kress Building  ",
    "ShootDate": 1187827200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5538,
    "Title": "Swing Vote",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1027862/?ref_=nv_sr_1",
    "Address": "320 Central Avenue SW",
    "Site": "Rosenwald Building",
    "ShootDate": 1187827200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6512043640913,
    "y": 35.084493620356852
   }
  },
  {
   "attributes": {
    "OBJECTID": 5539,
    "Title": "Swing Vote",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1027862/?ref_=nv_sr_1",
    "Address": "9615 Broadway SE",
    "Site": "Cal-Maine",
    "ShootDate": 1190592000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66085313981193,
    "y": 34.959641819025592
   }
  },
  {
   "attributes": {
    "OBJECTID": 5540,
    "Title": "Swing Vote",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1027862/?ref_=nv_sr_1",
    "Address": "1130 University Boulevard NE",
    "Site": "KNME Studios",
    "ShootDate": 1190764800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62622071944666,
    "y": 35.094227905428234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5541,
    "Title": "Swing Vote",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1027862/?ref_=nv_sr_1",
    "Address": "1130 University Boulevard NE",
    "Site": "KNME Studios",
    "ShootDate": 1190764800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62622071944666,
    "y": 35.094227905428234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5542,
    "Title": "Tennessee",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0770814/?ref_=nv_sr_3",
    "Address": "423 1st Street SW",
    "Site": "El Madrid Bar ",
    "ShootDate": 1170374400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5543,
    "Title": "Tennessee",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0770814/?ref_=nv_sr_3",
    "Address": "501 Lomas NE",
    "Site": "Pawn Shop",
    "ShootDate": 1170374400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64040050134066,
    "y": 35.089912012090224
   }
  },
  {
   "attributes": {
    "OBJECTID": 5544,
    "Title": "Tennessee",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0770814/?ref_=nv_sr_3",
    "Address": "701 Central NE",
    "Site": "Imperial Inn",
    "ShootDate": 1170720000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63975714320556,
    "y": 35.083013196025504
   }
  },
  {
   "attributes": {
    "OBJECTID": 5545,
    "Title": "Tennessee",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0770814/?ref_=nv_sr_3",
    "Address": "10511 Golf Course NW",
    "Site": "Lovelace Hospital",
    "ShootDate": 1171238400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.67626468353868,
    "y": 35.207874276964191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5546,
    "Title": "Tennessee",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0770814/?ref_=nv_sr_3",
    "Address": "301 Menaul Boulevard NE",
    "Site": "Menaul School",
    "ShootDate": 1171324800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63882066389489,
    "y": 35.109996087705987
   }
  },
  {
   "attributes": {
    "OBJECTID": 5547,
    "Title": "Tennessee",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0770814/?ref_=nv_sr_3",
    "Address": "620 Central SW",
    "Site": "Golden West Saloon",
    "ShootDate": 1172016000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65494135567324,
    "y": 35.084975081194294
   }
  },
  {
   "attributes": {
    "OBJECTID": 5548,
    "Title": "Tennessee",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0770814/?ref_=nv_sr_3",
    "Address": "10511 Golf Course NW",
    "Site": "Lovelace Hospital",
    "ShootDate": 1360368000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.67626468353868,
    "y": 35.207874276964191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5549,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "201 California Street NE",
    "Site": "Albuquerque Downs Racetrack",
    "ShootDate": 1210723200000,
    "OriginalDetails": "Race Track"
   },
   "geometry": {
    "x": -106.57527227672939,
    "y": 35.077643858909262
   }
  },
  {
   "attributes": {
    "OBJECTID": 5550,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "201 California Street NE",
    "Site": "Albuquerque Downs Racetrack",
    "ShootDate": 1210809600000,
    "OriginalDetails": "Race Track"
   },
   "geometry": {
    "x": -106.57527227672939,
    "y": 35.077643858909262
   }
  },
  {
   "attributes": {
    "OBJECTID": 5551,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "201 California Street NE",
    "Site": "Albuquerque Downs Racetrack",
    "ShootDate": 1210896000000,
    "OriginalDetails": "Race Track"
   },
   "geometry": {
    "x": -106.57527227672939,
    "y": 35.077643858909262
   }
  },
  {
   "attributes": {
    "OBJECTID": 5552,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3615 Los Picaros Road SE",
    "Site": "Montessa Park",
    "ShootDate": 1211155200000,
    "OriginalDetails": "Montessa Park (w. of Los Picaros & Ira Sprecher Intersection - ITC on Los Picaros from Bobby Foster to Dead End"
   },
   "geometry": {
    "x": -106.59879760891818,
    "y": 35.017793864723757
   }
  },
  {
   "attributes": {
    "OBJECTID": 5553,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards from Atlantic to Stover",
    "ShootDate": 1211328000000,
    "OriginalDetails": "Old Railyards - ITC on 2nd St. from Atlantic to Stover"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5554,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1211328000000,
    "OriginalDetails": "Los Picaros & University Blvd. "
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5555,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5601 University Boulevard SE",
    "Site": "University Boulevard SE between Rio Bravo Boulevard SE and Isleta Amphitheatre",
    "ShootDate": 1211328000000,
    "OriginalDetails": "University Blvd. between Rio Bravo & Journal Pavillion - ITC on Los Picaros from Bobby Foster to Ira Sprecher (30 mins.). Closure on University Blvd. from Rio Bravo to Journal Pavillion"
   },
   "geometry": {
    "x": -106.62177349734323,
    "y": 34.995465777434681
   }
  },
  {
   "attributes": {
    "OBJECTID": 5556,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards from Atlantic to Stover",
    "ShootDate": 1211414400000,
    "OriginalDetails": "Old Railyards - ITC on 2nd St. from Atlantic to Stover"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5557,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1211414400000,
    "OriginalDetails": "Los Picaros & University Blvd. "
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5558,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5601 University Boulevard SE",
    "Site": "University Boulevard SE between Rio Bravo Boulevard SEand Isleta Amphitheatre",
    "ShootDate": 1211414400000,
    "OriginalDetails": "University Blvd. between Rio Bravo & Journal Pavillion - ITC on Los Picaros from Bobby Foster to Ira Sprecher (30 mins.). Closure on University Blvd. from Rio Bravo to Journal Pavillion"
   },
   "geometry": {
    "x": -106.62177349734323,
    "y": 34.995465777434681
   }
  },
  {
   "attributes": {
    "OBJECTID": 5559,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards from Atlantic to Stover",
    "ShootDate": 1211500800000,
    "OriginalDetails": "Old Railyards - ITC on 2nd St. from Atlantic to Stover"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5560,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1211500800000,
    "OriginalDetails": "Los Picaros & University Blvd. "
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5561,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5601 University Boulevard SE",
    "Site": "University Boulevard SE between Rio Bravo Boulevard SEand Isleta Amphitheatre",
    "ShootDate": 1211500800000,
    "OriginalDetails": "University Blvd. between Rio Bravo & Journal Pavillion - ITC on Los Picaros from Bobby Foster to Ira Sprecher (30 mins.). Closure on University Blvd. from Rio Bravo to Journal Pavillion"
   },
   "geometry": {
    "x": -106.62177349734323,
    "y": 34.995465777434681
   }
  },
  {
   "attributes": {
    "OBJECTID": 5562,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1211587200000,
    "OriginalDetails": "Los Picaros Road (entire road) - ITC on Los Picaros from Bobby Foster to Dead End & University Blvd. from Journal Pavillion to Northern snake (5/27 - 5/31)"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5563,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1211587200000,
    "OriginalDetails": "Los Picaros & University Blvd. "
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5564,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1211846400000,
    "OriginalDetails": "Bobby Foster Road - Gas Station"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5565,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1211932800000,
    "OriginalDetails": "Los Picaros & University Blvd. "
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5566,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1211932800000,
    "OriginalDetails": "Bobby Foster Road - Gas Station"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5567,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Dragway Road near Los Picaros Road SE",
    "ShootDate": 1212019200000,
    "OriginalDetails": "Dragway Road"
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5568,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1212019200000,
    "OriginalDetails": "Bobby Foster Road - Gas Station"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5569,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE area",
    "ShootDate": 1212105600000,
    "OriginalDetails": "Los Picaros closed"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5570,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1212105600000,
    "OriginalDetails": "Bobby Foster Road - Gas Station"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5571,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1212192000000,
    "OriginalDetails": "Bobby Foster close, ITC on Los Picaros"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5572,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1212278400000,
    "OriginalDetails": "Bobby Foster Rd. - Gas Station, ITC on Los Picaros"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5573,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1212364800000,
    "OriginalDetails": "Los Picaros Road (entire road) - ITC on Los Picaros from Bobby Foster to Dead End & University Blvd. from Journal Pavillion to Northern snake (5/27 - 5/31)"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5574,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1212364800000,
    "OriginalDetails": "Bobby Foster - Gas Station"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5575,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1212451200000,
    "OriginalDetails": "Bobby Foster - Gas Station"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5576,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE and Los Picaros Road SE",
    "ShootDate": 1212451200000,
    "OriginalDetails": "Bobby Foster & Los Picaros closed"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5577,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1 Forest Service 333 Road",
    "Site": "Area shots",
    "ShootDate": 1212537600000,
    "OriginalDetails": "Forest Road 333"
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5578,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1 Pinon Place",
    "Site": "La Luz Trail area",
    "ShootDate": 1212537600000,
    "OriginalDetails": "La Luz Trail - parking lot closed/trails open"
   },
   "geometry": {
    "x": -106.49407930741563,
    "y": 35.201243489476518
   }
  },
  {
   "attributes": {
    "OBJECTID": 5579,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1212537600000,
    "OriginalDetails": "Bobby Foster - Gas Station"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5580,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1212537600000,
    "OriginalDetails": "Bobby Foster Rd. closed"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5581,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards from Atlantic to Stover",
    "ShootDate": 1212624000000,
    "OriginalDetails": "Old Railyards - ITC on 2nd St. from Atlantic to Stover"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5582,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5510 Broadway Boulevard SE",
    "Site": "Colomex Gas Station at Bobby Foster Road ",
    "ShootDate": 1212624000000,
    "OriginalDetails": "Bobby Foster - Gas Station"
   },
   "geometry": {
    "x": -106.6519460850551,
    "y": 35.000063173544731
   }
  },
  {
   "attributes": {
    "OBJECTID": 5583,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE to Dragway Road",
    "ShootDate": 1212624000000,
    "OriginalDetails": "Bobby Foster Rd. closed, Dragway Rd. closed"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5584,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards from Atlantic to Stover",
    "ShootDate": 1212710400000,
    "OriginalDetails": "Old Railyards - ITC on 2nd St. from Atlantic to Stover"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5585,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1212883200000,
    "OriginalDetails": "Los Picaros Road (entire road) - ITC on Los Picaros from Bobby Foster to Dead End & University Blvd. from Journal Pavillion to Northern snake (5/27 - 5/31)"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5586,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE and University Boulevard SE",
    "ShootDate": 1212883200000,
    "OriginalDetails": "Bobby Foster closed, ITC on University Blvd."
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5587,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards from Atlantic to Stover",
    "ShootDate": 1212969600000,
    "OriginalDetails": "Old Railyards - ITC on 2nd St. from Atlantic to Stover"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5588,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 University Boulevard SE",
    "Site": "University Boulevard SE and Los Picaros Road SE",
    "ShootDate": 1212969600000,
    "OriginalDetails": "University Blvd. & Los Picaros"
   },
   "geometry": {
    "x": -106.62644344683991,
    "y": 35.008291092444637
   }
  },
  {
   "attributes": {
    "OBJECTID": 5589,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 University Boulevard SE",
    "Site": "University Boulevard SE between Bobby Foster Road and Los Picaros Road",
    "ShootDate": 1212969600000,
    "OriginalDetails": "University closed, Los Picaros closed, Bobby Foster - light ITC."
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 5590,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1213056000000,
    "OriginalDetails": "Bobby Foster closed"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5591,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1213142400000,
    "OriginalDetails": "Bobby Foster closed until 4pm"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5592,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE and University Boulevard SE",
    "ShootDate": 1213228800000,
    "OriginalDetails": "Bobby Foster closed, University closed from noon - 8pm"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5593,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1213315200000,
    "OriginalDetails": "Bobby Foster closed"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5594,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE area",
    "ShootDate": 1213488000000,
    "OriginalDetails": "Los Picaros closed"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5595,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1213574400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5596,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1213660800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5597,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "9201 Pan American Freeway NE",
    "Site": "I25 Studios formerly Philips Semiconductor Plant",
    "ShootDate": 1213660800000,
    "OriginalDetails": "Phillips Building"
   },
   "geometry": {
    "x": -106.58054369861443,
    "y": 35.190552050534443
   }
  },
  {
   "attributes": {
    "OBJECTID": 5598,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "100 Pacific Avenue SE",
    "Site": "Commercial Street SE between Pacific Avenue SE and Hazeldine Avenue SE",
    "ShootDate": 1213747200000,
    "OriginalDetails": "Close: Commercial between Pacific & Curve just north of Pacific on Commercial"
   },
   "geometry": {
    "x": -106.648615027777,
    "y": 35.074388830982002
   }
  },
  {
   "attributes": {
    "OBJECTID": 5599,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1213747200000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5600,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards from Atlantic to Stover",
    "ShootDate": 1213747200000,
    "OriginalDetails": "Old Railyards - ITC on 2nd St. from Atlantic to Stover"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5601,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1213833600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5602,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards from Atlantic to Stover",
    "ShootDate": 1213833600000,
    "OriginalDetails": "Old Railyards - ITC on 2nd St. from Atlantic to Stover"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5603,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "100 Pacific Avenue SE",
    "Site": "Commercial Street SE between Pacific Avenue SE and Hazeldine Avenue SE",
    "ShootDate": 1213920000000,
    "OriginalDetails": "Close: Commercial between Pacific & Curve just north of Pacific on Commercial"
   },
   "geometry": {
    "x": -106.648615027777,
    "y": 35.074388830982002
   }
  },
  {
   "attributes": {
    "OBJECTID": 5604,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1213920000000,
    "OriginalDetails": "Railyards/Algodones"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5605,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 University Boulevard SE",
    "Site": "Mesa Del Sol area",
    "ShootDate": 1214265600000,
    "OriginalDetails": "Mesa del Sol area"
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 5606,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 University Boulevard SE",
    "Site": "Mesa Del Sol area",
    "ShootDate": 1214352000000,
    "OriginalDetails": "Mesa del Sol area"
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 5607,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3300 Kirtland Road SE",
    "Site": "Kirtland Air Force Base",
    "ShootDate": 1214784000000,
    "OriginalDetails": "Kirtland Air Force Base"
   },
   "geometry": {
    "x": -106.60691265771656,
    "y": 35.047957280202112
   }
  },
  {
   "attributes": {
    "OBJECTID": 5608,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3300 Kirtland Road SE",
    "Site": "Kirtland Air Force Base",
    "ShootDate": 1214870400000,
    "OriginalDetails": "Kirtland Air Force Base"
   },
   "geometry": {
    "x": -106.60691265771656,
    "y": 35.047957280202112
   }
  },
  {
   "attributes": {
    "OBJECTID": 5609,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "725 Electric Avenue SE",
    "Site": "Delta Person Generating Station",
    "ShootDate": 1215734400000,
    "OriginalDetails": "Person's Power Plant"
   },
   "geometry": {
    "x": -106.64288520997553,
    "y": 35.025962568614077
   }
  },
  {
   "attributes": {
    "OBJECTID": 5610,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "725 Electric Avenue SE",
    "Site": "Delta Person Generating Station",
    "ShootDate": 1215820800000,
    "OriginalDetails": "Person's Power Plant"
   },
   "geometry": {
    "x": -106.64288520997553,
    "y": 35.025962568614077
   }
  },
  {
   "attributes": {
    "OBJECTID": 5611,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "725 Electric Avenue SE",
    "Site": "Delta Person Generating Station",
    "ShootDate": 1216080000000,
    "OriginalDetails": "Pearson's Power Plant - Bernalillo"
   },
   "geometry": {
    "x": -106.64288520997553,
    "y": 35.025962568614077
   }
  },
  {
   "attributes": {
    "OBJECTID": 5612,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "725 Electric Avenue SE",
    "Site": "Delta Person Generating Station",
    "ShootDate": 1216166400000,
    "OriginalDetails": "Pearson's Power Plant - Bernalillo"
   },
   "geometry": {
    "x": -106.64288520997553,
    "y": 35.025962568614077
   }
  },
  {
   "attributes": {
    "OBJECTID": 5613,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3300 Kirtland Road SE",
    "Site": "Kirtland Air Force Base",
    "ShootDate": 1216252800000,
    "OriginalDetails": "Kirtland Air Force Base"
   },
   "geometry": {
    "x": -106.60691265771656,
    "y": 35.047957280202112
   }
  },
  {
   "attributes": {
    "OBJECTID": 5614,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "725 Electric Avenue SE",
    "Site": "Delta Person Generating Station",
    "ShootDate": 1216252800000,
    "OriginalDetails": "Pearson's Power Plant - Bernalillo"
   },
   "geometry": {
    "x": -106.64288520997553,
    "y": 35.025962568614077
   }
  },
  {
   "attributes": {
    "OBJECTID": 5615,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1216425600000,
    "OriginalDetails": "Water Tank World - set at ABQ Studios"
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 5616,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5034 Juan Tabo Boulevard NE",
    "Site": "John B Robert Dam",
    "ShootDate": 1216771200000,
    "OriginalDetails": "John Robert Dam"
   },
   "geometry": {
    "x": -106.51611059396325,
    "y": 35.138733252710757
   }
  },
  {
   "attributes": {
    "OBJECTID": 5617,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1217203200000,
    "OriginalDetails": "Los Picaros Rd. - ITC on Los Picaros from Bobby Foster to dead end. University Blvd. from Journal Pavilion to Northern Snake. Closure on Los Picaros from Bobby Foster to dead end."
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5618,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1217462400000,
    "OriginalDetails": "Closed portion of Bobby Foster Rd. along Journal Pavilion - ITC on University from Bobby Foster to north edge of Journal Pavilion. Closure on Bobby Foster from University to Journal Pavilion"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5619,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218412800000,
    "OriginalDetails": "NOT FILMING - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5620,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218412800000,
    "OriginalDetails": "NOT FILMING - ITC ONLY - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5621,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218499200000,
    "OriginalDetails": "NOT FILMING - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5622,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218499200000,
    "OriginalDetails": "NOT FILMING - ITC ONLY - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5623,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218585600000,
    "OriginalDetails": "NOT FILMING - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5624,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218585600000,
    "OriginalDetails": "NOT FILMING - ITC ONLY - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5625,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218672000000,
    "OriginalDetails": "Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5626,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218758400000,
    "OriginalDetails": "NOT FILMING - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5627,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218758400000,
    "OriginalDetails": "NOT FILMING - ITC ONLY - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5628,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218844800000,
    "OriginalDetails": "NOT FILMING - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5629,
    "Title": "Terminator Salvation",
    "Type": "Movie aka Project Angel",
    "IMDbLink": "http://www.imdb.com/title/tt0438488/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Ira Sprecker Road SE between Los Picaros Road SE and Kirtland Road SE",
    "ShootDate": 1218844800000,
    "OriginalDetails": "NOT FILMING - ITC ONLY - Ira Sprecher Rd. - ITC on Ira Sprecher from Los Picaros to Kirtland Gate (during prep/strike only). Closure on Ira Sprecher from Los Picaros to Kirtland gate (8/14 only)."
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5630,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "4700 Coal SE",
    "Site": "Highland High School",
    "ShootDate": 1169856000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 5631,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "4700 Coal SE",
    "Site": "Highland High School",
    "ShootDate": 1169942400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 5632,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "4700 Coal SE",
    "Site": "Highland High School",
    "ShootDate": 1170028800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59337731283436,
    "y": 35.075666161716264
   }
  },
  {
   "attributes": {
    "OBJECTID": 5633,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "4500 Central SE",
    "Site": "Loyola's Restaurant",
    "ShootDate": 1170201600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5943005788255,
    "y": 35.078615257675352
   }
  },
  {
   "attributes": {
    "OBJECTID": 5634,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "6100 Paradise Blvd. NE",
    "Site": "Monoroe Middle School",
    "ShootDate": 1170460800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.71569117991163,
    "y": 35.193620855645655
   }
  },
  {
   "attributes": {
    "OBJECTID": 5635,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "6100 Paradise Blvd. NE",
    "Site": "Monoroe Middle School",
    "ShootDate": 1170547200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.71569117991163,
    "y": 35.193620855645655
   }
  },
  {
   "attributes": {
    "OBJECTID": 5636,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1171238400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5637,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse",
    "ShootDate": 1171324800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5638,
    "Title": "Terminator:  Sarah Connor Chronicles",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt0851851/?ref_=ttep_ep_tt",
    "Address": "4901 Central NE",
    "Site": "Bank of Albuquerque",
    "ShootDate": 1171670400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59028158541462,
    "y": 35.078199427594924
   }
  },
  {
   "attributes": {
    "OBJECTID": 5639,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "416 Central Avenue SW",
    "Site": "Kress Building Central Avenue SW between 4th and 5th Streets SW",
    "ShootDate": 1303689600000,
    "OriginalDetails": "416 Central SW - Close 5th btwn Gold & Central, ITC Central btwn 4th & 5th"
   },
   "geometry": {
    "x": -106.65234047331261,
    "y": 35.084645089720937
   }
  },
  {
   "attributes": {
    "OBJECTID": 5640,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "416 Central Avenue SW",
    "Site": "Kress Building Central Avenue SW between 4th and 5th Streets SW",
    "ShootDate": 1303776000000,
    "OriginalDetails": "416 Central SW - Close 5th btwn Gold & Central NB/SB"
   },
   "geometry": {
    "x": -106.65234047331261,
    "y": 35.084645089720937
   }
  },
  {
   "attributes": {
    "OBJECTID": 5641,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1304640000000,
    "OriginalDetails": "Railyards - 1100 2nd SW - ITC 1st btwn Santa Fe and Hazeldine"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5642,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1306886400000,
    "OriginalDetails": "Albuquerque Convention Center - ITC Tijeras btwn 2nd & 3rd/close sidewalk & left lane of Marquette btwn 2nd & 3rd.  Close sidewalk & left lane of Tijeras"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5643,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "10800 Dennis Chavez Boulevard SW",
    "Site": "Dennis Chavez Boulevard SW between Atrisco Vista Boulevard and 98th Street SW",
    "ShootDate": 1306972800000,
    "OriginalDetails": "10800 Dennis Chavez - ITC on Dennis Chavez btwn Paseo del Volcan & 98th/ ITC 118th btwn Paakweree & Cenote"
   },
   "geometry": {
    "x": -106.74067515962788,
    "y": 35.024568863318137
   }
  },
  {
   "attributes": {
    "OBJECTID": 5644,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1307059200000,
    "OriginalDetails": "Los Picaros Rd.  ITC University btwn Rio Bravo & Crick/ Close Los Picaros btwn Bobby Foster and Ira Sprcker"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5645,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1307318400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5646,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1307404800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5647,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1307491200000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5648,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1307577600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5649,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1307664000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5650,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1307923200000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5651,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308009600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5652,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308096000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5653,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308182400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5654,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308268800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5655,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308528000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5656,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308614400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5657,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308700800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5658,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308787200000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5659,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1308873600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5660,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1309132800000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5661,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1309219200000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5662,
    "Title": "The Avengers",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0848228/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1309305600000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5663,
    "Title": "The Book of Eli",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1037705/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1234828800000,
    "OriginalDetails": "Los Picaros Rd. SW @University Overpass/ ITC on Los Picaros from Bobby Foster to Ira Sprecker"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5664,
    "Title": "The Book of Eli",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1037705/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Los Picaros Road SE between Ira Sprecker Road SE and Bobby Foster Road",
    "ShootDate": 1235347200000,
    "OriginalDetails": "Full Closure on Los Picaros fr Bobby Foster to Ira Sprecker "
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5665,
    "Title": "The Book of Eli",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1037705/",
    "Address": "5600 University Boulevard SE",
    "Site": "University Boulevard SE and Bobby Foster Road",
    "ShootDate": 1237334400000,
    "OriginalDetails": "University Blvd @ Bobby Foster"
   },
   "geometry": {
    "x": -106.62172715505436,
    "y": 34.997153803092878
   }
  },
  {
   "attributes": {
    "OBJECTID": 5666,
    "Title": "The Book of Eli",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1037705/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1237852800000,
    "OriginalDetails": "Bobby Foster Road - County"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5667,
    "Title": "The Dry Land",
    "Type": "Movie aka American Tragic",
    "IMDbLink": "http://www.imdb.com/title/tt1322264/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1241568000000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5668,
    "Title": "The Eye  ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0406759/?ref_=fn_al_tt_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1171929600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5669,
    "Title": "The Eye  ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0406759/?ref_=fn_al_tt_1",
    "Address": "111 5th SW",
    "Site": "PES Payroll",
    "ShootDate": 1172188800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65283818669238,
    "y": 35.08459297809901
   }
  },
  {
   "attributes": {
    "OBJECTID": 5670,
    "Title": "The Eye  ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0406759/?ref_=fn_al_tt_1",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Albuquerque National Dragway",
    "ShootDate": 1172448000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5671,
    "Title": "The Eye  ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0406759/?ref_=fn_al_tt_1",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Albuquerque National Dragway",
    "ShootDate": 1172534400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5672,
    "Title": "The Eye  ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0406759/?ref_=fn_al_tt_1",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Albuquerque National Dragway",
    "ShootDate": 1172707200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5673,
    "Title": "The Eye  ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0406759/?ref_=fn_al_tt_1",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Albuquerque National Dragway",
    "ShootDate": 1172793600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5674,
    "Title": "The Eyes of an Enemy",
    "Type": "Movie",
    "IMDbLink": "na",
    "Address": "13317 Central Avenue NE",
    "Site": "Travelodge",
    "ShootDate": 1236988800000,
    "OriginalDetails": "Travelodge 13317 Central"
   },
   "geometry": {
    "x": -106.4983013128942,
    "y": 35.068264621831304
   }
  },
  {
   "attributes": {
    "OBJECTID": 5675,
    "Title": "The Eyes of an Enemy",
    "Type": "Movie",
    "IMDbLink": "na",
    "Address": "525 Buena Vista Drive SE",
    "Site": "CNM Main Campus",
    "ShootDate": 1237075200000,
    "OriginalDetails": "CNM"
   },
   "geometry": {
    "x": -106.62408151634483,
    "y": 35.076493751427392
   }
  },
  {
   "attributes": {
    "OBJECTID": 5676,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1334102400000,
    "OriginalDetails": "Bobby Foster Road - Bernalillo County"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5677,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "5700 University Boulevard SE",
    "Site": "Aperture Center at Mesa del Sol",
    "ShootDate": 1334102400000,
    "OriginalDetails": "Aperture Building - Mesa del Sol - close west Universtity between University & Stryker"
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 5678,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "5601 University Boulevard SE",
    "Site": "University Boulevard SE between Rio Bravo Boulevard SW and Isleta Amphitheatre",
    "ShootDate": 1334534400000,
    "OriginalDetails": "University - close University btwn Hard Rock Pavilion Parking Lot to Rio Bravo/ ITC - Los Picaros btwn Overpass & Ira Sprecher"
   },
   "geometry": {
    "x": -106.62177349734323,
    "y": 34.995465777434681
   }
  },
  {
   "attributes": {
    "OBJECTID": 5679,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1334793600000,
    "OriginalDetails": "Los Picaros - ITC University btwn Tijeras Arroyo & Frick/ close Los Picaros btwn Bobby Foster & Ira Sprecher"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5680,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "11000 Broadway Boulevard SE",
    "Site": "Isleta Resort and Casino formerly called Hard Rock Casino",
    "ShootDate": 1334880000000,
    "OriginalDetails": "Hard Rock Parking Lot - ITC University btwn the two parking lot entrances"
   },
   "geometry": {
    "x": -106.6608103090375,
    "y": 34.960087728327032
   }
  },
  {
   "attributes": {
    "OBJECTID": 5681,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "5000 Los Picaros Road SE",
    "Site": "Los Picaros Road SE under University Boulevard SE",
    "ShootDate": 1334880000000,
    "OriginalDetails": "Los Picaros under University - ITC University btw Tijeras Arroyo & Frick, closure on Los Picaros btw Bobby Foster & Ira Sprecher"
   },
   "geometry": {
    "x": -106.598795129568,
    "y": 35.017766464429428
   }
  },
  {
   "attributes": {
    "OBJECTID": 5682,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "5650 University Boulevard SE",
    "Site": "Albuquerque Studios",
    "ShootDate": 1334880000000,
    "OriginalDetails": "Albuquerque Studios"
   },
   "geometry": {
    "x": -106.61551627414687,
    "y": 34.988630579122244
   }
  },
  {
   "attributes": {
    "OBJECTID": 5683,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "123 Mountain Road NW",
    "Site": "Reedy Tire",
    "ShootDate": 1335744000000,
    "OriginalDetails": "Reedy Tire, 123 Mountain Rd"
   },
   "geometry": {
    "x": -106.64604751423589,
    "y": 35.094708079876057
   }
  },
  {
   "attributes": {
    "OBJECTID": 5684,
    "Title": "The Host",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1517260/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1335744000000,
    "OriginalDetails": "Bobby Foster Road - Bernalillo County & Reedy Tire 123 Mountain Rd"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5685,
    "Title": "The Incredible Voyage of Captain Hook",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1827549/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE driving shot",
    "ShootDate": 1253836800000,
    "OriginalDetails": "Bobby Foster Road - County - driving shot"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5686,
    "Title": "The Incredible Voyage of Captain Hook",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1827549/",
    "Address": "301 Menaul Boulevard NE",
    "Site": "Menaul School",
    "ShootDate": 1253923200000,
    "OriginalDetails": "Menaul School - no closure/itc"
   },
   "geometry": {
    "x": -106.63882066389489,
    "y": 35.109996087705987
   }
  },
  {
   "attributes": {
    "OBJECTID": 5687,
    "Title": "The Incredible Voyage of Captain Hook",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1827549/",
    "Address": "301 Menaul Boulevard NE",
    "Site": "Menaul School",
    "ShootDate": 1254009600000,
    "OriginalDetails": "Menaul School - no closure/itc"
   },
   "geometry": {
    "x": -106.63882066389489,
    "y": 35.109996087705987
   }
  },
  {
   "attributes": {
    "OBJECTID": 5688,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "111 2nd Street NW",
    "Site": "Alleyway between 2nd and 3rd Streets NW and Copper and Central Avenues NW",
    "ShootDate": 1326326400000,
    "OriginalDetails": "Alley btwn 2nd & 3rd/Central& Tijeras - Close alley - ITC 2nd & 3rd btwn Central & Tijeras - Traffic shirt 3rd btwn Tijeras & Gold/Traffic shift Copper btwn 4th& 5th"
   },
   "geometry": {
    "x": -106.64916381846554,
    "y": 35.084668089363774
   }
  },
  {
   "attributes": {
    "OBJECTID": 5689,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "401 2nd Street NW",
    "Site": "Albuquerque Convention Center",
    "ShootDate": 1326412800000,
    "OriginalDetails": "Convention Center  - Interior no closures/ITC"
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5690,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "500 Marquette Avenue NW",
    "Site": "Marquette Avenue NW and 5th Street NW",
    "ShootDate": 1326412800000,
    "OriginalDetails": "5th & Marquette - ITC 5th btwn Roma & Tijeras/ ITC Marquette btwn 6th & 4th"
   },
   "geometry": {
    "x": -106.65217120017036,
    "y": 35.088311647665762
   }
  },
  {
   "attributes": {
    "OBJECTID": 5691,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "500 Marquette Avenue NW",
    "Site": "Marquette Avenue NW and 5th Street NW",
    "ShootDate": 1326499200000,
    "OriginalDetails": "5th & Marquette - ITC 5th btwn Roma & Tijeras/ ITC Marquette btwn 6th & 4th"
   },
   "geometry": {
    "x": -106.65217120017036,
    "y": 35.088311647665762
   }
  },
  {
   "attributes": {
    "OBJECTID": 5692,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "111 2nd Street NW",
    "Site": "Alleyway between 2nd and 3rd Streets NW and Copper and Central Avenues NW",
    "ShootDate": 1326672000000,
    "OriginalDetails": "Alley btwn 2nd & 3rd/Central& Tijeras - Close alley - ITC 2nd & 3rd btwn Central & Tijeras - Traffic shirt 3rd btwn Tijeras & Gold/Traffic shift Copper btwn 4th& 5th"
   },
   "geometry": {
    "x": -106.64916381846554,
    "y": 35.084668089363774
   }
  },
  {
   "attributes": {
    "OBJECTID": 5693,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "400 Marquette Avenue NW",
    "Site": "Old City Hall",
    "ShootDate": 1326758400000,
    "OriginalDetails": "Old City Hall - Magnet picks up car & simulates placement on City Hall -close Marquette between 2nd & 6th close 3rd, 4th, 5th btwn Roma & Tijeras"
   },
   "geometry": {
    "x": -106.65096443485871,
    "y": 35.088189467814644
   }
  },
  {
   "attributes": {
    "OBJECTID": 5694,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "400 Marquette Avenue NW",
    "Site": "Old City Hall",
    "ShootDate": 1326844800000,
    "OriginalDetails": "Old City Hall - -close Marquette between 2nd & 6th close 3rd, 4th, 5th btwn Roma & Tijeras"
   },
   "geometry": {
    "x": -106.65096443485871,
    "y": 35.088189467814644
   }
  },
  {
   "attributes": {
    "OBJECTID": 5695,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "400 Marquette Avenue NW",
    "Site": "Old City Hall interior ",
    "ShootDate": 1326931200000,
    "OriginalDetails": "Interior Old City Hall - -close Marquette between 2nd & 6th close 3rd, 4th, 5th btwn Roma & Tijeras - closure may be reduced"
   },
   "geometry": {
    "x": -106.65096443485871,
    "y": 35.088189467814644
   }
  },
  {
   "attributes": {
    "OBJECTID": 5696,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "400 Marquette Avenue NW",
    "Site": "Old City Hall",
    "ShootDate": 1327017600000,
    "OriginalDetails": "Old City Hall - Zip line stunt - close Marquette between 2nd & 6th close 3rd, 4th, 5th btwn Roma & Tijeras"
   },
   "geometry": {
    "x": -106.65096443485871,
    "y": 35.088189467814644
   }
  },
  {
   "attributes": {
    "OBJECTID": 5697,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "12504 Central Avenue SW",
    "Site": "Central Avenue SW Street Scene",
    "ShootDate": 1327276800000,
    "OriginalDetails": "2nd Unit - Bern County - 12504 Central SW - Close Central btwn Atrisco Vista and 114th"
   },
   "geometry": {
    "x": -106.78213451114945,
    "y": 35.063838985295732
   }
  },
  {
   "attributes": {
    "OBJECTID": 5698,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "12504 Central Avenue SW",
    "Site": "Central Avenue SW Street Scene",
    "ShootDate": 1327363200000,
    "OriginalDetails": "2nd Unit - Bern County - 12504 Central SW - Close Central btwn Atrisco Vista and 114th"
   },
   "geometry": {
    "x": -106.78213451114945,
    "y": 35.063838985295732
   }
  },
  {
   "attributes": {
    "OBJECTID": 5699,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1327536000000,
    "OriginalDetails": "2nd unit - Bobby Foster Road - Bernalillo County"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5700,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "7777 Jefferson Street NE",
    "Site": "Albuquerque Publishing Company",
    "ShootDate": 1327536000000,
    "OriginalDetails": "Albuquerque Publishing Company  - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.58882101459417,
    "y": 35.169801614636455
   }
  },
  {
   "attributes": {
    "OBJECTID": 5701,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1327622400000,
    "OriginalDetails": "2nd unit - Bobby Foster Road - Bernalillo County"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5702,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "7777 Jefferson Street NE",
    "Site": "Albuquerque Publishing Company",
    "ShootDate": 1327622400000,
    "OriginalDetails": "Albuquerque Publishing Company  - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.58882101459417,
    "y": 35.169801614636455
   }
  },
  {
   "attributes": {
    "OBJECTID": 5703,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "7777 Jefferson Street NE",
    "Site": "Albuquerque Publishing Company",
    "ShootDate": 1327881600000,
    "OriginalDetails": "Albuquerque Publishing Company  - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.58882101459417,
    "y": 35.169801614636455
   }
  },
  {
   "attributes": {
    "OBJECTID": 5704,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "7777 Jefferson Street NE",
    "Site": "Albuquerque Publishing Company",
    "ShootDate": 1327968000000,
    "OriginalDetails": "Albuquerque Publishing Company  - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.58882101459417,
    "y": 35.169801614636455
   }
  },
  {
   "attributes": {
    "OBJECTID": 5705,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "7777 Jefferson Street NE",
    "Site": "Albuquerque Publishing Company",
    "ShootDate": 1328054400000,
    "OriginalDetails": "Albuquerque Publishing Company  - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.58882101459417,
    "y": 35.169801614636455
   }
  },
  {
   "attributes": {
    "OBJECTID": 5706,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "2990 Hill Street SW",
    "Site": "Intersection of 2nd Street SW and Hill Street SW",
    "ShootDate": 1339459200000,
    "OriginalDetails": "Hill St SW by 2nd St SW - ITC 2nd St from Rossmoor Rs Sw to Woodward Rd"
   },
   "geometry": {
    "x": -106.65447036627484,
    "y": 35.046604211519195
   }
  },
  {
   "attributes": {
    "OBJECTID": 5707,
    "Title": "The Last Stand",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1549920/",
    "Address": "2900 2nd Street SW",
    "Site": "2nd Street SW between Woodward Road SW and Rio Bravo Boulevard SW ",
    "ShootDate": 1339545600000,
    "OriginalDetails": "2nd st, North of Rio Bravo to Woodward Rd - no ITC/no Closures"
   },
   "geometry": {
    "x": -106.65673920795027,
    "y": 35.049429156638176
   }
  },
  {
   "attributes": {
    "OBJECTID": 5708,
    "Title": "The Lying Game",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt1941967/",
    "Address": "8001 Daytona Road NW",
    "Site": "Daytona Transit Facility",
    "ShootDate": 1291334400000,
    "OriginalDetails": "Daytona Transit Facility - no ITC/no closures"
   },
   "geometry": {
    "x": -106.73243342232327,
    "y": 35.088359553831353
   }
  },
  {
   "attributes": {
    "OBJECTID": 5709,
    "Title": "The Lying Game",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt1941967/",
    "Address": "201 Highland Park Circle SE",
    "Site": "Albuquerque Press Club",
    "ShootDate": 1291939200000,
    "OriginalDetails": "Press Club - 201 Highland Park Circle Se- ITC Gold btwn High and Locust/ITC Elm btwn Central & Gold"
   },
   "geometry": {
    "x": -106.63877751691349,
    "y": 35.081840585758819
   }
  },
  {
   "attributes": {
    "OBJECTID": 5710,
    "Title": "The Lying Game",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt1941967/",
    "Address": "1000 Park Avenue SW",
    "Site": "Park Avenue SW between 10th Street SW and Central Avenue SW",
    "ShootDate": 1292025600000,
    "OriginalDetails": "Park btwn Central & 10th - ITC on Park btwn Central & 10th"
   },
   "geometry": {
    "x": -106.65876854529624,
    "y": 35.085393617882154
   }
  },
  {
   "attributes": {
    "OBJECTID": 5711,
    "Title": "The Man App",
    "Type": "Movie by Holly Adams Production",
    "IMDbLink": "http://www.theman-app.com/",
    "Address": "7100 Tramway Boulevard NE",
    "Site": "Elena Gallegos Park",
    "ShootDate": 1332547200000,
    "OriginalDetails": "Elen Gallegos Open Space area"
   },
   "geometry": {
    "x": -106.49718282592383,
    "y": 35.158347321159404
   }
  },
  {
   "attributes": {
    "OBJECTID": 5712,
    "Title": "The Man App",
    "Type": "Movie by Holly Adams Production",
    "IMDbLink": "http://www.theman-app.com/",
    "Address": "7100 Tramway Boulevard NE",
    "Site": "Elena Gallegos Park",
    "ShootDate": 1332547200000,
    "OriginalDetails": "Elen Gallegos Open Space area"
   },
   "geometry": {
    "x": -106.49718282592383,
    "y": 35.158347321159404
   }
  },
  {
   "attributes": {
    "OBJECTID": 5713,
    "Title": "The Man App",
    "Type": "Movie by Holly Adams Production",
    "IMDbLink": "http://www.theman-app.com/",
    "Address": "2000 Carlisle Boulevard NE",
    "Site": "I Scream Ice Cream",
    "ShootDate": 1332633600000,
    "OriginalDetails": "I scream Ice Cream - no ITC/no closures"
   },
   "geometry": {
    "x": -106.60419805223422,
    "y": 35.101084611439681
   }
  },
  {
   "attributes": {
    "OBJECTID": 5714,
    "Title": "The Man App",
    "Type": "Movie by Holly Adams Production",
    "IMDbLink": "http://www.theman-app.com/",
    "Address": "3503 Central Avenue NE",
    "Site": "Etiquette Boutique",
    "ShootDate": 1333756800000,
    "OriginalDetails": "Etiquette Boutique - 3503 Central NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.6056346973254,
    "y": 35.079939541636243
   }
  },
  {
   "attributes": {
    "OBJECTID": 5715,
    "Title": "The Man App",
    "Type": "Movie by Holly Adams Production",
    "IMDbLink": "http://www.theman-app.com/",
    "Address": "3503 Central Avenue NE",
    "Site": "Etiquette Boutique",
    "ShootDate": 1333843200000,
    "OriginalDetails": "Etiquette Boutique - 3503 Central NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.6056346973254,
    "y": 35.079939541636243
   }
  },
  {
   "attributes": {
    "OBJECTID": 5716,
    "Title": "The Man App",
    "Type": "Movie by Holly Adams Production",
    "IMDbLink": "http://www.theman-app.com/",
    "Address": "1708 Central Avenue SE",
    "Site": "Bird Song Used Books moved to 526 Washington Street NE",
    "ShootDate": 1334966400000,
    "OriginalDetails": "Birdsong books - 1708 Central SE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.62739709295562,
    "y": 35.081439176867363
   }
  },
  {
   "attributes": {
    "OBJECTID": 5717,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "1114 7th Street NW",
    "Site": "Harwood Art School",
    "ShootDate": 1226620800000,
    "OriginalDetails": "1114 7th Street Harwood Art School- Street Closure on 7th fr. Marble to Mountain/ Closure on Granite fr. 8th to 6th "
   },
   "geometry": {
    "x": -106.65392171033358,
    "y": 35.094986448238949
   }
  },
  {
   "attributes": {
    "OBJECTID": 5718,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "1114 7th Street NW",
    "Site": "Harwood Art School",
    "ShootDate": 1227225600000,
    "OriginalDetails": "1114 7th St. Harwood Art School- ITC on Mountain fr 8th to 6th EB WB- ITC on Granite fr. 8th to 6th/ Street Closure on 7th fr. Mountain to Granite."
   },
   "geometry": {
    "x": -106.65392171033358,
    "y": 35.094986448238949
   }
  },
  {
   "attributes": {
    "OBJECTID": 5719,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "501 Main Street NW",
    "Site": "Albuquerque Boys and Girls Club moved to a new address",
    "ShootDate": 1227225600000,
    "OriginalDetails": "501 Main St. Boy's & Girls Club-No ITC- Street Closure on Main St. fr Rio Grande to Mountain"
   },
   "geometry": {
    "x": -106.67115290934763,
    "y": 35.098114662312952
   }
  },
  {
   "attributes": {
    "OBJECTID": 5720,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "16001 Shooting Range Access Road NW",
    "Site": "Shooting Range Park",
    "ShootDate": 1227484800000,
    "OriginalDetails": "Shooting  Range"
   },
   "geometry": {
    "x": -106.85719034585061,
    "y": 35.134170571634961
   }
  },
  {
   "attributes": {
    "OBJECTID": 5721,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "16001 Shooting Range Access Road NW",
    "Site": "Shooting Range Park",
    "ShootDate": 1227571200000,
    "OriginalDetails": "Shooting  Range"
   },
   "geometry": {
    "x": -106.85719034585061,
    "y": 35.134170571634961
   }
  },
  {
   "attributes": {
    "OBJECTID": 5722,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "16001 Shooting Range Access Road NW",
    "Site": "Shooting Range Park",
    "ShootDate": 1227657600000,
    "OriginalDetails": "Shooting  Range"
   },
   "geometry": {
    "x": -106.85719034585061,
    "y": 35.134170571634961
   }
  },
  {
   "attributes": {
    "OBJECTID": 5723,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "101 Atrisco Vista Boulevard NW",
    "Site": "Atrisco Vista Boulevard near Shooting Range Park",
    "ShootDate": 1228089600000,
    "OriginalDetails": "Paseo Del Volcan Rd near Shooting Range"
   },
   "geometry": {
    "x": -106.78657209163494,
    "y": 35.062784023447243
   }
  },
  {
   "attributes": {
    "OBJECTID": 5724,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "224 Gold Avenue SW",
    "Site": "Old Sunshine Bank",
    "ShootDate": 1228262400000,
    "OriginalDetails": "224 Gold Ave. Old Sunshine Bank-ITC on Gold fr. 4th to 2nd EB, WB, ITC on 3rd fr. Central to Silver NB, SB/ No Closures"
   },
   "geometry": {
    "x": -106.6503366948331,
    "y": 35.083350759081519
   }
  },
  {
   "attributes": {
    "OBJECTID": 5725,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "615 Gold Avenue SW",
    "Site": "Valliant Printing ",
    "ShootDate": 1228262400000,
    "OriginalDetails": "615 Gold Ave.Valliant Printing-No ITC/ Street Closure on Gold fr 7th to 6th"
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 5726,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "525 Buena Vista Drive SE",
    "Site": "CNM Main Campus",
    "ShootDate": 1228348800000,
    "OriginalDetails": "CNM"
   },
   "geometry": {
    "x": -106.62408151634483,
    "y": 35.076493751427392
   }
  },
  {
   "attributes": {
    "OBJECTID": 5727,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "1002 Central Avenue SW",
    "Site": "Washington Luxury Apartments",
    "ShootDate": 1228435200000,
    "OriginalDetails": "1002 Central Ave SW ( Washington Lux Apt.) No ITC/ Street Closure on 10th fr.Park to Central"
   },
   "geometry": {
    "x": -106.65866616520161,
    "y": 35.086546005810845
   }
  },
  {
   "attributes": {
    "OBJECTID": 5728,
    "Title": "The Men Who Stare at Goats",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1234548/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1228953600000,
    "OriginalDetails": "Amy Biehl High School"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5729,
    "Title": "The New Media Firm",
    "Type": "Commercial",
    "IMDbLink": "na",
    "Address": "1200 Monte Verde Drive NE",
    "Site": "Embudo Hills Park",
    "ShootDate": 1334361600000,
    "OriginalDetails": "Embudo Hills Park"
   },
   "geometry": {
    "x": -106.48926036154931,
    "y": 35.091081385358819
   }
  },
  {
   "attributes": {
    "OBJECTID": 5730,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1352678400000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5731,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1352764800000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5732,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1352851200000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5733,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1352937600000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5734,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5700 University Boulevard SE",
    "Site": "Aperture Center at Mesa del Sol",
    "ShootDate": 1352937600000,
    "OriginalDetails": "Aperture Center"
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 5735,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1353024000000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5736,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE",
    "ShootDate": 1353024000000,
    "OriginalDetails": "Bobby Foster Road - Bernalillo County"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5737,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1353283200000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5738,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1353369600000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5739,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1353456000000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5740,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1353888000000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5741,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1353974400000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5742,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1354060800000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5743,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1354147200000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5744,
    "Title": "The Night Shift",
    "Type": "TV Series Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1354233600000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5745,
    "Title": "The Night Shift",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "1900 Edith Boulevard NE",
    "Site": "Mount Calvary Cemetary",
    "ShootDate": 1377043200000,
    "OriginalDetails": "Calvary Cemetary - 1900 Edith NE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.63753249774378,
    "y": 35.102926815900204
   }
  },
  {
   "attributes": {
    "OBJECTID": 5746,
    "Title": "The Night Shift",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1377043200000,
    "OriginalDetails": "Gibson Medical Center - ITC Gibson btwn Madeira & Valencia & on Palomas btwn Eastern & Gibson"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5747,
    "Title": "The Night Shift",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1377734400000,
    "OriginalDetails": "Gibson Medical Center - ITC Gibson btwn Madeira & Valencia & on Palomas btwn Eastern & Gibson"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5748,
    "Title": "The Night Shift",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1377820800000,
    "OriginalDetails": "Gibson Medical Center - No ITC/No closures"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5749,
    "Title": "The Night Shift",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1378771200000,
    "OriginalDetails": "Gibson Medical Center - No ITC/No closures"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5750,
    "Title": "The Night Shift",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "601 Eubank Boulevard SE",
    "Site": "National Museum of Nuclear Science & History",
    "ShootDate": 1378771200000,
    "OriginalDetails": "Atomic Museum - 601 Eubank SE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.53251368821913,
    "y": 35.067023015923688
   }
  },
  {
   "attributes": {
    "OBJECTID": 5751,
    "Title": "The Odds",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1587700/",
    "Address": "1901 Roma Avenue NE",
    "Site": "UNM Duck Pond",
    "ShootDate": 1269129600000,
    "OriginalDetails": "UNM Duck Pond"
   },
   "geometry": {
    "x": -106.62202031665407,
    "y": 35.085867852679741
   }
  },
  {
   "attributes": {
    "OBJECTID": 5752,
    "Title": "The Odds",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1587700/",
    "Address": "1114 7th Street NW",
    "Site": "Harwood Art School",
    "ShootDate": 1269216000000,
    "OriginalDetails": "1114 7th st- Harwood art school- ITC on 7th st from Mountain to Granite"
   },
   "geometry": {
    "x": -106.65392171033358,
    "y": 35.094986448238949
   }
  },
  {
   "attributes": {
    "OBJECTID": 5753,
    "Title": "The Odds",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1587700/",
    "Address": "5000 Central Avenue SE",
    "Site": "Desert Sands Motel",
    "ShootDate": 1269388800000,
    "OriginalDetails": "5000 Central Ave- Desert Sand Motel- ITC on Central from Jackson to Truman eb, wb/ Street closure on Jackson from Central to Silver nb/ Street closure on Silver from Jackson to Manzano wb."
   },
   "geometry": {
    "x": -106.5888186124991,
    "y": 35.078025538023084
   }
  },
  {
   "attributes": {
    "OBJECTID": 5754,
    "Title": "The Odds",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1587700/",
    "Address": "320 Gold Avenue SW",
    "Site": "New Mexico Bank and Trust",
    "ShootDate": 1269734400000,
    "OriginalDetails": "320 Gold St Sw- Street Closure on 4th st from Gold to Silver nb,sb from 12 pm on 3/27 to 2am on 3/30"
   },
   "geometry": {
    "x": -106.6516571913513,
    "y": 35.083521838758791
   }
  },
  {
   "attributes": {
    "OBJECTID": 5755,
    "Title": "The Odds",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1587700/",
    "Address": "320 Gold Avenue SW",
    "Site": "New Mexico Bank and Trust",
    "ShootDate": 1269820800000,
    "OriginalDetails": "320 Gold St Sw- Street Closure on 4th st from Gold to Silver nb,sb from 12 pm on 3/27 to 2am on 3/30"
   },
   "geometry": {
    "x": -106.6516571913513,
    "y": 35.083521838758791
   }
  },
  {
   "attributes": {
    "OBJECTID": 5756,
    "Title": "The Odds    ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1587700/",
    "Address": "400 Marquette Avenue NW",
    "Site": "Old City Hall",
    "ShootDate": 1269043200000,
    "OriginalDetails": "Old City Hall - ITC Marquette btwn 3rd & 5th & on 4th btwn Marquette & Roma"
   },
   "geometry": {
    "x": -106.65096443485871,
    "y": 35.088189467814644
   }
  },
  {
   "attributes": {
    "OBJECTID": 5757,
    "Title": "The PayOff",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1644700/",
    "Address": "3599 Central Avenue NE",
    "Site": "Central Avenue NE and Carlisle Boulevard NE",
    "ShootDate": 1254528000000,
    "OriginalDetails": "NW Corner of Central & Carlisle Parking Spot & Sidewalk- No ITC, No  Street Closures"
   },
   "geometry": {
    "x": -106.60447920335858,
    "y": 35.079779677073653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5758,
    "Title": "The PayOff",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1644700/",
    "Address": "120 Woodward Road SW",
    "Site": "Reynolds Auto Service",
    "ShootDate": 1254614400000,
    "OriginalDetails": "120 Woodward SW- Reynolds Auto Service-Street Closure on Woodward fr Railroad tracks to 2nd and closure on 2nd st north to 2nd st south"
   },
   "geometry": {
    "x": -106.65608710291922,
    "y": 35.049444759138083
   }
  },
  {
   "attributes": {
    "OBJECTID": 5759,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1245715200000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5760,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1245801600000,
    "OriginalDetails": "123 4th St (Amy Biehl School) ITC on 4th st Gold to Central nb &sb / ITC on Gold fr. 5th to 4th eb & wb"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5761,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1245801600000,
    "OriginalDetails": "500 Central (Lindy's) ITC on Central from 5th to 6th/ ITC on 5th from Central to Gold/ Street Closure on Turning Lane from Gold to Central"
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 5762,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1246838400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5763,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1246838400000,
    "OriginalDetails": "Gibson Medical Center"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5764,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "514 Central Avenue SW ",
    "Site": "Levy Gallery",
    "ShootDate": 1246924800000,
    "OriginalDetails": "514 Central Ave (Richard Levy Gallery) ITC on Central fr 5th st to 6th St./ Turning Lane closure on 6th from Gold to Central"
   },
   "geometry": {
    "x": -106.65343120683227,
    "y": 35.084778935671963
   }
  },
  {
   "attributes": {
    "OBJECTID": 5765,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1247011200000,
    "OriginalDetails": "123 4th St (Amy Biehl School) ITC on 4th st Gold to Central nb &sb / ITC on Gold fr. 4th to 5th eb & wb"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5766,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "320 Central Avenue SW",
    "Site": "Rosenwald Building",
    "ShootDate": 1247011200000,
    "OriginalDetails": "320 Central Ave SW- ITC on 4th St from Central to Gold nb & sb"
   },
   "geometry": {
    "x": -106.6512043640913,
    "y": 35.084493620356852
   }
  },
  {
   "attributes": {
    "OBJECTID": 5767,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "500 Central Avenue SW",
    "Site": "Lindys Diner",
    "ShootDate": 1247097600000,
    "OriginalDetails": "100 Block of 5th St- Lindy's- ITCon Central from 4th to 6th eb, wb/ Street Closer on 5th from Central to Gold nb & sb."
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 5768,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center",
    "ShootDate": 1247097600000,
    "OriginalDetails": "5400 Gibson SE- ITC on Gibson eb, wb from Maderia to Valencia"
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5769,
    "Title": "The Resident",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1334102/",
    "Address": "906 Park Avenue SW",
    "Site": "Java Joes",
    "ShootDate": 1247097600000,
    "OriginalDetails": "Java Joe's - 906 Park Ave SW- ITC on Park Ave eb,  wb from 9th st to 10th st"
   },
   "geometry": {
    "x": -106.65782147844163,
    "y": 35.085316075611949
   }
  },
  {
   "attributes": {
    "OBJECTID": 5770,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "100 Deputy Dean Miera Drive SW",
    "Site": "Metropolitan Detention Center",
    "ShootDate": 1286236800000,
    "OriginalDetails": "MDC - bernalillo county"
   },
   "geometry": {
    "x": -106.86000108005152,
    "y": 35.005425232988806
   }
  },
  {
   "attributes": {
    "OBJECTID": 5771,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "1318 Coal Avenue SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1287446400000,
    "OriginalDetails": "Roosevelt Park (Coal & Sycamore)- close Spruce from Coal to dead end - Permit & Location Agreement"
   },
   "geometry": {
    "x": -106.66405503013196,
    "y": 35.082121014470651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5772,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "400 Roma Avenue NW",
    "Site": "Police Department",
    "ShootDate": 1287446400000,
    "OriginalDetails": "400 Roma NW - south side of building on Marquette - ITC on Marquette from 4th to 5th. And, 5th from Marquette to Roma. "
   },
   "geometry": {
    "x": -106.65078121537167,
    "y": 35.089171935883442
   }
  },
  {
   "attributes": {
    "OBJECTID": 5773,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "415 Tijeras Avenue NW",
    "Site": "Bernallio County Courthouse",
    "ShootDate": 1287446400000,
    "OriginalDetails": "Old Bernalillo County Courthouse"
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5774,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "2120 Eubank Boulevard NE",
    "Site": "TDs Showclub",
    "ShootDate": 1287532800000,
    "OriginalDetails": "2120 Eubank NE (TD's Gold Club) "
   },
   "geometry": {
    "x": -106.53304851549488,
    "y": 35.106706424800393
   }
  },
  {
   "attributes": {
    "OBJECTID": 5775,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "5200 Eubank BoulevardNE ",
    "Site": "Barley Room",
    "ShootDate": 1287619200000,
    "OriginalDetails": "Barley Room"
   },
   "geometry": {
    "x": -106.53335829952061,
    "y": 35.137943830610425
   }
  },
  {
   "attributes": {
    "OBJECTID": 5776,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "300 Central Avenue SW",
    "Site": "Steve Ewing Law Office",
    "ShootDate": 1287705600000,
    "OriginalDetails": "Ewing Law Office - 300 Central Ave. SW - Closure, lane closure on 3rd from Central to Gold. And, alley south of Central from 3rd to 4th St. "
   },
   "geometry": {
    "x": -106.65043457436813,
    "y": 35.084391348568907
   }
  },
  {
   "attributes": {
    "OBJECTID": 5777,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "100 Gold Avenue SW",
    "Site": "Gold Avenue Lofts",
    "ShootDate": 1287792000000,
    "OriginalDetails": "Gold Lofts - 100 Gold Ave. - Closure on Gold from 1st St. to 2nd St. "
   },
   "geometry": {
    "x": -106.64826164671392,
    "y": 35.083070957234334
   }
  },
  {
   "attributes": {
    "OBJECTID": 5778,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "318 Silver Avenue SW",
    "Site": "Cathedral of Saint Johns ",
    "ShootDate": 1288051200000,
    "OriginalDetails": "St. John's Cathedral - 318 Silver Ave. SW - ITC, 4th St. from Lead to Gold. Closure, Silver from 4th St. 3rd St. "
   },
   "geometry": {
    "x": -106.651952045377,
    "y": 35.082543187707984
   }
  },
  {
   "attributes": {
    "OBJECTID": 5779,
    "Title": "The Reunion",
    "Type": "Movie aka Blood Brothers",
    "IMDbLink": "http://www.imdb.com/title/tt1792543/",
    "Address": "300 Copper Avenue NW",
    "Site": "Copper Avenue NW and 3rd Street intersection",
    "ShootDate": 1288828800000,
    "OriginalDetails": "Intersection of 3rd St. & Copper - ITC, 3rd St. from Copper to Central. And, 3rd from Tijeras to Marquette. Closure, 3rd St. from Alley between Copper/Gold to Tijeras. EB lane of Tijeras from 4th to 3rd. And, Copper from 2nd to 4th St. (EB only between 3r"
   },
   "geometry": {
    "x": -106.65024227291359,
    "y": 35.085400513007798
   }
  },
  {
   "attributes": {
    "OBJECTID": 5780,
    "Title": "The Southwest Chronicles",
    "Type": "Movie by Tripp Townsend and Frozen Frame Productions",
    "IMDbLink": "https://www.facebook.com/theswchronicles",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1373846400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5781,
    "Title": "The Southwest Chronicles",
    "Type": "Movie by Tripp Townsend and Frozen Frame Productions",
    "IMDbLink": "https://www.facebook.com/theswchronicles",
    "Address": "118 Tulane Drive SE",
    "Site": "Tractor Brewing Company",
    "ShootDate": 1373932800000,
    "OriginalDetails": "Tractor Brewing Company - 118 Tulane SE - no ITC/no closures"
   },
   "geometry": {
    "x": -106.60701334179194,
    "y": 35.079489559974064
   }
  },
  {
   "attributes": {
    "OBJECTID": 5782,
    "Title": "The Southwest Chronicles",
    "Type": "Movie by Tripp Townsend and Frozen Frame Productions",
    "IMDbLink": "https://www.facebook.com/theswchronicles",
    "Address": "220 Copper Avenue NW",
    "Site": "3rd Street NW and Copper Avenue NW parking structure",
    "ShootDate": 1373932800000,
    "OriginalDetails": "Acropolis parking structure"
   },
   "geometry": {
    "x": -106.64998629707507,
    "y": 35.085365677180505
   }
  },
  {
   "attributes": {
    "OBJECTID": 5783,
    "Title": "The Southwest Chronicles",
    "Type": "Movie by Tripp Townsend and Frozen Frame Productions",
    "IMDbLink": "https://www.facebook.com/theswchronicles",
    "Address": "3101 Central Avenue NE",
    "Site": "Imbibe rooftop",
    "ShootDate": 1374019200000,
    "OriginalDetails": "Imbibe rooftop"
   },
   "geometry": {
    "x": -106.6107602920971,
    "y": 35.080616679583059
   }
  },
  {
   "attributes": {
    "OBJECTID": 5784,
    "Title": "The Southwest Chronicles",
    "Type": "Movie by Tripp Townsend and Frozen Frame Productions",
    "IMDbLink": "https://www.facebook.com/theswchronicles",
    "Address": "806 Dr Martin Luther King Jr Avenue NE",
    "Site": "Eye Associates",
    "ShootDate": 1374019200000,
    "OriginalDetails": "Eye Associates - 806 Martin Luther King Jr NE"
   },
   "geometry": {
    "x": -106.63778817264668,
    "y": 35.08531886306848
   }
  },
  {
   "attributes": {
    "OBJECTID": 5785,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "7401 Atrisco Vista Boulevard NW",
    "Site": "Double Eagle Airport note that Atrisco Vista was formerly named Paseo Del Volcan",
    "ShootDate": 1226275200000,
    "OriginalDetails": "Double Eagle Airport"
   },
   "geometry": {
    "x": -106.78684748545665,
    "y": 35.126039287192576
   }
  },
  {
   "attributes": {
    "OBJECTID": 5786,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "7401 Atrisco Vista Boulevard NW",
    "Site": "Double Eagle Airport note that Atrisco Vista was formerly named Paseo Del Volcan",
    "ShootDate": 1226361600000,
    "OriginalDetails": "Double Eagle Airport"
   },
   "geometry": {
    "x": -106.78684748545665,
    "y": 35.126039287192576
   }
  },
  {
   "attributes": {
    "OBJECTID": 5787,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "4201 2nd Street SW",
    "Site": "Albuquerque Waste Water Plant Bernalillo County",
    "ShootDate": 1226448000000,
    "OriginalDetails": "4201 2nd St SW-  Water Plant Bernaillo County"
   },
   "geometry": {
    "x": -106.658606919512,
    "y": 35.025550237502252
   }
  },
  {
   "attributes": {
    "OBJECTID": 5788,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "4201 2nd Street SW",
    "Site": "Albuquerque Waste Water Plant Bernalillo County",
    "ShootDate": 1226534400000,
    "OriginalDetails": "4201 2nd St SW-  Water Plant Bernalillo County"
   },
   "geometry": {
    "x": -106.658606919512,
    "y": 35.025550237502252
   }
  },
  {
   "attributes": {
    "OBJECTID": 5789,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "4201 Yale Boulevard NE",
    "Site": "Shopping Center",
    "ShootDate": 1226620800000,
    "OriginalDetails": "4201 Yale Blvd NE STE F-On Nov.16th fr 7pm to Nov 18th, 6am/Closure on Alexander Blvd fr. Yale to Carmony. No ITC"
   },
   "geometry": {
    "x": -106.62179058240162,
    "y": 35.12739497606681
   }
  },
  {
   "attributes": {
    "OBJECTID": 5790,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1226880000000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5791,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1226966400000,
    "OriginalDetails": "Railyards"
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5792,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "2900 Central Avenue SE",
    "Site": "Central Avenue SE between Girard Boulevard NE and Tulane Drive NE",
    "ShootDate": 1228262400000,
    "OriginalDetails": "Central Between Tulane and Girard- Driving Shot- ITC on Central fr. Tulane to Girard EB, WB"
   },
   "geometry": {
    "x": -106.61313277420351,
    "y": 35.081007330989564
   }
  },
  {
   "attributes": {
    "OBJECTID": 5793,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "2100 Louisiana Boulevard NE",
    "Site": "Winrock Mall",
    "ShootDate": 1229126400000,
    "OriginalDetails": "Winrock Mall"
   },
   "geometry": {
    "x": -106.56875346861385,
    "y": 35.099133013771002
   }
  },
  {
   "attributes": {
    "OBJECTID": 5794,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "700 Lomas Boulevard NW",
    "Site": "Lomas Boulevard NW between 7th and 11th Streets NW driving shot",
    "ShootDate": 1229126400000,
    "OriginalDetails": "Driving Shot- Lomas closed between 7th and 11th st. 7am-11am & ITC on Lomas between 7th & 11th st.  fr.11am-3pm"
   },
   "geometry": {
    "x": -106.65411053710463,
    "y": 35.091527514718535
   }
  },
  {
   "attributes": {
    "OBJECTID": 5795,
    "Title": "The Spy Next Door",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1273678/",
    "Address": "2100 Louisiana Boulevard NE",
    "Site": "Winrock Mall",
    "ShootDate": 1229299200000,
    "OriginalDetails": "Winrock Mall"
   },
   "geometry": {
    "x": -106.56875346861385,
    "y": 35.099133013771002
   }
  },
  {
   "attributes": {
    "OBJECTID": 5796,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "3916 Central SW",
    "Site": "Monte Carlo Steakhouse",
    "ShootDate": 1189382400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.68386158587784,
    "y": 35.086324060568671
   }
  },
  {
   "attributes": {
    "OBJECTID": 5797,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "6501 Broadway SE",
    "Site": "Hutchen's Trucking Co. ",
    "ShootDate": 1189987200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65469076343821,
    "y": 34.988760422799061
   }
  },
  {
   "attributes": {
    "OBJECTID": 5798,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "5601 Broadway SE",
    "Site": "Coastal Transport Co. ",
    "ShootDate": 1190073600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65240816496252,
    "y": 34.998475054550937
   }
  },
  {
   "attributes": {
    "OBJECTID": 5799,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "5601 Broadway SE",
    "Site": "Coastal Transport Co. ",
    "ShootDate": 1190160000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65240816496252,
    "y": 34.998475054550937
   }
  },
  {
   "attributes": {
    "OBJECTID": 5800,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "5601 Broadway SE",
    "Site": "Coastal Transport Co. ",
    "ShootDate": 1190246400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65240816496252,
    "y": 34.998475054550937
   }
  },
  {
   "attributes": {
    "OBJECTID": 5801,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "5601 Broadway SE",
    "Site": "Coastal Transport Co. ",
    "ShootDate": 1190419200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65240816496252,
    "y": 34.998475054550937
   }
  },
  {
   "attributes": {
    "OBJECTID": 5802,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "1103 Mountain Rd. NW",
    "Site": "Golden Crown Panaderia",
    "ShootDate": 1190592000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65797391985041,
    "y": 35.095622899803146
   }
  },
  {
   "attributes": {
    "OBJECTID": 5803,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "1103 Mountain Rd. NW",
    "Site": "Golden Crown Panaderia",
    "ShootDate": 1190678400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65797391985041,
    "y": 35.095622899803146
   }
  },
  {
   "attributes": {
    "OBJECTID": 5804,
    "Title": "The War Boys",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1070887/?ref_=fn_al_tt_1",
    "Address": "1100 2nd Street SW",
    "Site": "Barelas Railyards",
    "ShootDate": 1191369600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65133481474192,
    "y": 35.074486686547026
   }
  },
  {
   "attributes": {
    "OBJECTID": 5805,
    "Title": "Those That Play Your Clowns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2563666/",
    "Address": "111 Marble Avenue NW",
    "Site": "Marble Brewery",
    "ShootDate": 1352246400000,
    "OriginalDetails": "Marble Brewery"
   },
   "geometry": {
    "x": -106.64657923693404,
    "y": 35.092588305641797
   }
  },
  {
   "attributes": {
    "OBJECTID": 5806,
    "Title": "Those That Play Your Clowns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2563666/",
    "Address": "100 1st Street SW",
    "Site": "Alvarado Transportation Center",
    "ShootDate": 1352332800000,
    "OriginalDetails": "Alvarado Transportation Center"
   },
   "geometry": {
    "x": -106.64812378855547,
    "y": 35.083567803386266
   }
  },
  {
   "attributes": {
    "OBJECTID": 5807,
    "Title": "Those That Play Your Clowns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2563666/",
    "Address": "100 4th Street NW",
    "Site": "4th Street Promenade",
    "ShootDate": 1352332800000,
    "OriginalDetails": "4th street pedestrian mall"
   },
   "geometry": {
    "x": -106.65160061096313,
    "y": 35.084590610357132
   }
  },
  {
   "attributes": {
    "OBJECTID": 5808,
    "Title": "Those That Play Your Clowns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2563666/",
    "Address": "100 4th Street NW",
    "Site": "4th Street Promenade",
    "ShootDate": 1352419200000,
    "OriginalDetails": "4th street pedestrian mall"
   },
   "geometry": {
    "x": -106.65160061096313,
    "y": 35.084590610357132
   }
  },
  {
   "attributes": {
    "OBJECTID": 5809,
    "Title": "Those That Play Your Clowns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2563666/",
    "Address": "7400 Lomas Boulevard NE",
    "Site": "Eds Pub at Leisure Bowl",
    "ShootDate": 1352937600000,
    "OriginalDetails": "Ed's Pub - Lomas & Louisiana"
   },
   "geometry": {
    "x": -106.5647440683119,
    "y": 35.087234646449382
   }
  },
  {
   "attributes": {
    "OBJECTID": 5810,
    "Title": "Those That Play Your Clowns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2563666/",
    "Address": "1318 Coal Avenue SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1353024000000,
    "OriginalDetails": "Roosevelt Park "
   },
   "geometry": {
    "x": -106.66405503013196,
    "y": 35.082121014470651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5811,
    "Title": "Those That Play Your Clowns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2563666/",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1353024000000,
    "OriginalDetails": "KiMo Theatre  - exterior no ITC/n closure"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5812,
    "Title": "Those That Play Your Clowns",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt2563666/",
    "Address": "423 Central Avenue NW ",
    "Site": "KiMo Theatre",
    "ShootDate": 1353456000000,
    "OriginalDetails": "KiMo Theatre - interior"
   },
   "geometry": {
    "x": -106.65266760111152,
    "y": 35.084716629850412
   }
  },
  {
   "attributes": {
    "OBJECTID": 5813,
    "Title": "Tiger Eyes",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1748260/",
    "Address": "1900 Edith Boulevard NE",
    "Site": "Mount Calvary Cemetary",
    "ShootDate": 1288224000000,
    "OriginalDetails": "Mt. Calvary Cemetary - no ITC/closures"
   },
   "geometry": {
    "x": -106.63753249774378,
    "y": 35.102926815900204
   }
  },
  {
   "attributes": {
    "OBJECTID": 5814,
    "Title": "Tiger Eyes",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1748260/",
    "Address": "601 Eubank Boulevard SE",
    "Site": "National Museum of Nuclear Science & History",
    "ShootDate": 1288224000000,
    "OriginalDetails": "National Museum of Nuclear Science & History"
   },
   "geometry": {
    "x": -106.53251368821913,
    "y": 35.067023015923688
   }
  },
  {
   "attributes": {
    "OBJECTID": 5815,
    "Title": "Tiger Eyes",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1748260/",
    "Address": "906 Park Avenue SW",
    "Site": "Java Joes",
    "ShootDate": 1288310400000,
    "OriginalDetails": "Java Joe's - 906 Park SW - Closure on Park from 8th to 10th. And, closure on 9th from Park to Gold Ave."
   },
   "geometry": {
    "x": -106.65782147844163,
    "y": 35.085316075611949
   }
  },
  {
   "attributes": {
    "OBJECTID": 5816,
    "Title": "Travel Channel",
    "Type": "TV Spot for The Travel Channel",
    "IMDbLink": "na",
    "Address": "7100 Tramway Boulevard NE",
    "Site": "Elena Gallegos Park",
    "ShootDate": 1342828800000,
    "OriginalDetails": "Elena Gallegos Park - blanket permit"
   },
   "geometry": {
    "x": -106.49718282592383,
    "y": 35.158347321159404
   }
  },
  {
   "attributes": {
    "OBJECTID": 5817,
    "Title": "Truth Be Told ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1857929/",
    "Address": "1801 Mountain Road NW",
    "Site": "NM Museum of Natural History and Science",
    "ShootDate": 1295568000000,
    "OriginalDetails": "NM Museum of Natural History, 1801 Mountain Rd NW. Street closure on Mountain Rd from 12th to Rio Grande WB (4pm - (pm)"
   },
   "geometry": {
    "x": -106.66608322751583,
    "y": 35.097624984819831
   }
  },
  {
   "attributes": {
    "OBJECTID": 5818,
    "Title": "Untitled Alan Loeb Project",
    "Type": "Movie aka The Rabbit Factory",
    "IMDbLink": "http://www.imdb.com/title/tt1723815/",
    "Address": "4800 Osuna Road NE",
    "Site": "Cliffs Amusement Park",
    "ShootDate": 1291766400000,
    "OriginalDetails": "Cliff's Amusement Park - 4800 Osuna Rd. NE"
   },
   "geometry": {
    "x": -106.65084882617322,
    "y": 34.995785010651744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5819,
    "Title": "Untitled Alan Loeb Project",
    "Type": "Movie aka The Rabbit Factory",
    "IMDbLink": "http://www.imdb.com/title/tt1723815/",
    "Address": "1201 3rd Street NW",
    "Site": "Saint Martins Hospitality Center",
    "ShootDate": 1292198400000,
    "OriginalDetails": "St. Martin's Hospitality Ctr. - 1201 3rd. NW"
   },
   "geometry": {
    "x": -106.64825953926626,
    "y": 35.09587023141296
   }
  },
  {
   "attributes": {
    "OBJECTID": 5820,
    "Title": "Untitled Alan Loeb Project",
    "Type": "Movie aka The Rabbit Factory",
    "IMDbLink": "http://www.imdb.com/title/tt1723815/",
    "Address": "219 Central Avenue NW ",
    "Site": "Sunrise Bank Building",
    "ShootDate": 1292198400000,
    "OriginalDetails": "Sunrise Bank - 219 Central NE"
   },
   "geometry": {
    "x": -106.6500854171835,
    "y": 35.08437180527546
   }
  },
  {
   "attributes": {
    "OBJECTID": 5821,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "100 3rd Street NW",
    "Site": "3rd Street NW between Central Avenue NW and Copper Avenue NW",
    "ShootDate": 1281052800000,
    "OriginalDetails": "sidewalk 3rd btwn Central & Copper"
   },
   "geometry": {
    "x": -106.65037279902269,
    "y": 35.084428189421139
   }
  },
  {
   "attributes": {
    "OBJECTID": 5822,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "100 4th Street NW",
    "Site": "4th Street Promenade between Copper Avenue and Tijeras Avenue",
    "ShootDate": 1281139200000,
    "OriginalDetails": "4th street pedestrian mall btwn Copper & Tijeras"
   },
   "geometry": {
    "x": -106.65160061096313,
    "y": 35.084590610357132
   }
  },
  {
   "attributes": {
    "OBJECTID": 5823,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "400 Gold Avenue SW",
    "Site": "Gold Avenue and 4th Street payphone",
    "ShootDate": 1281139200000,
    "OriginalDetails": "NW corner of 4th & Gold - payphone - no closures/ITC"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5824,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "100 4th Street NW",
    "Site": "4th Street Promenade between Copper Avenue and Tijeras Avenue",
    "ShootDate": 1281225600000,
    "OriginalDetails": "4th street pedestrian mall btwn Copper & Tijeras"
   },
   "geometry": {
    "x": -106.65160061096313,
    "y": 35.084590610357132
   }
  },
  {
   "attributes": {
    "OBJECTID": 5825,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "100 Gold Avenue SW",
    "Site": "Gold Avenue SW between 1st and 4th Streets",
    "ShootDate": 1281398400000,
    "OriginalDetails": "Gold btwn 1st & 4th no ITC/no closures"
   },
   "geometry": {
    "x": -106.64826164671392,
    "y": 35.083070957234334
   }
  },
  {
   "attributes": {
    "OBJECTID": 5826,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "1002 Coal Avenue SW",
    "Site": "Coal Avenue SW and 10th Street SW intersection",
    "ShootDate": 1281398400000,
    "OriginalDetails": "Corner of 10th & Coal - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65959025225293,
    "y": 35.081550626688191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5827,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "300 Copper Avenue NW",
    "Site": "Copper Avenue NW between 3rd Street NW Central Avenue NW",
    "ShootDate": 1281398400000,
    "OriginalDetails": "Copper btwn Central & 3rd - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65024227291359,
    "y": 35.085400513007798
   }
  },
  {
   "attributes": {
    "OBJECTID": 5828,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "100 Gold Avenue SW",
    "Site": "Gold Avenue SW between 1st and 4th Streets",
    "ShootDate": 1281484800000,
    "OriginalDetails": "Gold btwn 1st & 4th no ITC/no closures"
   },
   "geometry": {
    "x": -106.64826164671392,
    "y": 35.083070957234334
   }
  },
  {
   "attributes": {
    "OBJECTID": 5829,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "1002 Coal Avenue SW",
    "Site": "Coal Avenue SW and 10th Street SW intersection",
    "ShootDate": 1281484800000,
    "OriginalDetails": "Corner of 10th & Coal - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65959025225293,
    "y": 35.081550626688191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5830,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "300 Copper Avenue NW",
    "Site": "Copper Avenue NW and 3rd Street NW intersection",
    "ShootDate": 1281484800000,
    "OriginalDetails": "Copper btwn Central & 3rd - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65024227291359,
    "y": 35.085400513007798
   }
  },
  {
   "attributes": {
    "OBJECTID": 5831,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "100 Gold Avenue SW",
    "Site": "Gold Avenue SW between 1st and 4th Streets",
    "ShootDate": 1281571200000,
    "OriginalDetails": "Gold btwn 1st & 4th no ITC/no closures"
   },
   "geometry": {
    "x": -106.64826164671392,
    "y": 35.083070957234334
   }
  },
  {
   "attributes": {
    "OBJECTID": 5832,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "1002 Coal Avenue SW",
    "Site": "Coal Avenue SW and 10th Street SW intersection",
    "ShootDate": 1281571200000,
    "OriginalDetails": "Corner of 10th & Coal - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65959025225293,
    "y": 35.081550626688191
   }
  },
  {
   "attributes": {
    "OBJECTID": 5833,
    "Title": "Validation",
    "Type": "Movie by Cool Cat Productions",
    "IMDbLink": "http://www.imdb.com/title/tt1734177/",
    "Address": "300 Copper Avenue NW",
    "Site": "Copper Avenue NW and 3rd Street NW intersection",
    "ShootDate": 1281571200000,
    "OriginalDetails": "Copper btwn Central & 3rd - no ITC/no closures"
   },
   "geometry": {
    "x": -106.65024227291359,
    "y": 35.085400513007798
   }
  },
  {
   "attributes": {
    "OBJECTID": 5834,
    "Title": "Vegas",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2262383/",
    "Address": "123 4th Street SW",
    "Site": "Amy Biehl High School",
    "ShootDate": 1333929600000,
    "OriginalDetails": "123 4th St.  - Parking lane only = north side of Gold btwn 4th & 5th"
   },
   "geometry": {
    "x": -106.6516811000126,
    "y": 35.084321759838616
   }
  },
  {
   "attributes": {
    "OBJECTID": 5835,
    "Title": "Vegas",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2262383/",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1333929600000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5836,
    "Title": "Vegas",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2262383/",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1334016000000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5837,
    "Title": "Vegas",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2262383/",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1334102400000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5838,
    "Title": "Vegas",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2262383/",
    "Address": "400 Gold Avenue SW",
    "Site": "Simms Building",
    "ShootDate": 1334188800000,
    "OriginalDetails": "Simms Building - 400 Gold Avenue SW"
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5839,
    "Title": "Warrior Woman",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1701228/",
    "Address": "1413 4th Street SW",
    "Site": "Small Engine Gallery",
    "ShootDate": 1278547200000,
    "OriginalDetails": "1413 4th SW - no closures/no ITC"
   },
   "geometry": {
    "x": -106.65408467281097,
    "y": 35.07164375970298
   }
  },
  {
   "attributes": {
    "OBJECTID": 5840,
    "Title": "Warrior Woman",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1701228/",
    "Address": "4901 Lang Avenue NE",
    "Site": "NM Cancer Center",
    "ShootDate": 1278806400000,
    "OriginalDetails": "NM Cancer Ctr - 4901 Lang NE"
   },
   "geometry": {
    "x": -106.58859817401321,
    "y": 35.17302017993147
   }
  },
  {
   "attributes": {
    "OBJECTID": 5841,
    "Title": "Warrior Woman",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1701228/",
    "Address": "5700 Bobby Foster Road SE",
    "Site": "Bobby Foster Road SE driving shot",
    "ShootDate": 1279152000000,
    "OriginalDetails": "Bobby Foster Driving Shot"
   },
   "geometry": {
    "x": -106.64454392489313,
    "y": 34.993850977776631
   }
  },
  {
   "attributes": {
    "OBJECTID": 5842,
    "Title": "Warrior Woman",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1701228/",
    "Address": "4901 Lang Avenue NE",
    "Site": "NM Cancer Center",
    "ShootDate": 1279411200000,
    "OriginalDetails": "NM Cancer Ctr - 4901 Lang NE"
   },
   "geometry": {
    "x": -106.58859817401321,
    "y": 35.17302017993147
   }
  },
  {
   "attributes": {
    "OBJECTID": 5843,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "2608 Central Ave. SE",
    "Site": "Denny's ",
    "ShootDate": 1332806400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6166759901955,
    "y": 35.080957054128682
   }
  },
  {
   "attributes": {
    "OBJECTID": 5844,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "10401 Cibola Loop NW",
    "Site": "NW APD Substation",
    "ShootDate": 1333065600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66183020231219,
    "y": 35.205857391096117
   }
  },
  {
   "attributes": {
    "OBJECTID": 5845,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "4500 Central SE ",
    "Site": "Loyola's Restaurant",
    "ShootDate": 1334102400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5943005788255,
    "y": 35.078615257675352
   }
  },
  {
   "attributes": {
    "OBJECTID": 5846,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "400 Gold SW",
    "Site": "Simm's Building",
    "ShootDate": 1334620800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65183221550799,
    "y": 35.083544202852728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5847,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "10800 Dennis Chaves Blvd",
    "Site": "Atrisco Heritage Academy",
    "ShootDate": 1334707200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.74067515962788,
    "y": 35.024568863318137
   }
  },
  {
   "attributes": {
    "OBJECTID": 5848,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "12931 Indian School NE ",
    "Site": "Hinkle Family Fun Center",
    "ShootDate": 1334880000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.4976882612218,
    "y": 35.094779982355504
   }
  },
  {
   "attributes": {
    "OBJECTID": 5849,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": " 4511 Paseo Del Norte NW",
    "Site": "Dura Box",
    "ShootDate": 1334880000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5979747799657,
    "y": 35.174446513151736
   }
  },
  {
   "attributes": {
    "OBJECTID": 5850,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "415 Roma NW ",
    "Site": "Regional Correctional Center",
    "ShootDate": 1335139200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.651392195529,
    "y": 35.089262527563427
   }
  },
  {
   "attributes": {
    "OBJECTID": 5851,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "3401 University Blvd SE",
    "Site": "Little Anita's Restaurant",
    "ShootDate": 1335139200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62866142859889,
    "y": 35.037508578159837
   }
  },
  {
   "attributes": {
    "OBJECTID": 5852,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9310 Coors NW",
    "Site": "Grandma's Music",
    "ShootDate": 1335312000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66636979907462,
    "y": 35.18242957122569
   }
  },
  {
   "attributes": {
    "OBJECTID": 5853,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "601 Comanche NE",
    "Site": "Sysco",
    "ShootDate": 1336435200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62849745821177,
    "y": 35.124619664907335
   }
  },
  {
   "attributes": {
    "OBJECTID": 5854,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1011 Las Lomas",
    "Site": "Scott & Kienzle Law Office",
    "ShootDate": 1336521600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6316858360733,
    "y": 35.088849154656728
   }
  },
  {
   "attributes": {
    "OBJECTID": 5855,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "900 1st Street",
    "Site": "Affirmative Solutions",
    "ShootDate": 1337558400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64659464304117,
    "y": 35.091598776114402
   }
  },
  {
   "attributes": {
    "OBJECTID": 5856,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "900 1st Street ",
    "Site": "Affirmative Solutions",
    "ShootDate": 1337644800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64659464304117,
    "y": 35.091598776114402
   }
  },
  {
   "attributes": {
    "OBJECTID": 5857,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "220 4th SW",
    "Site": "Parking Structure",
    "ShootDate": 1337731200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65194686389444,
    "y": 35.082673799672179
   }
  },
  {
   "attributes": {
    "OBJECTID": 5858,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "2200 Sunport Blvd. SE",
    "Site": "Albuquerque Sunport Parking Lot",
    "ShootDate": 1338854400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6186417358025,
    "y": 35.049710416686651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5859,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9516 Snow Heights Cr NE",
    "Site": "Octopus Car Wash",
    "ShootDate": 1338940800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53572969556383,
    "y": 35.108820757638235
   }
  },
  {
   "attributes": {
    "OBJECTID": 5860,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "2310 Eubank NE",
    "Site": "Charter Bank",
    "ShootDate": 1338940800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5330917451213,
    "y": 35.109311164481078
   }
  },
  {
   "attributes": {
    "OBJECTID": 5861,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "600 Central Ave SE",
    "Site": "The Grove",
    "ShootDate": 1339977600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64095506460322,
    "y": 35.083152034569125
   }
  },
  {
   "attributes": {
    "OBJECTID": 5862,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "415 Roma NW ",
    "Site": "Regional Correctional Center",
    "ShootDate": 1340668800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.651392195529,
    "y": 35.089262527563427
   }
  },
  {
   "attributes": {
    "OBJECTID": 5863,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "1216 Central Ave SW ",
    "Site": "Dog House Drive-in",
    "ShootDate": 1354838400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66140325282058,
    "y": 35.087901265331297
   }
  },
  {
   "attributes": {
    "OBJECTID": 5864,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9516 Snowheights Circle NE ",
    "Site": "Octopus Car Wash",
    "ShootDate": 1355270400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53572969556383,
    "y": 35.108820757638235
   }
  },
  {
   "attributes": {
    "OBJECTID": 5865,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9901 Central NE",
    "Site": "Perea's Restaurant",
    "ShootDate": 1355788800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53813335819375,
    "y": 35.072575939161261
   }
  },
  {
   "attributes": {
    "OBJECTID": 5866,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "4801 San Mateo NE ",
    "Site": "Devon Self Storage",
    "ShootDate": 1355961600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58642353237343,
    "y": 35.136008407092632
   }
  },
  {
   "attributes": {
    "OBJECTID": 5867,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "6219 Montgomery NE",
    "Site": "Wings and Things",
    "ShootDate": 1355961600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57727262903438,
    "y": 35.130859596913069
   }
  },
  {
   "attributes": {
    "OBJECTID": 5868,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "501 Sycamore SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1357689600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63226156094899,
    "y": 35.07798196687763
   }
  },
  {
   "attributes": {
    "OBJECTID": 5869,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "501 Sycamore SE",
    "Site": "Roosevelt Park",
    "ShootDate": 1357862400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63226156094899,
    "y": 35.07798196687763
   }
  },
  {
   "attributes": {
    "OBJECTID": 5870,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9200 Central SW",
    "Site": "Calf-A Diner",
    "ShootDate": 1358121600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 5871,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9516 Snowheights NE",
    "Site": "Octopus Car Wash",
    "ShootDate": 1358294400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53572969556383,
    "y": 35.108820757638235
   }
  },
  {
   "attributes": {
    "OBJECTID": 5872,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "5100 Juan Tabo NE",
    "Site": "John Robert Dam",
    "ShootDate": 1358726400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.51613962930986,
    "y": 35.138808999476403
   }
  },
  {
   "attributes": {
    "OBJECTID": 5873,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "One Civic Plaza",
    "Site": "Civic Plaza",
    "ShootDate": 1359417600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5874,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "One Civic Plaza",
    "Site": "Civic Plaza",
    "ShootDate": 1359504000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64979914925529,
    "y": 35.0873879689807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5875,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9516 Snowheights Circle NE  ",
    "Site": "Octopus Car Wash",
    "ShootDate": 1359936000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53572969556383,
    "y": 35.108820757638235
   }
  },
  {
   "attributes": {
    "OBJECTID": 5876,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "100 Daniel Rd NW ",
    "Site": "Tewa Moulding Corporation",
    "ShootDate": 1360281600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62150700762261,
    "y": 35.16768678755934
   }
  },
  {
   "attributes": {
    "OBJECTID": 5877,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "9516 Snowheights Circle NE  ",
    "Site": "Octopus Car Wash",
    "ShootDate": 1361404800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53572969556383,
    "y": 35.108820757638235
   }
  },
  {
   "attributes": {
    "OBJECTID": 5878,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "7520 Corona Ave NE",
    "Site": "AFD Fire Station 20",
    "ShootDate": 1361491200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56013808694829,
    "y": 35.180087577984246
   }
  },
  {
   "attributes": {
    "OBJECTID": 5879,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "5100 Juan Tabo NE",
    "Site": "John Robert Dam",
    "ShootDate": 1361491200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.51613962930986,
    "y": 35.138808999476403
   }
  },
  {
   "attributes": {
    "OBJECTID": 5880,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "100 Daniel NW",
    "Site": "Tewa Moulding Corporation",
    "ShootDate": 1361750400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62150700762261,
    "y": 35.16768678755934
   }
  },
  {
   "attributes": {
    "OBJECTID": 5881,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "2714 4th St NW",
    "Site": "On the Spot Vacuum",
    "ShootDate": 1362355200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64623635627829,
    "y": 35.112636822124117
   }
  },
  {
   "attributes": {
    "OBJECTID": 5882,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "100 Daniel NW",
    "Site": "Tewa Moulding Corporation",
    "ShootDate": 1362700800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62150700762261,
    "y": 35.16768678755934
   }
  },
  {
   "attributes": {
    "OBJECTID": 5883,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "600 Central Ave SE",
    "Site": "The Grove",
    "ShootDate": 1362960000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64095506460322,
    "y": 35.083152034569125
   }
  },
  {
   "attributes": {
    "OBJECTID": 5884,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "100 Daniel NW",
    "Site": "Tewa Moulding Corporation",
    "ShootDate": 1363824000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62150700762261,
    "y": 35.16768678755934
   }
  },
  {
   "attributes": {
    "OBJECTID": 5885,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "100 Daniel NW",
    "Site": "Tewa Moulding Corporation",
    "ShootDate": 1363910400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62150700762261,
    "y": 35.16768678755934
   }
  },
  {
   "attributes": {
    "OBJECTID": 5886,
    "Title": "Breaking Bad",
    "Type": "TV Series Season 5 pt. 2",
    "IMDbLink": "http://www.imdb.com/title/tt0903747/episodes?season=5&ref_=tt_eps_sn_5",
    "Address": "600 Central Ave SE  ",
    "Site": "The Grove",
    "ShootDate": 1364774400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64095506460322,
    "y": 35.083152034569125
   }
  },
  {
   "attributes": {
    "OBJECTID": 5887,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "2600 Louisianna Blvd NE",
    "Site": "Sheraton Uptown",
    "ShootDate": 1381708800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56883017126437,
    "y": 35.109174715456142
   }
  },
  {
   "attributes": {
    "OBJECTID": 5888,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "2600 Louisianna Blvd NE",
    "Site": "Sheraton Uptown",
    "ShootDate": 1381795200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56883017126437,
    "y": 35.109174715456142
   }
  },
  {
   "attributes": {
    "OBJECTID": 5889,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "2600 Louisianna Blvd NE",
    "Site": "Sheraton Uptown",
    "ShootDate": 1381881600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56883017126437,
    "y": 35.109174715456142
   }
  },
  {
   "attributes": {
    "OBJECTID": 5890,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "109 5th st. SW",
    "Site": "Chic Lash Boutique",
    "ShootDate": 1382054400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65283449910815,
    "y": 35.084612658067108
   }
  },
  {
   "attributes": {
    "OBJECTID": 5891,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "109 5th st. SW",
    "Site": "Chic Lash Boutique",
    "ShootDate": 1382313600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65283449910815,
    "y": 35.084612658067108
   }
  },
  {
   "attributes": {
    "OBJECTID": 5892,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "500 Central SW",
    "Site": "Lindy's Coffee Shop",
    "ShootDate": 1382486400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65283511086086,
    "y": 35.084710510926442
   }
  },
  {
   "attributes": {
    "OBJECTID": 5893,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "1113 4th st. NW",
    "Site": "Garcia's Kitchen  ",
    "ShootDate": 1382572800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64951248786497,
    "y": 35.095610877475053
   }
  },
  {
   "attributes": {
    "OBJECTID": 5894,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "518 Central Ave SW",
    "Site": "Ray's Smoke Shop  ",
    "ShootDate": 1382572800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65360152022362,
    "y": 35.084798485483653
   }
  },
  {
   "attributes": {
    "OBJECTID": 5895,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "2200 Sunport SE",
    "Site": "Albuquerque Sunport",
    "ShootDate": 1382659200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6186417358025,
    "y": 35.049710416686651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5896,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "2200 Sunport SE",
    "Site": "Albuqerque Sunport",
    "ShootDate": 1382659200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6186417358025,
    "y": 35.049710416686651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5897,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "420 Central SW",
    "Site": "Effex",
    "ShootDate": 1382918400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65251025579961,
    "y": 35.084667772538012
   }
  },
  {
   "attributes": {
    "OBJECTID": 5898,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "420 Central SW",
    "Site": "Effex",
    "ShootDate": 1383004800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65251025579961,
    "y": 35.084667772538012
   }
  },
  {
   "attributes": {
    "OBJECTID": 5899,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "420 Central SW",
    "Site": "Effex",
    "ShootDate": 1383091200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65251025579961,
    "y": 35.084667772538012
   }
  },
  {
   "attributes": {
    "OBJECTID": 5900,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "219 central Ave NW ",
    "Site": "Banque Lofts ",
    "ShootDate": 1383177600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6500854171835,
    "y": 35.08437180527546
   }
  },
  {
   "attributes": {
    "OBJECTID": 5901,
    "Title": "Dirty Weekend",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3194590/?ref_=nv_sr_1",
    "Address": "219 central Ave NW ",
    "Site": "Banque Lofts ",
    "ShootDate": 1383264000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6500854171835,
    "y": 35.08437180527546
   }
  },
  {
   "attributes": {
    "OBJECTID": 5902,
    "Title": "Hunter's Game",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3223746/?ref_=fn_al_tt_1",
    "Address": "1000 Woodward NE ",
    "Site": "Embassy Suites ",
    "ShootDate": 1382486400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63711106750128,
    "y": 35.090236694345492
   }
  },
  {
   "attributes": {
    "OBJECTID": 5903,
    "Title": "Hunter's Game",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3223746/?ref_=fn_al_tt_1",
    "Address": "5110 Headingley NE",
    "Site": "Jim's auto shop ",
    "ShootDate": 1382486400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58701758018597,
    "y": 35.120884477717382
   }
  },
  {
   "attributes": {
    "OBJECTID": 5904,
    "Title": "Hunter's Game",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3223746/?ref_=fn_al_tt_1",
    "Address": "6404 Los Volcanes ",
    "Site": "APD SW Area Command",
    "ShootDate": 1382572800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.71070617327854,
    "y": 35.0910719761523
   }
  },
  {
   "attributes": {
    "OBJECTID": 5905,
    "Title": "Hunter's Game",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3223746/?ref_=fn_al_tt_1",
    "Address": "4022 Rio Grande NW",
    "Site": "Bookworks",
    "ShootDate": 1382659200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66813403459706,
    "y": 35.138591378664515
   }
  },
  {
   "attributes": {
    "OBJECTID": 5906,
    "Title": "Hunter's Game",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3223746/?ref_=fn_al_tt_1",
    "Address": "4022 Rio Grande NW",
    "Site": "Bookworks",
    "ShootDate": 1382745600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66813403459706,
    "y": 35.138591378664515
   }
  },
  {
   "attributes": {
    "OBJECTID": 5907,
    "Title": "Hunter's Game",
    "Type": "TV Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3223746/?ref_=fn_al_tt_1",
    "Address": "4022 Rio Grande NW",
    "Site": "Bookworks",
    "ShootDate": 1382832000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66813403459706,
    "y": 35.138591378664515
   }
  },
  {
   "attributes": {
    "OBJECTID": 5908,
    "Title": "Killer Woman ",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "320 Gold SW",
    "Site": "New Mexico Bank & Trust",
    "ShootDate": 1379548800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6516571913513,
    "y": 35.083521838758791
   }
  },
  {
   "attributes": {
    "OBJECTID": 5909,
    "Title": "Killer Woman ",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse ",
    "ShootDate": 1379548800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5910,
    "Title": "Killer Woman ",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "4800 Osuna NE",
    "Site": "Cliff's Amusement Park",
    "ShootDate": 1379894400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6936662624194,
    "y": 35.168509459836386
   }
  },
  {
   "attributes": {
    "OBJECTID": 5911,
    "Title": "Killer Woman ",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "125 2nd St. NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1380067200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 5912,
    "Title": "Killer Woman ",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "8th & Central",
    "Site": "Robinson Park",
    "ShootDate": 1380067200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65652790712747,
    "y": 35.085234818860954
   }
  },
  {
   "attributes": {
    "OBJECTID": 5913,
    "Title": "Killer Woman ",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "2601 Central NW",
    "Site": "Botanical Gardens",
    "ShootDate": 1380153600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.67786653509883,
    "y": 35.093776258402983
   }
  },
  {
   "attributes": {
    "OBJECTID": 5914,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "125 2nd NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1380499200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 5915,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "2130 Eubank NE",
    "Site": "Charter Bank",
    "ShootDate": 1380585600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53306316252558,
    "y": 35.107363558008608
   }
  },
  {
   "attributes": {
    "OBJECTID": 5916,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "1736 Central SW",
    "Site": "Garcia's on Central ",
    "ShootDate": 1380758400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66676047010345,
    "y": 35.091764168465744
   }
  },
  {
   "attributes": {
    "OBJECTID": 5917,
    "Title": "killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "415 Roma NW",
    "Site": "Regional Correction Center",
    "ShootDate": 1382054400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.651392195529,
    "y": 35.089262527563427
   }
  },
  {
   "attributes": {
    "OBJECTID": 5918,
    "Title": "killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "615 Gold SW",
    "Site": "Valliant Printing",
    "ShootDate": 1382313600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65516761344554,
    "y": 35.084004904910849
   }
  },
  {
   "attributes": {
    "OBJECTID": 5919,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "115 Gold SW",
    "Site": "Greater Albuquerque Chamber of Commerce",
    "ShootDate": 1382918400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64897752224864,
    "y": 35.083200237808356
   }
  },
  {
   "attributes": {
    "OBJECTID": 5920,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "220 Copper Ave. NW",
    "Site": "Acropolis Parking Structure",
    "ShootDate": 1383868800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64998629707507,
    "y": 35.085365677180505
   }
  },
  {
   "attributes": {
    "OBJECTID": 5921,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "220 Copper Ave. NW",
    "Site": "Acropolis Parking Structure",
    "ShootDate": 1383868800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64998629707507,
    "y": 35.085365677180505
   }
  },
  {
   "attributes": {
    "OBJECTID": 5922,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "415 Tijeras NW",
    "Site": "Old Bernalillo County Courthouse ",
    "ShootDate": 1384300800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65235603033669,
    "y": 35.086907957985964
   }
  },
  {
   "attributes": {
    "OBJECTID": 5923,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "410 Lead SW",
    "Site": "Parking Garage",
    "ShootDate": 1384732800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65270930000869,
    "y": 35.081646774797555
   }
  },
  {
   "attributes": {
    "OBJECTID": 5924,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "236 6th St. SW",
    "Site": "Cecilia's",
    "ShootDate": 1384819200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.70686822094012,
    "y": 35.077965201669834
   }
  },
  {
   "attributes": {
    "OBJECTID": 5925,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "1200 Hazeldine SE",
    "Site": "Milne Stadium ",
    "ShootDate": 1384819200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63463529261193,
    "y": 35.076591403767438
   }
  },
  {
   "attributes": {
    "OBJECTID": 5926,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "Coal & Sycamore",
    "Site": "Roosevelt Park ",
    "ShootDate": 1384819200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63223656891947,
    "y": 35.078020896257733
   }
  },
  {
   "attributes": {
    "OBJECTID": 5927,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "206 Atrisco SW",
    "Site": "Taos Garage",
    "ShootDate": 1384992000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.68375507802449,
    "y": 35.083105737438224
   }
  },
  {
   "attributes": {
    "OBJECTID": 5928,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "601 Laguna Blvd. SW",
    "Site": "Albuquerque Country Club",
    "ShootDate": 1384992000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.67037381487474,
    "y": 35.087117025374958
   }
  },
  {
   "attributes": {
    "OBJECTID": 5929,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "2500 Central SW",
    "Site": "El Vado Motel  ",
    "ShootDate": 1384992000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.67748834975409,
    "y": 35.094435292202803
   }
  },
  {
   "attributes": {
    "OBJECTID": 5930,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "1901 University NE",
    "Site": "Crowne Plaza",
    "ShootDate": 1385251200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 5931,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "806 Central SE",
    "Site": "Hotel Parq Central",
    "ShootDate": 1385510400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6374117102707,
    "y": 35.082763240768635
   }
  },
  {
   "attributes": {
    "OBJECTID": 5932,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "6400 Uptown NE",
    "Site": "Albuquerque Public Schools Headquarters",
    "ShootDate": 1386201600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57315078930327,
    "y": 35.103718055345908
   }
  },
  {
   "attributes": {
    "OBJECTID": 5933,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "5601 University SE",
    "Site": "Isleta Amphitheatre parking lot",
    "ShootDate": 1386288000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62177349734323,
    "y": 34.995465777434681
   }
  },
  {
   "attributes": {
    "OBJECTID": 5934,
    "Title": "Killer Women",
    "Type": "TV Series Season 1",
    "IMDbLink": "http://www.imdb.com/title/tt2657258/?ref_=fn_al_tt_1",
    "Address": "2901 Candelaria NW",
    "Site": "Candelaria farms entrance ",
    "ShootDate": 1386374400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.68425086990788,
    "y": 35.128797365423438
   }
  },
  {
   "attributes": {
    "OBJECTID": 5935,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1381708800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5936,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1381795200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5937,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1381881600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5938,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1381968000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5939,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1382054400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5940,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1213 Central NW",
    "Site": "Downtown Inn",
    "ShootDate": 1382313600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66123747592141,
    "y": 35.087863709358544
   }
  },
  {
   "attributes": {
    "OBJECTID": 5941,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "6705 Fortuna Rd. NW",
    "Site": "West Mesa Aquatic Center ",
    "ShootDate": 1382400000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.71673384907203,
    "y": 35.094402377867453
   }
  },
  {
   "attributes": {
    "OBJECTID": 5942,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "6705 Fortuna Rd. NW",
    "Site": "West Mesa Aquatic Center ",
    "ShootDate": 1382486400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.71673384907203,
    "y": 35.094402377867453
   }
  },
  {
   "attributes": {
    "OBJECTID": 5943,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "6705 Fortuna Rd. NW",
    "Site": "West Mesa Aquatic Center ",
    "ShootDate": 1382572800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.71673384907203,
    "y": 35.094402377867453
   }
  },
  {
   "attributes": {
    "OBJECTID": 5944,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "225 Yale SE",
    "Site": "Tri H ",
    "ShootDate": 1382659200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62212045006216,
    "y": 35.077101258388844
   }
  },
  {
   "attributes": {
    "OBJECTID": 5945,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "6705 Fortuna Rd. NW",
    "Site": "West Mesa Aquatic Center ",
    "ShootDate": 1382659200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.71673384907203,
    "y": 35.094402377867453
   }
  },
  {
   "attributes": {
    "OBJECTID": 5946,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1414 University Blvd. SE",
    "Site": "The Pit ",
    "ShootDate": 1382918400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63087513347882,
    "y": 35.069175533537901
   }
  },
  {
   "attributes": {
    "OBJECTID": 5947,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "3010 Eubank NE",
    "Site": "Silva Lanes ",
    "ShootDate": 1383264000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.53322140345784,
    "y": 35.116366734586421
   }
  },
  {
   "attributes": {
    "OBJECTID": 5948,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1383523200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5949,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1383609600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5950,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1383609600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5951,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1383696000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5952,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1383782400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5953,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "1505 Candelaria NW",
    "Site": "Valley High School",
    "ShootDate": 1383868800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66014278262797,
    "y": 35.123450085023912
   }
  },
  {
   "attributes": {
    "OBJECTID": 5954,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "2600 Louisianna Blvd NE",
    "Site": "Sheraton Uptown",
    "ShootDate": 1384128000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56883017126437,
    "y": 35.109174715456142
   }
  },
  {
   "attributes": {
    "OBJECTID": 5955,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "2600 Louisianna Blvd NE",
    "Site": "Sheraton Uptown",
    "ShootDate": 1384214400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56883017126437,
    "y": 35.109174715456142
   }
  },
  {
   "attributes": {
    "OBJECTID": 5956,
    "Title": "La Vida Robot",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3233418/?ref_=fn_al_tt_1",
    "Address": "2600 Louisianna Blvd NE",
    "Site": "Sheraton Uptown",
    "ShootDate": 1384300800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56883017126437,
    "y": 35.109174715456142
   }
  },
  {
   "attributes": {
    "OBJECTID": 5957,
    "Title": "Afterwards",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0940580/?ref_=fn_al_tt_1",
    "Address": "1001 Central NE",
    "Site": "Crossroads Motel",
    "ShootDate": 1182470400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63615181499986,
    "y": 35.08263334568273
   }
  },
  {
   "attributes": {
    "OBJECTID": 5958,
    "Title": "Afterwards",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0940580/?ref_=fn_al_tt_1",
    "Address": "2200 Sunport Boulevard SE",
    "Site": "Albuquerque International Sunport",
    "ShootDate": 1182816000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6186417358025,
    "y": 35.049710416686651
   }
  },
  {
   "attributes": {
    "OBJECTID": 5959,
    "Title": "Afterwards",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt0940580/?ref_=fn_al_tt_1",
    "Address": "9200 Central SW",
    "Site": "Calf-A Diner",
    "ShootDate": 1182816000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.73698393451471,
    "y": 35.07390934929483
   }
  },
  {
   "attributes": {
    "OBJECTID": 5960,
    "Title": null,
    "Type": null,
    "IMDbLink": null,
    "Address": null,
    "Site": null,
    "ShootDate": null,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5961,
    "Title": null,
    "Type": null,
    "IMDbLink": null,
    "Address": null,
    "Site": null,
    "ShootDate": null,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5962,
    "Title": null,
    "Type": null,
    "IMDbLink": null,
    "Address": null,
    "Site": null,
    "ShootDate": null,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5963,
    "Title": null,
    "Type": null,
    "IMDbLink": null,
    "Address": null,
    "Site": null,
    "ShootDate": null,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5964,
    "Title": null,
    "Type": null,
    "IMDbLink": null,
    "Address": null,
    "Site": null,
    "ShootDate": null,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5965,
    "Title": "10 Years",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1715873/",
    "Address": "125 2nd Street NW",
    "Site": "Hotel Andaluz",
    "ShootDate": 1294099200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 5966,
    "Title": "50 to 1",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt1777595/",
    "Address": "1901 University Boulevard NE",
    "Site": "Albuquerque Crowne Plaza interior",
    "ShootDate": 1347926400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.62385971152142,
    "y": 35.10705878753015
   }
  },
  {
   "attributes": {
    "OBJECTID": 5967,
    "Title": "500 MPH Storm",
    "Type": "Movie aka Hypercane",
    "IMDbLink": "http://www.imdb.com/title/tt2518848/",
    "Address": "7401 Atrisco Vista Boulevard NW",
    "Site": "Double Eagle Airport note that Atrisco Vista was formerly named Paseo Del Volcan",
    "ShootDate": 1349136000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.78684748545665,
    "y": 35.126039287192576
   }
  },
  {
   "attributes": {
    "OBJECTID": 5968,
    "Title": "Dig",
    "Type": "TV Mini-Series",
    "IMDbLink": "http://www.imdb.com/title/tt3597606/?ref_=fn_al_tt_1",
    "Address": "3711 Central Ave NE",
    "Site": "University Lodge",
    "ShootDate": 1415318400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60255520156453,
    "y": 35.079583732249716
   }
  },
  {
   "attributes": {
    "OBJECTID": 5969,
    "Title": "Messengers, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt3513704/?ref_=fn_al_tt_1",
    "Address": "5131 Masthead NE",
    "Site": "Sun Health Center",
    "ShootDate": 1415577600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58723250660928,
    "y": 35.164412064262976
   }
  },
  {
   "attributes": {
    "OBJECTID": 5970,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5700 W University Blvd SE",
    "Site": "The Aperature Center (Mesa Del Sol)",
    "ShootDate": 1422489600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.61443897852553,
    "y": 34.987720747658699
   }
  },
  {
   "attributes": {
    "OBJECTID": 5971,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5400 Gibson Blvd SE",
    "Site": "Gibson Medical Center ",
    "ShootDate": 1423008000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5972,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "401 Shirk Ln SW ",
    "Site": "Albuquerque Open Space - South Division Channel ",
    "ShootDate": 1423094400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.67466784906941,
    "y": 35.000601342438785
   }
  },
  {
   "attributes": {
    "OBJECTID": 5973,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "4500 2nd St SW",
    "Site": "Joy Junction ",
    "ShootDate": 1425254400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66096040314845,
    "y": 35.012905239573385
   }
  },
  {
   "attributes": {
    "OBJECTID": 5974,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "4821 Menaul Blvd NE",
    "Site": "German American Club",
    "ShootDate": 1425427200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59028222591341,
    "y": 35.109201654450807
   }
  },
  {
   "attributes": {
    "OBJECTID": 5975,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5409 Gibson Blvd SE",
    "Site": "Antonios Café & Cantina",
    "ShootDate": 1426032000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58176963307594,
    "y": 35.058337929921649
   }
  },
  {
   "attributes": {
    "OBJECTID": 5976,
    "Title": "Night Shift, The",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "3512 Los Picaros Road SE",
    "Site": "Dragway Road near Los Picaros Road SE",
    "ShootDate": 1426809600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 5977,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5715 Central Ave NE",
    "Site": "Intersection of Alvarado Dr. and Tewa Lodge",
    "ShootDate": 1427846400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58183103562054,
    "y": 35.077292532080364
   }
  },
  {
   "attributes": {
    "OBJECTID": 5978,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "5715 Central Ave NE",
    "Site": "Intersection of Alvarado Dr. and Tewa Lodge",
    "ShootDate": 1427932800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58183103562054,
    "y": 35.077292532080364
   }
  },
  {
   "attributes": {
    "OBJECTID": 5979,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "950 4th St NW ",
    "Site": "Anthea Construction Site ",
    "ShootDate": 1428451200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64981873702006,
    "y": 35.093991926220596
   }
  },
  {
   "attributes": {
    "OBJECTID": 5980,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "218 Gold St SW",
    "Site": "Gold St Caffe ",
    "ShootDate": 1430956800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6501190519044,
    "y": 35.083323325638801
   }
  },
  {
   "attributes": {
    "OBJECTID": 5981,
    "Title": "Night Shift, The",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt2477230/",
    "Address": "320 Gold St SW",
    "Site": "NM Bank and Trust ",
    "ShootDate": 1430956800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6516571913513,
    "y": 35.083521838758791
   }
  },
  {
   "attributes": {
    "OBJECTID": 5982,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "4330 Lomas Blvd NE ",
    "Site": "Hurricane's Restaurant",
    "ShootDate": 1428364800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59641048606929,
    "y": 35.08741149121979
   }
  },
  {
   "attributes": {
    "OBJECTID": 5983,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "10705 Central Ave NE",
    "Site": "Rain Tunnel Car Wash",
    "ShootDate": 1428364800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.5279482657906,
    "y": 35.071466499175429
   }
  },
  {
   "attributes": {
    "OBJECTID": 5984,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "4595 San Mateo NE",
    "Site": "ITZ",
    "ShootDate": 1428883200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58640342268747,
    "y": 35.134817565660647
   }
  },
  {
   "attributes": {
    "OBJECTID": 5985,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "201 California NE",
    "Site": "ABQ Downs ",
    "ShootDate": 1428969600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57527227672939,
    "y": 35.077643858909262
   }
  },
  {
   "attributes": {
    "OBJECTID": 5986,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "505 Central Ave NW ",
    "Site": "Historic Sears Building",
    "ShootDate": 1429056000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65301499400493,
    "y": 35.084758902163848
   }
  },
  {
   "attributes": {
    "OBJECTID": 5987,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "301 Central Ave NW",
    "Site": "Real Time Solutions (2nd Floor)",
    "ShootDate": 1429142400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6504292410703,
    "y": 35.084418472176587
   }
  },
  {
   "attributes": {
    "OBJECTID": 5988,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "423 1st st",
    "Site": "El Madrid ",
    "ShootDate": 1429228800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64878237223633,
    "y": 35.080271423061426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5989,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "9201 Balloon Museum Dr NE",
    "Site": "Balloon Museum ",
    "ShootDate": 1429488000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59778427514172,
    "y": 35.186578900351641
   }
  },
  {
   "attributes": {
    "OBJECTID": 5990,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "NA",
    "Site": "Sandia Peak Tram ",
    "ShootDate": 1429488000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": "NaN",
    "y": "NaN"
   }
  },
  {
   "attributes": {
    "OBJECTID": 5991,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "4800 Osuna Rd NE ",
    "Site": "Cliffs Amusement Park",
    "ShootDate": 1429574400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58930783949441,
    "y": 35.14488944855426
   }
  },
  {
   "attributes": {
    "OBJECTID": 5992,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "San Juan Rd NE",
    "Site": "Fox Memorial Park ",
    "ShootDate": 1429660800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58616811349039,
    "y": 35.084973211120662
   }
  },
  {
   "attributes": {
    "OBJECTID": 5993,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "401 2nd St NW",
    "Site": "Albuquerque Convention Center ",
    "ShootDate": 1430092800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 5994,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "113 2nd St NW ",
    "Site": "Andaluz Hotel parking lot ",
    "ShootDate": 1430179200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64914718166648,
    "y": 35.084746730480262
   }
  },
  {
   "attributes": {
    "OBJECTID": 5995,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "219 Central NW ",
    "Site": "Sunrise Bank Roof ",
    "ShootDate": 1430179200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6500854171835,
    "y": 35.08437180527546
   }
  },
  {
   "attributes": {
    "OBJECTID": 5996,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "400 San Jose Ave SE ",
    "Site": "Jack Candelaria Community Center ",
    "ShootDate": 1430179200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64725498652169,
    "y": 35.054808500742695
   }
  },
  {
   "attributes": {
    "OBJECTID": 5997,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "1 Civic Plaza NW ",
    "Site": "parking garage stairs ",
    "ShootDate": 1430265600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64981791865485,
    "y": 35.087274377052161
   }
  },
  {
   "attributes": {
    "OBJECTID": 5998,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "330 Tijeras NW ",
    "Site": "Hyatt Restaurant ",
    "ShootDate": 1430265600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65103081856158,
    "y": 35.086592718513046
   }
  },
  {
   "attributes": {
    "OBJECTID": 5999,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "1820 Bellamah Ave NW  ",
    "Site": "Blue Links Warehouse",
    "ShootDate": 1430352000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66617187955627,
    "y": 35.100918373694768
   }
  },
  {
   "attributes": {
    "OBJECTID": 6000,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "1820 Bellamah Ave NW ",
    "Site": "Blue Links Warehouse",
    "ShootDate": 1430438400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66617187955627,
    "y": 35.100918373694768
   }
  },
  {
   "attributes": {
    "OBJECTID": 6001,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "4408B Menaul Blvd NE ",
    "Site": "Ooh Girl Who Did Your Hair? Salon",
    "ShootDate": 1430697600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.59424599449389,
    "y": 35.109176606286049
   }
  },
  {
   "attributes": {
    "OBJECTID": 6002,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "400 2nd St SW  ",
    "Site": "Gertrude Zachary ",
    "ShootDate": 1430784000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64978213336717,
    "y": 35.081261509040552
   }
  },
  {
   "attributes": {
    "OBJECTID": 6003,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "509 Central Ave NW ",
    "Site": "Blackbird Bruvette",
    "ShootDate": 1431216000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65319949987945,
    "y": 35.084780082417922
   }
  },
  {
   "attributes": {
    "OBJECTID": 6004,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "318 Silver Ave SW  ",
    "Site": "St John's Church ",
    "ShootDate": 1431302400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.651952045377,
    "y": 35.082543187707984
   }
  },
  {
   "attributes": {
    "OBJECTID": 6005,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "409 Central Ave NW  ",
    "Site": "Anodyne Pool Hall ",
    "ShootDate": 1431302400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.6520238441244,
    "y": 35.084630625259344
   }
  },
  {
   "attributes": {
    "OBJECTID": 6006,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "312 Central Ave SW ",
    "Site": "Library Bar ",
    "ShootDate": 1431388800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65089644856137,
    "y": 35.084452712245152
   }
  },
  {
   "attributes": {
    "OBJECTID": 6007,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "311 Central Ave SW ",
    "Site": "Knock Outs Roof ",
    "ShootDate": 1431475200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65081413503357,
    "y": 35.084469608437132
   }
  },
  {
   "attributes": {
    "OBJECTID": 6008,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "405 Central Ave NW ",
    "Site": "Posh Nightclub ",
    "ShootDate": 1431475200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65183991317167,
    "y": 35.084606051032168
   }
  },
  {
   "attributes": {
    "OBJECTID": 6009,
    "Title": "War on Everyone ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt3708886/?ref_=fn_al_tt_1",
    "Address": "1820 Bellamah Ave NW  ",
    "Site": "Blue Links Warehouse",
    "ShootDate": 1431561600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.66617187955627,
    "y": 35.100918373694768
   }
  },
  {
   "attributes": {
    "OBJECTID": 6010,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "201 Winrock Ctr",
    "Site": "Winrock Mall",
    "ShootDate": 1426464000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56343782087075,
    "y": 35.100579036418921
   }
  },
  {
   "attributes": {
    "OBJECTID": 6011,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "NA",
    "Site": "Ira Sprecker & Bobby Foster Rd (Montessa Park)",
    "ShootDate": 1426550400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 6012,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "401 2nd St NW",
    "Site": "Convention Center Parking Structure",
    "ShootDate": 1426550400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 6013,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "201 Winrock Ctr",
    "Site": "Winrock Mall (2ND Unit)",
    "ShootDate": 1426550400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56343782087075,
    "y": 35.100579036418921
   }
  },
  {
   "attributes": {
    "OBJECTID": 6014,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "201 Winrock Ctr",
    "Site": "Winrock Mall (2ND Unit)",
    "ShootDate": 1426636800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.56343782087075,
    "y": 35.100579036418921
   }
  },
  {
   "attributes": {
    "OBJECTID": 6015,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Pilot",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "401 2nd St NW",
    "Site": "Convention Center Parking Structure",
    "ShootDate": 1426723200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64857634272761,
    "y": 35.087830230780234
   }
  },
  {
   "attributes": {
    "OBJECTID": 6016,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "NA",
    "Site": "Ira Sprecker & Bobby Foster Rd (Montessa Park)",
    "ShootDate": 1427068800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.60645199984225,
    "y": 35.016873218930101
   }
  },
  {
   "attributes": {
    "OBJECTID": 6017,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "125 2nd St NW ",
    "Site": "Andaluz Hotel",
    "ShootDate": 1427068800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64904736266874,
    "y": 35.085218572646646
   }
  },
  {
   "attributes": {
    "OBJECTID": 6018,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "1504 Central Ave SE",
    "Site": "Copper Lounge ",
    "ShootDate": 1427068800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.63028963223789,
    "y": 35.08180855877638
   }
  },
  {
   "attributes": {
    "OBJECTID": 6019,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "209 Central Ave NW ",
    "Site": "Banque Lofts",
    "ShootDate": 1427328000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64963180749091,
    "y": 35.084310079135122
   }
  },
  {
   "attributes": {
    "OBJECTID": 6020,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "109 5th St SW",
    "Site": "NA",
    "ShootDate": 1427328000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65283449910815,
    "y": 35.084612658067108
   }
  },
  {
   "attributes": {
    "OBJECTID": 6021,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "414 Central SW",
    "Site": " Kress Building",
    "ShootDate": 1427328000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.65225558341656,
    "y": 35.084633748677653
   }
  },
  {
   "attributes": {
    "OBJECTID": 6022,
    "Title": "Endgame (now known as The Player)",
    "Type": "TV Series",
    "IMDbLink": "http://www.imdb.com/title/tt4474310/?ref_=fn_al_tt_2",
    "Address": "5323 Montgomery Blvd NE",
    "Site": "Del Norte High School",
    "ShootDate": 1427414400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58406599643673,
    "y": 35.130946163985477
   }
  },
  {
   "attributes": {
    "OBJECTID": 6023,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "5400 Gibson Boulevard SE",
    "Site": "Gibson Medical Center ",
    "ShootDate": 1431302400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.58189635841305,
    "y": 35.058310952799587
   }
  },
  {
   "attributes": {
    "OBJECTID": 6024,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "300 San Pedro Dr Ne",
    "Site": "Tingley Coliseum ",
    "ShootDate": 1433116800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 6025,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "300 San Pedro Dr Ne",
    "Site": "Tingley Coliseum ",
    "ShootDate": 1433721600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 6026,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "300 San Pedro Dr Ne",
    "Site": "Tingley Coliseum ",
    "ShootDate": 1433808000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 6027,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "300 San Pedro Dr Ne",
    "Site": "Tingley Coliseum ",
    "ShootDate": 1433894400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 6028,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "300 San Pedro Dr Ne",
    "Site": "Tingley Coliseum ",
    "ShootDate": 1433980800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 6029,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "300 San Pedro Dr Ne",
    "Site": "Tingley Coliseum ",
    "ShootDate": 1434067200000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 6030,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "300 San Pedro Dr Ne",
    "Site": "Tingley Coliseum ",
    "ShootDate": 1435708800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 6031,
    "Title": "IDR: Where we are when ",
    "Type": "Movie",
    "IMDbLink": "NA",
    "Address": "300 San Pedro Dr Ne",
    "Site": "Tingley Coliseum ",
    "ShootDate": 1436140800000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.57744081521513,
    "y": 35.080780747447086
   }
  },
  {
   "attributes": {
    "OBJECTID": 6032,
    "Title": "Katie Says Goodbye ",
    "Type": "Movie",
    "IMDbLink": "http://www.imdb.com/title/tt4547938/?ref_=fn_al_tt_1",
    "Address": "  2700 4th St NW",
    "Site": "Court John Motel",
    "ShootDate": 1428624000000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64637372754987,
    "y": 35.111896525981045
   }
  },
  {
   "attributes": {
    "OBJECTID": 6033,
    "Title": "Preacher ",
    "Type": "TV Series",
    "IMDbLink": "NA",
    "Address": "400 2nd St SW ",
    "Site": "Gertrude Zachary ",
    "ShootDate": 1431561600000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.64978213336717,
    "y": 35.081261509040552
   }
  },
  {
   "attributes": {
    "OBJECTID": 6034,
    "Title": "Preacher ",
    "Type": "TV Series",
    "IMDbLink": "NA",
    "Address": "8603 Zuni Rd SE ",
    "Site": "Bea's Mexican Restaurant 2",
    "ShootDate": 1432598400000,
    "OriginalDetails": null
   },
   "geometry": {
    "x": -106.55152682315999,
    "y": 35.072742876513381
   }
  }
 ]
}
JSON;

        return json_decode($json_text, true);
    }
}
