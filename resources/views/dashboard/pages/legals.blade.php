<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>نام شرکت</th>
      <th>نام مدیر</th>
      <th>صنف</th>
      <th>تلفن</th>
      <th>استان</th>
      <th>شهر</th>
      <th>منطقه شهری</th>
      <th>مرجع</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($legals as $key => $legal)
      <tr class="text-center">
        <th scope="row">{{$key+1}}</th>
        <td>{{ $legal->company_name ? $legal->company_name : '-' }}</td>
        <td>{{ $legal->manager_name ? $legal->manager_name : '-' }}</td>
        <td>{{ $legal->guild ? $legal->guild : '-' }}</td>
        <td>{{ $legal->telephone ? $legal->telephone : '-' }}</td>
        <td>{{ $legal->state ? $legal->state : '-' }}</td>
        <td>{{ $legal->city ? $legal->city : '-' }}</td>
        <td>{{ $legal->city_region ? $legal->city_region : '-'}}</td>
        <td>
          <i class="fa fa-{{$legal->is_reference ? 'check' : 'close'}} text-{{$legal->is_reference ? 'success' : 'danger'}}"></i>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $legals->links() }}
