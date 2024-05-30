<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class BatchOperationVO implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'BatchOperationVO';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  批量审批ID，填写String类型替代Long类型。
    * tenantId  项目ID。
    * groupId  组ID，填写String类型替代Long类型。
    * bizName  业务名。
    * bizId  业务ID，填写String类型替代Long类型。
    * operationStatus  操作结果类型枚举。RUNNING(运行中)、SUCCESS(操作成功)、FAILED(操作失败)。 枚举值：   - RUNNING: 运行中   - SUCCESS: 操作成功   - FAILED: 操作失败
    * operationType  类型。
    * bizInfo  业务详情。
    * createBy  创建人。
    * remark  remark信息。
    * total  总数。
    * success  操作成功个数。
    * failed  操作失败个数。
    * rate  当前进度。
    * logs  日志。
    * groups  分组信息。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'tenantId' => 'string',
            'groupId' => 'string',
            'bizName' => 'string',
            'bizId' => 'string',
            'operationStatus' => 'string',
            'operationType' => 'string',
            'bizInfo' => 'string',
            'createBy' => 'string',
            'remark' => 'string',
            'total' => 'int',
            'success' => 'int',
            'failed' => 'int',
            'rate' => 'string',
            'logs' => 'string',
            'groups' => '\HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOperationVO[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  批量审批ID，填写String类型替代Long类型。
    * tenantId  项目ID。
    * groupId  组ID，填写String类型替代Long类型。
    * bizName  业务名。
    * bizId  业务ID，填写String类型替代Long类型。
    * operationStatus  操作结果类型枚举。RUNNING(运行中)、SUCCESS(操作成功)、FAILED(操作失败)。 枚举值：   - RUNNING: 运行中   - SUCCESS: 操作成功   - FAILED: 操作失败
    * operationType  类型。
    * bizInfo  业务详情。
    * createBy  创建人。
    * remark  remark信息。
    * total  总数。
    * success  操作成功个数。
    * failed  操作失败个数。
    * rate  当前进度。
    * logs  日志。
    * groups  分组信息。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'tenantId' => null,
        'groupId' => null,
        'bizName' => null,
        'bizId' => null,
        'operationStatus' => null,
        'operationType' => null,
        'bizInfo' => null,
        'createBy' => null,
        'remark' => null,
        'total' => null,
        'success' => null,
        'failed' => null,
        'rate' => null,
        'logs' => null,
        'groups' => null
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
    * id  批量审批ID，填写String类型替代Long类型。
    * tenantId  项目ID。
    * groupId  组ID，填写String类型替代Long类型。
    * bizName  业务名。
    * bizId  业务ID，填写String类型替代Long类型。
    * operationStatus  操作结果类型枚举。RUNNING(运行中)、SUCCESS(操作成功)、FAILED(操作失败)。 枚举值：   - RUNNING: 运行中   - SUCCESS: 操作成功   - FAILED: 操作失败
    * operationType  类型。
    * bizInfo  业务详情。
    * createBy  创建人。
    * remark  remark信息。
    * total  总数。
    * success  操作成功个数。
    * failed  操作失败个数。
    * rate  当前进度。
    * logs  日志。
    * groups  分组信息。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'tenantId' => 'tenant_id',
            'groupId' => 'group_id',
            'bizName' => 'biz_name',
            'bizId' => 'biz_id',
            'operationStatus' => 'operation_status',
            'operationType' => 'operation_type',
            'bizInfo' => 'biz_info',
            'createBy' => 'create_by',
            'remark' => 'remark',
            'total' => 'total',
            'success' => 'success',
            'failed' => 'failed',
            'rate' => 'rate',
            'logs' => 'logs',
            'groups' => 'groups'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  批量审批ID，填写String类型替代Long类型。
    * tenantId  项目ID。
    * groupId  组ID，填写String类型替代Long类型。
    * bizName  业务名。
    * bizId  业务ID，填写String类型替代Long类型。
    * operationStatus  操作结果类型枚举。RUNNING(运行中)、SUCCESS(操作成功)、FAILED(操作失败)。 枚举值：   - RUNNING: 运行中   - SUCCESS: 操作成功   - FAILED: 操作失败
    * operationType  类型。
    * bizInfo  业务详情。
    * createBy  创建人。
    * remark  remark信息。
    * total  总数。
    * success  操作成功个数。
    * failed  操作失败个数。
    * rate  当前进度。
    * logs  日志。
    * groups  分组信息。
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'tenantId' => 'setTenantId',
            'groupId' => 'setGroupId',
            'bizName' => 'setBizName',
            'bizId' => 'setBizId',
            'operationStatus' => 'setOperationStatus',
            'operationType' => 'setOperationType',
            'bizInfo' => 'setBizInfo',
            'createBy' => 'setCreateBy',
            'remark' => 'setRemark',
            'total' => 'setTotal',
            'success' => 'setSuccess',
            'failed' => 'setFailed',
            'rate' => 'setRate',
            'logs' => 'setLogs',
            'groups' => 'setGroups'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  批量审批ID，填写String类型替代Long类型。
    * tenantId  项目ID。
    * groupId  组ID，填写String类型替代Long类型。
    * bizName  业务名。
    * bizId  业务ID，填写String类型替代Long类型。
    * operationStatus  操作结果类型枚举。RUNNING(运行中)、SUCCESS(操作成功)、FAILED(操作失败)。 枚举值：   - RUNNING: 运行中   - SUCCESS: 操作成功   - FAILED: 操作失败
    * operationType  类型。
    * bizInfo  业务详情。
    * createBy  创建人。
    * remark  remark信息。
    * total  总数。
    * success  操作成功个数。
    * failed  操作失败个数。
    * rate  当前进度。
    * logs  日志。
    * groups  分组信息。
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'tenantId' => 'getTenantId',
            'groupId' => 'getGroupId',
            'bizName' => 'getBizName',
            'bizId' => 'getBizId',
            'operationStatus' => 'getOperationStatus',
            'operationType' => 'getOperationType',
            'bizInfo' => 'getBizInfo',
            'createBy' => 'getCreateBy',
            'remark' => 'getRemark',
            'total' => 'getTotal',
            'success' => 'getSuccess',
            'failed' => 'getFailed',
            'rate' => 'getRate',
            'logs' => 'getLogs',
            'groups' => 'getGroups'
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
    const OPERATION_STATUS_RUNNING = 'RUNNING';
    const OPERATION_STATUS_SUCCESS = 'SUCCESS';
    const OPERATION_STATUS_FAILED = 'FAILED';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationStatusAllowableValues()
    {
        return [
            self::OPERATION_STATUS_RUNNING,
            self::OPERATION_STATUS_SUCCESS,
            self::OPERATION_STATUS_FAILED,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['tenantId'] = isset($data['tenantId']) ? $data['tenantId'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['bizName'] = isset($data['bizName']) ? $data['bizName'] : null;
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['operationStatus'] = isset($data['operationStatus']) ? $data['operationStatus'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['bizInfo'] = isset($data['bizInfo']) ? $data['bizInfo'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['remark'] = isset($data['remark']) ? $data['remark'] : null;
        $this->container['total'] = isset($data['total']) ? $data['total'] : null;
        $this->container['success'] = isset($data['success']) ? $data['success'] : null;
        $this->container['failed'] = isset($data['failed']) ? $data['failed'] : null;
        $this->container['rate'] = isset($data['rate']) ? $data['rate'] : null;
        $this->container['logs'] = isset($data['logs']) ? $data['logs'] : null;
        $this->container['groups'] = isset($data['groups']) ? $data['groups'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            $allowedValues = $this->getOperationStatusAllowableValues();
                if (!is_null($this->container['operationStatus']) && !in_array($this->container['operationStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationStatus', must be one of '%s'",
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
    * Gets id
    *  批量审批ID，填写String类型替代Long类型。
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
    * @param string|null $id 批量审批ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets tenantId
    *  项目ID。
    *
    * @return string|null
    */
    public function getTenantId()
    {
        return $this->container['tenantId'];
    }

    /**
    * Sets tenantId
    *
    * @param string|null $tenantId 项目ID。
    *
    * @return $this
    */
    public function setTenantId($tenantId)
    {
        $this->container['tenantId'] = $tenantId;
        return $this;
    }

    /**
    * Gets groupId
    *  组ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId 组ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets bizName
    *  业务名。
    *
    * @return string|null
    */
    public function getBizName()
    {
        return $this->container['bizName'];
    }

    /**
    * Sets bizName
    *
    * @param string|null $bizName 业务名。
    *
    * @return $this
    */
    public function setBizName($bizName)
    {
        $this->container['bizName'] = $bizName;
        return $this;
    }

    /**
    * Gets bizId
    *  业务ID，填写String类型替代Long类型。
    *
    * @return string|null
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param string|null $bizId 业务ID，填写String类型替代Long类型。
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets operationStatus
    *  操作结果类型枚举。RUNNING(运行中)、SUCCESS(操作成功)、FAILED(操作失败)。 枚举值：   - RUNNING: 运行中   - SUCCESS: 操作成功   - FAILED: 操作失败
    *
    * @return string|null
    */
    public function getOperationStatus()
    {
        return $this->container['operationStatus'];
    }

    /**
    * Sets operationStatus
    *
    * @param string|null $operationStatus 操作结果类型枚举。RUNNING(运行中)、SUCCESS(操作成功)、FAILED(操作失败)。 枚举值：   - RUNNING: 运行中   - SUCCESS: 操作成功   - FAILED: 操作失败
    *
    * @return $this
    */
    public function setOperationStatus($operationStatus)
    {
        $this->container['operationStatus'] = $operationStatus;
        return $this;
    }

    /**
    * Gets operationType
    *  类型。
    *
    * @return string|null
    */
    public function getOperationType()
    {
        return $this->container['operationType'];
    }

    /**
    * Sets operationType
    *
    * @param string|null $operationType 类型。
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets bizInfo
    *  业务详情。
    *
    * @return string|null
    */
    public function getBizInfo()
    {
        return $this->container['bizInfo'];
    }

    /**
    * Sets bizInfo
    *
    * @param string|null $bizInfo 业务详情。
    *
    * @return $this
    */
    public function setBizInfo($bizInfo)
    {
        $this->container['bizInfo'] = $bizInfo;
        return $this;
    }

    /**
    * Gets createBy
    *  创建人。
    *
    * @return string|null
    */
    public function getCreateBy()
    {
        return $this->container['createBy'];
    }

    /**
    * Sets createBy
    *
    * @param string|null $createBy 创建人。
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets remark
    *  remark信息。
    *
    * @return string|null
    */
    public function getRemark()
    {
        return $this->container['remark'];
    }

    /**
    * Sets remark
    *
    * @param string|null $remark remark信息。
    *
    * @return $this
    */
    public function setRemark($remark)
    {
        $this->container['remark'] = $remark;
        return $this;
    }

    /**
    * Gets total
    *  总数。
    *
    * @return int|null
    */
    public function getTotal()
    {
        return $this->container['total'];
    }

    /**
    * Sets total
    *
    * @param int|null $total 总数。
    *
    * @return $this
    */
    public function setTotal($total)
    {
        $this->container['total'] = $total;
        return $this;
    }

    /**
    * Gets success
    *  操作成功个数。
    *
    * @return int|null
    */
    public function getSuccess()
    {
        return $this->container['success'];
    }

    /**
    * Sets success
    *
    * @param int|null $success 操作成功个数。
    *
    * @return $this
    */
    public function setSuccess($success)
    {
        $this->container['success'] = $success;
        return $this;
    }

    /**
    * Gets failed
    *  操作失败个数。
    *
    * @return int|null
    */
    public function getFailed()
    {
        return $this->container['failed'];
    }

    /**
    * Sets failed
    *
    * @param int|null $failed 操作失败个数。
    *
    * @return $this
    */
    public function setFailed($failed)
    {
        $this->container['failed'] = $failed;
        return $this;
    }

    /**
    * Gets rate
    *  当前进度。
    *
    * @return string|null
    */
    public function getRate()
    {
        return $this->container['rate'];
    }

    /**
    * Sets rate
    *
    * @param string|null $rate 当前进度。
    *
    * @return $this
    */
    public function setRate($rate)
    {
        $this->container['rate'] = $rate;
        return $this;
    }

    /**
    * Gets logs
    *  日志。
    *
    * @return string|null
    */
    public function getLogs()
    {
        return $this->container['logs'];
    }

    /**
    * Sets logs
    *
    * @param string|null $logs 日志。
    *
    * @return $this
    */
    public function setLogs($logs)
    {
        $this->container['logs'] = $logs;
        return $this;
    }

    /**
    * Gets groups
    *  分组信息。
    *
    * @return \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOperationVO[]|null
    */
    public function getGroups()
    {
        return $this->container['groups'];
    }

    /**
    * Sets groups
    *
    * @param \HuaweiCloud\SDK\DataArtsStudio\V1\Model\BatchOperationVO[]|null $groups 分组信息。
    *
    * @return $this
    */
    public function setGroups($groups)
    {
        $this->container['groups'] = $groups;
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

