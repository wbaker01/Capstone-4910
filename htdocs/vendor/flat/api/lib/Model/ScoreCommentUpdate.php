<?php
/**
 * ScoreCommentUpdate
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
 * ScoreCommentUpdate Class Doc Comment
 *
 * @category Class
 * @description Update of a comment
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ScoreCommentUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ScoreCommentUpdate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'revision' => 'string',
        'comment' => 'string',
        'rawComment' => 'string',
        'context' => '\Flat\APIClient\Model\ScoreCommentContext'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'revision' => null,
        'comment' => null,
        'rawComment' => null,
        'context' => null
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
        'revision' => 'revision',
        'comment' => 'comment',
        'rawComment' => 'rawComment',
        'context' => 'context'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'revision' => 'setRevision',
        'comment' => 'setComment',
        'rawComment' => 'setRawComment',
        'context' => 'setContext'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'revision' => 'getRevision',
        'comment' => 'getComment',
        'rawComment' => 'getRawComment',
        'context' => 'getContext'
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
        $this->container['revision'] = isset($data['revision']) ? $data['revision'] : null;
        $this->container['comment'] = isset($data['comment']) ? $data['comment'] : null;
        $this->container['rawComment'] = isset($data['rawComment']) ? $data['rawComment'] : null;
        $this->container['context'] = isset($data['context']) ? $data['context'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) > 10000)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['comment']) && (mb_strlen($this->container['comment']) < 1)) {
            $invalidProperties[] = "invalid value for 'comment', the character length must be bigger than or equal to 1.";
        }

        if (!is_null($this->container['rawComment']) && (mb_strlen($this->container['rawComment']) > 10000)) {
            $invalidProperties[] = "invalid value for 'rawComment', the character length must be smaller than or equal to 10000.";
        }

        if (!is_null($this->container['rawComment']) && (mb_strlen($this->container['rawComment']) < 1)) {
            $invalidProperties[] = "invalid value for 'rawComment', the character length must be bigger than or equal to 1.";
        }

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
     * Gets revision
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->container['revision'];
    }

    /**
     * Sets revision
     *
     * @param string $revision The unique indentifier of the revision of the score where the comment was added. If this property is unspecified or contains \"last\", the API will automatically take the last revision created.
     *
     * @return $this
     */
    public function setRevision($revision)
    {
        $this->container['revision'] = $revision;

        return $this;
    }

    /**
     * Gets comment
     *
     * @return string
     */
    public function getComment()
    {
        return $this->container['comment'];
    }

    /**
     * Sets comment
     *
     * @param string $comment The comment text that can includes mentions using the following format: `@[id:username]`.
     *
     * @return $this
     */
    public function setComment($comment)
    {
        if (!is_null($comment) && (mb_strlen($comment) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling ScoreCommentUpdate., must be smaller than or equal to 10000.');
        }
        if (!is_null($comment) && (mb_strlen($comment) < 1)) {
            throw new \InvalidArgumentException('invalid length for $comment when calling ScoreCommentUpdate., must be bigger than or equal to 1.');
        }

        $this->container['comment'] = $comment;

        return $this;
    }

    /**
     * Gets rawComment
     *
     * @return string
     */
    public function getRawComment()
    {
        return $this->container['rawComment'];
    }

    /**
     * Sets rawComment
     *
     * @param string $rawComment A raw version of the comment, that can be displayed without the mentions. If you use mentions, this property must be set.
     *
     * @return $this
     */
    public function setRawComment($rawComment)
    {
        if (!is_null($rawComment) && (mb_strlen($rawComment) > 10000)) {
            throw new \InvalidArgumentException('invalid length for $rawComment when calling ScoreCommentUpdate., must be smaller than or equal to 10000.');
        }
        if (!is_null($rawComment) && (mb_strlen($rawComment) < 1)) {
            throw new \InvalidArgumentException('invalid length for $rawComment when calling ScoreCommentUpdate., must be bigger than or equal to 1.');
        }

        $this->container['rawComment'] = $rawComment;

        return $this;
    }

    /**
     * Gets context
     *
     * @return \Flat\APIClient\Model\ScoreCommentContext
     */
    public function getContext()
    {
        return $this->container['context'];
    }

    /**
     * Sets context
     *
     * @param \Flat\APIClient\Model\ScoreCommentContext $context context
     *
     * @return $this
     */
    public function setContext($context)
    {
        $this->container['context'] = $context;

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

