# SwaggerWardenTokenAllowedResponseBody

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**allowed** | **bool** | Allowed is true if the request is allowed or false otherwise | [optional] 
**aud** | **string** | Audience is who the token was issued for. This is an OAuth2 app usually. | [optional] 
**ext** | **map[string,object]** | Extra represents arbitrary session data. | [optional] 
**iss** | **string** | Issuer is the id of the issuer, typically an hydra instance. | [optional] 
**scopes** | **string[]** | GrantedScopes is a list of scopes that the subject authorized when asked for consent. | [optional] 
**sub** | **string** | Subject is the identity that authorized issuing the token, for example a user or an OAuth2 app. This is usually a uuid but you can choose a urn or some other id too. | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


