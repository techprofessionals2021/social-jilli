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
                <div class="breadcrumb-title pe-3">{{__('custom.supportTickets')}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('custom.supportTickets')}} {{__('custom.list')}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
{{--                        <a href="{{route('support-ticket.create')}}" class="btn btn-primary"> {{__('custom.add')}}</a>--}}
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
{{--				<h6 class="mb-0 text-uppercase">{{__('custom.exercise_type')}} {{__('custom.section')}}</h6>--}}
            <hr/>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                            <thead>
                                <tr>
                                    <th>{{__('custom.id')}}</th>
                                    <th>{{__('custom.date')}}</th>
                                    <th>{{__('custom.user')}}</th>
                                    <th>{{__('custom.subject')}}</th>
                                    <th>{{__('custom.description')}}</th>
                                    <th>{{__('custom.status')}}</th>
                                    <th>{{__('custom.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($supportTickets as $item)
                                <tr>
                                    <td>{{$item->id}}</td>
                                    <td>{{date('d-M-Y H:i:s' , strtotime($item->created_at))}}</td>
                                    <td>{{\App\Helpers\Helpers::getUserById($item->user_id)->name}}
                                        @if(auth()->user()->role == 1 && $item->admin_viewed == 0 || auth()->user()->role == 2 && $item->user_viewed == 0)
                                            <a href="#" class="badge bg-dark">New</a>
                                        @endif
                                    </td>
                                    <td>{{$item->subject}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{\App\Helpers\Helpers::getStatusById($item->status_id)}}</td>
                                    <td>
                                        <a href="{{route('support-ticket.show',['support_ticket' => $item->id ])}}" class="btn btn-info text-white">{{__('custom.reply')}}</a>
{{--                                        <a href="{{route('support-ticket.edit',['support_ticket' => $item->id ])}}" class="btn btn-info text-white">{{__('custom.edit')}}</a>--}}
                                        <a href="#delete" onclick="deleteRecord({{ $item->id }})" class="btn btn-danger">{{__('custom.delete')}}</a>
                                        @if ($item->status_id != 11 && auth()->user()->role == 1)
                                         <a href="{{route('support_ticket_close',['support_ticket' => $item->id ])}}" class="btn btn-dark text-white">{{__('custom.close')}}</a>
                                        @endif

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
    $(document).ready(function() {
        $('#example2').DataTable({
            order:[0, 'desc']
        });
    } );
    function deleteRecord(id) {
        let confirmBox = confirm('Are you really want to delete');
        if (confirmBox) {
            let path = `{{ url('support-ticket/${id}') }}`;
            $('#delete-form').attr('action', path);
            $('#delete-form').submit();
        }
    }

</script>
@endsection
