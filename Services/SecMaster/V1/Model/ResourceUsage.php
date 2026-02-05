<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceUsage implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceUsage';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * unit  使用量单位，OPS 次，MB 流量体积MB，GB 流量体积GB
    * resourceTypeName  资源类型名称
    * sourceResourceSpecCode  源资源规格编码
    * resourceSpecCode  源资源规格编码
    * sourceType  源资源类型编码
    * usedPercent  用量百分比
    * quota  配额总量
    * used  已用量
    * free  剩余量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'unit' => 'string',
            'resourceTypeName' => 'string',
            'sourceResourceSpecCode' => 'string',
            'resourceSpecCode' => 'string',
            'sourceType' => 'string',
            'usedPercent' => 'double',
            'quota' => 'double',
            'used' => 'double',
            'free' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * unit  使用量单位，OPS 次，MB 流量体积MB，GB 流量体积GB
    * resourceTypeName  资源类型名称
    * sourceResourceSpecCode  源资源规格编码
    * resourceSpecCode  源资源规格编码
    * sourceType  源资源类型编码
    * usedPercent  用量百分比
    * quota  配额总量
    * used  已用量
    * free  剩余量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'unit' => null,
        'resourceTypeName' => null,
        'sourceResourceSpecCode' => null,
        'resourceSpecCode' => null,
        'sourceType' => null,
        'usedPercent' => 'double',
        'quota' => 'double',
        'used' => 'double',
        'free' => 'double'
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
    * unit  使用量单位，OPS 次，MB 流量体积MB，GB 流量体积GB
    * resourceTypeName  资源类型名称
    * sourceResourceSpecCode  源资源规格编码
    * resourceSpecCode  源资源规格编码
    * sourceType  源资源类型编码
    * usedPercent  用量百分比
    * quota  配额总量
    * used  已用量
    * free  剩余量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'unit' => 'unit',
            'resourceTypeName' => 'resource_type_name',
            'sourceResourceSpecCode' => 'source_resource_spec_code',
            'resourceSpecCode' => 'resource_spec_code',
            'sourceType' => 'source_type',
            'usedPercent' => 'used_percent',
            'quota' => 'quota',
            'used' => 'used',
            'free' => 'free'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * unit  使用量单位，OPS 次，MB 流量体积MB，GB 流量体积GB
    * resourceTypeName  资源类型名称
    * sourceResourceSpecCode  源资源规格编码
    * resourceSpecCode  源资源规格编码
    * sourceType  源资源类型编码
    * usedPercent  用量百分比
    * quota  配额总量
    * used  已用量
    * free  剩余量
    *
    * @var string[]
    */
    protected static $setters = [
            'unit' => 'setUnit',
            'resourceTypeName' => 'setResourceTypeName',
            'sourceResourceSpecCode' => 'setSourceResourceSpecCode',
            'resourceSpecCode' => 'setResourceSpecCode',
            'sourceType' => 'setSourceType',
            'usedPercent' => 'setUsedPercent',
            'quota' => 'setQuota',
            'used' => 'setUsed',
            'free' => 'setFree'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * unit  使用量单位，OPS 次，MB 流量体积MB，GB 流量体积GB
    * resourceTypeName  资源类型名称
    * sourceResourceSpecCode  源资源规格编码
    * resourceSpecCode  源资源规格编码
    * sourceType  源资源类型编码
    * usedPercent  用量百分比
    * quota  配额总量
    * used  已用量
    * free  剩余量
    *
    * @var string[]
    */
    protected static $getters = [
            'unit' => 'getUnit',
            'resourceTypeName' => 'getResourceTypeName',
            'sourceResourceSpecCode' => 'getSourceResourceSpecCode',
            'resourceSpecCode' => 'getResourceSpecCode',
            'sourceType' => 'getSourceType',
            'usedPercent' => 'getUsedPercent',
            'quota' => 'getQuota',
            'used' => 'getUsed',
            'free' => 'getFree'
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
    const UNIT_OPS = 'OPS';
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
            self::UNIT_OPS,
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
        $this->container['unit'] = isset($data['unit']) ? $data['unit'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['sourceResourceSpecCode'] = isset($data['sourceResourceSpecCode']) ? $data['sourceResourceSpecCode'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['sourceType'] = isset($data['sourceType']) ? $data['sourceType'] : null;
        $this->container['usedPercent'] = isset($data['usedPercent']) ? $data['usedPercent'] : null;
        $this->container['quota'] = isset($data['quota']) ? $data['quota'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
        $this->container['free'] = isset($data['free']) ? $data['free'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getUnitAllowableValues();
                if (!is_null($this->container['unit']) && !in_array($this->container['unit'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'unit', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) > 32)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['unit']) && (mb_strlen($this->container['unit']) < 2)) {
                $invalidProperties[] = "invalid value for 'unit', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['resourceTypeName']) && (mb_strlen($this->container['resourceTypeName']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceTypeName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceTypeName']) && (mb_strlen($this->container['resourceTypeName']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceTypeName', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceResourceSpecCode']) && (mb_strlen($this->container['sourceResourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceResourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceResourceSpecCode']) && (mb_strlen($this->container['sourceResourceSpecCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceResourceSpecCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceSpecCode']) && (mb_strlen($this->container['resourceSpecCode']) < 2)) {
                $invalidProperties[] = "invalid value for 'resourceSpecCode', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['sourceType']) && (mb_strlen($this->container['sourceType']) < 2)) {
                $invalidProperties[] = "invalid value for 'sourceType', the character length must be bigger than or equal to 2.";
            }
            if (!is_null($this->container['usedPercent']) && ($this->container['usedPercent'] > 1)) {
                $invalidProperties[] = "invalid value for 'usedPercent', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['usedPercent']) && ($this->container['usedPercent'] < 0)) {
                $invalidProperties[] = "invalid value for 'usedPercent', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['quota']) && ($this->container['quota'] > 2E+8)) {
                $invalidProperties[] = "invalid value for 'quota', must be smaller than or equal to 2E+8.";
            }
            if (!is_null($this->container['quota']) && ($this->container['quota'] < 0)) {
                $invalidProperties[] = "invalid value for 'quota', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['used']) && ($this->container['used'] > 2E+8)) {
                $invalidProperties[] = "invalid value for 'used', must be smaller than or equal to 2E+8.";
            }
            if (!is_null($this->container['used']) && ($this->container['used'] < 0)) {
                $invalidProperties[] = "invalid value for 'used', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['free']) && ($this->container['free'] > 2E+8)) {
                $invalidProperties[] = "invalid value for 'free', must be smaller than or equal to 2E+8.";
            }
            if (!is_null($this->container['free']) && ($this->container['free'] < 0)) {
                $invalidProperties[] = "invalid value for 'free', must be bigger than or equal to 0.";
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
    * Gets unit
    *  使用量单位，OPS 次，MB 流量体积MB，GB 流量体积GB
    *
    * @return string|null
    */
    public function getUnit()
    {
        return $this->container['unit'];
    }

    /**
    * Sets unit
    *
    * @param string|null $unit 使用量单位，OPS 次，MB 流量体积MB，GB 流量体积GB
    *
    * @return $this
    */
    public function setUnit($unit)
    {
        $this->container['unit'] = $unit;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  资源类型名称
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName 资源类型名称
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets sourceResourceSpecCode
    *  源资源规格编码
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
    * @param string|null $sourceResourceSpecCode 源资源规格编码
    *
    * @return $this
    */
    public function setSourceResourceSpecCode($sourceResourceSpecCode)
    {
        $this->container['sourceResourceSpecCode'] = $sourceResourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceSpecCode
    *  源资源规格编码
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
    * @param string|null $resourceSpecCode 源资源规格编码
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets sourceType
    *  源资源类型编码
    *
    * @return string|null
    */
    public function getSourceType()
    {
        return $this->container['sourceType'];
    }

    /**
    * Sets sourceType
    *
    * @param string|null $sourceType 源资源类型编码
    *
    * @return $this
    */
    public function setSourceType($sourceType)
    {
        $this->container['sourceType'] = $sourceType;
        return $this;
    }

    /**
    * Gets usedPercent
    *  用量百分比
    *
    * @return double|null
    */
    public function getUsedPercent()
    {
        return $this->container['usedPercent'];
    }

    /**
    * Sets usedPercent
    *
    * @param double|null $usedPercent 用量百分比
    *
    * @return $this
    */
    public function setUsedPercent($usedPercent)
    {
        $this->container['usedPercent'] = $usedPercent;
        return $this;
    }

    /**
    * Gets quota
    *  配额总量
    *
    * @return double|null
    */
    public function getQuota()
    {
        return $this->container['quota'];
    }

    /**
    * Sets quota
    *
    * @param double|null $quota 配额总量
    *
    * @return $this
    */
    public function setQuota($quota)
    {
        $this->container['quota'] = $quota;
        return $this;
    }

    /**
    * Gets used
    *  已用量
    *
    * @return double|null
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param double|null $used 已用量
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
        return $this;
    }

    /**
    * Gets free
    *  剩余量
    *
    * @return double|null
    */
    public function getFree()
    {
        return $this->container['free'];
    }

    /**
    * Sets free
    *
    * @param double|null $free 剩余量
    *
    * @return $this
    */
    public function setFree($free)
    {
        $this->container['free'] = $free;
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

