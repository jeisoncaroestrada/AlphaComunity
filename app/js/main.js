var Alpha = angular.module("Alpha",["ui.router","ui.bootstrap","angularUtils.directives.dirPagination","ui.slimscroll","fox.scrollReveal","ngRoute","ngMap","ngMaterial","chart.js","smoothScroll","ngResource"], function($interpolateProvider) {
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');

})

.config(function($routeProvider,$locationProvider,$stateProvider, $urlRouterProvider){

	$urlRouterProvider.otherwise('/');

	$stateProvider
        
        // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/',
            controller:"HomeCtrl",
			templateUrl: "views/home.html"
        })
        .state('login', {
            url: '/login',
           	controller:"LoginCtrl",
			templateUrl: "views/auth/login.blade.php",
        })
        .state('signUp', {
            url: '/signup',
           	controller:"SignupCtrl",
			templateUrl: "views/auth/signup.blade.php"
        })
        .state('remember', {
            url: '/remember',
           	controller:"LoginCtrl",
			templateUrl: "views/auth/remember.blade.php",
        })
        .state('reset', {
            url: '/reset_password/:n/{c:.*}',
           	controller:"ChangePasswordCtrl",
			templateUrl: "views/auth/reset_password.blade.php"
        })
        .state('start', {
            url: '/start',
           	controller:"StartCtrl",
			templateUrl: "views/start.blade.php"
        })
        .state('start.platform', {
            url: '/platform',
           	controller:"PlatformCtrl",
			templateUrl: "views/partials/platform.blade.php"
        })
        .state('start.space', {
            url: '/space',
           	controller:"SpaceCtrl",
			templateUrl: "views/partials/space.blade.php"
        })
        .state('start.decisions', {
            url: '/decisions',
           	controller:"DecisionsCtrl",
			templateUrl: "views/partials/decisions.blade.php"
        })
        .state('start.history', {
            url: '/history',
           	controller:"HistoryCtrl",
			templateUrl: "views/partials/history.blade.php"
        })
        .state('start.foundations', {
            url: '/foundations',
           	controller:"FoundationsCtrl",
			templateUrl: "views/partials/foundations.blade.php"
        })
        .state('start.values', {
            url: '/values',
           	controller:"ValuesCtrl",
			templateUrl: "views/partials/values.blade.php"
        })
        .state('start.initiatives', {
            url: '/initiatives',
           	controller:"InitiativesCtrl",
			templateUrl: "views/partials/initiatives.blade.php"
        })
        .state('start.collective', {
            url: '/collective',
           	controller:"CollectiveCtrl",
			templateUrl: "views/partials/collective.blade.php"
        })
        .state('start.tools', {
            url: '/tools',
           	controller:"ToolsCtrl",
			templateUrl: "views/partials/tools.blade.php"
        })
        .state('start.documents', {
            url: '/documents',
           	controller:"DocumentsCtrl",
			templateUrl: "views/partials/documents.blade.php"
        })
        .state('verify', {
            url: '/verify_account/:n/{c:.*}',
           	controller:"VerifyCtrl",
			templateUrl: "views/auth/verify.blade.php"
        })
        .state('who_we_are', {
            url: '/who_we_are',
           	controller:"WhoCtrl",
			templateUrl: "views/common/who_we_are.blade.php"
        })
        
       
	/*$routeProvider
		.when("/",{
			controller:"HomeCtrl",
			templateUrl: "views/home.blade.php"
		})
		.when("/login",{
			controller:"LoginCtrl",
			templateUrl: "views/auth/login.blade.php",
		})
		.when("/remember",{
			controller:"LoginCtrl",
			templateUrl: "views/auth/remember.blade.php",
		})
		.when("/reset_password/:n/:c*",{
			controller:"ChangePasswordCtrl",
			templateUrl: "views/auth/reset_password.blade.php"
		})
		.when("/start",{
			controller:"StartCtrl",
			templateUrl: "views/start.blade.php"
		})
		.when("/signup",{
			controller:"SignupCtrl",
			templateUrl: "views/auth/signup.blade.php"
		})
		.when("/verify_account/:n/:c*",{
			controller:"VerifyCtrl",
			templateUrl: "views/auth/verify.blade.php"
		})
		.otherwise({
	        redirectTo: '/'
	    })*/

	//$locationProvider.html5Mode(true);
	//$locationProvider.hashPrefix('!');
	
})



