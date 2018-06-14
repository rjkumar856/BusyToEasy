<section class="kw-page-content cat-container">
<main>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
                <h1>My Account Details <small><button class="btn btn-primary" title="Edit account details" data-toggle="modal" data-target="#view_edit_user_popup">Edit</button></small></h1>
                <div class="row orders">
                    <?php
                    if(isset($login_details) and is_array($login_details)){
                        foreach($login_details as $value){ ?>
                            <div class="order-list col-xs-12">
                                <div class="order-box">
                                        <table class="user-table responsive-table">
                                            <thead>
                                                <tr>
                                                    <th colspan="2"><?php echo $value['full_name']; ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <th>Email :</th>
                                                <td><?php echo $value['email']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>Mobile :</th>
                                                <td><?php echo $value['phone']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>address :</th>
                                                <td><?php echo $value['address']; ?></td>
                                            </tr>
                                            <tr>
                                                <th>city :</th>
                                                <td><?php echo $value['city']; ?></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                </div>
                            </div>
                        <?php
                        }
                    }
                    ?>
                </div>
      </div>
    </div>
  </div>
</main>
</section>
</div>
</div>

<div class="arcticmodal-container modal fade register" id="view_edit_user_popup" role="dialog" aria-hidden="true" ng-controller="EditUserCtrl" ng-cloak>
               <div class="arcticmodal-container_i modal-dialog">
                        <div class="arcticmodal-container_i2">
                           <div class="kw-modal kw-login-modal" ng-switch on="tabs">
                              <button type="button" data-dismiss="modal" class="arcticmodal-close kw-modal-close"></button>
                              <div ng-switch-default>
                              <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
                              <header class="kw-modal-header">
                                 <h3>Edit Account Details</h3>
                              </header>
                              <!-- - - - - - - - - - - - - - End of Header - - - - - - - - - - - - - - - - -->
                              <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
                              <div class="kw-modal-content">
                                 <form name="editUserForm" id="editUserForm" method="POST" >
                                     <?php
                                        if(isset($login_details) and is_array($login_details)){
                                        foreach($login_details as $value){ ?>
                                     
                                            <ul><!-- - - - - - - - - - - - - - Form Row - - - - - - - - - - - - - - - - -->
                                               <li class="col-xs-12 col-sm-6 p-r-0">
                                                  <div class="form-group">
                                                     <label for="login-username" class="kw-required">Email address</label>
                                                     <div class="kw-input-wrapper">
                                                        <input type="text" readonly class="disabled" value="<?php echo $value['email']; ?>" required="" name="email" ng-model="edit.email" id="edit_email" ng-pattern="/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/" placeholder="Email address" ng-class="{'input-error': signupValidation && editUserForm.email.$error.required}">
                                                     </div>
                                                     <!--/ .kw-input-wrap -->
                                                  </div>
                                               </li>
                                               <li class=" col-xs-12 col-sm-6 p-r-0">
                                                  <div class="form-group">
                                                     <label for="login-username" class="kw-required">Mobile Number</label>
                                                     <div class="kw-input-wrapper">
                                                        <input type="text" required="" value="<?php echo $value['phone']; ?>" ng-model="edit.mobile" ng-minlength="10" ng-maxlength="10" name="mobile" id="edit_mobile" placeholder="Mobile Number" ng-pattern="/^\d{3}[- ]?\d{3}[- ]?\d{4}$/" ng-class="{'input-error': signupValidation && editUserForm.mobile.$error.required}">
                                                     </div>
                                                     <!--/ .kw-input-wrap -->
                                                  </div>
                                               </li>
                                               <li class=" col-xs-12 col-sm-6 p-r-0">
                                                  <div class="form-group">
                                                     <label for="login-username" class="kw-required">Full Name</label>
                                                     <div class="kw-input-wrapper">
                                                        <input type="text" required="" value="<?php echo $value['full_name']; ?>" ng-model="edit.name" name="name" ng-minlength="3" ng-maxlength="255" id="edit_name" placeholder="Full Name" ng-class="{'input-error': signupValidation && editUserForm.name.$error.required}">
                                                     </div>
                                                     <!--/ .kw-input-wrap -->
                                                  </div>
                                               </li>
                                               <!-- - - - - - - - - - - - - - End of Form Row - - - - - - - - - - - - - - - - -->
                                               <li class="col-xs-12 col-sm-6 p-r-0">
                                                  <div class="form-group">
                                                     <label for="login-username" class="kw-required">City</label>
                                                     <div class="kw-input-wrapper">
                                                         <select class="form-control" required ng-model="edit.city" name="city" id="edit_city" placeholder="City" ng-class="{'input-error': signupValidation && editUserForm.city.$error.required}">
                                                              <option value="Bangalore">Bangalore</option>
                                                              <option value="Delhi" >Delhi</option>
                                                              <option value="Chennai" >Chennai</option>
                                                              <option value="Mumbai" >Mumbai</option>
                                                              <option value="Hydrabad" >Hydrabad</option>
                                                              <option value="Pune" >Pune</option>
                                                              <option value="Kolkata" >Kolkata</option>
                                                           </select>
                                                     </div>
                                                     <!--/ .kw-input-wrap -->
                                                  </div>
                                               </li><!-- - - - - - - - - - - - - - End of Form Row - - - - - - - - - - - - - - - - -->
                                               <li class=" col-xs-12 col-sm-12 p-r-0">
                                                  <div class="form-group">
                                                     <label for="login-username" class="kw-required">Address</label>
                                                     <div class="kw-input-wrapper">
                                                         <input type="text" value="<?php echo $value['address']; ?>" gm-places-autocomplete ng-model="edit.autocomplete" placeholder="Enter location" name="autocomplete" class="form-control input-text" required id="autocomplete_locality" ng-class="{'input-error': signupValidation && editUserForm.autocomplete.$error.required}" >
                                                        <input type="hidden" value="<?php echo $value['address']; ?>" ng-model="edit.address" name="address" class="form-control input-text" required >
                                                     </div>
                                                     <!--/ .kw-input-wrap -->
                                                  </div>
                                               </li>
                                               <!-- - - - - - - - - - - - - - Form Row - - - - - - - - - - - - - - - - -->
                                               
                                            </ul>
                                            <?php } } ?>
                                    <div class="pageLoader" ng-show="pageLoader"><img src="<?php echo base_url(); ?>assets/images/spinner.gif" alt="spinner" title="spinner" /></div>
                                    <div class="alert alert-danger" ng-show="responceError" ng-bind-html="loginError">{{ loginError }}</div>
                                    <div class="alert alert-success" ng-show="responceSucces" ng-bind-html="loginError">{{ loginError }}</div>
                                    
                                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = signupValidation">
                                        <ul>
                                          <li ng-show="editUserForm.email.$error.required">Email Address is mandatory.</li>
                                          <li ng-show="editUserForm.email.$error.pattern">Enter valid Email Address.</li>
                                          <li ng-show="editUserForm.mobile.$error.required">Mobile Number is mandatory</li>
                                          <li ng-show="editUserForm.mobile.$error.minlength">Mobile Number should be 10 Digits</li>
                                          <li ng-show="editUserForm.mobile.$error.maxlength">Mobile Number should be 10 Digits</li>
                                          <li ng-show="editUserForm.mobile.$error.pattern">Mobile Number should be Numebrs and format is 9XXXXXXXXX</li>
                                          <li ng-show="editUserForm.name.$error.required">Name is mandatory.</li>
                                          <li ng-show="editUserForm.name.$error.minlength">Name should be minimum 3 characters</li>
                                          <li ng-show="editUserForm.name.$error.minlength">Name should be maximum 255 characters</li>
                                          <li ng-show="editUserForm.autocomplete.$error.required">Address is mandatory.</li>
                                          <li ng-show="editUserForm.address.$error.required">Select a valid Address</li>
                                          <li ng-show="editUserForm.city.$error.required">City is mandatory.</li>
                                        </ul>
                                    </div>
                                    <button type="submit" class="kw-btn-medium kw-yellow" ng-click="UpdateUserDetails()">Update</button>
                                        <!--/ .kw-additional-action -->
                                 </form>
                              </div>
                              <!-- - - - - - - - - - - - - - End of Content - - - - - - - - - - - - - - - - -->
                              </div>
                              <div ng-switch-when="password">
                              <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
                              <header class="kw-modal-header">
                                 <h3>Change Password</h3>
                              </header>
                              <!-- - - - - - - - - - - - - - End of Header - - - - - - - - - - - - - - - - -->
                              <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
                              <div class="kw-modal-content">
                                 <form name="changePassordForm" id="changePassordForm" method="POST" >
                                            <ul><!-- - - - - - - - - - - - - - Form Row - - - - - - - - - - - - - - - - -->
                                               <li class="col-xs-12 col-sm-6 p-r-0">
                                                  <div class="form-group">
                                                     <label for="login-username" class="kw-required">Current Password*</label>
                                                     <div class="kw-input-wrapper">
                                                        <input type="text" required="" name="password" ng-model="change.password" id="change_password" ng-minlength="6" ng-maxlength="255" placeholder="Current address" ng-class="{'input-error': signupValidation && changePassordForm.password.$error.required}">
                                                     </div>
                                                     <!--/ .kw-input-wrap -->
                                                  </div>
                                               </li>
                                               <li class=" col-xs-12 col-sm-6 p-r-0">
                                                  <div class="form-group">
                                                     <label for="login-username" class="kw-required">New Password*</label>
                                                     <div class="kw-input-wrapper">
                                                        <input type="text" required="" ng-model="change.new_password" ng-minlength="8" ng-maxlength="255" name="new_password" id="new_password" placeholder="New Password" ng-class="{'input-error': signupValidation && changePassordForm.new_password.$error.required}">
                                                     </div>
                                                     <!--/ .kw-input-wrap -->
                                                  </div>
                                               </li>
                                               <li class=" col-xs-12 col-sm-6 p-r-0">
                                                  <div class="form-group">
                                                     <label for="login-username" class="kw-required">Confirm Password*</label>
                                                     <div class="kw-input-wrapper">
                                                        <input type="text" required="" ng-model="change.confirm_password" name="confirm_password" ng-minlength="8" ng-maxlength="255" id="new_password" placeholder="Confirm Password" ng-class="{'input-error': signupValidation && changePassordForm.new_password.$error.required}">
                                                     </div>
                                                     <!--/ .kw-input-wrap -->
                                                  </div>
                                               </li>
                                            </ul>
                                    <div class="pageLoader" ng-show="pageLoader"><img src="<?php echo base_url(); ?>assets/images/spinner.gif" alt="spinner" title="spinner" /></div>
                                    <div class="alert alert-danger" ng-show="responceError" ng-bind-html="loginError">{{ loginError }}</div>
                                    <div class="alert alert-success" ng-show="responceSucces" ng-bind-html="loginError">{{ loginError }}</div>
                                    
                                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = signupValidation">
                                        <ul>
                                          <li ng-show="changePassordForm.password.$error.required">Current Password is mandatory.</li>
                                          <li ng-show="changePassordForm.password.$error.minlength">Enter valid Current Password.</li>
                                          <li ng-show="changePassordForm.password.$error.maxlength">Enter valid Current Password.</li>
                                          
                                          <li ng-show="changePassordForm.new_password.$error.required">New Password is mandatory</li>
                                          <li ng-show="changePassordForm.new_password.$error.minlength">New Password should have minimum 8 charactors</li>
                                          <li ng-show="changePassordForm.new_password.$error.maxlength">New Password should have maximum 255 charactors</li>
                                          
                                          
                                        </ul>
                                    </div>
                                    <button type="submit" class="kw-btn-medium kw-yellow" ng-click="UpdateUserDetails()">Update</button>
                                        <!--/ .kw-additional-action -->
                                 </form>
                              </div>
                              <!-- - - - - - - - - - - - - - End of Content - - - - - - - - - - - - - - - - -->
                              </div>
                              <!-- - - - - - - - - - - - - - Footer - - - - - - - - - - - - - - - - -->
                              <footer class="kw-modal-footer">
                              </footer>
                              <!-- - - - - - - - - - - - - - End of Footer - - - - - - - - - - - - - - - - -->
                           </div>
                    </div>
            </div>
    </div>

