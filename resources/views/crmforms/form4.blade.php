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
        مشتری گرامی این فرم جهت تسهیل در انعکاس شکایات شما از این واحد کسب وکار و در راستای سیاست مشتری مداری ما طراحی شده است.
        لطفا در طی مراحل کوتاه تکمیل فرم ذیل، توجه داشته باشید که جهت طرح "شکایت" و اعلام نتیجه پیگیری به شما، درج *نام  واقعی و *شماره یک خط  تلفن همراه در دسترس، ضروری  است.
        شما میتوانید در هر مورد *متن*عکس  یا فایل *صوتی یا *تصویری را به عنوان مستندات  شکایت و انتقاد خود،در بخش پایانی فرم پیوست نمایید.
    </div>

    <form class="row m-1" action="index.html" method="post">

        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input class="form-control" name="first_name" type="text" placeholder="نام و نام خانوادگی">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-flag fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="استان محل سکونت">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-map-o fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="شهر محل سکونت">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="تلفن همراه برای رسیدگی به شکایات">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-calendar fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="تاریخ خرید">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-sitemap fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="شعبه محل خرید">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-edit fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="شماره فاکتور">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-tty fa-fw"></i></span>
            <select class="custom-select form-control">
                <option selected disabled> شکایت شما در کدام موضوع است؟ </option>
                <option value="1"> روش کار </option>
                <option value="2"> محصول یا خدمات </option>
                <option value="3"> برخورد کارکنان </option>
            </select>
        </div>

        <textarea name="name" class="form-control" rows="4" placeholder="لطفا متن شکایت خود را به صورت شفاف و در چند بند بنویسید"></textarea>

        <div class="files my-3">
            <p class=""> ضمیمه کردن فایل ها </p>
            <input type="file" class="form-control-file" name="file[]">
            <div class="update">

            </div>
            <a href="javascript:void(0)" id="addFile" class="mt-3 d-inline-block">
                <i class="fa fa-plus ml-1"></i>
                فایل جدید
            </a>
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
