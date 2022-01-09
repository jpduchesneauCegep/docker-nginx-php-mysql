
<?php
$nomJoueur1="Jean-Pierre";
$ageJoueur1=58;
$estUnHommeJoueur1=true;
$nomJoueur2="Lucie";
$ageJoueur2=60;
$estUnHommeJoueur2=false;

$text = test(5);

function afficherJoeur($nom, $age, $homme)
    {
    echo "<p>";
    echo "Nom du joueur : ".$nom; 
    echo "<br />";
    echo "Age du joueur : ".$age;
    echo "<br />";
    if ($homme===true){ 
        echo "C'est un homme.";
    } else  { 
         echo "C'est une femme.";
    }
    echo "</p>";
    echo "<hr";
}
function test ($c) {
    $a = 5;
    $b = 10;
    
    return $a + $b + $c ;
}

?>
<h1> Jeux bizarre</h1>


<?php 
afficherJoeur($nomJoueur1, $ageJoueur1, $estUnHommeJoueur1);
afficherJoeur($nomJoueur2, $ageJoueur2, $estUnHommeJoueur2);

echo $text; 

?>
