<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Client\RequestException;
use Illuminate\Support\Facades\Http;
use Tests\TestCase;

class HttpTest extends TestCase
{
    public function testGet()
    {
        $response = Http::get("https://en0t0nwzu0td7b.x.pipedream.net");
        self::assertTrue($response->ok());
    }

    public function testPost()
    {
        $response = Http::post("https://en0t0nwzu0td7b.x.pipedream.net");
        self::assertTrue($response->ok());
    }
    public function testDelete()
    {
        $response = Http::delete("https://en0t0nwzu0td7b.x.pipedream.net");
        self::assertTrue($response->ok());
    }

    public function testResponse()
    {
        $response = Http::get("https://en0t0nwzu0td7b.x.pipedream.net");
        self::assertEquals(200, $response->status());
        self::assertNotNull($response->headers());
        self::assertNotNull($response->body());

        $json = $response->json();
        self::assertTrue($json['success']);
    }


}
