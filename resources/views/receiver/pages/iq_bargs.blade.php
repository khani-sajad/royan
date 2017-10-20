<div class="row">
    @foreach ($bargs as $barg)
        <div class=" col-md-3 my-2">
            <div class="card text-center">
                @if ($barg->used)
                    <div class="card-header bg-danger">
                        استفاده شده
                    </div>
                    <div class="card-block p-2">
                        <h4 class="card-title">{{$barg->number}}</h4>
                        <small class="card-text">
                            این آیکیوبرگ در تاریخ
                            <span>{{jDate::forge($barg->updated_at)->format('%d %B %Y')}}</span>
                             استفاده شده است.
                        </small>
                    </div>
                @elseif ($barg->reference_id)
                    <div class="card-header bg-warning">
                        اختصاص داده شده.
                    </div>
                    <div class="card-block p-2">
                        <h4 class="card-title">{{$barg->number}}</h4>
                        <small class="card-text">
                            این آیکیوبرگ در تاریخ
                            <span>{{jDate::forge($barg->updated_at)->format('%d %B %Y')}}</span>
                             به <a href="#">{{reference_name($barg->reference_id)}}</a> اختصاص داده شد.
                        </small>
                    </div>
                @else
                    <div class="card-header bg-success">
                        قابل اختصاص
                    </div>
                    <div class="card-block p-2">
                        <h4 class="card-title">{{$barg->number}}</h4>
                        <small class="card-text">
                            این آیکیو برگ هنوز به کسی اختصاص داده نشده است.
                        </small>
                    </div>
                @endif
                <div class="card-footer text-muted">

                </div>
            </div>
        </div>
    @endforeach
</div>
