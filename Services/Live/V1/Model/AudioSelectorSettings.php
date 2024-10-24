<?php

namespace HuaweiCloud\SDK\Live\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AudioSelectorSettings implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AudioSelectorSettings';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * audioLanguageSelection  audioLanguageSelection
    * audioPidSelection  audioPidSelection
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'audioLanguageSelection' => '\HuaweiCloud\SDK\Live\V1\Model\AudioSelectorLangSelection',
            'audioPidSelection' => '\HuaweiCloud\SDK\Live\V1\Model\AudioSelectorPidSelection'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * audioLanguageSelection  audioLanguageSelection
    * audioPidSelection  audioPidSelection
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'audioLanguageSelection' => null,
        'audioPidSelection' => null
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
    * audioLanguageSelection  audioLanguageSelection
    * audioPidSelection  audioPidSelection
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'audioLanguageSelection' => 'audio_language_selection',
            'audioPidSelection' => 'audio_pid_selection'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * audioLanguageSelection  audioLanguageSelection
    * audioPidSelection  audioPidSelection
    *
    * @var string[]
    */
    protected static $setters = [
            'audioLanguageSelection' => 'setAudioLanguageSelection',
            'audioPidSelection' => 'setAudioPidSelection'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * audioLanguageSelection  audioLanguageSelection
    * audioPidSelection  audioPidSelection
    *
    * @var string[]
    */
    protected static $getters = [
            'audioLanguageSelection' => 'getAudioLanguageSelection',
            'audioPidSelection' => 'getAudioPidSelection'
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
        $this->container['audioLanguageSelection'] = isset($data['audioLanguageSelection']) ? $data['audioLanguageSelection'] : null;
        $this->container['audioPidSelection'] = isset($data['audioPidSelection']) ? $data['audioPidSelection'] : null;
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
    * Gets audioLanguageSelection
    *  audioLanguageSelection
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\AudioSelectorLangSelection|null
    */
    public function getAudioLanguageSelection()
    {
        return $this->container['audioLanguageSelection'];
    }

    /**
    * Sets audioLanguageSelection
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\AudioSelectorLangSelection|null $audioLanguageSelection audioLanguageSelection
    *
    * @return $this
    */
    public function setAudioLanguageSelection($audioLanguageSelection)
    {
        $this->container['audioLanguageSelection'] = $audioLanguageSelection;
        return $this;
    }

    /**
    * Gets audioPidSelection
    *  audioPidSelection
    *
    * @return \HuaweiCloud\SDK\Live\V1\Model\AudioSelectorPidSelection|null
    */
    public function getAudioPidSelection()
    {
        return $this->container['audioPidSelection'];
    }

    /**
    * Sets audioPidSelection
    *
    * @param \HuaweiCloud\SDK\Live\V1\Model\AudioSelectorPidSelection|null $audioPidSelection audioPidSelection
    *
    * @return $this
    */
    public function setAudioPidSelection($audioPidSelection)
    {
        $this->container['audioPidSelection'] = $audioPidSelection;
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

