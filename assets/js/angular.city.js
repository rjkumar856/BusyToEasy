/*
 * IIFE to avoid polution of the global namespace.
 */
(function(){
    /*
     * Creating List controller and attaching it to the main turtleFacts module
     */
    angular
        .module("BusyToEasy")
        .controller("CityListCtrl", ListController);
    /*
     * Dependency injection. This allows the script to be minified and uglified
     * without breaking the code. This is acheived by passing the dependencies 
     * as strings in an array through the $inject method to the controller.
     */

    /*
     * Definition for the List controller. quizMetrics and dataService are two
     * services that are created in js/factory/quiz.js and js/factory/dataService.js
     * respectively. 
     */
    function ListController(){
        var vm = this;
        /*
         * The interface for the controller. The below code shows all the 
         * variables that are available from inside the view. References to 
         * named functions are used instead of inline anon functions. This 
         * increases readability of the code.
         *
         * The interface is at the top to provide a quick overview of what is 
         * available in the controller while the implementation remains at the 
         * bottom.
         */

        vm.changeActiveCity = changeActiveCity; // reference to a named function below
        vm.search = ""; // will hold the search query when user uses search bar in view
        vm.timer_countdown = 1;
        vm.cities = ['Bangalore','Chennai','Mumbai','Delhi','Hydrabad','Kolkata'];
        vm.timer_seconds = 0;
        vm.timer_minutes = 0;
        vm.timer_hours = 0;
        
        function changeActiveCity(index){
            // simple function to attach the data of the turtle clicked on to 
            // the active turtle object
            alert(vm.value);
            console.log(this);
            alert(index.value);
        }
    }
})();