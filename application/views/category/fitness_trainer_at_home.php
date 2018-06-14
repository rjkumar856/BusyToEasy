<section class="kw-page-content cat-container">
<main>
  <div class="container">
    <div class="row">
      <div class="col-md-12">&nbsp;</div>
    </div>
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <?php
                    if(isset($check_slug)){ ?>
                    <h1 class="kw-section-title cap"><?php echo $check_slug[0]['title']; ?></h1>
                    <?php } ?>
      </div>
    </div>
    
    <div class="animate-switch-container" >
        <div class="animate-switch">
          <div class="row">
              <form name="MainMultiStepForm" class="form-validation" role="form" novalidate>
              <h2>Training needed for:</h2>
              <div class="question_body">
                          <div class="form-group">
                                <label for="main_gender_male" class="switchery">Male
                                    <input id="main_gender_male" checked="" type="radio" name="gender" value="Male" ng-true-value="'Male'" ng-false-value="''" class="" ng-model="mainformParams.gender" required ng-class="{'input-error': formValidation && MainMultiStepForm.gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="main_gender_female" class="switchery">Female
                                    <input id="main_gender_female" checked="" type="radio" name="gender" value="Female" ng-true-value="'Female'" ng-false-value="''" class="" ng-model="mainformParams.gender" required ng-class="{'input-error': formValidation && MainMultiStepForm.gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="main_gender_group" class="switchery">Couple or Group
                                    <input id="main_gender_group" checked="" type="radio" name="gender" value="Group" ng-true-value="'Group'" ng-false-value="''" class="" ng-model="mainformParams.gender" required ng-class="{'input-error': formValidation && MainMultiStepForm.gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                    
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && MainMultiStepForm.gender.$error.required">
                        <ul>
                          <li ng-show="MainMultiStepForm.$invalid">Select an option to continue</li>
                          <li ng-show="MainMultiStepForm.$valid"></li>
                        </ul>
                    </div>
                </div>
                    <div class="question_footer">    
                      <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="openQuestionModal()">Next</button>
                    </div>
                </form>
          </div>
        </div>
    </div>
    
    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">&nbsp;</div>
    </div>
  </div>
</main>
</section>
</div>
</div>

