<?php
// Quand un traitement, une logique se répète dans notre code, on peut le factoriser dans un fonction car PHP nous permet de créer des fonctions utilisateur.
// Une fonction permet d'éviter de copier / coller plusieurs fois le même code à différents endroits de l'application. Il est beaucoup pratique, notamment pour la maintenance / évolution de l'application de positionner certains traitements dans des fonctions. Elles sont également pratique lorsque l'on travaille en équipe : plutôt que de copier / coller le code du collègue (qui peut évoluer dans le temps et qu'il faudra penser à mettre à jour (la galère !!!)), on peut utiliser une fonction qui centralisera toute la logique.
// On peut créer des fonctions dites d'utilisateur avec le mot clé function (https://www.php.net/manual/fr/functions.user-defined.php)
// Toute fonction créée doit avoir un nom
// Toutes les variables créées à l'intérieur de la fonction ne seront accessibles qu'à l'intérieur de celle-ci.
// Toutes les variables créees en dehors de la fonction ne seront pas accesibles à l'intérieur de celle-ci.
// Pour partager des valeurs depuis l'extérieur de la fonction, il faut les passer en argument. Les arguments seront réceptionnés dans des paramètres.
// $age est un paramètre obligatoire de la fonction calculerTarif. Un paramètre se comporte dans le corps de la fonction (ce qu'il y a entre accolades) comme une variable classique
// On mets en paramètre uniquement les valeurs dynamiques dans le traitement de la fonction. Par exemple, si nous définissions la variable $age manuellement dans la fonction, il faudrait créer une fonction par âge possible : LA GALERE !!! calculerTarifAge43(), calculerTarifAge44(), ... Ici, on décide que la variable $age permet de faire le calcul de la fonction : calculerTarif(43); calculerTarif(44); ...
// Les paramètres sont les portes d'entrée
/*
Différence paramètre / argument :
    - argument : c'est la valeur qu'on envoie à la fonction : calculerTarif(5). 5 est un argument
    - paramètre : c'est la variable qui va accueillir la valeur envoyée en argument.
On peut imaginer que PHP fait, au début de traitement de la fonction quand on a (pour calculerTarif(5)), $age = 5;

*/
// Une fonction peut avoir autant de paramètre que l'on veut. On les sépare par des virgules dans la déclaration de la fonction
function calculerTarif($age)
{
    // Pas obligatoire mais : je déclare la variable que je vais retourner au début de la fonction avec sa valeur par défaut.
    $montant = 0;

    // La variable $tarifs est spécifique à ma fonction. Elle n'aura pas d'impact sur l'extérieur ni sera accessible à l'extérieur
    $tarifs = [
        'plein' => 8.30,
        'reduit' => 6.80,
        'enfant' => 4.50,
    ];

    if ($age <= 14) {
        $montant = $tarifs['enfant'];
    // Je n'ai pas besoin de rester que j'ai plus de 14 vu que c'est la condition précédente qui l'a fait
    // || = OR
    // && = AND
    } elseif (($age <= 16) || ($age >= 60)) {
        $montant = $tarifs['reduit'];
    } else {
        $montant = $tarifs['plein'];
    }

    /*
    echo '<pre>';
    var_dump($age, $montant);
    echo '</pre><hr />';
    */

    // Le contenu de la variable $montant créée dans la fonction n'étant pas accessible à l'extérieur de ma fonction, je dois le retourner.
    // On retourne une valeur avec le mot clé return.
    // La valeur passée dans le return est la porte de sortie. Elle permet de donner accès à une valeur à l'extérieur de la fonction.
    // Quand on return une valeur, le traitement de la fonction s'arrête. En gros, PHP sort de la fonction.
    // Si je veux retourner plusieurs valeurs, c'est peut-être que j'ai besoin de plusieurs fonctions ? Si ce n'est pas le cas, je peux les retourner sous la forme d'un tableau associatif.
    return $montant;

    // Ce traitement ne sera pas exécuté à l'appel de la fonction car le return a déjà été exécuté.
    echo 'Toto';
}

/*
Les noms de fonction utilisateur ne sont pas sensibles à la casse (pas de différence entre majuscules et minucules)
$montant = CALCULERTARIF(5);
var_dump($montant);

$montant = calculerTarif(60);
var_dump($montant);

J'appelle une fonction utilisateur de la même manière que j'appelerais une fonction de PHP.
 Je peux exécuter la fonction autant de fois que je veux.
Quand j'appelle une fonction, j'exécute les traitements qui lui sont définis entre accolades.
 Pour réceptionner la valeur retournée par la fonction, je peux l'affecter à une variable
Je peux envoyer le contenu d'une variable en argument de l'appel à une fonction
$ageCapitaine = 43;
$toto = calculerTarif($ageCapitaine);
var_dump($ageCapitaine, $toto);
echo calculerTarif($ageCapitaine);
echo $ageCapitaine;
*/
