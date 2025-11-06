<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RepoSubscriptionEventDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RepoSubscriptionEventDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceType  **参数解释：** 资源类型。 - repo，仓库。 - mr，合并请求。  - member，成员。 - note，检视意见。
    * action  **参数解释：** 事件名。 - create，创建。 - open，开启。 - update，更新。  - delete，删除。 - merge，合并。 - review，检视。  - approve，审核。 - create_note，新建评审意见。 - resolve_note，解决评审意见。 - mention，被提及。
    * enabled  **参数解释：** 启用事件通知
    * roleIds  **参数解释：** 通知的角色ID列表
    * roleNames  **参数解释：** 通知的角色名称列表。 - creator，创建者。 - assignee，合并人。 - reviewer，评审人。 - scorer，审核人。 - approver，检视人。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceType' => 'string',
            'action' => 'string',
            'enabled' => 'bool',
            'roleIds' => 'string[]',
            'roleNames' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceType  **参数解释：** 资源类型。 - repo，仓库。 - mr，合并请求。  - member，成员。 - note，检视意见。
    * action  **参数解释：** 事件名。 - create，创建。 - open，开启。 - update，更新。  - delete，删除。 - merge，合并。 - review，检视。  - approve，审核。 - create_note，新建评审意见。 - resolve_note，解决评审意见。 - mention，被提及。
    * enabled  **参数解释：** 启用事件通知
    * roleIds  **参数解释：** 通知的角色ID列表
    * roleNames  **参数解释：** 通知的角色名称列表。 - creator，创建者。 - assignee，合并人。 - reviewer，评审人。 - scorer，审核人。 - approver，检视人。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceType' => null,
        'action' => null,
        'enabled' => null,
        'roleIds' => null,
        'roleNames' => null
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
    * resourceType  **参数解释：** 资源类型。 - repo，仓库。 - mr，合并请求。  - member，成员。 - note，检视意见。
    * action  **参数解释：** 事件名。 - create，创建。 - open，开启。 - update，更新。  - delete，删除。 - merge，合并。 - review，检视。  - approve，审核。 - create_note，新建评审意见。 - resolve_note，解决评审意见。 - mention，被提及。
    * enabled  **参数解释：** 启用事件通知
    * roleIds  **参数解释：** 通知的角色ID列表
    * roleNames  **参数解释：** 通知的角色名称列表。 - creator，创建者。 - assignee，合并人。 - reviewer，评审人。 - scorer，审核人。 - approver，检视人。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceType' => 'resource_type',
            'action' => 'action',
            'enabled' => 'enabled',
            'roleIds' => 'role_ids',
            'roleNames' => 'role_names'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceType  **参数解释：** 资源类型。 - repo，仓库。 - mr，合并请求。  - member，成员。 - note，检视意见。
    * action  **参数解释：** 事件名。 - create，创建。 - open，开启。 - update，更新。  - delete，删除。 - merge，合并。 - review，检视。  - approve，审核。 - create_note，新建评审意见。 - resolve_note，解决评审意见。 - mention，被提及。
    * enabled  **参数解释：** 启用事件通知
    * roleIds  **参数解释：** 通知的角色ID列表
    * roleNames  **参数解释：** 通知的角色名称列表。 - creator，创建者。 - assignee，合并人。 - reviewer，评审人。 - scorer，审核人。 - approver，检视人。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceType' => 'setResourceType',
            'action' => 'setAction',
            'enabled' => 'setEnabled',
            'roleIds' => 'setRoleIds',
            'roleNames' => 'setRoleNames'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceType  **参数解释：** 资源类型。 - repo，仓库。 - mr，合并请求。  - member，成员。 - note，检视意见。
    * action  **参数解释：** 事件名。 - create，创建。 - open，开启。 - update，更新。  - delete，删除。 - merge，合并。 - review，检视。  - approve，审核。 - create_note，新建评审意见。 - resolve_note，解决评审意见。 - mention，被提及。
    * enabled  **参数解释：** 启用事件通知
    * roleIds  **参数解释：** 通知的角色ID列表
    * roleNames  **参数解释：** 通知的角色名称列表。 - creator，创建者。 - assignee，合并人。 - reviewer，评审人。 - scorer，审核人。 - approver，检视人。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceType' => 'getResourceType',
            'action' => 'getAction',
            'enabled' => 'getEnabled',
            'roleIds' => 'getRoleIds',
            'roleNames' => 'getRoleNames'
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
    const RESOURCE_TYPE_REPO = 'repo';
    const RESOURCE_TYPE_MR = 'mr';
    const RESOURCE_TYPE_MEMBER = 'member';
    const RESOURCE_TYPE_NOTE = 'note';
    const ACTION_CREATE = 'create';
    const ACTION_OPEN = 'open';
    const ACTION_UPDATE = 'update';
    const ACTION_DELETE = 'delete';
    const ACTION_MERGE = 'merge';
    const ACTION_REVIEW = 'review';
    const ACTION_APPROVE = 'approve';
    const ACTION_CREATE_NOTE = 'create_note';
    const ACTION_RESOLVE_NOTE = 'resolve_note';
    const ACTION_CAPACITY_WARNING = 'capacity_warning';
    const ACTION_MENTION = 'mention';
    const ROLE_NAMES_CREATOR = 'creator';
    const ROLE_NAMES_ASSIGNEE = 'assignee';
    const ROLE_NAMES_REVIEWER = 'reviewer';
    const ROLE_NAMES_SCORER = 'scorer';
    const ROLE_NAMES_APPROVER = 'approver';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getResourceTypeAllowableValues()
    {
        return [
            self::RESOURCE_TYPE_REPO,
            self::RESOURCE_TYPE_MR,
            self::RESOURCE_TYPE_MEMBER,
            self::RESOURCE_TYPE_NOTE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionAllowableValues()
    {
        return [
            self::ACTION_CREATE,
            self::ACTION_OPEN,
            self::ACTION_UPDATE,
            self::ACTION_DELETE,
            self::ACTION_MERGE,
            self::ACTION_REVIEW,
            self::ACTION_APPROVE,
            self::ACTION_CREATE_NOTE,
            self::ACTION_RESOLVE_NOTE,
            self::ACTION_CAPACITY_WARNING,
            self::ACTION_MENTION,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getRoleNamesAllowableValues()
    {
        return [
            self::ROLE_NAMES_CREATOR,
            self::ROLE_NAMES_ASSIGNEE,
            self::ROLE_NAMES_REVIEWER,
            self::ROLE_NAMES_SCORER,
            self::ROLE_NAMES_APPROVER,
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
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['roleIds'] = isset($data['roleIds']) ? $data['roleIds'] : null;
        $this->container['roleNames'] = isset($data['roleNames']) ? $data['roleNames'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getResourceTypeAllowableValues();
                if (!is_null($this->container['resourceType']) && !in_array($this->container['resourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'resourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

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
    * Gets resourceType
    *  **参数解释：** 资源类型。 - repo，仓库。 - mr，合并请求。  - member，成员。 - note，检视意见。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType **参数解释：** 资源类型。 - repo，仓库。 - mr，合并请求。  - member，成员。 - note，检视意见。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets action
    *  **参数解释：** 事件名。 - create，创建。 - open，开启。 - update，更新。  - delete，删除。 - merge，合并。 - review，检视。  - approve，审核。 - create_note，新建评审意见。 - resolve_note，解决评审意见。 - mention，被提及。
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
    * @param string|null $action **参数解释：** 事件名。 - create，创建。 - open，开启。 - update，更新。  - delete，删除。 - merge，合并。 - review，检视。  - approve，审核。 - create_note，新建评审意见。 - resolve_note，解决评审意见。 - mention，被提及。
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets enabled
    *  **参数解释：** 启用事件通知
    *
    * @return bool|null
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param bool|null $enabled **参数解释：** 启用事件通知
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets roleIds
    *  **参数解释：** 通知的角色ID列表
    *
    * @return string[]|null
    */
    public function getRoleIds()
    {
        return $this->container['roleIds'];
    }

    /**
    * Sets roleIds
    *
    * @param string[]|null $roleIds **参数解释：** 通知的角色ID列表
    *
    * @return $this
    */
    public function setRoleIds($roleIds)
    {
        $this->container['roleIds'] = $roleIds;
        return $this;
    }

    /**
    * Gets roleNames
    *  **参数解释：** 通知的角色名称列表。 - creator，创建者。 - assignee，合并人。 - reviewer，评审人。 - scorer，审核人。 - approver，检视人。
    *
    * @return string[]|null
    */
    public function getRoleNames()
    {
        return $this->container['roleNames'];
    }

    /**
    * Sets roleNames
    *
    * @param string[]|null $roleNames **参数解释：** 通知的角色名称列表。 - creator，创建者。 - assignee，合并人。 - reviewer，评审人。 - scorer，审核人。 - approver，检视人。
    *
    * @return $this
    */
    public function setRoleNames($roleNames)
    {
        $this->container['roleNames'] = $roleNames;
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

