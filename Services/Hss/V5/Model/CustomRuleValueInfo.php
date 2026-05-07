<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomRuleValueInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomRuleValueInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ruleType  **参数解释**： 规则类型 **约束限制**： 必填 **取值范围**： - black_hash：黑hash  **默认取值**： 不涉及
    * hashType  **参数解释**： hash类型 **约束限制**： 必填 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum  **默认取值**： 不涉及
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 必填 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警  **默认取值**： 不涉及
    * ruleValues  **参数解释**： 规则集列表 **约束限制**: 必填 **取值范围**: 1-1000个规则值 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ruleType' => 'string',
            'hashType' => 'string',
            'autoBlock' => 'int',
            'ruleValues' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ruleType  **参数解释**： 规则类型 **约束限制**： 必填 **取值范围**： - black_hash：黑hash  **默认取值**： 不涉及
    * hashType  **参数解释**： hash类型 **约束限制**： 必填 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum  **默认取值**： 不涉及
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 必填 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警  **默认取值**： 不涉及
    * ruleValues  **参数解释**： 规则集列表 **约束限制**: 必填 **取值范围**: 1-1000个规则值 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ruleType' => null,
        'hashType' => null,
        'autoBlock' => 'int8',
        'ruleValues' => null
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
    * ruleType  **参数解释**： 规则类型 **约束限制**： 必填 **取值范围**： - black_hash：黑hash  **默认取值**： 不涉及
    * hashType  **参数解释**： hash类型 **约束限制**： 必填 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum  **默认取值**： 不涉及
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 必填 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警  **默认取值**： 不涉及
    * ruleValues  **参数解释**： 规则集列表 **约束限制**: 必填 **取值范围**: 1-1000个规则值 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ruleType' => 'rule_type',
            'hashType' => 'hash_type',
            'autoBlock' => 'auto_block',
            'ruleValues' => 'rule_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ruleType  **参数解释**： 规则类型 **约束限制**： 必填 **取值范围**： - black_hash：黑hash  **默认取值**： 不涉及
    * hashType  **参数解释**： hash类型 **约束限制**： 必填 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum  **默认取值**： 不涉及
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 必填 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警  **默认取值**： 不涉及
    * ruleValues  **参数解释**： 规则集列表 **约束限制**: 必填 **取值范围**: 1-1000个规则值 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'ruleType' => 'setRuleType',
            'hashType' => 'setHashType',
            'autoBlock' => 'setAutoBlock',
            'ruleValues' => 'setRuleValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ruleType  **参数解释**： 规则类型 **约束限制**： 必填 **取值范围**： - black_hash：黑hash  **默认取值**： 不涉及
    * hashType  **参数解释**： hash类型 **约束限制**： 必填 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum  **默认取值**： 不涉及
    * autoBlock  **参数解释**： 是否自动阻断告警 **约束限制**： 必填 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警  **默认取值**： 不涉及
    * ruleValues  **参数解释**： 规则集列表 **约束限制**: 必填 **取值范围**: 1-1000个规则值 **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'ruleType' => 'getRuleType',
            'hashType' => 'getHashType',
            'autoBlock' => 'getAutoBlock',
            'ruleValues' => 'getRuleValues'
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
        $this->container['ruleType'] = isset($data['ruleType']) ? $data['ruleType'] : null;
        $this->container['hashType'] = isset($data['hashType']) ? $data['hashType'] : null;
        $this->container['autoBlock'] = isset($data['autoBlock']) ? $data['autoBlock'] : null;
        $this->container['ruleValues'] = isset($data['ruleValues']) ? $data['ruleValues'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ruleType'] === null) {
            $invalidProperties[] = "'ruleType' can't be null";
        }
            if ((mb_strlen($this->container['ruleType']) > 64)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['ruleType']) < 1)) {
                $invalidProperties[] = "invalid value for 'ruleType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['hashType'] === null) {
            $invalidProperties[] = "'hashType' can't be null";
        }
            if ((mb_strlen($this->container['hashType']) > 15)) {
                $invalidProperties[] = "invalid value for 'hashType', the character length must be smaller than or equal to 15.";
            }
            if ((mb_strlen($this->container['hashType']) < 1)) {
                $invalidProperties[] = "invalid value for 'hashType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['autoBlock'] === null) {
            $invalidProperties[] = "'autoBlock' can't be null";
        }
        if ($this->container['ruleValues'] === null) {
            $invalidProperties[] = "'ruleValues' can't be null";
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
    * Gets ruleType
    *  **参数解释**： 规则类型 **约束限制**： 必填 **取值范围**： - black_hash：黑hash  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getRuleType()
    {
        return $this->container['ruleType'];
    }

    /**
    * Sets ruleType
    *
    * @param string $ruleType **参数解释**： 规则类型 **约束限制**： 必填 **取值范围**： - black_hash：黑hash  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setRuleType($ruleType)
    {
        $this->container['ruleType'] = $ruleType;
        return $this;
    }

    /**
    * Gets hashType
    *  **参数解释**： hash类型 **约束限制**： 必填 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum  **默认取值**： 不涉及
    *
    * @return string
    */
    public function getHashType()
    {
        return $this->container['hashType'];
    }

    /**
    * Sets hashType
    *
    * @param string $hashType **参数解释**： hash类型 **约束限制**： 必填 **取值范围**： - SHA-256：sha256sum - MD5：md5sum - SHA-1：sha1sum  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHashType($hashType)
    {
        $this->container['hashType'] = $hashType;
        return $this;
    }

    /**
    * Gets autoBlock
    *  **参数解释**： 是否自动阻断告警 **约束限制**： 必填 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警  **默认取值**： 不涉及
    *
    * @return int
    */
    public function getAutoBlock()
    {
        return $this->container['autoBlock'];
    }

    /**
    * Sets autoBlock
    *
    * @param int $autoBlock **参数解释**： 是否自动阻断告警 **约束限制**： 必填 **取值范围**： - 0：不自动阻断告警 - 1：自动阻断告警  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAutoBlock($autoBlock)
    {
        $this->container['autoBlock'] = $autoBlock;
        return $this;
    }

    /**
    * Gets ruleValues
    *  **参数解释**： 规则集列表 **约束限制**: 必填 **取值范围**: 1-1000个规则值 **默认取值**: 不涉及
    *
    * @return string[]
    */
    public function getRuleValues()
    {
        return $this->container['ruleValues'];
    }

    /**
    * Sets ruleValues
    *
    * @param string[] $ruleValues **参数解释**： 规则集列表 **约束限制**: 必填 **取值范围**: 1-1000个规则值 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRuleValues($ruleValues)
    {
        $this->container['ruleValues'] = $ruleValues;
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

