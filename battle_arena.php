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
    displayCurrentPlayer();
    $stdin = fopen('php://stdin', 'r');
    $answer = trim(fgets($stdin));
    switch ($answer)
    {
        case "new":
          createCharacter();
          return main();
        case "start":
          startBattle();
    }

 }

 $playerCount = 0;
 $player = [];

 function createCharacter()
 {
    global $playerCount, $player;
    echo "Put player name: ";
    $stdin = fopen('php://stdin', 'r');
    $name = trim(fgets($stdin));
    $player[$playerCount] = new Player($name);
    $playerCount ++;
 }

 function displayCurrentPlayer()
 {
  global $playerCount, $player;
  echo "# Current Player: " . $playerCount . "\n";
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
    global $player;

    do{
      echo "Who will attack: ";
      $stdin = fopen('php://stdin', 'r');
      $attacker = trim(fgets($stdin));
      echo "Who will defend: ";
      $stdin = fopen('php://stdin', 'r');
      $defender = trim(fgets($stdin));

      $arrlength = count($player);
      for($x = 0; $x < $arrlength; $x++)
      {
        if($player[$x]->name == $attacker)
        {
          $currentAttacker = $player[$x];
          $currentAttacker->mana -= 10;
        }
        elseif($player[$x]->name == $defender)
        {
          $currentDefender = $player[$x];
          $currentDefender->blood -= 25;
        }
      }
      echo "Description: \n";
      echo $currentAttacker->name . " :mana =" . $currentAttacker->mana . ", blood = " . $currentAttacker->blood . "\n";
      echo $currentDefender->name . " :mana =" . $currentDefender->mana . ", blood = " . $currentDefender->blood . "\n";
    } while ($currentDefender->blood > 0 || $currentAttacker->mana > 0);

    echo "Game Over";

 }

 main();
?>

