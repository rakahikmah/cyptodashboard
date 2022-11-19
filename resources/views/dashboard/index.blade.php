@extends('layouts.backend-dashboard.app')
@section('title','Transaction')
@section('breadcrumb','Transaction')

@section('content')
    @include('dashboard.html')
@endsection

@section('extra_javascript')
    @include('dashboard.javascript')
@endsection
