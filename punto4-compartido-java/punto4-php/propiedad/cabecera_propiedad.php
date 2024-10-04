<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>HAM-LP</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link rel="stylesheet" href="lib/animate/animate.min.css"/>
        <link href="../varios/lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="../varios/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="../varios/css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="../varios/css/style.css" rel="stylesheet">
    </head>

    <body >


        <!-- Navbar & Hero Start -->
        <div class="container-fluid position-relative p-0">
        <img src="../varios/img/fondo.jpg" class="img-fluid w-100" alt="Image">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="" class="navbar-brand p-0">
                    <h1 class="text-primary">Mi Propiedad</h1>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto py-0">
                        <a href="<?php echo 'propiedad.php?usuario=' . $usuario; ?>" class="nav-item nav-link active">Mi Propiedad</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-bs-toggle="dropdown">
                                <span class="dropdown-toggle">Herramientas</span>
                            </a>
                            <div class="dropdown-menu m-0">
                                <a href="#" class="dropdown-item">Formulario Digital Catastro</a>
                                <a href="#" class="dropdown-item">Cartilla Catastro</a>
                                <a href="#" class="dropdown-item">Guía Urbana</a>
                                <a href="#" class="dropdown-item">Ayuda</a>
                            </div>
                        </div>
                        
                    </div>
                    <a href="../index.php" class="btn btn-primary rounded-pill py-2 px-4 my-3 my-lg-0 flex-shrink-0">Cerrar sesion</a>
                </div>
            </nav>
        </div>
        <!-- Navbar & Hero End -->

