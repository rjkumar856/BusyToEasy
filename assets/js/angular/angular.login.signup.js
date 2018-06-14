angular.module('BusyToEasy', ['ngAnimate','ngSanitize'])
.controller('SignUpCtrl', ['$scope', '$http','$timeout', function($scope, $http,$timeout) {
  $scope.register = {};
  $scope.signupValidation = false;
  $scope.responceError = false;
  $scope.responceSucces = false;
  $scope.pageLoader = false;
  $scope.loginValidation = false;
  $scope.forgotValidation = false;
  
  // Navigation functions
  $scope.signup = function () {
    $scope.signupValidation = true;
    if ($scope.signupForm.$valid) {
      $scope.signupValidation = false;
      $scope.signupSubmit();
    }
    return false;
  };
  
  // Navigation functions
  $scope.loginfn = function () {
    $scope.loginValidation = true;
    if ($scope.loginForm.$valid) {
      $scope.loginValidation = false;
      $scope.loginSubmit();
    }
    return false;
  };
  // Navigation functions
  $scope.forgotPWDfn = function () {
    $scope.forgotValidation = true;
    if ($scope.forgotForm.$valid) {
      $scope.forgotValidation = false;
      $scope.forgotSubmit();
    }
    return false;
  };
  
  // Post to desired exposed web service.
  $scope.loginSubmit = function () {
      var wsUrl = "/busytoeasy/user_login";
    // Check form validity and submit data using $http
    if ($scope.loginForm.$valid) {
        $scope.loginValidation = false;
        $scope.responceError = false;
        $scope.responceSucces = false;
        $scope.pageLoader = true;
      
      $http({
        method: 'POST',
        url: wsUrl,
        data: $scope.login,
      }).then(function successCallback(response) {
        if (response && response.data && response.data.status && response.data.status === 'success') {
              $scope.loginError = response.data.message;
              $scope.responceError = false;
              $scope.responceSucces = true;
              
              $timeout(location.reload(), 3000);
              
        } else {
          if (response && response.data && response.data.status && response.data.status === 'error') {
              $scope.loginError = response.data.message;
              $scope.responceError = true;
              $scope.responceSucces = false;
          }
        }
        $scope.pageLoader = false;
      }, function errorCallback(response) {
            console.log(response);
            $scope.loginError = "Error occured";
            $scope.responceError = true;
            $scope.responceSucces = false;
            $scope.pageLoader = false;
      });
    }
  };
  
  // Post to desired exposed web service.
  $scope.forgotSubmit = function () {
      var wsUrl = "/busytoeasy/user_forgot_password";
    // Check form validity and submit data using $http
    if ($scope.forgotForm.$valid) {
        $scope.forgotValidation = false;
        $scope.responceError = false;
        $scope.responceSucces = false;
        $scope.pageLoader = true;
        console.log($scope.forgot);
      
      $http({
        method: 'POST',
        url: wsUrl,
        data: $scope.forgot,
      }).then(function successCallback(response) {
          console.log(response);
        if (response && response.data && response.data.status && response.data.status === 'success') {
              $scope.loginError = response.data.message;
              $scope.responceError = false;
              $scope.responceSucces = true;
              //$timeout(location.reload(), 3000);
              
        } else {
          if (response && response.data && response.data.status && response.data.status === 'error') {
              $scope.loginError = response.data.message;
              $scope.responceError = true;
              $scope.responceSucces = false;
          }
        }
        $scope.pageLoader = false;
      }, function errorCallback(response) {
            console.log(response);
            $scope.loginError = "Error occured";
            $scope.responceError = true;
            $scope.responceSucces = false;
            $scope.pageLoader = false;
      });
    }
  };


  // Post to desired exposed web service.
  $scope.signupSubmit = function () {
      var wsUrl = "/busytoeasy/user_signup";
    // Check form validity and submit data using $http
    if ($scope.signupForm.$valid) {
        $scope.signupValidation = false;
        $scope.responceError = false;
        $scope.responceSucces = false;
        $scope.pageLoader = true;
      
      $http({
        method: 'POST',
        url: wsUrl,
        data: $scope.register,
      }).then(function successCallback(response) {
        if (response && response.data && response.data.status && response.data.status === 'success') {
              $scope.signupError = response.data.message;
              $scope.responceError = false;
              $scope.responceSucces = true;
        } else {
          if (response && response.data && response.data.status && response.data.status === 'error') {
              $scope.signupError = response.data.message;
              $scope.responceError = true;
              $scope.responceSucces = false;
          }
        }
        $scope.pageLoader = false;
      }, function errorCallback(response) {
            console.log(response);
            $scope.signupError = "Error occured";
            $scope.responceError = true;
            $scope.responceSucces = false;
            $scope.pageLoader = false;
      });
    }
  };
  
  $scope.reset = function() {
    // Clean up scope before destorying
    $scope.signupForm = {};
  }
}]);