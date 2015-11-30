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

  <?php $page = "pit"; ?>
  <?php include('includes/header.php'); ?>

  <section class="grey" id="about">
    <div class="row content">
      <div class="small-12 medium-3 columns" style="padding-top:1rem;text-align:center;@media(min-width:640px){text-align:left;)">
        <img src="images/inside_coleham.jpg" alt="">
      </div>
      <div class="small-12 medium-9 columns">
        <h3>Modular Pre-Cast Concrete Inspection Pit</h3>
        <p>Cambrian Transport have developed a system of modular, pre-cast concrete inspection pit units. Their first installation was designed to provide a semi-permanent inspection and maintenance pit facility for a track renewals contractor who required a depot with just a two-year operational life. A tight project deadline meant that the pit had to be constructed in as short a time as practicable.</p>

        <p>The U-shaped concrete pit units, designed and refined by Cambrianco in conjunction with ABM, had to be cast to fine tolerances. Rail base plates are bolted directly to the units. Steel shims and eccentric ferrules are used to fine-line the track if needed.</p>

        <p>ABM was able to bring their experience of pre-cast concrete manufacture and supply to meet these exacting requirements.</p>
      </div>
    </div>
  </section>

  <section class="grey" id="about">
    <div class="row content">
      <div class="small-12 columns">
        <h3>Rapid Comissioning</h3>
        <p>A complete inspection pit can be constructed in a week, minimising disruption during construction and ensuring the rapid commissioning of the new facility. The pit is tanked to prevent problems with ground water and contain any spillages of fuel, oil or cleaning chemicals from the rail vehicle maintenance operation. A pumped drain with an interceptor is provided to collect and spillages and to allow safe environmental disposal. Pit lighting and power supplies can be provided to meet the operator's requirements.</p>
      </div>
    </div>
  </section>

    <section class="grey" id="about">
      <div class="row content">
        <div class="small-12 columns">
          <h3>Relocatable and Reusable</h3>
          <p>The pit is designed to be relocatable and reusable. This can assist an operator's business investment case. It also minimises the environment impact of the project. The system is suitable for either temporary or permanent depots. The units themselves have a 30-year design life.</p>

          <p>The modular pit solution has been further refined and developed in other applications to form the basis of a complete rail vehicle maintenance depot. Side pit units with removable steel covers are available. These further extend the capability of the depot facility by allowing pit access to the outside of vehicle bogies as well as to the underside. Pre-cast slab track areas for maintenance, cleaning or fuelling away from the inspection pit are available.</p>

          <p>These units incorporate drainage channels which are connected to an interceptor system. Side slab units have been developed for pedestrian or fork lift loading incorporating vehicle jacking pads if needed.</p>
        </div>
      </div>
  </section>



  <?php include('includes/footer.php'); ?>

</body>
</html>
