@extends('layouts')

@section('contenttitle')
LOGIN
@endsection

@section('content')
<h2>Login</h2>

<form class="mt-3 col-md-6 mx-auto">
	<div class="mb-3">
		<label>Username</label>
		<input type="text" class="form-control">
	</div>

	<div class="mb-3">
		<label>Password</label>
		<input type="password" class="form-control">
	</div>

	<button class="btn btn-dark w-100">Login</button>
</form>
@endsection