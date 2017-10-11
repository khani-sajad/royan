<a href="{{url('/receiver/acc_management')}}" @if ($dashboard=='acc_management') {{'class=active'}} @endif>
  <i class="fa fa-user ml-2"></i>
  <span>مدیریت حساب کاربری</span>
</a>

{{------------------------------------------------------------------------------------------}}


<a href="{{url('/receiver/acc_management')}}" @if ($dashboard=='acc_management') {{'class=active'}} @endif>
  <i class="fa fa-money ml-2"></i>
  <span>ثبت تراکنش</span>
</a>


{{------------------------------------------------------------------------------------------}}

@php
  $open = in_array( $dashboard,['new_transaction','transaction_list'] )
@endphp

<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="transactions">
  <i class="fa fa-money ml-2"></i>
  <span> تراکنش ها </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="transactions" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('/receiver/new_transaction')}}" @if ($dashboard=='new_transaction') {{'class=active'}} @endif>
    <i class="fa fa-pencil ml-2"></i>
    <span> ثبت تراکنش </span>
  </a>
  <a href="{{url('/receiver/transaction_list')}}" @if ($dashboard=='transaction_list') {{'class=active'}} @endif>
    <i class="fa fa-list ml-2"></i>
    <span> لیست تراکنش ها </span>
  </a>
</div>


{{------------------------------------------------------------------------------------------}}

@php
  $open = in_array( $dashboard,['receiver','real_customer','legal_customer'] )
@endphp

<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="createUser">
  <i class="fa fa-user-plus ml-2"></i>
  <span>ایجاد کاربر</span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="createUser" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('/receiver/real_customer')}}" @if ($dashboard=='real_customer') {{'class=active'}} @endif>
    <i class="fa fa-user ml-2"></i>
    <span>مشتری حقیقی</span>
  </a>
  <a href="{{url('/receiver/legal_customer')}}" @if ($dashboard=='legal_customer') {{'class=active'}} @endif>
    <i class="fa fa-vcard ml-2"></i>
    <span>مشتری حقوقی</span>
  </a>
</div>

{{--------------------------------------------------}}

<form class="d-inline" action="{{url('logout')}}" method="post">
  {{csrf_field()}}
  <a href="javascript:void(0)" onclick="jQuery(this).parent().submit()">
    <i class="fa fa-power-off ml-2"></i>
    <span>خروج</span>
  </a>
</form>