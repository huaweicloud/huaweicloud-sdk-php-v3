<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class VulHandleTaskResponseInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'VulHandleTaskResponseInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-64位
    * handleType  **参数解释**: 处置任务类型 **取值范围**: - immediate_repair：立即修复。 - verify：验证。
    * status  **参数解释**: 任务状态 **取值范围**: - running：执行中。 - finished：已完成。
    * startTime  **参数解释**: 任务开始时间 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间 **取值范围**: 最小值0，最大值9223372036854775807
    * vulTypes  **参数解释**: 任务涉及的漏洞类型列表 **取值范围**: 最小值0，最大值100
    * readyNum  **参数解释**: 等待执行的数量 **取值范围**: 最小值0，最大值2147483647
    * runningNum  **参数解释**: 执行中的数量 **取值范围**: 最小值0，最大值2147483647
    * successNum  **参数解释**: 执行成功的数量 **取值范围**: 最小值0，最大值2147483647
    * failedNum  **参数解释**: 执行失败的数量 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间 **取值范围**: 最小值0，最大值604800
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'handleType' => 'string',
            'status' => 'string',
            'startTime' => 'int',
            'endTime' => 'int',
            'vulTypes' => 'string[]',
            'readyNum' => 'int',
            'runningNum' => 'int',
            'successNum' => 'int',
            'failedNum' => 'int',
            'estimatedTime' => 'float'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-64位
    * handleType  **参数解释**: 处置任务类型 **取值范围**: - immediate_repair：立即修复。 - verify：验证。
    * status  **参数解释**: 任务状态 **取值范围**: - running：执行中。 - finished：已完成。
    * startTime  **参数解释**: 任务开始时间 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间 **取值范围**: 最小值0，最大值9223372036854775807
    * vulTypes  **参数解释**: 任务涉及的漏洞类型列表 **取值范围**: 最小值0，最大值100
    * readyNum  **参数解释**: 等待执行的数量 **取值范围**: 最小值0，最大值2147483647
    * runningNum  **参数解释**: 执行中的数量 **取值范围**: 最小值0，最大值2147483647
    * successNum  **参数解释**: 执行成功的数量 **取值范围**: 最小值0，最大值2147483647
    * failedNum  **参数解释**: 执行失败的数量 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间 **取值范围**: 最小值0，最大值604800
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'handleType' => null,
        'status' => null,
        'startTime' => 'int64',
        'endTime' => 'int64',
        'vulTypes' => null,
        'readyNum' => 'int32',
        'runningNum' => 'int32',
        'successNum' => 'int32',
        'failedNum' => 'int32',
        'estimatedTime' => 'float'
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
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-64位
    * handleType  **参数解释**: 处置任务类型 **取值范围**: - immediate_repair：立即修复。 - verify：验证。
    * status  **参数解释**: 任务状态 **取值范围**: - running：执行中。 - finished：已完成。
    * startTime  **参数解释**: 任务开始时间 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间 **取值范围**: 最小值0，最大值9223372036854775807
    * vulTypes  **参数解释**: 任务涉及的漏洞类型列表 **取值范围**: 最小值0，最大值100
    * readyNum  **参数解释**: 等待执行的数量 **取值范围**: 最小值0，最大值2147483647
    * runningNum  **参数解释**: 执行中的数量 **取值范围**: 最小值0，最大值2147483647
    * successNum  **参数解释**: 执行成功的数量 **取值范围**: 最小值0，最大值2147483647
    * failedNum  **参数解释**: 执行失败的数量 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间 **取值范围**: 最小值0，最大值604800
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'handleType' => 'handle_type',
            'status' => 'status',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'vulTypes' => 'vul_types',
            'readyNum' => 'ready_num',
            'runningNum' => 'running_num',
            'successNum' => 'success_num',
            'failedNum' => 'failed_num',
            'estimatedTime' => 'estimated_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-64位
    * handleType  **参数解释**: 处置任务类型 **取值范围**: - immediate_repair：立即修复。 - verify：验证。
    * status  **参数解释**: 任务状态 **取值范围**: - running：执行中。 - finished：已完成。
    * startTime  **参数解释**: 任务开始时间 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间 **取值范围**: 最小值0，最大值9223372036854775807
    * vulTypes  **参数解释**: 任务涉及的漏洞类型列表 **取值范围**: 最小值0，最大值100
    * readyNum  **参数解释**: 等待执行的数量 **取值范围**: 最小值0，最大值2147483647
    * runningNum  **参数解释**: 执行中的数量 **取值范围**: 最小值0，最大值2147483647
    * successNum  **参数解释**: 执行成功的数量 **取值范围**: 最小值0，最大值2147483647
    * failedNum  **参数解释**: 执行失败的数量 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间 **取值范围**: 最小值0，最大值604800
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'handleType' => 'setHandleType',
            'status' => 'setStatus',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'vulTypes' => 'setVulTypes',
            'readyNum' => 'setReadyNum',
            'runningNum' => 'setRunningNum',
            'successNum' => 'setSuccessNum',
            'failedNum' => 'setFailedNum',
            'estimatedTime' => 'setEstimatedTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  **参数解释**: 任务ID **取值范围**: 字符长度1-64位
    * handleType  **参数解释**: 处置任务类型 **取值范围**: - immediate_repair：立即修复。 - verify：验证。
    * status  **参数解释**: 任务状态 **取值范围**: - running：执行中。 - finished：已完成。
    * startTime  **参数解释**: 任务开始时间 **取值范围**: 最小值0，最大值9223372036854775807
    * endTime  **参数解释**: 任务结束时间 **取值范围**: 最小值0，最大值9223372036854775807
    * vulTypes  **参数解释**: 任务涉及的漏洞类型列表 **取值范围**: 最小值0，最大值100
    * readyNum  **参数解释**: 等待执行的数量 **取值范围**: 最小值0，最大值2147483647
    * runningNum  **参数解释**: 执行中的数量 **取值范围**: 最小值0，最大值2147483647
    * successNum  **参数解释**: 执行成功的数量 **取值范围**: 最小值0，最大值2147483647
    * failedNum  **参数解释**: 执行失败的数量 **取值范围**: 最小值0，最大值2147483647
    * estimatedTime  **参数解释**: 预计还需要多长时间 **取值范围**: 最小值0，最大值604800
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'handleType' => 'getHandleType',
            'status' => 'getStatus',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'vulTypes' => 'getVulTypes',
            'readyNum' => 'getReadyNum',
            'runningNum' => 'getRunningNum',
            'successNum' => 'getSuccessNum',
            'failedNum' => 'getFailedNum',
            'estimatedTime' => 'getEstimatedTime'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['handleType'] = isset($data['handleType']) ? $data['handleType'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['vulTypes'] = isset($data['vulTypes']) ? $data['vulTypes'] : null;
        $this->container['readyNum'] = isset($data['readyNum']) ? $data['readyNum'] : null;
        $this->container['runningNum'] = isset($data['runningNum']) ? $data['runningNum'] : null;
        $this->container['successNum'] = isset($data['successNum']) ? $data['successNum'] : null;
        $this->container['failedNum'] = isset($data['failedNum']) ? $data['failedNum'] : null;
        $this->container['estimatedTime'] = isset($data['estimatedTime']) ? $data['estimatedTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) > 64)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['id']) && (mb_strlen($this->container['id']) < 1)) {
                $invalidProperties[] = "invalid value for 'id', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'startTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['startTime']) && ($this->container['startTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'startTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] > 9223372036854775807)) {
                $invalidProperties[] = "invalid value for 'endTime', must be smaller than or equal to 9223372036854775807.";
            }
            if (!is_null($this->container['endTime']) && ($this->container['endTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'endTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['readyNum']) && ($this->container['readyNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'readyNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['readyNum']) && ($this->container['readyNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'readyNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['runningNum']) && ($this->container['runningNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'runningNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['runningNum']) && ($this->container['runningNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'runningNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['successNum']) && ($this->container['successNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'successNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['successNum']) && ($this->container['successNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'successNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['failedNum']) && ($this->container['failedNum'] < 0)) {
                $invalidProperties[] = "invalid value for 'failedNum', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['estimatedTime']) && ($this->container['estimatedTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'estimatedTime', must be bigger than or equal to 0.";
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
    * Gets id
    *  **参数解释**: 任务ID **取值范围**: 字符长度1-64位
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id **参数解释**: 任务ID **取值范围**: 字符长度1-64位
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets handleType
    *  **参数解释**: 处置任务类型 **取值范围**: - immediate_repair：立即修复。 - verify：验证。
    *
    * @return string|null
    */
    public function getHandleType()
    {
        return $this->container['handleType'];
    }

    /**
    * Sets handleType
    *
    * @param string|null $handleType **参数解释**: 处置任务类型 **取值范围**: - immediate_repair：立即修复。 - verify：验证。
    *
    * @return $this
    */
    public function setHandleType($handleType)
    {
        $this->container['handleType'] = $handleType;
        return $this;
    }

    /**
    * Gets status
    *  **参数解释**: 任务状态 **取值范围**: - running：执行中。 - finished：已完成。
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
    * @param string|null $status **参数解释**: 任务状态 **取值范围**: - running：执行中。 - finished：已完成。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数解释**: 任务开始时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param int|null $startTime **参数解释**: 任务开始时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets endTime
    *  **参数解释**: 任务结束时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return int|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param int|null $endTime **参数解释**: 任务结束时间 **取值范围**: 最小值0，最大值9223372036854775807
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets vulTypes
    *  **参数解释**: 任务涉及的漏洞类型列表 **取值范围**: 最小值0，最大值100
    *
    * @return string[]|null
    */
    public function getVulTypes()
    {
        return $this->container['vulTypes'];
    }

    /**
    * Sets vulTypes
    *
    * @param string[]|null $vulTypes **参数解释**: 任务涉及的漏洞类型列表 **取值范围**: 最小值0，最大值100
    *
    * @return $this
    */
    public function setVulTypes($vulTypes)
    {
        $this->container['vulTypes'] = $vulTypes;
        return $this;
    }

    /**
    * Gets readyNum
    *  **参数解释**: 等待执行的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getReadyNum()
    {
        return $this->container['readyNum'];
    }

    /**
    * Sets readyNum
    *
    * @param int|null $readyNum **参数解释**: 等待执行的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setReadyNum($readyNum)
    {
        $this->container['readyNum'] = $readyNum;
        return $this;
    }

    /**
    * Gets runningNum
    *  **参数解释**: 执行中的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getRunningNum()
    {
        return $this->container['runningNum'];
    }

    /**
    * Sets runningNum
    *
    * @param int|null $runningNum **参数解释**: 执行中的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setRunningNum($runningNum)
    {
        $this->container['runningNum'] = $runningNum;
        return $this;
    }

    /**
    * Gets successNum
    *  **参数解释**: 执行成功的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getSuccessNum()
    {
        return $this->container['successNum'];
    }

    /**
    * Sets successNum
    *
    * @param int|null $successNum **参数解释**: 执行成功的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setSuccessNum($successNum)
    {
        $this->container['successNum'] = $successNum;
        return $this;
    }

    /**
    * Gets failedNum
    *  **参数解释**: 执行失败的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return int|null
    */
    public function getFailedNum()
    {
        return $this->container['failedNum'];
    }

    /**
    * Sets failedNum
    *
    * @param int|null $failedNum **参数解释**: 执行失败的数量 **取值范围**: 最小值0，最大值2147483647
    *
    * @return $this
    */
    public function setFailedNum($failedNum)
    {
        $this->container['failedNum'] = $failedNum;
        return $this;
    }

    /**
    * Gets estimatedTime
    *  **参数解释**: 预计还需要多长时间 **取值范围**: 最小值0，最大值604800
    *
    * @return float|null
    */
    public function getEstimatedTime()
    {
        return $this->container['estimatedTime'];
    }

    /**
    * Sets estimatedTime
    *
    * @param float|null $estimatedTime **参数解释**: 预计还需要多长时间 **取值范围**: 最小值0，最大值604800
    *
    * @return $this
    */
    public function setEstimatedTime($estimatedTime)
    {
        $this->container['estimatedTime'] = $estimatedTime;
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

