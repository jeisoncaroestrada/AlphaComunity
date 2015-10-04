<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<nav class="nav-bar-absolute" data-sr="enter top please, and hustle 200px over 1s no reset">
	<div class="col-md-12 col-sm-12 col-xs-12 no-center-items-xs pointer margin-plus-20">
		<div class="logo col-md-3 col-sm-4 col-xs-12">
			<img ng-click="goTo('/da')" class="img-responsive wid-100" src="img/logoYoDecidoFondoAzul.png">
		</div>
		<div class="col-md-7 col-sm-6 col-xs-12 text-align-right float-left ">
		  <p class="fs-15 fc-W">Ya estas registrado pero ¿olvidaste tu contraseña? <a ng-click="goTo('/remember')" class="underline">Clic aquí</a></p>
		</div>
		<div class="col-md-2 col-sm-3">
			<button class="col-md-12 col-xs-12 col-sm-12 btn btn-primary center-items color-4 bd-4 fs-15" ng-click="goTo('/login')">Iniciar sesión</button>
		</div>
	</div>
</nav>
<section id="sectionSignUp" class="no-center-items-xs padding-md-20 padding-xs-20 padding-t-b-50 bg-1">
	<div class="container-fluid padding-top-50 over-flow-hidden">
	</div>
	<div class="padding-md-20 padding-sm-15 inline-b wid-100 no-padding-bottom no-padding-top margin-t-30">
		<div class="row" data-sr="enter right please, and hustle 200px over 1s no reset">
			<h1 class="col-lg-12 text-center">
				<span class="fc-1"><strong4>Formulario de</strong4> <strong2>Registro</strong2></span>
			</h1>
		</div>
		<div class="row center-items">
			<!-- formulario Registro -->
			<form data-sr="enter left please, and hustle 200px over 1s no reset" class="position-relative">
			  <div class="col-md-12 col-sm-12 col-xs-12">
			  	<div ng-show="success" class="alert alert-success" role="alert" ng-bind-html="sanitize(success)"><strong></strong></div>
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
			  <div class="form-group col-lg-6 col-sm-6 col-xs-12">
			    <input ng-model="form.name1" type="text" class="form-control" id="name1" placeholder="*Ingrese su primer nombre.">
			  </div>
			  <div class="form-group col-lg-6 col-sm-6 col-xs-12">
			    <input ng-model="form.name2" type="text" class="form-control" id="name2" placeholder="*Ingrese su segundo nombre.">
			  </div>
			  <div class="form-group col-lg-6 col-sm-6 col-xs-12">
			    <input ng-model="form.lastname1" type="text" class="form-control" id="lastname1" placeholder="*Ingrese su primer apellido.">
			  </div>
			  <div class="form-group col-lg-6 col-sm-6 col-xs-12">
			    <input ng-model="form.lastname2" type="text" class="form-control" id="lastname2" placeholder="*Ingrese su segundo apellido.">
			  </div>
			  <div class="form-group col-lg-6 col-sm-6 col-xs-12">
			    <input ng-model="form.email" type="text" class="form-control" id="email" placeholder="*Ingrese su correo electrónico.">
			  </div>
			  <div class="wid-100 inline-b">
				  <div class="form-group col-lg-6 col-sm-6 col-xs-12">
				    <input ng-model="form.password" type="password" class="form-control" id="password" placeholder="*Ingrese su contraseña">
				  </div>
				  <div class="form-group col-lg-6 col-sm-6 col-xs-12">
				    <input ng-model="form.password_confirmation" type="password" class="form-control" id="password2" placeholder="*Repita su contraseña">
				  </div>
			  </div>
			<div class="col-md-6 col-sm-6">
				<UL type = disk class="fc-W ul-4 ul-margin-5">
					<LI><strongw>La contraseña debe tener 8 caracteres.</strongw>
					<LI><strongw>Combina mayúsculas, minúsculas, números y caracteres especiales.</strongw>
				</UL>
				<div class="col-md-12 col-sm-12 col-xs-12">
                 	<md-checkbox class="fc-W" ng-model="form.check1" ng-change="addTest(test.name)" aria-label="Checkbox cmt">Acepto recibir vía e-mail información relevante de yoDecido.net</md-checkbox>
                </div>
                <div class="col-md-12 col-sm-12 col-xs-12">
                 	<md-checkbox class="fc-W" ng-model="form.check2" ng-change="addTest(test.name)" aria-label="Checkbox cmt">Acepto <a class="underline" href="">Términos y condiciones</a> de yoDecido.net</md-checkbox>
                </div>
			</div>
			<div class="center-items col-md-6 col-sm-6">
				<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-items margin-plus-10 padding-sm-10" ng-click="signUp()">
						<button class="wid-100 btn btn-primary">Registrarse</button>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 center-items margin-plus-10 padding-sm-10 " ng-click="goTo('/')">
						<button class="wid-100 btn btn-primary center-items color-4 bd-4">Cancelar</button>
					</div>
				</div>
			</div>
			<div ng-if="processing" class="animate-if-panel progress-circular-panel center-items bg-B opacity-05">
				<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
			</div>
			</form>
			<!-- end formulario registro -->
	</div>		

</section>
<footer ng-if="!check" id="footer" class="bg-4">

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