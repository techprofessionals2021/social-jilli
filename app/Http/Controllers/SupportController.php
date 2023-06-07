<?php

namespace App\Http\Controllers;

use App\Http\Requests\SupportTicket\CreateSupportTicketRequest;
use App\Http\Requests\SupportTicket\GetAllSupportTicketsRequest;
use App\Http\Requests\SupportTicket\GetSupportTicketRequest;
use App\Http\Requests\SupportTicket\SendMessageRequest;
use App\Models\Support;
use Illuminate\Http\Request;

class SupportController extends Controller
{
    /**
     * @param GetAllSupportTicketsRequest $request
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(GetAllSupportTicketsRequest $request)
    {
        $response = $request->handle();

        return view('admin.supportTicket.index', ['supportTickets' => $response]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(GetSupportTicketRequest $request)
    {
        $request->id = 0;

        $response = $request->handle();

        // $getStatus = Status::whereIn('id',[1,2])->get();

        $route = url('support-ticket');

        // return view('admin.campaign.form', ['campaign' => $response,'getStatus' => $getStatus, 'route' => $route, 'edit' => false]);
        return view('admin.supportTicket.form',['service' => $response,'edit'=>false,'route' => $route]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateSupportTicketRequest $request)
    {
        $request->handle();
        return redirect()->route('support-ticket.index');
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        \App\Helpers\Helpers::updateviewingStatus($id);

        $support = Support::find($id);

       if($support){
        if(auth()->user()->role != 1 && $support->user_id != auth()->id()){
            return redirect()->route('support-ticket.index')->with('error', __('custom.notFound'));
        }
       }else{
        return redirect()->route('support-ticket.index')->with('error', __('custom.notFound'));
       }

        $data = new GetSupportTicketRequest();

        $data->id = $id;

        $response = $data->handle();

        $route = route('support_ticket_reply');

        return view('admin.supportTicket.reply', ['supportTicket' => $response, 'route' => $route]);
    }

    /**
     * @param SendMessageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function supportAdminReply(SendMessageRequest $request)
    {
        \App\Helpers\Helpers::updateviewingStatusOnSendingMessage($request->support_id);

        $response = $request->handle();

        return redirect()->route('support-ticket.show',['support_ticket' => $request->support_id ])->with('success', __('custom.message_sent'));
    }

    /**
     * @param SendMessageRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function supportUserReply(SendMessageRequest $request)
    {
        \App\Helpers\Helpers::updateviewingStatusOnSendingMessage($request->support_id);

        $response = $request->handle();

        return redirect()->route('support-ticket.show',['support_ticket' => $request->support_id ])->with('success', __('custom.message_sent'));
    }

    /**
     * @param $id
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function showSupportTicketUser($id)
    {
        $data = new GetSupportTicketRequest();

        $data->id = $id;

        $response = $data->handle();

        $route = route('support_ticket_reply');

        return view('admin.supportTicket.reply', ['supportTicket' => $response, 'route' => $route]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function edit(Support $support)
    {
        if (!isset($response->id)) {
            return redirect()->route('package.index')->with('error',__('custom.data_not_found'));
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Support $support)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Support  $support
     * @return \Illuminate\Http\Response
     */
    public function destroy(Support $support)
    {
        //
    }

    public function supportTicketClose(Support $support_ticket)
    {
        $support_ticket->status_id = 11;
        $support_ticket->save();
        return redirect()->back()->with('success', __('custom.close_successfully'));

    }
}
