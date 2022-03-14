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
            <?php wp_nav_menu(
                array(
                    'menu' => 'primary',
                    'container' => '',
                    'theme_location' => 'primary',
                    'items_wrap' => '<ul id="" class=""'
                )
            )
            ?>
            <nav>
                <ul>
                    <li class="logo"><a href="/"><img src="<?= get_theme_file_uri() ?>/assets/plaatjes/on-stage-logo.png" alt="On Stage" width="100px"></a></li>
                    <li class="menu">
                        <label for="menu"><i class="fas fa-hamburger"></i> Menu</label>
                        <input type="checkbox" id="menu">
                    </li>
                    <li class="selected"><a href="index.html">Marktplaats</a></li>
                    <li><a href="bedrijven.html">Bedrijven</a></li>
                    <li><a href="ervaringen.html">Ervaringen</a></li>
                    <li><a href="">Aanmelden</a></li>
                    <li title="No login yet... :)"><a href="https://github.com/bartvanderwal/on-stage/tree/main/docs"><i class="fas fa-user"></i> Docs</a></li>
                </ul>
            </nav>
        </header>