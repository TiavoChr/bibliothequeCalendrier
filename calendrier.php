<?php

class Calendrier {
    private $mois;
    private $annee;

    public function __construct($mois, $annee){
        $this->mois = $mois;
        $this->annee = $annee;
    }

    public function generer_calendrier() {
        $calendrier = '<table border="1">';
        $calendrier .= '<tr><th>Lun</th><th>Mar</th><th>Mer</th><th>Jeu</th><th>Ven</th><th>Sam</th><th>Dim</th></tr>';

        $premier_jour = mktime(0, 0, 0, $this->mois, 1, $this->annee);
        $nombre_jours = date('t', $premier_jour);
        $jour_semaine = date('N', $premier_jour);

        $jour = 1;
        for ($i = 1; $i <= 6; $i++) {
            $calendrier .= '<tr>';
            for ($j = 1; $j <= 7; $j++) {
                if ($i === 1 && $j < $jour_semaine) {
                    $calendrier .= '<td></td>';
                } elseif ($jour <= $nombre_jours) {
                    $calendrier .= '<td>' . $jour . '</td>';
                    $jour++;
                } else {
                    $calendrier .= '<td></td>';
                }
            }
            $calendrier .= '</tr>';
            if ($jour > $nombre_jours) {
                break;
            }
        }
        $calendrier .= '</table>';
        return $calendrier;
    }
}

?>
