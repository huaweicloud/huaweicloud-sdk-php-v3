<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ChangePolicyGroupRequestInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ChangePolicyGroupRequestInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * groupId  **参数解释**: 需要修改的策略组ID **约束限制**: 需要使用 ListPolicyGroup 接口查询策略组ID，在 ListPolicyGroup 接口的响应体中返回的 group_id 是可以被修改的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - high_detection: 高检出模式。 - equalization: 均衡模式。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'groupId' => 'string',
            'protectMode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * groupId  **参数解释**: 需要修改的策略组ID **约束限制**: 需要使用 ListPolicyGroup 接口查询策略组ID，在 ListPolicyGroup 接口的响应体中返回的 group_id 是可以被修改的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - high_detection: 高检出模式。 - equalization: 均衡模式。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'groupId' => null,
        'protectMode' => null
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
    * groupId  **参数解释**: 需要修改的策略组ID **约束限制**: 需要使用 ListPolicyGroup 接口查询策略组ID，在 ListPolicyGroup 接口的响应体中返回的 group_id 是可以被修改的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - high_detection: 高检出模式。 - equalization: 均衡模式。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'groupId' => 'group_id',
            'protectMode' => 'protect_mode'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * groupId  **参数解释**: 需要修改的策略组ID **约束限制**: 需要使用 ListPolicyGroup 接口查询策略组ID，在 ListPolicyGroup 接口的响应体中返回的 group_id 是可以被修改的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - high_detection: 高检出模式。 - equalization: 均衡模式。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'groupId' => 'setGroupId',
            'protectMode' => 'setProtectMode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * groupId  **参数解释**: 需要修改的策略组ID **约束限制**: 需要使用 ListPolicyGroup 接口查询策略组ID，在 ListPolicyGroup 接口的响应体中返回的 group_id 是可以被修改的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    * protectMode  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - high_detection: 高检出模式。 - equalization: 均衡模式。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'groupId' => 'getGroupId',
            'protectMode' => 'getProtectMode'
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
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['protectMode'] = isset($data['protectMode']) ? $data['protectMode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['groupId'] === null) {
            $invalidProperties[] = "'groupId' can't be null";
        }
            if ((mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['groupId']) < 36)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 36.";
            }
            if (!preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['protectMode']) && (mb_strlen($this->container['protectMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'protectMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['protectMode']) && (mb_strlen($this->container['protectMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectMode']) && !preg_match("/^high_detection|equalization$/", $this->container['protectMode'])) {
                $invalidProperties[] = "invalid value for 'protectMode', must be conform to the pattern /^high_detection|equalization$/.";
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
    * Gets groupId
    *  **参数解释**: 需要修改的策略组ID **约束限制**: 需要使用 ListPolicyGroup 接口查询策略组ID，在 ListPolicyGroup 接口的响应体中返回的 group_id 是可以被修改的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @return string
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string $groupId **参数解释**: 需要修改的策略组ID **约束限制**: 需要使用 ListPolicyGroup 接口查询策略组ID，在 ListPolicyGroup 接口的响应体中返回的 group_id 是可以被修改的策略组ID **取值范围**: 字符长度36-64 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets protectMode
    *  **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - high_detection: 高检出模式。 - equalization: 均衡模式。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getProtectMode()
    {
        return $this->container['protectMode'];
    }

    /**
    * Sets protectMode
    *
    * @param string|null $protectMode **参数解释**: 防护模式 **约束限制**: 不涉及 **取值范围**: - high_detection: 高检出模式。 - equalization: 均衡模式。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectMode($protectMode)
    {
        $this->container['protectMode'] = $protectMode;
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

