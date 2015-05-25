eprocurementApp.controller('EprocurementMain', ['$scope', 'Cart', 'Highchart', 'CatalogService', function EprocurementMain($scope, Cart, Highchart, CatalogService) {
    var eprocurement = this;

    $scope.firstName = "John";
    $scope.lastName = "Doe";

    //keep data persistent over routes, use service!
    $scope.highchartData = Highchart.getData();

    $scope.loadCartData = function(){
        return Cart.getData();
    }

    $scope.setRandomChartData = function(){
        data = [
            ['bla', 3],
            ['bla2', 12]
        ];

        Highchart.setData(data);

        $scope.highchartData = Highchart.getData();
    }

}]);