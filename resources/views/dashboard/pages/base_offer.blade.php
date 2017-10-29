<div class="container-fluid">
  <form class="row" action="{{url('receivers/'.$receiver->id)}}" method="post" data-card-reader>
    {{csrf_field()}}
    {{ method_field('PUT') }}

    <fieldset class="form-group col-sm-6">
      <label for="commision_percentage_for_introducer">
        <i class="fa fa-asterisk small text-success ml-1"></i>
        درصد ثابت کمیسیون  پذیرنده برای معرف
      </label>
      <input value="{{$receiver->commision_percentage_for_introducer}}" type="text" class="form-control" id="commision_percentage_for_introducer"  name="commision_percentage_for_introducer">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <i class="fa fa-asterisk small text-success ml-1"></i>
      <label for="commision_points_for_introducer">
        امتیاز ثابت کمیسیون  پذیرنده برای معرف
      </label>
      <input value="{{$receiver->commision_points_for_introducer}}" type="text" class="form-control" id="commision_points_for_introducer"  name="commision_points_for_introducer">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="commision_percentage_for_network">
        <i class="fa fa-asterisk small text-success ml-1"></i>
        درصد ثابت کمیسیون  پذیرنده برای شبکه
      </label>
      <input value="{{$receiver->commision_percentage_for_network}}" type="text" class="form-control" id="commision_percentage_for_network"  name="commision_percentage_for_network">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <i class="fa fa-asterisk small text-success ml-1"></i>
      <label for="commision_points_for_network">
        امتیاز ثابت کمیسیون  پذیرنده برای شبکه
      </label>
      <input value="{{$receiver->commision_points_for_network}}" type="text" class="form-control" id="commision_points_for_network"  name="commision_points_for_network">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <i class="fa fa-asterisk small text-success ml-1"></i>
      <label for="monthly_support_for_admin">
        مبلغ پشتیبانی ماهانه
      </label>
      <input value="{{$receiver->monthly_support_for_admin}}" type="text" class="form-control commo" id="monthly_support_for_admin"  name="monthly_support_for_admin">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <i class="fa fa-asterisk small text-success ml-1"></i>
      <label for="commision_percentage_for_admin">
        درصد ثابت کمیسیون  پذیرنده برای رویان رسانه
      </label>
      <input value="{{$receiver->commision_percentage_for_admin}}" type="text" class="form-control commo" id="commision_percentage_for_admin"  name="commision_percentage_for_admin">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="base_discount_percentage">
        درصد تخفیف پایه پذیرنده
      </label>
      <input value="{{old('base_discount_percentage')}}" type="text" class="form-control" id="base_discount_percentage"  name="base_discount_percentage">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="base_gift_percentage">
        درصد هدیه پایه پذیرنده
      </label>
      <input value="{{old('base_gift_percentage')}}" type="text" class="form-control" id="base_gift_percentage"  name="base_discount_percentage">
    </fieldset>


    {{-------------------------------------------------------------}}


    <fieldset class="form-group col-sm-4">
      <label for="base_point">
        امتیاز پایه خرید
      </label>
      <input value="{{old('base_point')}}" type="text" class="form-control" id="base_point"  name="base_point">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="for_each">
        به ازای چند خرید
      </label>
      <input value="{{old('for_each')}}" type="text" class="form-control" id="for_each"  name="for_each">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="min_amount">
        حداقل مقدار خرید
      </label>
      <input value="{{old('min_amount')}}" type="text" class="form-control" id="min_amount"  name="min_amount">
    </fieldset>


    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-12">
      <label for="number_of_lotteries">
        تعداد قرعه کشی سالانه
      </label>
      <input value="{{old('number_of_lotteries')}}" type="text" class="form-control" id="number_of_lotteries"  name="number_of_lotteries">
    </fieldset>
    <fieldset class="form-group col-sm-12">
      <label for="awards_list">
        فهرست جوایز
      </label>
      <textarea class="form-control" id="awards_list"  name="awards_list">{{old('awards_list')}}</textarea>
    </fieldset>


    {{-------------------------------------------------------------}}

    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4">ذخیره</button>

  </form>
</div>
