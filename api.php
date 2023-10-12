<?php
require_once 'calendrier.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $mois = $_POST['mois'];
    $annee = $_POST['annee'];

    $oCalendrier = new Calendrier($mois, $annee);
    // $oCalendrier->ajouterEvenement(15, 'mi-mois');
    $sCalendrier =  $oCalendrier->generer_calendrier();

    header('Content-Type: application/json');
    echo json_encode(['calendrier' => $sCalendrier]);
}
?>
