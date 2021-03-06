<?php
/**
 * ResourceRights
 *
 * PHP version 5
 *
 * @category Class
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Flat API
 *
 * The Flat API allows you to easily extend the abilities of the [Flat Platform](https://flat.io), with a wide range of use cases including the following:  * Creating and importing new music scores using MusicXML or MIDI files * Browsing, updating, copying, exporting the user's scores (for example in MP3, WAV or MIDI) * Managing educational resources with Flat for Education: creating & updating the organization accounts, the classes, rosters and assignments.  The Flat API is built on HTTP. Our API is RESTful It has predictable resource URLs. It returns HTTP response codes to indicate errors. It also accepts and returns JSON in the HTTP body. The [schema](/swagger.yaml) of this API follows the [OpenAPI Initiative (OAI) specification](https://www.openapis.org/), you can use and work with [compatible Swagger tools](http://swagger.io/open-source-integrations/). This API features Cross-Origin Resource Sharing (CORS) implemented in compliance with [W3C spec](https://www.w3.org/TR/cors/).  You can use your favorite HTTP/REST library for your programming language to use Flat's API. This specification and reference is [available on Github](https://github.com/FlatIO/api-reference).  Getting Started and learn more:  * [API Overview and interoduction](https://flat.io/developers/docs/api/) * [Authentication (Personal Access Tokens or OAuth2)](https://flat.io/developers/docs/api/authentication.html) * [SDKs](https://flat.io/developers/docs/api/sdks.html) * [Rate Limits](https://flat.io/developers/docs/api/rate-limits.html) * [Changelog](https://flat.io/developers/docs/api/changelog.html)
 *
 * OpenAPI spec version: 2.6.0
 * Contact: developers@flat.io
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Flat\APIClient\Model;

use \ArrayAccess;
use \Flat\APIClient\ObjectSerializer;

/**
 * ResourceRights Class Doc Comment
 *
 * @category Class
 * @description The rights of the current user on a score or collection
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ResourceRights implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ResourceRights';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'aclRead' => 'bool',
        'aclWrite' => 'bool',
        'aclAdmin' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'aclRead' => null,
        'aclWrite' => null,
        'aclAdmin' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'aclRead' => 'aclRead',
        'aclWrite' => 'aclWrite',
        'aclAdmin' => 'aclAdmin'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'aclRead' => 'setAclRead',
        'aclWrite' => 'setAclWrite',
        'aclAdmin' => 'setAclAdmin'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'aclRead' => 'getAclRead',
        'aclWrite' => 'getAclWrite',
        'aclAdmin' => 'getAclAdmin'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['aclRead'] = isset($data['aclRead']) ? $data['aclRead'] : false;
        $this->container['aclWrite'] = isset($data['aclWrite']) ? $data['aclWrite'] : false;
        $this->container['aclAdmin'] = isset($data['aclAdmin']) ? $data['aclAdmin'] : false;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets aclRead
     *
     * @return bool
     */
    public function getAclRead()
    {
        return $this->container['aclRead'];
    }

    /**
     * Sets aclRead
     *
     * @param bool $aclRead `True` if the current user can read the current document
     *
     * @return $this
     */
    public function setAclRead($aclRead)
    {
        $this->container['aclRead'] = $aclRead;

        return $this;
    }

    /**
     * Gets aclWrite
     *
     * @return bool
     */
    public function getAclWrite()
    {
        return $this->container['aclWrite'];
    }

    /**
     * Sets aclWrite
     *
     * @param bool $aclWrite `True` if the current user can modify the current document.  If this is a right of a Collection, the capabilities of the associated user can be lower than this permission, check out the `capabilities` property as the end-user to have the complete possibilities with the collection.
     *
     * @return $this
     */
    public function setAclWrite($aclWrite)
    {
        $this->container['aclWrite'] = $aclWrite;

        return $this;
    }

    /**
     * Gets aclAdmin
     *
     * @return bool
     */
    public function getAclAdmin()
    {
        return $this->container['aclAdmin'];
    }

    /**
     * Sets aclAdmin
     *
     * @param bool $aclAdmin `True` if the current user can manage the current document (i.e. share, delete)  If this is a right of a Collection, the capabilities of the associated user can be lower than this permission, check out the `capabilities` property as the end-user to have the complete possibilities with the collection.
     *
     * @return $this
     */
    public function setAclAdmin($aclAdmin)
    {
        $this->container['aclAdmin'] = $aclAdmin;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


