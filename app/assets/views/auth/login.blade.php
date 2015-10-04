<div ng-show="check" class="full-height wid-100 pos-absolute center-items bg-W">
	<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
</div>
<!-- Modal -->
<div class="hidden col-md-6 center-items margin-t-10" ng-click='showModalLogin()' data-backdrop="static" data-toggle="modal" data-target="#modalLogin">
	<button id="showModalLogin" class="btn btn-primary btn-md text-center color-1 bd-1" >Iniciar sesión</button>
</div>
<section class="video-panel">
	<header>
		<div class="video-overlay"></div>
		<video autoplay="" loop="" muted="">
			<source src="img/footage.mp4" type="video/mp4">
			<source src="img/footage.webm" type="video/webm">
			<source src="img/footage.ogv" type="video/ogv">
		</video>
	</header>
	
</section>

<div ng-if="modalLoginShow">
  <div data-modal-login></div>
</div>