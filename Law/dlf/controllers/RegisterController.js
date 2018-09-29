app.controller('RegisterController',function(RegisterService,$scope,$window,$location,md5){
	var self = this;
	self.states = {};
	self.cities = {};
	self.user = {};
	self.getStates = function(){
		RegisterService.getStates().then(function(resp){
			
			self.states = resp;
		});
	}
	self.getCityByState = function(){
		RegisterService
				.getCityByState($scope.register.user.state_id_fk)
					.then(
						function(resp)
						{
							console.log(resp);
							self.cities = resp;
						},
						function(error)
						{

						}
					);
	}

	self.addUser = function(){
		console.log(self.user);
		RegisterService.addClient(self.user).then(function(data){
			console.log(data);
			$window.location.href = "/law/dlf";
		});
		
	}
});