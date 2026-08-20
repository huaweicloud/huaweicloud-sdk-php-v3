<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListTagFilter implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListTagFilter';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * key  **参数解释**：标签键。 **约束限制**：   - 必填；   - 长度 1~128；   - 首尾不可为空格；   - 仅支持字母、数字、空格及 `_ . : = + - @`。 **取值范围**：符合标签键命名规范的字符串。 **默认取值**：不涉及。
    * values  **参数解释**：标签值列表，与 `key` 组合用于筛选作业。 **约束限制**：   - 非必填；   - 最多 10 个值；   - 单个值长度 0~255；   - 仅支持字母、数字、空格及 `_ . : / = + - @`。 **取值范围**：   - 传具体值：匹配 `key=value` 的作业；   - 不传、传空数组或空字符串：匹配带有该 `key` 的作业（不限 value）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'key' => 'string',
            'values' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * key  **参数解释**：标签键。 **约束限制**：   - 必填；   - 长度 1~128；   - 首尾不可为空格；   - 仅支持字母、数字、空格及 `_ . : = + - @`。 **取值范围**：符合标签键命名规范的字符串。 **默认取值**：不涉及。
    * values  **参数解释**：标签值列表，与 `key` 组合用于筛选作业。 **约束限制**：   - 非必填；   - 最多 10 个值；   - 单个值长度 0~255；   - 仅支持字母、数字、空格及 `_ . : / = + - @`。 **取值范围**：   - 传具体值：匹配 `key=value` 的作业；   - 不传、传空数组或空字符串：匹配带有该 `key` 的作业（不限 value）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'key' => null,
        'values' => null
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
    * key  **参数解释**：标签键。 **约束限制**：   - 必填；   - 长度 1~128；   - 首尾不可为空格；   - 仅支持字母、数字、空格及 `_ . : = + - @`。 **取值范围**：符合标签键命名规范的字符串。 **默认取值**：不涉及。
    * values  **参数解释**：标签值列表，与 `key` 组合用于筛选作业。 **约束限制**：   - 非必填；   - 最多 10 个值；   - 单个值长度 0~255；   - 仅支持字母、数字、空格及 `_ . : / = + - @`。 **取值范围**：   - 传具体值：匹配 `key=value` 的作业；   - 不传、传空数组或空字符串：匹配带有该 `key` 的作业（不限 value）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'key' => 'key',
            'values' => 'values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * key  **参数解释**：标签键。 **约束限制**：   - 必填；   - 长度 1~128；   - 首尾不可为空格；   - 仅支持字母、数字、空格及 `_ . : = + - @`。 **取值范围**：符合标签键命名规范的字符串。 **默认取值**：不涉及。
    * values  **参数解释**：标签值列表，与 `key` 组合用于筛选作业。 **约束限制**：   - 非必填；   - 最多 10 个值；   - 单个值长度 0~255；   - 仅支持字母、数字、空格及 `_ . : / = + - @`。 **取值范围**：   - 传具体值：匹配 `key=value` 的作业；   - 不传、传空数组或空字符串：匹配带有该 `key` 的作业（不限 value）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $setters = [
            'key' => 'setKey',
            'values' => 'setValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * key  **参数解释**：标签键。 **约束限制**：   - 必填；   - 长度 1~128；   - 首尾不可为空格；   - 仅支持字母、数字、空格及 `_ . : = + - @`。 **取值范围**：符合标签键命名规范的字符串。 **默认取值**：不涉及。
    * values  **参数解释**：标签值列表，与 `key` 组合用于筛选作业。 **约束限制**：   - 非必填；   - 最多 10 个值；   - 单个值长度 0~255；   - 仅支持字母、数字、空格及 `_ . : / = + - @`。 **取值范围**：   - 传具体值：匹配 `key=value` 的作业；   - 不传、传空数组或空字符串：匹配带有该 `key` 的作业（不限 value）。 **默认取值**：不涉及。
    *
    * @var string[]
    */
    protected static $getters = [
            'key' => 'getKey',
            'values' => 'getValues'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['values'] = isset($data['values']) ? $data['values'] : null;
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
    * Gets key
    *  **参数解释**：标签键。 **约束限制**：   - 必填；   - 长度 1~128；   - 首尾不可为空格；   - 仅支持字母、数字、空格及 `_ . : = + - @`。 **取值范围**：符合标签键命名规范的字符串。 **默认取值**：不涉及。
    *
    * @return string|null
    */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
    * Sets key
    *
    * @param string|null $key **参数解释**：标签键。 **约束限制**：   - 必填；   - 长度 1~128；   - 首尾不可为空格；   - 仅支持字母、数字、空格及 `_ . : = + - @`。 **取值范围**：符合标签键命名规范的字符串。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets values
    *  **参数解释**：标签值列表，与 `key` 组合用于筛选作业。 **约束限制**：   - 非必填；   - 最多 10 个值；   - 单个值长度 0~255；   - 仅支持字母、数字、空格及 `_ . : / = + - @`。 **取值范围**：   - 传具体值：匹配 `key=value` 的作业；   - 不传、传空数组或空字符串：匹配带有该 `key` 的作业（不限 value）。 **默认取值**：不涉及。
    *
    * @return string[]|null
    */
    public function getValues()
    {
        return $this->container['values'];
    }

    /**
    * Sets values
    *
    * @param string[]|null $values **参数解释**：标签值列表，与 `key` 组合用于筛选作业。 **约束限制**：   - 非必填；   - 最多 10 个值；   - 单个值长度 0~255；   - 仅支持字母、数字、空格及 `_ . : / = + - @`。 **取值范围**：   - 传具体值：匹配 `key=value` 的作业；   - 不传、传空数组或空字符串：匹配带有该 `key` 的作业（不限 value）。 **默认取值**：不涉及。
    *
    * @return $this
    */
    public function setValues($values)
    {
        $this->container['values'] = $values;
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

