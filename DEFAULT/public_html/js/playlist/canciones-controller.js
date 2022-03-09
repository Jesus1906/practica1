var app = angular.module('app', []);
app.controller('playlistCtrl', function ($scope, $http, $window) {

    $scope.get_all_info = function () {
        $http({
            method: "GET",
            url: base_url + "main/get_all_info",
        }).then(function (response) {
            $scope.artistas = response.data.artistas;
            console.log($scope.artistas);
        });
    };

    
    $scope.get_all_info();
});