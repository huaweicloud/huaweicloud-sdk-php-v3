<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class SearchApprovalsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'SearchApprovalsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * bizId  业务定义id
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * approvalStatus  查询待审批，已审批
    * approvalStatusDetail  查询待审批，已审批
    * approvalType  业务审核类型
    * bizType  按业务类型查询
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'bizId' => 'int',
            'name' => 'string',
            'createBy' => 'string',
            'approver' => 'string',
            'approvalStatus' => 'string',
            'approvalStatusDetail' => 'string',
            'approvalType' => 'string',
            'bizType' => 'string',
            'beginTime' => 'string',
            'endTime' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * bizId  业务定义id
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * approvalStatus  查询待审批，已审批
    * approvalStatusDetail  查询待审批，已审批
    * approvalType  业务审核类型
    * bizType  按业务类型查询
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'bizId' => 'int64',
        'name' => null,
        'createBy' => null,
        'approver' => null,
        'approvalStatus' => null,
        'approvalStatusDetail' => null,
        'approvalType' => null,
        'bizType' => null,
        'beginTime' => null,
        'endTime' => null,
        'limit' => 'int32',
        'offset' => 'int32'
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
    * bizId  业务定义id
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * approvalStatus  查询待审批，已审批
    * approvalStatusDetail  查询待审批，已审批
    * approvalType  业务审核类型
    * bizType  按业务类型查询
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'bizId' => 'biz_id',
            'name' => 'name',
            'createBy' => 'create_by',
            'approver' => 'approver',
            'approvalStatus' => 'approval_status',
            'approvalStatusDetail' => 'approval_status_detail',
            'approvalType' => 'approval_type',
            'bizType' => 'biz_type',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * bizId  业务定义id
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * approvalStatus  查询待审批，已审批
    * approvalStatusDetail  查询待审批，已审批
    * approvalType  业务审核类型
    * bizType  按业务类型查询
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'bizId' => 'setBizId',
            'name' => 'setName',
            'createBy' => 'setCreateBy',
            'approver' => 'setApprover',
            'approvalStatus' => 'setApprovalStatus',
            'approvalStatusDetail' => 'setApprovalStatusDetail',
            'approvalType' => 'setApprovalType',
            'bizType' => 'setBizType',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * bizId  业务定义id
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * approvalStatus  查询待审批，已审批
    * approvalStatusDetail  查询待审批，已审批
    * approvalType  业务审核类型
    * bizType  按业务类型查询
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'bizId' => 'getBizId',
            'name' => 'getName',
            'createBy' => 'getCreateBy',
            'approver' => 'getApprover',
            'approvalStatus' => 'getApprovalStatus',
            'approvalStatusDetail' => 'getApprovalStatusDetail',
            'approvalType' => 'getApprovalType',
            'bizType' => 'getBizType',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'limit' => 'getLimit',
            'offset' => 'getOffset'
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
    const APPROVAL_STATUS_DEVELOPING = 'DEVELOPING';
    const APPROVAL_STATUS_FINISHED = 'FINISHED';
    const APPROVAL_STATUS_DETAIL_DEVELOPING = 'DEVELOPING';
    const APPROVAL_STATUS_DETAIL_APPROVED = 'APPROVED';
    const APPROVAL_STATUS_DETAIL_REJECT = 'REJECT';
    const APPROVAL_TYPE_PUBLISH = 'PUBLISH';
    const APPROVAL_TYPE_OFFLINE = 'OFFLINE';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApprovalStatusAllowableValues()
    {
        return [
            self::APPROVAL_STATUS_DEVELOPING,
            self::APPROVAL_STATUS_FINISHED,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApprovalStatusDetailAllowableValues()
    {
        return [
            self::APPROVAL_STATUS_DETAIL_DEVELOPING,
            self::APPROVAL_STATUS_DETAIL_APPROVED,
            self::APPROVAL_STATUS_DETAIL_REJECT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getApprovalTypeAllowableValues()
    {
        return [
            self::APPROVAL_TYPE_PUBLISH,
            self::APPROVAL_TYPE_OFFLINE,
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
        $this->container['bizId'] = isset($data['bizId']) ? $data['bizId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['approvalStatus'] = isset($data['approvalStatus']) ? $data['approvalStatus'] : null;
        $this->container['approvalStatusDetail'] = isset($data['approvalStatusDetail']) ? $data['approvalStatusDetail'] : null;
        $this->container['approvalType'] = isset($data['approvalType']) ? $data['approvalType'] : null;
        $this->container['bizType'] = isset($data['bizType']) ? $data['bizType'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
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
            $allowedValues = $this->getApprovalStatusAllowableValues();
                if (!is_null($this->container['approvalStatus']) && !in_array($this->container['approvalStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'approvalStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApprovalStatusDetailAllowableValues();
                if (!is_null($this->container['approvalStatusDetail']) && !in_array($this->container['approvalStatusDetail'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'approvalStatusDetail', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getApprovalTypeAllowableValues();
                if (!is_null($this->container['approvalType']) && !in_array($this->container['approvalType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'approvalType', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
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
    * Gets bizId
    *  业务定义id
    *
    * @return int|null
    */
    public function getBizId()
    {
        return $this->container['bizId'];
    }

    /**
    * Sets bizId
    *
    * @param int|null $bizId 业务定义id
    *
    * @return $this
    */
    public function setBizId($bizId)
    {
        $this->container['bizId'] = $bizId;
        return $this;
    }

    /**
    * Gets name
    *  按名称或编码模糊查询
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
    * @param string|null $name 按名称或编码模糊查询
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets createBy
    *  按创建者查询
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
    * @param string|null $createBy 按创建者查询
    *
    * @return $this
    */
    public function setCreateBy($createBy)
    {
        $this->container['createBy'] = $createBy;
        return $this;
    }

    /**
    * Gets approver
    *  按审核人查询
    *
    * @return string|null
    */
    public function getApprover()
    {
        return $this->container['approver'];
    }

    /**
    * Sets approver
    *
    * @param string|null $approver 按审核人查询
    *
    * @return $this
    */
    public function setApprover($approver)
    {
        $this->container['approver'] = $approver;
        return $this;
    }

    /**
    * Gets approvalStatus
    *  查询待审批，已审批
    *
    * @return string|null
    */
    public function getApprovalStatus()
    {
        return $this->container['approvalStatus'];
    }

    /**
    * Sets approvalStatus
    *
    * @param string|null $approvalStatus 查询待审批，已审批
    *
    * @return $this
    */
    public function setApprovalStatus($approvalStatus)
    {
        $this->container['approvalStatus'] = $approvalStatus;
        return $this;
    }

    /**
    * Gets approvalStatusDetail
    *  查询待审批，已审批
    *
    * @return string|null
    */
    public function getApprovalStatusDetail()
    {
        return $this->container['approvalStatusDetail'];
    }

    /**
    * Sets approvalStatusDetail
    *
    * @param string|null $approvalStatusDetail 查询待审批，已审批
    *
    * @return $this
    */
    public function setApprovalStatusDetail($approvalStatusDetail)
    {
        $this->container['approvalStatusDetail'] = $approvalStatusDetail;
        return $this;
    }

    /**
    * Gets approvalType
    *  业务审核类型
    *
    * @return string|null
    */
    public function getApprovalType()
    {
        return $this->container['approvalType'];
    }

    /**
    * Sets approvalType
    *
    * @param string|null $approvalType 业务审核类型
    *
    * @return $this
    */
    public function setApprovalType($approvalType)
    {
        $this->container['approvalType'] = $approvalType;
        return $this;
    }

    /**
    * Gets bizType
    *  按业务类型查询
    *
    * @return string|null
    */
    public function getBizType()
    {
        return $this->container['bizType'];
    }

    /**
    * Sets bizType
    *
    * @param string|null $bizType 按业务类型查询
    *
    * @return $this
    */
    public function setBizType($bizType)
    {
        $this->container['bizType'] = $bizType;
        return $this;
    }

    /**
    * Gets beginTime
    *  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    *
    * @return string|null
    */
    public function getBeginTime()
    {
        return $this->container['beginTime'];
    }

    /**
    * Sets beginTime
    *
    * @param string|null $beginTime 时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    *
    * @return $this
    */
    public function setBeginTime($beginTime)
    {
        $this->container['beginTime'] = $beginTime;
        return $this;
    }

    /**
    * Gets endTime
    *  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
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
    * @param string|null $endTime 时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
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
    *  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
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
    * @param int|null $limit 查询条数，即查询Y条数据。默认值50，取值范围[1,100]
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
    *  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
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
    * @param int|null $offset 查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
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

