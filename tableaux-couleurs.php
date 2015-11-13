<?php

$couleurs = array(
  'DarkSalmon' => '#F09880',
  'FireBrick' => '#B82428',
  'OliveDrab' => '#709028',
  'Orchid' => ' #E070D8');

$couleurs['DarkOrange'] = '#FF8C00';
$couleurs['PowderBlue'] = '#B0E0E8';

foreach ($couleurs as $key => $value) {
  echo '<font color=" ' . $value . '">' . "Je suis : " . '<strong>' . $key . '</strong><br>';

}
?>
<p>
<?php
$colors  = array('rouge' => '#ff0000', 'vert' => '#00FF00', 'bleu' => '#0000FF');

$affichage = "<div style='color:#ff0000'>" . 'Texte' . "</div>";
echo $affichage;

?>
</p>
