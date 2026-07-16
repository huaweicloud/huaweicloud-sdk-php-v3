<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PoolStatusDriver implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PoolStatus_driver';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * gpu  gpu
    * npu  npu
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'gpu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriverStatus',
            'npu' => '\HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriverStatus'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * gpu  gpu
    * npu  npu
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'gpu' => null,
        'npu' => null
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
    * gpu  gpu
    * npu  npu
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'gpu' => 'gpu',
            'npu' => 'npu'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * gpu  gpu
    * npu  npu
    *
    * @var string[]
    */
    protected static $setters = [
            'gpu' => 'setGpu',
            'npu' => 'setNpu'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * gpu  gpu
    * npu  npu
    *
    * @var string[]
    */
    protected static $getters = [
            'gpu' => 'getGpu',
            'npu' => 'getNpu'
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
        $this->container['gpu'] = isset($data['gpu']) ? $data['gpu'] : null;
        $this->container['npu'] = isset($data['npu']) ? $data['npu'] : null;
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
    * Gets gpu
    *  gpu
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriverStatus|null
    */
    public function getGpu()
    {
        return $this->container['gpu'];
    }

    /**
    * Sets gpu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriverStatus|null $gpu gpu
    *
    * @return $this
    */
    public function setGpu($gpu)
    {
        $this->container['gpu'] = $gpu;
        return $this;
    }

    /**
    * Gets npu
    *  npu
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriverStatus|null
    */
    public function getNpu()
    {
        return $this->container['npu'];
    }

    /**
    * Sets npu
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\PoolDriverStatus|null $npu npu
    *
    * @return $this
    */
    public function setNpu($npu)
    {
        $this->container['npu'] = $npu;
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

