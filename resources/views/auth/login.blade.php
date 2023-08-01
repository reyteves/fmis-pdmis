@extends('layouts.auth')

@section('content')
<div class="row h-100 w-100 card" style="justify-content:center;display:flex; margin-left: 10px; margin-right: 10px;" id="login-box">
    <div class="col-md-5">
        
        <div class="panel panel-default">
            <div class="login-logo" style="margin-top: 30px">
                <a href="/">
                    <img src="{{ asset('images/app/NCIP_logo150x150.png') }}" alt="{{ config('app.name', 'NCIP-HRMIS') }} Logo" class="img-circle" style="height:50px;">
                    <b>NCIP</b>PDMIS
                </a>
                
            </div>
            
            <p class="login-box-msg"><span style="font-family: Calibri, sans-serif; font-size: 17px;"><strong>Project Development Management Information System</strong></span></p>            
            {{-- <div class="panel">{{ ucfirst(config('app.name')) }} @lang('quickadmin.qa_login')</div> --}}

            <div class="panel-body card-body login-card-body">
                <p class="login-box-msg"><span style="font-family: Calibri, sans-serif; font-size: 15px;">Sign in to start your session</span></p>
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> @lang('quickadmin.qa_there_were_problems_with_input'):
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

                    
                      
                      <div class="text-center"> <!-- Wrapping div for center alignment -->
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label text-md-right">@lang('quickadmin.qa_email')</label>
                          <div class="col-md-10">
                            <input type="email"
                                   class="form-control"
                                   name="email"
                                   value="{{ old('email') }}">
                          </div>
                        </div>
                      
                        <div class="form-group row">
                          <label class="col-md-2 col-form-label text-md-right">@lang('quickadmin.qa_password')</label>
                          <div class="col-md-10">
                            <input type="password"
                                   class="form-control"
                                   name="password">
                          </div>
                        </div>
                      </div> <!-- End of wrapping div -->
                      

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            <a href="{{ route('auth.password.reset') }}">@lang('quickadmin.qa_forgot_password')</a>
                            <br>
                            <a href="{{ route('auth.register') }}">@lang('quickadmin.qa_registration')</a>
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
        </div>
    </div>
</div>
@endsection