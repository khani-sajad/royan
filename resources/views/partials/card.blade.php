<p class="h4 dinar text-primary mb-4">مشخصات کارت</p>
<table class="table table-bordered">
  <thead>
    <tr>
      <th>شماره کارت</th>
      <th>نوع دارنده</th>
      <th>نوع کارت</th>
    </tr>
  </thead>
  <tbody>
    <tr class="text-center">
      <td>{{$card->number}}</td>
      <td>{{translate($card->cardable_type)}}</td>
      <td>{{translate($card->type)}}</td>
    </tr>
  </tbody>
</table>

<p class="h4 dinar text-primary mb-4">مشخصات دارنده کارت</p>
@if ($owner_type == 'receiver')
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>نام تجاری</th>
        <th>نام مدیریت</th>
        <th>صنف</th>
        <th>مرجع</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
        <td>{{$owner->business_name}}</td>
        <td>{{$owner->manager_name}}</td>
        <td>{{$owner->guild}}</td>
        <td>
          <i class="fa fa-{{$owner->is_reference ? 'check' : 'close'}} text-{{$owner->is_reference ? 'success' : 'danger'}}"></i>
        </td>
      </tr>
    </tbody>
  </table>
@elseif ($owner_type == 'legal')
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>نام تجاری</th>
        <th>نام مدیریت</th>
        <th>صنف</th>
        <th>تلفن</th>
        <th>مرجع</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
        <td>{{$owner->company_name}}</td>
        <td>{{$owner->manager_name}}</td>
        <td>{{$owner->guild}}</td>
        <td>{{$owner->telephone}}</td>
        <td>
          <i class="fa fa-{{$owner->is_reference ? 'check' : 'close'}} text-{{$owner->is_reference ? 'success' : 'danger'}}"></i>
        </td>
      </tr>
    </tbody>
  </table>
@elseif($owner_type == 'customer')
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>نام</th>
        <th>کد ملی</th>
        <th>موبایل</th>
        <th>شهر</th>
        <th>تاریخ تولد</th>
        <th>مسافر/شهروند</th>
        <th>عمده/خرده</th>
        <th>مرجع</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
        <td>{{$owner->first_name . ' ' . $owner->last_name}}</td>
        <td>{{$owner->national_code ? $owner->national_code : '-'}}</td>
        <td>{{$owner->mobile}}</td>
        <td>{{$owner->city ? $owner->city : '-'}}</td>
        <td>{{$owner->birthday ? $owner->birthday : '-'}}</td>
        <td>{{$owner->person_type ? translate($owner->person_type) : '-'}}</td>
        <td>{{$owner->buy_type ? translate_number($owner->buy_type,'buy_type') : '-'}}</td>
        <td>
          <i class="fa fa-{{$owner->is_reference ? 'check' : 'close'}} text-{{$owner->is_reference ? 'success' : 'danger'}}"></i>
        </td>
      </tr>
    </tbody>
  </table>
@endif

@if ($owner_type  != 'receiver')

  <hr>
  <div class="row p-3">
    <div class="col-sm-3">
      <p class="h5 dinar text-primary mb-4">موجودی کارت</p>
      <span class="credit">{{$credit ? toman($credit->amount) : 0}}</span>
    </div>
    <div class="col-sm-3">
      <p class="h5 dinar text-primary mb-4">امتیاز</p>
      <span class="credit">{{$credit ? $credit->points : 0 }}</span>
    </div>
    <div class="col-sm-3">
      <p class="h5 dinar text-primary mb-4">تعداد خرید</p>
      <span class="credit">{{$credit ? $credit->shop_count : 0}}</span>
    </div>
    <div class="col-sm-3">
      <p class="h5 dinar text-primary mb-4">مقدار خرید</p>
      <span class="credit">{{toman(number_format($total_amount))}}</span>
    </div>
    <div class="col-sm-3"></div>
    <div class="col-sm-6 stars mt-5 text-center">
      @for ($i = 1; $i <= 7; $i++)
        <i id="{{$i}}" class="star fa fa-star-o fa-2x"></i>
      @endfor
    </div>
  </div>
  <hr>

  <form class="row my-4" action="{{url('transactions')}}" method="post">
    {{csrf_field()}}
    <fieldset class="form-group col-sm-6">
      <label for="cash_amount">
        پرداخت حضوری به تومان
      </label>
      <input type="text" class="form-control commo" id="cash_amount" name="cash_amount">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="credit_amount">
        پرداخت اعتباری به تومان
      </label>
      <input type="text" class="form-control commo" id="credit_amount" name="credit_amount" >
    </fieldset>
    <fieldset class="form-group col-sm-11">
      <input type="text" class="form-control" id="description" name="description" placeholder="در صورت تمایل میتوانید توضیحات اضافه کنید">
    </fieldset>
    <fieldset class="form-group col-sm-1">
      <button type="submit" class="btn btn-primary px-3 font-weight-bold">ثبت</button>
    </fieldset>
  </form>
@else
  <div class="alert alert-warning p-4 text-center font-weight-bold mt-4">
    <i class="fa fa-warning ml-2"></i>
    دارنده کارت پذیرنده است
  </div>
@endif
