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
        <th>مرجع</th>
      </tr>
    </thead>
    <tbody>
      <tr class="text-center">
        <td>{{$owner->first_name . ' ' . $owner->last_name}}</td>
        <td>{{$owner->national_code}}</td>
        <td>{{$owner->mobile}}</td>
        <td>{{$owner->city}}</td>
        <td>{{$owner->birthday}}</td>
        <td>
          <i class="fa fa-{{$owner->is_reference ? 'check' : 'close'}} text-{{$owner->is_reference ? 'success' : 'danger'}}"></i>
        </td>
      </tr>
    </tbody>
  </table>
@endif

<p class="h4 dinar text-primary mb-4">موجودی کارت</p>
