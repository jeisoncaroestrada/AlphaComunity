<!-- Modal -->
<div  slimscroll="{height: '100%'}" class="scroll-body modal fade" id="modalInitialPoll" tabindex="-1" role="dialog" aria-labelledby="modalInitialPollLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-1 inline-b wid-100 no-padding-bottom">
          <div class="modal-title col-md-4 col-sm-4 col-xs-12">
            <img class="img-responsive" src="img/logoYoDecidoFondoAzul.png">
          </div>
          <div class="icon-poll">
            <img class="img-responsive" src="img/icon-poll.png">
          </div>
      </div>
      <div class="modal-body">
        <form class="inline-b">
          <div class="page-header no-margin">
            <h2 class="">Antes de continuar <small>Nos gustaria saber!</small></h2>
          </div>
          <div ng-show="success" class="alert alert-success" role="alert" ng-bind-html="sanitize(success)"><strong></strong></div>
          <div ng-show="sessionMessage" class="alert alert-danger" role="alert">
            <strong>
              <UL type = disk >
                <LI ng-repeat="msg in sessionMessage">[[msg]]
              </UL>
            </strong>
          </div>
          <div class="form-group col-md-12">
             <label for="title">¿Con que tipo de perfil desea participar?</label>
              <select id="disabledSelect" ng-model="poll.userType" class="form-control">
              <option ng-repeat="type in userTypes" ng-click="">[[type]]</option>
            </select>
          </div>
          <div class="form-group col-lg-12 col-sm-12 col-xs-12">
            <label for="title">¿Para usted cual es el mejor criterio para elegir un líder, vocero o representante?</label>
            <md-radio-group ng-model="poll.question">
              <md-radio-button value="A">A) Que posea transparencia y ética</md-radio-button>
              <md-radio-button value="B">B) Que posea formación académica y experiencia acreditada </md-radio-button>
              <md-radio-button value="C">C) Que posea buenas ideas</md-radio-button>
              <md-radio-button value="D">D) Todas las anteriores</md-radio-button>
              <md-radio-button value="E">E) Otro Cual?</md-radio-button>
            </md-radio-group>
          </div>
          <div ng-if="poll.question == 'E'" class="form-group col-lg-12 col-sm-12 col-xs-12 fade_in_easy animation-all">
            <label for="title">¿Otro Cual?</label>
            <input ng-model="poll.other" type="text" class="form-control" id="title" placeholder="*Ingrese otro criterio">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <div class="center-items">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-items margin-plus-10 padding-sm-10" ng-click="sendPoll()">
              <button class="wid-100 btn btn-primary btn-large fs-15"><i class="icon-l mdi mdi-checkbox-multiple-marked-outline"></i> Enviar encuesta</button>
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
    $('#modalInitialPoll').on('hide.bs.modal', function (e) {
    })

    //se ejecuta algo cuando el modal se termina de ocultar
    $('#modalInitialPoll').on('hidden.bs.modal', function (e) {
    })

</script>