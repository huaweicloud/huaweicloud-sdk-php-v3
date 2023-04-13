<?php

namespace HuaweiCloud\SDK\Sis\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Phoneme implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Phoneme';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * arpa  音标（ARPAbet音标系统）
    * ipa  音标（国际音标系统）
    * startTime  
    * endTime  
    * fluency  fluency
    * pronunciation  pronunciation
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'arpa' => 'string',
            'ipa' => 'string',
            'startTime' => 'float',
            'endTime' => 'float',
            'fluency' => '\HuaweiCloud\SDK\Sis\V1\Model\PhonemeFluency',
            'pronunciation' => '\HuaweiCloud\SDK\Sis\V1\Model\PhonemePronunciation'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * arpa  音标（ARPAbet音标系统）
    * ipa  音标（国际音标系统）
    * startTime  
    * endTime  
    * fluency  fluency
    * pronunciation  pronunciation
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'arpa' => null,
        'ipa' => null,
        'startTime' => 'float',
        'endTime' => 'float',
        'fluency' => null,
        'pronunciation' => null
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
    * arpa  音标（ARPAbet音标系统）
    * ipa  音标（国际音标系统）
    * startTime  
    * endTime  
    * fluency  fluency
    * pronunciation  pronunciation
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'arpa' => 'arpa',
            'ipa' => 'ipa',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'fluency' => 'fluency',
            'pronunciation' => 'pronunciation'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * arpa  音标（ARPAbet音标系统）
    * ipa  音标（国际音标系统）
    * startTime  
    * endTime  
    * fluency  fluency
    * pronunciation  pronunciation
    *
    * @var string[]
    */
    protected static $setters = [
            'arpa' => 'setArpa',
            'ipa' => 'setIpa',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'fluency' => 'setFluency',
            'pronunciation' => 'setPronunciation'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * arpa  音标（ARPAbet音标系统）
    * ipa  音标（国际音标系统）
    * startTime  
    * endTime  
    * fluency  fluency
    * pronunciation  pronunciation
    *
    * @var string[]
    */
    protected static $getters = [
            'arpa' => 'getArpa',
            'ipa' => 'getIpa',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'fluency' => 'getFluency',
            'pronunciation' => 'getPronunciation'
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
        $this->container['arpa'] = isset($data['arpa']) ? $data['arpa'] : null;
        $this->container['ipa'] = isset($data['ipa']) ? $data['ipa'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['fluency'] = isset($data['fluency']) ? $data['fluency'] : null;
        $this->container['pronunciation'] = isset($data['pronunciation']) ? $data['pronunciation'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['arpa'] === null) {
            $invalidProperties[] = "'arpa' can't be null";
        }
        if ($this->container['ipa'] === null) {
            $invalidProperties[] = "'ipa' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
        }
        if ($this->container['fluency'] === null) {
            $invalidProperties[] = "'fluency' can't be null";
        }
        if ($this->container['pronunciation'] === null) {
            $invalidProperties[] = "'pronunciation' can't be null";
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
    * Gets arpa
    *  音标（ARPAbet音标系统）
    *
    * @return string
    */
    public function getArpa()
    {
        return $this->container['arpa'];
    }

    /**
    * Sets arpa
    *
    * @param string $arpa 音标（ARPAbet音标系统）
    *
    * @return $this
    */
    public function setArpa($arpa)
    {
        $this->container['arpa'] = $arpa;
        return $this;
    }

    /**
    * Gets ipa
    *  音标（国际音标系统）
    *
    * @return string
    */
    public function getIpa()
    {
        return $this->container['ipa'];
    }

    /**
    * Sets ipa
    *
    * @param string $ipa 音标（国际音标系统）
    *
    * @return $this
    */
    public function setIpa($ipa)
    {
        $this->container['ipa'] = $ipa;
        return $this;
    }

    /**
    * Gets startTime
    *  
    *
    * @return float
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param float $startTime 
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  
    *
    * @return float
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param float $endTime 
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets fluency
    *  fluency
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\PhonemeFluency
    */
    public function getFluency()
    {
        return $this->container['fluency'];
    }

    /**
    * Sets fluency
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\PhonemeFluency $fluency fluency
    *
    * @return $this
    */
    public function setFluency($fluency)
    {
        $this->container['fluency'] = $fluency;
        return $this;
    }

    /**
    * Gets pronunciation
    *  pronunciation
    *
    * @return \HuaweiCloud\SDK\Sis\V1\Model\PhonemePronunciation
    */
    public function getPronunciation()
    {
        return $this->container['pronunciation'];
    }

    /**
    * Sets pronunciation
    *
    * @param \HuaweiCloud\SDK\Sis\V1\Model\PhonemePronunciation $pronunciation pronunciation
    *
    * @return $this
    */
    public function setPronunciation($pronunciation)
    {
        $this->container['pronunciation'] = $pronunciation;
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

