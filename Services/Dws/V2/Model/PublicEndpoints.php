<?php

namespace HuaweiCloud\SDK\Dws\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicEndpoints implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicEndpoints';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicConnectInfo  公网连接信息
    * jdbcUrl  公网JDBC URL，默认格式如下： jdbc:postgresql://<public_connect_info>/<YOUR_DATABASE_name>
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicConnectInfo' => 'string',
            'jdbcUrl' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicConnectInfo  公网连接信息
    * jdbcUrl  公网JDBC URL，默认格式如下： jdbc:postgresql://<public_connect_info>/<YOUR_DATABASE_name>
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicConnectInfo' => null,
        'jdbcUrl' => null
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
    * publicConnectInfo  公网连接信息
    * jdbcUrl  公网JDBC URL，默认格式如下： jdbc:postgresql://<public_connect_info>/<YOUR_DATABASE_name>
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicConnectInfo' => 'public_connect_info',
            'jdbcUrl' => 'jdbc_url'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicConnectInfo  公网连接信息
    * jdbcUrl  公网JDBC URL，默认格式如下： jdbc:postgresql://<public_connect_info>/<YOUR_DATABASE_name>
    *
    * @var string[]
    */
    protected static $setters = [
            'publicConnectInfo' => 'setPublicConnectInfo',
            'jdbcUrl' => 'setJdbcUrl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicConnectInfo  公网连接信息
    * jdbcUrl  公网JDBC URL，默认格式如下： jdbc:postgresql://<public_connect_info>/<YOUR_DATABASE_name>
    *
    * @var string[]
    */
    protected static $getters = [
            'publicConnectInfo' => 'getPublicConnectInfo',
            'jdbcUrl' => 'getJdbcUrl'
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
        $this->container['publicConnectInfo'] = isset($data['publicConnectInfo']) ? $data['publicConnectInfo'] : null;
        $this->container['jdbcUrl'] = isset($data['jdbcUrl']) ? $data['jdbcUrl'] : null;
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
    * Gets publicConnectInfo
    *  公网连接信息
    *
    * @return string|null
    */
    public function getPublicConnectInfo()
    {
        return $this->container['publicConnectInfo'];
    }

    /**
    * Sets publicConnectInfo
    *
    * @param string|null $publicConnectInfo 公网连接信息
    *
    * @return $this
    */
    public function setPublicConnectInfo($publicConnectInfo)
    {
        $this->container['publicConnectInfo'] = $publicConnectInfo;
        return $this;
    }

    /**
    * Gets jdbcUrl
    *  公网JDBC URL，默认格式如下： jdbc:postgresql://<public_connect_info>/<YOUR_DATABASE_name>
    *
    * @return string|null
    */
    public function getJdbcUrl()
    {
        return $this->container['jdbcUrl'];
    }

    /**
    * Sets jdbcUrl
    *
    * @param string|null $jdbcUrl 公网JDBC URL，默认格式如下： jdbc:postgresql://<public_connect_info>/<YOUR_DATABASE_name>
    *
    * @return $this
    */
    public function setJdbcUrl($jdbcUrl)
    {
        $this->container['jdbcUrl'] = $jdbcUrl;
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

