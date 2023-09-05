<?php

namespace App\Repositories\Contracts\Admin;

interface TicketContract
{
    public function allTickets();
    public function storeTicket(array $data);
    public function findTicket($id);
    public function updateTicket(array $data, $id);
    public function destroyTicket($id);
}
