@extends('layouts.master')

@section('main')
  <header class="row">

  </header>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-2 col-md-3 col-sm-4 dashboard gr-back">
        <a href="javascript:void(0)" class="mother" data-role="show" data-show="createUser">
          <i class="fa fa-user-plus ml-2"></i>
          <span>ایجاد کاربر</span>
          <i class="fa fa-chevron-down float-left ml-2 rotate"></i>
        </a>
        <div id="createUser" class="drop hidden">
          <a href="{{url('')}}">
            <i class="fa fa-users ml-2"></i>
            <span>پدیرنده</span>
          </a>
          <a href="{{url('')}}">
            <i class="fa fa-user ml-2"></i>
            <span>مشتری حقیقی</span>
          </a>
          <a href="{{url('')}}">
            <i class="fa fa-vcard ml-2"></i>
            <span>مشتری حقوقی</span>
          </a>
        </div>
      </div>
      <div class="col-lg-10 col-md-9 col-sm-8">

      </div>
    </div>
  </div>
@endsection
