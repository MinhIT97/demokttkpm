@extends('Layout.backend')
@section('main')

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css">


<div class="container">
<div class="card bg-light">
<article class="card-body mx-auto" style="max-width: 400px;">

	<form method="post" role="form">

	<div class="form-group input-group @if($errors->has('name')) has-error @endif">
		<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-user"></i> </span>
		 </div>

        <input name="name" class="form-control" value="{{$users->name}}" type="text">
        @if($errors->has('name'))
        <div class="help-block">{{$errors->first('name')}}</div>
        @endif
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
		 </div>
        <input name="email" class="form-control" value="{{$users->email}}" type="email">
        @if($errors->has('email'))
        <div class="help-block">{{$errors->first('email')}}</div>
        @endif
    </div> <!-- form-group// -->
    <div class="form-group input-group">
    	<div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
		</div>

        <input name="phone" class="form-control" value="{{$users->phone}}" type="text">
     

    </div> <!-- form-group// -->
    <div class="form-group input-group">
    <div class="input-group-prepend">
		    <span class="input-group-text"> <i class="fas fa-venus-mars"></i> </span>
		</div>
        <div class="radio form-control">
        <label><input type="radio" name="gender"  value="0" checked>Nam</label>
        <label><input type="radio" name="gender"  value="1">Nữ</label>
        </div>
    </div>

   
 
    @csrf
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Create Account  </button>
    </div> <!-- form-group// -->

</form>
</article>
</div> <!-- card.// -->

</div>
<!--container end.//-->

@stop
