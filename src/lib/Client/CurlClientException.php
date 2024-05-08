<?php

namespace Freightera\Common\Client;

class CurlClientException extends \RuntimeException
{
	/** @var CurlClientResponse */
	private $response;

	public function __construct(CurlClientResponse $response, string $message = '')
	{
		$this->response = $response;
		parent::__construct($message, $response->getStatusCode());
	}

	/**
	 * @return CurlClientResponse
	 */
	public function getResponse(): CurlClientResponse
	{
		return $this->response;
	}


}