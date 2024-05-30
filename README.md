<p align="center" >
  <b>POINT UTAMA</b>
</p>

---

> #### INSTALASI
> - PHP 8.1.0
> - LARAVEL 9.1.10
>   ```
>   Composer Create-project laravel\laravel=v9.1.10 laravel-http client
>   ```
> - pipedream
>   ```
>   https://public.requestbin.com/r/en0t0nwzu0td7b/2fzzNfyrDTKqCpXQVNdqFi3D85y
>   ```
> ---
> #### APA ITU HTTP CLIENT?
> - Laravel memiliki fitur bernama http client
> - Fitur ini digunakan untuk mempermudah kita melakukan request HTTP
>
> #### HTTP FACADE
> - Untuk menggunakan fitur HTTP Client di laravel, kita bisa menggunakan http facade
>
> #### GUZZLE
> - Laravel secara low level menggunakan guzzle
> - guzzle adalah salah satu library http client untuk php yang sangat populer 
>
> #### HTTP METHOD 
> - Saat melakukan http request, hal yang pasti tentukan adalah jenis http method yang akan kita lalkukan
>
> Berikut jenis jenis http facade function :
> ```
> get(url) => HTTP GET
> post(url) => HTTP POST
> put(url) => HTTP PUT
> patch(url) => HTTP PATCH
> delete(url) => HTTP DELETE
> head(url) => HTTP HEAD
> ```
>
> #### TESTGET
> - Untuk menampilkan http method get
> ```
> $response = Http::get("https://en0t0nwzu0td7b.x.pipedream.net");
> self::assertTrue($response->ok());
> ```
>
> #### TESTPOST
> - untuk menampilkan http method post
> ```
> $response = Http::post("https://en0t0nwzu0td7b.x.pipedream.net");
> self::assertTrue($response->ok());
> ```
>
> #### TESTDELETE
> - untuk menampilikan http method delete
> ```
> $response = Http::delete("https://en0t0nwzu0td7b.x.pipedream.net");
> self::assertTrue($response->ok());
> ```
>
> #### RESPONSE
> - Untuk menampilkan response success pada web ``` https://en0t0nwzu0td7b.x.pipedream.net ```
> ```
> $response = Http::get("https://en0t0nwzu0td7b.x.pipedream.net");
> self::assertEquals(200, $response->status());
> self::assertNotNull($response->headers());
> self::assertNotNull($response->body());
>
> $json = $response->json();
> self::assertTrue($json['success']);
> ```
> #### QUERYPARAMETER
> - Untuk menambahkan query parameter ke dalam http request dengan menggunakan function ```withQueryParameter```
> ```
> $response = Http::withQueryParameters([
>  'page' => 1,
>  'limit' => 10,
> ])->get("https://en0t0nwzu0td7b.x.pipedream.net");
> self::assertTrue($response->ok());
> ```
> #### HEADER
> - Untuk menambahkan Header ke dalam http request dengan menggunakan function ```withHeader```
> ```
> $response = Http::withQueryParameters([
>  'page' => 1,
>  'limit' => 10,
> ])->withHeaders([
>  'Accept' => 'application/json',
>  'X-Request-ID' => '123123123',
> ])->get("https://en0t0nwzu0td7b.x.pipedream.net");
> self::assertTrue($response->ok());
> ```
> #### COOKIE
> - Untuk menambahkan Cookie ke dalam http request dengan menggunakan function ```withCookies```
> ```
> $response = Http::withQueryParameters([
>  'page' => 1,
>  'limit' => 10,
> ])->withHeaders([
>  'Accept' => 'application/json',
>  'X-Request-ID' => '123123123',
> ])->withCookies([
>  "SessionId" => "3242432423",
>  "UserId" => "farel",
> ], "en0t0nwzu0td7b.x.pipedream.net")->get("https://en0t0nwzu0td7b.x.pipedream.net");
> self::assertTrue($response->ok());
> ```
> #### FORMPOST
> - Untuk menambahkan FormPost ke dalam http request dengan menggunakan function ```asform()``` lalu datanya dikirim ketika kita menggunakan function post(url, form)
> ```
>         $response = Http::asForm()->post("https://en0t0nwzu0td7b.x.pipedream.net", [
>             "username" => "admin",
>             "password" => "admin"
>         ]);
>         self::assertTrue($response->ok());
> ```
> #### TIMEOUT
> - 
<p align="center" >
  <b>PERTANYAAN DAN CATATAN TAMBAHAN</b>
</p>

---

> - 

---

<p align="center" >
  <b>KESIMPULAN</b>
</p>


















