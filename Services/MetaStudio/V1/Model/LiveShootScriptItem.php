<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class LiveShootScriptItem implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'LiveShootScriptItem';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 不涉及
    * title  **参数解释**： 段落标题。 **约束限制**： 不涉及 **取值范围**： 字符长度0-256位。 **默认取值**： 不涉及。
    * textConfig  textConfig
    * audioConfig  audioConfig
    * relationProduct  relationProduct
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'sequenceNo' => 'int',
            'title' => 'string',
            'textConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\TextConfig',
            'audioConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\LiveAudioConfig',
            'relationProduct' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\RelationProductInfo'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 不涉及
    * title  **参数解释**： 段落标题。 **约束限制**： 不涉及 **取值范围**： 字符长度0-256位。 **默认取值**： 不涉及。
    * textConfig  textConfig
    * audioConfig  audioConfig
    * relationProduct  relationProduct
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'sequenceNo' => 'int32',
        'title' => null,
        'textConfig' => null,
        'audioConfig' => null,
        'relationProduct' => null
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
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 不涉及
    * title  **参数解释**： 段落标题。 **约束限制**： 不涉及 **取值范围**： 字符长度0-256位。 **默认取值**： 不涉及。
    * textConfig  textConfig
    * audioConfig  audioConfig
    * relationProduct  relationProduct
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'sequenceNo' => 'sequence_no',
            'title' => 'title',
            'textConfig' => 'text_config',
            'audioConfig' => 'audio_config',
            'relationProduct' => 'relation_product'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 不涉及
    * title  **参数解释**： 段落标题。 **约束限制**： 不涉及 **取值范围**： 字符长度0-256位。 **默认取值**： 不涉及。
    * textConfig  textConfig
    * audioConfig  audioConfig
    * relationProduct  relationProduct
    *
    * @var string[]
    */
    protected static $setters = [
            'sequenceNo' => 'setSequenceNo',
            'title' => 'setTitle',
            'textConfig' => 'setTextConfig',
            'audioConfig' => 'setAudioConfig',
            'relationProduct' => 'setRelationProduct'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * sequenceNo  **参数解释**： 剧本序号。 **约束限制**： 不涉及
    * title  **参数解释**： 段落标题。 **约束限制**： 不涉及 **取值范围**： 字符长度0-256位。 **默认取值**： 不涉及。
    * textConfig  textConfig
    * audioConfig  audioConfig
    * relationProduct  relationProduct
    *
    * @var string[]
    */
    protected static $getters = [
            'sequenceNo' => 'getSequenceNo',
            'title' => 'getTitle',
            'textConfig' => 'getTextConfig',
            'audioConfig' => 'getAudioConfig',
            'relationProduct' => 'getRelationProduct'
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
        $this->container['sequenceNo'] = isset($data['sequenceNo']) ? $data['sequenceNo'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['textConfig'] = isset($data['textConfig']) ? $data['textConfig'] : null;
        $this->container['audioConfig'] = isset($data['audioConfig']) ? $data['audioConfig'] : null;
        $this->container['relationProduct'] = isset($data['relationProduct']) ? $data['relationProduct'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['sequenceNo']) && ($this->container['sequenceNo'] < 0)) {
                $invalidProperties[] = "invalid value for 'sequenceNo', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) > 256)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['title']) && (mb_strlen($this->container['title']) < 0)) {
                $invalidProperties[] = "invalid value for 'title', the character length must be bigger than or equal to 0.";
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
    * Gets sequenceNo
    *  **参数解释**： 剧本序号。 **约束限制**： 不涉及
    *
    * @return int|null
    */
    public function getSequenceNo()
    {
        return $this->container['sequenceNo'];
    }

    /**
    * Sets sequenceNo
    *
    * @param int|null $sequenceNo **参数解释**： 剧本序号。 **约束限制**： 不涉及
    *
    * @return $this
    */
    public function setSequenceNo($sequenceNo)
    {
        $this->container['sequenceNo'] = $sequenceNo;
        return $this;
    }

    /**
    * Gets title
    *  **参数解释**： 段落标题。 **约束限制**： 不涉及 **取值范围**： 字符长度0-256位。 **默认取值**： 不涉及。
    *
    * @return string|null
    */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
    * Sets title
    *
    * @param string|null $title **参数解释**： 段落标题。 **约束限制**： 不涉及 **取值范围**： 字符长度0-256位。 **默认取值**： 不涉及。
    *
    * @return $this
    */
    public function setTitle($title)
    {
        $this->container['title'] = $title;
        return $this;
    }

    /**
    * Gets textConfig
    *  textConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\TextConfig|null
    */
    public function getTextConfig()
    {
        return $this->container['textConfig'];
    }

    /**
    * Sets textConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\TextConfig|null $textConfig textConfig
    *
    * @return $this
    */
    public function setTextConfig($textConfig)
    {
        $this->container['textConfig'] = $textConfig;
        return $this;
    }

    /**
    * Gets audioConfig
    *  audioConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveAudioConfig|null
    */
    public function getAudioConfig()
    {
        return $this->container['audioConfig'];
    }

    /**
    * Sets audioConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\LiveAudioConfig|null $audioConfig audioConfig
    *
    * @return $this
    */
    public function setAudioConfig($audioConfig)
    {
        $this->container['audioConfig'] = $audioConfig;
        return $this;
    }

    /**
    * Gets relationProduct
    *  relationProduct
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\RelationProductInfo|null
    */
    public function getRelationProduct()
    {
        return $this->container['relationProduct'];
    }

    /**
    * Sets relationProduct
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\RelationProductInfo|null $relationProduct relationProduct
    *
    * @return $this
    */
    public function setRelationProduct($relationProduct)
    {
        $this->container['relationProduct'] = $relationProduct;
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

