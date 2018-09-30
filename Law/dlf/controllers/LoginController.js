app.controller('LoginController',function(LoginService,$scope,$rootScope,$window,$location,md5,$cookieStore){

    var self = this;
    //self.sideBarFlag = 1;
    self.credentials = {};
    $rootScope.currentUser = '';
    $rootScope.loginTemplateFlag = '1';
    self.login = function()
                {
                    var logincredentials = [];
                    var username = self.credentials.username;
                    var password = md5.createHash(self.credentials.password);
                    logincredentials.push(username);
                    logincredentials.push(password);
                    LoginService.login(logincredentials).then(function(resp){
                        if(resp == 0)
                        {
                            $scope.loginFlag = 0;
                        }
                        else
                        {
                            $cookieStore.put('currentUser',resp);
                            $rootScope.currentUser = $cookieStore.get('currentUser');

                            if($rootScope.currentUser[0]['role'] == 'Admin')
                            {
                                $window.location.href = '/law/dlf/admin'; 
                            }
                            else
                            {
                                $window.location.href = '/law/dlf/';
                            }
                        }

                    })
                }
    self.logout = function()
                  {
                      $cookieStore.remove('currentUser');
                      $window.location.href = '/login';
                  }
});