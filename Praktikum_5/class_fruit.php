<?php

class Fruit
{
  public $name;
  public $color;
  private $weight;

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
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
echo $mango->name . '<br/>';
// $mango->color = 'Yellow'; // ERROR
// $mango->weight = 300; // Error

$mango->set_name('Mangga'); // OK
// $mango->set_color('Green'); // ERROR
// $mango->set_weight('200'); // ERROR
echo $mango->name;
