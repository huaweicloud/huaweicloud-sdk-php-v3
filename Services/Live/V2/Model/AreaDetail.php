<?php

namespace HuaweiCloud\SDK\Live\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AreaDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AreaDetail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * area  各个计费大区名称，例如CN
    * summary  时间戳及相应时间的指标数值
    * detail  各个大区下的具体省份、区域、国家的时间戳及相应时间的指标数值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'area' => 'string',
            'summary' => '\HuaweiCloud\SDK\Live\V2\Model\TimeValue[]',
            'detail' => '\HuaweiCloud\SDK\Live\V2\Model\AreaTimeValue[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * area  各个计费大区名称，例如CN
    * summary  时间戳及相应时间的指标数值
    * detail  各个大区下的具体省份、区域、国家的时间戳及相应时间的指标数值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'area' => null,
        'summary' => null,
        'detail' => null
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
    * area  各个计费大区名称，例如CN
    * summary  时间戳及相应时间的指标数值
    * detail  各个大区下的具体省份、区域、国家的时间戳及相应时间的指标数值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'area' => 'area',
            'summary' => 'summary',
            'detail' => 'detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * area  各个计费大区名称，例如CN
    * summary  时间戳及相应时间的指标数值
    * detail  各个大区下的具体省份、区域、国家的时间戳及相应时间的指标数值
    *
    * @var string[]
    */
    protected static $setters = [
            'area' => 'setArea',
            'summary' => 'setSummary',
            'detail' => 'setDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * area  各个计费大区名称，例如CN
    * summary  时间戳及相应时间的指标数值
    * detail  各个大区下的具体省份、区域、国家的时间戳及相应时间的指标数值
    *
    * @var string[]
    */
    protected static $getters = [
            'area' => 'getArea',
            'summary' => 'getSummary',
            'detail' => 'getDetail'
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
        $this->container['area'] = isset($data['area']) ? $data['area'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['detail'] = isset($data['detail']) ? $data['detail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['area'] === null) {
            $invalidProperties[] = "'area' can't be null";
        }
            if ((mb_strlen($this->container['area']) > 64)) {
                $invalidProperties[] = "invalid value for 'area', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['area']) < 1)) {
                $invalidProperties[] = "invalid value for 'area', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['summary'] === null) {
            $invalidProperties[] = "'summary' can't be null";
        }
        if ($this->container['detail'] === null) {
            $invalidProperties[] = "'detail' can't be null";
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
    * Gets area
    *  各个计费大区名称，例如CN
    *
    * @return string
    */
    public function getArea()
    {
        return $this->container['area'];
    }

    /**
    * Sets area
    *
    * @param string $area 各个计费大区名称，例如CN
    *
    * @return $this
    */
    public function setArea($area)
    {
        $this->container['area'] = $area;
        return $this;
    }

    /**
    * Gets summary
    *  时间戳及相应时间的指标数值
    *
    * @return \HuaweiCloud\SDK\Live\V2\Model\TimeValue[]
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\Live\V2\Model\TimeValue[] $summary 时间戳及相应时间的指标数值
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
        return $this;
    }

    /**
    * Gets detail
    *  各个大区下的具体省份、区域、国家的时间戳及相应时间的指标数值
    *
    * @return \HuaweiCloud\SDK\Live\V2\Model\AreaTimeValue[]
    */
    public function getDetail()
    {
        return $this->container['detail'];
    }

    /**
    * Sets detail
    *
    * @param \HuaweiCloud\SDK\Live\V2\Model\AreaTimeValue[] $detail 各个大区下的具体省份、区域、国家的时间戳及相应时间的指标数值
    *
    * @return $this
    */
    public function setDetail($detail)
    {
        $this->container['detail'] = $detail;
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

