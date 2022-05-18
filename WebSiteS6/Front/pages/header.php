<?php
    $site_url="http://localhost/WebSiteS6/Front/";
    require ('../../Front/inc/functions.php');
    $cat = getAllCategory();
    $pays = getAllPays();  
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>News 24 - Rechauffement climatique</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Bootstrap Ecommerce Template" name="keywords">
        <meta content="Bootstrap Ecommerce Template Free Download" name="description">

        <!-- Favicon -->
        <link href="<?php echo $site_url?>assets/img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">

        <!-- CSS Libraries -->
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="<?php echo $site_url?>assets/lib/slick/slick.css" rel="stylesheet">
        <link href="<?php echo $site_url?>assets/lib/slick/slick-theme.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="<?php echo $site_url?>assets/css/style.css" rel="stylesheet">
    </head>

    <body>

        <!-- Top Header Start -->
        <div class="top-header">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-md-4">
                        <div class="logo">
                            <a href="publication.php">
                                <img src="<?php echo $site_url?>assets/img/logo.png" alt="Logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-4">
                        <form action="resultat.php" method="GET">
                            <div class="search">
                                <input type="text" name="mot" placeholder="Mot">
                                <button><i class="fa fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Top Header End -->

        <!-- Header Start -->
        <div class="header">
            <div class="container">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a href="#" class="navbar-brand">MENU</a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav m-auto">
                            <a href="publication.php?ct=0" class="nav-item nav-link active">Principal</a>

                            <!-- Lien vers les catégories d'actu -->
                            <?php while ($result = mysqli_fetch_assoc($cat)){ ?>
                                <a href="publication.php?ct=<?php echo $result['idCategorie']?>" class="nav-item nav-link"><?php echo $result['nomCategorie']?></a>
                            <?php }?>

                            <div class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pays</a>
                                <div class="dropdown-menu">
                                    <?php while ($result = mysqli_fetch_assoc($pays)){ ?>
                                        <a href="contenu.php?pays=<?php echo $result['idPays']?>" class="dropdown-item"><?php echo $result['nomPays']?></a>
                                    <?php }?>
                                </div>
                            </div>
                            <a href="contact.php" class="nav-item nav-link">Contacter nous</a>
                        </div>
                    </div>
                </nav>
            </div>
        </div>