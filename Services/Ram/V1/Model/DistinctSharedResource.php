<?php

namespace HuaweiCloud\SDK\Ram\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DistinctSharedResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DistinctSharedResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceUrn  资源的统一资源名称。
    * resourceType  资源的类型。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceUrn' => 'string',
            'resourceType' => 'string',
            'updatedAt' => '\DateTime'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceUrn  资源的统一资源名称。
    * resourceType  资源的类型。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceUrn' => null,
        'resourceType' => null,
        'updatedAt' => 'date-time'
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
    * resourceUrn  资源的统一资源名称。
    * resourceType  资源的类型。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceUrn' => 'resource_urn',
            'resourceType' => 'resource_type',
            'updatedAt' => 'updated_at'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceUrn  资源的统一资源名称。
    * resourceType  资源的类型。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceUrn' => 'setResourceUrn',
            'resourceType' => 'setResourceType',
            'updatedAt' => 'setUpdatedAt'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceUrn  资源的统一资源名称。
    * resourceType  资源的类型。
    * updatedAt  最后一次更新资源共享实例的时间。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceUrn' => 'getResourceUrn',
            'resourceType' => 'getResourceType',
            'updatedAt' => 'getUpdatedAt'
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
        $this->container['resourceUrn'] = isset($data['resourceUrn']) ? $data['resourceUrn'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceUrn']) && (mb_strlen($this->container['resourceUrn']) > 1500)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be smaller than or equal to 1500.";
            }
            if (!is_null($this->container['resourceUrn']) && (mb_strlen($this->container['resourceUrn']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceUrn', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 100)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 0)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 0.";
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
    * Gets resourceUrn
    *  资源的统一资源名称。
    *
    * @return string|null
    */
    public function getResourceUrn()
    {
        return $this->container['resourceUrn'];
    }

    /**
    * Sets resourceUrn
    *
    * @param string|null $resourceUrn 资源的统一资源名称。
    *
    * @return $this
    */
    public function setResourceUrn($resourceUrn)
    {
        $this->container['resourceUrn'] = $resourceUrn;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源的类型。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源的类型。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets updatedAt
    *  最后一次更新资源共享实例的时间。
    *
    * @return \DateTime|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param \DateTime|null $updatedAt 最后一次更新资源共享实例的时间。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
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

