app.service('CaseService',function($http,$q){
    var url = "dlfback/";
    this.getCaseStatus = function()
                         {
                             var defer = $q.defer();
                             $http.get(url + 'common/Master_controller/get_case_status').then(
                                 function(resp){
                                    defer.resolve(resp.data);
                                 },
                                 function(error){
                                    defer.reject();
                                 }
                             );
                            return  defer.promise;
                         }
    this.getAllClients = function()
                         {
                             var defer = $q.defer();
                             $http
                                .get(url + 'common/Master_controller/get_client')
                                    .then(
                                 function(resp){
                                    defer.resolve(resp.data);
                                 },
                                 function(error){
                                    defer.reject();
                                 }
                             );
                            return  defer.promise;
                         }
    this.addCase = function(cases)
                   {
                       var defer = $q.defer();
                       $http
                        .post(url + 'case/CaseController/index',cases)
                            .then(
                                function(resp)
                                {
                                    defer.resolve(resp.data);
                                },
                                function(xhr)
                                {
                                    defer.reject();
                                }); 
                                return defer.promise;
                   }
});