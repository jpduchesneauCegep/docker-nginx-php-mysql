<?php

# Utilisation tableau : 
define("SEPARATEUR","=");

$joueur1 = ["Sofia", 5, false];
$joueur2 = ["Lucie", 60, false];


print_r ($joueur1);
genererSeparation(SEPARATEUR,50);
print_r ($joueur2);
genererSeparation(SEPARATEUR,50);

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
        // $i = 0;
        // while ($i < $nbcaractere ){
        //     $i ++;
        //     echo $separateur;
        // }
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

function afficherJoueur($tab ){
    foreach($tab as $indice => $value){
        echo $indice. " : ".$value."<br />";
    }
}
?>

<h1> Jeux bizarre</h1>


<?php 
afficherJoueur($joueur1);
genererSeparation(SEPARATEUR,50);
afficherJoueur($joueur2);
genererSeparation(SEPARATEUR,50);
affJoueurPlusAge($joueur1[1],$joueur2[1]); 
genererSeparation(SEPARATEUR,50);
$differenceAge = diffAge($joueur1[1],$joueur2[1]);
echo "La différence d'age est de " . $differenceAge. " ans.";
genererSeparation(SEPARATEUR,50);
afficherMajeur($joueur1[1]);
genererSeparation(SEPARATEUR,50);
afficherMajeur($joueur2[1]);
genererSeparation(SEPARATEUR,50);

?>

