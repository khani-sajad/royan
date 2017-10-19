@php
  $open = in_array( $dashboard,['z1','z2','z3','z4','z5','z6'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="accountancy">
  <i class="fa fa-calculator ml-2"></i>
  <span> حسابداری </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="accountancy" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-wifi pl-1"></i>
    <span> تصفیه آنلاین شعب/معرف&zwnj;ها </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-wifi pl-1"></i>
    <span> تصفیه آنلاین معرف ها </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> صدور فاکتور </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-envelope-o pl-1"></i>
    <span> فاکتورهای معرف&zwnj;ها </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده واریزی&zwnj;ها و پرداختی&zwnj;ها </span>
  </a>
</div>
