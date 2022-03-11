package nl.han.aim.mvt;

import java.util.ArrayList;
import java.util.List;
import java.util.stream.*;

import io.micronaut.http.annotation.*;

@Controller("/afstudeeropdracht")
public class AfstudeeropdrachtController {

    @Get(uri="/", produces="application/json")
    public List<AfstudeerOpdracht> index() {
        
        var opdracht1 = new AfstudeerOpdracht();
        opdracht1.titel =  "Decentralised Cloud Solutions";
        opdracht1.bedrijfsnaam = "InfoSupport";
        opdracht1.canonicalUrl = "https://carriere.infosupport.com/afstudeeropdrachten/decentralised-cloud-solutions/";
        opdracht1.beschrijving = "De bruikbaarheid en stabiliteit van de gedecentraliseerde cloud onderzoeken. En de betrouwbaarheid ervan. Daar draait deze opdracht om. Om vervolgens een PoC te bouwen en zelf te ervaren hoe het werkt.";
        
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
        opdracht1.skills = Stream.of(
            "Blockchain",
            "Kubernetes",
            "Docker",
            "Cloud",
            "Open Source",
            "Availability",
            "High performance"
        ).collect(Collectors.toList());

        var opdracht2 = new AfstudeerOpdracht();
        opdracht2.titel =  "Data gedreven de energietransitie te lijf";
        opdracht2.bedrijfsnaam = "Alliander";
        opdracht2.canonicalUrl = "https://werkenbij.alliander.com/vacature/field-engineer-ot/JR02754/";
        opdracht2.beschrijving = "Het team System Management bouwt aan IT oplossingen om Liander steeds beter te laten omgaan met de vele veranderingen door de Energietransitie. Als één van de initiatieven bouwt dit team aan applicaties om meetdata en events om te zetten naar slimme en geautomatiseerde bedrijfsprocessen. Binnen deze opdracht zul jij dus voor verschillende uitdagingen komen te staan op zowel technisch als ook functioneel niveau. Je zult hier met verschillende belanghebbende moeten afstemmen wat er precies functioneel benodigd is maar ook hoe de verschillende componenten technisch op elkaar aansluiten. Je zal hierbij natuurlijk ondersteund worden door een multiskilled team waar je onderdeel van uit zal maken zodat jij ook echt kan ervaren hoe het is om binnen Alliander werkzaam te zijn. Daarnaast is deze opdracht ook echt maatschappelijk relevant omdat het direct gerelateerd is aan de energie transitie aangezien men met deze data slimme oplossingen kan bouwen die congestie kan voorspellen en dus ook voorkomen.";

        var opdracht3 = new AfstudeerOpdracht();
        opdracht3.titel =  "Field Engineer OT";
        opdracht3.bedrijfsnaam = "Alliander";
        opdracht3.canonicalUrl = "https://werkenbij.alliander.com/vacature/field-engineer-ot/JR02754/";
        opdracht3.beschrijving = "Als Field Engineer Operationele Techniek in de regio Amsterdam Gooi houd jij je bezig met het oplossen van storingen, het beheer, onderhoud en het in bedrijfstellen van secundaire installaties binnen de energietransport en energiedistributienetten. Die zaken zijn anno nu afhankelijk van een foutloos werkende beveiligingsrelais. En precies dát wordt jouw specialisme!";
        
        return Stream.of(opdracht2, opdracht1, opdracht3).collect(Collectors.toList());
    }
}