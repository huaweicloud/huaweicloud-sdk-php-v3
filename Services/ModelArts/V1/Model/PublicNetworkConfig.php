<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PublicNetworkConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PublicNetworkConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * publicNetworkType  **参数解释**：NoteBook网络类型 **约束限制**： - SHARED：公共网络 - EXCLUSIVE：专属网络 - FORBIDDEN：禁用网络
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'publicNetworkType' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * publicNetworkType  **参数解释**：NoteBook网络类型 **约束限制**： - SHARED：公共网络 - EXCLUSIVE：专属网络 - FORBIDDEN：禁用网络
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'publicNetworkType' => null
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
    * publicNetworkType  **参数解释**：NoteBook网络类型 **约束限制**： - SHARED：公共网络 - EXCLUSIVE：专属网络 - FORBIDDEN：禁用网络
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'publicNetworkType' => 'public_network_type'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * publicNetworkType  **参数解释**：NoteBook网络类型 **约束限制**： - SHARED：公共网络 - EXCLUSIVE：专属网络 - FORBIDDEN：禁用网络
    *
    * @var string[]
    */
    protected static $setters = [
            'publicNetworkType' => 'setPublicNetworkType'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * publicNetworkType  **参数解释**：NoteBook网络类型 **约束限制**： - SHARED：公共网络 - EXCLUSIVE：专属网络 - FORBIDDEN：禁用网络
    *
    * @var string[]
    */
    protected static $getters = [
            'publicNetworkType' => 'getPublicNetworkType'
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
        $this->container['publicNetworkType'] = isset($data['publicNetworkType']) ? $data['publicNetworkType'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['publicNetworkType']) && (mb_strlen($this->container['publicNetworkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'publicNetworkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['publicNetworkType']) && (mb_strlen($this->container['publicNetworkType']) < 0)) {
                $invalidProperties[] = "invalid value for 'publicNetworkType', the character length must be bigger than or equal to 0.";
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
    * Gets publicNetworkType
    *  **参数解释**：NoteBook网络类型 **约束限制**： - SHARED：公共网络 - EXCLUSIVE：专属网络 - FORBIDDEN：禁用网络
    *
    * @return string|null
    */
    public function getPublicNetworkType()
    {
        return $this->container['publicNetworkType'];
    }

    /**
    * Sets publicNetworkType
    *
    * @param string|null $publicNetworkType **参数解释**：NoteBook网络类型 **约束限制**： - SHARED：公共网络 - EXCLUSIVE：专属网络 - FORBIDDEN：禁用网络
    *
    * @return $this
    */
    public function setPublicNetworkType($publicNetworkType)
    {
        $this->container['publicNetworkType'] = $publicNetworkType;
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

