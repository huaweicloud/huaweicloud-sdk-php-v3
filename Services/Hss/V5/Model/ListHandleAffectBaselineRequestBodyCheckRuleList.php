<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHandleAffectBaselineRequestBodyCheckRuleList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHandleAffectBaselineRequestBody_check_rule_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkName  **参数解释** 基线检查的名称 **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * checkRuleId  **参数解释** 检查项id **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 基线检查标准类型 **约束限制** 不涉及 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkName' => 'string',
            'checkRuleId' => 'string',
            'standard' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkName  **参数解释** 基线检查的名称 **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * checkRuleId  **参数解释** 检查项id **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 基线检查标准类型 **约束限制** 不涉及 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkName' => null,
        'checkRuleId' => null,
        'standard' => null
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
    * checkName  **参数解释** 基线检查的名称 **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * checkRuleId  **参数解释** 检查项id **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 基线检查标准类型 **约束限制** 不涉及 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkName' => 'check_name',
            'checkRuleId' => 'check_rule_id',
            'standard' => 'standard'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkName  **参数解释** 基线检查的名称 **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * checkRuleId  **参数解释** 检查项id **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 基线检查标准类型 **约束限制** 不涉及 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'checkName' => 'setCheckName',
            'checkRuleId' => 'setCheckRuleId',
            'standard' => 'setStandard'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkName  **参数解释** 基线检查的名称 **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * checkRuleId  **参数解释** 检查项id **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
    * standard  **参数解释** 基线检查标准类型 **约束限制** 不涉及 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准 **默认取值** 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'checkName' => 'getCheckName',
            'checkRuleId' => 'getCheckRuleId',
            'standard' => 'getStandard'
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
            if (!is_null($this->container['checkName']) && !preg_match("/^.*$/", $this->container['checkName'])) {
                $invalidProperties[] = "invalid value for 'checkName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) > 256)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['checkRuleId']) && (mb_strlen($this->container['checkRuleId']) < 0)) {
                $invalidProperties[] = "invalid value for 'checkRuleId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['checkRuleId']) && !preg_match("/^.*$/", $this->container['checkRuleId'])) {
                $invalidProperties[] = "invalid value for 'checkRuleId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) > 32)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['standard']) && (mb_strlen($this->container['standard']) < 0)) {
                $invalidProperties[] = "invalid value for 'standard', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['standard']) && !preg_match("/^.*$/", $this->container['standard'])) {
                $invalidProperties[] = "invalid value for 'standard', must be conform to the pattern /^.*$/.";
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
    *  **参数解释** 基线检查的名称 **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
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
    * @param string|null $checkName **参数解释** 基线检查的名称 **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
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
    *  **参数解释** 检查项id **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
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
    * @param string|null $checkRuleId **参数解释** 检查项id **约束限制** 不涉及 **取值范围**   字符长度0-256位 **默认取值** 不涉及
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
    *  **参数解释** 基线检查标准类型 **约束限制** 不涉及 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准 **默认取值** 不涉及
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
    * @param string|null $standard **参数解释** 基线检查标准类型 **约束限制** 不涉及 **取值范围**   - cn_standard : 等保合规标准 - hw_standard : 云安全实践标准 - cis_standard : 通用安全标准 **默认取值** 不涉及
    *
    * @return $this
    */
    public function setStandard($standard)
    {
        $this->container['standard'] = $standard;
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

