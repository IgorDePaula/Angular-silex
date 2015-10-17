angular.module('App')
        .service('ApiService',function($resource){
            return $resource('/api/users/:id');
        });