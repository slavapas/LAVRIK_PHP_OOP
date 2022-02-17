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
class Images
{

  // the functions bellow CAN be accessed from outside of this class - they are PUBLIC
  public function upload($file)
  {
    if ($this->check($file['name'])) {
      $this->resize($file);
      $this->watermark($file);
    }
  }

  public function get($id, $resize)
  {
    // 
  }

  // the functions bellow can't be accessed from outside of this class - they are PRIVATE
  private function resize()
  {
    //
  }


  private function check($path)
  {
    //
  }


  private function watermark($img)
  {
    //
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
