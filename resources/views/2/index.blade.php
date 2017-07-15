@extends('layout.master')
@section('pjax-content')
<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>2. <span name='app_first_name'></span> <span name='app_last_name'></span>, Please confirm quote selections*</h1>
		</div>
	</div>
	<div class='content'>
		<div class='row'>
			<div class='col-sm-6 top-margin'>
				<label> Coverage Amount </label>
				<input type='text' class='required' name='app_face_amnount' placeholde='Type something' value=@if(isset($params["FaceAmount"])) '{{ $params["FaceAmount"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6 top-margin'>
				<label> Quoted Premium </label>
				<input type='text' class='required' name='app_quoted_premium' placeholde='Type something' value=@if(isset($params["Premium"])) '{{ $params["Premium"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6 top-margin'>
				<label> Insurance Company </label>
				<input type='text' class='required' name='app_ins_company' placeholde='Type something' value=@if(isset($params["InsCompany"])) '{{ $params["InsCompany"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6 top-margin'>
				<label> Policy Term </label>
				<input type='text' class='required' name='app_term_length' placeholde='Type something' value=@if(isset($params["Term"])) '{{ $params["Term"] }}' @else '' @endif />
			</div>
		</div>
	</div>
	<div class='button-wrapper'>
		<a class='btn btn-primary back'>
			<span>Back</span>
		</a>
		<a class='btn btn-primary proceed'>
			<span>Press Enter or Click Here</span>
			<span class='glyphicon glyphicon-ok'></span>
		</a>
	</div>
	<div class='show-step'>
		2/23 STEPS
	</div>
</div>
@endsection