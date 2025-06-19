<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MindmapRecycle implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MindmapRecycle';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * mapVersion  脑图版本
    * mindmap  脑图JSON
    * name  脑图名称
    * privacy  脑图是否私有
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'app' => 'string',
            'createTime' => 'string',
            'creatorName' => 'string',
            'creatorNum' => 'string',
            'folderId' => 'string',
            'folderRootId' => 'string',
            'id' => 'string',
            'mapVersion' => 'string',
            'mindmap' => 'string',
            'name' => 'string',
            'privacy' => 'string',
            'projectId' => 'string',
            'updateTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * mapVersion  脑图版本
    * mindmap  脑图JSON
    * name  脑图名称
    * privacy  脑图是否私有
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'app' => null,
        'createTime' => null,
        'creatorName' => null,
        'creatorNum' => null,
        'folderId' => null,
        'folderRootId' => null,
        'id' => null,
        'mapVersion' => null,
        'mindmap' => null,
        'name' => null,
        'privacy' => null,
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
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * mapVersion  脑图版本
    * mindmap  脑图JSON
    * name  脑图名称
    * privacy  脑图是否私有
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'app' => 'app',
            'createTime' => 'create_time',
            'creatorName' => 'creator_name',
            'creatorNum' => 'creator_num',
            'folderId' => 'folder_id',
            'folderRootId' => 'folder_root_id',
            'id' => 'id',
            'mapVersion' => 'map_version',
            'mindmap' => 'mindmap',
            'name' => 'name',
            'privacy' => 'privacy',
            'projectId' => 'project_id',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * mapVersion  脑图版本
    * mindmap  脑图JSON
    * name  脑图名称
    * privacy  脑图是否私有
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $setters = [
            'app' => 'setApp',
            'createTime' => 'setCreateTime',
            'creatorName' => 'setCreatorName',
            'creatorNum' => 'setCreatorNum',
            'folderId' => 'setFolderId',
            'folderRootId' => 'setFolderRootId',
            'id' => 'setId',
            'mapVersion' => 'setMapVersion',
            'mindmap' => 'setMindmap',
            'name' => 'setName',
            'privacy' => 'setPrivacy',
            'projectId' => 'setProjectId',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * app  app
    * createTime  创建时间
    * creatorName  创建人名称
    * creatorNum  创建人工号
    * folderId  文件路径
    * folderRootId  根目录id
    * id  id 主键
    * mapVersion  脑图版本
    * mindmap  脑图JSON
    * name  脑图名称
    * privacy  脑图是否私有
    * projectId  项目id
    * updateTime  更新时间
    *
    * @var string[]
    */
    protected static $getters = [
            'app' => 'getApp',
            'createTime' => 'getCreateTime',
            'creatorName' => 'getCreatorName',
            'creatorNum' => 'getCreatorNum',
            'folderId' => 'getFolderId',
            'folderRootId' => 'getFolderRootId',
            'id' => 'getId',
            'mapVersion' => 'getMapVersion',
            'mindmap' => 'getMindmap',
            'name' => 'getName',
            'privacy' => 'getPrivacy',
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
        $this->container['app'] = isset($data['app']) ? $data['app'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['creatorName'] = isset($data['creatorName']) ? $data['creatorName'] : null;
        $this->container['creatorNum'] = isset($data['creatorNum']) ? $data['creatorNum'] : null;
        $this->container['folderId'] = isset($data['folderId']) ? $data['folderId'] : null;
        $this->container['folderRootId'] = isset($data['folderRootId']) ? $data['folderRootId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['mapVersion'] = isset($data['mapVersion']) ? $data['mapVersion'] : null;
        $this->container['mindmap'] = isset($data['mindmap']) ? $data['mindmap'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['privacy'] = isset($data['privacy']) ? $data['privacy'] : null;
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
    * Gets app
    *  app
    *
    * @return string|null
    */
    public function getApp()
    {
        return $this->container['app'];
    }

    /**
    * Sets app
    *
    * @param string|null $app app
    *
    * @return $this
    */
    public function setApp($app)
    {
        $this->container['app'] = $app;
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
    * Gets mapVersion
    *  脑图版本
    *
    * @return string|null
    */
    public function getMapVersion()
    {
        return $this->container['mapVersion'];
    }

    /**
    * Sets mapVersion
    *
    * @param string|null $mapVersion 脑图版本
    *
    * @return $this
    */
    public function setMapVersion($mapVersion)
    {
        $this->container['mapVersion'] = $mapVersion;
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
    * Gets privacy
    *  脑图是否私有
    *
    * @return string|null
    */
    public function getPrivacy()
    {
        return $this->container['privacy'];
    }

    /**
    * Sets privacy
    *
    * @param string|null $privacy 脑图是否私有
    *
    * @return $this
    */
    public function setPrivacy($privacy)
    {
        $this->container['privacy'] = $privacy;
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

