<!-- Modal -->
<div  slimscroll="{height: '100%'}" class="scroll-body modal fade" id="modalSeeHistory" tabindex="-1" role="dialog" aria-labelledby="modalSeeHistoryLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header bg-1 inline-b wid-100 padding-t-b-10-auto">
          <div class="modal-title col-md-9 col-sm-8 col-xs-6">
            <h4 class="fc-W no-padding">[[historySelected]]</h4>
          </div>
          <div class="modal-title col-md-3 col-sm-4 col-xs-6">
            <button type="button" class="close position-absolute right-0"  modal modal-parent="#modalSeeHistory" modal-target="#modalSeeHistory" data-dismiss="modal"><span aria-hidden="true" ng-click="" >&times;</span><span class="sr-only">Close</span></button>
            <img class="img-responsive" src="img/logoYoDecidoFondoAzul.png">
          </div>
      </div>
      <div class="modal-body">
        <article class="col-md-12" >
          <canvas id="doughnut" class="chart chart-doughnut" data="userStadistics" labels="userLabels" legend="true"></canvas> 
        </article>
        <article class="col-md-12" >
          <div class="col-md-6">
            <div class="page-header fc-W">
              <h1 class="">Estadisticas de Iniciativas[[userStadistics]]</h1>
            </div>
            <canvas id="pie" class="chart chart-pie" data="votesLabels" legend="true" labels="namesLabels"></canvas>  
          </div>
        </article>
        <article class="col-md-12 padding-t-b-50 bg-1" >
          <div class="col-md-6 bar-chart">
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
          <div class="col-md-6">
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
      </div>
      <div class="modal-footer">
        <div class="center-items">
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-items margin-plus-10 padding-sm-10" ng-click="">
              <button class="wid-100 btn btn-primary btn-large fs-15"><i class="icon-l mdi mdi-close"></i> Cerrar</button>
            </div>
          </div>
        </div>       
      </div>
      <div ng-if="processing" class="animate-if-panel progress-circular-panel center-items bg-B opacity-05">
        <md-progress-circular  md-mode="indeterminate"></md-progress-circular>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    
    //se ejecuta algo cuando el modal empieza a ocultar
    $('#modalSeeHistory').on('hide.bs.modal', function (e) {
    })

    //se ejecuta algo cuando el modal se termina de ocultar
    $('#modalSeeHistory').on('hidden.bs.modal', function (e) {
    })

</script>