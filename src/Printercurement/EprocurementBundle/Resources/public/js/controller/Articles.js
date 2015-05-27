eprocurementApp.controller('Articles', ['$scope', 'Article', function Articles($scope, Article) {
    var articles = this;

    $scope.articles = [];

    $scope.articles = Article.getData().success(function(data) {
        $scope.articles = data.articles
    });

}]);