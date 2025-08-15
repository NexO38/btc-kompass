<?php 
    require __DIR__ . '../../headline.php'; 
    require __DIR__ . '../../menue.php'; 
?>
<!-- ----- CONTENT BEGINN ----- --> 

<div class = "content-container">
    
    <div class="content-headline">
        KEINE RÜCKBUCHUNG MÖGLICH
    </div>

    <div class="block-img-ovl-txt_container">
        <div class="block-img-ovl-txt_img">
        <img style="top: 0%;" src="images/risiken.webp" alt="Bildbeschreibung">
        <div class="block-img-ovl-txt_text">
            <p>
                Unser Bankensystem bietet für den Fall einer falsch eingetragenen IBAN
                die Möglichkeit der Rückbuchung. Das gibt es bei Bitcoin nicht.
            </p>
        </div>
        </div>
    </div>
    <div class="block-kapitel-titel">
        RETOURE
    </div>
    <div class="block-text-absatz">
        Transaktionen mit Bitcoin sind irreversibel. Wenn du versehentlich Bitcoin an eine falsche Adresse sendest 
        oder Opfer eines Betrugs wirst, gibt es keine Möglichkeit, die Transaktion rückgängig zu machen.
    </div>
    <div class="block-text-ACHTUNG">
        Wenn du versehentlich eine falsche, aber <strong>existierende</strong> Adresse eingibst, ist das nicht umkehrbar.<br>
        Es gibt kein UNDO. Du bist vollkommen vom good-will des Empfängers abhängig,
        den du aber in der Regel nicht kennst und auch nicht ermitteln kannst.
    </div>
    <div class="block-text-absatz">
        Also copiere achtsam und mit Bedacht die richtige Zieladresse.
    </div>
    <div class="block-text-empfehlung">
        Passiert dir beim copy & paste der Zieladresse aber ein <strong>"Tippfehler"</strong>,
        so ist die Wahrscheinlichkeit extremst hoch, 
        dass die Zieladresse gar nicht existiert. In dem Fall wird die Transaktion nicht durchgeführt
        und du behältst deine Bitcoin.
    </div>


    <!--3 NÄCHSTE SEITE -->

    <div  class="nextpage-container">
        <a href="index.php?seite=r3">
            <button>&#5125; MANIPULATION</button>
        </a>
    </div>


    <!--2 ----- FOOTER ------- -->
    <?php
        require __DIR__ . '../../footer.php';
    ?>
