
<div class="header">
	<nav class="navbar space">
	  <div class="container">
		<div class="navbar-left">
		  <div class="navbar-brand" href="#">
			<a href="#">
				<img alt="Brand" src="img/logo-kpa.png">
			</a>
		  </div>
			<div class="navbar-text logo">
			  <a href="#">
				Kita Punya Acara
			  </a>
			</div>
		</div>
		<div class="navbar-right">
			<a id="trigger-overlay" href="#">
				<img alt="Brand" src="img/burger.png">
			</a>
		</div>
		<div class="overlay overlay-door">
			<button type="button" class="overlay-close">Close</button>
			<nav>
				<ul>
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('about') }}">About</a></li>
					<li><a href="{{ route('events') }}">Events</a></li>
					<li><a href="{{ route('daftar') }}">Register</a></li>
					<li><a href="#">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="clearfix"></div>
		<div class="tagline text-center">
			The perfect way to spread your invitation
		</div>
	  </div>
	</nav>
</div>
