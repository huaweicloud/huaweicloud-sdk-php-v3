<?php

namespace HuaweiCloud\SDK\Bms\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SecurityGroupsInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SecurityGroupsInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  裸金属服务器对应的安全组ID，对创建裸金属服务器中配置的所有网卡生效。当该参数未指定时默认给裸金属服务器绑定default安全组。当该参数传值（UUID格式）时需要指定已有安全组的ID。获取已有安全组的方法请参见《虚拟私有云API参考》的“查询安全组列表”章节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  裸金属服务器对应的安全组ID，对创建裸金属服务器中配置的所有网卡生效。当该参数未指定时默认给裸金属服务器绑定default安全组。当该参数传值（UUID格式）时需要指定已有安全组的ID。获取已有安全组的方法请参见《虚拟私有云API参考》的“查询安全组列表”章节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => 'uuid'
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
    * id  裸金属服务器对应的安全组ID，对创建裸金属服务器中配置的所有网卡生效。当该参数未指定时默认给裸金属服务器绑定default安全组。当该参数传值（UUID格式）时需要指定已有安全组的ID。获取已有安全组的方法请参见《虚拟私有云API参考》的“查询安全组列表”章节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  裸金属服务器对应的安全组ID，对创建裸金属服务器中配置的所有网卡生效。当该参数未指定时默认给裸金属服务器绑定default安全组。当该参数传值（UUID格式）时需要指定已有安全组的ID。获取已有安全组的方法请参见《虚拟私有云API参考》的“查询安全组列表”章节。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  裸金属服务器对应的安全组ID，对创建裸金属服务器中配置的所有网卡生效。当该参数未指定时默认给裸金属服务器绑定default安全组。当该参数传值（UUID格式）时需要指定已有安全组的ID。获取已有安全组的方法请参见《虚拟私有云API参考》的“查询安全组列表”章节。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId'
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
    *  裸金属服务器对应的安全组ID，对创建裸金属服务器中配置的所有网卡生效。当该参数未指定时默认给裸金属服务器绑定default安全组。当该参数传值（UUID格式）时需要指定已有安全组的ID。获取已有安全组的方法请参见《虚拟私有云API参考》的“查询安全组列表”章节。
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
    * @param string|null $id 裸金属服务器对应的安全组ID，对创建裸金属服务器中配置的所有网卡生效。当该参数未指定时默认给裸金属服务器绑定default安全组。当该参数传值（UUID格式）时需要指定已有安全组的ID。获取已有安全组的方法请参见《虚拟私有云API参考》的“查询安全组列表”章节。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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

