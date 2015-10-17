angular.module('App',['ngRoute','ngResource'])
        .config(['$routeProvider',function($routeProvider){
  $routeProvider.
      when('/home', {
        templateUrl: 'app/partials/home.html',
        controller: 'HomeCtrl'
      }).
      when('/phones/:phoneId', {
        templateUrl: 'partials/phone-detail.html',
        controller: 'PhoneDetailCtrl'
      }).
      otherwise({
        redirectTo: '/home'
      });                
}]);