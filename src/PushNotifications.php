<?php

namespace WebDevBr\Android;

use WebDevBr\Android\Clients\Contract;

class PushNotifications
{
	private $serverApiKey;
	private $client;

	public function __construct($serverApiKey, Contract $client)
	{
		$this->serverApiKey = $serverApiKey;
		$this->client = $client;
	}

	public function send($to, $title, $message, array $extras = [])
	{
		$messages = [
		    'title' => $title,
			'message' => $message,
			//os outros que você qusier
	    ];

	    $headers = [ 
			'Authorization' => 'key=' . $this->serverApiKey,
			'Content-Type' => 'application/json',
		];

		//monta a estrutura do futuro json
		if (is_array($to)) {
	    	$body['registration_ids'] = $to;
		} elseif (is_string($to)) {
	    	$body['to'] = $to;
		} else {
			throw new \Exception("registration id is invalid.");
		}

	    $body['data'] = array_merge($messages, $extras);
	    
	    //envia a requisição
	    $request = $this->client->post('https://android.googleapis.com/gcm/send',
		[
			'headers' => $headers,
			'json' => $body,
		]);
		
		//mostra o retorno
		$response = $request->getBody();
		return json_decode($response);
	}
}
