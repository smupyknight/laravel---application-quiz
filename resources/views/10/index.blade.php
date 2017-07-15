@extends('layout.master')
@section('pjax-content')
<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>10. What is your unearned income?*</h1>
			<h3>Rental income, investment income, etc</h3>
		</div>
	</div>
	<div class='content'>
		<div>
		<input type='text' placeholder='Type something here' class='required' name='app_unearned_income'/>
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
		10/23 STEPS
	</div>
</div>
@endsection