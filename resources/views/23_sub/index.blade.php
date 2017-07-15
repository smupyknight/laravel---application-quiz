@extends('layout.master')
@section('pjax-content')

<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>23.5. Your foreign travel experience?*</h1>
			<h3>Locations and dates</h3>
		</div>
	</div>
	<div class='content'>
		<div>
		<textarea placeholder='Type something here' class='required' name='app_foreign_travel_exp'></textarea>
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
		23.5/23 STEPS
	</div>
</div>

@endsection