<!-- Modal -->
  <div class="modal fade cat-container" id="question_detailsModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
       <div class="modal-body" >
           <button type="button" class="close" data-dismiss="modal">×</button>
    <form name="multiStepForm" class="form-validation" role="form" novalidate>
      <div class="animate-switch-container" ng-switch on="stage" ng-class="{forward: direction, backward:!direction}">
        <div class="animate-switch1" ng-switch-default>
              <div class="question_body">
                    <div class="outer-text">
                        <div class="text">We will ask a few questions to connect you with the right Instructors</div>
                    </div>
                </div>
                    <div class="question_footer">    
                      <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage1')">Get Started</button>
                    </div>
        </div>
          
        <div class="animate-switch1" ng-switch-when="stage1">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="row">
              <h2>Training needed for:</h2>
              <div class="question_body">
                          <div class="form-group">
                                <label for="gender_male" class="switchery">Male
                                    <input id="gender_male" ng-checked="formParams.gender" type="radio" name="gender" value="Male" class="" ng-model="formParams.gender" required ng-class="{'input-error': formValidation && multiStepForm.gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="gender_female" class="switchery">Female
                                    <input id="gender_female" ng-checked="formParams.gender" type="radio" name="gender" value="Female" class="" ng-model="formParams.gender" required ng-class="{'input-error': formValidation && multiStepForm.gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="gender_group" class="switchery">Couple or Group
                                    <input id="gender_group" ng-checked="formParams.gender" type="radio" name="gender" value="Group" class="" ng-model="formParams.gender" required ng-class="{'input-error': formValidation && multiStepForm.gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                    
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.gender.$error.required">
                        <ul>
                          <li ng-show="multiStepForm.$invalid">Select an option to continue</li>
                          <li ng-show="multiStepForm.$valid"></li>
                        </ul>
                    </div>
                </div>
                    <div class="question_footer">    
                      <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage2')">Next</button>
                    </div>
          </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage2">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="row">
              <h2>How this works?</h2>
              <div class="question_body">
                            <div class="form-group">
                                <h3 class="switchery" style="font-size: 20px;"><i class="fa fa-check" aria-hidden="true" style="color: #3c763d;"></i> Book FREE Trial Session</h3>
                                <h3 class="switchery" style="font-size: 20px;"><i class="fa fa-check" aria-hidden="true" style="color: #3c763d;"></i> If you like the trial session buy package of Rs. 5,999/month</h3>
                                <h3 class="switchery" style="font-size: 20px;"><i class="fa fa-check" aria-hidden="true" style="color: #3c763d;"></i> Get 12 sessions in 4 weeks</h3>
                                <h3 class="switchery" style="font-size: 20px;"><i class="fa fa-check" aria-hidden="true" style="color: #3c763d;"></i> Train with a certified trainer</h3>
                            </div>
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.trainee_age.$error.required">
                        <ul>
                          <li ng-show="multiStepForm.$invalid">Select an option to continue</li>
                          <li ng-show="multiStepForm.$valid"></li>
                        </ul>
                    </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage1')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage3')">Next</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage3">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
            <div class="row">
              <h2>Gender of the trainer you would prefer</h2>
              <div class="question_body">
                          <div class="form-group">
                                <label for="male_trainer" class="switchery">Male Trainer : Rs. 5,999/month
                                    <input ng-required="true" id="male_trainer" checked="" type="checkbox" name="trainer_gender[]" value="Male Trainer : Rs. 5,999/month" class="" ng-model="formParams.time_slot.time_slot_6_to_8_am" required ng-class="{'input-error': formValidation && multiStepForm.time_slot.time_slot_6_to_8_am.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="female_trainer" class="switchery">Female Trainer : Rs. 7,999/month
                                    <input id="female_trainer" checked="" type="checkbox" name="trainer_gender[]" value="Female Trainer : Rs. 7,999/month" class="" ng-model="formParams.time_slot.time_slot_8_to_10_am" required ng-class="{'input-error': formValidation && multiStepForm.time_slot.time_slot_8_to_10_am.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && !(formParams.time_slot.time_slot_6_to_8_am || formParams.time_slot.time_slot_8_to_10_am || formParams.time_slot.time_slot_10_to_12_pm || formParams.time_slot.time_slot_12_to_3_pm || formParams.time_slot.time_slot_3_to_5_pm)">
                        <ul>
                          <li ng-show="multiStepForm.$invalid">Select an option to continue</li>
                          <li ng-show="multiStepForm.$valid"></li>
                        </ul>
                    </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage2')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="checkbox_next('stage4')">Next</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage4">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="row">
              <h2>Where do you require the service?</h2>
              <div class="question_body">
                          <div class="form-group">
                                    <input id="house_flat_no" type="text" placeholder="House/Flat No." name="house_flat_no" value="Basic" class="" ng-model="formParams.house_flat_no" required ng-class="{'input-error': formValidation && multiStepForm.estimated_budget.$error.required}">
                            </div>
                            <div class="form-group">
                                <input id="enter_location" type="search" placeholder="Enter location" name="enter_location" value="Basic" class="" ng-model="formParams.enter_location" required ng-class="{'input-error': formValidation && multiStepForm.estimated_budget.$error.required}">
                            </div>
                            <div class="form-group">
                                <input id="landmark" type="text" placeholder="Landmark" name="landmark" value="Basic" class="" ng-model="formParams.landmark" required ng-class="{'input-error': formValidation && multiStepForm.estimated_budget.$error.required}">
                            </div>
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.estimated_budget.$error.required">
                        <ul>
                          <li ng-show="multiStepForm.$invalid">Select an option to continue</li>
                          <li ng-show="multiStepForm.$valid"></li>
                        </ul>
                    </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage3')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage5')">Next</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage5">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="row">
              <h2>Select date of service</h2>
              <div class="question_body">
                    <ul id="schedulerDateSlot" class="scheduledate_ul clearfix">
                    	<li class="scheduledate_li scheduledate_li_active" data-index="0"><p data-index="0" class="scheduledate_p">Today</p><p data-index="0" class="scheduledate_pp">13</p></li>
                    	<li class="scheduledate_li" data-index="1"><p data-index="1" class="scheduledate_p">Tomorrow</p><p data-index="1" class="scheduledate_pp">14</p></li>
                    	<li class="scheduledate_li" data-index="2"><p data-index="2" class="scheduledate_p">Fri</p><p data-index="2" class="scheduledate_pp">15</p></li>
                    	<li class="scheduledate_li" data-index="3"><p data-index="3" class="scheduledate_p">Sat</p><p data-index="3" class="scheduledate_pp">16</p></li>
                    	<li class="scheduledate_li" data-index="4"><p data-index="4" class="scheduledate_p">Sun</p><p data-index="4" class="scheduledate_pp">17</p></li>
                    	<li class="scheduledate_li" data-index="5"><p data-index="5" class="scheduledate_p">Mon</p><p data-index="5" class="scheduledate_pp">18</p></li>
                    	<li class="scheduledate_li" data-index="6"><p data-index="6" class="scheduledate_p">Tue</p><p data-index="6" class="scheduledate_pp">19</p></li>
                    </ul>      
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.how_soon_start.$error.required">
                        <ul>
                          <li ng-show="multiStepForm.$invalid">Select an option to continue</li>
                          <li ng-show="multiStepForm.$valid"></li>
                        </ul>
                    </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage4')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage6')">Next</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage6">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="row">
              <h2>Let the best trainers get in touch with me via phone/whatsapp?</h2>
              <div class="question_body getin_touch">
                          <div class="form-group">
                                <div class="form-group togglebutton">
                                <label>
                                  <input type="checkbox" name="getin_touch" checked="checked" value="Yes" class="col-sm-7 md-checkbox" ng-model="formParams.getin_touch" ng-init="formParams.getin_touch=true" ><span class="toggle"></span>
                                </label>
                              </div>
                            </div>

                    <div class="row error alert alert-warning" ng-show="toggleFormErrorsView = !formParams.getin_touch">
                        <ul>
                          <li>Slots for good trainers typically get booked quickly. Allowing them to call you will help you hire the right one.</li>
                        </ul>
                    </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage5')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage7')">Next</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage7">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="row">
              <h2>Location where the Yoga trainer is needed:</h2>
              <div class="question_body">
                        <div class="form-group">
                          <input type="text" gm-places-autocomplete ng-model="formParams.autocomplete" placeholder="Enter location" name="autocomplete" class="form-control input-text map-autocomplete" required id="autocomplete_locality" ng-class="{'input-error': formValidation && multiStepForm.autocomplete.$error.required}" >
                          <button class="locate-me btn btn-primary" ng-model="formParams.gps_location" ng-click="getCurrentLocation()"><span class="lnr icon-map-marker"></span> Locate Me</button>
                          
                          <input type="hidden" ng-model="formParams.map_latitude" name="map_latitude" class="form-control input-text map-autocomplete" required>
                          <input type="hidden" ng-model="formParams.map_longitude" name="map_longitude" class="form-control input-text map-autocomplete" required>
                        </div>

                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && (multiStepForm.autocomplete.$error.required || multiStepForm.map_latitude.$error.required || multiStepForm.map_longitude.$error.required)">
                        <ul>
                          <li>Locality is mandatory.</li>
                        </ul>
                    </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage6')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage8')">Next</button>
                </div>
            </div>
        </div>
        
        <div class="animate-switch1" ng-switch-when="stage8">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="row">
              <h2>One last step:</h2>
              <div class="question_body">
                        <div class="form-group">
                          <input type="text" ng-model="formParams.mobile" ng-minlength="10" ng-maxlength="10" placeholder="Mobile Number" name="mobile" class="form-control" required ng-pattern="formParams.phoneNumbr" id="mobile" ng-class="{'input-error': formValidation && multiStepForm.mobile.$error.required && multiStepForm.mobile.$error.minlength && multiStepForm.mobile.$error.maxlength && multiStepForm.mobile.$error.pattern}" >
                        </div>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="validateMobile()" >Login/Signup</button>
                        <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation">
                            <ul>
                              <li ng-show="multiStepForm.mobile.$error.required">Mobile or Login is mandatory.</li>
                              <li ng-show="multiStepForm.mobile.$error.minlength">Mobile Number should be 10 Digits</li>
                              <li ng-show="multiStepForm.mobile.$error.maxlength">Mobile Number should be 10 Digits</li>
                              <li ng-show="multiStepForm.mobile.$error.pattern">Mobile Number should be Numebrs and format is 9XXXXXXXXX</li>
                            </ul>
                        </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage7')">Back</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage9">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="row">
              <h2>One last step:</h2>
              <div class="question_body">
                        <div class="form-group">
                          <input type="text" ng-model="formParams.mobile" placeholder="Mobile Number" name="mobile" class="form-control" required id="mobile" ng-class="{'input-error': formValidation && multiStepForm.mobile.$error.required}" >
                        </div>
                        <div class="form-group">
                          <input type="text" ng-model="formParams.otp" placeholder="Mobile Number" name="mobile" class="form-control" required id="mobile" ng-class="{'input-error': formValidation && multiStepForm.mobile.$error.required}" >
                        </div>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="sendSMS()" ng-pattern="formParams.phoneNumbr">Login/Signup</button>
                        <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation">
                            <ul>
                              <li ng-show="formParams.mobile.$error.required">Mobile or Login is mandatory.</li>
                              <li ng-show="formParams.mobile.$error.length">Mobile Number should be 10 Digits</li>
                              <li ng-show="formParams.mobile.$error.pattern">Mobile Number should be 9XXXXXXXXX format</li>
                            </ul>
                        </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage7')">Back</button>
                </div>
            </div>
        </div>
        
        <div class="animate-switch1" ng-switch-when="success">
          <div class="success-wrap">
            <h2 class="confirmation-text">Thank you</h2>
            <p>Your message has been sent.<br>You should receive a confirmation email.</p>
            <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage8')">Back</button>
            <div><button type="button" class="btn btn-success" ng-click="reset()">Send Another</button></div>
          </div>
        </div>
        <div class="animate-switch" ng-switch-when="error">
          <div class="error-wrap">
            <h2 class="confirmation-text">Error</h2>
            <p>There was an error when attempting to submit your request.<br>Please try again later.</p>
            <p><strong>*This will always error until a web service URL is set.*</strong></p>
            <div><button type="button" class="btn btn-danger" ng-click="reset()">Try again</button></div>
          </div>
        </div>
      </div>
    </form>
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
angular.module('BusyToEasy', ['ngAnimate','gm'])
.controller('QuestionsCtrl', ['$scope', '$http', function($scope, $http) {
  $scope.formParams = {};
  $scope.mainformParams = {};
  $scope.stage = "";
  $scope.formValidation = false;
  $scope.toggleJSONView = false;
  $scope.toggleFormErrorsView = false;
    $scope.formParams.map_latitude = "";
    $scope.formParams.map_longitude = "";
    $scope.formParams.phoneNumbr = /^\d{3}[- ]?\d{3}[- ]?\d{4}$/;
    $scope.otp = "";
  
  $scope.getCurrentLocation = function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
                $scope.formParams.map_latitude = position.coords.latitude;
                $scope.formParams.map_longitude = position.coords.longitude;
            });
        }
    };
  
  // Navigation functions
  $scope.openQuestionModal = function () {
    $scope.formValidation = true;
    if ($scope.MainMultiStepForm.$valid){
      $scope.formValidation = false;
      $scope.formParams.gender = $scope.mainformParams.gender;
      $('#question_detailsModal').modal('show');
    }
  };
  
    $scope.$on('gmPlacesAutocomplete::placeChanged', function(){
      var location = $scope.formParams.autocomplete.getPlace().geometry.location;
      $scope.formParams.autocomplete = $scope.formParams.autocomplete.getPlace().formatted_address;
      $scope.formParams.map_latitude = location.lat();
      $scope.formParams.map_longitude = location.lng();
    });
  
  // Navigation functions
  $scope.next = function (stage) {
    //$scope.direction = 1;
    //$scope.stage = stage;
    
    $scope.formValidation = true;
    
    if ($scope.multiStepForm.$valid){
      $scope.direction = 1;
      $scope.stage = stage;
      $scope.formValidation = false;
    }
  };
  
  // Navigation functions
  $scope.checkbox_next = function (stage) {
    //$scope.direction = 1;
    //$scope.stage = stage;
    $scope.formValidation = true;
    if ($scope.formParams.time_slot.time_slot_6_to_8_am || $scope.formParams.time_slot.time_slot_8_to_10_am || $scope.formParams.time_slot.time_slot_10_to_12_pm || $scope.formParams.time_slot.time_slot_12_to_3_pm || $scope.formParams.time_slot.time_slot_3_to_5_pm){
      $scope.direction = 1;
      $scope.stage = stage;
      $scope.formValidation = false;
    }
  };
  
  // sendSMS functions
  $scope.validateMobile = function () {
    $scope.formValidation = true;
    if($scope.TestMultiStepForm.mobile.$error.required || $scope.TestMultiStepForm.mobile.$error.minlength || $scope.TestMultiStepForm.mobile.$error.maxlength || $scope.TestMultiStepForm.mobile.$error.pattern){
        $scope.formValidation = true;
    }else{
        $scope.formValidation = false;
        $scope.otp = Math.floor((Math.random() * 899999) + 100000);
        var message = "Your OTP is: "+$scope.otp+"\n\n Use the above One Time Password to verify your identity on UrbanClap.";
        $scope.sendSMS($scope.formParams.mobile,message);
    }
  };
  
  //validate OTP functions
  $scope.validateOTP = function () {
    $scope.formValidation = true;
    if($scope.otp == $scope.formParams.otp){
        $scope.formValidation = true;
    }else{
        $scope.formValidation = true;

    }
  };

  $scope.back = function (stage) {
    $scope.direction = 0;
    $scope.stage = stage;
  };
  
  // Post to desired exposed web service.
  $scope.sendSMS = function (mobile,msg) {
    var wsUrl = "<?php echo base_url(); ?>send_sms";
      $http({
        method: "POST",
        data: {"phone":mobile,"message":msg},
        url: wsUrl
      }).then(function successCallback(response) {
          console.log(response);
        if (response && response.data && response.data.status && response.data.status === 'success') {
          $scope.stage = "success";
        }else {
          if (response
            && response.data
            && response.data.status
            && response.data.status === 'error') {
            $scope.stage = "error";
          }
        }
      }, function errorCallback(response) {
        $scope.stage = "error";
        console.log(response);
      });
  };
  
  $scope.reset = function() {
    // Clean up scope before destorying
    $scope.formParams = {};
    $scope.stage = "";
  }
}]);
})();
</script>
</body>
</html>