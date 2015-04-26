indexApp.controller('EprocurementMain', function EprocurementMain($scope) {
    var eprocurement = this;

    $scope.firstName = "John";
    $scope.lastName = "Doe";

    //will be taken from factory
    $scope.highchartData = [
        ['ideas1', 1],
        ['ideas2', 8],
        ['ideas3', 5]
    ];

    //will be taken from factory
    $scope.cartData = [
        {name: 'bla bla1', catalogUrl: 'bl-aaa', articleUrl: 'bla-bla1', price: 13, currency: 'EUR'},
        {name: 'bla bla2', catalogUrl: 'bl-aaa', articleUrl: 'bla-bla2', price: 12.5, currency: 'EUR'}
    ];

    $scope.setRandomChartData = function(){
        $scope.highchartData = [
            ['bla', 3],
            ['bla2', 12]
        ];
    }

});