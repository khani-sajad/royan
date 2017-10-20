<fieldset class="form-group col-sm-{{$cols}}">
    <label for="uid">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        اسکن کارت
    </label>
    <input value="{{old('uid')}}" type="text" class="form-control" id="uid" name="uid" autocomplete="off">
</fieldset>
<fieldset class="form-group col-sm-{{$cols}}">
    <label for="number">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره کارت
    </label>
    <input value="{{old('number')}}" type="text" class="form-control dash" id="number" dir="ltr" maxlength="19" name="number">
</fieldset>
