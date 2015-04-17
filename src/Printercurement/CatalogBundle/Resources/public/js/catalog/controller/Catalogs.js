app.controller('Catalogs', function Catalogs($scope, $http) {
    var catalogs = this;

    $scope.catalogs = [];

    $http.get('/catalogs/get_catalogs').
    success(function(data, status, headers, config) {
        $scope.catalogs = data.catalogs;
    }).
    error(function(data, status, headers, config) {
        // log error
    });
});