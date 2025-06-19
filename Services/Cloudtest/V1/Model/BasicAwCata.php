<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BasicAwCata implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BasicAwCata';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * awDir  aw归属目录信息
    * cataType  目录层级
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人id
    * desc  目录描述
    * extraInfo  引用次数
    * id  id
    * isFolder  判断是否为文件夹的标识
    * name  名称
    * nameView  aw在页面上显示的名字
    * parentId  aw目录父编号
    * projectId  工程ID
    * refCnt  引用次数
    * region  区域名称
    * updateTime  更新时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'awDir' => 'string',
            'cataType' => 'int',
            'createTime' => 'string',
            'createUser' => 'string',
            'createUserId' => 'string',
            'desc' => 'string',
            'extraInfo' => 'string',
            'id' => 'string',
            'isFolder' => 'string',
            'name' => 'string',
            'nameView' => 'string',
            'parentId' => 'string',
            'projectId' => 'string',
            'refCnt' => 'int',
            'region' => 'string',
            'updateTime' => 'string',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * awDir  aw归属目录信息
    * cataType  目录层级
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人id
    * desc  目录描述
    * extraInfo  引用次数
    * id  id
    * isFolder  判断是否为文件夹的标识
    * name  名称
    * nameView  aw在页面上显示的名字
    * parentId  aw目录父编号
    * projectId  工程ID
    * refCnt  引用次数
    * region  区域名称
    * updateTime  更新时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'awDir' => null,
        'cataType' => 'int32',
        'createTime' => null,
        'createUser' => null,
        'createUserId' => null,
        'desc' => null,
        'extraInfo' => null,
        'id' => null,
        'isFolder' => null,
        'name' => null,
        'nameView' => null,
        'parentId' => null,
        'projectId' => null,
        'refCnt' => 'int32',
        'region' => null,
        'updateTime' => null,
        'updateUser' => null
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
    * awDir  aw归属目录信息
    * cataType  目录层级
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人id
    * desc  目录描述
    * extraInfo  引用次数
    * id  id
    * isFolder  判断是否为文件夹的标识
    * name  名称
    * nameView  aw在页面上显示的名字
    * parentId  aw目录父编号
    * projectId  工程ID
    * refCnt  引用次数
    * region  区域名称
    * updateTime  更新时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'awDir' => 'aw_dir',
            'cataType' => 'cata_type',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'createUserId' => 'create_user_id',
            'desc' => 'desc',
            'extraInfo' => 'extra_info',
            'id' => 'id',
            'isFolder' => 'is_folder',
            'name' => 'name',
            'nameView' => 'nameView',
            'parentId' => 'parent_id',
            'projectId' => 'project_id',
            'refCnt' => 'refCnt',
            'region' => 'region',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * awDir  aw归属目录信息
    * cataType  目录层级
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人id
    * desc  目录描述
    * extraInfo  引用次数
    * id  id
    * isFolder  判断是否为文件夹的标识
    * name  名称
    * nameView  aw在页面上显示的名字
    * parentId  aw目录父编号
    * projectId  工程ID
    * refCnt  引用次数
    * region  区域名称
    * updateTime  更新时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $setters = [
            'awDir' => 'setAwDir',
            'cataType' => 'setCataType',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'createUserId' => 'setCreateUserId',
            'desc' => 'setDesc',
            'extraInfo' => 'setExtraInfo',
            'id' => 'setId',
            'isFolder' => 'setIsFolder',
            'name' => 'setName',
            'nameView' => 'setNameView',
            'parentId' => 'setParentId',
            'projectId' => 'setProjectId',
            'refCnt' => 'setRefCnt',
            'region' => 'setRegion',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * awDir  aw归属目录信息
    * cataType  目录层级
    * createTime  创建时间
    * createUser  创建人
    * createUserId  创建人id
    * desc  目录描述
    * extraInfo  引用次数
    * id  id
    * isFolder  判断是否为文件夹的标识
    * name  名称
    * nameView  aw在页面上显示的名字
    * parentId  aw目录父编号
    * projectId  工程ID
    * refCnt  引用次数
    * region  区域名称
    * updateTime  更新时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $getters = [
            'awDir' => 'getAwDir',
            'cataType' => 'getCataType',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'createUserId' => 'getCreateUserId',
            'desc' => 'getDesc',
            'extraInfo' => 'getExtraInfo',
            'id' => 'getId',
            'isFolder' => 'getIsFolder',
            'name' => 'getName',
            'nameView' => 'getNameView',
            'parentId' => 'getParentId',
            'projectId' => 'getProjectId',
            'refCnt' => 'getRefCnt',
            'region' => 'getRegion',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser'
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
        $this->container['awDir'] = isset($data['awDir']) ? $data['awDir'] : null;
        $this->container['cataType'] = isset($data['cataType']) ? $data['cataType'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['createUserId'] = isset($data['createUserId']) ? $data['createUserId'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['isFolder'] = isset($data['isFolder']) ? $data['isFolder'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameView'] = isset($data['nameView']) ? $data['nameView'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['refCnt'] = isset($data['refCnt']) ? $data['refCnt'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
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
    * Gets awDir
    *  aw归属目录信息
    *
    * @return string|null
    */
    public function getAwDir()
    {
        return $this->container['awDir'];
    }

    /**
    * Sets awDir
    *
    * @param string|null $awDir aw归属目录信息
    *
    * @return $this
    */
    public function setAwDir($awDir)
    {
        $this->container['awDir'] = $awDir;
        return $this;
    }

    /**
    * Gets cataType
    *  目录层级
    *
    * @return int|null
    */
    public function getCataType()
    {
        return $this->container['cataType'];
    }

    /**
    * Sets cataType
    *
    * @param int|null $cataType 目录层级
    *
    * @return $this
    */
    public function setCataType($cataType)
    {
        $this->container['cataType'] = $cataType;
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
    * Gets createUser
    *  创建人
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
    * @param string|null $createUser 创建人
    *
    * @return $this
    */
    public function setCreateUser($createUser)
    {
        $this->container['createUser'] = $createUser;
        return $this;
    }

    /**
    * Gets createUserId
    *  创建人id
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
    * @param string|null $createUserId 创建人id
    *
    * @return $this
    */
    public function setCreateUserId($createUserId)
    {
        $this->container['createUserId'] = $createUserId;
        return $this;
    }

    /**
    * Gets desc
    *  目录描述
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 目录描述
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets extraInfo
    *  引用次数
    *
    * @return string|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param string|null $extraInfo 引用次数
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets id
    *  id
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
    * @param string|null $id id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets isFolder
    *  判断是否为文件夹的标识
    *
    * @return string|null
    */
    public function getIsFolder()
    {
        return $this->container['isFolder'];
    }

    /**
    * Sets isFolder
    *
    * @param string|null $isFolder 判断是否为文件夹的标识
    *
    * @return $this
    */
    public function setIsFolder($isFolder)
    {
        $this->container['isFolder'] = $isFolder;
        return $this;
    }

    /**
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets nameView
    *  aw在页面上显示的名字
    *
    * @return string|null
    */
    public function getNameView()
    {
        return $this->container['nameView'];
    }

    /**
    * Sets nameView
    *
    * @param string|null $nameView aw在页面上显示的名字
    *
    * @return $this
    */
    public function setNameView($nameView)
    {
        $this->container['nameView'] = $nameView;
        return $this;
    }

    /**
    * Gets parentId
    *  aw目录父编号
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
    * @param string|null $parentId aw目录父编号
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets projectId
    *  工程ID
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
    * @param string|null $projectId 工程ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets refCnt
    *  引用次数
    *
    * @return int|null
    */
    public function getRefCnt()
    {
        return $this->container['refCnt'];
    }

    /**
    * Sets refCnt
    *
    * @param int|null $refCnt 引用次数
    *
    * @return $this
    */
    public function setRefCnt($refCnt)
    {
        $this->container['refCnt'] = $refCnt;
        return $this;
    }

    /**
    * Gets region
    *  区域名称
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region 区域名称
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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
    * Gets updateUser
    *  更新人
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
    * @param string|null $updateUser 更新人
    *
    * @return $this
    */
    public function setUpdateUser($updateUser)
    {
        $this->container['updateUser'] = $updateUser;
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

