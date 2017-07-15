@php 
	$states = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming')
@endphp

@extends('layout.master')
@section('pjax-content')
<div class='row item section'>
	<div class='col-md-12'>
		<div class='row title'>
			<div class='col-md-6 col-md-offset-3'>
				<h1>4. what state were you born in?*</h1>
			</div>
		</div>
		<div class='content'>
			<div class="dropdown-wrapper">
				<a class="dropdown-toggle" id="state-dropdown-button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
				<span class='selected-option required' name='app_birth_state' data-selected='false'>Select state</span><span class='glyphicon glyphicon-triangle-bottom'></span>
				</a> 
				<ul class="dropdown-menu" id="state-dropdown" aria-labelledby="state-dropdown-button">
					@foreach($states as $state)
						<li><a>{{$state}}</a></li>
					@endforeach
					<li><a><input type='text' class='other-state' value='' /></a></li>
				</ul> 
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
			4/23 STEPS
		</div>
	</div>
</div>
@endsection