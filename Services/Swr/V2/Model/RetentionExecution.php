<?php

namespace HuaweiCloud\SDK\Swr\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class RetentionExecution implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'RetentionExecution';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  老化策略执行记录ID
    * policyId  老化策略ID
    * dryRun  是否模拟运行
    * status  执行状态，InProgress Succeed Failed Stopped
    * trigger  触发类型，scheduled manual
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'int',
            'policyId' => 'int',
            'dryRun' => 'bool',
            'status' => 'string',
            'trigger' => 'string',
            'startTime' => 'string',
            'endTime' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  老化策略执行记录ID
    * policyId  老化策略ID
    * dryRun  是否模拟运行
    * status  执行状态，InProgress Succeed Failed Stopped
    * trigger  触发类型，scheduled manual
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'policyId' => null,
        'dryRun' => null,
        'status' => null,
        'trigger' => null,
        'startTime' => null,
        'endTime' => null
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
    * id  老化策略执行记录ID
    * policyId  老化策略ID
    * dryRun  是否模拟运行
    * status  执行状态，InProgress Succeed Failed Stopped
    * trigger  触发类型，scheduled manual
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'policyId' => 'policy_id',
            'dryRun' => 'dry_run',
            'status' => 'status',
            'trigger' => 'trigger',
            'startTime' => 'start_time',
            'endTime' => 'end_time'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  老化策略执行记录ID
    * policyId  老化策略ID
    * dryRun  是否模拟运行
    * status  执行状态，InProgress Succeed Failed Stopped
    * trigger  触发类型，scheduled manual
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'policyId' => 'setPolicyId',
            'dryRun' => 'setDryRun',
            'status' => 'setStatus',
            'trigger' => 'setTrigger',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  老化策略执行记录ID
    * policyId  老化策略ID
    * dryRun  是否模拟运行
    * status  执行状态，InProgress Succeed Failed Stopped
    * trigger  触发类型，scheduled manual
    * startTime  开始时间
    * endTime  结束时间
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'policyId' => 'getPolicyId',
            'dryRun' => 'getDryRun',
            'status' => 'getStatus',
            'trigger' => 'getTrigger',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime'
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
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['dryRun'] = isset($data['dryRun']) ? $data['dryRun'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['trigger'] = isset($data['trigger']) ? $data['trigger'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['policyId'] === null) {
            $invalidProperties[] = "'policyId' can't be null";
        }
        if ($this->container['dryRun'] === null) {
            $invalidProperties[] = "'dryRun' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        if ($this->container['trigger'] === null) {
            $invalidProperties[] = "'trigger' can't be null";
        }
        if ($this->container['startTime'] === null) {
            $invalidProperties[] = "'startTime' can't be null";
        }
        if ($this->container['endTime'] === null) {
            $invalidProperties[] = "'endTime' can't be null";
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
    *  老化策略执行记录ID
    *
    * @return int
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param int $id 老化策略执行记录ID
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets policyId
    *  老化策略ID
    *
    * @return int
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param int $policyId 老化策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets dryRun
    *  是否模拟运行
    *
    * @return bool
    */
    public function getDryRun()
    {
        return $this->container['dryRun'];
    }

    /**
    * Sets dryRun
    *
    * @param bool $dryRun 是否模拟运行
    *
    * @return $this
    */
    public function setDryRun($dryRun)
    {
        $this->container['dryRun'] = $dryRun;
        return $this;
    }

    /**
    * Gets status
    *  执行状态，InProgress Succeed Failed Stopped
    *
    * @return string
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param string $status 执行状态，InProgress Succeed Failed Stopped
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets trigger
    *  触发类型，scheduled manual
    *
    * @return string
    */
    public function getTrigger()
    {
        return $this->container['trigger'];
    }

    /**
    * Sets trigger
    *
    * @param string $trigger 触发类型，scheduled manual
    *
    * @return $this
    */
    public function setTrigger($trigger)
    {
        $this->container['trigger'] = $trigger;
        return $this;
    }

    /**
    * Gets startTime
    *  开始时间
    *
    * @return string
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string $startTime 开始时间
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
    *  结束时间
    *
    * @return string
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string $endTime 结束时间
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
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

