<div class="container">
        <div class="row justify-content-center">
<?php

$allTypes = $viewVars['allTypes'];

foreach ($allTypes as $oneType) : ?>

<?php $elementLink = $router->generate('element', ['id' => $oneType->getId()]) ?>
        <div class="col-auto m-1 text-white rounded type-div"
        id="<?= $oneType->getId() ?>"
        style="background-color: #<?= $oneType->getColor() ?>;
        height: 3rem; line-height: 3rem; text-align: center; width : 30%" >
        <a href="<?= $elementLink ?>">
            <?= $oneType->getName() ?>
        </a>
        </div>

<?php endforeach; ?>
    </div>
</div>