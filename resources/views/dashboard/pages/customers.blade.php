<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>نام</th>
      <th>موبایل</th>
      <th>کد ملی</th>
      <th>شغل</th>
      <th>استان</th>
      <th>شهر</th>
      <th>منطقه شهری</th>
      <th>تاریخ تولد</th>
      <th>تاریخ ازدواج</th>
      <th>نوع مشتری</th>
      <th>نحوه خرید</th>
      <th>معرف</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $key => $customer)
      <tr class="text-center">
        <th scope="row">{{$key+1}}</th>
        <td>{{ ($customer->first_name || $customer->last_name ) ? $customer->first_name .' '. $customer->last_name : '-' }}</td>
        <td>{{ $customer->mobile ? $customer->mobile : '-' }}</td>
        <td>{{ $customer->national_code ? $customer->national_code : '-' }}</td>
        <td>{{ $customer->job ? $customer->job : '-' }}</td>
        <td>{{ $customer->state ? $customer->state : '-' }}</td>
        <td>{{ $customer->city ? $customer->city : '-' }}</td>
        <td>{{ $customer->city_region ? $customer->city_region : '-'}}</td>
        <td>{{ $customer->birthday ? $customer->birthday : '-' }}</td>
        <td>{{ $customer->marriage_date ? $customer->marriage_date : '-' }}</td>
        <td>{{ $customer->person_type ? translate($customer->person_type) : '-' }}</td>
        <td>{{ $customer->buy_type ? translate_number($customer->buy_type,'buy_type') : '-' }}</td>
        <td>
          <i class="fa fa-{{$customer->is_reference ? 'check' : 'close'}} text-{{$customer->is_reference ? 'success' : 'danger'}}"></i>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $customers->links() }}
