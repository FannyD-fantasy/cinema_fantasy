<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - En salle</title>
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
    include 'template/navigation.php';
    ?>
  </header>
    <main> 
      <section>   
      <h2>En salle</h2>
      <?php
      // Je déclare une variable de type tableau (array)
      // Un tableau est une liste
      // Chaque valeur dans le tableau est séparée par une virgule
      // Dans un tableau, on peut mettre des données de n'importe quel type : int, float, boolean, string, ... array
      // Les éléments dans un tableau ont une position : un index. Par défaut, l'index du premier élément dans le tableau est 0
      $filmsEnSalle = [
          'Titanic',
          'Le dîner de cons',
          'Contagion',
          'Joker',
          'Le jour d\'après',
      ];

      ?>
      <ul>
        <?php
        // J'affiche la première valeur contenu dans mon tableau (la valeur associée à l'index 0)
        ?>
        <li><?php echo $filmsEnSalle[0]; ?></li>
        <li><?php echo $filmsEnSalle[1]; ?></li>
        <li><?php echo $filmsEnSalle[2]; ?></li>
        <li><?php echo $filmsEnSalle[3]; ?></li>
        <li><?php echo $filmsEnSalle[4]; ?></li>
      </ul>
      </section>
    </main>
  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>