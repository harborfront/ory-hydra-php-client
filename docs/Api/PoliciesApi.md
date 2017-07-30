# Ory\Hydra\PoliciesApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPolicy**](PoliciesApi.md#createPolicy) | **POST** /policies | Create an access control policy
[**deletePolicy**](PoliciesApi.md#deletePolicy) | **DELETE** /policies/{id} | Delete an access control policy
[**getPolicy**](PoliciesApi.md#getPolicy) | **GET** /policies/{id} | Get an access control policy
[**listPolicies**](PoliciesApi.md#listPolicies) | **GET** /policies | List access control policies
[**updatePolicy**](PoliciesApi.md#updatePolicy) | **PUT** /policies/{id} | Update an access control policy


# **createPolicy**
> \Ory\Hydra\Model\Policy createPolicy($body)

Create an access control policy

Visit https://github.com/ory/ladon#usage for more information on policy usage.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:policies\"], \"actions\": [\"create\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\PoliciesApi(new \Http\Adapter\Guzzle6\Client());
$body = new \Ory\Hydra\Model\Policy(); // \Ory\Hydra\Model\Policy | 

try {
    $result = $api_instance->createPolicy($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->createPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ory\Hydra\Model\Policy**](../Model/Policy.md)|  | [optional]

### Return type

[**\Ory\Hydra\Model\Policy**](../Model/Policy.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePolicy**
> deletePolicy($id)

Delete an access control policy

Visit https://github.com/ory/ladon#usage for more information on policy usage.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:policies:<id>\"], \"actions\": [\"delete\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\PoliciesApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the policy.

try {
    $api_instance->deletePolicy($id);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->deletePolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the policy. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPolicy**
> \Ory\Hydra\Model\Policy getPolicy($id)

Get an access control policy

Visit https://github.com/ory/ladon#usage for more information on policy usage.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:policies:<id>\"], \"actions\": [\"get\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\PoliciesApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the policy.

try {
    $result = $api_instance->getPolicy($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->getPolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the policy. |

### Return type

[**\Ory\Hydra\Model\Policy**](../Model/Policy.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPolicies**
> \Ory\Hydra\Model\Policy listPolicies($offset, $limit)

List access control policies

Visit https://github.com/ory/ladon#usage for more information on policy usage.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:policies\"], \"actions\": [\"list\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\PoliciesApi(new \Http\Adapter\Guzzle6\Client());
$offset = 789; // int | The offset from where to start looking.
$limit = 789; // int | The maximum amount of policies returned.

try {
    $result = $api_instance->listPolicies($offset, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->listPolicies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **offset** | **int**| The offset from where to start looking. | [optional]
 **limit** | **int**| The maximum amount of policies returned. | [optional]

### Return type

[**\Ory\Hydra\Model\Policy**](../Model/Policy.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePolicy**
> \Ory\Hydra\Model\Policy updatePolicy($id, $body)

Update an access control policy

Visit https://github.com/ory/ladon#usage for more information on policy usage.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:policies\"], \"actions\": [\"update\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\PoliciesApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the policy.
$body = new \Ory\Hydra\Model\Policy(); // \Ory\Hydra\Model\Policy | 

try {
    $result = $api_instance->updatePolicy($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PoliciesApi->updatePolicy: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the policy. |
 **body** | [**\Ory\Hydra\Model\Policy**](../Model/Policy.md)|  | [optional]

### Return type

[**\Ory\Hydra\Model\Policy**](../Model/Policy.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

