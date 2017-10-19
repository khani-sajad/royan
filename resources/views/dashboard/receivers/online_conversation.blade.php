@php
  $open = in_array( $dashboard,['c1','c2'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
    data-show="onlineConversation">
  <i class="fa fa-headphones ml-2"></i>
  <span> گفت&zwnj;وگوی آنلاین </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
  <div id="onlineConversation" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-users pl-1"></i>
    <span> با کارکنان شبکه </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-user-secret pl-1"></i>
    <span> با مدیر شبکه </span>
  </a>
</div>
