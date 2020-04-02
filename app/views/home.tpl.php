
            <div class="row mx-0">
                <?php
                    $pokemons = $viewVars['pokemons'];

                    foreach ($pokemons as $pokemon) : ?>
                    <?php $detailLink = $router->generate('detail', ['id' => $pokemon->getId()]) ?>
                    <div class="col-lg-4 col-xl-2">
                        <div class="card border-0 text-center text-white bg-danger mb-4" id="card-background">
                            <a href="<?= $detailLink ?>" class="product-hover-overlay-link">    
                                <img src="<?= $_SERVER['BASE_URI'] ?>/assets/img/<?= $pokemon->getNumero() ?>.png" alt="Card image" class="card-img img-fluid">
                            </a>
                            <div class="card-body d-flex align-items-center">
                                <div class="w-100">
                                    <h5 class="mb-4">#<?= $pokemon->getNumero() ?> <?= $pokemon->getNom() ?></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
