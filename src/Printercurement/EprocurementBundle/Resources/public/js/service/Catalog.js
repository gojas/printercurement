eprocurementApp.service('Catalog', function Catalog($http, $routeParams) {
    var catalogService = this;

    return {
        getData : function() {
            return $http.get('/eprocurement/catalog/get/'+$routeParams.id+'/createUrlName');
        }
    };
});