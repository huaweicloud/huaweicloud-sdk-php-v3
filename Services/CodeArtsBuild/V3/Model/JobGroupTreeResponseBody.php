<?php

namespace HuaweiCloud\SDK\CodeArtsBuild\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class JobGroupTreeResponseBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'JobGroupTreeResponseBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  分组编号
    * domainId  租户ID
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * name  分组名称
    * parentId  父分组编号
    * pathId  分组路径
    * ordinal  序数
    * createUser  创建用户
    * updateUser  更新用户
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'domainId' => 'string',
            'projectId' => 'string',
            'name' => 'string',
            'parentId' => 'string',
            'pathId' => 'string',
            'ordinal' => 'int',
            'createUser' => 'string',
            'updateUser' => 'string',
            'createTime' => 'string',
            'updateTime' => 'string',
            'children' => '\HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobGroupTreeResponseBody[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  分组编号
    * domainId  租户ID
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * name  分组名称
    * parentId  父分组编号
    * pathId  分组路径
    * ordinal  序数
    * createUser  创建用户
    * updateUser  更新用户
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'domainId' => null,
        'projectId' => null,
        'name' => null,
        'parentId' => null,
        'pathId' => null,
        'ordinal' => null,
        'createUser' => null,
        'updateUser' => null,
        'createTime' => null,
        'updateTime' => null,
        'children' => null
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
    * id  分组编号
    * domainId  租户ID
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * name  分组名称
    * parentId  父分组编号
    * pathId  分组路径
    * ordinal  序数
    * createUser  创建用户
    * updateUser  更新用户
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'domainId' => 'domain_id',
            'projectId' => 'project_id',
            'name' => 'name',
            'parentId' => 'parent_id',
            'pathId' => 'path_id',
            'ordinal' => 'ordinal',
            'createUser' => 'create_user',
            'updateUser' => 'update_user',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'children' => 'children'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  分组编号
    * domainId  租户ID
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * name  分组名称
    * parentId  父分组编号
    * pathId  分组路径
    * ordinal  序数
    * createUser  创建用户
    * updateUser  更新用户
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'domainId' => 'setDomainId',
            'projectId' => 'setProjectId',
            'name' => 'setName',
            'parentId' => 'setParentId',
            'pathId' => 'setPathId',
            'ordinal' => 'setOrdinal',
            'createUser' => 'setCreateUser',
            'updateUser' => 'setUpdateUser',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'children' => 'setChildren'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  分组编号
    * domainId  租户ID
    * projectId  CodeArts项目ID。构建任务所在项目的ID。
    * name  分组名称
    * parentId  父分组编号
    * pathId  分组路径
    * ordinal  序数
    * createUser  创建用户
    * updateUser  更新用户
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'domainId' => 'getDomainId',
            'projectId' => 'getProjectId',
            'name' => 'getName',
            'parentId' => 'getParentId',
            'pathId' => 'getPathId',
            'ordinal' => 'getOrdinal',
            'createUser' => 'getCreateUser',
            'updateUser' => 'getUpdateUser',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'children' => 'getChildren'
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
        $this->container['domainId'] = isset($data['domainId']) ? $data['domainId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['pathId'] = isset($data['pathId']) ? $data['pathId'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['children'] = isset($data['children']) ? $data['children'] : null;
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
    *  分组编号
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
    * @param string|null $id 分组编号
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets domainId
    *  租户ID
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
    * @param string|null $domainId 租户ID
    *
    * @return $this
    */
    public function setDomainId($domainId)
    {
        $this->container['domainId'] = $domainId;
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
    * Gets parentId
    *  父分组编号
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
    * @param string|null $parentId 父分组编号
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets pathId
    *  分组路径
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
    * @param string|null $pathId 分组路径
    *
    * @return $this
    */
    public function setPathId($pathId)
    {
        $this->container['pathId'] = $pathId;
        return $this;
    }

    /**
    * Gets ordinal
    *  序数
    *
    * @return int|null
    */
    public function getOrdinal()
    {
        return $this->container['ordinal'];
    }

    /**
    * Sets ordinal
    *
    * @param int|null $ordinal 序数
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
    *  创建用户
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
    * @param string|null $createUser 创建用户
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
    *  更新用户
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
    * @param string|null $updateUser 更新用户
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
    *  更新时间
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
    * @param string|null $updateTime 更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets children
    *  子分组
    *
    * @return \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobGroupTreeResponseBody[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\CodeArtsBuild\V3\Model\JobGroupTreeResponseBody[]|null $children 子分组
    *
    * @return $this
    */
    public function setChildren($children)
    {
        $this->container['children'] = $children;
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

