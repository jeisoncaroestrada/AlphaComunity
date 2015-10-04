<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<div ng-show="initiatives == ''" class="full-height wid-100 pos-absolute center-items bg-W">
	<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
</div>
<div ng-if="initiatives!= ''">
<section class="wid-100 start-container bg-blue">
	<article class="col-md-7" data-sr="enter left please, and hustle 100px over 1s no reset">
		<div class="page-header">
		  <h1 class="header-title-custom shadow-blue">Histórico y Estadisticas del Movimiento</h1>
		</div>
	</article>
	<article class="col-md-5" >
		<div class="col-md-12" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div class="typehead-primary-container blue">
			  	<input type="text" ng-model="selected" placeholder="Buscar por palabra clave" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control typehead-primary">
			</div>
		</div>	
	</article>
	<article class="col-md-12" >
		<div class="col-md-6" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div class="page-header fc-W" ng-click="showModalSeeHistory('Estadisticas de usuarios')" data-backdrop="true" data-toggle="modal" data-target="#modalSeeHistory">
			  <h1 class="">Estadisticas de usuarios</h1>
			</div>
			<canvas id="doughnut" class="chart chart-doughnut" data="userStadistics" labels="userLabels" legend="true"></canvas> 
		</div>
		<div class="col-md-6" data-sr="enter right please, and hustle 100px over 1s no reset">
			<div class="page-header fc-W">
			  <h1 class="">Estadisticas de Iniciativas</h1>
			</div>
			<canvas id="pie" class="chart chart-pie" data="votesLabels" legend="true" labels="namesLabels"></canvas>  
		</div>
	</article>
	<article class="col-md-12 padding-t-b-50" >
		<div class="col-md-6 bar-chart" data-sr="enter bottom please, and hustle 100px over 1s no reset">
			<div class="page-header fc-W">
			  <h1 class="">Estadisticas de encuesta</h1>
			</div>
			<div class="fc-W">
				<div class="page-header no-margin">
				  <h3 class="no-margin">¿Para usted cual es el mejor criterio para elegir un líder, vocero o representante?</h3>
				</div>
				<OL type='A'>
					<LI>Que posea transparencia y ética
					<LI>Que posea formación académica y experiencia acreditada
					<LI>Que posea buenas ideas
					<LI>Todas las anteriores
					<LI>Otro Cual?
				</OL>
			</div>
			<canvas id="bar" class="chart chart-bar" data="pollStadistics" labels="pollLabels"></canvas> 
		</div>
		<div class="col-md-6" data-sr="enter bottom please, and hustle 100px over 1s no reset">
			<div class="page-header">
			  <h1 class="fc-W">Algunas respuestas <small class="fc-W">de otros usuarios</small></h1>
			</div>
			 <!-- Otras respuestas -->
			<div slimscroll="{height: '100%',alwaysVisible: 'true'}" class="scroll-body scroll-body-400">
			  <div ng-repeat="item in otherAnswers.slice().reverse()" data-sr="enter right please, and hustle 100px over 1s no reset" class="ng-hide-hidden col-sm-12 col-md-12 col-xs-12">
			    <div class="thumbnail callout-2 inline-b wid-100">
					<div class="caption col-md-12 col-sm-12 col-xs-12">
				        <p class="no-margin">[[item.q1]]</p>
				        <span class="label label-success label-absolute bg-2">[[item.created_at.substring(0, 10);]]</span>
				    </div>
			    </div>
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


<!-- Ventana emergente para ver en detalle una iniciativa  -->
<div ng-if="modalSeeHistoryShow">
  <div data-modal-see-history></div>
</div>

</div>
</div>
