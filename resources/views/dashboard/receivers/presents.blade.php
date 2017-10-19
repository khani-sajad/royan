@php
  $open = in_array( $dashboard,['c1','c2'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
    data-show="presents">
  <i class="fa fa-id-badge ml-2"></i>
  <span> معرفی </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
  <div id="presents" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-share pl-1"></i>
    <span> معرفی مشتری </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده مشتریان معرفی&zwnj;شده </span>
  </a>
</div>
