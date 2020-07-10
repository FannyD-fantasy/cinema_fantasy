<section id="programme" class="film_session">
      <div>
        <h2 class="title_category"><img src="../assets/images/icons8-cinéma-50.png" alt="" height="35px"> Programme - Semaine du 6 au 12 Juillet</h2>
      </div>
      <div class="week">
        <?php 
          foreach ($programmingMovies as $clef => $day) {
            ?>
            <div class="day">
              <div class="date"><?php echo $clef; ?> </div>
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
          <?php }
        ?>
      </div>
    </section>