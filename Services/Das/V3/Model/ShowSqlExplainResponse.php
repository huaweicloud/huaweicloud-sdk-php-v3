<?php

namespace HuaweiCloud\SDK\Das\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ShowSqlExplainResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ShowSqlExplainResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * executionPlans  SQL执行计划列表
    * errorMessage  SQL执行失败时，显示执行错误信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'executionPlans' => '\HuaweiCloud\SDK\Das\V3\Model\ExecutionPlan[]',
            'errorMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * executionPlans  SQL执行计划列表
    * errorMessage  SQL执行失败时，显示执行错误信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'executionPlans' => null,
        'errorMessage' => null
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
    * executionPlans  SQL执行计划列表
    * errorMessage  SQL执行失败时，显示执行错误信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'executionPlans' => 'execution_plans',
            'errorMessage' => 'error_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * executionPlans  SQL执行计划列表
    * errorMessage  SQL执行失败时，显示执行错误信息
    *
    * @var string[]
    */
    protected static $setters = [
            'executionPlans' => 'setExecutionPlans',
            'errorMessage' => 'setErrorMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * executionPlans  SQL执行计划列表
    * errorMessage  SQL执行失败时，显示执行错误信息
    *
    * @var string[]
    */
    protected static $getters = [
            'executionPlans' => 'getExecutionPlans',
            'errorMessage' => 'getErrorMessage'
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
        $this->container['executionPlans'] = isset($data['executionPlans']) ? $data['executionPlans'] : null;
        $this->container['errorMessage'] = isset($data['errorMessage']) ? $data['errorMessage'] : null;
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
    * Gets executionPlans
    *  SQL执行计划列表
    *
    * @return \HuaweiCloud\SDK\Das\V3\Model\ExecutionPlan[]|null
    */
    public function getExecutionPlans()
    {
        return $this->container['executionPlans'];
    }

    /**
    * Sets executionPlans
    *
    * @param \HuaweiCloud\SDK\Das\V3\Model\ExecutionPlan[]|null $executionPlans SQL执行计划列表
    *
    * @return $this
    */
    public function setExecutionPlans($executionPlans)
    {
        $this->container['executionPlans'] = $executionPlans;
        return $this;
    }

    /**
    * Gets errorMessage
    *  SQL执行失败时，显示执行错误信息
    *
    * @return string|null
    */
    public function getErrorMessage()
    {
        return $this->container['errorMessage'];
    }

    /**
    * Sets errorMessage
    *
    * @param string|null $errorMessage SQL执行失败时，显示执行错误信息
    *
    * @return $this
    */
    public function setErrorMessage($errorMessage)
    {
        $this->container['errorMessage'] = $errorMessage;
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

