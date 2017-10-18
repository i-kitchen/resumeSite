<?php
  include "./templates/template.php";
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Personal Career Website">
    <meta name="author" content="Ian Kitchen">

    <title>Ian Kitchen</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Cabin:700' rel='stylesheet' type='text/css'>

    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">

    <!-- reCAPTCHA -->
    <script src='https://www.google.com/recaptcha/api.js'></script>

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Ian Kitchen</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#experience">Experience</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Intro Header -->
    <header class="masthead">
      <div class="intro-body">
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <h1 class="brand-heading">Ian Kitchen</h1>
              <p class="intro-text">Web and Mobile Developer</p>
              <a href="#about" class="btn btn-circle js-scroll-trigger">
                <i class="fa fa-angle-double-down animated"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </header>  

    <!-- About Section -->
    <section id="about" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <img src="img/me.png" alt="Me" class="img-spacing" />
            <h2>About Me</h2>
            <p>
              Welcome to my site! I'm a web developer with a background in computer science. My strengths are
              in front-end applications using JavaScript and jQuery, but I enjoy programming in general and have experience
              developing full-stack, embedded linux, and C# desktop applications.
            </p>
            <hr />
          </div>
        </div>

        <div class="row">

          <!-- OCC -->
          <div class="col-lg-4 mx-auto">
            <img src="img/occ.png" alt="OCC" class="img-spacing" /><br />
            <a href="#" class="btn btn-circle modalBtnPlus" data-toggle="modal" data-target="#occModal">
              <i class="fa fa-plus animated"></i>
            </a>

            <!-- OCC Modal -->
            <?php echo createModal('occModal',
                              'OCC',
                              'Began <a href="http://www.sunyocc.edu/">Onondaga Community College</a> as a Drumset Performance 
                               major. However, within the first year switched into Computer Science. I realized that my 
                               passion for drumming was in playing and not practicing. I began to research computing and what 
                               makes programs work, and I was hooked. While completing three semesters of CS at OCC, I gained 
                               the knowledge base for good algorithm design and solid foundations of programming. After the 
                               second year, I transferred to RIT to further develop my computer studies.');
            ?>
          </div>

          <!-- RIT -->
          <div class="col-lg-4 mx-auto">
            <img src="img/rit.png" alt="RIT" class="img-spacing" /><br />
            <a href="#" class="btn btn-circle modalBtnPlus" data-toggle="modal" data-target="#ritModal">
              <i class="fa fa-plus animated"></i>
            </a>

            <!-- RIT Modal -->
            <?php echo createModal('ritModal',
                              'RIT',
                              'At <a href="https://www.rit.edu/">RIT</a>, I focused my computing studies as an Information 
                               Technology major where I specialized in application development. Here I developed my knowledge 
                               to create efficient programs, web and mobile applications, along with different software design 
                               principles and patterns. In addition to completing a full class load, I worked at the RIT 
                               Servicedesk and completed 2 years of an external internship. <a href="#experience" 
                               class="js-scroll-trigger" data-dismiss="modal">See experience</a>');
            ?>
          </div>

          <!-- PDGA -->
          <div class="col-lg-4 mx-auto">
            <img src="img/pdga.png" alt="PDGA" class="img-spacing" /><br />
            <a href="#" class="btn btn-circle modalBtnPlus" data-toggle="modal" data-target="#pdgaModal">
              <i class="fa fa-plus animated"></i>
            </a>

            <!-- PDGA Modal -->
            <?php echo createModal('pdgaModal',
                              'PDGA',
                              'In my spare time, I am an avid disc golfer. I compete in as many tournaments as my schedule 
                               will allow. 
                               It is a thriving sport and one of the fastest growing in the world. Head on over to my 
                               <a href="https://www.pdga.com/player/73800" target="_blank">PDGA</a> profile to see my past 
                               performances and be sure to check out the <a href="https://www.pdga.com/">main website</a> as 
                               well for more information about the world of disc golf.');
            ?>
          </div>

        </div>
      </div>
    </section>

    <!-- Experience Section -->
    <section id="experience" class="experience-section content-section text-center">
      <div class="container">
        <h2 class="modalText">Experience</h2>
        <div class="row">
          <div class="col-lg-4 mx-auto">
            <img src="img/alstom.png" alt="Alstom" class="img-spacing" /><br />
            <a href="#" class="btn btn-circle modalBtnPlus" data-toggle="modal" data-target="#alstomModal">
              <i class="fa fa-plus animated"></i>
            </a>
            
            <!-- Alstom Modal -->
            <?php echo createModal('alstomModal',
                              'Alstom (Software Designer Co-op)',
                              'Helped develop and maintain a web interface that interacted with Alstom\'s NVSP2 and VSP2 
                               interlocking boards. It displayed real-time logic, diagnostics, hardware metrics, and enabled 
                               the user to update the system software by uploading configuration files. These boards are part 
                               of the 
                               <a href="http://www.alstom.com/Global/Transport/Resources/Documents/brochure2014/iVPI%20Interlocking%20-%20Product%20sheet%20-%20Sept%202013.pdf" target="_blank">
                                iVPI (Integrated Vital Processing Interlocking)
                               </a>
                               family.');
            ?>
          </div>

          <div class="col-lg-4 mx-auto">
            <img src="img/its.png" alt="ITS" class="img-spacing" /><br />
            <a href="#" class="btn btn-circle modalBtnPlus" data-toggle="modal" data-target="#itsModal">
              <i class="fa fa-plus animated"></i>
            </a>
            
            <!-- ITS Modal -->
            <?php echo createModal('itsModal',
                              'RIT ITS (Senior Servicedesk Representative)',
                              'Senior responsibilities include setting up and running training sessions, overseeing student 
                               co-workers, and helping brainstorm ways to improve support. Developed and maintained scripts to 
                               make workflow easier with our online tools. Learned valuable knowledge about the inner workings 
                               of RIT\'s technical infrastructure through advising and helping students, faculty, and staff 
                               with 
                               <a href="https://www.rit.edu/its/" target="_blank">
                                 various technical problems 
                               </a>
                               (wireless connectivity, account management, software/hardware troubles, etc.). Gained an 
                               understanding of how a large institution routes and handles the workflow of technology 
                               maintenance.');
            ?>
          </div>

        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="content-section text-center">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            <h2>Get in Touch</h2>
            <p>
              If you would like a copy of my resume,
              <a href="#" data-toggle="modal" data-target="#resumeModal">click here</a>
              so I know you're not a robot.
            </p>

            <!-- Modal -->
            <?php echo createModal('resumeModal',
                              'Resume',
                              'Robot detection not yet activated.<br />KEEP OUT PESKY ROBOTS!<br />
                               <i class="fa fa-android fa-lg"></i>
                               </p>
                               <!--
                               <form action="" type="POST">
                                 <button type="button" class="btn btn-default">Download Resume</button>
                                 <div class="g-recaptcha" data-sitekey="6LcRSzMUAAAAAAoXlukuXKPhEJnxJSEba5ZRtZXl"></div>
                               </form>
                               -->');
            ?>

            <ul class="list-inline banner-social-buttons">
              <li class="list-inline-item">
                <a href="https://www.linkedin.com/in/ian-kitchen-a592bb112/" class="btn btn-default btn-lg" target="_blank">
                  <i class="fa fa-linkedin-square fa-fw"></i>
                  <span class="network-name">LinkedIn</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://github.com/i-kitchen" class="btn btn-default btn-lg" target="_blank">
                  <i class="fa fa-github-alt fa-fw"></i>
                  <span class="network-name">Github</span>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.pdga.com/player/73800" class="btn btn-default btn-lg" target="_blank">
                  <i class="fa fa-trophy fa-fw"></i>
                  <span class="network-name">PDGA</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <footer>
      <div class="container text-center">
        <p>Copyright &copy; Ian Kitchen 2017 All nature photos taken by me <i class="fa fa-smile-o"></i></p>
      </div>
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts -->
    <script src="js/behavior.js"></script>

  </body>

</html>
