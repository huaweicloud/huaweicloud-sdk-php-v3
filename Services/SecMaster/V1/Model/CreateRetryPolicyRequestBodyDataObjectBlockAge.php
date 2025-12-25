<?php

namespace HuaweiCloud\SDK\SecMaster\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateRetryPolicyRequestBodyDataObjectBlockAge implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateRetryPolicyRequestBody_data_object_block_age';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * isBlockAgeing  是否阻断老化
    * blockAgeing  老化时间，毫秒级时间戳
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'isBlockAgeing' => 'bool',
            'blockAgeing' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * isBlockAgeing  是否阻断老化
    * blockAgeing  老化时间，毫秒级时间戳
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'isBlockAgeing' => null,
        'blockAgeing' => null
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
    * isBlockAgeing  是否阻断老化
    * blockAgeing  老化时间，毫秒级时间戳
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'isBlockAgeing' => 'is_block_ageing',
            'blockAgeing' => 'block_ageing'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * isBlockAgeing  是否阻断老化
    * blockAgeing  老化时间，毫秒级时间戳
    *
    * @var string[]
    */
    protected static $setters = [
            'isBlockAgeing' => 'setIsBlockAgeing',
            'blockAgeing' => 'setBlockAgeing'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * isBlockAgeing  是否阻断老化
    * blockAgeing  老化时间，毫秒级时间戳
    *
    * @var string[]
    */
    protected static $getters = [
            'isBlockAgeing' => 'getIsBlockAgeing',
            'blockAgeing' => 'getBlockAgeing'
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
        $this->container['isBlockAgeing'] = isset($data['isBlockAgeing']) ? $data['isBlockAgeing'] : null;
        $this->container['blockAgeing'] = isset($data['blockAgeing']) ? $data['blockAgeing'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['isBlockAgeing'] === null) {
            $invalidProperties[] = "'isBlockAgeing' can't be null";
        }
            if (!is_null($this->container['blockAgeing']) && (mb_strlen($this->container['blockAgeing']) > 16)) {
                $invalidProperties[] = "invalid value for 'blockAgeing', the character length must be smaller than or equal to 16.";
            }
            if (!is_null($this->container['blockAgeing']) && (mb_strlen($this->container['blockAgeing']) < 0)) {
                $invalidProperties[] = "invalid value for 'blockAgeing', the character length must be bigger than or equal to 0.";
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
    * Gets isBlockAgeing
    *  是否阻断老化
    *
    * @return bool
    */
    public function getIsBlockAgeing()
    {
        return $this->container['isBlockAgeing'];
    }

    /**
    * Sets isBlockAgeing
    *
    * @param bool $isBlockAgeing 是否阻断老化
    *
    * @return $this
    */
    public function setIsBlockAgeing($isBlockAgeing)
    {
        $this->container['isBlockAgeing'] = $isBlockAgeing;
        return $this;
    }

    /**
    * Gets blockAgeing
    *  老化时间，毫秒级时间戳
    *
    * @return string|null
    */
    public function getBlockAgeing()
    {
        return $this->container['blockAgeing'];
    }

    /**
    * Sets blockAgeing
    *
    * @param string|null $blockAgeing 老化时间，毫秒级时间戳
    *
    * @return $this
    */
    public function setBlockAgeing($blockAgeing)
    {
        $this->container['blockAgeing'] = $blockAgeing;
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

