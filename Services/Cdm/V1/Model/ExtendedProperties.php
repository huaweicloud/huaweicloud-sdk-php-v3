<?php

namespace HuaweiCloud\SDK\Cdm\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExtendedProperties implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExtendedProperties';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workSpaceId  工作空间ID。
    * resourceId  资源ID。
    * trial  是否是试用集群。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workSpaceId' => 'string',
            'resourceId' => 'string',
            'trial' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workSpaceId  工作空间ID。
    * resourceId  资源ID。
    * trial  是否是试用集群。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workSpaceId' => null,
        'resourceId' => null,
        'trial' => null
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
    * workSpaceId  工作空间ID。
    * resourceId  资源ID。
    * trial  是否是试用集群。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workSpaceId' => 'workSpaceId',
            'resourceId' => 'resourceId',
            'trial' => 'trial'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workSpaceId  工作空间ID。
    * resourceId  资源ID。
    * trial  是否是试用集群。
    *
    * @var string[]
    */
    protected static $setters = [
            'workSpaceId' => 'setWorkSpaceId',
            'resourceId' => 'setResourceId',
            'trial' => 'setTrial'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workSpaceId  工作空间ID。
    * resourceId  资源ID。
    * trial  是否是试用集群。
    *
    * @var string[]
    */
    protected static $getters = [
            'workSpaceId' => 'getWorkSpaceId',
            'resourceId' => 'getResourceId',
            'trial' => 'getTrial'
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
        $this->container['workSpaceId'] = isset($data['workSpaceId']) ? $data['workSpaceId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['trial'] = isset($data['trial']) ? $data['trial'] : null;
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
    * Gets workSpaceId
    *  工作空间ID。
    *
    * @return string|null
    */
    public function getWorkSpaceId()
    {
        return $this->container['workSpaceId'];
    }

    /**
    * Sets workSpaceId
    *
    * @param string|null $workSpaceId 工作空间ID。
    *
    * @return $this
    */
    public function setWorkSpaceId($workSpaceId)
    {
        $this->container['workSpaceId'] = $workSpaceId;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets trial
    *  是否是试用集群。
    *
    * @return string|null
    */
    public function getTrial()
    {
        return $this->container['trial'];
    }

    /**
    * Sets trial
    *
    * @param string|null $trial 是否是试用集群。
    *
    * @return $this
    */
    public function setTrial($trial)
    {
        $this->container['trial'] = $trial;
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

