<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HomeTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testStatusCode()
    {// ステータスコードが200であること
        $response = $this->get('/home');

        $response = assertStatus(200);
    }

    public function testBody()
    {// 「/home」アクセス時の画面に「こんにちは」が表示されること
        $response = $this->get('/home');

        $response->assertSeeText("こんにちは");
    }
}
