<?php
header('Content-type: application/json');

$listeVilles = '
  {
    "villes": [
                { "name": "Mulhouse", "value": "mulhouse", "zipcode": 68000, "logo":"image/mulhouse.png" },
                { "name": "Grenoble", "value": "grenoble", "zipcode": 38000, "logo":"image/gre.png" },
                { "name": "Paris", "value": "paris", "zipcode": 75000,"logo":"image/paris.png" },
                { "name": "Lyon", "value": "lyon", "zipcode": 69000, "logo":"image/lyon.png" }
              ]
   }
';

echo $listeVilles;
