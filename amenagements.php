<?php
   include 'langue.php';
?>
<!doctype html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title><?php echo $textes['index_title']; ?></title>
      <link type="text/css" href="css/style.css" rel="stylesheet">
      <link type="text/css" href="css/amenagements.css" rel="stylesheet">
      <link rel="icon" href="favicon.ico" />
   </head>
   <body>
      <header>
         <h1>
            <a href="index.php<?php echo $suffix_url; ?>"><?php echo $textes['index_title']; ?></a>
            <a id="lang_link" href="amenagements.php<?php echo $suffix_url == "?en" ? "" : "?en"; ?>">
            <?php
               if($suffix_url == "?en") {
                  echo "Version française";
               } else {
                  echo "English version";
               }
            ?>
            </a>
         </h1>
         <nav>
            <ul>
            <li><a href="index.php<?php echo $suffix_url; ?>" title="<?php echo $textes['accueil']; ?>"><?php echo $textes['accueil']; ?></a></li>
               <li class="active"><a href="amenagements.php<?php echo $suffix_url; ?>" title="<?php echo $textes['amenagements']; ?>"><?php echo $textes['amenagements']; ?></a></li>
               <li><a href="charcot.php<?php echo $suffix_url; ?>" title="<?php echo $textes['maladie_charcot']; ?>"><?php echo $textes['maladie_charcot']; ?></a></li>
               <li><a href="futur.php<?php echo $suffix_url; ?>" title="<?php echo $textes['futur']; ?>"><?php echo $textes['futur']; ?></a></li>
            </ul>
         </nav>
         <h2><?php echo $textes['amenagements']; ?></h2>
         <p><?php echo $textes['utiliser_ordinateur']; ?></p>
      </header>
      <main>
         <article>
            <h2><?php echo $textes['accessibilité']; ?></h2>
            <h3><?php echo $textes['accessibilité_internet']; ?></h3>
            <p>
               <?php echo $textes['accessibilité_internet_paragraphe']; ?>
            </p>
            <h4><?php echo $textes['solutions']; ?></h4>
            <img src="img/ContacteurMenton.jpg" alt="<?php echo $textes['menton_img_alt']; ?>" />
            <p>
               <?php echo $textes['solutions1']; ?>
            </p>
            <?php echo $textes['solutions2']; ?>
            </p>
            <img src="img/SourisTrackball.jpg" class="droiteImage"  alt="<?php echo $textes['souris_img_alt']; ?>" />
            <p>
            <?php echo $textes['solutions3']; ?>
            </p>
            <img src="img/joystick.jpg" alt="<?php echo $textes['joystick_img_alt']; ?>" />
            <p>
            <?php echo $textes['solutions4']; ?>
            </p>
            <p class="clavier">
               <img src="img/ClavierErgonomique.jpg" class="droiteImage" alt="<?php echo $textes['clavier_img_alt']; ?>" />
               <?php echo $textes['solutions5']; ?>
            </p>
            <p>
            <?php echo $textes['solutions6']; ?>
            </p>
            <h5><?php echo $textes['sites?']; ?></h5>
            <p>
            <?php echo $textes['sites?_paragraphe']; ?>
            </p>
            <h3><?php echo $textes['accessibilité_mobilier']; ?></h3>
            <p>
            <?php echo $textes['accessibilité_mobilier_paragraphe']; ?>
            </p>
            <h4><?php echo $textes['solutions']; ?></h4>
            <img src="img/bureauAhauteurVariable.jpg"  alt="<?php echo $textes['bureau_img_alt']; ?>" />
            <p class=solution>
            <?php echo $textes['solutions7']; ?>
            </p>
            <img src="img/reposeBras.jpg" class="droiteImage"  alt="<?php echo $textes['repose_bras_img_alt']; ?>" />
            <p class=solution>
            <?php echo $textes['solutions8']; ?>
            </p>
            <img src="img/supportPCportable.jpg"  alt="<?php echo $textes['support_pc_img_alt']; ?>" />
            <p class=solution>
            <?php echo $textes['solutions9']; ?>
            </p>
            <p>
            <?php echo $textes['solutions10']; ?>
            </p>
            <h3><?php echo $textes['conclusion']; ?></h3>
            <p><?php echo $textes['conclusion_paragraphe']; ?></p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/TLjfUNEp9CI" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen>
            </iframe>
         </article>
      </main>
      <?php
         include 'pieds_de_page.php';
      ?>
   </body>
</html>