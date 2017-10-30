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
        با عضویت در باشگاه مشتریان این مجموعه، جدیدترین اخبار
        کالا و خدمات این کسب وکار به شما ارائه خواهد شد
        و در قرعه کشی جوایز مشتریان ما شرکت داده خواهید شد.
    </div>

    <form class="row m-1" action="index.html" method="post">

        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
            <input class="form-control" name="first_name" type="text" placeholder="نام">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-user-secret fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="نام خانوادگی">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-phone fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="تلفن همراه">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-suitcase fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="شغل">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-street-view fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="تاریخ تولد">
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
            <span class="input-group-addon"><i class="fa fa-building fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="منطقه شهری">
        </div>
        <div class="input-group mb-1">
            <span class="input-group-addon"><i class="fa fa-map-marker fa-fw"></i></span>
            <input class="form-control" name="last_name" type="text" placeholder="نشانی">
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
