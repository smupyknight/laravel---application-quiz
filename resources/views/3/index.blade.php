@extends('layout.master')
@section('pjax-content')
<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>3. <span name='app_first_name'></span> <span name='app_last_name'></span> , What is the Policy Owners Full Name?*</h1>
		</div>
	</div>
	<div class='content'>
		<div>
			<input type='text' placeholder='Type something' class='required' name='app_policyowner_name' />
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
		3/23 STEPS
	</div>
</div>
@endsection