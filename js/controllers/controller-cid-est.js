angular.module('appfurtnet').controller("cids-est", function ($scope, $http) {

    $scope.estados = [];
    $scope.cidades = [];

    $scope.json_lugares = $http.get("https://gist.githubusercontent.com/letanure/3012978/raw/36fc21d9e2fc45c078e0e0e07cce3c81965db8f9/estados-cidades.json")
        .then(function (response) {
            //percorrendo array JSON e pegando Siglas de Estados
            for (var i = 0; i < response.data.estados.length; i++) {
                $scope.estados.push(response.data.estados[i].sigla)
            }
            //Percorrendo array JSON e pegando Cidades
            for (var o = 0; o < response.data.estados.length; o++) {
                                //percorrendo JSON de estados e pegando todas as Cidades
                                for(var u=0; u < response.data.estados[o].cidades.length; u++){
                                    $scope.cidades.push(response.data.estados[o].cidades[u]);
                                }
                     

            }



        });


});