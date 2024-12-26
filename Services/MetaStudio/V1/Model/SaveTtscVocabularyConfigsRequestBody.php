<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SaveTtscVocabularyConfigsRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SaveTtscVocabularyConfigsRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * type  TTSS支持配置的词表类型 * CHINESE_G2P:拼音 * PHONETIC_SYMBOL:音标 * CONTINUUM:连读 * ALIAS:别名 * SAY_AS:数字英文读法
    * key  映射键
    * value  映射值
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'type' => 'string',
            'key' => 'string',
            'value' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * type  TTSS支持配置的词表类型 * CHINESE_G2P:拼音 * PHONETIC_SYMBOL:音标 * CONTINUUM:连读 * ALIAS:别名 * SAY_AS:数字英文读法
    * key  映射键
    * value  映射值
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'type' => null,
        'key' => null,
        'value' => null
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
    * type  TTSS支持配置的词表类型 * CHINESE_G2P:拼音 * PHONETIC_SYMBOL:音标 * CONTINUUM:连读 * ALIAS:别名 * SAY_AS:数字英文读法
    * key  映射键
    * value  映射值
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'type' => 'type',
            'key' => 'key',
            'value' => 'value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * type  TTSS支持配置的词表类型 * CHINESE_G2P:拼音 * PHONETIC_SYMBOL:音标 * CONTINUUM:连读 * ALIAS:别名 * SAY_AS:数字英文读法
    * key  映射键
    * value  映射值
    *
    * @var string[]
    */
    protected static $setters = [
            'type' => 'setType',
            'key' => 'setKey',
            'value' => 'setValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * type  TTSS支持配置的词表类型 * CHINESE_G2P:拼音 * PHONETIC_SYMBOL:音标 * CONTINUUM:连读 * ALIAS:别名 * SAY_AS:数字英文读法
    * key  映射键
    * value  映射值
    *
    * @var string[]
    */
    protected static $getters = [
            'type' => 'getType',
            'key' => 'getKey',
            'value' => 'getValue'
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
    const TYPE_CHINESE_G2_P = 'CHINESE_G2P';
    const TYPE_PHONETIC_SYMBOL = 'PHONETIC_SYMBOL';
    const TYPE_CONTINUUM = 'CONTINUUM';
    const TYPE_ALIAS = 'ALIAS';
    const TYPE_SAY_AS = 'SAY_AS';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_CHINESE_G2_P,
            self::TYPE_PHONETIC_SYMBOL,
            self::TYPE_CONTINUUM,
            self::TYPE_ALIAS,
            self::TYPE_SAY_AS,
        ];
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getTypeAllowableValues();
                if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) > 200)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['key']) && (mb_strlen($this->container['key']) < 0)) {
                $invalidProperties[] = "invalid value for 'key', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) > 200)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['value']) && (mb_strlen($this->container['value']) < 0)) {
                $invalidProperties[] = "invalid value for 'value', the character length must be bigger than or equal to 0.";
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
    * Gets type
    *  TTSS支持配置的词表类型 * CHINESE_G2P:拼音 * PHONETIC_SYMBOL:音标 * CONTINUUM:连读 * ALIAS:别名 * SAY_AS:数字英文读法
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type TTSS支持配置的词表类型 * CHINESE_G2P:拼音 * PHONETIC_SYMBOL:音标 * CONTINUUM:连读 * ALIAS:别名 * SAY_AS:数字英文读法
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets key
    *  映射键
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
    * @param string|null $key 映射键
    *
    * @return $this
    */
    public function setKey($key)
    {
        $this->container['key'] = $key;
        return $this;
    }

    /**
    * Gets value
    *  映射值
    *
    * @return string|null
    */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
    * Sets value
    *
    * @param string|null $value 映射值
    *
    * @return $this
    */
    public function setValue($value)
    {
        $this->container['value'] = $value;
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

