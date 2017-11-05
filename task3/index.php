<?php

include_once("classes.php");


// Load xml file
$xml = simplexml_load_file("SkierLogs.xml");

function parseCities($xml) {
  $xml_city = $xml->xpath('//SkierLogs/Clubs/Club');

  $holder = new City();

  foreach ($xml_city as $city) {
    $holder->parse($city);
  }
}

function parseClubs($xml) {
  $xml_clubs = $xml->xpath('//SkierLogs/Clubs/Club');

  $holder = new Club();

  foreach ($xml_clubs as $club) {
    $holder->parse($club);
  }
}

function parseSeasons($xml) {
  $xml_seasons = $xml->xpath('//SkierLogs/Season');

  $holder = new Season();

  foreach ($xml_seasons as $season) {
    $holder->parse($season);
  }
}

function parseSkiers($xml) {
  $xml_skiers = $xml->xpath('//SkierLogs/Skiers/Skier');

  $holder = new Skier();

  foreach ($xml_skiers as $skier) {
    $holder->parse($skier);
  }
}

function parseLogs($xml) {
  $data = $xml->xpath('//SkierLogs/Season');

  $holder = new Log();

  foreach ($data as $Season) {
    $season = $Season->attributes()->fallYear;
    foreach ($Season as $Skiers) {
      $club = $Skiers->attributes()->clubId;
      foreach ($Skiers as $Skier) {
        $skier = $Skier->attributes()->userName;
        foreach ($Skier as $Log) {
          foreach ($Log as $Entry) {
            $date = $Entry->Date;
            $area = $Entry->Area;
            $distance = $Entry->Distance;

            $holder->parse($season, $club, $skier, $date, $area, $distance);
          }
        }
      }
    }
  }
}

// parseLogs($xml);
// parseCities($xml);
// parseSkiers($xml);
// parseSeasons($xml);
// parseClubs($xml);
