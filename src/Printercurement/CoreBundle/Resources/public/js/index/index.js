var indexApp = angular.module('index', ['ngRoute', 'ui.bootstrap']);

indexApp.config(function($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol('{$');
    $interpolateProvider.endSymbol('$}');

    $routeProvider
        .when('/eprocurement', {
            templateUrl : '/eprocurement',
            controller  : 'EprocurementMain'
        })
        .when('/eprocurement/catalogs', {
            templateUrl : '/eprocurement/catalogs',
            controller  : 'Catalogs'
        })
        .when('/eprocurement/catalog/:id/:urlName', {
            templateUrl : function(params){ return '/eprocurement/catalog/'+params.id+'/'+params.urlName},
            controller  : 'Catalog'
        })
        .when('/eprocurement/catalog/create', {
            templateUrl : '/eprocurement/catalog/create',
            controller  : 'Catalog'
        })
        .when('/esourcing', {
            templateUrl : '/esourcing',
            controller  : 'EsourcingMain'
        })
        .otherwise('/')
});