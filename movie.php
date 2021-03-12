<?php

    class Movie {
     public $titolo;
     public $autore;
     public $country;
     public $cast;


     public function __construct($_titolo,$_country){
        $this->titolo = $_titolo;
        $this->country = $_country;

     }

    }

    $film_uno = new Movie('HAMLET','spain');
    $film_uno->autore= "shakespeare";
    $film_uno->cast= "romeo and juliet";


    // var_dump($film_uno);
    


    $film_due = new Movie ('Welcome to america 2','U.S.A');
    $film_due->autore= "Eddie murphy";
    $film_due->cast= "david,blackson";

    // var_dump($film_due);


?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h3>
    <?php foreach ($film_uno as $key): ?>
      <?php echo $key ?>
    <?php endforeach; ?></h3>

    <h4>


    <?php foreach ($film_due as $key): ?>
      <?php echo $key ?>
    <?php endforeach; ?></h4>

  </body>
</html>
