<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Services\Message;
use App\Http\Requests\FeedBackRequest;

class AjaxController extends Controller
{

	public $adminEmail			= 'support@avioletta.ru';
	public $supportEmail		= 'support@e-vlasov.ru';

	/**
	* Send message from the feedback form
	*
	* @param  \Illuminate\Http\Request  $request
	* @return string JSON
	*/
	public function sendMess(FeedBackRequest $request)
	{
		$req	= $request->validated();
		if (!empty((new Message($req, $this))->sendFeedback()))
		{
			$ReturnData = ['success' => 1];
			return response()->json($ReturnData);
		} else { echo('Ошибка! Письмо не отправлено.'); }
		return false;
	}
}