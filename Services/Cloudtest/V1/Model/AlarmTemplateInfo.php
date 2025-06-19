<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AlarmTemplateInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AlarmTemplateInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * remarks  备注
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    * name  模板名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'createUser' => 'string',
            'id' => 'string',
            'remarks' => 'string',
            'testServiceId' => 'string',
            'updateTime' => 'string',
            'updateUser' => 'string',
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * remarks  备注
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    * name  模板名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'createUser' => null,
        'id' => null,
        'remarks' => null,
        'testServiceId' => null,
        'updateTime' => null,
        'updateUser' => null,
        'name' => null
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
    * createUser  创建者
    * id  UUID
    * remarks  备注
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    * name  模板名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'createTime',
            'createUser' => 'createUser',
            'id' => 'id',
            'remarks' => 'remarks',
            'testServiceId' => 'testServiceId',
            'updateTime' => 'updateTime',
            'updateUser' => 'updateUser',
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * remarks  备注
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    * name  模板名称
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'createUser' => 'setCreateUser',
            'id' => 'setId',
            'remarks' => 'setRemarks',
            'testServiceId' => 'setTestServiceId',
            'updateTime' => 'setUpdateTime',
            'updateUser' => 'setUpdateUser',
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建时间
    * createUser  创建者
    * id  UUID
    * remarks  备注
    * testServiceId  服务id
    * updateTime  修改时间
    * updateUser  修改者
    * name  模板名称
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'createUser' => 'getCreateUser',
            'id' => 'getId',
            'remarks' => 'getRemarks',
            'testServiceId' => 'getTestServiceId',
            'updateTime' => 'getUpdateTime',
            'updateUser' => 'getUpdateUser',
            'name' => 'getName'
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
        $this->container['createUser'] = isset($data['createUser']) ? $data['createUser'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['remarks'] = isset($data['remarks']) ? $data['remarks'] : null;
        $this->container['testServiceId'] = isset($data['testServiceId']) ? $data['testServiceId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['updateUser'] = isset($data['updateUser']) ? $data['updateUser'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
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
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime 修改时间
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
    * Gets name
    *  模板名称
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
    * @param string|null $name 模板名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
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

