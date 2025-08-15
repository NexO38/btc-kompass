<?php 
    require __DIR__ . '../../headline.php'; 
    require __DIR__ . '../../menue.php'; 
?>
<!--3  TRANSAKTION  --> 

<div class = "content-container">
    
    <div class="content-headline">
        SENDEN UND EMPFANGEN VON BITCOIN
    </div>

    <div class="block-img-ovl-txt_container">
        <div class="block-img-ovl-txt_img">
            <img style="top: 0%;" src="images/transaktion.png" alt="Bildbeschreibung">
            </div>
        <div class="block-img-ovl-txt_text">
            <p>Bitcoin werden beim Versenden ähnlich wie in der Euro-Welt von einer Adresse auf eine andere verschoben.</p>
        </div>
    </div>

    <!--3 WALLET & BITCOIN VERSENDEN -->
<div class="block-kapitel-titel">
    WALLET & BITCOIN VERSENDEN
</div>
<div class="block-text-vorspann">
    Die Zusammenhänge sind für uns Normalsterbliche nicht ganz einfach zu durchblicken,
    Aber es ist hilfreich, sich zumindest mit den Grundlagen einmal beschäftigt zu haben,
    damit man sich im Umgang damit sicherer fühlt. 
</div>

<div class="block-text-absatz">
    Deswegen zunächst eine stark vereinfachte Darstellung der Funktionsweise und danach für Interessierte
    eine Detaillierte.
</div>
<div class="block-img-untertitel_container">
    <div style="order: 1;" class="block-img-untertitel_img">
        <img src="images/wiefunktioniertbitcoin0.png" alt="Bild">
    </div>
    <div style="order: 2;" class="block-img-untertitel_text">
        Einfache Darstellung von Wallet und einer Transaktion
    </div>
</div>

<div class="block-text-absatz">
    Grundsätzlich verwaltet deine Wallet den "Schlüsselbund" mit den Keys sowie deine Bitcoin und die Adresse, auf der sie liegen. <br>
    Das Versenden an eine andere Adresse muss mit den Keys bestätigt werden. <br>
    Der Schlüssel dazu ist geheim; nur du solltest ihn kennen!
</div>
<div class="block-text-absatz">
    Deine Adresse als auch die Zieladresse sowie die versendeten Bitcoin und die zugehörige Transaktionsnummer 
    werden in der öffentlichen Blockchain dokumentiert.
</div>

<div class="block-text-absatz">
    Im folgenden Wimmelbild wird deutlich genauer erklärt, was eine Wallet eigentlich ist und was sie tut.
</div>
    <div class="block-img-untertitel_container">
        <div style="order: 1;" class="block-img-untertitel_img">
            <img src="images/wiefunktioniertbitcoin1.png" alt="Bild">
        </div>
        <div style="order: 2;" class="block-img-untertitel_text">
            Was die Wallet verwaltet und wie eine Transaktion funktioniert
        </div>
    </div>
<div class="block-text-absatz">
    Zum Beispiel besteht der "Schlüsselbund" auf der obersten Ebene aus der <strong>Seed Phrase</strong>. 
    Sie wird am Anfang von deiner Wallet erzeugt und ist die Grundlage für alle weiteren Schlüssel.
</div>
<div class="block-text-absatz">
    Aus der Seed Phrase wird dann der <strong>Master Private Key</strong> abgeleitet. 
    </div>
<div class="block-text-absatz">
    Und jedes Mal, wenn deine Wallet für den Empfang von Bitcoin eine neue Bitcoin-Adresse generiert, 
    wird im ersten Schritt ein zugehöriger <strong>Private Key</strong> aus dem Master Key abgeleitet.
</div>
<div class="block-text-absatz">
    Aus dem privat Key wird der <strong>Public Key</strong> erzeugt und daraus schließlich die
    eigentliche <strong>Bitcoin-Adresse</strong>, der die empfangenen Bitcoin zugeordnet werden. 
    In der Blockchain erscheint sie aber erst, wenn tatsächlich Bitcoin an sie erfolgreich versendet wurde.
</div>
<div class="block-kapitel-titel">
    Transaktion
</div>
<div class="block-text-absatz">
    Wenn diese Bitcoin oder ein Teil davon weiter gesendet werden, wird eine Transaktion generiert.
    Der Input ist deine Bitcoin-Adresse, der Output die empfangende Adresse. <br>
    Dann wird die Transaktion mit dem Private Key signiert und an eine Node des Bitcoin-Netzwerk gesendet.
