<?php

namespace HuaweiCloud\SDK\Dbss\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MaskRuleRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MaskRuleRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maskRegex  匹配正则
    * maskValue  脱敏值
    * ruleName  隐私数据保护规则名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maskRegex' => 'string',
            'maskValue' => 'string',
            'ruleName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maskRegex  匹配正则
    * maskValue  脱敏值
    * ruleName  隐私数据保护规则名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maskRegex' => null,
        'maskValue' => null,
        'ruleName' => null
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
    * maskRegex  匹配正则
    * maskValue  脱敏值
    * ruleName  隐私数据保护规则名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maskRegex' => 'mask_regex',
            'maskValue' => 'mask_value',
            'ruleName' => 'rule_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maskRegex  匹配正则
    * maskValue  脱敏值
    * ruleName  隐私数据保护规则名称
    *
    * @var string[]
    */
    protected static $setters = [
            'maskRegex' => 'setMaskRegex',
            'maskValue' => 'setMaskValue',
            'ruleName' => 'setRuleName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maskRegex  匹配正则
    * maskValue  脱敏值
    * ruleName  隐私数据保护规则名称
    *
    * @var string[]
    */
    protected static $getters = [
            'maskRegex' => 'getMaskRegex',
            'maskValue' => 'getMaskValue',
            'ruleName' => 'getRuleName'
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
        $this->container['maskRegex'] = isset($data['maskRegex']) ? $data['maskRegex'] : null;
        $this->container['maskValue'] = isset($data['maskValue']) ? $data['maskValue'] : null;
        $this->container['ruleName'] = isset($data['ruleName']) ? $data['ruleName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['maskRegex'] === null) {
            $invalidProperties[] = "'maskRegex' can't be null";
        }
            if ((mb_strlen($this->container['maskRegex']) > 1024)) {
                $invalidProperties[] = "invalid value for 'maskRegex', the character length must be smaller than or equal to 1024.";
            }
        if ($this->container['maskValue'] === null) {
            $invalidProperties[] = "'maskValue' can't be null";
        }
            if ((mb_strlen($this->container['maskValue']) > 256)) {
                $invalidProperties[] = "invalid value for 'maskValue', the character length must be smaller than or equal to 256.";
            }
        if ($this->container['ruleName'] === null) {
            $invalidProperties[] = "'ruleName' can't be null";
        }
            if ((mb_strlen($this->container['ruleName']) > 256)) {
                $invalidProperties[] = "invalid value for 'ruleName', the character length must be smaller than or equal to 256.";
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
    * Gets maskRegex
    *  匹配正则
    *
    * @return string
    */
    public function getMaskRegex()
    {
        return $this->container['maskRegex'];
    }

    /**
    * Sets maskRegex
    *
    * @param string $maskRegex 匹配正则
    *
    * @return $this
    */
    public function setMaskRegex($maskRegex)
    {
        $this->container['maskRegex'] = $maskRegex;
        return $this;
    }

    /**
    * Gets maskValue
    *  脱敏值
    *
    * @return string
    */
    public function getMaskValue()
    {
        return $this->container['maskValue'];
    }

    /**
    * Sets maskValue
    *
    * @param string $maskValue 脱敏值
    *
    * @return $this
    */
    public function setMaskValue($maskValue)
    {
        $this->container['maskValue'] = $maskValue;
        return $this;
    }

    /**
    * Gets ruleName
    *  隐私数据保护规则名称
    *
    * @return string
    */
    public function getRuleName()
    {
        return $this->container['ruleName'];
    }

    /**
    * Sets ruleName
    *
    * @param string $ruleName 隐私数据保护规则名称
    *
    * @return $this
    */
    public function setRuleName($ruleName)
    {
        $this->container['ruleName'] = $ruleName;
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

