<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OperationLog implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OperationLog';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * checkpointId  备份记录id
    * createdAt  创建时间,例如: \"2020-02-23T01:00:32Z\"
    * endedAt  任务结束时间,例如: \"2020-02-23T01:00:32Z\"
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * id  任务id
    * operationType  任务类型
    * policyId  策略ID
    * projectId  项目ID
    * providerId  备份提供商ID。用于区分备份对象。
    * startedAt  任务开始时间,例如: \"2020-02-23T01:00:32Z\"
    * status  任务状态
    * updatedAt  修改时间,例如: \"2020-02-23T01:00:32Z\"
    * vaultId  任务操作资源所属存储库ID
    * vaultName  任务操作资源所属存储库名称
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'checkpointId' => 'string',
            'createdAt' => 'string',
            'endedAt' => 'string',
            'errorInfo' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpErrorInfo',
            'extraInfo' => '\HuaweiCloud\SDK\Cbr\V1\Model\OpExtraInfo',
            'id' => 'string',
            'operationType' => 'string',
            'policyId' => 'string',
            'projectId' => 'string',
            'providerId' => 'string',
            'startedAt' => 'string',
            'status' => 'string',
            'updatedAt' => 'string',
            'vaultId' => 'string',
            'vaultName' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * checkpointId  备份记录id
    * createdAt  创建时间,例如: \"2020-02-23T01:00:32Z\"
    * endedAt  任务结束时间,例如: \"2020-02-23T01:00:32Z\"
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * id  任务id
    * operationType  任务类型
    * policyId  策略ID
    * projectId  项目ID
    * providerId  备份提供商ID。用于区分备份对象。
    * startedAt  任务开始时间,例如: \"2020-02-23T01:00:32Z\"
    * status  任务状态
    * updatedAt  修改时间,例如: \"2020-02-23T01:00:32Z\"
    * vaultId  任务操作资源所属存储库ID
    * vaultName  任务操作资源所属存储库名称
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'checkpointId' => null,
        'createdAt' => null,
        'endedAt' => null,
        'errorInfo' => null,
        'extraInfo' => null,
        'id' => null,
        'operationType' => null,
        'policyId' => null,
        'projectId' => null,
        'providerId' => null,
        'startedAt' => null,
        'status' => null,
        'updatedAt' => null,
        'vaultId' => null,
        'vaultName' => null
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
    * checkpointId  备份记录id
    * createdAt  创建时间,例如: \"2020-02-23T01:00:32Z\"
    * endedAt  任务结束时间,例如: \"2020-02-23T01:00:32Z\"
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * id  任务id
    * operationType  任务类型
    * policyId  策略ID
    * projectId  项目ID
    * providerId  备份提供商ID。用于区分备份对象。
    * startedAt  任务开始时间,例如: \"2020-02-23T01:00:32Z\"
    * status  任务状态
    * updatedAt  修改时间,例如: \"2020-02-23T01:00:32Z\"
    * vaultId  任务操作资源所属存储库ID
    * vaultName  任务操作资源所属存储库名称
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'checkpointId' => 'checkpoint_id',
            'createdAt' => 'created_at',
            'endedAt' => 'ended_at',
            'errorInfo' => 'error_info',
            'extraInfo' => 'extra_info',
            'id' => 'id',
            'operationType' => 'operation_type',
            'policyId' => 'policy_id',
            'projectId' => 'project_id',
            'providerId' => 'provider_id',
            'startedAt' => 'started_at',
            'status' => 'status',
            'updatedAt' => 'updated_at',
            'vaultId' => 'vault_id',
            'vaultName' => 'vault_name'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * checkpointId  备份记录id
    * createdAt  创建时间,例如: \"2020-02-23T01:00:32Z\"
    * endedAt  任务结束时间,例如: \"2020-02-23T01:00:32Z\"
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * id  任务id
    * operationType  任务类型
    * policyId  策略ID
    * projectId  项目ID
    * providerId  备份提供商ID。用于区分备份对象。
    * startedAt  任务开始时间,例如: \"2020-02-23T01:00:32Z\"
    * status  任务状态
    * updatedAt  修改时间,例如: \"2020-02-23T01:00:32Z\"
    * vaultId  任务操作资源所属存储库ID
    * vaultName  任务操作资源所属存储库名称
    *
    * @var string[]
    */
    protected static $setters = [
            'checkpointId' => 'setCheckpointId',
            'createdAt' => 'setCreatedAt',
            'endedAt' => 'setEndedAt',
            'errorInfo' => 'setErrorInfo',
            'extraInfo' => 'setExtraInfo',
            'id' => 'setId',
            'operationType' => 'setOperationType',
            'policyId' => 'setPolicyId',
            'projectId' => 'setProjectId',
            'providerId' => 'setProviderId',
            'startedAt' => 'setStartedAt',
            'status' => 'setStatus',
            'updatedAt' => 'setUpdatedAt',
            'vaultId' => 'setVaultId',
            'vaultName' => 'setVaultName'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * checkpointId  备份记录id
    * createdAt  创建时间,例如: \"2020-02-23T01:00:32Z\"
    * endedAt  任务结束时间,例如: \"2020-02-23T01:00:32Z\"
    * errorInfo  errorInfo
    * extraInfo  extraInfo
    * id  任务id
    * operationType  任务类型
    * policyId  策略ID
    * projectId  项目ID
    * providerId  备份提供商ID。用于区分备份对象。
    * startedAt  任务开始时间,例如: \"2020-02-23T01:00:32Z\"
    * status  任务状态
    * updatedAt  修改时间,例如: \"2020-02-23T01:00:32Z\"
    * vaultId  任务操作资源所属存储库ID
    * vaultName  任务操作资源所属存储库名称
    *
    * @var string[]
    */
    protected static $getters = [
            'checkpointId' => 'getCheckpointId',
            'createdAt' => 'getCreatedAt',
            'endedAt' => 'getEndedAt',
            'errorInfo' => 'getErrorInfo',
            'extraInfo' => 'getExtraInfo',
            'id' => 'getId',
            'operationType' => 'getOperationType',
            'policyId' => 'getPolicyId',
            'projectId' => 'getProjectId',
            'providerId' => 'getProviderId',
            'startedAt' => 'getStartedAt',
            'status' => 'getStatus',
            'updatedAt' => 'getUpdatedAt',
            'vaultId' => 'getVaultId',
            'vaultName' => 'getVaultName'
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
    const OPERATION_TYPE_BACKUP = 'backup';
    const OPERATION_TYPE_COPY = 'copy';
    const OPERATION_TYPE_REPLICATION = 'replication';
    const OPERATION_TYPE_RESTORE = 'restore';
    const OPERATION_TYPE_DELETE = 'delete';
    const OPERATION_TYPE_SYNC = 'sync';
    const OPERATION_TYPE_VAULT_DELETE = 'vault_delete';
    const OPERATION_TYPE_REMOVE_RESOURCE = 'remove_resource';
    const STATUS_SUCCESS = 'success';
    const STATUS_SKIPPED = 'skipped';
    const STATUS_FAILED = 'failed';
    const STATUS_RUNNING = 'running';
    const STATUS_TIMEOUT = 'timeout';
    const STATUS_WAITING = 'waiting';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOperationTypeAllowableValues()
    {
        return [
            self::OPERATION_TYPE_BACKUP,
            self::OPERATION_TYPE_COPY,
            self::OPERATION_TYPE_REPLICATION,
            self::OPERATION_TYPE_RESTORE,
            self::OPERATION_TYPE_DELETE,
            self::OPERATION_TYPE_SYNC,
            self::OPERATION_TYPE_VAULT_DELETE,
            self::OPERATION_TYPE_REMOVE_RESOURCE,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_SUCCESS,
            self::STATUS_SKIPPED,
            self::STATUS_FAILED,
            self::STATUS_RUNNING,
            self::STATUS_TIMEOUT,
            self::STATUS_WAITING,
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
        $this->container['checkpointId'] = isset($data['checkpointId']) ? $data['checkpointId'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['endedAt'] = isset($data['endedAt']) ? $data['endedAt'] : null;
        $this->container['errorInfo'] = isset($data['errorInfo']) ? $data['errorInfo'] : null;
        $this->container['extraInfo'] = isset($data['extraInfo']) ? $data['extraInfo'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['policyId'] = isset($data['policyId']) ? $data['policyId'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['startedAt'] = isset($data['startedAt']) ? $data['startedAt'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['vaultName'] = isset($data['vaultName']) ? $data['vaultName'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['errorInfo'] === null) {
            $invalidProperties[] = "'errorInfo' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
            $allowedValues = $this->getOperationTypeAllowableValues();
                if (!is_null($this->container['operationType']) && !in_array($this->container['operationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['startedAt'] === null) {
            $invalidProperties[] = "'startedAt' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
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
    * Gets checkpointId
    *  备份记录id
    *
    * @return string|null
    */
    public function getCheckpointId()
    {
        return $this->container['checkpointId'];
    }

    /**
    * Sets checkpointId
    *
    * @param string|null $checkpointId 备份记录id
    *
    * @return $this
    */
    public function setCheckpointId($checkpointId)
    {
        $this->container['checkpointId'] = $checkpointId;
        return $this;
    }

    /**
    * Gets createdAt
    *  创建时间,例如: \"2020-02-23T01:00:32Z\"
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt 创建时间,例如: \"2020-02-23T01:00:32Z\"
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets endedAt
    *  任务结束时间,例如: \"2020-02-23T01:00:32Z\"
    *
    * @return string|null
    */
    public function getEndedAt()
    {
        return $this->container['endedAt'];
    }

    /**
    * Sets endedAt
    *
    * @param string|null $endedAt 任务结束时间,例如: \"2020-02-23T01:00:32Z\"
    *
    * @return $this
    */
    public function setEndedAt($endedAt)
    {
        $this->container['endedAt'] = $endedAt;
        return $this;
    }

    /**
    * Gets errorInfo
    *  errorInfo
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpErrorInfo
    */
    public function getErrorInfo()
    {
        return $this->container['errorInfo'];
    }

    /**
    * Sets errorInfo
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpErrorInfo $errorInfo errorInfo
    *
    * @return $this
    */
    public function setErrorInfo($errorInfo)
    {
        $this->container['errorInfo'] = $errorInfo;
        return $this;
    }

    /**
    * Gets extraInfo
    *  extraInfo
    *
    * @return \HuaweiCloud\SDK\Cbr\V1\Model\OpExtraInfo|null
    */
    public function getExtraInfo()
    {
        return $this->container['extraInfo'];
    }

    /**
    * Sets extraInfo
    *
    * @param \HuaweiCloud\SDK\Cbr\V1\Model\OpExtraInfo|null $extraInfo extraInfo
    *
    * @return $this
    */
    public function setExtraInfo($extraInfo)
    {
        $this->container['extraInfo'] = $extraInfo;
        return $this;
    }

    /**
    * Gets id
    *  任务id
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 任务id
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operationType
    *  任务类型
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
    * @param string|null $operationType 任务类型
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets policyId
    *  策略ID
    *
    * @return string|null
    */
    public function getPolicyId()
    {
        return $this->container['policyId'];
    }

    /**
    * Sets policyId
    *
    * @param string|null $policyId 策略ID
    *
    * @return $this
    */
    public function setPolicyId($policyId)
    {
        $this->container['policyId'] = $policyId;
        return $this;
    }

    /**
    * Gets projectId
    *  项目ID
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 项目ID
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets providerId
    *  备份提供商ID。用于区分备份对象。
    *
    * @return string|null
    */
    public function getProviderId()
    {
        return $this->container['providerId'];
    }

    /**
    * Sets providerId
    *
    * @param string|null $providerId 备份提供商ID。用于区分备份对象。
    *
    * @return $this
    */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;
        return $this;
    }

    /**
    * Gets startedAt
    *  任务开始时间,例如: \"2020-02-23T01:00:32Z\"
    *
    * @return string
    */
    public function getStartedAt()
    {
        return $this->container['startedAt'];
    }

    /**
    * Sets startedAt
    *
    * @param string $startedAt 任务开始时间,例如: \"2020-02-23T01:00:32Z\"
    *
    * @return $this
    */
    public function setStartedAt($startedAt)
    {
        $this->container['startedAt'] = $startedAt;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
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
    * @param string $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets updatedAt
    *  修改时间,例如: \"2020-02-23T01:00:32Z\"
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt 修改时间,例如: \"2020-02-23T01:00:32Z\"
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets vaultId
    *  任务操作资源所属存储库ID
    *
    * @return string|null
    */
    public function getVaultId()
    {
        return $this->container['vaultId'];
    }

    /**
    * Sets vaultId
    *
    * @param string|null $vaultId 任务操作资源所属存储库ID
    *
    * @return $this
    */
    public function setVaultId($vaultId)
    {
        $this->container['vaultId'] = $vaultId;
        return $this;
    }

    /**
    * Gets vaultName
    *  任务操作资源所属存储库名称
    *
    * @return string|null
    */
    public function getVaultName()
    {
        return $this->container['vaultName'];
    }

    /**
    * Sets vaultName
    *
    * @param string|null $vaultName 任务操作资源所属存储库名称
    *
    * @return $this
    */
    public function setVaultName($vaultName)
    {
        $this->container['vaultName'] = $vaultName;
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

