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
                <div class="breadcrumb-title pe-3">{{__('custom.campaigns')}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">{{__('custom.campaign')}} {{__('custom.list')}}</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
{{--                        <a href="{{route('order.create')}}" class="btn btn-primary"> {{__('custom.add')}}</a>--}}
                        <a href="{{route('campaign.create')}}" class="btn btn-primary" style="margin-right: 10px;"> {{__('custom.createCampaign')}}</a>
                        <a href="{{route('refresh_campaigns')}}" class="btn btn-primary"> {{__('custom.refreshCampaigns')}}</a>
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
                                    <th>{{__('custom.status')}}</th>
                                    <th>{{__('custom.traffic_quality')}}</th>
{{--                                    <th>{{__('custom.advertising_format')}}</th>--}}
                                    <th>{{__('custom.target_url')}}</th>
                                    <th>{{__('custom.frequency')}} (per Day):</th>
{{--                                    <th>{{__('custom.title')}}</th>--}}
{{--                                    <th>{{__('custom.description')}}</th>--}}
                                    <th>{{__('custom.date')}}</th>
                                    <th>{{__('custom.status')}}</th>
                                    <th>{{__('custom.action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                            @foreach($campaigns as $item)
                                <tr>
{{--                                    <td>{{$item->id}}</td>--}}
                                    <td>{{$item->camp_id ?? '---'}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{\App\Helpers\Helpers::getStatusById($item->status_id)}}</td>
                                    <td>{{$item->traffic_quality}}</td>
{{--                                    <td>{{$item->advertising_format}}</td>--}}
                                    <td>{{$item->target_url}}</td>
                                    <td>{{$item->frequency_capping}}</td>
{{--                                    <td>{{$item->btn_title}}</td>--}}
{{--                                    <td>{{$item->btn_description}}</td>--}}
                                    <td>{{date('d-M-Y H:i:s' , strtotime($item->created_at))}}</td>
                                    <td>
                                        <select class="single-select order-status" name="status" id="status" data-order-id="{{$item->id}}">
                                            @foreach($getStatus as $statusitem)
                                            <option {{$item->status_id == $statusitem->id ? 'selected' : ''}} value="{{$statusitem->id}}">{{$statusitem->name}}</option>
{{--                                            <option {{$item->status_id == $statusitem->id ? 'selected' : ''}} value="{{$statusitem->id}}">{{\App\Helpers\Helpers::getStatusById($statusitem->status_id)}}</option>--}}
                                            @endforeach
                                        </select>
{{--                                        {{\App\Helpers\Helpers::getStatusById($item->status_id)}}--}}
                                    </td>
                                    <td>
                                        <a href="{{route('campaign.edit',['campaign' => $item->id ])}}" class="btn btn-info text-white">{{__('custom.edit')}}</a>
                                       {{-- <a href="#delete" onclick="deleteRecord({{ $item->id }})" class="btn btn-danger">{{__('custom.delete')}}</a> --}}
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
            let path = `{{ url('campaign/${id}') }}`;
            $('#delete-form').attr('action', path);
            $('#delete-form').submit();
        }
    }

    $('.order-status').change(function() {
            let selectedOptions = $(this, "option:selected").val();
            let orderId = $(this, "option:selected").data('order-id');
        $.ajax({
            type: "post",
            dataType: "json",
            url: "{{route('update_campaign_status')}}",
            data: {orderId: orderId,selectedOptions: selectedOptions, _token: "{{csrf_token()}}"},
            success: function (response) {
                if (response.status == 0) {
                    alert("Campaign not found");
                } else {
                    alert("Status Updated");
                }
            },
        });
    });
</script>
@endsection
