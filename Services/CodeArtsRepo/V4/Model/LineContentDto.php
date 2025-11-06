<?php

namespace HuaweiCloud\SDK\CodeArtsRepo\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LineContentDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LineContentDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * lineNo  **参数解释：** 文件行数
    * content  **参数解释：** 该行对应内容
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'lineNo' => 'int',
            'content' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * lineNo  **参数解释：** 文件行数
    * content  **参数解释：** 该行对应内容
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'lineNo' => 'int32',
        'content' => null
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
    * lineNo  **参数解释：** 文件行数
    * content  **参数解释：** 该行对应内容
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'lineNo' => 'lineNO',
            'content' => 'content'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * lineNo  **参数解释：** 文件行数
    * content  **参数解释：** 该行对应内容
    *
    * @var string[]
    */
    protected static $setters = [
            'lineNo' => 'setLineNo',
            'content' => 'setContent'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * lineNo  **参数解释：** 文件行数
    * content  **参数解释：** 该行对应内容
    *
    * @var string[]
    */
    protected static $getters = [
            'lineNo' => 'getLineNo',
            'content' => 'getContent'
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
        $this->container['lineNo'] = isset($data['lineNo']) ? $data['lineNo'] : null;
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['lineNo']) && ($this->container['lineNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'lineNo', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['lineNo']) && ($this->container['lineNo'] < 1)) {
                $invalidProperties[] = "invalid value for 'lineNo', must be bigger than or equal to 1.";
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
    * Gets lineNo
    *  **参数解释：** 文件行数
    *
    * @return int|null
    */
    public function getLineNo()
    {
        return $this->container['lineNo'];
    }

    /**
    * Sets lineNo
    *
    * @param int|null $lineNo **参数解释：** 文件行数
    *
    * @return $this
    */
    public function setLineNo($lineNo)
    {
        $this->container['lineNo'] = $lineNo;
        return $this;
    }

    /**
    * Gets content
    *  **参数解释：** 该行对应内容
    *
    * @return string|null
    */
    public function getContent()
    {
        return $this->container['content'];
    }

    /**
    * Sets content
    *
    * @param string|null $content **参数解释：** 该行对应内容
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
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

