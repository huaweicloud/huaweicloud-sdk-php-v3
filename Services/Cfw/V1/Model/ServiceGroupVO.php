<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ServiceGroupVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ServiceGroupVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * name  服务组名称
    * protocols  协议列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    * setId  服务组ID
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'name' => 'string',
            'protocols' => 'int[]',
            'serviceSetType' => 'int',
            'setId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * name  服务组名称
    * protocols  协议列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    * setId  服务组ID
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'name' => null,
        'protocols' => 'int32',
        'serviceSetType' => 'int32',
        'setId' => null
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
    * name  服务组名称
    * protocols  协议列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    * setId  服务组ID
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'name' => 'name',
            'protocols' => 'protocols',
            'serviceSetType' => 'service_set_type',
            'setId' => 'set_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * name  服务组名称
    * protocols  协议列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    * setId  服务组ID
    *
    * @var string[]
    */
    protected static $setters = [
            'name' => 'setName',
            'protocols' => 'setProtocols',
            'serviceSetType' => 'setServiceSetType',
            'setId' => 'setSetId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * name  服务组名称
    * protocols  协议列表
    * serviceSetType  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    * setId  服务组ID
    *
    * @var string[]
    */
    protected static $getters = [
            'name' => 'getName',
            'protocols' => 'getProtocols',
            'serviceSetType' => 'getServiceSetType',
            'setId' => 'getSetId'
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
        $this->container['protocols'] = isset($data['protocols']) ? $data['protocols'] : null;
        $this->container['serviceSetType'] = isset($data['serviceSetType']) ? $data['serviceSetType'] : null;
        $this->container['setId'] = isset($data['setId']) ? $data['setId'] : null;
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
    *  服务组名称
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
    * @param string|null $name 服务组名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets protocols
    *  协议列表
    *
    * @return int[]|null
    */
    public function getProtocols()
    {
        return $this->container['protocols'];
    }

    /**
    * Sets protocols
    *
    * @param int[]|null $protocols 协议列表
    *
    * @return $this
    */
    public function setProtocols($protocols)
    {
        $this->container['protocols'] = $protocols;
        return $this;
    }

    /**
    * Gets serviceSetType
    *  服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @return int|null
    */
    public function getServiceSetType()
    {
        return $this->container['serviceSetType'];
    }

    /**
    * Sets serviceSetType
    *
    * @param int|null $serviceSetType 服务组类型，0表示自定义服务组，1表示常用WEB服务，2表示常用远程登录和PING，3表示常用数据库
    *
    * @return $this
    */
    public function setServiceSetType($serviceSetType)
    {
        $this->container['serviceSetType'] = $serviceSetType;
        return $this;
    }

    /**
    * Gets setId
    *  服务组ID
    *
    * @return string|null
    */
    public function getSetId()
    {
        return $this->container['setId'];
    }

    /**
    * Sets setId
    *
    * @param string|null $setId 服务组ID
    *
    * @return $this
    */
    public function setSetId($setId)
    {
        $this->container['setId'] = $setId;
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

