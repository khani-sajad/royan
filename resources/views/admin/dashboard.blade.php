<a href="javascript:void(0)" class="mother"
  data-role=" @if (in_array($dashboard,['receiver','real_customer','legal_customer'])) {{'hide'}} @endif"
  data-show="createUser">
  <i class="fa fa-user-plus ml-2"></i>
  <span>ایجاد کاربر</span>
  <i class="fa fa-chevron-down float-left ml-2 rotate"></i>
</a>
<div id="createUser" class="drop @if (!in_array($dashboard,['receiver','real_customer','legal_customer'])) {{'hidden'}} @endif">
  <a href="{{url('/dashboard/receiver')}}" @if ($dashboard=='receiver') {{'class=active'}} @endif>
    <i class="fa fa-users ml-2"></i>
    <span>پذیرنده</span>
  </a>
  <a href="{{url('/dashboard/real_customer')}} @if ($dashboard=='real_customer') {{'class=active'}} @endif">
    <i class="fa fa-user ml-2"></i>
    <span>مشتری حقیقی</span>
  </a>
  <a href="{{url('/dashboard/legal_customer')}}" @if ($dashboard=='legal_customer') {{'class=active'}} @endif>
    <i class="fa fa-vcard ml-2"></i>
    <span>مشتری حقوقی</span>
  </a>
</div>
