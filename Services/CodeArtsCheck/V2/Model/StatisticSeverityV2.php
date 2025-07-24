<?php

namespace HuaweiCloud\SDK\CodeArtsCheck\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class StatisticSeverityV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'StatisticSeverityV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * critical  致命问题数
    * major  严重问题数
    * minor  一般问题数
    * suggestion  提示问题数
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'critical' => 'int',
            'major' => 'int',
            'minor' => 'int',
            'suggestion' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * critical  致命问题数
    * major  严重问题数
    * minor  一般问题数
    * suggestion  提示问题数
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'critical' => null,
        'major' => null,
        'minor' => null,
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
    * critical  致命问题数
    * major  严重问题数
    * minor  一般问题数
    * suggestion  提示问题数
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'critical' => 'critical',
            'major' => 'major',
            'minor' => 'minor',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * critical  致命问题数
    * major  严重问题数
    * minor  一般问题数
    * suggestion  提示问题数
    *
    * @var string[]
    */
    protected static $setters = [
            'critical' => 'setCritical',
            'major' => 'setMajor',
            'minor' => 'setMinor',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * critical  致命问题数
    * major  严重问题数
    * minor  一般问题数
    * suggestion  提示问题数
    *
    * @var string[]
    */
    protected static $getters = [
            'critical' => 'getCritical',
            'major' => 'getMajor',
            'minor' => 'getMinor',
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
        $this->container['critical'] = isset($data['critical']) ? $data['critical'] : null;
        $this->container['major'] = isset($data['major']) ? $data['major'] : null;
        $this->container['minor'] = isset($data['minor']) ? $data['minor'] : null;
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
    * Gets critical
    *  致命问题数
    *
    * @return int|null
    */
    public function getCritical()
    {
        return $this->container['critical'];
    }

    /**
    * Sets critical
    *
    * @param int|null $critical 致命问题数
    *
    * @return $this
    */
    public function setCritical($critical)
    {
        $this->container['critical'] = $critical;
        return $this;
    }

    /**
    * Gets major
    *  严重问题数
    *
    * @return int|null
    */
    public function getMajor()
    {
        return $this->container['major'];
    }

    /**
    * Sets major
    *
    * @param int|null $major 严重问题数
    *
    * @return $this
    */
    public function setMajor($major)
    {
        $this->container['major'] = $major;
        return $this;
    }

    /**
    * Gets minor
    *  一般问题数
    *
    * @return int|null
    */
    public function getMinor()
    {
        return $this->container['minor'];
    }

    /**
    * Sets minor
    *
    * @param int|null $minor 一般问题数
    *
    * @return $this
    */
    public function setMinor($minor)
    {
        $this->container['minor'] = $minor;
        return $this;
    }

    /**
    * Gets suggestion
    *  提示问题数
    *
    * @return int|null
    */
    public function getSuggestion()
    {
        return $this->container['suggestion'];
    }

    /**
    * Sets suggestion
    *
    * @param int|null $suggestion 提示问题数
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

