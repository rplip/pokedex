<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= $_SERVER['BASE_URI'] ?>/assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">
  <title>Pokedex</title>
</head>
<body id="body-body">
    <section id="body-section">
        <div class="container-fluid">
            <div class="container-fluid" id="padding-head-bar">
                <div class="row p-3 my-4 mx-2 bg-light rounded-pill head-color" id="head-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-8">
                        <h4>Pokédex</h4>
                        </div> 
                        <div class="col-2">
                        <a href="<?= $router->generate('home') ?>" class="nav-link active text-center" id="aHeaderListe">Liste</a>
                        </div>
                        <div class="col-2">
                        <a href="<?= $router->generate('types') ?>" class="nav-link active text-center" id="aHeaderType">Types</a>
                        </div>
                    </div>
                    </div>
                </div>
            </div>