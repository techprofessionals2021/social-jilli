@extends("layouts.app")

@section("style")
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection

@section("wrapper")
<!--start page wrapper -->
<div class="page-wrapper">
    @include("layouts.alert_message")
    <div class="page-content">
        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">{{__('custom.packages')}}</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{__('custom.package')}}
                            {{__('custom.list')}}</li>
                    </ol>
                </nav>


            </div>
            {{-- <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('package.create')}}" class="btn btn-primary"> {{__('custom.add')}}</a>
        </div>
    </div> --}}
</div>
<!--end breadcrumb-->
{{--				<h6 class="mb-0 text-uppercase">{{__('custom.exercise_type')}} {{__('custom.section')}}</h6>--}}
<hr />
<form action="{{route('service_package_for_panel_search')}}" method="post">
    @csrf
    <div class="row">
        <div class="col-md-3">
            <div class="form-group">
                <input type="text" name="search" value="" class="form-control" placeholder="Search for Services">
            </div>
        </div>


        <div class="col-md-3">
            <div class="form-group">
                <button type="submit" class="btn btn-primary btn-padding w-50"><i class="fas fa-search"></i> Search</button>
            </div>
        </div>
    </div>
</form>
<div class="card">

    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                @foreach($packages as $package)
                <thead>
                    <tr>
                        <th colspan="8" class="custom-row-color">{{$package->name}}</th>
                    </tr>
                    <tr>
                        <th>{{__('custom.id')}}</th>
                        <th>{{__('custom.name')}}</th>
                        <th>{{__('custom.description')}}</th>
                        <th>{{__('custom.price_per')}} 1000</th>
                        <th>{{__('custom.min')}}</th>
                        <th>{{__('custom.max')}}</th>
                        {{--                                    <th>{{__('custom.status')}}</th>--}}
                    </tr>
                </thead>
                <tbody>
                    @foreach($package->getAllPackages as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->description}}</td>
                        <td>${{$item->price}}</td>
                        <td>{{$item->min}}</td>
                        <td>{{$item->max}}</td>
                        {{--                                    <td>{{\App\Helpers\Helpers::getStatusById($item->status_id)}}
                        </td>--}}
                    </tr>
                    @endforeach
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
</div>
</div>
<!--end page wrapper -->
@endsection

@section("script")
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
@endsection
