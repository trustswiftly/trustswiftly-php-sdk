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
     * Get All Users
     */
    $filterAndSortOptions=[
        'per_page'=>2
    ];
    $userData=$trustObject->userClient()->getAllUsers($filterAndSortOptions);


    /**
     * Get User Details By Id
     */
    $userDetails=$trustObject->userClient()->getUserDetails($user_id);

    /**
     * User Object
     */
    $user=$userDetails->user();

    /**
     * Verifications
     */
    $user=$userDetails->userVerifications();

    /**
     * Create User
     */
    $userData = [
        'email'=>'test23323@asd.com'
    ];
    $userCreateData = $trustObject->userClient()->createUser($userData);

    /**
     * User Update
     */
    $updateData=[
        'first_name'=>'asd'
    ];
    $userDetails=$trustObject->userClient()->updateUser($user_id,$updateData);

    /**
     * User Verification Update
     */
    $updateData=[
        'verification_id'=>xx,
        'status'=>xx
    ];
    $userDetails=$trustObject->userClient()->updateUserVerification($user_id,$updateData);

    /**
     * Delete User
     */
    $userDetails=$trustObject->userClient()->deleteUser($user_id);

    /**
     * Get Magic Link
     */
    $userDetails=$trustObject->userClient()->getMagicLink($user_id);

}catch (Exception $e){
    die($e->getMessage());
}