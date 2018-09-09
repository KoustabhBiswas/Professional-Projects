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
		 var first_name = $scope.client.addclient.first_name;
		 var last_name = $scope.client.addclient.last_name;
		 var mobile_no = $scope.client.addclient.mobile_no;
		 console.log(first_name);
		 /* First name validation starts  */
		 if(first_name == null)
		 {
			$scope.first_name_err = "First name field is required";
		 }
		 if(first_name != null)
		 {
			$scope.first_name_err = " ";
		 }
		 /* First name validation ends  */
		 /* Last name validation starts  */
		 if(last_name == null)
		 {
			$scope.last_name_err = "Last name field is required";
		 }
		 if(last_name != null)
		 {
			$scope.last_name_err = " ";
		 }
		 /* Last name validation ends  */
		 /* Mobile number validation starts  */
		 if(mobile_no == null)
		 {
			$scope.mobile_no_err = "Mobile number field is required"; 
		 }
		 if(mobile_no != null)
		 {
			$scope.mobile_no_err = " "; 
		 }
		 /* Mobile number validation ends  */
		 else{
			ClientService.addClient(self.addclient).then(function(data){
				console.log(data);
				$window.location.href = "/Law/dlf";
			});
			alert("HELLO");
		}
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