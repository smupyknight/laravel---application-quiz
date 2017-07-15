@extends('layout.master')
@section('pjax-content')

<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>14. Have you ever been rated or declined for life or health insurance?*</h1>
		</div>
	</div>
	<div class='content'>
		<div class='select required has-next-step'>
			<div class='option' data-active-answer='yes'>
				Yes
			</div>
			<div class='option' data-active-answer='no'>
				No
			</div>
		</div>
		<input type='hidden' name='app_applied_previously' />
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
		14/23 STEPS
	</div>
</div>

@endsection