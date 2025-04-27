<?php

namespace HuaweiCloud\SDK\Dns\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePtrRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePtrRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'ptrdnames' => 'string[]',
            'description' => 'string',
            'ttl' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'ptrdnames' => null,
        'description' => null,
        'ttl' => 'int32'
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
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'ptrdnames' => 'ptrdnames',
            'description' => 'description',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    *
    * @var string[]
    */
    protected static $setters = [
            'ptrdnames' => 'setPtrdnames',
            'description' => 'setDescription',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * ptrdnames  反向解析记录对应的域名列表，最大个数不超过10个。
    * description  对反向解析记录的描述。
    * ttl  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    *
    * @var string[]
    */
    protected static $getters = [
            'ptrdnames' => 'getPtrdnames',
            'description' => 'getDescription',
            'ttl' => 'getTtl'
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
        $this->container['ptrdnames'] = isset($data['ptrdnames']) ? $data['ptrdnames'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['ttl'] = isset($data['ttl']) ? $data['ttl'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['ptrdnames'] === null) {
            $invalidProperties[] = "'ptrdnames' can't be null";
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
    * Gets ptrdnames
    *  反向解析记录对应的域名列表，最大个数不超过10个。
    *
    * @return string[]
    */
    public function getPtrdnames()
    {
        return $this->container['ptrdnames'];
    }

    /**
    * Sets ptrdnames
    *
    * @param string[] $ptrdnames 反向解析记录对应的域名列表，最大个数不超过10个。
    *
    * @return $this
    */
    public function setPtrdnames($ptrdnames)
    {
        $this->container['ptrdnames'] = $ptrdnames;
        return $this;
    }

    /**
    * Gets description
    *  对反向解析记录的描述。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 对反向解析记录的描述。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets ttl
    *  反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    *
    * @return int|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param int|null $ttl 反向解析记录在本地DNS服务器的缓存时间，缓存时间越长更新生效越慢，以秒为单位。取值范围：1～2147483647
    *
    * @return $this
    */
    public function setTtl($ttl)
    {
        $this->container['ttl'] = $ttl;
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

