
<?php 
 
 $task1= array('GreenTech', 'Ecologic technology and envirement friendly usage'); //array for task one

 $task2 =array('Project_title'=>'Tech projektet per ndihesen e ambijentit'); // array for task two; used associative array 
 $task3= array(array('Platforma per Vullnetar', "Per te interesuarit qe duan te jen aktiv ne shpetimin<br> e mjedisit eshte krijuar nje platfot ku mund te regjistrohen si vullnetar ne cede-ks.org"),
               array('Identifikimi i deponive te mbeturinave', "Me ante te GPS tracer nje grup i vullnetareve<br> kan dal ne tere teritorin e kosoves te identifikojn shumicen e deonive si dhe llojin e tyre"),
               array('Platforma Qytetaret Flasin', "Krijimi i nje platforme ku qytetaret raportojn <br>Parregullesite/Shkeljet qe behen ne deme te ambijentit drenasiflet.com"),
               array('Panelet solate', "Aplikimi i ndriqimit te parkut te drenasit me ante te energjise <br> solare, si dhe ne te gjitha komunat e kosoves"));// multiD array for task three
 
 
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stylish Portfolio - Start Bootstrap Template</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>

<body id="page-top">
  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
     
      <h1 class="mb-1">Titulli Ketu: <?php echo $task1[0] ?></h1>
      <h3 class="mb-5">
        <em>Nentitulli kryesor ketu: <?php echo $task1[1] ?></em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
    </div>
    <div class="overlay"></div>
  </header>
  <!-- Portfolio -->
  <section class="content-section" id="portfolio">
    <div class="container">
      <div class="content-section-heading text-center">
        
        <h3 class="text-secondary mb-0">Portfolio</h3>

        <h2 class="mb-5">Titulli per projekte ketu: <?php echo $task2['Project_title'] ?></h2>
      </div>
      <div class="row no-gutters">
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Projekt 1 <?php  echo $task3[0][0] ?></h2>
                <p class="mb-0">Projekt 1 pershk. <?php  echo $task3[0][1] ?></p>
              </span>
            </span>
            <img class="img-fluid" src="img/portfolio-1.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Projekt 2 <?php  echo $task3[1][0] ?></h2>
                <p class="mb-0">Projekt 2 pershk. <?php  echo $task3[1][1] ?></p>
              </span>
            </span>
            <img class="img-fluid" src="img/portfolio-2.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Projekt 3 <?php  echo $task3[2][0] ?></h2>
                <p class="mb-0">Projekt 3 pershk. <?php  echo $task3[2][1] ?></p>
              </span>
            </span>
            <img class="img-fluid" src="img/portfolio-3.jpg" alt="">
          </a>
        </div>
        <div class="col-lg-6">
          <a class="portfolio-item" href="#">
            <span class="caption">
              <span class="caption-content">
                <h2>Projekt 4 <?php  echo $task3[3][0] ?></h2>
                <p class="mb-0">Projekt 4 pershk. <?php  echo $task3[3][1] ?></p>
              </span>
            </span>
            <img class="img-fluid" src="img/portfolio-4.jpg" alt="">
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Call to Action -->
  <section class="content-section bg-primary text-white">
    <div class="container text-center">
      <h2 class="mb-4">Me Javascript ose Jquery Te kalkulohet Rezultati </h2>
      <h4 class="mb-4">(4*3)/2</h4>
      <a href="#result" class="btn btn-xl btn-light mr-4" onclick="kalkulo()">Kalkulo!</a>
      <br>
      <script>
        function kalkulo()
        {
           let e=(4*3)/2;
          document.getElementById('result').innerHTML=e;
        }
      </script>
      <h2 class="mb-4">Rezultati : <span id="result">(Replace me)</span></h2>
      <small><i>Pasi te klikohet butoni Kalkulo rezultati duhet te shfaqet ne "Replace me"</i></small>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer text-center">
    <h4>Vendosni linqet ne butonet ne vijim </h4>
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="https://www.facebook.com/dardan.gjoka">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <script>
            function noTwitter()
            {
              document.getElementById('notwitter').innerHTML="I dont Have a Twitter account  :( ";
            }
            </script>
          <a class="social-link rounded-circle text-white mr-3" onclick="noTwitter()" href="#notwitter">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="https://github.com/dardangjoka">
            <i class="icon-social-github"></i>
          </a>
        </li>
      </ul>
      <p id="notwitter"> </p>
      <p class="text-muted small mb-0">Copyright &copy; ODK 2019</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
