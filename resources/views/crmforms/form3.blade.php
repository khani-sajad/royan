<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>CRM Form</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/forms.css')}}">
</head>
<body dir="rtl" class="p-1">

    <div class="alert alert-info text-center top-right-icon">
        <i class="fa fa-info-circle"></i>
        مشتری گرامی این نظر سنجی  کوتاه با هدف  ارتقای سطح کیفی خدمات و کالای این  کسب وکار به صورت بی نام طراحی شده است.
        لطفا ضمن پاسخ به کلیه سئوالات، با دقت، نظرات وپیشنهادات و انتقادات  خود را انعکاس دهید.
    </div>

    <form class="row m-1" action="index.html" method="post">

        <p class="border-top">  </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-mars fa-fw"></i></span>
            <div class="row">
                <label class="custom-control custom-radio">
                    <i class="fa fa-male radio"></i>
                    <input name="radio-stacked" type="radio" value="1" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">مرد</span>
                </label>
                <label class="custom-control custom-radio">
                    <i class="fa fa-female radio"></i>
                    <input name="radio-stacked" type="radio" value="0" class="custom-control-input">
                    <span class="custom-control-indicator"></span>
                    <span class="custom-control-description">زن</span>
                </label>
            </div>
        </div>

        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-street-view fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="تاریخ تولد">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-map-o fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="شهر محل سکونت">
        </div>

        <p class="border-top"> شغل خود را انتخاب کنید  </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-suitcase fa-fw"></i></span>
            <div class="">
                <select class="custom-select">
                  <option value="1" selected>بیکار</option>
                  <option value="2">کارمند بخش خصوصی</option>
                  <option value="3">کارمند بخش دولتی</option>
                  <option value="4">کارآفرین یا صاحب&zwnj;کار</option>
                  <option value="5">در حال تحصیل</option>
                </select>
            </div>
        </div>

        <p class="border-top"> نظر شما در مورد برخورد کارکنان این کسب وکار؟ </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
            <div class="">
                <select class="custom-select">
                  <option selected disabled> انتخاب کنید </option>
                  <option value="1">خیلی ضعیف</option>
                  <option value="2">ضعیف</option>
                  <option value="3">متوسط</option>
                  <option value="4">خوب</option>
                  <option value="5">عالی</option>
                </select>
            </div>
        </div>

        <p class="border-top"> نظر شما در مورد کیفیت کالا یا خدمات دریافتی؟ </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
            <div class="">
                <select class="custom-select">
                  <option selected disabled> انتخاب کنید </option>
                  <option value="1">خیلی ضعیف</option>
                  <option value="2">ضعیف</option>
                  <option value="3">متوسط</option>
                  <option value="4">خوب</option>
                  <option value="5">عالی</option>
                </select>
            </div>
        </div>

        <p class="border-top"> نظر شما در مورد قیمت کالا یا خدمت دریافتی در مقایسه با بازار؟ </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
            <div class="">
                <select class="custom-select">
                  <option selected disabled> انتخاب کنید </option>
                  <option value="1">خیلی ضعیف</option>
                  <option value="2">ضعیف</option>
                  <option value="3">متوسط</option>
                  <option value="4">خوب</option>
                  <option value="5">عالی</option>
                </select>
            </div>
        </div>

        <p class="border-top"> نظر شما در مورد نوع دکوراسیون، چینش و ظاهر  این کسب وکار؟ </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
            <div class="">
                <select class="custom-select">
                  <option selected disabled> انتخاب کنید </option>
                  <option value="1">خیلی ضعیف</option>
                  <option value="2">ضعیف</option>
                  <option value="3">متوسط</option>
                  <option value="4">خوب</option>
                  <option value="5">عالی</option>
                </select>
            </div>
        </div>

        <p class="border-top"> برای چندمین نوبت است که از این کسب وکار خرید میکنید؟ </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
            <div class="">
                <select class="custom-select">
                  <option selected disabled> انتخاب کنید </option>
                  <option value="1"> اولین نوبت </option>
                  <option value="2"> دومین نوبت </option>
                  <option value="3"> سومین نوبت </option>
                  <option value="4"> چهارمین نوبت </option>
                  <option value="5"> بیش از چهار بار </option>
                </select>
            </div>
        </div>

        <p class="border-top">  غالبا نوع خرید شما به چه صورت است؟ </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
            <div class="">
                <select class="custom-select">
                  <option selected disabled> انتخاب کنید </option>
                  <option value="1"> خرید عمده و تجاری </option>
                  <option value="2"> خرید جزئی وشخصی </option>
                </select>
            </div>
        </div>

        <p class="border-top"> آیا تمایل به خرید یا دریافت خدمت  مجدد و یا مراجعه بعدی به این کسب وکار را دارید؟ </p>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-question fa-fw"></i></span>
            <div class="">
                <select class="custom-select">
                  <option selected disabled> انتخاب کنید </option>
                  <option value="1"> بسته به نیازم دارد </option>
                  <option value="2"> بله احتمالا </option>
                  <option value="3"> بله حتما </option>
                  <option value="4"> خیر اصلا </option>
                  <option value="5"> احتمالا خیر </option>
                </select>
            </div>
        </div>

        <p class="border-top"> در مجموع  چه نمره ای به این کسب وکار از 0 تا 20  میدهید؟ </p>
        <div class="input-group mb-1">
            <span class="input-group-addon update">10</span>
            <input class="form-control" name="points" type="range" placeholder="عدد را وارد کنید" min="0" max="20"  onchange="updateTextInput(this.value);">
        </div>

        <div class="container">
            <div class="my-2 row">
                <button type="submit" class="btn btn-primary col-sm-2">تایید</button>
            </div>
        </div>

    </form>

    <script src="{{asset('js/jquery-3.2.1.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/popper.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/bootstrap.min.js')}}" charset="utf-8"></script>
    <script src="{{asset('js/forms.js')}}" charset="utf-8"></script>
</body>
</html>
