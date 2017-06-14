angular.module("appfurtnet",['ngRoute'])
.config(function($routeProvider){

    $routeProvider.when('/',{
        templateUrl: 'js/directives/usuario-painel.html', 
    });

    $routeProvider.when('/psicologo/new',{
        templateUrl: 'js/directives/psicologo-painel.html', 
    });

    $routeProvider.when('/psicologo/perf',{
        templateUrl: 'js/directives/perfil-psicologo.html', 
    });
        
        

});

