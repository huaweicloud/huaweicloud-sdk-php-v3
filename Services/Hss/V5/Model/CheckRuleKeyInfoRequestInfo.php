<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CheckRuleKeyInfoRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CheckRuleKeyInfoRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkName  基线名称
    * checkRuleId  检查项ID
    * standard  基线标准, 类别包含如下：   - cn_standard#等保合规标准   - hw_standard#云安全实践标准
    * fixValues  用户键入的检查项修复参数数组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkName' => 'string',
            'checkRuleId' => 'string',
            'standard' => 'string',
            'fixValues' => '\HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixValuesInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkName  基线名称
    * checkRuleId  检查项ID
    * standard  基线标准, 类别包含如下：   - cn_standard#等保合规标准   - hw_standard#云安全实践标准
    * fixValues  用户键入的检查项修复参数数组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkName' => null,
        'checkRuleId' => null,
        'standard' => null,
        'fixValues' => null
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
    * checkName  基线名称
    * checkRuleId  检查项ID
    * standard  基线标准, 类别包含如下：   - cn_standard#等保合规标准   - hw_standard#云安全实践标准
    * fixValues  用户键入的检查项修复参数数组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkName' => 'check_name',
            'checkRuleId' => 'check_rule_id',
            'standard' => 'standard',
            'fixValues' => 'fix_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkName  基线名称
    * checkRuleId  检查项ID
    * standard  基线标准, 类别包含如下：   - cn_standard#等保合规标准   - hw_standard#云安全实践标准
    * fixValues  用户键入的检查项修复参数数组
    *
    * @var string[]
    */
    protected static $setters = [
            'checkName' => 'setCheckName',
            'checkRuleId' => 'setCheckRuleId',
            'standard' => 'setStandard',
            'fixValues' => 'setFixValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkName  基线名称
    * checkRuleId  检查项ID
    * standard  基线标准, 类别包含如下：   - cn_standard#等保合规标准   - hw_standard#云安全实践标准
    * fixValues  用户键入的检查项修复参数数组
    *
    * @var string[]
    */
    protected static $getters = [
            'checkName' => 'getCheckName',
            'checkRuleId' => 'getCheckRuleId',
            'standard' => 'getStandard',
            'fixValues' => 'getFixValues'
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
        $this->container['checkName'] = isset($data['checkName']) ? $data['checkName'] : null;
        $this->container['checkRuleId'] = isset($data['checkRuleId']) ? $data['checkRuleId'] : null;
        $this->container['standard'] = isset($data['standard']) ? $data['standard'] : null;
        $this->container['fixValues'] = isset($data['fixValues']) ? $data['fixValues'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkName']) && (mb_strlen($this->container['checkName']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) > 64)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 16)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
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
    * Gets checkName
    *  基线名称
    *
    * @return string|null
    */
    public function getCheckName()
    {
        return $this->container['checkName'];
    }

    /**
    * Sets checkName
    *
    * @param string|null $checkName 基线名称
    *
    * @return $this
    */
    public function setCheckName($checkName)
    {
        $this->container['checkName'] = $checkName;
        return $this;
    }

    /**
    * Gets checkRuleId
    *  检查项ID
    *
    * @return string|null
    */
    public function getCheckRuleId()
    {
        return $this->container['checkRuleId'];
    }

    /**
    * Sets checkRuleId
    *
    * @param string|null $checkRuleId 检查项ID
    *
    * @return $this
    */
    public function setCheckRuleId($checkRuleId)
    {
        $this->container['checkRuleId'] = $checkRuleId;
        return $this;
    }

    /**
    * Gets standard
    *  基线标准, 类别包含如下：   - cn_standard#等保合规标准   - hw_standard#云安全实践标准
    *
    * @return string|null
    */
    public function getStandard()
    {
        return $this->container['standard'];
    }

    /**
    * Sets standard
    *
    * @param string|null $standard 基线标准, 类别包含如下：   - cn_standard#等保合规标准   - hw_standard#云安全实践标准
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
        return $this;
    }

    /**
    * Gets fixValues
    *  用户键入的检查项修复参数数组
    *
    * @return \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixValuesInfo[]|null
    */
    public function getFixValues()
    {
        return $this->container['fixValues'];
    }

    /**
    * Sets fixValues
    *
    * @param \HuaweiCloud\SDK\Hss\V5\Model\CheckRuleFixValuesInfo[]|null $fixValues 用户键入的检查项修复参数数组
    *
    * @return $this
    */
    public function setFixValues($fixValues)
    {
        $this->container['fixValues'] = $fixValues;
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

