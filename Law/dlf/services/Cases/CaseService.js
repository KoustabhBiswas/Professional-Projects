app.service('CaseService',function($http,$q){
    var url = "http://localhost/Law/dlfback/";
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
                             $http.get(url + 'common/Master_controller/get_client').then(
                                 function(resp){
                                    defer.resolve(resp.data);
                                 },
                                 function(error){
                                    defer.reject();
                                 }
                             );
                            return  defer.promise;
                         }
});