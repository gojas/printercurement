indexApp.config(function($interpolateProvider, $routeProvider) {
    $interpolateProvider.startSymbol('{$');
    $interpolateProvider.endSymbol('$}');

    $routeProvider
        .when('/home', {
            templateUrl : '/home',
            controller  : 'Home'
        })
        .when('/login', {
            templateUrl : '/login',
            controller  : 'Login'
        })
        .when('/admin', {
            templateUrl : '/admin',
            controller  : 'Admin'
        })
        .when('/admin/user', {
            templateUrl : '/admin/user',
            controller  : 'User'
        })
        .when('/admin/user/new', {
            templateUrl : '/admin/user/new',
            controller  : 'User'
        })
        .when('/admin/user/:id/show', {
            templateUrl : function(params){ return '/admin/user/'+params.id+'/show'},
            controller  : 'User'
        })
        .when('/admin/user/:id/edit', {
            templateUrl : function(params){ return '/admin/user/'+params.id+'/edit'},
            controller  : 'User'
        })
        .otherwise('/')
});