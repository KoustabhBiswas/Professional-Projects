var app = angular.module('dlf',['ngRoute','angular-md5']);

app.config(function($routeProvider,$locationProvider){
	
	$locationProvider.html5Mode(true);
	$routeProvider
		.when('/',{
			templateUrl: 'views/admin/Clients/client.html',
			 controller: 'ClientController as client'
		})
		.when('/case',{
			templateUrl: 'views/admin/Cases/case.html',
			controller: 'CaseController as case'
		})
		.when('/login',{
			templateUrl: 'views/login.html',
			controller: 'LoginController as login'
		})
		.when('/register',{
			templateUrl: 'views/register.html',
			controller: 'RegisterController as register'
		});
	
});
app.run(function($rootScope,$location){
	
	var url = $location.path();
	var subUrl = url.split("/");
	console.log(subUrl[1]);
	if(subUrl[1] == 'login' || subUrl[1] == 'register')
	{
		$rootScope.loginTemplateFlag = '1';
	}
	else
	{
		$rootScope.loginTemplateFlag = '0';
	}
});