.config(function(paginationTemplateProvider) {
    paginationTemplateProvider.setPath('views/common/dirPagination.tpl.html');
})

//factory para comunicar el Backend
.factory('botiFactory', function ($resource) {
	return $resource('http://localhost:3000/api/v1/users/:id');
})


.run(function($http) {
  $http.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name=csrf-token]').attr('content')
})


.run(function($rootScope,$location,$timeout,$window) {

	 $rootScope.goTo = function(url){

		$location.path(url);
		
	}

	//oculta o muestra el boton de volver a arriba segun el scroll
	$(window).scroll(function(){
        if ($(this).scrollTop() > ($('#header').offset().top + $('#header').height() - 1 )) {
            $('#backTop').fadeIn();
            $('.navbar-default').addClass( "bg-1 active" );
        } else {
            $('#backTop').fadeOut();
            $('.navbar-default').removeClass( "bg-1 active" );
        }
    });



	/*$('.pager a').click(function () {

		$('html, body').animate({ scrollTop: $('.pager').offset().top }, 0);

	})*/

	$( ".page-num" ).click(function() {
	});



	$rootScope.$on('$viewContentLoaded', function() {
		$rootScope.menusListSelected = $rootScope.menusList[$rootScope.activeMenu].title;
	    $rootScope.subMenusListSelected = $rootScope.activeSubMenu < 4 ? $rootScope.subMenusList[$rootScope.activeMenu][$rootScope.activeSubMenu].title : '';
	});

    $rootScope.$on('$stateChangeSuccess', function(){

    	$rootScope.windowHeight = $window.innerHeight;
    	$rootScope.windowWidth = $window.innerWidth;
    	$timeout(function(){    		
    		$rootScope.viewContentLoaded = true;
	    }, 1000)
    	/*$timeout(function(){    		
	        $('.modal-backdrop ').hide()
		 	$('html, body').animate({ scrollTop: $('#view').offset().top }, 0);
	    }, 10)*/
	});


    //listado de los submenus de cada vista multiple
	$rootScope.subMenusList = [

		[

			{title: "Decisiones en línea",url: "/start/decisions"},{title: "Canal en vivo"},
			{title: "Espacio de Expresión",url: "/start/space"},{title: "Histórico y Estadisticas del Movimiento",url: "/start/history"}
		],
		[

			{title: "Valores",url: "/start/values"},{title: "Plan estratéfico con enfoque de innovación social"},
			{title: "Colectivo de trabajo",url: "/start/collective"},{title: "Iniciativas del Movimiento",url: "/start/initiatives"}
		],
		[

			{title: "Valores",url: "/start/values"},{title: "Plan estratéfico con enfoque de innovación social"},
			{title: "Colectivo de trabajo",url: "/start/collective"},{title: "Iniciativas del Movimiento",url: "/start/initiatives"}
		],
		[

			{title: "Proyectos, Documentación,Material de consulta",url: "/start/documents"},{title: "Blog y Noticias"},
			{title: "Seguimiento",url: "/start/tools"},{title: "Rendición de cuentas",url: "/start/tools"}
		],
	]

	//listado de los menus de la barra superior
	$rootScope.menusList = [


			{title: "Plataforma Innovadora"},
			{title: "Fundamentos Innovadores"},
			{title: "Crea tu iniciativa"},
			{title: "Herramientas para decidir"},
			{title: "Blog y Noticias"}
	]


})


