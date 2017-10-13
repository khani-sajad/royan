<h3 class="dinar text-primary mb-5 text-center">ثبت تراکنش خرید مشتری</h3>

<div class="mb-4">
  <h5 class="dinar text-primary">تعریف مشتری جدید</h5>
  <p class="h6 mb-4"> در ای قسمت میتوانید مشتری جدیدی را تعریف و آیکیوکارت به وی تخصیص دهید </p>
  <a href="{{url('/receiver/real_customer')}}" class="btn btn-primary px-3">مشتری حقیقی</a>
  <a href="{{url('/receiver/legal_customer')}}" class="btn btn-primary px-3">مشتری حقوقی</a>
</div>

<hr>

<h5 class="dinar text-primary">ثبت تراکنش مشتری</h5>
<p class="h6 mb-4">در این قسمت میتوانید تراکنش مشتری را از یکی از سه طریق زیر ثبت نمایید:</p>
<form class="row getCardOwner" method="post">
  {{csrf_field()}}
  <fieldset class="form-group col-sm-3">
    <input type="text" class="form-control" id="uid" name="uid" autocomplete="off" autofocus placeholder="اسکن کارت">
  </fieldset>
  <fieldset class="form-group col-sm-4">
    <input type="text" class="form-control" id="mobile" name="mobile" autocomplete="off" placeholder="شماره موبایل">
  </fieldset>
  <fieldset class="form-group col-sm-4">
    <input type="text" class="form-control" id="national_code" name="national_code" autocomplete="off"  placeholder=" کد ملی">
  </fieldset>
  <fieldset class="col-sm-1">
    <button type="submit" class="btn btn-primary">
      <i class="fa fa-search"></i>
    </button>
  </fieldset>
</form>

<div class="text-center">
  <i class="fa fa-circle-o-notch fa-spin fa-3x fa-fw text-primary spinner"></i>
</div>

<div class="update">

</div>
