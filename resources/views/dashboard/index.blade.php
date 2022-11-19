@extends('layouts.backend-dashboard.app')
@section('title','HupayX')
@section('breadcrumb','HupayX')

@section('content')
    @include('dashboard.html')
@endsection

@section('extra_javascript')
    @include('dashboard.javascript')
@endsection
