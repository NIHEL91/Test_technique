
<!doctype html>
<html lang="en" dir="ltr">

<head>

    <!-- META DATA -->
    <meta charset="UTF-8">
    <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
    <meta name="description" content="La maladie rare Gougerot sjoren">

    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="../assets/images/brand/favicon.ico">

    <!-- TITLE -->
    <title>Le syndrome sec Gougerot</title>

    <!-- BOOTSTRAP CSS -->
    <link id="style" href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- STYLE CSS -->
    <link href="../assets/css/style.css" rel="stylesheet">

    <!-- Plugins CSS -->
    <link href="../assets/css/plugins.css" rel="stylesheet">

    <!--- FONT-ICONS CSS -->
    <link href="../assets/css/icons.css" rel="stylesheet">

    <!-- INTERNAL Switcher css -->
    <link href="../assets/switcher/css/switcher.css" rel="stylesheet">
    <link href="../assets/switcher/demo.css" rel="stylesheet">
</head>

<body class="app sidebar-mini ltr light-mode ">
    <!-- PAGE -->
    <div class="page ">
        <div class="page-main mb-4 ">

            <!-- app-Header -->
            <div class="app-header header sticky">
                <div class="container-fluid main-container">
                    <div class="d-flex">
                        <a aria-label="Hide Sidebar" class="app-sidebar__toggle" data-bs-toggle="sidebar" href="javascript:void(0)"></a>
                        <!-- sidebar-toggle-->
                        <a class="logo-horizontal " href="index.php">
                            <img src="../assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/images.jpeg" class="header-brand-img light-logo1"
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                       
                        <div class="d-flex order-lg-2 ms-auto header-right-icons ">
                            <div class="navbar navbar-collapse responsive-navbar p-0">
                                <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
                                    <div class="d-flex order-lg-2">
                                        <!-- CART -->
                                        <div class="dropdown  d-flex shopping-cart">
                                            <a class="nav-link icon text-center" data-bs-toggle="dropdown">
                                                <i class="fe fe-shopping-cart"></i><span class="badge bg-secondary header-badge">4</span>
                                            </a>
                                        </div>
                                        
                                    
                                        <!-- Profil -->
                                        <div class="dropdown d-flex profile-1 ">
                                            <a href="javascript:void(0)" data-bs-toggle="dropdown" class="nav-link leading-none d-flex">
                                                <img src="../assets/images/brand/avatar.avif" alt="profile-user"
                                                    class="avatar  profile-user brround cover-image">
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <?php if (isset($_SESSION['lastname'])) { ?>
                                                            <h5 class="text-dark mb-0 fs-14 fw-semibold">Bonjour : <?php echo $_SESSION['lastname']; ?></h5>
                                                            <span>
                                                                <a href="index.php?entite=users&action=logout" class="dropdown-item">
                                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Déconnexion
                                                                </a>
                                                            </span>
                                                            <?php if ($_SESSION['role'] == 'admin') { ?>
                                                                <h5 class="text-dark mb-0 fs-14 fw-semibold">Admin</h5>
                                                            <?php } ?>
                                                            <div class="col-xl-12">
                                                                <div class="card p-0">
                                                                    <div class="card-body p-4">
                                                                        <div class="row">
                                                                            <div class="col-xl-4 col-lg-4 col-md-4 col-sm-4">
                                                                                admin
                                                                            </div>
                                                                            <div class="col-xl-3 col-lg-12">
                                                                                <a href="add-product.html" class="btn btn-primary btn-block float-end my-2"><i class="fa fa-plus-square me-2"></i>Ajouter un article</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        <?php } else { ?>
                                                            <span>Déjà abonné :
                                                                <a href="index.php?entite=users&action=connect" class="btn btn-green btn-sm  mr-3">Connexion</a>
                                                            </span>
                                                            <br><br>
                                                            <span>
                                                                <a href="index.php?entite=users&action=createUser" class="btn btn-warning btn-sm">Créer un compte</a>
                                                            </span>
                                                        <?php } ?>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                                                <div class="drop-heading">
                                                    <div class="text-center">
                                                        <h5 class="text-dark mb-0 fs-14 fw-semibold">php</h5>
                                                        <small class="text-muted">user/ Admin php </small>
                                                    </div>
                                                </div>
                                                <div class="dropdown-divider m-0"></div>
                                                <a class="dropdown-item" href="compte.php">
                                                    <i class="dropdown-icon fe fe-user"></i> Profil
                                                </a>
                                                <a class="dropdown-item" href="compte.php">
                                                    <i class="dropdown-icon fe fe-mail"></i> articles acheté (php)
                                                    <span class="badge bg-danger rounded-pill float-end">nbr d'article acheté (ph)</span>
                                                </a>
                                               
                                                <a class="dropdown-item" href="index.php?entite=users&action=logout">
                                                    <i class="dropdown-icon fe fe-alert-circle"></i> Déconnexion
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /app-Header -->

            <!--logo-->
            <div class="sticky">
                <div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
                <div class="app-sidebar">
                    <div class="side-header">
                        <a class="header-brand1" href="index.php">
                            <img src="../assets/images/brand/logo-white.png" class="header-brand-img desktop-logo" alt="logo">
                            <img src="../assets/images/brand/icon-white.png" class="header-brand-img toggle-logo"
                                alt="logo">
                            <img src="../assets/images/brand/images.png" class="header-brand-img light-logo" alt="logo">
                            <img src="../assets/images/brand/images.png" class="header-brand-img light-logo1 "
                                alt="logo">
                        </a>
                        <!-- LOGO -->
                    </div>
                    <div class="main-sidemenu ">
                      
                        <ul class="side-menu">
                          
                            <li class="slide">
                                <a class="side-menu__item has-link" data-bs-toggle="slide" href="index.php"><i
                                        class="side-menu__icon fe fe-home"></i><span
                                        class="side-menu__label">Accueil </span></a>
                            </li>
                           
                            <li class="slide">
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label">À propos de la maladie </span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
                                
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label">Ressources et informations  </span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a>
                                
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label"> Diagnostiquer et traiter </span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a> 
                                
                                <a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)"><i
                                        class="side-menu__icon fe fe-slack"></i><span
                                        class="side-menu__label"> Soutien et témoignages</span><i
                                        class="angle fe fe-chevron-right"></i>
                                </a> 
                            </li>
                        </ul>
                    </div>
                </div>
            </div>  
           
        </div>
    
</header>
<div class="main-content app-content mt-0">
    <?php include $vue . '.php'; ?>
</div>
 <!-- FOOTER -->
 <footer class="footer">
            <div class="container">
                <div class="row align-items-center flex-row-reverse">
                    <div class="col-md-12 col-sm-12 text-center">
                        Copyright © <span id="year"></span> <a href="javascript:void(0)"></a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0)"> Nihel </a>
                    </div>
                </div>
            </div>
        </footer>
        
</body>

</html>
<!-- FOOTER CLOSED -->