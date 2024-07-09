<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Response;
use Tests\TestCase;

class ValidationFormSendTest extends TestCase
{
    /**
     * Test status 200 ajax/send_mess.php 
     */
    public function test_send_valid_datas(): void
    {
        $this->post('ajax/send_mess.php', ['name' => 'Вася', 'email' => 'jonny@list.ru', 'message' => 'текст текст текст'])
        ->assertStatus(200)
        ->assertJson (['success' => 1]);
    }

    /**
     * Test form validation
     */
    public function test_send_no_valid_datas(): void
    {
        $response = $this->post('ajax/send_mess.php', ['name' => 'Вася'])
        ->assertStatus(302);

        $response = $this->post('ajax/send_mess.php', ['e-mail' => 'jonny@list.ru'])
        ->assertStatus(302);

        $response = $this->post('ajax/send_mess.php', ['name' => 'Вася', 'e-mail' => 'dgfhgdg', 'message' => 'текст текст текст'])
        ->assertStatus(302);

        $response = $this->post('ajax/send_mess.php', ['message' => 'текст текст текст'])
        ->assertStatus(302);
    }
}
