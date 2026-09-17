<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListRisksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListRisksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * from  开始时间（Unix timestamp，毫秒）
    * to  结束时间（Unix timestamp，毫秒）
    * engineType  数据库类型
    * num  返回TOP风险实例数量
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'from' => 'int',
            'to' => 'int',
            'engineType' => 'string',
            'num' => 'int',
            'metricCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * from  开始时间（Unix timestamp，毫秒）
    * to  结束时间（Unix timestamp，毫秒）
    * engineType  数据库类型
    * num  返回TOP风险实例数量
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'from' => 'int64',
        'to' => 'int64',
        'engineType' => null,
        'num' => 'int32',
        'metricCode' => null
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
    * from  开始时间（Unix timestamp，毫秒）
    * to  结束时间（Unix timestamp，毫秒）
    * engineType  数据库类型
    * num  返回TOP风险实例数量
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'from' => 'from',
            'to' => 'to',
            'engineType' => 'engine_type',
            'num' => 'num',
            'metricCode' => 'metric_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * from  开始时间（Unix timestamp，毫秒）
    * to  结束时间（Unix timestamp，毫秒）
    * engineType  数据库类型
    * num  返回TOP风险实例数量
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $setters = [
            'from' => 'setFrom',
            'to' => 'setTo',
            'engineType' => 'setEngineType',
            'num' => 'setNum',
            'metricCode' => 'setMetricCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * from  开始时间（Unix timestamp，毫秒）
    * to  结束时间（Unix timestamp，毫秒）
    * engineType  数据库类型
    * num  返回TOP风险实例数量
    * metricCode  指标码
    *
    * @var string[]
    */
    protected static $getters = [
            'from' => 'getFrom',
            'to' => 'getTo',
            'engineType' => 'getEngineType',
            'num' => 'getNum',
            'metricCode' => 'getMetricCode'
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
        $this->container['from'] = isset($data['from']) ? $data['from'] : null;
        $this->container['to'] = isset($data['to']) ? $data['to'] : null;
        $this->container['engineType'] = isset($data['engineType']) ? $data['engineType'] : null;
        $this->container['num'] = isset($data['num']) ? $data['num'] : null;
        $this->container['metricCode'] = isset($data['metricCode']) ? $data['metricCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['from'] === null) {
            $invalidProperties[] = "'from' can't be null";
        }
        if ($this->container['to'] === null) {
            $invalidProperties[] = "'to' can't be null";
        }
        if ($this->container['engineType'] === null) {
            $invalidProperties[] = "'engineType' can't be null";
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
    * Gets from
    *  开始时间（Unix timestamp，毫秒）
    *
    * @return int
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param int $from 开始时间（Unix timestamp，毫秒）
    *
    * @return $this
    */
    public function setFrom($from)
    {
        $this->container['from'] = $from;
        return $this;
    }

    /**
    * Gets to
    *  结束时间（Unix timestamp，毫秒）
    *
    * @return int
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param int $to 结束时间（Unix timestamp，毫秒）
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets engineType
    *  数据库类型
    *
    * @return string
    */
    public function getEngineType()
    {
        return $this->container['engineType'];
    }

    /**
    * Sets engineType
    *
    * @param string $engineType 数据库类型
    *
    * @return $this
    */
    public function setEngineType($engineType)
    {
        $this->container['engineType'] = $engineType;
        return $this;
    }

    /**
    * Gets num
    *  返回TOP风险实例数量
    *
    * @return int|null
    */
    public function getNum()
    {
        return $this->container['num'];
    }

    /**
    * Sets num
    *
    * @param int|null $num 返回TOP风险实例数量
    *
    * @return $this
    */
    public function setNum($num)
    {
        $this->container['num'] = $num;
        return $this;
    }

    /**
    * Gets metricCode
    *  指标码
    *
    * @return string|null
    */
    public function getMetricCode()
    {
        return $this->container['metricCode'];
    }

    /**
    * Sets metricCode
    *
    * @param string|null $metricCode 指标码
    *
    * @return $this
    */
    public function setMetricCode($metricCode)
    {
        $this->container['metricCode'] = $metricCode;
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

