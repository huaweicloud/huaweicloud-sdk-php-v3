<?php

namespace HuaweiCloud\SDK\CodeArtsArtifact\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AttentionDO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AttentionDO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * attention  关注/取消关注
    * ids  组件id列表
    * format  格式
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'attention' => 'string',
            'ids' => 'string[]',
            'format' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * attention  关注/取消关注
    * ids  组件id列表
    * format  格式
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'attention' => null,
        'ids' => null,
        'format' => null
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
    * attention  关注/取消关注
    * ids  组件id列表
    * format  格式
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'attention' => 'attention',
            'ids' => 'ids',
            'format' => 'format'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * attention  关注/取消关注
    * ids  组件id列表
    * format  格式
    *
    * @var string[]
    */
    protected static $setters = [
            'attention' => 'setAttention',
            'ids' => 'setIds',
            'format' => 'setFormat'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * attention  关注/取消关注
    * ids  组件id列表
    * format  格式
    *
    * @var string[]
    */
    protected static $getters = [
            'attention' => 'getAttention',
            'ids' => 'getIds',
            'format' => 'getFormat'
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
        $this->container['attention'] = isset($data['attention']) ? $data['attention'] : null;
        $this->container['ids'] = isset($data['ids']) ? $data['ids'] : null;
        $this->container['format'] = isset($data['format']) ? $data['format'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['attention'] === null) {
            $invalidProperties[] = "'attention' can't be null";
        }
        if ($this->container['ids'] === null) {
            $invalidProperties[] = "'ids' can't be null";
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
    * Gets attention
    *  关注/取消关注
    *
    * @return string
    */
    public function getAttention()
    {
        return $this->container['attention'];
    }

    /**
    * Sets attention
    *
    * @param string $attention 关注/取消关注
    *
    * @return $this
    */
    public function setAttention($attention)
    {
        $this->container['attention'] = $attention;
        return $this;
    }

    /**
    * Gets ids
    *  组件id列表
    *
    * @return string[]
    */
    public function getIds()
    {
        return $this->container['ids'];
    }

    /**
    * Sets ids
    *
    * @param string[] $ids 组件id列表
    *
    * @return $this
    */
    public function setIds($ids)
    {
        $this->container['ids'] = $ids;
        return $this;
    }

    /**
    * Gets format
    *  格式
    *
    * @return string|null
    */
    public function getFormat()
    {
        return $this->container['format'];
    }

    /**
    * Sets format
    *
    * @param string|null $format 格式
    *
    * @return $this
    */
    public function setFormat($format)
    {
        $this->container['format'] = $format;
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

