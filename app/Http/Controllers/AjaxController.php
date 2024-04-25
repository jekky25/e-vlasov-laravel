<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
//use App\Models;
use App\User;



class AjaxController extends Controller
{

	public $adminEmail			= 'jekky25@list.ru';
	public $supportEmail		= 'support@e-vlasov.ru';
	

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
		$req = $request->post();
		if (empty ($req['name']) || empty ($req['email']) || empty ($req['message'])) return false;

		$to 		= $this->adminEmail;
		$subject 	= "Отправка с Формы обратной связи";
		$message 	= "<p>Имя: " . $req['name'] . "</p>\r\n";
		$message 	.= "<p>Е-майл: " . $req['email'] . "</p>\r\n";
		$message 	.= "<p>Сообщение: " . $req['message'] . "</p>\r\n";


		$headers 	= 'From: "Битрикс Е. Власов" <' . $this->supportEmail . '>' . "\r\n";
		$headers 	.= 'Content-type: text/html; charset=utf-8';


		$result 	= mail($to,"$subject ",$message, $headers); 
		if (!empty($result))
		{
			$ReturnData = ['success' => 1];
			echo json_encode($ReturnData);
			exit();
		} else { echo('Ошибка! Письмо не отправлено.'); }

		return false;
	}
}
