# The Pandominion Index

## Introduction

_The Pandominion Index_ is a visual storytelling of some details from M.R. Carey's science fiction duology, [Pandominion](https://www.goodreads.com/series/355318-pandominion). Shortly, scientist Hadiz Tambuwal is living on a decaying earth when she accidentally discovers the multiverse. Much of the text and organisation is inspired from details of the stories.

This project consists of two pages and a MySQL database. It utilises HTML, CSS, and PHP to implement this visual story telling. Specifically, PHP handles the backend and connects the developer to the MySQL database. HTML and CSS are used to organise, style, and display the pages. PHP was also used to iteratively create objects, such as the cards and graphs in `species.php`.

## Strucutre

It consists of two display pages:
* `map.html`, which represents our universe on the brink of destruction; it consists of:
    * A custom, non-editable checklist of events that acted as catalysts for the story and the important characters.
    * An [SVG of Africa](https://simplemaps.com/resources/svg-africa), highlighting Nigeria, where much of the story takes place. A hyperlink over the area takes you to the next page.
* `species.php`, which characterises some of the species prevalent in the Pandominion; it consists of:
    * a collection of 15 species cards, each one representing a distinct species within the Pandominion,
    * overlayed over each card is a radial graph characterising a set of five attributes for comparing species by; namely: speed, metabolism, aggression, hairyness, and motor skills.

Supporting the above pages are:
* `map.css`: animates the background and map, configures the heights and positions of elements to match siblings or parents.
* `species.css`: defines the card components, configures the hover and translation transformations for the cards.
* `radial-graph.css`: configures the graph SVG and placing the labels.
* `species` directory: contains the images for the species cards.
* `images` directory: contains the background image.

The backend includes;
* `database.php`: this creates the `Database` class used for connections; you will need to edit the attributes as per your system.
* `pando-index.sql`: SQL queries for creating the schema and loading data.


## References
SVGs
- Free Africa SVG Map, [SimpleMaps](https://simplemaps.com/resources/svg-africa)
Cards
- https://fireship.io/lessons/css-cards-animated/
- https://esahubble.org/projects/fits_liberator/fitsimages/davidedemartin_12/ (orions belt)
- https://www.codingnepalweb.com/pure-css-responsive-cards-design/
- https://www.w3schools.com/howto/howto_css_image_overlay.asp
Graphs
- https://pote-chil.com/css-stock/en/radar-chart#2

