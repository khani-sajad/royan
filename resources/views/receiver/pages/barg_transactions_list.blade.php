<table class="table table-bordered table-hover table-striped">
  <thead>
    <tr>
      <th> ردیف </th>
      <th> نوع معرف </th>
      <th> مبلغ </th>
      <th> توضیحات </th>
      <th> شماره آیکیوبرگ </th>
      <th> تاریخ </th>
      <th> ساعت </th>
    </tr>
  </thead>
  <tbody>
    @foreach ($list as $key => $item)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{ reference_type($item->reference_id) }}</td>
        <td>{{ $item->amount ? toman($item->amount) : 0 }}</td>
        <td>{{ $item->description ? $item->description : '-' }}</td>
        <td>{{ $item->barg_number ? $item->barg_number : '-' }}</td>
        <td title="{{jDate::forge($item->created_at)->format('%d %B %Y')}}" data-toggle="tooltip">
          {{jDate::forge($item->created_at)->format('date')}}
        </td>
        <td title="{{jDate::forge($item->created_at)->ago()}}" data-toggle="tooltip">
          {{jDate::forge($item->created_at)->format('time')}}
        </td>
      </tr>
    @endforeach
  </tbody>
</table>
{{ $list->links() }}
