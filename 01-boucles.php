<?php
/**
Première boucle for - généralement numérique
 */
for($i=0;$i<10;$i++){
    echo "$i -";
}
echo "<hr>";

/*
Deuxième boucle while - toute utilisation
 */
$i=0;
while ($i < 10){
    echo $i." -";
    $i++;
}
echo "<hr>";

/*
Troisième boucle do-while - toute utilisation avec exécution de la boucle au mois une fois
 */
$i=0; // mettre 11 pour tester
do{
    echo $i." -";
    $i++;
}while ($i < 10);
echo "<hr>";

/*
Quatrième boucle: foreach - utilisation sur les tableaux et/ou les objets
 */
// tableau indexé
$array = array("un","deux","trois");

// simple valeur
foreach($array as $value){
    echo "$value -";
}
echo "<hr>";

// clef et valeur
foreach($array as $key => $value){
    echo "$key) $value - ";
}
echo "<hr>";

/*
La fonction récursive est une forme de boucle créée par le dev, elle a donc une grande souplesse mais peut poser de plus grande difficulté de débuggage)
 */
function recu($to){
    echo "$to -";
    if($to<10){
        $to++;
        recu($to);
    }
}
recu(0);