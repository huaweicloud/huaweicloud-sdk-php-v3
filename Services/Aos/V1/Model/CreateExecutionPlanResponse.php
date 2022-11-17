<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateExecutionPlanResponse implements ModelInterface, ArrayAccess
{
    use SdkResponse;
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateExecutionPlanResponse';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackName  栈的名字
    * stackId  栈的唯一Id
    * executionPlanName  执行计划的名字。如果未指定，则使用execution_plan_id作为execution_plan_name。
    * executionPlanId  执行计划的唯一Id，由IaC随机生成
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackName' => 'string',
            'stackId' => 'string',
            'executionPlanName' => 'string',
            'executionPlanId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackName  栈的名字
    * stackId  栈的唯一Id
    * executionPlanName  执行计划的名字。如果未指定，则使用execution_plan_id作为execution_plan_name。
    * executionPlanId  执行计划的唯一Id，由IaC随机生成
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackName' => null,
        'stackId' => null,
        'executionPlanName' => null,
        'executionPlanId' => null
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
    * stackName  栈的名字
    * stackId  栈的唯一Id
    * executionPlanName  执行计划的名字。如果未指定，则使用execution_plan_id作为execution_plan_name。
    * executionPlanId  执行计划的唯一Id，由IaC随机生成
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackName' => 'stack_name',
            'stackId' => 'stack_id',
            'executionPlanName' => 'execution_plan_name',
            'executionPlanId' => 'execution_plan_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackName  栈的名字
    * stackId  栈的唯一Id
    * executionPlanName  执行计划的名字。如果未指定，则使用execution_plan_id作为execution_plan_name。
    * executionPlanId  执行计划的唯一Id，由IaC随机生成
    *
    * @var string[]
    */
    protected static $setters = [
            'stackName' => 'setStackName',
            'stackId' => 'setStackId',
            'executionPlanName' => 'setExecutionPlanName',
            'executionPlanId' => 'setExecutionPlanId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackName  栈的名字
    * stackId  栈的唯一Id
    * executionPlanName  执行计划的名字。如果未指定，则使用execution_plan_id作为execution_plan_name。
    * executionPlanId  执行计划的唯一Id，由IaC随机生成
    *
    * @var string[]
    */
    protected static $getters = [
            'stackName' => 'getStackName',
            'stackId' => 'getStackId',
            'executionPlanName' => 'getExecutionPlanName',
            'executionPlanId' => 'getExecutionPlanId'
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
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['executionPlanName'] = isset($data['executionPlanName']) ? $data['executionPlanName'] : null;
        $this->container['executionPlanId'] = isset($data['executionPlanId']) ? $data['executionPlanId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['stackName']) && (mb_strlen($this->container['stackName']) > 128)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['stackName']) && (mb_strlen($this->container['stackName']) < 1)) {
                $invalidProperties[] = "invalid value for 'stackName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['executionPlanName']) && (mb_strlen($this->container['executionPlanName']) > 128)) {
                $invalidProperties[] = "invalid value for 'executionPlanName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['executionPlanName']) && (mb_strlen($this->container['executionPlanName']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionPlanName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['executionPlanId']) && (mb_strlen($this->container['executionPlanId']) > 64)) {
                $invalidProperties[] = "invalid value for 'executionPlanId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['executionPlanId']) && (mb_strlen($this->container['executionPlanId']) < 1)) {
                $invalidProperties[] = "invalid value for 'executionPlanId', the character length must be bigger than or equal to 1.";
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
    * Gets stackName
    *  栈的名字
    *
    * @return string|null
    */
    public function getStackName()
    {
        return $this->container['stackName'];
    }

    /**
    * Sets stackName
    *
    * @param string|null $stackName 栈的名字
    *
    * @return $this
    */
    public function setStackName($stackName)
    {
        $this->container['stackName'] = $stackName;
        return $this;
    }

    /**
    * Gets stackId
    *  栈的唯一Id
    *
    * @return string|null
    */
    public function getStackId()
    {
        return $this->container['stackId'];
    }

    /**
    * Sets stackId
    *
    * @param string|null $stackId 栈的唯一Id
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets executionPlanName
    *  执行计划的名字。如果未指定，则使用execution_plan_id作为execution_plan_name。
    *
    * @return string|null
    */
    public function getExecutionPlanName()
    {
        return $this->container['executionPlanName'];
    }

    /**
    * Sets executionPlanName
    *
    * @param string|null $executionPlanName 执行计划的名字。如果未指定，则使用execution_plan_id作为execution_plan_name。
    *
    * @return $this
    */
    public function setExecutionPlanName($executionPlanName)
    {
        $this->container['executionPlanName'] = $executionPlanName;
        return $this;
    }

    /**
    * Gets executionPlanId
    *  执行计划的唯一Id，由IaC随机生成
    *
    * @return string|null
    */
    public function getExecutionPlanId()
    {
        return $this->container['executionPlanId'];
    }

    /**
    * Sets executionPlanId
    *
    * @param string|null $executionPlanId 执行计划的唯一Id，由IaC随机生成
    *
    * @return $this
    */
    public function setExecutionPlanId($executionPlanId)
    {
        $this->container['executionPlanId'] = $executionPlanId;
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

