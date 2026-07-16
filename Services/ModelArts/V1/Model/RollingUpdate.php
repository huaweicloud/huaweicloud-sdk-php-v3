<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RollingUpdate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RollingUpdate';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * maxSurge  **参数解释：** 滚动更新时最多可以启动多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    * maxUnavailable  **参数解释：** 滚动更新时最多可以删除多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'maxSurge' => 'string',
            'maxUnavailable' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * maxSurge  **参数解释：** 滚动更新时最多可以启动多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    * maxUnavailable  **参数解释：** 滚动更新时最多可以删除多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'maxSurge' => null,
        'maxUnavailable' => null
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
    * maxSurge  **参数解释：** 滚动更新时最多可以启动多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    * maxUnavailable  **参数解释：** 滚动更新时最多可以删除多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'maxSurge' => 'max_surge',
            'maxUnavailable' => 'max_unavailable'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * maxSurge  **参数解释：** 滚动更新时最多可以启动多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    * maxUnavailable  **参数解释：** 滚动更新时最多可以删除多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @var string[]
    */
    protected static $setters = [
            'maxSurge' => 'setMaxSurge',
            'maxUnavailable' => 'setMaxUnavailable'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * maxSurge  **参数解释：** 滚动更新时最多可以启动多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    * maxUnavailable  **参数解释：** 滚动更新时最多可以删除多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @var string[]
    */
    protected static $getters = [
            'maxSurge' => 'getMaxSurge',
            'maxUnavailable' => 'getMaxUnavailable'
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
        $this->container['maxSurge'] = isset($data['maxSurge']) ? $data['maxSurge'] : null;
        $this->container['maxUnavailable'] = isset($data['maxUnavailable']) ? $data['maxUnavailable'] : null;
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
    * Gets maxSurge
    *  **参数解释：** 滚动更新时最多可以启动多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @return string|null
    */
    public function getMaxSurge()
    {
        return $this->container['maxSurge'];
    }

    /**
    * Sets maxSurge
    *
    * @param string|null $maxSurge **参数解释：** 滚动更新时最多可以启动多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @return $this
    */
    public function setMaxSurge($maxSurge)
    {
        $this->container['maxSurge'] = $maxSurge;
        return $this;
    }

    /**
    * Gets maxUnavailable
    *  **参数解释：** 滚动更新时最多可以删除多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @return string|null
    */
    public function getMaxUnavailable()
    {
        return $this->container['maxUnavailable'];
    }

    /**
    * Sets maxUnavailable
    *
    * @param string|null $maxUnavailable **参数解释：** 滚动更新时最多可以删除多少个Pod。 **约束限制：** 百分数类型字符串。 **取值范围：** 1%-100%。 **默认取值：** 1%。
    *
    * @return $this
    */
    public function setMaxUnavailable($maxUnavailable)
    {
        $this->container['maxUnavailable'] = $maxUnavailable;
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

