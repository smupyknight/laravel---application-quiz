@extends('layout.master')
@section('pjax-content')
<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>12. Enter the beneficiary names, relationship, and percentages.*</h1>
			<h3>Click plus button to add more beneficiaries</h3>
		</div>
	</div>
	<div class='content'>
		<div class='select beneficiary'>
			<div class='col-md-4'>
				<input type='text' placeholder='Beneficiary Name' class='required' name='app_beneficiary_name' />
			</div>
			<div class='col-md-4'>
				<input type='text' placeholder='Relationship' class='required' name='app_beneficiary_relationship' />
			</div>
			<div class='col-md-4'>
				<input type='text' placeholder='Percentage' class='required' name='app_beneficiary_percent' />
			</div>
		</div>
		
		<div class='add-element add-beneficiary'>
			<span class='glyphicon glyphicon-plus-sign'></span>
		</div>
		
		<div class='remove-element remove-beneficiary' style='display:none'>
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
		12/23 STEPS
	</div>
</div>
@endsection