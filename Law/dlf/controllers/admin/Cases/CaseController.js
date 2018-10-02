app.controller('CaseController',function(CaseService,$scope,$window){
    var self = this;
    self.clients = {};
    self.status = {};
    self.allClients = {};
    self.add_case = {};
    self.caseStatus = function()
                    {
                    
                        CaseService.getCaseStatus().then(function(resp){
                            self.status = resp;
                        });
                        CaseService.getAllClients().then(function(resp){
                            self.allClients = resp;
                        });
                    }
    self.getAllClients = function()
                    {
                        console.log("HELLO");
                        // console.log("csrf" + CSRF_TOKEN);
                        CaseService.getAllClients().then(function(resp){
                            self.allClients = resp;
                        });
                    }
    self.addCase = function()
                    {
                        CaseService
                            .addCase(self.add_case)
                                .then(
                                    function(resp){
                                        console.log(resp);
                                        $window.location.href = "/law/dlf/case"; 
                                    });
                    }

});