@php
  $open = in_array( $dashboard,['new_transaction','new_barg_transaction','z3','transactions_list','barg_transactions_list','z6'] )
@endphp
<hr class="p-0 m-0">
<a href="javascript:void(0)" class="mother"
  data-role="{{ $open ? 'hide' : 'show'}}"
  data-show="manageTransactions">
  <i class="fa fa-credit-card ml-2"></i>
  <span> مدیریت تراکنش ها </span>
  <i class="fa fa-chevron-{{ $open ? 'up' : 'down'}} float-left ml-2 rotate"></i>
</a>
<div id="manageTransactions" class="drop @if (!$open) {{'hidden'}} @endif">
  <a href="{{url(ut().'/new_transaction')}}" @if ($dashboard=='new_transaction') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> ثبت تراکنش آیکیو کارت </span>
  </a>
  <a href="{{url(ut().'/new_barg_transaction')}}" @if ($dashboard=='new_barg_transaction') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> ثبت تراکنش آیکیو برگ </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-plus pl-1"></i>
    <span> ثبت تراکنش اقساط </span>
  </a>
  <a href="{{url(ut().'/transactions_list')}}" @if ($dashboard=='transactions_list') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده تراکنش&zwnj;های آیکیو کارت </span>
  </a>
  <a href="{{url(ut().'/barg_transactions_list')}}" @if ($dashboard=='barg_transactions_list') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده تراکنش&zwnj;های آیکیو برگ </span>
  </a>
  <a href="{{url('xxx')}}" @if ($dashboard=='xxx') {{'class=active'}} @endif>
    <i class="fa fa-eye pl-1"></i>
    <span> مشاهده تراکنش&zwnj;های اقساطی </span>
  </a>
</div>
