<?php

namespace HuaweiCloud\SDK\Cpcs\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CloudServiceInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CloudServiceInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * serviceNum  当前租户开通的云原生密码服务数量（只统计白名单服务情况）
    * resourceNum  当前租户云原生密码服务的资源实例总和
    * resourceDistribution  resourceDistribution
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'serviceNum' => 'int',
            'resourceNum' => 'int',
            'resourceDistribution' => '\HuaweiCloud\SDK\Cpcs\V1\Model\ResourceDistribution'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * serviceNum  当前租户开通的云原生密码服务数量（只统计白名单服务情况）
    * resourceNum  当前租户云原生密码服务的资源实例总和
    * resourceDistribution  resourceDistribution
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'serviceNum' => null,
        'resourceNum' => null,
        'resourceDistribution' => null
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
    * serviceNum  当前租户开通的云原生密码服务数量（只统计白名单服务情况）
    * resourceNum  当前租户云原生密码服务的资源实例总和
    * resourceDistribution  resourceDistribution
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'serviceNum' => 'service_num',
            'resourceNum' => 'resource_num',
            'resourceDistribution' => 'resource_distribution'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * serviceNum  当前租户开通的云原生密码服务数量（只统计白名单服务情况）
    * resourceNum  当前租户云原生密码服务的资源实例总和
    * resourceDistribution  resourceDistribution
    *
    * @var string[]
    */
    protected static $setters = [
            'serviceNum' => 'setServiceNum',
            'resourceNum' => 'setResourceNum',
            'resourceDistribution' => 'setResourceDistribution'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * serviceNum  当前租户开通的云原生密码服务数量（只统计白名单服务情况）
    * resourceNum  当前租户云原生密码服务的资源实例总和
    * resourceDistribution  resourceDistribution
    *
    * @var string[]
    */
    protected static $getters = [
            'serviceNum' => 'getServiceNum',
            'resourceNum' => 'getResourceNum',
            'resourceDistribution' => 'getResourceDistribution'
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
        $this->container['serviceNum'] = isset($data['serviceNum']) ? $data['serviceNum'] : null;
        $this->container['resourceNum'] = isset($data['resourceNum']) ? $data['resourceNum'] : null;
        $this->container['resourceDistribution'] = isset($data['resourceDistribution']) ? $data['resourceDistribution'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['serviceNum'] === null) {
            $invalidProperties[] = "'serviceNum' can't be null";
        }
        if ($this->container['resourceNum'] === null) {
            $invalidProperties[] = "'resourceNum' can't be null";
        }
        if ($this->container['resourceDistribution'] === null) {
            $invalidProperties[] = "'resourceDistribution' can't be null";
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
    * Gets serviceNum
    *  当前租户开通的云原生密码服务数量（只统计白名单服务情况）
    *
    * @return int
    */
    public function getServiceNum()
    {
        return $this->container['serviceNum'];
    }

    /**
    * Sets serviceNum
    *
    * @param int $serviceNum 当前租户开通的云原生密码服务数量（只统计白名单服务情况）
    *
    * @return $this
    */
    public function setServiceNum($serviceNum)
    {
        $this->container['serviceNum'] = $serviceNum;
        return $this;
    }

    /**
    * Gets resourceNum
    *  当前租户云原生密码服务的资源实例总和
    *
    * @return int
    */
    public function getResourceNum()
    {
        return $this->container['resourceNum'];
    }

    /**
    * Sets resourceNum
    *
    * @param int $resourceNum 当前租户云原生密码服务的资源实例总和
    *
    * @return $this
    */
    public function setResourceNum($resourceNum)
    {
        $this->container['resourceNum'] = $resourceNum;
        return $this;
    }

    /**
    * Gets resourceDistribution
    *  resourceDistribution
    *
    * @return \HuaweiCloud\SDK\Cpcs\V1\Model\ResourceDistribution
    */
    public function getResourceDistribution()
    {
        return $this->container['resourceDistribution'];
    }

    /**
    * Sets resourceDistribution
    *
    * @param \HuaweiCloud\SDK\Cpcs\V1\Model\ResourceDistribution $resourceDistribution resourceDistribution
    *
    * @return $this
    */
    public function setResourceDistribution($resourceDistribution)
    {
        $this->container['resourceDistribution'] = $resourceDistribution;
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

