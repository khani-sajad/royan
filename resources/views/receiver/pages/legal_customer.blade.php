<div class="container-fluid">
  <form class="row" action="{{url('legals')}}" method="post" data-card-reader>
    {{csrf_field()}}
    <fieldset class="form-group col-sm-4">
      <label for="uid">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        اسکن کارت
      </label>
      <input value="{{old('uid')}}" type="text" class="form-control" id="uid" name="uid" autocomplete="off">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="number">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره کارت
      </label>
      <input value="{{old('number')}}" type="text" class="form-control dash" id="number" dir="ltr" maxlength="19" name="number">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="telephone">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        تلفن
      </label>
      <input value="{{old('telephone')}}" type="text" class="form-control dash" id="telephone" name="telephone">
    </fieldset>

    {{---------------------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="company_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        نام اداره / شرکت / ارگان
      </label>
      <input value="{{old('company_name')}}" type="text" class="form-control" id="company_name"  name="company_name" >
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="manager_name">
        نام و نام خانوادگی مدیر
      </label>
      <input value="{{old('manager_name')}}" type="text" class="form-control" id="manager_name"  name="manager_name">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="guild">
        صنف
      </label>
      <input value="{{old('guild')}}" type="text" class="form-control" id="guild"  name="guild">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="state">
          استان
      </label>
      <input value="{{old('state')}}" type="text" class="form-control" id="state"  name="state">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="city">
          شهر
      </label>
      <input value="{{old('city')}}" type="text" class="form-control" id="city"  name="city">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="city_region">
          منطقه شهری
      </label>
      <input value="{{old('city_region')}}" type="text" class="form-control" id="city_region"  name="city_region">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="username">
          <i class="fa fa-asterisk small text-danger ml-1"></i>
          نام کاربری
      </label>
      <input value="{{old('username')}}" type="text" class="form-control" id="username"  name="username">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="password">
          <i class="fa fa-asterisk small text-danger ml-1"></i>
          رمز عبور
      </label>
      <input value="{{old('password')}}" type="text" class="form-control" id="password"  name="password">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="col-sm-12 my-3">
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="is_reference" value="1" {{old('is_reference') ? 'checked' : '' }}>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description"> این شخص مرجع نیز می&zwnj;باشد. </span>
      </label>
      <input value="{{old('dedicated_cards')}}" type="text" class="form-control col-sm-5 {{old('is_reference') ? '' : 'hidden' }}" id="dedicated_cards"  name="dedicated_cards" placeholder="تعداد کارت های اختصاصی">
    </fieldset>


    {{-------------------------------------------------------------}}

    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4">ذخیره</button>

  </form>
</div>
