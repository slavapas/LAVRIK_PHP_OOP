<?php
// включаем строгую типизацию
declare(strict_types=1);

function debug($var)
{
  echo "<pre>";
  echo print_r($var);
  echo "</pre>";
}

//Class define
class User
{
  public $id;
  public $login;
  public $name;
  public $status;
  public $created;
  public $now; // doesn't go in the __construct function


  public function __construct(int $id, string $login, string $name, int $status, int $created)
  {
    $this->id = $id;
    $this->login = $login;
    $this->name = $name;
    $this->status = $status;
    $this->created = $created;
    $this->now = time(); // get the current time
  }
}

// Create Object from CLass
$user1 = new User(1, "admin", "slava", 0, 2020);
$user2 = new User(2, "user", "slava", 0, 2021);

debug($user1);
debug($user2);
