<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UploadFileRes implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UploadFileRes';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * awInsId  所属的AWInstance的ID
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * currentSize  当前大小
    * filePath  文件路径
    * id  id
    * name  文件在系统中的名字
    * originName  文件的原名
    * projectId  项目ID
    * region  区域名称
    * testcaseId  测试用例的唯一标识符
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'awInsId' => 'string',
            'createTime' => 'string',
            'createTimeStamp' => 'int',
            'createTimeString' => 'string',
            'createUser' => 'string',
            'currentSize' => 'int',
            'filePath' => 'string',
            'id' => 'string',
            'name' => 'string',
            'originName' => 'string',
            'projectId' => 'string',
            'region' => 'string',
            'testcaseId' => 'string',
            'updateTime' => 'string',
            'updateTimeStamp' => 'int',
            'updateTimeString' => 'string',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * awInsId  所属的AWInstance的ID
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * currentSize  当前大小
    * filePath  文件路径
    * id  id
    * name  文件在系统中的名字
    * originName  文件的原名
    * projectId  项目ID
    * region  区域名称
    * testcaseId  测试用例的唯一标识符
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'awInsId' => null,
        'createTime' => null,
        'createTimeStamp' => 'int64',
        'createTimeString' => null,
        'createUser' => null,
        'currentSize' => 'int64',
        'filePath' => null,
        'id' => null,
        'name' => null,
        'originName' => null,
        'projectId' => null,
        'region' => null,
        'testcaseId' => null,
        'updateTime' => null,
        'updateTimeStamp' => 'int64',
        'updateTimeString' => null,
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
    * awInsId  所属的AWInstance的ID
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * currentSize  当前大小
    * filePath  文件路径
    * id  id
    * name  文件在系统中的名字
    * originName  文件的原名
    * projectId  项目ID
    * region  区域名称
    * testcaseId  测试用例的唯一标识符
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'awInsId' => 'awInsId',
            'createTime' => 'create_time',
            'createTimeStamp' => 'create_time_stamp',
            'createTimeString' => 'create_time_string',
            'createUser' => 'create_user',
            'currentSize' => 'current_size',
            'filePath' => 'filePath',
            'id' => 'id',
            'name' => 'name',
            'originName' => 'originName',
            'projectId' => 'projectId',
            'region' => 'region',
            'testcaseId' => 'testcase_id',
            'updateTime' => 'update_time',
            'updateTimeStamp' => 'update_time_stamp',
            'updateTimeString' => 'update_time_string',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * awInsId  所属的AWInstance的ID
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * currentSize  当前大小
    * filePath  文件路径
    * id  id
    * name  文件在系统中的名字
    * originName  文件的原名
    * projectId  项目ID
    * region  区域名称
    * testcaseId  测试用例的唯一标识符
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $setters = [
            'awInsId' => 'setAwInsId',
            'createTime' => 'setCreateTime',
            'createTimeStamp' => 'setCreateTimeStamp',
            'createTimeString' => 'setCreateTimeString',
            'createUser' => 'setCreateUser',
            'currentSize' => 'setCurrentSize',
            'filePath' => 'setFilePath',
            'id' => 'setId',
            'name' => 'setName',
            'originName' => 'setOriginName',
            'projectId' => 'setProjectId',
            'region' => 'setRegion',
            'testcaseId' => 'setTestcaseId',
            'updateTime' => 'setUpdateTime',
            'updateTimeStamp' => 'setUpdateTimeStamp',
            'updateTimeString' => 'setUpdateTimeString',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * awInsId  所属的AWInstance的ID
    * createTime  创建时间
    * createTimeStamp  创建时间戳
    * createTimeString  创建时间字符串
    * createUser  创建人
    * currentSize  当前大小
    * filePath  文件路径
    * id  id
    * name  文件在系统中的名字
    * originName  文件的原名
    * projectId  项目ID
    * region  区域名称
    * testcaseId  测试用例的唯一标识符
    * updateTime  更新时间
    * updateTimeStamp  更新时间戳
    * updateTimeString  更新时间字符串
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $getters = [
            'awInsId' => 'getAwInsId',
            'createTime' => 'getCreateTime',
            'createTimeStamp' => 'getCreateTimeStamp',
            'createTimeString' => 'getCreateTimeString',
            'createUser' => 'getCreateUser',
            'currentSize' => 'getCurrentSize',
            'filePath' => 'getFilePath',
            'id' => 'getId',
            'name' => 'getName',
            'originName' => 'getOriginName',
            'projectId' => 'getProjectId',
            'region' => 'getRegion',
            'testcaseId' => 'getTestcaseId',
            'updateTime' => 'getUpdateTime',
            'updateTimeStamp' => 'getUpdateTimeStamp',
            'updateTimeString' => 'getUpdateTimeString',
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
        $this->container['awInsId'] = isset($data['awInsId']) ? $data['awInsId'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createTimeStamp'] = isset($data['createTimeStamp']) ? $data['createTimeStamp'] : null;
        $this->container['createTimeString'] = isset($data['createTimeString']) ? $data['createTimeString'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['currentSize'] = isset($data['currentSize']) ? $data['currentSize'] : null;
        $this->container['filePath'] = isset($data['filePath']) ? $data['filePath'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['originName'] = isset($data['originName']) ? $data['originName'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['testcaseId'] = isset($data['testcaseId']) ? $data['testcaseId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateTimeStamp'] = isset($data['updateTimeStamp']) ? $data['updateTimeStamp'] : null;
        $this->container['updateTimeString'] = isset($data['updateTimeString']) ? $data['updateTimeString'] : null;
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
    * Gets awInsId
    *  所属的AWInstance的ID
    *
    * @return string|null
    */
    public function getAwInsId()
    {
        return $this->container['awInsId'];
    }

    /**
    * Sets awInsId
    *
    * @param string|null $awInsId 所属的AWInstance的ID
    *
    * @return $this
    */
    public function setAwInsId($awInsId)
    {
        $this->container['awInsId'] = $awInsId;
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
    * Gets createTimeStamp
    *  创建时间戳
    *
    * @return int|null
    */
    public function getCreateTimeStamp()
    {
        return $this->container['createTimeStamp'];
    }

    /**
    * Sets createTimeStamp
    *
    * @param int|null $createTimeStamp 创建时间戳
    *
    * @return $this
    */
    public function setCreateTimeStamp($createTimeStamp)
    {
        $this->container['createTimeStamp'] = $createTimeStamp;
        return $this;
    }

    /**
    * Gets createTimeString
    *  创建时间字符串
    *
    * @return string|null
    */
    public function getCreateTimeString()
    {
        return $this->container['createTimeString'];
    }

    /**
    * Sets createTimeString
    *
    * @param string|null $createTimeString 创建时间字符串
    *
    * @return $this
    */
    public function setCreateTimeString($createTimeString)
    {
        $this->container['createTimeString'] = $createTimeString;
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
    * Gets currentSize
    *  当前大小
    *
    * @return int|null
    */
    public function getCurrentSize()
    {
        return $this->container['currentSize'];
    }

    /**
    * Sets currentSize
    *
    * @param int|null $currentSize 当前大小
    *
    * @return $this
    */
    public function setCurrentSize($currentSize)
    {
        $this->container['currentSize'] = $currentSize;
        return $this;
    }

    /**
    * Gets filePath
    *  文件路径
    *
    * @return string|null
    */
    public function getFilePath()
    {
        return $this->container['filePath'];
    }

    /**
    * Sets filePath
    *
    * @param string|null $filePath 文件路径
    *
    * @return $this
    */
    public function setFilePath($filePath)
    {
        $this->container['filePath'] = $filePath;
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
    * Gets name
    *  文件在系统中的名字
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
    * @param string|null $name 文件在系统中的名字
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets originName
    *  文件的原名
    *
    * @return string|null
    */
    public function getOriginName()
    {
        return $this->container['originName'];
    }

    /**
    * Sets originName
    *
    * @param string|null $originName 文件的原名
    *
    * @return $this
    */
    public function setOriginName($originName)
    {
        $this->container['originName'] = $originName;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
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
    * @param string|null $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
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
    * Gets testcaseId
    *  测试用例的唯一标识符
    *
    * @return string|null
    */
    public function getTestcaseId()
    {
        return $this->container['testcaseId'];
    }

    /**
    * Sets testcaseId
    *
    * @param string|null $testcaseId 测试用例的唯一标识符
    *
    * @return $this
    */
    public function setTestcaseId($testcaseId)
    {
        $this->container['testcaseId'] = $testcaseId;
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
    * Gets updateTimeStamp
    *  更新时间戳
    *
    * @return int|null
    */
    public function getUpdateTimeStamp()
    {
        return $this->container['updateTimeStamp'];
    }

    /**
    * Sets updateTimeStamp
    *
    * @param int|null $updateTimeStamp 更新时间戳
    *
    * @return $this
    */
    public function setUpdateTimeStamp($updateTimeStamp)
    {
        $this->container['updateTimeStamp'] = $updateTimeStamp;
        return $this;
    }

    /**
    * Gets updateTimeString
    *  更新时间字符串
    *
    * @return string|null
    */
    public function getUpdateTimeString()
    {
        return $this->container['updateTimeString'];
    }

    /**
    * Sets updateTimeString
    *
    * @param string|null $updateTimeString 更新时间字符串
    *
    * @return $this
    */
    public function setUpdateTimeString($updateTimeString)
    {
        $this->container['updateTimeString'] = $updateTimeString;
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

