<?php
   include 'langue.php';
?>
<!doctype html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title><?php echo $textes['index_title']; ?></title>
      <link type="text/css" href="css/style.css" rel="stylesheet">
      <link type="text/css" href="css/index.css" rel="stylesheet">
      <link rel="icon" href="favicon.ico" />
   </head>
   <body>
      <header>
         <h1>
            <a href="index.php<?php echo $suffix_url; ?>"><?php echo $textes['index_title']; ?></a>
            <a id="lang_link" href="index.php<?php echo $suffix_url == "?en" ? "" : "?en"; ?>">
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
               <li class="active"><a href="index.php<?php echo $suffix_url; ?>" title="<?php echo $textes['accueil']; ?>"><?php echo $textes['accueil']; ?></a></li>
               <li><a href="amenagements.php<?php echo $suffix_url; ?>" title="<?php echo $textes['amenagements']; ?>"><?php echo $textes['amenagements']; ?></a></li>
               <li><a href="charcot.php<?php echo $suffix_url; ?>" title="<?php echo $textes['maladie_charcot']; ?>"><?php echo $textes['maladie_charcot']; ?></a></li>
               <li><a href="futur.php<?php echo $suffix_url; ?>" title="<?php echo $textes['futur']; ?>"><?php echo $textes['futur']; ?></a></li>
            </ul>
         </nav>
         <h2><?php echo $textes['presentation']; ?></h2>
      </header>
      <main>
         <article>
            <h2><?php echo $textes['tetraplegie?']; ?></h2>
            <p>
               <img src="img/intro.jpg"
                  alt="<?php echo $textes['tetraplegie_img_alt']; ?>" />
                  <?php echo $textes['tetraplegie?_paragraphe']; ?>
            </p>
            <h3><?php echo $textes['causes_tetraplegie']; ?></h3>
                <?php echo $textes['causes_tetraplegie_paragraphe']; ?>
            <ul>
               <li><?php echo $textes['fracture']; ?></li>
               <li><?php echo $textes['infection']; ?></li>
               <li><?php echo $textes['diabete']; ?></li>
               <li><?php echo $textes['ghilain_barré']; ?></li>
               <li><?php echo $textes['maladie_charcot']; ?></li>
               <li><?php echo $textes['cancers']; ?></li>
            </ul>
            <h3><?php echo $textes['sujets_traités']; ?></h3>
            <ul>
               <li><?php echo $textes['sujets_traités1']; ?></li>
               <li><?php echo $textes['sujets_traités2']; ?></li>
               <li><?php echo $textes['sujets_traités3']; ?></li>
            </ul>
            <h3><?php echo $textes['plan_site']; ?></h3>
            <ul>
               <li><a href="amenagements.php<?php echo $suffix_url; ?>"><?php echo $textes['amenagements']; ?></a></li>
               <li><a href="charcot.php<?php echo $suffix_url; ?>"><?php echo $textes['maladie_charcot']; ?></a></li>
               <li><a href="futur.php<?php echo $suffix_url; ?>"><?php echo $textes['futur']; ?></a></li>
            </ul>
            <h3><?php echo $textes['poster_réalisé']; ?></h3>
            <a href="img/poster.png" target="_blank"><img src="img/poster.png" alt="<?php echo $textes['poster_img_alt']; ?>" ></a>
            <p><?php echo $textes['desc_poster_réalisé']; ?></p>
         </article>
      </main>
      <?php
            include 'pieds_de_page.php';
         ?>
   </body>
</html>