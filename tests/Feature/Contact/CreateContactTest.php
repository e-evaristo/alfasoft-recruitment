<?php

namespace Tests\Feature\Auth;

use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CreateContactTest extends TestCase
{
    public function test_create_screen_can_be_rendered()
    {
        $response = $this->get('/create');
        $response->assertStatus(200);
    }

}
