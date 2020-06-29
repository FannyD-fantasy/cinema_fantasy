<?php 
  $pagetitle = 'Accueil';
    include 'template/head.php';
    include 'utils/fonctions.php';
    $prices = getPrices();
    ?>
    <section class="presentation">
      <div class="text_presentation">
        <h2>Découvrez notre cinéma familliale et atypique!</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur a excepturi quisquam, nesciunt consequuntur sunt soluta itaque quibusdam culpa distinctio tempora? Fugiat natus harum aspernatur, quibusdam sint soluta adipisci molestias.</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro beatae voluptatem mollitia deleniti pariatur sit tenetur repudiandae laudantium dicta vel! Officia quis tempore perspiciatis temporibus corrupti facilis unde molestias molestiae non officiis? Rem blanditiis laboriosam recusandae totam, ipsam eius ad, quia aperiam excepturi ut dicta illo ea, dolore ullam ratione officiis odio? Quaerat, tempore delectus cupiditate quas asperiores similique quo rerum dolor maiores, deserunt suscipit. Nemo, eveniet nisi similique officia corrupti ipsum quaerat error sed repellendus ipsam facere aliquam est commodi eligendi dolores explicabo esse deleniti atque inventore molestias libero.
        </p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti qui dolorum placeat odio quas optio labore quae facilis, rem impedit hic quasi quos a tempore itaque aliquam consectetur maiores numquam ullam minima ex accusantium ea nobis expedita. Beatae dolorem, magni amet molestias totam dolor, cum ea, obcaecati sint hic recusandae.</p>
      </div>
      <div class="img_presentation" >
        <img src="../assets/images/salle.webp" alt="">
      </div>
    </section>
    <section id="ensalle" class="movies">
      <div>
        <h2>Films à l'affiche cette semaine :</h2>
      </div>
      <div class="all_posters_movies">
        <?php $iterations = count($movies);

          $total = ceil($iterations/5);
          $loopPoster = 0;
          $loopInfos = 0;

          for ($i=0; $i < $total; $i++){
        ?>
        <div class="line_posters_movies">
          <div class="line_img_movies">
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
                      <p><?php echo $movies[$loopInfos]['synopsis']; ?></p>
                      <div></div>
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
        <h2>Programme - Semaine du 6 au 12 Juillet</h2>
      </div>
      <div class="week">
        <?php 
          foreach ($programmingMovies as $clef => $day) {
            ?>
            <div class="day">
              <div class="date"><?php echo $clef; ?> </div>
                <div class="programme_of_day pennant">   
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
          <?php }
        ?>
      </div>
    </section>
    <section id="prices" class="prices">
      <div>
        <h2>Tarifs</h2>
      </div>
      <div>
        <ul>
          <li>Plein prices : <?php echo $prices['plein']; ?> &euro;</li>
          <li>Enfant - de 16 ans : <?php echo $prices['enfant']; ?> &euro;</li>
          <li>Tarif réduit * : <?php echo $prices['reduit']; ?> &euro;</li>
        </ul>
        <ul>
          <li>Carte 5 places : <?php echo $prices['carte5']; ?> &euro;</li>
          <li>Carte 10 places : <?php echo $prices['carte10']; ?> &euro;</li>
        </ul>
      </div>
    </section>
    <hr>
    <section id="contact" class="contact">
      <div class="form_contact">
        <h2>Nous contacter</h2>
        <p>Une question ? une suggestion de film ? Ecrivez-nous un message:</p>
        <form action="">
          <div>
            <label for="">Nom Prénom</label>
            <input type="text" placeholder="Nom Prénom">
          </div>
          <div>
            <label for="">Email</label>
            <input type="email" name="" id="" placeholder="Email">
          </div>
          <div>
            <label for="">Message</label>
            <textarea name="" id="" cols="30" rows="10" placeholder="Votre message"></textarea>
          </div>
        </form>
      </div>
      <div class="map">
        <h2>Où sommes nous situé?</h2>
          <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div><script>(function () {
          var setting = {"height":318,"width":601,"zoom":10,"queryString":"44 Rue du Feuillet, 69700 Beauvallon, France","place_id":"ChIJGSVZs0jk9EcRA3bfcTUczgA","satellite":false,"centerCoord":[45.60776796622083,4.733960849999996],"cid":"0xce1c3571df7603","lang":"fr","cityUrl":"/france/lyon","cityAnchorText":"Carte de Lyon, Rhône-Alpes, France","id":"map-9cd199b9cc5410cd3b1ad21cab2e54d3","embed_id":"232343"};
          var d = document;
          var s = d.createElement('script');
          s.src = 'https://1map.com/js/script-for-user.js?embed_id=232343';
          s.async = true;
          s.onload = function (e) {
            window.OneMap.initMap(setting)
          };
          var to = d.getElementsByTagName('script')[0];
          to.parentNode.insertBefore(s, to);
        })();</script><a href="https://1map.com/fr/map-embed">1 Map</a></div>          
      </div>
    </section>
    <?php 
    include 'template/footer.php';
    ?>




<?php 

