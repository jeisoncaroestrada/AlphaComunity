<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<div ng-show="initiatives == ''" class="full-height wid-100 pos-absolute center-items bg-W">
	<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
	<div ng-if="isPoll">
	  <div data-modal-initial-poll></div>
	</div>
</div>
<div ng-if="initiatives!= ''">
	<nav class="navbar navbar-default navbar-fixed-top">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <div class="wid-100">
            <img ng-click="goTo('/NaN')" class="img-responsive logo-navbar" src="img/logoYoDecidoFondoAzul.png">
          </div>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav col-lg-10 col-md-8 col-sm-12 col-xs-6">
	        <li class="nav-top-li active"><a href="#">Plataforma<br class="hidden-xs"> Innovadora<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-top-li "><a href="#">Fundamentos<br class="hidden-xs"> Innovadores<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-top-li "><a href="#">Crea<br class="hidden-xs"> tu iniciativa<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-top-li "><a href="#">Herramientas<br class="hidden-xs"> para decidir<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-top-li "><a href="#">Blog<br class="hidden-xs"> y Noticias<span class="sr-only">(current)</span></a></li>
	      </ul>
	      <ul class="navbar-right user-menu col-lg-2 col-md-4 col-sm-4 col-xs-6 bg-4 hover-4">
		    <li class="dropdown">
		    	<div data-toggle="dropdown" role="button" aria-expanded="false" class="wid-100 center-items">
					<div class="user-avatar-menu">
						<img class="img-responsive img-circle" ng-cloak src="img/avatar/[[avatar]]">
					</div>
					<div class="col-md-7 user-name-menu">
						<span class="bold-600 fc-W fs-10">[[userName]]</span>
					</div>
				</div>
		     	<ul class="dropdown-menu wid-100 hover-fc-W" role="menu">
			        <li ><a ng-click='showModal()' data-backdrop="static" data-toggle="modal" data-target="#myModal"><i class="icon-l mdi mdi-gavel"></i>  Crear Iniciativa</a></li>
			        <li class="divider"></li>
			        <li ><a ng-click="goTo('/')"><i class="icon-l mdi mdi-book-multiple"></i>   Documentación,<br>Material de consulta</a></li></a></li>
			        <li><a href="#">Something else here</a></li>
			        <li class="divider"></li>
			        <li ng-click="logOut()"><a ><i class="icon-l mdi mdi-logout"></i> Cerrar sesión</a></li>
		      	</ul>
		    </li>
	  	</ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>

	<nav class="navbar navbar-default bottom navbar-fixed-bottom">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header col-md-2">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse wid-100" id="bs-example-navbar-collapse-2">
	      <ul class="nav navbar-nav wid-100">
	        <li class="nav-bottom-li active"><a href="#">Decisiones en línea<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-bottom-li "><a href="#">Canal en vivo<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-bottom-li "><a href="#">Espacio de Expresión<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-bottom-li "><a href="#">Histórico y Estadisticas del Movimiento<span class="sr-only">(current)</span></a></li>
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>
<section class="wid-100 start-container" id="initiatives">
	<article class="col-md-12" data-sr="enter left please, and hustle 100px over 1s no reset">
		<div class="page-header">
		  <h1 class="">Estas son nuestras iniciativas <small>Más recientes</small></h1>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
		  	  <!-- Iniciativas -->
			  <div dir-paginate="item in initiatives.slice().reverse()|filter:initiativeSelected| itemsPerPage: 6"  data-sr="enter left please, and hustle 100px over 1s no reset" class="ng-hide-hidden col-sm-6 col-md-4 col-xs-12">
			    <div class="thumbnail inline-b wid-100 pos-relative">
			    	<div class="col-md-4 col-sm-4 col-xs-6">
			      		<img class="img-responsive img-circle" src="[['img/initiatives/' + item.thumbnail]]" alt="iniciativa">
			    	</div>
				    <div class="caption col-md-8 col-sm-8 col-xs-6">
				        <div slimscroll="{height: '105px'}" class="scroll-body page-header no-margin">
						  <h1 class="fs-20">[[item.title]] <br><small>[[item.city]]</small></h1>
						</div>
					</div>
					<div class="caption col-md-12 col-sm-12 col-xs-12">
				        <p slimscroll="{height: '90px'}" class="scroll-body">[[item.shortDescription]]</p>
				        <p class="margin-plus-10"><a class="btn btn-primary" role="button" ng-click="seeInitiative(item)"  data-toggle="modal" data-target="#modalSeeInitiative"><i class="icon-l mdi mdi-magnify"></i> Ver</a> 
					        <a ng-if="!item.supportingDisabled" ng-click="support(item)" class="animate-if-button btn btn-default btn-support animation-all" role="button">
					        	<i class="icon-l mdi mdi-thumb-up">
					        	</i>Apoyar esta iniciativa <span class="badge animation-all">[[item.votes]]</span>
					        </a>
					        <span ng-if="item.supportingDisabled" class="animate-if-button label label-success label-support animation-all" role="button">
					        	<i class="icon-l mdi mdi-thumb-up">
					        	</i>Ya apoyas esta inciativa! <span class="badge animation-all">[[item.votes]]</span>
					        </span>
				   		</p>
				    </div>
				    <div ng-if="item.checkSupport" class="animate-if-panel progress-circular-panel center-items bg-B opacity-05">
						<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
					</div>
			    </div>
			  </div>
		  </div>
		</div>
		<dir-pagination-controls></dir-pagination-controls>
	</article>
	<article class="col-md-12 bg-4 padding-t-b-50" >
		<div class="col-md-6" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div class="page-header">
			  <h1 class="">Estadisticas de usuarios <small>Actualizada</small></h1>
			</div>
			<canvas id="doughnut" class="chart chart-doughnut" data="userStadistics" labels="userLabels" legend="true"></canvas> 
		</div>
		<div class="col-md-6" data-sr="enter right please, and hustle 100px over 1s no reset">
			<div class="page-header">
			  <h1 class="">Estadisticas de Iniciativas <small>Más apoyadas</small></h1>
			</div>
			<canvas id="pie" class="chart chart-pie" data="votesLabels" legend="true" labels="namesLabels"></canvas>  
		</div>
	</article>
	<article class="col-md-12 padding-t-b-50" >
		<div class="col-md-6 bar-chart" data-sr="enter bottom please, and hustle 100px over 1s no reset">
			<div class="page-header">
			  <h1 class="">Estadisticas de encuesta <small>Actualizada</small></h1>
			</div>
			<div>
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
			  <h1 class="">Algunas respuestas <small>de otros usuarios</small></h1>
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
</section>

<!-- Ventana emergente para crear una nueva iniciativa -->
<div ng-if="modalShow">
  <div data-modal-create-initiative></div>
</div>

<!-- Ventana emergente para ver en detalle una iniciativa  -->
<div ng-if="modalSeeInitiativeShow">
  <div data-modal-see-initiative></div>
</div>

</div>
</div>
