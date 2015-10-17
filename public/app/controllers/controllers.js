angular.module('App')
        .controller('NavBarCtrl', function ($scope) {

        })
        .controller('HomeCtrl', function ($scope, ApiService) {
            $scope.users = ApiService.query();
        });