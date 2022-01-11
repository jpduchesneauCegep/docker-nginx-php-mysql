<?php
    include("common/header.php");
    include("common/menu.php");
?>
<!-- Entête de page -->

   <h1>Exercice 3: Cercle - Périmètre et Aire</h1>

    <form action="#" method="POST">
              
        <label for="rayon">Royon du cercle :</label>
        <input type="number" name="rayon" id="rayon"><br/>
        <br />
        <label for="rayon">Périmètre :</label>
        <input type="checkbox" name="perimetre" id="perimetre"  ><br/>
        <label for="rayon">Aire :</label>
        <input type="checkbox" name="aire" id="aire"  >
        <p><input type="submit" value="calculer"name="calculer"></p>
    </form>
   
<?php

    if(isset($_POST["calculer"])) {
        
       $rayon = $_POST["rayon"];
       echo "<h2> Résultats</h2>"  ;
       if(isset($_POST["perimetre"])){
       $perimetre = $rayon * 2 * pi();
       echo "Le périmètre d'un cercle de rayon ".$rayon." est : ".$perimetre."<br />";
       }
       if(isset($_POST["aire"])){
       $aire = pi() * ($rayon * $rayon);
       echo "L'aire d'un cercle de rayon ".$rayon." est : ".$aire;
       }
    } else {
        echo "<div class=\"alerte\">Saisir une valeur dans le champs ci-dessus</div>"; 
    exit; 
    }

?>
<!-- Pied de page -->
<?php
    include("common/footer.php");
?>
  