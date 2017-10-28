<a href="{{url('/receiver/acc_management')}}" class="mother @if ($dashboard=='acc_management') active @endif">
  <i class="fa fa-lock ml-2"></i>
  <span>مدیریت حساب کاربری</span>
</a>

{{------------------------------------------------------------------------------------------}}

@include('dashboard.menus.manage_customers')
@include('dashboard.menus.manage_iq_bargs')



{{------------------------------------------------------------------------------------------}}

<hr class="p-0 m-0">
<form class="d-inline" action="{{url('logout')}}" method="post">
  {{csrf_field()}}
  <a href="javascript:void(0)" class="mother" onclick="jQuery(this).parent().submit()">
    <i class="fa fa-power-off ml-2"></i>
    <span>خروج</span>
  </a>
</form>
