@extends("layouts.app")

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{__('custom.massOrderDetail')}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('custom.massOrderDetails')}}</li>
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
                                    @foreach($getPackages as $package)

                                    <div class="col-md-12">
                                        <input type="hidden" name="packageids[]" class="form-control" id="packageids" value="{{ $package->id }}">
                                        <label for="packageName" class="form-label">{{__('custom.packageName')}} *</label>
                                        <input type="text" readonly name="packageName[]" class="form-control" id="packageName"
                                               value="{{ $package->name }} / {{$package->price}} (per 1K) min: {{$package->min}} max: {{$package->max}}"
                                               placeholder="{{__('custom.packageName')}}" required>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="link" class="form-label">{{__('custom.link')}} *</label>
                                        <input type="text" name="link[]" class="form-control" id="link" value=""
                                               placeholder="{{__('custom.enter')}} {{__('custom.link')}}" required>
                                        @error('link')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="quantity" class="form-label">{{__('custom.quantity')}} *</label>
                                        <input type="number" name="quantity[]" data-price="{{$package->price}}" data-pack-id="{{$package->id}}" class="form-control quantity" id="quantity"
                                               value="" min="{{$package->min}}" max="{{$package->max}}"
                                               placeholder="{{__('custom.enter')}} {{__('custom.quantity')}}" required>
                                        @error('quantity')
                                        <strong>{{ $message }}</strong>
                                        @enderror

                                        <span class="help-block">
                                            <span class="label label-default">Min : <span id="min-q">{{$package->min}}</span></span>
                                            <span class="label label-default">Max : <span id="max-q">{{$package->max}}</span></span>
                                        </span>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="price-head font-18">Price Total:$ <span class="order-price-text" id="order-price-text-{{$package->id}}">0</span></p>
                                        <input type="hidden" name="order-price[]" class="form-control order-price" id="order-price-{{$package->id}}" value="">
                                    </div>

                                    <hr>
                                    @endforeach

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">{{__('custom.submit')}}</button>
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
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function () {
            'use strict'
        })()

        $(".quantity").on('keyup',function (e) {
            let packagePrice = $(this).data('price');
            let packageID = $(this).data('pack-id');
            let finalPrice = (packagePrice/1000)*$(this).val();
            $("#order-price-text-"+packageID).text(finalPrice);
            $("#order-price-"+packageID).val(finalPrice);
        });

    </script>
@endsection
