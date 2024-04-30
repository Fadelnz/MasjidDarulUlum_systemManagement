<?php
include "config.php";
global $conn;
session_start();
if(isset($_POST['login'])){
	$uname = $_POST['username'];
	$upassword = $_POST['password'];
	$sql = "SELECT user_username, user_password, user_role FROM user WHERE user_username = '$uname' AND user_password = '$upassword'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result)>0){
        while($row = mysqli_fetch_assoc($result)){
            if($row["user_username"] == $uname AND $row["user_password"] == $upassword){
				    $_SESSION["Session_Username"] = $row["user_username"];
				    $_SESSION["Session_Password"] = $row["user_password"];

                echo '<script>alert("You have been successfully log in")</script>';
                if($row["user_role"] == "admin"){
                  echo "<script>window.location = 'Admin-Dashboard.html'</script>";
                }else{
                  echo "<script>window.location = 'Treasurer-Dashboard.html'</script>";
                }
            }
            elseif($row["user_username"] != $uname AND $row["user_password"] == $upassword){
                echo '<script>alert("Wrong username")</script>';
            }
            elseif($row["user_username"] == $uname AND $row["user_password"] != $upassword){
                echo '<script>alert("Wrong password")</script>';
            }
            else{
                echo '<script>alert("Username does not exist")</script>';
            }
        } 
    } else {
            echo '<script>alert("No user have been register into the system")</script>';
        }
}
?>

<!DOCTYPE html>
<html style="font-size: 16px;" lang="en"><head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="It&amp;apos;s That Design Feeling">
    <meta name="description" content="">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="login_css.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery-1.9.1.min.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 6.2.2, nicepage.com">
    <meta name="referrer" content="origin">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"logo": "images/MDUMS.png",
		"sameAs": []
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Login">
    <meta property="og:type" content="website">
  <meta data-intl-tel-input-cdn-path="intlTelInput/"></head>
  <body data-path-to-root="./" data-include-products="false" class="u-body u-xl-mode" data-lang="en"><header class=" u-border-no-bottom u-border-no-left u-border-no-right u-border-no-top u-header u-section-row-container" id="sec-d764" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" style=""><div class="u-section-rows">
        <div class="u-section-row" data-animation-name="" data-animation-duration="0" data-animation-delay="0" data-animation-direction="" id="sec-5694">
          <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <a href="index.php" class="u-align-left u-image u-logo u-image-1" data-image-width="950" data-image-height="960">
              <img src="images/MDUMS.png" class="u-logo-image u-logo-image-1">
            </a>
            <p class="u-align-center u-text u-text-default u-text-1">MASJID DARUL ULUM&nbsp;</p>
            <a href="Login-NEW.php" class="u-align-right u-border-none u-btn u-btn-round u-button-style u-hover-grey-10 u-radius u-white u-btn-1 shadow-button">Login</a>
          </div>
          
          
          
          
          
        </div>
        <div class="u-white" id="sec-c498">
          <div class="u-clearfix u-sheet u-sheet-2">
            <div class="u-expanded-width u-layout-horizontal u-list u-list-1">
              <div class="u-repeater u-repeater-1">
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                    <a href="index.php" class="u-align-center u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-font-roboto-condensed u-none u-text-black u-btn-2">UTAMA</a>
                  </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                    <a href="Carta-Organisasi.html" class="u-align-center u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-font-roboto-condensed u-none u-text-black u-btn-3">CARTA ORGANISASI</a>
                  </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                    <a href="index.php#carousel_36a6" class="u-align-center u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-font-roboto-condensed u-none u-text-black u-btn-4">HUBUNGI KAMI</a>
                  </div>
                </div>
                <div class="u-container-align-center u-container-style u-list-item u-repeater-item">
                  <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                    <a href="Ahli-kariah-Application-Form.php" class="u-align-center u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-btn u-button-style u-custom-font u-font-roboto-condensed u-none u-text-black u-btn-5">AHLI KARIAH</a>
                  </div>
                </div>
              </div>
              <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-prev u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-1" href="#" role="button">
                <span aria-hidden="true">
                  <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 451.847 451.847"><path d="M97.141,225.92c0-8.095,3.091-16.192,9.259-22.366L300.689,9.27c12.359-12.359,32.397-12.359,44.751,0
c12.354,12.354,12.354,32.388,0,44.748L173.525,225.92l171.903,171.909c12.354,12.354,12.354,32.391,0,44.744
c-12.354,12.365-32.386,12.365-44.745,0l-194.29-194.281C100.226,242.115,97.141,234.018,97.141,225.92z"></path></svg>
                </span>
              </a>
              <a class="u-absolute-vcenter u-gallery-nav u-gallery-nav-next u-grey-70 u-icon-circle u-opacity u-opacity-70 u-spacing-10 u-text-white u-gallery-nav-2" href="#" role="button">
                <span aria-hidden="true">
                  <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                </span>
                <span class="sr-only">
                  <svg viewBox="0 0 451.846 451.847"><path d="M345.441,248.292L151.154,442.573c-12.359,12.365-32.397,12.365-44.75,0c-12.354-12.354-12.354-32.391,0-44.744
L278.318,225.92L106.409,54.017c-12.354-12.359-12.354-32.394,0-44.748c12.354-12.359,32.391-12.359,44.75,0l194.287,194.284
c6.177,6.18,9.262,14.271,9.262,22.366C354.708,234.018,351.617,242.115,345.441,248.292z"></path></svg>
                </span>
              </a>
            </div>
          </div>
          
          
          
          
          
        </div>
      </div></header>
    <section class="u-clearfix u-grey-10 u-section-1" id="sec-7c0a">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-center u-form u-grey-5 u-radius u-form-1">
          
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" id="login1" class="login-form">
        <div class="login-container02"></div>
        <div class="login-container03">
          <div class="login-container04">
            <input
              type="text"
              name="username"
              placeholder="username"
              class="login-username input"
            />
          </div>
          <div class="login-container05">
            <input
              type="password"
              name = "password"
              placeholder="password"
              class="login-password input"
            />
          </div>
          <div class="login-container06">
            <span class="login-text4">Forgot Password?</span>
          </div>
          <div class="login-container07">
            <button type="submit" class="login-button" value="Login" name="login" form="login1" >Login</button>
          </div>
        </div>
      </form>

        </div>
      </div>
    </section>
    
    
    
    <footer class="u-clearfix u-custom-color-1 u-footer" id="sec-13e0"><div class="u-clearfix u-sheet u-sheet-1">
        <img class="u-align-left u-image u-image-contain u-image-default u-image-1" src="images/gwenchana-2.png" alt="" data-image-width="950" data-image-height="960">
        <p class="u-custom-font u-font-roboto-condensed u-text u-text-default u-text-1">Copyright by Gwenchana Enterprise. All Rights Reserved</p>
      </div></footer>
  
</body></html>