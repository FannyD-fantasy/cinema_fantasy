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
      <?php  /*************************  CALQUE CALENDRIER   ***************************************************/  ?>
        <div id="LayerCalendar" >
        <?php $mois=array(1=>"Janvier", "Février", "Mars", "Avril", "Mai", "Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Décembre"); ?>
            <table width="250" border="0" cellpadding="0" cellspacing="0">
            <tr height="30">
          <td colspan="7"><div align="center" class="calendrier_mois"><?php echo $mois[date("n")]; ?> 2020</div></td>
            </tr>  
            <tr height="30">
          <td colspan="7"><hr noshade size="1"></td>
            </tr>
            <tr height="30" class="calendrier_nom_des_jours">
          <td>D</td><td>L</td><td>M</td><td>M</td><td>J</td><td>V</td><td>S</td>
            </tr>   		  
            <tr height="30">
            <?php /* trouver le premier jour de la semaine */
              $todayis = date("j", mktime(0, 0, 0, date("m"), date("d"), date("Y")));
                $day = str_replace ('0', '7', date("w", mktime(0, 0, 0, date("m"), 1, date("Y")))); $col=0;
                    $daynum = 1;
              $daypermonth = date("j", mktime(0, 0, 0, date("m")+1, 0, date("Y")));
              $nextdate = 0;
              while($col<$day) {
                  printf("<td><div align=\"center\" class=\"calendrier_jour\"></div></td>\n");
                  $col++;
                }
              while($daynum<=$daypermonth) {
                if ($col>6) {
                    $col = 0;
                  echo "</tr>";	/* fin de la ligne précédente */
                  echo "<tr height='30'>"; /* nouvelle ligne */
                }
                                  /* affichage du jour */	
                printf("<td><div align=\"center\" class=\"calendrier_jour\">");
                      if($daynum == $todayis) printf("<b>%d</b>", $daynum); else printf("%d", $daynum);
                      
                                  printf("</div></td>\n");
                
                $daynum++;
                $col++;
              }
                echo "<td colspan=".(7-$col)."></td></tr>";
              ?>	
          </table>
        </div>
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
      <p><strong id="name_cinema"> Cinema fantasy </strong> - 44 rue du feuillet 69700 BEAUVALLON</p>
      <p>FannyD. Fantasy | <i class="fas fa-cloud"></i></p>
    </section>
  </footer>
  <script src="../js/app.js"></script>
</body>
</html>