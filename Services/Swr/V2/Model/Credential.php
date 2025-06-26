<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Credential implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Credential';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  认证方式，目前只支持basic
    * accessKey  访问ID
    * accessSecret  访问密码
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'accessKey' => 'string',
            'accessSecret' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  认证方式，目前只支持basic
    * accessKey  访问ID
    * accessSecret  访问密码
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'accessKey' => null,
        'accessSecret' => null
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
    * type  认证方式，目前只支持basic
    * accessKey  访问ID
    * accessSecret  访问密码
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'accessKey' => 'access_key',
            'accessSecret' => 'access_secret'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  认证方式，目前只支持basic
    * accessKey  访问ID
    * accessSecret  访问密码
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'accessKey' => 'setAccessKey',
            'accessSecret' => 'setAccessSecret'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  认证方式，目前只支持basic
    * accessKey  访问ID
    * accessSecret  访问密码
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'accessKey' => 'getAccessKey',
            'accessSecret' => 'getAccessSecret'
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['accessKey'] = isset($data['accessKey']) ? $data['accessKey'] : null;
        $this->container['accessSecret'] = isset($data['accessSecret']) ? $data['accessSecret'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['accessKey'] === null) {
            $invalidProperties[] = "'accessKey' can't be null";
        }
        if ($this->container['accessSecret'] === null) {
            $invalidProperties[] = "'accessSecret' can't be null";
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
    * Gets type
    *  认证方式，目前只支持basic
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 认证方式，目前只支持basic
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets accessKey
    *  访问ID
    *
    * @return string
    */
    public function getAccessKey()
    {
        return $this->container['accessKey'];
    }

    /**
    * Sets accessKey
    *
    * @param string $accessKey 访问ID
    *
    * @return $this
    */
    public function setAccessKey($accessKey)
    {
        $this->container['accessKey'] = $accessKey;
        return $this;
    }

    /**
    * Gets accessSecret
    *  访问密码
    *
    * @return string
    */
    public function getAccessSecret()
    {
        return $this->container['accessSecret'];
    }

    /**
    * Sets accessSecret
    *
    * @param string $accessSecret 访问密码
    *
    * @return $this
    */
    public function setAccessSecret($accessSecret)
    {
        $this->container['accessSecret'] = $accessSecret;
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

