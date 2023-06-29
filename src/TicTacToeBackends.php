<?php

/**
 * Code generated by Speakeasy (https://speakeasyapi.dev). DO NOT EDIT.
 */

declare(strict_types=1);

namespace First\tic_tac_toe_backend;

/**
 * TicTacToeBackends - Game Engine API for Tic Tac Toe: Game Engine API for Tic Tac Toe
 * 
 * @package First\tic_tac_toe_backend
 * @access public
 */
class TicTacToeBackends
{
	public const SERVERS = [
		'http://localhost:5000/',
		'https://localhost:5000/',
	];
  		
	private SDKConfiguration $sdkConfiguration;

	/**
	 * Returns a new instance of the SDK builder used to configure and create the SDK instance.
	 * 
	 * @return TicTacToeBackendsBuilder
	 */
	public static function builder(): TicTacToeBackendsBuilder
	{
		return new TicTacToeBackendsBuilder();
	}

	/**
	 * @param SDKConfiguration $sdkConfiguration
	 */
	public function __construct(SDKConfiguration $sdkConfiguration)
	{
		$this->sdkConfiguration = $sdkConfiguration;
	}
	
    /**
     * Root endpoint.
     * 
     * <br/>Returns the package name and version.<br/><br/>
     * 
     * @return \First\tic_tac_toe_backend\Models\Operations\GetResponse
     */
	public function get(
    ): \First\tic_tac_toe_backend\Models\Operations\GetResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \First\tic_tac_toe_backend\Models\Operations\GetResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $response->body = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Root endpoint.
     * 
     * <br/>Returns the package name and version.<br/><br/>
     * 
     * @return \First\tic_tac_toe_backend\Models\Operations\GetVersionResponse
     */
	public function getVersion(
    ): \First\tic_tac_toe_backend\Models\Operations\GetVersionResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/version');
        
        $options = ['http_errors' => false];
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('GET', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \First\tic_tac_toe_backend\Models\Operations\GetVersionResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $response->body = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
	
    /**
     * Games endpoint. Creates the next game state from the previous game state.
     * 
     * <br/>Accepts a GameState and Move.<br/><br/>Returns a Move including the before and after GameStates.<br/>
     * 
     * @param string $request
     * @return \First\tic_tac_toe_backend\Models\Operations\PutGamesResponse
     */
	public function putGames(
        string $request,
    ): \First\tic_tac_toe_backend\Models\Operations\PutGamesResponse
    {
        $baseUrl = $this->sdkConfiguration->getServerUrl();
        $url = Utils\Utils::generateUrl($baseUrl, '/games');
        
        $options = ['http_errors' => false];
        $body = Utils\Utils::serializeRequestBody($request, "request", "raw");
        if ($body === null) {
            throw new \Exception('Request body is required');
        }
        $options = array_merge_recursive($options, $body);
        $options['headers']['Accept'] = '*/*';
        $options['headers']['user-agent'] = sprintf('speakeasy-sdk/%s %s %s %s', $this->sdkConfiguration->language, $this->sdkConfiguration->sdkVersion, $this->sdkConfiguration->genVersion, $this->sdkConfiguration->openapiDocVersion);
        
        $httpResponse = $this->sdkConfiguration->defaultClient->request('PUT', $url, $options);
        
        $contentType = $httpResponse->getHeader('Content-Type')[0] ?? '';

        $response = new \First\tic_tac_toe_backend\Models\Operations\PutGamesResponse();
        $response->statusCode = $httpResponse->getStatusCode();
        $response->contentType = $contentType;
        $response->rawResponse = $httpResponse;
        
        if ($httpResponse->getStatusCode() === 200) {
            if (Utils\Utils::matchContentType($contentType, '*/*')) {
                $response->body = $httpResponse->getBody()->getContents();
            }
        }

        return $response;
    }
}