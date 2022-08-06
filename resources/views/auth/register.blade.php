@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
            <h5 class="card-title pt-5 pb-3 text-center">Create an account</h5>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group ml-5 mr-5">

                            
                                <input id="name" placeholder="Full name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            
                        </div>

                         
                        <div class="form-group ml-5 mr-5">

                                <select class="form-control" name="gender">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                @error('gender')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        
                        <div class="form-group ml-5 mr-5">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Date of Birth') }}</label> -->

                                <input id="dateOfBirth" type="date" class="form-control @error('name') is-invalid @enderror" name="dateOfBirth" value="{{ old('dateOfBirth') }}" required autocomplete="dateOfBirth" autofocus>

                                @error('dateOfBirth')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

                        
                        <div class="form-group ml-5 mr-5">
                            <!-- <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Contact') }}</label> -->

                                <input id="contact" placeholder="contact number" type="number" class="form-control @error('name') is-invalid @enderror" name="contact" required value="{{ old('contact') }}" required autocomplete="contact" autofocus>

                                @error('contact')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>

 


                        <div class="form-group ml-5 mr-5">

                                <input id="email" placeholder="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        

                        <div class="form-group ml-5 mr-5">

                                <input id="password" placeholder="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                       
                        <div class="form-group ml-5 mr-5">

                                <input id="password-confirm" placeholder="confirm password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>

                        <div class="form-group ml-5 mr-5">
                            <label for="password" class="">Profile Picture</label>

                                <input id="image" type="file" class="form-control " name="image">
                        </div>
                        

                        <div class="form-group ml-5 mr-5 p-3">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('REGISTER') }}
                                </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
