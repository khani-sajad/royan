<div class="container-fluid">
    <form class="row" action="{{url('customers')}}" method="post" data-card-reader>
        {{csrf_field()}}

        @include('partials.forms.card', ['cols' => 6])
        @include('partials.forms.phone', ['col' => 6])
        @include('partials.forms.national_code', ['col'  => 6])
        @include('partials.forms.full_name', ['cols' => 4])
        @include('partials.forms.job', ['col' => 4])
        @include('partials.forms.location', ['cols' => 4])
        @include('partials.forms.birthday', ['col' => 6])
        @include('partials.forms.marriage_date', ['col' => 6])
        @include('partials.forms.citizen_or_passenger', ['col' => 6])
        @include('partials.forms.general_or_single', ['col' => 6])
        @include('partials.forms.is_reference')

        <div class="col-sm-4"></div>
        <button type="submit" class="btn btn-primary col-sm-4">ذخیره</button>

    </form>
</div>
