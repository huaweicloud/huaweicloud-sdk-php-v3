<?php

namespace HuaweiCloud\SDK\Drs\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ParameterInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ParameterInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * parameterName  参数名称，如：“applier_thread_num”，“read_task_num”等
    * parameterValue  参数名称对应的参数值，如：“20”，“false”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'parameterName' => 'string',
            'parameterValue' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * parameterName  参数名称，如：“applier_thread_num”，“read_task_num”等
    * parameterValue  参数名称对应的参数值，如：“20”，“false”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'parameterName' => null,
        'parameterValue' => null
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
    * parameterName  参数名称，如：“applier_thread_num”，“read_task_num”等
    * parameterValue  参数名称对应的参数值，如：“20”，“false”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'parameterName' => 'parameter_name',
            'parameterValue' => 'parameter_value'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * parameterName  参数名称，如：“applier_thread_num”，“read_task_num”等
    * parameterValue  参数名称对应的参数值，如：“20”，“false”
    *
    * @var string[]
    */
    protected static $setters = [
            'parameterName' => 'setParameterName',
            'parameterValue' => 'setParameterValue'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * parameterName  参数名称，如：“applier_thread_num”，“read_task_num”等
    * parameterValue  参数名称对应的参数值，如：“20”，“false”
    *
    * @var string[]
    */
    protected static $getters = [
            'parameterName' => 'getParameterName',
            'parameterValue' => 'getParameterValue'
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
        $this->container['parameterName'] = isset($data['parameterName']) ? $data['parameterName'] : null;
        $this->container['parameterValue'] = isset($data['parameterValue']) ? $data['parameterValue'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['parameterName'] === null) {
            $invalidProperties[] = "'parameterName' can't be null";
        }
        if ($this->container['parameterValue'] === null) {
            $invalidProperties[] = "'parameterValue' can't be null";
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
    * Gets parameterName
    *  参数名称，如：“applier_thread_num”，“read_task_num”等
    *
    * @return string
    */
    public function getParameterName()
    {
        return $this->container['parameterName'];
    }

    /**
    * Sets parameterName
    *
    * @param string $parameterName 参数名称，如：“applier_thread_num”，“read_task_num”等
    *
    * @return $this
    */
    public function setParameterName($parameterName)
    {
        $this->container['parameterName'] = $parameterName;
        return $this;
    }

    /**
    * Gets parameterValue
    *  参数名称对应的参数值，如：“20”，“false”
    *
    * @return string
    */
    public function getParameterValue()
    {
        return $this->container['parameterValue'];
    }

    /**
    * Sets parameterValue
    *
    * @param string $parameterValue 参数名称对应的参数值，如：“20”，“false”
    *
    * @return $this
    */
    public function setParameterValue($parameterValue)
    {
        $this->container['parameterValue'] = $parameterValue;
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

