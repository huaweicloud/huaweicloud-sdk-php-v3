<?php

namespace HuaweiCloud\SDK\ModelArts\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionAction implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionAction';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * actionName  操作名称，枚举如下: - stop 停止 - rerun 重跑
    * policies  policies
    * parameters  参数。
    * dataRequirements  需要的数据。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'actionName' => 'string',
            'policies' => '\HuaweiCloud\SDK\ModelArts\V1\Model\ExecutionActionPolicy',
            'parameters' => '\HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]',
            'dataRequirements' => '\HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * actionName  操作名称，枚举如下: - stop 停止 - rerun 重跑
    * policies  policies
    * parameters  参数。
    * dataRequirements  需要的数据。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'actionName' => null,
        'policies' => null,
        'parameters' => null,
        'dataRequirements' => null
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
    * actionName  操作名称，枚举如下: - stop 停止 - rerun 重跑
    * policies  policies
    * parameters  参数。
    * dataRequirements  需要的数据。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'actionName' => 'action_name',
            'policies' => 'policies',
            'parameters' => 'parameters',
            'dataRequirements' => 'data_requirements'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * actionName  操作名称，枚举如下: - stop 停止 - rerun 重跑
    * policies  policies
    * parameters  参数。
    * dataRequirements  需要的数据。
    *
    * @var string[]
    */
    protected static $setters = [
            'actionName' => 'setActionName',
            'policies' => 'setPolicies',
            'parameters' => 'setParameters',
            'dataRequirements' => 'setDataRequirements'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * actionName  操作名称，枚举如下: - stop 停止 - rerun 重跑
    * policies  policies
    * parameters  参数。
    * dataRequirements  需要的数据。
    *
    * @var string[]
    */
    protected static $getters = [
            'actionName' => 'getActionName',
            'policies' => 'getPolicies',
            'parameters' => 'getParameters',
            'dataRequirements' => 'getDataRequirements'
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
    const ACTION_NAME_STOP = 'stop';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getActionNameAllowableValues()
    {
        return [
            self::ACTION_NAME_STOP,
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
        $this->container['actionName'] = isset($data['actionName']) ? $data['actionName'] : null;
        $this->container['policies'] = isset($data['policies']) ? $data['policies'] : null;
        $this->container['parameters'] = isset($data['parameters']) ? $data['parameters'] : null;
        $this->container['dataRequirements'] = isset($data['dataRequirements']) ? $data['dataRequirements'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['actionName'] === null) {
            $invalidProperties[] = "'actionName' can't be null";
        }
            $allowedValues = $this->getActionNameAllowableValues();
                if (!is_null($this->container['actionName']) && !in_array($this->container['actionName'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'actionName', must be one of '%s'",
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
    * Gets actionName
    *  操作名称，枚举如下: - stop 停止 - rerun 重跑
    *
    * @return string
    */
    public function getActionName()
    {
        return $this->container['actionName'];
    }

    /**
    * Sets actionName
    *
    * @param string $actionName 操作名称，枚举如下: - stop 停止 - rerun 重跑
    *
    * @return $this
    */
    public function setActionName($actionName)
    {
        $this->container['actionName'] = $actionName;
        return $this;
    }

    /**
    * Gets policies
    *  policies
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\ExecutionActionPolicy|null
    */
    public function getPolicies()
    {
        return $this->container['policies'];
    }

    /**
    * Sets policies
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\ExecutionActionPolicy|null $policies policies
    *
    * @return $this
    */
    public function setPolicies($policies)
    {
        $this->container['policies'] = $policies;
        return $this;
    }

    /**
    * Gets parameters
    *  参数。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]|null
    */
    public function getParameters()
    {
        return $this->container['parameters'];
    }

    /**
    * Sets parameters
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\WorkflowParameter[]|null $parameters 参数。
    *
    * @return $this
    */
    public function setParameters($parameters)
    {
        $this->container['parameters'] = $parameters;
        return $this;
    }

    /**
    * Gets dataRequirements
    *  需要的数据。
    *
    * @return \HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]|null
    */
    public function getDataRequirements()
    {
        return $this->container['dataRequirements'];
    }

    /**
    * Sets dataRequirements
    *
    * @param \HuaweiCloud\SDK\ModelArts\V1\Model\DataRequirement[]|null $dataRequirements 需要的数据。
    *
    * @return $this
    */
    public function setDataRequirements($dataRequirements)
    {
        $this->container['dataRequirements'] = $dataRequirements;
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

