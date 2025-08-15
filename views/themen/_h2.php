<?php 

require __DIR__ . '/../headline.php'; ?>

<div class="sticky-top">
  <?php require __DIR__ . '/../menue.php'; ?>
</div>

<!--2 PREISANSTIEG -->

<div class = "content-container">

    <div class="content-headline">
        WERTVERFALL des EURO
    </div>

    <div class="block-img-ovl-txt_container">
        <div class="block-img-ovl-txt_img">
            <img style="top: 0%;" src="images/wertverfall.webp" alt="Bildbeschreibung">
        </div>
        <div class="block-img-ovl-txt_text">
            <p>Die Preissteigerung (Inflation) ist gefühlt höher als uns von Medien und Politik vermittelt wird. 
                <br>Hier ist ein Versuch, das zu greifen.</p>
        </div>
    </div>

    <div class="block-kapitel-titel">
        2000 - 2023
    </div>

    <div class="block-text-absatz">
        Die folgende Tabelle ist nicht wissenschaftlich fundiert und auch nicht aus einer offiziellen Publikation.
        Ich habe mithilfe ChatGPT typische Preise von 2000 und 2023 ermittelt und das punktuell verifiziert.
        Die prozentuale Steigerung ist teilweise ernüchternd hoch.
    </div>

    <div class="block-tabelle-container">
    <table class="block-tabelle">
        <thead>
            <tr>
                <th>Produkt</th>
                <th>Preis 2000</th>
                <th>Preis 2023</th>
                <th>Preisanstieg</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Miete pro m<sup>2</sup></td>
                <td>5,00 - 6,00 €</td>
                <td>8,00 - 15,00 €</td>
                <td>60 - 150 %</td>
            </tr>
            <tr>
                <td>Strom pro kWh</td>
                <td>0,13 - 0,14 €</td>
                <td>0,40 - 0,45 €</td>
                <td>207 - 220 %</td>
            </tr>
            <tr>
                <td>Wasser pro m<sup>3</sup></td>
                <td>1,50 €</td>
                <td>2,50 - 3,00 €</td>
                <td>67 - 100 %</td>
            </tr>
            <tr>
                <td>Benzin pro Liter</td>
                <td>0,56 - 0,61 €</td>
                <td>1,70 - 2,00 €<e</td>
                <td>203 - 228 %</td>
            </tr>
            <tr>
                <td>Auto VW Golf</td>
                <td>15000 - 18000 €</td>
                <td>25000 - 35000 €<e</td>
                <td>67 - 95 %</td>
            </tr>
            <tr>
                <td>Brot</td>
                <td>1,00 - 1,50 €</td>
                <td>3,00 - 4,00 €</td>
                <td>200 - 167 %</td>
            </tr>
            <tr>
                <td>Milch pro Liter</td>
                <td>0,55 - 0,60 €</td>
                <td>1,20 - 1,50 €</td>
                <td>118 - 150 %</td>
            </tr>
            <tr>
                <td>Äpfel pro kg</td>
                <td>1,50 - 2,50 €</td>
                <td>2,50 - 3,50 €</td>
                <td>67 - 40 %</td>
            </tr>
            <tr>
                <td>Möhren pro kg</td>
                <td>0,70 - 1,00 €</td>
                <td>1,20 - 1,80 €</td>
                <td>70 - 80 %</td>
            </tr>
        </tbody>
    </table>
    </div>

    <div class="block-text-absatz">
        Die Preise sind danach zwischen 60 und 228% gestiegen.
        Anders herum gedacht hat 1,00 € aus dem Jahr 2000 heute nur noch einen Wert von 0,30 - 0,60 €.
        Das wäre verkraftbar, wenn die Gehälter ähnlich gestiegen wären. Schaun wir mal:
    </div>

    <!--3 NÄCHSTE SEITE -->

    <div  class="nextpage-container">
    <a href="index.php?seite=_h3">
        <button>&#5125; GEHALTANSTIEG</button>
        </a>
    </div>



    <!--2 ----- FOOTER ------- -->
    <?php
        require __DIR__ . '../../footer.php';
    ?>
