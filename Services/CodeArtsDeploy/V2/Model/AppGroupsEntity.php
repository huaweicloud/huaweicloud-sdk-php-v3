<?php

namespace HuaweiCloud\SDK\CodeArtsDeploy\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AppGroupsEntity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AppGroupsEntity';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  分组id
    * name  分组名称
    * projectId  项目id
    * path  分组路径
    * parentId  父分组id，首层为null
    * ordinal  分组排序字段
    * createUserId  分组创建者用户id
    * lastUpdateUserId  最近一次更新该分组用户id
    * count  该分组应用总数
    * children  子分组列表
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'path' => 'string',
            'parentId' => 'string',
            'ordinal' => 'int',
            'createUserId' => 'string',
            'lastUpdateUserId' => 'string',
            'count' => 'int',
            'children' => '\HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppGroupsEntity[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  分组id
    * name  分组名称
    * projectId  项目id
    * path  分组路径
    * parentId  父分组id，首层为null
    * ordinal  分组排序字段
    * createUserId  分组创建者用户id
    * lastUpdateUserId  最近一次更新该分组用户id
    * count  该分组应用总数
    * children  子分组列表
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'projectId' => null,
        'path' => null,
        'parentId' => null,
        'ordinal' => 'int32',
        'createUserId' => null,
        'lastUpdateUserId' => null,
        'count' => 'int32',
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
    * id  分组id
    * name  分组名称
    * projectId  项目id
    * path  分组路径
    * parentId  父分组id，首层为null
    * ordinal  分组排序字段
    * createUserId  分组创建者用户id
    * lastUpdateUserId  最近一次更新该分组用户id
    * count  该分组应用总数
    * children  子分组列表
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'projectId' => 'project_id',
            'path' => 'path',
            'parentId' => 'parent_id',
            'ordinal' => 'ordinal',
            'createUserId' => 'create_user_id',
            'lastUpdateUserId' => 'last_update_user_id',
            'count' => 'count',
            'children' => 'children'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  分组id
    * name  分组名称
    * projectId  项目id
    * path  分组路径
    * parentId  父分组id，首层为null
    * ordinal  分组排序字段
    * createUserId  分组创建者用户id
    * lastUpdateUserId  最近一次更新该分组用户id
    * count  该分组应用总数
    * children  子分组列表
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'path' => 'setPath',
            'parentId' => 'setParentId',
            'ordinal' => 'setOrdinal',
            'createUserId' => 'setCreateUserId',
            'lastUpdateUserId' => 'setLastUpdateUserId',
            'count' => 'setCount',
            'children' => 'setChildren'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  分组id
    * name  分组名称
    * projectId  项目id
    * path  分组路径
    * parentId  父分组id，首层为null
    * ordinal  分组排序字段
    * createUserId  分组创建者用户id
    * lastUpdateUserId  最近一次更新该分组用户id
    * count  该分组应用总数
    * children  子分组列表
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'path' => 'getPath',
            'parentId' => 'getParentId',
            'ordinal' => 'getOrdinal',
            'createUserId' => 'getCreateUserId',
            'lastUpdateUserId' => 'getLastUpdateUserId',
            'count' => 'getCount',
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['path'] = isset($data['path']) ? $data['path'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['ordinal'] = isset($data['ordinal']) ? $data['ordinal'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['lastUpdateUserId'] = isset($data['lastUpdateUserId']) ? $data['lastUpdateUserId'] : null;
        $this->container['count'] = isset($data['count']) ? $data['count'] : null;
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
    *  分组id
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
    * @param string|null $id 分组id
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
    *  项目id
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
    * @param string|null $projectId 项目id
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets path
    *  分组路径
    *
    * @return string|null
    */
    public function getPath()
    {
        return $this->container['path'];
    }

    /**
    * Sets path
    *
    * @param string|null $path 分组路径
    *
    * @return $this
    */
    public function setPath($path)
    {
        $this->container['path'] = $path;
        return $this;
    }

    /**
    * Gets parentId
    *  父分组id，首层为null
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
    * @param string|null $parentId 父分组id，首层为null
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets ordinal
    *  分组排序字段
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
    * @param int|null $ordinal 分组排序字段
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets createUserId
    *  分组创建者用户id
    *
    * @return string|null
    */
    public function getCreateUserId()
    {
        return $this->container['createUserId'];
    }

    /**
    * Sets createUserId
    *
    * @param string|null $createUserId 分组创建者用户id
    *
    * @return $this
    */
    public function setCreateUserId($createUserId)
    {
        $this->container['createUserId'] = $createUserId;
        return $this;
    }

    /**
    * Gets lastUpdateUserId
    *  最近一次更新该分组用户id
    *
    * @return string|null
    */
    public function getLastUpdateUserId()
    {
        return $this->container['lastUpdateUserId'];
    }

    /**
    * Sets lastUpdateUserId
    *
    * @param string|null $lastUpdateUserId 最近一次更新该分组用户id
    *
    * @return $this
    */
    public function setLastUpdateUserId($lastUpdateUserId)
    {
        $this->container['lastUpdateUserId'] = $lastUpdateUserId;
        return $this;
    }

    /**
    * Gets count
    *  该分组应用总数
    *
    * @return int|null
    */
    public function getCount()
    {
        return $this->container['count'];
    }

    /**
    * Sets count
    *
    * @param int|null $count 该分组应用总数
    *
    * @return $this
    */
    public function setCount($count)
    {
        $this->container['count'] = $count;
        return $this;
    }

    /**
    * Gets children
    *  子分组列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppGroupsEntity[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\CodeArtsDeploy\V2\Model\AppGroupsEntity[]|null $children 子分组列表
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

