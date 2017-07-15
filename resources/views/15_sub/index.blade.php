@extends('layout.master')
@section('pjax-content')

<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>15.5. What type and last date of use?*</h1>
		</div>
	</div>
	<div class='content'>
		<div class='select tobacco-exp'>
			<div class='col-md-6'>
			<input type='text' placeholder='What type of tobacco?' class='required' name='app_type_of_tobacco' />
			</div>
			<div class='col-md-6'>
			<input type='text' placeholder='Last date of use?' class='required' name='app_tobacco_date_of_use' />
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
		15.5/23 STEPS
	</div>
</div>

@endsection