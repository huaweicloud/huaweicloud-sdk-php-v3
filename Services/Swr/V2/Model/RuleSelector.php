<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RuleSelector implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RuleSelector';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * kind  匹配类型，目前只支持doublestar
    * decoration  选择器匹配类型,当前支持repoMatches
    * pattern  选择器匹配样式，最大长度512。支持正则表达式，正则表达式规则可填写如 nginx-* ，{repo1，repo2} 等，其中： * ： 匹配不包含 '/' 的任何字段。 **：匹配包含 '/' 的任何字段。 ? ：匹配任何单个非 '/' 的字符。 {选项1,选项2,...}：同时匹配多个选项。
    * extras  预留字段
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'kind' => 'string',
            'decoration' => 'string',
            'pattern' => 'string',
            'extras' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * kind  匹配类型，目前只支持doublestar
    * decoration  选择器匹配类型,当前支持repoMatches
    * pattern  选择器匹配样式，最大长度512。支持正则表达式，正则表达式规则可填写如 nginx-* ，{repo1，repo2} 等，其中： * ： 匹配不包含 '/' 的任何字段。 **：匹配包含 '/' 的任何字段。 ? ：匹配任何单个非 '/' 的字符。 {选项1,选项2,...}：同时匹配多个选项。
    * extras  预留字段
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'kind' => null,
        'decoration' => null,
        'pattern' => null,
        'extras' => null
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
    * kind  匹配类型，目前只支持doublestar
    * decoration  选择器匹配类型,当前支持repoMatches
    * pattern  选择器匹配样式，最大长度512。支持正则表达式，正则表达式规则可填写如 nginx-* ，{repo1，repo2} 等，其中： * ： 匹配不包含 '/' 的任何字段。 **：匹配包含 '/' 的任何字段。 ? ：匹配任何单个非 '/' 的字符。 {选项1,选项2,...}：同时匹配多个选项。
    * extras  预留字段
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'kind' => 'kind',
            'decoration' => 'decoration',
            'pattern' => 'pattern',
            'extras' => 'extras'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * kind  匹配类型，目前只支持doublestar
    * decoration  选择器匹配类型,当前支持repoMatches
    * pattern  选择器匹配样式，最大长度512。支持正则表达式，正则表达式规则可填写如 nginx-* ，{repo1，repo2} 等，其中： * ： 匹配不包含 '/' 的任何字段。 **：匹配包含 '/' 的任何字段。 ? ：匹配任何单个非 '/' 的字符。 {选项1,选项2,...}：同时匹配多个选项。
    * extras  预留字段
    *
    * @var string[]
    */
    protected static $setters = [
            'kind' => 'setKind',
            'decoration' => 'setDecoration',
            'pattern' => 'setPattern',
            'extras' => 'setExtras'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * kind  匹配类型，目前只支持doublestar
    * decoration  选择器匹配类型,当前支持repoMatches
    * pattern  选择器匹配样式，最大长度512。支持正则表达式，正则表达式规则可填写如 nginx-* ，{repo1，repo2} 等，其中： * ： 匹配不包含 '/' 的任何字段。 **：匹配包含 '/' 的任何字段。 ? ：匹配任何单个非 '/' 的字符。 {选项1,选项2,...}：同时匹配多个选项。
    * extras  预留字段
    *
    * @var string[]
    */
    protected static $getters = [
            'kind' => 'getKind',
            'decoration' => 'getDecoration',
            'pattern' => 'getPattern',
            'extras' => 'getExtras'
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
        $this->container['kind'] = isset($data['kind']) ? $data['kind'] : null;
        $this->container['decoration'] = isset($data['decoration']) ? $data['decoration'] : null;
        $this->container['pattern'] = isset($data['pattern']) ? $data['pattern'] : null;
        $this->container['extras'] = isset($data['extras']) ? $data['extras'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['kind'] === null) {
            $invalidProperties[] = "'kind' can't be null";
        }
        if ($this->container['decoration'] === null) {
            $invalidProperties[] = "'decoration' can't be null";
        }
        if ($this->container['pattern'] === null) {
            $invalidProperties[] = "'pattern' can't be null";
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
    * Gets kind
    *  匹配类型，目前只支持doublestar
    *
    * @return string
    */
    public function getKind()
    {
        return $this->container['kind'];
    }

    /**
    * Sets kind
    *
    * @param string $kind 匹配类型，目前只支持doublestar
    *
    * @return $this
    */
    public function setKind($kind)
    {
        $this->container['kind'] = $kind;
        return $this;
    }

    /**
    * Gets decoration
    *  选择器匹配类型,当前支持repoMatches
    *
    * @return string
    */
    public function getDecoration()
    {
        return $this->container['decoration'];
    }

    /**
    * Sets decoration
    *
    * @param string $decoration 选择器匹配类型,当前支持repoMatches
    *
    * @return $this
    */
    public function setDecoration($decoration)
    {
        $this->container['decoration'] = $decoration;
        return $this;
    }

    /**
    * Gets pattern
    *  选择器匹配样式，最大长度512。支持正则表达式，正则表达式规则可填写如 nginx-* ，{repo1，repo2} 等，其中： * ： 匹配不包含 '/' 的任何字段。 **：匹配包含 '/' 的任何字段。 ? ：匹配任何单个非 '/' 的字符。 {选项1,选项2,...}：同时匹配多个选项。
    *
    * @return string
    */
    public function getPattern()
    {
        return $this->container['pattern'];
    }

    /**
    * Sets pattern
    *
    * @param string $pattern 选择器匹配样式，最大长度512。支持正则表达式，正则表达式规则可填写如 nginx-* ，{repo1，repo2} 等，其中： * ： 匹配不包含 '/' 的任何字段。 **：匹配包含 '/' 的任何字段。 ? ：匹配任何单个非 '/' 的字符。 {选项1,选项2,...}：同时匹配多个选项。
    *
    * @return $this
    */
    public function setPattern($pattern)
    {
        $this->container['pattern'] = $pattern;
        return $this;
    }

    /**
    * Gets extras
    *  预留字段
    *
    * @return string|null
    */
    public function getExtras()
    {
        return $this->container['extras'];
    }

    /**
    * Sets extras
    *
    * @param string|null $extras 预留字段
    *
    * @return $this
    */
    public function setExtras($extras)
    {
        $this->container['extras'] = $extras;
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

