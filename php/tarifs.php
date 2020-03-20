<?php 
//je definie les varaibles des differents tarifs
//il est interressant de créer les varaibles au debut du document de manière à ce qu'elles soient accessibles à tout moment dans le document HTML
// Les variables permettent de recycler les valeurs que l'on veut utiliser dans la page plutôt que d'avoir à les écrire à chaque fois en dur. On peut parler de dynamisation des informations de la page.
        $tarifPlein = 8.3;
        $tarifReduit = 6.8;
        $tarifEnfant = 4.5;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Tarifs</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Cinéma Rodia</h1>
    <?php 
     // Je demande à PHP de récupérer le contenu d'un autre fichier avec l'instruction include (https://www.php.net/manual/fr/function.include.php)
    // Le chemin vers le fichier est relatif au fichier qui l'inclus (on démarre le chemin du fichier à inclure à partir du chemin du fichier qui l'inclut)
    // Si le fichier n'existe pas, PHP délenchera une erreur de type Warning et continuera de traiter le fichier. Si require est utilisé à la place d'include, une erreur de type Fatal sera déclenchée et PHP ne continuera pas le traitement
    // On ne peut inclure que des fichiers PHP
    // Si des variables sont crées dans le fichier inclus, elles seront accessibles dans la suite du code
    // On peut utiliser l'inclusion de fichier avec PHP pour éviter de nous répéter dans le code HTML. On parle de factorisation du code HTML.
    // La factorisation du code permet de faciliter le maintenance de celui-ci. Dans le cas d'une navigation factorisée, on n'aura plus qu'à modifier le template si une nouvelle page est à ajouter dans la navigation au lieu de modifier toutes les pages une par une.
    include 'template/navigation.php';
    ?>
  </header>
  <main>
    <section id="tarifs">
      <h2>Tarifs</h2>
        <div class="flex">
          <ul>
            <li>Tarif Plein : <?php echo $tarifPlein; ?> &euro;</li>
            <li>Tarif Réduit : <?php echo $tarifReduit; ?> &euro;</li>
            <li>Tarif Enfant : <?php echo $tarifEnfant; ?> &euro;</li>
            <li>Supplément 3D : 1 &euro;</li>
          </ul>
          <ul>
            <li>Abonnement 5 places : -10%</li>
            <li>Abonnement 5 places -25ans : -20%</li>
          </ul>
        </div>
        <p>
          Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
          Tarif Enfant pour les - de 14 ans
        </p>
      
      <h2>Selon votre âge</h2>
      <p>
        <?php
        //je definie la variable $age
        $age = 43;

       

        //je calcule le montant avec la valeur de la variable definie précédemment
        $montant = 0;
        if ($age <= 14) {
              $montant = $tarifEnfant;
          
          } elseif (($age <= 16) || ($age >= 60)) {
              $montant = $tarifReduit;
          } else {
              $montant = $tarifPlein;
          }
        echo "L'age du Capitaine est $age ans et il payera se place de cinéma $montant €.";

        ?>
        <span>L'âge du capitaine est <?php echo $age; ?> ans et il payera sa place de cinéma <?php echo $montant; ?> €.</span>
      </p>
      <table class="prices">
        <thead>
          <tr>
            <th>Âge</th>
            <th>Montant</th>
          </tr>
        </thead>
          <tbody>
            <?php 
            $age = 1;
            // PHP, grâce à une boucle, nous permet de répéter un traitement autant de fois que nous le voulons
            // La boucle while prend entre parenthèse une expression booléenne qui va permettre à PHP de savoir s'il doit continuer la boucle
            // Pour éviter d'être face à une boucle dite infinie, il faut penser à faire évoluer la variable que l'on utilise dans l'expression du while par exemple en l'incrémantant. Incrémenter veut dire ajouter 1 à la variable. (À l'opposé, décrémenter veut dire enlever 1 à la variable)
            // Tant que la condition est vraie, PHP recommencera le traitement entre les accolades. Chaque traitement répété est appelé itération.
            while ($age <= 99) {
              // Je calcule le montant avec la valeur de la variable $age définie précédemment
              $montant = 0;
              if ($age <= 14) {
                  $montant = $tarifEnfant;
              // Je n'ai pas besoin de rester que j'ai plus de 14 vu que c'est la condition précédente qui l'a fait
              // || = OR
              // && = AND
              } elseif (($age <= 16) || ($age >= 60)) {
                  $montant = $tarifReduit;
              } else {
                  $montant = $tarifPlein;
              }
              ?>
                <tr>
                  <td><?php echo $age; ?> ans</td>
                  <td><?php echo $montant; ?> €</td>
                </tr>
              <?php

              // Habituellement, on incrémente la valeur de la variable utilisée dans l'expression à la fin du traitement exécuté par la boucle while
              $age = $age + 1;
          }
          ?>
        </tbody>
      </table>
      <table class="prices">
        <thead>
          <tr>
            <th>Âge</th>
            <th>Montant</th>
          </tr>
        </thead>
        <tbody>
            <?php
            // La boucle for
            // Même principe qu'une boucle while mais avec toutes les informations entre parenthèse ()
            for (
                $age = 1; // Traitement à faire avant de commencer la boucle (exécuté qu'une seule fois)
                $age <= 99; // Expression à tester avant de continuer la boucle (avant de faire une nouvelle itération) (exécutée avant de commencer une itération)
                $age = $age + 1 // Traitement à exécuter à chaque fin d'itération
            ) {
                // Je calcule le montant avec la valeur de la variable $age définie précédemment
                $montant = 0;
                if ($age <= 14) {
                    $montant = $tarifEnfant;
                // Je n'ai pas besoin de rester que j'ai plus de 14 vu que c'est la condition précédente qui l'a fait
                // || = OR
                // && = AND
                } elseif (($age <= 16) || ($age >= 60)) {
                    $montant = $tarifReduit;
                } else {
                    $montant = $tarifPlein;
                }
                ?>
                <tr>
                    <td><?php echo $age; ?> ans</td>
                    <td><?php echo $montant; ?> €</td>
                </tr>
                <?php
            }
            ?>
        </tbody>
      </table>
    </section>
  </main>
  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
