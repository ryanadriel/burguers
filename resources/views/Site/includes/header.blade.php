<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--=============== FAVICON ===============-->
    <link rel="shortcut icon" href="{{ url('Site/images/favicon.png') }}" type="image/x-icon">

    <!--=============== REMIXICONS ===============-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.2.0/remixicon.min.css" />

    <!--=============== CSS ===============-->
    <link rel="stylesheet" href="{{ url('Site/css/style.css') }}" />

    <title>Burguer</title>
</head>
<body>
    <!--==================== HEADER ====================-->
    <header class="header" id="header">
        <nav class="nav container">
            <a href="#" class="nav__logo">
                <div>
                    <img src="{{ url('Site/images/logo-burger.svg') }}" alt="image" />
                </div>
                Burguer
            </a>

            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li>
                        <a href="#home" class="nav__link">Home</a>
                    </li>
                    <li>
                        <a href="#recipe" class="nav__link">Receita</a>
                    </li>
                    <li>
                        <a href="#popular" class="nav__link">Famosos</a>
                    </li>
                    <li>
                        <a href="#delivery" class="nav__link">Delivery</a>
                    </li>
                    <li>
                        <a href="#contact" class="nav__link">Contato</a>
                    </li>
                </ul>

                <!-- Close button -->
                <div class="nav__close" id="nav-close">
                    <i class="ri-close-large-line"></i>
                </div>
            </div>
            <!-- Toggle button -->
            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-apps-2-fill"></i>
            </div>
        </nav>
    </header>
