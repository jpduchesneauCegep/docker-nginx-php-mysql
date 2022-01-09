<?php

# Utilisation d'une boucle dans la fonction : 

$nomJoueur1="Jean-Pierre";
$ageJoueur1=58;
$estUnHommeJoueur1=true;
$nomJoueur2="Lucie";
$ageJoueur2=65;
$estUnHommeJoueur2=false;

function afficherJoeur($nom, $age, $homme)
    {
    echo "Nom du joueur : ".$nom; 
    echo "<br />";
    echo "Age du joueur : ".$age;
    echo "<br />";

   }
function affJoueurPlusAge ($ageJoueur1, $ageJoueur2) {
    if ($ageJoueur1 > $ageJoueur2){
        echo "Joueur 1 est le plus agé";
    } else {
        echo "Joueur 2 est le plus agé";
    }
     
}
function diffAge($ageJoueur1, $ageJoueur2) {
        $resultat = $ageJoueur1 - $ageJoueur2;
        if ($resultat < 0){
            $resultat = $ageJoueur2 - $ageJoueur1;
        }
        return $resultat;
    }

function genererSeparation($separateur, $nbcaractere)
    {
        echo "<br />";
        for($i = 0 ; $i < $nbcaractere; $i++  ){
            echo "$separateur";
        }
        
        echo "<br />";
    }

?>
<html>
<h1> Jeux bizarre</h1>


<?php 
afficherJoeur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
genererSeparation("-",10);
afficherJoeur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
genererSeparation("-",20);
affJoueurPlusAge($ageJoueur1,$ageJoueur2); 
genererSeparation("=",40);
$differenceAge = diffAge($ageJoueur1,$ageJoueur2);
echo "La différence d'age est de " . $differenceAge. " ans."

?>
</html>