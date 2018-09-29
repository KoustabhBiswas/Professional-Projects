app.controller('ClientController',function(ClientService,$scope,$location,$window){
	var self = this;
	self.clients = {};
	self.addclient = {};
	self.clientTest = {};
	self.states = {};
	self.cities = {};
	
	self.client = function(){
		ClientService.getClients().then(function(data){
			// console.log(data);
			self.clients = data;
		});
	}
	self.addClient = function(){
		console.log(self.addclient);
		 console.log(self.addclient.address_3);
		 
		 
		  
		ClientService.addClient(self.addclient).then(function(data){
			console.log(data);
			$window.location.href = "/law/dlf";
		});
		
	}
	self.editClient = function(client_id){
		console.log(client_id);
		
	}
	self.deleteClientTest = function(){
		self.clientTest = '1';
		return self.clientTest;
	}
	self.deleteClient = function(client_id){
		ClientService.deleteClient(client_id).then(function(data){
			$window.location.href = "/law/dlf";
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