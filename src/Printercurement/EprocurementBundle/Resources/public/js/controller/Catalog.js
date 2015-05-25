eprocurementApp.controller('Catalog', ['$scope', 'Catalog', function Catalog($scope, Catalog) {
    var catalog = this;

    $scope.catalog = {};

    $scope.catalog = Catalog.getData().success(function(data) {
        $scope.catalog = data.catalog
    });

}]);