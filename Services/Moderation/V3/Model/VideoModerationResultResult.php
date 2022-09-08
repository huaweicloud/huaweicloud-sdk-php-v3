<?php

namespace HuaweiCloud\SDK\Moderation\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VideoModerationResultResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VideoModerationResult_result';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * suggestion  视频审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检 pass：不包含敏感信息，通过
    * imageDetail  图像审核详情
    * audioDetail  音频审核详情
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'suggestion' => 'string',
            'imageDetail' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetail[]',
            'audioDetail' => '\HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationVideoDetail[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * suggestion  视频审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检 pass：不包含敏感信息，通过
    * imageDetail  图像审核详情
    * audioDetail  音频审核详情
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'suggestion' => null,
        'imageDetail' => null,
        'audioDetail' => null
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
    * suggestion  视频审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检 pass：不包含敏感信息，通过
    * imageDetail  图像审核详情
    * audioDetail  音频审核详情
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'suggestion' => 'suggestion',
            'imageDetail' => 'image_detail',
            'audioDetail' => 'audio_detail'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * suggestion  视频审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检 pass：不包含敏感信息，通过
    * imageDetail  图像审核详情
    * audioDetail  音频审核详情
    *
    * @var string[]
    */
    protected static $setters = [
            'suggestion' => 'setSuggestion',
            'imageDetail' => 'setImageDetail',
            'audioDetail' => 'setAudioDetail'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * suggestion  视频审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检 pass：不包含敏感信息，通过
    * imageDetail  图像审核详情
    * audioDetail  音频审核详情
    *
    * @var string[]
    */
    protected static $getters = [
            'suggestion' => 'getSuggestion',
            'imageDetail' => 'getImageDetail',
            'audioDetail' => 'getAudioDetail'
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
    const SUGGESTION_BLOCK = 'block';
    const SUGGESTION_PASS = 'pass';
    const SUGGESTION_REVIEW = 'review';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSuggestionAllowableValues()
    {
        return [
            self::SUGGESTION_BLOCK,
            self::SUGGESTION_PASS,
            self::SUGGESTION_REVIEW,
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
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
        $this->container['imageDetail'] = isset($data['imageDetail']) ? $data['imageDetail'] : null;
        $this->container['audioDetail'] = isset($data['audioDetail']) ? $data['audioDetail'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getSuggestionAllowableValues();
                if (!is_null($this->container['suggestion']) && !in_array($this->container['suggestion'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'suggestion', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets suggestion
    *  视频审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检 pass：不包含敏感信息，通过
    *
    * @return string|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param string|null $suggestion 视频审核结果是否通过。 block：包含敏感信息，不通过  review：需要人工复检 pass：不包含敏感信息，通过
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
        return $this;
    }

    /**
    * Gets imageDetail
    *  图像审核详情
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetail[]|null
    */
    public function getImageDetail()
    {
        return $this->container['imageDetail'];
    }

    /**
    * Sets imageDetail
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationImageDetail[]|null $imageDetail 图像审核详情
    *
    * @return $this
    */
    public function setImageDetail($imageDetail)
    {
        $this->container['imageDetail'] = $imageDetail;
        return $this;
    }

    /**
    * Gets audioDetail
    *  音频审核详情
    *
    * @return \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationVideoDetail[]|null
    */
    public function getAudioDetail()
    {
        return $this->container['audioDetail'];
    }

    /**
    * Sets audioDetail
    *
    * @param \HuaweiCloud\SDK\Moderation\V3\Model\VideoModerationVideoDetail[]|null $audioDetail 音频审核详情
    *
    * @return $this
    */
    public function setAudioDetail($audioDetail)
    {
        $this->container['audioDetail'] = $audioDetail;
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

