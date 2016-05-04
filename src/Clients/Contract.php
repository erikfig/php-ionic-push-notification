<?php

namespace WebDevBr\Android\Clients;

interface Contract
{
	public function post($url, array $config);
	public function getBody();
}