<?php


class HomeController
{
   // mehod tanımlama

   private $number = 100; // sadece bu class da kullanılır
   protected $string = ""; // sadece ben ve kalıtım yoluyla ilişkili olduklarım kullanır
   public $array =  []; // her yerde kullanılabilir
  public function index()
   {
      $title = "Ana Sayfa";
      require_once APP_ROOT . '/view/home.php';
   }
}