<p class="h4 dinar text-primary mb-4">مشخصات آیکیوبرگ</p>
<table class="table table-bordered">
    <thead>
        <tr>
            <th> شماره کارت </th>
            <th> درصد تخفیف </th>
        </tr>
    </thead>
    <tbody>
        <tr class="text-center">
            <td> {{ $barg->number }} </td>
            <td> 10% </td>
        </tr>
    </tbody>
</table>

<p class="h4 dinar text-primary mb-4"> مشخصات معرف </p>
@if ($owner_type == 'receiver')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>نوع معرف</th>
                <th>نام تجاری</th>
                <th>نام مدیریت</th>
                <th>صنف</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td> پذیرنده </td>
                <td>{{ $reference->business_name ? $reference->business_name : '-' }}</td>
                <td>{{ $reference->manager_name ? $reference->manager_name : '-' }}</td>
                <td>{{ $reference->guild ? $reference->guild : '' }}</td>
            </tr>
        </tbody>
    </table>
@elseif ($owner_type == 'legal')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>نوع معرف</th>
                <th>نام تجاری</th>
                <th>نام مدیریت</th>
                <th>صنف</th>
                <th>تلفن</th>
            </tr>
        </thead>
        <tbody>
            <tr class="text-center">
                <td> مشتری حقوقی </td>
                <td>{{ $reference->company_name ? $reference->company_name : '-' }}</td>
                <td>{{ $reference->manager_name ? $reference->manager_name : '-' }}</td>
                <td>{{ $reference->guild ? $reference->guild : '-' }}</td>
                <td>{{ $reference->telephone ? $reference->telephone : '-' }}</td>
            </tr>
        </tbody>
    </table>
@elseif($owner_type == 'customer')
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>نوع معرف</th>
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
                <td> مشتری </td>
                <td>{{ ( $reference->first_name || $reference->last_name ) ? $reference->first_name . ' ' . $reference->last_name : '-' }}</td>
                <td>{{ $reference->national_code ? $reference->national_code : '-' }}</td>
                <td>{{ $reference->mobile }}</td>
                <td>{{ $reference->city ? $reference->city : '-' }}</td>
                <td>{{ $reference->birthday ? $reference->birthday : '-' }}</td>
                <td>{{ $reference->person_type ? translate($reference->person_type) : '-' }}</td>
                <td>{{ $reference->buy_type ? translate_number($reference->buy_type,'buy_type') : '-' }}</td>
                <td>
                    <i class="fa fa-{{$reference->is_reference ? 'check' : 'close'}} text-{{$reference->is_reference ? 'success' : 'danger'}}"></i>
                </td>
            </tr>
        </tbody>
    </table>
@endif

<p class="h4 dinar text-primary mb-4"> جزییات تراکنش </p>
<form class="row" action="{{url('barg_transactions')}}" method="post">
    {{csrf_field()}}
    <fieldset class="form-group col-sm-3">
      <input type="text" class="form-control commo" id="amount" name="amount" placeholder="مبلغ خرید به تومان" required>
    </fieldset>
    <fieldset class="form-group col-sm-8">
      <input type="text" class="form-control" id="description" name="description" placeholder="در صورت تمایل میتوانید توضیحات ارائه کنید.">
    </fieldset>
    <fieldset class="col-sm-1">
        <button type="submit" class="btn btn-primary">تایید</button>
    </fieldset>
</form>
