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
                <div class="breadcrumb-title pe-3">{{__('custom.orders')}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('custom.order')}} {{__('custom.list')}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <a href="{{route('user-order.create')}}" class="btn btn-primary"> {{__('custom.new_order')}}</a>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
{{--				<h6 class="mb-0 text-uppercase">{{__('custom.exercise_type')}} {{__('custom.section')}}</h6>--}}
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <div class="ms-auto">
                            <div class="btn-group pb-3 pt-1">
                                <a href="{{route('user-order.index')}}" class="btn btn-primary"> {{__('custom.all')}}</a>
                                @foreach($getStatus as $item)
                                    <a href="{{route('user_order_by_status.slug',$item->slug)}}" class="btn btn-primary"> {{__('custom.'.$item->slug)}}</a>
                                @endforeach
                            </div>
                        </div>
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{__('custom.id')}}</th>
{{--                                    <th>{{__('custom.order_id')}}</th>--}}
                                    <th>{{__('custom.api_order_id')}}</th>
                                    <th>{{__('custom.user')}}</th>
                                    <th>{{__('custom.service')}}</th>
                                    <th>{{__('custom.package')}}</th>
                                    <th>{{__('custom.link')}}</th>
                                    <th>{{__('custom.amount')}}</th>
                                    <th>{{__('custom.quantity')}}</th>
                                    <th>{{__('custom.start_counter')}}</th>
                                    <th>{{__('custom.remains')}}</th>
                                    <th>{{__('custom.status')}}</th>
                                    <th>{{__('custom.date')}}</th>
                                    <th>{{__('custom.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
{{--                                    <td>{{$item->order_id}}</td>--}}
                                    <td>{{$item->api_order_id}}</td>
                                    <td>{{\App\Helpers\Helpers::getUserById($item->user_id)->name}}</td>
                                    <td>{{$item->getPackageByID->getServiceById->name}}</td>
                                    <td>{{$item->getPackageByID->name}}</td>
                                    <td>{{$item->link}}</td>
                                    <td>${{$item->price}}</td>
                                    <td>{{$item->quantity}}</td>
                                    <td>{{$item->start_counter}}</td>
                                    <td>{{$item->remains}}</td>
                                    <td>{{\App\Helpers\Helpers::getStatusById($item->status_id)}}</td>
                                    <td>{{date('d-M-Y H:i:s' , strtotime($item->created_at))}}</td>
                                    <td>
{{--                                        <a href="{{route('user-order.edit',['user_order' => $item->id ])}}" class="btn btn-info text-white">{{__('custom.edit')}}</a>--}}
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
            let path = `{{ url('order/${id}') }}`;
            $('#delete-form').attr('action', path);
            $('#delete-form').submit();
        }
    }
        $(document).ready(function() {
         $('#example2').DataTable({
             order:[0, 'desc']
         });
    } );
</script>
@endsection
