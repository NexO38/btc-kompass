<?php 
    require __DIR__ . '../../headline.php'; 
    require __DIR__ . '../../menue.php'; 
?>
<!--1 KAUFEN -->

<div class = "content-container">
    
    <div class="content-headline">
        ÜBERSICHT: VER-/KAUFEN
    </div>

    <div class="block-img-ovl-txt_container">
        <div class="block-img-ovl-txt_img">
            <img style="top: 0%;" src="images/kaufen.webp" alt="Bildbeschreibung">
            <div class="block-img-ovl-txt_text">
                <p>
                    Muss ich einen ganzen Bitcoin kaufen? <br>
                    Wie kaufe ich eigentlich Bitcoin? <br>
                    Und kann ich die sicher auch wieder verkaufen?
                </p>
            </div>
        </div>
    </div>
    

    <div class="block-kapitel-titel">
        BITCOIN UND SATOSHI
    </div>
    <div class="block-text-absatz">
        Der Bitcoin ist unterteilt in sogenannte Satoshi. Das ist wie Euro und Cent. <br>
        1 Bitcoin = 100.000.000 Satoshi. <br>
        Du kannst also eine nahezu beliebig kleine Menge kaufen, verkaufen, empfangen oder senden.
    </div>

    <div class="block-kapitel-titel">
        KAUFEN UND VERKAUFEN
    </div>
    <div class="block-text-absatz">
        Kauf und Verkauf von Bitcoin findet an sogenannten Krypto-Börsen statt, von denen es wirklich viele gibt.
        Die wahrscheinlich größte und etablierteste ist Coinbase. Ich empfehle eher eine Börse aus dem europäischen Raum. <br>
        Mein persönlicher Favorit ist BSDEX von der klassischen Stuttgarter Börse.
        Du eröffnst einen Account (wofür man sich quasi bei allen Börsen verifizieren muss).
        Dann überweist du Euros auf das zugehörige Konto und kannst quasi sofort Bitcoin kaufen und auch wieder verkaufen.
        Die Euro kannst du dann wieder auf dein Girokonto überweisen.
    </div>
    <div class="block-kapitel-titel">
        EMPFANGEN & VERSENDEN0
    </div>
    <div class="block-text-absatz">
        Für das Versenden von Bitcoin aus deiner Wallet benötigst du die Zial-Adresse.
        Etwa alle 10 Minuten entsteht ein neuer Block auf der Blockchain, in den die Transaktionen geschrieben werden.
        Bei hohem "Verkehr" kann es auch schon mal länger dauern.
        Sobald deine Transaktion in einen Block geschrieben wurde ist sie vollzogen. Die Bitcoin sind nun der Zieladresse zugeordnet. 
    </div>

    <!--3 NÄCHSTE SEITE -->

    <div  class="nextpage-container">
        <a href="index.php?seite=k1">
            <button>&#5125; KAUFEN</button>
        </a>
    </div>



    <!--2 ----- FOOTER ------- -->
    <?php
        require __DIR__ . '../../footer.php';
    ?>
