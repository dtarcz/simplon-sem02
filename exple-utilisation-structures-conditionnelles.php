<?php
// creation d'1 tableau pour faire correspondre les jours en numéros et les jours en fr
$jour_sem_fr = array('dimanche', 'lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi',);

//variable
$num_jour = date('w');

echo "Nous sommes aujourd'hui $jour_sem_fr[$num_jour] " . " "  . date('j') . ": <br>";

// on teste la valeur de la variable
switch($num_jour):
  case 1:
    # code...
    echo "Dur dur !<br>";
    echo "T'as fait quoi ce week-end ?";
    break;
  case 2:
  case 3:
    # code...
    echo "Ça devrait aller mieux :) ";
    break;
  case 4:
    # code...
    echo "Aah ça y est on est dans le code !";
    break;
  case 5:
    # code...
    echo "Hooo, bientôt le W-E, allez, on révise.";
    break;
  default:
    # code...
    echo "Faut pas molir, coder, coder, coder !";
    break;
endswitch;
 ?>