<?php
$this->load->view('common/footer');
?>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB8IadnL8n0vlI6l9aQ9iHIqhlNSOesTSY&libraries=places"></script>
<script src="<?php echo base_url(); ?>assets/js/map/angularjs-google-maps.js"></script>

<script>
(function(){
'use strict';
angular.module('BusyToEasy', ['ngAnimate','ngSanitize','gm'])
.controller('EditUserCtrl', ['Database','$scope',function(Database,$scope) {
  $scope.edit = {};
  $scope.signupValidation = false;
  $scope.responceError = false;
  $scope.responceSucces = false;
  $scope.pageLoader = false;
  $scope.edit.map_latitude = true;
  $scope.edit.map_longitude = true;
  $scope.edit.address = "";
  $scope.edit.user = "<?php echo base64_encode(base64_encode("User".($login_details[0]['id'] + 356))."/weblist"); ?>";


    <?php
        if(isset($login_details) and is_array($login_details)){
        foreach($login_details as $value){ ?>
            $scope.edit = {
                email: "<?php echo $value['email']; ?>",
                name: "<?php echo $value['full_name']; ?>",
                mobile: "<?php echo $value['phone']; ?>",
                city: "<?php echo $value['city']; ?>",
                autocomplete: "<?php echo $value['address']; ?>",
                address: "<?php echo $value['address']; ?>"
            };
    <?php } } ?>
  
  
  // Navigation functions
  $scope.UpdateUserDetails = function () {
    //$scope.direction = 1;
    //$scope.stage = stage;
    $scope.signupValidation = true;
    if ($scope.editUserForm.$valid){
        $scope.signupValidation = false;
        $scope.responceError = false;
        $scope.responceSucces = false;
        $scope.pageLoader = true;
        
        Database.updateUserSubmitNew($scope.edit)
            .then(function (response) {
                console.log(response);
                if (response && response.data && response.data.status && response.data.status === 'success') {
              $scope.loginError = response.data.message;
              $scope.responceError = false;
              $scope.responceSucces = true;
                } else {
                  if (response && response.data && response.data.status && response.data.status === 'error') {
                      $scope.loginError = response.data.message;
                      $scope.responceError = true;
                      $scope.responceSucces = false;
                  }else{
                      $scope.loginError = "Error occured1";
                      $scope.responceError = true;
                      $scope.responceSucces = false;
                  }
                }
                $scope.pageLoader = false;
            }, function(error) {
                console.log(error);
                $scope.loginError = "Error occured: "+ error.message;
                $scope.responceError = true;
                $scope.responceSucces = false;
                $scope.pageLoader = false;
            });
    }
  };
  
  $scope.$on('gmPlacesAutocomplete::placeChanged', function(){
      var location = $scope.edit.autocomplete.getPlace().geometry.location;
      var address = $scope.edit.autocomplete.getPlace().formatted_address;
      $scope.edit.autocomplete = address;
      $scope.edit.address = address;
      $scope.edit.map_latitude = location.lat();
      $scope.edit.map_longitude = location.lng();
    });
    
    $scope.callingCrtl = function () {
        alert("Calling Cntlr");
    };
  
  // Post to desired exposed web service.
  $scope.updateUserSubmit1 = function () {
      var wsUrl = "<?php echo base_url(); ?>user_forgot_password";
    // Check form validity and submit data using $http
    if ($scope.editUserForm.$valid) {
        $scope.signupValidation = false;
        $scope.responceError = false;
        $scope.responceSucces = false;
        $scope.pageLoader = true;
        console.log($scope.edit);
      
      $http({
        method: 'POST',
        url: wsUrl,
        data: $scope.edit,
      }).then(function successCallback(response) {
          console.log(response);
        if (response && response.data && response.data.status && response.data.status === 'success') {
              $scope.loginError = response.data.message;
              $scope.responceError = false;
              $scope.responceSucces = true;
        } else {
          if (response && response.data && response.data.status && response.data.status === 'error') {
              $scope.loginError = response.data.message;
              $scope.responceError = true;
              $scope.responceSucces = false;
          }else{
              $scope.loginError = "Error occured1";
              $scope.responceError = true;
              $scope.responceSucces = false;
          }
        }
        $scope.pageLoader = false;
      }, function errorCallback(response) {
            console.log(response);
            $scope.loginError = "Error occured2";
            $scope.responceError = true;
            $scope.responceSucces = false;
            $scope.pageLoader = false;
      });
    }
  };
}]);
})();
</script>
<script>
(function(){
angular.module("BusyToEasy").factory('Database',function($http,$filter){
return {
  ajaxcall: function(){
    alert("ajaxcall1");
  },
  updateUserSubmit: function(input){
      var base_url = "<?php echo base_url(); ?>user_update";
      var response = [];
    return $http({
        method: 'POST',
        url: base_url,
        headers: {'Content-Type': 'application/x-www-form-urlencoded'},
        data: { "name": input.name,"email": input.email,"address": input.address,"city": input.city,"mobile": input.mobile }
    })
    .success(function (data, status, headers, config){
        return data;
        })
    .error(function (data, status, headers, config) {
        return data;
    });
},
updateUserSubmitNew: function (input) {
    var base_url = "<?php echo base_url(); ?>user_update";
            return $http({
                method: 'POST',
                url: base_url,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: { "name": input.name,"email": input.email,"address": input.address,"city": input.city,"mobile": input.mobile }
            });
}
 };
});
})();
</script>
</body>
</html>