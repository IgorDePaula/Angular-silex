angular.module('App',['ngRoute','ngResource','ngMessages'])
        .config(['$routeProvider',function($routeProvider){
  $routeProvider.
      when('/home', {
        templateUrl: 'app/partials/home.html',
        controller: 'HomeCtrl'
      }).
      when('/novo', {
        templateUrl: 'app/partials/novo.html',
        controller: 'NovoCtrl'
      }).
      otherwise({
        redirectTo: '/home'
      });                
}]);