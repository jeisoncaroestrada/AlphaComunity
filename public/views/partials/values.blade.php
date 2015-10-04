<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<div ng-show="initiatives == ''" class="full-height wid-100 pos-absolute center-items bg-W">
	<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
	<div ng-if="isPoll">
	  <div data-modal-initial-poll></div>
	</div>
</div>
<div ng-if="initiatives!= ''">
<section class="start-container bg-green">
	<article class="col-md-7" data-sr="enter left please, and hustle 100px over 1s no reset">
		<div class="page-header">
		  <h1 class="header-title-custom shadow-green">Valores</h1>
		</div>
		<div class="col-md-12 fs-15 fc-W">
			<p><strong class="fc-1">Transparencia</strong><br>
				Yodecido tiene como atributo fundamental, la transparencia en la divulgación de toda la información que se visualice en la red, sin exclusión
				de cualquier opinión por sesgada que sea.<br><br>
				<strong class="fc-1">Equidad</strong><br>
				Este es un movimiento pluricultural, sin exclusión, donde todos tienen derecho a la opinión y expresión de una forma responsable y respetuosa.<br><br>
				<strong class="fc-1">Participación</strong><br>
				El movimiento yo Decido entiende por participación el derecho de todo afiliado a intervenir, directamente o a través de algún delegado, en la
				adopción de las decisiones fundamentales del partido o movimiento, en el máximo órgano de dirección y en las demás instancias de gobierno,
				administración y control, así como los derechos de elegir y ser elegido en todo proceso de designación o escogencia de sus directivos y de sus
				candidatos a cargos y corporaciones de elección popular.<br><br>
				<strong class="fc-1">Pluralismo</strong><br>
				El movimiento Yodecido garantizará la expresión de las tendencias existentes en su interior, en particular de las minorías, sin perjuicio de la
				aplicación del principio de mayoría, razón por la que los estatutos incluirán normas sobre quórum y mayorías especiales para la toma de decisiones
				fundamentales en materia de organización, funcionamiento y de participación de sus afiliados en la vida del partido o movimiento.<br><br>
				<strong class="fc-1">Igualdad de género</strong><br>
				En virtud del principio de equidad e igualdad de género, el movimiento político Yodecido, le garantizará a los hombres y mujeres independiente
				de su opción sexual el derecho de igualdad y oportunidades para participar en las actividades políticas, dirigir las organizaciones partidistas,
				acceder a los debates electorales y obtener representación política.<br><br>
			</p>
		</div>
	</article>
	<article class="col-md-5 padding-t-b-50-auto" >
		<div class="col-md-12" data-sr="enter left please, and hustle 100px over 1s no reset">
			<div class="typehead-primary-container green">
			  	<input type="text" ng-model="selected" typeahead="state for state in states | filter:$viewValue | limitTo:8" class="form-control typehead-primary">
			</div>
			<div class="col-md-12 col-xs-12 center-items" data-sr="enter right please, and hustle 200px over 1s no reset ">
				<div class="wid-70">
					<img class="img-responsive" src="img/values.png"></img>
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
</div>
