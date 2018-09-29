app.service('LoginService',function($q,$http){
    var baseUrl = "http://localhost/Law/dlfback/";
    this.login = function(credentials)
                 {
                     var defer = $q.defer();
                     $http
                        .post(baseUrl + 'LoginController',credentials)
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