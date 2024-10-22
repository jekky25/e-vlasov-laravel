<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Contracts\Validation\Validator;

class FeedBackRequest extends FormRequest
{
	/**
	* Get the error messages for the defined validation rules.*
	* @param Validator $validator
	* @return array
	*/
	public function failedValidation(Validator $validator): array
	{
		throw new HttpResponseException(response()->json(
		[
		'success'	=> false,
		'errors'	=> $validator->errors(),
		], 422));
	}

	/**
	* messages for the request
	* @return string array
	*/
	public function messages():array
	{
		return	[
			'name.required'			=> 'не указано имя',
			'email.email'			=> 'указан некорректный Е-майл',
			'email.required'		=> 'не указан Е-майл',
			'message.required'		=> 'не введено сообщение'
		];
	}

	/**
	* Get the validation rules that apply to the request.
	*
	* @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
	*/
	public function rules(): array
	{
		return [
			'name'		=> ['required'],
			'email'		=> ['required', 'email'],
			'message'	=> ['required']
		];
	}
}