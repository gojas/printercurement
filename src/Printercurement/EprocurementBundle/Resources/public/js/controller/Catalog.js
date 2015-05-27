eprocurementApp.controller('Catalog', ['$scope', 'Catalog', 'Article', function Catalog($scope, Catalog, Article) {
    var catalog = this;

    $scope.catalog = {};
    $scope.articles = [];

    $scope.catalog = Catalog.getData().success(function(data) {
        $scope.catalog = data.catalog

        $scope.articles = Article.getData($scope.catalog).success(function(data){
            $scope.articles = data.articles;
        })
    });

}]);