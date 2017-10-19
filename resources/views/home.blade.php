@extends('layouts.master')

@section('main')
  @include('partials.are_you_sure')
  @include('partials.flash')
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-4 dashboard">
        @include($dashboard_type.'.dashboard')
      </div>
      <div class="col-lg-10 col-md-8 inside">
        <div class="row py-1 px-3 topbar" dir="ltr">
          <img src="{{asset('img/logo.png')}}" alt="آیکیو کارت" width="37px" height="37px">
        </div>
        <div class="py-4 px-2">
          @include('partials.errors')
          @includeIf($dashboard_type.'.pages.'.$dashboard)
        </div>
      </div>
    </div>
  </div>
@endsection
