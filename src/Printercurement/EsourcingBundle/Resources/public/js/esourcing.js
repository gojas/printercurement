esourcingApp.config(function($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol('{$');
    $interpolateProvider.endSymbol('$}');

    $routeProvider
        .when('/esourcing', {
            templateUrl : '/esourcing',
            controller  : 'EsourcingMain'
        })
        .otherwise('')
});