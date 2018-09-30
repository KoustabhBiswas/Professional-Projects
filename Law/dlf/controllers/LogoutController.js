app.controller('LogoutController',function($cookieStore,$location){
    var self = this;
    self.logout = function(){
    $cookieStore.remove('currentUser');
    $location.path('/login');
    }
});