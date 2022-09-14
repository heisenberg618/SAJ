
            <!-- tester si l'utilisateur est connecté -->
         <?php
                session_start();
                if(isset($_GET['deconnexion']))
                { 
                   if($_GET['deconnexion']==true)
                   {  
                      session_unset();
                      header("location:loginindex.php");
                   }
                }
                else if($_SESSION['CINL'] !== ""){
                    $user = $_SESSION['CINL'];
                    // afficher un message
                    echo "<right>CIN : $user est connecté</right>";
                }
            ?>

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Key Features, About Us">
    <meta name="description" content="">
    <title>accueil</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="accueil.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.11.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i">
    
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "Site176798",
		"logo": "images/onee_titrisation_trt.jpg"
}</script>
    <meta name="theme-color" content="#73a3de">
    <meta property="og:title" content="accueil">
    <meta property="og:type" content="website">
  </head>


  <body class="u-body u-xl-mode"><header class="u-clearfix u-header u-header" id="sec-4ccc" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction=""><div class="u-clearfix u-sheet u-sheet-1">
        <a href="accueil.php" data-page-id="71525385" class="u-image u-logo u-image-1" data-image-width="660" data-image-height="330" title="Page 1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="500">
          <img src="images/onee_titrisation_trt.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-center u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" data-position="Worldpress">
         
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-grey-90 u-text-palette-1-base" href="accueil.php" style="padding: 10px 26px;">accueil</a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-grey-90 u-text-palette-1-base" style="padding: 10px 26px;">service</a><div class="u-nav-popup"><ul class="u-h-spacing-21 u-nav u-unstyled u-v-spacing-17"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="amiable.php#carousel_6e28" data-page-id="258213860">service des dossiers amiable</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Contentieux.php#sec-e080" data-page-id="2940312430">service des dossiers contentieux</a><div class="u-nav-popup"><ul class="u-h-spacing-21 u-nav u-unstyled u-v-spacing-17"><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Contentieux.php#sec-e080" data-page-id="2940312430" target="_blank">à propos du service</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link u-white" href="Contentieux.php#sec-492f" data-page-id="2940312430">mise en place des dossiers contentieux</a>
</li></ul>
</div>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-light-1 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-grey-90 u-text-palette-1-base" href="accueil.php#sec-2c95" data-page-id="71525385" style="padding: 10px 26px;">contact</a>
</li>
</ul>
          </div>




          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
               
                
<ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-4"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="accueil.php">accueil</a></li>
<li class="u-nav-item"><a class="u-button-style u-nav-link">service</a><div class="u-nav-popup"><ul class="u-h-spacing-21 u-nav u-unstyled u-v-spacing-17">
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="amiable.php#carousel_6e28" data-page-id="258213860">service des dossiers amiable</a>
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contentieux.php#sec-e080" data-page-id="2940312430">service des dossiers contentieux</a><div class="u-nav-popup"><ul class="u-h-spacing-21 u-nav u-unstyled u-v-spacing-17">
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contentieux.php#sec-e080" data-page-id="2940312430" target="_blank">à propos du service</a>
</li>
<li class="u-nav-item"><a class="u-button-style u-nav-link" href="Contentieux.php#sec-492f" data-page-id="2940312430">mise en place des dossiers contentieux</a>
</li></ul>
</div>
</li></ul>
</div>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="accueil.php#sec-2c95" data-page-id="71525385">contact</a>
</li>
</ul>

              </div>
            </div>

            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
          <a href="logout.php" data-page-id="302621481" class="u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-radius-6 u-palette-1-base u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0">deconnexion&nbsp;
        </a>


          </br>
        </br>
        <a href="form.php" data-page-id="302621481" class="u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-radius-6 u-palette-1-base u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0">Ajouter&nbsp;<span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/2.png" alt=""></span>
        </a>
      </div>
    </header>


  

    <section class="u-align-left u-clearfix u-section-1" id="sec-d3c0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-text u-text-default u-text-palette-2-base">Gestion de service d'affaire juridique<span style="font-weight: 700;"></span>
        </h1>


        <div class="u-tab-links-align-left u-tabs u-tabs-1">
          <ul class="u-border-2 u-border-palette-1-base u-spacing-10 u-tab-list u-unstyled" role="tablist">
            <li class="u-tab-item" role="presentation">
              <a class="active u-active-palette-1-base u-button-style u-grey-10 u-tab-link u-text-active-white u-text-black u-tab-link-1" id="link-tab-0da5" href="#tab-0da5" role="tab" aria-controls="tab-0da5" aria-selected="true">Description</a>
            </li>
          </ul>
          
          <div class="u-tab-content">
            <div class="u-container-style u-tab-active u-tab-pane u-white u-tab-pane-1" id="tab-0da5" role="tabpanel" aria-labelledby="link-tab-0da5">
              <div class="u-container-layout u-container-layout-1">
                <h4 class="u-text u-text-default u-text-palette-1-base u-text-3">DOSSIERS</h4>
                <div class="u-expanded-width u-table u-table-responsive u-table-1">
