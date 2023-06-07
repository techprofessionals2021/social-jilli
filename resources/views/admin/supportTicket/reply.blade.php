@extends("layouts.app")

@section("wrapper")
    <div class="page-wrapper">
        <div class="page-content">
            <div class="chat-wrapper">
                <div class="chat-sidebar" style="z-index: 0;border-right: none;width: 0;">
                    <div class="chat-sidebar-content">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show" id="pills-Chats">
                                <div class="chat-list">
                                    <div class="list-group list-group-flush">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="chat-header d-flex align-items-center" style="position: static;">
                    <div class="chat-toggle-btn"><i class='bx bx-menu-alt-left'></i>
                    </div>
                    <div>

                        <h4 class="mb-1 font-weight-bold">{{$supportTicket->subject}}</h4>
                        <div class="list-inline d-sm-flex mb-0 d-none"> <a href="javascript:;" class="list-inline-item d-flex align-items-center text-secondary">
                                <small class='bx bxs-circle me-1 {{\App\Helpers\Helpers::getStatusById($supportTicket->status_id) == 'Open' ? 'chart-online' : 'chart-offline'}} '></small>{{\App\Helpers\Helpers::getStatusById($supportTicket->status_id)}}</a>
                        </div>
                    </div>
                    <div class="chat-top-header-menu ms-auto">
                        <a href="{{route('support-ticket.index')}}"><i class='bx bx-exit'></i></a>
                    </div>
                </div>
                <div class="chat-content" id="msgarea" style="margin-left: 0;padding: 10px 15px 0px 15px;height: 480px;">
                    @php
                        $user = auth()->user();
                    @endphp
                    @foreach($supportTicket->getMessages as $item)
                        @if($item->send_by == $user->id)
                            <div class="chat-content-rightside">
                                <div class="d-flex ms-auto">
                                    <div class="flex-grow-1 me-2">
                                        <p class="mb-0 chat-time text-end">{{$user->name}} (you), {{$item->created_at->diffForHumans()}}</p>
                                        <p class="chat-right-msg">{{$item->message}}</p>
                                    </div>
                                </div>
                            </div>
                        @else
                            <div class="chat-content-leftside">
                                <div class="d-flex">
                                    {{--                            <img src="assets/images/avatars/avatar-3.png" width="48" height="48" class="rounded-circle" alt="" />--}}
                                    <div class="flex-grow-1 ms-2">
                                        <p class="mb-0 chat-time">{{\App\Helpers\Helpers::getUserById($item->send_by)->name}}, {{$item->created_at->diffForHumans()}}</p>
                                        <p class="chat-left-msg">{{$item->message}}</p>
                                    </div>
                                </div>
                            </div>
                        @endif

                    @endforeach

                </div>
                <div class="chat-footer d-flex align-items-center" style="left: 0;bottom: -30px;">
                    <form method="POST" action="{{ $route }}" style="width: 100%">
                        @csrf
                        <div class="flex-grow-1 pe-2" style="float: left;width: 90%;">
                            <input type="hidden" name="support_id" value="{{$supportTicket->id}}">
                            <div class="input-group">
                                <input type="text" name="message" class="form-control" placeholder="Type a message" required>
                            </div>
                        </div>
                        <div class="chat-footer-menu" style="float: left;">
                            <button type="submit" class="bg-white border-light font-20"><i class='bx bx-send'></i></button>
                        </div>
                    </form>
                </div>
                <!--start chat overlay-->
                <div class="overlay chat-toggle-btn-mobile"></div>
                <!--end chat overlay-->
            </div>
        </div>
    </div>
@endsection

@section("script")
    <script>
        new PerfectScrollbar('.chat-list');
        new PerfectScrollbar('.chat-content');

        $("#msgarea").animate({ scrollTop: $('#msgarea').prop("scrollHeight")}, 500);
    </script>
@endsection
