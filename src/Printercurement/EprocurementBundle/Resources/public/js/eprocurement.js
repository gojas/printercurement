eprocurementApp.config(function($interpolateProvider, $routeProvider) {
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
            templateUrl : function(params){ return '/eprocurement/catalog/'+params.id+'/createUrlNameGenerator'},
            controller  : 'Catalog'
        })
        .when('/eprocurement/catalog/create', {
            templateUrl : '/eprocurement/catalog/create',
            controller  : 'Catalog'
        })
        .when('/eprocurement/catalogs_structure', {
            templateUrl : '/eprocurement/catalogs_structure',
            controller  : 'CatalogStructure'
        })
        .otherwise('')
});