<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasicInfoVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasicInfoVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * collectInterval  采集间隔以秒为单位
    * subTaskName  子任务名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'collectInterval' => 'int',
            'subTaskName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * collectInterval  采集间隔以秒为单位
    * subTaskName  子任务名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'collectInterval' => 'int32',
        'subTaskName' => null
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
    * collectInterval  采集间隔以秒为单位
    * subTaskName  子任务名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'collectInterval' => 'collect_interval',
            'subTaskName' => 'sub_task_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * collectInterval  采集间隔以秒为单位
    * subTaskName  子任务名称
    *
    * @var string[]
    */
    protected static $setters = [
            'collectInterval' => 'setCollectInterval',
            'subTaskName' => 'setSubTaskName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * collectInterval  采集间隔以秒为单位
    * subTaskName  子任务名称
    *
    * @var string[]
    */
    protected static $getters = [
            'collectInterval' => 'getCollectInterval',
            'subTaskName' => 'getSubTaskName'
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
        $this->container['collectInterval'] = isset($data['collectInterval']) ? $data['collectInterval'] : null;
        $this->container['subTaskName'] = isset($data['subTaskName']) ? $data['subTaskName'] : null;
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
    * Gets collectInterval
    *  采集间隔以秒为单位
    *
    * @return int|null
    */
    public function getCollectInterval()
    {
        return $this->container['collectInterval'];
    }

    /**
    * Sets collectInterval
    *
    * @param int|null $collectInterval 采集间隔以秒为单位
    *
    * @return $this
    */
    public function setCollectInterval($collectInterval)
    {
        $this->container['collectInterval'] = $collectInterval;
        return $this;
    }

    /**
    * Gets subTaskName
    *  子任务名称
    *
    * @return string|null
    */
    public function getSubTaskName()
    {
        return $this->container['subTaskName'];
    }

    /**
    * Sets subTaskName
    *
    * @param string|null $subTaskName 子任务名称
    *
    * @return $this
    */
    public function setSubTaskName($subTaskName)
    {
        $this->container['subTaskName'] = $subTaskName;
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

