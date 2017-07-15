@extends('layout.master')
@section('pjax-content')

<div class='row item section notice'>
	<div class='row title'>
		<h1>YOU RE ALMOST THERE!</h1>
		<h3>JUST 2 MINUTES TO GO</h3>
	</div>
	<div class='content'>
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
	</div>
</div>

@endsection