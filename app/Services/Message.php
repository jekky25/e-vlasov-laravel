<?php

namespace App\Services;

class Message
{

	private $checkFields = ['name', 'email', 'message'];
	private $supportEmail, $params;
	public	$body, $headers, $toEmail;
	public 	$subject 	= "Отправка с Формы обратной связи";

	/**
	 * Create a new Message instance.
	 *
	 * @return void
	 */
	public function __construct($req, $obj)
	{
		$this->toEmail 				= $obj->adminEmail;
		$this->params['name']		= $req['name'];
		$this->params['email']		= $req['email'];
		$this->params['message']	= $req['message'];
		$this->supportEmail			= $obj->supportEmail;
	}

	/**
	 * check empty fields
	 * 
	 * @return bool
	 */
	public function checkEmptyFields()
	{
		foreach ($this->checkFields as $field) {
			if (!self::isEmptyField($this->params[$field])) return false;
		}
		return true;
	}

	/**
	 * check field empty
	 * 
	 * @param string $field
	 * @return bool
	 */
	public static function isEmptyField($field)
	{
		return !empty($field);
	}

	/**
	 * Make preparation email headers
	 * @return void
	 */
	public function prepareHeaders()
	{
		$this->headers = 'From: "Битрикс Е. Власов" <' . $this->supportEmail . '>' . "\r\n";
		$this->headers .= 'Content-type: text/html; charset=windows-1251';
	}

	/**
	 * Send Feed Back Message
	 * @return void
	 */
	public function sendFeedback()
	{
		if (!$this->checkEmptyFields()) return false;
		$isSend = (new Email($this->subject, $this->params, $this->headers, $this->toEmail))->sendEmail();
		return $isSend;
	}
}
