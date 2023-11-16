<?php

namespace HuaweiCloud\SDK\CodeArtsPipeline\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PipelineGroupVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PipelineGroupVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  分组ID
    * domainId  租户ID
    * projectId  项目ID
    * name  分组名
    * parentId  父分组ID
    * pathId  分组路径ID
    * ordinal  序号
    * creator  创建用户ID
    * updater  更新用户ID
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组列表
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
            'creator' => 'string',
            'updater' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'children' => '\HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineGroupVo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  分组ID
    * domainId  租户ID
    * projectId  项目ID
    * name  分组名
    * parentId  父分组ID
    * pathId  分组路径ID
    * ordinal  序号
    * creator  创建用户ID
    * updater  更新用户ID
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组列表
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
        'ordinal' => 'int32',
        'creator' => null,
        'updater' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
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
    * id  分组ID
    * domainId  租户ID
    * projectId  项目ID
    * name  分组名
    * parentId  父分组ID
    * pathId  分组路径ID
    * ordinal  序号
    * creator  创建用户ID
    * updater  更新用户ID
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组列表
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
            'creator' => 'creator',
            'updater' => 'updater',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'children' => 'children'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  分组ID
    * domainId  租户ID
    * projectId  项目ID
    * name  分组名
    * parentId  父分组ID
    * pathId  分组路径ID
    * ordinal  序号
    * creator  创建用户ID
    * updater  更新用户ID
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组列表
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
            'creator' => 'setCreator',
            'updater' => 'setUpdater',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'children' => 'setChildren'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  分组ID
    * domainId  租户ID
    * projectId  项目ID
    * name  分组名
    * parentId  父分组ID
    * pathId  分组路径ID
    * ordinal  序号
    * creator  创建用户ID
    * updater  更新用户ID
    * createTime  创建时间
    * updateTime  更新时间
    * children  子分组列表
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
            'creator' => 'getCreator',
            'updater' => 'getUpdater',
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
        $this->container['creator'] = isset($data['creator']) ? $data['creator'] : null;
        $this->container['updater'] = isset($data['updater']) ? $data['updater'] : null;
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
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['domainId'] === null) {
            $invalidProperties[] = "'domainId' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['pathId'] === null) {
            $invalidProperties[] = "'pathId' can't be null";
        }
        if ($this->container['creator'] === null) {
            $invalidProperties[] = "'creator' can't be null";
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
    *  分组ID
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 分组ID
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
    * @return string
    */
    public function getDomainId()
    {
        return $this->container['domainId'];
    }

    /**
    * Sets domainId
    *
    * @param string $domainId 租户ID
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
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
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
    *  分组名
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 分组名
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
    *  父分组ID
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
    * @param string|null $parentId 父分组ID
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
    *  分组路径ID
    *
    * @return string
    */
    public function getPathId()
    {
        return $this->container['pathId'];
    }

    /**
    * Sets pathId
    *
    * @param string $pathId 分组路径ID
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
    *  序号
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
    * @param int|null $ordinal 序号
    *
    * @return $this
    */
    public function setOrdinal($ordinal)
    {
        $this->container['ordinal'] = $ordinal;
        return $this;
    }

    /**
    * Gets creator
    *  创建用户ID
    *
    * @return string
    */
    public function getCreator()
    {
        return $this->container['creator'];
    }

    /**
    * Sets creator
    *
    * @param string $creator 创建用户ID
    *
    * @return $this
    */
    public function setCreator($creator)
    {
        $this->container['creator'] = $creator;
        return $this;
    }

    /**
    * Gets updater
    *  更新用户ID
    *
    * @return string|null
    */
    public function getUpdater()
    {
        return $this->container['updater'];
    }

    /**
    * Sets updater
    *
    * @param string|null $updater 更新用户ID
    *
    * @return $this
    */
    public function setUpdater($updater)
    {
        $this->container['updater'] = $updater;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 创建时间
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
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 更新时间
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
    *  子分组列表
    *
    * @return \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineGroupVo[]|null
    */
    public function getChildren()
    {
        return $this->container['children'];
    }

    /**
    * Sets children
    *
    * @param \HuaweiCloud\SDK\CodeArtsPipeline\V2\Model\PipelineGroupVo[]|null $children 子分组列表
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

