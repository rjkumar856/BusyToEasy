</div></div>
<section class="kw-page-content cat-container MyBookings" ng-controller="MyBookings" ng-cloak>
<main>
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
            <div class="row">
                <h1 class="kw-section-title pull-left">My Bookings</h1>
            </div>
            
            <div class="row" ng-switch on="tabs">
                <div class="tabbed">
                        <ul class="tabs">
                          <li class="tab" ng-class="{'active': (tabs != 'history') }"><button class="btn btn-primary" ng-click="changeTabs('recent')">On Going</button></li>
                          <li class="tab" ng-class="{'active': (tabs == 'history') }"><button class="btn btn-primary" ng-click="changeTabs('history')">History</button></li>
                        </ul>
                </div>
                <div class="tabs-content" ng-switch-default>
                    <div class="orders row" infinite-scroll='loadMoreOngoing()' infinite-scroll-disabled='reddit.busyOnGoing' infinite-scroll-distance='1' >
                         <div class="col-xs-12 col-sm-6 col-md-4" ng-repeat='item in Ongoingitems'>
                            <div class="order-list ">
                                <div class="order-box">
                                    <h2>{{ item.title + count }}</h2>
                                    <span class="date">{{ item.order_date | date:"longDate" }}</span>
                                    <span class="status {{ item.orderStatus }}">{{ item.orderStatus }}</span>
                                    <div class="order-inner">
                                        <p>{{ item.description }}</p>
                                    </div>
                                    <div class="clearfix full-width"><button type="button" class="btn btn-primary btn-3 btn-3d full-width" data-toggle="modal" data-target="#view_details_history{{ $index }}">View Details</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="pageLoader" ng-show='reddit.busyOnGoing'><img src="<?php echo base_url(); ?>assets/images/spinner.gif" alt="spinner" title="spinner" /></div>
                    </div>
            </div>
            <div class="tabs-content" ng-switch-when="history">
                    <div class="orders row" infinite-scroll='loadMore()' infinite-scroll-disabled='reddit.busy' infinite-scroll-distance='1' >
                         <div class="col-xs-12 col-sm-6 col-md-4" ng-repeat='item in items'>
                            <div class="order-list">
                                <div class="order-box">
                                    <h2>{{ item.title }}</h2>
                                    <span class="date">{{ item.order_date | date:"longDate" }}</span>
                                    <span class="status {{ item.orderStatus }}">{{ item.orderStatus }}</span>
                                    <div class="order-inner">
                                        <p>{{ item.description }}</p>
                                    </div>
                                    <div class="clearfix full-width"><button type="button" class="btn btn-primary btn-3 btn-3d full-width" data-toggle="modal" data-target="#view_edit_user_popup{{$index}}">View Details</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="pageLoader" ng-show='reddit.busy'><img src="<?php echo base_url(); ?>assets/images/spinner.gif" alt="spinner" title="spinner" /></div>
                    </div>
            </div>
                
            </div>
        </div>
    </div>
  </div>
</main>

<div ng-switch on="tabs">
    <div class="modal-container recent" ng-switch-default>
        <div ng-repeat='item in Ongoingitems'>
                <div class="arcticmodal-container modal fade register" id="view_details_history{{$index}}" role="dialog" aria-hidden="true">
                       <div class="arcticmodal-container_i modal-dialog">
                            <div class="arcticmodal-container_i2">
                                <div class="kw-modal kw-login-modal">
                                    <button type="button" data-dismiss="modal" class="arcticmodal-close kw-modal-close"></button>
                                      <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
                                    <header class="kw-modal-header"><h2>{{ item.title }}</h2>
                                        <span class="date">{{ item.order_date | date:"longDate" }}</span>
                                        <span class="status {{ item.orderStatus }}">{{ item.orderStatus }}</span>
                                    </header>
                                      <!-- - - - - - - - - - - - - - End of Header - - - - - - - - - - - - - - - - -->
                                      <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
                                    <div class="kw-modal-content">
                                        <div class="questions-container" ng-bind-html="item.questions">{{ item.questions }}</div>
                                    </div>
                                      <!-- - - - - - - - - - - - - - End of Content - - - - - - - - - - - - - - - - -->
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </div>

    <div class="modal-container history" ng-switch-when="history">
        <div ng-repeat='item in items'>
                <div class="arcticmodal-container modal fade register" id="view_edit_user_popup{{$index}}" role="dialog" aria-hidden="true">
                       <div class="arcticmodal-container_i modal-dialog">
                            <div class="arcticmodal-container_i2">
                                <div class="kw-modal kw-login-modal">
                                    <button type="button" data-dismiss="modal" class="arcticmodal-close kw-modal-close"></button>
                                      <!-- - - - - - - - - - - - - - Header - - - - - - - - - - - - - - - - -->
                                    <header class="kw-modal-header"><h2>{{ item.title }}</h2>
                                        <span class="date">{{ item.order_date | date:"longDate" }}</span>
                                        <span class="status {{ item.orderStatus }}">{{ item.orderStatus }}</span>
                                    </header>
                                      <!-- - - - - - - - - - - - - - End of Header - - - - - - - - - - - - - - - - -->
                                      <!-- - - - - - - - - - - - - - Content - - - - - - - - - - - - - - - - -->
                                    <div class="kw-modal-content">
                                        <div class="questions-container" ng-bind-html="item.questions">{{ item.questions }}</div>
                                    </div>
                                      <!-- - - - - - - - - - - - - - End of Content - - - - - - - - - - - - - - - - -->
                                </div>
                            </div>
                        </div>
                </div>
        </div>
    </div>
