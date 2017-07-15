@extends('layout.master')
@section('pjax-content')

<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>19.5. Your moving violation experience?*</h1>
			<h3>Dates and reasons</h3>
		</div>
	</div>
	<div class='content'>
		<div>
		<input type='text' placeholder='Type something here' class='required' name='app_violation_exp'/>
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
		19.5/23 STEPS
	</div>
</div>

@endsection