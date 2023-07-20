<?php

namespace HuaweiCloud\SDK\Dds\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowReplSetNameResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowReplSetNameResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  连接地址复制集名称：实例高可用连接地址的唯一标识。该参数可以将读请求发送到副本集实例的所有节点。副本集中的所有主机必须具有相同的集名称。字符限制：大小写字母，数字，下划线组合，字母为首，长度限制在3-128
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  连接地址复制集名称：实例高可用连接地址的唯一标识。该参数可以将读请求发送到副本集实例的所有节点。副本集中的所有主机必须具有相同的集名称。字符限制：大小写字母，数字，下划线组合，字母为首，长度限制在3-128
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
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
    * name  连接地址复制集名称：实例高可用连接地址的唯一标识。该参数可以将读请求发送到副本集实例的所有节点。副本集中的所有主机必须具有相同的集名称。字符限制：大小写字母，数字，下划线组合，字母为首，长度限制在3-128
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  连接地址复制集名称：实例高可用连接地址的唯一标识。该参数可以将读请求发送到副本集实例的所有节点。副本集中的所有主机必须具有相同的集名称。字符限制：大小写字母，数字，下划线组合，字母为首，长度限制在3-128
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  连接地址复制集名称：实例高可用连接地址的唯一标识。该参数可以将读请求发送到副本集实例的所有节点。副本集中的所有主机必须具有相同的集名称。字符限制：大小写字母，数字，下划线组合，字母为首，长度限制在3-128
    *
    * @var string[]
    */
    protected static $getters = [
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
    * Gets name
    *  连接地址复制集名称：实例高可用连接地址的唯一标识。该参数可以将读请求发送到副本集实例的所有节点。副本集中的所有主机必须具有相同的集名称。字符限制：大小写字母，数字，下划线组合，字母为首，长度限制在3-128
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
    * @param string|null $name 连接地址复制集名称：实例高可用连接地址的唯一标识。该参数可以将读请求发送到副本集实例的所有节点。副本集中的所有主机必须具有相同的集名称。字符限制：大小写字母，数字，下划线组合，字母为首，长度限制在3-128
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

