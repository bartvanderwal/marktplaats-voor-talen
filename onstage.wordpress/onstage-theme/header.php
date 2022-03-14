<?php
?>
<?php
    wp_head();
?>
<!DOCTYPE html>
<html lang="nl">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/png" href="plaatjes/on-stage-logo-favicon2.png"/>
    </head>
    <body>
    <header>
        <nav>
            <div class="container">
                <ul class="d-flex align-items-center justify-content-between mx-3">
                    <li class="logo">
                        <a href="/"><img src="<?= get_theme_file_uri() ?>/assets/plaatjes/on-stage-logo.png" alt="On Stage"
                                width="100px"></a>
                    </li>
                    <li class="d-md-none nav-item dropdown nav-mobile">
                        <a class="nav-link dropdown-toggle btn btn-default" data-bs-toggle="dropdown" href="#" role="button"
                            aria-expanded="false"><i class="fas fa-bars me-3"></i>Menu</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="active dropdown-item" href="index.html">Marktplaats</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="bedrijven.html">Bedrijven</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="ervaringen.html">Ervaringen</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="">Aanmelden</a>
                            </li>
                            <li title="No login yet... :)">
                                <a  class="dropdown-item" href="https://github.com/bartvanderwal/on-stage/tree/main/docs"><i class="fas fa-user"></i> Docs</a>
                            </li>
                        </ul>
                    </li>
                    <li class="d-none d-md-block active">
                        <a href="index.html">Marktplaats</a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="bedrijven.html">Bedrijven</a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="ervaringen.html">Ervaringen</a>
                    </li>
                    <li class="d-none d-md-block">
                        <a href="">Aanmelden</a>
                    </li>
                    <li class="d-none d-md-block" title="No login yet... :)">
                        <a href="https://github.com/bartvanderwal/on-stage/tree/main/docs"><i class="fas fa-user"></i> Docs</a>
                    </li>
                </ul>
        </div>
        </nav>
    </header>