<head>
<style>
table, th, td {
    border: 1px solid blue
}
th {
  color: blueviolet;
}
</style>
</head>

<?php 
            
       $host = "localhost";
       $user = "root";
       $pass = "";
       $db = "juridique";
     $conn = new mysqli($host, $user, $pass, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
     $sql = "SELECT `CIN`,`facture_fraude`, `nom_prenom`,`nature_dossier`,`date_dossier` FROM `dossier fraude du courrant`";
         $result = $conn->query($sql);
        if ($result->num_rows > 0) {
     echo "<table><tr><th>CIN</th><th>nom et prénom</th><th>
    nature du dossier</th><th>date du dossier</th><th>facture fraude</th></tr>";
  
    while($row = $result->fetch_assoc()) {
 echo "<tr><td>" . $row["CIN"]."</td>
           <td>" . $row["nom_prenom"]. "</td>
           <td>" . $row["nature_dossier"]. "</td>
           <td>" . $row["date_dossier"]. "</td>
           <td>" . '<a href="'.$row["facture_fraude"].'">'.$row["facture_fraude"].'</a>' . "</td>
       </tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
                ?>


                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-clearfix u-section-2" id="sec-fdd1">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="fr-view u-clearfix u-rich-text u-text u-text-1">
          <h1 style="text-align: left;">
            <br>
          </h1>
          <p id="isPasted">Le service juridique est composé de spécialistes du droit, les juristes, que l’on pourrait comparer à des “avocats de l’entreprise”.&nbsp;</p>
          <p>Il occupe une place clé dans une entreprise quelle que soit sa taille et remplit plusieurs rôles. Tout d’abord, il doit veiller aux changements constants dans la loi afin de maintenir l’entreprise aux normes en cours. C’est un véritable travail de veille juridique qu’il réalise au quotidien. Les normes juridiques sont en constante évolution, il est donc nécessaire de se tenir informé des dernières réglementations présentes dans les contrats et au sein de l’entreprise.</p>
          <p>De surcroît, le service juridique se doit de conseiller les collaborateurs grâce à leur expertise lors de projets d’entreprises, de négociations de contrats ou encore en CODIR. il a pour mission de :&nbsp;</p>
          <ul style="box-sizing: border-box; margin: 0px; padding: 0px 0px 23px 1em; border: 0px; outline: 0px; font-size: 14px; text-size-adjust: 100%; vertical-align: baseline; background: rgb(255, 255, 255); list-style: disc; line-height: 26px; color: rgb(102, 102, 102); font-family: Poppins, Helvetica, Arial, Lucida, sans-serif; font-style: normal; font-variant-ligatures: normal; font-variant-caps: normal; font-weight: 500; letter-spacing: normal; orphans: 2; text-align: left; text-indent: 0px; text-transform: none; white-space: normal; widows: 2; word-spacing: 0px; -webkit-text-stroke-width: 0px; text-decoration-thickness: initial; text-decoration-style: initial; text-decoration-color: initial;">
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">s’occuper et de limiter les risques de litiges internes et externes,&nbsp;</li>
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">il anime et pilote le conseil juridique,&nbsp;</li>
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">il est garant de la conformité de l’ensemble des activités de l’entreprise au regard de la loi,&nbsp;</li>
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">il gère les procès, etc.</li>
            <li>
              <span style="font-size: 1.25rem; font-weight: 700;">
                <span class="u-text-palette-1-base" style="font-style: italic;">Quels sont les risques qu’il doit gérer et ses compétences ?</span>
              </span>
            </li>
            <li>Les risques qu’il est appelé à gérer ont été classés comme suit d’après la cartographie des directions juridiques 2021. La protection des données arrive sans surprise à la première place depuis la crise, avec une demande de 82 %. Viennent ensuite la lutte contre le blanchiment et la corruption avec 66%, la gouvernance ou RSE avec 61%.</li>
            <li>Le respect des droits humains représente 23% des demandes et la diversité 19%. Les autres risques n’occupent plus que 18%.</li>
            <li>Source : Cartographie des directions juridiques, AFJE-Cercle Montesquieu 2021</li>
            <li>Les compétences et qualités attendues d’un juriste sont les suivantes :&gt;</li>
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">une excellente maîtrise du droit d’entreprise ;</li>
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">un socle de connaissances accru dans le domaine de son entreprise ;</li>
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">un esprit d’analyse et de synthèse lui permettant d’aiguiller les prises de décision lors des conseils d’entreprise ;</li>
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">un bon relationnel et une maîtrise de l’anglais sont recommandés ;</li>
            <li style="box-sizing: border-box; margin: 0px 0px 0px 20px; padding: 0px; border: 0px; outline: 0px; font-size: 16px; text-size-adjust: 100%; vertical-align: baseline; background: transparent; font-family: Poppins, sans-serif; color: rgb(33, 37, 41); font-weight: 400; line-height: 1.5em;">enfin, une qualité rédactionnelle permettant de répondre aux clients en cas de litiges qui sert également à la rédaction des contrats.</li>
          </ul>
        </div>
      </div>
    </section>


 


    <section class="u-clearfix u-section-3" id="sec-2c95">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-center u-text u-text-palette-1-base u-text-1">Contact</h1>
        <div class="u-form u-form-1">
          <h4 class="sent-notification"></h4>

          <form id=myForm action="accueilcontactus.php" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="custom" name="form" style="padding: 10px;">
            <div class="u-form-group u-form-name">
              <label for="name-6154" class="u-label">Name</label>
              <input type="text" placeholder="Enter your Name" id="name-6154" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-email u-form-group">
              <label for="email-6154" class="u-label">Email</label>
              <input type="email" placeholder="Enter a valid email address" id="email-6154" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required="">
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-6154" class="u-label">Message</label>
              <textarea placeholder="Enter your message" rows="4" cols="50" id="message-6154" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white" required=""></textarea>
            </div>
            <div class="u-align-right u-form-group u-form-submit">
              <a href="#" class="u-btn u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-8 u-btn-1">Submit</a>
              <input type="submit" name="valider"   value="submit" class="u-form-control-hidden">
              
            </div>
         
        
          </form>

        </div>
        <a href="tel:+212 80 200 77 77" class="u-active-none u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-text-palette-1-base u-top-left-radius-0 u-top-right-radius-0 u-btn-2"><span class="u-icon"><svg class="u-svg-content" viewBox="0 0 405.333 405.333" x="0px" y="0px" style="width: 1em; height: 1em;"><path d="M373.333,266.88c-25.003,0-49.493-3.904-72.704-11.563c-11.328-3.904-24.192-0.896-31.637,6.699l-46.016,34.752    c-52.8-28.181-86.592-61.952-114.389-114.368l33.813-44.928c8.512-8.512,11.563-20.971,7.915-32.64    C142.592,81.472,138.667,56.96,138.667,32c0-17.643-14.357-32-32-32H32C14.357,0,0,14.357,0,32    c0,205.845,167.488,373.333,373.333,373.333c17.643,0,32-14.357,32-32V298.88C405.333,281.237,390.976,266.88,373.333,266.88z"></path></svg><img></span>&nbsp;+212 80 200 77 77
        </a>
        <p class="u-text u-text-palette-1-base u-text-2"><span class="u-file-icon u-icon u-text-palette-1-base u-icon-2"><img src="images/8.png" alt=""></span>&nbsp; &nbsp; crc@onee.ma
        </p>
        <h2 class="u-align-center u-text u-text-black u-text-3"><b>Vous pouvez contacter un conseiller<br>7j / 7 de 07h00 à 23h00</b>
        </h2>
      </div>
    </section>

    
    
    <footer class="u-clearfix u-footer u-palette-1-base" id="sec-ad58"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="http://www.one.ma" class="u-image u-logo u-image-1" data-image-width="660" data-image-height="330">
          <img src="images/onee_titrisation_trt-6.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <p class="u-text u-text-default u-text-1"><b>© ONEE 2022</b>
        </p>
        <a href="http://www.one.ma" class="u-active-none u-border-2 u-border-white u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-btn-rectangle u-button-style u-hover-none u-none u-radius-0 u-top-left-radius-0 u-top-right-radius-0 u-btn-1">www.one.org.ma</a>
      </div></footer>

       <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 45px; bottom: 35px; padding: 15px;" class="u-back-to-top u-border-2 u-border-white u-icon u-icon-circle u-opacity u-opacity-85 u-text-white" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>