<?php 
    require __DIR__ . '../../headline.php'; 
    require __DIR__ . '../../menue.php'; 
?>
<!--3 BITCOIN VERSCHLÜSSELUNG -->

<div class = "content-container">
    
    <div class="content-headline">
    BITCOIN VERSCHLÜSSELUNG
    </div>

    <div class="block-img-ovl-txt_container">
        <div class="block-img-ovl-txt_img">
        <img style="top: 0%;" src="images/mining.webp" alt="Bildbeschreibung">
        <div class="block-img-ovl-txt_text">
            <p>
            Der öffentliche Schlüssel (die Bitcoin-Adresse / private key) ist wie ein gläserner Tresor mit Schlitz, in den jeder etwas einwerfen, aber nicht wieder hinaus holen kann. <br>
            Dazu braucht man den sehr sehr sicher aufzubewahrenden Tresorschlüssel, den privaten Schlüssel (private key).           
            </p>
        </div>
        </div>
    </div>
    

    <div class="block-kapitel-titel">
    Wie sicher ist ein privater Schlüssel
    </div>
    <div class="block-text-vorspann">
    Das Erraten eines privaten Schlüssels für Bitcoin ist extrem unwahrscheinlich; quasi nicht möglich. 
    </div>
    <div class="block-text-absatz">
    Um das besser zu verstehen, schauen wir uns einige Details an: <br>
    </div>
    <div class="block-text-absatz">
    <strong>Die Länge des Schlüssels:</strong> Ein privater Bitcoin-Schlüssel besteht aus 256 Bit. 
    Also eine Kette aus 256 Nullen und Einsen.
    Das bedeutet, es gibt 2<sup>256</sup> mögliche Schlüssel. Das ist eine extremst große Zahl. <br>
    Um das ins Verhältnis zu setzen: Das ist ungefähr 1.1579209×10<sup>77</sup>.<br>
    </div>
    <div class="block-text-absatz">
    <strong>Vergleich zur Anzahl der Atome im Universum:</strong>
    Man schätzt, dass es etwa 10<sup>80</sup> Atome im beobachtbaren Universum gibt. 
    Die Anzahl möglicher Bitcoin-Schlüssel ist also nur um den Faktor 1000 kleiner, was bedeutet, 
    dass die Wahrscheinlichkeit, den richtigen Schlüssel durch Raten zu finden, verschwindend gering ist.
    </div>
    <div class="block-text-absatz">
    <strong>Rechenleistung:</strong> Selbst wenn du alle heute verfügbaren Computer auf der Welt nutzen würdest, 
    um Schlüssel zu generieren und zu überprüfen, wäre die Wahrscheinlichkeit, 
    den richtigen Schlüssel zu erraten, praktisch gleich null. In diesem Kurzvideo wird erklärt, was das aktuell bedeutet:
    </div>
    <div class="block-video-embedded">
      <div class="block-video">
            <iframe
                src="https://www.youtube.com/embed/3THMuAZiJPA" frameborder="0">
            </iframe>
      </div>
    </div>
    <div class="block-text-absatz">
        Quantencomputer hingegen werden schon als zukünftige Bedrohung ernst genommen und die Community bereitet
        sich proaktiv auf die Zeit vor, in der diese TEchnologie in der Lage sein könnte,
        private Schlüssel aus den öffentlichen Schlüsseln abzuleiten.
    </div>
    <div class="block-text-absatz">
    <strong>Zusammengefasst:</strong> Die Wahrscheinlichkeit, einen privaten Bitcoin-Schlüssel zufällig zu erraten, ist so gering, 
    dass sie in der Praxis als unmöglich betrachtet wird. Die zugrunde liegende kryptographische Sicherheit 
    ist einer der Hauptgründe, warum Bitcoin als so sicher eingeschätzt wird.
    </div>

    <div class="block-kapitel-titel">
    public kex und private key
    </div>
    <div class="block-text-beside-img_container">
        <div style="order: 1;" class="block-text-beside-img_text">
            <p>In diesem Video wird noch mal ausführlicher und sicher auch korrekter erläutert,
                was es mit diesen beiden SChlüsseln auf sich hat
            </p>
        </div>
            <div style="order: 2; width: 50%;" class="block-text-beside-img_img">
            <iframe
                src="https://www.youtube.com/embed/TC50HTRDx7Q" title="public kex und private key" frameborder="0" allowfullscreen>
            </iframe>
        </div>
    </div>

    <!--3 NÄCHSTE SEITE -->

    <div  class="nextpage-container">
        <a href="index.php?seite=t4">
            <button>&#5125; MINING</button>
        </a>
    </div>


    <!--2 ----- FOOTER ------- -->
    <?php
        require __DIR__ . '../../footer.php';
    ?>