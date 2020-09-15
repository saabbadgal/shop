@extends('user.layouts.app')
@section('content') 
<div class="container" style="min-height:78vh">
    <div class="row justify-content-center">
        <div class="col-md-6">
             <div class="account_form mt-5">
                <h5 class="card-header mdb-color white-text text-center py-3 h4">
                    Create Account
                </h5>
                
                <form method="post" action="{{ route('register') }}">
                    @csrf
                    <p>
                        {{-- <label>Name </label> --}}
                        <input type="name" name="name" value="{{old('name')}}" placeholder="Name">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </p>
                    <p>
                    {{-- <label>Phone </label> --}}
                    <input type="phone" name="phone" value="{{old('phone')}}" placeholder="Phone">
                    @error('phone')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <p>
                    {{-- <label>Email</label> --}}
                    <input type="email" name="email" value="{{old('email')}}" placeholder="Email">
                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <p>
                    {{-- <label>Password</label> --}}
                    <input type="password" name="password" placeholder="Password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <p>
                    {{-- <label>Confirm Password</label> --}}
                    <input type="password" name="password_confirmation" placeholder="Confirm Password">
                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </p>
                <div class="login_submit"> 
                    <button type="submit">login</button>
                    
                </div>
                
            </form>
        </div>
    </div>
</div>
</div> 
@endsection