
   <!-------les articles --------->
   <div class="tab-content">
                            <div class="tab-pane active" id="tab-11">
                                <div class="row">
                                    <div class="col-md-6 col-xl-4 col-sm-6">
                                        <div class="card">
                                            <div class="product-grid6">
                                                <div class="product-image6 p-5">
                                                    <ul class="icons">
                                                        <li>
                                                            <a href="shop-description.html" class="btn btn-primary"> <i class="fe fe-eye"> </i> </a>
                                                        </li>
                                                        <li><a href="add-product.html" class="btn btn-success"><i class="fe fe-edit"></i></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-danger"><i class="fe fe-x"></i></a></li>
                                                    </ul>
                                                    <a href="shop-description.html">
                                                        <img class="img-fluid br-7 w-100" src="../assets/images/products/8.jpg" alt="img">
                                                    </a>
                                                </div>

                                                <div class="card-body pt-0">
                                                    
                                                </div>
                                                <div class="card-footer text-center">
                                                    <a href="cart.html" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart mx-2"></i>ajouter au panier </a>
                                                    <a href="wishlist.html" class="btn btn-outline-primary mb-1"><i class="fe fe-heart mx-2 wishlist-icon"></i>Premium</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-footer text-center">
                                        <a href="cart.html" class="btn btn-primary mb-1"><i class="fe fe-shopping-cart mx-2"></i>Add to cart</a>
                                        <a href="wishlist.html" class="btn btn-outline-primary mb-1"><i class="fe fe-heart mx-2 wishlist-icon"></i>Add to wishlist</a>
                                    </div>
                                </div>
                            </div>
                        </div><div class="product-content text-center">
                                                    <?php foreach ($articles as $article) : ?>

                                                        <h1 class="title fw-bold fs-20"><?= $article->getName(); ?>
                                                            <a href="index.php?entite=article&action=see&idArticle=<?= $article->getId(); ?>">
                                                                <img class="card-img img-fluid ml-lg-5 mr-lg-5 mt-2 " src="../public/img/<?= $article->getImage(); ?>" alt="image">
                                                            </a>
                                                        </h1>
                                                        <div class="price"><h5><?= $product->getPrice(); ?>€<span class="ms-4">php</span>

                                                        

                                                        <div class="mb-2 text-warning">
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star text-warning"></i>
                                                            <i class="fa fa-star-half-o text-warning"></i>
                                                            <i class="fa fa-star-o text-warning"></i>
                                                        </div>
                                                        </div>
                                                    
                                                    <?php endforeach ?>
</div>