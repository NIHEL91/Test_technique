<div>
    
<?php
 foreach ($articles as $article) : ?>
                                                <ul class="icons">
                                                    <li>
                                                        <a href="shop-description.html" class="btn btn-primary"> <i class="fe fe-eye"> </i> </a>
                                                    </li>
                                                    <li><a href="add-product.html" class="btn btn-success"><i class="fe fe-edit"></i></a></li>
                                                    <li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-x"></i></a></li>
                                                </ul>
                                                <a href="index.php?entite=article&action=affichageArticle&idArticle=<?= $article->getId(); ?>">
                                                    <img class="card-img img-fluid ml-lg-5 mr-lg-5 mt-2 " src="../assets/images/brand/<?= $article->getImage(); ?>" alt="image">
                                                </a>
                                                <a href="index.php?entite=article&action=affichageArticle><?= $article->getImage(); ?>">
                                                </a>
                                            </div>
                                            <div class="card-body pt-0">
                                                <div class="product-content text-center">
                                                    <h1 class="title fw-bold fs-20"><a href="index.php?entite=article&action=affichageArticle"> <h1 class="title fw-bold fs-20"><?= $article->getName(); ?></a></h1>
                                                    
                                                    <div class="price"><h5><?= $article->getPrice(); ?></h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php endforeach ?>
</div>