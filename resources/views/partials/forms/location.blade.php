<fieldset class="form-group col-sm-{{$cols}}">
    <label for="state">
        استان
    </label>
    <input value="{{old('state')}}" type="text" class="form-control" id="state"  name="state">
</fieldset>
<fieldset class="form-group col-sm-{{$cols}}">
    <label for="city">
        شهر
    </label>
    <input value="{{old('city')}}" type="text" class="form-control" id="city"  name="city">
</fieldset>
<fieldset class="form-group col-sm-{{$cols}}">
    <label for="city_region">
        منطقه شهری
    </label>
    <input value="{{old('city_region')}}" type="text" class="form-control" id="city_region"  name="city_region">
</fieldset>
