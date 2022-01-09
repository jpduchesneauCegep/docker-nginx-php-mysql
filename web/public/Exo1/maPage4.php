<?php

# Utilisation des constantes et un switch cae: 
define("SEPARATEUR","-");
$nomJoueur1="Jean-Pierre";
$ageJoueur1=58;
$estUnHommeJoueur1=true;
$nomJoueur2="Lucie";
$ageJoueur2=60;
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

function afficherMajeur($age)
    {
        if ($age > 18){
        echo "Il est majeur";
        }   else if ($age === 18 ){
        echo "Il est majeur";
        }   else {
        echo "Il est mineur";
        }
    }
function afficherMajeurSwitch($age){
    switch($age){
        case 21 : 
        case 20 : 
        case 19 : echo "Il est majeur";
        break;
        case 18 : echo "Il est tous juste majeur";
        break;
        case 17 : echo "Il est mineur";
        break;
        default : echo "On ne le sait pas";
    }
}

?>

<h1> Jeux bizarre</h1>


<?php 
afficherJoeur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
genererSeparation(SEPARATEUR,50);
afficherJoeur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
genererSeparation("*",50);
affJoueurPlusAge($ageJoueur1,$ageJoueur2); 
genererSeparation("=",40);
$differenceAge = diffAge($ageJoueur1,$ageJoueur2);
echo "La différence d'age est de " . $differenceAge. " ans.";
genererSeparation(SEPARATEUR,50);
afficherMajeur($ageJoueur1);
genererSeparation(SEPARATEUR,50);
afficherMajeur($ageJoueur2);
genererSeparation(SEPARATEUR,50);
afficherMajeurSwitch($ageJoueur1);
genererSeparation("*",50);
afficherMajeurSwitch($ageJoueur2);
?>

