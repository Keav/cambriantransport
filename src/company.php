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

  <?php $page = "about"; ?>
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

</body>
</html>
