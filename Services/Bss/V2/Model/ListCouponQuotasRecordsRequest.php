<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCouponQuotasRecordsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCouponQuotasRecordsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。为空表示查询所有的代金券额度发放回收记录。不为空表示仅查询与该精英服务商相关的代金券额度发放回收记录。默认查询所有精英服务商的代金券额度发放回收记录。
    * quotaId  精英服务商的代金券额度ID。获取方法请参见查询优惠券额度。即华为云伙伴能力中心给精英服务商发放代金券额度时，产生的精英服务商的代金券额度ID，或者从精英服务商回收代金券额度时，精英服务商的代金券额度ID。
    * operationTimeBegin  查询条件：操作起始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * operationTimeEnd  查询条件：操作截止时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * parentQuotaId  父额度ID。这即华为云伙伴能力中心给精英服务商发放代金券额度时，华为云伙伴能力中心的额度ID，或者从精英服务商回收代金券额度时，回收的华为云伙伴能力中心的额度ID。
    * operationType  操作类型。10：发放额度11：回收额度
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数目。默认值为10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'indirectPartnerId' => 'string',
            'quotaId' => 'string',
            'operationTimeBegin' => 'string',
            'operationTimeEnd' => 'string',
            'parentQuotaId' => 'string',
            'operationType' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。为空表示查询所有的代金券额度发放回收记录。不为空表示仅查询与该精英服务商相关的代金券额度发放回收记录。默认查询所有精英服务商的代金券额度发放回收记录。
    * quotaId  精英服务商的代金券额度ID。获取方法请参见查询优惠券额度。即华为云伙伴能力中心给精英服务商发放代金券额度时，产生的精英服务商的代金券额度ID，或者从精英服务商回收代金券额度时，精英服务商的代金券额度ID。
    * operationTimeBegin  查询条件：操作起始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * operationTimeEnd  查询条件：操作截止时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * parentQuotaId  父额度ID。这即华为云伙伴能力中心给精英服务商发放代金券额度时，华为云伙伴能力中心的额度ID，或者从精英服务商回收代金券额度时，回收的华为云伙伴能力中心的额度ID。
    * operationType  操作类型。10：发放额度11：回收额度
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数目。默认值为10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'indirectPartnerId' => null,
        'quotaId' => null,
        'operationTimeBegin' => null,
        'operationTimeEnd' => null,
        'parentQuotaId' => null,
        'operationType' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。为空表示查询所有的代金券额度发放回收记录。不为空表示仅查询与该精英服务商相关的代金券额度发放回收记录。默认查询所有精英服务商的代金券额度发放回收记录。
    * quotaId  精英服务商的代金券额度ID。获取方法请参见查询优惠券额度。即华为云伙伴能力中心给精英服务商发放代金券额度时，产生的精英服务商的代金券额度ID，或者从精英服务商回收代金券额度时，精英服务商的代金券额度ID。
    * operationTimeBegin  查询条件：操作起始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * operationTimeEnd  查询条件：操作截止时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * parentQuotaId  父额度ID。这即华为云伙伴能力中心给精英服务商发放代金券额度时，华为云伙伴能力中心的额度ID，或者从精英服务商回收代金券额度时，回收的华为云伙伴能力中心的额度ID。
    * operationType  操作类型。10：发放额度11：回收额度
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数目。默认值为10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'indirectPartnerId' => 'indirect_partner_id',
            'quotaId' => 'quota_id',
            'operationTimeBegin' => 'operation_time_begin',
            'operationTimeEnd' => 'operation_time_end',
            'parentQuotaId' => 'parent_quota_id',
            'operationType' => 'operation_type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。为空表示查询所有的代金券额度发放回收记录。不为空表示仅查询与该精英服务商相关的代金券额度发放回收记录。默认查询所有精英服务商的代金券额度发放回收记录。
    * quotaId  精英服务商的代金券额度ID。获取方法请参见查询优惠券额度。即华为云伙伴能力中心给精英服务商发放代金券额度时，产生的精英服务商的代金券额度ID，或者从精英服务商回收代金券额度时，精英服务商的代金券额度ID。
    * operationTimeBegin  查询条件：操作起始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * operationTimeEnd  查询条件：操作截止时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * parentQuotaId  父额度ID。这即华为云伙伴能力中心给精英服务商发放代金券额度时，华为云伙伴能力中心的额度ID，或者从精英服务商回收代金券额度时，回收的华为云伙伴能力中心的额度ID。
    * operationType  操作类型。10：发放额度11：回收额度
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数目。默认值为10。
    *
    * @var string[]
    */
    protected static $setters = [
            'indirectPartnerId' => 'setIndirectPartnerId',
            'quotaId' => 'setQuotaId',
            'operationTimeBegin' => 'setOperationTimeBegin',
            'operationTimeEnd' => 'setOperationTimeEnd',
            'parentQuotaId' => 'setParentQuotaId',
            'operationType' => 'setOperationType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。为空表示查询所有的代金券额度发放回收记录。不为空表示仅查询与该精英服务商相关的代金券额度发放回收记录。默认查询所有精英服务商的代金券额度发放回收记录。
    * quotaId  精英服务商的代金券额度ID。获取方法请参见查询优惠券额度。即华为云伙伴能力中心给精英服务商发放代金券额度时，产生的精英服务商的代金券额度ID，或者从精英服务商回收代金券额度时，精英服务商的代金券额度ID。
    * operationTimeBegin  查询条件：操作起始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * operationTimeEnd  查询条件：操作截止时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    * parentQuotaId  父额度ID。这即华为云伙伴能力中心给精英服务商发放代金券额度时，华为云伙伴能力中心的额度ID，或者从精英服务商回收代金券额度时，回收的华为云伙伴能力中心的额度ID。
    * operationType  操作类型。10：发放额度11：回收额度
    * offset  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数目。默认值为10。
    *
    * @var string[]
    */
    protected static $getters = [
            'indirectPartnerId' => 'getIndirectPartnerId',
            'quotaId' => 'getQuotaId',
            'operationTimeBegin' => 'getOperationTimeBegin',
            'operationTimeEnd' => 'getOperationTimeEnd',
            'parentQuotaId' => 'getParentQuotaId',
            'operationType' => 'getOperationType',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
        $this->container['quotaId'] = isset($data['quotaId']) ? $data['quotaId'] : null;
        $this->container['operationTimeBegin'] = isset($data['operationTimeBegin']) ? $data['operationTimeBegin'] : null;
        $this->container['operationTimeEnd'] = isset($data['operationTimeEnd']) ? $data['operationTimeEnd'] : null;
        $this->container['parentQuotaId'] = isset($data['parentQuotaId']) ? $data['parentQuotaId'] : null;
        $this->container['operationType'] = isset($data['operationType']) ? $data['operationType'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 100)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
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
    * Gets indirectPartnerId
    *  精英服务商ID。获取方法请参见查询精英服务商列表。为空表示查询所有的代金券额度发放回收记录。不为空表示仅查询与该精英服务商相关的代金券额度发放回收记录。默认查询所有精英服务商的代金券额度发放回收记录。
    *
    * @return string|null
    */
    public function getIndirectPartnerId()
    {
        return $this->container['indirectPartnerId'];
    }

    /**
    * Sets indirectPartnerId
    *
    * @param string|null $indirectPartnerId 精英服务商ID。获取方法请参见查询精英服务商列表。为空表示查询所有的代金券额度发放回收记录。不为空表示仅查询与该精英服务商相关的代金券额度发放回收记录。默认查询所有精英服务商的代金券额度发放回收记录。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
        return $this;
    }

    /**
    * Gets quotaId
    *  精英服务商的代金券额度ID。获取方法请参见查询优惠券额度。即华为云伙伴能力中心给精英服务商发放代金券额度时，产生的精英服务商的代金券额度ID，或者从精英服务商回收代金券额度时，精英服务商的代金券额度ID。
    *
    * @return string|null
    */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
    * Sets quotaId
    *
    * @param string|null $quotaId 精英服务商的代金券额度ID。获取方法请参见查询优惠券额度。即华为云伙伴能力中心给精英服务商发放代金券额度时，产生的精英服务商的代金券额度ID，或者从精英服务商回收代金券额度时，精英服务商的代金券额度ID。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets operationTimeBegin
    *  查询条件：操作起始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return string|null
    */
    public function getOperationTimeBegin()
    {
        return $this->container['operationTimeBegin'];
    }

    /**
    * Sets operationTimeBegin
    *
    * @param string|null $operationTimeBegin 查询条件：操作起始时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setOperationTimeBegin($operationTimeBegin)
    {
        $this->container['operationTimeBegin'] = $operationTimeBegin;
        return $this;
    }

    /**
    * Gets operationTimeEnd
    *  查询条件：操作截止时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return string|null
    */
    public function getOperationTimeEnd()
    {
        return $this->container['operationTimeEnd'];
    }

    /**
    * Sets operationTimeEnd
    *
    * @param string|null $operationTimeEnd 查询条件：操作截止时间。UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setOperationTimeEnd($operationTimeEnd)
    {
        $this->container['operationTimeEnd'] = $operationTimeEnd;
        return $this;
    }

    /**
    * Gets parentQuotaId
    *  父额度ID。这即华为云伙伴能力中心给精英服务商发放代金券额度时，华为云伙伴能力中心的额度ID，或者从精英服务商回收代金券额度时，回收的华为云伙伴能力中心的额度ID。
    *
    * @return string|null
    */
    public function getParentQuotaId()
    {
        return $this->container['parentQuotaId'];
    }

    /**
    * Sets parentQuotaId
    *
    * @param string|null $parentQuotaId 父额度ID。这即华为云伙伴能力中心给精英服务商发放代金券额度时，华为云伙伴能力中心的额度ID，或者从精英服务商回收代金券额度时，回收的华为云伙伴能力中心的额度ID。
    *
    * @return $this
    */
    public function setParentQuotaId($parentQuotaId)
    {
        $this->container['parentQuotaId'] = $parentQuotaId;
        return $this;
    }

    /**
    * Gets operationType
    *  操作类型。10：发放额度11：回收额度
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
    * @param string|null $operationType 操作类型。10：发放额度11：回收额度
    *
    * @return $this
    */
    public function setOperationType($operationType)
    {
        $this->container['operationType'] = $operationType;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    * @param int|null $offset 偏移量，从0开始，默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  每次查询的数目。默认值为10。
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
    * @param int|null $limit 每次查询的数目。默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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

