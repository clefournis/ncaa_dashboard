
var myApp = angular.module('myApp', []);
myApp.controller('myController', function($scope,$http){
	$http.get('/sites/all/modules/custom/ncaa_dashboard/scoreboard.json').success(function(response) {
		$scope.myData = response;

	});

});

// Custom ordering for the state field. (live, pre, final)
myApp.filter('customSorter', function() {

  function CustomOrder(item)
  {
    switch(item) {

    case 'live':
        return 1;

    case 'pre':
        return 2;

    case 'final':
        return 3;
    } 

  }

  return function(items, field) {
    var filtered = [];
    angular.forEach(items, function(item) {
      filtered.push(item);
    });
    filtered.sort(function (a, b) {


      return (CustomOrder(a.state) > CustomOrder(b.state) ? 1 : -1);
    });

    return filtered;

  };
});

