# Ory\Hydra\Oauth2Api

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createOAuthClient**](Oauth2Api.md#createOAuthClient) | **POST** /clients | Creates an OAuth 2.0 Client
[**deleteOAuthClient**](Oauth2Api.md#deleteOAuthClient) | **DELETE** /clients/{id} | Deletes an OAuth 2.0 Client
[**getOAuthClient**](Oauth2Api.md#getOAuthClient) | **GET** /clients/{id} | Fetches an OAuth 2.0 Client.
[**introspectOAuthToken**](Oauth2Api.md#introspectOAuthToken) | **POST** /oauth2/introspect | Introspect an OAuth2 access token
[**listOAuthClients**](Oauth2Api.md#listOAuthClients) | **GET** /clients | Lists OAuth 2.0 Clients
[**oauthAuth**](Oauth2Api.md#oauthAuth) | **GET** /oauth2/auth | The OAuth 2.0 Auth endpoint
[**oauthToken**](Oauth2Api.md#oauthToken) | **POST** /oauth2/token | The OAuth 2.0 Token endpoint
[**revokeOAuthToken**](Oauth2Api.md#revokeOAuthToken) | **POST** /oauth2/revoke | Revoke an OAuth2 access token
[**updateOAuthClient**](Oauth2Api.md#updateOAuthClient) | **PUT** /clients/{id} | Updates an OAuth 2.0 Client
[**wellKnown**](Oauth2Api.md#wellKnown) | **GET** /.well-known/jwks.json | Public JWKs
[**wellKnownHandler**](Oauth2Api.md#wellKnownHandler) | **GET** /.well-known/openid-configuration | Server well known configuration


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

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());
$body = new \Ory\Hydra\Model\OauthClient(); // \Ory\Hydra\Model\OauthClient | 

try {
    $result = $api_instance->createOAuthClient($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->createOAuthClient: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the OAuth 2.0 Client.

try {
    $api_instance->deleteOAuthClient($id);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->deleteOAuthClient: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | The id of the OAuth 2.0 Client.

try {
    $result = $api_instance->getOAuthClient($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->getOAuthClient: ', $e->getMessage(), PHP_EOL;
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

# **introspectOAuthToken**
> \Ory\Hydra\Model\InlineResponse200 introspectOAuthToken()

Introspect an OAuth2 access token

For more information, please refer to https://tools.ietf.org/html/rfc7662

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->introspectOAuthToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->introspectOAuthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ory\Hydra\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
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

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->listOAuthClients();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->listOAuthClients: ', $e->getMessage(), PHP_EOL;
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

# **oauthAuth**
> oauthAuth()

The OAuth 2.0 Auth endpoint

For more information, please refer to https://tools.ietf.org/html/rfc6749#section-4

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());

try {
    $api_instance->oauthAuth();
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauthAuth: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **oauthToken**
> \Ory\Hydra\Model\InlineResponse2001 oauthToken()

The OAuth 2.0 Token endpoint

For more information, please refer to https://tools.ietf.org/html/rfc6749#section-4

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->oauthToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->oauthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ory\Hydra\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **revokeOAuthToken**
> revokeOAuthToken($body)

Revoke an OAuth2 access token

For more information, please refer to https://tools.ietf.org/html/rfc7009

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());
$body = new \Ory\Hydra\Model\Body(); // \Ory\Hydra\Model\Body | 

try {
    $api_instance->revokeOAuthToken($body);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->revokeOAuthToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ory\Hydra\Model\Body**](../Model/Body.md)|  |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
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

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());
$id = "id_example"; // string | 
$body = new \Ory\Hydra\Model\OauthClient(); // \Ory\Hydra\Model\OauthClient | 

try {
    $result = $api_instance->updateOAuthClient($id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->updateOAuthClient: ', $e->getMessage(), PHP_EOL;
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

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->wellKnown();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->wellKnown: ', $e->getMessage(), PHP_EOL;
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

# **wellKnownHandler**
> \Ory\Hydra\Model\WellKnown wellKnownHandler()

Server well known configuration

For more information, please refer to https://openid.net/specs/openid-connect-discovery-1_0.html

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\Oauth2Api(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->wellKnownHandler();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling Oauth2Api->wellKnownHandler: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ory\Hydra\Model\WellKnown**](../Model/WellKnown.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

