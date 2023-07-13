<?php

namespace HuaweiCloud\SDK\Ecs\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class NovaListKeypairsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'NovaListKeypairsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * limit  查询返回秘钥数量限制。  在微版本2.35后支持
    * marker  从marker指定的keypair的名称的下一条数据开始查询。  在微版本2.35后支持。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'limit' => 'int',
            'marker' => 'string',
            'openStackApiVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * limit  查询返回秘钥数量限制。  在微版本2.35后支持
    * marker  从marker指定的keypair的名称的下一条数据开始查询。  在微版本2.35后支持。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'limit' => 'int32',
        'marker' => null,
        'openStackApiVersion' => null
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
    * limit  查询返回秘钥数量限制。  在微版本2.35后支持
    * marker  从marker指定的keypair的名称的下一条数据开始查询。  在微版本2.35后支持。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'limit' => 'limit',
            'marker' => 'marker',
            'openStackApiVersion' => 'OpenStack-API-Version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * limit  查询返回秘钥数量限制。  在微版本2.35后支持
    * marker  从marker指定的keypair的名称的下一条数据开始查询。  在微版本2.35后支持。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $setters = [
            'limit' => 'setLimit',
            'marker' => 'setMarker',
            'openStackApiVersion' => 'setOpenStackApiVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * limit  查询返回秘钥数量限制。  在微版本2.35后支持
    * marker  从marker指定的keypair的名称的下一条数据开始查询。  在微版本2.35后支持。
    * openStackApiVersion  微版本头
    *
    * @var string[]
    */
    protected static $getters = [
            'limit' => 'getLimit',
            'marker' => 'getMarker',
            'openStackApiVersion' => 'getOpenStackApiVersion'
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
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['openStackApiVersion'] = isset($data['openStackApiVersion']) ? $data['openStackApiVersion'] : null;
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
    * Gets limit
    *  查询返回秘钥数量限制。  在微版本2.35后支持
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 查询返回秘钥数量限制。  在微版本2.35后支持
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets marker
    *  从marker指定的keypair的名称的下一条数据开始查询。  在微版本2.35后支持。
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 从marker指定的keypair的名称的下一条数据开始查询。  在微版本2.35后支持。
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets openStackApiVersion
    *  微版本头
    *
    * @return string|null
    */
    public function getOpenStackApiVersion()
    {
        return $this->container['openStackApiVersion'];
    }

    /**
    * Sets openStackApiVersion
    *
    * @param string|null $openStackApiVersion 微版本头
    *
    * @return $this
    */
    public function setOpenStackApiVersion($openStackApiVersion)
    {
        $this->container['openStackApiVersion'] = $openStackApiVersion;
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

