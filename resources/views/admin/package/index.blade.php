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
                            <li class="breadcrumb-item active" aria-current="page">{{__('custom.package')}} {{__('custom.list')}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('package.create')}}" class="btn btn-primary"> {{__('custom.add')}}</a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
{{--				<h6 class="mb-0 text-uppercase">{{__('custom.exercise_type')}} {{__('custom.section')}}</h6>--}}
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{__('custom.id')}}</th>
                                    <th>{{__('custom.name')}}</th>
                                    <th>{{__('custom.service')}}</th>
                                    <th>{{__('custom.description')}}</th>
                                    <th>{{__('custom.price_per')}} 1000</th>
                                    <th>{{__('custom.min')}}</th>
                                    <th>{{__('custom.max')}}</th>
                                    <th>{{__('custom.status')}}</th>
                                    <th>{{__('custom.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($packages as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->getServiceById->name}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>${{$item->price}}</td>
                                    <td>{{$item->min}}</td>
                                    <td>{{$item->max}}</td>
                                    <td>{{\App\Helpers\Helpers::getStatusById($item->status_id)}}</td>
                                    <td>
                                        <a href="{{route('package.edit',['package' => $item->id ])}}" class="btn btn-info text-white">{{__('custom.edit')}}</a>
                                        <a href="#delete" onclick="deleteRecord({{ $item->id }})" class="btn btn-danger">{{__('custom.delete')}}</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                        <form id="delete-form" method="POST" style="display:none">
                            @method('DELETE')
                            @csrf
                            <button type="submit">Delete</button>
                        </form>
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
<script>
    function deleteRecord(id) {
        let confirmBox = confirm('Are you really want to delete');
        if (confirmBox) {
            let path = `{{ url('package/${id}') }}`;
            $('#delete-form').attr('action', path);
            $('#delete-form').submit();
        }
    }

</script>
@endsection
