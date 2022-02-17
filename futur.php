<?php
   include 'langue.php';
?>
<!doctype html>
<html lang="fr">
   <head>
      <meta charset="UTF-8">
      <title><?php echo $textes['index_title']; ?></title>
      <link type="text/css" href="css/style.css" rel="stylesheet">
      <link type="text/css" href="css/futur.css" rel="stylesheet">
      <link rel="icon" href="favicon.ico" />
   </head>
   <body>
      <header>
         <h1>
            <a href="index.php<?php echo $suffix_url; ?>"><?php echo $textes['index_title']; ?></a>
         </h1>
         <nav>
            <ul>
            <li><a href="index.php<?php echo $suffix_url; ?>" title="<?php echo $textes['accueil']; ?>"><?php echo $textes['accueil']; ?></a></li>
               <li><a href="amenagements.php<?php echo $suffix_url; ?>" title="<?php echo $textes['amenagements']; ?>"><?php echo $textes['amenagements']; ?></a></li>
               <li><a href="charcot.php<?php echo $suffix_url; ?>" title="<?php echo $textes['maladie_charcot']; ?>"><?php echo $textes['maladie_charcot']; ?></a></li>
               <li class="active"><a href="futur.php<?php echo $suffix_url; ?>" title="<?php echo $textes['futur']; ?>"><?php echo $textes['futur']; ?></a></li>
            </ul>
         </nav>
         <h2><?php echo $textes['futur']; ?> <img src="img/exoskeleton.png" alt="<?php echo $textes['exosquelette_img_alt']; ?>"></h2>
         <p><?php echo $textes['futur_paragraphe']; ?></p>
      </header>
      <main>
         <article>
            <h2><?php echo $textes['exosquelettes']; ?></h2>
            <p>
               <iframe title="Video ytb Exo" src="https://www.youtube.com/embed/cEk2ALWC0MY" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  <?php echo $textes['video_exosquelettes_desc']; ?>
            </p>
            <h3><?php echo $textes['composants']; ?></h3>
            <img id="premierePhoto" src="img/exosquelette.jpg" alt="<?php echo $textes['exosquelette2_img_alt']; ?>">
            <p>
            <?php echo $textes['composants_paragraphe']; ?>  
            </p>
            <h4><?php echo $textes['neuroprothèse']; ?></h4>
            <p>
            <?php echo $textes['neuroprothèse_paragraphe']; ?>
            </p>
            <h4><?php echo $textes['interface_neuronale']; ?></h4>
            <p>   
            <?php echo $textes['interface_neuronale_paragraphe']; ?>
               <br>
               <img class="droiteImage" src="img/InterfaceNeuronaleDirecte-fr.svg.png" alt="<?php echo $textes['interface_neuronale_img_alt']; ?>" />
               <br>
               <?php echo $textes['interface_neuronale_paragraphe2']; ?>
            </p>
            <h4><?php echo $textes['ia']; ?></h4>
            <p>   
               <img src="img/cerveau.png" alt="<?php echo $textes['cerveau_img_alt']; ?>">
               <?php echo $textes['ia_paragraphe']; ?>
            </p>
            <figure>
               <iframe width="560" height="315" src="https://www.youtube.com/embed/B-Yc1WQfIWE" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               <figcaption> <b><?php echo $textes['desc_vid_ia']; ?></b> </figcaption>
            </figure>
            <h5><?php echo $textes['comment_ca_marche']; ?></h5>
            <p>
            <?php echo $textes['comment_ca_marche_paragraphe']; ?>
            </p>
            <h5><b><?php echo $textes['machine_learning']; ?></b></h5>
            <p>   
               <img src="img/neural.png" alt="<?php echo $textes['systeme_neuronal_img_alt']; ?>">
               <?php echo $textes['machine_learning_paragraphe']; ?>
            </p>
            <ul>
               <li><?php echo $textes['machine_learning_li1']; ?></li>
               <li><?php echo $textes['machine_learning_li2']; ?></li>
               <li><?php echo $textes['machine_learning_li3']; ?></li>
            </ul>
            <h3><?php echo $textes['exosquelette_fonctionnement']; ?></h3>
            <p>
            <?php echo $textes['exosquelette_fonctionnement_p1']; ?>
            </p>
            <p>
            <?php echo $textes['exosquelette_fonctionnement_p2']; ?>
            </p>
            <p>
            <?php echo $textes['exosquelette_fonctionnement_p3']; ?>
            </p>
            <p>
            <?php echo $textes['exosquelette_fonctionnement_p4']; ?>
            </p>
         </article>
      </main>
      <<?php
         include 'pieds_de_page.php';
      ?>
   </body>
</html>