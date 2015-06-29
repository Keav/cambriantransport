<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
  <?php include('includes/head.php'); ?>

</head>

<body id="home">

        <?php
          switch($_SERVER['SERVER_NAME'])
          {
              case 'cambriantransport.com':
                include('includes/google-tag.php');
              break;
          }
        ?>

  <?php include('includes/header.php'); ?>

  <section class="content" id="about">
<!--     <div class="row">
      <div class="small-12 columns">
        <h1>Cambrian Transport</h1>
      </div>
    </div> -->
    <div class="row">
      <div class="small-12 columns">
        <p>Cambrian Transport Limited is a civil engineering company specialising in the railway industry.</p>
        <p>We provide consultancy services across a broad spectrum of activities and aim for an exceptional level of commitment to clients.</p>
        <p>Cambrian Transport comprises individuals who are passionate about transport systems and their future.
        We are confident that we have the mix of skills and experience to positively contribute to the development of the transport industry and provide a first class service to our clients.</p>
        <p>We aim to be the first choice for Transport Consultancy services.</p>
      </div>
    </div>
  </section>

  <section>
    <div class="row content" data-equalizer>
      <div class="small-12 columns">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
          <li>
            <div class="panel hvr-glow">
              <div class="text-center" data-equalizer-watch>
                <h3>Innovative</h3>
                <i class="fi-lightbulb"></i>
                <p>Cambrian Transport specialises in innovative solutions.</p>
            </div>
          </li>
          <li>
            <div class="panel hvr-glow">
              <div class="text-center" data-equalizer-watch>
                <h3>Collaboration</h3>
                <i class="fi-link"></i>
                <p>We will work with you to achieve <em>your</em> aims.</p>
            </div>
          </li>
          <li>
            <div class="panel hvr-glow">
              <div class="text-center" data-equalizer-watch>
                <h3>Agile</h3>
                <i class="fi-clock"></i>
                <p>We specialise in being responsive and agile. Many of our innovative solutions were developed with rapid deployment in mind.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- <section class="banner"> -->
    <div class="banner splash">
      <div class="row">
        <p class="quote">We aim to be the first choice for Transport Consultancy services.</p>
      </div>
    </div>
  <!-- </section> -->

    <section class="content" id="solutions">
    <div class="row">
      <div class="small-12 columns">
        <h1>Depot Solutions</h1>
        <p>Cambrian Transport have developed a number of innovative, cost effective and environmentally friendly modular systems. These can be combined and adapted to meet the needs of rail depot operators and project teams, to provide safe and efficient facilities for inspection and maintenance of rail vehicles and plant. The speed of delivery and flexibility of these systems is such that they are suitable for both permanent and temporary depots.</p>
      </div>
    </div>
  </section>

  <?php include('includes/footer.php'); ?>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/foundation.min.js"></script>

    <!-- jQuery easing functions library -->
    <script src="js/jquery.easing.1.3.js"></script>

<!--     <script>
      $(document).foundation();
    </script> -->

    <script>
      $(document).foundation({
        equalizer: {
          equalize_on_stack: true
        },
        topbar: {
          scrolltop : false
        }
      });
    </script>

    <script type="text/javascript">

          $('a[href*=#]:not([href=#])').click(function () {
            if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') || location.hostname === this.hostname) {

                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: (target.offset().top -45)
                    }, 1000, 'easeInOutExpo');
                    return false;
                }
            }
        });
    </script>

    <script type="text/javascript">
    // Collapse navbar when anywhere on page is clicked AND when nav links are clicked.
    /*jslint unparam:true */
    // $("body, nav a, .top-bar-section li").click(function () {
    //         $('nav').removeClass('expanded');
    // });

     // $(document).on("click", ".top-bar-section li", function () {
     //     Foundation.libs.topbar.toggle($('.top-bar'));
     // });
    /*jslint unparam:false */

    </script>

</body>
</html>
