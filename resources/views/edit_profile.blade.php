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
    <label for="exampleFormControlInput1">User Name</label>
    <input type="text" name="name" class="form-control" required="" value="{{Auth::user()->name}}" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
 


<div class="form-group">
    <label for="exampleFormControlTextarea1">My Self</label>
    <textarea required="" class="form-control" name="discription" id="exampleFormControlTextarea1" rows="3">{{Auth::user()->discription}}</textarea>
</div>


  <div class="form-group">

  
  </div>




 <div class="form-row">
   
    <div class="col">
       <label for="exampleFormControlFile1">Update your Profile Picture</label>

    <input type="file" name="img" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <div class="col">
       <img src="{{ asset(Auth::user()->avatar )}}" height="100px" width="" style="
    float: right;
    padding: 5px;
">
    </div>
  </div>





  <button type="submit" class="btn btn-primary">Update</button>
</form>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
