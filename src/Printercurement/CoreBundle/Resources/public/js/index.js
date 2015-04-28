indexApp.config(function($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol('{$');
    $interpolateProvider.endSymbol('$}');

    $routeProvider
        .when('/esourcing', {
            templateUrl : '/esourcing',
            controller  : 'EsourcingMain'
        })
        .when('/login', {
            templateUrl : '/login',
            controller  : 'Login'
        })
        .otherwise('/')
});