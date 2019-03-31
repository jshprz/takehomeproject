@extends('employee_maintenance.master.index')
@include('employee_maintenance.master.navbar')
@section('content')

<div class="row">
<div class="col-md-6">
 <img src="{{ asset('images/employee.png') }}" class="img-fluid" alt="Responsive image" style="background-color:transparent;">
</div>


<div class="col-md-6 d-flex justify-content-center align-self-center">

<div class="card text-center w-75">
<div class="card-header">
<b>
Login
</b>
</div>
<div class="card-body">
<div class="card-title">
<div class="card-text">
	@if(Session::has('loginMessage'))
	<center> <h5 class="text-danger">{{ Session::get('loginMessage') }}</h5> </center>
	@endif
<form action="{{ route('doLogin') }}" method="POST">
{{ csrf_field() }}
<label>Username</label>
<input type="text" class="form-control" name="username" />
<br>
<label>Password<b></label>
<input type="password" class="form-control" name="password" />
<br>
<button type="submit" class="btn btn-primary" style="width:150px">Login In</button>
</form>
</div>
</div>
</div>
</div>

</div>
</div>

@endsection