<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityMemberSyncTasksRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityMemberSyncTasksRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * clusterType  集群类型 * MRS数据源 * DWS数据源
    * clusterName  集群名称
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * scheduleStatus  用户同步任务调度状态 * NOT_SCHEDULE 未启用调度 * SCHEDULING 调度中
    * orderBy  排序字段 * CLUSTER_NAME  按照集群名称排序 * CREATE_TIME   按照创建时间排序 * UPDATE_TIME   按照更新时间排序 * SYNC_TIME     按照同步时间排序
    * orderByAsc  是否升序（仅指定排序参数时有效）。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'clusterType' => 'string',
            'clusterName' => 'string',
            'syncStatus' => 'string',
            'scheduleStatus' => 'string',
            'orderBy' => 'string',
            'orderByAsc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * clusterType  集群类型 * MRS数据源 * DWS数据源
    * clusterName  集群名称
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * scheduleStatus  用户同步任务调度状态 * NOT_SCHEDULE 未启用调度 * SCHEDULING 调度中
    * orderBy  排序字段 * CLUSTER_NAME  按照集群名称排序 * CREATE_TIME   按照创建时间排序 * UPDATE_TIME   按照更新时间排序 * SYNC_TIME     按照同步时间排序
    * orderByAsc  是否升序（仅指定排序参数时有效）。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'limit' => null,
        'offset' => null,
        'clusterType' => null,
        'clusterName' => null,
        'syncStatus' => null,
        'scheduleStatus' => null,
        'orderBy' => null,
        'orderByAsc' => null
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
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * clusterType  集群类型 * MRS数据源 * DWS数据源
    * clusterName  集群名称
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * scheduleStatus  用户同步任务调度状态 * NOT_SCHEDULE 未启用调度 * SCHEDULING 调度中
    * orderBy  排序字段 * CLUSTER_NAME  按照集群名称排序 * CREATE_TIME   按照创建时间排序 * UPDATE_TIME   按照更新时间排序 * SYNC_TIME     按照同步时间排序
    * orderByAsc  是否升序（仅指定排序参数时有效）。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'limit' => 'limit',
            'offset' => 'offset',
            'clusterType' => 'cluster_type',
            'clusterName' => 'cluster_name',
            'syncStatus' => 'sync_status',
            'scheduleStatus' => 'schedule_status',
            'orderBy' => 'order_by',
            'orderByAsc' => 'order_by_asc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * clusterType  集群类型 * MRS数据源 * DWS数据源
    * clusterName  集群名称
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * scheduleStatus  用户同步任务调度状态 * NOT_SCHEDULE 未启用调度 * SCHEDULING 调度中
    * orderBy  排序字段 * CLUSTER_NAME  按照集群名称排序 * CREATE_TIME   按照创建时间排序 * UPDATE_TIME   按照更新时间排序 * SYNC_TIME     按照同步时间排序
    * orderByAsc  是否升序（仅指定排序参数时有效）。
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'clusterType' => 'setClusterType',
            'clusterName' => 'setClusterName',
            'syncStatus' => 'setSyncStatus',
            'scheduleStatus' => 'setScheduleStatus',
            'orderBy' => 'setOrderBy',
            'orderByAsc' => 'setOrderByAsc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * clusterType  集群类型 * MRS数据源 * DWS数据源
    * clusterName  集群名称
    * syncStatus  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    * scheduleStatus  用户同步任务调度状态 * NOT_SCHEDULE 未启用调度 * SCHEDULING 调度中
    * orderBy  排序字段 * CLUSTER_NAME  按照集群名称排序 * CREATE_TIME   按照创建时间排序 * UPDATE_TIME   按照更新时间排序 * SYNC_TIME     按照同步时间排序
    * orderByAsc  是否升序（仅指定排序参数时有效）。
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'clusterType' => 'getClusterType',
            'clusterName' => 'getClusterName',
            'syncStatus' => 'getSyncStatus',
            'scheduleStatus' => 'getScheduleStatus',
            'orderBy' => 'getOrderBy',
            'orderByAsc' => 'getOrderByAsc'
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
    const CLUSTER_TYPE_MRS = 'MRS';
    const CLUSTER_TYPE_DWS = 'DWS';
    const SYNC_STATUS_UNKNOWN = 'UNKNOWN';
    const SYNC_STATUS_NOT_SYNC = 'NOT_SYNC';
    const SYNC_STATUS_SYNCING = 'SYNCING';
    const SYNC_STATUS_SYNC_SUCCESS = 'SYNC_SUCCESS';
    const SYNC_STATUS_SYNC_FAIL = 'SYNC_FAIL';
    const SCHEDULE_STATUS_NOT_SCHEDULE = 'NOT_SCHEDULE';
    const SCHEDULE_STATUS_SCHEDULING = 'SCHEDULING';
    const ORDER_BY_CLUSTER_NAME = 'CLUSTER_NAME';
    const ORDER_BY_CREATE_TIME = 'CREATE_TIME';
    const ORDER_BY_UPDATE_TIME = 'UPDATE_TIME';
    const ORDER_BY_SYNC_TIME = 'SYNC_TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getClusterTypeAllowableValues()
    {
        return [
            self::CLUSTER_TYPE_MRS,
            self::CLUSTER_TYPE_DWS,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getSyncStatusAllowableValues()
    {
        return [
            self::SYNC_STATUS_UNKNOWN,
            self::SYNC_STATUS_NOT_SYNC,
            self::SYNC_STATUS_SYNCING,
            self::SYNC_STATUS_SYNC_SUCCESS,
            self::SYNC_STATUS_SYNC_FAIL,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getScheduleStatusAllowableValues()
    {
        return [
            self::SCHEDULE_STATUS_NOT_SCHEDULE,
            self::SCHEDULE_STATUS_SCHEDULING,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_CLUSTER_NAME,
            self::ORDER_BY_CREATE_TIME,
            self::ORDER_BY_UPDATE_TIME,
            self::ORDER_BY_SYNC_TIME,
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
        $this->container['workspace'] = isset($data['workspace']) ? $data['workspace'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['clusterType'] = isset($data['clusterType']) ? $data['clusterType'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
        $this->container['scheduleStatus'] = isset($data['scheduleStatus']) ? $data['scheduleStatus'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
        $this->container['orderByAsc'] = isset($data['orderByAsc']) ? $data['orderByAsc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['workspace'] === null) {
            $invalidProperties[] = "'workspace' can't be null";
        }
            if ((mb_strlen($this->container['workspace']) > 128)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be smaller than or equal to 128.";
            }
            if ((mb_strlen($this->container['workspace']) < 1)) {
                $invalidProperties[] = "invalid value for 'workspace', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 99999)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 99999.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getClusterTypeAllowableValues();
                if (!is_null($this->container['clusterType']) && !in_array($this->container['clusterType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'clusterType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 128)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getSyncStatusAllowableValues();
                if (!is_null($this->container['syncStatus']) && !in_array($this->container['syncStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getScheduleStatusAllowableValues();
                if (!is_null($this->container['scheduleStatus']) && !in_array($this->container['scheduleStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'scheduleStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
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
    * Gets workspace
    *  DataArts Studio工作空间ID
    *
    * @return string
    */
    public function getWorkspace()
    {
        return $this->container['workspace'];
    }

    /**
    * Sets workspace
    *
    * @param string $workspace DataArts Studio工作空间ID
    *
    * @return $this
    */
    public function setWorkspace($workspace)
    {
        $this->container['workspace'] = $workspace;
        return $this;
    }

    /**
    * Gets limit
    *  limit
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
    * @param int|null $limit limit
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
    *  offset
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
    * @param int|null $offset offset
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets clusterType
    *  集群类型 * MRS数据源 * DWS数据源
    *
    * @return string|null
    */
    public function getClusterType()
    {
        return $this->container['clusterType'];
    }

    /**
    * Sets clusterType
    *
    * @param string|null $clusterType 集群类型 * MRS数据源 * DWS数据源
    *
    * @return $this
    */
    public function setClusterType($clusterType)
    {
        $this->container['clusterType'] = $clusterType;
        return $this;
    }

    /**
    * Gets clusterName
    *  集群名称
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName 集群名称
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets syncStatus
    *  同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    *
    * @return string|null
    */
    public function getSyncStatus()
    {
        return $this->container['syncStatus'];
    }

    /**
    * Sets syncStatus
    *
    * @param string|null $syncStatus 同步状态 * UNKNOWN 未知 * NOT_SYNC 未同步 * SYNCING 同步中 * SYNC_SUCCESS 同步成功 * SYNC_FAIL 同步失败
    *
    * @return $this
    */
    public function setSyncStatus($syncStatus)
    {
        $this->container['syncStatus'] = $syncStatus;
        return $this;
    }

    /**
    * Gets scheduleStatus
    *  用户同步任务调度状态 * NOT_SCHEDULE 未启用调度 * SCHEDULING 调度中
    *
    * @return string|null
    */
    public function getScheduleStatus()
    {
        return $this->container['scheduleStatus'];
    }

    /**
    * Sets scheduleStatus
    *
    * @param string|null $scheduleStatus 用户同步任务调度状态 * NOT_SCHEDULE 未启用调度 * SCHEDULING 调度中
    *
    * @return $this
    */
    public function setScheduleStatus($scheduleStatus)
    {
        $this->container['scheduleStatus'] = $scheduleStatus;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序字段 * CLUSTER_NAME  按照集群名称排序 * CREATE_TIME   按照创建时间排序 * UPDATE_TIME   按照更新时间排序 * SYNC_TIME     按照同步时间排序
    *
    * @return string|null
    */
    public function getOrderBy()
    {
        return $this->container['orderBy'];
    }

    /**
    * Sets orderBy
    *
    * @param string|null $orderBy 排序字段 * CLUSTER_NAME  按照集群名称排序 * CREATE_TIME   按照创建时间排序 * UPDATE_TIME   按照更新时间排序 * SYNC_TIME     按照同步时间排序
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
        return $this;
    }

    /**
    * Gets orderByAsc
    *  是否升序（仅指定排序参数时有效）。
    *
    * @return bool|null
    */
    public function getOrderByAsc()
    {
        return $this->container['orderByAsc'];
    }

    /**
    * Sets orderByAsc
    *
    * @param bool|null $orderByAsc 是否升序（仅指定排序参数时有效）。
    *
    * @return $this
    */
    public function setOrderByAsc($orderByAsc)
    {
        $this->container['orderByAsc'] = $orderByAsc;
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

