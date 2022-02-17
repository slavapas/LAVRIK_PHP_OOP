<?php

// инкапсулция = это закрытия внутрений сложности

// включаем строгую типизацию (когда вводим данные о обьекте чтобы они было того же типа как мы описали в конструкторе - int, string ...)
declare(strict_types=1);

function debug($var)
{
  echo "<pre>";
  echo print_r($var);
  echo "</pre>";
}

//Class define

class UserStatus
{
  /** константы принадлежат КЛАССУ -   // свойства принадлежат ОБЬЕКТУ  
   *
   */
  const CREATED = 0;
  const ACTIVATED = 1;
  const BANED = 2;

  /** чтобы  получить доступ к константе класса --- ClassName::CONTANT
   * UserStatus::ACTIVATED ==== (the value will be 1 )
   * мы также можем использовать это выражение внутри другого класса - смотри ниже линия 67 ...
   *  
   */
}




class Images
{

  /**
   * Status
   * 0 -> new
   * 1 -> activated
   * 2 -> baned
   */

  // свойства принадлежат ОБЬЕКТУ - // константы принадлежат КЛАССУ -  
  public $id;
  public $login;
  public $name;
  public $created;
  private $status;
  private $now; // doesn't go in the __construct function


  public function __construct(int $id, string $login, string $name, int $status, int $created)
  {
    $this->id = $id;
    $this->login = $login;
    $this->name = $name;
    $this->status = $status;
    $this->created = $created;
    $this->now = time(); // get the current time
  }

  public function isActive()
  {
    return $this->status == UserStatus::ACTIVATED;
  }

  public function activated()
  {
    $this->status = UserStatus::ACTIVATED;
  }

  public function ban()
  {
    $this->status = UserStatus::BANED;
  }

  public function save()
  {
    // save db
  }
}

// Create Object from CLass
$user1 = new User(1, "admin", "slava", 0, 2020);
$user2 = new User(2, "user", "slava", 0, 2021);

// $user1->banned();
// $user1->activated();
$user1->status;
debug($user1);
// debug($user2);
