<?php

namespace App\Http\Controllers\Auth;

use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Repositories\UserRepository;
use App\Jobs\SendMail;
use App\Models\User;

class AuthController extends Controller
{
  /*
  |--------------------------------------------------------------------------
  | Registration & Login Controller
  |--------------------------------------------------------------------------
  |
  | This controller handles the registration of new users, as well as the
  | authentication of existing users. By default, this controller uses
  | a simple trait to add these behaviors. Why don't you explore it?
  |
  */

  use AuthenticatesAndRegistersUsers, ThrottlesLogins;

  /**
   * Where to redirect users after login / registration.
   *
   * @var string
   */
  //protected $redirectTo = '/';

  /**
   * Create a new authentication controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware($this->guestMiddleware(), ['except' => 'getLogout']);
  }

	/**
	 * Handle a login request to the application.
	 *
	 * @param  App\Http\Requests\LoginRequest  $request
	 * @param  Guard  $auth
	 * @return Response
	 */
	public function postLogin(LoginRequest $request, Guard $auth)
	{
    // dd($request);
		$logValue = $request->input('log');
    // dd($logValue);
		$logAccess = filter_var($logValue, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';
    // dd($logAccess);
		$throttles = in_array(ThrottlesLogins::class, class_uses_recursive(get_class($this)));
    //dd($throttles);
		if ($throttles && $this->hasTooManyLoginAttempts($request))
		{
			return redirect('/auth/login')->with('error', trans('front/login.maxattempt'))->withInput($request->only('log'));
		}

		$credentials = [
			$logAccess  => $logValue,
			'password'  => $request->input('password')
		];

		if(!$auth->validate($credentials))
		{
			if ($throttles)
			{
			  $this->incrementLoginAttempts($request);
			}

			return redirect('/auth/login')->with('error', trans('front/login.credentials'))->withInput($request->only('log'));
		}

		$user = $auth->getLastAttempted();
	//dd($user->role->slug === 'user');

		if($user->confirmed)
		{
			if ($throttles)
			{
				$this->clearLoginAttempts($request);
			}

			$auth->login($user, $request->has('memory'));

			if($request->session()->has('user_id'))
			{
				$request->session()->forget('user_id');
			}
			
			if($user->role->slug === 'admin')
			{
				return redirect('contact/admin');
			}
			else if($user->role->slug === 'redac')
			{
				return redirect('contact/dashboard');
			}
			else if($user->role->slug === 'user')
			{
				return redirect('contact/contact');
			}
			//return redirect('contact');
		}

		$request->session()->put('user_id', $user->id);

		return redirect('/auth/login')->with('error', trans('front/verify.again'));
	}

  /**
   * Form Registrasi
   *
   * @param App\Http\Requests\RegisterRequest $request
   * @return Response
   */
  public function postRegister(RegisterRequest $request, UserRepository $user_manajemen)
  {
    //dd($request);
    $user = $user_manajemen->store(
              $request->all(), $confirmation_code = str_random(30)
            );

    $this->dispatch(new SendMail($user));

    return redirect('/')->with('ok', trans('front/veify.message'));
  }

  /**
   * Untuk Konfirmasi Request
   *
   * @param App\Repositories\UserRepository $user_manajemen
   * @param string $confirmation_code
   * @return Response
   */
  public function getConfirm(UserRepository $user_manajemen, $confirmation_code)
  {
    $user =  $user_manajemen->confirm($confirmation_code);

    return redirect('/')->with('ok', trans('front/verify.success'));
  }

  /**
	 * Handle a resend request.
	 *
	 * @param  App\Repositories\UserRepository $user_gestion
	 * @param  Illuminate\Http\Request $request
	 * @return Response
	 */
	public function getResend(UserRepository $user_gestion, Request $request)
	{
		if($request->session()->has('user_id'))	{
			$user = $user_gestion->getById($request->session()->get('user_id'));

			$this->dispatch(new SendMail($user));

			return redirect('/')->with('ok', trans('front/verify.resend'));
		}

		return redirect('/');
	}
}
