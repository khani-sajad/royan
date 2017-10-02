@extends('layouts.master')

@section('main')
  <header class="row">

  </header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4 dashboard">
        @include('admin.dashboard')
      </div>
      <div class="col-lg-10 col-md-9 col-sm-8 inside p-4">
        @include('admin.pages.'.$dashboard)
      </div>
    </div>
  </div>
@endsection
