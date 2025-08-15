<?php 
    require __DIR__ . '../../headline.php'; 
    require __DIR__ . '../../menue.php'; 
?>
<!--3  BITCOIN BLOCKCHAIN  -->

<div class = "content-container">
    
    <div class="content-headline">
    BITCOIN BLOCKCHAIN
    </div>

    <div class="block-img-ovl-txt_container">
        <div class="block-img-ovl-txt_img">
        <img style="top: 0%;" src="images/blockchain.webp" alt="Bildbeschreibung">
        <div class="block-img-ovl-txt_text">
           <p> Die Blockchain enthält unveränderlich alle bisherigen Transaktionen. 
            Neue Transaktionen werden in weiteren Blöcken an die Blockchain gehängt.</p>
        </div>
        </div>
    </div>
    

    <div class="block-kapitel-titel">
        BLOCKCHAIN
    </div>
    <div class="block-kapitel-titel">
        BLOCKCHAIN-ANALYSE
    </div>
    <div class="block-text-absatz">
        Auf der Seite <a href="https://mempool.space/de/" target="_blank">Mempool</a> kann man die komplette Blockchain analysieren.
        Sie zeigt die letzten erzeugten Blöcke auf der rechten Seite und die bevorstehenden links.
    </div>

    <div class="block-img-untertitel_container">
        <div style="order: 1;" class="block-img-untertitel_img">
            <img src="images/blockchain-mempool.png" alt="Bild">
        </div>
        <div style="order: 2;" class="block-img-untertitel_text">
            Darstellung der Blockchain
        </div>
    </div>

    <div class="block-text-absatz">
        Nehmen wir mal den Block Nummer 
        <a href="https://mempool.space/de/block/000000000000000000008a174d15733cff4b29ac8d523310fda9bf6e22391319" target="_blank">856220</a>.
        Klickt man auf den Block, werden alle in ihm gespeicherten Transaktionen gelistet (in dem Fall 3012 Transaktionen).
    </div>
    <div class="block-text-absatz">
        Die oberste Transaktion zeigt die "Belohnung" an, die der Miner bekommt, der den Block "gefunden" hat 
        (siehe auch <a href="https://btc.nexo38.de/index.php?seite=t1" target="_blank">Mining</a>).
    </div>        
    <div class="block-text-absatz">
        Klickt man auf die zweite Transaktion 
        <a href="https://mempool.space/de/tx/c9342b57c3e75595be1687d0700725f628cc5cfa3514e75fd0e287d739903714" target="_blank">Transaktionens-ID</a>,
        erhält man ein Flussdiagramm und darunter die darin enthaltenen Inputs und Outputs.
    </div>
    <div class="block-img-untertitel_container">
        <div style="order: 1;" class="block-img-untertitel_img">
            <img src="images/transaktion.png" alt="Bild">
        </div>
        <div style="order: 2;" class="block-img-untertitel_text">
            Eine Transaktion im Detail
        </div>
    </div>
    <div class="block-text-absatz">
        Links sieht man die Inputs, also die Beträge, die aus der eigenen Wallet in die Transaktion fließen. <br>
        rechts die Outputs, also die Beträge, die an unterschiedliche Adressen übertragen werden. <br>
        Ein grüner Pfeil neben den Adressen zeigt an, das der Betrag aktuell noch der Adresse zugeordnet ist (also ein unspent  transaction output; UTXO). <br>
        Ist der Pfeil rot, befindet sich der Betrag nicht mehr auf der Zieladresse. 
    </div>
    <div class="block-text-absatz">
        
    </div>
    <div class="block-img-untertitel_container">
        <div style="order: 1;" class="block-img-untertitel_img">
            <img src="images/transaktion-mempool.png" alt="Bild">
        </div>
        <div style="order: 2;" class="block-img-untertitel_text">
            Eine Transaktion
        </div>
    </div>
        <div class="block-text-zitat">
            Bitcoin-Transaktionen auf einer Kryptobörse oder auch innerhalb des Lighting-Netzwerk finden keinen Niederschlag in der Blockchain.
            Sie sind nur auf der Plattform selber nachvollziehbar ... so sie denn noch existiert. Erst wenn BTC auf eine andere Wallet
            versendet werden, sieht man das in der Blockchain.
        </div>

    <div class="block-kapitel-titel">
        Wie funktioniert eine Transaktion?
    </div>
    <div class="block-text-absatz">
    Eine Transaktion enthält mindestens einen Input und mindestens einen Output. Das heißt, ein Betrag wird von einer Adresse 
    auf eine andere transferriert. <br>
    Viele Transaktionen enthalten aber mehrere Inputs und mehrere Outputs. Was hat es damit auf sich?<br>
    Ein Vergleich mit Bargeld-Transaktionen kann das besser verständlich machen: <br>
    </div>

    <table>
    <tr>
        <th style="width: 45%">Euro-Welt</th>
        <th style="width: 45%">Bitcoin-Welt</th>
    </tr>
    <tr>
        <td>
            <strong>Ausgangssituation:</strong><br>
            Verschiedene Scheine und Geldstücke liegen in unterschiedlichen Fächern deines Portemonnaies.
            Sie stammen aus früheren Transaktionen, und du hast sie noch nicht wieder ausgegeben.
        </td>
        <td>
            <strong>Ausgangssituation:</strong><br>
            Ähnlich funktioniert es bei Bitcoin. Deine Wallet (Portemonnaie) verwaltet verschiedene Bitcoin-Adressen.
            Die Beträge, die diesen Adressen zugeordnet sind, nennen sich "Unspent Transaction Outputs" (UTXOs). 
            Das bedeutet: bisher noch nicht wieder ausgegebene Ausgänge aus früheren Transaktionen.
        </td>
    </tr>
    <tr>
        <td>
            <strong>Beispiel aus der Euro-Welt:</strong><br>
            Stell dir nun vor, du möchtest in einem Café zwei Freunde treffen, denen du Geld schuldest.
            Ein Freund bekommt 40 Euro, der zweite 20 Euro von dir. 
        </td>
        <td>
            <strong>Äquivalent zur Bitcoin-Transaktion:</strong><br>
            Stell dir vor, du möchtest aus deiner Wallet 0,8 BTC an einen Freund und 0,5 BTC 
            an einen anderen Freund überweisen.
        </td>
    </tr>
    <tr>
        <td>
            <strong>Auswahl der Scheine:</strong><br>
            Du siehst in deinem Portemonnaie nach und findest mehrere Fächer mit Scheinen und Münzen. 
            Um das Geld für beide Freunde zu übergeben, nimmst du einen 50-Euro-Schein 
            und einen 20-Euro-Schein aus zwei verschiedenen Fächern.
        </td>
        <td>
            <strong>Inputs:</strong><br>
            In der Bitcoin-Welt würdest du eine Transaktion erstellen, bei der automatisch zwei möglichst passende UTXOs 
            ausgewählt werden. In deiner Wallet befinden sich zwei UTXOs: 1 BTC und 0,5 BTC.
            Sie werden als Inputs für die Transaktion ausgewählt.
        </td>
    </tr>
    <tr>
        <td>
            <strong>Verteilung des Geldes:</strong><br>
            Du nimmst den 50-Euro-Schein und gibst ihn dem ersten Freund. 
            Er gibt dir 10 Euro zurück, die du wieder in ein Fach deines Portemonnaies steckst.
            Für den zweiten Freund nimmst du den 20-Euro-Schein und gibst ihn ihm.
        </td>
        <td>
            <strong>Outputs:</strong><br>
            Du erzeugst dann zwei Outputs: einen mit 0,8 BTC (an die Adresse deines ersten Freundes) 
            und einen weiteren mit 0,5 BTC (an die Adresse deines zweiten Freundes).
            Der Change (das Wechselgeld vom ersten Freund) in Höhe von 0,2 BTC wird als ein dritter Output zurück 
            an eine deiner eigenen Adressen gesendet, um es für zukünftige Transaktionen zu verwenden.
        </td>
    </tr>
    <tr>
        <td>
            <strong>Analogie zur Blockchain:</strong><br>
            Stell dir vor, es gäbe eine zentrale Buchführung über alle Portemonnaies, Fächer und deren Inhalte.
        </td>
        <td>
            <strong>Blockchain:</strong><br>
            Sie ist eine öffentliche und dezentrale Buchführung.
            Dabei entspricht jedes dieser Fächer einer Bitcoin-Adresse (öffentlicher Schlüssel), 
            die zusammen mit den Beträagen, die darauf gespeichert sind, dokumentiert werden.
        </td>
    </tr>
</table>

    <div class="block-text-absatz">
    Zusammengefasst:
        Eine Bitcoin-Transaktion kann, genau wie du mit verschiedenen Scheinen und Münzen in deinem Portemonnaie, mehrere Inputs (UTXOs) verwenden und die Beträge auf verschiedene Adressen (Outputs) verteilen.
        Der Restbetrag, der übrig bleibt, wird wieder in deine Wallet gelegt, ähnlich wie du den Rest deines 50-Euro-Scheins zurück in dein Portemonnaie legst.

    </div>

    <!--3 NÄCHSTE SEITE -->

    <div  class="nextpage-container">
        <a href="index.php?seite=t3">
            <button>&#5125; VERSCHLÜSSELUNG</button>
        </a>
    </div>


    <!--2 ----- FOOTER ------- -->
    <?php
        require __DIR__ . '../../footer.php';
    ?>