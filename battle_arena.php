<DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Battle Arena</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="override.css" rel="stylesheet">
  </head>

  <body>
    <p>
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
            return "Hello, blood is " . $blood . " mana is " . $mana . " name is" . $this->name;
          }
        }
       $player1 = new Player('Michael');
      ?>
    </p>
  </body>
</html>

