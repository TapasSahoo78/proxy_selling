<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\Contracts\Admin\TicketContract;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TicketController extends Controller
{
    private $TicketContract;

    public function __construct(TicketContract $TicketContract)
    {
        $this->TicketContract = $TicketContract;
    }
    protected $rules = [
        'name' => 'required|string|min:3|max:100',
        'description' => 'required|string|min:10|max:255',
    ];
    public function listTicket()
    {
        $data = $this->TicketContract->allTickets();
        return view('admin.pages.ticket.list', compact('data'));
    }
    public function storeTicket(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), $this->rules);

            if ($validator->fails()) {
                return $this->responseJson(false, 200, $validator->errors()->first(), '', '');
            }
            DB::beginTransaction();
            try {
                $insert_array  = $request->except(['_token', '_method', 'id']);

                $result = $this->TicketContract->storeTicket($insert_array);

                DB::commit();
                if (isset($result) && !empty($result)) {
                    return $this->responseJson(true, 200, 'Category added Successfully', '', route('admin.category.list'));
                } else {
                    return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
                }
            } catch (Exception $e) {
                DB::rollback();
                logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
                return $this->responseJson(false, 200, 'Something went wrong!!', '', '');
            }
        }
        return view('admin.pages.category.add');
    }
    public function editTicket()
    {
    }
    public function deleteTicket()
    {
    }
}
