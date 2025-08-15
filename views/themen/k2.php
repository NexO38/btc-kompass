<?php 
    require __DIR__ . '../../headline.php'; 
    require __DIR__ . '../../menue.php'; 
?>
<!--3 AUFBEWAHREN -->

<div class = "content-container">
    
    <div class="content-headline">
        AUFBEWAHREN
    </div>

    <div class="block-img-ovl-txt_container">
        <div class="block-img-ovl-txt_img">
            <img style="top: 0%;" src="images/wallet.webp" alt="Bildbeschreibung">
            <div class="block-img-ovl-txt_text">
                <p>
                Alle Bitcoin sind in der Blockchain gespeichert und einer Adresse zugeordnet.
                Auf deiner Wallet verwaltest du deine Adresse(n), denen deine Bitcoin zugeordnet sind
                sowie den privaten Schlüssel, der dir Transaktionen ermöglicht.
                </p>
            </div>
        </div>
    </div>
    

    <div class="block-kapitel-titel">
        Wo sind meine Bitcoin?
    </div>
    <div class="block-text-absatz">
        Bitcoin existieren nur in Verbindung mit einer sogenannten Bitcoin-Adresse, der sie zugeordnet sind. 
        Bitcoin und Bitcoin-Adresse sind öffentlich in der Blockchain gespeichert.
        </div>
    <div class="block-text-absatz">
        Man kann sich das wie ein System aus gläsernen Bankschließfächern (Bitcoin-Adressen) vorstellen, und in einem davon liegen deine Münzen.
        Du bist der einzige, der den privaten Schlüssel zu diesem Fach hat und damit Münzen in ein anderes Fach verschieben kann.
        Die Münzen exisitieren nur in den Bankschließfächern und können nur zwischen ihnen verschoben werden.
    </div>
    <div class="block-img-untertitel_container">
        <div style="order: 1;" class="block-img-untertitel_img">
            <img src="images/glaeserneschliessfaecher.webp" alt="Bild">
        </div>
        <div style="order: 2;" class="block-img-untertitel_text">
            Man muss sich das ohne die freiliegenden Münzen vorstellen :-)
        </div>
    </div>
    <div class="block-text-absatz">
        Bitcoin kaufen wäre in dieser Münzen-Welt wie folgt: 
        Du meldest dich bei einer Münzen-Bank an, die legt dir ein normales IBAN-Konto an auf das du dann Euro überweist.
        Sie richtet dir auch ein Schließfach im öffentlichen Schließfach-System (Blockchain) ein, 
        zu dem aber nur sie den privaten Schlüssel hat, du nicht; du musst ihr vertrauen.
        Du beauftragst nun die Bank, Münzen von deinen Euro zu kaufen. Sie sendet diese dann in dein Schließfach.
        Du kannst diese Münzen an jedes beliebige Schließfach senden. Zum Beispiel an ein eigenes, von dir selbst eingerichtetes Fach.
    </div>
    <div class="block-text-absatz">
        Bitcoin wieder verkaufen wäre dann der umgekehrte Weg. 
    </div>
    <div class="block-text-absatz">
        Und nur wer den zu dieser Adresse gehörenden privaten Schlüssel besitzt,
        kann über die Bitcoin verfügen und eine Überweisung an eine andere Adresse durchführen.
    </div>
    <div class="block-text-zitat">
        Gut zu wissen: Du hast auf deiner Wallet nicht die Bitcoin selber, sondern nur den Schlüssel,
        mit dem du das Versenden deiner Bitcoin genehmigen kannst. Die Bitcoin existieren nur auf der Blockchain.
    </div>

    <div class="block-kapitel-titel">
        Verwaltung der Schlüssel
    </div>
    <div class="block-text-absatz">
        Was man also hat sind nicht die Bitcoin selber, sondern die öffentlichen Schlüssel (public Key)
        sowie die dazugehörigen privaten Schlüssel (private Key).
        Der public key ist so etwas wie die IBAN-Nummer deines Girokontos, die jeder kennen darf.
        Der private key ist dann die Zugangsdaten zu deinem Bankkonto plus TAN, die dir Überweisungen erlauben.
    </div>
    <div class="block-tabelle-container">
      <table class="block-tabelle">
        <thead>
            <tr>
                <th>Euro-Welt</th>
                <th>Bitcoin-Welt</th>
                <th>Erläuterung</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Euro</td>
                <td>Bitcoin</td>
                <td></td>
            </tr>
            <tr>
                <td>IBAN</td>
                <td>Bitcoin Adresse</td>
                <td></td>
            </tr>
            <tr>
                <td>Konto + Zugangsdaten</td>
                <td>Wallet + Passwort</td>
                <td></td>
            </tr>
            <tr>
                <td>TAN</td>
                <td>private key</td>
                <td></td>
            </tr>
            <tr>
                <td>Viele Kassenbücher bei vielen Banken</td>
                <td>EINE Blockchain auf vielen Bitcoin Nodes</td>
                <td></td>
            </tr>
            <tr>
                <td>IBAN des Empfängers</td>
                <td>Ziel-Adresse</td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
            </tr>
        </tbody>
      </table>
    </div>
    <div class="block-text-absatz">
        Es geht also um die Verwaltung dieser Schlüssel in sogenannten Wallets, wovon es verschiedene Typen gibt.
    </div>

    
<!--3 Hardware Wallet  --> 

<div class="block-kapitel-titel">
        Hardware Wallets
