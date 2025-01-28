<?php

require '../vendor/autoload.php';
$key='xxxx';
$api_secret='xxx';
$embed_key='xx';
$base_url='xxxx';

use TrustSwiftly\TrustSwiftly;
try {
    $trustObject = new TrustSwiftly($key, $base_url, $api_secret, $embed_key);

    /**
     * Validate Credentials Method 1
     */
    $validateCredentialsClient=$trustObject->credentialValidationClient();

    $result = $validateCredentialsClient->verifyCredentials([
        'embed_key'=>$embed_key,
        'signature'=>$trustObject->getVerifyCredentailsSignature(),
    ]);


    /**
     * Validate Credentials Method 2
     */

    $validationResponse = TrustSwiftly::validateCredentials($key,$base_url,$api_secret,$embed_key);

}catch (Exception $e){
    die($e->getMessage());
}