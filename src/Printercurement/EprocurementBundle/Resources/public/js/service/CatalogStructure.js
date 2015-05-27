eprocurementApp.service('CatalogStructure', function CatalogStructure($http, $routeParams) {
    var catalogStructureService = this;

    return {
        getCatalogsStructure: function(nodeId){

            if(nodeId == null){
                nodeId = 0;
            }

            return $http.get('/eprocurement/catalogs_structure/get/'+nodeId);
        }
    };
});