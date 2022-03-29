# OnStage Wordpress theme en plugin

## A. How to run

1. Zorg dat je [Docker Desktop](https://www.docker.com/products/docker-desktop/) hebt voor Windows of Linux (download en installeert vanaf vorige link) of tenminste de Docker CLI (Linux)
2. Clone deze repository `git clone https://github.com/bartvanderwal/on-stage.git`
3. Ga naar de folder toe waarin het bestand `docker-compose.yml` staat `cd wordpress.onstage`
4. Run Wordpress lokaal  `docker compose up`
5. Surf in browser naar `http://localhost:8082`
6. De eerste keer dat je dit doet moet je WP database aanmaken en instellingen doen; zie sectie B

De eerste keer dat je dit doet moet je lang wachten totdat alle containers gedownload zijn voordat Docker deze kan runnen. Deze staan erna lokaal, dus bij volgende keer `compose up` gaat dit sneller.

## B. Database en config instellen via GUI

1. Kies Nederlands als taal
2. Verdere settings maakt niet veel uit, zoals 'ontmoedig zoekmachines...' etc, want de lokale website zet je als goed is toch niet online
3. Ga naar `plugins` en activeer de `onstage` plugin
4. Ga naar `Weergave` en stel het `onstage` theme in als de actieve
5. Voer een aantal `projecten` en `CV's` in, zodat de site iets heeft om weer te geven en je de lay-out kunt tunen.
6. Je moet hierbij ook plaatjes opnieuw uploaden. Zet nieuwe plaatjes ook in de `wp-content/themes/assets/plaatjes` folder.
7. Zet ook de `permalink' instellingen op `Berichtnaam` op de [settings page](http://localhost:8082/wp-admin/options-permalink.php) voor [SEO](https://www.searchenginejournal.com/technical-seo/url-structure/)-vriendelijke instellingen.

![image](https://user-images.githubusercontent.com/3029472/157887972-32f96587-2f54-43b5-ab10-bf4a0f6c559b.png)

## Wat opties bij problemen

Om Wordpress te runnen zonder dat je console bezet is kun je de `-d` optie gebruiken voor 'detached' mode

```bash
docker compose up -d
```

Het stoppen van container kan daarna met

```bash
docker compose down
```

Mocht je de wordpress database opnieuw willen/moeten aanmaken bij problemen of een andere reden dan moet je het volume verwijderen waar deze instaat. Dit doe je met

```bash
docker compose down --volumes
```

!!NB Pas op, hiermee verwijder je de data uit database, zoals afstudeeropdrachten in de wordpress database en wat wp config zoals welke plugin geactiveerd is en welk theme geselecteerd (het `onstage` theme natuurlijk). Dan moet je alle stappen uit bovenstaande lijstje dus opnieuw doen. En ook 

## Achtegrond over deployment naar Staging omgeving via gebruik Docker

TODO 11-3: Automatisch update staging omgeving bij push naar `main` branch van github via inregelen CI middels GitHub actions (script `deploy-staging` bevat opzet).

OnStage ontwikkelen en deployen we met Docker, dus we hanteren een container-based aanpak en volgen een DevOps mentaliteit.

Voorlopig gebruiken we voor productie(achtige) deployment een Virtual Private Server (VPS) van AIM partner Argo ICT die we zelf kunnen aanmaken via een [dashboard](https://cloud.argo-ict.net/#). Op deze VPS installeren we Docker en draaien daarin in een container de OnStage WordPress site en bijbehorende MySQL database.

We verbinden met de VPS vanaf eigen (ontwikkel) machine via ssh door het aanmaken van een extra [Docker context](https://docs.docker.com/engine/context/working-with-contexts/). Argo heeft een handleiding voor het aanmaken van de benodigde SSH key i.v.m. security. We gebruiken dan met Docker cli (die de onderliggende ssh verbinding gebruikt). Zie bijvoorbeeld [deze StackOverflow vraag voor info](https://stackoverflow.com/questions/63868735/docker-context-how-to-use-specific-ssh-key).

### Voorbeeld aanmaken context

```bash
docker context create onstage --docker "host=ssh://root@213.190.22.24"
```

Bron: [Stackoverflow](https://stackoverflow.com/questions/63868735/docker-context-how-to-use-specific-ssh-key#answer-63874993)

Dit zou moeten werken voor zowel Windows, Linux als macOS. Ik heb alleen de laatste gebruikt/getest. Hierbij speelde nog wel issue dat de gebruikte ssh-key niet zonder meer beschikbaar was na een reboot. Dit is opgelost met deze [StackExchange post](https://unix.stackexchange.com/questions/140075/ssh-add-is-not-persistent-between-reboots).

## Development container voor lokale... eh development

Lokaal gebruiken we voor ontwikkelen uiteraard dezelfde containers i.v.m. ['Dev-Prod parity'](https://12factor.net/dev-prod-parity). Maar volledige pariteit is een illusie, het blijft echter wel het streven.

Bron voor aanmaken Wordpress development Docker container (met volumes voor uit Container gemapte mappen `themes`, `plugins` en de root `html` folder.):
<https://developer.yoast.com/blog/set-up-wordpress-development-environment-in-docker/>

T.z.t. wellicht ook gebruiken van deployment container via GitHub Container Registry:
<https://docs.github.com/en/authentication/keeping-your-account-and-data-secure/creating-a-personal-access-token>

Voorlopig gebruiken we nog de standaard Wordpress en MySql containers uit Docker Hub (i.p.v. github registry).

TODO: MySQL veilig wachtwoord via Docker Secrets met Docker Swarm of Docker Compose
<https://docs.docker.com/engine/swarm/secrets/#use-secrets-in-compose>

### Onderscheid lokaal en prod ('gaps in parity')

https://stackoverflow.com/questions/36956915/how-can-i-attach-volumes-with-docker-compose-only-when-in-the-development-enviro

## Bronnen

- <https://www.youtube.com/watch?v=-h7gOJbIpmo&t=1491s> dus vanaf gegeven timestamp, maar ook verder
- <https://wphierarchy.com>
