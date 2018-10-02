var app = angular.module('dlf',['ngRoute','angular-md5','ngCookies']);

app.config(function($routeProvider,$locationProvider,$httpProvider){
	
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
	//var subUrl = url.split('/');
	$rootScope.currentUser = $cookieStore.get('currentUser');
	console.log($cookieStore.get('currentUser'));
	var permittedUrl = ['/login','/register'];
	if(!$rootScope.currentUser)
	{
		var i = $.inArray(url,permittedUrl);
		if(i == -1)
		{
			$location.path('/login');
			
		}
		else
		{
			console.log("HEY");
			 $location.path();

		}
	}
	// if($rootScope.currentUser)
	// {
	// 	$rootScope.loginTemplateFlag = '0';
	// 	$location.path();
	// }
	// else
	// {
	// 	//$location.path();
	// 	if(subUrl[1] == 'register')
	// 	{
	// 		$location.path('/register');
	// 	}
	// 	else
	// 	{
	// 		$location.path('/login');

	// 	}
	// }
});