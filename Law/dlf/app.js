var app = angular.module('dlf',['ngRoute','angular-md5','ngCookies']);

app.config(function($routeProvider,$locationProvider){
	
	$locationProvider.html5Mode(true);
	$routeProvider
		.when('/admin',{
			templateUrl: 'views/admin/Clients/client.html',
			 controller: 'ClientController as client'
		})
		.when('/admin/case',{
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
		})
		.when('/logout',{
			templateUrl: 'views/logout.html',
			controller: 'LogoutController as logout'
			
		});
	
});
app.run(function($rootScope,$location,$cookieStore){
	
	var url = $location.path();
	var subUrl = url.split('/');
	$rootScope.currentUser = $cookieStore.get('currentUser');
	console.log($cookieStore.get('currentUser'));
	
	if($rootScope.currentUser)
	{
		$rootScope.loginTemplateFlag = '0';
		$location.path('/admin');
	}
	else
	{
		if(subUrl[1] == 'login')
		{
			$location.path('/login');
		}
		else
		{
			$location.path('/register');

		}
	}
});