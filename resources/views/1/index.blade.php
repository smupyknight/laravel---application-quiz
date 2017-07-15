@php 
	$states = array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California', 'Colorado', 'Connecticut', 'Delaware', 'Florida', 'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana', 'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine', 'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi', 'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire', 'New Jersey', 'New Mexico', 'New York', 'North Carolina', 'North Dakota', 'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island', 'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah', 'Vermont', 'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming')
@endphp

@extends('layout.master')
@section('pjax-content')

<div class='row item section'>
	<div class='row title'>
		<div class='col-md-6 col-md-offset-3'>
			<h1>1. Please confirm your name and contact info*</h1>
		</div>
	</div>
	<div class='content'>
		<div class='row'>
			<div class='col-sm-6'>
				<input type='text' placeholder='First Name' class='required' name='app_first_name' value=@if(isset($params["FirstName"])) '{{ $params["FirstName"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='Last Name' class='required' name='app_last_name' value=@if(isset($params["LastName"])) '{{ $params["LastName"] }}' @else '' @endif />
			</div>
			<div class='col-sm-12'>
				<input type='text' placeholder='Address' class='required' name='app_address' value=@if(isset($params["Address"])) '{{ $params["Address"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='City' class='required' name='app_city' value=@if(isset($params["City"])) '{{ $params["City"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<div class='content no-margin-top'>
					<div class="dropdown-wrapper no-margin-top">
						<a class="dropdown-toggle" id="state-dropdown-button" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> 
						<span class='selected-option required' name='app_state' data-selected=@if(isset($params["City"])) 'true' @else 'false' @endif> @if(isset($params["City"])) {{ $params["City"] }} @else Select state @endif</span><span class='glyphicon glyphicon-triangle-bottom'></span>
						</a> 
						<ul class="dropdown-menu" id="state-dropdown" aria-labelledby="state-dropdown-button">
							@foreach($states as $state)
								<li><a>{{$state}}</a></li>
							@endforeach
							<li><a><input type='text' class='other-state' value='' /></a></li>
						</ul> 
					</div>
				</div>
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='Zipcode' class='required' name='app_zipcode' value=@if(isset($params["ZipCode"])) '{{ $params["ZipCode"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='Home Phone' class='required' name='app_home_phone' value=@if(isset($params["HomePhone"])) '{{ $params["HomePhone"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='Work Phone' class='required' name='app_work_phone' value=@if(isset($params["WorkPhone"])) '{{ $params["WorkPhone"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='Email Address' class='required' name='app_email' value=@if(isset($params["Email"])) '{{ $params["Email"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='Email Address' class='hidden' name='app_c' value=@if(isset($params["c"])) '{{ $params["c"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='Email Address' class='hidden' name='app_e' value=@if(isset($params["e"])) '{{ $params["e"] }}' @else '' @endif />
			</div>
			<div class='col-sm-6'>
				<input type='text' placeholder='Email Address' class='hidden' name='app_q' value=@if(isset($params["q"])) '{{ $params["q"] }}' @else '' @endif />
			</div>
		</div>
	</div>
	<div class='button-wrapper'>
		<a class='btn btn-primary proceed'>
			Press Enter or Click Here
			<span class='glyphicon glyphicon-ok'></span>
		</a>
	</div>
	<div class='show-step'>
		1/23 STEPS
	</div>
</div>
@endsection
