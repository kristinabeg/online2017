<?php

if (!is_numeric($_GET['broj_polja'])) {
    header('Location: zadaci.php');
    //exit;
}
$broj_polja = (int)$_GET['broj_polja'];
//var_dump($broj_polja);

$forma2 = "";
$forma2 .= "<form method='post' action='#'>";
for ($i = 0; $i < $broj_polja; $i++) {
    $forma2 .= "<input type='text' placeholder='ime' name='ime".$i."'>";
    $forma2 .= "<input type='text' placeholder='prezime'  name='prezime".$i."'><br/>";
}
$forma2 .= "<input type='submit' name='ispisi' value='Ispisi'>";
$forma2 .= "</form>";

echo $forma2;

print_r($_POST);
die('radi');