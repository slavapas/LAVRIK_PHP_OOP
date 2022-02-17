<?php

// ПОЛИМОРФИЗМ = это изменчивость детей

function debug($var)
{
  echo "<pre>";
  echo print_r($var);
  echo "</pre>";
}

class Animal
{
  public $name;
  public $health;
  public $power;
  public $alive;

  public function __construct(string $name, int $health, int $power)
  {
    $this->name = $name;
    $this->health = $health;
    $this->power = $power;
    $this->alive = true;
  }

  public function calcDamage()
  {
    return $this->power * mt_rand(100, 300) / 200;
  }

  public function applyDamage(int $damage)
  {
    $this->health -= $damage;
    if ($this->health == 0) {
      $this->health = 0;
      $this->alive = false;
    }
  }
}

// создаем наследование CAT от родителя ANIMAL
class Dog extends Animal
{
}


class Cat extends Animal
{
  private $lifes;

  public function __construct(string $name, int $health, int $power)
  {
    parent::__construct($name, $health, $power);
    $this->lifes = 9;
  }

  private function hiddenLevel()
  {
    return $this->hiddenLevel;
  }
}


class Mouse extends Animal
{
  private $hiddenLevel;

  public function __construct(string $name, int $health, int $power)
  {
    parent::__construct($name, $health, $power);
    $this->hiddenLevel = 0.4;
  }

  private function hiddenLevel()
  {
    return $this->hiddenLevel;
  }
}

class GameCore
{
  private $units;

  public function __construct()
  {
    $this->units = [];
  }

  public function addUnit($unit)
  {
    $this->unit[] = $unit;
  }

  public function nextTick()
  {
    foreach ($this->units as $unit) {
      $damage = $unit->calcDamage();
      print_r($damage);
    }
  }
}


$core = new GameCore();
// создадим экземпляр или обьект кота
$animal = new Animal("Гоша", 100, 10);
$kisya = new Cat("Murka", 100, 10);
$doggy = new Dog("Sharik", 100, 10);
$micy = new Dog("Micy", 100, 10);

$core->addUnit($kisya);
$core->nextTick();
// debug($murzik);

echo "Животное " . $animal->calcDamage() . "\n";
echo "Kisya " . $kisya->calcDamage() . "\n";
echo "Doggya " . $doggy->calcDamage() . "\n";
echo "Mousiya " . $micy->calcDamage() . "\n";
