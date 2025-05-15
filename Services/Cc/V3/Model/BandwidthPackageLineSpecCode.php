<?php

namespace HuaweiCloud\SDK\Cc\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BandwidthPackageLineSpecCode implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BandwidthPackageLineSpecCode';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * level  带宽包等级。
    * nameCn  实例名称。
    * nameEn  实例名称。
    * specCode  带宽包实例的规格编码。
    * maxBandwidth  最大带宽。
    * minBandwidth  最小带宽。
    * supportBillingModes  支持的计费模式。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'level' => 'string',
            'nameCn' => 'string',
            'nameEn' => 'string',
            'specCode' => 'string',
            'maxBandwidth' => 'int',
            'minBandwidth' => 'int',
            'supportBillingModes' => '\HuaweiCloud\SDK\Cc\V3\Model\BillingModeEnum[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * level  带宽包等级。
    * nameCn  实例名称。
    * nameEn  实例名称。
    * specCode  带宽包实例的规格编码。
    * maxBandwidth  最大带宽。
    * minBandwidth  最小带宽。
    * supportBillingModes  支持的计费模式。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'level' => null,
        'nameCn' => null,
        'nameEn' => null,
        'specCode' => null,
        'maxBandwidth' => 'int32',
        'minBandwidth' => 'int32',
        'supportBillingModes' => null
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
    * level  带宽包等级。
    * nameCn  实例名称。
    * nameEn  实例名称。
    * specCode  带宽包实例的规格编码。
    * maxBandwidth  最大带宽。
    * minBandwidth  最小带宽。
    * supportBillingModes  支持的计费模式。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'level' => 'level',
            'nameCn' => 'name_cn',
            'nameEn' => 'name_en',
            'specCode' => 'spec_code',
            'maxBandwidth' => 'max_bandwidth',
            'minBandwidth' => 'min_bandwidth',
            'supportBillingModes' => 'support_billing_modes'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * level  带宽包等级。
    * nameCn  实例名称。
    * nameEn  实例名称。
    * specCode  带宽包实例的规格编码。
    * maxBandwidth  最大带宽。
    * minBandwidth  最小带宽。
    * supportBillingModes  支持的计费模式。
    *
    * @var string[]
    */
    protected static $setters = [
            'level' => 'setLevel',
            'nameCn' => 'setNameCn',
            'nameEn' => 'setNameEn',
            'specCode' => 'setSpecCode',
            'maxBandwidth' => 'setMaxBandwidth',
            'minBandwidth' => 'setMinBandwidth',
            'supportBillingModes' => 'setSupportBillingModes'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * level  带宽包等级。
    * nameCn  实例名称。
    * nameEn  实例名称。
    * specCode  带宽包实例的规格编码。
    * maxBandwidth  最大带宽。
    * minBandwidth  最小带宽。
    * supportBillingModes  支持的计费模式。
    *
    * @var string[]
    */
    protected static $getters = [
            'level' => 'getLevel',
            'nameCn' => 'getNameCn',
            'nameEn' => 'getNameEn',
            'specCode' => 'getSpecCode',
            'maxBandwidth' => 'getMaxBandwidth',
            'minBandwidth' => 'getMinBandwidth',
            'supportBillingModes' => 'getSupportBillingModes'
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
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['nameCn'] = isset($data['nameCn']) ? $data['nameCn'] : null;
        $this->container['nameEn'] = isset($data['nameEn']) ? $data['nameEn'] : null;
        $this->container['specCode'] = isset($data['specCode']) ? $data['specCode'] : null;
        $this->container['maxBandwidth'] = isset($data['maxBandwidth']) ? $data['maxBandwidth'] : null;
        $this->container['minBandwidth'] = isset($data['minBandwidth']) ? $data['minBandwidth'] : null;
        $this->container['supportBillingModes'] = isset($data['supportBillingModes']) ? $data['supportBillingModes'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) > 64)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['level']) && (mb_strlen($this->container['level']) < 0)) {
                $invalidProperties[] = "invalid value for 'level', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameCn']) && (mb_strlen($this->container['nameCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameCn']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['nameCn'])) {
                $invalidProperties[] = "invalid value for 'nameCn', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['nameEn']) && (mb_strlen($this->container['nameEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'nameEn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['nameEn']) && !preg_match("/^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/", $this->container['nameEn'])) {
                $invalidProperties[] = "invalid value for 'nameEn', must be conform to the pattern /^[\\u4e00-\\u9fa50-9a-zA-Z_.\\-]+$/.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['specCode']) && (mb_strlen($this->container['specCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'specCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['maxBandwidth']) && ($this->container['maxBandwidth'] > 200000)) {
                $invalidProperties[] = "invalid value for 'maxBandwidth', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['maxBandwidth']) && ($this->container['maxBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'maxBandwidth', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['minBandwidth']) && ($this->container['minBandwidth'] > 200000)) {
                $invalidProperties[] = "invalid value for 'minBandwidth', must be smaller than or equal to 200000.";
            }
            if (!is_null($this->container['minBandwidth']) && ($this->container['minBandwidth'] < 0)) {
                $invalidProperties[] = "invalid value for 'minBandwidth', must be bigger than or equal to 0.";
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
    * Gets level
    *  带宽包等级。
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 带宽包等级。
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets nameCn
    *  实例名称。
    *
    * @return string|null
    */
    public function getNameCn()
    {
        return $this->container['nameCn'];
    }

    /**
    * Sets nameCn
    *
    * @param string|null $nameCn 实例名称。
    *
    * @return $this
    */
    public function setNameCn($nameCn)
    {
        $this->container['nameCn'] = $nameCn;
        return $this;
    }

    /**
    * Gets nameEn
    *  实例名称。
    *
    * @return string|null
    */
    public function getNameEn()
    {
        return $this->container['nameEn'];
    }

    /**
    * Sets nameEn
    *
    * @param string|null $nameEn 实例名称。
    *
    * @return $this
    */
    public function setNameEn($nameEn)
    {
        $this->container['nameEn'] = $nameEn;
        return $this;
    }

    /**
    * Gets specCode
    *  带宽包实例的规格编码。
    *
    * @return string|null
    */
    public function getSpecCode()
    {
        return $this->container['specCode'];
    }

    /**
    * Sets specCode
    *
    * @param string|null $specCode 带宽包实例的规格编码。
    *
    * @return $this
    */
    public function setSpecCode($specCode)
    {
        $this->container['specCode'] = $specCode;
        return $this;
    }

    /**
    * Gets maxBandwidth
    *  最大带宽。
    *
    * @return int|null
    */
    public function getMaxBandwidth()
    {
        return $this->container['maxBandwidth'];
    }

    /**
    * Sets maxBandwidth
    *
    * @param int|null $maxBandwidth 最大带宽。
    *
    * @return $this
    */
    public function setMaxBandwidth($maxBandwidth)
    {
        $this->container['maxBandwidth'] = $maxBandwidth;
        return $this;
    }

    /**
    * Gets minBandwidth
    *  最小带宽。
    *
    * @return int|null
    */
    public function getMinBandwidth()
    {
        return $this->container['minBandwidth'];
    }

    /**
    * Sets minBandwidth
    *
    * @param int|null $minBandwidth 最小带宽。
    *
    * @return $this
    */
    public function setMinBandwidth($minBandwidth)
    {
        $this->container['minBandwidth'] = $minBandwidth;
        return $this;
    }

    /**
    * Gets supportBillingModes
    *  支持的计费模式。
    *
    * @return \HuaweiCloud\SDK\Cc\V3\Model\BillingModeEnum[]|null
    */
    public function getSupportBillingModes()
    {
        return $this->container['supportBillingModes'];
    }

    /**
    * Sets supportBillingModes
    *
    * @param \HuaweiCloud\SDK\Cc\V3\Model\BillingModeEnum[]|null $supportBillingModes 支持的计费模式。
    *
    * @return $this
    */
    public function setSupportBillingModes($supportBillingModes)
    {
        $this->container['supportBillingModes'] = $supportBillingModes;
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

