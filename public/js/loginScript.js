var app = angular.module("loginModule", []);

app.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('[{');
    $interpolateProvider.endSymbol('}]');
});

app.controller("loginCtrl", ['$scope', '$http', function ($scope, $http) {
    // login using AJAX
    $scope.checkLog = function () {
        if ($scope.userEmail !== undefined && $scope.userMDP !== undefined) {
            var logIn = {
                "userEmail": $scope.userEmail,
                "userMDP": $scope.userMDP
            };
            var postData = 'logInData=' + JSON.stringify(logIn);
            $http({
                method: 'POST',
                url: '/controllers/login',
                data: postData,
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' }
            }).then(function (response) {
                if (response.data === "") {
                    $scope.logInReply = "Identifiant ou mot de passe incorrect";
                }else {
                    switch (response.data) {
                        case "adherent":
                            window.location = '/Accueil';
                            break;
                        case "bibliothecaire":
                            window.location = '/Dashboard';
                            break;
                    }
                }
            }).catch(function (error) {
                console.log(error);
            });
        }
    }
}]);