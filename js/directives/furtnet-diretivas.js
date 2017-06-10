angular.module("diretivasFurtnet",[]).directive('usuarioPainel',function(){

  var ddo = {};

        ddo.restrict = "AE";
        ddo.transclude = true;

        ddo.templateUrl = 'js/directives/usuario-painel.html';           
        
        return ddo;
});