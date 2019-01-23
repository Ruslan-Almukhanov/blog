@extends('layouts.admin-forms-layout')
@section('title', $title)
@section('content')
<!-- template sections -->

<section class="ls section_padding_top_100 section_padding_bottom_100 section_full_height">
    <div class="container">

        <div class="row">
            <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 to_animate">
                <div class="with_border with_padding">

                    <h4 class="text-center">
                        Sign Up New Account
                    </h4>
                    <hr class="bottommargin_30">
                    <div class="wrap-forms">
                        <form  method="POST" action="/admin/registration">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-name">Your Name</label>
                                        <i class="grey fa fa-user"></i>
                                        <input type="text" class="form-control" name="name" id="login-name" placeholder="Name" value="@if(isset($name)){{ $name }}@elseif(isset($admin)){{ $admin->name }}@endif">

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-email">Email address</label>
                                        <i class="grey fa fa-envelope-o"></i>
                                        <input type="email" class="form-control" name="email" id="login-email" placeholder="Email Address" value="@if(isset($email)){{ $email }}@elseif(isset($admin)){{ $admin->email }}@endif">

                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-password">Password</label>
                                        <i class="grey fa fa-pencil-square-o"></i>
                                        <input type="password" class="form-control" name="password" id="login-password" placeholder="Password">

                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group has-placeholder">
                                        <label for="login-password2">Retype Password</label>
                                        <i class="grey fa fa-pencil-square-o"></i>
                                        <input type="password" class="form-control" name="password_confirmation" id="login-password2" placeholder="Retype Password">

                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="checkbox">
                                        <input type="checkbox" id="remember_me_checkbox">
                                        <label for="remember_me_checkbox">Rememrber Me
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="theme_button block_button color1">Create an account</button>
                        </form>
                    </div>

                </div>
                <!-- .with_border -->

                <p class="divider_20 text-center">
                    Already registered? <a href="admin_signin.html">Log In</a>.
                </p>

            </div>
            <!-- .col-* -->
        </div>
        <!-- .row -->
    </div>
    <!-- .container -->
</section>
@endsection