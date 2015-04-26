eprocurementApp.directive('cartWidget', function ($compile){

    var createCartTemplate = function(items){

        template = '<div class="cart-widget-items">';
        angular.forEach(items, function(item) {
            template +=
            '<div>' +
                '<a href="/eprocurement/'+item.catalogUrl+'/'+item.articleUrl+'">'+item.name+'</a>' +
            '</div>';
        });

        template += '</div>';

        return template;
    };

    return {
        restrict: 'A',
        scope: {
            items: '='
        },
        controller: function ($scope, $element, $attrs) {
            //
        },
        template: 'Cart - hover over me (da prostis)',
        link: function (scope, element) {

            cartItems = scope.items;

            element.bind('mouseenter', function() {
                element.html(createCartTemplate(cartItems)).show();

                /**
                 * do not move out of this listener
                 *
                 * let AngularJs knows that there are some changes on the scope
                */
                scope.$apply();
            });

            element.bind('mouseleave', function() {
                element.html('Cart - hover over me (da prostis)').show();

                /**
                 * do not move out of this listener
                 *
                 * let AngularJs knows that there are some changes on the scope
                 */
                scope.$apply();
            });

            $compile(element.contents())(scope);
        }
    }
});