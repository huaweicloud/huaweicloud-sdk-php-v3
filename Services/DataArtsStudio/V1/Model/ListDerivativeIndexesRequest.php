<?php

namespace HuaweiCloud\SDK\DataArtsStudio\V1\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListDerivativeIndexesRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListDerivativeIndexesRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * dimensionId  依据维度id查维度属性
    * dimensionGroup  依据维度颗粒度查维度属性
    * atomicIndexId  依据原子指标id查维度属性
    * allMetrics  是否查询复合指标
    * dwType  数据连接类型
    * l3Id  业务对象l3 id
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'workspace' => 'string',
            'name' => 'string',
            'createBy' => 'string',
            'approver' => 'string',
            'status' => 'string',
            'dimensionId' => 'int',
            'dimensionGroup' => 'string',
            'atomicIndexId' => 'int',
            'allMetrics' => 'bool',
            'dwType' => 'string',
            'l3Id' => 'int',
            'beginTime' => 'string',
            'endTime' => 'string',
            'limit' => 'int',
            'offset' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * workspace  DataArts Studio工作空间ID
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * dimensionId  依据维度id查维度属性
    * dimensionGroup  依据维度颗粒度查维度属性
    * atomicIndexId  依据原子指标id查维度属性
    * allMetrics  是否查询复合指标
    * dwType  数据连接类型
    * l3Id  业务对象l3 id
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'workspace' => null,
        'name' => null,
        'createBy' => null,
        'approver' => null,
        'status' => null,
        'dimensionId' => 'int64',
        'dimensionGroup' => null,
        'atomicIndexId' => 'int64',
        'allMetrics' => null,
        'dwType' => null,
        'l3Id' => 'int64',
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
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * dimensionId  依据维度id查维度属性
    * dimensionGroup  依据维度颗粒度查维度属性
    * atomicIndexId  依据原子指标id查维度属性
    * allMetrics  是否查询复合指标
    * dwType  数据连接类型
    * l3Id  业务对象l3 id
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'workspace' => 'workspace',
            'name' => 'name',
            'createBy' => 'create_by',
            'approver' => 'approver',
            'status' => 'status',
            'dimensionId' => 'dimension_id',
            'dimensionGroup' => 'dimension_group',
            'atomicIndexId' => 'atomic_index_id',
            'allMetrics' => 'all_metrics',
            'dwType' => 'dw_type',
            'l3Id' => 'l3_id',
            'beginTime' => 'begin_time',
            'endTime' => 'end_time',
            'limit' => 'limit',
            'offset' => 'offset'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * workspace  DataArts Studio工作空间ID
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * dimensionId  依据维度id查维度属性
    * dimensionGroup  依据维度颗粒度查维度属性
    * atomicIndexId  依据原子指标id查维度属性
    * allMetrics  是否查询复合指标
    * dwType  数据连接类型
    * l3Id  业务对象l3 id
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $setters = [
            'workspace' => 'setWorkspace',
            'name' => 'setName',
            'createBy' => 'setCreateBy',
            'approver' => 'setApprover',
            'status' => 'setStatus',
            'dimensionId' => 'setDimensionId',
            'dimensionGroup' => 'setDimensionGroup',
            'atomicIndexId' => 'setAtomicIndexId',
            'allMetrics' => 'setAllMetrics',
            'dwType' => 'setDwType',
            'l3Id' => 'setL3Id',
            'beginTime' => 'setBeginTime',
            'endTime' => 'setEndTime',
            'limit' => 'setLimit',
            'offset' => 'setOffset'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * workspace  DataArts Studio工作空间ID
    * name  按名称或编码模糊查询
    * createBy  按创建者查询
    * approver  按审核人查询
    * status  业务状态
    * dimensionId  依据维度id查维度属性
    * dimensionGroup  依据维度颗粒度查维度属性
    * atomicIndexId  依据原子指标id查维度属性
    * allMetrics  是否查询复合指标
    * dwType  数据连接类型
    * l3Id  业务对象l3 id
    * beginTime  时间过滤左边界,与end_time一起使用,只支持时间范围过滤,单边过滤无效
    * endTime  时间过滤右边界,与begin_time一起使用只支持时间范围过滤,单边过滤无效
    * limit  查询条数，即查询Y条数据。默认值50，取值范围[1,100]
    * offset  查询起始坐标，即跳过X条数据，仅支持0或limit的整数倍，不满足则向下取整。默认值0
    *
    * @var string[]
    */
    protected static $getters = [
            'workspace' => 'getWorkspace',
            'name' => 'getName',
            'createBy' => 'getCreateBy',
            'approver' => 'getApprover',
            'status' => 'getStatus',
            'dimensionId' => 'getDimensionId',
            'dimensionGroup' => 'getDimensionGroup',
            'atomicIndexId' => 'getAtomicIndexId',
            'allMetrics' => 'getAllMetrics',
            'dwType' => 'getDwType',
            'l3Id' => 'getL3Id',
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
    const STATUS_DRAFT = 'DRAFT';
    const STATUS_PUBLISH_DEVELOPING = 'PUBLISH_DEVELOPING';
    const STATUS_PUBLISHED = 'PUBLISHED';
    const STATUS_OFFLINE_DEVELOPING = 'OFFLINE_DEVELOPING';
    const STATUS_OFFLINE = 'OFFLINE';
    const STATUS_REJECT = 'REJECT';
    

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
        $this->container['dimensionId'] = isset($data['dimensionId']) ? $data['dimensionId'] : null;
        $this->container['dimensionGroup'] = isset($data['dimensionGroup']) ? $data['dimensionGroup'] : null;
        $this->container['atomicIndexId'] = isset($data['atomicIndexId']) ? $data['atomicIndexId'] : null;
        $this->container['allMetrics'] = isset($data['allMetrics']) ? $data['allMetrics'] : null;
        $this->container['dwType'] = isset($data['dwType']) ? $data['dwType'] : null;
        $this->container['l3Id'] = isset($data['l3Id']) ? $data['l3Id'] : null;
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
            $allowedValues = $this->getStatusAllowableValues();
                if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
    * Gets dimensionId
    *  依据维度id查维度属性
    *
    * @return int|null
    */
    public function getDimensionId()
    {
        return $this->container['dimensionId'];
    }

    /**
    * Sets dimensionId
    *
    * @param int|null $dimensionId 依据维度id查维度属性
    *
    * @return $this
    */
    public function setDimensionId($dimensionId)
    {
        $this->container['dimensionId'] = $dimensionId;
        return $this;
    }

    /**
    * Gets dimensionGroup
    *  依据维度颗粒度查维度属性
    *
    * @return string|null
    */
    public function getDimensionGroup()
    {
        return $this->container['dimensionGroup'];
    }

    /**
    * Sets dimensionGroup
    *
    * @param string|null $dimensionGroup 依据维度颗粒度查维度属性
    *
    * @return $this
    */
    public function setDimensionGroup($dimensionGroup)
    {
        $this->container['dimensionGroup'] = $dimensionGroup;
        return $this;
    }

    /**
    * Gets atomicIndexId
    *  依据原子指标id查维度属性
    *
    * @return int|null
    */
    public function getAtomicIndexId()
    {
        return $this->container['atomicIndexId'];
    }

    /**
    * Sets atomicIndexId
    *
    * @param int|null $atomicIndexId 依据原子指标id查维度属性
    *
    * @return $this
    */
    public function setAtomicIndexId($atomicIndexId)
    {
        $this->container['atomicIndexId'] = $atomicIndexId;
        return $this;
    }

    /**
    * Gets allMetrics
    *  是否查询复合指标
    *
    * @return bool|null
    */
    public function getAllMetrics()
    {
        return $this->container['allMetrics'];
    }

    /**
    * Sets allMetrics
    *
    * @param bool|null $allMetrics 是否查询复合指标
    *
    * @return $this
    */
    public function setAllMetrics($allMetrics)
    {
        $this->container['allMetrics'] = $allMetrics;
        return $this;
    }

    /**
    * Gets dwType
    *  数据连接类型
    *
    * @return string|null
    */
    public function getDwType()
    {
        return $this->container['dwType'];
    }

    /**
    * Sets dwType
    *
    * @param string|null $dwType 数据连接类型
    *
    * @return $this
    */
    public function setDwType($dwType)
    {
        $this->container['dwType'] = $dwType;
        return $this;
    }

    /**
    * Gets l3Id
    *  业务对象l3 id
    *
    * @return int|null
    */
    public function getL3Id()
    {
        return $this->container['l3Id'];
    }

    /**
    * Sets l3Id
    *
    * @param int|null $l3Id 业务对象l3 id
    *
    * @return $this
    */
    public function setL3Id($l3Id)
    {
        $this->container['l3Id'] = $l3Id;
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

