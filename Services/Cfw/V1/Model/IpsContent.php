<?php

namespace HuaweiCloud\SDK\Cfw\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class IpsContent implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'IpsContent';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * content  **参数解释**： 内容 **取值范围**： 不涉及
    * depth  **参数解释**： 深度 **取值范围**： 不涉及
    * isHex  **参数解释**： 报文内容是否为十六进制 **取值范围**： 不涉及
    * isIgnore  **参数解释**： 是否忽略大小写 **取值范围**： 不涉及
    * isUri  **参数解释**： 是否在uri中截取报文 **取值范围**： 不涉及
    * offset  **参数解释**： 偏移量 **取值范围**： 不涉及
    * relativePosition  **参数解释**： 相对位置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'content' => 'string',
            'depth' => 'int',
            'isHex' => 'bool',
            'isIgnore' => 'bool',
            'isUri' => 'bool',
            'offset' => 'int',
            'relativePosition' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * content  **参数解释**： 内容 **取值范围**： 不涉及
    * depth  **参数解释**： 深度 **取值范围**： 不涉及
    * isHex  **参数解释**： 报文内容是否为十六进制 **取值范围**： 不涉及
    * isIgnore  **参数解释**： 是否忽略大小写 **取值范围**： 不涉及
    * isUri  **参数解释**： 是否在uri中截取报文 **取值范围**： 不涉及
    * offset  **参数解释**： 偏移量 **取值范围**： 不涉及
    * relativePosition  **参数解释**： 相对位置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'content' => null,
        'depth' => 'int32',
        'isHex' => null,
        'isIgnore' => null,
        'isUri' => null,
        'offset' => 'int32',
        'relativePosition' => 'int32'
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
    * content  **参数解释**： 内容 **取值范围**： 不涉及
    * depth  **参数解释**： 深度 **取值范围**： 不涉及
    * isHex  **参数解释**： 报文内容是否为十六进制 **取值范围**： 不涉及
    * isIgnore  **参数解释**： 是否忽略大小写 **取值范围**： 不涉及
    * isUri  **参数解释**： 是否在uri中截取报文 **取值范围**： 不涉及
    * offset  **参数解释**： 偏移量 **取值范围**： 不涉及
    * relativePosition  **参数解释**： 相对位置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'content' => 'content',
            'depth' => 'depth',
            'isHex' => 'is_hex',
            'isIgnore' => 'is_ignore',
            'isUri' => 'is_uri',
            'offset' => 'offset',
            'relativePosition' => 'relative_position'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * content  **参数解释**： 内容 **取值范围**： 不涉及
    * depth  **参数解释**： 深度 **取值范围**： 不涉及
    * isHex  **参数解释**： 报文内容是否为十六进制 **取值范围**： 不涉及
    * isIgnore  **参数解释**： 是否忽略大小写 **取值范围**： 不涉及
    * isUri  **参数解释**： 是否在uri中截取报文 **取值范围**： 不涉及
    * offset  **参数解释**： 偏移量 **取值范围**： 不涉及
    * relativePosition  **参数解释**： 相对位置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'content' => 'setContent',
            'depth' => 'setDepth',
            'isHex' => 'setIsHex',
            'isIgnore' => 'setIsIgnore',
            'isUri' => 'setIsUri',
            'offset' => 'setOffset',
            'relativePosition' => 'setRelativePosition'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * content  **参数解释**： 内容 **取值范围**： 不涉及
    * depth  **参数解释**： 深度 **取值范围**： 不涉及
    * isHex  **参数解释**： 报文内容是否为十六进制 **取值范围**： 不涉及
    * isIgnore  **参数解释**： 是否忽略大小写 **取值范围**： 不涉及
    * isUri  **参数解释**： 是否在uri中截取报文 **取值范围**： 不涉及
    * offset  **参数解释**： 偏移量 **取值范围**： 不涉及
    * relativePosition  **参数解释**： 相对位置 **取值范围**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'content' => 'getContent',
            'depth' => 'getDepth',
            'isHex' => 'getIsHex',
            'isIgnore' => 'getIsIgnore',
            'isUri' => 'getIsUri',
            'offset' => 'getOffset',
            'relativePosition' => 'getRelativePosition'
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
        $this->container['content'] = isset($data['content']) ? $data['content'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['isHex'] = isset($data['isHex']) ? $data['isHex'] : null;
        $this->container['isIgnore'] = isset($data['isIgnore']) ? $data['isIgnore'] : null;
        $this->container['isUri'] = isset($data['isUri']) ? $data['isUri'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['relativePosition'] = isset($data['relativePosition']) ? $data['relativePosition'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) > 2048)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be smaller than or equal to 2048.";
            }
            if (!is_null($this->container['content']) && (mb_strlen($this->container['content']) < 0)) {
                $invalidProperties[] = "invalid value for 'content', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['depth']) && ($this->container['depth'] > 65535)) {
                $invalidProperties[] = "invalid value for 'depth', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['depth']) && ($this->container['depth'] < 1)) {
                $invalidProperties[] = "invalid value for 'depth', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 65535)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 65535.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['relativePosition']) && ($this->container['relativePosition'] > 1)) {
                $invalidProperties[] = "invalid value for 'relativePosition', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['relativePosition']) && ($this->container['relativePosition'] < 0)) {
                $invalidProperties[] = "invalid value for 'relativePosition', must be bigger than or equal to 0.";
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
    * Gets content
    *  **参数解释**： 内容 **取值范围**： 不涉及
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
    * @param string|null $content **参数解释**： 内容 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setContent($content)
    {
        $this->container['content'] = $content;
        return $this;
    }

    /**
    * Gets depth
    *  **参数解释**： 深度 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /**
    * Sets depth
    *
    * @param int|null $depth **参数解释**： 深度 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;
        return $this;
    }

    /**
    * Gets isHex
    *  **参数解释**： 报文内容是否为十六进制 **取值范围**： 不涉及
    *
    * @return bool|null
    */
    public function getIsHex()
    {
        return $this->container['isHex'];
    }

    /**
    * Sets isHex
    *
    * @param bool|null $isHex **参数解释**： 报文内容是否为十六进制 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIsHex($isHex)
    {
        $this->container['isHex'] = $isHex;
        return $this;
    }

    /**
    * Gets isIgnore
    *  **参数解释**： 是否忽略大小写 **取值范围**： 不涉及
    *
    * @return bool|null
    */
    public function getIsIgnore()
    {
        return $this->container['isIgnore'];
    }

    /**
    * Sets isIgnore
    *
    * @param bool|null $isIgnore **参数解释**： 是否忽略大小写 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIsIgnore($isIgnore)
    {
        $this->container['isIgnore'] = $isIgnore;
        return $this;
    }

    /**
    * Gets isUri
    *  **参数解释**： 是否在uri中截取报文 **取值范围**： 不涉及
    *
    * @return bool|null
    */
    public function getIsUri()
    {
        return $this->container['isUri'];
    }

    /**
    * Sets isUri
    *
    * @param bool|null $isUri **参数解释**： 是否在uri中截取报文 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setIsUri($isUri)
    {
        $this->container['isUri'] = $isUri;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**： 偏移量 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**： 偏移量 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets relativePosition
    *  **参数解释**： 相对位置 **取值范围**： 不涉及
    *
    * @return int|null
    */
    public function getRelativePosition()
    {
        return $this->container['relativePosition'];
    }

    /**
    * Sets relativePosition
    *
    * @param int|null $relativePosition **参数解释**： 相对位置 **取值范围**： 不涉及
    *
    * @return $this
    */
    public function setRelativePosition($relativePosition)
    {
        $this->container['relativePosition'] = $relativePosition;
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

