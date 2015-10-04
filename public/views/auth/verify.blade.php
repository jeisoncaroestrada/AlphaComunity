<div data-sr-container='{ "reset":true, "vFactor": 0.10, "mobile": true }' >
<div ng-show="processing" class="full-height wid-100 pos-absolute center-items bg-W">
	<md-progress-circular  md-mode="indeterminate"></md-progress-circular>
	<div ng-if="isPoll">
	  <div data-modal-initial-poll></div>
	</div>
</div>
<nav class="nav-bar-top" data-sr="enter top please, and hustle 200px over 1s no reset">
	<div class="col-md-6 col-sm-6 col-xs-12 center-items pointer">
		<div class="logo col-md-6 col-sm-10 col-xs-10">
			<img ng-click="goTo('/da')" class="img-responsive wid-100" src="img/logoYoDecidoFondoAzul.png">
		</div>
	</div>
</nav>
<section ng-if="!processing">
	<div class="container-fluid bg-1 padding-top-50 over-flow-hidden">
	   <div class="row center-items " data-sr="enter bottom please, and hustle 100px over 1s no reset">
	    <img class="img-responsive" src="[['img/'+ img +'.png']]">
	  </div>
	</div>
	<div class="padding-md-20 padding-sm-15 inline-b wid-100 no-padding-bottom no-padding-top">
		<div class="row" data-sr="enter right please, and hustle 200px over 1s no reset">
			<h1 class="col-lg-12 text-center" ng-bind-html="sanitize(success)">
			</h1>
		</div>
	</div>
</section>
</div>