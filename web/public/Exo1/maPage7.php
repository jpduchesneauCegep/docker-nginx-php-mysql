<?php

# Utilisation tableau multi dimensionnelle avec fonction récursive: 

use PhpParser\Node\Stmt\Else_;

define("SEPARATEUR","=");

$joueur1 = [
    "nom"=> "Sofia", 
    "age"=> 5, 
    "estUnHomme"=>false
];

$joueur2 = [
    "nom"=> "Lucie", 
    "age"=> 60, 
    "estUnHomme"=>false
];
$joueur3 = [
    "nom"=> ["Prenom"=>"Jean-Pierre", 
            "Nom"=>"Duchesneau"
            ],
    "age"=> 58, 
    "estUnHomme"=>true
];


print_r ($joueur1);
genererSeparation(SEPARATEUR,50);
print_r ($joueur2);
genererSeparation(SEPARATEUR,50);
print_r ($joueur3);
genererSeparation(SEPARATEUR,50);

function afficherJoueur($tab ){
    foreach($tab as $indice => $value){
        if(!is_array($value)){
            echo $indice. " : ".$value."<br />";
        } Else {
           afficherJoueur($value);
        }
    }
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



function afficherMajeur($age)    {
        if ($age > 18){
        echo "Il est majeur";
        }   else if ($age === 18 ){
        echo "Il est majeur";
        }   else {
        echo "Il est mineur";
        }
}
 
 function genererSeparation($separateur, $nbcaractere)    {
        echo "<br />";
         for($i = 0 ; $i < $nbcaractere; $i++  ){
          echo "$separateur";
         }
        echo "<br />";
}

?>

<h1> Jeux bizarre</h1>


<?php 
echo $joueur3["nom"]["Nom"]." ".$joueur3["nom"]["Prenom"];
genererSeparation(SEPARATEUR,50);
afficherJoueur($joueur1);
afficherMajeur($joueur1["age"]);
genererSeparation(SEPARATEUR,50);
afficherJoueur($joueur2);
afficherMajeur($joueur2["age"]);
genererSeparation(SEPARATEUR,50);
afficherJoueur($joueur3);
afficherMajeur($joueur3["age"]);
genererSeparation(SEPARATEUR,50);
$differenceAge = diffAge($joueur1["age"],$joueur2["age"]);
echo "La différence d'age entre ".$joueur1["nom"]. "  et ".$joueur2["nom"]." est de ".$differenceAge. " ans.";
genererSeparation(SEPARATEUR,50);
$differenceAge = diffAge($joueur2["age"],$joueur3["age"]);
echo "La différence d'age entre ".$joueur2["nom"]. "  et ".$joueur3["nom"]["Prenom"]." est de ".$differenceAge. " ans.";
genererSeparation(SEPARATEUR,50);
$differenceAge = diffAge($joueur1["age"],$joueur3["age"]);
echo "La différence d'age entre ".$joueur1["nom"]. "  et ".$joueur3["nom"]["Prenom"]." est de ".$differenceAge. " ans.";
?>

