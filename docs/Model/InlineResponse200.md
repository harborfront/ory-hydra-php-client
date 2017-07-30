# InlineResponse200

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**active** | **bool** | Boolean indicator of whether or not the presented token is currently active.  The specifics of a token&#39;s \&quot;active\&quot; state will vary depending on the implementation of the authorization server and the information it keeps about its tokens, but a \&quot;true\&quot; value return for the \&quot;active\&quot; property will generally indicate that a given token has been issued by this authorization server, has not been revoked by the resource owner, and is within its given time window of validity (e.g., after its issuance time and before its expiration time). | [optional] 
**client_id** | **string** | Client identifier for the OAuth 2.0 client that requested this token. | [optional] 
**exp** | **int** | Integer timestamp, measured in the number of seconds since January 1 1970 UTC, indicating when this token will expire | [optional] 
**iat** | **int** | Integer timestamp, measured in the number of seconds since January 1 1970 UTC, indicating when this token was originally issued | [optional] 
**scope** | **string** | A JSON string containing a space-separated list of scopes associated with this token | [optional] 
**sess** | [**\Ory\Hydra\Model\Session**](Session.md) |  | [optional] 
**sub** | **string** | Subject of the token, as defined in JWT [RFC7519]. Usually a machine-readable identifier of the resource owner who authorized this token. | [optional] 
**username** | **string** | Human-readable identifier for the resource owner who authorized this token. Currently not supported by Hydra. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


