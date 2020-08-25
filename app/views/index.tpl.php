<?php 
  $pagetitle = 'Accueil';
  include '../app/utils/fonctions.php';
  $prices = getPrices();
?>

<button class="back-to-top" type="button"></button>
<section class="presentation ok">
  <div class="text_presentation">
    <h2 class="title_category"><img src="../public/assets/images/icons8-projecteur-de-film-26.png" alt="" height="35px"> Découvrez notre cinéma familliale et atypique!</h2>
    <div class="text">
      <p>Le cinéma Fantasy est un petit cinéma de quatier, contenant 4 salles, diffusant uniquement des films fantastiques. Chaque semaine 10 films à l'affiche, de toutes nationnalités, périodes et de tous univers.</p> <br>
      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro beatae voluptatem mollitia deleniti pariatur sit tenetur repudiandae laudantium dicta vel! Officia quis tempore perspiciatis temporibus corrupti facilis unde molestias molestiae non officiis? Rem blanditiis laboriosam recusandae totam, ipsam eius ad, quia aperiam excepturi ut dicta illo ea, dolore ullam ratione officiis odio? Quaerat, tempore delectus cupiditate quas asperiores similique quo rerum dolor maiores, deserunt suscipit. Nemo, eveniet nisi similique officia corrupti ipsum quaerat error sed repellendus ipsam facere aliquam est commodi eligendi dolores explicabo esse deleniti atque inventore molestias libero.
      </p> <br>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti qui dolorum placeat odio quas optio labore quae facilis, rem impedit hic quasi quos a tempore itaque aliquam consectetur maiores numquam ullam minima ex accusantium ea nobis expedita. Beatae dolorem, magni amet molestias totam dolor, cum ea, obcaecati sint hic recusandae.</p>
    </div>
  </div>
  <div class="img_presentation" >
    <img src="../public/assets/images/salle.webp" alt="">
  </div>
</section>
<section id="ensalle" class="movies">
  <div>
    <h2 class="title_category"><img src="../public/assets/images/icons8-début-du-film-64.png" alt="" height="35px"> Films à l'affiche cette semaine :</h2>
  </div>
  <div class="parent">
  	<h2 class="animation_info_movie"><span class="animation_span"></span></h2>
  </div>
  <div class="all_posters_movies">
    <?php $iterations = count($movies);

      $total = ceil($iterations/5);
      $loopPoster = 0;
      $loopInfos = 0;

      for ($i=0; $i < $total; $i++){
    ?>
    <div class="line_posters_movies">
      <div class="line_img_movies slideshow" id="slide<?php echo $loopPoster; ?>">
        <?php 
          for ($y=0 ; $y < 5; $y++){ 
            if ($loopPoster <= $iterations) { ?>
              <div class="one_movie" id="movie<?php echo $loopPoster; ?>" data-infomovie="info_movie<?php echo $loopPoster; ?>">
                <img src="<?php echo $movies[$loopPoster]['image']; ?>" alt="">
              </div>
            <?php
              $loopPoster++;
            }
          } ?>
      </div>
      <div class="line_info_movies">
        <?php 
        for ($x=0; $x < 5; $x++){
          if ($loopInfos <= $iterations) { ?>
            <div class="info_movie" id="info_movie<?php echo $loopInfos; ?>">
              <div class="background">

              </div>
              <span class="cross_button" data-closeid="info_movie<?php echo $loopInfos; ?>"><i class="fas fa-times"></i></span>
              <div class="content_movie">
                <div class="poster_movie">
                  <img src="<?php echo $movies[$loopInfos]['image']; ?>" alt="">
                </div>
                <div class="detail_movie">
                  <div class="detail_infos">
                    <h3>
                      <?php echo $movies[$loopInfos]['title']; ?> 
                      (<?php echo $movies[$loopInfos]['annéeDeSortie']; ?>)
                      <span class="rate_movie"><?php echo $movies[$loopInfos]['avis']; ?> 
                      <i class="fas fa-star"></i></span>
                    </h3>
                    <h4>Réalisé par <strong><?php echo $movies[$loopInfos]['realisateur']; ?></strong></h4>
                    <h4>Avec <strong><?php echo $movies[$loopInfos]['acteur']; ?></strong></h4>
                    <div class="time_age">
                      <span><?php echo $movies[$loopInfos]['durée']; ?></span>
                      <span class="age"><?php echo $movies[$loopInfos]['age']; ?></span>
                    </div>
                  </div>
                  <p class="detail_synopsis"><?php echo $movies[$loopInfos]['synopsis']; ?></p>
                </div>

              </div>

            </div>
        <?php 
        $loopInfos++;
        }
      } ?>

      </div>
    </div>
  <?php 
} ?>
    
  </div>


