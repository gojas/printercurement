eprocurementApp.service('Cart', function Cart($http) {
    var cart = this;

    return {
        getData : function() {
            return [
                {name: 'bla bla1', catalogUrl: 'bl-aaa', articleUrl: 'bla-bla1', price: 13, currency: 'EUR'},
                {name: 'bla bla2', catalogUrl: 'bl-aaa', articleUrl: 'bla-bla2', price: 12.5, currency: 'EUR'}
            ]
        }
    };

});