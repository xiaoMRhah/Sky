<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<script src="/sky/lib/angular/angular.min.js"></script>
<!-- <script src="/sky/resources/assets/js/jquery-3.2.1.min.js"></script> -->
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
	<div>
		<form id="uploadForm" action="{{url('submit/')}}" method="post">
			{{csrf_field()}} <input style="display: none;" name="image"
				type="file" class="inputFile" /> <a class="user_name"
				style="color: #777">
				活动主持人：{{Auth::user()->name}}</a> 
				<br><br> 活动主题： 
				<input type="text" class="theme"> 
				<br><br> 活动时间：
				<input type="datetime-local" value="" id="startTime" style="width:167px;"/> 
				<span style="margin-left:20px;margin-right:20px;">至</span>
				<input type="datetime-local" value="" id="endTime" style="width:167px;"/>				
			
			<div class="container">
				<br> 活动封面：<button class="btn_upload">上传/修改封面</button>	
				<div class="preview-image-box">
					<div class="inside-image-box">
						<img class="uploaded-image" src="" alt="">
					</div>
					<div class="loading-shadow">
						<div class="loading-icon">
							<img src="" alt="">
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="col-md-12">
				<img
					style="max-width: 300px; max-height: 300px; margin: 0 auto; display: block;"
					ng-src="<%imageSrc%>">
			</div>
			<br>
			<div>内容简介：</div>
			<textarea rows="10" cols="40" ng-model="discription"></textarea>
			<br>
			<input type="submit"></input>
		</form>
	</div>

	<script>
	/* $(function(e){
		$("#uploadForm").on('submit',function(e){
			e.preventDefault();
			$.ajax({ 
				url:"{{url('uploads')}}",
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

 	$('#startTime').datetimepicker({
		format:'YYYY-MM-DD'
	}); */
	

	
	</script>
</body>
</html>