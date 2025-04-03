<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioId  **参数解释**： 音频id。 > * 获取方式：剧本为音频驱动时，查询剧本详情或者更新剧本会返回audio_id  **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioId' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioId  **参数解释**： 音频id。 > * 获取方式：剧本为音频驱动时，查询剧本详情或者更新剧本会返回audio_id  **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioId' => 'int32'
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
    * audioId  **参数解释**： 音频id。 > * 获取方式：剧本为音频驱动时，查询剧本详情或者更新剧本会返回audio_id  **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioId' => 'audio_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioId  **参数解释**： 音频id。 > * 获取方式：剧本为音频驱动时，查询剧本详情或者更新剧本会返回audio_id  **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'audioId' => 'setAudioId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioId  **参数解释**： 音频id。 > * 获取方式：剧本为音频驱动时，查询剧本详情或者更新剧本会返回audio_id  **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'audioId' => 'getAudioId'
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
        $this->container['audioId'] = isset($data['audioId']) ? $data['audioId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['audioId']) && ($this->container['audioId'] > 10000)) {
                $invalidProperties[] = "invalid value for 'audioId', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['audioId']) && ($this->container['audioId'] < 0)) {
                $invalidProperties[] = "invalid value for 'audioId', must be bigger than or equal to 0.";
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
    * Gets audioId
    *  **参数解释**： 音频id。 > * 获取方式：剧本为音频驱动时，查询剧本详情或者更新剧本会返回audio_id  **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @return int|null
    */
    public function getAudioId()
    {
        return $this->container['audioId'];
    }

    /**
    * Sets audioId
    *
    * @param int|null $audioId **参数解释**： 音频id。 > * 获取方式：剧本为音频驱动时，查询剧本详情或者更新剧本会返回audio_id  **约束限制**： 不涉及 **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAudioId($audioId)
    {
        $this->container['audioId'] = $audioId;
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

