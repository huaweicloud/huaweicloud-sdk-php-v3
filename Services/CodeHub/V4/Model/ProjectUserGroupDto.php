<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProjectUserGroupDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProjectUserGroupDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释：** 用户组记录id。
    * userGroupId  **参数解释：** 用户组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 用户组所在项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantId  **参数解释：** 用户组所在租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupType  **参数解释：** 用户组类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * memberCount  **参数解释：** 用户组成员数量。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述信息。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'userGroupId' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'tenantId' => 'string',
            'groupType' => 'string',
            'memberCount' => 'int',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'description' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释：** 用户组记录id。
    * userGroupId  **参数解释：** 用户组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 用户组所在项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantId  **参数解释：** 用户组所在租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupType  **参数解释：** 用户组类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * memberCount  **参数解释：** 用户组成员数量。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述信息。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int32',
        'userGroupId' => null,
        'name' => null,
        'projectId' => null,
        'tenantId' => null,
        'groupType' => null,
        'memberCount' => 'int32',
        'createdAt' => null,
        'updatedAt' => null,
        'description' => null
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
    * id  **参数解释：** 用户组记录id。
    * userGroupId  **参数解释：** 用户组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 用户组所在项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantId  **参数解释：** 用户组所在租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupType  **参数解释：** 用户组类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * memberCount  **参数解释：** 用户组成员数量。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述信息。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'userGroupId' => 'user_group_id',
            'name' => 'name',
            'projectId' => 'project_id',
            'tenantId' => 'tenant_id',
            'groupType' => 'group_type',
            'memberCount' => 'member_count',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'description' => 'description'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释：** 用户组记录id。
    * userGroupId  **参数解释：** 用户组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 用户组所在项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantId  **参数解释：** 用户组所在租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupType  **参数解释：** 用户组类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * memberCount  **参数解释：** 用户组成员数量。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述信息。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'userGroupId' => 'setUserGroupId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'tenantId' => 'setTenantId',
            'groupType' => 'setGroupType',
            'memberCount' => 'setMemberCount',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'description' => 'setDescription'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释：** 用户组记录id。
    * userGroupId  **参数解释：** 用户组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * name  **参数解释：** 用户组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    * projectId  **参数解释：** 用户组所在项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * tenantId  **参数解释：** 用户组所在租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    * groupType  **参数解释：** 用户组类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    * memberCount  **参数解释：** 用户组成员数量。
    * createdAt  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * updatedAt  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    * description  **参数解释：** 描述信息。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'userGroupId' => 'getUserGroupId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'tenantId' => 'getTenantId',
            'groupType' => 'getGroupType',
            'memberCount' => 'getMemberCount',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'description' => 'getDescription'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['userGroupId'] = isset($data['userGroupId']) ? $data['userGroupId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['groupType'] = isset($data['groupType']) ? $data['groupType'] : null;
        $this->container['memberCount'] = isset($data['memberCount']) ? $data['memberCount'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && ($this->container['id'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'id', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['id']) && ($this->container['id'] < 1)) {
                $invalidProperties[] = "invalid value for 'id', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['userGroupId']) && (mb_strlen($this->container['userGroupId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['userGroupId']) && (mb_strlen($this->container['userGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'userGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 1000)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) > 1000)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['tenantId']) && (mb_strlen($this->container['tenantId']) < 1)) {
                $invalidProperties[] = "invalid value for 'tenantId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupType']) && (mb_strlen($this->container['groupType']) > 1000)) {
                $invalidProperties[] = "invalid value for 'groupType', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['groupType']) && (mb_strlen($this->container['groupType']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['memberCount']) && ($this->container['memberCount'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'memberCount', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['memberCount']) && ($this->container['memberCount'] < 0)) {
                $invalidProperties[] = "invalid value for 'memberCount', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['createdAt']) && (mb_strlen($this->container['createdAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'createdAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) > 1000)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['updatedAt']) && (mb_strlen($this->container['updatedAt']) < 1)) {
                $invalidProperties[] = "invalid value for 'updatedAt', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 1000)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 1000.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 1)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 1.";
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
    * Gets id
    *  **参数解释：** 用户组记录id。
    *
    * @return int|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int|null $id **参数解释：** 用户组记录id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets userGroupId
    *  **参数解释：** 用户组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUserGroupId()
    {
        return $this->container['userGroupId'];
    }

    /**
    * Sets userGroupId
    *
    * @param string|null $userGroupId **参数解释：** 用户组id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUserGroupId($userGroupId)
    {
        $this->container['userGroupId'] = $userGroupId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释：** 用户组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name **参数解释：** 用户组名称。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释：** 用户组所在项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId **参数解释：** 用户组所在项目id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets tenantId
    *  **参数解释：** 用户组所在租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId **参数解释：** 用户组所在租户id。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets groupType
    *  **参数解释：** 用户组类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getGroupType()
    {
        return $this->container['groupType'];
    }

    /**
    * Sets groupType
    *
    * @param string|null $groupType **参数解释：** 用户组类型。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setGroupType($groupType)
    {
        $this->container['groupType'] = $groupType;
        return $this;
    }

    /**
    * Gets memberCount
    *  **参数解释：** 用户组成员数量。
    *
    * @return int|null
    */
    public function getMemberCount()
    {
        return $this->container['memberCount'];
    }

    /**
    * Sets memberCount
    *
    * @param int|null $memberCount **参数解释：** 用户组成员数量。
    *
    * @return $this
    */
    public function setMemberCount($memberCount)
    {
        $this->container['memberCount'] = $memberCount;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt **参数解释：** 创建时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt **参数解释：** 更新时间。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets description
    *  **参数解释：** 描述信息。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description **参数解释：** 描述信息。 **取值范围：** 字符串长度不少于1，不超过1000。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
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

