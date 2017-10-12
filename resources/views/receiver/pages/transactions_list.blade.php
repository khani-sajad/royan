<table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th>ردیف</th>
      <th>نوع مشتری</th>
      <th>پرداخت حضوری</th>
      <th>پرداخت اعتباری</th>
      <th>توضیحات</th>
      <th>تاریخ</th>
      <th>ساعت</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($transactions as $key => $transaction)
      <tr>
        <th scope="row">{{$key+1}}</th>
        <td>{{translate($transaction->customer_type)}}</td>
        <td>{{toman($transaction->cash_amount)}}</td>
        <td>{{toman($transaction->credit_amount)}}</td>
        <td>{{$transaction->description}}</td>
        <td title="{{jDate::forge($transaction->created_at)->format('%d %B %Y')}}" data-toggle="tooltip">
          {{jDate::forge($transaction->created_at)->format('date')}}
        </td>
        <td title="{{jDate::forge($transaction->created_at)->ago()}}" data-toggle="tooltip">
          {{jDate::forge($transaction->created_at)->format('time')}}
        </td>
        {{-- <td>{{$transaction->created_at}}</td> --}}
      </tr>
    @endforeach
  </tbody>
</table>
{{ $transactions->links() }}
