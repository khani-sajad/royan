@extends('layouts.master')

@section('main')
  @include('partials.are_you_sure')
  @include('partials.flash')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4 dashboard">
        @include($dashboard_type.'.dashboard')
      </div>
      <div class="col-lg-10 col-md-9 col-sm-8 inside p-4">
        @include('partials.errors')
        @include($dashboard_type.'.pages.'.$dashboard)
      </div>
    </div>
  </div>
@endsection
