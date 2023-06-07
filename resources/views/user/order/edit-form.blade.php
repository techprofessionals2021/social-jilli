@extends('layouts.app')

@section('wrapper')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{ __('custom.order') }}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">

                    </nav>
                </div>
                <div class="ms-auto">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 mx-auto">
                    <hr />
                    <div class="card">
                        <div class="card-body">
                            <div class="p-4 border rounded">
                                <form class="row g-3" method="POST" action="{{ route('order.update', $id) }}">
                                    @csrf
                                    @method('PUT')
                                    <input name="order_id" value={{ $id }} type=hidden />

                                    <div class="col-md-6">
                                        <label for="service" class="form-label">{{ __('custom.service') }} *</label>
                                        <select class="single-select2" name="service_id" id="service" required>
                                            <option value="{{ $orders->servId }}">{{ $orders->servName }}</option>
                                            @foreach ($services as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('service')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="package" class="form-label">{{ __('custom.package') }} *</label>

                                        <select class="single-select2" name="package_id" required>
                                            <option value="{{ $orders->packId }}">{{ $orders->packName }}</option>
                                            @foreach ($package as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                        @error('package')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="form-label">{{ __('custom.description') }}
                                            *</label>
                                        <textarea name="description" readonly class="form-control" id="description"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.description') }}">{{ old('description', $orders->servDesc) }}</textarea>
                                        @error('description')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="link" class="form-label">{{ __('custom.link') }} *</label>
                                        <input type="text" name="link" class="form-control" id="link"
                                            value="{{ old('name', $orders->link) }}"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.link') }}" required>
                                        @error('link')
                                            <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="quantity" class="form-label">{{ __('custom.quantity') }} *</label>
                                        <input type="number" name="quantity" class="form-control" id="quantity"
                                            value="{{ old('name', $orders->quantity) }}"
                                            placeholder="{{ __('custom.enter') }} {{ __('custom.quantity') }}" required>
                                        @error('quantity')
                                            <strong>{{ $message }}</strong>
                                        @enderror


                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">SUBMIT</button>
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
        (function() {
            'use strict'
        })()
        $('.single-select', ).select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
        $('.single-select2').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });

        function makeAjaxCall() {
            let id = $("#service").find(":selected").val();
            $.ajax({
                type: "post",
                dataType: "json",
                url: "{{ route('getPackageByServiceId') }}",
                data: {
                    service_id: id,
                    _token: "{{ csrf_token() }}"
                },
                success: function(response) {
                    // console.log(response);
                    if (response.status == 0) {
                        toastr.error("No data found");
                        $("#package").html("");
                    } else {
                        $("#package").html(response.body);
                    }
                },
            });
        }
        $("#service").change(function(e) {
            e.preventDefault();
            makeAjaxCall();
        });
        makeAjaxCall();

        $("#package").change(function(e) {
            // e.preventDefault();
            let packageInfo = $("#package").find(":selected");
            $("#description").text(packageInfo.data('desc'));

            $("#min-q").text(packageInfo.data('min-val'));
            $("#max-q").text(packageInfo.data('max-val'));

            let orderQuantity = document.getElementById("quantity");

            orderQuantity.min = packageInfo.data('min-val');
            orderQuantity.max = packageInfo.data('max-val');
        });

        $("#quantity").on('keyup', function(e) {

            let packageInfo = $("#package").find(":selected");
            let packagePrice = packageInfo.data('price');
            let finalPrice = (packagePrice / 1000) * $(this).val();
            $("#order-price-text").text(finalPrice);
            $("#order-price").val(finalPrice);
        });
    </script>
@endsection
