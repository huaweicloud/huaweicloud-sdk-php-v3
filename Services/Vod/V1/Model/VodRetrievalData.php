<?php

namespace HuaweiCloud\SDK\Vod\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VodRetrievalData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VodRetrievalData';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * retrievalWarm  低频取回量
    * retrievalCold  归档标准取回量
    * retrievalColdSpeed  归档快速取回量
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'retrievalWarm' => 'double',
            'retrievalCold' => 'double',
            'retrievalColdSpeed' => 'double'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * retrievalWarm  低频取回量
    * retrievalCold  归档标准取回量
    * retrievalColdSpeed  归档快速取回量
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'retrievalWarm' => 'double',
        'retrievalCold' => 'double',
        'retrievalColdSpeed' => 'double'
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
    * retrievalWarm  低频取回量
    * retrievalCold  归档标准取回量
    * retrievalColdSpeed  归档快速取回量
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'retrievalWarm' => 'retrieval_warm',
            'retrievalCold' => 'retrieval_cold',
            'retrievalColdSpeed' => 'retrieval_cold_speed'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * retrievalWarm  低频取回量
    * retrievalCold  归档标准取回量
    * retrievalColdSpeed  归档快速取回量
    *
    * @var string[]
    */
    protected static $setters = [
            'retrievalWarm' => 'setRetrievalWarm',
            'retrievalCold' => 'setRetrievalCold',
            'retrievalColdSpeed' => 'setRetrievalColdSpeed'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * retrievalWarm  低频取回量
    * retrievalCold  归档标准取回量
    * retrievalColdSpeed  归档快速取回量
    *
    * @var string[]
    */
    protected static $getters = [
            'retrievalWarm' => 'getRetrievalWarm',
            'retrievalCold' => 'getRetrievalCold',
            'retrievalColdSpeed' => 'getRetrievalColdSpeed'
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
        $this->container['retrievalWarm'] = isset($data['retrievalWarm']) ? $data['retrievalWarm'] : null;
        $this->container['retrievalCold'] = isset($data['retrievalCold']) ? $data['retrievalCold'] : null;
        $this->container['retrievalColdSpeed'] = isset($data['retrievalColdSpeed']) ? $data['retrievalColdSpeed'] : null;
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
    * Gets retrievalWarm
    *  低频取回量
    *
    * @return double|null
    */
    public function getRetrievalWarm()
    {
        return $this->container['retrievalWarm'];
    }

    /**
    * Sets retrievalWarm
    *
    * @param double|null $retrievalWarm 低频取回量
    *
    * @return $this
    */
    public function setRetrievalWarm($retrievalWarm)
    {
        $this->container['retrievalWarm'] = $retrievalWarm;
        return $this;
    }

    /**
    * Gets retrievalCold
    *  归档标准取回量
    *
    * @return double|null
    */
    public function getRetrievalCold()
    {
        return $this->container['retrievalCold'];
    }

    /**
    * Sets retrievalCold
    *
    * @param double|null $retrievalCold 归档标准取回量
    *
    * @return $this
    */
    public function setRetrievalCold($retrievalCold)
    {
        $this->container['retrievalCold'] = $retrievalCold;
        return $this;
    }

    /**
    * Gets retrievalColdSpeed
    *  归档快速取回量
    *
    * @return double|null
    */
    public function getRetrievalColdSpeed()
    {
        return $this->container['retrievalColdSpeed'];
    }

    /**
    * Sets retrievalColdSpeed
    *
    * @param double|null $retrievalColdSpeed 归档快速取回量
    *
    * @return $this
    */
    public function setRetrievalColdSpeed($retrievalColdSpeed)
    {
        $this->container['retrievalColdSpeed'] = $retrievalColdSpeed;
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