</section>
<section id="programme" class="film_session">
  <div>
    <h2 class="title_category"><img src="../public/assets/images/icons8-cinéma-50.png" alt="" height="35px"> Programme - Semaine du 6 au 12 Juillet</h2>
  </div>
  <div class="week">
    <?php foreach ($programmingMovies as $clef => $day) { ?>
    <div class="day">
      <div class="date"><?php echo $clef; ?></div>
        <div class="programme_of_day">   
        <?php foreach ($day as $timmingMovie => $valeur) {	
            ?>
            <div class="one_show">
              <div class="hours"><?php echo $timmingMovie; ?></div>
              <div class="movie_of_hour"><?php echo $valeur; ?></div>
              <p>- - - - - - - - - -</p>
            </div>
            <?php } ?>
      </div>
    </div>
    <?php }?>
  </div>
</section>
<section id="prices" class="prices">
  <div>
    <h2 class="title_category"><img src="../public/assets/images/icons8-ticket-64.png" alt="" height="35px"> Tarifs</h2>
  </div>
  <div class="prices_info">
    <div class="ticket">
      <i class="fas fa-ticket-alt"></i>
    </div>
    <div class="bloc_price">
      <ul>
        <li>Plein Tarif : <?php echo $prices['plein']; ?> &euro;</li>
        <li>Enfant - de 16 ans : <?php echo $prices['enfant']; ?> &euro;</li>
        <li>Tarif réduit * : <?php echo $prices['reduit']; ?> &euro;</li>
        <p class="price_reduce">* Carte vermeil, demandeur d'emploi, carte famille nombreuse et handicapé. Justificatif obligatoire</p>
      </ul>
    </div>
    <div>
      <ul>
        <li>Carte 5 places : <?php echo $prices['carte5']; ?> &euro;</li>
        <li>Carte 10 places : <?php echo $prices['carte10']; ?> &euro;</li>
      </ul>
    </div>
  </div>
  
</section>
<div class="line_separation">
  <hr>
</div>
<section id="contact" class="contact">
  <div class="form_contact">
    <h2><img src="../public/assets/images/icons8-étoile-50.png" alt="" height="35px"> Nous contacter</h2>
    <p>Une question ? une suggestion de film ? Ecrivez-nous un message:</p>

    <form action="" method="POST">
      <div class="box_form">
        <label for="input_name">Nom Prénom</label> <br>
        <input type="text" placeholder=""  name="name" id="input_name">
      </div>
      <div class="box_form">
        <label for="input_email">Email</label> <br>
        <input type="email" id="" placeholder=""  name="email" id="input_email">
      </div>
      <div class="box_form">
        <label for="input_message">Message</label> <br>
        <textarea id="" cols="30" rows="5" placeholder=""  name="message" id="input_message"></textarea>
      </div>
      <input type="submit" value="Envoyer">
    </form>

  </div>
  <div class="map">
    <h2><img src="../public/assets/images/icons8-bobine-de-film-80.png" alt="" height="35px"> Où sommes nous situé?</h2>
      <div class="map" id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
        <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
        <script>(function () {
        var setting = {"height":528,"width":803,"zoom":17,"queryString":"Boulevard du Pilat, 69440 Mornant, France","place_id":"EilCb3VsZXZhcmQgZHUgUGlsYXQsIDY5NDQwIE1vcm5hbnQsIEZyYW5jZSIuKiwKFAoSCXUiev0q-_RHEVUMKs5kwFhuEhQKEgktObK4Kfv0RxG5j91MWUuRkw","satellite":false,"centerCoord":[45.61633501622571,4.675099400000002],"cid":"0x6e58c064ce2a0c55","lang":"fr","cityUrl":"/france/lyon","cityAnchorText":"Carte de Lyon, Rhône-Alpes, France","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"242208"};
        var d = document;
        var s = d.createElement('script');
        s.src = 'https://1map.com/js/script-for-user.js?embed_id=242208';
        s.async = true;
        s.onload = function (e) {
          window.OneMap.initMap(setting)
        };
        var to = d.getElementsByTagName('script')[0];
        to.parentNode.insertBefore(s, to);
        })();
      </script>
    </div>          
  </div>
</section>
   




<?php 

