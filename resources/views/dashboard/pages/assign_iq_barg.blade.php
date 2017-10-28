<form class="row p-3" action="{{url('/assign_iq_bargs')}}" method="post">
    {{csrf_field()}}

    <fieldset class="form-group col-sm-6">
        <label for="number_from">
            شماره کارت از :
        </label>
        <input value="{{old('number_from')}}" type="text" class="form-control" id="number_from"  name="number_from">
    </fieldset>
    <fieldset class="form-group col-sm-6">
        <label for="number_untill">
            شماره کارت تا :
        </label>
        <input value="{{old('number_untill')}}" type="text" class="form-control" id="number_untill"  name="number_untill">
    </fieldset>
    <fieldset class="form-group col-sm-6">
        <label for="assign_to" class="control-label">
            اختصاص به:
        </label>
        <select name="to" class="form-control">
            <option disabled selected> انتخاب کنید </option>
            @foreach ($references as $reference)
                <option value="{{$reference->id}}">
                    {{reference_name($reference->id,true)}}
                    ({{$reference->dedicated_cards}})
                </option>
            @endforeach
        </select>
    </fieldset>
    <fieldset class="form-group col-sm-6">
        <label for="useable_in" class="control-label">
            قابل استفاده در:
        </label>
        <select name="useable_in" class="form-control">
            <option value="0">همه جا</option>
            @foreach ($receivers as $receiver)
                <option value="{{$receiver->id}}">{{$receiver->business_name}}</option>
            @endforeach
        </select>
    </fieldset>


    <div class="col-sm-4"></div>
    <button type="submit" class="btn btn-primary col-sm-4 mt-2"> اضافه کردن به لیست آیکیوبرگ ها </button>

</form>
