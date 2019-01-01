app.service('LoginService',function($q,$http,$location){
    var host = $location.host();
	var baseUrl = "http://"+host+"/law/dlfback/";
    this.login = function(credentials)
                 {
                     var defer = $q.defer();
                     $http
                        .post(baseUrl + 'LoginController/index',credentials)
                            .then(function(resp)
                            {
                                return defer.resolve(resp.data);
                             },
                             function(xhr)
                             {
                                 defer.reject();
                             }
                    );
                    return  defer.promise;
                    
                 }
});