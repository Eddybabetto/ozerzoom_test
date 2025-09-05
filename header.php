<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?php 
            if(!isset($title) || $title == "") {
                echo "Ozerzoom | The best sunglasses in the world."; 
            } else {
                echo $title;
            }
        ?>
    </title>

    <meta name="description" content="
        <?php
            if(!isset($description) || $description == "") {
                echo "Lorem ipsum dolor sit amet."; 
            } else {
                echo $description;
            }
        ?>
    ">

    <!-- GOOGLE FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Quicksand:wght@300..700&display=swap"
        rel="stylesheet">

    <!-- BOOTSTRAP CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!-- HEADER -->
    <div class="header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <!-- inizio 1 colonna -->
                    <div class="col-4 col-md-6">
                        <div class="logo float-start">
                            <h4>
                                <a href="index.html">OzerZoom</a>
                            </h4>
                        </div>
                    </div>
                    <!-- fine 1 colonna -->
                    <!-- inizio 2 colonna -->
                    <div class="col-8 col-md-6">
                        <div class="th-menu float-end">
                            <ul>
                                <li>
                                    <a href="#">ENGLISH <i class="bi bi-flag"></i></a>
                                </li>
                                <li>
                                    <a href="#">LOGIN / SIGN UP</a>
                                </li>
                                <li>
                                    <a href="#">CART (0)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- fine 2 colonna -->
                </div>
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="navbar-item">
                            <a href="index.php" class="nav-link active" aria-current="page">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="products.php" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="contacts.php" class="nav-link">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
