<?php
  if (isset($_POST["prenom"])) // si $_POST["prenom"] existe
  {
    echo $_POST["prenom"]; // alors on affiche le prénom
  }
  else {
    echo "Prénom n'existe pas... "; // sinon on affiche ça...
  }

  if (isset($_GET["nom"]))
  {
    echo $_GET["nom"];
  }

 ?>
