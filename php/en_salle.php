<?php 
  $pageTitle = 'En salle';

    include 'template/head.php';
    ?> 
      <section>   
      <h2>En salle</h2>
      <ul>
    <?php
    
    $filmsEnSalle = [
        'Titanic'            => 'titanic.php',
        'Le dîner de cons'   => 'le-diner-de-cons.php',
        'Contagion'          => 'contagion.php',
        'Joker'              => 'joker.php',
        'Le jour d\'après'   => 'le-jour-d-apres.php',
        '28 jours plus tard' => '28-jours-plus-tard.php',
        'La vie est belle'   => 'la-vie-est-belle.php'
    ];

    foreach ($filmsEnSalle as $nomFilm => $URLFilm) {
        ?>
        <li><a href="<?php echo $URLFilm; ?>"><?php echo $nomFilm; ?></a></li>
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
         // $nombreDeRooms = count($rooms);
          ?>
            <ul>
            <?php
              /*for (
                  $index = 0; // On veut afficher les éléments du tableau à partir du premier. On démarre à l'index 0.
                  $index < count($rooms); // On veut afficher tous éléments du tableau. Tant que mon index ne dépasse la longueur de mon tableau (sachant que le dernier élément du tableau a pour index : longueur du tableau - 1), on continue la boucle
                  $index = $index + 1 // On oublie par d'incrémenter l'index à chaque fin d'itération de la boucle (sinon boucle infinie)
              ) {
                  // Je peux utiliser la valeur d'une variable pour récupérer un élément de mon tableau. Attention, si ma variable ne correspond à aucun élément de mon tableau, PHP déclenchera une erreur.
                  ?>
                  <li><?php echo $rooms[$index]; ?></li>
                  <?php
              }*/

              foreach ($rooms as $nomRoom) {
                ?>
                <li><?php echo $nomRoom; ?></li>
                <?php
            }
            ?>
            
            </ul>
      </section>
      <?php 
    include 'template/footer.php';
    ?>
