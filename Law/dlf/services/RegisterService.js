app.service('RegisterService',function($q,$http){
	var baseUrl = "dlfback/";
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
	this.addClient = function(client){
		var defer = $q.defer();
		$http.post(baseUrl + "client/ClientController/insert_client",client).then(function(resp){
			return defer.resolve(resp.data);
		},function(error){
			defer.reject();
		});
		return defer.promise;
	}
});