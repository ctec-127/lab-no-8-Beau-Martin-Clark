<?php // Filename: navbar.php ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Weather Links
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			<a class="dropdown-item" href="https://www.weather.gov/">The National Weather Service/NOAA</a>
			<div class="dropdown-divider"></div>
			<a class="dropdown-item" href="https://weather.com/weather/today/l/45.60,-122.42?">The Weather Channel</a>
		  	<a class="dropdown-item" href="https://www.wunderground.com/weather/us/wa/vancouver">Weather Underground</a>
        </div>
      </li>
    </ul>
  </div>
</nav>
