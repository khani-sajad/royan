<div class="container-fluid">
  <form class="row" action="{{url('legals')}}" method="post" data-card-reader>
    {{csrf_field()}}

    @include('partials.forms.card', ['cols' => 4])
    @include('partials.forms.telephone', ['col' => 4])
    @include('partials.forms.legal_info', ['cols' => 4])
    @include('partials.forms.location', ['cols' => 4])
    @include('partials.forms.user_pass', ['cols' => 6])
    @include('partials.forms.is_reference')


    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4">ذخیره</button>

  </form>
</div>
