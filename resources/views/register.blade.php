@extends('app')
@section('title', 'アカウント作成')
@section('content')
<script src="{{asset('js/jquery.min.js')}}"></script>
<script>
	function validateform()
	{
		if($('#userid').val()=="" || $('#userid').val()=="" || $('#password').val()=="")
		{
			$('#error').html("名、ログイン識別子、パスワードを入力してください名とパスワードを入力してください");
			return false;
		}
		else{
			$('#submit').click();
		}
	}

	function clearerror()
	{
		$('#error').html("");
	}
</script>

	<!--begin::Container-->
	<div class="container">
		<!--begin::Dashboard-->
		<!--begin::Row-->
		<div class="row">
			<div class="col-xl-12">
				<!--begin::Tiles Widget 1-->
				<div class="card card-custom gutter-b card-stretch">
					<!--begin::Header-->
					<div class="card-header border-0 pt-5">
						<div class="card-title">
						</div>
					</div>
					<!--end::Header-->
					<!--begin::Body-->
					<div class="card-body d-flex flex-column px-0"
						style="text-align: center; min-height:400px">
						<div class="row">
							<div class="col-sm-12">
								<div class="login-signin">
									<div class="mb-20">
										<h3>アカウント作成</h3>
										<!-- <div class="text-muted font-weight-bold">Enter your details to login
											to your account:</div> -->
									</div>
									
									<form method="POST" class="form" action="{{ url('/userinfocheck') }}" id="kt_login_signin_form">
										@csrf
										<div style="display: block;margin-top: 60px; padding-left: 30px;">
											<div style="display: flex;" class="row">
													<label for="name" class="col-sm-3 py-4 px-8 h-auto text-right">名前<span style="color:red">*</span></label>
													<input onclick="clearerror();" type="text" class="col-sm-4 form-control h-auto form-control-solid py-4 px-8" id="name" name="name" placeholder="name">
											</div>
											<div style="display: flex;margin-top: 20px;" class="row">
													<label for="birthday" class="col-sm-3 py-4 px-8 h-auto text-right">生年月日</label>
													<input type="date" class="col-sm-4 form-control h-auto form-control-solid py-4 px-8" id="birthday" name="birthday" placeholder="">
											</div>
											<div style="display: flex;margin-top: 20px;" class="form-group row">
													<label class="col-sm-3 py-4 px-8 text-right">性別</label>
													<div class="form-check-inline">
														<label class="radio py-4 form-check-label" for="male">
														<input type="radio" checked name="sex" id="male" class="py-4 px-8 form-check-input">
														<span></span>男</label>
													</div>
													<div class="form-check-inline">
														<label class="radio py-4 px-8 form-check-label" for="female">
														<input type="radio" name="sex" id="female" class="py-4 px-8 form-check-input">
														<span></span>女</label>
													</div>
											</div> 
											<div style="display: flex;margin-top: 20px;" class="row">
													<label for="sport" class="col-sm-3 py-4 px-8 h-auto text-right">競技</label>
													<input type="text" class="col-sm-4 form-control h-auto form-control-solid py-4 px-8" id="sport" name="sport" placeholder="sport">
											</div>
											<div style="display: flex;margin-top: 20px;" class="form-group row">
													<label class="col-sm-3 py-4 px-8 text-right">食物アレルギー</label>
													<div class="col-sm-6 py-4" style="padding: 5px 0"> 
														<div class="row form-group checkbox-inline">
																<label class="col-sm-3 checkbox" style="margin-right:0">
																	<input type="checkbox" name="shrimp">
																	<span></span>えび
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="crab" class="margin-top-6">
																	<span></span>かに
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" class="margin-top-6">
																	<span></span>小麦
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="soba" class="margin-top-6">
																	<span></span>そば
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="milk" class="margin-top-6">
																	<span></span>乳
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="egg" class="margin-top-6">
																	<span></span>卵
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="squid" class="margin-top-6">
																	<span></span>いか
																</label> 

																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="orange" class="margin-top-6">
																	<span></span>オレンジ
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="beef" class="margin-top-6">
																	<span></span>牛肉
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="salmon" class="margin-top-6">
																	<span></span>さけ
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="mackerel" class="margin-top-6">
																	<span></span>さば
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="soybeans" class="margin-top-6">
																	<span></span>大豆
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="chicken" class="margin-top-6">
																	<span></span>鶏肉
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="banana" class="margin-top-6">
																	<span></span>バナナ
																</label> 

																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="pork" class="margin-top-6">
																	<span></span>豚肉
																</label> 
																<label class="col-sm-3 checkbox" style="margin-right:0" style="display: flex;">
																	<input type="checkbox" name="peache" class="margin-top-6">
																	<span></span>もも
																</label> 
														</div>
														<div style="display: flex;margin-top: 20px;">
																<label for="refer-input" class="py-4 px-8 h-auto text-right" style="min-width: 190px;">※その他の方のみ入力</label>
																<input type="text" class="form-control h-auto form-control-solid py-4 px-8" id="refer-input" name="refer-input" placeholder="" style="width: 50%;">
														</div>
													</div>
											</div> 
											<div style="display: flex;margin-top: 20px;" class="form-group row">
													<label class="col-sm-3 py-4 px-8 text-right">ログイン情報</label>
													<input onclick="clearerror();" type="text" class="col-sm-2 form-control h-auto form-control-solid py-4 px-8" id="userid" name="userid" placeholder="ID">
													<input onclick="clearerror();" type="password" class="col-sm-2 form-control h-auto form-control-solid py-4 px-8" style="margin-left: 20px;" id="password" name="password" placeholder="PW">
											</div>
											<div style="display: block;margin-top: 50px;">
													<button type="submit" id="submit" style="display: none;"></button>
													<center><p id="error" style="color: red; padding: 20px;"></p></center>
													<a onclick="validateform();" class="btn btn-primary font-weight-bold px-9 py-4 my-3 mx-4">Next</a>
											</div> 
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!--end::Body-->
				</div>
				<!--end::Tiles Widget 1-->
			</div>
		</div>
		<!--end::Row-->
		<!--end::Dashboard-->
	</div>
	<!--end::Container-->
					
@stop