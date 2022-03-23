# How to run

DIt is de originele opzet van enkel HTML, maar nog steeds bruikbaar voor testen

## Run via

Aannemende dat je NodeJS lokaal hebt geinstalleerd kun je deze runnen/testen vi

```bash
cd onstage-html-prototype
npx http-server .

Starting up http-server, serving .
Available on:
  http://127.0.0.1:8083
  http://192.168.178.70:8083
Hit CTRL-C to stop the server
```

Surf lokaal naar <http://localhost:8080`> of evt. andere aangegeven poort.

Let wel op dat de Node `http-server` app soms zaken lokaal cached, zodat je `ctrl+F5` moet gebruiken in browser na aanpassing van `.css` in plaats van enkel F5 voor een refresh.

Alternatief is voor http-server is natuurlijk gewoon dubbelklikken op de `.html` in de verkenner. Maar dat geeft soms problemen (zeker als we tzt naar JavaScript/React gaan upgraden voor een SPA'tje).