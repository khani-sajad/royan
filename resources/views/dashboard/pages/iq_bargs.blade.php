<div class="row">
    @foreach ($bargs as $barg)
        <div class=" col-md-3 my-2">
            <div class="card text-center">
                @if ($barg->registered_for_id && $barg->reference_id)
                    <div class="card-header bg-warning">
                        اختصاص داده شده
                    </div>
                    <div class="card-block p-2">
                        <h4 class="card-title">{{$barg->number}}</h4>
                        <small class="card-text">
                            این آیکیوبرگ در تاریخ
                            <span>{{jDate::forge($barg->updated_at)->format('%d %B %Y')}}</span>
                             به <a href="#">{{reference_name($barg->reference_id)}}</a> اختصاص داده شد.
                        </small>
                    </div>
                @elseif(!$barg->registered_for_id && !$barg->reference_id)
                    <div class="card-header text-white bg-info">
                        فوج اول اختصاص
                    </div>
                    <div class="card-block p-2">
                        <h4 class="card-title">{{$barg->number}}</h4>
                        <small class="card-text">
                            این آیکیوبرگ در تاریخ
                            <span>{{jDate::forge($barg->created_at)->format('%d %B %Y')}}</span>
                             به لیست آیکیو&zwnj;ها اضافه شده است.
                        </small>
                    </div>
                @elseif(!$barg->reference_id)
                    <div class="card-header text-white bg-success">
                        قابل اختصاص به معرف
                    </div>
                    <div class="card-block p-2">
                        <h4 class="card-title">{{$barg->number}}</h4>
                        <small class="card-text">
                            این آیکیوبرگ هم&zwnj;اکنون در اختیار
                            {{reference_name($barg->registered_for_id,true)}}
                            میباشد.
                        </small>
                    </div>
                @endif
                <div class="card-footer text-muted">
                    {{ $barg->registered_for_id ? reference_name($barg->registered_for_id,true) : 'رویان رسانه' }}
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-3">
    {{$bargs->links()}}
</div>
