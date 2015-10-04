<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"  modal modal-parent="#myModal" modal-target="#myModal" data-dismiss="modal"><span aria-hidden="true" ng-click="failure = false" >&times;</span><span class="sr-only">Close</span></button>
        <h4 class="modal-title" id="myModalLabel">[[modal.title]]</h4>
      </div>
      <div class="modal-body" ng-bind-html="sanitize(modal.subTitle)">
      </div>
      <div class="modal-footer">
        <div class="center-items">
          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-items margin-plus-10 padding-sm-10" ng-click="signUp()">
              <button class="wid-100 btn btn-primary btn-large fs-15 center-items color-1 bd-1 margin-plus"><i class="icon-l mdi mdi-send"></i> [[modal.btnText]]</button>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-items margin-plus-10 padding-sm-10 margin-plus">
              <button modal modal-parent="#myModal" modal-target="#myModal" class="wid-100 btn btn-primary btn-large fs-15 center-items color-4 bd-4" data-dismiss="modal" aria-hidden="true" ng-click="failure = false">Cerrar</button>
            </div>
          </div>
        </div>       
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    
    //se ejecuta algo cuando el modal empieza a ocultar
    $('#myModal').on('hide.bs.modal', function (e) {
    })

    //se ejecuta algo cuando el modal se termina de ocultar
    $('#myModal').on('hidden.bs.modal', function (e) {
    })

</script>