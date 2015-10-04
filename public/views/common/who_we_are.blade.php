<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<nav class="nav-bar-absolute-auto bg-1">
	<div class="col-md-12 col-sm-12 col-xs-12 no-center-items-xs pointer margin-plus-20" data-sr="enter top please, and hustle 200px over 1s no reset">
		<div class="col-md-7 col-sm-4-col-xs-12">
			<div class="logo col-md-4 col-sm-8 col-xs-12">
				<img ng-click="goTo('/da')" class="img-responsive wid-100" src="img/logoYoDecidoFondoAzul.png">
			</div>
		</div>
		<div class="col-md-5 col-sm-8 col-xs-12">
			<div class="col-md-6 col-sm-6">
				<button class="col-md-12 col-xs-12 col-sm-12 btn btn-primary center-items color-4 bd-4 fs-15 margin-plus-10" ng-click="goTo('/login')">Iniciar sesión</button>
			</div>
			<div class="col-md-6 col-sm-6">
				<button class="col-md-12 col-xs-12 col-sm-12 btn btn-primary center-items color-3 bd-3 fs-15 margin-plus-10" ng-click="goTo('/signup')">Registrarse</button>
			</div>
		</div>
	</div>
</nav>
<section class="wid-100 bg-4 inline-b" id="initiatives">
	<article class="col-md-12" data-sr="enter left please, and hustle 100px over 1s no reset">
		<div class="page-header">
		  <h1 class="header-title-custom shadow-orange">Quienes somos</h1>
		</div>
		<div class="col-md-12 fs-20 fc-W">
			<p>Somos un colectivo innovador cuyo principal objetivo es brindar a la sociedad una plataforma de innovación social que usa la decisión
				en línea para canalizar la opinión ciudadana en un medio ágil, ser escuchado y comunicarse con los líderes del movimiento para
				ejercer el voto de una manera innovadora, con un verdadero impacto en las decisiones del día a día, transformando los mecanismos
				de participación en plataformas de participación innovadora.
			</p>
		</div>
	</article>
	<article class="col-md-12 padding-t-b-50-auto" >
		<div class="col-md-12" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div ng-repeat="item in team" class="team-card col-md-3 col-xs-12" data-sr="enter bottom please, and hustle 200px over 1s no reset ">
				<div class="col-md-12 center-items">
					<div class="wid-50">
						<img class="img-responsive border-radius" src="img/avatar/avatardefault.png"></img>
					</div>
				</div>
				<div class="col-md-12">
					<div class="wid-100">
						<h2>[[item.title]]</h2>
						<h3>[[item.name]]</h3>
						<p>[[item.description]]</p>
					</div>
				</div>
			</div>
		</div>	
	</article>
</section>
<footer ng-if="!check" id="footer" class="bg-1">

	<div data-sr="enter left please, and hustle 200px over 1s no reset" class="col-md-6 col-sm-12 col-xs-12 float-left inlineb margin-t-30">
		<nav class="wid-100">
				<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items" ng-click="goTo('/da')"><a class="fc-W" target="_blank"href=""><p>Home</p></a></div>
				<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items"><a class="fc-W" ng-click="goTo('/who_we_are')" href=""><p>Quienes somos</p></a></div>
				<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items"><a class="fc-W" target="_blank"href=""><p>FAQ</p></a></div>
				<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items" ng-click="goTo('/login')"><a class="fc-W" target="_blank"href=""><p>Iniciar sesión</p></a></div>
		</nav>
	</div>

	<div data-sr="enter right please, and hustle 200px over 1s no reset" class="col-md-6 col-sm-12 col-xs-12 float-left inlineb">
		<div class="col-md-6 col-md-6 col-xs-12 center-text margin-t-30 float-left ">
		  <p class="fs-15 fc-W">Síguenos en nuestras redes sociales</p>
		</div>
		<article class="col-md-6 col-md-6 col-xs-12 center-items margin-plus float-left">
				<div class="icon-social"><a target="_blank"href=""><i class="fc-1 pointer mdi mdi-facebook"></i></a></div>
				<div class="icon-social"><a target="_blank"href=""><i class="fc-1 pointer mdi mdi-instagram"></i></a></div>
				<div class="icon-social"><a target="_blank"href=""><i class="fc-1 pointer mdi mdi-twitter"></i></a></div>
				<div class="icon-social"><a target="_blank"href=""><i class="fc-1 pointer mdi mdi-youtube-play"></i></a></div>
		</article>
	</div>
</footer>
</div>