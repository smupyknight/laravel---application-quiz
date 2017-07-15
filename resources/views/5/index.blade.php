@extends('layout.master')
@section('pjax-content')

<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>5. <span name='app_first_name'></span> <span name='app_last_name'></span>, are you a U.S. citizen?*</h1>
		</div>
	</div>
	<div class='content'>
		<div class='select required'>
			<div class='option' data-active-answer='yes'>
				Yes, I am
			</div>
			<div class='option' data-active-answer='no'>
				No
			</div>
		</div>
		<input type='hidden' name='app_uscitizen'/>
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
		5/23 STEPS
	</div>
</div>

@endsection