</div>
<div class="block-text-beside-img_container">
    <div style="order: 1;" class="block-text-beside-img_text">
    Sie sieht typischerweise wie ein USB-Stick aus und wird auch genauso an den PC angeschlossen.
    Sie haben eine interne Elektronik, die aber siher stellt, dass nicht 
    von außen auf die in ihm gespeicherten privaten Schlüssel zugegriffen werden kann. <br>
    </div>
    <div style="order: 2; width: 50%;" class="block-text-beside-img_img">
        <img src="images/bitbox.png" alt="Bild">
    </div>
</div>
<div class="block-text-absatz">
Eine Transaktion von der zugehörigen Adresse muss physisch am Gerät bestätigt werden,
    was eine Manipulation über dsa Internet oder den PC ausschließt.
    Es gibt einige Anbieter solcher Wallets, die in der Regel wie ein etwas größerer USB-Stick aussehn.
</div>

    <div class="block-text-empfehlung">
        Die aus meiner Sicht aktuell empfehlenswerteste ist die oben abgebildete 
        <a href="https://shop.bitbox.swiss/en/?u=10512301122251987723776253#products">BITBOX02</a> 
        eines schweizer Unternehmens.
    </div>

<div class="block-text-absatz">
    Ein besonders Merkmal dieser Aufbewahrung ist die sogenannte Seed-Phrase.
    Sie besteht aus 12, 18 oder 24 Wörtern, die nach einem standardisierten Verfahren
    aus einer vorgegebenen Liste aus 2048 Wörten generiert wird. Sie stellt eine verschlüsste Form des 
    privaten SChlüssels dar. Mit diesen Wörten lässt sich die Wallet wieder herstellen
    auch wenn die Hardware verloren geht oder zerstört wird.  
</div>
<div class="block-text-absatz">
    Bereits 12 aus 2048 Wörtern bieten eine vollkommen ausreichende Sicherheit. 
    Die Unsicherheit besteht wiederum in der Aufbewahrung dieser Wörter. <br>
    und je nach Höhe des Wertes auf der Wallet sollte der Aufwand entsprechend hoch sein.
</div>
<div class="block-text-absatz">
</div>

    <div class="block-text-ACHTUNG">
    <p><strong>Das sollte sichergestellt sein:</strong> <br>
            Niemand darf Zugang dazu erlangen. <br>
            Feuer, Wasser oder ähliches dürfen sie nicht zerstören. <br>
        </p>
        
    </div>

<div class="block-text-absatz">
Am häufigsten wird empfohlen, die 12 oder 24 Wörter in Edelstahl zu ritzen oder zu schlagen.
</div>
<div class="block-text-beside-img_container">
    <div style="order: 1;" class="block-text-beside-img_text">
        <p>Dafür gibt es mittlerweile einige Anbieter, aber auch eine einfache Edelstahlplatte für 10 € genügt.
        Dazu ein Set Schlagbuchstaben für 20-30 €, ein Hammer und eine sehr stabile Unterlage.
        </p>
    </div>
    <div style="order: 2; width: 60%;" class="block-text-beside-img_img">
        <img src="images/steel-wallet.jpeg" alt="Bild">
    </div>
</div>
<div class="block-text-absatz">
    Bleibt noch die Frage der Aufbewahrung. <br>
    Wo würdest du einen Barren Gold aufbewahren? Dort gehört auch diese Steel-Wallet hin.
</div>

<div class="block-text-absatz">
    Eine Erhöhung der Sicherheit erhältst du, wenn du zwei Stahlplatten kaufst, 
    auf jede die Hälfte der Wörter einschlägst und sie an getrennten Orten aufbewahrst. 
</div>
<div class="block-text-absatz">
    Und was ich auch dringend empfehle ist, dir die Mühe zu machen, die Worte auswendig zu lernen. <br>
    Damit kannst du deine Bitcoin im Kopf über jede Grenze, durch jede Kontrolle an jeden Ort der Welt transportieren.
</div>

<!--3 Software Wallet  --> 

<div class="block-kapitel-titel">
    Software Wallets
</div>
<div class="block-text-absatz">
    bla bla
</div>

<!--3 Paper Wallet  --> 

<div class="block-kapitel-titel">
    Paper Wallets
</div>
<div class="block-text-absatz">
    
</div>




    <div class="block-kapitel-titel">
        Software Wallets
    </div>
    <div class="block-text-absatz">
        bla bla
    </div>

    <div class="block-kapitel-titel">
        Hardware Wallets
    </div>
    <div class="block-text-beside-img_container">
        <div style="order: 1;" class="block-text-beside-img_text">
            <p>Es gibt einige Anbieter solcher Wallets, die in der Regel wie ein etwas größerer USB-Stick aussehn.
        Die aktuell empfehlenswerteste ist die 
        <a href="https://shop.bitbox.swiss/en/?u=10512301122251987723776253#products">BITBOX</a> 
        eines schweizer Unternehmens.</p>
        </div>
        <div style="order: 2; width: 50%;" class="block-text-beside-img_img">
            <img src="images/bitbox.png" alt="Bild">
        </div>
    </div>

    <div class="block-kapitel-titel">
        Paper Wallets
    </div>
    <div class="block-text-absatz">
        bla bla
    </div>

    <!--3 NÄCHSTE SEITE -->

    <div  class="nextpage-container">
        <a href="index.php?seite=k3">
            <button>&#5125;verkaufen</button>
        </a>
    </div>


    <!--2 ----- FOOTER ------- -->
    <?php
        require __DIR__ . '../../footer.php';
    ?>
