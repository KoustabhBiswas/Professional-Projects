app.controller('CaseController',function(CaseService,$scope,$window){
    var self = this;
    self.clients = {};
    self.status = {};
    self.allClients = {};
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
                    
                       
                        CaseService.getAllClients().then(function(resp){
                            self.allClients = resp;
                        });
                    }

});