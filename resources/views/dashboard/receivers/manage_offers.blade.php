@php
  $open = in_array( $dashboard,['z1','z2','z3','z4','z5','z6'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="manageOffers">
  <i class="fa fa-gift ml-2"></i>
  <span> مدیریت آفر ها </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="manageOffers" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> تعریف آفر جدید </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-database pl-1"></i>
    <span> بانک آفر ها </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-share pl-1"></i>
    <span> تخصیص آفر </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-edit pl-1"></i>
    <span> گزارش آفر ها </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> تعریف جوائز </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-share pl-1"></i>
    <span> تخصیص جوائز </span>
  </a>
</div>
