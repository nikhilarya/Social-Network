@extends('layouts.master')

@section('content')

<div class="container">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
	    <li class="breadcrumb-item active" aria-current="page">Home</li>
	    <li class="breadcrumb-item active" aria-current="page">Profile</li>
	  </ol>
	</nav>
    <div class="row justify-content-center">
    	<div class="col-md-3">
            Sidebar
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="card-body">
                	<div class="row">

					  <div class="col-sm-6 col-md-12 text-center">
					    <div class="thumbnail">
					    	<h3>{{ Auth::user()->name }}</h3>
					       <img src="{{ asset('img/') }}/{{ Auth::user()->pic }}" width="150px" height="150px" class="rounded-circle">
					      <div class="caption">
					        
					        <p>{{$data->city }}-{{ $data->country }}</p>
					        <p><a href="#" class="btn btn-primary" role="button">Edit Profile</a> </p>
					      </div>
					    </div>
					  </div>

					  <div class="col-sm-6 col-md-12">
					  	<span class="badge badge-secondary">Update Profile</span></h6>
						{!! Form::open(['url' => '/updateProfile', 'method' => 'post']) !!}
							{!! Form::label('city', 'City') !!}
							{!! Form::text('city', null, ['class' => 'form-control']) !!}
							{!! Form::label('country', 'Country') !!}
							{!! Form::text('country', null, ['class' => 'form-control']) !!}
							{!! Form::label('about', 'About') !!}
							{!! Form::text('about', null, ['class' => 'form-control']) !!} <br>
							{!! Form::submit('Submit', ['class' => 'btn btn-success']) !!}
						{!! Form::close() !!}			 
					  </div>
					</div>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
