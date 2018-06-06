@extends('layouts.master')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @include('profile.sidebar')
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">DashBoard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Welcome to your profile
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
