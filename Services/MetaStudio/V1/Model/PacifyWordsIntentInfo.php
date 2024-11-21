<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class PacifyWordsIntentInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'PacifyWordsIntentInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * intent  意图名称
    * descCn  意图中文描述
    * descEn  意图英文描述
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'intent' => 'string',
            'descCn' => 'string',
            'descEn' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * intent  意图名称
    * descCn  意图中文描述
    * descEn  意图英文描述
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'intent' => null,
        'descCn' => null,
        'descEn' => null
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
    * intent  意图名称
    * descCn  意图中文描述
    * descEn  意图英文描述
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'intent' => 'intent',
            'descCn' => 'desc_cn',
            'descEn' => 'desc_en'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * intent  意图名称
    * descCn  意图中文描述
    * descEn  意图英文描述
    *
    * @var string[]
    */
    protected static $setters = [
            'intent' => 'setIntent',
            'descCn' => 'setDescCn',
            'descEn' => 'setDescEn'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * intent  意图名称
    * descCn  意图中文描述
    * descEn  意图英文描述
    *
    * @var string[]
    */
    protected static $getters = [
            'intent' => 'getIntent',
            'descCn' => 'getDescCn',
            'descEn' => 'getDescEn'
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
        $this->container['intent'] = isset($data['intent']) ? $data['intent'] : null;
        $this->container['descCn'] = isset($data['descCn']) ? $data['descCn'] : null;
        $this->container['descEn'] = isset($data['descEn']) ? $data['descEn'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['intent']) && (mb_strlen($this->container['intent']) > 64)) {
                $invalidProperties[] = "invalid value for 'intent', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['intent']) && (mb_strlen($this->container['intent']) < 1)) {
                $invalidProperties[] = "invalid value for 'intent', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['descCn']) && (mb_strlen($this->container['descCn']) > 64)) {
                $invalidProperties[] = "invalid value for 'descCn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['descCn']) && (mb_strlen($this->container['descCn']) < 1)) {
                $invalidProperties[] = "invalid value for 'descCn', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['descEn']) && (mb_strlen($this->container['descEn']) > 64)) {
                $invalidProperties[] = "invalid value for 'descEn', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['descEn']) && (mb_strlen($this->container['descEn']) < 1)) {
                $invalidProperties[] = "invalid value for 'descEn', the character length must be bigger than or equal to 1.";
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
    * Gets intent
    *  意图名称
    *
    * @return string|null
    */
    public function getIntent()
    {
        return $this->container['intent'];
    }

    /**
    * Sets intent
    *
    * @param string|null $intent 意图名称
    *
    * @return $this
    */
    public function setIntent($intent)
    {
        $this->container['intent'] = $intent;
        return $this;
    }

    /**
    * Gets descCn
    *  意图中文描述
    *
    * @return string|null
    */
    public function getDescCn()
    {
        return $this->container['descCn'];
    }

    /**
    * Sets descCn
    *
    * @param string|null $descCn 意图中文描述
    *
    * @return $this
    */
    public function setDescCn($descCn)
    {
        $this->container['descCn'] = $descCn;
        return $this;
    }

    /**
    * Gets descEn
    *  意图英文描述
    *
    * @return string|null
    */
    public function getDescEn()
    {
        return $this->container['descEn'];
    }

    /**
    * Sets descEn
    *
    * @param string|null $descEn 意图英文描述
    *
    * @return $this
    */
    public function setDescEn($descEn)
    {
        $this->container['descEn'] = $descEn;
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

