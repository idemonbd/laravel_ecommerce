@extends('backend.layouts.master')
@section('main-content')
    <div class="container-fluid">
        <iframe src="{{ asset('public/backend/asset('public')/vendor/laravel-filemanager') }}" style="width: 100%; height: 500px; overflow: hidden; border: none;"></iframe>
    </div>
@endsection
