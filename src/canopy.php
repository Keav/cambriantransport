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

  <?php $page = "canopy"; ?>
  <?php include('includes/header.php'); ?>

  <section class="grey" id="about">
    <div class="row content">
      <div class="small-12 medium-3 columns" style="padding-top:1rem;text-align:center;@media(min-width:640px){text-align:left;)">
        <img src="images/canopy_building.jpg" alt="">
      </div>
      <div class="small-12 medium-9 columns">
        <h3>Modular Steel Canopy Building</h3>
        <p>These buildings can be as basic as a single-line shed with lighting and ventilation systems. They can be enhanced to include forced fume extraction ventilation, heating, fire alarms, smoke detectors and security. Power and air supply take-off for tooling, jacking or craneage as well as washing and fuelling systems can also be incorporated. Elements can be added as and when required, giving this approach extra flexibility. This can be an important factor when developing a business case for staged investment in a depot. The modular buildings are relocatable and reusable if required.</p>

        <p>Depots of this type, using Cambrian Transport's innovative systems such as modular pits, Soft Arrest Systems and Solar Wind Lighting Systems have been installed at Taunton Fairwater, Ayr, Toton and Whitemoor for Network Rail/Babcock Rail.</p>
      </div>
    </div>
  </section>

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
