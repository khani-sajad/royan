<fieldset class="form-group col-sm-{{$cols}}">
  <label for="username">
      <i class="fa fa-asterisk small text-danger ml-1"></i>
      نام کاربری
  </label>
  <input value="{{old('username')}}" type="text" class="form-control" id="username"  name="username">
</fieldset>
<fieldset class="form-group col-sm-{{$cols}}">
  <label for="password">
      <i class="fa fa-asterisk small text-danger ml-1"></i>
      رمز عبور
  </label>
  <input value="{{old('password')}}" type="text" class="form-control" id="password"  name="password">
</fieldset>
