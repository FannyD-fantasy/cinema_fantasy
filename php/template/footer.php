  </main>
  <footer>
    <section class="principal_footer">
      <div class="social_media">
        <p>Suivez nous sur les reseaux sociaux</p>
      </div>
      <div class="date_time">

      </div>
      <div>
        Découvrez les films à l'affiche la semaine prochaine:
        <ul>
          <?php foreach ($nextMovies as $nextMovie) : ?>
          <li><?= $nextMovie ?></li>
          <?php endforeach; ?>  
        </ul>
      </div>
     
      

    </section>
  </footer>
</body>
</html>