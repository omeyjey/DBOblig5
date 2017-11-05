<?php

include_once("classes.php");

$cities = []; $clubs = []; $logs = []; $skiers = [];

// Connect to database
$pdo = new PDO('mysql:host=127.0.0.1;dbname=DBOblig5;charset=utf8mb4', 'root', '');


foreach ($xml_city as $city) {
  array_push($cities, new City($city));
}

echo '<pre>';
print_r($cities);
