<?php

class Fruit
{
  public $name;
  public $color;
  private $weight;

  public function __construct($name, $color)
  {
    $this->name = $name;
    $this->color = $color;
  }

  function set_name($n)
  {
    $this->name = $n;
  }

  protected function set_color($n)
  {
    $this->color = $n;
  }

  private function set_weight($n)
  {
    $this->weight;
  }

  public function intro()
  {
    echo "Nama buah ini adalah {$this->name} dan warnanya {$this->color} <br/>";
  }
}

// $mango = new Fruit();
// $mango->name = 'Mango'; // OK
// echo $mango->name . '<br/>';
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = 300; // Error

// $mango->set_name('Mangga'); // OK
// $mango->set_color('Green'); // ERROR
// $mango->set_weight('200'); // ERROR
// echo $mango->name;

class Strawberry extends Fruit
{
  public function message()
  {
    echo "apakah saya adalah buah atau berry? <br/>";
  }
}


$strawberry = new Strawberry("Strawberry", "Merah");
$strawberry->message();
$strawberry->intro();
