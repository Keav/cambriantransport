<div class="fixed show-for-small-only">
  <div class="contain-to-grid">
    <nav class="top-bar" data-topbar data-options="is_hover: false" role="navigation">

      <ul class="title-area">
        <li class="name"></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>MENU</span></a></li>
      </ul>

      <section class="top-bar-section">
        <ul class="right">
          <?php
            if($page == "home") {
              echo '<li class="active"><a href="#home">Home</a></li>';
            } else {
              echo '<li><a href="index.php">Home</a></li>';
            }
          ?>
          <li <?php if($page == "about") echo 'class="active"' ?>><a href="company.php">About Us</a></li>
          <li <?php if($page == "sa") echo 'class="active"' ?>><a href="sa.php">Soft Arrest</a></li>
          <li <?php if($page == "pit") echo 'class="active"' ?>><a href="pit.php">Modular Pit</a></li>
          <li <?php if($page == "canopy") echo 'class="active"'; ?>><a href="canopy.php">Canopy Building</a></li>
        </ul>
      </section>
    </nav>
  </div>
</div>

  <section class="header">
    <div class="row">
      <div class="headerText">
        <p class="company">CAMBRIAN TRANSPORT</p>
        <p class="motto">&#8220;Making your vision a reality&#8221;</p>
      </div>
    </div>
    <div class="bg"></div>
  </section>

  <div class="sticky hide-for-small-only">
    <nav class="top-bar" data-topbar data-options="is_hover: false" role="navigation">

      <ul class="title-area">
        <li class="name"></li>
        <li class="toggle-topbar menu-icon"><a href="#"><span>MENU</span></a></li>
      </ul>

      <section class="top-bar-section">
        <!-- <ul class="right"> -->
        <ul>
          <?php
            if($page == "home") {
              echo '<li class="active"><a href="#home">Home</a></li>';
            } else {
              echo '<li><a href="index.php">Home</a></li>';
            }
          ?>
          <li <?php if($page == "about") echo 'class="active"'; ?>><a href="company.php">About Us</a></li>
          <li <?php if($page == "sa") echo 'class="active"'; ?>><a href="sa.php">Soft Arrest</a></li>
          <li <?php if($page == "pit") echo 'class="active"'; ?>><a href="pit.php">Modular Pit</a></li>
          <li <?php if($page == "canopy") echo 'class="active"'; ?>><a href="canopy.php">Canopy Building</a></li>
        </ul>
      </section>
    </nav>
  </div>
