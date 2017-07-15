@extends('layout.master')
@section('pjax-content')
<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>8. What is your job title and duties?*</h1>
		</div>
	</div>
	<div class='content'>
		<div>
		<textarea placeholder='Type as much as you want to' class='required' name='app_job_details'></textarea>
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
		8/23 STEPS
	</div>
</div>
@endsection