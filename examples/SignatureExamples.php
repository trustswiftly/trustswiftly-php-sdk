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
     * Get Embed Signature
     */
    $embedSignature=$trustObject->getEmbedSignature($user_id);

    /**
     * Verify Webhook Signature
     */
    $result=TrustSwiftly\TrustSwiftly::verifyWebhookSignature($receivedSignature,file_get_contents("php://input"),$signatureSecret);

}catch (Exception $e){
    die($e->getMessage());
}