<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DefectFragmentV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DefectFragmentV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineNum  **参数解释：** 行号。 **取值范围：** 不涉及。
    * lineContent  **参数解释：** 行代码内容。 **取值范围：** 不涉及。
    * startOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * endOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineNum' => 'string',
            'lineContent' => 'string',
            'startOffset' => 'int',
            'endOffset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineNum  **参数解释：** 行号。 **取值范围：** 不涉及。
    * lineContent  **参数解释：** 行代码内容。 **取值范围：** 不涉及。
    * startOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * endOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineNum' => null,
        'lineContent' => null,
        'startOffset' => null,
        'endOffset' => null
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
    * lineNum  **参数解释：** 行号。 **取值范围：** 不涉及。
    * lineContent  **参数解释：** 行代码内容。 **取值范围：** 不涉及。
    * startOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * endOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineNum' => 'line_num',
            'lineContent' => 'line_content',
            'startOffset' => 'start_offset',
            'endOffset' => 'end_offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineNum  **参数解释：** 行号。 **取值范围：** 不涉及。
    * lineContent  **参数解释：** 行代码内容。 **取值范围：** 不涉及。
    * startOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * endOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'lineNum' => 'setLineNum',
            'lineContent' => 'setLineContent',
            'startOffset' => 'setStartOffset',
            'endOffset' => 'setEndOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineNum  **参数解释：** 行号。 **取值范围：** 不涉及。
    * lineContent  **参数解释：** 行代码内容。 **取值范围：** 不涉及。
    * startOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    * endOffset  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'lineNum' => 'getLineNum',
            'lineContent' => 'getLineContent',
            'startOffset' => 'getStartOffset',
            'endOffset' => 'getEndOffset'
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
        $this->container['lineNum'] = isset($data['lineNum']) ? $data['lineNum'] : null;
        $this->container['lineContent'] = isset($data['lineContent']) ? $data['lineContent'] : null;
        $this->container['startOffset'] = isset($data['startOffset']) ? $data['startOffset'] : null;
        $this->container['endOffset'] = isset($data['endOffset']) ? $data['endOffset'] : null;
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
    * Gets lineNum
    *  **参数解释：** 行号。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLineNum()
    {
        return $this->container['lineNum'];
    }

    /**
    * Sets lineNum
    *
    * @param string|null $lineNum **参数解释：** 行号。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLineNum($lineNum)
    {
        $this->container['lineNum'] = $lineNum;
        return $this;
    }

    /**
    * Gets lineContent
    *  **参数解释：** 行代码内容。 **取值范围：** 不涉及。
    *
    * @return string|null
    */
    public function getLineContent()
    {
        return $this->container['lineContent'];
    }

    /**
    * Sets lineContent
    *
    * @param string|null $lineContent **参数解释：** 行代码内容。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setLineContent($lineContent)
    {
        $this->container['lineContent'] = $lineContent;
        return $this;
    }

    /**
    * Gets startOffset
    *  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getStartOffset()
    {
        return $this->container['startOffset'];
    }

    /**
    * Sets startOffset
    *
    * @param int|null $startOffset **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setStartOffset($startOffset)
    {
        $this->container['startOffset'] = $startOffset;
        return $this;
    }

    /**
    * Gets endOffset
    *  **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return int|null
    */
    public function getEndOffset()
    {
        return $this->container['endOffset'];
    }

    /**
    * Sets endOffset
    *
    * @param int|null $endOffset **参数解释：** 废弃字段。 **取值范围：** 不涉及。
    *
    * @return $this
    */
    public function setEndOffset($endOffset)
    {
        $this->container['endOffset'] = $endOffset;
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

