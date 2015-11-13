<?php

$coordonnees = array(
  'prenom' => 'François',
  'nom' => 'Dupont',
  'adresse' => '3 rue du Paradis',
  'ville' => 'Marseille');

$coordonnees['age'] = 32;
$coordonnees['prenom'] = 'Mouloud';

foreach ($coordonnees as $key => $value) {
  echo $key . " : " . $value . '<br>';
}

 ?>
