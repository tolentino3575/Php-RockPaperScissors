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
         var_dump($result);
         return $app['twig']->render('rockpaperscissors.html.twig', array('winner'=>$result));
     });

    return $app;


?>
