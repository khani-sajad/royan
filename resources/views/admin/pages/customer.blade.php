<div class="container-fluid">
  <form class="row" action="{{url('customers')}}" method="post">
    {{csrf_field()}}
    <fieldset class="form-group col-sm-6">
      <label for="card_id">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        اسکن کارت
      </label>
      <input value="{{old('card_id')}}" type="text" class="form-control" id="card_id"  name="card_id">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="card_number">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره کارت
      </label>
      <input value="{{old('card_number')}}" type="text" class="form-control" id="card_number"  name="card_number">
    </fieldset>

    {{---------------------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="mobile">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        تلفن همراه
      </label>
      <input value="{{old('mobile')}}" type="text" class="form-control" id="mobile"  name="mobile">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="national_code">
        کدملی
      </label>
      <input value="{{old('national_code')}}" type="text" class="form-control" id="national_code"  name="national_code">
    </fieldset>

    {{---------------------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="first_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          نام
      </label>
      <input value="{{old('first_name')}}" type="text" class="form-control" id="first_name"  name="first_name">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="last_name">
        نام خانوادگی
      </label>
      <input value="{{old('last_name')}}" type="text" class="form-control" id="last_name"  name="last_name">
    </fieldset>
    <fieldset class="form-group col-sm-6">
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

  </form>
</div>
