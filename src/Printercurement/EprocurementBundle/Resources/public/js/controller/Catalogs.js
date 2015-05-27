eprocurementApp.controller('Catalogs', ['$scope', 'Catalog', function Catalogs($scope, Catalog) {
    var catalogs = this;

    $scope.catalogs = [];

    $scope.catalogs = Catalog.getCatalogs().success(function(data) {
        $scope.catalogs = data.catalogs
    });

}]);