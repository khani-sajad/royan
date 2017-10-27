<div class="row p-3">
    <div class="col-sm-4">
        <div class="alert alert-info">
            تعداد آیکبوبرگ های فعلی :
            <span>{{$count}}</span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="alert alert-info">
            اختصاص داده شده :
            <span>0</span>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="alert alert-info">
            استفاده شده :
            <span>0</span>
        </div>
    </div>
</div>

<hr>

<p class="h4 dinar text-primary"> تعریف سری آیکیوبرگ ها </p>
<form class="row p-3" action="{{url('/bargs')}}" method="post">
    {{csrf_field()}}

    <fieldset class="form-group col-sm-6">
      <label for="number_from">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره کارت از :
      </label>
      <input value="{{old('number_from')}}" type="text" class="form-control" id="number_from"  name="number_from">
    </fieldset>
    <fieldset class="form-group col-sm-6">
      <label for="number_untill">
        <i class="fa fa-asterisk small text-danger ml-1"></i>
        شماره کارت تا :
      </label>
      <input value="{{old('number_untill')}}" type="text" class="form-control" id="number_untill"  name="number_untill">
    </fieldset>


    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4 mt-2"> اضافه کردن به لیست آیکیوبرگ ها </button>

</form>

<hr>

<p class="h4 dinar text-primary pb-2"> فایل های اکسل قبلی </p>
<div class="row">
    @foreach ($files as $key => $file)
        @if ($key>1)
            <div class="col-md-3">
                <a class="mx-2 calibri" href="{{storage('excels/'.$file)}}" download>
                    <i class="fa fa-download"></i>
                    {{$file}}
                </a>
            </div>
        @endif
    @endforeach
</div>
