<form class="row getCardOwner" method="post">
  {{csrf_field()}}
  <div class="col-md-3"></div>
  <fieldset class="form-group col-sm-6">
    <label for="uid">
      اسکن کارت
    </label>
    <input value="{{old('uid')}}" type="text" class="form-control" id="uid" name="uid" autocomplete="off" autofocus>
  </fieldset>
  {{-- <i class="fa fa-undo fa-2x"></i> --}}
</form>

<div class="update">

</div>
