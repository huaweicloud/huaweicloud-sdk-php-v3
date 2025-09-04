<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PointScalingDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PointScalingDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ratio  缩放的倍率
    * base  基准值
    * accuracy  缩放后结果的精度，精确到小数点后几位,-1表示全部保留，0表示只保留整数位
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ratio' => 'double',
            'base' => 'double',
            'accuracy' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ratio  缩放的倍率
    * base  基准值
    * accuracy  缩放后结果的精度，精确到小数点后几位,-1表示全部保留，0表示只保留整数位
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ratio' => 'double',
        'base' => 'double',
        'accuracy' => 'int32'
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
    * ratio  缩放的倍率
    * base  基准值
    * accuracy  缩放后结果的精度，精确到小数点后几位,-1表示全部保留，0表示只保留整数位
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ratio' => 'ratio',
            'base' => 'base',
            'accuracy' => 'accuracy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ratio  缩放的倍率
    * base  基准值
    * accuracy  缩放后结果的精度，精确到小数点后几位,-1表示全部保留，0表示只保留整数位
    *
    * @var string[]
    */
    protected static $setters = [
            'ratio' => 'setRatio',
            'base' => 'setBase',
            'accuracy' => 'setAccuracy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ratio  缩放的倍率
    * base  基准值
    * accuracy  缩放后结果的精度，精确到小数点后几位,-1表示全部保留，0表示只保留整数位
    *
    * @var string[]
    */
    protected static $getters = [
            'ratio' => 'getRatio',
            'base' => 'getBase',
            'accuracy' => 'getAccuracy'
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
        $this->container['base'] = isset($data['base']) ? $data['base'] : null;
        $this->container['accuracy'] = isset($data['accuracy']) ? $data['accuracy'] : null;
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
            if (($this->container['ratio'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'ratio', must be smaller than or equal to 1E+4.";
            }
            if (($this->container['ratio'] < -1E+4)) {
                $invalidProperties[] = "invalid value for 'ratio', must be bigger than or equal to -1E+4.";
            }
        if ($this->container['base'] === null) {
            $invalidProperties[] = "'base' can't be null";
        }
            if (($this->container['base'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'base', must be smaller than or equal to 1E+4.";
            }
            if (($this->container['base'] < -1E+4)) {
                $invalidProperties[] = "invalid value for 'base', must be bigger than or equal to -1E+4.";
            }
            if (!is_null($this->container['accuracy']) && ($this->container['accuracy'] > 8)) {
                $invalidProperties[] = "invalid value for 'accuracy', must be smaller than or equal to 8.";
            }
            if (!is_null($this->container['accuracy']) && ($this->container['accuracy'] < -1)) {
                $invalidProperties[] = "invalid value for 'accuracy', must be bigger than or equal to -1.";
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
    *  缩放的倍率
    *
    * @return double
    */
    public function getRatio()
    {
        return $this->container['ratio'];
    }

    /**
    * Sets ratio
    *
    * @param double $ratio 缩放的倍率
    *
    * @return $this
    */
    public function setRatio($ratio)
    {
        $this->container['ratio'] = $ratio;
        return $this;
    }

    /**
    * Gets base
    *  基准值
    *
    * @return double
    */
    public function getBase()
    {
        return $this->container['base'];
    }

    /**
    * Sets base
    *
    * @param double $base 基准值
    *
    * @return $this
    */
    public function setBase($base)
    {
        $this->container['base'] = $base;
        return $this;
    }

    /**
    * Gets accuracy
    *  缩放后结果的精度，精确到小数点后几位,-1表示全部保留，0表示只保留整数位
    *
    * @return int|null
    */
    public function getAccuracy()
    {
        return $this->container['accuracy'];
    }

    /**
    * Sets accuracy
    *
    * @param int|null $accuracy 缩放后结果的精度，精确到小数点后几位,-1表示全部保留，0表示只保留整数位
    *
    * @return $this
    */
    public function setAccuracy($accuracy)
    {
        $this->container['accuracy'] = $accuracy;
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

