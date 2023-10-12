<?php

namespace HuaweiCloud\SDK\Css\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListAiOpsRequestBodyAiopsList implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListAiOpsRequestBody_aiops_list';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  检测任务id。
    * name  检测任务名称。
    * desc  检测任务描述。
    * status  任务执行状态。 - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * createTime  检测任务创建时间戳。
    * smnStatus  检测任务SMN告警任务发送状态。 - not_open：未开启。 - not_trigger：未触发。 - sent：已发送。 - send_fail： 发送失败。
    * smnFailReason  发送失败原因。
    * taskRisks  风险项详情。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'name' => 'string',
            'desc' => 'string',
            'status' => 'int',
            'summary' => '\HuaweiCloud\SDK\Css\V1\Model\ListAiOpsRequestBodySummary',
            'createTime' => 'string',
            'smnStatus' => 'string',
            'smnFailReason' => 'string',
            'taskRisks' => '\HuaweiCloud\SDK\Css\V1\Model\AIOpsRiskInfo[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  检测任务id。
    * name  检测任务名称。
    * desc  检测任务描述。
    * status  任务执行状态。 - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * createTime  检测任务创建时间戳。
    * smnStatus  检测任务SMN告警任务发送状态。 - not_open：未开启。 - not_trigger：未触发。 - sent：已发送。 - send_fail： 发送失败。
    * smnFailReason  发送失败原因。
    * taskRisks  风险项详情。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'name' => null,
        'desc' => null,
        'status' => null,
        'summary' => null,
        'createTime' => null,
        'smnStatus' => null,
        'smnFailReason' => null,
        'taskRisks' => null
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
    * id  检测任务id。
    * name  检测任务名称。
    * desc  检测任务描述。
    * status  任务执行状态。 - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * createTime  检测任务创建时间戳。
    * smnStatus  检测任务SMN告警任务发送状态。 - not_open：未开启。 - not_trigger：未触发。 - sent：已发送。 - send_fail： 发送失败。
    * smnFailReason  发送失败原因。
    * taskRisks  风险项详情。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'name' => 'name',
            'desc' => 'desc',
            'status' => 'status',
            'summary' => 'summary',
            'createTime' => 'create_time',
            'smnStatus' => 'smn_status',
            'smnFailReason' => 'smn_fail_reason',
            'taskRisks' => 'task_risks'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  检测任务id。
    * name  检测任务名称。
    * desc  检测任务描述。
    * status  任务执行状态。 - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * createTime  检测任务创建时间戳。
    * smnStatus  检测任务SMN告警任务发送状态。 - not_open：未开启。 - not_trigger：未触发。 - sent：已发送。 - send_fail： 发送失败。
    * smnFailReason  发送失败原因。
    * taskRisks  风险项详情。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'name' => 'setName',
            'desc' => 'setDesc',
            'status' => 'setStatus',
            'summary' => 'setSummary',
            'createTime' => 'setCreateTime',
            'smnStatus' => 'setSmnStatus',
            'smnFailReason' => 'setSmnFailReason',
            'taskRisks' => 'setTaskRisks'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  检测任务id。
    * name  检测任务名称。
    * desc  检测任务描述。
    * status  任务执行状态。 - 150：未开启。 - 200：已开启。 - 300：已发送。
    * summary  summary
    * createTime  检测任务创建时间戳。
    * smnStatus  检测任务SMN告警任务发送状态。 - not_open：未开启。 - not_trigger：未触发。 - sent：已发送。 - send_fail： 发送失败。
    * smnFailReason  发送失败原因。
    * taskRisks  风险项详情。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'name' => 'getName',
            'desc' => 'getDesc',
            'status' => 'getStatus',
            'summary' => 'getSummary',
            'createTime' => 'getCreateTime',
            'smnStatus' => 'getSmnStatus',
            'smnFailReason' => 'getSmnFailReason',
            'taskRisks' => 'getTaskRisks'
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['desc'] = isset($data['desc']) ? $data['desc'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['summary'] = isset($data['summary']) ? $data['summary'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['smnStatus'] = isset($data['smnStatus']) ? $data['smnStatus'] : null;
        $this->container['smnFailReason'] = isset($data['smnFailReason']) ? $data['smnFailReason'] : null;
        $this->container['taskRisks'] = isset($data['taskRisks']) ? $data['taskRisks'] : null;
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
    * Gets id
    *  检测任务id。
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
    * @param string|null $id 检测任务id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  检测任务名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 检测任务名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets desc
    *  检测任务描述。
    *
    * @return string|null
    */
    public function getDesc()
    {
        return $this->container['desc'];
    }

    /**
    * Sets desc
    *
    * @param string|null $desc 检测任务描述。
    *
    * @return $this
    */
    public function setDesc($desc)
    {
        $this->container['desc'] = $desc;
        return $this;
    }

    /**
    * Gets status
    *  任务执行状态。 - 150：未开启。 - 200：已开启。 - 300：已发送。
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 任务执行状态。 - 150：未开启。 - 200：已开启。 - 300：已发送。
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets summary
    *  summary
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\ListAiOpsRequestBodySummary|null
    */
    public function getSummary()
    {
        return $this->container['summary'];
    }

    /**
    * Sets summary
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\ListAiOpsRequestBodySummary|null $summary summary
    *
    * @return $this
    */
    public function setSummary($summary)
    {
        $this->container['summary'] = $summary;
        return $this;
    }

    /**
    * Gets createTime
    *  检测任务创建时间戳。
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
    * @param string|null $createTime 检测任务创建时间戳。
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets smnStatus
    *  检测任务SMN告警任务发送状态。 - not_open：未开启。 - not_trigger：未触发。 - sent：已发送。 - send_fail： 发送失败。
    *
    * @return string|null
    */
    public function getSmnStatus()
    {
        return $this->container['smnStatus'];
    }

    /**
    * Sets smnStatus
    *
    * @param string|null $smnStatus 检测任务SMN告警任务发送状态。 - not_open：未开启。 - not_trigger：未触发。 - sent：已发送。 - send_fail： 发送失败。
    *
    * @return $this
    */
    public function setSmnStatus($smnStatus)
    {
        $this->container['smnStatus'] = $smnStatus;
        return $this;
    }

    /**
    * Gets smnFailReason
    *  发送失败原因。
    *
    * @return string|null
    */
    public function getSmnFailReason()
    {
        return $this->container['smnFailReason'];
    }

    /**
    * Sets smnFailReason
    *
    * @param string|null $smnFailReason 发送失败原因。
    *
    * @return $this
    */
    public function setSmnFailReason($smnFailReason)
    {
        $this->container['smnFailReason'] = $smnFailReason;
        return $this;
    }

    /**
    * Gets taskRisks
    *  风险项详情。
    *
    * @return \HuaweiCloud\SDK\Css\V1\Model\AIOpsRiskInfo[]|null
    */
    public function getTaskRisks()
    {
        return $this->container['taskRisks'];
    }

    /**
    * Sets taskRisks
    *
    * @param \HuaweiCloud\SDK\Css\V1\Model\AIOpsRiskInfo[]|null $taskRisks 风险项详情。
    *
    * @return $this
    */
    public function setTaskRisks($taskRisks)
    {
        $this->container['taskRisks'] = $taskRisks;
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

