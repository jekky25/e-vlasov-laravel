<?php

namespace Tests\Feature;

use Tests\TestCase;

class ValidationFormSendTest extends TestCase
{
    protected $url = 'api/ajax/send_mess.php';
    /**
     * Test status 200 ajax/send_mess.php 
     */
    public function test_send_valid_datas(): void
    {
        $this->post($this->url, ['name' => 'Вася', 'email' => 'jonny@list.ru', 'message' => 'текст текст текст'])
        ->assertStatus(200)
        ->assertJson (['success' => 1]);
    }

    /**
     * Test form validation
     */
    public function test_send_no_valid_datas(): void
    {
        $response = $this->post($this->url, ['name' => 'Вася'])
        ->assertStatus(422);

        $response = $this->post($this->url, ['e-mail' => 'jonny@list.ru'])
        ->assertStatus(422);

        $response = $this->post($this->url, ['name' => 'Вася', 'e-mail' => 'dgfhgdg', 'message' => 'текст текст текст'])
        ->assertStatus(422);

        $response = $this->post($this->url, ['message' => 'текст текст текст'])
        ->assertStatus(422);
    }
}
