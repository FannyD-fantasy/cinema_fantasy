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
      <div class="img_presentation">
        <img src="../assets/images/salle.webp" alt="">
      </div>
    </section>
    <section id="ensalle" class="movies">
      <div>
        <h2>Films à l'affiche cette semaine :</h2>
      </div>

      <div class="all_posters_movies">

        <div class="line_posters_movies">
          <div class="line_img_movies">
            <?php foreach($movies as $movie=>$index) { if ($movie < 5) {  ?>
            <div class="one_movie">
              <img src="<?php echo $index['image']; ?>" alt="">
            </div>
            <?php
              
            }} ?>
          </div>
          <div class="line_info-movies">
            <?php foreach($movies as $movie=>$index) { if ($movie <5 ) { ?>
            <div class="info_movie">
              <div class="background">

              </div>
              <div class="button">

              </div>
              <div class="content_movie">
                <div class="poster_movie">
                  <img src="" alt="">
                </div>
                <div class="detail_movie">
                  <h3>
                  <?php echo $index['title']; ?> (<?php echo $index['annéeDeSortie']; ?>)
                    <span>avis</span>
                  </h3>
                  <h4><?php echo $index['realisateur']; ?></h4>
                  <h4><?php echo $index['acteur']; ?></h4>
                  <div class="">
                    <span><?php echo $index['durée']; ?></span>
                    <span><?php echo $index['age']; ?></span>
                  </div>
                  <p><?php echo $index['synopsis']; ?></p>

                </div>

              </div>

            </div>
            <?php }} ?>

          </div>
        </div>
        <div class="line_posters_movies">
          <div class="line_img_movies">
            <?php foreach($movies as $movie=>$index) { if ($movie > 4) {  ?>
            <div class="one_movie">
              <img src="<?php echo $index['image']; ?>" alt="">
            </div>
            <?php
              
            }} ?>
          </div>
          <div class="line_info-movies">
            <?php foreach($movies as $movie=>$index) { if ($movie > 4 ) { ?>
            <div class="info_movie">
              <div class="background">

              </div>
              <div class="button">

              </div>
              <div class="content_movie">
                <div class="poster_movie">
                  <img src="" alt="">
                </div>
                <div class="detail_movie">
                  <h3>
                  <?php echo $index['title']; ?>
                    <span>avis</span>
                  </h3>
                  <h4><?php echo $index['realisateur']; ?></h4>
                  <h4><?php echo $index['acteur']; ?></h4>
                  <div class="">
                    <span><?php echo $index['durée']; ?></span>
                    <span><?php echo $index['age']; ?></span>
                  </div>
                  <p><?php echo $index['synopsis']; ?></p>

                </div>

              </div>

            </div>
            <?php }} ?>

          </div>
        </div>

      </div>

    
    </section>
    <section id="programme" class="film_session">
      <div>
        <h2>Programme - Semaine du 6 au 12 Juillet</h2>
      </div>
      <div class="day"></div>
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

      </div>
    </section>
    <?php 
    include 'template/footer.php';
    ?>




<?php 

