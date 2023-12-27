<?php

namespace HuaweiCloud\SDK\Lts\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LTSIndexConfigInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LTSIndexConfigInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * logStreamId  日志流ID
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'logStreamId' => 'string',
            'fullTextIndex' => '\HuaweiCloud\SDK\Lts\V2\Model\LTSFullTextIndexInfo',
            'fields' => '\HuaweiCloud\SDK\Lts\V2\Model\LTSFieldsInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * logStreamId  日志流ID
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'logStreamId' => null,
        'fullTextIndex' => null,
        'fields' => null
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
    * logStreamId  日志流ID
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'logStreamId' => 'logStreamId',
            'fullTextIndex' => 'fullTextIndex',
            'fields' => 'fields'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * logStreamId  日志流ID
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    *
    * @var string[]
    */
    protected static $setters = [
            'logStreamId' => 'setLogStreamId',
            'fullTextIndex' => 'setFullTextIndex',
            'fields' => 'setFields'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * logStreamId  日志流ID
    * fullTextIndex  fullTextIndex
    * fields  字段索引配置
    *
    * @var string[]
    */
    protected static $getters = [
            'logStreamId' => 'getLogStreamId',
            'fullTextIndex' => 'getFullTextIndex',
            'fields' => 'getFields'
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
        $this->container['logStreamId'] = isset($data['logStreamId']) ? $data['logStreamId'] : null;
        $this->container['fullTextIndex'] = isset($data['fullTextIndex']) ? $data['fullTextIndex'] : null;
        $this->container['fields'] = isset($data['fields']) ? $data['fields'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['fullTextIndex'] === null) {
            $invalidProperties[] = "'fullTextIndex' can't be null";
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
    * Gets logStreamId
    *  日志流ID
    *
    * @return string|null
    */
    public function getLogStreamId()
    {
        return $this->container['logStreamId'];
    }

    /**
    * Sets logStreamId
    *
    * @param string|null $logStreamId 日志流ID
    *
    * @return $this
    */
    public function setLogStreamId($logStreamId)
    {
        $this->container['logStreamId'] = $logStreamId;
        return $this;
    }

    /**
    * Gets fullTextIndex
    *  fullTextIndex
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LTSFullTextIndexInfo
    */
    public function getFullTextIndex()
    {
        return $this->container['fullTextIndex'];
    }

    /**
    * Sets fullTextIndex
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LTSFullTextIndexInfo $fullTextIndex fullTextIndex
    *
    * @return $this
    */
    public function setFullTextIndex($fullTextIndex)
    {
        $this->container['fullTextIndex'] = $fullTextIndex;
        return $this;
    }

    /**
    * Gets fields
    *  字段索引配置
    *
    * @return \HuaweiCloud\SDK\Lts\V2\Model\LTSFieldsInfo[]|null
    */
    public function getFields()
    {
        return $this->container['fields'];
    }

    /**
    * Sets fields
    *
    * @param \HuaweiCloud\SDK\Lts\V2\Model\LTSFieldsInfo[]|null $fields 字段索引配置
    *
    * @return $this
    */
    public function setFields($fields)
    {
        $this->container['fields'] = $fields;
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

