var app = "";

app = angular.module('mideUniversidades', []);

app.controller('mideUniversidadesController', function($scope, $http) {

    $scope.universities = [];

    $scope.search = function() {
        var obj = {content: null};

        $http.get('Resources/base-mide.json').success(function(data) {
            obj.content = data;

            angular.forEach(obj.content, function(mide) {
                $scope.universities.push({
                    position: mide.position,
                    nameUniversity: mide.nameUniversity,
                    sector: mide.sector,
                    typeUniversity: mide.typeUniversity,
                    isAccredited: mide.isAccredited
                });
            });
        });
    };
    
});

