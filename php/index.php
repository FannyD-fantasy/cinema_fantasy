<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Haut-Cloques</title>
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
    // Si le fichier n'existe pas, PHP délenchera une erreur de type Warning et continuera de traiter le fichier
    // Si des variables sont crées dans le fichier inclus, elles seront accessibles dans la suite du code
    // On peut utiliser l'inclusion de fichier avec PHP pour éviter de nous répéter dans le code HTML. On parle de factorisation du code HTML.
    // La factorisation du code permet de faciliter le maintenance de celui-ci. Dans le cas d'une navigation factorisée, on n'aura plus qu'à modifier le template si une nouvelle page est à ajouter dans la navigation au lieu de modifier toutes les pages une par une.
    include 'template/navigation.php';
    ?>
  </header>
  <main>
    <section>
      <p><?php echo 'Hello World!'; ?></p>
    </section>
  </main>
  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>




<?php 
//donc php permet de modifier les éléments affichés tout en gardant la structure html
