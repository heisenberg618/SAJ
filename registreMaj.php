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
        <a data-page-id="71525385" class="u-image u-logo u-image-1" data-image-width="660" data-image-height="330" title="Page 1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="500">
          <img src="images/onee_titrisation_trt.jpg" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-align-center u-dropdown-icon u-menu u-menu-dropdown u-offcanvas u-menu-1" data-position="Worldpress">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-active-border-color u-custom-active-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-hover-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-active-color u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg class="u-svg-link" viewBox="0 0 24 24"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg class="u-svg-content" version="1.1" id="menu-hamburger" viewBox="0 0 16 16" x="0px" y="0px" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg"><g><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</g></svg>
            </a>




          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>

              </div>
            </div>

            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
     
      </br>

           <a href="loginindex.php" data-page-id="302621481" class="u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-radius-6 u-palette-1-base u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0">Login&nbsp;<span class="u-file-icon u-icon u-text-white u-icon-1"><img src="images/2.png" alt=""></span>
        </a>
     
      </div>
    </header>


        <?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "juridique";

// Db connection
  $conn = mysqli_connect($host,$user,$pass,$db);
  if(!$conn){
echo "there are some probleme while connection the data"; 
  }

  
   if($_POST['MDPR']===$_POST['CMDPR']){

      $nameR = htmlspecialchars(trim(strtolower($_POST['nameR']))); 
      $CINR = htmlspecialchars(trim(strtolower($_POST['CINR'])));
      $emailR = htmlspecialchars(trim(strtolower($_POST['emailR'])));
      $passwordR = md5($_POST['MDPR']);
      $cpasswordR = md5($_POST['CMDPR']);
      $sql = "INSERT INTO `login`(`nom_prenom`, `email`, `CINL`, `password`, `conf_mdp`) VALUES ('$nameR','$emailR','$CINR','$passwordR','$cpasswordR')";

     if($conn->query($sql) === TRUE) {
      
      echo "<center><br><br> <style='color : green;'> <h1>vous êtes inscrits, allez au page du connexion</h1></center>"; 
   } else {
    echo "Error :" . $sql . "<br>" . $conn->error;
           }

   } else {
      echo"<center> <br><br><br> <style='color : red;'> 
      <h2> il y'a une erreur  ou les mots de passes ne correspondant pas! </h2></center>";
          }
  
      $conn->close();
?>


    </aside>

       <center> <a href="loginindex.php" data-page-id="302621481" class="u-btn u-button-style u-hover-feature u-hover-palette-1-light-1 u-radius-6 u-palette-1-base u-btn-1" data-animation-name="bounceIn" data-animation-duration="1000" data-animation-direction="" data-animation-delay="0">go&nbsp;
        </a></center>
    

 <span style="height: 64px; width: 64px; margin-left: 0px; margin-right: auto; margin-top: 0px; right: 45px; bottom: 35px; padding: 15px;" class="u-back-to-top u-border-2 u-border-white u-icon u-icon-circle u-opacity u-opacity-85 u-text-white" data-href="#">
        <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 551.13 551.13"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-1d98"></use></svg>
        <svg class="u-svg-content" enable-background="new 0 0 551.13 551.13" viewBox="0 0 551.13 551.13" xmlns="http://www.w3.org/2000/svg" id="svg-1d98"><path d="m275.565 189.451 223.897 223.897h51.668l-275.565-275.565-275.565 275.565h51.668z"></path></svg>
    </span>
  </body>
</html>