<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCollectConfigResponseBodyTarget implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCollectConfigResponseBody_target';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * pipe  管道
    * shards  分片
    * storageMode  存储模式
    * ttl  ttl时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'pipe' => 'string',
            'shards' => 'float',
            'storageMode' => 'string',
            'ttl' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * pipe  管道
    * shards  分片
    * storageMode  存储模式
    * ttl  ttl时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'pipe' => null,
        'shards' => null,
        'storageMode' => null,
        'ttl' => null
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
    * pipe  管道
    * shards  分片
    * storageMode  存储模式
    * ttl  ttl时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'pipe' => 'pipe',
            'shards' => 'shards',
            'storageMode' => 'storage_mode',
            'ttl' => 'ttl'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * pipe  管道
    * shards  分片
    * storageMode  存储模式
    * ttl  ttl时间
    *
    * @var string[]
    */
    protected static $setters = [
            'pipe' => 'setPipe',
            'shards' => 'setShards',
            'storageMode' => 'setStorageMode',
            'ttl' => 'setTtl'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * pipe  管道
    * shards  分片
    * storageMode  存储模式
    * ttl  ttl时间
    *
    * @var string[]
    */
    protected static $getters = [
            'pipe' => 'getPipe',
            'shards' => 'getShards',
            'storageMode' => 'getStorageMode',
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
        $this->container['pipe'] = isset($data['pipe']) ? $data['pipe'] : null;
        $this->container['shards'] = isset($data['shards']) ? $data['shards'] : null;
        $this->container['storageMode'] = isset($data['storageMode']) ? $data['storageMode'] : null;
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
            if (!is_null($this->container['pipe']) && (mb_strlen($this->container['pipe']) > 64)) {
                $invalidProperties[] = "invalid value for 'pipe', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['pipe']) && (mb_strlen($this->container['pipe']) < 0)) {
                $invalidProperties[] = "invalid value for 'pipe', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['shards']) && ($this->container['shards'] > 1E+4)) {
                $invalidProperties[] = "invalid value for 'shards', must be smaller than or equal to 1E+4.";
            }
            if (!is_null($this->container['shards']) && ($this->container['shards'] < 0)) {
                $invalidProperties[] = "invalid value for 'shards', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['storageMode']) && (mb_strlen($this->container['storageMode']) > 64)) {
                $invalidProperties[] = "invalid value for 'storageMode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['storageMode']) && (mb_strlen($this->container['storageMode']) < 0)) {
                $invalidProperties[] = "invalid value for 'storageMode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] > 3.6E+2)) {
                $invalidProperties[] = "invalid value for 'ttl', must be smaller than or equal to 3.6E+2.";
            }
            if (!is_null($this->container['ttl']) && ($this->container['ttl'] < 0)) {
                $invalidProperties[] = "invalid value for 'ttl', must be bigger than or equal to 0.";
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
    * Gets pipe
    *  管道
    *
    * @return string|null
    */
    public function getPipe()
    {
        return $this->container['pipe'];
    }

    /**
    * Sets pipe
    *
    * @param string|null $pipe 管道
    *
    * @return $this
    */
    public function setPipe($pipe)
    {
        $this->container['pipe'] = $pipe;
        return $this;
    }

    /**
    * Gets shards
    *  分片
    *
    * @return float|null
    */
    public function getShards()
    {
        return $this->container['shards'];
    }

    /**
    * Sets shards
    *
    * @param float|null $shards 分片
    *
    * @return $this
    */
    public function setShards($shards)
    {
        $this->container['shards'] = $shards;
        return $this;
    }

    /**
    * Gets storageMode
    *  存储模式
    *
    * @return string|null
    */
    public function getStorageMode()
    {
        return $this->container['storageMode'];
    }

    /**
    * Sets storageMode
    *
    * @param string|null $storageMode 存储模式
    *
    * @return $this
    */
    public function setStorageMode($storageMode)
    {
        $this->container['storageMode'] = $storageMode;
        return $this;
    }

    /**
    * Gets ttl
    *  ttl时间
    *
    * @return float|null
    */
    public function getTtl()
    {
        return $this->container['ttl'];
    }

    /**
    * Sets ttl
    *
    * @param float|null $ttl ttl时间
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

