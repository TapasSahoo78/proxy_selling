<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\BaseController;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Employer;
use App\Repositories\Contracts\Admin\EmployerContract;
use Illuminate\Support\Facades\Validator;

class EmployerController extends BaseController
{

    private $EmployerContract;

    public function __construct(EmployerContract $EmployerContract)
    {
        $this->EmployerContract = $EmployerContract;
    }

    protected $rules = [
        'fname' => 'required|string',
        'lname' => 'required|string',
        'email' => 'required|string|email|max:255|unique:employers',
        'contact_number' => 'required|string|min:10',
        'country' => 'required|string',
        'city' => 'required|string',
        'address' => 'required|string',
        'start_date' => 'required|string',
        'end_date' => 'required|string',
    ];

    protected $status = false;
    protected $message;

    public function listBusinessForm()
    {
        return view('admin.pages.employer.list');
    }

    public function storeBusinessData(Request $request)
    {
        if ($request->isMethod('post')) {

            $validator = Validator::make($request->all(), $this->rules);

            if ($validator->fails()) {
                return response()->json(
                    [
                        'status'    => false,
                        'message'    => $validator->errors()->first(),
                        'redirect'    => ''
                    ],
                    200
                );
            }
            DB::beginTransaction();
            try {
                $addEmployer = Employer::create([
                    'first_name' => $request->fname,
                    'last_name' => $request->lname,
                    'suffix' => $request->suffix,
                    'pronouns' => $request->pronouns,
                    'email' => $request->email,
                    'contact_number' => $request->contact_number,
                    'country' => $request->country,
                    'city' => $request->city,
                    'address' => $request->address,
                    'start_date' => $request->start_date,
                    'end_date' => $request->end_date,
                    'profile_image' => $request->profile_image,
                    'cover_image' => $request->cover_image,
                    'plan' => $request->plan_frequency,
                    'plan_amount' => $request->plan_amount,
                ]);
                DB::commit();
                return response()->json(
                    [
                        'status'    => true,
                        'message'   => 'Booking Successfully!',
                        'redirect'  => route('payment.success')
                    ],
                    200
                );
            } catch (Exception $e) {
                DB::rollback();
                logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
                return response()->json(
                    [
                        'status'    => false,
                        'message'   =>  'Something went wrong!!',
                        'redirect'  => ''
                    ],
                    200
                );
            }
        }
        return view('admin.pages.employer.add');
    }
}
