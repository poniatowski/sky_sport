Sky.controller('BillController', ['$scope', 'BillFactory', function ($scope, BillFactory)
{

    BillFactory.show().success(function(respond){
        $scope.bill = respond;
        // console.log ( respond );
    });

    var graphData = [
        {
            date: "2015-07-22",
            desired: 80,
            industry: 60,
            opens: 0.6000000000000001
        },
        {
            date: "2015-07-23",
            desired: 80,
            industry: 60,
            opens: 0.6000000000000001
        },
        {
            date: "2015-07-23",
            desired: 80,
            industry: 60,
            opens: 0.6000000000000001
        },
        {
            date: "2015-07-23",
            desired: 80,
            industry: 60,
            opens: 0.6000000000000001
        },
        {
            date: "2015-07-24",
            desired: 80,
            industry: 60,
            opens: 1.2
        },
        {
            date: "2015-07-24",
            desired: 80,
            industry: 60,
            opens: 1.2
        },
        {
            date: "2015-07-24",
            desired: 80,
            industry: 60,
            opens: 1.2
        },
        {
            date: "2015-07-24",
            desired: 80,
            industry: 60,
            opens: 1.2
        },
        {
            desired: 80,
            industry: 60,
            opens: 1.2
        },
        {
            date: "2015-07-24",
            desired: 80,
            industry: 60,
            opens: 1.2
        }
    ];

    for (var i = 0; i < graphData.length; i++) {
        // Calculate the % to add
        var percentage = (1*100)/12.3;
        // console.log(percentage + ' | '+ graphData[i].opens );
            // Add the %
        graphData[i].opens += percentage;
        console.log( graphData[i].opens.toFixed(2) );
    }

}]);
