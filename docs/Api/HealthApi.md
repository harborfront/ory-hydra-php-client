# Ory\Hydra\HealthApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getStatistics**](HealthApi.md#getStatistics) | **GET** /health/stats | Show instance statistics


# **getStatistics**
> \Ory\Hydra\Model\OauthClient[] getStatistics()

Show instance statistics

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:health:stats\"], \"actions\": [\"get\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\HealthApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->getStatistics();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->getStatistics: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ory\Hydra\Model\OauthClient[]**](../Model/OauthClient.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

