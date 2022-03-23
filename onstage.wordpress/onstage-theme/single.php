
<?php get_header(); ?>
    <main>
        <h1>Dynamisch</h1>
        <div class="row">
            <div class="col-8">
                <h1><?= the_title() ?></h1>
            </div>
            <div class="col-4 text-right">
                <button class="btn btn-primary">Reageer! <i class="fas fa-angle-right"></i></button>
            </div>
        </div>
        <div class="row">
            <div class="col-12 lead">
                    <?= the_content() ?>
            </div>
        </div>
        <div class="row">
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3>Onderwerpen</h3>
                        <ul>
                            <li>Energietransitie</li>
                            <li>Data management</li>
                            <li>Software development</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100 bg-green">
                    <div class="card-body">
                        <i class="fas fa-icon-clock"></i>
                        <div>6 maanden</div>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card h-100">
                    <div class="card-body">
                        <h3>Competenties</h3>
                        <ul>
                            <li>Software ontwikkeling</li>
                            <li>Data Engineering</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="card h-100">
                    <div class="card-body">
                        <h3>Organisatie</h3>
                        <p>Deze stage vindt plaats bij Alliander binnen het team Databrokers.</p>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <div class="card h-100 bg-lightgreen">
                    <div class="card-body">
                        <div>€ 500,-</div>
                        <div>per maand + laptop in bruikleen + reiskosten</div>
                    </div>
                </div>
            </div>
        </div>

        <hr />
        <h1>Statisch</h1>
        <div class="container">
            <div class="row d-flex align-items-center mb-3">
                <div class="col-12 col-sm-8">
                    <h1>De energie Data broker</h1>
                </div>
                <div class="col-12 col-sm-4 text-sm-end">
                    <a href="#" class="btn btn-primary mt-3">Reageer! <i class="fas fa-angle-right ms-2"></i></a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <p class="lead">Ben jij onze nieuwe Energie Data Broker? Bij deze opdracht ga je aan de slag binnen bij het
                        team
                        Databrokers. Onze ambitie is om ervoor te zorgen dat iedereen (binnen en buiten Alliander) beschikt over
                        actuele, correcte en complete assetdata en nettopologie volgens een heldere standaard, zodat we onze
                        doelen
                        op het gebied van maakbaarheid en efficiency kunnen realiseren.</p>
                </div>
                <div class="col-12">
                    <h2>Wat ga JIJ doen?</h2>
                </div>
                <div class="col-12">
                    <p>Wij zoeken een gedreven afstudeerder die zich wil verdiepen in het vak van DevOps engineer / Software
                        Developer en daarbij kennis wil opdoen van Openshift en Kubernetes. Het Databrokers team faciliteert
                        heel
                        Alliander in een variate aan actuele dataproducten. Bij deze opdracht zul je simultaan werken aan de
                        doorontwikkeling van het Alliander API framework en zult de kennis hiervan en de toepassing overbrengen
                        naar
                        de teams die deze data gaan gebruiken.</p>
                </div>
                <div class="col-12">
                    <p>Daarnaast kom je terecht in een warme en collegiale omgeving, waar vragen stellen gewaardeerd wordt, op
                        elk
                        vlak van de techniek waar je maar interesse in hebt. Natuurlijk zorgen we ervoor dat je goede
                        begeleiding
                        krijgt. Je kunt ook altijd bij mentor en collega's terecht om lastige vraagstukken samen op te lossen.
                    </p>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Onderwerpen</h5>
                            <ul class="list-details mb-0">
                                <li class="list-details-item">Energietransitie</li>
                                <li class="list-details-item">Data management</li>
                                <li class="list-details-item">Software development</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card bg-green border-0 h-100">
                        <div class="card-body text-white d-flex align-items-center justify-content-center">
                            <h1 class="text-white my-4">
                                <i class="far fa-clock fa-xs me-2"></i>6 maanden
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Competenties</h5>
                            <ul class="list-details mb-0">
                                <li class="list-details-item">Software ontwikkeling</li>
                                <li class="list-details-item">Data Engineering</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <div class="card h-100">
                        <div class="card-body">
                            <h5 class="card-title">Organisatie</h5>
                            <p>Deze stage vindt plaats bij Alliander binnen het team Databrokers.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 mb-3">
                    <div class="card bg-lightgreen border-0 h-100">
                        <div class="card-body text-white d-flex align-items-center justify-content-center">
                            <div class="text-center">
                                <h1 class="text-white mt-3 mb-2">€ 500,-</h1>
                                <div class="mb-3">per maand + laptop in bruikleen + reiskosten</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <main>
<?php get_footer(); ?>