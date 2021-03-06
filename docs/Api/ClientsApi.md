# Ory\Hydra\ClientsApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOAuthClient**](ClientsApi.md#createOAuthClient) | **POST** /clients | Creates an OAuth 2.0 Client
[**deleteOAuthClient**](ClientsApi.md#deleteOAuthClient) | **DELETE** /clients/{id} | Deletes an OAuth 2.0 Client
[**getOAuthClient**](ClientsApi.md#getOAuthClient) | **GET** /clients/{id} | Fetches an OAuth 2.0 Client.
[**listOAuthClients**](ClientsApi.md#listOAuthClients) | **GET** /clients | Lists OAuth 2.0 Clients
[**updateOAuthClient**](ClientsApi.md#updateOAuthClient) | **PUT** /clients/{id} | Updates an OAuth 2.0 Client


# **createOAuthClient**
> \Ory\Hydra\Model\OauthClient createOAuthClient($body)

Creates an OAuth 2.0 Client

Be aware that an OAuth 2.0 Client may gain highly priviledged access if configured that way. This endpoint should be well protected and only called by code you trust.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:clients\"], \"actions\": [\"create\"], \"effect\": \"allow\" } ```  Additionally, the context key \"owner\" is set to the owner of the client, allowing policies such as:  ``` { \"resources\": [\"rn:hydra:clients\"], \"actions\": [\"create\"], \"effect\": \"allow\", \"conditions\": { \"owner\": { \"type\": \"EqualsSubjectCondition\" } } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\ClientsApi(new \Http\Adapter\Guzzle6\Client());
$body = new \Ory\Hydra\Model\OauthClient(); // \Ory\Hydra\Model\OauthClient | 

try {
    $result = $api_instance->createOAuthClient($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->createOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ory\Hydra\Model\OauthClient**](../Model/OauthClient.md)|  |

### Return type

[**\Ory\Hydra\Model\OauthClient**](../Model/OauthClient.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteOAuthClient**
> deleteOAuthClient($id)

Deletes an OAuth 2.0 Client

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:clients:<some-id>\"], \"actions\": [\"delete\"], \"effect\": \"allow\" } ```  Additionally, the context key \"owner\" is set to the owner of the client, allowing policies such as:  ``` { \"resources\": [\"rn:hydra:clients:<some-id>\"], \"actions\": [\"delete\"], \"effect\": \"allow\", \"conditions\": { \"owner\": { \"type\": \"EqualsSubjectCondition\" } } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\ClientsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the OAuth 2.0 Client.

try {
    $api_instance->deleteOAuthClient($id);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->deleteOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the OAuth 2.0 Client. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getOAuthClient**
> \Ory\Hydra\Model\OauthClient getOAuthClient($id)

Fetches an OAuth 2.0 Client.

Never returns the client's secret.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:clients:<some-id>\"], \"actions\": [\"get\"], \"effect\": \"allow\" } ```  Additionally, the context key \"owner\" is set to the owner of the client, allowing policies such as:  ``` { \"resources\": [\"rn:hydra:clients:<some-id> \"], \"actions\": [\"get\"], \"effect\": \"allow\", \"conditions\": { \"owner\": { \"type\": \"EqualsSubjectCondition\" } } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\ClientsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the OAuth 2.0 Client.

try {
    $result = $api_instance->getOAuthClient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->getOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**| The id of the OAuth 2.0 Client. |

### Return type

[**\Ory\Hydra\Model\OauthClient**](../Model/OauthClient.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listOAuthClients**
> \Ory\Hydra\Model\OauthClient[] listOAuthClients()

Lists OAuth 2.0 Clients

Never returns a client's secret.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:clients\"], \"actions\": [\"get\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\ClientsApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->listOAuthClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->listOAuthClients: ', $e->getMessage(), PHP_EOL;
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

# **updateOAuthClient**
> \Ory\Hydra\Model\OauthClient updateOAuthClient($id, $body)

Updates an OAuth 2.0 Client

Be aware that an OAuth 2.0 Client may gain highly priviledged access if configured that way. This endpoint should be well protected and only called by code you trust.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:clients\"], \"actions\": [\"update\"], \"effect\": \"allow\" } ```  Additionally, the context key \"owner\" is set to the owner of the client, allowing policies such as:  ``` { \"resources\": [\"rn:hydra:clients\"], \"actions\": [\"update\"], \"effect\": \"allow\", \"conditions\": { \"owner\": { \"type\": \"EqualsSubjectCondition\" } } } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\ClientsApi(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | 
$body = new \Ory\Hydra\Model\OauthClient(); // \Ory\Hydra\Model\OauthClient | 

try {
    $result = $api_instance->updateOAuthClient($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ClientsApi->updateOAuthClient: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **string**|  |
 **body** | [**\Ory\Hydra\Model\OauthClient**](../Model/OauthClient.md)|  |

### Return type

[**\Ory\Hydra\Model\OauthClient**](../Model/OauthClient.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

