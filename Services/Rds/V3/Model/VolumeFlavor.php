<?php

namespace HuaweiCloud\SDK\Rds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VolumeFlavor implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VolumeFlavor';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * engineVersion  引擎版本
    * code  磁盘规格码
    * type  磁盘类型
    * size  磁盘大小
    * period  订购周期
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'engineVersion' => 'string',
            'code' => 'string',
            'type' => 'string',
            'size' => 'string',
            'period' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * engineVersion  引擎版本
    * code  磁盘规格码
    * type  磁盘类型
    * size  磁盘大小
    * period  订购周期
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'engineVersion' => null,
        'code' => null,
        'type' => null,
        'size' => null,
        'period' => null
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
    * engineVersion  引擎版本
    * code  磁盘规格码
    * type  磁盘类型
    * size  磁盘大小
    * period  订购周期
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'engineVersion' => 'engine_version',
            'code' => 'code',
            'type' => 'type',
            'size' => 'size',
            'period' => 'period'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * engineVersion  引擎版本
    * code  磁盘规格码
    * type  磁盘类型
    * size  磁盘大小
    * period  订购周期
    *
    * @var string[]
    */
    protected static $setters = [
            'engineVersion' => 'setEngineVersion',
            'code' => 'setCode',
            'type' => 'setType',
            'size' => 'setSize',
            'period' => 'setPeriod'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * engineVersion  引擎版本
    * code  磁盘规格码
    * type  磁盘类型
    * size  磁盘大小
    * period  订购周期
    *
    * @var string[]
    */
    protected static $getters = [
            'engineVersion' => 'getEngineVersion',
            'code' => 'getCode',
            'type' => 'getType',
            'size' => 'getSize',
            'period' => 'getPeriod'
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
        $this->container['engineVersion'] = isset($data['engineVersion']) ? $data['engineVersion'] : null;
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['period'] = isset($data['period']) ? $data['period'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['engineVersion'] === null) {
            $invalidProperties[] = "'engineVersion' can't be null";
        }
        if ($this->container['code'] === null) {
            $invalidProperties[] = "'code' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['period'] === null) {
            $invalidProperties[] = "'period' can't be null";
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
    * Gets engineVersion
    *  引擎版本
    *
    * @return string
    */
    public function getEngineVersion()
    {
        return $this->container['engineVersion'];
    }

    /**
    * Sets engineVersion
    *
    * @param string $engineVersion 引擎版本
    *
    * @return $this
    */
    public function setEngineVersion($engineVersion)
    {
        $this->container['engineVersion'] = $engineVersion;
        return $this;
    }

    /**
    * Gets code
    *  磁盘规格码
    *
    * @return string
    */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
    * Sets code
    *
    * @param string $code 磁盘规格码
    *
    * @return $this
    */
    public function setCode($code)
    {
        $this->container['code'] = $code;
        return $this;
    }

    /**
    * Gets type
    *  磁盘类型
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 磁盘类型
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets size
    *  磁盘大小
    *
    * @return string
    */
    public function getSize()
    {
        return $this->container['size'];
    }

    /**
    * Sets size
    *
    * @param string $size 磁盘大小
    *
    * @return $this
    */
    public function setSize($size)
    {
        $this->container['size'] = $size;
        return $this;
    }

    /**
    * Gets period
    *  订购周期
    *
    * @return string[]
    */
    public function getPeriod()
    {
        return $this->container['period'];
    }

    /**
    * Sets period
    *
    * @param string[] $period 订购周期
    *
    * @return $this
    */
    public function setPeriod($period)
    {
        $this->container['period'] = $period;
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

