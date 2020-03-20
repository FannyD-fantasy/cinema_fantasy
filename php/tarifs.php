<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cinéma Rodia - Tarifs</title>
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,700" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge,chrome=1">
  <link rel="stylesheet" href="../css/reset.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
  <header>
    <h1>Cinéma Rodia</h1>
    <nav>
      <ul>
        <li><a href="index.php">Accueil</a></li>
        <li><a href="#">En salle</a></li>
        <li><a href="tarifs.php">Tarifs</a></li>
        <li><a href="#">Nous contacter</a></li>
      </ul>
    </nav>
  </header>
  <main>
    <section id="tarifs">
      <h2>Tarifs</h2>
        <div class="flex">
          <ul>
            <li>Tarif Plein : 8,30 &euro;</li>
            <li>Tarif Réduit : 6,80 &euro;</li>
            <li>Tarif Enfant : 4,50 &euro;</li>
            <li>Supplément 3D : 1 &euro;</li>
          </ul>
          <ul>
            <li>Abonnement 5 places : -10%</li>
            <li>Abonnement 5 places -25ans : -20%</li>
          </ul>
        </div>
        <p>
          Tarif Réduit pour les personnes de + de 60 ans et de moins de 16 ans<br>
          Tarif Enfant pour les - de 14 ans
        </p>
      
      <h2>Selon votre âge</h2>
      <p>
        <?php
        //je definie la variable $age
        $age = 43;

        //je definie les varaibles des differents tarifs
        $tarifPlein = 8.3;
        $tarifReduit = 6.8;
        $tarifEnfant = 4.5;

        //je calcule le montant avec la valeur de la variable definie précédemment
        $montant = 0;
        if ($age <= 14) {
              $montant = $tarifEnfant;
          
          } elseif (($age <= 16) || ($age >= 60)) {
              $montant = $tarifReduit;
          } else {
              $montant = $tarifPlein;
          }
        echo "L'age du Capitaine est $age ans et il payera se place de cinéma $montant €.";

        ?>
        <span>L'âge du capitaine est <?php echo $age; ?> ans et il payera sa place de cinéma <?php echo $montant; ?> €.</span>
      </p>
    </section>
  </main>
  <footer>
    Cinéma Rodia - 42, avenue Foch, Haut-Cloques &copy; Tous droits réservés
  </footer>
</body>
</html>
