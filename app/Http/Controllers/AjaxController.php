<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Services\Message;
use App\User;
use Validator;



class AjaxController extends Controller
{

	public $adminEmail			= 'support@avioletta.ru';
	public $supportEmail		= 'support@e-vlasov.ru';
	
	public static $rulesFeedBack = [
		'name'		=> ['required'],
		'email'	=> ['required', 'email'],
		'message'	=> ['required']
	];

	public static $errMessagesFeedBack = [
		'name.required'			=> 'не указано имя',
		'email.email'			=> 'указан некорректный Е-майл',
		'email.required'		=> 'не указан Е-майл',
		'message.required'		=> 'не введено сообщение'
	];

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

	 /**
     * Send message from the feedback form
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string JSON
     */
	public function sendMess (Request $request)
	{
		$req 			= $request->post();
		$validator 		= Validator::make($req, self::$rulesFeedBack, self::$errMessagesFeedBack);
		if ($validator->fails()) {
			$messages = $validator->messages();
			$strError = $messages;
			return redirect()->back()
			->withErrors($strError, 'comment')
			->withInput();
		}

		if (!empty((new Message($req, $this))->sendFeedback()))
		{
			$ReturnData = ['success' => 1];
			echo json_encode($ReturnData);
		} else { echo('Ошибка! Письмо не отправлено.'); }
		return false;
	}
}
