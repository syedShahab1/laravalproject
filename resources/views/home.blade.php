@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Profile') }}

        <a href="/Profile/{{Auth::user()->id}}/edit" class="btn btn-primary active" role="button" aria-pressed="true" style="
    float: right;
">Edit profile</a>

 <a href="/ChangePassword" class="btn btn-primary active" role="button" aria-pressed="true" style="float: right;margin-right: 13px;">Change Password</a>

                </div>

                <div class="card-body">
                   <!--  @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif -->


<h2>{{Auth::user()->name}}</h2>

<img src="{{ asset(Auth::user()->avatar )}}" height="200px" width="" style="
    float: right;
    padding: inherit;
">

<p>{{Auth::user()->discription}}</p>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
