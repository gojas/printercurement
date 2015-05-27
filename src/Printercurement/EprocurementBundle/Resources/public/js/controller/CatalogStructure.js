eprocurementApp.controller('CatalogStructure', ['$scope', 'CatalogStructure', function CatalogStructure($scope, CatalogStructure) {
    var catalogStructure = this;

    $scope.catalogsStructure = [];

    var nodeId = 0;

    $('ul.nav-left-ml').toggle();
    $('label.nav-toggle span').click(function () {
        $(this).parent().parent().children('ul.nav-left-ml').toggle(300);
        var cs = $(this).attr("class");
        if(cs == 'nav-toggle-icon glyphicon glyphicon-chevron-right') {
            $(this).removeClass('glyphicon-chevron-right').addClass('glyphicon-chevron-down');
        }
        if(cs == 'nav-toggle-icon glyphicon glyphicon-chevron-down') {
            $(this).removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-right');
        }
    });

    $scope.catalogsStructure = CatalogStructure.getCatalogsStructure(nodeId).success(function(data) {
        $scope.catalogsStructure = data.catalogsStructure;
    });

}]);