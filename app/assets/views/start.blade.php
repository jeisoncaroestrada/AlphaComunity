<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<div>
	<nav class="navbar navbar-default navbar-fixed-top"  data-sr="enter top please, and hustle 200px no reset">
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
            <img ng-click="goTo('/NaN')" class="img-responsive logo-navbar float-left" src="img/logoYoDecidoFondoAzul.png">
	      	<h4 class="menu-selected fc-3">[[menusListSelected]]</h4>
          </div>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav col-lg-10 col-md-8 col-sm-12 col-xs-6">
	        <li class="nav-top-li [[activeMenu === 0 ? 'active' : '']]"><a ng-click="goTo('/start/platform')" href="">Plataforma<br class="hidden-xs"> Innovadora<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-top-li [[activeMenu === 1 ? 'active' : '']]"><a ng-click="goTo('/start/foundations')" href="">Fundamentos<br class="hidden-xs"> Innovadores<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-top-li [[activeMenu === 2 ? 'active' : '']]"><a ng-click="" href="">Crea<br class="hidden-xs"> tu iniciativa<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-top-li [[activeMenu === 3 ? 'active' : '']]"><a ng-click="goTo('/start/tools')" href="">Herramientas<br class="hidden-xs"> para decidir<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-top-li [[activeMenu === 4 ? 'active' : '']]"><a ng-click="" href="">Blog<br class="hidden-xs"> y Noticias<span class="sr-only">(current)</span></a></li>
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
	<div ui-view ></div>
	<nav class="navbar navbar-default bottom navbar-fixed-bottom" data-sr="enter bottom please, and hustle 200px no reset">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header col-md-2">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <h4 class="menu-selected fc-1">[[subMenusListSelected]]</h4>
	    </div>
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse wid-100" id="bs-example-navbar-collapse-2">
	      <ul class="nav navbar-nav wid-100">
	        <li ng-click="goTo([[item.url]])" ng-repeat="item in subMenus" class="nav-bottom-li [[activeSubMenu == $index ? 'active' : '']]"><a >[[item.title]]<span class="sr-only"></span></a></li>
	       	<!-- <li class="nav-bottom-li "><a href="#">Canal en vivo<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-bottom-li "><a href="#">Espacio de Expresión<span class="sr-only">(current)</span></a></li>
	       	<li class="nav-bottom-li "><a href="#">Histórico y Estadisticas del Movimiento<span class="sr-only">(current)</span></a></li> -->
	      </ul>
	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>

<!-- Ventana emergente para crear una nueva iniciativa -->
<div ng-if="modalShow">
  <div data-modal-create-initiative></div>
</div>

<!-- Ventana emergente para ver en detalle una iniciativa  -->
<div ng-if="modalSeeInitiativeShow">
  <div data-modal-see-initiative></div>
</div>

</div>
