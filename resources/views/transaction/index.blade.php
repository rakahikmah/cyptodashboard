@extends('layouts.backend-dashboard.app')
@section('title','HupayX')
@section('breadcrumb','HupayX')

@section('content')
    @include('transaction.html')
@endsection

@section('extra_javascript')
    @include('transaction.javascript')
@endsection

