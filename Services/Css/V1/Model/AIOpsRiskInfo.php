<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class AIOpsRiskInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'AIOpsRiskInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * riskType  检测项介绍。
    * level  风险等级。 - high - medium - suggestion
    * desc  风险描述。
    * suggestion  风险建议。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'riskType' => 'string',
            'level' => 'string',
            'desc' => 'string',
            'suggestion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * riskType  检测项介绍。
    * level  风险等级。 - high - medium - suggestion
    * desc  风险描述。
    * suggestion  风险建议。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'riskType' => null,
        'level' => null,
        'desc' => null,
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
    * riskType  检测项介绍。
    * level  风险等级。 - high - medium - suggestion
    * desc  风险描述。
    * suggestion  风险建议。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'riskType' => 'riskType',
            'level' => 'level',
            'desc' => 'desc',
            'suggestion' => 'suggestion'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * riskType  检测项介绍。
    * level  风险等级。 - high - medium - suggestion
    * desc  风险描述。
    * suggestion  风险建议。
    *
    * @var string[]
    */
    protected static $setters = [
            'riskType' => 'setRiskType',
            'level' => 'setLevel',
            'desc' => 'setDesc',
            'suggestion' => 'setSuggestion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * riskType  检测项介绍。
    * level  风险等级。 - high - medium - suggestion
    * desc  风险描述。
    * suggestion  风险建议。
    *
    * @var string[]
    */
    protected static $getters = [
            'riskType' => 'getRiskType',
            'level' => 'getLevel',
            'desc' => 'getDesc',
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
        $this->container['riskType'] = isset($data['riskType']) ? $data['riskType'] : null;
        $this->container['level'] = isset($data['level']) ? $data['level'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
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
    * Gets riskType
    *  检测项介绍。
    *
    * @return string|null
    */
    public function getRiskType()
    {
        return $this->container['riskType'];
    }

    /**
    * Sets riskType
    *
    * @param string|null $riskType 检测项介绍。
    *
    * @return $this
    */
    public function setRiskType($riskType)
    {
        $this->container['riskType'] = $riskType;
        return $this;
    }

    /**
    * Gets level
    *  风险等级。 - high - medium - suggestion
    *
    * @return string|null
    */
    public function getLevel()
    {
        return $this->container['level'];
    }

    /**
    * Sets level
    *
    * @param string|null $level 风险等级。 - high - medium - suggestion
    *
    * @return $this
    */
    public function setLevel($level)
    {
        $this->container['level'] = $level;
        return $this;
    }

    /**
    * Gets desc
    *  风险描述。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 风险描述。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets suggestion
    *  风险建议。
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
    * @param string|null $suggestion 风险建议。
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

