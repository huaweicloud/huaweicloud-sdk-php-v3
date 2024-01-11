<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityPermissionSetsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityPermissionSetsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * name  名称
    * parentId  父权限集id
    * typeFilter  权限集类型过滤,TOP_PERMISSION_SET,SUB_PERMISSION_SET,ALL_PERMISSION_SET
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型,USER,USER_GROUP
    * datasourceType  数据源类型,HIVE
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, NAME,CREATE_TIME,UPDATE_TIME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'name' => 'string',
            'parentId' => 'string',
            'typeFilter' => 'string',
            'managerId' => 'string',
            'managerName' => 'string',
            'managerType' => 'string',
            'datasourceType' => 'string',
            'syncStatus' => 'string',
            'orderBy' => 'string',
            'orderByAsc' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * name  名称
    * parentId  父权限集id
    * typeFilter  权限集类型过滤,TOP_PERMISSION_SET,SUB_PERMISSION_SET,ALL_PERMISSION_SET
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型,USER,USER_GROUP
    * datasourceType  数据源类型,HIVE
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, NAME,CREATE_TIME,UPDATE_TIME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'limit' => null,
        'offset' => null,
        'name' => null,
        'parentId' => null,
        'typeFilter' => null,
        'managerId' => null,
        'managerName' => null,
        'managerType' => null,
        'datasourceType' => null,
        'syncStatus' => null,
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
    * name  名称
    * parentId  父权限集id
    * typeFilter  权限集类型过滤,TOP_PERMISSION_SET,SUB_PERMISSION_SET,ALL_PERMISSION_SET
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型,USER,USER_GROUP
    * datasourceType  数据源类型,HIVE
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, NAME,CREATE_TIME,UPDATE_TIME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'limit' => 'limit',
            'offset' => 'offset',
            'name' => 'name',
            'parentId' => 'parent_id',
            'typeFilter' => 'type_filter',
            'managerId' => 'manager_id',
            'managerName' => 'manager_name',
            'managerType' => 'manager_type',
            'datasourceType' => 'datasource_type',
            'syncStatus' => 'sync_status',
            'orderBy' => 'order_by',
            'orderByAsc' => 'order_by_asc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * name  名称
    * parentId  父权限集id
    * typeFilter  权限集类型过滤,TOP_PERMISSION_SET,SUB_PERMISSION_SET,ALL_PERMISSION_SET
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型,USER,USER_GROUP
    * datasourceType  数据源类型,HIVE
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, NAME,CREATE_TIME,UPDATE_TIME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'name' => 'setName',
            'parentId' => 'setParentId',
            'typeFilter' => 'setTypeFilter',
            'managerId' => 'setManagerId',
            'managerName' => 'setManagerName',
            'managerType' => 'setManagerType',
            'datasourceType' => 'setDatasourceType',
            'syncStatus' => 'setSyncStatus',
            'orderBy' => 'setOrderBy',
            'orderByAsc' => 'setOrderByAsc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * name  名称
    * parentId  父权限集id
    * typeFilter  权限集类型过滤,TOP_PERMISSION_SET,SUB_PERMISSION_SET,ALL_PERMISSION_SET
    * managerId  管理员id
    * managerName  管理员名称
    * managerType  管理员类型,USER,USER_GROUP
    * datasourceType  数据源类型,HIVE
    * syncStatus  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    * orderBy  排序参数, NAME,CREATE_TIME,UPDATE_TIME
    * orderByAsc  是否升序（仅指定排序参数时有效）
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'name' => 'getName',
            'parentId' => 'getParentId',
            'typeFilter' => 'getTypeFilter',
            'managerId' => 'getManagerId',
            'managerName' => 'getManagerName',
            'managerType' => 'getManagerType',
            'datasourceType' => 'getDatasourceType',
            'syncStatus' => 'getSyncStatus',
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
    const TYPE_FILTER_TOP_PERMISSION_SET = 'TOP_PERMISSION_SET';
    const TYPE_FILTER_SUB_PERMISSION_SET = 'SUB_PERMISSION_SET';
    const TYPE_FILTER_ALL_PERMISSION_SET = 'ALL_PERMISSION_SET';
    const MANAGER_TYPE_USER = 'USER';
    const MANAGER_TYPE_USER_GROUP = 'USER_GROUP';
    const DATASOURCE_TYPE_HIVE = 'HIVE';
    const SYNC_STATUS_UNKNOWN = 'UNKNOWN';
    const SYNC_STATUS_NOT_SYNC = 'NOT_SYNC';
    const SYNC_STATUS_SYNCING = 'SYNCING';
    const SYNC_STATUS_SYNC_SUCCESS = 'SYNC_SUCCESS';
    const SYNC_STATUS_SYNC_FAIL = 'SYNC_FAIL';
    const ORDER_BY_NAME = 'NAME';
    const ORDER_BY_CREATE_TIME = 'CREATE_TIME';
    const ORDER_BY_UPDATE_TIME = 'UPDATE_TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getTypeFilterAllowableValues()
    {
        return [
            self::TYPE_FILTER_TOP_PERMISSION_SET,
            self::TYPE_FILTER_SUB_PERMISSION_SET,
            self::TYPE_FILTER_ALL_PERMISSION_SET,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getManagerTypeAllowableValues()
    {
        return [
            self::MANAGER_TYPE_USER,
            self::MANAGER_TYPE_USER_GROUP,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDatasourceTypeAllowableValues()
    {
        return [
            self::DATASOURCE_TYPE_HIVE,
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
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_NAME,
            self::ORDER_BY_CREATE_TIME,
            self::ORDER_BY_UPDATE_TIME,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['parentId'] = isset($data['parentId']) ? $data['parentId'] : null;
        $this->container['typeFilter'] = isset($data['typeFilter']) ? $data['typeFilter'] : null;
        $this->container['managerId'] = isset($data['managerId']) ? $data['managerId'] : null;
        $this->container['managerName'] = isset($data['managerName']) ? $data['managerName'] : null;
        $this->container['managerType'] = isset($data['managerType']) ? $data['managerType'] : null;
        $this->container['datasourceType'] = isset($data['datasourceType']) ? $data['datasourceType'] : null;
        $this->container['syncStatus'] = isset($data['syncStatus']) ? $data['syncStatus'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 128)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) > 128)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['parentId']) && (mb_strlen($this->container['parentId']) < 1)) {
                $invalidProperties[] = "invalid value for 'parentId', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getTypeFilterAllowableValues();
                if (!is_null($this->container['typeFilter']) && !in_array($this->container['typeFilter'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'typeFilter', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['managerId']) && (mb_strlen($this->container['managerId']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerId']) && (mb_strlen($this->container['managerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['managerName']) && (mb_strlen($this->container['managerName']) > 128)) {
                $invalidProperties[] = "invalid value for 'managerName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['managerName']) && (mb_strlen($this->container['managerName']) < 1)) {
                $invalidProperties[] = "invalid value for 'managerName', the character length must be bigger than or equal to 1.";
            }
            $allowedValues = $this->getManagerTypeAllowableValues();
                if (!is_null($this->container['managerType']) && !in_array($this->container['managerType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'managerType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDatasourceTypeAllowableValues();
                if (!is_null($this->container['datasourceType']) && !in_array($this->container['datasourceType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'datasourceType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getSyncStatusAllowableValues();
                if (!is_null($this->container['syncStatus']) && !in_array($this->container['syncStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'syncStatus', must be one of '%s'",
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
    * Gets name
    *  名称
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
    * @param string|null $name 名称
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets parentId
    *  父权限集id
    *
    * @return string|null
    */
    public function getParentId()
    {
        return $this->container['parentId'];
    }

    /**
    * Sets parentId
    *
    * @param string|null $parentId 父权限集id
    *
    * @return $this
    */
    public function setParentId($parentId)
    {
        $this->container['parentId'] = $parentId;
        return $this;
    }

    /**
    * Gets typeFilter
    *  权限集类型过滤,TOP_PERMISSION_SET,SUB_PERMISSION_SET,ALL_PERMISSION_SET
    *
    * @return string|null
    */
    public function getTypeFilter()
    {
        return $this->container['typeFilter'];
    }

    /**
    * Sets typeFilter
    *
    * @param string|null $typeFilter 权限集类型过滤,TOP_PERMISSION_SET,SUB_PERMISSION_SET,ALL_PERMISSION_SET
    *
    * @return $this
    */
    public function setTypeFilter($typeFilter)
    {
        $this->container['typeFilter'] = $typeFilter;
        return $this;
    }

    /**
    * Gets managerId
    *  管理员id
    *
    * @return string|null
    */
    public function getManagerId()
    {
        return $this->container['managerId'];
    }

    /**
    * Sets managerId
    *
    * @param string|null $managerId 管理员id
    *
    * @return $this
    */
    public function setManagerId($managerId)
    {
        $this->container['managerId'] = $managerId;
        return $this;
    }

    /**
    * Gets managerName
    *  管理员名称
    *
    * @return string|null
    */
    public function getManagerName()
    {
        return $this->container['managerName'];
    }

    /**
    * Sets managerName
    *
    * @param string|null $managerName 管理员名称
    *
    * @return $this
    */
    public function setManagerName($managerName)
    {
        $this->container['managerName'] = $managerName;
        return $this;
    }

    /**
    * Gets managerType
    *  管理员类型,USER,USER_GROUP
    *
    * @return string|null
    */
    public function getManagerType()
    {
        return $this->container['managerType'];
    }

    /**
    * Sets managerType
    *
    * @param string|null $managerType 管理员类型,USER,USER_GROUP
    *
    * @return $this
    */
    public function setManagerType($managerType)
    {
        $this->container['managerType'] = $managerType;
        return $this;
    }

    /**
    * Gets datasourceType
    *  数据源类型,HIVE
    *
    * @return string|null
    */
    public function getDatasourceType()
    {
        return $this->container['datasourceType'];
    }

    /**
    * Sets datasourceType
    *
    * @param string|null $datasourceType 数据源类型,HIVE
    *
    * @return $this
    */
    public function setDatasourceType($datasourceType)
    {
        $this->container['datasourceType'] = $datasourceType;
        return $this;
    }

    /**
    * Gets syncStatus
    *  同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
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
    * @param string|null $syncStatus 同步状态,UNKNOWN,NOT_SYNC,SYNCING,SYNC_SUCCESS,SYNC_FAIL
    *
    * @return $this
    */
    public function setSyncStatus($syncStatus)
    {
        $this->container['syncStatus'] = $syncStatus;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序参数, NAME,CREATE_TIME,UPDATE_TIME
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
    * @param string|null $orderBy 排序参数, NAME,CREATE_TIME,UPDATE_TIME
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
    *  是否升序（仅指定排序参数时有效）
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
    * @param bool|null $orderByAsc 是否升序（仅指定排序参数时有效）
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

