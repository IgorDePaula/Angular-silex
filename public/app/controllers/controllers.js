angular.module('App')
        .controller('NavBarCtrl', function ($scope) {

        })
        .controller('HomeCtrl', function ($scope, ApiService) {
            $scope.users = ApiService.query();
        })
        .controller('NovoCtrl', function ($scope, ApiService,$location) {
            $scope.submitted = false;
            $scope.register = function (form) {
                $scope.submitted = true;
                if (form.$valid) {
                    ApiService.save($scope.user,function(data){
                        if(data.result == true){
                            $location.path('/');
                        }
                    });
                }
            }
        })
        ;