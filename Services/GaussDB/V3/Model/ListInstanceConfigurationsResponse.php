<?php

namespace HuaweiCloud\SDK\GaussDB\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListInstanceConfigurationsResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListInstanceConfigurationsResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * configurations  configurations
    * totalCount  参数信息的总数。
    * parameterValues  参数对象。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'configurations' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ParameterConfigurationInfo',
            'totalCount' => 'int',
            'parameterValues' => '\HuaweiCloud\SDK\GaussDB\V3\Model\ParameterValuesInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * configurations  configurations
    * totalCount  参数信息的总数。
    * parameterValues  参数对象。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'configurations' => null,
        'totalCount' => 'int64',
        'parameterValues' => null
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
    * configurations  configurations
    * totalCount  参数信息的总数。
    * parameterValues  参数对象。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'configurations' => 'configurations',
            'totalCount' => 'total_count',
            'parameterValues' => 'parameter_values'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * configurations  configurations
    * totalCount  参数信息的总数。
    * parameterValues  参数对象。
    *
    * @var string[]
    */
    protected static $setters = [
            'configurations' => 'setConfigurations',
            'totalCount' => 'setTotalCount',
            'parameterValues' => 'setParameterValues'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * configurations  configurations
    * totalCount  参数信息的总数。
    * parameterValues  参数对象。
    *
    * @var string[]
    */
    protected static $getters = [
            'configurations' => 'getConfigurations',
            'totalCount' => 'getTotalCount',
            'parameterValues' => 'getParameterValues'
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
        $this->container['configurations'] = isset($data['configurations']) ? $data['configurations'] : null;
        $this->container['totalCount'] = isset($data['totalCount']) ? $data['totalCount'] : null;
        $this->container['parameterValues'] = isset($data['parameterValues']) ? $data['parameterValues'] : null;
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
    * Gets configurations
    *  configurations
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ParameterConfigurationInfo|null
    */
    public function getConfigurations()
    {
        return $this->container['configurations'];
    }

    /**
    * Sets configurations
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ParameterConfigurationInfo|null $configurations configurations
    *
    * @return $this
    */
    public function setConfigurations($configurations)
    {
        $this->container['configurations'] = $configurations;
        return $this;
    }

    /**
    * Gets totalCount
    *  参数信息的总数。
    *
    * @return int|null
    */
    public function getTotalCount()
    {
        return $this->container['totalCount'];
    }

    /**
    * Sets totalCount
    *
    * @param int|null $totalCount 参数信息的总数。
    *
    * @return $this
    */
    public function setTotalCount($totalCount)
    {
        $this->container['totalCount'] = $totalCount;
        return $this;
    }

    /**
    * Gets parameterValues
    *  参数对象。
    *
    * @return \HuaweiCloud\SDK\GaussDB\V3\Model\ParameterValuesInfo[]|null
    */
    public function getParameterValues()
    {
        return $this->container['parameterValues'];
    }

    /**
    * Sets parameterValues
    *
    * @param \HuaweiCloud\SDK\GaussDB\V3\Model\ParameterValuesInfo[]|null $parameterValues 参数对象。
    *
    * @return $this
    */
    public function setParameterValues($parameterValues)
    {
        $this->container['parameterValues'] = $parameterValues;
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
