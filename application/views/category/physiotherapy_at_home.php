</div></div>
<section class="kw-page-content cat-container">
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-12">&nbsp;</div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <?php
                if(isset($check_slug)){ ?>
                <h1 class="kw-section-title cap cat-title"><?php echo $check_slug[0]['title']; ?></h1>
                <?php } ?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
                <?php
                        if(isset($check_slug)){ ?>
                        <h2 class="kw-section-title ">Best Physiotherapists at Home in Bangalore</h2>
                <?php } ?>
            </div>
        </div>
        
        <div class="animate-switch-container" >
            <div class="animate-switch">
              <div class="">
                  <form name="MainMultiStepForm" class="form-validation" role="form" novalidate>
                  <h2>Gender of patient:</h2>
                  <div class="question_body">
                                <div class="form-group">
                                    <label for="Main_gender_male" class="switchery">Male Patient
                                        <input id="Main_gender_male" type="radio" name="gender" value="Male" class="" ng-model="mainformParams.gender" required ng-class="{'input-error': formValidation && MainMultiStepForm.gender.$error.required}">
                                        <span  class="checkmark "></span>
                                    </label>
                                </div>
                                <div class="form-group">
                                    <label for="Main_gender_female" class="switchery">Female Patient
                                        <input id="Main_gender_female" type="radio" name="gender" value="Female" class="" ng-model="mainformParams.gender" required ng-class="{'input-error': formValidation && MainMultiStepForm.gender.$error.required}">
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
<div class="cat-sub-content">
    <div class="row">
        <div class="container">
            <p>
                UrbanClap is connecting you with best physiotherapists in Bangalore who use advanced techniques and evidence-based care. Top physiotherapists in Bangalore assess, diagnose, treat and prevent a wide range of health conditions and movement disorders. Physiotherapy helps repair damage, reduce stiffness and pain, increase mobility and improve quality of life. A typical session with our top physiotherapists in Bangalore is helpful to a patient’s needs and their health condition. Get relieved of your pain and start your best physiotherapy in Bangalore at your home and at your convenient time
            </p>
        </div>
    </div>
</div>

