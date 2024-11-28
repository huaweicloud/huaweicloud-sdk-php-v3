<?php

namespace HuaweiCloud\SDK\GaussDBforNoSQL\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestoreRedisPitrRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestoreRedisPitrRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * restoreTime  恢复的指定时间点, 格式为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。  获取方法请参见 查询Redis可恢复时间点 中响应“restore_time”字段下参数的值。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'restoreTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * restoreTime  恢复的指定时间点, 格式为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。  获取方法请参见 查询Redis可恢复时间点 中响应“restore_time”字段下参数的值。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'restoreTime' => null
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
    * restoreTime  恢复的指定时间点, 格式为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。  获取方法请参见 查询Redis可恢复时间点 中响应“restore_time”字段下参数的值。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'restoreTime' => 'restore_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * restoreTime  恢复的指定时间点, 格式为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。  获取方法请参见 查询Redis可恢复时间点 中响应“restore_time”字段下参数的值。
    *
    * @var string[]
    */
    protected static $setters = [
            'restoreTime' => 'setRestoreTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * restoreTime  恢复的指定时间点, 格式为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。  获取方法请参见 查询Redis可恢复时间点 中响应“restore_time”字段下参数的值。
    *
    * @var string[]
    */
    protected static $getters = [
            'restoreTime' => 'getRestoreTime'
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
        $this->container['restoreTime'] = isset($data['restoreTime']) ? $data['restoreTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['restoreTime'] === null) {
            $invalidProperties[] = "'restoreTime' can't be null";
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
    * Gets restoreTime
    *  恢复的指定时间点, 格式为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。  获取方法请参见 查询Redis可恢复时间点 中响应“restore_time”字段下参数的值。
    *
    * @return string
    */
    public function getRestoreTime()
    {
        return $this->container['restoreTime'];
    }

    /**
    * Sets restoreTime
    *
    * @param string $restoreTime 恢复的指定时间点, 格式为yyyy-mm-ddThh:mm:ssZ字符串格式，T指某个时间的开始，Z指时区偏移量。  获取方法请参见 查询Redis可恢复时间点 中响应“restore_time”字段下参数的值。
    *
    * @return $this
    */
    public function setRestoreTime($restoreTime)
    {
        $this->container['restoreTime'] = $restoreTime;
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

