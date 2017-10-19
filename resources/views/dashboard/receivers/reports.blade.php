@php
  $open = in_array( $dashboard,['z1','z2','z3','z4','z5','z6'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="report">
    <i class="fa fa-line-chart ml-2"></i>
  <span> گزارشات </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="report" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-money pl-1"></i>
    <span> فروش </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-backward pl-1"></i>
    <span> بستانکاری کمیسیون معرفی </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-forward pl-1"></i>
    <span> بدهکاری کمیسیون معرفی </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-edit pl-1"></i>
    <span> گزارش نتایج آفرهای پذیرنده </span>
  </a>
</div>
