<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatUsageInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatUsageInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * statTime  统计时间点，格式为YYYY-MM-DDTHH:MM:SSZ，UTC时间。
    * guaranteedBandWidth  保底带宽。  说明： 该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * usage  用量。
    * measureId  单位，您可以调用查询度量单位列表接口获取。带宽和用量使用相同的计量单位。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'statTime' => 'string',
            'guaranteedBandWidth' => 'string',
            'usage' => 'string',
            'measureId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * statTime  统计时间点，格式为YYYY-MM-DDTHH:MM:SSZ，UTC时间。
    * guaranteedBandWidth  保底带宽。  说明： 该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * usage  用量。
    * measureId  单位，您可以调用查询度量单位列表接口获取。带宽和用量使用相同的计量单位。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'statTime' => null,
        'guaranteedBandWidth' => null,
        'usage' => null,
        'measureId' => 'int32'
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
    * statTime  统计时间点，格式为YYYY-MM-DDTHH:MM:SSZ，UTC时间。
    * guaranteedBandWidth  保底带宽。  说明： 该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * usage  用量。
    * measureId  单位，您可以调用查询度量单位列表接口获取。带宽和用量使用相同的计量单位。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'statTime' => 'stat_time',
            'guaranteedBandWidth' => 'guaranteed_band_width',
            'usage' => 'usage',
            'measureId' => 'measure_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * statTime  统计时间点，格式为YYYY-MM-DDTHH:MM:SSZ，UTC时间。
    * guaranteedBandWidth  保底带宽。  说明： 该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * usage  用量。
    * measureId  单位，您可以调用查询度量单位列表接口获取。带宽和用量使用相同的计量单位。
    *
    * @var string[]
    */
    protected static $setters = [
            'statTime' => 'setStatTime',
            'guaranteedBandWidth' => 'setGuaranteedBandWidth',
            'usage' => 'setUsage',
            'measureId' => 'setMeasureId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * statTime  统计时间点，格式为YYYY-MM-DDTHH:MM:SSZ，UTC时间。
    * guaranteedBandWidth  保底带宽。  说明： 该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    * usage  用量。
    * measureId  单位，您可以调用查询度量单位列表接口获取。带宽和用量使用相同的计量单位。
    *
    * @var string[]
    */
    protected static $getters = [
            'statTime' => 'getStatTime',
            'guaranteedBandWidth' => 'getGuaranteedBandWidth',
            'usage' => 'getUsage',
            'measureId' => 'getMeasureId'
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
        $this->container['statTime'] = isset($data['statTime']) ? $data['statTime'] : null;
        $this->container['guaranteedBandWidth'] = isset($data['guaranteedBandWidth']) ? $data['guaranteedBandWidth'] : null;
        $this->container['usage'] = isset($data['usage']) ? $data['usage'] : null;
        $this->container['measureId'] = isset($data['measureId']) ? $data['measureId'] : null;
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
    * Gets statTime
    *  统计时间点，格式为YYYY-MM-DDTHH:MM:SSZ，UTC时间。
    *
    * @return string|null
    */
    public function getStatTime()
    {
        return $this->container['statTime'];
    }

    /**
    * Sets statTime
    *
    * @param string|null $statTime 统计时间点，格式为YYYY-MM-DDTHH:MM:SSZ，UTC时间。
    *
    * @return $this
    */
    public function setStatTime($statTime)
    {
        $this->container['statTime'] = $statTime;
        return $this;
    }

    /**
    * Gets guaranteedBandWidth
    *  保底带宽。  说明： 该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    *
    * @return string|null
    */
    public function getGuaranteedBandWidth()
    {
        return $this->container['guaranteedBandWidth'];
    }

    /**
    * Sets guaranteedBandWidth
    *
    * @param string|null $guaranteedBandWidth 保底带宽。  说明： 该字段为预留值，当前始终为空；当场景为95增强时才返回数值。
    *
    * @return $this
    */
    public function setGuaranteedBandWidth($guaranteedBandWidth)
    {
        $this->container['guaranteedBandWidth'] = $guaranteedBandWidth;
        return $this;
    }

    /**
    * Gets usage
    *  用量。
    *
    * @return string|null
    */
    public function getUsage()
    {
        return $this->container['usage'];
    }

    /**
    * Sets usage
    *
    * @param string|null $usage 用量。
    *
    * @return $this
    */
    public function setUsage($usage)
    {
        $this->container['usage'] = $usage;
        return $this;
    }

    /**
    * Gets measureId
    *  单位，您可以调用查询度量单位列表接口获取。带宽和用量使用相同的计量单位。
    *
    * @return int|null
    */
    public function getMeasureId()
    {
        return $this->container['measureId'];
    }

    /**
    * Sets measureId
    *
    * @param int|null $measureId 单位，您可以调用查询度量单位列表接口获取。带宽和用量使用相同的计量单位。
    *
    * @return $this
    */
    public function setMeasureId($measureId)
    {
        $this->container['measureId'] = $measureId;
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

