<div class="container-fluid">
  <form class="row" action="{{url('receivers')}}" method="post" data-card-reader>
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
      <label for="business_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        نام واحد کسب&zwnj;و&zwnj;کار
      </label>
      <input value="{{old('business_name')}}" type="text" class="form-control" id="business_name"  name="business_name">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="register_number">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره ثبت/جواز
      </label>
      <input value="{{old('register_number')}}" type="text" class="form-control" id="register_number"  name="register_number">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="manager_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        نام مدیریت
      </label>
      <input value="{{old('manager_name')}}" type="text" class="form-control" id="manager_name"  name="manager_name">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="contact_name">
        نام رابط
      </label>
      <input value="{{old('contact_name')}}" type="text" class="form-control" id="contact_name"  name="contact_name">
    </fieldset>

    {{-------------------------------------------------------------}}


    <fieldset class="form-group col-sm-4">
      <label for="telegram_channel">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          کانال تلگرام
      </label>
      <input value="{{old('telegram_channel')}}" type="text" class="form-control" id="telegram_channel"  name="telegram_channel">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="telegram_id">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          آیدی تلگرام
      </label>
      <input value="{{old('telegram_id')}}" type="text" class="form-control" id="telegram_id"  name="telegram_id">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="instagram_id">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          آیدی اینستاگرام
      </label>
      <input value="{{old('instagram_id')}}" type="text" class="form-control" id="instagram_id"  name="instagram_id">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="email">
          ایمیل
      </label>
      <input value="{{old('email')}}" type="email" class="form-control" id="email"  name="email">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          نام کاربری
      </label>
      <input value="{{old('name')}}" type="text" class="form-control" id="name"  name="name">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="password">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          رمز عبور
      </label>
      <input value="{{old('password')}}" type="text" class="form-control" id="password"  name="password">
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

    <fieldset class="form-group col-sm-3">
      <label for="guild">
          صنف
      </label>
      <input value="{{old('guild')}}" type="text" class="form-control" id="guild" name="guild">
    </fieldset>
    <fieldset class="form-group col-sm-3">
      <label for="shopping_center">
          مرکز خرید
      </label>
      <input value="{{old('shopping_center')}}" type="text" class="form-control" id="shopping_center"  name="shopping_center">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="address">
          نشانی
      </label>
      <input value="{{old('address')}}" type="text" class="form-control" id="address"  name="address">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="commision_percentage_for_introducer">
        <i class="fa fa-asterisk small text-success ml-1"></i>
        درصد ثابت کمیسیون  پذیرنده برای معرف
      </label>
      <input value="{{old('commision_percentage_for_introducer')}}" type="text" class="form-control" id="commision_percentage_for_introducer"  name="commision_percentage_for_introducer">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <i class="fa fa-asterisk small text-success ml-1"></i>
      <label for="commision_points_for_introducer">
        امتیاز ثابت کمیسیون  پذیرنده برای معرف
      </label>
      <input value="{{old('commision_points_for_introducer')}}" type="text" class="form-control" id="commision_points_for_introducer"  name="commision_points_for_introducer">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="commision_percentage_for_network">
        <i class="fa fa-asterisk small text-success ml-1"></i>
        درصد ثابت کمیسیون  پذیرنده برای شبکه
      </label>
      <input value="{{old('commision_percentage_for_network')}}" type="text" class="form-control" id="commision_percentage_for_network"  name="commision_percentage_for_network">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <i class="fa fa-asterisk small text-success ml-1"></i>
      <label for="commision_points_for_network">
        امتیاز ثابت کمیسیون  پذیرنده برای شبکه
      </label>
      <input value="{{old('commision_points_for_network')}}" type="text" class="form-control" id="commision_points_for_network"  name="commision_points_for_network">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-12">
      <label for="monthly_support_for_network">
        مبلغ پشتیبانی ماهانه
      </label>
      <input value="{{old('monthly_support_for_network')}}" type="text" class="form-control" id="monthly_support_for_network"  name="monthly_support_for_network">
    </fieldset>


    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="base_discount_percentage">
        درصد تخفیف پایه پذیرنده
      </label>
      <input value="{{old('base_discount_percentage')}}" type="text" class="form-control" id="base_discount_percentage"  name="base_discount_percentage">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="base_point">
        امتیاز پایه خرید
      </label>
      <input value="{{old('number_of_lotteries')}}" type="text" class="form-control" id="number_of_lotteries"  name="base_point">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="number_of_lotteries">
        تعداد قرعه کشی سالانه
      </label>
      <input value="{{old('number_of_lotteries')}}" type="text" class="form-control" id="number_of_lotteries"  name="number_of_lotteries">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-12">
      <label for="awards_list">
        فهرست جوایز
      </label>
      <textarea class="form-control" id="awards_list"  name="awards_list">{{old('awards_list')}}</textarea>
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="sell_type">نوع فروش</label>
      <select class="form-control" id="sell_type" name="sell_type">
        <option disabled @if(!old('activity_type')) selected @endif>انتخاب کنید</option>
        <option {{old('sell_type') == '1' ? 'selected' : '' }} value="1">خرده</option>
        <option {{old('sell_type') == '2' ? 'selected' : '' }} value="2">عمده</option>
        <option {{old('sell_type') == '3' ? 'selected' : '' }} value="3">هردو</option>
      </select>
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="activity_type">نوع فروش</label>
      <select class="form-control" id="activity_type" name="activity_type">
        <option disabled @if(!old('activity_type')) selected @endif>انتخاب کنید</option>
        <option {{old('activity_type') == 'independent' ? 'selected' : '' }} value="independent">مستقل</option>
        <option {{old('activity_type') == 'shopping_center' ? 'selected' : '' }} value="shopping_center">مرکز خریدی</option>
        <option {{old('activity_type') == 'urban' ? 'selected' : '' }} value="urban">شهری</option>
        <option {{old('activity_type') == 'provincial' ? 'selected' : '' }} value="provincial">استانی</option>
        <option {{old('activity_type') == 'global' ? 'selected' : '' }} value="global">سراسری</option>
      </select>
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="col-sm-12 my-3">
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="is_reference" value="1" {{old('is_reference') ? 'checked' : '' }}>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description"> این پذیرنده مرجع نیز می&zwnj;باشد. </span>
      </label>
    </fieldset>

    {{-------------------------------------------------------------}}

    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4">ذخیره</button>

  </form>
</div>
