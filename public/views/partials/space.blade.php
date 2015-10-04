<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
	<section class="wid-100 start-container bg-blue">
		<article class="col-md-6 col-sm-6 inline-b" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div class="page-header no-margin">
			  <h1 class="header-title-custom shadow-blue">Espacio de Expresión</h1>
			</div>
			<div class="col-md-12 fs-15 fc-W">
				<p>Es un foro de participación en el que los participantes innovadores pueden expresar
					su opinión y participar a cerca de los proyectos, encuestas, iniciativas del movimiento
					y debates.
				</p>
				<h3>Participa y deja tu opinión en el foro:</h3>
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
				    <input ng-model="form.name1" type="text" class="form-control bg-Dark" id="name1" placeholder="*Escribe aquí un titulo para la entrada.">
				  </div>
				  <div class="form-group col-lg-6 col-sm-6 col-xs-12">
				    <input ng-model="form.name2" type="text" class="form-control bg-Dark" id="name2" placeholder="*Ingrese su segundo nombre.">
				  </div>
				  <div class="form-group col-lg-12 col-sm-12 col-xs-12">
				    <textarea rows="5" ng-model="form.description" type="text" class="form-control bg-Dark" id="description" placeholder="*Escribe aquí tu opinión"></textarea>
				  </div>
				<div class="col-md-12 col-sm-12">
					<div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 float-right">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-items margin-plus-10 padding-sm-10" ng-click="signUp()">
							<button class="wid-100 btn btn-primary fs-15">Vista previa</button>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 center-items margin-plus-10 padding-sm-10 " ng-click="goTo('/')">
							<button class="wid-100 btn btn-primary center-items color-4 bd-4 fs-15">Enviar</button>
						</div>
					</div>
				</div>
				<div ng-if="processing" class="animate-if-panel progress-circular-panel center-items bg-B opacity-05">
					<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
				</div>
				</form>
			<!-- end formulario registro -->
			</div>
		</article>
		<article class="col-md-6 col-sm-6 inline-b" >
			<div class="col-md-12 center-items" data-sr="enter left please, and hustle 100px over 1s no reset">
				<div class="col-lg-9 col-md-9 col-sm-10 col-xs-12">
					<div class="typehead-primary-container blue">
					  	<input type="text" ng-model="selected"   placeholder="Buscar por palabra clave" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control typehead-primary">
					</div>
				</div>
			</div>	
			<div class="col-md-12 col-xs-12" data-sr="enter right please, and hustle 200px over 1s no reset ">
				<div class="col-lg-4 center-items" data-sr="enter right please, and hustle 200px over 1s no reset ">
					<img class="img-responsive" src="img/space.png"></img>
				</div>
				<div class="col-lg-8 padding-b-30" slimscroll="{height: '600px'}">
					<div class="wid-100 fc-W">
						<p>Últimas entradas en el foro</p>
					</div>
					<div ng-repeat="item in posts" class="wid-100">
					    <div class="thumbnail inline-b wid-100">
					      	<div class="col-lg-3 col-md 4 col-sm-4 col-xs-12">
					      		<img class="img-responsive" src="img/avatar/[[avatar]]" alt="...">
					      	</div>
					      	<div class="caption col-lg-9 col-md 8 col-sm-8 col-xs-12">
					      		<div  class="page-header no-margin">
						        	<h5 class="no-margin">[[item.title]]</h5>
						        	<h6 class="fc-G no-margin">Publicado por: [[item.user]] | [[item.date]]</h6>
								</div>
								<div slimscroll="{height: '60px'}" class="scroll-body no-margin">
						        	<h6 class="no-margin">[[item.text]]</h6>
								</div>
						        <div class="margin-t-10 float-right">
						        	<a href="#">Ver más</a>
						        </div>
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
</div>
