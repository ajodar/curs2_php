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
                    @endif

                    {{ trans('web.hello_user', ['name'=> Auth::user()->name]) }}

                    <br>
                    {{$product->id}} <br>
                    {{$product->name}} <br>
                    {{$product->description}} <br>
                    {{$product->price}} <br>
                    {{$product->image}} <br>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
