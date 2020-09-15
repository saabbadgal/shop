@extends('admin.layouts.app')
@section('content')

<div class="container">
            <div class="row vh-100 justify-content-between align-items-center">
                <div class="col-12">
                    <form action="{{route('admin.login')}} " method="post" class="row row-eq-height lockscreen  mt-5 mb-5">
                        @csrf
                        <div class="lock-image col-12 col-sm-5"></div>
                        <div class="login-form col-12 col-sm-7">
                            <div class="form-group mb-3">
                                <label for="emailaddress">Email address <span style="color: red;">@error('email')
                             ({{ $message }})
                                @enderror</span>
                            </label>

                                <input name="email" class="form-control" type="email" id="emailaddress"    placeholder="Enter your email">
                                
                            </div>
                          
                            <div class="form-group mb-3">
                                <label for="password">Password
                                    <span style="color: red;">@error('password')
                                        ({{ $message }})
                                           @enderror</span>
                                </label>
                                <input name="password" class="form-control" type="password"   id="password" placeholder="Enter your password">
                            </div>

                           {{--  <div class="form-group mb-3">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="checkbox-signin" checked="">
                                    <label class="custom-control-label" for="checkbox-signin">Remember me</label>
                                </div>
                            </div> --}}

                            <div class="form-group mb-0">
                                <button class="btn btn-primary" type="submit"> Log In </button>
                            </div> 
                            <div class="mt-2">Don't have an account? <a href="{{route('admin.register')}}">Create an Account</a></div>
                        </div>
                    </form>
                </div>

            </div>
        </div> 
@endsection