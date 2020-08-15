@extends('user.layouts.app')
@section('content') 
<div class="container" style="height: 100vh;">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="account_form">
                <h2>Register</h2>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <p>
                        <label>Name </label>
                        <input type="name" name="name" value="{{old('name')}}" placeholder="Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </p>
                    <label>Phone </label>
                    <input type="phone" name="phone" value="{{old('phone')}}" placeholder="Phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <p>
                    <label>Email</label>
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <p>
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <p>
                    <label>Confirm Password</label>
                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <div class="login_submit">
                    {{-- <a href="#">Lost your password?</a>
                    <label for="remember">
                        <input id="remember" type="checkbox">
                        Remember me
                    </label> --}}
                    <button type="submit">login</button>
                    
                </div>
                
            </form>
        </div>
    </div>
</div>
</div> 
@endsection