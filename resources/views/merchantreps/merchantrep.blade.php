
@extends('dashboard::layouts.twoten')

@section('sidebar')
  @include('inventory::sidebar')
@endsection

@section('content-main')
  @include('merchantreps::'.$view)
@endsection