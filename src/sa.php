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

  <section id="about">
    <div class="row content">
      <div class="small-12 columns">
        <h3>Soft Arrest System</h3>
        <p>Another innovative solution to a longstanding industry safety hazard has been developed to meet one particular operator's urgent requirement. This is the Cambrian Soft Arrest System which ensures safe working for maintenance operatives while working at heights on and around rail vehicles. The system is a step-change improvement over conventional fixed lanyard and harness systems in use in most depots.</p>

        <p>The Soft Arrest System is an easy-to-use harness system worn by the operative which allows free access along the entire length of rail vehicles while working at height. In the event of a fall, the Soft Arrest System lowers the operative safely and gently to floor level where aid can be given if required.</p>

        <p>This is a considerable advance over conventional fixed systems where the operative is subjected to snatch-loading in the event of fall. This may cause or add to injuries. If left suspended above ground level, a casualty can rapidly succumb to the effects of suspension trauma in a matter of minutes. The casualty may quickly become unconscious and be in need of urgent recovery before first aid can be given. In extremes the condition can be fatal.</p>

        <p>Recognising this risk, one operator asked Cambrian Transport to design and deliver an optimum solution that allows safe working at height on rail vehicles in depots. The Soft Arrest System can be installed within depot buildings and is an option that can be installed within the modular steel canopy buildings. Alternatively, where more appropriate, the system can be installed externally using either portal or cantilever support frames. The Soft Arrest System is fully relocatable.</p>
      </div>
    </div>
  </section>

  <section class="darkgrey">
    <div class="row content">
      <div class="small-6 columns">
        <div class="flex-video widescreen youtube">
          <iframe width="" height="" src="https://www.youtube.com/embed/YgJHU_kWSxA" frameborder="0" allowfullscreen=""></iframe>
        </div>
      </div>
      <div class="small-6 columns">
        <div>
          <h3>SOFT ARREST SYSTEM</h3>
          <p>A Soft Arrest System designed to protect anyone working t height. Especially suited to the Rail and Transport industry, but could be applied to anywhere that there is regular working at height.</p>
        </div>
        <div>
          <a class="button" href="sa.php">LEARN MORE</a>
        </div>
      </div>
    </div>
  </section>

  <section class="grey" id="about">
    <div class="row content">
      <div class="small-12 columns">
        <p>Further operators are recognising the risks associated with working at height on rail vehicles and are investing in the Cambrian Soft Arrest System to meet their legislative safety obligations.</p>

        <p>The Soft Arrest System works by using a simple and safe braking technology whereby the device gently but immediately assumes control, arresting the descent without any jerkiness or flexing of the spine. It ensures a simple and soft lowering to the floor, enabling rescue and treatment at a safe level - the floor! Most of the time, unless serious injury has been sustained prior to or during the fall, operatives may even be able to 'rescue' themselves - by just walking away.</p>
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
