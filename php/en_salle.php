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
      // Je déclare une variable de type tableau (array) (https://www.php.net/manual/fr/language.types.array.php)
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
          '28 jours plus tard',
          'The Lighthouse'
      ];

      // Je récupère le nombre d'éléments que contient mon tableau avec la fonction count (https://www.php.net/manual/fr/function.count.php)
      $nombreDeFilmsEnSalle = count($filmsEnSalle);

      ?>
      <ul>
        <?php
        for (
            $index = 0; // On veut afficher les éléments du tableau à partir du premier. On démarre à l'index 0.
            $index < $nombreDeFilmsEnSalle; // On veut afficher tous éléments du tableau. Tant que mon index ne dépasse la longueur de mon tableau (sachant que le dernier élément du tableau a pour index : longueur du tableau - 1), on continue la boucle
            $index = $index + 1 // On oublie par d'incrémenter l'index à chaque fin d'itération de la boucle (sinon boucle infinie)
        ) {
            // Je peux utiliser la valeur d'une variable pour récupérer un élément de mon tableau. Attention, si ma variable ne correspond à aucun élément de mon tableau, PHP déclenchera une erreur.
            ?>
            <li><?php echo $filmsEnSalle[$index]; ?></li>
            <?php
        }
        ?>
      </ul>
      </section>
      <section>
          <h2>Salles</h2>
          <?php
          // [...]
          $rooms = [
            'Athéna',
            'Dyonisos',
            'Hadès',
            'Zeus'
          ];
          $nombreDeRooms = count($rooms);
          ?>
            <ul>
            <?php
              for (
                  $index = 0; // On veut afficher les éléments du tableau à partir du premier. On démarre à l'index 0.
                  $index < $nombreDeRooms; // On veut afficher tous éléments du tableau. Tant que mon index ne dépasse la longueur de mon tableau (sachant que le dernier élément du tableau a pour index : longueur du tableau - 1), on continue la boucle
                  $index = $index + 1 // On oublie par d'incrémenter l'index à chaque fin d'itération de la boucle (sinon boucle infinie)
              ) {
                  // Je peux utiliser la valeur d'une variable pour récupérer un élément de mon tableau. Attention, si ma variable ne correspond à aucun élément de mon tableau, PHP déclenchera une erreur.
                  ?>
                  <li><?php echo $rooms[$index]; ?></li>
                  <?php
              }
              ?>
            </ul>
      </section>
    </main>
  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>