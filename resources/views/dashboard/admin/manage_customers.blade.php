@php
  $open = in_array($dashboard,['users_list','receiver','real_customer','legal_customer'])
@endphp

<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="manageCustomers">
  <i class="fa fa-group ml-2"></i>
  <span> مدیریت مشتریان </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="manageCustomers" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url(ut().'/users_list')}}" @if ($dashboard=='users_list') {{'class=active'}} @endif>
    <i class="fa fa-list pl-1"></i>
    <span> لیست مشتریان </span>
  </a>
  <a href="{{url(ut().'/receiver')}}" @if ($dashboard=='receiver') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> ایجاد پذیرنده </span>
  </a>
  <a href="{{url(ut().'/real_customer')}}" @if ($dashboard=='real_customer') {{'class=active'}} @endif>
    <i class="fa fa-user-plus pl-1"></i>
    <span> ایجاد مشتری حقیقی </span>
  </a>
  <a href="{{url(ut().'/legal_customer')}}" @if ($dashboard=='legal_customer') {{'class=active'}} @endif>
    <i class="fa fa-address-card pl-1"></i>
    <span> ایجاد مشتری حقوقی </span>
  </a>
</div>
