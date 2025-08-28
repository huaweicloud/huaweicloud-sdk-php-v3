<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DocumentSegmentParam implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DocumentSegmentParam';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'splitType' => 'int',
            'chunkSize' => 'int',
            'chunkType' => 'string',
            'separators' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'splitType' => null,
        'chunkSize' => null,
        'chunkType' => null,
        'separators' => null
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
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'splitType' => 'split_type',
            'chunkSize' => 'chunk_size',
            'chunkType' => 'chunk_type',
            'separators' => 'separators'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    *
    * @var string[]
    */
    protected static $setters = [
            'splitType' => 'setSplitType',
            'chunkSize' => 'setChunkSize',
            'chunkType' => 'setChunkType',
            'separators' => 'setSeparators'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * splitType  分段类型 * 1: 自动分段 * 2: 手动分段
    * chunkSize  分段长度。
    * chunkType  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    * separators  分隔符
    *
    * @var string[]
    */
    protected static $getters = [
            'splitType' => 'getSplitType',
            'chunkSize' => 'getChunkSize',
            'chunkType' => 'getChunkType',
            'separators' => 'getSeparators'
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
        $this->container['splitType'] = isset($data['splitType']) ? $data['splitType'] : null;
        $this->container['chunkSize'] = isset($data['chunkSize']) ? $data['chunkSize'] : null;
        $this->container['chunkType'] = isset($data['chunkType']) ? $data['chunkType'] : null;
        $this->container['separators'] = isset($data['separators']) ? $data['separators'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['splitType'] === null) {
            $invalidProperties[] = "'splitType' can't be null";
        }
            if (($this->container['splitType'] > 64)) {
                $invalidProperties[] = "invalid value for 'splitType', must be smaller than or equal to 64.";
            }
            if (($this->container['splitType'] < 1)) {
                $invalidProperties[] = "invalid value for 'splitType', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chunkSize']) && ($this->container['chunkSize'] > 512)) {
                $invalidProperties[] = "invalid value for 'chunkSize', must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['chunkSize']) && ($this->container['chunkSize'] < 20)) {
                $invalidProperties[] = "invalid value for 'chunkSize', must be bigger than or equal to 20.";
            }
            if (!is_null($this->container['chunkType']) && (mb_strlen($this->container['chunkType']) > 256)) {
                $invalidProperties[] = "invalid value for 'chunkType', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['chunkType']) && (mb_strlen($this->container['chunkType']) < 1)) {
                $invalidProperties[] = "invalid value for 'chunkType', the character length must be bigger than or equal to 1.";
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
    * Gets splitType
    *  分段类型 * 1: 自动分段 * 2: 手动分段
    *
    * @return int
    */
    public function getSplitType()
    {
        return $this->container['splitType'];
    }

    /**
    * Sets splitType
    *
    * @param int $splitType 分段类型 * 1: 自动分段 * 2: 手动分段
    *
    * @return $this
    */
    public function setSplitType($splitType)
    {
        $this->container['splitType'] = $splitType;
        return $this;
    }

    /**
    * Gets chunkSize
    *  分段长度。
    *
    * @return int|null
    */
    public function getChunkSize()
    {
        return $this->container['chunkSize'];
    }

    /**
    * Sets chunkSize
    *
    * @param int|null $chunkSize 分段长度。
    *
    * @return $this
    */
    public function setChunkSize($chunkSize)
    {
        $this->container['chunkSize'] = $chunkSize;
        return $this;
    }

    /**
    * Gets chunkType
    *  分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    *
    * @return string|null
    */
    public function getChunkType()
    {
        return $this->container['chunkType'];
    }

    /**
    * Sets chunkType
    *
    * @param string|null $chunkType 分段策略，多个策略之间用逗号分割。 > title:标题分割；separator:分隔符分割
    *
    * @return $this
    */
    public function setChunkType($chunkType)
    {
        $this->container['chunkType'] = $chunkType;
        return $this;
    }

    /**
    * Gets separators
    *  分隔符
    *
    * @return string[]|null
    */
    public function getSeparators()
    {
        return $this->container['separators'];
    }

    /**
    * Sets separators
    *
    * @param string[]|null $separators 分隔符
    *
    * @return $this
    */
    public function setSeparators($separators)
    {
        $this->container['separators'] = $separators;
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

