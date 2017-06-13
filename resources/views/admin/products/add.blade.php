<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="/sky/lib/angular/angular.min.js"></script>
<script src="/sky/resources/assets/js/jquery-3.2.1.min.js"></script>
<script src="/sky/public/js/app.js"></script>
<script src="/sky/public/js/uploadPhoto.js"></script>
<!-- <script src="/sky/resources/assets/js/bootstrap-datetimepicker.zh-cn.js"></script>
<script src="/sky/resources/assets/js/moment.js"></script> -->

<!-- <script
	src="//cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
<link
	href="//cdn.bootcss.com/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css"
	rel="stylesheet"> -->
<title>添加商品</title> 
<style type="text/css">
.preview-image-box {
	position: relative;
	width: 250px;
	height: 250px;
	border: 1px solid #d6cbcb;
	backgroud-color: #EAEAEA;
}

.inside-image-box {
	position: absolute;
	width: 250px;
	height: 250px;
}

.uploaded-image {
	position: absolute;
	width: 250px;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.loading-shadow {
	position: absolute;
	top: 0;
	left: 0;
	width: 250px;
	height: 250px;
	display: none;
	background-color: rgba(255, 255, 255, 1);
}

.loading-shadow img {
	positon: absolute;
	top: 50%;
	left: 50%;
	transform: translate(-50%, -50%);
}

.loading-shodow.active {
	display: block;
}

.js-reset-image {
	width: 250px;
	color: #264A91;
	text-algin: center;
	margin-top: 20px;
}

.js-reset-image span {
	display: none;
	cursor: pointer;
}

.js-reset-image span.on {
	display: inline;
}

.loading-icon img {
	width: 150px;
}
</style>
</head>
<body>
	<div data-ng-app="app">
		<form id="uploadForm" action="{{url('admin/submit/')}}" method="post">
			{{csrf_field()}} <input style="display: none;" name="image"
				type="file" class="inputFile" /> <a class="user_name" name="user_name"
				style="color: #777">
				活动主持人：{{Auth::user()->name}}</a> 
				<br><br> 活动主题： 
				<input type="text" class="theme" name="theme"> 
				<br><br> 活动时间：
				<input type="datetime-local" value="" class="startTime" style="width:167px;" name="startTime"/> 
				<span style="margin-left:20px;margin-right:20px;">至</span>
				<input type="datetime-local" value="" class="endTime" style="width:167px;" name="endTime"/>				
			
			<div class="container" data-ng-controller="addPhotoCtrl as ctl">
				<br> 活动封面：<input type="file" data-upload-img class="sp-upload-img"></button>	
				<div class="preview-image-box">
					<div class="inside-image-box">
						<img class="uploaded-image" src="/sky/resources/img/logo001.png" alt="" name="img">
					</div>
					<!-- <div class="loading-shadow">
						<div class="loading-icon">
							<img src="" alt="">
						</div>
					</div> -->
				</div>
			</div>
			<br>
			售价：<input type="radio" data-ng-model="model.isChecked" value="1"/>免费
				<input type="radio" data-ng-model="model.isChecked" value="0"/>收费
				<br>
			<br>
			最大参与人数：<input type="text" style="width: 68px" data-ng-model="lagMumber" name="lagMumber"><span style="margin-left: 10px">人</span>
			<div>内容简介：</div>
			<textarea rows="10" cols="40" data-ng-model="discription" name="discription"></textarea>
			<br>
			<input type="submit"></input>
		</form>
	</div>

	<script>
/* 	 $(function(e){
		$("#uploadForm").on('submit',function(e){
			e.preventDefault();
			$.ajax({ 
				url:"{{url('admin/submit/')}}",
				type:"POST",
				data:new FormData(this),
				contentType:false,
				cache:false,
				processData:false,
				beforeSend:function(){
					$('.loading-shadow').addClass('active');
					},
					success:function(data){
						$('loading-shadow').removeClass('active');
						$('.uploaded-image').attr('src','http://uploads.server/'+data.msg);
						$('.upload-text').removeClass('on');
						$('re-upload-text').addClass('on');
						},
						error:function(){}

				});
			});

		//选择完要上传的文件后，直接触发表单提交
		$('input[name=image]').on('change',function(){
			if($.trim($(this).val())){
				$("#uploadForm").trigger('submit');
				}
			});

		//触发文件选择窗口
		$('.btn_upload').on('click',function(){
			$('input[name=image]').trigger('click');
			});
		
	});	
	 */

	
	</script>
</body>
</html>