<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowAllConfigValueByTypeAndKeyResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowAllConfigValueByTypeAndKeyResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * comments  备注
    * configKey  配置键
    * configType  配置类型
    * configValue  配置值
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'comments' => 'string',
            'configKey' => 'string',
            'configType' => 'string',
            'configValue' => 'string',
            'createTime' => '\DateTime',
            'createUser' => 'string',
            'id' => 'string',
            'testServiceId' => 'string',
            'updateTime' => '\DateTime',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * comments  备注
    * configKey  配置键
    * configType  配置类型
    * configValue  配置值
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'comments' => null,
        'configKey' => null,
        'configType' => null,
        'configValue' => null,
        'createTime' => 'date-time',
        'createUser' => null,
        'id' => null,
        'testServiceId' => null,
        'updateTime' => 'date-time',
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
    * comments  备注
    * configKey  配置键
    * configType  配置类型
    * configValue  配置值
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'comments' => 'comments',
            'configKey' => 'config_key',
            'configType' => 'config_type',
            'configValue' => 'config_value',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'id' => 'id',
            'testServiceId' => 'test_service_id',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * comments  备注
    * configKey  配置键
    * configType  配置类型
    * configValue  配置值
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    *
    * @var string[]
    */
    protected static $setters = [
            'comments' => 'setComments',
            'configKey' => 'setConfigKey',
            'configType' => 'setConfigType',
            'configValue' => 'setConfigValue',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'id' => 'setId',
            'testServiceId' => 'setTestServiceId',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * comments  备注
    * configKey  配置键
    * configType  配置类型
    * configValue  配置值
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    *
    * @var string[]
    */
    protected static $getters = [
            'comments' => 'getComments',
            'configKey' => 'getConfigKey',
            'configType' => 'getConfigType',
            'configValue' => 'getConfigValue',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'id' => 'getId',
            'testServiceId' => 'getTestServiceId',
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
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['configKey'] = isset($data['configKey']) ? $data['configKey'] : null;
        $this->container['configType'] = isset($data['configType']) ? $data['configType'] : null;
        $this->container['configValue'] = isset($data['configValue']) ? $data['configValue'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['testServiceId'] = isset($data['testServiceId']) ? $data['testServiceId'] : null;
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
    * Gets comments
    *  备注
    *
    * @return string|null
    */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
    * Sets comments
    *
    * @param string|null $comments 备注
    *
    * @return $this
    */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;
        return $this;
    }

    /**
    * Gets configKey
    *  配置键
    *
    * @return string|null
    */
    public function getConfigKey()
    {
        return $this->container['configKey'];
    }

    /**
    * Sets configKey
    *
    * @param string|null $configKey 配置键
    *
    * @return $this
    */
    public function setConfigKey($configKey)
    {
        $this->container['configKey'] = $configKey;
        return $this;
    }

    /**
    * Gets configType
    *  配置类型
    *
    * @return string|null
    */
    public function getConfigType()
    {
        return $this->container['configType'];
    }

    /**
    * Sets configType
    *
    * @param string|null $configType 配置类型
    *
    * @return $this
    */
    public function setConfigType($configType)
    {
        $this->container['configType'] = $configType;
        return $this;
    }

    /**
    * Gets configValue
    *  配置值
    *
    * @return string|null
    */
    public function getConfigValue()
    {
        return $this->container['configValue'];
    }

    /**
    * Sets configValue
    *
    * @param string|null $configValue 配置值
    *
    * @return $this
    */
    public function setConfigValue($configValue)
    {
        $this->container['configValue'] = $configValue;
        return $this;
    }

    /**
    * Gets createTime
    *  创建时间
    *
    * @return \DateTime|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param \DateTime|null $createTime 创建时间
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
    * Gets id
    *  UUID
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
    * @param string|null $id UUID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets testServiceId
    *  服务id
    *
    * @return string|null
    */
    public function getTestServiceId()
    {
        return $this->container['testServiceId'];
    }

    /**
    * Sets testServiceId
    *
    * @param string|null $testServiceId 服务id
    *
    * @return $this
    */
    public function setTestServiceId($testServiceId)
    {
        $this->container['testServiceId'] = $testServiceId;
        return $this;
    }

    /**
    * Gets updateTime
    *  修改时间
    *
    * @return \DateTime|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param \DateTime|null $updateTime 修改时间
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

