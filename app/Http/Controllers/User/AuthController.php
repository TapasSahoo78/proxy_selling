<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\BaseController;
use App\Models\User;
use App\Repositories\Contracts\Auth\AuthContract;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends BaseController
{
    private $AuthContract;
    private $UserModel;

    public function __construct(AuthContract $AuthContract, User $UserModel)
    {
        $this->AuthContract = $AuthContract;
        $this->UserModel = $UserModel;
    }
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required:min:6'
    ];

    protected $status = false;
    protected $message;

    public function showUserLoginForm()
    {
        return view('user.pages.auth.signin');
    }

    public function showUserForgotPasswordForm()
    {
        return view('user.pages.auth.forgotpassword');
    }

    public function userLogin(Request $request)
    {
        $validator = Validator::make($request->all(), $this->rules);
        if ($validator->fails()) {
            return $this->responseJson(false, 200, $validator->errors()->first());
        }
        try {

            $userLogin = $this->AuthContract->login($request->all(), $this->UserModel, 'web');

            if ($userLogin) {
                return $this->responseJson(true, 200, config('custom.MSG_RECORD_LOGIN_SUCCESS'), '', route('user.dashboard'));
            } else {
                return $this->responseJson(false, 200, config('custom.MSG_RECORD_LOGIN_FAILED'), '', '');
            }
        } catch (\Exception $e) {
            logger($e->getMessage() . ' -- ' . $e->getLine() . ' -- ' . $e->getFile());
            return $this->responseJson(false, 500, config('custom.MSG_ERROR_TRY_AGAIN'), '', '');
        }
    }

    public function logout(Request $request)
    {
        if (Auth::guard('user')->check()) {
            $this->AuthContract->logout('user');
            return redirect()->route('user.login');
        }
    }
}
