var app = angular.module('catalog', ['ngRoute']);
app.config(function($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol('{$');
    $interpolateProvider.endSymbol('$}');

    $routeProvider
        .when('/show', {
            templateUrl : '/catalogs/show',
            controller  : 'Catalogs'
        })
        .when('/:id/:url', {
            templateUrl : function(params){ return '/catalogs/'+params.id+'/'+params.url+''},
            controller  : 'Catalog'
        })
        .when('/create', {
            templateUrl : '/catalogs/create',
            controller  : 'Catalog'
        })
        .otherwise('/show')
});