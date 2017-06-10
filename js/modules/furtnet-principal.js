angular.module("appfurtnet",['diretivasFurtnet','ngRoute'])
.config(function($routeProvider){

    $routeProvider.when('/',{
        templateUrl: 'js/directives/usuario-painel.html', 
    });

    $routeProvider.when('/psicologo/new',{
        templateUrl: 'js/directives/psicologo-painel.html', 
    });


});

