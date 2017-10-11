<div class="container-fluid">
  <form class="row" action="{{url('customers')}}" method="post" data-card-reader>
    {{csrf_field()}}
    <fieldset class="form-group col-sm-6">
      <label for="uid">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        اسکن کارت
      </label>
      <input value="{{old('uid')}}" type="text" class="form-control" id="uid" name="uid" autocomplete="off">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="number">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره کارت
      </label>
      <input value="{{old('number')}}" type="text" class="form-control dash" id="number" dir="ltr" maxlength="19" name="number">
    </fieldset>

    {{---------------------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="mobile">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        تلفن همراه
      </label>
      <input value="{{old('mobile')}}" type="text" class="form-control" id="mobile"  name="mobile" maxlength="11">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="national_code">
        کدملی
      </label>
      <input value="{{old('national_code')}}" type="text" class="form-control" id="national_code"  name="national_code">
    </fieldset>

    {{---------------------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="first_name">
          نام
      </label>
      <input value="{{old('first_name')}}" type="text" class="form-control" id="first_name"  name="first_name">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="last_name">
        نام خانوادگی
      </label>
      <input value="{{old('last_name')}}" type="text" class="form-control" id="last_name"  name="last_name">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="job">
        شغل
      </label>
      <input value="{{old('job')}}" type="text" class="form-control" id="job"  name="job">
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
      <label for="birthday">
        تاریخ تولد
      </label>
      <input value="{{old('birthday')}}" type="text" data-calendar="persian" class="form-control" id="birthday"  name="birthday">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="marriage_date">
        تاریخ ازدواج
      </label>
      <input value="{{old('marriage_date')}}" type="text" data-calendar="persian" class="form-control" id="marriage_date"  name="marriage_date">
    </fieldset>


    {{---------------------------------------------------------------------------}}


    <fieldset class="form-group col-sm-6">
      <div class="custom-controls-stacked">
        <label class="custom-control custom-radio">
          <input name="person_type" value="passenger" type="radio" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description pull-left">مسافر</span>
        </label>
        <label class="custom-control custom-radio">
          <input name="person_type" value="citizen" type="radio" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">شهروند</span>
        </label>
      </div>
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <div class="custom-controls-stacked">
        <label class="custom-control custom-radio">
          <input name="buy_type" value="1" type="radio" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">عمده</span>
        </label>
        <label class="custom-control custom-radio">
          <input name="buy_type" value="2" type="radio" class="custom-control-input">
          <span class="custom-control-indicator"></span>
          <span class="custom-control-description">خرده</span>
        </label>
      </div>
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
