@php
  $open = in_array( $dashboard,['z1','z2','z3','z4','z5','z6'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="support">
  <i class="fa fa-tty ml-2"></i>
  <span> پشتیبانی </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="support" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> ایجاد تیکت </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-volume-control-phone pl-1"></i>
    <span> مدیریت پشتیبانی</span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-newspaper-o pl-1"></i>
    <span> ایجاد اطلاعیه </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-bullhorn pl-1"></i>
    <span> مدیریت اطلاع رسانی </span>
  </a>
</div>
