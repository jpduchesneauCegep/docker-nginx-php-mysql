<?php
    include("common/header.php");
    include("common/menu.php");

    $p1= ["Luke",26,true,5,4];
    $p2= ["Katy",22,false,3,6];
    $p3= ["Marc",33,true,7,2];

?>
<!-- Entête de page -->

   <h1>Exercice 3: Cercle - Périmètre et Aire</h1>

    <form action="#" method="POST">
              
        <label for="perso">Personnage:</label>
        <select name="perso" id="perso" onChange= "submit()" >
            <option value="p1" <?php if(isset($_POST["perso"]) && $_POST["perso"] === "p1") echo "selected"; ?>>Luke</option>
            <option value="p2"<?php if(isset($_POST["perso"]) &&  $_POST["perso"] === "p2") echo "selected"; ?>>Katy</option>
            <option value="p3"<?php if(isset($_POST["perso"]) &&  $_POST["perso"] === "p3") echo "selected"; ?>>Marc</option>
        </select>
    
    
    </form>
   
<h2>Pesonnage</h2>
<?php

    if(isset($_POST["perso"])){
        if($_POST["perso"] === "p1"){
            echo "<div class='gauche'>";
            echo "<img src = 'images/player.png' alt='player Luke' />";
            echo "</div>";
            echo "<div class='gauche'>";
                echo "coucou";
            echo "</div>";
        } elseif ($_POST["perso"] === "p2") {
            echo "<div class='gauche'>";
            echo "<img src = 'images/playerF.png' alt='player Katy' />";
            echo "</div>";
            echo "<div class='gauche'>";
                echo "coucou";
            echo "</div>";
        } elseif ($_POST["perso"] === "p3") {
            echo "<div class='gauche'>";
            echo "<img src = 'images/player.png' alt='player Marc' />";
            echo "</div>";
            echo "<div class='gauche'>";
                echo "coucou";
            echo "</div>";
        }
    } else {
        echo "<h2> Saisir une valeur dans la liste ci-dessus</h2>";
    }
    echo "<div class='clearB'>";
 
?>
<!-- Pied de page -->
<?php
    include("common/footer.php");
?>
  