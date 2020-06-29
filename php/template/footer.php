  </main>
  <footer>
    <section class="principal_footer">
      <div class="social_media">
        <p>Suivez nous sur les reseaux sociaux</p>
        <div class="media_sociaux_icone">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter-square"></i></i></a>
          <a href="#"><i class="fab fa-instagram"></i></i></a>
        </div>
      </div>
      <div class="date_time">
        
      </div>
      <div class="next_movies">
       <span class="next_movies_title">Découvrez les films à l'affiche la semaine prochaine:</span>
        <ul>
          <?php foreach ($nextMovies as $nextMovie) : ?>
          <li><?= $nextMovie ?></li>
          <?php endforeach; ?>  
        </ul>
      </div>
    </section>
    <section class="name_website">
      <p><strong id="name_cinema"> Cinema fantasy </strong> - 44 rue du feuillet 69700 BEAUVALLON</p>
      <p>Fanny Fantasy | <i class="fas fa-cloud"></i></p>
    </section>
  </footer>
  <script src="../js/app.js"></script>
</body>
</html>