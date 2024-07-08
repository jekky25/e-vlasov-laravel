<?php
namespace App\Services;

class Email {

	private $toEmail, $body, $headers, $subject;
	private $encodeFirst = 'utf-8';
	private $encodeSecond = 'windows-1251';

	/**
     * Create a new Email instance.
     *
     * @return void
     */
	public function __construct($subject, $body, $headers, $toEmail) {
		$this->subject	= $this->convertEncoding($subject);
		$this->body		= $this->convertEncoding($body);
		$this->headers	= $this->convertEncoding($headers);
		$this->toEmail	= $this->convertEncoding($toEmail);
	}

	/**
     * Convert Encoding
     * @param string $str
     * @return string
     */
	public function convertEncoding ($str)
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
		return mail($this->toEmail,$this->subject, $this->body, $this->headers);
	}
}