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
