<?php

namespace HuaweiCloud\SDK\Meeting\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RestSetAttendeeLanChannelBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RestSetAttendeeLanChannelBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * participantIDs  会场标识列表。
    * listenLanChannel  与会者收听的语言频道，普通与会者听与说一致。
    * speakLanChannel  与会者发言的语言频道，普通与会者听与说一致。
    * includeOriginalVoice  是否包含原声，0：不包含，1：包含。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'participantIDs' => 'string[]',
            'listenLanChannel' => 'string',
            'speakLanChannel' => 'string',
            'includeOriginalVoice' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * participantIDs  会场标识列表。
    * listenLanChannel  与会者收听的语言频道，普通与会者听与说一致。
    * speakLanChannel  与会者发言的语言频道，普通与会者听与说一致。
    * includeOriginalVoice  是否包含原声，0：不包含，1：包含。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'participantIDs' => null,
        'listenLanChannel' => null,
        'speakLanChannel' => null,
        'includeOriginalVoice' => 'int32'
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
    * participantIDs  会场标识列表。
    * listenLanChannel  与会者收听的语言频道，普通与会者听与说一致。
    * speakLanChannel  与会者发言的语言频道，普通与会者听与说一致。
    * includeOriginalVoice  是否包含原声，0：不包含，1：包含。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'participantIDs' => 'participantIDs',
            'listenLanChannel' => 'listenLanChannel',
            'speakLanChannel' => 'speakLanChannel',
            'includeOriginalVoice' => 'includeOriginalVoice'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * participantIDs  会场标识列表。
    * listenLanChannel  与会者收听的语言频道，普通与会者听与说一致。
    * speakLanChannel  与会者发言的语言频道，普通与会者听与说一致。
    * includeOriginalVoice  是否包含原声，0：不包含，1：包含。
    *
    * @var string[]
    */
    protected static $setters = [
            'participantIDs' => 'setParticipantIDs',
            'listenLanChannel' => 'setListenLanChannel',
            'speakLanChannel' => 'setSpeakLanChannel',
            'includeOriginalVoice' => 'setIncludeOriginalVoice'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * participantIDs  会场标识列表。
    * listenLanChannel  与会者收听的语言频道，普通与会者听与说一致。
    * speakLanChannel  与会者发言的语言频道，普通与会者听与说一致。
    * includeOriginalVoice  是否包含原声，0：不包含，1：包含。
    *
    * @var string[]
    */
    protected static $getters = [
            'participantIDs' => 'getParticipantIDs',
            'listenLanChannel' => 'getListenLanChannel',
            'speakLanChannel' => 'getSpeakLanChannel',
            'includeOriginalVoice' => 'getIncludeOriginalVoice'
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
        $this->container['participantIDs'] = isset($data['participantIDs']) ? $data['participantIDs'] : null;
        $this->container['listenLanChannel'] = isset($data['listenLanChannel']) ? $data['listenLanChannel'] : null;
        $this->container['speakLanChannel'] = isset($data['speakLanChannel']) ? $data['speakLanChannel'] : null;
        $this->container['includeOriginalVoice'] = isset($data['includeOriginalVoice']) ? $data['includeOriginalVoice'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['listenLanChannel'] === null) {
            $invalidProperties[] = "'listenLanChannel' can't be null";
        }
        if ($this->container['speakLanChannel'] === null) {
            $invalidProperties[] = "'speakLanChannel' can't be null";
        }
            if (!is_null($this->container['includeOriginalVoice']) && ($this->container['includeOriginalVoice'] > 1)) {
                $invalidProperties[] = "invalid value for 'includeOriginalVoice', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['includeOriginalVoice']) && ($this->container['includeOriginalVoice'] < 0)) {
                $invalidProperties[] = "invalid value for 'includeOriginalVoice', must be bigger than or equal to 0.";
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
    * Gets participantIDs
    *  会场标识列表。
    *
    * @return string[]|null
    */
    public function getParticipantIDs()
    {
        return $this->container['participantIDs'];
    }

    /**
    * Sets participantIDs
    *
    * @param string[]|null $participantIDs 会场标识列表。
    *
    * @return $this
    */
    public function setParticipantIDs($participantIDs)
    {
        $this->container['participantIDs'] = $participantIDs;
        return $this;
    }

    /**
    * Gets listenLanChannel
    *  与会者收听的语言频道，普通与会者听与说一致。
    *
    * @return string
    */
    public function getListenLanChannel()
    {
        return $this->container['listenLanChannel'];
    }

    /**
    * Sets listenLanChannel
    *
    * @param string $listenLanChannel 与会者收听的语言频道，普通与会者听与说一致。
    *
    * @return $this
    */
    public function setListenLanChannel($listenLanChannel)
    {
        $this->container['listenLanChannel'] = $listenLanChannel;
        return $this;
    }

    /**
    * Gets speakLanChannel
    *  与会者发言的语言频道，普通与会者听与说一致。
    *
    * @return string
    */
    public function getSpeakLanChannel()
    {
        return $this->container['speakLanChannel'];
    }

    /**
    * Sets speakLanChannel
    *
    * @param string $speakLanChannel 与会者发言的语言频道，普通与会者听与说一致。
    *
    * @return $this
    */
    public function setSpeakLanChannel($speakLanChannel)
    {
        $this->container['speakLanChannel'] = $speakLanChannel;
        return $this;
    }

    /**
    * Gets includeOriginalVoice
    *  是否包含原声，0：不包含，1：包含。
    *
    * @return int|null
    */
    public function getIncludeOriginalVoice()
    {
        return $this->container['includeOriginalVoice'];
    }

    /**
    * Sets includeOriginalVoice
    *
    * @param int|null $includeOriginalVoice 是否包含原声，0：不包含，1：包含。
    *
    * @return $this
    */
    public function setIncludeOriginalVoice($includeOriginalVoice)
    {
        $this->container['includeOriginalVoice'] = $includeOriginalVoice;
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

