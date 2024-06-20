<!-- <div class="index">
	<div>
		<p style="text-align: center;font-size: 60px;color: #ff5f10">
            勤怠管理システム　ARMS
        </p>
	</div>
    Body
	<div>
		<p style="text-align: center; color: #334ac4">
            Copyright &copy; 2024 Symmetrix Corporation &reg;. All Rights Reserved.
        </p>
	</div>
</div> -->

@extends('app')

@section('content')
<br><br><br>
	<div>
		<!-- <p style="text-align: center;font-size: 60px;color: #ff5f10">ARMS 勤怠</p> -->
        <p style="text-align: center;font-size: 60px;color: #ff5f10">
            勤怠管理システム　ARMS
        </p>
	</div>
	<div>

		<!-- <p style="text-align: center; color: #334ac4">Copyright (C) 2016 Symmetrix Corporation. All Rights Reserved.</p> -->
        <p style="text-align: center; color: #334ac4">
            Copyright &copy; 2024 Symmetrix Corporation &reg;. All Rights Reserved.
        </p>
	</div>
<br>
<div class="container-fluid">

	<div class="row">

	<div class="col-md-8 col-md-offset-2">
			<!--<div class="panel panel-default">-->
			<div class="">
				<div class="panel-heading"></div>
				<div class="panel-body">

					@if (count($errors) > 0)

						<div class="alert alert-danger">
							<strong>警告!</strong> 以下の問題が発生しました。<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif


					<form class="form-horizontal" role="form" method="POST" action=" {{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<div class="form-group">
							<!--
							<label class="col-md-4 control-label">メール　アドレス</label>
							-->
							<label class="col-md-4 control-label" style="width:25%"></label>
							<div class="col-md-6">
								<input type="text" placeholder="社員番号" class="form-control" name="email" value="{{ old('email') }}"maxlength="5">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label" style="width:25%"></label>
							<div class="col-md-6">
								<input type="password" placeholder="パスワード" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4" style="margin-left:25%;  display:flex; justify-content:space-between;">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> ログイン状態を保持する
									</label>
								</div>
								<div>
									<a class="btn btn-link" href="{{ url('true') }}">パスワードをお忘れの場合</a>
								</div>
							</div>
						</div>

						<div class="form-group;" >
							<div class="col-md-6 col-md-offset-4" align="right" >
								<button type="submit" class="btn btn-primary" style="margin-right:16%">ログイン</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
