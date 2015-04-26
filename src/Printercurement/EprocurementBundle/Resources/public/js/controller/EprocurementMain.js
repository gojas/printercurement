eprocurementApp.controller('EprocurementMain', ['$scope', 'Cart', 'Highchart', function EprocurementMain($scope, Cart, Highchart) {
    var eprocurement = this;

    $scope.firstName = "John";
    $scope.lastName = "Doe";

    //keep data persistent over routes, use service!
    $scope.highchartData = Highchart.getData();

    //will be taken from factory
    $scope.cartData = Cart.getData();

    $scope.setRandomChartData = function(){
        data = [
            ['bla', 3],
            ['bla2', 12]
        ];

        Highchart.setData(data);

        $scope.highchartData = Highchart.getData();
    }

}]);