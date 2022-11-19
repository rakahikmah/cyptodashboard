@extends('layouts.backend-dashboard.app')
@section('title','Dashboard')
@section('breadcrumb','Dashboard')

@section('content')
    @include('transaction.html')
@endsection

@section('extra_javascript')
    @include('transaction.javascript')
@endsection

