<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMonitorIndicatorDataRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMonitorIndicatorDataRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * from  开始时间。
    * to  结束时间。
    * function  取值方法。
    * period  取值周期。
    * indicatorName  指标名称。
    * dim0  第一层级。
    * dim1  第二层级。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'from' => 'string',
            'to' => 'string',
            'function' => 'string',
            'period' => 'string',
            'indicatorName' => 'string',
            'dim0' => 'string',
            'dim1' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * from  开始时间。
    * to  结束时间。
    * function  取值方法。
    * period  取值周期。
    * indicatorName  指标名称。
    * dim0  第一层级。
    * dim1  第二层级。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'from' => null,
        'to' => null,
        'function' => null,
        'period' => null,
        'indicatorName' => null,
        'dim0' => null,
        'dim1' => null
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
    * from  开始时间。
    * to  结束时间。
    * function  取值方法。
    * period  取值周期。
    * indicatorName  指标名称。
    * dim0  第一层级。
    * dim1  第二层级。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'from' => 'from',
            'to' => 'to',
            'function' => 'function',
            'period' => 'period',
            'indicatorName' => 'indicator_name',
            'dim0' => 'dim0',
            'dim1' => 'dim1'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * from  开始时间。
    * to  结束时间。
    * function  取值方法。
    * period  取值周期。
    * indicatorName  指标名称。
    * dim0  第一层级。
    * dim1  第二层级。
    *
    * @var string[]
    */
    protected static $setters = [
            'from' => 'setFrom',
            'to' => 'setTo',
            'function' => 'setFunction',
            'period' => 'setPeriod',
            'indicatorName' => 'setIndicatorName',
            'dim0' => 'setDim0',
            'dim1' => 'setDim1'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * from  开始时间。
    * to  结束时间。
    * function  取值方法。
    * period  取值周期。
    * indicatorName  指标名称。
    * dim0  第一层级。
    * dim1  第二层级。
    *
    * @var string[]
    */
    protected static $getters = [
            'from' => 'getFrom',
            'to' => 'getTo',
            'function' => 'getFunction',
            'period' => 'getPeriod',
            'indicatorName' => 'getIndicatorName',
            'dim0' => 'getDim0',
            'dim1' => 'getDim1'
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
        $this->container['function'] = isset($data['function']) ? $data['function'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
        $this->container['indicatorName'] = isset($data['indicatorName']) ? $data['indicatorName'] : null;
        $this->container['dim0'] = isset($data['dim0']) ? $data['dim0'] : null;
        $this->container['dim1'] = isset($data['dim1']) ? $data['dim1'] : null;
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
        if ($this->container['indicatorName'] === null) {
            $invalidProperties[] = "'indicatorName' can't be null";
        }
        if ($this->container['dim0'] === null) {
            $invalidProperties[] = "'dim0' can't be null";
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
    *  开始时间。
    *
    * @return string
    */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
    * Sets from
    *
    * @param string $from 开始时间。
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
    *  结束时间。
    *
    * @return string
    */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
    * Sets to
    *
    * @param string $to 结束时间。
    *
    * @return $this
    */
    public function setTo($to)
    {
        $this->container['to'] = $to;
        return $this;
    }

    /**
    * Gets function
    *  取值方法。
    *
    * @return string|null
    */
    public function getFunction()
    {
        return $this->container['function'];
    }

    /**
    * Sets function
    *
    * @param string|null $function 取值方法。
    *
    * @return $this
    */
    public function setFunction($function)
    {
        $this->container['function'] = $function;
        return $this;
    }

    /**
    * Gets period
    *  取值周期。
    *
    * @return string|null
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string|null $period 取值周期。
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
        return $this;
    }

    /**
    * Gets indicatorName
    *  指标名称。
    *
    * @return string
    */
    public function getIndicatorName()
    {
        return $this->container['indicatorName'];
    }

    /**
    * Sets indicatorName
    *
    * @param string $indicatorName 指标名称。
    *
    * @return $this
    */
    public function setIndicatorName($indicatorName)
    {
        $this->container['indicatorName'] = $indicatorName;
        return $this;
    }

    /**
    * Gets dim0
    *  第一层级。
    *
    * @return string
    */
    public function getDim0()
    {
        return $this->container['dim0'];
    }

    /**
    * Sets dim0
    *
    * @param string $dim0 第一层级。
    *
    * @return $this
    */
    public function setDim0($dim0)
    {
        $this->container['dim0'] = $dim0;
        return $this;
    }

    /**
    * Gets dim1
    *  第二层级。
    *
    * @return string|null
    */
    public function getDim1()
    {
        return $this->container['dim1'];
    }

    /**
    * Sets dim1
    *
    * @param string|null $dim1 第二层级。
    *
    * @return $this
    */
    public function setDim1($dim1)
    {
        $this->container['dim1'] = $dim1;
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

