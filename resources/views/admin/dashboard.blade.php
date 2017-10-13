@php
  $open = in_array($dashboard,['users_list','offers_list'])
@endphp

<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="see">
  <i class="fa fa-eye ml-2"></i>
  <span>مشاهده</span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="see" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('/admin/users_list')}}" @if ($dashboard=='users_list') {{'class=active'}} @endif>
    <i class="fa fa-users ml-2"></i>
    <span>کاربران</span>
  </a>
  <a href="{{url('/admin/offers_list')}}" @if ($dashboard=='offers_list') {{'class=active'}} @endif>
    <i class="fa fa-list ml-2"></i>
    <span>آفر ها</span>
  </a>
</div>


{{------------------------------------------------------------------------------------------}}

@php
  $open = in_array($dashboard,['receiver','real_customer','legal_customer'])
@endphp


<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="createUser">
  <i class="fa fa-user-plus ml-2"></i>
  <span>ایجاد مشتری</span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="createUser" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('/admin/receiver')}}" @if ($dashboard=='receiver') {{'class=active'}} @endif>
    <i class="fa fa-users ml-2"></i>
    <span>پذیرنده</span>
  </a>
  <a href="{{url('/admin/real_customer')}}" @if ($dashboard=='real_customer') {{'class=active'}} @endif>
    <i class="fa fa-user ml-2"></i>
    <span>مشتری حقیقی</span>
  </a>
  <a href="{{url('/admin/legal_customer')}}" @if ($dashboard=='legal_customer') {{'class=active'}} @endif>
    <i class="fa fa-vcard ml-2"></i>
    <span>مشتری حقوقی</span>
  </a>
</div>

{{--------------------------------------------------}}

@php
  $open = in_array( $dashboard,['make_public_offer','make_reference_offer'] )
@endphp


<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="createOffer">
  <i class="fa fa-percent ml-2"></i>
  <span>ایجاد آفر</span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="createOffer" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('/admin/make_public_offer')}}" @if ($dashboard=='make_public_offer') {{'class=active'}} @endif>
    <i class="fa fa-backward ml-2"></i>
    <span>آفر عمومی</span>
  </a>
  <a href="{{url('/admin/make_reference_offer')}}" @if ($dashboard=='make_reference_offer') {{'class=active'}} @endif>
    <i class="fa fa-backward ml-2"></i>
    <span>آفر مرجع</span>
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
