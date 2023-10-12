<?php

class Calendrier {
    private $mois;
    private $annee;
    public $evenements = [];

    public function __construct($mois, $annee){
        $this->mois = $mois;
        $this->annee = $annee;
    }
    public function ajouterEvenement($jour, $description) {
        $this->evenements[$jour] = $description;
    }

    public function recupererEvenement($jour) {
        return $this->evenements[$jour];
    }

    public function supprimerEvenement($jour) {
        unset($this->evenements[$jour]);
    }


    public function generer_Calendrier() {
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
                    // $codeCouleur = $this->evenements[$jour] ? 'green' : ''; 
                    if(isset($this->evenements[$jour]) && $this->evenements[$jour] != ''){
                        $codeCouleur = 'green';
                    } else {
                        $codeCouleur = 'white';
                    }
                    
                    $cellule = '<td>';
                    $cellule .= '<span style="background-color: ' . $codeCouleur . ';">' . $jour . '</span>';
                    $cellule .= '</td>';
                    $calendrier .= $cellule;
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
