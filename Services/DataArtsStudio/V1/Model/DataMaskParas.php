<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class DataMaskParas implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'DataMaskParas';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * columnName  敏感字段。
    * algorithmName  算法名称。
    * algorithmType  算法类型。
    * enName  算法名称。
    * algorithmParameters  参数。
    * failurePolicy  failurePolicy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'columnName' => 'string',
            'algorithmName' => 'string',
            'algorithmType' => 'string',
            'enName' => 'string',
            'algorithmParameters' => 'string',
            'failurePolicy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * columnName  敏感字段。
    * algorithmName  算法名称。
    * algorithmType  算法类型。
    * enName  算法名称。
    * algorithmParameters  参数。
    * failurePolicy  failurePolicy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'columnName' => null,
        'algorithmName' => null,
        'algorithmType' => null,
        'enName' => null,
        'algorithmParameters' => null,
        'failurePolicy' => null
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
    * columnName  敏感字段。
    * algorithmName  算法名称。
    * algorithmType  算法类型。
    * enName  算法名称。
    * algorithmParameters  参数。
    * failurePolicy  failurePolicy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'columnName' => 'column_name',
            'algorithmName' => 'algorithm_name',
            'algorithmType' => 'algorithm_type',
            'enName' => 'en_name',
            'algorithmParameters' => 'algorithm_parameters',
            'failurePolicy' => 'failure_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * columnName  敏感字段。
    * algorithmName  算法名称。
    * algorithmType  算法类型。
    * enName  算法名称。
    * algorithmParameters  参数。
    * failurePolicy  failurePolicy
    *
    * @var string[]
    */
    protected static $setters = [
            'columnName' => 'setColumnName',
            'algorithmName' => 'setAlgorithmName',
            'algorithmType' => 'setAlgorithmType',
            'enName' => 'setEnName',
            'algorithmParameters' => 'setAlgorithmParameters',
            'failurePolicy' => 'setFailurePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * columnName  敏感字段。
    * algorithmName  算法名称。
    * algorithmType  算法类型。
    * enName  算法名称。
    * algorithmParameters  参数。
    * failurePolicy  failurePolicy
    *
    * @var string[]
    */
    protected static $getters = [
            'columnName' => 'getColumnName',
            'algorithmName' => 'getAlgorithmName',
            'algorithmType' => 'getAlgorithmType',
            'enName' => 'getEnName',
            'algorithmParameters' => 'getAlgorithmParameters',
            'failurePolicy' => 'getFailurePolicy'
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
    const FAILURE_POLICY_SKIP = 'SKIP';
    const FAILURE_POLICY_INTERRUPT_AND_EXCEPTION = 'INTERRUPT_AND_EXCEPTION';
    const FAILURE_POLICY_SET_NULL = 'SET_NULL';
    const FAILURE_POLICY_DEFAULT_VALUE = 'DEFAULT_VALUE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getFailurePolicyAllowableValues()
    {
        return [
            self::FAILURE_POLICY_SKIP,
            self::FAILURE_POLICY_INTERRUPT_AND_EXCEPTION,
            self::FAILURE_POLICY_SET_NULL,
            self::FAILURE_POLICY_DEFAULT_VALUE,
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
        $this->container['columnName'] = isset($data['columnName']) ? $data['columnName'] : null;
        $this->container['algorithmName'] = isset($data['algorithmName']) ? $data['algorithmName'] : null;
        $this->container['algorithmType'] = isset($data['algorithmType']) ? $data['algorithmType'] : null;
        $this->container['enName'] = isset($data['enName']) ? $data['enName'] : null;
        $this->container['algorithmParameters'] = isset($data['algorithmParameters']) ? $data['algorithmParameters'] : null;
        $this->container['failurePolicy'] = isset($data['failurePolicy']) ? $data['failurePolicy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getFailurePolicyAllowableValues();
                if (!is_null($this->container['failurePolicy']) && !in_array($this->container['failurePolicy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'failurePolicy', must be one of '%s'",
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
    * Gets columnName
    *  敏感字段。
    *
    * @return string|null
    */
    public function getColumnName()
    {
        return $this->container['columnName'];
    }

    /**
    * Sets columnName
    *
    * @param string|null $columnName 敏感字段。
    *
    * @return $this
    */
    public function setColumnName($columnName)
    {
        $this->container['columnName'] = $columnName;
        return $this;
    }

    /**
    * Gets algorithmName
    *  算法名称。
    *
    * @return string|null
    */
    public function getAlgorithmName()
    {
        return $this->container['algorithmName'];
    }

    /**
    * Sets algorithmName
    *
    * @param string|null $algorithmName 算法名称。
    *
    * @return $this
    */
    public function setAlgorithmName($algorithmName)
    {
        $this->container['algorithmName'] = $algorithmName;
        return $this;
    }

    /**
    * Gets algorithmType
    *  算法类型。
    *
    * @return string|null
    */
    public function getAlgorithmType()
    {
        return $this->container['algorithmType'];
    }

    /**
    * Sets algorithmType
    *
    * @param string|null $algorithmType 算法类型。
    *
    * @return $this
    */
    public function setAlgorithmType($algorithmType)
    {
        $this->container['algorithmType'] = $algorithmType;
        return $this;
    }

    /**
    * Gets enName
    *  算法名称。
    *
    * @return string|null
    */
    public function getEnName()
    {
        return $this->container['enName'];
    }

    /**
    * Sets enName
    *
    * @param string|null $enName 算法名称。
    *
    * @return $this
    */
    public function setEnName($enName)
    {
        $this->container['enName'] = $enName;
        return $this;
    }

    /**
    * Gets algorithmParameters
    *  参数。
    *
    * @return string|null
    */
    public function getAlgorithmParameters()
    {
        return $this->container['algorithmParameters'];
    }

    /**
    * Sets algorithmParameters
    *
    * @param string|null $algorithmParameters 参数。
    *
    * @return $this
    */
    public function setAlgorithmParameters($algorithmParameters)
    {
        $this->container['algorithmParameters'] = $algorithmParameters;
        return $this;
    }

    /**
    * Gets failurePolicy
    *  failurePolicy
    *
    * @return string|null
    */
    public function getFailurePolicy()
    {
        return $this->container['failurePolicy'];
    }

    /**
    * Sets failurePolicy
    *
    * @param string|null $failurePolicy failurePolicy
    *
    * @return $this
    */
    public function setFailurePolicy($failurePolicy)
    {
        $this->container['failurePolicy'] = $failurePolicy;
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

