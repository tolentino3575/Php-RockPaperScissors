<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/rockpaperscissors.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'));

    $app->get("/", function() use ($app) {
         return $app['twig']->render('form.html.twig', array('winner'=>NULL));
     });

     $app->get("/pvp", function() use ($app){
         $my_Game = new RockPaperScissors;
         $result = $my_Game->playGame($_GET['player1'], $_GET['player2']);
         return $app['twig']->render('form.html.twig', array('winner'=>$result));
     });

     $app->get("/pve", function() use ($app){
         $my_Game = new RockPaperScissors;
         $values = rand(0, 2);
         $computer = array(0=>"rock",1=>"paper",2=>"scissors");
         $new_value = $computer[$values];
         $result = $my_Game->playComputer($_GET['player1'], $new_value);
         return $app['twig']->render('form.html.twig', array('computerGame'=>$result));
     });

    return $app;


?>
