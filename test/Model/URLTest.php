<?php
/**
 * URLTest
 *
 * PHP version 5
 *
 * @category Class
 * @package  Ory\Hydra
 * @author   Swagger Codegen team
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
 * Please update the test case below to test the model.
 */

namespace Ory\Hydra;

/**
 * URLTest Class Doc Comment
 *
 * @category    Class */
// * @description scheme://[userinfo@]host/path[?query][#fragment]  URLs that do not start with a slash after the scheme are interpreted as:  scheme:opaque[?query][#fragment]  Note that the Path field is stored in decoded form: /%47%6f%2f becomes /Go/. A consequence is that it is impossible to tell which slashes in the Path were slashes in the raw URL and which were %2f. This distinction is rarely important, but when it is, code must not use Path directly.  Go 1.5 introduced the RawPath field to hold the encoded form of Path. The Parse function sets both Path and RawPath in the URL it returns, and URL&#39;s String method uses RawPath if it is a valid encoding of Path, by calling the EscapedPath method.  In earlier versions of Go, the more indirect workarounds were that an HTTP server could consult req.RequestURI and an HTTP client could construct a URL struct directly and set the Opaque field instead of Path. These still work as well.
/**
 * @package     Ory\Hydra
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class URLTest extends \PHPUnit_Framework_TestCase
{

    /**
     * Setup before running any test case
     */
    public static function setUpBeforeClass()
    {
    }

    /**
     * Setup before running each test case
     */
    public function setUp()
    {
    }

    /**
     * Clean up after running each test case
     */
    public function tearDown()
    {
    }

    /**
     * Clean up after running all test cases
     */
    public static function tearDownAfterClass()
    {
    }

    /**
     * Test "URL"
     */
    public function testURL()
    {
    }

    /**
     * Test attribute "force_query"
     */
    public function testPropertyForceQuery()
    {
    }

    /**
     * Test attribute "fragment"
     */
    public function testPropertyFragment()
    {
    }

    /**
     * Test attribute "host"
     */
    public function testPropertyHost()
    {
    }

    /**
     * Test attribute "opaque"
     */
    public function testPropertyOpaque()
    {
    }

    /**
     * Test attribute "path"
     */
    public function testPropertyPath()
    {
    }

    /**
     * Test attribute "raw_path"
     */
    public function testPropertyRawPath()
    {
    }

    /**
     * Test attribute "raw_query"
     */
    public function testPropertyRawQuery()
    {
    }

    /**
     * Test attribute "scheme"
     */
    public function testPropertyScheme()
    {
    }

    /**
     * Test attribute "user"
     */
    public function testPropertyUser()
    {
    }
}
