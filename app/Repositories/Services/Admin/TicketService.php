<?php

namespace App\Repositories\Services\Admin;

use App\Repositories\Contracts\Admin\TicketContract;
use App\Models\Ticket as SELF_MODEL;

class TicketService implements TicketContract
{

    public function allTickets()
    {
        return SELF_MODEL::latest()->paginate(10);
    }

    public function storeTicket($data)
    {
        return SELF_MODEL::insert($data);
    }

    public function findTicket($id)
    {
        return SELF_MODEL::find($id);
    }

    public function updateTicket($data, $id)
    {
        $clients = SELF_MODEL::where('id', $id)->first();
        $clients->name = $data['name'];
        $clients->save();
    }

    public function destroyTicket($id)
    {
        $clients = SELF_MODEL::find($id);
        $clients->delete();
    }
}
