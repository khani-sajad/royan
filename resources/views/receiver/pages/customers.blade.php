<table class="table table-bordered table-hover">
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
      <th>مرجع</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($customers as $key => $customer)
      <tr class="text-center">
        <th scope="row">{{$key+1}}</th>
        <td>{{$customer->first_name .' '. $customer->last_name}}</td>
        <td>{{$customer->mobile}}</td>
        <td>{{$customer->national_code}}</td>
        <td>{{$customer->job}}</td>
        <td>{{$customer->state}}</td>
        <td>{{$customer->city}}</td>
        <td>{{$customer->city_region}}</td>
        <td>{{$customer->birthday}}</td>
        <td>{{$customer->marriage_date}}</td>
        <td>{{translate($customer->person_type)}}</td>
        <td>{{translate($customer->buy_type)}}</td>
        <td>
          <i class="fa fa-{{$customer->is_reference ? 'check' : 'close'}} text-{{$customer->is_reference ? 'success' : 'danger'}}"></i>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $customers->links() }}
