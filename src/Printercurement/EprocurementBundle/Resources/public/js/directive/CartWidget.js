eprocurementApp.directive('cartWidget', function (){

    return {
        restrict: 'A',
        scope: true,
        templateUrl: '/eprocurement/cart/widget',
        link: function (scope, element, attrs) {
            scope.itemsLoaded = false;

            element.on('mouseenter', function(){
                //take data from controller here...
                scope.items = scope.$apply(attrs.items);

                scope.itemsLoaded = true;

                scope.showItems = function(){
                    if(scope.items.length > 0 && scope.itemsLoaded){
                        return true;
                    }
                }

                scope.showEmpty = function(){
                    if(scope.items.length == 0 && scope.itemsLoaded){
                        return true;
                    }
                }

                scope.$apply();
            })

            element.on('mouseleave', function(){
                scope.itemsLoaded = false;

                scope.$apply();
            })
        }
    }

});