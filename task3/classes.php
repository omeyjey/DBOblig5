<?php

class Club {
  public $id;
  public $name;
  public $city;

  public function __construct($name, $city, $id = -1) {
      $this->id = $id;
      $this->name = $name;
	    $this->city = $city;
    }
}

class City {
  public $cityname;
  public $county;

  public function __construct($cities) {
      $this->cityname = $cities->City;
      $this->county = $cities->County;
    }
}

class Log {
  public $id;
  public $season;
  public $club;
  public $skier;
  public $date;
  public $area;
  public $distance;

  public function __construct($seson, $club, $skier, $date, $area, $distance, $id = -1) {
      $this->id = $id;
	    $this->season = $season;
      $this->club = $club;
      $this->skier = $skier;
      $this->date = $date;
      $this->area = $area;
      $this->distance = $distance;
    }
}

class Skier {
  public $userName;
  public $firstname;
  public $lastname;
  public $birthyear;

  public function __construct($userName, $firstname, $lastname, $birthyear) {
      $this->username = $username;
	    $this->firstname = $firstname;
      $this->lastname = $lastname;
      $this->birthyear = $birthyear;
    }
}
