<?php

class Klant{

  public $name;
  public $email;
  public $adress;
  public $datum_van_aanschaf;
  public $auto_aangeschaft;

}

class Auto {

  public $type;
  public $merk;
  public $eigenschappen;
  public $model;
  public $verkocht;

}

$klant1 = new Klant();
$klant1->name = 'Henk';
$klant1->email = 'henk@gmail.com';
$klant1->adress = 'Alexanderlaan';
$klant1->datum_van_aanschaf = date("Y-m-d");
$klant1->auto_aangeschaft = 'smart';

var_dump($klant1);

$auto1 = new Auto();
$auto1->type = 'Hatchback';
$auto1->merk = 'Smart';
$auto1->eigenschappen = 'Wit, 600kg, 9999 euro';
$auto1->model = 'Cube';
$auto1->verkocht = 'true';

var_dump($auto1);

?>
