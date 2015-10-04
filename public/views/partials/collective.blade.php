<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<section class="wid-100 start-container bg-green">
	<article class="col-md-7" data-sr="enter left please, and hustle 100px over 1s no reset">
		<div class="page-header">
		  <h1 class="header-title-custom shadow-green">Colectivo de trabajo</h1>
		</div>
	</article>
	<article class="col-md-5" >
		<div class="col-md-12" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div class="typehead-primary-container green">
			  	<input type="text" ng-model="selected" placeholder="Buscar por palabra clave" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control typehead-primary">
			</div>
		</div>	
	</article>
	<article class="col-md-12 padding-b-50" >
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
	<footer id="footer" class="bg-4">
		<div data-sr="enter left please, and hustle 200px over 1s no reset" class="col-md-6 col-sm-12 col-xs-12 float-left inlineb margin-t-30">
			<nav class="wid-100">
					<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items" ng-click="goTo('/da')"><a class="fc-W" target="_blank"href=""><p>Home</p></a></div>
					<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items"><a class="fc-W"ng-click="goTo('/who_we_are')" href=""><p>Quienes somos</p></a></div>
					<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items"><a class="fc-W" target="_blank"href=""><p>FAQ</p></a></div>
					<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items" ng-click="goTo('/login')"><a class="fc-W" target="_blank"href=""><p>Iniciar sesión</p></a></div>
			</nav>
		</div>

		<div data-sr="enter right please, and hustle 200px over 1s no reset" class="col-md-6 col-sm-12 col-xs-12 float-left inlineb">
			<div class="col-md-6 col-md-6 col-xs-12 center-text margin-t-30 float-left ">
			  <p class="fs-15 fc-W">Síguenos en nuestras redes sociales</p>
			</div>
			<article class="col-md-6 col-md-6 col-xs-12 center-items margin-plus float-left">
					<div class="icon-social"><a target="_blank"href=""><i class="fc-4 pointer mdi mdi-facebook"></i></a></div>
					<div class="icon-social"><a target="_blank"href=""><i class="fc-4 pointer mdi mdi-instagram"></i></a></div>
					<div class="icon-social"><a target="_blank"href=""><i class="fc-4 pointer mdi mdi-twitter"></i></a></div>
					<div class="icon-social"><a target="_blank"href=""><i class="fc-4 pointer mdi mdi-youtube-play"></i></a></div>
			</article>
		</div>
	</footer>
</section>


<!-- Ventana emergente para ver en detalle una iniciativa  -->
<div ng-if="modalSeeHistoryShow">
  <div data-modal-see-history></div>
</div>
</div>
