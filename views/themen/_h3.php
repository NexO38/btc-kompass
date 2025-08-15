<?php 

require __DIR__ . '/../headline.php'; ?>

<div class="sticky-top">
  <?php require __DIR__ . '/../menue.php'; ?>
</div>

<!--2 PREISANSTIEG -->

<div class = "content-container">

    <div class="content-headline">
        ANSTIEGE DER GEHÄLTER
    </div>

    <div class="block-img-ovl-txt_container">
        <div class="block-img-ovl-txt_img">
            <img style="top: 0%;" src="images/gehaelter.webp" alt="Bildbeschreibung">
        </div>
        <div class="block-img-ovl-txt_text">
            <p>Die Anstiege der Gehälter sind verglichen mit den Preisanstiegen geringer; 
                in unteren Berufsgruppen sogar deutlich geringer.</p>
        </div>
    </div>

    <div class="block-kapitel-titel">
        2000 - 2023
    </div>

    <div class="block-text-absatz">
        Die folgenden Tabellen sind nicht wissenschaftlich fundiert und auch nicht aus einer offiziellen Publikation.
        Ich habe mithilfe ChatGPT typische Gehälter von 2000 und 2023 ermittelt und das punktuell verifiziert.
    </div>
    <div class="block-text-absatz">
        Die erste Tabelle zeigt z.B.    ganz gut die Situation von jungen Familien von damals und heute.
    </div>

    <div class="block-tabelle-container">
    <table class="block-tabelle">
        <thead>
            <tr>
                <th>Beruf</th>
                <th>Einkommen 2000</th>
                <th>Einkommen 2023</th>
                <th>Gehaltanstieg</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Verkäufer</td>
                <td>1500 - 1800 €</td>
                <td>2000 - 2500 €</td>
                <td>33 - 38 %</td>
            </tr>
            <tr>
                <td>Bankangestellter</td>
                <td>2500 - 3000 €</td>
                <td>3000 - 4500 €</td>
                <td>20 - 50 %</td>
            </tr>
            <tr>
                <td>Ingenieur</td>
                <td>3000 - 4000 €</td>
                <td>4500 - 6500 €</td>
                <td>50 - 63%</td>
            </tr>
            <tr>
                <td>Geschäftsführer</td>
                <td>7000 - 10000 €</td>
                <td>10000 - 15000 €</td>
                <td>43 - 50 %</td>
            </tr>
            </tbody>
    </table>
    </div>

    <div class="block-text-absatz">
        Eine zweite Perspektive auf das Thema ist die persönliche Gehaltsentwicklung, 
        also inklusive der höheren Gehälter aufgrund Berufserfahrung, Kompetenz oder anderer Gründe.
        Rechnet man das grob mit ein, sieht es für den einzelnen über die Zeit schon besser aus.
    </div>

    <div class="block-tabelle-container">
    <table class="block-tabelle">
        <thead>
            <tr>
                <th>Beruf</th>
                <th>Einkommen 2000</th>
                <th>2023 individuell</th>
                <th>Gehaltanstieg</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Verkäufer</td>
                <td>1500 - 1800 €</td>
                <td>2700 - 3200 €</td>
                <td>78 - 80 %</td>
            </tr>
            <tr>
                <td>Bankangestellter</td>
                <td>2500 - 3000 €</td>
                <td>5500 - 6600 €</td>
                <td>120 %</td>
            </tr>
            <tr>
                <td>Ingenieur</td>
                <td>3000 - 4000 €</td>
                <td>8200 - 11000 €</td>
                <td>175%</td>
            </tr>
            <tr>
                <td>Geschäftsführer</td>
                <td>7000 - 10000 €</td>
                <td>21500 - 30700 €</td>
                <td>207 %</td>
            </tr>
            </tbody>
    </table>
    </div>

    <div class="block-text-absatz">
        Vergleicht man diese Tabelle mit den <a href="index.php?seite=_h2" target="_blank">Preisanstiegen</a> wird schnell klar,
        wie sich die Situation insbesondere für die unteren Berufsgruppen seit 2000 verschlechtert hat.
    </div>
    <div class="block-text-absatz">
        Allerdings wird auch klar, warum Gutverdiener aus ihrer persönlichen Erfahrung 
        kein Problembewusstsein entwickeln konnten.
        Ihre persönliche Gehaltsentwicklung deckt die Preissteigerungen überwiegend gut ab. 
        Womöglich herrscht bei vielen sogar das Gefühl vor: ich kann mir mehr als früher leisten. 
        Insbesondere, weil vielleicht beide Partner häufiger berufstätig sind als früher.
    </div>

    <div class="block-text-ACHTUNG">
        Das erklärt vielleicht auch, warum gutverdienende Politiker, die sich in Gutverdienenden Kreisen bewegen,
        nicht sehen, wie sich die Situation für sehr große Teile der Bevölkerung teilweise dramatisch verschlechtert hat.             
    </div>
    
    <!--3 NÄCHSTE SEITE -->

    <div  class="nextpage-container">
    <a href="index.php?seite=_h4">
        <button>&#5125; GELDANLAGE</button>
        </a>
    </div>


    <!--2 ----- FOOTER ------- -->
    <?php
        require __DIR__ . '../../footer.php';
    ?>