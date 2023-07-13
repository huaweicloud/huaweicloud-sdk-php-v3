<?php

namespace HuaweiCloud\SDK\Smn\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplicationEndpoint implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplicationEndpoint';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * createTime  创建application的时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * endpointUrn  Application endpoint的唯一资源标识。
    * userData  用户自定义数据 最大长度支持UTF-8编码后2048字节。
    * enabled  endpoint启用开关 true或false字符串。
    * token  设备token 最大长度512个字节。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'createTime' => 'string',
            'endpointUrn' => 'string',
            'userData' => 'string',
            'enabled' => 'string',
            'token' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * createTime  创建application的时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * endpointUrn  Application endpoint的唯一资源标识。
    * userData  用户自定义数据 最大长度支持UTF-8编码后2048字节。
    * enabled  endpoint启用开关 true或false字符串。
    * token  设备token 最大长度512个字节。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'createTime' => null,
        'endpointUrn' => null,
        'userData' => null,
        'enabled' => null,
        'token' => null
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
    * createTime  创建application的时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * endpointUrn  Application endpoint的唯一资源标识。
    * userData  用户自定义数据 最大长度支持UTF-8编码后2048字节。
    * enabled  endpoint启用开关 true或false字符串。
    * token  设备token 最大长度512个字节。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'createTime' => 'create_time',
            'endpointUrn' => 'endpoint_urn',
            'userData' => 'user_data',
            'enabled' => 'enabled',
            'token' => 'token'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * createTime  创建application的时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * endpointUrn  Application endpoint的唯一资源标识。
    * userData  用户自定义数据 最大长度支持UTF-8编码后2048字节。
    * enabled  endpoint启用开关 true或false字符串。
    * token  设备token 最大长度512个字节。
    *
    * @var string[]
    */
    protected static $setters = [
            'createTime' => 'setCreateTime',
            'endpointUrn' => 'setEndpointUrn',
            'userData' => 'setUserData',
            'enabled' => 'setEnabled',
            'token' => 'setToken'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * createTime  创建application的时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    * endpointUrn  Application endpoint的唯一资源标识。
    * userData  用户自定义数据 最大长度支持UTF-8编码后2048字节。
    * enabled  endpoint启用开关 true或false字符串。
    * token  设备token 最大长度512个字节。
    *
    * @var string[]
    */
    protected static $getters = [
            'createTime' => 'getCreateTime',
            'endpointUrn' => 'getEndpointUrn',
            'userData' => 'getUserData',
            'enabled' => 'getEnabled',
            'token' => 'getToken'
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
        $this->container['endpointUrn'] = isset($data['endpointUrn']) ? $data['endpointUrn'] : null;
        $this->container['userData'] = isset($data['userData']) ? $data['userData'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['token'] = isset($data['token']) ? $data['token'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createTime'] === null) {
            $invalidProperties[] = "'createTime' can't be null";
        }
        if ($this->container['endpointUrn'] === null) {
            $invalidProperties[] = "'endpointUrn' can't be null";
        }
        if ($this->container['userData'] === null) {
            $invalidProperties[] = "'userData' can't be null";
        }
        if ($this->container['enabled'] === null) {
            $invalidProperties[] = "'enabled' can't be null";
        }
        if ($this->container['token'] === null) {
            $invalidProperties[] = "'token' can't be null";
        }
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
    *  创建application的时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return string
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string $createTime 创建application的时间 时间格式为UTC时间，YYYY-MM-DDTHH:MM:SSZ。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets endpointUrn
    *  Application endpoint的唯一资源标识。
    *
    * @return string
    */
    public function getEndpointUrn()
    {
        return $this->container['endpointUrn'];
    }

    /**
    * Sets endpointUrn
    *
    * @param string $endpointUrn Application endpoint的唯一资源标识。
    *
    * @return $this
    */
    public function setEndpointUrn($endpointUrn)
    {
        $this->container['endpointUrn'] = $endpointUrn;
        return $this;
    }

    /**
    * Gets userData
    *  用户自定义数据 最大长度支持UTF-8编码后2048字节。
    *
    * @return string
    */
    public function getUserData()
    {
        return $this->container['userData'];
    }

    /**
    * Sets userData
    *
    * @param string $userData 用户自定义数据 最大长度支持UTF-8编码后2048字节。
    *
    * @return $this
    */
    public function setUserData($userData)
    {
        $this->container['userData'] = $userData;
        return $this;
    }

    /**
    * Gets enabled
    *  endpoint启用开关 true或false字符串。
    *
    * @return string
    */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
    * Sets enabled
    *
    * @param string $enabled endpoint启用开关 true或false字符串。
    *
    * @return $this
    */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;
        return $this;
    }

    /**
    * Gets token
    *  设备token 最大长度512个字节。
    *
    * @return string
    */
    public function getToken()
    {
        return $this->container['token'];
    }

    /**
    * Sets token
    *
    * @param string $token 设备token 最大长度512个字节。
    *
    * @return $this
    */
    public function setToken($token)
    {
        $this->container['token'] = $token;
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

