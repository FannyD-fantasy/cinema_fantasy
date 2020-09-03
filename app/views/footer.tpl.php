  </main>
  <footer>
    <section class="principal_footer">
      <div class="social_media">
        <p class="footer_sociaux_text">Suivez nous sur les reseaux sociaux</p>
        <div class="media_sociaux_icone">
          <a href="#"><i class="fab fa-facebook"></i></a>
          <a href="#"><i class="fab fa-twitter-square"></i></i></a>
          <a href="#"><i class="fab fa-instagram"></i></i></a>
        </div>
      </div>
      <div class="date_time">
      <style type="text/css">
        #calendrier li { list-style: none; }
        #libelle {width: 210px;margin: 0 auto;padding-bottom: 10px; list-style: none;}
        .ligne {width: 210px;margin: 0 auto;padding: 0; list-style: none; } 
        #libelle li {float : left;width : 30px; list-style: none; padding-bottom: 10px;}
        .ligne li {color: white;float : left; width : 30px; list-style: none; padding-bottom: 10px;}
        .ligne li a:hover{list-style: none;text-decoration: none; list-style: none;}
        li.itemCurrentItem { color:#99681C;  }
        li.itemSelectedItem { color:red; padding-top: 0; }
      </style>
      <?php
        // fonctions utiles, $valeur représente une date au format AAAA-MM-JJ
        function getDay($valeur) { return substr($valeur, 8, 2); }
        function getMonth($valeur) { return substr($valeur, 5, 2); }
        function getYear($valeur) { return substr($valeur, 0, 4); }
        function monthNumToName($mois) {
          $tableau = Array("", "Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Aôut", "Septembre", "Octobre", "Novembre", "Décembre");
          return (intval($mois) > 0 && intval($mois) < 13) ? $tableau[intval($mois)] : "Indéfini"; }
        function showCalendar($periode) {
          $leCalendrier = "";
          // Tableau des valeurs possibles pour un numéro de jour dans la semaine
          $tableau = Array("0", "1", "2", "3", "4", "5", "6", "0");
          $nb_jour = date("t", mktime(0, 0, 0, getMonth($periode), 1, getYear($periode)));
          $pas = 0;
          $indexe = 1;
          // Affichage du mois et de l'année
          $leCalendrier .= "\n\t<h5><center>" . monthNumToName(getMonth($periode)) . " " . getYear($periode) . "</center></h2>";
          // Affichage des entêtes
          $leCalendrier .= "
          <ul id=\"libelle\">
            <b>\t<li>Lu</li>
            \t<li>Ma</li>
            \t<li>Me</li>
            \t<li>Je</li>
            \t<li>Ve</li>
            \t<li>Sa</li>
            \t<li>Di</li></b>
          </ul>";
          // Tant que l'on n'a pas affecté tous les jours du mois traité
          while ($pas < $nb_jour) {
            if ($indexe == 1) $leCalendrier .= "\n\t<ul class=\"ligne\">";
            // Si le jour calendrier == jour de la semaine en cours
            if (date("w", mktime(0, 0, 0, getMonth($periode), 1 + $pas, getYear($periode))) == $tableau[$indexe]) {
              // Si jour calendrier == aujourd'hui
              $afficheJour = sprintf("%02d",date("j", mktime(0, 0, 0, getMonth($periode), 1 + $pas, getYear($periode))));
              if (date("Y-m-d", mktime(0, 0, 0, getMonth($periode), 1 + $pas, getYear($periode))) == date("Y-m-d")) $class = " class=\"itemCurrentItem\"";
              else {
                // 1 est toujours vrai => on affiche un lien à chaque fois
                if (1) {
                  $class = " class=\"\"";
                  $afficheJour = sprintf("%02d",date("j", mktime(0, 0, 0, getMonth($periode), 1 + $pas, getYear($periode)))); }
                else $class = ""; }
              // Ajout de la case avec la date
              $leCalendrier .= "\n\t\t<li$class>$afficheJour</li>";
              $pas++; }
            else {
              // Ajout d'une case vide
              $leCalendrier .= "\n\t\t<li> </li>"; }
            if ($indexe == 7 && $pas < $nb_jour) { $leCalendrier .= "\n\t</ul>"; $indexe = 1;} else {$indexe++;} }
          // Ajustement du tableau
          for ($i = $indexe; $i <= 7; $i++) $leCalendrier .= "\n\t\t<li> </li>";
          $leCalendrier .= "\n\t</ul>\n";
          // Retour de la chaine contenant le Calendrier
          return $leCalendrier; }
        echo showCalendar(date("Y-m"));
      ?>  
      </div>
      <div class="next_movies">
       <span class="next_movies_title">Découvrez les films à l'affiche la semaine prochaine:</span>
        <ul>
          <?php foreach ($nextMovies as $nextMovie) : ?>
          <li><i class="fas fa-film"></i><?= $nextMovie ?></li>
          <?php endforeach; ?>  
        </ul>
      </div>
    </section>
    <section class="name_website">
      <p><strong id="name_cinema"> Cinema fantasy </strong> - Boulevard du pilat 69440 MORNANT</p>
      <p>FannyD. Fantasy | <i class="fas fa-cloud"></i></p>
    </section>
  </footer>
  <script src="../js/square1.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script> 
  <script src="../js/app.js"></script>
</body>
</html>