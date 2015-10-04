<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<div ng-show="initiatives == ''" class="full-height wid-100 pos-absolute center-items bg-W">
	<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
	<div ng-if="isPoll">
	  <div data-modal-initial-poll></div>
	</div>
</div>
<div ng-if="initiatives!= ''">
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
