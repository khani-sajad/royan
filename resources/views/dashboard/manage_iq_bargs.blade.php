@php
  $open = in_array( $dashboard,['iq_bargs','z2','z3','z4','z5','z6'] )
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
  <a href="{{url(ut().'/iq_bargs')}}" @if ($dashboard=='iq_bargs') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده تمام آیکیوبرگ ها </span>
  </a>
</div>
