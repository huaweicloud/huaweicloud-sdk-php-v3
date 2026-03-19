<?php

namespace HuaweiCloud\SDK\DeH\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RespQuotaSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RespQuotaSet';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resource  配额类别。
    * hardLimit  配额最大限制。  “-1”表示资源配额不受限制。
    * used  已使用配额数量。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resource' => 'string',
            'hardLimit' => 'int',
            'used' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resource  配额类别。
    * hardLimit  配额最大限制。  “-1”表示资源配额不受限制。
    * used  已使用配额数量。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resource' => null,
        'hardLimit' => 'int32',
        'used' => 'int32'
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
    * resource  配额类别。
    * hardLimit  配额最大限制。  “-1”表示资源配额不受限制。
    * used  已使用配额数量。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resource' => 'resource',
            'hardLimit' => 'hard_limit',
            'used' => 'used'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resource  配额类别。
    * hardLimit  配额最大限制。  “-1”表示资源配额不受限制。
    * used  已使用配额数量。
    *
    * @var string[]
    */
    protected static $setters = [
            'resource' => 'setResource',
            'hardLimit' => 'setHardLimit',
            'used' => 'setUsed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resource  配额类别。
    * hardLimit  配额最大限制。  “-1”表示资源配额不受限制。
    * used  已使用配额数量。
    *
    * @var string[]
    */
    protected static $getters = [
            'resource' => 'getResource',
            'hardLimit' => 'getHardLimit',
            'used' => 'getUsed'
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
        $this->container['resource'] = isset($data['resource']) ? $data['resource'] : null;
        $this->container['hardLimit'] = isset($data['hardLimit']) ? $data['hardLimit'] : null;
        $this->container['used'] = isset($data['used']) ? $data['used'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['resource'] === null) {
            $invalidProperties[] = "'resource' can't be null";
        }
        if ($this->container['hardLimit'] === null) {
            $invalidProperties[] = "'hardLimit' can't be null";
        }
        if ($this->container['used'] === null) {
            $invalidProperties[] = "'used' can't be null";
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
    * Gets resource
    *  配额类别。
    *
    * @return string
    */
    public function getResource()
    {
        return $this->container['resource'];
    }

    /**
    * Sets resource
    *
    * @param string $resource 配额类别。
    *
    * @return $this
    */
    public function setResource($resource)
    {
        $this->container['resource'] = $resource;
        return $this;
    }

    /**
    * Gets hardLimit
    *  配额最大限制。  “-1”表示资源配额不受限制。
    *
    * @return int
    */
    public function getHardLimit()
    {
        return $this->container['hardLimit'];
    }

    /**
    * Sets hardLimit
    *
    * @param int $hardLimit 配额最大限制。  “-1”表示资源配额不受限制。
    *
    * @return $this
    */
    public function setHardLimit($hardLimit)
    {
        $this->container['hardLimit'] = $hardLimit;
        return $this;
    }

    /**
    * Gets used
    *  已使用配额数量。
    *
    * @return int
    */
    public function getUsed()
    {
        return $this->container['used'];
    }

    /**
    * Sets used
    *
    * @param int $used 已使用配额数量。
    *
    * @return $this
    */
    public function setUsed($used)
    {
        $this->container['used'] = $used;
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

