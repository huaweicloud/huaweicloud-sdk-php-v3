<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryCustomerOnDemandResourcesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryCustomerOnDemandResourcesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。 您可以调用查询客户列表接口获取customer_id。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceIds  资源ID批量查询。 用于查询指定资源ID对应的资源。 最多支持同时传递50个ID的列表。
    * effectiveTimeBegin  生效时间的开始时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * effectiveTimeEnd  生效时间的结束时间 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  一次查询的条数，默认值为10。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。如果需要查询精英服务商子客户的按需资源列表，必须携带该字段，否则只能查询自己的子客户按需资源。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'regionCode' => 'string',
            'serviceTypeCode' => 'string',
            'resourceIds' => 'string[]',
            'effectiveTimeBegin' => 'string',
            'effectiveTimeEnd' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'status' => 'int',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。 您可以调用查询客户列表接口获取customer_id。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceIds  资源ID批量查询。 用于查询指定资源ID对应的资源。 最多支持同时传递50个ID的列表。
    * effectiveTimeBegin  生效时间的开始时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * effectiveTimeEnd  生效时间的结束时间 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  一次查询的条数，默认值为10。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。如果需要查询精英服务商子客户的按需资源列表，必须携带该字段，否则只能查询自己的子客户按需资源。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'regionCode' => null,
        'serviceTypeCode' => null,
        'resourceIds' => null,
        'effectiveTimeBegin' => null,
        'effectiveTimeEnd' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'status' => 'int32',
        'indirectPartnerId' => null
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
    * customerId  客户账号ID。 您可以调用查询客户列表接口获取customer_id。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceIds  资源ID批量查询。 用于查询指定资源ID对应的资源。 最多支持同时传递50个ID的列表。
    * effectiveTimeBegin  生效时间的开始时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * effectiveTimeEnd  生效时间的结束时间 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  一次查询的条数，默认值为10。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。如果需要查询精英服务商子客户的按需资源列表，必须携带该字段，否则只能查询自己的子客户按需资源。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'regionCode' => 'region_code',
            'serviceTypeCode' => 'service_type_code',
            'resourceIds' => 'resource_ids',
            'effectiveTimeBegin' => 'effective_time_begin',
            'effectiveTimeEnd' => 'effective_time_end',
            'offset' => 'offset',
            'limit' => 'limit',
            'status' => 'status',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。 您可以调用查询客户列表接口获取customer_id。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceIds  资源ID批量查询。 用于查询指定资源ID对应的资源。 最多支持同时传递50个ID的列表。
    * effectiveTimeBegin  生效时间的开始时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * effectiveTimeEnd  生效时间的结束时间 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  一次查询的条数，默认值为10。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。如果需要查询精英服务商子客户的按需资源列表，必须携带该字段，否则只能查询自己的子客户按需资源。
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'regionCode' => 'setRegionCode',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceIds' => 'setResourceIds',
            'effectiveTimeBegin' => 'setEffectiveTimeBegin',
            'effectiveTimeEnd' => 'setEffectiveTimeEnd',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'status' => 'setStatus',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。 您可以调用查询客户列表接口获取customer_id。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceIds  资源ID批量查询。 用于查询指定资源ID对应的资源。 最多支持同时传递50个ID的列表。
    * effectiveTimeBegin  生效时间的开始时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * effectiveTimeEnd  生效时间的结束时间 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  一次查询的条数，默认值为10。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * indirectPartnerId  精英服务商ID。获取方法请参见查询精英服务商列表。如果需要查询精英服务商子客户的按需资源列表，必须携带该字段，否则只能查询自己的子客户按需资源。
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'regionCode' => 'getRegionCode',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceIds' => 'getResourceIds',
            'effectiveTimeBegin' => 'getEffectiveTimeBegin',
            'effectiveTimeEnd' => 'getEffectiveTimeEnd',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'status' => 'getStatus',
            'indirectPartnerId' => 'getIndirectPartnerId'
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
        $this->container['customerId'] = isset($data['customerId']) ? $data['customerId'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['effectiveTimeBegin'] = isset($data['effectiveTimeBegin']) ? $data['effectiveTimeBegin'] : null;
        $this->container['effectiveTimeEnd'] = isset($data['effectiveTimeEnd']) ? $data['effectiveTimeEnd'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : 0;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : 10;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['indirectPartnerId'] = isset($data['indirectPartnerId']) ? $data['indirectPartnerId'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['customerId'] === null) {
            $invalidProperties[] = "'customerId' can't be null";
        }
            if ((mb_strlen($this->container['customerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['customerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'customerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['regionCode']) && (mb_strlen($this->container['regionCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceTypeCode']) && (mb_strlen($this->container['serviceTypeCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceTypeCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serviceTypeCode']) && (mb_strlen($this->container['serviceTypeCode']) < 0)) {
                $invalidProperties[] = "invalid value for 'serviceTypeCode', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effectiveTimeBegin']) && (mb_strlen($this->container['effectiveTimeBegin']) > 20)) {
                $invalidProperties[] = "invalid value for 'effectiveTimeBegin', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['effectiveTimeBegin']) && (mb_strlen($this->container['effectiveTimeBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'effectiveTimeBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['effectiveTimeEnd']) && (mb_strlen($this->container['effectiveTimeEnd']) > 20)) {
                $invalidProperties[] = "invalid value for 'effectiveTimeEnd', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['effectiveTimeEnd']) && (mb_strlen($this->container['effectiveTimeEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'effectiveTimeEnd', the character length must be bigger than or equal to 0.";
            }
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
            if (!is_null($this->container['status']) && ($this->container['status'] > 6)) {
                $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 6.";
            }
            if (!is_null($this->container['status']) && ($this->container['status'] < 1)) {
                $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) > 64)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['indirectPartnerId']) && (mb_strlen($this->container['indirectPartnerId']) < 0)) {
                $invalidProperties[] = "invalid value for 'indirectPartnerId', the character length must be bigger than or equal to 0.";
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
    * Gets customerId
    *  客户账号ID。 您可以调用查询客户列表接口获取customer_id。
    *
    * @return string
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string $customerId 客户账号ID。 您可以调用查询客户列表接口获取customer_id。
    *
    * @return $this
    */
    public function setCustomerId($customerId)
    {
        $this->container['customerId'] = $customerId;
        return $this;
    }

    /**
    * Gets regionCode
    *  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return string|null
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string|null $regionCode 云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return string|null
    */
    public function getServiceTypeCode()
    {
        return $this->container['serviceTypeCode'];
    }

    /**
    * Sets serviceTypeCode
    *
    * @param string|null $serviceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets resourceIds
    *  资源ID批量查询。 用于查询指定资源ID对应的资源。 最多支持同时传递50个ID的列表。
    *
    * @return string[]|null
    */
    public function getResourceIds()
    {
        return $this->container['resourceIds'];
    }

    /**
    * Sets resourceIds
    *
    * @param string[]|null $resourceIds 资源ID批量查询。 用于查询指定资源ID对应的资源。 最多支持同时传递50个ID的列表。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets effectiveTimeBegin
    *  生效时间的开始时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return string|null
    */
    public function getEffectiveTimeBegin()
    {
        return $this->container['effectiveTimeBegin'];
    }

    /**
    * Sets effectiveTimeBegin
    *
    * @param string|null $effectiveTimeBegin 生效时间的开始时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setEffectiveTimeBegin($effectiveTimeBegin)
    {
        $this->container['effectiveTimeBegin'] = $effectiveTimeBegin;
        return $this;
    }

    /**
    * Gets effectiveTimeEnd
    *  生效时间的结束时间 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return string|null
    */
    public function getEffectiveTimeEnd()
    {
        return $this->container['effectiveTimeEnd'];
    }

    /**
    * Sets effectiveTimeEnd
    *
    * @param string|null $effectiveTimeEnd 生效时间的结束时间 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setEffectiveTimeEnd($effectiveTimeEnd)
    {
        $this->container['effectiveTimeEnd'] = $effectiveTimeEnd;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    * @param int|null $offset 偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    *  一次查询的条数，默认值为10。
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
    * @param int|null $limit 一次查询的条数，默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets status
    *  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    *
    * @return int|null
    */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
    * Sets status
    *
    * @param int|null $status 资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  精英服务商ID。获取方法请参见查询精英服务商列表。如果需要查询精英服务商子客户的按需资源列表，必须携带该字段，否则只能查询自己的子客户按需资源。
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
    * @param string|null $indirectPartnerId 精英服务商ID。获取方法请参见查询精英服务商列表。如果需要查询精英服务商子客户的按需资源列表，必须携带该字段，否则只能查询自己的子客户按需资源。
    *
    * @return $this
    */
    public function setIndirectPartnerId($indirectPartnerId)
    {
        $this->container['indirectPartnerId'] = $indirectPartnerId;
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

