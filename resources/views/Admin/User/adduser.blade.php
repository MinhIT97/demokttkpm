@extends('Layout.backend')
@section('main')

<section class="adduser">
<div class="container">
    <div class="card">
        <article class="card-body mx-auto" style="max-width: 400px;">

            <form method="post" role="form">

                <div class="form-group input-group @if($errors->has('name')) has-error @endif">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                    </div>
                    <input name="name" class="form-control" placeholder="Full name" type="text">
                    @if($errors->has('name'))
                    <div class="help-block">{{$errors->first('name')}}</div>
                    @endif
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                    </div>
                    <input name="email" class="form-control" placeholder="Email address" type="email">
                    @if($errors->has('email'))
                    <div class="help-block">{{$errors->first('email')}}</div>
                    @endif
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-phone"></i> </span>
                    </div>

                    <input name="phone" class="form-control" placeholder="Phone number" type="text">

                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fas fa-venus-mars"></i> </span>
                    </div>
                    <div class="radio form-control">
                        <label><input type="radio" name="gender" value="0" checked>Nam</label>
                        <label><input type="radio" name="gender" value="1">Nữ</label>
                    </div>
                </div>

                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="password" class="form-control" placeholder="Create password" type="password">
                </div> <!-- form-group// -->
                <div class="form-group input-group">
                    <div class="input-group-prepend">
                        <span class="input-group-text"> <i class="fa fa-lock"></i> </span>
                    </div>
                    <input name="confirmpassword" class="form-control" placeholder="Repeat password" type="password">
                    @if($errors->has('confirmpassword'))
                    <div class="help-block">{{$errors->first('confirmpassword')}}</div>
                    @endif
                </div> <!-- form-group// -->
                @csrf
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block"> Create Account </button>
                </div> <!-- form-group// -->

            </form>
        </article>
    </div> <!-- card.// -->

</div>
</section>


<!--container end.//-->

@stop