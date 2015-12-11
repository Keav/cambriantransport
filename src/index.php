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

  <?php $page = "home"; ?>
  <?php include('includes/header.php'); ?>

  <section class="grey" id="about">
    <div class="row content">
      <div class="small-12 columns">
        <p>Cambrian Transport Limited is a civil engineering company specialising in the railway industry.</p>
        <p>We provide consultancy services across a broad spectrum of activities and aim for an exceptional level of commitment to clients.</p>
        <p>Cambrian Transport comprises individuals who are passionate about transport systems and their future.
        We are confident that we have the mix of skills and experience to positively contribute to the development of the transport industry and provide a first class service to our clients.</p>
      </div>
    </div>
  </section>

  <section>
    <div class="row content specialties" data-equalizer>
      <div class="small-12 columns">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
          <li>
            <!-- <div class="panel hvr-glow"> -->
              <div class="text-center" data-equalizer-watch>
                <!-- <i class="fi-lightbulb"></i> -->
                <i class="fa fa-lightbulb-o fa-2x"></i>
                <h3>Innovation</h3>
                <p>Cambrian Transport specialises in providing innovative solutions to improve safety or increase efficiency.</p>
            </div>
          </li>
          <li>
            <!-- <div class="panel hvr-glow"> -->
              <div class="text-center" data-equalizer-watch>
                <!-- <i class="fi-link"></i> -->
                <i class="fa fa-link fa-2x"></i>
                <h3>Collaboration</h3>
                <p>We will work with you to achieve <em>your</em> aims.</p>
            </div>
          </li>
          <li>
            <!-- <div class="panel hvr-glow"> -->
              <div class="text-center" data-equalizer-watch>
                <!-- <i class="fi-clock"></i> -->
                <i class="fa fa-clock-o fa-2x"></i>
                <h3>Agile</h3>
                <p>We specialise in being responsive and agile. Many of our innovative solutions were developed with rapid deployment in mind.</p>
            </div>
          </li>
        <!-- </ul>
      </div>
    </div>
  </section>

    <section>
    <div class="row content" data-equalizer>
      <div class="small-12 columns">
        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3"> -->
          <li>
            <!-- <div class="panel hvr-glow"> -->
              <div class="text-center" data-equalizer-watch>
                <i class="fa fa-train fa-2x"></i>
                <h3>Traction &amp; Rolling Stock</h3>
                <p>We have senior industry T&amp;RS specialists who work nationwide.</p>
            </div>
          </li>
          <li>
            <!-- <div class="panel hvr-glow"> -->
              <div class="text-center" data-equalizer-watch>
                <i class="fa fa-flash fa-2x"></i>
                <h3>Electrification</h3>
                <p>We currently have significant involvement in Network Rail's Great Western Electrification project.</p>
            </div>
          </li>
          <li>
            <!-- <div class="panel hvr-glow"> -->
              <div class="text-center" data-equalizer-watch>
                <i class="fa fa-code-fork fa-2x"></i>
                <h3>Track</h3>
                <p>We have expertise in surveying and maintaining existing track. Along with designing and constructing new track infrastructure.</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <section class="grey">
    <div class="row content specialties" data-equalizer>
      <div class="small-12 columns">
        <ul class="small-block-grid-1">
          <li>
            <!-- <div class="panel hvr-glow"> -->
              <div class="text-center" data-equalizer-watch>
                <i class="fa fa-industry fa-2x"></i>
                <h3>Depot Solutions</h3>
                <p style="text-align:left;">Cambrian Transport have developed a number of innovative, cost effective and environmentally friendly modular systems. These can be combined and adapted to meet the needs of rail depot operators and project teams, to provide safe and efficient facilities for inspection and maintenance of rail vehicles and plant. The speed of delivery and flexibility of these systems is such that they are suitable for both permanent and temporary depots.</p>

                <p><a href="company.php"><button>Learn More</button></a></p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

<!--   <section id="solutions">
    <div class="row content">
      <div class="small-2 columns" style="text-align:center">
        <i class="fi-lightbulb"></i>
      </div>

      <div class="small-10 columns">
        <h3>Depot Solutions</h3>
        <p>Cambrian Transport have developed a number of innovative, cost effective and environmentally friendly modular systems. These can be combined and adapted to meet the needs of rail depot operators and project teams, to provide safe and efficient facilities for inspection and maintenance of rail vehicles and plant. The speed of delivery and flexibility of these systems is such that they are suitable for both permanent and temporary depots.</p>
      </div>
    </div>
  </section> -->

  <section>
    <div class="banner splash">
      <div class="row">
        <p class="quote">We aim to be the first choice for Transport Consultancy services.</p>
      </div>
    </div>
  </section>

  <?php include('includes/footer.php'); ?>

</body>
</html>
