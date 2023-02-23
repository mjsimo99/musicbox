@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>


                        {{ __('Hello') }}, {{ Auth::user()->name }}!

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn btn-primary">{{ __('Logout') }}</button>
                        </form>
    
                    @endif

                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
