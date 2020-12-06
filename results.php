<?php
error_reporting(0);
$lang = $_GET["lang"];
if ($lang == "ru") {
  include 'lang_ru.php';
} else if ($lang == "uz") {
  include 'lang_uz.php';
} else if ($lang == "eng"){
  include 'lang_eng.php';
} else if (empty($lang)){
  include 'lang_eng.php';
} 


?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title>MakeCraft &mdash; Platform that tells how to use things again</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  
  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    <div class="container d-none d-lg-block">
      <div class="row">
        <div class="col-12 text-center mb-4 mt-5">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Make<span class="text-primary">Craft</span> </a></h1>
          </div>
      </div>
    </div>
    <header class="site-navbar py-md-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-md-6 col-xl-2  d-block d-lg-none">
            <h1 class="mb-0 site-logo"><a href="index.html" class="text-black h2 mb-0">Make<span class="text-primary">Craft</span> </a></h1>
          </div>

          <div class="col-12 col-md-10 main-menu">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.php?#home-section" class="nav-link"><?php print $array_ru['Home']; ?></a></li>
                <li><a href="index.php?#about-section" class="nav-link"><?php print $array_ru['About']; ?></a></li>
                <li><a href="index.php?#about-section" class="nav-link"><?php print $array_ru['Market']; ?></a></li>
                <li><a href="index.php?#blog-section" class="nav-link"><?php print $array_ru['Articles']; ?></a></li>
                <li><a href="index.php?#contact-section" class="nav-link"><?php print $array_ru['Contacts']; ?></a></li>
                <li> <b style = "padding-left:2em;" ><?php print $array_ru['Language']; ?>:</b> </li>
                <li><a href="results.php?lang=ru" class="nav-link">Ru</a></li>
                <li><a href="results.php?lang=uz" class="nav-link">Uz</a></li>
                <li><a href="results.php?lang=eng" class="nav-link">Eng</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 col-md-6 d-inline-block d-lg-none ml-md-0" ><a href="#" class="site-menu-toggle js-menu-toggle text-black float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>
    



    <div class="site-section bg-light" id="features-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center"><br>
            <h2 class="section-title mb-3"><?php print $array_ru['Results']; ?></h2>
          </div>
        </div>
        <div class="row align-items-stretch">




          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
               
              </div>
              <div>
                <h3>Result title</h3>
                <p>Result description</p>
              </div>
            </div>
          </div>


          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
         
              </div>
              <div>
                <h3>Result title</h3>
                <p>Result description</p>
              </div>
            </div>
          </div>



          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" >
            <div class="unit-4 d-block">
              <div class="unit-4-icon mb-3">
               
              </div>
              <div>
                <h3>Result</h3>
                <p>Result description</p>
              </div>
            </div>
          </div>


    

        </div>
      </div>
    </div>
    
   

    <div class="site-section" id="blog-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3"><?php print $array_ru['Blog_Posts']; ?></h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              <h2><a href="https://telegra.ph/Novaya-zhizn-privychnyh-veshchej-plastikovye-butylki-06-17"><?php print $array_ru['article1_title']; ?></a></h2>
              <div class="meta mb-4">MakeCraft Team <span class="mx-2">&bullet;</span> June 19, 2019<span class="mx-2">&bullet;</span> <a href="#">Ecology</a></div>
              <p><?php print $array_ru['article1_desc']; ?></p>
              <p><a href="https://telegra.ph/Novaya-zhizn-privychnyh-veshchej-plastikovye-butylki-06-17">Continue Reading...</a></p>
            </div> 
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_2.jpg" alt="Image" class="img-fluid">
              <h2><a href="https://telegra.ph/Plastikovoe-zagryaznenie-kak-chelovek-prevrashchaet-Zemlyu-v-svalku-dlya-othodov-06-21"><?php print $array_ru['article2_title']; ?></a></h2>
              <div class="meta mb-4">MakeCraft Team <span class="mx-2">&bullet;</span> June 20, 2019<span class="mx-2">&bullet;</span> <a href="#">Ecology</a></div>
              <p><?php print $array_ru['article2_desc']; ?></p>
              <p><a href="https://telegra.ph/Plastikovoe-zagryaznenie-kak-chelovek-prevrashchaet-Zemlyu-v-svalku-dlya-othodov-06-21">Continue Reading...</a></p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <div class="h-entry">
              <img src="images/img_3.jpg" alt="Image" class="img-fluid">
              <h2><a href="https://telegra.ph/8-sposobov-primeneniya-dlya-staryh-i-nenuzhnyh-veshchej-06-22"><?php print $array_ru['article3_title']; ?></a></h2>
              <div class="meta mb-4">James Phelps <span class="mx-2">&bullet;</span> June 22, 2019<span class="mx-2">&bullet;</span> <a href="#">Ecology</a></div>
              <p><?php print $array_ru['article3_desc']; ?></p>
              <p><a href="https://telegra.ph/8-sposobov-primeneniya-dlya-staryh-i-nenuzhnyh-veshchej-06-22">Continue Reading...</a></p>
            </div> 
          </div>
          
        </div>
      </div>
    </div>

    <div class="site-section bg-light" id="contact-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center">
            <h2 class="section-title mb-3"><?php print $array_ru['get_in_touch']; ?></h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 mb-5">

            

            <form action="#" class="p-5 bg-white">
              
              <h2 class="h4 text-black mb-5"><?php print $array_ru['Contact_Form']; ?></h2> 

              <div class="row form-group">
                <div class="col-md-6 mb-3 mb-md-0">
                  <label class="text-black" for="fname"><?php print $array_ru['First_Name']; ?></label>
                  <input type="text" id="fname" class="form-control rounded-0">
                </div>
                <div class="col-md-6">
                  <label class="text-black" for="lname"><?php print $array_ru['Last_Name']; ?></label>
                  <input type="text" id="lname" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="email">Email</label> 
                  <input type="email" id="email" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                
                <div class="col-md-12">
                  <label class="text-black" for="subject"><?php print $array_ru['Subject']; ?></label> 
                  <input type="subject" id="subject" class="form-control rounded-0">
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <label class="text-black" for="message"><?php print $array_ru['Message']; ?></label> 
                  <textarea name="message" id="message" cols="30" rows="7" class="form-control rounded-0" placeholder="<?php print $array_ru['Message_Place']; ?>"></textarea>
                </div>
              </div>

              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="<?php print $array_ru['Send_Message']; ?>" class="btn btn-primary mr-2 mb-2">
                </div>
              </div>

  
            </form>
          </div>
        
        </div>
        
      </div>
    </div>

    <div class="footer py-5 border-top text-center">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12">
            <p class="mb-0">
              <a href="#" class="p-3"><span class="icon-facebook"></span></a>
              <a href="#" class="p-3"><span class="icon-twitter"></span></a>
              <a href="#" class="p-3"><span class="icon-instagram"></span></a>
            </p>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <p class="mb-0">
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              <script>document.write(new Date().getFullYear());</script> &copy; <?php print $array_ru['Copyright']; ?>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </div>

  
     
    
  </div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.fancybox.min.js"></script>
  <script src="js/jquery.sticky.js"></script>

  
  <script src="js/main.js"></script>
    
  </body>
</html>