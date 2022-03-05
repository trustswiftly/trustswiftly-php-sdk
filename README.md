# trustswiftly-php-sdk

PHP SDK for the TrustSwiftly

Our official API documentation is at [TrustSwifly Integration Documentation](https://docs.trustswiftly.com)

## Installation

### With Composer

```
composer require trustswifly/trustswiftly-php-sdk
```

```
"trustswiftly/trustswiftly-php-sdk": "^1.0"
```

## Usage

### Intialize Configs
```php
$trustObject = new TrustSwiftly\TrustSwiftly($api_key, $base_url, $api_secret, $embed_key);
```

### Validate Configs
```php
$validationResponse = TrustSwiftly\TrustSwiftly::validateCredentials($key,$base_url,$api_secret,$embed_key);
```


[User Apis](https://docs.trustswiftly.com/users)

### Get All Users
```php
$filterAndSortOptions=[
        'per_page'=>2
    ];
$userData=$trustObject->userClient()->getAllUsers($filterAndSortOptions);
```
### Get User Details By Id
```php
$userDetails=$trustObject->userClient()->getUserDetails($user_id);
```

>User Object
```php
$user=$userDetails->user();
```
>User Verifications
```php
$user=$userDetails->userVerifications();
```
### Create User
```php
$userData = [
        'email'=>'test@example.com'
    ];
$userCreateData = $trustObject->userClient()->createUser($userData);
```
### User Update
```php
$updateData=[
        'first_name'=>'asd'
    ];
$userDetails=$trustObject->userClient()->updateUser($user_id,$updateData);
```
### User Verification Update
```php
$updateData=[
        'verification_id'=>xx,
        'status'=>xx
    ];
$userVerificationData=$trustObject->userClient()->updateUserVerification($user_id,$updateData);
```
### Delete User
```php
$userDetails=$trustObject->userClient()->deleteUser($user_id);
```

### Get Magic Link
```php
$userDetails=$trustObject->userClient()->getMagicLink($user_id);
```

[Template Apis](https://docs.trustswiftly.com/templates)

### Get Templates
```php
$templateData=$trustObject->templateClient()->getVerificationTemplates();
```


[Stat Apis](https://docs.trustswiftly.com/stats)

### Get Statistics
```php
$statData=$trustObject->statisticsClient()->getVerificationStats();
```


### Signatures

Embed

```php
$embedSignature=$trustObject->getEmbedSignature($user_id);
```

Webhook

```php
$result=TrustSwiftly\TrustSwiftly::verifyWebhookSignature($receivedSignature,file_get_contents("php://input"),$signatureSecret);
```





