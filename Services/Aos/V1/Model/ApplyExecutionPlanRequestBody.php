<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ApplyExecutionPlanRequestBody implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ApplyExecutionPlanRequestBody';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackId  资源栈id
    * executionPlanId  执行计划Id，在domain_id+region+project_id+stack_id下应唯一
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackId' => 'string',
            'executionPlanId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackId  资源栈id
    * executionPlanId  执行计划Id，在domain_id+region+project_id+stack_id下应唯一
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackId' => null,
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
    * stackId  资源栈id
    * executionPlanId  执行计划Id，在domain_id+region+project_id+stack_id下应唯一
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackId' => 'stack_id',
            'executionPlanId' => 'execution_plan_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackId  资源栈id
    * executionPlanId  执行计划Id，在domain_id+region+project_id+stack_id下应唯一
    *
    * @var string[]
    */
    protected static $setters = [
            'stackId' => 'setStackId',
            'executionPlanId' => 'setExecutionPlanId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackId  资源栈id
    * executionPlanId  执行计划Id，在domain_id+region+project_id+stack_id下应唯一
    *
    * @var string[]
    */
    protected static $getters = [
            'stackId' => 'getStackId',
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
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
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
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) > 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && (mb_strlen($this->container['stackId']) < 36)) {
                $invalidProperties[] = "invalid value for 'stackId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['stackId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['stackId'])) {
                $invalidProperties[] = "invalid value for 'stackId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
            }
            if (!is_null($this->container['executionPlanId']) && (mb_strlen($this->container['executionPlanId']) > 36)) {
                $invalidProperties[] = "invalid value for 'executionPlanId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['executionPlanId']) && (mb_strlen($this->container['executionPlanId']) < 36)) {
                $invalidProperties[] = "invalid value for 'executionPlanId', the character length must be bigger than or equal to 36.";
            }
            if (!is_null($this->container['executionPlanId']) && !preg_match("/^[a-z0-9]+[a-z0-9-]*$/", $this->container['executionPlanId'])) {
                $invalidProperties[] = "invalid value for 'executionPlanId', must be conform to the pattern /^[a-z0-9]+[a-z0-9-]*$/.";
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
    * Gets stackId
    *  资源栈id
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
    * @param string|null $stackId 资源栈id
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
    }

    /**
    * Gets executionPlanId
    *  执行计划Id，在domain_id+region+project_id+stack_id下应唯一
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
    * @param string|null $executionPlanId 执行计划Id，在domain_id+region+project_id+stack_id下应唯一
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

