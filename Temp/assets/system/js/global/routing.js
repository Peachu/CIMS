app.config(['$routeProvider', function($routeProvider)
{
    var templatePath = "temp/view/";
    var templateFile = "/overview.php";
    
    var routingArray = [
        {
            route: '/Start',
            templateUrl: templatePath + "start" + templateFile,
            controller: 'start'
        },
        {
            route: '/Register',
            templateUrl: templatePath + "register" + templateFile,
            controller: 'register'
        },
    ]

    for (var i = 0; i < routingArray.length; i++)
        $routeProvider.when(routingArray[i].route, {
            templateUrl: routingArray[i].templateUrl,
            controller: routingArray[i].controller
        });

    $routeProvider.otherwise({
        redirectTo: '/Start'
    });
}]);
