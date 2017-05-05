<?php
  class Player
  {
    public $blood=100;
    public $mana=40;
    public $name;
    public function __construct ($name)
    {
      $this->name = $name;
    }
    public function greet()
    {
      return "Hello, blood is " . $this->blood . " mana is " . $this->mana . " name is " . $this->name . "\n";
    }
  }
 $player1 = new Player('Michael');
 echo $player1->greet();
 function startScreen()
 {
  echo "# ============================== #\n";
  echo "# Welcome to the Battle Arena #\n";
  echo "# ------------------------------------------------- ---- #\n";
  echo "# Description: #\n";
  echo "# 1 type \"new\" to create a character #\n";
  echo "# 2. type \"start\" to begin the fight #\n";
  echo "# ------------------------------------------------- ---- #\n";
 }
 function main()
 {
    startScreen();
    $stdin = fopen('php://stdin', 'r');
    $answer = trim(fgets($stdin));
    switch ($answer)
    {
        case "new":
          createCharacter();
        case "start":
          startBattle();
    }

 }

 function createCharacter()
 {
    $playerCount = 0;
    $player = [];
    while($playerCount <= 2)
    {
      echo "Enter player name: ";
      $stdin = fopen('php://stdin', 'r');
      $name = trim(fgets($stdin));
      $player[$playerCount] = new Player($name);
      $playerCount ++;
    }
    echo "# Current Player: #\n";
    $arrlength = count($player);
    for($x = 0; $x < $arrlength; $x++)
    {
      $playerNo = $x + 1;
      echo "Player " . $playerNo . "\n";
      echo "Name: " . $player[$x]->name . "\n";
    }
 }

 function startBattle()
 {

 }

 main();
?>

