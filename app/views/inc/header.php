<!-- Dropdown Structure -->
<ul id="dropdown1" class="dropdown-content">
  <li><a href="portafolio.php?type=individual">Individual</a></li>
  <li class="divider"></li>
  <li><a href="portafolio.php?type=collaborative">Colaborativo</a></li>
</ul>
<!-- Dropdown Structure -->
<ul id="dropdown1-mobile" class="dropdown-content">
  <li><a href="portafolio.php?type=individual">Individual</a></li>
  <li class="divider"></li>
  <li><a href="portafolio.php?type=collaborative">Colaborativo</a></li>
</ul>
<style>
.ec-color-transparent
{
  background-color:rgba(0,0,0,0);
  -webkit-box-shadow: inset 0px 0px 100px 1px rgba(0,0,0,1);
  -moz-box-shadow:    inset 0px 0px 100px 1px rgba(0,0,0,1);
  box-shadow:         inset 0px 0px 100px 1px rgba(0,0,0,1);
}
</style>
<div class="navbar-fixed">
<nav class="blue">
  <div class="container"> 
      <div class="nav-wrapper">
        <a href="index.php" class="brand-logo">Twicky</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down">
          <li><a href="http://apps.twicky.com.mx">Apps</a></li>
          <li><a href="http://info.twicky.com.mx">Info</a></li>
          <li><a href="http://lab.twicky.com.mx">Lab</a></li>
          <li><a href="http://games.twicky.com.mx">Games</a></li>
          <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Portafolio<i class="material-icons right">arrow_drop_down</i></a></li>
        </ul>
      </div>
      </div>
  </nav>
</div>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="http://info.twicky.com.mx">Info</a></li>
      <li><a href="http://lab.twicky.com.mx">Lab</a></li>
      <li><a href="http://games.twicky.com.mx">Games</a></li>
      <li><a class="dropdown-trigger" href="#!" data-target="dropdown1-mobile">Portafolio<i class="material-icons right">arrow_drop_down</i></a></li>
    </ul>

