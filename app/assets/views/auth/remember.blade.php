<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<nav class="nav-bar-absolute margin-plus-20" data-sr="enter top please, and hustle 200px over 1s no reset">
	<div class="col-md-6 col-sm-6 col-xs-12 center-items pointer">
		<div class="logo col-md-6 col-sm-10 col-xs-10">
			<img ng-click="goTo('/da')" class="img-responsive wid-100" src="img/logoYoDecidoFondoAzul.png">
		</div>
	</div>
</nav>
<section class="no-center-items-xs padding-md-20 padding-xs-20 padding-t-b-50 bg-1">
	<div class="container-fluid padding-top-50 over-flow-hidden">
	</div>
	<div class="padding-sm-20 padding-sm-15 inline-b wid-100 no-padding-bottom no-padding-top margin-t-10">
		<div class="row" data-sr="enter top please, and hustle 200px over 1s no reset">
			<h1 class="col-lg-12 text-center">
				<span class="fc-1"><strong4>Recordar</strong4> <strong2>Contraseña</strong2></span>
			</h1>
		</div>
		<div class="row">
			<!-- formulario login -->
			<div class="col-md-7 border-dashed margin-t-30 inline-b"  data-sr="enter left please, and hustle 200px over 1s no reset ">
				<form>
				  <p class="fc-W fs-20">¿Olvidaste tu contraseña? ingresa tu correo de registro para recordarla</p>
				  <div class="col-md-12 col-sm-12 col-xs-12">
				  	<div ng-show="success" class="alert alert-success animation-all" ng-bind-html="sanitize(success)" role="alert"></div>
				  </div>
				  <div class="col-md-12 col-sm-12 col-xs-12">
				  <div ng-show="sessionMessage" class="alert alert-danger" role="alert">
			            <strong>
			              <UL type = disk >
			                <LI ng-repeat="msg in sessionMessage">[[msg]]
			              </UL>
			            </strong>
			        </div>
				  </div>
				  <div class="form-group position-relative col-md-12 col-sm-12 col-xs-12">
				    <input ng-model="form.user" type="text" class="form-control" id="user" placeholder="*Nombre de Usuario o email de registro">
				  </div>
				<div class="col-lg-6 col-md-8 col-sm-7 col-xs-12 center-items margin-plus-10 padding-sm-10" ng-click="rememberPassword()">
					<button class="wid-100 btn btn-primary color-3 bd-3 fs-25">Recordar contraseña</button>
				</div>
				</form>
				<div ng-if="processing" class="animate-if-panel progress-circular-panel center-items bg-B opacity-05">
					<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
				</div>
			</div>
			<div class="col-md-5 col-xs-12 center-items" data-sr="enter right please, and hustle 200px over 1s no reset ">
			<img class="img-responsive" src="img/login1.png"></img>
		</div>
			<!-- end formulario login -->
		</div>
	</div>
</section>
<footer id="footer" class="bg-4">

	<div data-sr="enter left please, and hustle 200px over 1s no reset" class="col-md-6 col-sm-12 col-xs-12 float-left inlineb margin-t-30">
		<nav class="wid-100">
				<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items" ng-click="goTo('/da')"><a class="fc-W" target="_blank"href=""><p>Home</p></a></div>
				<div class="col-md-3 col-sm-3 col-xs-12 float-left center-items"><a class="fc-W" ng-click="goTo('/who_we_are')" href=""><p>Quienes somos</p></a></div>
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
</div>