<?php
/**
 * UserPublic
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
use \Flat\APIClient\ObjectSerializer;

/**
 * UserPublic Class Doc Comment
 *
 * @category Class
 * @description Public User details
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class UserPublic extends UserPublicSummary 
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'UserPublic';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bio' => 'string',
        'registrationDate' => '\DateTime',
        'likedScoresCount' => 'int',
        'followersCount' => 'int',
        'followingCount' => 'int',
        'ownedPublicScoresCount' => 'int',
        'profileTheme' => 'string',
        'instruments' => '\Flat\APIClient\Model\UserInstruments'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bio' => null,
        'registrationDate' => 'date-time',
        'likedScoresCount' => null,
        'followersCount' => null,
        'followingCount' => null,
        'ownedPublicScoresCount' => null,
        'profileTheme' => null,
        'instruments' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'bio' => 'bio',
        'registrationDate' => 'registrationDate',
        'likedScoresCount' => 'likedScoresCount',
        'followersCount' => 'followersCount',
        'followingCount' => 'followingCount',
        'ownedPublicScoresCount' => 'ownedPublicScoresCount',
        'profileTheme' => 'profileTheme',
        'instruments' => 'instruments'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bio' => 'setBio',
        'registrationDate' => 'setRegistrationDate',
        'likedScoresCount' => 'setLikedScoresCount',
        'followersCount' => 'setFollowersCount',
        'followingCount' => 'setFollowingCount',
        'ownedPublicScoresCount' => 'setOwnedPublicScoresCount',
        'profileTheme' => 'setProfileTheme',
        'instruments' => 'setInstruments'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bio' => 'getBio',
        'registrationDate' => 'getRegistrationDate',
        'likedScoresCount' => 'getLikedScoresCount',
        'followersCount' => 'getFollowersCount',
        'followingCount' => 'getFollowingCount',
        'ownedPublicScoresCount' => 'getOwnedPublicScoresCount',
        'profileTheme' => 'getProfileTheme',
        'instruments' => 'getInstruments'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['bio'] = isset($data['bio']) ? $data['bio'] : null;
        $this->container['registrationDate'] = isset($data['registrationDate']) ? $data['registrationDate'] : null;
        $this->container['likedScoresCount'] = isset($data['likedScoresCount']) ? $data['likedScoresCount'] : null;
        $this->container['followersCount'] = isset($data['followersCount']) ? $data['followersCount'] : null;
        $this->container['followingCount'] = isset($data['followingCount']) ? $data['followingCount'] : null;
        $this->container['ownedPublicScoresCount'] = isset($data['ownedPublicScoresCount']) ? $data['ownedPublicScoresCount'] : null;
        $this->container['profileTheme'] = isset($data['profileTheme']) ? $data['profileTheme'] : null;
        $this->container['instruments'] = isset($data['instruments']) ? $data['instruments'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

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
     * Gets bio
     *
     * @return string
     */
    public function getBio()
    {
        return $this->container['bio'];
    }

    /**
     * Sets bio
     *
     * @param string $bio User's biography
     *
     * @return $this
     */
    public function setBio($bio)
    {
        $this->container['bio'] = $bio;

        return $this;
    }

    /**
     * Gets registrationDate
     *
     * @return \DateTime
     */
    public function getRegistrationDate()
    {
        return $this->container['registrationDate'];
    }

    /**
     * Sets registrationDate
     *
     * @param \DateTime $registrationDate Date the user signed up
     *
     * @return $this
     */
    public function setRegistrationDate($registrationDate)
    {
        $this->container['registrationDate'] = $registrationDate;

        return $this;
    }

    /**
     * Gets likedScoresCount
     *
     * @return int
     */
    public function getLikedScoresCount()
    {
        return $this->container['likedScoresCount'];
    }

    /**
     * Sets likedScoresCount
     *
     * @param int $likedScoresCount Number of the scores liked by the user
     *
     * @return $this
     */
    public function setLikedScoresCount($likedScoresCount)
    {
        $this->container['likedScoresCount'] = $likedScoresCount;

        return $this;
    }

    /**
     * Gets followersCount
     *
     * @return int
     */
    public function getFollowersCount()
    {
        return $this->container['followersCount'];
    }

    /**
     * Sets followersCount
     *
     * @param int $followersCount Number of followers the user have
     *
     * @return $this
     */
    public function setFollowersCount($followersCount)
    {
        $this->container['followersCount'] = $followersCount;

        return $this;
    }

    /**
     * Gets followingCount
     *
     * @return int
     */
    public function getFollowingCount()
    {
        return $this->container['followingCount'];
    }

    /**
     * Sets followingCount
     *
     * @param int $followingCount Number of people the user follow
     *
     * @return $this
     */
    public function setFollowingCount($followingCount)
    {
        $this->container['followingCount'] = $followingCount;

        return $this;
    }

    /**
     * Gets ownedPublicScoresCount
     *
     * @return int
     */
    public function getOwnedPublicScoresCount()
    {
        return $this->container['ownedPublicScoresCount'];
    }

    /**
     * Sets ownedPublicScoresCount
     *
     * @param int $ownedPublicScoresCount Number of public scores the user have
     *
     * @return $this
     */
    public function setOwnedPublicScoresCount($ownedPublicScoresCount)
    {
        $this->container['ownedPublicScoresCount'] = $ownedPublicScoresCount;

        return $this;
    }

    /**
     * Gets profileTheme
     *
     * @return string
     */
    public function getProfileTheme()
    {
        return $this->container['profileTheme'];
    }

    /**
     * Sets profileTheme
     *
     * @param string $profileTheme Theme (background) for the profile
     *
     * @return $this
     */
    public function setProfileTheme($profileTheme)
    {
        $this->container['profileTheme'] = $profileTheme;

        return $this;
    }

    /**
     * Gets instruments
     *
     * @return \Flat\APIClient\Model\UserInstruments
     */
    public function getInstruments()
    {
        return $this->container['instruments'];
    }

    /**
     * Sets instruments
     *
     * @param \Flat\APIClient\Model\UserInstruments $instruments instruments
     *
     * @return $this
     */
    public function setInstruments($instruments)
    {
        $this->container['instruments'] = $instruments;

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


