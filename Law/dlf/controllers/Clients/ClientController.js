app.controller('ClientController',function(ClientService,$scope,$location,$window){
	var self = this;
	self.clients = {};
	self.addclient = {};
	self.clientTest = {};
	self.client = function(){
		ClientService.getClients().then(function(data){
			// console.log(data);
			self.clients = data;
		});
	}
	self.addClient = function(){
		 console.log(self.addclient);
		ClientService.addClient(self.addclient).then(function(data){
			console.log(data);
			  $window.location.href = "/Law/dlf";
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
			$window.location.href = "/Law/dlf";
		});
	}
	
})