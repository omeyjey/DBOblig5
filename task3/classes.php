<?php

include_once("DBHandler.php");

class Club {
  public $id;
  public $name;
  public $city;

  public function parse($club) {
      $this->id = $club->attributes()->id;
      $this->name = $club->Name;
	    $this->city = $club->City;

      $this->save();
    }

  private function save() {
    echo '<pre>';
    print_r($this);
  }
}

class City {
  public $cityname;
  public $county;

  public function parse($cities) {
    $this->cityname = $cities->City;
    $this->county = $cities->County;

    $this->save();
  }

  private function save() {
    echo '<pre>';
    print_r($this);
  }
}

class Log {
  public $season;
  public $club;
  public $skier;
  public $date;
  public $area;
  public $distance;

  public function parse($season, $club, $skier, $date, $area, $distance) {
	    $this->season = $season;
      $this->club = $club;
      $this->skier = $skier;
      $this->date = $date;
      $this->area = $area;
      $this->distance = $distance;

      $this->save();
    }

  private function save() {
    echo '<pre>';
    print_r($this);
  }
}

class Skier {
  public $username;
  public $firstname;
  public $lastname;
  public $birthyear;

  public function parse($skier) {
      $this->username = $skier->attributes()->userName;
	    $this->firstname = $skier->FirstName;
      $this->lastname = $skier->LastName;
      $this->birthyear = $skier->YearOfBirth;

      $this->save();
    }

  private function save() {
    echo '<pre>';
    print_r($this);
  }
}

class Season {
  public $year;

  public function parse($season) {
    $this->year = $season->attributes()->fallYear;

    $this->save();
  }

  private function save() {
    echo '<pre>';
    print_r($this);
  }
}
