<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UsageThreshold implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UsageThreshold';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceSpecCode  资源类型
    * sourceResourceSpecCode  原始资源类型
    * threshold  阈值
    * unit  阈值对应的单位,%,MB,GB 如果%，对应的阈值最大为95
    * enable  开启或关闭当前资源类型的告警设置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceSpecCode' => 'string',
            'sourceResourceSpecCode' => 'string',
            'threshold' => 'double',
            'unit' => 'string',
            'enable' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceSpecCode  资源类型
    * sourceResourceSpecCode  原始资源类型
    * threshold  阈值
    * unit  阈值对应的单位,%,MB,GB 如果%，对应的阈值最大为95
    * enable  开启或关闭当前资源类型的告警设置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceSpecCode' => null,
        'sourceResourceSpecCode' => null,
        'threshold' => 'double',
        'unit' => null,
        'enable' => null
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
    * resourceSpecCode  资源类型
    * sourceResourceSpecCode  原始资源类型
    * threshold  阈值
    * unit  阈值对应的单位,%,MB,GB 如果%，对应的阈值最大为95
    * enable  开启或关闭当前资源类型的告警设置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceSpecCode' => 'resource_spec_code',
            'sourceResourceSpecCode' => 'source_resource_spec_code',
            'threshold' => 'threshold',
            'unit' => 'unit',
            'enable' => 'enable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceSpecCode  资源类型
    * sourceResourceSpecCode  原始资源类型
    * threshold  阈值
    * unit  阈值对应的单位,%,MB,GB 如果%，对应的阈值最大为95
    * enable  开启或关闭当前资源类型的告警设置
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceSpecCode' => 'setResourceSpecCode',
            'sourceResourceSpecCode' => 'setSourceResourceSpecCode',
            'threshold' => 'setThreshold',
            'unit' => 'setUnit',
            'enable' => 'setEnable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceSpecCode  资源类型
    * sourceResourceSpecCode  原始资源类型
    * threshold  阈值
    * unit  阈值对应的单位,%,MB,GB 如果%，对应的阈值最大为95
    * enable  开启或关闭当前资源类型的告警设置
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceSpecCode' => 'getResourceSpecCode',
            'sourceResourceSpecCode' => 'getSourceResourceSpecCode',
            'threshold' => 'getThreshold',
            'unit' => 'getUnit',
            'enable' => 'getEnable'
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
    const UNIT_PERCENT = '%';
    const UNIT_MB = 'MB';
    const UNIT_GB = 'GB';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getUnitAllowableValues()
    {
        return [
            self::UNIT_PERCENT,
            self::UNIT_MB,
            self::UNIT_GB,
        ];
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
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['sourceResourceSpecCode'] = isset($data['sourceResourceSpecCode']) ? $data['sourceResourceSpecCode'] : null;
        $this->container['threshold'] = isset($data['threshold']) ? $data['threshold'] : null;
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 128)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceResourceSpecCode']) && (mb_strlen($this->container['sourceResourceSpecCode']) > 32)) {
                $invalidProperties[] = "invalid value for 'sourceResourceSpecCode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['sourceResourceSpecCode']) && (mb_strlen($this->container['sourceResourceSpecCode']) < 6)) {
                $invalidProperties[] = "invalid value for 'sourceResourceSpecCode', the character length must be bigger than or equal to 6.";
            }
        if ($this->container['threshold'] === null) {
            $invalidProperties[] = "'threshold' can't be null";
        }
            if (($this->container['threshold'] > 1E+2)) {
                $invalidProperties[] = "invalid value for 'threshold', must be smaller than or equal to 1E+2.";
            }
            if (($this->container['threshold'] < 0)) {
                $invalidProperties[] = "invalid value for 'threshold', must be bigger than or equal to 0.";
            }
        if ($this->container['unit'] === null) {
            $invalidProperties[] = "'unit' can't be null";
        }
            $allowedValues = $this->getUnitAllowableValues();
                if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if ((mb_strlen($this->container['unit']) > 10)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 10.";
            }
            if ((mb_strlen($this->container['unit']) < 1)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 1.";
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
    * Gets resourceSpecCode
    *  资源类型
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 资源类型
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets sourceResourceSpecCode
    *  原始资源类型
    *
    * @return string|null
    */
    public function getSourceResourceSpecCode()
    {
        return $this->container['sourceResourceSpecCode'];
    }

    /**
    * Sets sourceResourceSpecCode
    *
    * @param string|null $sourceResourceSpecCode 原始资源类型
    *
    * @return $this
    */
    public function setSourceResourceSpecCode($sourceResourceSpecCode)
    {
        $this->container['sourceResourceSpecCode'] = $sourceResourceSpecCode;
        return $this;
    }

    /**
    * Gets threshold
    *  阈值
    *
    * @return double
    */
    public function getThreshold()
    {
        return $this->container['threshold'];
    }

    /**
    * Sets threshold
    *
    * @param double $threshold 阈值
    *
    * @return $this
    */
    public function setThreshold($threshold)
    {
        $this->container['threshold'] = $threshold;
        return $this;
    }

    /**
    * Gets unit
    *  阈值对应的单位,%,MB,GB 如果%，对应的阈值最大为95
    *
    * @return string
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string $unit 阈值对应的单位,%,MB,GB 如果%，对应的阈值最大为95
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets enable
    *  开启或关闭当前资源类型的告警设置
    *
    * @return bool|null
    */
    public function getEnable()
    {
        return $this->container['enable'];
    }

    /**
    * Sets enable
    *
    * @param bool|null $enable 开启或关闭当前资源类型的告警设置
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
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

