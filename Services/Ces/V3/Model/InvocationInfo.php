<?php

namespace HuaweiCloud\SDK\Ces\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class InvocationInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'InvocationInfo';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * invocationId  任务id
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * intranetIps  内网ip列表
    * elasticIps  弹性公网ip列表
    * invocationType  任务类型(INSTALL 安装，UPDATE升级，ROLLBACK回滚)
    * invocationStatus  任务状态，PENDING 待执行，RUNNING 运行中，TIMEOUT 超时，FAILED 失败，SUCCEEDED 成功，CANCELED 取消，ROLLBACKED已回退
    * invocationTarget  任务对象，目前仅支持telescope
    * createTime  任务创建时间
    * updateTime  任务更新时间
    * currentVersion  当前版本
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'invocationId' => 'string',
            'instanceId' => 'string',
            'instanceName' => 'string',
            'instanceType' => 'string',
            'intranetIps' => 'string[]',
            'elasticIps' => 'string[]',
            'invocationType' => 'string',
            'invocationStatus' => 'string',
            'invocationTarget' => 'string',
            'createTime' => 'int',
            'updateTime' => 'int',
            'currentVersion' => 'string',
            'targetVersion' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * invocationId  任务id
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * intranetIps  内网ip列表
    * elasticIps  弹性公网ip列表
    * invocationType  任务类型(INSTALL 安装，UPDATE升级，ROLLBACK回滚)
    * invocationStatus  任务状态，PENDING 待执行，RUNNING 运行中，TIMEOUT 超时，FAILED 失败，SUCCEEDED 成功，CANCELED 取消，ROLLBACKED已回退
    * invocationTarget  任务对象，目前仅支持telescope
    * createTime  任务创建时间
    * updateTime  任务更新时间
    * currentVersion  当前版本
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'invocationId' => null,
        'instanceId' => null,
        'instanceName' => null,
        'instanceType' => null,
        'intranetIps' => null,
        'elasticIps' => null,
        'invocationType' => null,
        'invocationStatus' => null,
        'invocationTarget' => null,
        'createTime' => 'int64',
        'updateTime' => 'int64',
        'currentVersion' => null,
        'targetVersion' => null
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
    * invocationId  任务id
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * intranetIps  内网ip列表
    * elasticIps  弹性公网ip列表
    * invocationType  任务类型(INSTALL 安装，UPDATE升级，ROLLBACK回滚)
    * invocationStatus  任务状态，PENDING 待执行，RUNNING 运行中，TIMEOUT 超时，FAILED 失败，SUCCEEDED 成功，CANCELED 取消，ROLLBACKED已回退
    * invocationTarget  任务对象，目前仅支持telescope
    * createTime  任务创建时间
    * updateTime  任务更新时间
    * currentVersion  当前版本
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'invocationId' => 'invocation_id',
            'instanceId' => 'instance_id',
            'instanceName' => 'instance_name',
            'instanceType' => 'instance_type',
            'intranetIps' => 'intranet_ips',
            'elasticIps' => 'elastic_ips',
            'invocationType' => 'invocation_type',
            'invocationStatus' => 'invocation_status',
            'invocationTarget' => 'invocation_target',
            'createTime' => 'create_time',
            'updateTime' => 'update_time',
            'currentVersion' => 'current_version',
            'targetVersion' => 'target_version'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * invocationId  任务id
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * intranetIps  内网ip列表
    * elasticIps  弹性公网ip列表
    * invocationType  任务类型(INSTALL 安装，UPDATE升级，ROLLBACK回滚)
    * invocationStatus  任务状态，PENDING 待执行，RUNNING 运行中，TIMEOUT 超时，FAILED 失败，SUCCEEDED 成功，CANCELED 取消，ROLLBACKED已回退
    * invocationTarget  任务对象，目前仅支持telescope
    * createTime  任务创建时间
    * updateTime  任务更新时间
    * currentVersion  当前版本
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $setters = [
            'invocationId' => 'setInvocationId',
            'instanceId' => 'setInstanceId',
            'instanceName' => 'setInstanceName',
            'instanceType' => 'setInstanceType',
            'intranetIps' => 'setIntranetIps',
            'elasticIps' => 'setElasticIps',
            'invocationType' => 'setInvocationType',
            'invocationStatus' => 'setInvocationStatus',
            'invocationTarget' => 'setInvocationTarget',
            'createTime' => 'setCreateTime',
            'updateTime' => 'setUpdateTime',
            'currentVersion' => 'setCurrentVersion',
            'targetVersion' => 'setTargetVersion'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * invocationId  任务id
    * instanceId  主机id
    * instanceName  主机名称
    * instanceType  主机类型，ECS弹性云服务器，BMS裸金属服务器
    * intranetIps  内网ip列表
    * elasticIps  弹性公网ip列表
    * invocationType  任务类型(INSTALL 安装，UPDATE升级，ROLLBACK回滚)
    * invocationStatus  任务状态，PENDING 待执行，RUNNING 运行中，TIMEOUT 超时，FAILED 失败，SUCCEEDED 成功，CANCELED 取消，ROLLBACKED已回退
    * invocationTarget  任务对象，目前仅支持telescope
    * createTime  任务创建时间
    * updateTime  任务更新时间
    * currentVersion  当前版本
    * targetVersion  目标版本
    *
    * @var string[]
    */
    protected static $getters = [
            'invocationId' => 'getInvocationId',
            'instanceId' => 'getInstanceId',
            'instanceName' => 'getInstanceName',
            'instanceType' => 'getInstanceType',
            'intranetIps' => 'getIntranetIps',
            'elasticIps' => 'getElasticIps',
            'invocationType' => 'getInvocationType',
            'invocationStatus' => 'getInvocationStatus',
            'invocationTarget' => 'getInvocationTarget',
            'createTime' => 'getCreateTime',
            'updateTime' => 'getUpdateTime',
            'currentVersion' => 'getCurrentVersion',
            'targetVersion' => 'getTargetVersion'
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
    const INSTANCE_TYPE_ECS = 'ECS';
    const INSTANCE_TYPE_BMS = 'BMS';
    const INVOCATION_TYPE_INSTALL = 'INSTALL';
    const INVOCATION_TYPE_UPDATE = 'UPDATE';
    const INVOCATION_TYPE_ROLLBACK = 'ROLLBACK';
    const INVOCATION_STATUS_PENDING = 'PENDING';
    const INVOCATION_STATUS_RUNNING = 'RUNNING';
    const INVOCATION_STATUS_TIMEOUT = 'TIMEOUT';
    const INVOCATION_STATUS_FAILED = 'FAILED';
    const INVOCATION_STATUS_SUCCEEDED = 'SUCCEEDED';
    const INVOCATION_STATUS_CANCELED = 'CANCELED';
    const INVOCATION_STATUS_ROLLBACKED = 'ROLLBACKED';
    const INVOCATION_TARGET_TELESCOPE = 'telescope';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInstanceTypeAllowableValues()
    {
        return [
            self::INSTANCE_TYPE_ECS,
            self::INSTANCE_TYPE_BMS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationTypeAllowableValues()
    {
        return [
            self::INVOCATION_TYPE_INSTALL,
            self::INVOCATION_TYPE_UPDATE,
            self::INVOCATION_TYPE_ROLLBACK,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationStatusAllowableValues()
    {
        return [
            self::INVOCATION_STATUS_PENDING,
            self::INVOCATION_STATUS_RUNNING,
            self::INVOCATION_STATUS_TIMEOUT,
            self::INVOCATION_STATUS_FAILED,
            self::INVOCATION_STATUS_SUCCEEDED,
            self::INVOCATION_STATUS_CANCELED,
            self::INVOCATION_STATUS_ROLLBACKED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getInvocationTargetAllowableValues()
    {
        return [
            self::INVOCATION_TARGET_TELESCOPE,
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
        $this->container['invocationId'] = isset($data['invocationId']) ? $data['invocationId'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['instanceName'] = isset($data['instanceName']) ? $data['instanceName'] : null;
        $this->container['instanceType'] = isset($data['instanceType']) ? $data['instanceType'] : null;
        $this->container['intranetIps'] = isset($data['intranetIps']) ? $data['intranetIps'] : null;
        $this->container['elasticIps'] = isset($data['elasticIps']) ? $data['elasticIps'] : null;
        $this->container['invocationType'] = isset($data['invocationType']) ? $data['invocationType'] : null;
        $this->container['invocationStatus'] = isset($data['invocationStatus']) ? $data['invocationStatus'] : null;
        $this->container['invocationTarget'] = isset($data['invocationTarget']) ? $data['invocationTarget'] : null;
        $this->container['createTime'] = isset($data['createTime']) ? $data['createTime'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['currentVersion'] = isset($data['currentVersion']) ? $data['currentVersion'] : null;
        $this->container['targetVersion'] = isset($data['targetVersion']) ? $data['targetVersion'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['invocationId']) && !preg_match("/^([0-9A-Za-z]){1}([0-9A-Za-z]|_|-)*$/", $this->container['invocationId'])) {
                $invalidProperties[] = "invalid value for 'invocationId', must be conform to the pattern /^([0-9A-Za-z]){1}([0-9A-Za-z]|_|-)*$/.";
            }
            if (!is_null($this->container['instanceId']) && !preg_match("/^[a-zA-Z0-9-]{1,64}$/", $this->container['instanceId'])) {
                $invalidProperties[] = "invalid value for 'instanceId', must be conform to the pattern /^[a-zA-Z0-9-]{1,64}$/.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) > 64)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['instanceName']) && (mb_strlen($this->container['instanceName']) < 1)) {
                $invalidProperties[] = "invalid value for 'instanceName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getInstanceTypeAllowableValues();
                if (!is_null($this->container['instanceType']) && !in_array($this->container['instanceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'instanceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInvocationTypeAllowableValues();
                if (!is_null($this->container['invocationType']) && !in_array($this->container['invocationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInvocationStatusAllowableValues();
                if (!is_null($this->container['invocationStatus']) && !in_array($this->container['invocationStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getInvocationTargetAllowableValues();
                if (!is_null($this->container['invocationTarget']) && !in_array($this->container['invocationTarget'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'invocationTarget', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['createTime']) && ($this->container['createTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'createTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['createTime']) && ($this->container['createTime'] < 1111111111111)) {
                $invalidProperties[] = "invalid value for 'createTime', must be bigger than or equal to 1111111111111.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] > 9999999999999)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be smaller than or equal to 9999999999999.";
            }
            if (!is_null($this->container['updateTime']) && ($this->container['updateTime'] < 1111111111111)) {
                $invalidProperties[] = "invalid value for 'updateTime', must be bigger than or equal to 1111111111111.";
            }
            if (!is_null($this->container['currentVersion']) && (mb_strlen($this->container['currentVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'currentVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['currentVersion']) && (mb_strlen($this->container['currentVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'currentVersion', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['targetVersion']) && (mb_strlen($this->container['targetVersion']) > 64)) {
                $invalidProperties[] = "invalid value for 'targetVersion', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['targetVersion']) && (mb_strlen($this->container['targetVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'targetVersion', the character length must be bigger than or equal to 1.";
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
    * Gets invocationId
    *  任务id
    *
    * @return string|null
    */
    public function getInvocationId()
    {
        return $this->container['invocationId'];
    }

    /**
    * Sets invocationId
    *
    * @param string|null $invocationId 任务id
    *
    * @return $this
    */
    public function setInvocationId($invocationId)
    {
        $this->container['invocationId'] = $invocationId;
        return $this;
    }

    /**
    * Gets instanceId
    *  主机id
    *
    * @return string|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string|null $instanceId 主机id
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets instanceName
    *  主机名称
    *
    * @return string|null
    */
    public function getInstanceName()
    {
        return $this->container['instanceName'];
    }

    /**
    * Sets instanceName
    *
    * @param string|null $instanceName 主机名称
    *
    * @return $this
    */
    public function setInstanceName($instanceName)
    {
        $this->container['instanceName'] = $instanceName;
        return $this;
    }

    /**
    * Gets instanceType
    *  主机类型，ECS弹性云服务器，BMS裸金属服务器
    *
    * @return string|null
    */
    public function getInstanceType()
    {
        return $this->container['instanceType'];
    }

    /**
    * Sets instanceType
    *
    * @param string|null $instanceType 主机类型，ECS弹性云服务器，BMS裸金属服务器
    *
    * @return $this
    */
    public function setInstanceType($instanceType)
    {
        $this->container['instanceType'] = $instanceType;
        return $this;
    }

    /**
    * Gets intranetIps
    *  内网ip列表
    *
    * @return string[]|null
    */
    public function getIntranetIps()
    {
        return $this->container['intranetIps'];
    }

    /**
    * Sets intranetIps
    *
    * @param string[]|null $intranetIps 内网ip列表
    *
    * @return $this
    */
    public function setIntranetIps($intranetIps)
    {
        $this->container['intranetIps'] = $intranetIps;
        return $this;
    }

    /**
    * Gets elasticIps
    *  弹性公网ip列表
    *
    * @return string[]|null
    */
    public function getElasticIps()
    {
        return $this->container['elasticIps'];
    }

    /**
    * Sets elasticIps
    *
    * @param string[]|null $elasticIps 弹性公网ip列表
    *
    * @return $this
    */
    public function setElasticIps($elasticIps)
    {
        $this->container['elasticIps'] = $elasticIps;
        return $this;
    }

    /**
    * Gets invocationType
    *  任务类型(INSTALL 安装，UPDATE升级，ROLLBACK回滚)
    *
    * @return string|null
    */
    public function getInvocationType()
    {
        return $this->container['invocationType'];
    }

    /**
    * Sets invocationType
    *
    * @param string|null $invocationType 任务类型(INSTALL 安装，UPDATE升级，ROLLBACK回滚)
    *
    * @return $this
    */
    public function setInvocationType($invocationType)
    {
        $this->container['invocationType'] = $invocationType;
        return $this;
    }

    /**
    * Gets invocationStatus
    *  任务状态，PENDING 待执行，RUNNING 运行中，TIMEOUT 超时，FAILED 失败，SUCCEEDED 成功，CANCELED 取消，ROLLBACKED已回退
    *
    * @return string|null
    */
    public function getInvocationStatus()
    {
        return $this->container['invocationStatus'];
    }

    /**
    * Sets invocationStatus
    *
    * @param string|null $invocationStatus 任务状态，PENDING 待执行，RUNNING 运行中，TIMEOUT 超时，FAILED 失败，SUCCEEDED 成功，CANCELED 取消，ROLLBACKED已回退
    *
    * @return $this
    */
    public function setInvocationStatus($invocationStatus)
    {
        $this->container['invocationStatus'] = $invocationStatus;
        return $this;
    }

    /**
    * Gets invocationTarget
    *  任务对象，目前仅支持telescope
    *
    * @return string|null
    */
    public function getInvocationTarget()
    {
        return $this->container['invocationTarget'];
    }

    /**
    * Sets invocationTarget
    *
    * @param string|null $invocationTarget 任务对象，目前仅支持telescope
    *
    * @return $this
    */
    public function setInvocationTarget($invocationTarget)
    {
        $this->container['invocationTarget'] = $invocationTarget;
        return $this;
    }

    /**
    * Gets createTime
    *  任务创建时间
    *
    * @return int|null
    */
    public function getCreateTime()
    {
        return $this->container['createTime'];
    }

    /**
    * Sets createTime
    *
    * @param int|null $createTime 任务创建时间
    *
    * @return $this
    */
    public function setCreateTime($createTime)
    {
        $this->container['createTime'] = $createTime;
        return $this;
    }

    /**
    * Gets updateTime
    *  任务更新时间
    *
    * @return int|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param int|null $updateTime 任务更新时间
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets currentVersion
    *  当前版本
    *
    * @return string|null
    */
    public function getCurrentVersion()
    {
        return $this->container['currentVersion'];
    }

    /**
    * Sets currentVersion
    *
    * @param string|null $currentVersion 当前版本
    *
    * @return $this
    */
    public function setCurrentVersion($currentVersion)
    {
        $this->container['currentVersion'] = $currentVersion;
        return $this;
    }

    /**
    * Gets targetVersion
    *  目标版本
    *
    * @return string|null
    */
    public function getTargetVersion()
    {
        return $this->container['targetVersion'];
    }

    /**
    * Sets targetVersion
    *
    * @param string|null $targetVersion 目标版本
    *
    * @return $this
    */
    public function setTargetVersion($targetVersion)
    {
        $this->container['targetVersion'] = $targetVersion;
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

