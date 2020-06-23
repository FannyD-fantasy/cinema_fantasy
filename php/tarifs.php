<?php 

include 'utils/fonctions.php';

$tarifs = recupererTarifs();


include 'template/head.php';
?>
<section id="tarifs">
  <h2>Tarifs</h2>
    <div class="flex">
      <ul>
        <li>Plein tarifs : <?php echo $tarifs['plein']; ?> &euro;</li>
        <li>Enfant - de 16 ans : <?php echo $tarifs['enfant']; ?> &euro;</li>
        <li>Tarif réduit * : <?php echo $tarifs['reduit']; ?> &euro;</li>
      </ul>
      <ul>
        <li>Carte 5 places : <?php echo $tarifs['carte5']; ?> &euro;</li>
        <li>Carte 10 places : <?php echo $tarifs['carte10']; ?> &euro;</li>
      </ul>
    </div>
    <figure class="centerImage">
      <img class="emptyMovieRoom" src="../assets/images/salle-de-cinema-le-cinema-de-personne-1320.png" alt="Salle une du cinema fantasy" width="600">
      <figcaption class="descriptionRoomMovie">Salle N°1 du Cinéma Fantasy</figcaption>
    </figure>
    
</section>

<?php 
include 'template/footer.php';
?>