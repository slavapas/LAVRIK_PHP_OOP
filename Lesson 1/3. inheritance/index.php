<?php

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
class Cat extends Animal
{
}

// создадим экземпляр или обьект кота
$murzik = new Animal("Гоша", 100, 10);
$kisya = new Cat("Гоша", 100, 10);
// debug($murzik);
echo "Murzik " . $murzik->calcDamage() . "\n";
echo "Kisya " . $kisya->calcDamage();
