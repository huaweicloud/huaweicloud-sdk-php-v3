<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SegmentResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SegmentResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * segment  命中的风险片段。
    * glossaryName  命中的自定义词库名称。  命中自定义词库时，才会返回当前字段。
    * position  命中的风险片段在文本中的位置，起始位置从0开始
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'segment' => 'string',
            'glossaryName' => 'string',
            'position' => 'int[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * segment  命中的风险片段。
    * glossaryName  命中的自定义词库名称。  命中自定义词库时，才会返回当前字段。
    * position  命中的风险片段在文本中的位置，起始位置从0开始
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'segment' => null,
        'glossaryName' => null,
        'position' => 'int32'
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
    * segment  命中的风险片段。
    * glossaryName  命中的自定义词库名称。  命中自定义词库时，才会返回当前字段。
    * position  命中的风险片段在文本中的位置，起始位置从0开始
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'segment' => 'segment',
            'glossaryName' => 'glossary_name',
            'position' => 'position'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * segment  命中的风险片段。
    * glossaryName  命中的自定义词库名称。  命中自定义词库时，才会返回当前字段。
    * position  命中的风险片段在文本中的位置，起始位置从0开始
    *
    * @var string[]
    */
    protected static $setters = [
            'segment' => 'setSegment',
            'glossaryName' => 'setGlossaryName',
            'position' => 'setPosition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * segment  命中的风险片段。
    * glossaryName  命中的自定义词库名称。  命中自定义词库时，才会返回当前字段。
    * position  命中的风险片段在文本中的位置，起始位置从0开始
    *
    * @var string[]
    */
    protected static $getters = [
            'segment' => 'getSegment',
            'glossaryName' => 'getGlossaryName',
            'position' => 'getPosition'
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
        $this->container['segment'] = isset($data['segment']) ? $data['segment'] : null;
        $this->container['glossaryName'] = isset($data['glossaryName']) ? $data['glossaryName'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
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
    * Gets segment
    *  命中的风险片段。
    *
    * @return string|null
    */
    public function getSegment()
    {
        return $this->container['segment'];
    }

    /**
    * Sets segment
    *
    * @param string|null $segment 命中的风险片段。
    *
    * @return $this
    */
    public function setSegment($segment)
    {
        $this->container['segment'] = $segment;
        return $this;
    }

    /**
    * Gets glossaryName
    *  命中的自定义词库名称。  命中自定义词库时，才会返回当前字段。
    *
    * @return string|null
    */
    public function getGlossaryName()
    {
        return $this->container['glossaryName'];
    }

    /**
    * Sets glossaryName
    *
    * @param string|null $glossaryName 命中的自定义词库名称。  命中自定义词库时，才会返回当前字段。
    *
    * @return $this
    */
    public function setGlossaryName($glossaryName)
    {
        $this->container['glossaryName'] = $glossaryName;
        return $this;
    }

    /**
    * Gets position
    *  命中的风险片段在文本中的位置，起始位置从0开始
    *
    * @return int[]|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param int[]|null $position 命中的风险片段在文本中的位置，起始位置从0开始
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
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

