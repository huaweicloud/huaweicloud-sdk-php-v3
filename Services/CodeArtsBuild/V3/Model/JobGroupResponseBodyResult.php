<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobGroupResponseBodyResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobGroupResponseBody_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  主键id
    * name  分组名称
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * parentId  父分组id
    * groupId  任务分组id
    * domainId  租户id
    * ordinal  分组的index
    * createUser  创建者
    * updateUser  修改者
    * createTime  创建时间
    * updateTime  修改时间
    * pathId  分组地址id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'parentId' => 'string',
            'groupId' => 'string',
            'domainId' => 'string',
            'ordinal' => 'string',
            'createUser' => 'string',
            'updateUser' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'pathId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  主键id
    * name  分组名称
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * parentId  父分组id
    * groupId  任务分组id
    * domainId  租户id
    * ordinal  分组的index
    * createUser  创建者
    * updateUser  修改者
    * createTime  创建时间
    * updateTime  修改时间
    * pathId  分组地址id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'parentId' => null,
        'groupId' => null,
        'domainId' => null,
        'ordinal' => null,
        'createUser' => null,
        'updateUser' => null,
        'createTime' => null,
        'updateTime' => null,
        'pathId' => null
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
    * id  主键id
    * name  分组名称
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * parentId  父分组id
    * groupId  任务分组id
    * domainId  租户id
    * ordinal  分组的index
    * createUser  创建者
    * updateUser  修改者
    * createTime  创建时间
    * updateTime  修改时间
    * pathId  分组地址id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'parentId' => 'parent_id',
            'groupId' => 'group_id',
            'domainId' => 'domain_id',
            'ordinal' => 'ordinal',
            'createUser' => 'create_user',
            'updateUser' => 'update_user',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'pathId' => 'path_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  主键id
    * name  分组名称
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * parentId  父分组id
    * groupId  任务分组id
    * domainId  租户id
    * ordinal  分组的index
    * createUser  创建者
    * updateUser  修改者
    * createTime  创建时间
    * updateTime  修改时间
    * pathId  分组地址id
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'parentId' => 'setParentId',
            'groupId' => 'setGroupId',
            'domainId' => 'setDomainId',
            'ordinal' => 'setOrdinal',
            'createUser' => 'setCreateUser',
            'updateUser' => 'setUpdateUser',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'pathId' => 'setPathId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  主键id
    * name  分组名称
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * parentId  父分组id
    * groupId  任务分组id
    * domainId  租户id
    * ordinal  分组的index
    * createUser  创建者
    * updateUser  修改者
    * createTime  创建时间
    * updateTime  修改时间
    * pathId  分组地址id
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'parentId' => 'getParentId',
            'groupId' => 'getGroupId',
            'domainId' => 'getDomainId',
            'ordinal' => 'getOrdinal',
            'createUser' => 'getCreateUser',
            'updateUser' => 'getUpdateUser',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'pathId' => 'getPathId'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['pathId'] = isset($data['pathId']) ? $data['pathId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  主键id
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 主键id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  分组名称
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
    * @param string|null $name 分组名称
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
    *  CodeArts项目ID。构建任务所在项目的ID。
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
    * @param string|null $projectId CodeArts项目ID。构建任务所在项目的ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets parentId
    *  父分组id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父分组id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets groupId
    *  任务分组id
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 任务分组id
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets domainId
    *  租户id
    *
    * @return string|null
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string|null $domainId 租户id
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
        return $this;
    }

    /**
    * Gets ordinal
    *  分组的index
    *
    * @return string|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param string|null $ordinal 分组的index
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets createUser
    *  创建者
    *
    * @return string|null
    */
    public function getCreateUser()
    {
        return $this->container['createUser'];
    }

    /**
    * Sets createUser
    *
    * @param string|null $createUser 创建者
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets updateUser
    *  修改者
    *
    * @return string|null
    */
    public function getUpdateUser()
    {
        return $this->container['updateUser'];
    }

    /**
    * Sets updateUser
    *
    * @param string|null $updateUser 修改者
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 修改时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets pathId
    *  分组地址id
    *
    * @return string|null
    */
    public function getPathId()
    {
        return $this->container['pathId'];
    }

    /**
    * Sets pathId
    *
    * @param string|null $pathId 分组地址id
    *
    * @return $this
    */
    public function setPathId($pathId)
    {
        $this->container['pathId'] = $pathId;
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

