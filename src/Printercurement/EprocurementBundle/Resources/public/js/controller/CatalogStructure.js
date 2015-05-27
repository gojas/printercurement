eprocurementApp.controller('CatalogStructure', ['$scope', 'CatalogStructure', function CatalogStructure($scope, CatalogStructure) {
    var catalogStructure = this;

    $scope.catalogsStructure = [];

    var nodeId = 0;

    $scope.catalogsStructure = CatalogStructure.getCatalogsStructure(nodeId).success(function(data) {
        $scope.catalogsStructure = data.catalogsStructure;
    });

}]);