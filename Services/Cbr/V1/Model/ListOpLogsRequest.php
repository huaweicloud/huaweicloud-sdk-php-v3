<?php

namespace HuaweiCloud\SDK\Cbr\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListOpLogsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListOpLogsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * endTime  任务结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * limit  每页显示的条目数量，正整数
    * offset  偏移值，正整数
    * operationType  任务类型
    * providerId  备份提供商ID
    * resourceId  该任务操作的资源ID
    * resourceName  该任务操作的资源名称
    * startTime  任务开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-01-01T12:00:00Z
    * status  任务状态
    * vaultId  存储库ID,该任务操作的资源所属绑定的存储库。
    * vaultName  存储库名称，该任务操作资源所绑定的存储库名称。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'endTime' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'operationType' => 'string',
            'providerId' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'startTime' => 'string',
            'status' => 'string',
            'vaultId' => 'string',
            'vaultName' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * endTime  任务结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * limit  每页显示的条目数量，正整数
    * offset  偏移值，正整数
    * operationType  任务类型
    * providerId  备份提供商ID
    * resourceId  该任务操作的资源ID
    * resourceName  该任务操作的资源名称
    * startTime  任务开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-01-01T12:00:00Z
    * status  任务状态
    * vaultId  存储库ID,该任务操作的资源所属绑定的存储库。
    * vaultName  存储库名称，该任务操作资源所绑定的存储库名称。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'endTime' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'operationType' => null,
        'providerId' => null,
        'resourceId' => null,
        'resourceName' => null,
        'startTime' => null,
        'status' => null,
        'vaultId' => null,
        'vaultName' => null,
        'enterpriseProjectId' => null
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
    * endTime  任务结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * limit  每页显示的条目数量，正整数
    * offset  偏移值，正整数
    * operationType  任务类型
    * providerId  备份提供商ID
    * resourceId  该任务操作的资源ID
    * resourceName  该任务操作的资源名称
    * startTime  任务开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-01-01T12:00:00Z
    * status  任务状态
    * vaultId  存储库ID,该任务操作的资源所属绑定的存储库。
    * vaultName  存储库名称，该任务操作资源所绑定的存储库名称。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset',
            'operationType' => 'operation_type',
            'providerId' => 'provider_id',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'startTime' => 'start_time',
            'status' => 'status',
            'vaultId' => 'vault_id',
            'vaultName' => 'vault_name',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * endTime  任务结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * limit  每页显示的条目数量，正整数
    * offset  偏移值，正整数
    * operationType  任务类型
    * providerId  备份提供商ID
    * resourceId  该任务操作的资源ID
    * resourceName  该任务操作的资源名称
    * startTime  任务开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-01-01T12:00:00Z
    * status  任务状态
    * vaultId  存储库ID,该任务操作的资源所属绑定的存储库。
    * vaultName  存储库名称，该任务操作资源所绑定的存储库名称。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @var string[]
    */
    protected static $setters = [
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'operationType' => 'setOperationType',
            'providerId' => 'setProviderId',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'startTime' => 'setStartTime',
            'status' => 'setStatus',
            'vaultId' => 'setVaultId',
            'vaultName' => 'setVaultName',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * endTime  任务结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    * limit  每页显示的条目数量，正整数
    * offset  偏移值，正整数
    * operationType  任务类型
    * providerId  备份提供商ID
    * resourceId  该任务操作的资源ID
    * resourceName  该任务操作的资源名称
    * startTime  任务开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-01-01T12:00:00Z
    * status  任务状态
    * vaultId  存储库ID,该任务操作的资源所属绑定的存储库。
    * vaultName  存储库名称，该任务操作资源所绑定的存储库名称。
    * enterpriseProjectId  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @var string[]
    */
    protected static $getters = [
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'operationType' => 'getOperationType',
            'providerId' => 'getProviderId',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'startTime' => 'getStartTime',
            'status' => 'getStatus',
            'vaultId' => 'getVaultId',
            'vaultName' => 'getVaultName',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
    const OPERATION_TYPE_DELETE = 'delete';
    const OPERATION_TYPE_RESTORE = 'restore';
    const OPERATION_TYPE_VAULT_DELETE = 'vault_delete';
    const OPERATION_TYPE_REMOVE_RESOURCE = 'remove_resource';
    const OPERATION_TYPE_SYNC = 'sync';
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
            self::OPERATION_TYPE_DELETE,
            self::OPERATION_TYPE_RESTORE,
            self::OPERATION_TYPE_VAULT_DELETE,
            self::OPERATION_TYPE_REMOVE_RESOURCE,
            self::OPERATION_TYPE_SYNC,
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
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['providerId'] = isset($data['providerId']) ? $data['providerId'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['startTime'] = isset($data['startTime']) ? $data['startTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['vaultId'] = isset($data['vaultId']) ? $data['vaultId'] : null;
        $this->container['vaultName'] = isset($data['vaultName']) ? $data['vaultName'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 1)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getOperationTypeAllowableValues();
                if (!is_null($this->container['operationType']) && !in_array($this->container['operationType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'operationType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
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
    * Gets endTime
    *  任务结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
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
    * @param string|null $endTime 任务结束时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-02-01T12:00:00Z
    *
    * @return $this
    */
    public function setEndTime($endTime)
    {
        $this->container['endTime'] = $endTime;
        return $this;
    }

    /**
    * Gets limit
    *  每页显示的条目数量，正整数
    *
    * @return int|null
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int|null $limit 每页显示的条目数量，正整数
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  偏移值，正整数
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset 偏移值，正整数
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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
    * Gets providerId
    *  备份提供商ID
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
    * @param string|null $providerId 备份提供商ID
    *
    * @return $this
    */
    public function setProviderId($providerId)
    {
        $this->container['providerId'] = $providerId;
        return $this;
    }

    /**
    * Gets resourceId
    *  该任务操作的资源ID
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 该任务操作的资源ID
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  该任务操作的资源名称
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 该任务操作的资源名称
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets startTime
    *  任务开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-01-01T12:00:00Z
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
    * @param string|null $startTime 任务开始时间，格式为%YYYY-%mm-%ddT%HH:%MM:%SSZ，例如2018-01-01T12:00:00Z
    *
    * @return $this
    */
    public function setStartTime($startTime)
    {
        $this->container['startTime'] = $startTime;
        return $this;
    }

    /**
    * Gets status
    *  任务状态
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
    * @param string|null $status 任务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets vaultId
    *  存储库ID,该任务操作的资源所属绑定的存储库。
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
    * @param string|null $vaultId 存储库ID,该任务操作的资源所属绑定的存储库。
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
    *  存储库名称，该任务操作资源所绑定的存储库名称。
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
    * @param string|null $vaultName 存储库名称，该任务操作资源所绑定的存储库名称。
    *
    * @return $this
    */
    public function setVaultName($vaultName)
    {
        $this->container['vaultName'] = $vaultName;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 企业项目id或all_granted_eps，all_granted_eps表示查询用户有权限的所有企业项目id
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

