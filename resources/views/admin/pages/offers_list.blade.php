<table class="table table-bordered">
  <thead>
    <tr>
      <th>موضوع</th>
      <th>از تاریخ</th>
      <th>لغایت</th>
      <th>نوع</th>
      <th colspan="3">عملیات</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($offers as $offer)
      <tr>
        <td>{{$offer->subject}}</td>
        <td>{{$offer->since ? $offer->since : '-'}}</td>
        <td>{{$offer->untill ? $offer->untill : '-'}}</td>
        <td>{{offer_type($offer->type)}}</td>
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
          <form class="d-inline" action="{{url('offers/'.$offer->id)}}" method="post">
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
