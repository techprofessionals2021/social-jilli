@extends("layouts.app")

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">{{__('custom.customer')}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="{{route('home')}}"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('custom.customer')}}
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
                                    <div class="col-md-4">
                                        <label for="name"
                                               class="form-label">{{__('custom.customer')}} {{__('custom.name')}}*</label>
                                        <input type="text" name="name" class="form-control" id="name"
                                               value="{{ old('name',$user->name) }}" minlength="3"
                                               placeholder="{{__('custom.enter')}} {{__('custom.name')}}" required>
                                        @error('name')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="email" class="form-label">{{__('custom.email')}}*</label>
                                        <input type="email" name="email" class="form-control" id="email"
                                               value="{{ old('email',$user->address) }}"
                                               placeholder="{{__('custom.enter')}} {{__('custom.email')}}" required>
                                        @error('email')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-md-4">
                                        <label for="password" class="form-label">{{__('custom.password')}} *</label>
                                        <div class="input-group" id="show_hide_password">
                                            <input type="password" name="password" class="form-control border-end-0" {{!$edit ? 'required' : ''}} id="password" value="" minlength="8" maxlength="32"
                                                   placeholder="{{__('custom.password')}}"> <a href="javascript:;" class="input-group-text bg-transparent"><i class='bx bx-hide'></i></a>
                                        </div>
                                        @error('password')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="skype_id" class="form-label">{{__('custom.skype_id')}}</label>
                                        <input type="text" name="skype_id" class="form-control" id="skype_id"
                                               value="{{ old('skype_id',$user->skype_id) }}"
                                               placeholder="{{__('custom.enter')}} {{__('custom.skype_id')}}">
                                        @error('skype_id')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="funds" class="form-label">{{__('custom.funds')}}*</label>
                                        <input type="number" minlength="10" step=".001" name="funds" class="form-control" id="funds"
                                               value="{{ old('funds',$user->funds) }}"
                                               placeholder="{{__('custom.enter')}} {{__('custom.funds')}}"
                                               required>
                                        @error('funds')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

                                    <div class="col-md-6">
                                        <label for="status" class="form-label">{{__('custom.status')}} *</label>
                                        <select class="single-select" name="status" id="status" required>
                                            <option {{$user->status == 1 ? 'selected' : ''}} value="1">{{__('custom.active')}}</option>
                                            <option {{$user->status == 2 ? 'selected' : ''}} value="2">{{__('custom.deactive')}}</option>
                                        </select>
                                        @error('status')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>
                                    <div class="col-md-6">
                                        <label for="role" class="form-label">{{__('custom.role')}} *</label>
                                        <select class="single-select" name="role" id="role" required>
                                                <option {{$user->role == 1 ? 'selected' : ''}} value="1">{{__('custom.admin')}}</option>
                                                <option {{$user->role == 2 ? 'selected' : ''}} value="2">{{__('custom.customer')}}</option>
                                        </select>
                                        @error('role')
                                        <strong>{{ $message }}</strong>
                                        @enderror
                                    </div>

{{--                                    <div class="col-md-6">--}}
{{--                                        <label for="is_active" class="form-label">{{__('custom.is_active')}}</label>--}}
{{--                                        <input class="form-check-input" name="is_active" type="checkbox"--}}
{{--                                               {{$user->is_active ? 'checked' : ''}} value="active" id="is_active">--}}
{{--                                        @error('is_active')--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

{{--                                    <div class="col-md-12">--}}
{{--                                        <label for="description" class="form-label">{{__('custom.description')}}</label>--}}
{{--                                        <textarea name="description" class="form-control" id="description" placeholder="{{__('custom.enter')}} {{__('custom.description')}}">{{old('description',$user->description)}}</textarea>--}}
{{--                                        @error('description')--}}
{{--                                        <strong>{{ $message }}</strong>--}}
{{--                                        @enderror--}}
{{--                                    </div>--}}

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
        $(document).ready(function () {
            $("#show_hide_password a").on('click', function (event) {
                event.preventDefault();
                if ($('#show_hide_password input').attr("type") == "text") {
                    $('#show_hide_password input').attr('type', 'password');
                    $('#show_hide_password i').addClass("bx-hide");
                    $('#show_hide_password i').removeClass("bx-show");
                } else if ($('#show_hide_password input').attr("type") == "password") {
                    $('#show_hide_password input').attr('type', 'text');
                    $('#show_hide_password i').removeClass("bx-hide");
                    $('#show_hide_password i').addClass("bx-show");
                }
            });
        });
    </script>
@endsection
