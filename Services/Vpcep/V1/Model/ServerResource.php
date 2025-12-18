<?php

namespace HuaweiCloud\SDK\Vpcep\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServerResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServerResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceId  后端elb实例ID。
    * availabilityZoneId  elb所在的az_id。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceId' => 'string',
            'availabilityZoneId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceId  后端elb实例ID。
    * availabilityZoneId  elb所在的az_id。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceId' => null,
        'availabilityZoneId' => null
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
    * resourceId  后端elb实例ID。
    * availabilityZoneId  elb所在的az_id。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceId' => 'resource_id',
            'availabilityZoneId' => 'availability_zone_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceId  后端elb实例ID。
    * availabilityZoneId  elb所在的az_id。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceId' => 'setResourceId',
            'availabilityZoneId' => 'setAvailabilityZoneId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceId  后端elb实例ID。
    * availabilityZoneId  elb所在的az_id。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceId' => 'getResourceId',
            'availabilityZoneId' => 'getAvailabilityZoneId'
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
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['availabilityZoneId'] = isset($data['availabilityZoneId']) ? $data['availabilityZoneId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resourceId'] === null) {
            $invalidProperties[] = "'resourceId' can't be null";
        }
            if (!preg_match("/[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/", $this->container['resourceId'])) {
                $invalidProperties[] = "invalid value for 'resourceId', must be conform to the pattern /[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}/.";
            }
            if (!is_null($this->container['availabilityZoneId']) && (mb_strlen($this->container['availabilityZoneId']) < 1)) {
                $invalidProperties[] = "invalid value for 'availabilityZoneId', the character length must be bigger than or equal to 1.";
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
    * Gets resourceId
    *  后端elb实例ID。
    *
    * @return string
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string $resourceId 后端elb实例ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets availabilityZoneId
    *  elb所在的az_id。
    *
    * @return string|null
    */
    public function getAvailabilityZoneId()
    {
        return $this->container['availabilityZoneId'];
    }

    /**
    * Sets availabilityZoneId
    *
    * @param string|null $availabilityZoneId elb所在的az_id。
    *
    * @return $this
    */
    public function setAvailabilityZoneId($availabilityZoneId)
    {
        $this->container['availabilityZoneId'] = $availabilityZoneId;
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

