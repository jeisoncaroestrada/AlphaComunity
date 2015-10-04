<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<div ng-show="initiatives == ''" class="full-height wid-100 pos-absolute center-items bg-W">
	<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
	<div ng-if="isPoll">
	  <div data-modal-initial-poll></div>
	</div>
</div>
<div ng-if="initiatives!= ''">
<section class="start-container bg-green">
	<article class="col-md-7" data-sr="enter left please, and hustle 100px over 1s no reset">
		<div class="page-header">
		  <h1 class="header-title-custom shadow-green">Iniciativas del Movimiento</h1>
		</div>
		<div class="col-md-12 fs-15 fc-W">
			<p>Aquí se describen las iniciativas avaladas por
				el movimiento de participación, los proyectos
				en marcha y los documentos anexos relacionados
				con las propuestas presentadas.
				Estas iniciativas surgen de las necesidades
				sociales o productivas y puede ser votadas
				por cada uno de los integrantes de la red.
			</p>
		</div>
	</article>
	<article class="col-md-5 padding-t-b-50-auto" >
		<div class="col-md-12" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div class="typehead-primary-container green">
			  	<input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control typehead-primary">
			</div>
			<div class="col-md-12 col-xs-12 center-items" data-sr="enter right please, and hustle 200px over 1s no reset ">
				<div class="wid-70">
					<img class="img-responsive" src="img/initiatives-view.png"></img>
				</div>
			</div>
		</div>	
	</article>
	<footer ng-if="!check" id="footer" class="bg-4">

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

</div>
</div>
