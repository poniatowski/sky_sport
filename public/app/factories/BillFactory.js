Sky.factory('BillFactory', function( $http ) {
    return {
        index: function index() {
        },
        create: function create() {
        },
        store: function store() {
        },
        show: function show() {
            return $http.get('api/bill/show');
        },
        destroy: function destroy() {
        }
    }
});