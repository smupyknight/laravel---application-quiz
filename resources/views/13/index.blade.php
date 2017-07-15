@extends('layout.master')
@section('pjax-content')
<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>13. Enter your current life insurance information.</h1>
		</div>
	</div>
	<div class='content'>
		<div class='select current-insurance'>
			<div class='col-md-3'>
			<input type='text' placeholder='Company Name' name='app_current_ins_co' />
			</div>
			<div class='col-md-3'>
			<input type='text' placeholder='Benefit Amount' name='app_current_benefit_amt' />
			</div>
			<div class='dropdown-wrapper col-md-3'>
				<a class='dropdown-toggle' id='state-dropdown-button' data-toggle='dropdown' role='button' aria-haspopup='true' aria-expanded='true'> 
					<span class='selected-option' name='app_current_policytype' data-selected='false'>Group/Individual</span><span class='glyphicon glyphicon-triangle-bottom'></span>
				</a> 
				<ul class='dropdown-menu' id='state-dropdown' aria-labelledby='state-dropdown-button'>
					<li><a>Group</a></li>
					<li><a>Individual</a></li>
				</ul> 
			</div>
			<div class='col-md-3'>
			<input type='text' placeholder='Replacing' name='app_current_replacing' />
			</div>
		</div>

		<div class='add-element add-current-insurance'>
			<span class='glyphicon glyphicon-plus-sign'></span>
		</div>

		<div class='remove-element remove-current-insurance' style='display:none'>
			<span class='glyphicon glyphicon-minus-sign'></span>
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
		13/23 STEPS
	</div>
</div>
@endsection