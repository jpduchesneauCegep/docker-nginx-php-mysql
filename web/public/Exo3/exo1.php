<?php
    include("common/header.php");
    include("common/menu.php");
?>
<!-- Entête de page -->

   <h1>Exercice 1: Affiche des tables de multiplication</h1>

    <form action="#" method="POST">
        <fieldset>
        <legend> Vous devez saisir des valeurs dans les champs ci-dessous:</legend>
        <label for="nom">Nombre d'occurence voulu :</label>
        <input type="number" name="atteindre" id="atteindre">
        <label for="age">Valeur à multiplier :</label>
        <input type="number" name="multiplicateur" id="multiplicateur" ><br />
        <p><input type="submit" value="Afficher"></p>
        
        </fieldset>
      
    </form>

   
<?php
    if (isset($_POST["multiplicateur"]) && isset($_POST["atteindre"])  ){
    
    $multiplicateur =$_POST["multiplicateur"];
    $atteindre=$_POST["atteindre"];
    
    echo "<h2>Table de ".$multiplicateur."</h2>";

        $i = 0;
        while ($i <= $atteindre ){
         $resultat = $i * $multiplicateur;
        echo $i." * ".$multiplicateur. "= ".$resultat."<br />";
        $i ++;
        } 
    } else {
          echo "<div class=\"alerte\">Vous devez saisir des valeurs dans les champs ci-dessus.</div>";
    }

?>
<!-- Pied de page -->
<?php
    include("common/footer.php");
?>
  