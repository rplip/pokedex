<?php

use App\Models\Pokemon;

$detail = $viewVars['detail'];
$type = $viewVars['type'];
$type2 = $viewVars['type2']; 
$detaillink = $router->generate('element', ['id' => $type->getId()])?>

<h1 class="text-white text-center ">Détails de <?= $detail->getNom() ?> </h1>
<div class="container text-white">
  <div class="row">
    <div class="col-4">
        <img src="<?= $_SERVER['BASE_URI'] ?>/assets/img/<?= $detail->getNumero() ?>.png" alt="" class="img-fluid">
    </div>
    <div id="detail-stat" class="col-8">
        <h3> #<?= $detail->getNumero() ?> <?= $detail->getNom() ?></h3>
        <div id="pokemon-type" class="container">
            <div class="row">
                <div class="pokemon-type-class col-2 mx-2 rounded" style="background-color: #<?= $type->getColor() ?>" ><a href="<?= $detaillink ?>"><?= $type->getName() ?></a></div>
                <?php if ($type2 != null): ?>
                <div class="pokemon-type-class col-2 mx-2 rounded" style="background-color: #<?= $type2->getColor() ?>" ><a href="<?= $detaillink ?>"><?= $type2->getName() ?></div>
                <?php endif; ?>
                <div class="col"></div>
            </div>
        </div>
        <h5>Statistiques</h5>
        <div class="container">
            <div class="row stats-detail">
                <div class="col-2 text-height">
                    <p>PV</p>
                </div>
                <div class="col-1 text-height">
                    <p><?= $detail->getPv() ?></p>
                </div>
                <div class="col-9">
                    <div class="progress bg-dark bar-height">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?= $detail->getPercent($detail->getPv())?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row stats-detail">
                <div class="col-2 text-height">
                    <p>Attaque</p>
                </div>
                <div class="col-1 text-height">
                    <p><?= $detail->getAttaque() ?></p>
                </div>
                <div class="col-9">
                    <div class="progress bg-dark bar-height">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?= $detail->getPercent($detail->getAttaque())?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row stats-detail">
                <div class="col-2 text-height">
                    <p>Defense</p>
                </div>
                <div class="col-1 text-height">
                    <p><?= $detail->getDefense() ?></p>
                </div>
                <div class="col-9">
                    <div class="progress bg-dark bar-height">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?= $detail->getPercent($detail->getDefense())?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row stats-detail">
                <div class="col-2 text-height">
                    <p>Atk spé</p>
                </div>
                <div class="col-1 text-height">
                    <p><?= $detail->getAttaque_spe() ?></p>
                </div>
                <div class="col-9">
                    <div class="progress bg-dark bar-height">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?= $detail->getPercent($detail->getAttaque_spe())?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row stats-detail">
                <div class="col-2 text-height">
                    <p>Def spé</p>
                </div>
                <div class="col-1 text-height bar-height">
                    <p><?= $detail->getDefense_spe() ?></p>
                </div>
                <div class="col-9">
                    <div class="progress bg-dark bar-height">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?= $detail->getPercent($detail->getDefense_spe())?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row stats-detail">
                <div class="col-2 text-height">
                    <p>Vitesse</p>
                </div>
                <div class="col-1 text-height">
                    <p><?= $detail->getVitesse() ?></p>
                </div>
                <div class="col-9">
                    <div class="progress bg-dark bar-height">
                        <div class="progress-bar progress-bar-striped bg-warning" role="progressbar" style="width: <?= $detail->getPercent($detail->getVitesse())?>%" aria-valuemin="0" aria-valuemax="100"></div>
                    </div>
                </div>
            </div>
        </div>
        


    </div>
  </div>
  <div><a href="<?= $router->generate('home') ?>" class="nav-link active text-white text-center">Revenir à la liste</a></div>
</div>