app.controller('LoginController',function(LoginService,$scope,$window,$location,md5){

    var self = this;
    //self.sideBarFlag = 1;
    self.credentials = {};
    self.login = function()
                {
                    var logincredentials = [];
                    var username = self.credentials.username;
                    var password = md5.createHash(self.credentials.password);
                    logincredentials.push(username);
                    logincredentials.push(password);
                    //console.log(logincredentials);
                    LoginService.login(logincredentials).then(function(resp){
                        console.log(resp);
                    })
                }
});