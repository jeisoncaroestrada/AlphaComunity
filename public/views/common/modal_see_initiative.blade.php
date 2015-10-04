<!-- Modal -->
<div class="modal fade" id="modalSeeInitiative" tabindex="-1" role="dialog" aria-labelledby="modalSeeInitiativeLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-silver2">
        <button type="button" class="close"  modal modal-parent="#modalSeeInitiative" modal-target="#modalSeeInitiative" data-dismiss="modal"><span aria-hidden="true" ng-click="failure = false" >&times;</span><span class="sr-only">Close</span></button>
        <div class="page-header no-margin">
          <h1 class="fs-20 no-margin">[[detailInitiative.title]] <br><small>[[detailInitiative.city]]</small></h1>
        </div>
      </div>
      <div class="modal-body inline-b wid-100">
        <div class="col-md-12 col-sm-12 col-xs-12 center-items">
          <div class="col-md-4 col-sm-4 col-xs-6 padding-t-b-20">
            <img class="img-responsive img-circle" src="img/initiatives/iniciative.png" alt="iniciativa">
          </div>
        </div>
        <div ng-bind-html="sanitize(detailInitiative.description)"></div>
        <p class="margin-right-5 inline-b">Apoyo: </p><span class="badge animation-all bg-2 ">[[detailInitiative.votes]]</span>
      </div>
      <div class="modal-footer">
        <div class="center-items">
          <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-items margin-plus-10 padding-sm-10">
              <button ng-click="support(detailInitiative)" ng-disabled="detailInitiative.supportingDisabled" class="wid-100 btn btn-primary btn-large fs-15 color-1 bd-1"><i class="icon-l mdi mdi-thumb-up">
                    </i>[[detailInitiative.supportingDisabled ? 'Ya apoyas esta inciativa!' : 'Apoyar esta iniciativa']]</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-items margin-plus-10 padding-sm-10">
              <button  modal modal-parent="#myModal" modal-target="#myModal" class="wid-100 btn btn-primary btn-large fs-15 center-items color-4 bd-4" data-dismiss="modal" aria-hidden="true" ng-click="failure = false">Cerrar</button>
            </div>
          </div>
        </div>       
      </div>
      <div ng-if="item.checkSupport" class="animate-if-panel progress-circular-panel center-items bg-B opacity-05">
        <md-progress-circular  md-mode="indeterminate"></md-progress-circular>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    
    //se ejecuta algo cuando el modal empieza a ocultar
    $('#modalSeeInitiative').on('hide.bs.modal', function (e) {
    })

    

</script>