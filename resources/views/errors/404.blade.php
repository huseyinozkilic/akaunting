@extends('layouts.error')

@section('title', trans('errors.title.404'))

@section('content')
    <div class="card">
        <div class="card-header">
            <h2 class="mb-0 text-warning"><i class="fa fa-exclamation-triangle text-warning"></i>&nbsp;&nbsp;{{ trans('errors.header.404') }}</h2>
        </div>
        <div class="card-body">
            <p>{{ trans('errors.message.404') }}</p>

            <a href="{{ url('/') }}" class="btn btn-success header-button-top"><span class="fa fa-tachometer-alt"></span> &nbsp;{{ trans('general.go_to', ['name' => trans('general.dashboard')]) }}</a>
        </div>
    </div>
@endsection
