<?php
   include 'langue.php';
?>
<!doctype html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title><?php echo $textes['index_title']; ?></title>
      <link type="text/css" href="css/style.css" rel="stylesheet">
      <link type="text/css" href="css/charcot.css" rel="stylesheet">
      <link rel="icon" href="favicon.ico" />
   </head>
   <body>
      <header>
         <h1>
            <a href="index.php<?php echo $suffix_url; ?>"><?php echo $textes['index_title']; ?></a>
            <a id="lang_link" href="charcot.php<?php echo $suffix_url == "?en" ? "" : "?en"; ?>">
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
               <li><a href="amenagements.php<?php echo $suffix_url; ?>" title="<?php echo $textes['amenagements']; ?>"><?php echo $textes['amenagements']; ?></a></li>
               <li class="active"><a href="charcot.php<?php echo $suffix_url; ?>" title="<?php echo $textes['maladie_charcot']; ?>"><?php echo $textes['maladie_charcot']; ?></a></li>
               <li><a href="futur.php<?php echo $suffix_url; ?>" title="<?php echo $textes['futur']; ?>"><?php echo $textes['futur']; ?></a></li>
            </ul>
         </nav>
         <h2><?php echo $textes['maladie_charcot']; ?></h2>
         <p><?php echo $textes['maladie_charcot_paragraphe']; ?></p>
      </header>
      <main>
         <article>
            <h2><?php echo $textes['ckoi?']; ?></h2>
            <p>
               <img src="img/fauteuil.jpg" class="droiteImage" alt="<?php echo $textes['fauteuil_img_alt']; ?>" />
               <?php echo $textes['charcot_p1']; ?>
            </p>
            <p>
            <?php echo $textes['charcot_p2']; ?>
            </p>
            <p>
            <?php echo $textes['charcot_p3']; ?>
            </p>
            <p>
            <?php echo $textes['charcot_p4']; ?>
            </p>
            <p>
            <?php echo $textes['charcot_p5']; ?>
            </p>
            <h2>Stephen Hawking</h2>
            <h3><?php echo $textes['son_histoire']; ?></h3>
            <p>
               <img src="img/stephen.jpg" alt="<?php echo $textes['hawking_img_alt']; ?>" />
               <?php echo $textes['charcot_p6']; ?>
            </p>
            <p>
            <?php echo $textes['charcot_p7']; ?>
            </p>
            <h3><?php echo $textes['evolutions_technologiques']; ?></h3>
            <p>
            <?php echo $textes['charcot_p8']; ?>
            </p>
            <p>
            <?php echo $textes['charcot_p9']; ?>
            </p>
            <h2><?php echo $textes['collab_intel']; ?></h2>
            <p>
               <img src="img/stephenPc.jpg" class="droiteImage" alt="<?php echo $textes['hawking_img_alt2']; ?>" />
               <?php echo $textes['charcot_p10']; ?>
            </p>
            <p>
            <?php echo $textes['charcot_p11']; ?>
            </p>
            <p>
            <?php echo $textes['charcot_p12']; ?>
            </p>
            <h3><?php echo $textes['systeme_acat']; ?></h3>
            <p>
               <img src="img/stephenAcat.jpg" alt="<?php echo $textes['acat_img_alt']; ?>" />
               <?php echo $textes['charcot_p13']; ?>
            </p>
         </article>
      </main>
      <?php
         include 'pieds_de_page.php';
      ?>
   </body>
</html>