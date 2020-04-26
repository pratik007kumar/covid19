@extends('layouts.auth')

@section('style')
<style>
	.loginContianer{
		background: url(../images/loginBg.png) no-repeat top left;
		background-size: cover;
		position: relative;
		padding: 10px 0 90px 0;
		height: 100%;
	    position: fixed;
	    top: 0;
	    left: 0;
	    width: 100%;
    }
    .loginlogoContainer{
		margin: 0 0 50px 0;
	    background: #fff;
	    padding: 10px;
    	border-radius: 10px 0px 10px 0px;
	}
    .loginlogoContainer img{
        width: 100%;
        height: 100%;
    }
    .loginForm{
		background: url(../images/loginFormBg.png) no-repeat top left;
		background-size: cover;
        padding: 20px 130px 30px 30px;
        /* height: 300px; */
        /* border-bottom-right-radius: 125px  ; */
        border-bottom-left-radius: 20px;
        color: #fff;
	}
	 
    </style>
@endsection
@section('content')
   <div  class="loginContianer">
        <div  class="container">
            <div  class="row">
                <div  class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div  class="loginlogoContainer">
                        <a  href="#">
                            <img  alt="logo" src="images/login-logo.png">
                        </a>
                    </div>
                </div>
            </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 ">
            {{-- <div class="panel panel-default">
                <div class="panel-heading">{{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_login')</div>
                <div class="panel-body"> --}}
                    <div class="loginForm">
                        <div class="form-group" ><h1 class="text-center"> Login </h1></div>
                    
                    
                    @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <strong>@lang('quickadmin.qa_whoops')</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
                            <br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form class="form-horizontal"
                          role="form"
                          method="POST"
                          action="{{ url('login') }}">
                        <input type="hidden"
                               name="_token"
                               value="{{ csrf_token() }}">

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.qa_email')</label>

                            <div class="col-md-6">
                                <input type="email"
                                       class="form-control"
                                       name="email"
                                       value="{{ old('email') }}">
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">@lang('quickadmin.qa_password')</label>

                            <div class="col-md-6">
                                <input type="password"
                                       class="form-control"
                                       name="password">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="{{ route('auth.password.reset') }}">@lang('quickadmin.qa_forgot_password')</a>
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <label>
                                    <input type="checkbox"
                                           name="remember"> @lang('quickadmin.qa_remember_me')
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit"
                                        class="btn btn-primary"
                                        style="margin-right: 15px;">
                                    @lang('quickadmin.qa_login')
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                {{-- </div>
            </div> --}}
        </div>
    </div> 
    </div> 



    {{-- <div  class="loginContianer">
        <div  class="container">
            <div  class="row">
                <div  class="col-lg-3 col-md-6 col-sm-12 col-12">
                    <div  class="loginlogoContainer">
                        <a  href="#">
                            <img  alt="logo" src="images/login-logo.png">
                        </a>
                    </div>
                </div>
            </div>
            <div  class="row">
                <div  class="col-lg-6 offset-lg-3 col-md-6 offset-md-6 col-sm-12 col-12">
                    <div  class="loginForm">
                        <h4 >Login</h4>
                        <form  novalidate="" class="ng-untouched ng-pristine ng-invalid">
                            <div  class="input-field">
                                <input  autocomplete="off" class="validate ng-untouched ng-pristine ng-invalid" formcontrolname="email" id="email" type="email"><label  for="email">Email Address</label><!----><!----><!----></div><div  class="input-field">
                                <input  autocomplete="new-password" class="validate ng-untouched ng-pristine ng-invalid" formcontrolname="password" id="pass" type="password"><label  for="pass">Password</label><!----><!----></div>
                                <div  class="checkboxOuter">
                                    <label >
                                        <input  class="filled-in ng-untouched ng-pristine ng-valid" formcontrolname="remember" name="remember" type="checkbox">
                                        <span >Remember Me</span>
                                    </label>
                                </div>
                                <div  class="submitOuter">
                                    <button  type="submit">Login</button>
                                </div>
                                <div  class="otherSection">
                                    <a  href="/forgot-password" routerlink="/forgot-password">Forgot Password ?</a>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div> --}}
@endsection