<?php

namespace HuaweiCloud\SDK\Cloudtest\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class TestPlanDetailCreator implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'TestPlanDetail_creator';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  测试计划创建者id
    * nickName  测试计划创建者的昵称，当用户未设置昵称时不返回该字段
    * userName  测试计划创建者的用户名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'nickName' => 'string',
            'userName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  测试计划创建者id
    * nickName  测试计划创建者的昵称，当用户未设置昵称时不返回该字段
    * userName  测试计划创建者的用户名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'nickName' => null,
        'userName' => null
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
    * id  测试计划创建者id
    * nickName  测试计划创建者的昵称，当用户未设置昵称时不返回该字段
    * userName  测试计划创建者的用户名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'nickName' => 'nick_name',
            'userName' => 'user_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  测试计划创建者id
    * nickName  测试计划创建者的昵称，当用户未设置昵称时不返回该字段
    * userName  测试计划创建者的用户名称
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'nickName' => 'setNickName',
            'userName' => 'setUserName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  测试计划创建者id
    * nickName  测试计划创建者的昵称，当用户未设置昵称时不返回该字段
    * userName  测试计划创建者的用户名称
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'nickName' => 'getNickName',
            'userName' => 'getUserName'
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
        $this->container['nickName'] = isset($data['nickName']) ? $data['nickName'] : null;
        $this->container['userName'] = isset($data['userName']) ? $data['userName'] : null;
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
    *  测试计划创建者id
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
    * @param string|null $id 测试计划创建者id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets nickName
    *  测试计划创建者的昵称，当用户未设置昵称时不返回该字段
    *
    * @return string|null
    */
    public function getNickName()
    {
        return $this->container['nickName'];
    }

    /**
    * Sets nickName
    *
    * @param string|null $nickName 测试计划创建者的昵称，当用户未设置昵称时不返回该字段
    *
    * @return $this
    */
    public function setNickName($nickName)
    {
        $this->container['nickName'] = $nickName;
        return $this;
    }

    /**
    * Gets userName
    *  测试计划创建者的用户名称
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
    * @param string|null $userName 测试计划创建者的用户名称
    *
    * @return $this
    */
    public function setUserName($userName)
    {
        $this->container['userName'] = $userName;
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

