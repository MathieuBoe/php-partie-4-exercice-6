<?php
$title = 'Exercice6';
include 'header.php';
function presentation($nom,$prenom,$age){
    echo 'Bonjour, '.$nom.' '.$prenom.', tu as '.$age.' ans';
}
echo presentation('Boe','Mathieu',26);
include 'footer.php';?>