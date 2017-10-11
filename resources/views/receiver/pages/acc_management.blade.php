<div class="jumbotron">
  <p class="h3 dinar">تغییر اطلاعات کاربری</p>
  <br>
  <hr class="my-4">
  <p class="h5 dinar my-4 text-primary">تغییر رمز عبور</p>
  <form class="row" action="{{url('users/'.auth()->id())}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <input type="hidden" name="type" value="password">
    <fieldset class="form-group col-md-4">
      <label for="lead current_password">رمز عبور فعلی</label>
      <input type="password" class="form-control" id="current_password" name="current_password">
    </fieldset>
    <fieldset class="form-group col-md-4">
      <label for="lead new_password">رمز عبور جدید</label>
      <input type="password" class="form-control" id="new_password" name="new_password">
    </fieldset>
    <fieldset class="form-group col-md-4">
      <label for="lead new_password_confirmation">تکرار رمز عبور جدید</label>
      <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation">
    </fieldset>
    <button type="submit" class="btn btn-primary btn-lg m-3">تغییر</button>
  </form>

  <hr class="my-4">
  <p class="h5 dinar my-4 text-primary">تغییر  نام کاربری</p>
  <form class="row" action="{{url('users/'.auth()->id())}}" method="post">
    {{csrf_field()}}
    {{method_field('PATCH')}}
    <input type="hidden" name="type" value="username">
    <fieldset class="form-group col-md-6">
      <label for="lead username">نام کاربری جدید</label>
      <input type="text" class="form-control" id="username" name="username" value="">
    </fieldset>
    <fieldset class="form-group col-md-6">
      <label for="lead current_password">رمز عبور فعلی</label>
      <input type="password" class="form-control" id="current_password" name="current_password">
    </fieldset>
    <button type="submit" class="btn btn-primary btn-lg m-3">تغییر</button>
  </form>
</div>
