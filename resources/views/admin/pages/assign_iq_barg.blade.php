<div class="alert alert-info">
    <ul>
        <li>تا به حال <span>{{$total_bargs}}</span> آیکیوبرگ به شما اختصاص داده شده است. </li>
        <li>شما <span>{{$barg_untill - $barg_from + 1}}</span> آیکیوبرگ دارید، که به کسی اختصاص داده نشده&zwnj;اند. </li>
        <li> شماره آیکیو برگ های اختصاص داده نشده، از <span>{{$barg_from}}</span> تا <span>{{$barg_untill}}</span> هستند. </li>
    </ul>
</div>

<form class="row p-3" action="{{url('/bargs')}}" method="post">
    {{csrf_field()}}

    <fieldset class="form-group col-sm-4">
      <label for="number_from">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره کارت از :
      </label>
      <input value="{{old('number_from')}}" type="text" class="form-control" id="number_from"  name="number_from">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="number_untill">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره کارت تا :
      </label>
      <input value="{{old('number_untill')}}" type="text" class="form-control" id="number_untill"  name="number_untill">
    </fieldset>
    <fieldset class="form-group col-sm-4">
      <label for="number_untill">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        به:
      </label>
      <input value="{{old('number_untill')}}" type="text" class="form-control" id="number_untill"  name="number_untill">
    </fieldset>


    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4 mt-2"> اضافه کردن به لیست آیکیوبرگ ها </button>

</form>
