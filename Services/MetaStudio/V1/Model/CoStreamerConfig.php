<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CoStreamerConfig implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CoStreamerConfig';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * voiceConfig  voiceConfig
    * streamerAction  助播出声时主播行为。 * SILENCE：静默 * VOLUME_DOWN：音量降低
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'voiceConfig' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig',
            'streamerAction' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * voiceConfig  voiceConfig
    * streamerAction  助播出声时主播行为。 * SILENCE：静默 * VOLUME_DOWN：音量降低
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'voiceConfig' => null,
        'streamerAction' => null
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
    * voiceConfig  voiceConfig
    * streamerAction  助播出声时主播行为。 * SILENCE：静默 * VOLUME_DOWN：音量降低
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'voiceConfig' => 'voice_config',
            'streamerAction' => 'streamer_action'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * voiceConfig  voiceConfig
    * streamerAction  助播出声时主播行为。 * SILENCE：静默 * VOLUME_DOWN：音量降低
    *
    * @var string[]
    */
    protected static $setters = [
            'voiceConfig' => 'setVoiceConfig',
            'streamerAction' => 'setStreamerAction'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * voiceConfig  voiceConfig
    * streamerAction  助播出声时主播行为。 * SILENCE：静默 * VOLUME_DOWN：音量降低
    *
    * @var string[]
    */
    protected static $getters = [
            'voiceConfig' => 'getVoiceConfig',
            'streamerAction' => 'getStreamerAction'
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
    const STREAMER_ACTION_SILENCE = 'SILENCE';
    const STREAMER_ACTION_VOLUME_DOWN = 'VOLUME_DOWN';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStreamerActionAllowableValues()
    {
        return [
            self::STREAMER_ACTION_SILENCE,
            self::STREAMER_ACTION_VOLUME_DOWN,
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
        $this->container['voiceConfig'] = isset($data['voiceConfig']) ? $data['voiceConfig'] : null;
        $this->container['streamerAction'] = isset($data['streamerAction']) ? $data['streamerAction'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getStreamerActionAllowableValues();
                if (!is_null($this->container['streamerAction']) && !in_array($this->container['streamerAction'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'streamerAction', must be one of '%s'",
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
    * Gets voiceConfig
    *  voiceConfig
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig|null
    */
    public function getVoiceConfig()
    {
        return $this->container['voiceConfig'];
    }

    /**
    * Sets voiceConfig
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\VoiceConfig|null $voiceConfig voiceConfig
    *
    * @return $this
    */
    public function setVoiceConfig($voiceConfig)
    {
        $this->container['voiceConfig'] = $voiceConfig;
        return $this;
    }

    /**
    * Gets streamerAction
    *  助播出声时主播行为。 * SILENCE：静默 * VOLUME_DOWN：音量降低
    *
    * @return string|null
    */
    public function getStreamerAction()
    {
        return $this->container['streamerAction'];
    }

    /**
    * Sets streamerAction
    *
    * @param string|null $streamerAction 助播出声时主播行为。 * SILENCE：静默 * VOLUME_DOWN：音量降低
    *
    * @return $this
    */
    public function setStreamerAction($streamerAction)
    {
        $this->container['streamerAction'] = $streamerAction;
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

