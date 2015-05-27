eprocurementApp.service('Article', function Article($http, $routeParams) {
    var articleService = this;

    return {
        getData : function(catalog) {
            return $http.get('/eprocurement/articles/get/'+catalog.catalogNodeId);
        }
    };
});