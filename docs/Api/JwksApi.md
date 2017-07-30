# Ory\Hydra\JwksApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createJwkKey**](JwksApi.md#createJwkKey) | **POST** /keys/{set} | Generate a new JSON Web Key
[**deleteJwkKey**](JwksApi.md#deleteJwkKey) | **DELETE** /keys/{set}/{kid} | Delete a JSON Web Key
[**deleteJwkSet**](JwksApi.md#deleteJwkSet) | **DELETE** /keys/{set} | Delete a JSON Web Key
[**getJwkSet**](JwksApi.md#getJwkSet) | **GET** /keys/{set} | Retrieves a JSON Web Key Set matching the set
[**getJwkSetKey**](JwksApi.md#getJwkSetKey) | **GET** /keys/{set}/{kid} | Retrieves a JSON Web Key Set matching the set and the kid
[**updateJwkKey**](JwksApi.md#updateJwkKey) | **PUT** /keys/{set}/{kid} | Updates a JSON Web Key
[**updateJwkSet**](JwksApi.md#updateJwkSet) | **PUT** /keys/{set} | Updates a JSON Web Key Set
[**wellKnown**](JwksApi.md#wellKnown) | **GET** /.well-known/jwks.json | Public JWKs


# **createJwkKey**
> \Ory\Hydra\Model\JwkSet createJwkKey($set, $body)

Generate a new JSON Web Key

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:keys:<set>:<kid>\"], \"actions\": [\"create\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\JwksApi(new \Http\Adapter\Guzzle6\Client());
$set = "set_example"; // string | The set
$body = new \Ory\Hydra\Model\CreateRequest(); // \Ory\Hydra\Model\CreateRequest | 

try {
    $result = $api_instance->createJwkKey($set, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JwksApi->createJwkKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **string**| The set |
 **body** | [**\Ory\Hydra\Model\CreateRequest**](../Model/CreateRequest.md)|  | [optional]

### Return type

[**\Ory\Hydra\Model\JwkSet**](../Model/JwkSet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJwkKey**
> deleteJwkKey($kid, $set)

Delete a JSON Web Key

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:keys:<set>:<kid>\"], \"actions\": [\"delete\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\JwksApi(new \Http\Adapter\Guzzle6\Client());
$kid = "kid_example"; // string | The kid of the desired key
$set = "set_example"; // string | The set

try {
    $api_instance->deleteJwkKey($kid, $set);
} catch (Exception $e) {
    echo 'Exception when calling JwksApi->deleteJwkKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kid** | **string**| The kid of the desired key |
 **set** | **string**| The set |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteJwkSet**
> deleteJwkSet($set)

Delete a JSON Web Key

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:keys:<set>\"], \"actions\": [\"delete\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\JwksApi(new \Http\Adapter\Guzzle6\Client());
$set = "set_example"; // string | The set

try {
    $api_instance->deleteJwkSet($set);
} catch (Exception $e) {
    echo 'Exception when calling JwksApi->deleteJwkSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **string**| The set |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJwkSet**
> \Ory\Hydra\Model\JwkSet getJwkSet($set)

Retrieves a JSON Web Key Set matching the set

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:keys:<set>:<kid>\"], \"actions\": [\"get\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\JwksApi(new \Http\Adapter\Guzzle6\Client());
$set = "set_example"; // string | The set

try {
    $result = $api_instance->getJwkSet($set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JwksApi->getJwkSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **string**| The set |

### Return type

[**\Ory\Hydra\Model\JwkSet**](../Model/JwkSet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getJwkSetKey**
> \Ory\Hydra\Model\JwkSet getJwkSetKey($kid, $set)

Retrieves a JSON Web Key Set matching the set and the kid

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:keys:<set>:<kid>\"], \"actions\": [\"get\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\JwksApi(new \Http\Adapter\Guzzle6\Client());
$kid = "kid_example"; // string | The kid of the desired key
$set = "set_example"; // string | The set

try {
    $result = $api_instance->getJwkSetKey($kid, $set);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JwksApi->getJwkSetKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kid** | **string**| The kid of the desired key |
 **set** | **string**| The set |

### Return type

[**\Ory\Hydra\Model\JwkSet**](../Model/JwkSet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJwkKey**
> \Ory\Hydra\Model\JwkSet updateJwkKey($kid, $set, $body)

Updates a JSON Web Key

Use this method if you do not want to let Hydra generate the JWKs for you, but instead save your own.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:keys:<set>:<kid>\"], \"actions\": [\"update\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\JwksApi(new \Http\Adapter\Guzzle6\Client());
$kid = "kid_example"; // string | The kid of the desired key
$set = "set_example"; // string | The set
$body = new \Ory\Hydra\Model\JwkSet(); // \Ory\Hydra\Model\JwkSet | 

try {
    $result = $api_instance->updateJwkKey($kid, $set, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JwksApi->updateJwkKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **kid** | **string**| The kid of the desired key |
 **set** | **string**| The set |
 **body** | [**\Ory\Hydra\Model\JwkSet**](../Model/JwkSet.md)|  | [optional]

### Return type

[**\Ory\Hydra\Model\JwkSet**](../Model/JwkSet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateJwkSet**
> \Ory\Hydra\Model\JwkSet updateJwkSet($set, $body)

Updates a JSON Web Key Set

Use this method if you do not want to let Hydra generate the JWKs for you, but instead save your own.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:keys:<set>\"], \"actions\": [\"update\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\JwksApi(new \Http\Adapter\Guzzle6\Client());
$set = "set_example"; // string | The set
$body = new \Ory\Hydra\Model\JwkSet(); // \Ory\Hydra\Model\JwkSet | 

try {
    $result = $api_instance->updateJwkSet($set, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JwksApi->updateJwkSet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **set** | **string**| The set |
 **body** | [**\Ory\Hydra\Model\JwkSet**](../Model/JwkSet.md)|  | [optional]

### Return type

[**\Ory\Hydra\Model\JwkSet**](../Model/JwkSet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wellKnown**
> \Ory\Hydra\Model\JwkSet wellKnown()

Public JWKs

Use this method if you do not want to let Hydra generate the JWKs for you, but instead save your own.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:keys:hydra.openid.id-token:public\"], \"actions\": [\"GET\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\JwksApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->wellKnown();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling JwksApi->wellKnown: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ory\Hydra\Model\JwkSet**](../Model/JwkSet.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

