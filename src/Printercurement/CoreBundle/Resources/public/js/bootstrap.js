var indexApp        = angular.module('index',        ['ngRoute', 'ui.bootstrap']);
var eprocurementApp = angular.module('eprocurement', ['ngRoute', 'ui.bootstrap']);
var esourcingApp    = angular.module('esourcing',    ['ngRoute']);


angular.element(document).ready(function() {
    var appDiv = document.getElementById('wrapper');

    angular.bootstrap(appDiv,
        [
            'index',
            'eprocurement',
            'esourcing'
        ]
    );
});