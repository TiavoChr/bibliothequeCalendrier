# API de Calendrier

Bienvenue dans l'API de Calendrier ! Cette API vous permet de générer des calendriers en fonction du mois et de l'année fournis en entrée.

## Endpoints

### Générer un Calendrier
- **Endpoint** : `bibliothequeCalendrier/api.php`
- **Méthode** : POST
- **Description** : Génère un calendrier pour le mois et l'année spécifiés.
- **Exemple de Requête** :
  ```json
  POST bibliothequeCalendrier/api.php
  Content-Type: application/x-www-form-urlencoded

  mois: 10
  annee: 2023
- **Exemple de Reponse** :
json :
{"calendrier":"<table border=\"1\"><tr><th>Lun<\/th><th>Mar<\/th><th>Mer<\/th><th>Jeu<\/th><th>Ven<\/th><th>Sam<\/th><th>Dim<\/th><\/tr><tr><td><\/td><td><\/td><td><\/td><td><\/td><td><\/td><td><\/td><td>1<\/td><\/tr><tr><td>2<\/td><td>3<\/td><td>4<\/td><td>5<\/td><td>6<\/td><td>7<\/td><td>8<\/td><\/tr><tr><td>9<\/td><td>10<\/td><td>11<\/td><td>12<\/td><td>13<\/td><td>14<\/td><td>15<\/td><\/tr><tr><td>16<\/td><td>17<\/td><td>18<\/td><td>19<\/td><td>20<\/td><td>21<\/td><td>22<\/td><\/tr><tr><td>23<\/td><td>24<\/td><td>25<\/td><td>26<\/td><td>27<\/td><td>28<\/td><td>29<\/td><\/tr><tr><td>30<\/td><td>31<\/td><td><\/td><td><\/td><td><\/td><td><\/td><td><\/td><\/tr><\/table>"}

