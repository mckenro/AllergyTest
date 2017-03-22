<?php
  require_once __DIR__.'/../vendor/autoload.php';
  require_once __DIR__.'/../src/Allergies.php';

  session_start();
  if (empty($_SESSION[''])) {
    $_SESSION[''] = array();
  }

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

  $app->get("/", function() use($app){
      return $app['twig']->render("index.html.twig");
  });
  $app->post("/allergies", function() use($app){
      $allergy = new Allergies;
      return $app['twig']->render("index.html.twig", array('allergies' => $allergy->findAllergies($_POST['allergy'])));
  });

  return $app;
?>