</div>
</section>
<?php
$this->load->view('common/footer');
?>
<script src="<?php echo base_url(); ?>assets/js/angular/ng-infinite-scroll.js"></script>
<script>
(function(){
'use strict';
var BusyToEasy = angular.module('BusyToEasy', ['ngAnimate','ngSanitize','infinite-scroll'])
.controller('MyBookings', ['Database','$scope','Reddit',function(Database,$scope,Reddit) {
  $scope.tabs = "";
  $scope.items = [];
  $scope.Ongoingitems = [];
  $scope.itemsCount = 0;
  $scope.OngoingitemsCount = 0;
  $scope.loadmore = true;
  $scope.Ongoingloadmore = true;
  $scope.reddit = new Reddit();

    $scope.changeTabs = function (tab){
        $scope.tabs = tab;
    };
    
    $scope.isJson = function (str){
        try {
            JSON.parse(str);
        } catch (e) {
            return false;
        }
        return true;
    };
    
    $scope.loadMore = function (){
        if($scope.loadmore){
            $scope.loadmore = false;
            $scope.reddit.busy = true;
        Database.my_bookingsAjax($scope.itemsCount)
            .then(function (response){
                console.log(response);
                $scope.reddit.busy = false;
                if (response && response.data && response.data.status && response.data.status === 'success') {
                        $scope.itemsCount = $scope.itemsCount + 1;
                        console.log(response.data.items);
                        
                        if(response.data.message == "Items Available"){
                            $scope.loadmore = true;
                        }else{
                            $scope.loadmore = false;
                        }
                        var items = response.data.items;
                        angular.forEach(items, function(value, key) {
                            
                            var questions_details = JSON.parse(value.questions);
                            var questions = '';
                            angular.forEach(questions_details, function(subvalue, subkey) {
                                if(angular.isArray(subvalue) || angular.isObject(subvalue)){
                                    questions += "<div class='questions'><p><b>"+subkey+"</b></p>";
                                    angular.forEach(subvalue, function(innervalue, innerkey) {
                                            questions += "<p>"+innerkey+"</p>";
                                    });
                                    questions += "</div>";
                                }else{
                                    questions += "<div class='questions'><p><b>"+subkey+"</b></p>"+"<p>"+subvalue+"</p></div>";
                                }
                            });
                            
                            value.questions = questions;
                            $scope.items.push(value);
                        });
                        
                        //$scope.items.push(response.data.items);
                        $scope.loginError = response.data.message;
                        $scope.responceError = false;
                        $scope.responceSucces = true;
                }else{
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
                $scope.loadmore = true;
                $scope.reddit.busy = false;
                console.log(error);
                $scope.loginError = "Error occured: "+ error.message;
                $scope.responceError = true;
                $scope.responceSucces = false;
                $scope.pageLoader = false;
            });
        }
    };
    
    $scope.loadMoreOngoing = function (){
        if($scope.Ongoingloadmore){
            $scope.Ongoingloadmore = false;
            $scope.reddit.busyOnGoing = true;
        Database.my_OngoingbookingsAjax($scope.OngoingitemsCount)
            .then(function (response){
                console.log(response);
                $scope.reddit.busyOnGoing = false;
                if (response && response.data && response.data.status && response.data.status === 'success') {
                        $scope.OngoingitemsCount = $scope.OngoingitemsCount + 1;
                        console.log(response.data.items);
                        
                        if(response.data.message == "Items Available"){
                            $scope.Ongoingloadmore = true;
                        }else{
                            $scope.Ongoingloadmore = false;
                        }
                        var items = response.data.items;
                        angular.forEach(items, function(value, key) {
                            var questions_details = JSON.parse(value.questions);
                            var questions = '';
                            angular.forEach(questions_details, function(subvalue, subkey) {
                                if(angular.isArray(subvalue) || angular.isObject(subvalue)){
                                    questions += "<div class='questions'><p><b>"+subkey+"</b></p>";
                                    angular.forEach(subvalue, function(innervalue, innerkey) {
                                            questions += "<p>"+innerkey+"</p>";
                                    });
                                    questions += "</div>";
                                }else{
                                    questions += "<div class='questions'><p><b>"+subkey+"</b></p>"+"<p>"+subvalue+"</p></div>";
                                }
                            });
                            
                            value.questions = questions;
                            $scope.Ongoingitems.push(value);
                        });
                        
                        //$scope.items.push(response.data.items);
                        $scope.loginError = response.data.message;
                        $scope.responceError = false;
                        $scope.responceSucces = true;
                }else{
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
                $scope.Ongoingloadmore = true;
                $scope.reddit.busyOnGoing = false;
                console.log(error);
                $scope.loginError = "Error occured: "+ error.message;
                $scope.responceError = true;
                $scope.responceSucces = false;
                $scope.pageLoader = false;
            });
        }
    };
}]);

// Reddit constructor function to encapsulate HTTP and pagination logic
BusyToEasy.factory('Reddit', function($http) {
  var Reddit = function() {
    this.items = [];
    this.busy = false;
    this.busyOnGoing = false;
    this.after = '';
  };
  return Reddit;
});
})();
</script>
<script>
(function(){
angular.module("BusyToEasy").factory('Database',function($http,$filter){
    var Reddit = function() {
    this.items = [];
    this.busy = false;
    this.busyOnGoing = false;
    this.after = '';
  };
return {
my_bookingsAjax: function (counts) {
    var base_url = "<?php echo base_url(); ?>my_bookingsAjax";
            return $http({
                method: 'POST',
                url: base_url,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: { "counts": counts }
            });
},
my_OngoingbookingsAjax: function (counts) {
    var base_url = "<?php echo base_url(); ?>my_ongoingbookingsAjax";
            return $http({
                method: 'POST',
                url: base_url,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                data: { "counts": counts }
            });
}
 };
});
})();
</script>
</body>
</html>