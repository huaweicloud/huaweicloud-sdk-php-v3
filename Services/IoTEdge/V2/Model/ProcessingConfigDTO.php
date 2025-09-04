<?php

namespace HuaweiCloud\SDK\IoTEdge\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ProcessingConfigDTO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ProcessingConfigDTO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * validity  validity
    * streamFormula  点位流公式配置字段
    * scaling  scaling
    * clean  clean
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'validity' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\PointValidityingDTO',
            'streamFormula' => 'string',
            'scaling' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\PointScalingDTO',
            'clean' => '\HuaweiCloud\SDK\IoTEdge\V2\Model\PointCleanDTO'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * validity  validity
    * streamFormula  点位流公式配置字段
    * scaling  scaling
    * clean  clean
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'validity' => null,
        'streamFormula' => null,
        'scaling' => null,
        'clean' => null
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
    * validity  validity
    * streamFormula  点位流公式配置字段
    * scaling  scaling
    * clean  clean
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'validity' => 'validity',
            'streamFormula' => 'stream_formula',
            'scaling' => 'scaling',
            'clean' => 'clean'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * validity  validity
    * streamFormula  点位流公式配置字段
    * scaling  scaling
    * clean  clean
    *
    * @var string[]
    */
    protected static $setters = [
            'validity' => 'setValidity',
            'streamFormula' => 'setStreamFormula',
            'scaling' => 'setScaling',
            'clean' => 'setClean'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * validity  validity
    * streamFormula  点位流公式配置字段
    * scaling  scaling
    * clean  clean
    *
    * @var string[]
    */
    protected static $getters = [
            'validity' => 'getValidity',
            'streamFormula' => 'getStreamFormula',
            'scaling' => 'getScaling',
            'clean' => 'getClean'
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
        $this->container['validity'] = isset($data['validity']) ? $data['validity'] : null;
        $this->container['streamFormula'] = isset($data['streamFormula']) ? $data['streamFormula'] : null;
        $this->container['scaling'] = isset($data['scaling']) ? $data['scaling'] : null;
        $this->container['clean'] = isset($data['clean']) ? $data['clean'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['streamFormula']) && (mb_strlen($this->container['streamFormula']) > 128)) {
                $invalidProperties[] = "invalid value for 'streamFormula', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['streamFormula']) && (mb_strlen($this->container['streamFormula']) < 0)) {
                $invalidProperties[] = "invalid value for 'streamFormula', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['streamFormula']) && !preg_match("/^bit\\(([0-9]|[1-2][0-9]|3[0-1])\\)(\\.bool\\(\\))?$|^string_to_int\\(((-?[1-9]\\d*)|0)\\)$|^string_to_double\\((-?(?:[1-9]\\d*\\.\\d*|0\\.\\d*|[1-9]\\d*)|0)\\)$/", $this->container['streamFormula'])) {
                $invalidProperties[] = "invalid value for 'streamFormula', must be conform to the pattern /^bit\\(([0-9]|[1-2][0-9]|3[0-1])\\)(\\.bool\\(\\))?$|^string_to_int\\(((-?[1-9]\\d*)|0)\\)$|^string_to_double\\((-?(?:[1-9]\\d*\\.\\d*|0\\.\\d*|[1-9]\\d*)|0)\\)$/.";
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
    * Gets validity
    *  validity
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\PointValidityingDTO|null
    */
    public function getValidity()
    {
        return $this->container['validity'];
    }

    /**
    * Sets validity
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\PointValidityingDTO|null $validity validity
    *
    * @return $this
    */
    public function setValidity($validity)
    {
        $this->container['validity'] = $validity;
        return $this;
    }

    /**
    * Gets streamFormula
    *  点位流公式配置字段
    *
    * @return string|null
    */
    public function getStreamFormula()
    {
        return $this->container['streamFormula'];
    }

    /**
    * Sets streamFormula
    *
    * @param string|null $streamFormula 点位流公式配置字段
    *
    * @return $this
    */
    public function setStreamFormula($streamFormula)
    {
        $this->container['streamFormula'] = $streamFormula;
        return $this;
    }

    /**
    * Gets scaling
    *  scaling
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\PointScalingDTO|null
    */
    public function getScaling()
    {
        return $this->container['scaling'];
    }

    /**
    * Sets scaling
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\PointScalingDTO|null $scaling scaling
    *
    * @return $this
    */
    public function setScaling($scaling)
    {
        $this->container['scaling'] = $scaling;
        return $this;
    }

    /**
    * Gets clean
    *  clean
    *
    * @return \HuaweiCloud\SDK\IoTEdge\V2\Model\PointCleanDTO|null
    */
    public function getClean()
    {
        return $this->container['clean'];
    }

    /**
    * Sets clean
    *
    * @param \HuaweiCloud\SDK\IoTEdge\V2\Model\PointCleanDTO|null $clean clean
    *
    * @return $this
    */
    public function setClean($clean)
    {
        $this->container['clean'] = $clean;
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

