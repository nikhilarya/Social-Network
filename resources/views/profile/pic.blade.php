@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('profile.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to your profile <br>
                        <img src="{{ asset('img/') }}/{{ Auth::user()->pic }}" width="150px" height="150px"> <br> 
                        <a href="{{ url('/') }}/changePhoto">Change Image</a>
                        <hr>

                        {!! Form::open(['url' => '/uploadPhoto', 'method' => 'post', 'enctype' => 'multipart/form-data']) !!}
                            {!! Form::file('pic', ['class' => 'form-control']) !!}
                            <br>
                            {!! Form::submit('Upload Photo', ['class' => 'btn btn-success']) !!}
                        {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
