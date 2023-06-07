@extends("layouts.app")

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{__('custom.massOrder')}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('custom.massOrder')}}
                                / {{__('custom.create')}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                </div>
            </div>

            <!--end breadcrumb-->
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    {{--                            <h6 class="mb-0 text-uppercase">Profession Section</h6>--}}
                    <hr/>
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3" method="POST" action="{{ $route }}">
                                    @csrf
                                    <div class="col-md-12">
                                        <label for="service" class="form-label">{{__('custom.servicePackages')}} *</label>
                                        <select class="multiple-select" name="servicePackages[]" id="servicePackages" multiple="multiple" required>
                                            @foreach($services as $service)
{{--                                                <option {{$user_order->service_id == $item->id ? 'selected' : ''}} value="{{$item->id}}">--}}
                                                <option value="{{$service->id}}" disabled>{{$service->name}}</option>

                                                @foreach($service->getAllPackages as $item)
                                                    <option value="{{$item->id}}">-> {{$item->name}} / {{$item->price}} (per 1K) min: {{$item->min}} max: {{$item->max}} </option>
                                                @endforeach
                                            @endforeach
                                        </select>
                                        @error('service')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">{{ __('custom.next')}}</button>
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

@section("script")
    <script>
        (function () {
            'use strict'
        })()
        $('.multiple-select',).select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>
@endsection
