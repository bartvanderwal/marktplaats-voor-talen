package nl.han.aim.mvt;

import java.util.ArrayList;
import java.util.List;
import java.util.stream.*;

import io.micronaut.http.annotation.*;

@Controller("/afstudeeropdracht")
public class AfstudeeropdrachtController {

    @Get(uri="/", produces="application/json")
    public AfstudeerOpdracht index() {
        var opdracht = new AfstudeerOpdracht();
        opdracht.titel =  "Decentralised Cloud Solutions";
        opdracht.bedrijfsnaam = "InfoSupport";
        opdracht.canonicalUrl = "https://carriere.infosupport.com/afstudeeropdrachten/decentralised-cloud-solutions/";
        opdracht.beschrijving = "De bruikbaarheid en stabiliteit van de gedecentraliseerde cloud onderzoeken. En de betrouwbaarheid ervan. Daar draait deze opdracht om. Om vervolgens een PoC te bouwen en zelf te ervaren hoe het werkt.";
        
        // Bron https://www.baeldung.com/java-init-list-one-line
        // What's in it voor hun? :)
        List<String> beloningen = Stream.of(
            "Een uitdagende afstudeeropdracht", 
            "€ 1000 vergoeding, € 500 + leaseauto of € 600 + woonruimte",
            "Professionele begeleiding",
            "Trainingen gericht op jouw afstudeertraject",
            "Sparren met andere afstudeerders en collega’s",
            "Twee vakantiedagen per maand"
        ).collect(Collectors.toList());

        // Benodigde interesse(s).
        opdracht.skills = Stream.of(
            "Blockchain",
            "Kubernetes",
            "Docker",
            "Cloud",
            "Open Source",
            "Availability",
            "High performance"
    ).collect(Collectors.toList());
        return opdracht;
    }
}