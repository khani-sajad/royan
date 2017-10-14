@extends('layouts.master')

@section('main')
  @include('partials.are_you_sure')
  @include('partials.flash')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4 dashboard">
        @include($dashboard_type.'.dashboard')
      </div>
      <div class="col-lg-10 col-md-9 col-sm-8 inside">
        <div class="row py-1 px-3 topbar" dir="ltr">
          <img class="" src="{{asset('img/logo.png')}}" alt="آیکیو کارت" width="37px">
        </div>
        <div class="my-3">
          @include('partials.errors')
          @includeIf($dashboard_type.'.pages.'.$dashboard)
        </div>
      </div>
    </div>
  </div>
@endsection
