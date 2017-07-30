# Ory\Hydra\WardenApi

All URIs are relative to *http://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addMembersToGroup**](WardenApi.md#addMembersToGroup) | **POST** /warden/groups/{id}/members | Add members to a group
[**createGroup**](WardenApi.md#createGroup) | **POST** /warden/groups | Create a group
[**deleteGroup**](WardenApi.md#deleteGroup) | **DELETE** /warden/groups/{id} | Delete a group by id
[**findGroupsByMember**](WardenApi.md#findGroupsByMember) | **GET** /warden/groups | Find group IDs by member
[**getGroup**](WardenApi.md#getGroup) | **GET** /warden/groups/{id} | Get a group by id
[**removeMembersFromGroup**](WardenApi.md#removeMembersFromGroup) | **DELETE** /warden/groups/{id}/members | Remove members from a group
[**wardenAllowed**](WardenApi.md#wardenAllowed) | **POST** /warden/allowed | Check if a subject is allowed to do something
[**wardenTokenAllowed**](WardenApi.md#wardenTokenAllowed) | **POST** /warden/token/allowed | Check if the subject of a token is allowed to do something


# **addMembersToGroup**
> addMembersToGroup($id, $body)

Add members to a group

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:warden:groups:<id>\"], \"actions\": [\"members.add\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\WardenApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the group to modify.
$body = new \Ory\Hydra\Model\MembersRequest(); // \Ory\Hydra\Model\MembersRequest | 

try {
    $api_instance->addMembersToGroup($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WardenApi->addMembersToGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the group to modify. |
 **body** | [**\Ory\Hydra\Model\MembersRequest**](../Model/MembersRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createGroup**
> \Ory\Hydra\Model\Group createGroup()

Create a group

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:warden:groups\"], \"actions\": [\"create\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\WardenApi(new \Http\Adapter\Guzzle6\Client());

try {
    $result = $api_instance->createGroup();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WardenApi->createGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Ory\Hydra\Model\Group**](../Model/Group.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteGroup**
> deleteGroup($id)

Delete a group by id

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:warden:groups:<id>\"], \"actions\": [\"delete\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\WardenApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the group to look up.

try {
    $api_instance->deleteGroup($id);
} catch (Exception $e) {
    echo 'Exception when calling WardenApi->deleteGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the group to look up. |

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **findGroupsByMember**
> string[] findGroupsByMember($member)

Find group IDs by member

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:warden:groups:<member>\"], \"actions\": [\"get\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\WardenApi(new \Http\Adapter\Guzzle6\Client());
$member = 789; // int | The id of the member to look up.

try {
    $result = $api_instance->findGroupsByMember($member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WardenApi->findGroupsByMember: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member** | **int**| The id of the member to look up. | [optional]

### Return type

**string[]**

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getGroup**
> \Ory\Hydra\Model\Group getGroup($id)

Get a group by id

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:warden:groups:<id>\"], \"actions\": [\"create\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\WardenApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the group to look up.

try {
    $result = $api_instance->getGroup($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WardenApi->getGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the group to look up. |

### Return type

[**\Ory\Hydra\Model\Group**](../Model/Group.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **removeMembersFromGroup**
> removeMembersFromGroup($id, $body)

Remove members from a group

The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:warden:groups:<id>\"], \"actions\": [\"members.remove\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\WardenApi(new \Http\Adapter\Guzzle6\Client());
$id = 789; // int | The id of the group to modify.
$body = new \Ory\Hydra\Model\MembersRequest(); // \Ory\Hydra\Model\MembersRequest | 

try {
    $api_instance->removeMembersFromGroup($id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WardenApi->removeMembersFromGroup: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The id of the group to modify. |
 **body** | [**\Ory\Hydra\Model\MembersRequest**](../Model/MembersRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wardenAllowed**
> \Ory\Hydra\Model\InlineResponse2002 wardenAllowed($body)

Check if a subject is allowed to do something

Checks if an arbitrary subject is allowed to perform an action on a resource. This endpoint requires a subject, a resource name, an action name and a context.If the subject is not allowed to perform the action on the resource, this endpoint returns a 200 response with `{ \"allowed\": false} }`.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:warden:allowed\"], \"actions\": [\"decide\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\WardenApi(new \Http\Adapter\Guzzle6\Client());
$body = new \Ory\Hydra\Model\AllowedRequest(); // \Ory\Hydra\Model\AllowedRequest | 

try {
    $result = $api_instance->wardenAllowed($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WardenApi->wardenAllowed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ory\Hydra\Model\AllowedRequest**](../Model/AllowedRequest.md)|  | [optional]

### Return type

[**\Ory\Hydra\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **wardenTokenAllowed**
> \Ory\Hydra\Model\InlineResponse2003 wardenTokenAllowed($body)

Check if the subject of a token is allowed to do something

Checks if a token is valid and if the token owner is allowed to perform an action on a resource. This endpoint requires a token, a scope, a resource name, an action name and a context.  If a token is expired/invalid, has not been granted the requested scope or the subject is not allowed to perform the action on the resource, this endpoint returns a 200 response with `{ \"allowed\": false} }`.  Extra data set through the `at_ext` claim in the consent response will be included in the response. The `id_ext` claim will never be returned by this endpoint.  The subject making the request needs to be assigned to a policy containing:  ``` { \"resources\": [\"rn:hydra:warden:token:allowed\"], \"actions\": [\"decide\"], \"effect\": \"allow\" } ```

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: oauth2
Ory\Hydra\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$api_instance = new Ory\Hydra\Api\WardenApi(new \Http\Adapter\Guzzle6\Client());
$body = new \Ory\Hydra\Model\WardenTokenAllowedBody(); // \Ory\Hydra\Model\WardenTokenAllowedBody | 

try {
    $result = $api_instance->wardenTokenAllowed($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WardenApi->wardenTokenAllowed: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Ory\Hydra\Model\WardenTokenAllowedBody**](../Model/WardenTokenAllowedBody.md)|  | [optional]

### Return type

[**\Ory\Hydra\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[oauth2](../../README.md#oauth2)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

