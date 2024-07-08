<?php
namespace App\Services;

class Message {

	private $checkFields = ['name', 'email', 'message'];
	private $name, $email, $message, $supportEmail;
	public	$body, $headers, $toEmail;
	public 	$subject 	= "Отправка с Формы обратной связи";

	/**
     * Create a new Message instance.
     *
     * @return void
     */
	public function __construct($req, $obj){
		$this->toEmail 			= $obj->adminEmail;
		$this->name				= $req['name'];
		$this->email 			= $req['email'];
		$this->message 			= $req['message'];
		$this->supportEmail 	= $obj->supportEmail;
	}
	/**
     * check empty fields
     * 
     * @return bool
     */
	public function checkEmptyFields()
	{
		foreach ($this->checkFields as $field)
		{
			if (!self::isEmptyField($this->{$field})) return false;
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
		return !empty ($field);
	}

	/**
     * Make preparation fields for sending them to Email
     * @return void
     */
	public function prepare()
	{
		$this->prepareMessage();
		$this->prepareEmailToHtml();
		$this->prepareHeaders();
	}

	/**
     * Make preparation email body
     * @return void
     */
	public function prepareMessage()
	{
		$this->body	= "<p>Имя: " . $this->name . "</p>\r\n";
		$this->body	.= "<p>Е-майл: " . $this->email . "</p>\r\n";
		$this->body .= "<p>Сообщение: " . $this->message . "</p>\r\n";
	}

	/**
     * Make preparation email Body to Html
     * @return void
     */
	public function prepareEmailToHtml()
	{
		$this->body = "<html><head><title>" . $this->subject . "</title></head><body>" . $this->body . "</body></html>";
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
		$this->prepare();
		$isSend = (new Email($this->subject, $this->body, $this->headers, $this->toEmail))->sendEmail();
		return $isSend;
	}
}