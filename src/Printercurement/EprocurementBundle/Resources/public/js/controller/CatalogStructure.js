eprocurementApp.controller('CatalogStructure', ['$scope', 'CatalogStructure', function CatalogStructure($scope, CatalogStructure) {
    var catalogStructure = this;

    $scope.catalogsStructure = [];

    $scope.loadCatalogStructure = function(nodeId){
        return CatalogStructure.getCatalogsStructure(nodeId);
    }

}]);