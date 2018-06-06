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
    	@include('profile.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="card-body">
                	<div class="row">

					  <div class="col-sm-6 col-md-12 text-center">
					    <div class="thumbnail">
					    	<h3>{{ Auth::user()->name }}</h3>
					    	<div class="list-group col-md-5">
					    		@foreach($allUsers as $u)
					  				<a href="#" class="list-group-item list-group-item-action">
					  					<img src="{{ asset('img/') }}/{{ $u->pic }}" width="50px" height="50px" class="rounded-circle">{{$u->name}}
					  					<div class="caption">
										  	<p>{{$u->city}}-{{$u->country}}-{{$u->id}}</p>
										</div>
										<a href="{{url('/')}}/addFriend/{{$u->id}}" class="btn btn-success">Add to Friend</a>
					  				</a>
					  				
					  			@endforeach	
							</div>
					       
					    </div>
					  </div>

					  <div class="col-sm-6 col-md-12">
					  	 
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
