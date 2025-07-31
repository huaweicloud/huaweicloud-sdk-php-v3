<?php

namespace HuaweiCloud\SDK\MetaStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AssessResult implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AssessResult';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * speed  speed
    * sound  sound
    * snr  snr
    * reverb  reverb
    * dnsmosOvrl  dnsmosOvrl
    * dnsmosBak  dnsmosBak
    * suggestion  综合建议
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'speed' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty',
            'sound' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty',
            'snr' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty',
            'reverb' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty',
            'dnsmosOvrl' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty',
            'dnsmosBak' => '\HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * speed  speed
    * sound  sound
    * snr  snr
    * reverb  reverb
    * dnsmosOvrl  dnsmosOvrl
    * dnsmosBak  dnsmosBak
    * suggestion  综合建议
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'speed' => null,
        'sound' => null,
        'snr' => null,
        'reverb' => null,
        'dnsmosOvrl' => null,
        'dnsmosBak' => null,
        'suggestion' => null
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
    * speed  speed
    * sound  sound
    * snr  snr
    * reverb  reverb
    * dnsmosOvrl  dnsmosOvrl
    * dnsmosBak  dnsmosBak
    * suggestion  综合建议
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'speed' => 'speed',
            'sound' => 'sound',
            'snr' => 'snr',
            'reverb' => 'reverb',
            'dnsmosOvrl' => 'dnsmos_ovrl',
            'dnsmosBak' => 'dnsmos_bak',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * speed  speed
    * sound  sound
    * snr  snr
    * reverb  reverb
    * dnsmosOvrl  dnsmosOvrl
    * dnsmosBak  dnsmosBak
    * suggestion  综合建议
    *
    * @var string[]
    */
    protected static $setters = [
            'speed' => 'setSpeed',
            'sound' => 'setSound',
            'snr' => 'setSnr',
            'reverb' => 'setReverb',
            'dnsmosOvrl' => 'setDnsmosOvrl',
            'dnsmosBak' => 'setDnsmosBak',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * speed  speed
    * sound  sound
    * snr  snr
    * reverb  reverb
    * dnsmosOvrl  dnsmosOvrl
    * dnsmosBak  dnsmosBak
    * suggestion  综合建议
    *
    * @var string[]
    */
    protected static $getters = [
            'speed' => 'getSpeed',
            'sound' => 'getSound',
            'snr' => 'getSnr',
            'reverb' => 'getReverb',
            'dnsmosOvrl' => 'getDnsmosOvrl',
            'dnsmosBak' => 'getDnsmosBak',
            'suggestion' => 'getSuggestion'
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
        $this->container['speed'] = isset($data['speed']) ? $data['speed'] : null;
        $this->container['sound'] = isset($data['sound']) ? $data['sound'] : null;
        $this->container['snr'] = isset($data['snr']) ? $data['snr'] : null;
        $this->container['reverb'] = isset($data['reverb']) ? $data['reverb'] : null;
        $this->container['dnsmosOvrl'] = isset($data['dnsmosOvrl']) ? $data['dnsmosOvrl'] : null;
        $this->container['dnsmosBak'] = isset($data['dnsmosBak']) ? $data['dnsmosBak'] : null;
        $this->container['suggestion'] = isset($data['suggestion']) ? $data['suggestion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) > 256)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['suggestion']) && (mb_strlen($this->container['suggestion']) < 1)) {
                $invalidProperties[] = "invalid value for 'suggestion', the character length must be bigger than or equal to 1.";
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
    * Gets speed
    *  speed
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null
    */
    public function getSpeed()
    {
        return $this->container['speed'];
    }

    /**
    * Sets speed
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null $speed speed
    *
    * @return $this
    */
    public function setSpeed($speed)
    {
        $this->container['speed'] = $speed;
        return $this;
    }

    /**
    * Gets sound
    *  sound
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null
    */
    public function getSound()
    {
        return $this->container['sound'];
    }

    /**
    * Sets sound
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null $sound sound
    *
    * @return $this
    */
    public function setSound($sound)
    {
        $this->container['sound'] = $sound;
        return $this;
    }

    /**
    * Gets snr
    *  snr
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null
    */
    public function getSnr()
    {
        return $this->container['snr'];
    }

    /**
    * Sets snr
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null $snr snr
    *
    * @return $this
    */
    public function setSnr($snr)
    {
        $this->container['snr'] = $snr;
        return $this;
    }

    /**
    * Gets reverb
    *  reverb
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null
    */
    public function getReverb()
    {
        return $this->container['reverb'];
    }

    /**
    * Sets reverb
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null $reverb reverb
    *
    * @return $this
    */
    public function setReverb($reverb)
    {
        $this->container['reverb'] = $reverb;
        return $this;
    }

    /**
    * Gets dnsmosOvrl
    *  dnsmosOvrl
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null
    */
    public function getDnsmosOvrl()
    {
        return $this->container['dnsmosOvrl'];
    }

    /**
    * Sets dnsmosOvrl
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null $dnsmosOvrl dnsmosOvrl
    *
    * @return $this
    */
    public function setDnsmosOvrl($dnsmosOvrl)
    {
        $this->container['dnsmosOvrl'] = $dnsmosOvrl;
        return $this;
    }

    /**
    * Gets dnsmosBak
    *  dnsmosBak
    *
    * @return \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null
    */
    public function getDnsmosBak()
    {
        return $this->container['dnsmosBak'];
    }

    /**
    * Sets dnsmosBak
    *
    * @param \HuaweiCloud\SDK\MetaStudio\V1\Model\AssessProperty|null $dnsmosBak dnsmosBak
    *
    * @return $this
    */
    public function setDnsmosBak($dnsmosBak)
    {
        $this->container['dnsmosBak'] = $dnsmosBak;
        return $this;
    }

    /**
    * Gets suggestion
    *  综合建议
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
    * @param string|null $suggestion 综合建议
    *
    * @return $this
    */
    public function setSuggestion($suggestion)
    {
        $this->container['suggestion'] = $suggestion;
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

