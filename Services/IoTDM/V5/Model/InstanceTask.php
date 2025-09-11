<?php

namespace HuaweiCloud\SDK\IoTDM\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InstanceTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InstanceTask';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * taskId  **参数说明**：实任务ID。
    * type  **参数说明**：实例任务类型。 **取值范围**： - CREATE：创建实例任务 - MODIFY：实例规格变更任务 - DELETE：实例删除任务 - FREEZE：实例冻结任务 - UNFREEZE：实例解冻任务 - UPDATE_ACCESS_CONFIG：修改实例接入信息任务 - UPDATE_ALLOW_LISTS： 修改实例接入白名单任务 - OPEN_SNAT：启用实例SNAT配置任务
    * status  **参数说明**：任务状态。 **取值范围**： - PENDING：等待执行 - RUNNING：执行中 - SUCCESS：执行成功 - FAILED：执行失败
    * statusDetail  **参数说明**：任务状态描述。
    * createTime  **参数说明**：实例任务的创建时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * startTime  **参数说明**：实例任务的开始时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * endTime  **参数说明**：实例任务的结束时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * targetConfig  targetConfig
    * operateWindow  operateWindow
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'taskId' => 'string',
            'type' => 'string',
            'status' => 'string',
            'statusDetail' => 'string',
            'createTime' => 'string',
            'startTime' => 'string',
            'endTime' => 'string',
            'targetConfig' => '\HuaweiCloud\SDK\IoTDM\V5\Model\TargetConfig',
            'operateWindow' => '\HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * taskId  **参数说明**：实任务ID。
    * type  **参数说明**：实例任务类型。 **取值范围**： - CREATE：创建实例任务 - MODIFY：实例规格变更任务 - DELETE：实例删除任务 - FREEZE：实例冻结任务 - UNFREEZE：实例解冻任务 - UPDATE_ACCESS_CONFIG：修改实例接入信息任务 - UPDATE_ALLOW_LISTS： 修改实例接入白名单任务 - OPEN_SNAT：启用实例SNAT配置任务
    * status  **参数说明**：任务状态。 **取值范围**： - PENDING：等待执行 - RUNNING：执行中 - SUCCESS：执行成功 - FAILED：执行失败
    * statusDetail  **参数说明**：任务状态描述。
    * createTime  **参数说明**：实例任务的创建时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * startTime  **参数说明**：实例任务的开始时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * endTime  **参数说明**：实例任务的结束时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * targetConfig  targetConfig
    * operateWindow  operateWindow
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'taskId' => null,
        'type' => null,
        'status' => null,
        'statusDetail' => null,
        'createTime' => null,
        'startTime' => null,
        'endTime' => null,
        'targetConfig' => null,
        'operateWindow' => null
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
    * taskId  **参数说明**：实任务ID。
    * type  **参数说明**：实例任务类型。 **取值范围**： - CREATE：创建实例任务 - MODIFY：实例规格变更任务 - DELETE：实例删除任务 - FREEZE：实例冻结任务 - UNFREEZE：实例解冻任务 - UPDATE_ACCESS_CONFIG：修改实例接入信息任务 - UPDATE_ALLOW_LISTS： 修改实例接入白名单任务 - OPEN_SNAT：启用实例SNAT配置任务
    * status  **参数说明**：任务状态。 **取值范围**： - PENDING：等待执行 - RUNNING：执行中 - SUCCESS：执行成功 - FAILED：执行失败
    * statusDetail  **参数说明**：任务状态描述。
    * createTime  **参数说明**：实例任务的创建时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * startTime  **参数说明**：实例任务的开始时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * endTime  **参数说明**：实例任务的结束时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * targetConfig  targetConfig
    * operateWindow  operateWindow
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'taskId' => 'task_id',
            'type' => 'type',
            'status' => 'status',
            'statusDetail' => 'status_detail',
            'createTime' => 'create_time',
            'startTime' => 'start_time',
            'endTime' => 'end_time',
            'targetConfig' => 'target_config',
            'operateWindow' => 'operate_window'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * taskId  **参数说明**：实任务ID。
    * type  **参数说明**：实例任务类型。 **取值范围**： - CREATE：创建实例任务 - MODIFY：实例规格变更任务 - DELETE：实例删除任务 - FREEZE：实例冻结任务 - UNFREEZE：实例解冻任务 - UPDATE_ACCESS_CONFIG：修改实例接入信息任务 - UPDATE_ALLOW_LISTS： 修改实例接入白名单任务 - OPEN_SNAT：启用实例SNAT配置任务
    * status  **参数说明**：任务状态。 **取值范围**： - PENDING：等待执行 - RUNNING：执行中 - SUCCESS：执行成功 - FAILED：执行失败
    * statusDetail  **参数说明**：任务状态描述。
    * createTime  **参数说明**：实例任务的创建时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * startTime  **参数说明**：实例任务的开始时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * endTime  **参数说明**：实例任务的结束时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * targetConfig  targetConfig
    * operateWindow  operateWindow
    *
    * @var string[]
    */
    protected static $setters = [
            'taskId' => 'setTaskId',
            'type' => 'setType',
            'status' => 'setStatus',
            'statusDetail' => 'setStatusDetail',
            'createTime' => 'setCreateTime',
            'startTime' => 'setStartTime',
            'endTime' => 'setEndTime',
            'targetConfig' => 'setTargetConfig',
            'operateWindow' => 'setOperateWindow'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * taskId  **参数说明**：实任务ID。
    * type  **参数说明**：实例任务类型。 **取值范围**： - CREATE：创建实例任务 - MODIFY：实例规格变更任务 - DELETE：实例删除任务 - FREEZE：实例冻结任务 - UNFREEZE：实例解冻任务 - UPDATE_ACCESS_CONFIG：修改实例接入信息任务 - UPDATE_ALLOW_LISTS： 修改实例接入白名单任务 - OPEN_SNAT：启用实例SNAT配置任务
    * status  **参数说明**：任务状态。 **取值范围**： - PENDING：等待执行 - RUNNING：执行中 - SUCCESS：执行成功 - FAILED：执行失败
    * statusDetail  **参数说明**：任务状态描述。
    * createTime  **参数说明**：实例任务的创建时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * startTime  **参数说明**：实例任务的开始时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * endTime  **参数说明**：实例任务的结束时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    * targetConfig  targetConfig
    * operateWindow  operateWindow
    *
    * @var string[]
    */
    protected static $getters = [
            'taskId' => 'getTaskId',
            'type' => 'getType',
            'status' => 'getStatus',
            'statusDetail' => 'getStatusDetail',
            'createTime' => 'getCreateTime',
            'startTime' => 'getStartTime',
            'endTime' => 'getEndTime',
            'targetConfig' => 'getTargetConfig',
            'operateWindow' => 'getOperateWindow'
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
        $this->container['taskId'] = isset($data['taskId']) ? $data['taskId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['statusDetail'] = isset($data['statusDetail']) ? $data['statusDetail'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['targetConfig'] = isset($data['targetConfig']) ? $data['targetConfig'] : null;
        $this->container['operateWindow'] = isset($data['operateWindow']) ? $data['operateWindow'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['taskId']) && !preg_match("/[0-9a-f-]{1,64}/", $this->container['taskId'])) {
                $invalidProperties[] = "invalid value for 'taskId', must be conform to the pattern /[0-9a-f-]{1,64}/.";
            }
            if (!is_null($this->container['type']) && !preg_match("/(CREATE|MODIFY|DELETE|FREEZE|UNFREEZE|UPDATE_ACCESS_CONFIG|UPDATE_ALLOW_LISTS|OPEN_SNAT)/", $this->container['type'])) {
                $invalidProperties[] = "invalid value for 'type', must be conform to the pattern /(CREATE|MODIFY|DELETE|FREEZE|UNFREEZE|UPDATE_ACCESS_CONFIG|UPDATE_ALLOW_LISTS|OPEN_SNAT)/.";
            }
            if (!is_null($this->container['status']) && !preg_match("/(PENDING|RUNNING|SUCCESS|FAILED)/", $this->container['status'])) {
                $invalidProperties[] = "invalid value for 'status', must be conform to the pattern /(PENDING|RUNNING|SUCCESS|FAILED)/.";
            }
            if (!is_null($this->container['statusDetail']) && (mb_strlen($this->container['statusDetail']) > 1028)) {
                $invalidProperties[] = "invalid value for 'statusDetail', the character length must be smaller than or equal to 1028.";
            }
            if (!is_null($this->container['statusDetail']) && (mb_strlen($this->container['statusDetail']) < 0)) {
                $invalidProperties[] = "invalid value for 'statusDetail', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) > 24)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['createTime']) && (mb_strlen($this->container['createTime']) < 24)) {
                $invalidProperties[] = "invalid value for 'createTime', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) > 24)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['startTime']) && (mb_strlen($this->container['startTime']) < 24)) {
                $invalidProperties[] = "invalid value for 'startTime', the character length must be bigger than or equal to 24.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) > 24)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be smaller than or equal to 24.";
            }
            if (!is_null($this->container['endTime']) && (mb_strlen($this->container['endTime']) < 24)) {
                $invalidProperties[] = "invalid value for 'endTime', the character length must be bigger than or equal to 24.";
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
    * Gets taskId
    *  **参数说明**：实任务ID。
    *
    * @return string|null
    */
    public function getTaskId()
    {
        return $this->container['taskId'];
    }

    /**
    * Sets taskId
    *
    * @param string|null $taskId **参数说明**：实任务ID。
    *
    * @return $this
    */
    public function setTaskId($taskId)
    {
        $this->container['taskId'] = $taskId;
        return $this;
    }

    /**
    * Gets type
    *  **参数说明**：实例任务类型。 **取值范围**： - CREATE：创建实例任务 - MODIFY：实例规格变更任务 - DELETE：实例删除任务 - FREEZE：实例冻结任务 - UNFREEZE：实例解冻任务 - UPDATE_ACCESS_CONFIG：修改实例接入信息任务 - UPDATE_ALLOW_LISTS： 修改实例接入白名单任务 - OPEN_SNAT：启用实例SNAT配置任务
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type **参数说明**：实例任务类型。 **取值范围**： - CREATE：创建实例任务 - MODIFY：实例规格变更任务 - DELETE：实例删除任务 - FREEZE：实例冻结任务 - UNFREEZE：实例解冻任务 - UPDATE_ACCESS_CONFIG：修改实例接入信息任务 - UPDATE_ALLOW_LISTS： 修改实例接入白名单任务 - OPEN_SNAT：启用实例SNAT配置任务
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets status
    *  **参数说明**：任务状态。 **取值范围**： - PENDING：等待执行 - RUNNING：执行中 - SUCCESS：执行成功 - FAILED：执行失败
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
    * @param string|null $status **参数说明**：任务状态。 **取值范围**： - PENDING：等待执行 - RUNNING：执行中 - SUCCESS：执行成功 - FAILED：执行失败
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets statusDetail
    *  **参数说明**：任务状态描述。
    *
    * @return string|null
    */
    public function getStatusDetail()
    {
        return $this->container['statusDetail'];
    }

    /**
    * Sets statusDetail
    *
    * @param string|null $statusDetail **参数说明**：任务状态描述。
    *
    * @return $this
    */
    public function setStatusDetail($statusDetail)
    {
        $this->container['statusDetail'] = $statusDetail;
        return $this;
    }

    /**
    * Gets createTime
    *  **参数说明**：实例任务的创建时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
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
    * @param string|null $createTime **参数说明**：实例任务的创建时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets startTime
    *  **参数说明**：实例任务的开始时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    *
    * @return string|null
    */
    public function getStartTime()
    {
        return $this->container['startTime'];
    }

    /**
    * Sets startTime
    *
    * @param string|null $startTime **参数说明**：实例任务的开始时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
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
    *  **参数说明**：实例任务的结束时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    *
    * @return string|null
    */
    public function getEndTime()
    {
        return $this->container['endTime'];
    }

    /**
    * Sets endTime
    *
    * @param string|null $endTime **参数说明**：实例任务的结束时间。格式为：\"yyyy-MM-dd'T'HH:mm:ss.SSS'Z'\"
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets targetConfig
    *  targetConfig
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\TargetConfig|null
    */
    public function getTargetConfig()
    {
        return $this->container['targetConfig'];
    }

    /**
    * Sets targetConfig
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\TargetConfig|null $targetConfig targetConfig
    *
    * @return $this
    */
    public function setTargetConfig($targetConfig)
    {
        $this->container['targetConfig'] = $targetConfig;
        return $this;
    }

    /**
    * Gets operateWindow
    *  operateWindow
    *
    * @return \HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow|null
    */
    public function getOperateWindow()
    {
        return $this->container['operateWindow'];
    }

    /**
    * Sets operateWindow
    *
    * @param \HuaweiCloud\SDK\IoTDM\V5\Model\OperateWindow|null $operateWindow operateWindow
    *
    * @return $this
    */
    public function setOperateWindow($operateWindow)
    {
        $this->container['operateWindow'] = $operateWindow;
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

