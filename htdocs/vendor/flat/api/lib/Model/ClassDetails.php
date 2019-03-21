<?php
/**
 * ClassDetails
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
 * ClassDetails Class Doc Comment
 *
 * @category Class
 * @description A classroom
 * @package  Flat\APIClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ClassDetails implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ClassDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'state' => '\Flat\APIClient\Model\ClassState',
        'name' => 'string',
        'section' => 'string',
        'description' => 'string',
        'organization' => 'string',
        'owner' => 'string',
        'creationDate' => '\DateTime',
        'enrollmentCode' => 'string',
        'theme' => 'string',
        'assignmentsCount' => 'float',
        'studentsGroup' => '\Flat\APIClient\Model\GroupDetails',
        'teachersGroup' => '\Flat\APIClient\Model\GroupDetails',
        'googleClassroom' => '\Flat\APIClient\Model\ClassDetailsGoogleClassroom',
        'googleDrive' => '\Flat\APIClient\Model\ClassDetailsGoogleDrive',
        'lti' => '\Flat\APIClient\Model\ClassDetailsLti',
        'canvas' => '\Flat\APIClient\Model\ClassDetailsCanvas',
        'clever' => '\Flat\APIClient\Model\ClassDetailsClever'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'state' => null,
        'name' => null,
        'section' => null,
        'description' => null,
        'organization' => null,
        'owner' => null,
        'creationDate' => 'date-time',
        'enrollmentCode' => null,
        'theme' => null,
        'assignmentsCount' => null,
        'studentsGroup' => null,
        'teachersGroup' => null,
        'googleClassroom' => null,
        'googleDrive' => null,
        'lti' => null,
        'canvas' => null,
        'clever' => null
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
        'id' => 'id',
        'state' => 'state',
        'name' => 'name',
        'section' => 'section',
        'description' => 'description',
        'organization' => 'organization',
        'owner' => 'owner',
        'creationDate' => 'creationDate',
        'enrollmentCode' => 'enrollmentCode',
        'theme' => 'theme',
        'assignmentsCount' => 'assignmentsCount',
        'studentsGroup' => 'studentsGroup',
        'teachersGroup' => 'teachersGroup',
        'googleClassroom' => 'googleClassroom',
        'googleDrive' => 'googleDrive',
        'lti' => 'lti',
        'canvas' => 'canvas',
        'clever' => 'clever'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'state' => 'setState',
        'name' => 'setName',
        'section' => 'setSection',
        'description' => 'setDescription',
        'organization' => 'setOrganization',
        'owner' => 'setOwner',
        'creationDate' => 'setCreationDate',
        'enrollmentCode' => 'setEnrollmentCode',
        'theme' => 'setTheme',
        'assignmentsCount' => 'setAssignmentsCount',
        'studentsGroup' => 'setStudentsGroup',
        'teachersGroup' => 'setTeachersGroup',
        'googleClassroom' => 'setGoogleClassroom',
        'googleDrive' => 'setGoogleDrive',
        'lti' => 'setLti',
        'canvas' => 'setCanvas',
        'clever' => 'setClever'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'state' => 'getState',
        'name' => 'getName',
        'section' => 'getSection',
        'description' => 'getDescription',
        'organization' => 'getOrganization',
        'owner' => 'getOwner',
        'creationDate' => 'getCreationDate',
        'enrollmentCode' => 'getEnrollmentCode',
        'theme' => 'getTheme',
        'assignmentsCount' => 'getAssignmentsCount',
        'studentsGroup' => 'getStudentsGroup',
        'teachersGroup' => 'getTeachersGroup',
        'googleClassroom' => 'getGoogleClassroom',
        'googleDrive' => 'getGoogleDrive',
        'lti' => 'getLti',
        'canvas' => 'getCanvas',
        'clever' => 'getClever'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['state'] = isset($data['state']) ? $data['state'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['section'] = isset($data['section']) ? $data['section'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['organization'] = isset($data['organization']) ? $data['organization'] : null;
        $this->container['owner'] = isset($data['owner']) ? $data['owner'] : null;
        $this->container['creationDate'] = isset($data['creationDate']) ? $data['creationDate'] : null;
        $this->container['enrollmentCode'] = isset($data['enrollmentCode']) ? $data['enrollmentCode'] : null;
        $this->container['theme'] = isset($data['theme']) ? $data['theme'] : null;
        $this->container['assignmentsCount'] = isset($data['assignmentsCount']) ? $data['assignmentsCount'] : null;
        $this->container['studentsGroup'] = isset($data['studentsGroup']) ? $data['studentsGroup'] : null;
        $this->container['teachersGroup'] = isset($data['teachersGroup']) ? $data['teachersGroup'] : null;
        $this->container['googleClassroom'] = isset($data['googleClassroom']) ? $data['googleClassroom'] : null;
        $this->container['googleDrive'] = isset($data['googleDrive']) ? $data['googleDrive'] : null;
        $this->container['lti'] = isset($data['lti']) ? $data['lti'] : null;
        $this->container['canvas'] = isset($data['canvas']) ? $data['canvas'] : null;
        $this->container['clever'] = isset($data['clever']) ? $data['clever'] : null;
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
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The unique identifier of the class
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets state
     *
     * @return \Flat\APIClient\Model\ClassState
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param \Flat\APIClient\Model\ClassState $state state
     *
     * @return $this
     */
    public function setState($state)
    {
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The name of the class
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets section
     *
     * @return string
     */
    public function getSection()
    {
        return $this->container['section'];
    }

    /**
     * Sets section
     *
     * @param string $section The section of the class
     *
     * @return $this
     */
    public function setSection($section)
    {
        $this->container['section'] = $section;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description An optionnal description for this class
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->container['organization'];
    }

    /**
     * Sets organization
     *
     * @param string $organization The unique identifier of the Organization owning this class
     *
     * @return $this
     */
    public function setOrganization($organization)
    {
        $this->container['organization'] = $organization;

        return $this;
    }

    /**
     * Gets owner
     *
     * @return string
     */
    public function getOwner()
    {
        return $this->container['owner'];
    }

    /**
     * Sets owner
     *
     * @param string $owner The unique identifier of the User owning this class
     *
     * @return $this
     */
    public function setOwner($owner)
    {
        $this->container['owner'] = $owner;

        return $this;
    }

    /**
     * Gets creationDate
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->container['creationDate'];
    }

    /**
     * Sets creationDate
     *
     * @param \DateTime $creationDate The date when the class was create
     *
     * @return $this
     */
    public function setCreationDate($creationDate)
    {
        $this->container['creationDate'] = $creationDate;

        return $this;
    }

    /**
     * Gets enrollmentCode
     *
     * @return string
     */
    public function getEnrollmentCode()
    {
        return $this->container['enrollmentCode'];
    }

    /**
     * Sets enrollmentCode
     *
     * @param string $enrollmentCode [Teachers only] The enrollment code that can be used by the students to join the class
     *
     * @return $this
     */
    public function setEnrollmentCode($enrollmentCode)
    {
        $this->container['enrollmentCode'] = $enrollmentCode;

        return $this;
    }

    /**
     * Gets theme
     *
     * @return string
     */
    public function getTheme()
    {
        return $this->container['theme'];
    }

    /**
     * Sets theme
     *
     * @param string $theme The theme identifier using in Flat User Interface
     *
     * @return $this
     */
    public function setTheme($theme)
    {
        $this->container['theme'] = $theme;

        return $this;
    }

    /**
     * Gets assignmentsCount
     *
     * @return float
     */
    public function getAssignmentsCount()
    {
        return $this->container['assignmentsCount'];
    }

    /**
     * Sets assignmentsCount
     *
     * @param float $assignmentsCount The number of assignments created in the class
     *
     * @return $this
     */
    public function setAssignmentsCount($assignmentsCount)
    {
        $this->container['assignmentsCount'] = $assignmentsCount;

        return $this;
    }

    /**
     * Gets studentsGroup
     *
     * @return \Flat\APIClient\Model\GroupDetails
     */
    public function getStudentsGroup()
    {
        return $this->container['studentsGroup'];
    }

    /**
     * Sets studentsGroup
     *
     * @param \Flat\APIClient\Model\GroupDetails $studentsGroup studentsGroup
     *
     * @return $this
     */
    public function setStudentsGroup($studentsGroup)
    {
        $this->container['studentsGroup'] = $studentsGroup;

        return $this;
    }

    /**
     * Gets teachersGroup
     *
     * @return \Flat\APIClient\Model\GroupDetails
     */
    public function getTeachersGroup()
    {
        return $this->container['teachersGroup'];
    }

    /**
     * Sets teachersGroup
     *
     * @param \Flat\APIClient\Model\GroupDetails $teachersGroup teachersGroup
     *
     * @return $this
     */
    public function setTeachersGroup($teachersGroup)
    {
        $this->container['teachersGroup'] = $teachersGroup;

        return $this;
    }

    /**
     * Gets googleClassroom
     *
     * @return \Flat\APIClient\Model\ClassDetailsGoogleClassroom
     */
    public function getGoogleClassroom()
    {
        return $this->container['googleClassroom'];
    }

    /**
     * Sets googleClassroom
     *
     * @param \Flat\APIClient\Model\ClassDetailsGoogleClassroom $googleClassroom googleClassroom
     *
     * @return $this
     */
    public function setGoogleClassroom($googleClassroom)
    {
        $this->container['googleClassroom'] = $googleClassroom;

        return $this;
    }

    /**
     * Gets googleDrive
     *
     * @return \Flat\APIClient\Model\ClassDetailsGoogleDrive
     */
    public function getGoogleDrive()
    {
        return $this->container['googleDrive'];
    }

    /**
     * Sets googleDrive
     *
     * @param \Flat\APIClient\Model\ClassDetailsGoogleDrive $googleDrive googleDrive
     *
     * @return $this
     */
    public function setGoogleDrive($googleDrive)
    {
        $this->container['googleDrive'] = $googleDrive;

        return $this;
    }

    /**
     * Gets lti
     *
     * @return \Flat\APIClient\Model\ClassDetailsLti
     */
    public function getLti()
    {
        return $this->container['lti'];
    }

    /**
     * Sets lti
     *
     * @param \Flat\APIClient\Model\ClassDetailsLti $lti lti
     *
     * @return $this
     */
    public function setLti($lti)
    {
        $this->container['lti'] = $lti;

        return $this;
    }

    /**
     * Gets canvas
     *
     * @return \Flat\APIClient\Model\ClassDetailsCanvas
     */
    public function getCanvas()
    {
        return $this->container['canvas'];
    }

    /**
     * Sets canvas
     *
     * @param \Flat\APIClient\Model\ClassDetailsCanvas $canvas canvas
     *
     * @return $this
     */
    public function setCanvas($canvas)
    {
        $this->container['canvas'] = $canvas;

        return $this;
    }

    /**
     * Gets clever
     *
     * @return \Flat\APIClient\Model\ClassDetailsClever
     */
    public function getClever()
    {
        return $this->container['clever'];
    }

    /**
     * Sets clever
     *
     * @param \Flat\APIClient\Model\ClassDetailsClever $clever clever
     *
     * @return $this
     */
    public function setClever($clever)
    {
        $this->container['clever'] = $clever;

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


