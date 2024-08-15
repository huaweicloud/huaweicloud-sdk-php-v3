<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CdmClusterAvailabilityZone implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CdmClusterAvailabilityZone';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * availableZoneId  可用区ID。
    * availableZoneName  可用区名称。
    * availableZoneCode  可用区码。
    * azStatus  可用区状态。
    * type  可用区类型。
    * tags  可用区tag。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'availableZoneId' => 'string',
            'availableZoneName' => 'string',
            'availableZoneCode' => 'string',
            'azStatus' => 'string',
            'type' => 'string',
            'tags' => 'object'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * availableZoneId  可用区ID。
    * availableZoneName  可用区名称。
    * availableZoneCode  可用区码。
    * azStatus  可用区状态。
    * type  可用区类型。
    * tags  可用区tag。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'availableZoneId' => null,
        'availableZoneName' => null,
        'availableZoneCode' => null,
        'azStatus' => null,
        'type' => null,
        'tags' => null
    ];

    /**
    * Array of property to type mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
    * Array of property to format mappings. Used for (de)serialization
    *
    * @return array
    */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
    * Array of attributes where the key is the local name,
    * and the value is the original name
    * availableZoneId  可用区ID。
    * availableZoneName  可用区名称。
    * availableZoneCode  可用区码。
    * azStatus  可用区状态。
    * type  可用区类型。
    * tags  可用区tag。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'availableZoneId' => 'availableZoneId',
            'availableZoneName' => 'availableZoneName',
            'availableZoneCode' => 'availableZoneCode',
            'azStatus' => 'azStatus',
            'type' => 'type',
            'tags' => 'tags'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * availableZoneId  可用区ID。
    * availableZoneName  可用区名称。
    * availableZoneCode  可用区码。
    * azStatus  可用区状态。
    * type  可用区类型。
    * tags  可用区tag。
    *
    * @var string[]
    */
    protected static $setters = [
            'availableZoneId' => 'setAvailableZoneId',
            'availableZoneName' => 'setAvailableZoneName',
            'availableZoneCode' => 'setAvailableZoneCode',
            'azStatus' => 'setAzStatus',
            'type' => 'setType',
            'tags' => 'setTags'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * availableZoneId  可用区ID。
    * availableZoneName  可用区名称。
    * availableZoneCode  可用区码。
    * azStatus  可用区状态。
    * type  可用区类型。
    * tags  可用区tag。
    *
    * @var string[]
    */
    protected static $getters = [
            'availableZoneId' => 'getAvailableZoneId',
            'availableZoneName' => 'getAvailableZoneName',
            'availableZoneCode' => 'getAvailableZoneCode',
            'azStatus' => 'getAzStatus',
            'type' => 'getType',
            'tags' => 'getTags'
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
        return self::$openAPIModelName;
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
        $this->container['availableZoneId'] = isset($data['availableZoneId']) ? $data['availableZoneId'] : null;
        $this->container['availableZoneName'] = isset($data['availableZoneName']) ? $data['availableZoneName'] : null;
        $this->container['availableZoneCode'] = isset($data['availableZoneCode']) ? $data['availableZoneCode'] : null;
        $this->container['azStatus'] = isset($data['azStatus']) ? $data['azStatus'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['tags'] = isset($data['tags']) ? $data['tags'] : null;
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
    * Gets availableZoneId
    *  可用区ID。
    *
    * @return string|null
    */
    public function getAvailableZoneId()
    {
        return $this->container['availableZoneId'];
    }

    /**
    * Sets availableZoneId
    *
    * @param string|null $availableZoneId 可用区ID。
    *
    * @return $this
    */
    public function setAvailableZoneId($availableZoneId)
    {
        $this->container['availableZoneId'] = $availableZoneId;
        return $this;
    }

    /**
    * Gets availableZoneName
    *  可用区名称。
    *
    * @return string|null
    */
    public function getAvailableZoneName()
    {
        return $this->container['availableZoneName'];
    }

    /**
    * Sets availableZoneName
    *
    * @param string|null $availableZoneName 可用区名称。
    *
    * @return $this
    */
    public function setAvailableZoneName($availableZoneName)
    {
        $this->container['availableZoneName'] = $availableZoneName;
        return $this;
    }

    /**
    * Gets availableZoneCode
    *  可用区码。
    *
    * @return string|null
    */
    public function getAvailableZoneCode()
    {
        return $this->container['availableZoneCode'];
    }

    /**
    * Sets availableZoneCode
    *
    * @param string|null $availableZoneCode 可用区码。
    *
    * @return $this
    */
    public function setAvailableZoneCode($availableZoneCode)
    {
        $this->container['availableZoneCode'] = $availableZoneCode;
        return $this;
    }

    /**
    * Gets azStatus
    *  可用区状态。
    *
    * @return string|null
    */
    public function getAzStatus()
    {
        return $this->container['azStatus'];
    }

    /**
    * Sets azStatus
    *
    * @param string|null $azStatus 可用区状态。
    *
    * @return $this
    */
    public function setAzStatus($azStatus)
    {
        $this->container['azStatus'] = $azStatus;
        return $this;
    }

    /**
    * Gets type
    *  可用区类型。
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 可用区类型。
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets tags
    *  可用区tag。
    *
    * @return object|null
    */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
    * Sets tags
    *
    * @param object|null $tags 可用区tag。
    *
    * @return $this
    */
    public function setTags($tags)
    {
        $this->container['tags'] = $tags;
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
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }
}

