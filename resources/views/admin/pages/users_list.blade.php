<table class="table table-bordered">
  <thead>
    <tr>
      <th>نام کاربری</th>
      <th>نوع</th>
      <th colspan="3">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($users as $user)
      <tr>
        <td>{{$user->username}}</td>
        <td>{{translate($user->userable_type)}}</td>
        <td class="text-center">
          <a href="#">
            <i class="fa fa-list" data-toggle="tooltip" title="جزییات"></i>
          </a>
        </td>
        <td class="text-center">
          <a href="#">
            <i class="fa fa-edit text-success" data-toggle="tooltip" title="ویرایش"></i>
          </a>
        </td>
        <td class="text-center">
          <form class="d-inline" action="{{url(strtolower($user->userable_type).'s/'.$user->userable_id)}}" method="post">
            {{csrf_field()}}
            {{method_field('DELETE')}}
            <button type="button" class="link delete">
              <i class="fa fa-trash text-danger" data-toggle="tooltip" title="حذف"></i>
            </button>
          </form>
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
