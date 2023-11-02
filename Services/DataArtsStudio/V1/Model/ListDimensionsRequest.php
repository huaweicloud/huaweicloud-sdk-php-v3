<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDimensionsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDimensionsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * l2Id  主题域l2 id
    * derivativeIds  依据复合指标id列表查维度
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * factLogicId  事实表id
    * dimensionType  维度类型
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    * bizCatalogId  所属的业务分层的id
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'name' => 'string',
            'createBy' => 'string',
            'approver' => 'string',
            'status' => 'string',
            'l2Id' => 'int',
            'derivativeIds' => 'int[]',
            'beginTime' => 'string',
            'endTime' => 'string',
            'factLogicId' => 'int',
            'dimensionType' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'bizCatalogId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * l2Id  主题域l2 id
    * derivativeIds  依据复合指标id列表查维度
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * factLogicId  事实表id
    * dimensionType  维度类型
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    * bizCatalogId  所属的业务分层的id
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'name' => null,
        'createBy' => null,
        'approver' => null,
        'status' => null,
        'l2Id' => 'int64',
        'derivativeIds' => 'int64',
        'beginTime' => null,
        'endTime' => null,
        'factLogicId' => 'int64',
        'dimensionType' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'bizCatalogId' => null
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
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * l2Id  主题域l2 id
    * derivativeIds  依据复合指标id列表查维度
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * factLogicId  事实表id
    * dimensionType  维度类型
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    * bizCatalogId  所属的业务分层的id
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'name' => 'name',
            'createBy' => 'create_by',
            'approver' => 'approver',
            'status' => 'status',
            'l2Id' => 'l2_id',
            'derivativeIds' => 'derivative_ids',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'factLogicId' => 'fact_logic_id',
            'dimensionType' => 'dimension_type',
            'limit' => 'limit',
            'offset' => 'offset',
            'bizCatalogId' => 'biz_catalog_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * l2Id  主题域l2 id
    * derivativeIds  依据复合指标id列表查维度
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * factLogicId  事实表id
    * dimensionType  维度类型
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    * bizCatalogId  所属的业务分层的id
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'name' => 'setName',
            'createBy' => 'setCreateBy',
            'approver' => 'setApprover',
            'status' => 'setStatus',
            'l2Id' => 'setL2Id',
            'derivativeIds' => 'setDerivativeIds',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'factLogicId' => 'setFactLogicId',
            'dimensionType' => 'setDimensionType',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'bizCatalogId' => 'setBizCatalogId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * l2Id  主题域l2 id
    * derivativeIds  依据复合指标id列表查维度
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * factLogicId  事实表id
    * dimensionType  维度类型
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    * bizCatalogId  所属的业务分层的id
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'name' => 'getName',
            'createBy' => 'getCreateBy',
            'approver' => 'getApprover',
            'status' => 'getStatus',
            'l2Id' => 'getL2Id',
            'derivativeIds' => 'getDerivativeIds',
            'beginTime' => 'getBeginTime',
            'endTime' => 'getEndTime',
            'factLogicId' => 'getFactLogicId',
            'dimensionType' => 'getDimensionType',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'bizCatalogId' => 'getBizCatalogId'
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
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_PUBLISH_DEVELOPING = 'PUBLISH_DEVELOPING';
    const STATUS_PUBLISHED = 'PUBLISHED';
    const STATUS_OFFLINE_DEVELOPING = 'OFFLINE_DEVELOPING';
    const STATUS_OFFLINE = 'OFFLINE';
    const STATUS_REJECT = 'REJECT';
    const DIMENSION_TYPE_COMMON = 'COMMON';
    const DIMENSION_TYPE_LOOKUP = 'LOOKUP';
    const DIMENSION_TYPE_HIERARCHIES = 'HIERARCHIES';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_DRAFT,
            self::STATUS_PUBLISH_DEVELOPING,
            self::STATUS_PUBLISHED,
            self::STATUS_OFFLINE_DEVELOPING,
            self::STATUS_OFFLINE,
            self::STATUS_REJECT,
        ];
    }

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getDimensionTypeAllowableValues()
    {
        return [
            self::DIMENSION_TYPE_COMMON,
            self::DIMENSION_TYPE_LOOKUP,
            self::DIMENSION_TYPE_HIERARCHIES,
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['createBy'] = isset($data['createBy']) ? $data['createBy'] : null;
        $this->container['approver'] = isset($data['approver']) ? $data['approver'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['l2Id'] = isset($data['l2Id']) ? $data['l2Id'] : null;
        $this->container['derivativeIds'] = isset($data['derivativeIds']) ? $data['derivativeIds'] : null;
        $this->container['beginTime'] = isset($data['beginTime']) ? $data['beginTime'] : null;
        $this->container['endTime'] = isset($data['endTime']) ? $data['endTime'] : null;
        $this->container['factLogicId'] = isset($data['factLogicId']) ? $data['factLogicId'] : null;
        $this->container['dimensionType'] = isset($data['dimensionType']) ? $data['dimensionType'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['bizCatalogId'] = isset($data['bizCatalogId']) ? $data['bizCatalogId'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            $allowedValues = $this->getDimensionTypeAllowableValues();
                if (!is_null($this->container['dimensionType']) && !in_array($this->container['dimensionType'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'dimensionType', must be one of '%s'",
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
    * Gets status
    *  业务状态
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
    * @param string|null $status 业务状态
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets l2Id
    *  主题域l2 id
    *
    * @return int|null
    */
    public function getL2Id()
    {
        return $this->container['l2Id'];
    }

    /**
    * Sets l2Id
    *
    * @param int|null $l2Id 主题域l2 id
    *
    * @return $this
    */
    public function setL2Id($l2Id)
    {
        $this->container['l2Id'] = $l2Id;
        return $this;
    }

    /**
    * Gets derivativeIds
    *  依据复合指标id列表查维度
    *
    * @return int[]|null
    */
    public function getDerivativeIds()
    {
        return $this->container['derivativeIds'];
    }

    /**
    * Sets derivativeIds
    *
    * @param int[]|null $derivativeIds 依据复合指标id列表查维度
    *
    * @return $this
    */
    public function setDerivativeIds($derivativeIds)
    {
        $this->container['derivativeIds'] = $derivativeIds;
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
    * Gets factLogicId
    *  事实表id
    *
    * @return int|null
    */
    public function getFactLogicId()
    {
        return $this->container['factLogicId'];
    }

    /**
    * Sets factLogicId
    *
    * @param int|null $factLogicId 事实表id
    *
    * @return $this
    */
    public function setFactLogicId($factLogicId)
    {
        $this->container['factLogicId'] = $factLogicId;
        return $this;
    }

    /**
    * Gets dimensionType
    *  维度类型
    *
    * @return string|null
    */
    public function getDimensionType()
    {
        return $this->container['dimensionType'];
    }

    /**
    * Sets dimensionType
    *
    * @param string|null $dimensionType 维度类型
    *
    * @return $this
    */
    public function setDimensionType($dimensionType)
    {
        $this->container['dimensionType'] = $dimensionType;
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
    * Gets bizCatalogId
    *  所属的业务分层的id
    *
    * @return string|null
    */
    public function getBizCatalogId()
    {
        return $this->container['bizCatalogId'];
    }

    /**
    * Sets bizCatalogId
    *
    * @param string|null $bizCatalogId 所属的业务分层的id
    *
    * @return $this
    */
    public function setBizCatalogId($bizCatalogId)
    {
        $this->container['bizCatalogId'] = $bizCatalogId;
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

