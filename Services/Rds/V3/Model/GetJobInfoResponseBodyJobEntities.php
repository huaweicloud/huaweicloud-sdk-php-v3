<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class GetJobInfoResponseBodyJobEntities implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'GetJobInfoResponseBody_job_entities';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * instance  instance
    * resourceIds  创建实例，单转主备，创建只读实例，调整实例容量任务时等任务时返回。
    * volume  volume
    * publicIp  绑定/解绑弹性IP，开启远程连接等任务时返回。
    * switchStrategy  主备倒换任务时返回。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'instance' => '\HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesInstance',
            'resourceIds' => 'string[]',
            'volume' => '\HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesVolume',
            'publicIp' => 'string',
            'switchStrategy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * instance  instance
    * resourceIds  创建实例，单转主备，创建只读实例，调整实例容量任务时等任务时返回。
    * volume  volume
    * publicIp  绑定/解绑弹性IP，开启远程连接等任务时返回。
    * switchStrategy  主备倒换任务时返回。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'instance' => null,
        'resourceIds' => null,
        'volume' => null,
        'publicIp' => null,
        'switchStrategy' => null
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
    * instance  instance
    * resourceIds  创建实例，单转主备，创建只读实例，调整实例容量任务时等任务时返回。
    * volume  volume
    * publicIp  绑定/解绑弹性IP，开启远程连接等任务时返回。
    * switchStrategy  主备倒换任务时返回。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'instance' => 'instance',
            'resourceIds' => 'resource_ids',
            'volume' => 'volume',
            'publicIp' => 'public_ip',
            'switchStrategy' => 'switch_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * instance  instance
    * resourceIds  创建实例，单转主备，创建只读实例，调整实例容量任务时等任务时返回。
    * volume  volume
    * publicIp  绑定/解绑弹性IP，开启远程连接等任务时返回。
    * switchStrategy  主备倒换任务时返回。
    *
    * @var string[]
    */
    protected static $setters = [
            'instance' => 'setInstance',
            'resourceIds' => 'setResourceIds',
            'volume' => 'setVolume',
            'publicIp' => 'setPublicIp',
            'switchStrategy' => 'setSwitchStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * instance  instance
    * resourceIds  创建实例，单转主备，创建只读实例，调整实例容量任务时等任务时返回。
    * volume  volume
    * publicIp  绑定/解绑弹性IP，开启远程连接等任务时返回。
    * switchStrategy  主备倒换任务时返回。
    *
    * @var string[]
    */
    protected static $getters = [
            'instance' => 'getInstance',
            'resourceIds' => 'getResourceIds',
            'volume' => 'getVolume',
            'publicIp' => 'getPublicIp',
            'switchStrategy' => 'getSwitchStrategy'
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
        $this->container['instance'] = isset($data['instance']) ? $data['instance'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['volume'] = isset($data['volume']) ? $data['volume'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['switchStrategy'] = isset($data['switchStrategy']) ? $data['switchStrategy'] : null;
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
    * Gets instance
    *  instance
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesInstance|null
    */
    public function getInstance()
    {
        return $this->container['instance'];
    }

    /**
    * Sets instance
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesInstance|null $instance instance
    *
    * @return $this
    */
    public function setInstance($instance)
    {
        $this->container['instance'] = $instance;
        return $this;
    }

    /**
    * Gets resourceIds
    *  创建实例，单转主备，创建只读实例，调整实例容量任务时等任务时返回。
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 创建实例，单转主备，创建只读实例，调整实例容量任务时等任务时返回。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets volume
    *  volume
    *
    * @return \HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesVolume|null
    */
    public function getVolume()
    {
        return $this->container['volume'];
    }

    /**
    * Sets volume
    *
    * @param \HuaweiCloud\SDK\Rds\V3\Model\GetJobInfoResponseBodyJobEntitiesVolume|null $volume volume
    *
    * @return $this
    */
    public function setVolume($volume)
    {
        $this->container['volume'] = $volume;
        return $this;
    }

    /**
    * Gets publicIp
    *  绑定/解绑弹性IP，开启远程连接等任务时返回。
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 绑定/解绑弹性IP，开启远程连接等任务时返回。
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets switchStrategy
    *  主备倒换任务时返回。
    *
    * @return string|null
    */
    public function getSwitchStrategy()
    {
        return $this->container['switchStrategy'];
    }

    /**
    * Sets switchStrategy
    *
    * @param string|null $switchStrategy 主备倒换任务时返回。
    *
    * @return $this
    */
    public function setSwitchStrategy($switchStrategy)
    {
        $this->container['switchStrategy'] = $switchStrategy;
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

