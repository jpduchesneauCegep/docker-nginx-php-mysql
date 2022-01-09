
<?php

# Utilisation des fonctions : 
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
    if ($homme){ 
        echo "C'est un homme.";
    } else  { 
         echo "C'est une femme.";
    }
   }
function affJoueurPlusAge ($ageJoueur1, $ageJoueur2) {
    if ($ageJoueur1 > $ageJoueur2){
        echo "Joueur 1 est le plus agé";
    } else {
        echo "Joueur 2 est le plus agé";
    }
    # Le tripe égale (===) est un test sur la valeur et le type
    # If pas utlise sinon pour tester le triple égale
    
    if($ageJoueur1 ==58){
        echo "<br />";
        echo "C'est égale";
    }
   
}
function diffAge($ageJoueur1, $ageJoueur2) {
        $resultat = $ageJoueur1 - $ageJoueur2;
        if ($resultat < 0){
            $resultat = $ageJoueur2 - $ageJoueur1;
        }
        return $resultat;
    }

function genererSeparation()
    {
        echo "<br />";
        echo "-----------------------";
        echo "<br />";
    }

?>
<html>
<h1> Jeux bizarre</h1>


<?php 
afficherJoeur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
genererSeparation();
afficherJoeur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);
genererSeparation();
affJoueurPlusAge($ageJoueur1,$ageJoueur2); 
genererSeparation();
$differenceAge = diffAge($ageJoueur1,$ageJoueur2);
echo "La différence d'age est de " . $differenceAge. " ans."

?>
</html>