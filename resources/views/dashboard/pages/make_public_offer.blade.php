<div class="container-fluid">
  <form class="row" action="{{url('offers')}}" method="post" data-card-reader>
    {{csrf_field()}}
    <fieldset class="form-group col-sm-4">
      <label for="subject">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        موضوع آفر
      </label>
      <input value="{{old('subject')}}" type="text" class="form-control" id="subject" name="subject">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="since">
        از روز
      </label>
      <input value="{{old('since')}}" type="text" data-calendar="persian" class="form-control" id="since"  name="since">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="untill">
        تا روز
      </label>
      <input value="{{old('untill')}}" type="text" data-calendar="persian" class="form-control" id="untill"  name="untill">
    </fieldset>

    {{---------------------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="resorts">
        دفعات مراجعه
      </label>
      <input value="{{old('resorts')}}" type="text" class="form-control" id="resorts"  name="resorts" maxlength="11">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="number_of_shops">
        تعداد خرید
      </label>
      <input value="{{old('number_of_shops')}}" type="text" class="form-control" id="number_of_shops"  name="number_of_shops">
    </fieldset>

    {{---------------------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="amount">
          مبلغ خرید
      </label>
      <input value="{{old('amount')}}" type="text" class="form-control commo" id="amount"  name="amount">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="discount">
        مقدار تخفیف
      </label>
      <input value="{{old('discount')}}" type="text" class="form-control commo" id="discount"  name="discount">
    </fieldset>

    {{-------------------------------------------------------------}}

    <fieldset class="form-group col-sm-6">
      <label for="points">
          امتیاز
      </label>
      <input value="{{old('points')}}" type="text" class="form-control" id="points"  name="points">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="gift">
          هدیه
      </label>
      <input value="{{old('gift')}}" type="text" class="form-control" id="gift"  name="gift">
    </fieldset>


    {{-------------------------------------------------------------}}

    <input type="hidden" name="type" value="1">
    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4">ذخیره</button>

  </form>
</div>
