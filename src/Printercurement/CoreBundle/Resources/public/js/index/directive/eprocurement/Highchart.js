indexApp.directive('highchart', function (){
    return {
        restrict: 'A',
        scope: {
            items: '='
        },
        controller: function ($scope, $element, $attrs) {
            //
        },
        template: '<div id="highchart-container" style="margin: 0 auto">not working</div>',
        link: function (scope, element, attrs) {

            /**
             * when scope.items are loaded, changed, only then load data
             */
            scope.$watch("items",function(newValue) {
                var chart = new Highcharts.Chart({
                    chart: {
                        renderTo: 'highchart-container',
                        plotBackgroundColor: null,
                        plotBorderWidth: null,
                        plotShadow: false
                    },
                    title: {
                        text: 'Browser market shares at a specific website, 2010'
                    },
                    plotOptions: {
                        pie: {
                            allowPointSelect: true,
                            cursor: 'pointer',
                            dataLabels: {
                                enabled: true,
                                color: '#000000',
                                connectorColor: '#000000',
                                formatter: function () {
                                    return '<b>' + this.point.name + '</b>: ' + this.percentage + ' %';
                                }
                            }
                        }
                    },
                    series: [{
                        type: 'pie',
                        name: 'Browser share',
                        data: newValue
                    }]
                });
            });
        }
    }
});