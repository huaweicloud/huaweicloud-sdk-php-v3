<?php

namespace HuaweiCloud\SDK\FunctionGraph\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CronConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CronConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  定时配置名称
    * cron  定时表达式
    * count  拉起预留实例个数
    * startTime  开始时间戳
    * expiredTime  失效时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'cron' => 'string',
            'count' => 'int',
            'startTime' => 'int',
            'expiredTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  定时配置名称
    * cron  定时表达式
    * count  拉起预留实例个数
    * startTime  开始时间戳
    * expiredTime  失效时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'cron' => null,
        'count' => 'int32',
        'startTime' => 'int64',
        'expiredTime' => 'int64'
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
    * name  定时配置名称
    * cron  定时表达式
    * count  拉起预留实例个数
    * startTime  开始时间戳
    * expiredTime  失效时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'cron' => 'cron',
            'count' => 'count',
            'startTime' => 'start_time',
            'expiredTime' => 'expired_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  定时配置名称
    * cron  定时表达式
    * count  拉起预留实例个数
    * startTime  开始时间戳
    * expiredTime  失效时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'cron' => 'setCron',
            'count' => 'setCount',
            'startTime' => 'setStartTime',
            'expiredTime' => 'setExpiredTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  定时配置名称
    * cron  定时表达式
    * count  拉起预留实例个数
    * startTime  开始时间戳
    * expiredTime  失效时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'cron' => 'getCron',
            'count' => 'getCount',
            'startTime' => 'getStartTime',
            'expiredTime' => 'getExpiredTime'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['cron'] = isset($data['cron']) ? $data['cron'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['expiredTime'] = isset($data['expiredTime']) ? $data['expiredTime'] : null;
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
    * Gets name
    *  定时配置名称
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 定时配置名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets cron
    *  定时表达式
    *
    * @return string|null
    */
    public function getCron()
    {
        return $this->container['cron'];
    }

    /**
    * Sets cron
    *
    * @param string|null $cron 定时表达式
    *
    * @return $this
    */
    public function setCron($cron)
    {
        $this->container['cron'] = $cron;
        return $this;
    }

    /**
    * Gets count
    *  拉起预留实例个数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 拉起预留实例个数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间戳
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime 开始时间戳
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets expiredTime
    *  失效时间戳
    *
    * @return int|null
    */
    public function getExpiredTime()
    {
        return $this->container['expiredTime'];
    }

    /**
    * Sets expiredTime
    *
    * @param int|null $expiredTime 失效时间戳
    *
    * @return $this
    */
    public function setExpiredTime($expiredTime)
    {
        $this->container['expiredTime'] = $expiredTime;
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

