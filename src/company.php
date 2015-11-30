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

  <section class="grey" id="about">
    <div class="row content">
      <div class="small-12 columns">
        <h3>About the company</h3>
        <p>Cambrian Transport Limited was formed in 1996 and is now well established. We have assembled a strong team with proven experience and a diverse range of expertise. We can bring a significant range and depth of experience to support your organisation from the Engineering, Commercial, Operations, Infrastructure and Safety Management perspectives.</p>

        <p>In addition to Cambrian Transport's core team of Employees and Associates, we have a network of transport industry contacts and we are experienced in partnering with consulting, engineering and academic based organisations in multidisciplinary teams.</p>
      </div>
    </div>
  </section>

  <section id="solutions">
    <div class="row content">
      <div class="small-12 columns">
        <h3>Specialties</h3>
        <ul>
          <li>Infrastructure Design, Construction and Maintenance;</li>
          <li>Rail Infrastructure &amp; Operations Support;</li>
          <li>Traction &amp; Rolling Stock;</li>
          <li>Systems Interfaces;</li>
          <li>Environmental Assessment;</li>
          <li>Public Transport Planning, Capacity, Performance and Safety;</li>
          <li>Business Planning, Demand Forecasting and Economics;</li>
          <li>Fleet Specification and Operation;</li>
          <li>Terminal Development and Retail Trading including Leisure/Heritage aspects and associated Urban Regeneration;</li>
          <li>Support for Heritage and Preserved Railways.</li>
        </ul>
      </div>
    </div>
  </section>

  <section class="grey" id="solutions">
    <div class="row content">
      <div class="small-12 columns">
        <h3>Areas of expertise</h3>
        <ul>
          <li>Engineering Design and Assessment;</li>
          <li>Project Management;</li>
          <li>Safety Management including Safety Case Preparation &amp; RAMS;</li>
          <li>Risk Assessment;</li>
          <li>Cost Validation and Quantity Surveying;</li>
          <li>Contracts &#45; tendering / bidding;</li>
          <li>International Railway Standards including UIC, RIV, RIC &amp; TSI requirements for interoperability;</li>
          <li>Infrastructure Liability including Level Crossings;</li>
          <li>Transport and Works Act Applications;</li>
          <li>Education and Training.</li>
        </ul>
      </div>
    </div>
  </section>

    <section id="solutions">
    <div class="row content">
      <div class="small-12 columns">
        <h3>Project Experience</h3>
        <ul>
          <li>Track Renewals Strategy for Network Rail (Western and LNE Regions);</li>
          <li>Design and Development of Engineering Depots for Network Rail;</li>
          <li>Track and Signalling Upgrade Feasibility Studies for PB / Irish Rail;</li>
          <li>Land acquisition, Design, Tendering and Contract Management for the &#163;5M Barry Steam Tourist Railway Project;</li>
          <li>Engineering Assessment of High Speed Train maintenance for both Angel Trains and First Great Western.</li>
        </ul>
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

    <script type="text/javascript">
      isMobile=false;(function(a,b){if(/android.+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|e\-|e\/|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(di|rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|xda(\-|2|g)|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))isMobile=true})(navigator.userAgent||navigator.vendor||window.opera,'http://detectmobilebrowser.com/mobile');

      if (!isMobile) {
        $(document).ready(function() {
          $(window).on('scroll', function() {
            yPos = window.pageYOffset;
            shift = yPos * 0.8 + 'px';
            $('.bg').css('top', shift);
          });
        });
      }
    </script>

</body>
</html>
