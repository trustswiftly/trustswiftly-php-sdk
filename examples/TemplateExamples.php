<?php

require '../vendor/autoload.php';
$key='xxxx';
$api_secret='xxx';
$embed_key='xx';
$base_url='xxxx';
$user_id=xxxx;

try {
    $trustObject = new TrustSwiftly\TrustSwiftly($key, $base_url, $api_secret, $embed_key);

    /**
     * Get Templates
     */
    $templateData=$trustObject->templateClient()->getVerificationTemplates();
}catch (Exception $e){
    die($e->getMessage());
}