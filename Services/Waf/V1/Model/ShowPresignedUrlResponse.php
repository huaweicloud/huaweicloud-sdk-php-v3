<?php

namespace HuaweiCloud\SDK\Waf\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowPresignedUrlResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowPresignedUrlResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * presignedUrl  预签名URL
    * expire  过期时间（秒）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'presignedUrl' => 'string',
            'expire' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * presignedUrl  预签名URL
    * expire  过期时间（秒）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'presignedUrl' => null,
        'expire' => 'int64'
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
    * presignedUrl  预签名URL
    * expire  过期时间（秒）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'presignedUrl' => 'presigned_url',
            'expire' => 'expire'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * presignedUrl  预签名URL
    * expire  过期时间（秒）
    *
    * @var string[]
    */
    protected static $setters = [
            'presignedUrl' => 'setPresignedUrl',
            'expire' => 'setExpire'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * presignedUrl  预签名URL
    * expire  过期时间（秒）
    *
    * @var string[]
    */
    protected static $getters = [
            'presignedUrl' => 'getPresignedUrl',
            'expire' => 'getExpire'
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
        $this->container['presignedUrl'] = isset($data['presignedUrl']) ? $data['presignedUrl'] : null;
        $this->container['expire'] = isset($data['expire']) ? $data['expire'] : null;
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
    * Gets presignedUrl
    *  预签名URL
    *
    * @return string|null
    */
    public function getPresignedUrl()
    {
        return $this->container['presignedUrl'];
    }

    /**
    * Sets presignedUrl
    *
    * @param string|null $presignedUrl 预签名URL
    *
    * @return $this
    */
    public function setPresignedUrl($presignedUrl)
    {
        $this->container['presignedUrl'] = $presignedUrl;
        return $this;
    }

    /**
    * Gets expire
    *  过期时间（秒）
    *
    * @return int|null
    */
    public function getExpire()
    {
        return $this->container['expire'];
    }

    /**
    * Sets expire
    *
    * @param int|null $expire 过期时间（秒）
    *
    * @return $this
    */
    public function setExpire($expire)
    {
        $this->container['expire'] = $expire;
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

