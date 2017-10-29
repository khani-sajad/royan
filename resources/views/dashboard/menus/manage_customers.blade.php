@php
  $open = in_array( $dashboard,['customers','real_customer','legals','legal_customer','x1','x2'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="manageCustomers">
  <i class="fa fa-users ml-2"></i>
  <span> مدیریت مشتریان </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="manageCustomers" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url(userable_type().'/customers')}}" @if ($dashboard=='customers') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهد مشتریان حقیقی </span>
  </a>
  <a href="{{url(userable_type().'/real_customer')}}" @if ($dashboard=='real_customer') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> تعریف مشتری حقیقی </span>
  </a>
  <a href="{{url(userable_type().'/legals')}}" @if ($dashboard=='legals') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده مشتریان حقوقی </span>
  </a>
  <a href="{{url(userable_type().'/legal_customer')}}" @if ($dashboard=='legal_customer') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> تعریف مشتری حقوقی </span>
  </a>
  <a href="{{url(userable_type().'/x1')}}" @if ($dashboard=='x1') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> تعریف شعب مشتری حقوقی </span>
  </a>
  <a href="{{url(userable_type().'/x2')}}" @if ($dashboard=='x2') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> تعریف کارکنان مشتری حقوقی </span>
  </a>
</div>
