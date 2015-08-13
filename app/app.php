<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));


    //Form route
    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    //Result route
    $app->get("/score", function() use ($app) {
            $my_ScrabbleScore = new ScrabbleScore;
            $the_score = $my_ScrabbleScore->getScore($_GET['word']);

            return $app['twig']->render('score.html.twig', array('score' => $the_score));
    });

    return $app;
?>
