# OnStage

>*Een marktplaats voor jong talent*

## Do 18-11-2021

Welkom bij 'teh code' i.k.v. Alliander's Innovathon voor team 'Markplaats voor jong Talent'.

Prototype via [Adobe XD](https://xd.adobe.com/view/1ea849ef-3de6-4013-baff-971f09dc5d1c-4bfb/).

<figure><img src="docs/energietransitie2.jpg" width="700" float="right" alt="De toekomst is groen!"><figcaption>Groen is de toekomst. De toekomst is groen! <span style="font-size: 8px;">(attributie: <a href="https://depositphotos.com/334720368/stock-photo-solar-panels-and-wind-turbine.html">depositphotos</a>)
</span></figcaption>
</figure>

## Technologie

Deze site gebruikt:

- [Bootstrap 5 componenten](https://getbootstrap.com/docs/5.1/components)
- met CSS [flexbox shizzle 😉](https://javascript.plainenglish.io/bootstrap-5-flexbox-utilities-1ddfc6182c16)

Verder beoogde Technologie:

- [Micronaut](https://micronaut.io/) voor centrale REST API ('Java voor DevOps' volgens 12factor principles + evt. [Micronaut views](https://micronaut-projects.github.io/micronaut-views/latest/guide/))
<img src="docs/micronaut-logo.png" float="right" width="100">
- [Wordpress](https://developer.wordpress.org/plugins/post-types/registering-custom-post-types/) (Jaja, the tech each true nerd loves to hate, maar een Wordpress plugin die shortcode beschikbaar stelt voor integreren opdrachten (opgeslagen in custom post type) is wel laagdrempelige instap)
<img src="docs/bootstrap-5-angular-12.png" alt="Bootstrap 5 met Angular 12 niet 13" float="right" width="200">
- [Angular](https://angular.io/) en liefst Progressive Web App (PWA) (nieuwste Angular 13 werkt out-of-the box nog niet met [Bootstrap 5](https://ng-bootstrap.github.io/#/home) merkten we) ([of toch?](https://www.youtube.com/watch?v=AJ7iaPea0hE))

## Software Architectuur

Idee is meer dan 'slechts een website-je'
![Architectuur schets](docs/architectuur-schets.jpg)
*Figuur 1*: Schets van de Software Architectuur

TODO: Verder uitwerken met bijvoorbeeld [C4](https://c4model.com/).
