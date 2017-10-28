@php
  $open = in_array( $dashboard,['iq_bargs','barg_basic_define','assign_iq_barg'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="IQBargs">
  <i class="fa fa-barcode ml-2"></i>
  <span> مدیریت آیکیوبرگ&zwnj;ها </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="IQBargs" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url(ut().'/barg_basic_define')}}" @if ($dashboard=='barg_basic_define') {{'class=active'}} @endif>
    <i class="fa fa-tags pl-1"></i>
    <span> تعریف اولیه </span>
  </a>
  <a href="{{url(ut().'/iq_bargs')}}" @if ($dashboard=='iq_bargs') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده تمام آیکیوبرگ ها </span>
  </a>
  <a href="{{url(ut().'/assign_iq_barg')}}" @if ($dashboard=='assign_iq_barg') {{'class=active'}} @endif>
    <i class="fa fa-share pl-1"></i>
    <span> تخصیص آیکیوبرگ </span>
  </a>
</div>
