<?php
  if ( (isset($_POST['name']) && strlen($_POST['name'])>0) &&
      (isset($_POST['email']) && strlen($_POST['email'])>0) &&
      (isset($_POST['message']) && strlen($_POST['message'])>0) ) {
        $headers = 'From: sebastianpob@gmail.com' . "\r\n" .
       'Reply-To: sebastianpob@gmail.com';
    mail("sebastianpob@gmail.com", "From" .$_POST['name'], $_POST['message'] . "EMAIL :".$_POST['email'], $headers);
    echo $_POST['name'];
    exit();
  }


  if (isset($_GET['page'])) {
    if (ctype_alpha($_GET['page'])) {
      $page = $_GET['page'];

      if(strlen(strstr($_SERVER['REQUEST_URI'], 'index.php?page='))>0){
        header('Location: '.$page);
        exit();
      }

    }else {
        header('Location: http://localhost:3000/dashboard/kdclasm/app/');
        exit();
    }
  }
?>
<!doctype html>
<html class="no-js" lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>KDCLASM</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/media.css">
    <link rel="stylesheet" href="css/fontello.css" />
</head>

<body ondragstart="return false" ondrop="return false">

  <div id="preloader" style="width: 100vw; height: 100vh; background-color: #fff; z-index: 100000"></div>

  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>
      window.jQuery || document.write('<script src="scripts/vendor/jquery-1.11.2.min.js"><\/script>')
  </script>


  <!-- Preloader -->
<script type="text/javascript">
    //<![CDATA[
        $(window).load(function() { // makes sure the whole site is loaded
            $('#status').fadeOut(); // will first fade out the loading animation
            $('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
        })
    //]]>
</script>

<div class="modal-nav" style="opacity: 0; display: none">
  <h3 class="nav-element home modal-elem" content="home">HOME</h3>
  <h3 class="nav-element projects modal-elem" content="projects">PROJECTS</h3>
  <h3 class="nav-element contact modal-elem" content="contact">CONTACT</h3>
</div>

  <div class="container">


        <div class="header">

          <div class="moon-header">
            <img class="moon-big transp-big-1" src="img/moon.png" alt="moon.broken"/>
            <img class="moon-big transp-big-2" src="img/moon.png" alt="moon.broken"/>
            <img class="moon-big moooon" src="img/moon.png" alt="moon.broken"/>
            <img class="moon-big moon-small transp-1" src="img/moon02.png" alt="moon.broken"/>
            <img class="moon-big moon-small transp-2" src="img/moon02.png" alt="moon.broken"/>
          </div>

          <h1 class="head-text">KDCLASM</h1>
        </div>

        <div class="contact-page down">
          <div class="contact-first c-pages" style="top: 0">
            <h1 class="contact-text">CONTCAT</h1>
            <h3 class="contact-name">Sebastian Pobocha</h3>
            <div class="mail-underline">
              <h2 class="mail-address">kdclasm@gmail.com</h2>
            </div>
            <div class="social">
              <a target="_blank" href="https://www.behance.net/SebastianPob">
                <div class="be">
                    <i class="icon-behance"></i>
                </div>
              </a>
            </div>
        </div>

        <div class="contact-second c-pages">
          <div class="mail-box">
            <form method="post">
              <input class="mail-input name" type="text" name="name" placeholder="NAME">
              <input class="mail-input email-inp" type="text" name="email" placeholder="EMAIL">
              <textarea class="mail-input message" name="message" rows="8" cols="40" placeholder="MESSAGE"></textarea>
              <button class="button-send button--isi" type="button" name="send" onclick="emailSubmit()"><span>SEND</span></button>
            </form>
          </div>
        </div>
      </div>

      <div class="projects-page down">
          <div class="project">
            <div class="project-inner">
              <div class="white-front">
                <img src="img/projects/1.jpg" alt="1" />
              </div>
              <div class="back">

              <div class="black-back">
                <img src="img/projects/1.jpg" alt="1"/>
                <div class="black-date">
                  <h4>0</h4>
                  <h4>8</h4>
                  <h4>/</h4>
                  <h4>2</h4>
                  <h4>7</h4>
                  <h4>/</h4>
                  <h4>1</h4>
                  <h4>6</h4>
                </div>
                <div class="black-down">
                  <div class="strange-line"></div>
                  <h3>kdclasm page</h3>
                </div>
              </div>
            </div>
            </div>
          </div>
      </div>

      <div class="nav-circle">
        <div class="circle-icon"></div>
      </div>
      <img src="img/projects/1.jpg" style="display: none" />
      <div class="nav-container">

            <nav class="nav-normal">
              <h3 class="nav-element contact" content="contact">CONTACT</h3>
              <h3 class="nav-element projects" content="projects">PROJECTS</h3>
              <h3 class="nav-element home" content="home">HOME</h3>
            </nav>

            <nav class="nav3d">
              <img src="img/text/contact3d.png" class="nav-element text-3d contact" content="contact"/>
              <img src="img/text/projects3d.png" class="nav-element text-3d projects" content="projects"/>
              <img src="img/text/home3d.png" class="nav-element text-3d home" content="home"/>
            </nav>
      </div>


      <i class="icon-angle scroll" style="opacity: 0"></i>
        <h4 class="copyright">©Copyright <?php echo date('Y'); ?> Sebastian Pobocha</h4>
        <div class="sound-container">
          <div class="anty-shake-sound">
            <div></div>
            <div></div>
            <div></div>
          </div>

          <div class="sound" on='true'>
            <div class="sound-1"></div>
            <div class="sound-2"></div>
            <div class="sound-3"></div>
          </div>
        </div>

    </div>
    <div class="bckgr bg-noises"><div class="constellation"><img src="img/capricornus2.png"/></div></div>
    <div class="bckgr bg-stars"></div>
    <!-- <div class="bckgr"><div class="bg-stars stars-paralax"></div></div> -->



    <script src="scripts/mainscript.js"></script>
    <script src="scripts/vendor/modernizr-2.8.3.min.js"></script>

</body>

</html>
