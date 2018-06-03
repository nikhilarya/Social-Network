@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ Auth::user()->name }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to your profile <br>
                        <img src="{{ asset('img/') }}/{{ Auth::user()->pic }}" width="150px" height="150px" class="rounded-circle"> <br> 
                        <a href="{{ url('/') }}/changePhoto">Change Image</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
