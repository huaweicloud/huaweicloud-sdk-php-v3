<?php

namespace HuaweiCloud\SDK\Cdn\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CompressResponse implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CompressResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * compressSwitch  GZIP压缩开关。0关闭。1打开
    * compressRules  GZIP压缩规则
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'compressSwitch' => 'int',
            'compressRules' => '\HuaweiCloud\SDK\Cdn\V1\Model\CompressRules[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * compressSwitch  GZIP压缩开关。0关闭。1打开
    * compressRules  GZIP压缩规则
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'compressSwitch' => 'int32',
        'compressRules' => null
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
    * compressSwitch  GZIP压缩开关。0关闭。1打开
    * compressRules  GZIP压缩规则
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'compressSwitch' => 'compress_switch',
            'compressRules' => 'compress_rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * compressSwitch  GZIP压缩开关。0关闭。1打开
    * compressRules  GZIP压缩规则
    *
    * @var string[]
    */
    protected static $setters = [
            'compressSwitch' => 'setCompressSwitch',
            'compressRules' => 'setCompressRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * compressSwitch  GZIP压缩开关。0关闭。1打开
    * compressRules  GZIP压缩规则
    *
    * @var string[]
    */
    protected static $getters = [
            'compressSwitch' => 'getCompressSwitch',
            'compressRules' => 'getCompressRules'
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
        $this->container['compressSwitch'] = isset($data['compressSwitch']) ? $data['compressSwitch'] : null;
        $this->container['compressRules'] = isset($data['compressRules']) ? $data['compressRules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['compressSwitch'] === null) {
            $invalidProperties[] = "'compressSwitch' can't be null";
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
    * Gets compressSwitch
    *  GZIP压缩开关。0关闭。1打开
    *
    * @return int
    */
    public function getCompressSwitch()
    {
        return $this->container['compressSwitch'];
    }

    /**
    * Sets compressSwitch
    *
    * @param int $compressSwitch GZIP压缩开关。0关闭。1打开
    *
    * @return $this
    */
    public function setCompressSwitch($compressSwitch)
    {
        $this->container['compressSwitch'] = $compressSwitch;
        return $this;
    }

    /**
    * Gets compressRules
    *  GZIP压缩规则
    *
    * @return \HuaweiCloud\SDK\Cdn\V1\Model\CompressRules[]|null
    */
    public function getCompressRules()
    {
        return $this->container['compressRules'];
    }

    /**
    * Sets compressRules
    *
    * @param \HuaweiCloud\SDK\Cdn\V1\Model\CompressRules[]|null $compressRules GZIP压缩规则
    *
    * @return $this
    */
    public function setCompressRules($compressRules)
    {
        $this->container['compressRules'] = $compressRules;
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

