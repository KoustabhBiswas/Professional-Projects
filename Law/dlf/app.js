var app = angular.module('dlf',['ngRoute']);

app.config(function($routeProvider,$locationProvider){
	
	$locationProvider.html5Mode(true);
	$routeProvider
		.when('/',{
			templateUrl: 'views/Clients/client.html',
			 controller: 'ClientController as client'
		})
		.when('/case',{
			templateUrl: 'views/Cases/case.html',
			controller: 'CaseController as case'
		});
	
})