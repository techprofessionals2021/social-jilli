@extends('layouts.app')

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ __('custom.campaigns') }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{ __('custom.campaigns') }}
                                / {{ !$edit ? __('custom.create') : __('custom.edit') }}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    {{--                            <h6 class="mb-0 text-uppercase">Profession Section</h6> --}}
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3" method="POST"
                                    action="{{ $edit ? route('campaign.update', $campaign->id) : $route }}">
                                    @csrf @if ($edit)
                                        @method('PUT')
                                    @endif
                                    <div class="col-12">
                                        <label for="name" class="form-label">{{ __('custom.campaignName') }} *</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                            value="{{ old('name', $campaign->name) }}" minlength="3"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.campaignName') }}" required>
                                        @error('name')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="form-group col-6">
                                        <label>{{ __('custom.traffic_quality') }} *</label>
                                        <div class="d-flex mt-1 ">
                                            <div class="form-check btn btn-outline-dark px-xxl-5 m-1">
                                                <input class="form-check-input checkradio" type="radio"
                                                    name="traffic_quality" id="traffic_quality_standard" value="standard"
                                                    {{ $campaign->traffic_quality == 'standard' ? 'checked' : '' }}
                                                    checked>
                                                <label class="form-check-label" for="traffic_quality_standard">
                                                    {{ __('custom.standard') }}
                                                </label>
                                            </div>
                                            <div class="form-check btn btn-outline-dark px-xxl-5 m-1 ">
                                                <input class="form-check-input checkradio" type="radio"
                                                    name="traffic_quality" id="traffic_quality_premium" value="premium"
                                                    {{ $campaign->traffic_quality == 'premium' ? 'checked' : '' }}>
                                                <label class="form-check-label" for="traffic_quality_premium">
                                                    {{ __('custom.premium') }}
                                                </label>
                                            </div>
                                        </div>

                                        @error('traffic_quality')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror

                                    </div>



                                    <div class="form-group col-6">
                                        <label>{{ __('custom.pricing_model') }} *</label>
                                        <div class="d-flex mt-1">
                                            {{--                                            <div class="form-check btn btn-outline-dark px-xxl-5 m-1"> --}}
                                            {{--                                                <input class="form-check-input" type="radio" name="pricing_model" id="" value="cpc"  {{ ($campaign->pricing_model=="cpc") ? "checked" : "" }} > --}}
                                            {{--                                                <label class="form-check-label" for="exampleRadios1"> --}}
                                            {{--                                                CPC --}}
                                            {{--                                                </label> --}}
                                            {{--                                            </div> --}}
                                            <div class="form-check btn btn-outline-dark px-xxl-5 m-1">
                                                <input class="form-check-input" type="radio" name="pricing_model"
                                                    id="pricing_model_cpm" value="cpm"
                                                    {{ $campaign->pricing_model == 'cpm' ? 'checked' : '' }} checked>
                                                <label class="form-check-label" for="pricing_model_cpm">
                                                    CPM
                                                </label>
                                            </div>
                                        </div>

                                        @error('pricing_model')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="exampleFormControlSelect1" class="mb-2">
                                            {{ __('custom.campaign_group') }} *</label>
                                        <select class="form-control" id="exampleFormControlSelect1" name="campaign_group">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                        </select>
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="name" class="form-label"> {{ __('custom.target_url') }} * </label>
                                        <input type="text" name="target_url" class="form-control" id="target_url"
                                            value="{{ old('target_url', $campaign->target_url) }}" minlength="3"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.target_url') }}" required>
                                        @error('target_url')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>


                                    <div class="form-group col-6">
                                        <label for="name" class="form-label"> {{ __('custom.frequency_capping') }} (per
                                            day) * </label>
                                        <input type="number" name="frequency_capping" class="form-control"
                                            id="frequency_capping"
                                            value="{{ old('frequency_capping', $campaign->frequency_capping) }}"
                                            max="10" minlength="3"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.frequency_capping') }}"
                                            required>
                                        @error('frequency_capping')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>


                                    <div class="form-group col-6">
                                        <label for="name" class="form-label">
                                            {{ __('custom.conversion_postback_url') }} </label>
                                        <input type="text" name="conversion_postback_url" class="form-control"
                                            id=""
                                            value="{{ old('conversion_postback_url', $campaign->conversion_postback_url) }}"
                                            minlength="3"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.conversion_postback_url') }}">
                                        @error('conversion_postback_url')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <h4>Button Details</h4>



                                    <div class="form-group col-6">
                                        <label for="name" class="form-label"> {{ __('custom.title') }} </label>
                                        <input type="text" name="btn_title" class="form-control" id=""
                                            value="{{ old('btn_title', $campaign->btn_title) }}" minlength="3"
                                            placeholder="{{ __('custom.enter') }} Button {{ __('custom.title') }}">
                                        @error('btn_title')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>



                                    <div class="form-group col-6">
                                        <label for="name" class="form-label"> {{ __('custom.description') }} </label>
                                        <input type="text" name="btn_description" class="form-control" id=""
                                            value="{{ old('btn_description', $campaign->btn_description) }}"
                                            minlength="3"
                                            placeholder="{{ __('custom.enter') }} Button {{ __('custom.description') }}">
                                        @error('btn_description')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>



                                    <h4>Targeting and Audiences</h4>

                                    <div class="form-group col-6">
                                        <label for="country" class="mb-2"> {{ __('custom.countries') }} *</label>
                                        <select class="multiple-select" multiple="multiple" required id="country"
                                            name="country[]">
                                            @foreach ($countryList['data'] as $key => $item)
                                                <option value="{{ $key }}">{{ $item }}</option>
                                            @endforeach
                                        </select>

                                        @error('country')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    {{--                                    <div class="form-group col-6"> --}}
                                    {{--                                        <label for="exampleFormControlSelect1" class="mb-2"> {{__('custom.cities')}} *</label> --}}
                                    {{--                                        <select class="form-control" id="exampleFormControlSelect1" name="city"> --}}
                                    {{--                                          <option value="1">1</option> --}}
                                    {{--                                          <option value="2">2</option> --}}
                                    {{--                                        </select> --}}

                                    {{--                                        @error('city') --}}
                                    {{--                                        <strong class="text-danger">{{ $message }}</strong> --}}
                                    {{--                                        @enderror --}}
                                    {{--                                    </div> --}}


                                    <div class="form-group col-6">
                                        <label for="device" class="mb-2"> {{ __('custom.device') }} *</label>
                                        <select class="multiple-select" multiple="multiple" required id="device"
                                            name="device[]">
                                            <option value="1">Desktop</option>
                                            <option value="2">Mobile</option>
                                        </select>

                                        @error('device')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    {{-- =================================== --}}
                                    <div class="form-group col-6">
                                        <label for="os" class="mb-2"> {{ __('custom.os') }} *</label>
                                        <select class="multiple-select" multiple="multiple" required id="os"
                                            name="os[]">
                                            @foreach ($osList['data'] as $key => $item)
                                                <option value="{{ $key }}">{{ $item }}</option>
                                            @endforeach
                                        </select>

                                        @error('os')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="os_version" class="mb-2"> {{ __('custom.os_version') }} *</label>
                                        <select class="multiple-select" multiple="multiple" required id="os_version"
                                            name="os_version[]">
                                        </select>

                                        @error('os_version')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>



                                    {{-- =================================== --}}








                                    <div class="form-group col-6">
                                        <label for="browser" class="mb-2"> {{ __('custom.browser') }} *</label>
                                        <select class="multiple-select" multiple="multiple" required id="browser"
                                            name="browser[]">
                                            @foreach ($browserList['data'] as $key => $item)
                                                <option value="{{ $key }}">{{ $item }}</option>
                                            @endforeach
                                        </select>

                                        @error('browser')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="form-group col-6">
                                        <label for="browser_language" class="mb-2"> {{ __('custom.browser_language') }}
                                            *</label>
                                        <select class="multiple-select" multiple="multiple" required
                                            id="browser_language" name="browser_language[]">
                                            @foreach ($browserLanguagesList['data'] as $key => $item)
                                                <option value="{{ $key }}">{{ $item }}</option>
                                            @endforeach
                                        </select>

                                        @error('browser_language')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>


                                    <div class="form-group col-6">
                                        <label for="connection_type" class="mb-2"> {{ __('custom.connection_type') }}
                                            *</label>
                                        <select class="form-control" id="connection_type" name="connection_type">
                                            <option value="1">Mobile</option>
                                            <option value="2">WiFi/Cable</option>
                                        </select>

                                        @error('connection_type')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="form-group col-6">
                                        <label for="audiencesType" class="mb-2"> Type *</label>
                                        <select class="multiple-select" id="audience_type" name="audience_type">
                                            <option value="black">BlackList</option>
                                            <option value="white">Whitelist</option>
                                        </select>

                                        @error('connection_type')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>


                                    <div class="form-group col-6">
                                        <label for="browser_language" class="mb-2"> Audiences: *</label>
                                        <select class="multiple-select" multiple="multiple" required id="audiences"
                                            name="audiences[]">
                                            @foreach ($audienceList['data']['audiences'] as $key => $item)
                                                <option value="{{ $item['id'] }}">{{ $item['name'] }}</option>
                                            @endforeach
                                        </select>

                                        @error('browser_language')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>



                                    <h4>Bid</h4>

                                    <div id="mydiv" class="row">



                                    </div>





                                    <h4>Advertising Limit</h4>

                                    <div class="col-6">
                                        <label for="name" class="form-label">{{ __('custom.totalBudgetLimitIn$') }}
                                            *</label>
                                        <input type="number" name="total_budget_limit" class="form-control"
                                            id="total_budget_limit"
                                            value="{{ old('total_budget_limit', $campaign->total_budget_limit) }}"
                                            minlength="10" step=".001"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.totalBudgetLimitIn$') }}"
                                            required>
                                        @error('total_budget_limit')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>



                                    <div class="col-6">
                                        <label for="name" class="form-label">{{ __('custom.dailyBudgetIn$') }}
                                            *</label>
                                        <input type="number" name="daily_budget_limit" class="form-control"
                                            id="daily_budget_limit"
                                            value="{{ old('daily_budget_limit', $campaign->daily_budget_limit) }}"
                                            minlength="10" step=".001"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.dailyBudgetIn$') }}"
                                            required>
                                        @error('daily_budget_limit')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>



                                    <div class="col-6">
                                        <label for="name" class="form-label">{{ __('custom.totalClickLimit') }}
                                            *</label>
                                        <input type="number" name="total_click_limit" class="form-control"
                                            id="total_click_limit"
                                            value="{{ old('total_click_limit', $campaign->total_click_limit) }}"
                                            minlength="10"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.totalClickLimit') }}"
                                            required>
                                        @error('total_click_limit')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>




                                    <div class="col-6">
                                        <label for="name" class="form-label">{{ __('custom.dailyClickLimit') }}
                                            *</label>
                                        <input type="number" name="daily_click_limit" class="form-control"
                                            id="daily_click_limit"
                                            value="{{ old('daily_click_limit', $campaign->daily_click_limit) }}"
                                            minlength="10"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.dailyClickLimit') }}"
                                            required>
                                        @error('daily_click_limit')
                                            <strong class="text-danger">{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    {{--                                    <div class="col-md-6"> --}}
                                    {{--                                        <label for="service" class="form-label">{{__('custom.service')}} *</label> --}}
                                    {{--                                        <select class="single-select2" name="service_id" id="service" required> --}}
                                    {{--                                            @foreach ($services as $item) --}}
                                    {{--                                                <option {{$order->service_id == $item->id ? 'selected' : ''}} value="{{$item->id}}"> --}}
                                    {{--                                                    {{$item->name}}</option> --}}
                                    {{--                                            @endforeach --}}
                                    {{--                                        </select> --}}
                                    {{--                                        @error('service') --}}
                                    {{--                                        <strong>{{ $message }}</strong> --}}
                                    {{--                                        @enderror --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="col-md-6"> --}}
                                    {{--                                        <label for="price" class="form-label">{{__('custom.price')}}*</label> --}}
                                    {{--                                        <input type="number" minlength="10" step=".001" name="price" class="form-control" id="price" --}}
                                    {{--                                               value="{{ old('price',$order->price) }}" --}}
                                    {{--                                               placeholder="{{__('custom.enter')}} {{__('custom.price')}}" --}}
                                    {{--                                               required> --}}
                                    {{--                                        @error('price') --}}
                                    {{--                                        <strong>{{ $message }}</strong> --}}
                                    {{--                                        @enderror --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="col-md-6"> --}}
                                    {{--                                        <label for="min" class="form-label">{{__('custom.min')}}*</label> --}}
                                    {{--                                        <input type="number" min="0" name="min" class="form-control" id="min" --}}
                                    {{--                                               value="{{ old('min',$order->min) }}" --}}
                                    {{--                                               placeholder="{{__('custom.enter')}} {{__('custom.min')}}" --}}
                                    {{--                                               required> --}}
                                    {{--                                        @error('min') --}}
                                    {{--                                        <strong>{{ $message }}</strong> --}}
                                    {{--                                        @enderror --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="col-md-6"> --}}
                                    {{--                                        <label for="max" class="form-label">{{__('custom.max')}}*</label> --}}
                                    {{--                                        <input type="number" min="0" name="max" class="form-control" id="max" --}}
                                    {{--                                               value="{{ old('max',$order->max) }}" --}}
                                    {{--                                               placeholder="{{__('custom.enter')}} {{__('custom.max')}}" --}}
                                    {{--                                               required> --}}
                                    {{--                                        @error('max') --}}
                                    {{--                                        <strong>{{ $message }}</strong> --}}
                                    {{--                                        @enderror --}}
                                    {{--                                    </div> --}}
                                    {{--                                    <div class="col-md-6"> --}}
                                    {{--                                        <label for="status" class="form-label">{{__('custom.status')}} *</label> --}}
                                    {{--                                        <select class="single-select" name="status" id="status" required> --}}
                                    {{--                                            @foreach ($getStatus as $item) --}}
                                    {{--                                                <option {{$order->status_id == $item->id ? 'selected' : ''}} value="{{$item->id}}"> --}}
                                    {{--                                                    {{$item->name}}</option> --}}
                                    {{--                                            @endforeach --}}
                                    {{--                                        </select> --}}
                                    {{--                                        @error('status') --}}
                                    {{--                                        <strong>{{ $message }}</strong> --}}
                                    {{--                                        @enderror --}}
                                    {{--                                    </div> --}}

                                    {{--                                    <div class="col-md-12"> --}}
                                    {{--                                        <label for="description" class="form-label">{{__('custom.description')}} *</label> --}}
                                    {{--                                        <textarea name="description" required class="form-control" id="description" placeholder="{{__('custom.enter')}} {{__('custom.description')}}">{{old('description',$order->description)}}</textarea> --}}
                                    {{--                                        @error('description') --}}
                                    {{--                                        <strong>{{ $message }}</strong> --}}
                                    {{--                                        @enderror --}}
                                    {{--                                    </div> --}}

                                    <div class="col-12">
                                        <button class="btn btn-primary"
                                            type="submit">{{ !$edit ? __('custom.submit') : __('custom.update') }}</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->
        </div>
    </div>
@endsection

@section('script')
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict'
        })()
        $('.single-select', ).select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
        $('.multiple-select', ).select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });

        $("#device").change(function() {


            var selectedValues = $("#device").val();
            // console.log(this.value);
            // Log the selected values to the console
            // if (selectedValues == 1) {
            //     console.log(selectedValues);
            // }


            var selectElement = $('#os');

            if (selectedValues == 1) {


                selectElement.find('option[value="4"], option[value="5"], option[value="7"]').prop("disabled",
                    true);
                selectElement.find('option[value="1"], option[value="2"], option[value="3"], option[value="6"]')
                    .prop('disabled', false);



            }

            if (selectedValues == 2) {

                selectElement.find('option[value="1"], option[value="2"], option[value="3"], option[value="6"]')
                    .prop("disabled", true);
                selectElement.find('option[value="4"], option[value="5"], option[value="7"]').prop("disabled",
                    false);

            }


            // alert(this.value);



        });

        var selectedOption;
        $("#country").change(function() {

            var currentSelection = $("#country :selected").val();


            if (selectedOption) {
                var currentValues = $(this).val();
                currentSelection = currentValues.filter(function(el) {
                    // alert(el);
                    return selectedOption.indexOf(el) < 0;
                });
            }
            selectedOption = $(this).val();

            // alert(selectedOption);


            // alert(text);

            var html = '';

            html += '<div id="inputFormRow">';
            // html += '<div class="col-6">';

            html += 'Country Code : ' + currentSelection +
                '  <label for="name"class="form-label">CPC in $: *</label>';

            html += '<div class="input-group mb-3">';
            html +=
                '<input type="number" class="form-control" name="cost[]" data-code="" value="" autocomplete="off" placeholder="0,00" min="0.001" max="0.5" required="" step="0.001">';
            // html += '<button> <label for="winrate"class="form-label">WinRate n/a</label> <button';

            html += '<div class="input-group-append">';
            html +=
                '<button id="removeRow" type="button" class="btn btn-danger"  style="margin-left:10px;">Delete</button>';
            html += '</div>';
            // html += '</div>';


            $('#mydiv').append(html);

            // remove row
            $(document).on('click', '#removeRow', function() {
                $(this).closest('#inputFormRow').remove();
            });


            // $("#mydiv").append('<div class="form-group col-6">Country Code : '+currentSelection+'  <label for="name"class="form-label">CPC in $: *</label><input type="number" class="form-control" name="cost[]" data-code="" value="" autocomplete="off" placeholder="0,00" min="0.001" max="0.5" required="" step="0.001"><i class="bx bx-cookie"></i> <label for="winrate"class="form-label">WinRate n/a</label>  </div> ');

            // alert(selectedOption);
            // $('#result').text(currentSelection);

            // $("#country :selected").map(function(i, el) {
            //     console.log($(el).val());
            // }).get();


            // $('#country :selected').each(function(i, sel){ 
            // // alert( $(this).text() ); 
            // alert($(sel).text());
            //     if($(this).text() === $(sel).text()) {
            //         $("#mydiv").append('<div class="row"> <div class="col-6">  Name Country : '+$(sel).text()+'  <label for="name"class="form-label">CPC in $: *</label><input type="number" class="form-control" name="cost" data-code="" value="" autocomplete="off" placeholder="0,00" min="0.001" max="0.5" required="" step="0.001">@error('cost')<strong class="text-danger">{{ $message }}</strong>@enderror <label for="winrate"class="form-label">WinRate</label> <h3>n/a </h3> </div></div>');
            //         return false;
            //    }

            //    else{
            //     return false;
            //    }

            //   

            // });



        });






        //=====
    </script>

    <script>
        $(document).ready(function() {
            // Get the OS and OS version select fields
            var osSelect = $('#os');
            var osVersionSelect = $('#os_version');

            // Store all OS versions in an object
            var osVersions = {!! json_encode($osVersionsList['data']) !!};

            // Listen for changes on the OS select field
            osSelect.on('change', function() {
                // Clear all options in the OS version select field
                osVersionSelect.empty();

                // Get the selected OS option values
                var selectedOS = osSelect.val();

                // Check if any OS is selected
                if (selectedOS !== null) {
                    // Iterate through all selected OS values
                    $.each(selectedOS, function(index, osValue) {
                        // Check if the selected OS has any versions
                        if (osVersions[osValue] !== undefined) {
                            // Add a separator option for each selected OS
                            osVersionSelect.append($('<option>', {
                                disabled: true,
                                text: "{{ __('custom.os_version') }} - " + osSelect
                                    .find("option[value='" + osValue + "']").text()
                            }));

                            // Add all versions of the selected OS as options in the OS version select field
                            $.each(osVersions[osValue], function(index, osVersion) {
                                osVersionSelect.append($('<option>', {
                                    value: osValue + '|' + osVersion,
                                    text: osSelect.find("option[value='" +
                                            osValue + "']").text() + " " +
                                        osVersion
                                }));
                            });
                        }
                    });
                }

                // Trigger the change event on the OS version select field to update the selected values
                osVersionSelect.trigger('change');
            });

            // Listen for changes on the OS version select field
            osVersionSelect.on('change', function() {
                // Remove any "no result found" options from the select field
                osVersionSelect.find('option[value=""]').remove();
            });
        });
    </script>
@endsection
