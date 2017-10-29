<div class="container-fluid">
  <form class="row" action="{{url('receivers/'.$receiver->id)}}" method="post" data-card-reader>
    {{csrf_field()}}
    {{ method_field('PUT') }}
    <fieldset class="form-group col-sm-6">
      <label for="business_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        نام واحد کسب&zwnj;و&zwnj;کار
      </label>
      <input value="{{$receiver->business_name}}" type="text" class="form-control" id="business_name"  name="business_name">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="register_number">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره ثبت/جواز
      </label>
      <input value="{{$receiver->register_number}}" type="text" class="form-control" id="register_number"  name="register_number">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="manager_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        نام مدیریت
      </label>
      <input value="{{$receiver->manager_name}}" type="text" class="form-control" id="manager_name"  name="manager_name">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="contact_name">
        نام رابط
      </label>
      <input value="{{$receiver->contact_name}}" type="text" class="form-control" id="contact_name"  name="contact_name">
    </fieldset>

    {{-------------------------------------------------------------}}


    <fieldset class="form-group col-sm-4">
      <label for="telegram_channel">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          کانال تلگرام
      </label>
      <input value="{{$receiver->telegram_channel}}" type="text" class="form-control" id="telegram_channel"  name="telegram_channel">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="telegram_id">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          آیدی تلگرام
      </label>
      <input value="{{$receiver->telegram_id}}" type="text" class="form-control" id="telegram_id"  name="telegram_id">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="instagram_id">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          آیدی اینستاگرام
      </label>
      <input value="{{$receiver->instagram_id}}" type="text" class="form-control" id="instagram_id"  name="instagram_id">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="state">
          استان
      </label>
      <input value="{{$receiver->state}}" type="text" class="form-control" id="state"  name="state">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="city">
          شهر
      </label>
      <input value="{{$receiver->city}}" type="text" class="form-control" id="city"  name="city">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="city_region">
          منطقه شهری
      </label>
      <input value="{{$receiver->city_region}}" type="text" class="form-control" id="city_region"  name="city_region">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-3">
      <label for="guild">
          صنف
      </label>
      <input value="{{$receiver->guild}}" type="text" class="form-control" id="guild" name="guild">
    </fieldset>
    <fieldset class="form-group col-sm-3">
      <label for="shopping_center">
          مرکز خرید
      </label>
      <input value="{{$receiver->shopping_center}}" type="text" class="form-control" id="shopping_center"  name="shopping_center">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="address">
          نشانی
      </label>
      <input value="{{$receiver->address}}" type="text" class="form-control" id="address"  name="address">
    </fieldset>

    {{-------------------------------------------------------------}}


    <fieldset class="form-group col-sm-6">
      <label for="sell_type">نوع فروش</label>
      <select class="form-control" id="sell_type" name="sell_type">
        <option disabled @if(!$receiver->activity_type) selected @endif>انتخاب کنید</option>
        <option {{$receiver->sell_type == '1' ? 'selected' : '' }} value="1">خرده</option>
        <option {{$receiver->sell_type == '2' ? 'selected' : '' }} value="2">عمده</option>
        <option {{$receiver->sell_type == '3' ? 'selected' : '' }} value="3">هردو</option>
      </select>
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="activity_type">نوع غعالیت</label>
      <select class="form-control" id="activity_type" name="activity_type">
        <option disabled @if(!$receiver->activity_type) selected @endif>انتخاب کنید</option>
        <option {{$receiver->activity_type == 'independent' ? 'selected' : '' }} value="independent">مستقل</option>
        <option {{$receiver->activity_type == 'shopping_center' ? 'selected' : '' }} value="shopping_center">مرکز خریدی</option>
        <option {{$receiver->activity_type == 'urban' ? 'selected' : '' }} value="urban">شهری</option>
        <option {{$receiver->activity_type == 'provincial' ? 'selected' : '' }} value="provincial">استانی</option>
        <option {{$receiver->activity_type == 'global' ? 'selected' : '' }} value="global">سراسری</option>
      </select>
    </fieldset>


    {{-------------------------------------------------------------}}

    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4">ذخیره</button>

  </form>
</div>
