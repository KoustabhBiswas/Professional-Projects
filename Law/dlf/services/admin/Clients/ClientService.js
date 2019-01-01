app.service('ClientService',function($http,$q,$location){
	var host = $location.host();
	var baseUrl = "http://"+host+"/law/dlfback/";
	this.getClients = function(){
		var defer = $q.defer();
		$http.get(baseUrl + 'client/ClientController/index_get').then(function(resp){
			return defer.resolve(resp.data);
		},
		function(error){
			defer.reject();
		});
		return defer.promise;
	}
	this.addClient = function(client){
		var defer = $q.defer();
		$http.post(baseUrl + "client/ClientController/users",client).then(function(resp){
			return defer.resolve(resp.data);
		},function(error){
			defer.reject();
		});
		return defer.promise;
	}
	this.deleteClient = function(client_id){
		var defer = $q.defer();
		$http.get(baseUrl + "client/ClientController/deleteclient/" + client_id).then(function(resp){
			return defer.resolve(resp.data);
		},function(error){
			defer.reject();
		});
		return defer.promise;
	}
	this.getStates = function(){
		var defer = $q.defer();
		$http
			.get(baseUrl + "common/Master_controller/get_states")
				.then(
					function(resp)
					{
						return defer.resolve(resp.data);
					},
					function(error)
					{
						defer.reject();
					}
				);
				return defer.promise;
	}
	this.getCityByState = function(city){
		var defer = $q.defer();
		$http
			.get(baseUrl + "common/Master_controller/get_city_by_state/" + city)
				.then(
					function(resp)
					{
						return defer.resolve(resp.data);
					},
					function(error)
					{
						defer.reject();
					}
				);
			return defer.promise;
	}
	this.get_client_by_id = function(client_id)
							{
								var defer = $q.defer();
								$http
									.get(baseUrl + 'client/ClientController/get_client_by_id/'+ client_id)
										.then(
											function(resp){
											return defer.resolve(resp.data);
										},
											function(xhr){
												defer.reject();
											});
								return defer.promise;
							}

});