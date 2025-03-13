<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListSecurityApprovalsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListSecurityApprovalsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * proposerName  申请人名称
    * approvalId  工单id
    * workspaceId  工作空间id
    * statusList  工单状态
    * applicationStartTime  申请开始时间
    * applicationEndTime  申请结束时间
    * orderByDesc  升降序
    * orderBy  排序参数, START_TIME,END_TIME
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'proposerName' => 'string',
            'approvalId' => 'string',
            'workspaceId' => 'string',
            'statusList' => 'int[]',
            'applicationStartTime' => 'int',
            'applicationEndTime' => 'int',
            'orderByDesc' => 'bool',
            'orderBy' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * proposerName  申请人名称
    * approvalId  工单id
    * workspaceId  工作空间id
    * statusList  工单状态
    * applicationStartTime  申请开始时间
    * applicationEndTime  申请结束时间
    * orderByDesc  升降序
    * orderBy  排序参数, START_TIME,END_TIME
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'limit' => null,
        'offset' => null,
        'proposerName' => null,
        'approvalId' => null,
        'workspaceId' => null,
        'statusList' => null,
        'applicationStartTime' => 'int64',
        'applicationEndTime' => 'int64',
        'orderByDesc' => null,
        'orderBy' => null
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
    * proposerName  申请人名称
    * approvalId  工单id
    * workspaceId  工作空间id
    * statusList  工单状态
    * applicationStartTime  申请开始时间
    * applicationEndTime  申请结束时间
    * orderByDesc  升降序
    * orderBy  排序参数, START_TIME,END_TIME
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'limit' => 'limit',
            'offset' => 'offset',
            'proposerName' => 'proposer_name',
            'approvalId' => 'approval_id',
            'workspaceId' => 'workspace_id',
            'statusList' => 'status_list',
            'applicationStartTime' => 'application_start_time',
            'applicationEndTime' => 'application_end_time',
            'orderByDesc' => 'order_by_desc',
            'orderBy' => 'order_by'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * proposerName  申请人名称
    * approvalId  工单id
    * workspaceId  工作空间id
    * statusList  工单状态
    * applicationStartTime  申请开始时间
    * applicationEndTime  申请结束时间
    * orderByDesc  升降序
    * orderBy  排序参数, START_TIME,END_TIME
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'proposerName' => 'setProposerName',
            'approvalId' => 'setApprovalId',
            'workspaceId' => 'setWorkspaceId',
            'statusList' => 'setStatusList',
            'applicationStartTime' => 'setApplicationStartTime',
            'applicationEndTime' => 'setApplicationEndTime',
            'orderByDesc' => 'setOrderByDesc',
            'orderBy' => 'setOrderBy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * limit  limit
    * offset  offset
    * proposerName  申请人名称
    * approvalId  工单id
    * workspaceId  工作空间id
    * statusList  工单状态
    * applicationStartTime  申请开始时间
    * applicationEndTime  申请结束时间
    * orderByDesc  升降序
    * orderBy  排序参数, START_TIME,END_TIME
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'proposerName' => 'getProposerName',
            'approvalId' => 'getApprovalId',
            'workspaceId' => 'getWorkspaceId',
            'statusList' => 'getStatusList',
            'applicationStartTime' => 'getApplicationStartTime',
            'applicationEndTime' => 'getApplicationEndTime',
            'orderByDesc' => 'getOrderByDesc',
            'orderBy' => 'getOrderBy'
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
    const ORDER_BY_START_TIME = 'START_TIME';
    const ORDER_BY_END_TIME = 'END_TIME';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getOrderByAllowableValues()
    {
        return [
            self::ORDER_BY_START_TIME,
            self::ORDER_BY_END_TIME,
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
        $this->container['proposerName'] = isset($data['proposerName']) ? $data['proposerName'] : null;
        $this->container['approvalId'] = isset($data['approvalId']) ? $data['approvalId'] : null;
        $this->container['workspaceId'] = isset($data['workspaceId']) ? $data['workspaceId'] : null;
        $this->container['statusList'] = isset($data['statusList']) ? $data['statusList'] : null;
        $this->container['applicationStartTime'] = isset($data['applicationStartTime']) ? $data['applicationStartTime'] : null;
        $this->container['applicationEndTime'] = isset($data['applicationEndTime']) ? $data['applicationEndTime'] : null;
        $this->container['orderByDesc'] = isset($data['orderByDesc']) ? $data['orderByDesc'] : null;
        $this->container['orderBy'] = isset($data['orderBy']) ? $data['orderBy'] : null;
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
            if (!is_null($this->container['proposerName']) && (mb_strlen($this->container['proposerName']) > 256)) {
                $invalidProperties[] = "invalid value for 'proposerName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['proposerName']) && (mb_strlen($this->container['proposerName']) < 0)) {
                $invalidProperties[] = "invalid value for 'proposerName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['approvalId']) && (mb_strlen($this->container['approvalId']) > 256)) {
                $invalidProperties[] = "invalid value for 'approvalId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['approvalId']) && (mb_strlen($this->container['approvalId']) < 0)) {
                $invalidProperties[] = "invalid value for 'approvalId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) > 256)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['workspaceId']) && (mb_strlen($this->container['workspaceId']) < 0)) {
                $invalidProperties[] = "invalid value for 'workspaceId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applicationStartTime']) && ($this->container['applicationStartTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'applicationStartTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['applicationStartTime']) && ($this->container['applicationStartTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'applicationStartTime', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['applicationEndTime']) && ($this->container['applicationEndTime'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'applicationEndTime', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['applicationEndTime']) && ($this->container['applicationEndTime'] < 0)) {
                $invalidProperties[] = "invalid value for 'applicationEndTime', must be bigger than or equal to 0.";
            }
            $allowedValues = $this->getOrderByAllowableValues();
                if (!is_null($this->container['orderBy']) && !in_array($this->container['orderBy'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'orderBy', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) > 256)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['orderBy']) && (mb_strlen($this->container['orderBy']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderBy', the character length must be bigger than or equal to 0.";
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
    * Gets proposerName
    *  申请人名称
    *
    * @return string|null
    */
    public function getProposerName()
    {
        return $this->container['proposerName'];
    }

    /**
    * Sets proposerName
    *
    * @param string|null $proposerName 申请人名称
    *
    * @return $this
    */
    public function setProposerName($proposerName)
    {
        $this->container['proposerName'] = $proposerName;
        return $this;
    }

    /**
    * Gets approvalId
    *  工单id
    *
    * @return string|null
    */
    public function getApprovalId()
    {
        return $this->container['approvalId'];
    }

    /**
    * Sets approvalId
    *
    * @param string|null $approvalId 工单id
    *
    * @return $this
    */
    public function setApprovalId($approvalId)
    {
        $this->container['approvalId'] = $approvalId;
        return $this;
    }

    /**
    * Gets workspaceId
    *  工作空间id
    *
    * @return string|null
    */
    public function getWorkspaceId()
    {
        return $this->container['workspaceId'];
    }

    /**
    * Sets workspaceId
    *
    * @param string|null $workspaceId 工作空间id
    *
    * @return $this
    */
    public function setWorkspaceId($workspaceId)
    {
        $this->container['workspaceId'] = $workspaceId;
        return $this;
    }

    /**
    * Gets statusList
    *  工单状态
    *
    * @return int[]|null
    */
    public function getStatusList()
    {
        return $this->container['statusList'];
    }

    /**
    * Sets statusList
    *
    * @param int[]|null $statusList 工单状态
    *
    * @return $this
    */
    public function setStatusList($statusList)
    {
        $this->container['statusList'] = $statusList;
        return $this;
    }

    /**
    * Gets applicationStartTime
    *  申请开始时间
    *
    * @return int|null
    */
    public function getApplicationStartTime()
    {
        return $this->container['applicationStartTime'];
    }

    /**
    * Sets applicationStartTime
    *
    * @param int|null $applicationStartTime 申请开始时间
    *
    * @return $this
    */
    public function setApplicationStartTime($applicationStartTime)
    {
        $this->container['applicationStartTime'] = $applicationStartTime;
        return $this;
    }

    /**
    * Gets applicationEndTime
    *  申请结束时间
    *
    * @return int|null
    */
    public function getApplicationEndTime()
    {
        return $this->container['applicationEndTime'];
    }

    /**
    * Sets applicationEndTime
    *
    * @param int|null $applicationEndTime 申请结束时间
    *
    * @return $this
    */
    public function setApplicationEndTime($applicationEndTime)
    {
        $this->container['applicationEndTime'] = $applicationEndTime;
        return $this;
    }

    /**
    * Gets orderByDesc
    *  升降序
    *
    * @return bool|null
    */
    public function getOrderByDesc()
    {
        return $this->container['orderByDesc'];
    }

    /**
    * Sets orderByDesc
    *
    * @param bool|null $orderByDesc 升降序
    *
    * @return $this
    */
    public function setOrderByDesc($orderByDesc)
    {
        $this->container['orderByDesc'] = $orderByDesc;
        return $this;
    }

    /**
    * Gets orderBy
    *  排序参数, START_TIME,END_TIME
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
    * @param string|null $orderBy 排序参数, START_TIME,END_TIME
    *
    * @return $this
    */
    public function setOrderBy($orderBy)
    {
        $this->container['orderBy'] = $orderBy;
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

