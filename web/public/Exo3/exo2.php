<?php
    include("common/header.php");
    include("common/menu.php");
?>
<!-- Entête de page -->

   <h1>Exercice 2: Affichage d'une pyramide</h1>

    <form action="#" method="POST">
              
        <label for="hauteur">Hauteur de la pyramide :</label>
        <input type="number" name="hauteur" id="hauteur"><br />
        <br />
        <label for="caracter">Choix du caractère :</label>
        <input type="text" name="caractere" id="caractere">
        <p><input type="submit" value="Afficher"></p>
    </form>

   
<?php

function genererSeparation($caractere, $nbcaractere)    {
   
    $i = 0;
     for($i = 0 ; $i < $nbcaractere; $i++  ){
      echo "$caractere";
     }
    echo "<br />";
}

    if (isset($_POST["hauteur"]) && $_POST["hauteur"] > 0 ){
       
    
    $hauteur1 =$_POST["hauteur"];
    $hauteur2 =$_POST["hauteur"];
    $caractere =$_POST["caractere"];

    echo "<h2>Pyramide de hauteur : ".$hauteur1. "</h2>";
        $i = 0;
        while ($i <= $hauteur1 ){
        GenererSeparation($caractere,$i);
        $i ++;
        } 
       

        $i = $hauteur2 - 1; # Pourait être fait une une subtring
        while ($i > 0 ){
        GenererSeparation($caractere,$i);
        $i -- ;
        } 
    } 
?>
<!-- Pied de page -->
<?php
    include("common/footer.php");
?>
  