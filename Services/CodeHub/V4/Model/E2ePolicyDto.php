<?php

namespace HuaweiCloud\SDK\CodeHub\V4\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class E2ePolicyDto implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'E2ePolicyDto';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * autoExtract  **参数解释：** 是否开启单号自动提取。 **取值范围：** true：开启单号自动提取，false：未开启单号自动提取。
    * prefixSymbol  **参数解释：** 自动提取时的单号前缀合集，英文逗号分隔。 **取值范围：** 单个前缀长度最多200个字符，最多允许配置10个前缀。
    * separator  **参数解释：** 自动提取时的分隔符。
    * suffixSymbol  **参数解释：** 自动提取时的单号后缀。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'autoExtract' => 'bool',
            'prefixSymbol' => 'string',
            'separator' => 'string',
            'suffixSymbol' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * autoExtract  **参数解释：** 是否开启单号自动提取。 **取值范围：** true：开启单号自动提取，false：未开启单号自动提取。
    * prefixSymbol  **参数解释：** 自动提取时的单号前缀合集，英文逗号分隔。 **取值范围：** 单个前缀长度最多200个字符，最多允许配置10个前缀。
    * separator  **参数解释：** 自动提取时的分隔符。
    * suffixSymbol  **参数解释：** 自动提取时的单号后缀。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'autoExtract' => null,
        'prefixSymbol' => null,
        'separator' => null,
        'suffixSymbol' => null
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
    * autoExtract  **参数解释：** 是否开启单号自动提取。 **取值范围：** true：开启单号自动提取，false：未开启单号自动提取。
    * prefixSymbol  **参数解释：** 自动提取时的单号前缀合集，英文逗号分隔。 **取值范围：** 单个前缀长度最多200个字符，最多允许配置10个前缀。
    * separator  **参数解释：** 自动提取时的分隔符。
    * suffixSymbol  **参数解释：** 自动提取时的单号后缀。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'autoExtract' => 'auto_extract',
            'prefixSymbol' => 'prefix_symbol',
            'separator' => 'separator',
            'suffixSymbol' => 'suffix_symbol'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * autoExtract  **参数解释：** 是否开启单号自动提取。 **取值范围：** true：开启单号自动提取，false：未开启单号自动提取。
    * prefixSymbol  **参数解释：** 自动提取时的单号前缀合集，英文逗号分隔。 **取值范围：** 单个前缀长度最多200个字符，最多允许配置10个前缀。
    * separator  **参数解释：** 自动提取时的分隔符。
    * suffixSymbol  **参数解释：** 自动提取时的单号后缀。
    *
    * @var string[]
    */
    protected static $setters = [
            'autoExtract' => 'setAutoExtract',
            'prefixSymbol' => 'setPrefixSymbol',
            'separator' => 'setSeparator',
            'suffixSymbol' => 'setSuffixSymbol'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * autoExtract  **参数解释：** 是否开启单号自动提取。 **取值范围：** true：开启单号自动提取，false：未开启单号自动提取。
    * prefixSymbol  **参数解释：** 自动提取时的单号前缀合集，英文逗号分隔。 **取值范围：** 单个前缀长度最多200个字符，最多允许配置10个前缀。
    * separator  **参数解释：** 自动提取时的分隔符。
    * suffixSymbol  **参数解释：** 自动提取时的单号后缀。
    *
    * @var string[]
    */
    protected static $getters = [
            'autoExtract' => 'getAutoExtract',
            'prefixSymbol' => 'getPrefixSymbol',
            'separator' => 'getSeparator',
            'suffixSymbol' => 'getSuffixSymbol'
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
        $this->container['autoExtract'] = isset($data['autoExtract']) ? $data['autoExtract'] : null;
        $this->container['prefixSymbol'] = isset($data['prefixSymbol']) ? $data['prefixSymbol'] : null;
        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
        $this->container['suffixSymbol'] = isset($data['suffixSymbol']) ? $data['suffixSymbol'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['prefixSymbol']) && (mb_strlen($this->container['prefixSymbol']) > 2010)) {
                $invalidProperties[] = "invalid value for 'prefixSymbol', the character length must be smaller than or equal to 2010.";
            }
            if (!is_null($this->container['prefixSymbol']) && (mb_strlen($this->container['prefixSymbol']) < 0)) {
                $invalidProperties[] = "invalid value for 'prefixSymbol', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['separator']) && (mb_strlen($this->container['separator']) > 200)) {
                $invalidProperties[] = "invalid value for 'separator', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['separator']) && (mb_strlen($this->container['separator']) < 0)) {
                $invalidProperties[] = "invalid value for 'separator', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['suffixSymbol']) && (mb_strlen($this->container['suffixSymbol']) > 200)) {
                $invalidProperties[] = "invalid value for 'suffixSymbol', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['suffixSymbol']) && (mb_strlen($this->container['suffixSymbol']) < 0)) {
                $invalidProperties[] = "invalid value for 'suffixSymbol', the character length must be bigger than or equal to 0.";
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
    * Gets autoExtract
    *  **参数解释：** 是否开启单号自动提取。 **取值范围：** true：开启单号自动提取，false：未开启单号自动提取。
    *
    * @return bool|null
    */
    public function getAutoExtract()
    {
        return $this->container['autoExtract'];
    }

    /**
    * Sets autoExtract
    *
    * @param bool|null $autoExtract **参数解释：** 是否开启单号自动提取。 **取值范围：** true：开启单号自动提取，false：未开启单号自动提取。
    *
    * @return $this
    */
    public function setAutoExtract($autoExtract)
    {
        $this->container['autoExtract'] = $autoExtract;
        return $this;
    }

    /**
    * Gets prefixSymbol
    *  **参数解释：** 自动提取时的单号前缀合集，英文逗号分隔。 **取值范围：** 单个前缀长度最多200个字符，最多允许配置10个前缀。
    *
    * @return string|null
    */
    public function getPrefixSymbol()
    {
        return $this->container['prefixSymbol'];
    }

    /**
    * Sets prefixSymbol
    *
    * @param string|null $prefixSymbol **参数解释：** 自动提取时的单号前缀合集，英文逗号分隔。 **取值范围：** 单个前缀长度最多200个字符，最多允许配置10个前缀。
    *
    * @return $this
    */
    public function setPrefixSymbol($prefixSymbol)
    {
        $this->container['prefixSymbol'] = $prefixSymbol;
        return $this;
    }

    /**
    * Gets separator
    *  **参数解释：** 自动提取时的分隔符。
    *
    * @return string|null
    */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /**
    * Sets separator
    *
    * @param string|null $separator **参数解释：** 自动提取时的分隔符。
    *
    * @return $this
    */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;
        return $this;
    }

    /**
    * Gets suffixSymbol
    *  **参数解释：** 自动提取时的单号后缀。
    *
    * @return string|null
    */
    public function getSuffixSymbol()
    {
        return $this->container['suffixSymbol'];
    }

    /**
    * Sets suffixSymbol
    *
    * @param string|null $suffixSymbol **参数解释：** 自动提取时的单号后缀。
    *
    * @return $this
    */
    public function setSuffixSymbol($suffixSymbol)
    {
        $this->container['suffixSymbol'] = $suffixSymbol;
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

