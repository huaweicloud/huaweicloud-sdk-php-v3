<?php

namespace HuaweiCloud\SDK\Moderation\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RunModerationAudioResponseBodyResultDetail implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RunModerationAudioResponseBody_result_detail';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * text  返回的语音转文本后审核结果详细信息： ● politics：涉政敏感词列表。 ● porn：涉黄敏感词列表。 ● ad：广告敏感词列表。 ● abuse：辱骂敏感词列表。 ● contraband：违禁品敏感词列表
    * audio  audio
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'text' => 'object',
            'audio' => '\HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioResponseBodyResultDetailAudio'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * text  返回的语音转文本后审核结果详细信息： ● politics：涉政敏感词列表。 ● porn：涉黄敏感词列表。 ● ad：广告敏感词列表。 ● abuse：辱骂敏感词列表。 ● contraband：违禁品敏感词列表
    * audio  audio
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'text' => null,
        'audio' => null
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
    * text  返回的语音转文本后审核结果详细信息： ● politics：涉政敏感词列表。 ● porn：涉黄敏感词列表。 ● ad：广告敏感词列表。 ● abuse：辱骂敏感词列表。 ● contraband：违禁品敏感词列表
    * audio  audio
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'text' => 'text',
            'audio' => 'audio'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * text  返回的语音转文本后审核结果详细信息： ● politics：涉政敏感词列表。 ● porn：涉黄敏感词列表。 ● ad：广告敏感词列表。 ● abuse：辱骂敏感词列表。 ● contraband：违禁品敏感词列表
    * audio  audio
    *
    * @var string[]
    */
    protected static $setters = [
            'text' => 'setText',
            'audio' => 'setAudio'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * text  返回的语音转文本后审核结果详细信息： ● politics：涉政敏感词列表。 ● porn：涉黄敏感词列表。 ● ad：广告敏感词列表。 ● abuse：辱骂敏感词列表。 ● contraband：违禁品敏感词列表
    * audio  audio
    *
    * @var string[]
    */
    protected static $getters = [
            'text' => 'getText',
            'audio' => 'getAudio'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['audio'] = isset($data['audio']) ? $data['audio'] : null;
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
    * Gets text
    *  返回的语音转文本后审核结果详细信息： ● politics：涉政敏感词列表。 ● porn：涉黄敏感词列表。 ● ad：广告敏感词列表。 ● abuse：辱骂敏感词列表。 ● contraband：违禁品敏感词列表
    *
    * @return object|null
    */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
    * Sets text
    *
    * @param object|null $text 返回的语音转文本后审核结果详细信息： ● politics：涉政敏感词列表。 ● porn：涉黄敏感词列表。 ● ad：广告敏感词列表。 ● abuse：辱骂敏感词列表。 ● contraband：违禁品敏感词列表
    *
    * @return $this
    */
    public function setText($text)
    {
        $this->container['text'] = $text;
        return $this;
    }

    /**
    * Gets audio
    *  audio
    *
    * @return \HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioResponseBodyResultDetailAudio|null
    */
    public function getAudio()
    {
        return $this->container['audio'];
    }

    /**
    * Sets audio
    *
    * @param \HuaweiCloud\SDK\Moderation\V2\Model\RunModerationAudioResponseBodyResultDetailAudio|null $audio audio
    *
    * @return $this
    */
    public function setAudio($audio)
    {
        $this->container['audio'] = $audio;
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

