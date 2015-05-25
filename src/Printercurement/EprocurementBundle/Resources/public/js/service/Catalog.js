eprocurementApp.service('Catalog', function Catalog($http) {
    var catalogService = this;

    return {
        getData : function() {
            return $http.get('/eprocurement/catalog/get/1/createUrlName');
        }
    };
});