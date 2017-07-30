<?php
/**
 * OauthClient
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
 * OauthClient Class Doc Comment
 *
 * @category    Class
 * @package     Ory\Hydra
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class OauthClient implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'oauthClient';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'client_name' => 'string',
        'client_secret' => 'string',
        'client_uri' => 'string',
        'contacts' => 'string[]',
        'grant_types' => 'string[]',
        'id' => 'string',
        'logo_uri' => 'string',
        'owner' => 'string',
        'policy_uri' => 'string',
        'public' => 'bool',
        'redirect_uris' => 'string[]',
        'response_types' => 'string[]',
        'scope' => 'string',
        'tos_uri' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'client_name' => null,
        'client_secret' => null,
        'client_uri' => null,
        'contacts' => null,
        'grant_types' => null,
        'id' => null,
        'logo_uri' => null,
        'owner' => null,
        'policy_uri' => null,
        'public' => null,
        'redirect_uris' => null,
        'response_types' => null,
        'scope' => null,
        'tos_uri' => null
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
        'client_name' => 'client_name',
        'client_secret' => 'client_secret',
        'client_uri' => 'client_uri',
        'contacts' => 'contacts',
        'grant_types' => 'grant_types',
        'id' => 'id',
        'logo_uri' => 'logo_uri',
        'owner' => 'owner',
        'policy_uri' => 'policy_uri',
        'public' => 'public',
        'redirect_uris' => 'redirect_uris',
        'response_types' => 'response_types',
        'scope' => 'scope',
        'tos_uri' => 'tos_uri'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'client_name' => 'setClientName',
        'client_secret' => 'setClientSecret',
        'client_uri' => 'setClientUri',
        'contacts' => 'setContacts',
        'grant_types' => 'setGrantTypes',
        'id' => 'setId',
        'logo_uri' => 'setLogoUri',
        'owner' => 'setOwner',
        'policy_uri' => 'setPolicyUri',
        'public' => 'setPublic',
        'redirect_uris' => 'setRedirectUris',
        'response_types' => 'setResponseTypes',
        'scope' => 'setScope',
        'tos_uri' => 'setTosUri'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'client_name' => 'getClientName',
        'client_secret' => 'getClientSecret',
        'client_uri' => 'getClientUri',
        'contacts' => 'getContacts',
        'grant_types' => 'getGrantTypes',
        'id' => 'getId',
        'logo_uri' => 'getLogoUri',
        'owner' => 'getOwner',
        'policy_uri' => 'getPolicyUri',
        'public' => 'getPublic',
        'redirect_uris' => 'getRedirectUris',
        'response_types' => 'getResponseTypes',
        'scope' => 'getScope',
        'tos_uri' => 'getTosUri'
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
        $this->container['client_name'] = isset($data['client_name']) ? $data['client_name'] : null;
        $this->container['client_secret'] = isset($data['client_secret']) ? $data['client_secret'] : null;
        $this->container['client_uri'] = isset($data['client_uri']) ? $data['client_uri'] : null;
        $this->container['contacts'] = isset($data['contacts']) ? $data['contacts'] : null;
        $this->container['grant_types'] = isset($data['grant_types']) ? $data['grant_types'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['logo_uri'] = isset($data['logo_uri']) ? $data['logo_uri'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['policy_uri'] = isset($data['policy_uri']) ? $data['policy_uri'] : null;
        $this->container['public'] = isset($data['public']) ? $data['public'] : null;
        $this->container['redirect_uris'] = isset($data['redirect_uris']) ? $data['redirect_uris'] : null;
        $this->container['response_types'] = isset($data['response_types']) ? $data['response_types'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
        $this->container['tos_uri'] = isset($data['tos_uri']) ? $data['tos_uri'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['scope']) && !preg_match("/([a-zA-Z0-9\\.]+\\s)+/", $this->container['scope'])) {
            $invalid_properties[] = "invalid value for 'scope', must be conform to the pattern /([a-zA-Z0-9\\.]+\\s)+/.";
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

        if (!preg_match("/([a-zA-Z0-9\\.]+\\s)+/", $this->container['scope'])) {
            return false;
        }
        return true;
    }


    /**
     * Gets client_name
     * @return string
     */
    public function getClientName()
    {
        return $this->container['client_name'];
    }

    /**
     * Sets client_name
     * @param string $client_name Name is the human-readable string name of the client to be presented to the end-user during authorization.
     * @return $this
     */
    public function setClientName($client_name)
    {
        $this->container['client_name'] = $client_name;

        return $this;
    }

    /**
     * Gets client_secret
     * @return string
     */
    public function getClientSecret()
    {
        return $this->container['client_secret'];
    }

    /**
     * Sets client_secret
     * @param string $client_secret Secret is the client's secret. The secret will be included in the create request as cleartext, and then never again. The secret is stored using BCrypt so it is impossible to recover it. Tell your users that they need to write the secret down as it will not be made available again.
     * @return $this
     */
    public function setClientSecret($client_secret)
    {
        $this->container['client_secret'] = $client_secret;

        return $this;
    }

    /**
     * Gets client_uri
     * @return string
     */
    public function getClientUri()
    {
        return $this->container['client_uri'];
    }

    /**
     * Sets client_uri
     * @param string $client_uri ClientURI is an URL string of a web page providing information about the client. If present, the server SHOULD display this URL to the end-user in a clickable fashion.
     * @return $this
     */
    public function setClientUri($client_uri)
    {
        $this->container['client_uri'] = $client_uri;

        return $this;
    }

    /**
     * Gets contacts
     * @return string[]
     */
    public function getContacts()
    {
        return $this->container['contacts'];
    }

    /**
     * Sets contacts
     * @param string[] $contacts Contacts is a array of strings representing ways to contact people responsible for this client, typically email addresses.
     * @return $this
     */
    public function setContacts($contacts)
    {
        $this->container['contacts'] = $contacts;

        return $this;
    }

    /**
     * Gets grant_types
     * @return string[]
     */
    public function getGrantTypes()
    {
        return $this->container['grant_types'];
    }

    /**
     * Sets grant_types
     * @param string[] $grant_types GrantTypes is an array of grant types the client is allowed to use.
     * @return $this
     */
    public function setGrantTypes($grant_types)
    {
        $this->container['grant_types'] = $grant_types;

        return $this;
    }

    /**
     * Gets id
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     * @param string $id ID is the id for this client.
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets logo_uri
     * @return string
     */
    public function getLogoUri()
    {
        return $this->container['logo_uri'];
    }

    /**
     * Sets logo_uri
     * @param string $logo_uri LogoURI is an URL string that references a logo for the client.
     * @return $this
     */
    public function setLogoUri($logo_uri)
    {
        $this->container['logo_uri'] = $logo_uri;

        return $this;
    }

    /**
     * Gets owner
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     * @param string $owner Owner is a string identifying the owner of the OAuth 2.0 Client.
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets policy_uri
     * @return string
     */
    public function getPolicyUri()
    {
        return $this->container['policy_uri'];
    }

    /**
     * Sets policy_uri
     * @param string $policy_uri PolicyURI is a URL string that points to a human-readable privacy policy document that describes how the deployment organization collects, uses, retains, and discloses personal data.
     * @return $this
     */
    public function setPolicyUri($policy_uri)
    {
        $this->container['policy_uri'] = $policy_uri;

        return $this;
    }

    /**
     * Gets public
     * @return bool
     */
    public function getPublic()
    {
        return $this->container['public'];
    }

    /**
     * Sets public
     * @param bool $public Public is a boolean that identifies this client as public, meaning that it does not have a secret. It will disable the client_credentials grant type for this client if set.
     * @return $this
     */
    public function setPublic($public)
    {
        $this->container['public'] = $public;

        return $this;
    }

    /**
     * Gets redirect_uris
     * @return string[]
     */
    public function getRedirectUris()
    {
        return $this->container['redirect_uris'];
    }

    /**
     * Sets redirect_uris
     * @param string[] $redirect_uris RedirectURIs is an array of allowed redirect urls for the client, for example: http://mydomain/oauth/callback .
     * @return $this
     */
    public function setRedirectUris($redirect_uris)
    {
        $this->container['redirect_uris'] = $redirect_uris;

        return $this;
    }

    /**
     * Gets response_types
     * @return string[]
     */
    public function getResponseTypes()
    {
        return $this->container['response_types'];
    }

    /**
     * Sets response_types
     * @param string[] $response_types ResponseTypes is an array of the OAuth 2.0 response type strings that the client can use at the authorization endpoint.
     * @return $this
     */
    public function setResponseTypes($response_types)
    {
        $this->container['response_types'] = $response_types;

        return $this;
    }

    /**
     * Gets scope
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     * @param string $scope Scope is a string containing a space-separated list of scope values (as described in Section 3.3 of OAuth 2.0 [RFC6749]) that the client can use when requesting access tokens.
     * @return $this
     */
    public function setScope($scope)
    {

        if (!is_null($scope) && (!preg_match("/([a-zA-Z0-9\\.]+\\s)+/", $scope))) {
            throw new \InvalidArgumentException("invalid value for $scope when calling OauthClient., must conform to the pattern /([a-zA-Z0-9\\.]+\\s)+/.");
        }

        $this->container['scope'] = $scope;

        return $this;
    }

    /**
     * Gets tos_uri
     * @return string
     */
    public function getTosUri()
    {
        return $this->container['tos_uri'];
    }

    /**
     * Sets tos_uri
     * @param string $tos_uri TermsOfServiceURI is a URL string that points to a human-readable terms of service document for the client that describes a contractual relationship between the end-user and the client that the end-user accepts when authorizing the client.
     * @return $this
     */
    public function setTosUri($tos_uri)
    {
        $this->container['tos_uri'] = $tos_uri;

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


