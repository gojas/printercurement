indexApp.config(function($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol('{$');
    $interpolateProvider.endSymbol('$}');

    $routeProvider
        .when('/login', {
            templateUrl : '/login',
            controller  : 'Login'
        })
        .otherwise('/')
});