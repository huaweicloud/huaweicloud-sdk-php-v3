<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApiInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApiInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  API签名状态（0：禁用，1：启用）
    * sourceId  访问密钥ID
    * sourceSecret  秘密访问密钥
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'int',
            'sourceId' => 'string',
            'sourceSecret' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  API签名状态（0：禁用，1：启用）
    * sourceId  访问密钥ID
    * sourceSecret  秘密访问密钥
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => null,
        'sourceId' => null,
        'sourceSecret' => null
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
    * status  API签名状态（0：禁用，1：启用）
    * sourceId  访问密钥ID
    * sourceSecret  秘密访问密钥
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'sourceId' => 'source_id',
            'sourceSecret' => 'source_secret'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  API签名状态（0：禁用，1：启用）
    * sourceId  访问密钥ID
    * sourceSecret  秘密访问密钥
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'sourceId' => 'setSourceId',
            'sourceSecret' => 'setSourceSecret'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  API签名状态（0：禁用，1：启用）
    * sourceId  访问密钥ID
    * sourceSecret  秘密访问密钥
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'sourceId' => 'getSourceId',
            'sourceSecret' => 'getSourceSecret'
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
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['sourceId'] = isset($data['sourceId']) ? $data['sourceId'] : null;
        $this->container['sourceSecret'] = isset($data['sourceSecret']) ? $data['sourceSecret'] : null;
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
    * Gets status
    *  API签名状态（0：禁用，1：启用）
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status API签名状态（0：禁用，1：启用）
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets sourceId
    *  访问密钥ID
    *
    * @return string|null
    */
    public function getSourceId()
    {
        return $this->container['sourceId'];
    }

    /**
    * Sets sourceId
    *
    * @param string|null $sourceId 访问密钥ID
    *
    * @return $this
    */
    public function setSourceId($sourceId)
    {
        $this->container['sourceId'] = $sourceId;
        return $this;
    }

    /**
    * Gets sourceSecret
    *  秘密访问密钥
    *
    * @return string|null
    */
    public function getSourceSecret()
    {
        return $this->container['sourceSecret'];
    }

    /**
    * Sets sourceSecret
    *
    * @param string|null $sourceSecret 秘密访问密钥
    *
    * @return $this
    */
    public function setSourceSecret($sourceSecret)
    {
        $this->container['sourceSecret'] = $sourceSecret;
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

