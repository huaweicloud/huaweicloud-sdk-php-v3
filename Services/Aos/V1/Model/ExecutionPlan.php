<?php

namespace HuaweiCloud\SDK\Aos\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ExecutionPlan implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ExecutionPlan';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * stackId  栈的唯一Id,为uuid
    * stackName  栈的名字
    * executionPlanId  执行计划的唯一Id，由IaC随机生成,为uuid
    * executionPlanName  执行计划的名字
    * description  执行计划的描述，此描述为用户在生成时指定
    * createTime  执行计划的生成时间
    * applyTime  执行时间
    * status  执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行     * `CREATION_IN_PROGRESS` - 正在生成     * `CREATION_FAILED` - 生成失败     * `AVAILABLE` - 执行计划已经生成完成。可以使用apply进行执行     * `APPLIED` - 执行完成
    * statusMessage  展示执行计划状态更多细节的信息
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'stackId' => 'string',
            'stackName' => 'string',
            'executionPlanId' => 'string',
            'executionPlanName' => 'string',
            'description' => 'string',
            'createTime' => 'string',
            'applyTime' => 'string',
            'status' => 'string',
            'statusMessage' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * stackId  栈的唯一Id,为uuid
    * stackName  栈的名字
    * executionPlanId  执行计划的唯一Id，由IaC随机生成,为uuid
    * executionPlanName  执行计划的名字
    * description  执行计划的描述，此描述为用户在生成时指定
    * createTime  执行计划的生成时间
    * applyTime  执行时间
    * status  执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行     * `CREATION_IN_PROGRESS` - 正在生成     * `CREATION_FAILED` - 生成失败     * `AVAILABLE` - 执行计划已经生成完成。可以使用apply进行执行     * `APPLIED` - 执行完成
    * statusMessage  展示执行计划状态更多细节的信息
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'stackId' => null,
        'stackName' => null,
        'executionPlanId' => null,
        'executionPlanName' => null,
        'description' => null,
        'createTime' => null,
        'applyTime' => null,
        'status' => null,
        'statusMessage' => null
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
    * stackId  栈的唯一Id,为uuid
    * stackName  栈的名字
    * executionPlanId  执行计划的唯一Id，由IaC随机生成,为uuid
    * executionPlanName  执行计划的名字
    * description  执行计划的描述，此描述为用户在生成时指定
    * createTime  执行计划的生成时间
    * applyTime  执行时间
    * status  执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行     * `CREATION_IN_PROGRESS` - 正在生成     * `CREATION_FAILED` - 生成失败     * `AVAILABLE` - 执行计划已经生成完成。可以使用apply进行执行     * `APPLIED` - 执行完成
    * statusMessage  展示执行计划状态更多细节的信息
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'stackId' => 'stack_id',
            'stackName' => 'stack_name',
            'executionPlanId' => 'execution_plan_id',
            'executionPlanName' => 'execution_plan_name',
            'description' => 'description',
            'createTime' => 'create_time',
            'applyTime' => 'apply_time',
            'status' => 'status',
            'statusMessage' => 'status_message'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * stackId  栈的唯一Id,为uuid
    * stackName  栈的名字
    * executionPlanId  执行计划的唯一Id，由IaC随机生成,为uuid
    * executionPlanName  执行计划的名字
    * description  执行计划的描述，此描述为用户在生成时指定
    * createTime  执行计划的生成时间
    * applyTime  执行时间
    * status  执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行     * `CREATION_IN_PROGRESS` - 正在生成     * `CREATION_FAILED` - 生成失败     * `AVAILABLE` - 执行计划已经生成完成。可以使用apply进行执行     * `APPLIED` - 执行完成
    * statusMessage  展示执行计划状态更多细节的信息
    *
    * @var string[]
    */
    protected static $setters = [
            'stackId' => 'setStackId',
            'stackName' => 'setStackName',
            'executionPlanId' => 'setExecutionPlanId',
            'executionPlanName' => 'setExecutionPlanName',
            'description' => 'setDescription',
            'createTime' => 'setCreateTime',
            'applyTime' => 'setApplyTime',
            'status' => 'setStatus',
            'statusMessage' => 'setStatusMessage'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * stackId  栈的唯一Id,为uuid
    * stackName  栈的名字
    * executionPlanId  执行计划的唯一Id，由IaC随机生成,为uuid
    * executionPlanName  执行计划的名字
    * description  执行计划的描述，此描述为用户在生成时指定
    * createTime  执行计划的生成时间
    * applyTime  执行时间
    * status  执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行     * `CREATION_IN_PROGRESS` - 正在生成     * `CREATION_FAILED` - 生成失败     * `AVAILABLE` - 执行计划已经生成完成。可以使用apply进行执行     * `APPLIED` - 执行完成
    * statusMessage  展示执行计划状态更多细节的信息
    *
    * @var string[]
    */
    protected static $getters = [
            'stackId' => 'getStackId',
            'stackName' => 'getStackName',
            'executionPlanId' => 'getExecutionPlanId',
            'executionPlanName' => 'getExecutionPlanName',
            'description' => 'getDescription',
            'createTime' => 'getCreateTime',
            'applyTime' => 'getApplyTime',
            'status' => 'getStatus',
            'statusMessage' => 'getStatusMessage'
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
    const STATUS_CREATION_IN_PROGRESS = 'CREATION_IN_PROGRESS';
    const STATUS_CREATION_FAILED = 'CREATION_FAILED';
    const STATUS_AVAILABLE = 'AVAILABLE';
    const STATUS_APPLIED = 'APPLIED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_CREATION_IN_PROGRESS,
            self::STATUS_CREATION_FAILED,
            self::STATUS_AVAILABLE,
            self::STATUS_APPLIED,
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
        $this->container['stackId'] = isset($data['stackId']) ? $data['stackId'] : null;
        $this->container['stackName'] = isset($data['stackName']) ? $data['stackName'] : null;
        $this->container['executionPlanId'] = isset($data['executionPlanId']) ? $data['executionPlanId'] : null;
        $this->container['executionPlanName'] = isset($data['executionPlanName']) ? $data['executionPlanName'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['applyTime'] = isset($data['applyTime']) ? $data['applyTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusMessage'] = isset($data['statusMessage']) ? $data['statusMessage'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets stackId
    *  栈的唯一Id,为uuid
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
    * @param string|null $stackId 栈的唯一Id,为uuid
    *
    * @return $this
    */
    public function setStackId($stackId)
    {
        $this->container['stackId'] = $stackId;
        return $this;
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
    * Gets executionPlanId
    *  执行计划的唯一Id，由IaC随机生成,为uuid
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
    * @param string|null $executionPlanId 执行计划的唯一Id，由IaC随机生成,为uuid
    *
    * @return $this
    */
    public function setExecutionPlanId($executionPlanId)
    {
        $this->container['executionPlanId'] = $executionPlanId;
        return $this;
    }

    /**
    * Gets executionPlanName
    *  执行计划的名字
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
    * @param string|null $executionPlanName 执行计划的名字
    *
    * @return $this
    */
    public function setExecutionPlanName($executionPlanName)
    {
        $this->container['executionPlanName'] = $executionPlanName;
        return $this;
    }

    /**
    * Gets description
    *  执行计划的描述，此描述为用户在生成时指定
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 执行计划的描述，此描述为用户在生成时指定
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets createTime
    *  执行计划的生成时间
    *
    * @return string|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param string|null $createTime 执行计划的生成时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets applyTime
    *  执行时间
    *
    * @return string|null
    */
    public function getApplyTime()
    {
        return $this->container['applyTime'];
    }

    /**
    * Sets applyTime
    *
    * @param string|null $applyTime 执行时间
    *
    * @return $this
    */
    public function setApplyTime($applyTime)
    {
        $this->container['applyTime'] = $applyTime;
        return $this;
    }

    /**
    * Gets status
    *  执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行     * `CREATION_IN_PROGRESS` - 正在生成     * `CREATION_FAILED` - 生成失败     * `AVAILABLE` - 执行计划已经生成完成。可以使用apply进行执行     * `APPLIED` - 执行完成
    *
    * @return string|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string|null $status 执行计划的执行状态，只有当AVAILABLE的时候才可以使用apply执行     * `CREATION_IN_PROGRESS` - 正在生成     * `CREATION_FAILED` - 生成失败     * `AVAILABLE` - 执行计划已经生成完成。可以使用apply进行执行     * `APPLIED` - 执行完成
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusMessage
    *  展示执行计划状态更多细节的信息
    *
    * @return string|null
    */
    public function getStatusMessage()
    {
        return $this->container['statusMessage'];
    }

    /**
    * Sets statusMessage
    *
    * @param string|null $statusMessage 展示执行计划状态更多细节的信息
    *
    * @return $this
    */
    public function setStatusMessage($statusMessage)
    {
        $this->container['statusMessage'] = $statusMessage;
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

