<?php
namespace App\Services;

class Email {

	public static $fields = ['name', 'email', 'message'];
	/**
     * Create a new Email instance.
     *
     * @return void
     */
	public function __construct(){
	}

	public static function checkEmptyFields($req)
	{
		foreach (self::$fields as $field)
		{
			if (!self::isEmptyField($req[$field])) return false;
		}
		return true;
	}

	public static function isEmptyField($field)
	{
		return !empty ($field);
	}

	 /**
     * sends emails
     * 
     * @param string $email_template
     * @param string $email
     * @param string $EMAIL
	 * @param string $subject
     * @return void
     */
    public static function sendEmail($req, $obj)
    {
		$to 		= $obj->adminEmail;
		$subject 	= "Отправка с Формы обратной связи";
		$message 	= "<p>Имя: " . $req['name'] . "</p>\r\n";
		$message 	.= "<p>Е-майл: " . $req['email'] . "</p>\r\n";
		$message 	.= "<p>Сообщение: " . $req['message'] . "</p>\r\n";


		$headers 	= 'From: "Битрикс Е. Власов" <' . $obj->supportEmail . '>' . "\r\n";
		$headers 	.= 'Content-type: text/html; charset=utf-8';

		return mail($to,"$subject ",$message, $headers);
    }
}
