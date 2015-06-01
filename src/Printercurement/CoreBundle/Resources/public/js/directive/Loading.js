indexApp.directive('loading',   ['$http' ,function ($http)
{
    return {
        restrict: 'A',
        link: function (scope, elm, attrs)
        {
            scope.mainContainer = $('#main-container');

            /* catch only on first route load */
            scope.isLoaded = false;

            scope.isLoading = function () {
                return $http.pendingRequests.length > 0;
            };

            scope.$watch(scope.isLoading, function (v)
            {
                if(!scope.isLoaded){
                    if(v){
                        elm.show();
                    }else{
                        elm.hide('fold');
                        scope.isLoaded = true;
                    }
                }
            });
        }
    };

}]);