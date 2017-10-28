<div class="row">
    @foreach ($bargs as $barg)
        <div class=" col-md-3 my-2">
            <div class="card text-center">
                @if (!$barg->registered_for_id)
                    <div class="card-header bg-info">
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
                @elseif (!$barg->reference_id)
                    <div class="card-header bg-success">
                        قابل اختصاص به مرجع
                    </div>
                    <div class="card-block p-2">
                        <h4 class="card-title">{{$barg->number}}</h4>
                        <small class="card-text">
                            این آیکیوبرگ هم&zwnj;اکنون در اختیار
                            {{select_person($barg->registered_for)}}
                            میباشد.
                        </small>
                    </div>
                @else
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
                @endif
                <div class="card-footer text-muted">
                    {{ $barg->registered_for_id ? select_person($barg->registered_for) : 'رویان رسانه' }}
                </div>
            </div>
        </div>
    @endforeach
</div>

<div class="mt-3">
    {{$bargs->links()}}
</div>
