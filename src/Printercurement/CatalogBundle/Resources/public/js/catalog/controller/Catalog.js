app.controller('Catalog', function Catalog($scope, $modal) {
    var catalog = this;

    $scope.items = ['item1', 'item2', 'item3'];

    $scope.open = function (size) {
        var modalInstance = $modal.open({
            template: 'YOOOOOOO',
            controller: 'Catalog',
            size: 12,
            resolve: {
                items: function () {
                    return $scope.items;
                }
            }
        });
    }
});