<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DiskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DiskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * dataAvailable  数据盘可用量
    * dataTotal  数据盘总容量
    * dataUsePercent  数据盘使用百分比
    * id  记录ID
    * swapAvailable  临时目录可用量
    * swapTotal  临时目录总容量
    * swapUsePercent  临时目录使用百分比
    * systemAvailable  系统盘可用量
    * systemTotal  系统盘容量
    * systemUsePercent  系统盘使用百分比
    * time  记录时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'dataAvailable' => 'double',
            'dataTotal' => 'double',
            'dataUsePercent' => 'int',
            'id' => 'string',
            'swapAvailable' => 'double',
            'swapTotal' => 'double',
            'swapUsePercent' => 'int',
            'systemAvailable' => 'double',
            'systemTotal' => 'double',
            'systemUsePercent' => 'int',
            'time' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * dataAvailable  数据盘可用量
    * dataTotal  数据盘总容量
    * dataUsePercent  数据盘使用百分比
    * id  记录ID
    * swapAvailable  临时目录可用量
    * swapTotal  临时目录总容量
    * swapUsePercent  临时目录使用百分比
    * systemAvailable  系统盘可用量
    * systemTotal  系统盘容量
    * systemUsePercent  系统盘使用百分比
    * time  记录时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'dataAvailable' => 'double',
        'dataTotal' => 'double',
        'dataUsePercent' => 'int32',
        'id' => null,
        'swapAvailable' => 'double',
        'swapTotal' => 'double',
        'swapUsePercent' => 'int32',
        'systemAvailable' => 'double',
        'systemTotal' => 'double',
        'systemUsePercent' => 'int32',
        'time' => null
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
    * dataAvailable  数据盘可用量
    * dataTotal  数据盘总容量
    * dataUsePercent  数据盘使用百分比
    * id  记录ID
    * swapAvailable  临时目录可用量
    * swapTotal  临时目录总容量
    * swapUsePercent  临时目录使用百分比
    * systemAvailable  系统盘可用量
    * systemTotal  系统盘容量
    * systemUsePercent  系统盘使用百分比
    * time  记录时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'dataAvailable' => 'data_available',
            'dataTotal' => 'data_total',
            'dataUsePercent' => 'data_use_percent',
            'id' => 'id',
            'swapAvailable' => 'swap_available',
            'swapTotal' => 'swap_total',
            'swapUsePercent' => 'swap_use_percent',
            'systemAvailable' => 'system_available',
            'systemTotal' => 'system_total',
            'systemUsePercent' => 'system_use_percent',
            'time' => 'time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * dataAvailable  数据盘可用量
    * dataTotal  数据盘总容量
    * dataUsePercent  数据盘使用百分比
    * id  记录ID
    * swapAvailable  临时目录可用量
    * swapTotal  临时目录总容量
    * swapUsePercent  临时目录使用百分比
    * systemAvailable  系统盘可用量
    * systemTotal  系统盘容量
    * systemUsePercent  系统盘使用百分比
    * time  记录时间
    *
    * @var string[]
    */
    protected static $setters = [
            'dataAvailable' => 'setDataAvailable',
            'dataTotal' => 'setDataTotal',
            'dataUsePercent' => 'setDataUsePercent',
            'id' => 'setId',
            'swapAvailable' => 'setSwapAvailable',
            'swapTotal' => 'setSwapTotal',
            'swapUsePercent' => 'setSwapUsePercent',
            'systemAvailable' => 'setSystemAvailable',
            'systemTotal' => 'setSystemTotal',
            'systemUsePercent' => 'setSystemUsePercent',
            'time' => 'setTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * dataAvailable  数据盘可用量
    * dataTotal  数据盘总容量
    * dataUsePercent  数据盘使用百分比
    * id  记录ID
    * swapAvailable  临时目录可用量
    * swapTotal  临时目录总容量
    * swapUsePercent  临时目录使用百分比
    * systemAvailable  系统盘可用量
    * systemTotal  系统盘容量
    * systemUsePercent  系统盘使用百分比
    * time  记录时间
    *
    * @var string[]
    */
    protected static $getters = [
            'dataAvailable' => 'getDataAvailable',
            'dataTotal' => 'getDataTotal',
            'dataUsePercent' => 'getDataUsePercent',
            'id' => 'getId',
            'swapAvailable' => 'getSwapAvailable',
            'swapTotal' => 'getSwapTotal',
            'swapUsePercent' => 'getSwapUsePercent',
            'systemAvailable' => 'getSystemAvailable',
            'systemTotal' => 'getSystemTotal',
            'systemUsePercent' => 'getSystemUsePercent',
            'time' => 'getTime'
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
        $this->container['dataAvailable'] = isset($data['dataAvailable']) ? $data['dataAvailable'] : null;
        $this->container['dataTotal'] = isset($data['dataTotal']) ? $data['dataTotal'] : null;
        $this->container['dataUsePercent'] = isset($data['dataUsePercent']) ? $data['dataUsePercent'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['swapAvailable'] = isset($data['swapAvailable']) ? $data['swapAvailable'] : null;
        $this->container['swapTotal'] = isset($data['swapTotal']) ? $data['swapTotal'] : null;
        $this->container['swapUsePercent'] = isset($data['swapUsePercent']) ? $data['swapUsePercent'] : null;
        $this->container['systemAvailable'] = isset($data['systemAvailable']) ? $data['systemAvailable'] : null;
        $this->container['systemTotal'] = isset($data['systemTotal']) ? $data['systemTotal'] : null;
        $this->container['systemUsePercent'] = isset($data['systemUsePercent']) ? $data['systemUsePercent'] : null;
        $this->container['time'] = isset($data['time']) ? $data['time'] : null;
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
    * Gets dataAvailable
    *  数据盘可用量
    *
    * @return double|null
    */
    public function getDataAvailable()
    {
        return $this->container['dataAvailable'];
    }

    /**
    * Sets dataAvailable
    *
    * @param double|null $dataAvailable 数据盘可用量
    *
    * @return $this
    */
    public function setDataAvailable($dataAvailable)
    {
        $this->container['dataAvailable'] = $dataAvailable;
        return $this;
    }

    /**
    * Gets dataTotal
    *  数据盘总容量
    *
    * @return double|null
    */
    public function getDataTotal()
    {
        return $this->container['dataTotal'];
    }

    /**
    * Sets dataTotal
    *
    * @param double|null $dataTotal 数据盘总容量
    *
    * @return $this
    */
    public function setDataTotal($dataTotal)
    {
        $this->container['dataTotal'] = $dataTotal;
        return $this;
    }

    /**
    * Gets dataUsePercent
    *  数据盘使用百分比
    *
    * @return int|null
    */
    public function getDataUsePercent()
    {
        return $this->container['dataUsePercent'];
    }

    /**
    * Sets dataUsePercent
    *
    * @param int|null $dataUsePercent 数据盘使用百分比
    *
    * @return $this
    */
    public function setDataUsePercent($dataUsePercent)
    {
        $this->container['dataUsePercent'] = $dataUsePercent;
        return $this;
    }

    /**
    * Gets id
    *  记录ID
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets swapAvailable
    *  临时目录可用量
    *
    * @return double|null
    */
    public function getSwapAvailable()
    {
        return $this->container['swapAvailable'];
    }

    /**
    * Sets swapAvailable
    *
    * @param double|null $swapAvailable 临时目录可用量
    *
    * @return $this
    */
    public function setSwapAvailable($swapAvailable)
    {
        $this->container['swapAvailable'] = $swapAvailable;
        return $this;
    }

    /**
    * Gets swapTotal
    *  临时目录总容量
    *
    * @return double|null
    */
    public function getSwapTotal()
    {
        return $this->container['swapTotal'];
    }

    /**
    * Sets swapTotal
    *
    * @param double|null $swapTotal 临时目录总容量
    *
    * @return $this
    */
    public function setSwapTotal($swapTotal)
    {
        $this->container['swapTotal'] = $swapTotal;
        return $this;
    }

    /**
    * Gets swapUsePercent
    *  临时目录使用百分比
    *
    * @return int|null
    */
    public function getSwapUsePercent()
    {
        return $this->container['swapUsePercent'];
    }

    /**
    * Sets swapUsePercent
    *
    * @param int|null $swapUsePercent 临时目录使用百分比
    *
    * @return $this
    */
    public function setSwapUsePercent($swapUsePercent)
    {
        $this->container['swapUsePercent'] = $swapUsePercent;
        return $this;
    }

    /**
    * Gets systemAvailable
    *  系统盘可用量
    *
    * @return double|null
    */
    public function getSystemAvailable()
    {
        return $this->container['systemAvailable'];
    }

    /**
    * Sets systemAvailable
    *
    * @param double|null $systemAvailable 系统盘可用量
    *
    * @return $this
    */
    public function setSystemAvailable($systemAvailable)
    {
        $this->container['systemAvailable'] = $systemAvailable;
        return $this;
    }

    /**
    * Gets systemTotal
    *  系统盘容量
    *
    * @return double|null
    */
    public function getSystemTotal()
    {
        return $this->container['systemTotal'];
    }

    /**
    * Sets systemTotal
    *
    * @param double|null $systemTotal 系统盘容量
    *
    * @return $this
    */
    public function setSystemTotal($systemTotal)
    {
        $this->container['systemTotal'] = $systemTotal;
        return $this;
    }

    /**
    * Gets systemUsePercent
    *  系统盘使用百分比
    *
    * @return int|null
    */
    public function getSystemUsePercent()
    {
        return $this->container['systemUsePercent'];
    }

    /**
    * Sets systemUsePercent
    *
    * @param int|null $systemUsePercent 系统盘使用百分比
    *
    * @return $this
    */
    public function setSystemUsePercent($systemUsePercent)
    {
        $this->container['systemUsePercent'] = $systemUsePercent;
        return $this;
    }

    /**
    * Gets time
    *  记录时间
    *
    * @return string|null
    */
    public function getTime()
    {
        return $this->container['time'];
    }

    /**
    * Sets time
    *
    * @param string|null $time 记录时间
    *
    * @return $this
    */
    public function setTime($time)
    {
        $this->container['time'] = $time;
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

