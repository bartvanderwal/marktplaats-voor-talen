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
        <title>Welkom - OnStage</title>
    </head>
    <body>
        <header>
            <nav>
                <ul>
                    <li class="logo"><a href="index.html"><img src="wp-content/themes/onstage/assets/plaatjes/on-stage-logo.png" alt="On Stage" width="100px"></a></li>
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
            <h1>Welkom bij OnStage!</h1>
        </header>
        <main>
            <p>Vinden en gevonden worden, meld je aan voor de marktplaats voor jong en oud talent.</p>    
            <section class="cards alles">
                <article class="card">
                    <section class="card-body">
                        <h5 class="card-title"><i class="fas fa-building"></i> Data gedreven de energietransitie te lijf</h5>
                        <p class="card-text">Het team System Management bouwt aan IT oplossingen om Liander steeds beter te laten omgaan met de vele veranderingen door de Energietransitie. Als één van de initiatieven bouwt dit team aan applicaties om meetdata en events om te zetten naar slimme en geautomatiseerde bedrijfsprocessen. Binnen deze opdracht zul jij dus voor verschillende uitdagingen komen te staan op zowel technisch als ook functioneel niveau. Je zult hier met verschillende belanghebbende moeten afstemmen wat er precies functioneel benodigd is maar ook hoe de verschillende componenten technisch op elkaar aansluiten. Je zal hierbij natuurlijk ondersteund worden door een multiskilled team waar je onderdeel van uit zal maken zodat jij ook echt kan ervaren hoe het is om binnen Alliander werkzaam te zijn.</p>
                        <img src="<?= get_template_directory_uri() . "/assets/fotos/op-de-han-crop-klein.png" ?>" alt="op de HAN">
                        <a href="onderwijs-detail.html" class="btn btn-secondary">Bekijk <i class="fas fa-angle-right"></i></a>
                    </section>
                </article>
                <article class="card">
                    <section class="card-body">
                        <h5 class="card-title"><i class="fas fa-graduation-cap"></i> Max Brugman</h5>
                        <p class="card-text">
                            De enorme uitdaging waar Alliander de komende jaren aan gaat werken spreekt mij ontzettend aan. Ik heb tijdens mijn opleiding veel kennis opgedaan op het gebied van datascience en Artificial Intelligence. Ik zou tijdens mijn afstudeerstage graag willen werken aan machine learning toepassingen, om delen van het energienet beter te kunnen benutten.
                        </p>
                        <a href="#" class="btn btn-primary">Bekijk <i class="fas fa-angle-right"></i></a>
                    </section>
                </article>
                <article class="card">
                    <section class="card-body">
                        <h5 class="card-title"><i class="fas fa-building"></i> De energie data broker</h5>
                        <p class="card-text">Het Databrokers team faciliteert heel Alliander in een variatie aan actuele dataproducten. Bij deze opdracht zul je simultaan werken aan de doorontwikkeling van het Alliander API framework en zult de kennis hiervan en de toepassing over brengen naar de teams die deze data gaan gebruiken.
                        </p>
                        <a href="https://www.hva.nl/" class="btn btn-secondary">Bekijk <i class="fas fa-angle-right"></i></a>
                    </section>
                </article>
            </section>
        </main>
        <footer>&copy; Team 21 - Marktplaats voor Talent & Alliander & HAN - november 2021</footer>
    </body>
</html>