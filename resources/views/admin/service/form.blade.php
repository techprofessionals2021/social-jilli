@extends("layouts.app")

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{__('custom.service')}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('custom.services')}}
                                / {{!$edit ? __('custom.create') : __('custom.edit')}}</li>
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
                                    @csrf @if($edit) @method('PUT') @endif
                                    <div class="col-md-6">
                                        <label for="name"
                                               class="form-label">{{__('custom.name')}} *</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                               value="{{ old('name',$service->name) }}" minlength="3"
                                               placeholder="{{__('custom.enter')}} {{__('custom.name')}}" required>
                                        @error('name')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="status" class="form-label">{{__('custom.status')}} *</label>
                                        <select class="single-select" name="status" id="status" required>
                                            @foreach($getStatus as $item)
                                                <option {{$service->status_id == $item->id ? 'selected' : ''}} value="{{$item->id}}">
                                                    {{$item->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('status')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-12">
                                        <label for="description" class="form-label">{{__('custom.description')}} *</label>
                                        <textarea name="description" required class="form-control" id="description" placeholder="{{__('custom.enter')}} {{__('custom.description')}}">{{old('description',$service->description)}}</textarea>
                                        @error('description')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-12">
                                        <button class="btn btn-primary" type="submit">{{!$edit ? __('custom.submit') : __('custom.update')}}</button>
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
        $('.single-select').select2({
            theme: 'bootstrap4',
            width: $(this).data('width') ? $(this).data('width') : $(this).hasClass('w-100') ? '100%' : 'style',
            placeholder: $(this).data('placeholder'),
            allowClear: Boolean($(this).data('allow-clear')),
        });
    </script>
@endsection
