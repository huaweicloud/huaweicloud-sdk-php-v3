<?php

namespace HuaweiCloud\SDK\Dli\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListGlobalValue implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListGlobalValue';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  全局变量ID
    * varName  变量名称
    * varValue  变量的值
    * projectId  项目ID
    * userId  用户ID
    * isSensitive  是否为敏感变量
    * userName  用户名称
    * createTime  创建时间。为UTC的时间戳。
    * updateTime  更新时间。为UTC的时间戳。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'varName' => 'string',
            'varValue' => 'string',
            'projectId' => 'string',
            'userId' => 'string',
            'isSensitive' => 'bool',
            'userName' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  全局变量ID
    * varName  变量名称
    * varValue  变量的值
    * projectId  项目ID
    * userId  用户ID
    * isSensitive  是否为敏感变量
    * userName  用户名称
    * createTime  创建时间。为UTC的时间戳。
    * updateTime  更新时间。为UTC的时间戳。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'int64',
        'varName' => null,
        'varValue' => null,
        'projectId' => null,
        'userId' => null,
        'isSensitive' => null,
        'userName' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64'
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
    * id  全局变量ID
    * varName  变量名称
    * varValue  变量的值
    * projectId  项目ID
    * userId  用户ID
    * isSensitive  是否为敏感变量
    * userName  用户名称
    * createTime  创建时间。为UTC的时间戳。
    * updateTime  更新时间。为UTC的时间戳。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'varName' => 'var_name',
            'varValue' => 'var_value',
            'projectId' => 'project_id',
            'userId' => 'user_id',
            'isSensitive' => 'is_sensitive',
            'userName' => 'user_name',
            'createTime' => 'create_time',
            'updateTime' => 'update_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  全局变量ID
    * varName  变量名称
    * varValue  变量的值
    * projectId  项目ID
    * userId  用户ID
    * isSensitive  是否为敏感变量
    * userName  用户名称
    * createTime  创建时间。为UTC的时间戳。
    * updateTime  更新时间。为UTC的时间戳。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'varName' => 'setVarName',
            'varValue' => 'setVarValue',
            'projectId' => 'setProjectId',
            'userId' => 'setUserId',
            'isSensitive' => 'setIsSensitive',
            'userName' => 'setUserName',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  全局变量ID
    * varName  变量名称
    * varValue  变量的值
    * projectId  项目ID
    * userId  用户ID
    * isSensitive  是否为敏感变量
    * userName  用户名称
    * createTime  创建时间。为UTC的时间戳。
    * updateTime  更新时间。为UTC的时间戳。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'varName' => 'getVarName',
            'varValue' => 'getVarValue',
            'projectId' => 'getProjectId',
            'userId' => 'getUserId',
            'isSensitive' => 'getIsSensitive',
            'userName' => 'getUserName',
            'createTime' => 'getCreateTime',
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['varName'] = isset($data['varName']) ? $data['varName'] : null;
        $this->container['varValue'] = isset($data['varValue']) ? $data['varValue'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['userId'] = isset($data['userId']) ? $data['userId'] : null;
        $this->container['isSensitive'] = isset($data['isSensitive']) ? $data['isSensitive'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
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
    * Gets id
    *  全局变量ID
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
    * @param int|null $id 全局变量ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets varName
    *  变量名称
    *
    * @return string|null
    */
    public function getVarName()
    {
        return $this->container['varName'];
    }

    /**
    * Sets varName
    *
    * @param string|null $varName 变量名称
    *
    * @return $this
    */
    public function setVarName($varName)
    {
        $this->container['varName'] = $varName;
        return $this;
    }

    /**
    * Gets varValue
    *  变量的值
    *
    * @return string|null
    */
    public function getVarValue()
    {
        return $this->container['varValue'];
    }

    /**
    * Sets varValue
    *
    * @param string|null $varValue 变量的值
    *
    * @return $this
    */
    public function setVarValue($varValue)
    {
        $this->container['varValue'] = $varValue;
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
    * Gets userId
    *  用户ID
    *
    * @return string|null
    */
    public function getUserId()
    {
        return $this->container['userId'];
    }

    /**
    * Sets userId
    *
    * @param string|null $userId 用户ID
    *
    * @return $this
    */
    public function setUserId($userId)
    {
        $this->container['userId'] = $userId;
        return $this;
    }

    /**
    * Gets isSensitive
    *  是否为敏感变量
    *
    * @return bool|null
    */
    public function getIsSensitive()
    {
        return $this->container['isSensitive'];
    }

    /**
    * Sets isSensitive
    *
    * @param bool|null $isSensitive 是否为敏感变量
    *
    * @return $this
    */
    public function setIsSensitive($isSensitive)
    {
        $this->container['isSensitive'] = $isSensitive;
        return $this;
    }

    /**
    * Gets userName
    *  用户名称
    *
    * @return string|null
    */
    public function getUserName()
    {
        return $this->container['userName'];
    }

    /**
    * Sets userName
    *
    * @param string|null $userName 用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间。为UTC的时间戳。
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
    * @param int|null $createTime 创建时间。为UTC的时间戳。
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
    *  更新时间。为UTC的时间戳。
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
    * @param int|null $updateTime 更新时间。为UTC的时间戳。
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

