@extends('user.layouts.app')
@section('content')  
<div class="container" style="min-height:78vh">
    <div class="row justify-content-center">
        <div class="col-md-6">
             <div class="account_form mt-5">
                <h5 class="card-header mdb-color white-text text-center py-3 h4">
                    Login Account
                </h5>
                
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <p>   
                                <label>Email</label>
                                <input type="email" name="email" value="{{old('email') ? old('email') : ""}}" placeholder="Enter Email">
                                 @error('email')
                                    {{-- <span class="invalid-feedback"> --}}
                                        <strong style="color: red ; font-size:15px;">{{ $message }}</strong>
                                    {{-- </span> --}}
                                    @php
                                    // dd($message);
                                        
                                    @endphp
                                @enderror
                             </p>
                             <p>   
                                <label>Password</label>
                                <input type="password" name="password" placeholder="Enter Password">
                                 @error('password')
                                 <strong style="color: red ; font-size:15px;">{{ $message }}</strong>
                                @enderror
                             </p>   
                            <div class="login_submit">
                               <a href="{{route('register')}} ">Create a new account</a>
                                <label for="remember">
                                    <input id="remember" name="remember" type="checkbox">
                                    Remember me
                                </label>
                                <button type="submit">login</button>
                            </div>
                        </form>
                     </div>  
        </div>
    </div>
</div>  


@endsection
