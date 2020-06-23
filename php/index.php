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
            <div class="one_movie">
              <img src="<?php echo $movies[0]['image']; ?>" alt="">
            </div>
            <div class="one_movie">
              <img src="<?php echo $movies[0]['image']; ?>" alt="">
            </div>
            <div class="one_movie">
              <img src="<?php echo $movies[0]['image']; ?>" alt="">
            </div>
            <div class="one_movie">
              <img src="<?php echo $movies[0]['image']; ?>" alt="">
            </div>
            <div class="one_movie">
              <img src="<?php echo $movies[0]['image']; ?>" alt="">
            </div>
          </div>
          <div class="line_info-movies">
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
                    titre
                    <span>avis</span>
                  </h3>
                  <h4>realisateur</h4>
                  <h4>acteurs</h4>
                  <div class="">
                    <span>durée</span>
                    <span>classification</span>
                  </div>
                  <p>synopsis</p>

                </div>

              </div>

            </div>

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
        <p>Une question ? une siggestion de film ? Ecrivez-nous un message:</p>
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

