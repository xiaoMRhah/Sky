<!DOCTYPE html>
<html ng-app="test">
<head>
	<title>Simple app</title>
	<script src= "/sky/lib/angular/angular.min.js"></script>
</head>
<body>
	<div ng-controller="timeController">
		<h1>Hello <span ng-bind="clock.now"></span>!</h1>
	</div>
	
	<div ng-controller="FirstController">
	<h4>The simplest adding machine ever</h4>
	<button ng-click="add(1)" class="button">Add</button>
	<button ng-click="subtract(1)" class="button alert">Subtract</button>
	<h4>Current count:<span ng-bind="counter"></span></h4>
	</div>
<script type="text/javascript">
function timeController($scope,$timeout){
	$scope.clock={
		now:new Date()
	};
	var updateClock=function(){
		$scope.clock.now=new Date()
	};
	setInterval(function(){
		$scope.$apply(updateClock);
	},1000);
	
	
updateClock();
};
	var app=angular.module('test',[]);
	app.controller('FirstController',function($scope){
		$scope.counter=0;
		setInterval(function(){
			$scope.counter+=1;
			},1000);
		$scope.add=function(amount){$scope.counter+=amount;};
		$scope.subtract=function(amount){$scope.counter-=amount;};
	});
</script>
</body>
</html>