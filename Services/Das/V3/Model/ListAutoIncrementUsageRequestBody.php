<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAutoIncrementUsageRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAutoIncrementUsageRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ratio  自增 ID 使用比例过滤值，只返回超过该比例的自增 ID 使用数据。取值为 0~1 的小数，默认为0
    * realTime  是否获取实时数据： true：实时查询实例上数据并计算。最小查询时间粒度为 10 分钟，即有 10 分钟内的数据时，即使传递 true 也不进行实时查询。 false：当有近两小时的数据时，返回该数据，否则查询实例上最新数据。
    * offsite  偏移值
    * limit  每次获取的数量
    * database  数据库名。传入此参数时，查询指定数据库中表自增 ID 使用情况，不传入时查询实例上所有数据库的表自增 ID 使用情况。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ratio' => 'string',
            'realTime' => 'bool',
            'offsite' => 'string',
            'limit' => 'string',
            'database' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ratio  自增 ID 使用比例过滤值，只返回超过该比例的自增 ID 使用数据。取值为 0~1 的小数，默认为0
    * realTime  是否获取实时数据： true：实时查询实例上数据并计算。最小查询时间粒度为 10 分钟，即有 10 分钟内的数据时，即使传递 true 也不进行实时查询。 false：当有近两小时的数据时，返回该数据，否则查询实例上最新数据。
    * offsite  偏移值
    * limit  每次获取的数量
    * database  数据库名。传入此参数时，查询指定数据库中表自增 ID 使用情况，不传入时查询实例上所有数据库的表自增 ID 使用情况。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ratio' => null,
        'realTime' => null,
        'offsite' => null,
        'limit' => null,
        'database' => null
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
    * ratio  自增 ID 使用比例过滤值，只返回超过该比例的自增 ID 使用数据。取值为 0~1 的小数，默认为0
    * realTime  是否获取实时数据： true：实时查询实例上数据并计算。最小查询时间粒度为 10 分钟，即有 10 分钟内的数据时，即使传递 true 也不进行实时查询。 false：当有近两小时的数据时，返回该数据，否则查询实例上最新数据。
    * offsite  偏移值
    * limit  每次获取的数量
    * database  数据库名。传入此参数时，查询指定数据库中表自增 ID 使用情况，不传入时查询实例上所有数据库的表自增 ID 使用情况。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ratio' => 'ratio',
            'realTime' => 'real_time',
            'offsite' => 'offsite',
            'limit' => 'limit',
            'database' => 'database'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ratio  自增 ID 使用比例过滤值，只返回超过该比例的自增 ID 使用数据。取值为 0~1 的小数，默认为0
    * realTime  是否获取实时数据： true：实时查询实例上数据并计算。最小查询时间粒度为 10 分钟，即有 10 分钟内的数据时，即使传递 true 也不进行实时查询。 false：当有近两小时的数据时，返回该数据，否则查询实例上最新数据。
    * offsite  偏移值
    * limit  每次获取的数量
    * database  数据库名。传入此参数时，查询指定数据库中表自增 ID 使用情况，不传入时查询实例上所有数据库的表自增 ID 使用情况。
    *
    * @var string[]
    */
    protected static $setters = [
            'ratio' => 'setRatio',
            'realTime' => 'setRealTime',
            'offsite' => 'setOffsite',
            'limit' => 'setLimit',
            'database' => 'setDatabase'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ratio  自增 ID 使用比例过滤值，只返回超过该比例的自增 ID 使用数据。取值为 0~1 的小数，默认为0
    * realTime  是否获取实时数据： true：实时查询实例上数据并计算。最小查询时间粒度为 10 分钟，即有 10 分钟内的数据时，即使传递 true 也不进行实时查询。 false：当有近两小时的数据时，返回该数据，否则查询实例上最新数据。
    * offsite  偏移值
    * limit  每次获取的数量
    * database  数据库名。传入此参数时，查询指定数据库中表自增 ID 使用情况，不传入时查询实例上所有数据库的表自增 ID 使用情况。
    *
    * @var string[]
    */
    protected static $getters = [
            'ratio' => 'getRatio',
            'realTime' => 'getRealTime',
            'offsite' => 'getOffsite',
            'limit' => 'getLimit',
            'database' => 'getDatabase'
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
        $this->container['ratio'] = isset($data['ratio']) ? $data['ratio'] : null;
        $this->container['realTime'] = isset($data['realTime']) ? $data['realTime'] : null;
        $this->container['offsite'] = isset($data['offsite']) ? $data['offsite'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['database'] = isset($data['database']) ? $data['database'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ratio'] === null) {
            $invalidProperties[] = "'ratio' can't be null";
        }
        if ($this->container['realTime'] === null) {
            $invalidProperties[] = "'realTime' can't be null";
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
    * Gets ratio
    *  自增 ID 使用比例过滤值，只返回超过该比例的自增 ID 使用数据。取值为 0~1 的小数，默认为0
    *
    * @return string
    */
    public function getRatio()
    {
        return $this->container['ratio'];
    }

    /**
    * Sets ratio
    *
    * @param string $ratio 自增 ID 使用比例过滤值，只返回超过该比例的自增 ID 使用数据。取值为 0~1 的小数，默认为0
    *
    * @return $this
    */
    public function setRatio($ratio)
    {
        $this->container['ratio'] = $ratio;
        return $this;
    }

    /**
    * Gets realTime
    *  是否获取实时数据： true：实时查询实例上数据并计算。最小查询时间粒度为 10 分钟，即有 10 分钟内的数据时，即使传递 true 也不进行实时查询。 false：当有近两小时的数据时，返回该数据，否则查询实例上最新数据。
    *
    * @return bool
    */
    public function getRealTime()
    {
        return $this->container['realTime'];
    }

    /**
    * Sets realTime
    *
    * @param bool $realTime 是否获取实时数据： true：实时查询实例上数据并计算。最小查询时间粒度为 10 分钟，即有 10 分钟内的数据时，即使传递 true 也不进行实时查询。 false：当有近两小时的数据时，返回该数据，否则查询实例上最新数据。
    *
    * @return $this
    */
    public function setRealTime($realTime)
    {
        $this->container['realTime'] = $realTime;
        return $this;
    }

    /**
    * Gets offsite
    *  偏移值
    *
    * @return string|null
    */
    public function getOffsite()
    {
        return $this->container['offsite'];
    }

    /**
    * Sets offsite
    *
    * @param string|null $offsite 偏移值
    *
    * @return $this
    */
    public function setOffsite($offsite)
    {
        $this->container['offsite'] = $offsite;
        return $this;
    }

    /**
    * Gets limit
    *  每次获取的数量
    *
    * @return string|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param string|null $limit 每次获取的数量
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets database
    *  数据库名。传入此参数时，查询指定数据库中表自增 ID 使用情况，不传入时查询实例上所有数据库的表自增 ID 使用情况。
    *
    * @return string[]|null
    */
    public function getDatabase()
    {
        return $this->container['database'];
    }

    /**
    * Sets database
    *
    * @param string[]|null $database 数据库名。传入此参数时，查询指定数据库中表自增 ID 使用情况，不传入时查询实例上所有数据库的表自增 ID 使用情况。
    *
    * @return $this
    */
    public function setDatabase($database)
    {
        $this->container['database'] = $database;
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