<!-- Modal -->
  <div class="modal fade cat-container" id="question_detailsModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
       <div class="modal-body" >
           <button type="button" class="close" data-dismiss="modal">x</button>
    <form name="multiStepForm" class="form-validation" role="form" novalidate>
      <div class="animate-switch-container" ng-switch on="stage" ng-class="{forward: direction, backward:!direction}">
        <div class="animate-switch1" ng-switch-default>
              <div class="question_body">
                    <div class="outer-text">
                        <div class="text">We will ask a few questions to connect you with the right Instructors</div>
                    </div>
                </div>
                    <div class="question_footer">    
                      <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage2')">Get Started</button>
                    </div>
        </div>
          
        <div class="animate-switch1" ng-switch-when="stage1">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="">
              <div class="question_body">
                  <h2>Gender of patient:</h2>
                          <div class="form-group">
                                <label for="gender_male" class="switchery">Male Patient
                                    <input id="gender_male" ng-checked="formParams.gender" type="radio" name="gender" value="Male" class="" ng-model="formParams.gender" required ng-class="{'input-error': formValidation && multiStepForm.gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="gender_female" class="switchery">Female Patient
                                    <input id="gender_female" ng-checked="formParams.gender" type="radio" name="gender" value="Female" class="" ng-model="formParams.gender" required ng-class="{'input-error': formValidation && multiStepForm.gender.$error.required}">
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
          <div class="">
              <div class="question_body">
                  <h2>What do you need the physiotherapist for?</h2>
                          <div class="form-group">
                                <label for="back_pain" class="switchery">Back Pain
                                    <input id="back_pain" checked="" type="radio" name="physiotherapist_for" value="Back Pain" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="sports_injuries" class="switchery">Sports Injuries
                                    <input id="sports_injuries" checked="" type="radio" name="physiotherapist_for" value="Sports Injuries" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="knee_pain" class="switchery">Knee Pain
                                    <input id="knee_pain" checked="" type="radio" name="physiotherapist_for" value="Knee Pain" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="neck_pain" class="switchery">Neck Pain
                                    <input id="neck_pain" checked="" type="radio" name="physiotherapist_for" value="Neck Pain" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="post_surgical_rehab" class="switchery">Post Surgical Rehab
                                    <input id="post_surgical_rehab" checked="" type="radio" name="physiotherapist_for" value="Post Surgical Rehab" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="neurological_issue" class="switchery">Neurological issue (Parkinson's, Spinal Injuries, Stroke etc...)
                                    <input id="neurological_issue" checked="" type="radio" name="physiotherapist_for" value="Neurological issue (Parkinson's, Spinal Injuries, Stroke etc...)" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="shoulder_pain" class="switchery">Shoulder Pain
                                    <input id="shoulder_pain" checked="" type="radio" name="physiotherapist_for" value="Shoulder Pain" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="hip_pain" class="switchery">Hip Pain
                                    <input id="hip_pain" checked="" type="radio" name="physiotherapist_for" value="Hip Pain" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="others" class="switchery">Others
                                    <input id="others" checked="" type="radio" name="physiotherapist_for" value="Others" class="" ng-model="formParams.physiotherapist_for" required ng-class="{'input-error': formValidation && multiStepForm.physiotherapist_for.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.physiotherapist_for.$error.required">
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
          <div class="">
              <div class="question_body">
                  <h2>Select the preferred gender of the physiotherapist?</h2>
                          <div class="form-group">
                                <label for="preferred_gender_flexible" class="switchery">I'm Flexible
                                    <input id="preferred_gender_flexible" checked="" type="radio" name="preferred_gender" value="I'm Flexible" class="" ng-model="formParams.preferred_gender" required ng-class="{'input-error': formValidation && multiStepForm.preferred_gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="preferred_gender_female" class="switchery">Female Physiotherapist
                                    <input id="preferred_gender_female" checked="" type="radio" name="preferred_gender" value="Female Physiotherapist" class="" ng-model="formParams.preferred_gender" required ng-class="{'input-error': formValidation && multiStepForm.preferred_gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="preferred_gender_male" class="switchery">Male Physiotherapist
                                    <input id="preferred_gender_male" checked="" type="radio" name="preferred_gender" value="Male Physiotherapist" class="" ng-model="formParams.preferred_gender" required ng-class="{'input-error': formValidation && multiStepForm.preferred_gender.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.preferred_gender.$error.required">
                        <ul>
                          <li ng-show="multiStepForm.$invalid">Select an option to continue</li>
                          <li ng-show="multiStepForm.$valid"></li>
                        </ul>
                    </div>
                </div>
                    <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage2')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage4')">Next</button>
                    </div>
          </div>
        </div>
        
        <div class="animate-switch1" ng-switch-when="stage4">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class="">
              <div class="question_body">
                  <h2>Age of patient:</h2>
                          <div class="form-group">
                                <label for="Less_than_18_years" class="switchery">Less than 18 years
                                    <input id="Less_than_18_years" checked="" type="radio" name="patient_age" value="Less than 18 years" class="" ng-model="formParams.patient_age" required ng-class="{'input-error': formValidation && multiStepForm.patient_age.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="age_18_24_years" class="switchery">18 - 24 years
                                    <input id="age_18_24_years" checked="" type="radio" name="patient_age" value="18 - 24 years" class="" ng-model="formParams.patient_age" required ng-class="{'input-error': formValidation && multiStepForm.patient_age.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="age_25_30_years" class="switchery">25-30 years
                                    <input id="age_25_30_years" checked="" type="radio" name="patient_age" value="25-30 years" class="" ng-model="formParams.patient_age" required ng-class="{'input-error': formValidation && multiStepForm.patient_age.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="age_31_40_years" class="switchery">31-40 years
                                    <input id="age_31_40_years" checked="" type="radio" name="patient_age" value="31-40 years" class="" ng-model="formParams.patient_age" required ng-class="{'input-error': formValidation && multiStepForm.patient_age.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="age_41_50_years" class="switchery">41- 50 years
                                    <input id="age_41_50_years" checked="" type="radio" name="patient_age" value="41- 50 years" class="" ng-model="formParams.patient_age" required ng-class="{'input-error': formValidation && multiStepForm.patient_age.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                            <div class="form-group">
                                <label for="more_than_50_years" class="switchery">More than 50 years
                                    <input id="more_than_50_years" checked="" type="radio" name="patient_age" value="More than 50 years" class="" ng-model="formParams.patient_age" required ng-class="{'input-error': formValidation && multiStepForm.patient_age.$error.required}">
                                    <span  class="checkmark "></span>
                                </label>
                            </div>
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.patient_age.$error.required">
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
            <div class="">
              <div class="question_body">
                            <h2>UrbanClap Advantage</h2>
                            <div class="form-group">
                                <h3 class="switchery sub-heading" ><i class="fa fa-check" aria-hidden="true" style="color: #3c763d;"></i> INR 499 per session</h3>
                                <p class="prefpack_p">No overcharging.Standardized pricing for all types of issues.</p>
                                <h3 class="switchery sub-heading" ><i class="fa fa-check" aria-hidden="true" style="color: #3c763d;"></i> Highly Experienced Doctors</h3>
                                <p class="prefpack_p">All Doctors on UrbanClap, hold BPT or MPT degrees with 3-15 years’ experience.</p>
                                <h3 class="switchery sub-heading" ><i class="fa fa-check" aria-hidden="true" style="color: #3c763d;"></i> Convenience at your Doorstep!</h3>
                                <p class="prefpack_p">Doctors carry all medical equipments to your home to provide you the best care.</p>
                            </div>
                        <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.trainee_age.$error.required">
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
          <div class="">
              <div class="question_body">
                  <h2>Where do you require the service?</h2>
                          <div class="form-group">
                                <input id="house_flat_no" type="text" placeholder="House/Flat No." name="house_flat_no" value="Basic" class="form-control" ng-model="formParams.house_flat_no" required ng-class="{'input-error': formValidation && multiStepForm.house_flat_no.$error.required}">
                            </div>
                            <div class="form-group">
                                <input type="text" gm-places-autocomplete ng-model="formParams.autocomplete" ng-value="formParams.address" placeholder="Enter location" name="autocomplete" class="form-control input-text map-autocomplete" required id="autocomplete_locality" ng-class="{'input-error': formValidation && multiStepForm.autocomplete.$error.required}" >
                                <button class="locate-me btn btn-primary" ng-model="formParams.gps_location" ng-click="getCurrentLocation()"><span class="lnr icon-map-marker"></span> Locate Me</button>
                                <input type="hidden" ng-model="formParams.address" name="address" class="form-control input-text" required >
                            </div>
                            <div class="form-group">
                                <span>E.g. 921 5th Main, Sector 7,HSR Layout, Bengaluru</span>
                            </div>
                            <div class="form-group">
                                <input id="landmark" type="text" placeholder="Landmark" name="landmark" value="Basic" class=" form-control" ng-model="formParams.landmark" required ng-class="{'input-error': formValidation && multiStepForm.landmark.$error.required}">
                            </div>
                            
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && (multiStepForm.autocomplete.$error.required || multiStepForm.address.$error.required || multiStepForm.landmark.$error.required || multiStepForm.house_flat_no.$error.required)">
                        <ul>
                          <li ng-show="multiStepForm.autocomplete.$error.required">Locality is mandatory.</li>
                          <li ng-show="multiStepForm.address.$error.required">Locality is mandatory.</li>
                          <li ng-show="multiStepForm.house_flat_no.$error.required">Enter an House/Flat No.</li>
                          <li ng-show="multiStepForm.landmark.$error.required">Enter a Landmark</li>
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
          <div class="">
              <div class="question_body getin_touch">
                  <h2>Let the best trainers get in touch with me via phone/whatsapp?</h2>
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
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage6')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="next('stage8')">Next</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage8">
          <div class="">
              <?php
                if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
                <?php } ?>
              <div class="question_body">
                  <div  class="clearfix col">
                      <h2 class="text-center">Date and time of the service?</h2>
                        <ul id="schedulerDateSlot" class="scheduledate_ul clearfix">
                            <li class="scheduledate_li" ng-repeat="day in days">
                                <div ng-click="change_date($index)" class="scheduledate_div" ng-class="{scheduledate_li_active : active_date == $index}"><p data-index="{{$index}}" class="scheduledate_p">{{day.day}}</p><p data-index="{{$index}}" class="scheduledate_pp">{{day.date}}</p></div>
                            </li>
                        </ul>
                    </div>
                    <br>
                    <div  class="clearfix col">
                        <h2 class="text-center">Select time</h2>
                        <ul id="schedulerTimeSlot" class="scheduletime_ul clearfix">
                            <li class="scheduletime_li" ng-repeat="timing in days[active_date].timings">
                                <div ng-click="change_timing($index)" class="scheduledate_div" ng-class="{scheduletime_li_active : active_time == $index}"><p data-index="{{$index}}">{{timing}}</p></div>
                            </li>
                        </ul>
                    </div>
                    <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = formValidation && multiStepForm.how_soon_start.$error.required">
                        <ul>
                          <li ng-show="multiStepForm.$invalid">Select an option to continue</li>
                          <li ng-show="multiStepForm.$valid"></li>
                        </ul>
                    </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="back('stage7')">Back</button>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-right" ng-click="submitAfterLogin('stage9')">Next</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage9">
            <?php
                    if(isset($check_slug)){ ?>
                    <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class=" ">
              <h2>One last step:</h2>
              <div class="question_body">
                        <div class="form-group mobile-number">
                            <label class="country-code">+91</label>
                            <input type="text" ng-model="formParams.mobile" ng-minlength="10" ng-maxlength="10" placeholder="Mobile Number" name="mobile" class="form-control mobile" required ng-pattern="phoneNumbr" id="mobile" ng-class="{'input-error': formValidation && multiStepForm.mobile.$error.required && multiStepForm.mobile.$error.minlength && multiStepForm.mobile.$error.maxlength && multiStepForm.mobile.$error.pattern}" >
                        </div>
                        <div class="form-group ">
                            <button type="button" class="btn btn-primary btn-3 btn-3d full-width" ng-click="validateMobile()" >Login/Signup</button>
                        </div>
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
                    <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left pull-left" ng-click="back('stage8')">Back</button>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="stage10">
            <?php
                if(isset($check_slug)){ ?>
                <h2 class="kw-section-title "><?php echo $check_slug[0]['title']; ?></h2>
            <?php } ?>
          <div class=" ">
              <h2>One last step:</h2>
              <div class="question_body">
                    <div class="form-group ">
                        <input type="text" readonly="true" ng-model="formParams.mobileReadonly" name="mobileReadonly" class="form-control disabled" ng-value="formParams.mobile" >
                        <button class="locate-me edit-btn btn btn-primary" ng-model="formParams.edit_mobile" ng-click="back('stage9')">Edit</button>
                    </div>
                    <div class="form-group ">
                        <input type="text" maxlength="6" ng-model="formParams.otp" placeholder="Enter 4 Digits OTP" name="otp" class="form-control" required id="otp" ng-class="{'input-error': formValidation && multiStepForm.otp.$error.required }" >
                    </div>
                    <div class="form-group ">
                        <button type="button" ng-hide="pageLoader" class="btn btn-primary btn-3 btn-3d full-width" ng-click="validateOTP()" >Verify & Login</button>
                    </div>
                    
                        <div class="pageLoader" ng-show="pageLoader"><img src="<?php echo base_url(); ?>assets/images/spinner.gif" alt="spinner" title="spinner" /></div>
                        
                        <div class="row error alert alert-danger" ng-show="toggleFormErrorsView = (formValidation && (multiStepForm.otp.$error.required || (otp != formParams.otp)))">
                            <ul>
                              <li ng-show="multiStepForm.otp.$error.required">Enter the OTP</li>
                              <li ng-show="(otp != formParams.otp)">Wrong OTP</li>
                            </ul>
                        </div>
                </div>
                <div class="question_footer">
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left pull-left" ng-click="back('stage8')">Back</button>
                </div>
            </div>
        </div>
        
        <div class="animate-switch1" ng-switch-when="success">
            <div class=" ">
                <div class="question_body">
                      <div class="success-wrap">
                          <h2 class="kw-section-title ">Thank you</h2>
                        <p class="alert alert-success font-weight-bold">Your booking has been submitted successfully</p>
                        <p class="font-weight-bold">Request sent to instructors.<br>1 to 3 interested instructors will respond in 24 hours with their profiles & prices</p>
                        <a href="<?php echo base_url(); ?>" class="btn btn-primary btn-3 btn-3d ">Book a service</a>
                        <a href="<?php echo base_url(); ?>my_bookings" class="btn btn-primary btn-3 btn-3d ">My Booking</a>
                      </div>
                </div>
            </div>
        </div>
        <div class="animate-switch1" ng-switch-when="error">
            <div class="row">
                <div class="question_body">
                      <div class="success-wrap">
                        <h2 class="confirmation-text">Failed</h2>
                        <p>There was an error when attempting to submit your request.<br>Please try again later.</p>
                        <div class="alert alert-danger" ng-bind-html="QueryError"><strong>{{ QueryError }}</strong></div>
                        <button type="button" class="btn btn-primary btn-3 btn-3d lnr icon-arrow-left" ng-click="reset()">Try again</button>
                      </div>
                </div>
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
<script>
(function(){
'use strict';
appBusyToEasy.controller('QuestionsCtrl', ['$scope', '$http', function($scope, $http) {
    $scope.formParams = {};
    $scope.mainformParams = {};
    $scope.QueryError = '';
    $scope.stage = "";
    $scope.formValidation = false;
    $scope.pageLoader = false;
    $scope.responceGPSError = false;
    $scope.toggleFormErrorsView = false;
    $scope.phoneNumbr = /^\d{3}[- ]?\d{3}[- ]?\d{4}$/;
    $scope.otp = "";
    $scope.formParams.address = "";
    $scope.userSigned = <?php if($this->session->userdata('logged_in')){ echo 1; }else{ echo 0; } ?>;
    $scope.user_id = "<?php if($this->session->userdata('logged_in') && $this->session->userdata('logged_in')['id']){ echo $this->session->userdata('logged_in')['id']; }else{ echo 0; } ?>";
    $scope.cat_id = "<?php if(isset($check_slug) and isset($check_slug[0]['id'])){ echo $check_slug[0]['id']; } ?>";
    $scope.email = "<?php if($this->session->userdata('logged_in') && $this->session->userdata('logged_in')['email']){ echo $this->session->userdata('logged_in')['email']; }else{ echo 0; } ?>";
    $scope.mobile = "<?php if($this->session->userdata('logged_in') && $this->session->userdata('logged_in')['mobile']){ echo $this->session->userdata('logged_in')['mobile']; }else{ echo 0; } ?>";
    $scope.formParams.map_latitude = "";
    $scope.formParams.map_longitude = "";
    
    $scope.days = [];
    $scope.start_time = 7;//in hours
    $scope.end_time = 20;//in hours
    $scope.grace_time = 6;//in hours
    $scope.interval_time = 1;//in hours
    <?php
    for($i=0;$i<7;$i++){
        $start_time = 7;
        $end_time = 20;
        $grace_time = 6;
        $interval_time = 1;
        $temp = strtotime("+".$i." day");
        $day = date('D', $temp);
        $date = date('d', $temp);
        $full_date = date('Y-m-d', $temp);
        $timings = [];
        if($i=== 0){
            $today = true;
            $day = "Today";
            $hour = date('H', $temp);
            if($hour + $grace_time < $end_time){
                for($j=($hour + $grace_time);$j<$end_time;$j=$j+$interval_time){
                    if($j < 12){
                        $timing = $j.":00 - ".($j + 1) .":00 AM";
                        $timings[] = $timing;
                    }else{
                        $pm = ($j % 12);
                        $timing = $pm.":00 - ".($pm + 1) .":00 PM";
                        $timings[] = $timing;
                    }
                }
            }else{
                continue;
            }
        }else{
            $today = false;
            for($j=$start_time;$j<$end_time;$j=$j+$interval_time){
                    if($j < 12){
                        $timing = $j.":00 - ".($j + 1) .":00 AM";
                        $timings[] = $timing;
                    }else{
                        $pm = ($j % 12);
                        $timing = $pm.":00 - ".($pm + 1) .":00 PM";
                        $timings[] = $timing;
                    }
                }
        }//TOday
        if($i=== 1){$day = "Tomorrow";}//Tomorrow
    ?>
    var temp = {"day": "<?php echo $day; ?>", "date": "<?php echo $date; ?>","full_date": "<?php echo $full_date; ?>","today": "<?php echo $today; ?>","timings": <?php echo json_encode($timings); ?>};
    $scope.days.push(temp);
    <?php } ?>
    $scope.active_date = 0;//First Array in days
    $scope.active_time = 0;//First Array in Timings
    
    $scope.change_date = function(index) {
        $scope.active_date = index;//in hours
        $scope.active_time = 0;
    };
    
    $scope.change_timing = function(index) {
        $scope.active_time = index;//in hours
    };
  
  $scope.getCurrentLocation = function() {
      $scope.pageLoader = true;
      $scope.responceGPSError = false;
      $scope.GpsError = '';
      var address ='';
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function (position) {
            //var address = position.coords.getPlace().formatted_address;
                $scope.formParams.map_latitude = position.coords.latitude;
                $scope.formParams.map_longitude = position.coords.longitude;
            
                var geocoder = new google.maps.Geocoder();
                var latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
                geocoder.geocode({ 'latLng': latlng }, function (results, status) {
                    if (status == google.maps.GeocoderStatus.OK) {
                        if (results[1]) {
                            address = results[1].formatted_address;
                            $scope.formParams.autocomplete = address;
                            $scope.formParams.address = address;
                            $scope.pageLoader = false;
                            $scope.$digest();
                        }else {
                            address = 'Location not found';
                            $scope.pageLoader = false;
                            $scope.$digest();
                        }
                    }else {
                            address = 'Geocoder failed due to: ' + status;
                            $scope.pageLoader = false;
                            $scope.$digest();
                    }
                });
            },function(error) {
                $scope.pageLoader = false;
                $scope.responceGPSError = true;
                $scope.GpsError = error.message;
                $scope.$digest();
            });
            
        }else{
                $scope.pageLoader = false;
                $scope.responceGPSError = true;
                $scope.GpsError = "Broswer doesnot support GPS location";
                $scope.$digest();
        }
    };
  
  //Navigation functions
  $scope.openQuestionModal = function () {
    $scope.formValidation = true;
    if ($scope.MainMultiStepForm.$valid){
      $scope.formValidation = false;
      $scope.formParams.gender = $scope.mainformParams.gender;
      $('#question_detailsModal').modal('show');
    }
  };
  
    $scope.$on('gmPlacesAutocomplete::placeChanged', function(){
      $scope.responceGPSError = false;
      $scope.GpsError = '';
      var location = $scope.formParams.autocomplete.getPlace().geometry.location;
      var address = $scope.formParams.autocomplete.getPlace().formatted_address;
      $scope.formParams.map_latitude = location.lat();
      $scope.formParams.map_longitude = location.lng();
      $scope.formParams.autocomplete = address;
      $scope.formParams.address = address;
      $scope.$digest();
    });
  
  $scope.next = function (stage) {
    $scope.formValidation = true;
    if ($scope.multiStepForm.$valid){
      $scope.direction = 1;
      $scope.stage = stage;
      $scope.formValidation = false;
    }
  };
  
  //Navigation functions
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
  
  //sendSMS functions
  $scope.validateMobile = function () {
    $scope.formValidation = true;
    if($scope.multiStepForm.mobile.$error.required || $scope.multiStepForm.mobile.$error.minlength || $scope.multiStepForm.mobile.$error.maxlength || $scope.multiStepForm.mobile.$error.pattern){
        $scope.formValidation = true;
    }else{
        $scope.formValidation = false;
        $scope.otp = Math.floor((Math.random() * 899999) + 100000);
        alert("Your OTP is: "+$scope.otp);
        var message = "Your OTP is: "+$scope.otp+"\n\n Use the above One Time Password to verify your identity on UrbanClap.";
        //$scope.sendSMS($scope.formParams.mobile,message);
        $scope.formParams.mobileReadonly = "+91 " + $scope.formParams.mobile;
        $scope.stage = 'stage10';
    }
  };
  
  //validate OTP functions
  $scope.validateOTP = function () {
    $scope.formValidation = true;
    if($scope.otp == $scope.formParams.otp){
        $scope.formValidation = false;
        //Login and Submit
        $scope.formParams.cat_id = $scope.cat_id;
        $scope.formParams.user_id = $scope.user_id;
        $scope.SubmitWithLogin($scope.formParams);
    }else{
        $scope.formValidation = true;
    }
  };

  $scope.back = function (stage) {
    $scope.direction = 0;
    $scope.stage = stage;
  };
  
  //submit After Login.
  $scope.submitAfterLogin = function (stage) {
    $scope.formValidation = true;
    if ($scope.multiStepForm.$valid){
        if($scope.user_id && $scope.mobile && $scope.mobile != '' && $scope.mobile != 0){
            $scope.formValidation = false;
            $scope.formParams.cat_id = $scope.cat_id;
            $scope.formParams.user_id = $scope.user_id;
            $scope.formParams.mobile = $scope.mobile;
            $scope.formParams.email = $scope.email;
            $scope.SubmitWithLogin($scope.formParams);
        }else{
            $scope.formValidation = false;
            $scope.stage = stage;
        }
    }
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
            //$scope.stage = "success";
        }else{
          if (response && response.data && response.data.status && response.data.status === 'error') {
            //$scope.stage = "error";
          }
        }
      }, function errorCallback(response) {
        $scope.stage = "error";
        console.log(response);
      });
  };
  
  // Post to desired exposed web service.
  $scope.SubmitWithLogin = function (datas) {
    $scope.pageLoader = true;
    $scope.QueryError = '';
    datas['date'] = $scope.days[$scope.active_date].full_date;
    datas['time'] = $scope.days[$scope.active_date].timings[$scope.active_time];
    console.log(datas);
    var wsUrl = "<?php echo base_url(); ?>submit_physiotherapy_at_home";
      $http({
        method: "POST",
        data: datas,
        url: wsUrl
      }).then(function successCallback(response) {
          console.log(response);
        if (response && response.data && response.data.status && response.data.status === 'success') {
            $scope.stage = "success";
            $scope.pageLoader = false;
            $scope.formParams = {};
        }else{
          if (response && response.data && response.data.status && response.data.status === 'error') {
              $scope.stage = "error";
              $scope.QueryError = response.data.message;
              $scope.pageLoader = false;
          }
        }
      }, function errorCallback(response) {
        console.log(response);
        $scope.pageLoader = false;
      });
  };
  
  $scope.reset = function() {
    // Clean up scope before destorying
    $scope.formParams = {};
    $scope.stage = "stage1";
    $scope.pageLoader = false;
  }
}]);
})();
</script>
</body>
</html>