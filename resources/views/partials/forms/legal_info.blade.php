<fieldset class="form-group col-sm-{{$cols}}">
  <label for="company_name">
    <i class="fa fa-asterisk small text-danger ml-1"></i>
    نام اداره / شرکت / ارگان
  </label>
  <input value="{{old('company_name')}}" type="text" class="form-control" id="company_name"  name="company_name" >
</fieldset>
<fieldset class="form-group col-sm-{{$cols}}">
  <label for="manager_name">
    نام و نام خانوادگی مدیر
  </label>
  <input value="{{old('manager_name')}}" type="text" class="form-control" id="manager_name"  name="manager_name">
</fieldset>
<fieldset class="form-group col-sm-{{$cols}}">
  <label for="guild">
    صنف
  </label>
  <input value="{{old('guild')}}" type="text" class="form-control" id="guild"  name="guild">
</fieldset>
