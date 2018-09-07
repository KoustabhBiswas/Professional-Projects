app.service('ClientService',function($http,$q){
	var baseUrl = "http://localhost/Law/dlfback/";
	this.getClients = function(){
		var defer = $q.defer();
		$http.get(baseUrl + 'client/ClientController/index').then(function(resp){
			return defer.resolve(resp.data);
		},
		function(error){
			defer.reject();
		});
		return defer.promise;
	}
	this.addClient = function(client){
		var defer = $q.defer();
		$http.post(baseUrl + "client/ClientController/insert_client",client).then(function(resp){
			return defer.resolve(resp.data);
		},function(error){
			defer.reject();
		});
		return defer.promise;
	}
	this.deleteClient = function(client_id){
		var defer = $q.defer();
		$http.get(baseUrl + "client/ClientController/delete_client/" + client_id).then(function(resp){
			return defer.resolve(resp.data);
		},function(error){
			defer.reject();
		});
		return defer.promise;
	}

});