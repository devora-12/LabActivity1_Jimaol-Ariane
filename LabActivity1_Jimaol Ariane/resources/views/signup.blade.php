@extends('layouts')

@section('contenttitle')
SIGNUP
@endsection

@section('content')
<h2>Signup</h2>

<form class="mt-3 col-md-6 mx-auto">
	<div class="mb-3">
		<label>User ID</label>
		<input type="text" class="form-control">
	</div>

	<div class="mb-3">
		<label>Fullname</label>
		<input type="text" class="form-control">
	</div>

	<div class="mb-3">
		<label>Username</label>
		<input type="text" class="form-control">
	</div>

	<div class="mb-3">
		<label>Password</label>
		<input type="password" class="form-control">
	</div>

	<div class="mb-3">
		<label>Confirm Password</label>
		<input type="password" class="form-control">
	</div>

	<button class="btn btn-dark w-100">Register</button>
</form>
@endsection