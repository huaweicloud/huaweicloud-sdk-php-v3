<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProtectedBranchProtectedActionBodyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProtectedBranchProtectedActionBodyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enable  **参数解释：** 是否启用。 **约束限制：** 不涉及。 **取值范围：** - true，开启规则限制 - false，关闭规则限制 **默认取值：** 不涉及。
    * userIds  **参数解释：** 用户ID列表。 **约束限制：** 不涉及。 **取值范围：** Integer **默认取值：** 不涉及。
    * userTeamIds  **参数解释：** 成员组ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * relatedRoleIds  **参数解释：** 关联角色ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * action  **参数解释：** 事件名称。 **约束限制：** action中必传此字段。 **取值范围：** - push，推送 。 - merge，合并 。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enable' => 'bool',
            'userIds' => 'object[]',
            'userTeamIds' => 'int[]',
            'relatedRoleIds' => 'string[]',
            'action' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enable  **参数解释：** 是否启用。 **约束限制：** 不涉及。 **取值范围：** - true，开启规则限制 - false，关闭规则限制 **默认取值：** 不涉及。
    * userIds  **参数解释：** 用户ID列表。 **约束限制：** 不涉及。 **取值范围：** Integer **默认取值：** 不涉及。
    * userTeamIds  **参数解释：** 成员组ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * relatedRoleIds  **参数解释：** 关联角色ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * action  **参数解释：** 事件名称。 **约束限制：** action中必传此字段。 **取值范围：** - push，推送 。 - merge，合并 。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enable' => null,
        'userIds' => 'int32',
        'userTeamIds' => 'int32',
        'relatedRoleIds' => null,
        'action' => null
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
    * enable  **参数解释：** 是否启用。 **约束限制：** 不涉及。 **取值范围：** - true，开启规则限制 - false，关闭规则限制 **默认取值：** 不涉及。
    * userIds  **参数解释：** 用户ID列表。 **约束限制：** 不涉及。 **取值范围：** Integer **默认取值：** 不涉及。
    * userTeamIds  **参数解释：** 成员组ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * relatedRoleIds  **参数解释：** 关联角色ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * action  **参数解释：** 事件名称。 **约束限制：** action中必传此字段。 **取值范围：** - push，推送 。 - merge，合并 。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enable' => 'enable',
            'userIds' => 'user_ids',
            'userTeamIds' => 'user_team_ids',
            'relatedRoleIds' => 'related_role_ids',
            'action' => 'action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enable  **参数解释：** 是否启用。 **约束限制：** 不涉及。 **取值范围：** - true，开启规则限制 - false，关闭规则限制 **默认取值：** 不涉及。
    * userIds  **参数解释：** 用户ID列表。 **约束限制：** 不涉及。 **取值范围：** Integer **默认取值：** 不涉及。
    * userTeamIds  **参数解释：** 成员组ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * relatedRoleIds  **参数解释：** 关联角色ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * action  **参数解释：** 事件名称。 **约束限制：** action中必传此字段。 **取值范围：** - push，推送 。 - merge，合并 。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'enable' => 'setEnable',
            'userIds' => 'setUserIds',
            'userTeamIds' => 'setUserTeamIds',
            'relatedRoleIds' => 'setRelatedRoleIds',
            'action' => 'setAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enable  **参数解释：** 是否启用。 **约束限制：** 不涉及。 **取值范围：** - true，开启规则限制 - false，关闭规则限制 **默认取值：** 不涉及。
    * userIds  **参数解释：** 用户ID列表。 **约束限制：** 不涉及。 **取值范围：** Integer **默认取值：** 不涉及。
    * userTeamIds  **参数解释：** 成员组ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * relatedRoleIds  **参数解释：** 关联角色ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    * action  **参数解释：** 事件名称。 **约束限制：** action中必传此字段。 **取值范围：** - push，推送 。 - merge，合并 。 **默认取值：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'enable' => 'getEnable',
            'userIds' => 'getUserIds',
            'userTeamIds' => 'getUserTeamIds',
            'relatedRoleIds' => 'getRelatedRoleIds',
            'action' => 'getAction'
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
    const ACTION_PUSH = 'push';
    const ACTION_MERGE = 'merge';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_PUSH,
            self::ACTION_MERGE,
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
        $this->container['enable'] = isset($data['enable']) ? $data['enable'] : null;
        $this->container['userIds'] = isset($data['userIds']) ? $data['userIds'] : null;
        $this->container['userTeamIds'] = isset($data['userTeamIds']) ? $data['userTeamIds'] : null;
        $this->container['relatedRoleIds'] = isset($data['relatedRoleIds']) ? $data['relatedRoleIds'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getActionAllowableValues();
                if (!is_null($this->container['action']) && !in_array($this->container['action'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'action', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets enable
    *  **参数解释：** 是否启用。 **约束限制：** 不涉及。 **取值范围：** - true，开启规则限制 - false，关闭规则限制 **默认取值：** 不涉及。
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
    * @param bool|null $enable **参数解释：** 是否启用。 **约束限制：** 不涉及。 **取值范围：** - true，开启规则限制 - false，关闭规则限制 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setEnable($enable)
    {
        $this->container['enable'] = $enable;
        return $this;
    }

    /**
    * Gets userIds
    *  **参数解释：** 用户ID列表。 **约束限制：** 不涉及。 **取值范围：** Integer **默认取值：** 不涉及。
    *
    * @return object[]|null
    */
    public function getUserIds()
    {
        return $this->container['userIds'];
    }

    /**
    * Sets userIds
    *
    * @param object[]|null $userIds **参数解释：** 用户ID列表。 **约束限制：** 不涉及。 **取值范围：** Integer **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUserIds($userIds)
    {
        $this->container['userIds'] = $userIds;
        return $this;
    }

    /**
    * Gets userTeamIds
    *  **参数解释：** 成员组ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return int[]|null
    */
    public function getUserTeamIds()
    {
        return $this->container['userTeamIds'];
    }

    /**
    * Sets userTeamIds
    *
    * @param int[]|null $userTeamIds **参数解释：** 成员组ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setUserTeamIds($userTeamIds)
    {
        $this->container['userTeamIds'] = $userTeamIds;
        return $this;
    }

    /**
    * Gets relatedRoleIds
    *  **参数解释：** 关联角色ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return string[]|null
    */
    public function getRelatedRoleIds()
    {
        return $this->container['relatedRoleIds'];
    }

    /**
    * Sets relatedRoleIds
    *
    * @param string[]|null $relatedRoleIds **参数解释：** 关联角色ID列表。 **约束限制：** 不涉及。 **取值范围：** 不涉及。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setRelatedRoleIds($relatedRoleIds)
    {
        $this->container['relatedRoleIds'] = $relatedRoleIds;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释：** 事件名称。 **约束限制：** action中必传此字段。 **取值范围：** - push，推送 。 - merge，合并 。 **默认取值：** 不涉及。
    *
    * @return string|null
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string|null $action **参数解释：** 事件名称。 **约束限制：** action中必传此字段。 **取值范围：** - push，推送 。 - merge，合并 。 **默认取值：** 不涉及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
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

