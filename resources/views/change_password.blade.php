@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   <!--  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->

<form method="POST" action="/Profile/{{Auth::user()->id}}" enctype="multipart/form-data">
    
    @csrf
    {{ method_field('PATCH') }}

    






 <div class="form-group">
    <label for="exampleFormControlInput1">Current Password</label>
    <input type="password" name="Current" class="form-control" required="" id="exampleFormControlInput1" placeholder="">
  </div>
 <div class="form-group">
    <!-- <label for="exampleFormControlInput1">New Password</label>
    <input type="text" name="New" class="form-control" id="exampleFormControlInput1" placeholder="Enter new password"> -->
     <label for="password">{{ __('Password') }}</label>

                            <div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
  </div>
<div class="form-group">
    <!-- <label for="exampleFormControlInput1">Confirm Password</label>
    <input type="text" name="Confirm" class="form-control" id="exampleFormControlInput1" placeholder="Confirm Password"> -->
     <label for="password-confirm">{{ __('Confirm Password') }}</label>

                            <div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
  </div>





  <div class="form-group">

   <?php
  if(!empty($error)){
   echo $error; 
  }?>
  </div>








  <button type="submit" class="btn btn-primary">Change password</button>
</form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
