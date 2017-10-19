@php
  $open = in_array( $dashboard,['base_management','z1','z2','z3','z4','z5','z6'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="manageReceiverOrgan">
  <i class="fa fa-building ml-2"></i>
  <span> مدیریت سازمان پذیرنده </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="manageReceiverOrgan" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('/receiver/base_management')}}" @if ($dashboard=='base_management') {{'class=active'}} @endif>
    <i class="fa fa-pencil pl-1"></i>
    <span> ویرایش اطلاعات پایه </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-sitemap pl-1"></i>
    <span> تعریف شعب </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-handshake-o pl-1"></i>
    <span> تعریف همکار </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-hand-paper-o pl-1"></i>
    <span> مدیریت سطوح دسترسی </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده همکاران </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده شعب </span>
  </a>
</div>
