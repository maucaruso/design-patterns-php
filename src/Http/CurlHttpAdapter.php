<?php

namespace PHP\DesignPattern\Http;

class CurlHttpAdapter implements HttpAdapter
{
	public function post(string $url, array $data = array()): void {
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, $data);
    curl_exec($curl);
	}
}