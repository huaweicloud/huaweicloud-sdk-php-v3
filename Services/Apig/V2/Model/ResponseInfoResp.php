<?php

namespace HuaweiCloud\SDK\Apig\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResponseInfoResp implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResponseInfoResp';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * status  响应的HTTP状态码。范围为200-599，但不允许为444。
    * body  响应的Body模板
    * default  是否为默认响应
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'status' => 'int',
            'body' => 'string',
            'default' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * status  响应的HTTP状态码。范围为200-599，但不允许为444。
    * body  响应的Body模板
    * default  是否为默认响应
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'status' => 'int32',
        'body' => null,
        'default' => null
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
    * status  响应的HTTP状态码。范围为200-599，但不允许为444。
    * body  响应的Body模板
    * default  是否为默认响应
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'status' => 'status',
            'body' => 'body',
            'default' => 'default'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * status  响应的HTTP状态码。范围为200-599，但不允许为444。
    * body  响应的Body模板
    * default  是否为默认响应
    *
    * @var string[]
    */
    protected static $setters = [
            'status' => 'setStatus',
            'body' => 'setBody',
            'default' => 'setDefault'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * status  响应的HTTP状态码。范围为200-599，但不允许为444。
    * body  响应的Body模板
    * default  是否为默认响应
    *
    * @var string[]
    */
    protected static $getters = [
            'status' => 'getStatus',
            'body' => 'getBody',
            'default' => 'getDefault'
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
        $this->container['body'] = isset($data['body']) ? $data['body'] : null;
        $this->container['default'] = isset($data['default']) ? $data['default'] : null;
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
    *  响应的HTTP状态码。范围为200-599，但不允许为444。
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
    * @param int|null $status 响应的HTTP状态码。范围为200-599，但不允许为444。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets body
    *  响应的Body模板
    *
    * @return string|null
    */
    public function getBody()
    {
        return $this->container['body'];
    }

    /**
    * Sets body
    *
    * @param string|null $body 响应的Body模板
    *
    * @return $this
    */
    public function setBody($body)
    {
        $this->container['body'] = $body;
        return $this;
    }

    /**
    * Gets default
    *  是否为默认响应
    *
    * @return bool|null
    */
    public function getDefault()
    {
        return $this->container['default'];
    }

    /**
    * Sets default
    *
    * @param bool|null $default 是否为默认响应
    *
    * @return $this
    */
    public function setDefault($default)
    {
        $this->container['default'] = $default;
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

