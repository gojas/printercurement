indexApp.service('Highchart', function Highchart($http) {
    var Highchart = this;

    return {
        data: [
            ['ideas1', 1],
            ['ideas2', 8],
            ['ideas3', 5]
        ],
        getData : function() {
           return this.data;
        },

        setData: function(data){
            this.data = data;
        }
    };

});