</div>
<div class="block-img-untertitel_container">
    <div style="order: 1;" class="block-img-untertitel_img">
        <img src="images/wiefunktionierttransaktion.png" alt="Bild">
    </div>
    <div style="order: 2;" class="block-img-untertitel_text">
        Detaillierter Ablauf einer Transaktion
    </div>
</div>
<div class="block-text-absatz">
    Diese Node überprüft, ob die Transaktion korrekt signiert und die Bitcoin wirklich vorhanden sind
    und sendet sie dann weiter ins Bitcoin-Netzwerk. Innerhalb von Sekungen verbreitet sie sich im 
    gesamten Netzwerk.
</div>
<div class="block-text-absatz">
    Dort wird sie auf jeder Node in einer Art Warteschlange für unbestätgigte Transaktionen gespeichert, dem sogenannten Mempool.
</div>
<div class="block-text-absatz">
    Jetzt kommen die Miner ins Spiel. Sie sind auch eine Node, haben einen eigenen Mempool und durchsuchen diesen
    nach Transaktionen, die sie in den nächsten Block aufnehmen wollen. 
    Dabei sortieren sie nach eigenen Kriterien, z.B. der Höhe der Transaktionsgebühr.
    Die Gebühr schwankt und ist abhängig von der Auslastung des Netzwerks und von der Stückelung deiner Transaktion. 
    Auch die Bitcoin in deiner Wallet können aus "Kleingeld" bestehen, was die Gebühr erhöht.
</div>
<div class="block-text-absatz">
    Die meisten Wallets bieten eine automatische Gebührenschätzung an, die auf aktuellen Netzwerkbedingungen basiert. 
    Einige Wallets erlauben eine individuelle Anpassung. Wenn man es sehr eilig hat, kann man die Gebühren hochsetzen,
    um schneller berücksichtigt zu werden oder absenken, wenn man genug Zeit hat.
</div>
<div class="block-text-absatz">
    Zurück zu den Minern, von denen es sehr viele gibt. Sie sind größtenteils in Mining-Pools zusammengeschlossen,
    um die Chancen des Einzelnen zu erhöhen, in der "Lotterie" zu gewinnen. <br>
    Es ist natürlich keine Verlosung. Vielmehr muss ein sehr schwieriges und rechenaufwändiges kryptographisches Rätsel
    gelöst werden (genau daher kommt der Stromverbrauch, der oft in der Kritik steht).
</div>
<div class="block-text-absatz">
    Der Schwierigkeitsgrad des Rätsels wird automatisch so eingestellt, dass im Schnitt alle 10 Minuten
    irgend ein Mining-Rechner auf der Welt das Rätsel löst. Dieser Miner erzeugt nun den neuen Block und schreibt
    die von ihm ausgewählten Transaktionen hinein. Dann sendet er den Block ans Netzwerk und alle Nodes fügen
    ihn an ihre Kopie der Blockchain.
    </div>
<div class="block-text-absatz">
    Der Miner erhält für den neuen Blcok die zugehörigen Gebühren sowie aktuell 3,25 Bitcoin. 
    Vor April 2024 waren es noch 6,5 Bitcoin. Diese Belohnung wird alle 4 Jahre halbiert und beträgt
     ab etwa April 2028 dann nur noch 1,625 Bitcoin.
</div>
<div class="block-text-absatz">
    Damit ist die Transaktion offiziell in der Blockchain gespeichert 
    und die gesendeteten Bitcoin sind der neuen Adresse zugeordnet.
</div>
<div class="block-text-absatz">
    Spannend wird es, wenn zwei Miner quasi gleichzeitig das Rätsel lösen, was selten, aber doch vorkommt.
    Z.B. 2020 und 2021. Das führt dazu, dass kurzzeitig zwei verschiedene neue Blöcke im Netz berteilt und angehängt  werden, 
    woraus de facto zwei Blockchains entstehen (ein sogenannter Soft Fork).
    Das Netzwerk löst das dadurch, dass die Mehrheit sich für eine der beiden Ketten entscheidet
    und die andere schließlich verworfen wird.
</div>
<div class="block-text-absatz">
    Weil das grundsätzlich passieren kann, gilt die Transaktion tatsächlich erst dann als endgültig sicher,
    wenn mehrere weitere Blöcke an die Blockchain geschrieben wurden (sogenannte Bestätigungen). 
</div>


            
    <!--3 NÄCHSTE SEITE -->

    <div  class="nextpage-container">
        <a href="index.php?seite=l0">
            <button>&#5125; LINKS</button>
        </a>
    </div>


    <!--2 ----- FOOTER ------- -->
    <?php
        require __DIR__ . '../../footer.php';
    ?>