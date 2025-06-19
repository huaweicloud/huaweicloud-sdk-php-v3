<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MindmapObject implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MindmapObject';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * maxDepth  脑图最大深度
    * mindmap  脑图JSON
    * name  脑图名称
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'creatorName' => 'string',
            'creatorNum' => 'string',
            'folderId' => 'string',
            'folderRootId' => 'string',
            'id' => 'string',
            'maxDepth' => 'int',
            'mindmap' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * maxDepth  脑图最大深度
    * mindmap  脑图JSON
    * name  脑图名称
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'creatorName' => null,
        'creatorNum' => null,
        'folderId' => null,
        'folderRootId' => null,
        'id' => null,
        'maxDepth' => 'int32',
        'mindmap' => null,
        'name' => null,
        'projectId' => null,
        'updateTime' => null
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
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * maxDepth  脑图最大深度
    * mindmap  脑图JSON
    * name  脑图名称
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'creatorNum' => 'creator_num',
            'folderId' => 'folder_id',
            'folderRootId' => 'folder_root_id',
            'id' => 'id',
            'maxDepth' => 'max_depth',
            'mindmap' => 'mindmap',
            'name' => 'name',
            'projectId' => 'project_id',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * maxDepth  脑图最大深度
    * mindmap  脑图JSON
    * name  脑图名称
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'creatorNum' => 'setCreatorNum',
            'folderId' => 'setFolderId',
            'folderRootId' => 'setFolderRootId',
            'id' => 'setId',
            'maxDepth' => 'setMaxDepth',
            'mindmap' => 'setMindmap',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * maxDepth  脑图最大深度
    * mindmap  脑图JSON
    * name  脑图名称
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'creatorNum' => 'getCreatorNum',
            'folderId' => 'getFolderId',
            'folderRootId' => 'getFolderRootId',
            'id' => 'getId',
            'maxDepth' => 'getMaxDepth',
            'mindmap' => 'getMindmap',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'updateTime' => 'getUpdateTime'
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
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorNum'] = isset($data['creatorNum']) ? $data['creatorNum'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['folderRootId'] = isset($data['folderRootId']) ? $data['folderRootId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['maxDepth'] = isset($data['maxDepth']) ? $data['maxDepth'] : null;
        $this->container['mindmap'] = isset($data['mindmap']) ? $data['mindmap'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
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
    * Gets creatorName
    *  创建人名称
    *
    * @return string|null
    */
    public function getCreatorName()
    {
        return $this->container['creatorName'];
    }

    /**
    * Sets creatorName
    *
    * @param string|null $creatorName 创建人名称
    *
    * @return $this
    */
    public function setCreatorName($creatorName)
    {
        $this->container['creatorName'] = $creatorName;
        return $this;
    }

    /**
    * Gets creatorNum
    *  创建人工号
    *
    * @return string|null
    */
    public function getCreatorNum()
    {
        return $this->container['creatorNum'];
    }

    /**
    * Sets creatorNum
    *
    * @param string|null $creatorNum 创建人工号
    *
    * @return $this
    */
    public function setCreatorNum($creatorNum)
    {
        $this->container['creatorNum'] = $creatorNum;
        return $this;
    }

    /**
    * Gets folderId
    *  文件路径
    *
    * @return string|null
    */
    public function getFolderId()
    {
        return $this->container['folderId'];
    }

    /**
    * Sets folderId
    *
    * @param string|null $folderId 文件路径
    *
    * @return $this
    */
    public function setFolderId($folderId)
    {
        $this->container['folderId'] = $folderId;
        return $this;
    }

    /**
    * Gets folderRootId
    *  根目录id
    *
    * @return string|null
    */
    public function getFolderRootId()
    {
        return $this->container['folderRootId'];
    }

    /**
    * Sets folderRootId
    *
    * @param string|null $folderRootId 根目录id
    *
    * @return $this
    */
    public function setFolderRootId($folderRootId)
    {
        $this->container['folderRootId'] = $folderRootId;
        return $this;
    }

    /**
    * Gets id
    *  id 主键
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
    * @param string|null $id id 主键
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets maxDepth
    *  脑图最大深度
    *
    * @return int|null
    */
    public function getMaxDepth()
    {
        return $this->container['maxDepth'];
    }

    /**
    * Sets maxDepth
    *
    * @param int|null $maxDepth 脑图最大深度
    *
    * @return $this
    */
    public function setMaxDepth($maxDepth)
    {
        $this->container['maxDepth'] = $maxDepth;
        return $this;
    }

    /**
    * Gets mindmap
    *  脑图JSON
    *
    * @return string|null
    */
    public function getMindmap()
    {
        return $this->container['mindmap'];
    }

    /**
    * Sets mindmap
    *
    * @param string|null $mindmap 脑图JSON
    *
    * @return $this
    */
    public function setMindmap($mindmap)
    {
        $this->container['mindmap'] = $mindmap;
        return $this;
    }

    /**
    * Gets name
    *  脑图名称
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
    * @param string|null $name 脑图名称
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

