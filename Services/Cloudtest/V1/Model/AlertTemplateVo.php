<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlertTemplateVo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlertTemplateVo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * alertLevels  告警级别列表
    * createTime  创建时间
    * createUser  创建人
    * id  唯一ID，主键
    * name  告警模板名称
    * remarks  备注
    * testServiceId  服务ID
    * updateTime  创建时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'alertLevels' => '\HuaweiCloud\SDK\Cloudtest\V1\Model\AlertLevel[]',
            'createTime' => 'string',
            'createUser' => 'string',
            'id' => 'string',
            'name' => 'string',
            'remarks' => 'string',
            'testServiceId' => 'string',
            'updateTime' => 'string',
            'updateUser' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * alertLevels  告警级别列表
    * createTime  创建时间
    * createUser  创建人
    * id  唯一ID，主键
    * name  告警模板名称
    * remarks  备注
    * testServiceId  服务ID
    * updateTime  创建时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'alertLevels' => null,
        'createTime' => null,
        'createUser' => null,
        'id' => null,
        'name' => null,
        'remarks' => null,
        'testServiceId' => null,
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
    * alertLevels  告警级别列表
    * createTime  创建时间
    * createUser  创建人
    * id  唯一ID，主键
    * name  告警模板名称
    * remarks  备注
    * testServiceId  服务ID
    * updateTime  创建时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'alertLevels' => 'alertLevels',
            'createTime' => 'create_time',
            'createUser' => 'create_user',
            'id' => 'id',
            'name' => 'name',
            'remarks' => 'remarks',
            'testServiceId' => 'test_service_id',
            'updateTime' => 'update_time',
            'updateUser' => 'update_user'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * alertLevels  告警级别列表
    * createTime  创建时间
    * createUser  创建人
    * id  唯一ID，主键
    * name  告警模板名称
    * remarks  备注
    * testServiceId  服务ID
    * updateTime  创建时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $setters = [
            'alertLevels' => 'setAlertLevels',
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'id' => 'setId',
            'name' => 'setName',
            'remarks' => 'setRemarks',
            'testServiceId' => 'setTestServiceId',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * alertLevels  告警级别列表
    * createTime  创建时间
    * createUser  创建人
    * id  唯一ID，主键
    * name  告警模板名称
    * remarks  备注
    * testServiceId  服务ID
    * updateTime  创建时间
    * updateUser  更新人
    *
    * @var string[]
    */
    protected static $getters = [
            'alertLevels' => 'getAlertLevels',
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'id' => 'getId',
            'name' => 'getName',
            'remarks' => 'getRemarks',
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
        $this->container['alertLevels'] = isset($data['alertLevels']) ? $data['alertLevels'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
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
    * Gets alertLevels
    *  告警级别列表
    *
    * @return \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertLevel[]|null
    */
    public function getAlertLevels()
    {
        return $this->container['alertLevels'];
    }

    /**
    * Sets alertLevels
    *
    * @param \HuaweiCloud\SDK\Cloudtest\V1\Model\AlertLevel[]|null $alertLevels 告警级别列表
    *
    * @return $this
    */
    public function setAlertLevels($alertLevels)
    {
        $this->container['alertLevels'] = $alertLevels;
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
    * Gets id
    *  唯一ID，主键
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
    * @param string|null $id 唯一ID，主键
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
    *  告警模板名称
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
    * @param string|null $name 告警模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets remarks
    *  备注
    *
    * @return string|null
    */
    public function getRemarks()
    {
        return $this->container['remarks'];
    }

    /**
    * Sets remarks
    *
    * @param string|null $remarks 备注
    *
    * @return $this
    */
    public function setRemarks($remarks)
    {
        $this->container['remarks'] = $remarks;
        return $this;
    }

    /**
    * Gets testServiceId
    *  服务ID
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
    * @param string|null $testServiceId 服务ID
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
    *  创建时间
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
    * @param string|null $updateTime 创建时间
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

