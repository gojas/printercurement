indexApp.config(function($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol('{$');
    $interpolateProvider.endSymbol('$}');

    $routeProvider
        .when('/login', {
            templateUrl : '/login',
            controller  : 'Login'
        })
        .when('/user', {
            templateUrl : '/user',
            controller  : 'User'
        })
        .when('/user/new', {
            templateUrl : '/user/new',
            controller  : 'User'
        })
        .when('/user/{id}/show', {
            templateUrl : '/user/{id}/show',
            controller  : 'User'
        })
        .when('/admin', {
            templateUrl : '/admin',
            controller  : 'Admin'
        })
        .when('/home', {
            templateUrl : '/home',
            controller  : 'Home'
        })
        .otherwise('/')
});