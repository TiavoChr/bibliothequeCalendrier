<?php
    require_once 'calendrier.php';
    $mois = 10;
    $annee = 2023;
    $oCalendrier = new Calendrier($mois, $annee);
    $sCalendrier =  $oCalendrier->generer_calendrier();

    header('Content-Type: application/json');
    echo json_encode(['calendrier' => $sCalendrier]);
?>
