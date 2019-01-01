app.controller('ClientController',function(ClientService,$scope,$location,$window,$rootScope){
	var self = this;
	self.clients = {};
	self.addclient = {};
	self.clientTest = {};
	self.states = {};
	self.cities = {};
	$rootScope.clientDeleteModal = 0;
	$rootScope.clientDataModal = 0;
	// self.clientData = {};
	
	self.client = function(){
		ClientService.getClients().then(function(data){
			 console.log(data);
			self.clients = data;
		});
	}
	self.addClient = function(){
		  
		ClientService.addClient(self.addclient).then(function(data){
			console.log(data);
			if(data == 0)
			{
				$scope.existingEmail = "Email id already exists";
			}
			else
			{
				$window.location.href = "/law/dlf/admin";

			}
			//$window.location.href = "/law/dlf";
		});
		
	}
	self.editClient = function(client_id){
		console.log(client_id);
		
	}
	self.delete = function(client_id){
		
		ClientService.deleteClient(client_id).then(function(data){
			
			$window.location.href = "/law/dlf/admin";
		});
		
	}
	self.deleteClient = function(client_id,client_name){
		 
		$scope.client_name = client_name;
		$scope.client_id = client_id;
	}
	self.close_modal = function(){
		 
		$scope.client_id = null;

	}
	
	self.viewClient = function(client_id){
		$rootScope.clientDataModal = 1;
		$rootScope.clientData = {};
		ClientService.get_client_by_id(client_id).then(function(resp){
			
			$rootScope.clientData = resp;
			console.log(resp);
		});
	}
	self.getStates = function(){
		ClientService.getStates().then(function(resp){
			console.log(resp);
			console.log("HELLO");
			self.states = resp;
		});
	}
	self.getCityByState = function(){
		
		ClientService
				.getCityByState($scope.client.addclient.state_id_fk)
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
	
})