<?php

// scandir crée un tableau contenant les fichiers et dossiers se trouvant à son niveau (à l'intérieur de) - ici (E:\WEB2018\PHP\ car ../ remont d'un niveau)
$a = scandir("./");

function listFiles($chemin="./"){
    // on met dans $recup le contenu du dossier cible ($chemin)
    $recup = scandir($chemin);

    $sortie="";

    // si le chemin est erroné ou inaccessible
    if(!$recup){
        // envoi de l'erreur, arrêt de la fonction
        return "Chemin erroné ou innaccessible";
    }
    // chemin juste - on liste le tableau
    foreach($recup as $clef => $valeur){
        // si les valeurs sont différentes de racine (.) ou remonter au niveau parent (..)
        if($valeur!="."&&$valeur!=".."&&$valeur!=".git"){
            // si c'est un dossier
            if(is_dir($chemin.$valeur)){
                $sortie.= " * $valeur \n
                ";
                $sortie.= "\t".listFiles($chemin.$valeur."/")."\n";
                // sinon c'est un fichier
            }else{
                $sortie.= " - $valeur \n";
            }
        }
    }
    return $sortie;

}

$b = listFiles("./");

?>
<pre>
<?php
// affichage du contenu du dossier cible
var_dump($b);
?>
</pre>
<h3>Fonction récurisve</h3>
<pre><code>
    function dirToArray($dir) {

    $result = array();

    $cdir = scandir($dir);
    foreach ($cdir as $key => $value)
    {
    if (!in_array($value,array(".","..")))
    {
    if (is_dir($dir . DIRECTORY_SEPARATOR . $value))
    {
    $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value);
    }
    else
    {
    $result[] = $value;
    }
    }
    }

    return $result;
    }
</code></pre>