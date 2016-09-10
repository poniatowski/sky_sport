var Sky = angular.module('Sky', [
    'ngRoute'
]);

// Angular Routes
Sky.config(function configure($routeProvider, $locationProvider) {
    $routeProvider
        .when('/', { controller: 'BillController', templateUrl: './app/view/bill_show.html', title: 'Bill' })
        .when('index', { controller: 'BillController', templateUrl: './app/view/bill_show.html', title: 'Bill' })
        // Otherwise
        .otherwise({ controller: 'BillController', templateUrl: './app/view/bill_show.html', title: 'Bill' });

    // use the HTML5 History API
    $locationProvider.html5Mode(true);
});