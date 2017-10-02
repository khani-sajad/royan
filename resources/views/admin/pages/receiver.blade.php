<div class="container-fluid">
  <form class="row" action="index.html" method="post">
    {{csrf_field()}}

    <fieldset class="form-group col-sm-6">
      <label for="business_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        نام واحد کسب&zwnj;و&zwnj;کار
      </label>
      <input type="text" class="form-control" id="business_name"  name="business_name">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="register_number">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره ثبت/جواز
      </label>
      <input type="text" class="form-control" id="register_number"  name="register_number">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="manager_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        نام مدیریت
      </label>
      <input type="text" class="form-control" id="manager_name"  name="manager_name">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="contact_name">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        نام رابط
      </label>
      <input type="text" class="form-control" id="contact_name"  name="contact_name">
    </fieldset>

    {{-------------------------------------------------------------}}


    <fieldset class="form-group col-sm-4">
      <label for="telegram_channel">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          کانال تلگرام
      </label>
      <input type="text" class="form-control" id="telegram_channel"  name="telegram_channel">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="telegram_id">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          آیدی تلگرام
      </label>
      <input type="text" class="form-control" id="telegram_id"  name="telegram_id">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="instagram_id">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          آیدی اینستاگرام
      </label>
      <input type="text" class="form-control" id="instagram_id"  name="instagram_id">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="email">
          ایمیل
      </label>
      <input type="email" class="form-control" id="email"  name="email">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="username">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          نام کاربری
      </label>
      <input type="text" class="form-control" id="username"  name="username">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="password">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
          رمز عبور
      </label>
      <input type="text" class="form-control" id="password"  name="password">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="state">
          استان
      </label>
      <input type="text" class="form-control" id="state"  name="state">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="city">
          شهر
      </label>
      <input type="text" class="form-control" id="city"  name="city">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="city_region">
          منطقه شهری
      </label>
      <input type="text" class="form-control" id="city_region"  name="city_region">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-3">
      <label for="guild">
          صتف
      </label>
      <input type="text" class="form-control" id="guild"  name="guild">
    </fieldset>
    <fieldset class="form-group col-sm-3">
      <label for="shopping_center">
          مرکز خرید
      </label>
      <input type="text" class="form-control" id="shopping_center"  name="shopping_center">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="address">
          نشانی
      </label>
      <input type="text" class="form-control" id="address"  name="address">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="commision_for_introducer">
        <i class="fa fa-asterisk small text-success ml-1"></i>
        درصد ثابت کمیسیون  پذیرنده برای معرف
      </label>
      <input type="text" class="form-control" id="commision_for_introducer"  name="commision_for_introducer">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <i class="fa fa-asterisk small text-success ml-1"></i>
      <label for="commision_for_introducer">
        امتیاز ثابت کمیسیون  پذیرنده برای معرف
      </label>
      <input type="text" class="form-control" id="commision_for_introducer"  name="commision_for_introducer">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="commision_for_introducer">
        <i class="fa fa-asterisk small text-success ml-1"></i>
        درصد ثابت کمیسیون  پذیرنده برای شبکه
      </label>
      <input type="text" class="form-control" id="commision_for_introducer"  name="commision_for_introducer">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <i class="fa fa-asterisk small text-success ml-1"></i>
      <label for="points_for_network">
        امتیاز ثابت کمیسیون  پذیرنده برای شبکه
      </label>
      <input type="text" class="form-control" id="points_for_network"  name="points_for_network">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-12">
      <label for="points_for_network">
        مبلغ پشتیبانی ماهانه
      </label>
      <input type="text" class="form-control" id="points_for_network"  name="points_for_network">
    </fieldset>


    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-4">
      <label for="base_discount_percentage">
        درصد تخفیف پایه پذیرنده
      </label>
      <input type="text" class="form-control" id="base_discount_percentage"  name="base_discount_percentage">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="base_point">
        امتیاز پایه خرید
      </label>
      <input type="text" class="form-control" id="base_point"  name="base_point">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="base_point">
        تعداد قرعه کشی سالانه
      </label>
      <input type="text" class="form-control" id="base_point"  name="base_point">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-12">
      <label for="awards_list">
        فهرست جوایز
      </label>
      <textarea class="form-control" id="awards_list"  name="awards_list"></textarea>
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="sell_type">نوع فروش</label>
      <select class="form-control" id="sell_type" name="sell_type">
        <option value="1">خرده</option>
        <option value="2">عمده</option>
        <option value="3">هردو</option>
      </select>
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="activity_type">نوع فروش</label>
      <select class="form-control" id="activity_type" name="activity_type">
        <option value="independent">مستقل</option>
        <option value="shopping_center">مرکز خریدی</option>
        <option value="urban">شهری</option>
        <option value="provincial">استانی</option>
        <option value="global">سراسری</option>
      </select>
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="col-sm-12 my-3">
      <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="reference" value="1">
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description pointer"> این پذیرنده مرجه نیز میباشد. </span>
      </label>
    </fieldset>

    {{-------------------------------------------------------------}}

    <button type="submit" class="btn btn-primary col-sm-12">ذخیره</button>

  </form>
</div>