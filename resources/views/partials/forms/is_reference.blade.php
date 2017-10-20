<fieldset class="col-sm-12 my-3">
    <label class="custom-control custom-checkbox">
        <input type="checkbox" class="custom-control-input" name="is_reference" value="1" {{old('is_reference') ? 'checked' : '' }}>
        <span class="custom-control-indicator"></span>
        <span class="custom-control-description"> این شخص مرجع نیز می&zwnj;باشد. </span>
    </label>
</fieldset>
<fieldset class="col-sm-12">
    <div class="refToggle {{old('is_reference') ? '' : 'hidden' }}">

        <div class="row p-3">
            <input value="{{old('dedicated_cards')}}" type="text" class="form-control col-sm-5" id="dedicated_cards"  name="dedicated_cards" placeholder="تعداد کارت های اختصاصی">
            <p class="dedicated-cards-info col-sm-5 text-info">

            </p>
            <span id="bargFrom" class="hidden" data-value="1100010"></span>
        </div>

        <div class="alert alert-info">
            <ul>
                <li>شما <span>80</span> آیکیوبرگ استفاده نشده دارید. </li>
                <li> شماره آیکیو برگ ها از <span>1100010</span> تا <span>1100089</span> هستند. </li>
            </ul>
        </div>
    </div>
</fieldset>
