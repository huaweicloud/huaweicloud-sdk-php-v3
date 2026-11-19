<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AiAgentPolicy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AiAgentPolicy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyGroupEnabled  **参数解释**: 策略组是否启用 **取值范围**: - true：已启用 - false：未启用
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'policyGroupName' => 'string',
            'policyGroupId' => 'string',
            'policyGroupType' => 'int',
            'policyGroupEnabled' => 'bool',
            'isDefault' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyGroupEnabled  **参数解释**: 策略组是否启用 **取值范围**: - true：已启用 - false：未启用
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'policyGroupName' => null,
        'policyGroupId' => null,
        'policyGroupType' => 'int32',
        'policyGroupEnabled' => null,
        'isDefault' => null
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
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyGroupEnabled  **参数解释**: 策略组是否启用 **取值范围**: - true：已启用 - false：未启用
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'policyGroupName' => 'policy_group_name',
            'policyGroupId' => 'policy_group_id',
            'policyGroupType' => 'policy_group_type',
            'policyGroupEnabled' => 'policy_group_enabled',
            'isDefault' => 'is_default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyGroupEnabled  **参数解释**: 策略组是否启用 **取值范围**: - true：已启用 - false：未启用
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @var string[]
    */
    protected static $setters = [
            'policyGroupName' => 'setPolicyGroupName',
            'policyGroupId' => 'setPolicyGroupId',
            'policyGroupType' => 'setPolicyGroupType',
            'policyGroupEnabled' => 'setPolicyGroupEnabled',
            'isDefault' => 'setIsDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * policyGroupName  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    * policyGroupId  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    * policyGroupType  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    * policyGroupEnabled  **参数解释**: 策略组是否启用 **取值范围**: - true：已启用 - false：未启用
    * isDefault  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @var string[]
    */
    protected static $getters = [
            'policyGroupName' => 'getPolicyGroupName',
            'policyGroupId' => 'getPolicyGroupId',
            'policyGroupType' => 'getPolicyGroupType',
            'policyGroupEnabled' => 'getPolicyGroupEnabled',
            'isDefault' => 'getIsDefault'
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
        $this->container['policyGroupName'] = isset($data['policyGroupName']) ? $data['policyGroupName'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['policyGroupType'] = isset($data['policyGroupType']) ? $data['policyGroupType'] : null;
        $this->container['policyGroupEnabled'] = isset($data['policyGroupEnabled']) ? $data['policyGroupEnabled'] : null;
        $this->container['isDefault'] = isset($data['isDefault']) ? $data['isDefault'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) > 20)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be bigger than or equal to 1.";
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
    * Gets policyGroupName
    *  **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    *
    * @return string|null
    */
    public function getPolicyGroupName()
    {
        return $this->container['policyGroupName'];
    }

    /**
    * Sets policyGroupName
    *
    * @param string|null $policyGroupName **参数解释**: 策略组名称 **取值范围**: 字符长度1-128位
    *
    * @return $this
    */
    public function setPolicyGroupName($policyGroupName)
    {
        $this->container['policyGroupName'] = $policyGroupName;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    *
    * @return string|null
    */
    public function getPolicyGroupId()
    {
        return $this->container['policyGroupId'];
    }

    /**
    * Sets policyGroupId
    *
    * @param string|null $policyGroupId **参数解释**： 策略组ID **取值范围**： 字符长度1-20位
    *
    * @return $this
    */
    public function setPolicyGroupId($policyGroupId)
    {
        $this->container['policyGroupId'] = $policyGroupId;
        return $this;
    }

    /**
    * Gets policyGroupType
    *  **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    *
    * @return int|null
    */
    public function getPolicyGroupType()
    {
        return $this->container['policyGroupType'];
    }

    /**
    * Sets policyGroupType
    *
    * @param int|null $policyGroupType **参数解释**： 策略组类型 **取值范围**： - 0：Agent运行时防护-OfficeAce - 1：Agent行为轨迹检测-OfficeAce - 2：Agent角色限定 - 3：Agent运行时防护-AgentArts - 4：Agent行为轨迹检测-AgentArts - 5：Agent运行时防护-OpenClaw - 6：Agent运行时防护-其他三方Claw
    *
    * @return $this
    */
    public function setPolicyGroupType($policyGroupType)
    {
        $this->container['policyGroupType'] = $policyGroupType;
        return $this;
    }

    /**
    * Gets policyGroupEnabled
    *  **参数解释**: 策略组是否启用 **取值范围**: - true：已启用 - false：未启用
    *
    * @return bool|null
    */
    public function getPolicyGroupEnabled()
    {
        return $this->container['policyGroupEnabled'];
    }

    /**
    * Sets policyGroupEnabled
    *
    * @param bool|null $policyGroupEnabled **参数解释**: 策略组是否启用 **取值范围**: - true：已启用 - false：未启用
    *
    * @return $this
    */
    public function setPolicyGroupEnabled($policyGroupEnabled)
    {
        $this->container['policyGroupEnabled'] = $policyGroupEnabled;
        return $this;
    }

    /**
    * Gets isDefault
    *  **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @return bool|null
    */
    public function getIsDefault()
    {
        return $this->container['isDefault'];
    }

    /**
    * Sets isDefault
    *
    * @param bool|null $isDefault **参数解释**: 是否是默认策略 **取值范围**: - false：否 - true：是
    *
    * @return $this
    */
    public function setIsDefault($isDefault)
    {
        $this->container['isDefault'] = $isDefault;
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

