<?php

namespace App\Services;

use Illuminate\Support\Facades\Mail;
use App\Mail\FeedBackMail;

class Email
{

	private $toEmail, $params;
	private $encodeFirst = 'utf-8';
	private $encodeSecond = 'windows-1251';

	/**
	 * Create a new Email instance.
	 *
	 * @return void
	 */
	public function __construct($subject, $params, $headers, $toEmail)
	{
		$this->params	= $params;
		$this->toEmail	= $toEmail;
		$this->params['subject']	= $subject;
		$this->params['headers']	= $headers;
	}

	/**
	 * Convert Encoding
	 * @param string $str
	 * @return string
	 */
	public function convertEncoding($str)
	{
		return iconv($this->encodeFirst, $this->encodeSecond, $str);
	}


	/**
	 * sends emails
	 * 
	 * @return bool
	 */
	public function sendEmail()
	{
		return Mail::mailer(config('mail.mail_mode'))->to($this->toEmail)->send(new FeedBackMail($this->params));
	}
}
