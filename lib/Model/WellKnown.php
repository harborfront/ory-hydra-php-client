<?php
/**
 * WellKnown
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ory\Hydra
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Hydra OAuth2 & OpenID Connect Server
 *
 * Please refer to the user guide for in-depth documentation: https://ory.gitbooks.io/hydra/content/  Hydra offers OAuth 2.0 and OpenID Connect Core 1.0 capabilities as a service. Hydra is different, because it works with any existing authentication infrastructure, not just LDAP or SAML. By implementing a consent app (works with any programming language) you build a bridge between Hydra and your authentication infrastructure. Hydra is able to securely manage JSON Web Keys, and has a sophisticated policy-based access control you can use if you want to. Hydra is suitable for green- (new) and brownfield (existing) projects. If you are not familiar with OAuth 2.0 and are working on a greenfield project, we recommend evaluating if OAuth 2.0 really serves your purpose. Knowledge of OAuth 2.0 is imperative in understanding what Hydra does and how it works.  The official repository is located at https://github.com/ory/hydra
 *
 * OpenAPI spec version: Latest
 * Contact: hi@ory.am
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Ory\Hydra\Model;

use \ArrayAccess;

/**
 * WellKnown Class Doc Comment
 *
 * @category    Class
 * @package     Ory\Hydra
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class WellKnown implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'WellKnown';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'authorization_endpoint' => 'string',
        'id_token_signing_alg_values_supported' => 'string[]',
        'issuer' => 'string',
        'jwks_uri' => 'string',
        'response_types_supported' => 'string[]',
        'subject_types_supported' => 'string[]',
        'token_endpoint' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'authorization_endpoint' => null,
        'id_token_signing_alg_values_supported' => null,
        'issuer' => null,
        'jwks_uri' => null,
        'response_types_supported' => null,
        'subject_types_supported' => null,
        'token_endpoint' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'authorization_endpoint' => 'authorization_endpoint',
        'id_token_signing_alg_values_supported' => 'id_token_signing_alg_values_supported',
        'issuer' => 'issuer',
        'jwks_uri' => 'jwks_uri',
        'response_types_supported' => 'response_types_supported',
        'subject_types_supported' => 'subject_types_supported',
        'token_endpoint' => 'token_endpoint'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'authorization_endpoint' => 'setAuthorizationEndpoint',
        'id_token_signing_alg_values_supported' => 'setIdTokenSigningAlgValuesSupported',
        'issuer' => 'setIssuer',
        'jwks_uri' => 'setJwksUri',
        'response_types_supported' => 'setResponseTypesSupported',
        'subject_types_supported' => 'setSubjectTypesSupported',
        'token_endpoint' => 'setTokenEndpoint'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'authorization_endpoint' => 'getAuthorizationEndpoint',
        'id_token_signing_alg_values_supported' => 'getIdTokenSigningAlgValuesSupported',
        'issuer' => 'getIssuer',
        'jwks_uri' => 'getJwksUri',
        'response_types_supported' => 'getResponseTypesSupported',
        'subject_types_supported' => 'getSubjectTypesSupported',
        'token_endpoint' => 'getTokenEndpoint'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['authorization_endpoint'] = isset($data['authorization_endpoint']) ? $data['authorization_endpoint'] : null;
        $this->container['id_token_signing_alg_values_supported'] = isset($data['id_token_signing_alg_values_supported']) ? $data['id_token_signing_alg_values_supported'] : null;
        $this->container['issuer'] = isset($data['issuer']) ? $data['issuer'] : null;
        $this->container['jwks_uri'] = isset($data['jwks_uri']) ? $data['jwks_uri'] : null;
        $this->container['response_types_supported'] = isset($data['response_types_supported']) ? $data['response_types_supported'] : null;
        $this->container['subject_types_supported'] = isset($data['subject_types_supported']) ? $data['subject_types_supported'] : null;
        $this->container['token_endpoint'] = isset($data['token_endpoint']) ? $data['token_endpoint'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['authorization_endpoint'] === null) {
            $invalid_properties[] = "'authorization_endpoint' can't be null";
        }
        if ($this->container['id_token_signing_alg_values_supported'] === null) {
            $invalid_properties[] = "'id_token_signing_alg_values_supported' can't be null";
        }
        if ($this->container['issuer'] === null) {
            $invalid_properties[] = "'issuer' can't be null";
        }
        if ($this->container['jwks_uri'] === null) {
            $invalid_properties[] = "'jwks_uri' can't be null";
        }
        if ($this->container['response_types_supported'] === null) {
            $invalid_properties[] = "'response_types_supported' can't be null";
        }
        if ($this->container['subject_types_supported'] === null) {
            $invalid_properties[] = "'subject_types_supported' can't be null";
        }
        if ($this->container['token_endpoint'] === null) {
            $invalid_properties[] = "'token_endpoint' can't be null";
        }
        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['authorization_endpoint'] === null) {
            return false;
        }
        if ($this->container['id_token_signing_alg_values_supported'] === null) {
            return false;
        }
        if ($this->container['issuer'] === null) {
            return false;
        }
        if ($this->container['jwks_uri'] === null) {
            return false;
        }
        if ($this->container['response_types_supported'] === null) {
            return false;
        }
        if ($this->container['subject_types_supported'] === null) {
            return false;
        }
        if ($this->container['token_endpoint'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets authorization_endpoint
     * @return string
     */
    public function getAuthorizationEndpoint()
    {
        return $this->container['authorization_endpoint'];
    }

    /**
     * Sets authorization_endpoint
     * @param string $authorization_endpoint URL of the OP's OAuth 2.0 Authorization Endpoint
     * @return $this
     */
    public function setAuthorizationEndpoint($authorization_endpoint)
    {
        $this->container['authorization_endpoint'] = $authorization_endpoint;

        return $this;
    }

    /**
     * Gets id_token_signing_alg_values_supported
     * @return string[]
     */
    public function getIdTokenSigningAlgValuesSupported()
    {
        return $this->container['id_token_signing_alg_values_supported'];
    }

    /**
     * Sets id_token_signing_alg_values_supported
     * @param string[] $id_token_signing_alg_values_supported JSON array containing a list of the JWS signing algorithms (alg values) supported by the OP for the ID Token to encode the Claims in a JWT [JWT]. The algorithm RS256 MUST be included. The value none MAY be supported, but MUST NOT be used unless the Response Type used returns no ID Token from the Authorization Endpoint (such as when using the Authorization Code Flow).
     * @return $this
     */
    public function setIdTokenSigningAlgValuesSupported($id_token_signing_alg_values_supported)
    {
        $this->container['id_token_signing_alg_values_supported'] = $id_token_signing_alg_values_supported;

        return $this;
    }

    /**
     * Gets issuer
     * @return string
     */
    public function getIssuer()
    {
        return $this->container['issuer'];
    }

    /**
     * Sets issuer
     * @param string $issuer URL using the https scheme with no query or fragment component that the OP asserts as its Issuer Identifier. If Issuer discovery is supported , this value MUST be identical to the issuer value returned by WebFinger. This also MUST be identical to the iss Claim value in ID Tokens issued from this Issuer.
     * @return $this
     */
    public function setIssuer($issuer)
    {
        $this->container['issuer'] = $issuer;

        return $this;
    }

    /**
     * Gets jwks_uri
     * @return string
     */
    public function getJwksUri()
    {
        return $this->container['jwks_uri'];
    }

    /**
     * Sets jwks_uri
     * @param string $jwks_uri URL of the OP's JSON Web Key Set [JWK] document. This contains the signing key(s) the RP uses to validate signatures from the OP. The JWK Set MAY also contain the Server's encryption key(s), which are used by RPs to encrypt requests to the Server. When both signing and encryption keys are made available, a use (Key Use) parameter value is REQUIRED for all keys in the referenced JWK Set to indicate each key's intended usage. Although some algorithms allow the same key to be used for both signatures and encryption, doing so is NOT RECOMMENDED, as it is less secure. The JWK x5c parameter MAY be used to provide X.509 representations of keys provided. When used, the bare key values MUST still be present and MUST match those in the certificate.
     * @return $this
     */
    public function setJwksUri($jwks_uri)
    {
        $this->container['jwks_uri'] = $jwks_uri;

        return $this;
    }

    /**
     * Gets response_types_supported
     * @return string[]
     */
    public function getResponseTypesSupported()
    {
        return $this->container['response_types_supported'];
    }

    /**
     * Sets response_types_supported
     * @param string[] $response_types_supported JSON array containing a list of the OAuth 2.0 response_type values that this OP supports. Dynamic OpenID Providers MUST support the code, id_token, and the token id_token Response Type values.
     * @return $this
     */
    public function setResponseTypesSupported($response_types_supported)
    {
        $this->container['response_types_supported'] = $response_types_supported;

        return $this;
    }

    /**
     * Gets subject_types_supported
     * @return string[]
     */
    public function getSubjectTypesSupported()
    {
        return $this->container['subject_types_supported'];
    }

    /**
     * Sets subject_types_supported
     * @param string[] $subject_types_supported JSON array containing a list of the Subject Identifier types that this OP supports. Valid types include pairwise and public.
     * @return $this
     */
    public function setSubjectTypesSupported($subject_types_supported)
    {
        $this->container['subject_types_supported'] = $subject_types_supported;

        return $this;
    }

    /**
     * Gets token_endpoint
     * @return string
     */
    public function getTokenEndpoint()
    {
        return $this->container['token_endpoint'];
    }

    /**
     * Sets token_endpoint
     * @param string $token_endpoint URL of the OP's OAuth 2.0 Token Endpoint
     * @return $this
     */
    public function setTokenEndpoint($token_endpoint)
    {
        $this->container['token_endpoint'] = $token_endpoint;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Ory\Hydra\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Ory\Hydra\ObjectSerializer::sanitizeForSerialization($this));
    }
}


