<?php

/**
 * API module to get special translations stored by the Live Translate extension.
 * Partially borrowed from http://blogs.msdn.com/b/translation/p/phptranslator.aspx
 *
 * @since 1.3
 *
 * @file ApiLTMSTranslator.php
 * @ingroup LiveTranslate
 *
 * @licence GNU GPL v3
 * @author Nischay Nahata < nischayn22@gmail.com >
 */
class ApiLTMSTranslator extends ApiBase {
	
	public function __construct( $main, $action ) {
		parent::__construct( $main, $action );
	}
	
	public function execute() {
		$params = $this->extractRequestParams();

		// In MW 1.17 and above ApiBase::PARAM_REQUIRED can be used, this is for b/c with 1.16.
		foreach ( array( 'from', 'to', 'text' ) as $requiredParam ) {
			if ( !isset( $params[$requiredParam] ) ) {
				$this->dieUsageMsg( array( 'missingparam', $requiredParam ) );
			}			
		}

		//Client ID of the application.
        $clientID       = $GLOBALS['egLiveTranslateMSClientId'];
        //Client Secret key of the application.
        $clientSecret = $GLOBALS['egLiveTranslateMSClientSecret'];
        //OAuth Url.
        $authUrl      = "https://datamarket.accesscontrol.windows.net/v2/OAuth2-13/";
        //Application Scope Url
        $scopeUrl     = "http://api.microsofttranslator.com";
        //Application grant type
        $grantType    = "client_credentials";

        //Create the AccessTokenAuthentication object.
        $authObj      = new LTMSHTTPTranslator();
        //Get the Access token.
        $accessToken  = $authObj->getTokens($grantType, $scopeUrl, $clientID, $clientSecret, $authUrl);
        //Create the authorization Header string.
        $authHeader = "Authorization: Bearer ". $accessToken;

        //Set the params.//
        $fromLanguage = $params['from'];
        $toLanguage   = $params['to'];
        $inputStr     = $params['text'];
        $contentType  = 'text/plain';
        $category     = 'general';
    
        $params = "text=".urlencode($inputStr)."&to=".$toLanguage."&from=".$fromLanguage;
        $translateUrl = "http://api.microsofttranslator.com/v2/Http.svc/Translate?$params";
    
        //Get the curlResponse.
        $curlResponse = $authObj->curlRequest($translateUrl, $authHeader);
        //Interprets a string of XML into an object.
        $xmlObj = simplexml_load_string($curlResponse);
        foreach((array)$xmlObj[0] as $val){
            $translatedStr = $val;
      	}
		$this->getResult()->addValue(
			null,
			'translated_text',
			$translatedStr
		);
	}

	public function getAllowedParams() {
		return array(
			'from' => array(
				ApiBase::PARAM_TYPE => 'string',
				//ApiBase::PARAM_REQUIRED => true,
			),
			'to' => array(
				ApiBase::PARAM_TYPE => 'string',
				//ApiBase::PARAM_REQUIRED => true,
			),
			'text' => array(
				ApiBase::PARAM_TYPE => 'string',
				//ApiBase::PARAM_REQUIRED => true,
			),
		);
	}
	
	public function getParamDescription() {
		return array(
			'from' => 'Source language',
			'to' => 'Destination language',
			'text' => 'The text to translate using Microsoft Translation Service.',
		);
	}
	
	public function getDescription() {
		return array(
			'Returns the available translations of the provided text from the source language in the destiniation language using Microsoft Translation Service.'
		);
	}
		
	public function getPossibleErrors() {
		return array_merge( parent::getPossibleErrors(), array(
			array( 'missingparam', 'from' ),
			array( 'missingparam', 'to' ),
			array( 'missingparam', 'text' ),
		) );
	}

	protected function getExamples() {
		return array(
			'api.php?action=ltmstranslator&from=en&to=de&text=hello',
		);
	}	

	public function getVersion() {
		return __CLASS__ . ': $Id$';
	}		
	
}
