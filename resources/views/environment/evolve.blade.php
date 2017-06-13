<!DOCTYPE html>
<html ng-app="myNoteApp">
<head>
<meta charset="utf-8">
<script src= "/sky/lib/angular/angular.min.js"></script>
</head>
<body>
<div ng-controller="myNoteCtrl">
<h2>我的笔记</h2>
<p><textarea ng-model="message" rows="10" cols="40"></textarea></p>

<p>
<button ng-click="save()">保存</button>
<button ng-click="clear()">清除</button>
</p>

<p>Number of characters left: <span ng-bind="left()"></span></p>
</div>
<script>
var app=angular.module("myNoteApp",[]);
app.controller("myNoteCtrl",function($scope){
	$scope.message="";
	$scope.left=function(){return 100-$scope.message.length;};
	$scope.clear=function(){$scope.message="";};
	$scope.save=function(){alert("Note Saved");};
});

</script>

</body>

</html>  