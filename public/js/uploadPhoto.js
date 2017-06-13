var app = angular.module('app', []);
app.controller("addPhotoCtrl", [ "$http", function($http) {
	var self = this;
	self.info = {
		photo1 : "",
	};

	self.print = function() {
		console.log(self.info);
	};
} ]);

app.directive("uploadImg", function() {
	return {
		restrict : 'AE',
		scope : false,
		link : function(scope, element, attrs) {
			element.bind('change', function(evt) {
				console.log("哈哈哈");
				var file = evt.target.files[0];
				if (file.size > 52428800) {
					alert("图片大小不大于50M");
					file = null;
					return false;
				}

				var fileName=file.name;
				var postfix = fileName.substring(fileName.lastIndexOf(".") + 1)
					.toLowerCase();
				if (postfix != "jpg" && postfix != "png") {
					alert("图片仅支持png、jpg类型的文件");
					fileName = "";
					file = null;
					return flase;
				}

				var fileUrl = $(this).val();
				$(this).parent().children(".uploaded-image").attr("data-url",
						fileUrl);
				var getimg = $(this).parent().children(".uploaded-image");
				if(file){
					var strHtml="";
					var filereader = new FileReader();
					
					filereader.readAsDataURL(file);
					console.log(file);
					console.log(filereader);
					filereader.onload=function(event) {
						$('.uploaded-image').attr("src", event.target.result);
						/*console.log(event.target.result);*/
						
					};
				}				
			});

		}
	}
});