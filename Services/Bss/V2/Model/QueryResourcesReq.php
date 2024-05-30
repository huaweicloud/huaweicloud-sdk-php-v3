<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class QueryResourcesReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'QueryResourcesReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * resourceIds  资源ID列表。 查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。 此参数不携带或携带值为空列表时，不作为筛选条件，返回其他条件匹配的记录。不支持携带值为null。  说明： 资源ID是指开通资源以后，云服务针对该资源分配的标志，譬如云主机ECS的资源ID是server_id。
    * orderId  订单号。查询指定订单下的资源。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。  说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * onlyMainResource  是否只查询主资源，该参数对于请求参数是子资源ID的时候无效，如果resource_ids是子资源ID，只能查询自己。 0：查询主资源及附属资源。1：只查询主资源。 默认值为0。  说明： 主资源是指有关联的几个资源中，处于主导位置的资源。 对于ECS而言，虚拟机VM是主资源，磁盘EVS是辅资源。对于VPC而言，共享带宽的情况下，带宽为主资源，对应的从资源为弹性IP（可能包含多个IP）；独享带宽的情况下，弹性IP为主资源，对应的从资源为带宽。
    * statusList  资源状态。 查询指定状态的资源。多个状态以英文逗号分隔。 2：使用中4：已冻结5：已过期 此参数不携带或携带值为空列表时，不作为筛选条件，返回所有状态的资源列表。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的条数。默认值为10。
    * expireTimeBegin  查询指定时间段内失效的资源列表，时间段的起始时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * expireTimeEnd  查询指定时间段内失效的资源列表，时间段的结束时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带、携带值为null，不作为筛选条件。此参数不允许为空串，有参数校验。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'resourceIds' => 'string[]',
            'orderId' => 'string',
            'onlyMainResource' => 'int',
            'statusList' => 'int[]',
            'offset' => 'int',
            'limit' => 'int',
            'expireTimeBegin' => 'string',
            'expireTimeEnd' => 'string',
            'serviceTypeCode' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * resourceIds  资源ID列表。 查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。 此参数不携带或携带值为空列表时，不作为筛选条件，返回其他条件匹配的记录。不支持携带值为null。  说明： 资源ID是指开通资源以后，云服务针对该资源分配的标志，譬如云主机ECS的资源ID是server_id。
    * orderId  订单号。查询指定订单下的资源。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。  说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * onlyMainResource  是否只查询主资源，该参数对于请求参数是子资源ID的时候无效，如果resource_ids是子资源ID，只能查询自己。 0：查询主资源及附属资源。1：只查询主资源。 默认值为0。  说明： 主资源是指有关联的几个资源中，处于主导位置的资源。 对于ECS而言，虚拟机VM是主资源，磁盘EVS是辅资源。对于VPC而言，共享带宽的情况下，带宽为主资源，对应的从资源为弹性IP（可能包含多个IP）；独享带宽的情况下，弹性IP为主资源，对应的从资源为带宽。
    * statusList  资源状态。 查询指定状态的资源。多个状态以英文逗号分隔。 2：使用中4：已冻结5：已过期 此参数不携带或携带值为空列表时，不作为筛选条件，返回所有状态的资源列表。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的条数。默认值为10。
    * expireTimeBegin  查询指定时间段内失效的资源列表，时间段的起始时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * expireTimeEnd  查询指定时间段内失效的资源列表，时间段的结束时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带、携带值为null，不作为筛选条件。此参数不允许为空串，有参数校验。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'resourceIds' => null,
        'orderId' => null,
        'onlyMainResource' => 'int32',
        'statusList' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'expireTimeBegin' => null,
        'expireTimeEnd' => null,
        'serviceTypeCode' => null
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
    * resourceIds  资源ID列表。 查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。 此参数不携带或携带值为空列表时，不作为筛选条件，返回其他条件匹配的记录。不支持携带值为null。  说明： 资源ID是指开通资源以后，云服务针对该资源分配的标志，譬如云主机ECS的资源ID是server_id。
    * orderId  订单号。查询指定订单下的资源。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。  说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * onlyMainResource  是否只查询主资源，该参数对于请求参数是子资源ID的时候无效，如果resource_ids是子资源ID，只能查询自己。 0：查询主资源及附属资源。1：只查询主资源。 默认值为0。  说明： 主资源是指有关联的几个资源中，处于主导位置的资源。 对于ECS而言，虚拟机VM是主资源，磁盘EVS是辅资源。对于VPC而言，共享带宽的情况下，带宽为主资源，对应的从资源为弹性IP（可能包含多个IP）；独享带宽的情况下，弹性IP为主资源，对应的从资源为带宽。
    * statusList  资源状态。 查询指定状态的资源。多个状态以英文逗号分隔。 2：使用中4：已冻结5：已过期 此参数不携带或携带值为空列表时，不作为筛选条件，返回所有状态的资源列表。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的条数。默认值为10。
    * expireTimeBegin  查询指定时间段内失效的资源列表，时间段的起始时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * expireTimeEnd  查询指定时间段内失效的资源列表，时间段的结束时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带、携带值为null，不作为筛选条件。此参数不允许为空串，有参数校验。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'resourceIds' => 'resource_ids',
            'orderId' => 'order_id',
            'onlyMainResource' => 'only_main_resource',
            'statusList' => 'status_list',
            'offset' => 'offset',
            'limit' => 'limit',
            'expireTimeBegin' => 'expire_time_begin',
            'expireTimeEnd' => 'expire_time_end',
            'serviceTypeCode' => 'service_type_code'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * resourceIds  资源ID列表。 查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。 此参数不携带或携带值为空列表时，不作为筛选条件，返回其他条件匹配的记录。不支持携带值为null。  说明： 资源ID是指开通资源以后，云服务针对该资源分配的标志，譬如云主机ECS的资源ID是server_id。
    * orderId  订单号。查询指定订单下的资源。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。  说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * onlyMainResource  是否只查询主资源，该参数对于请求参数是子资源ID的时候无效，如果resource_ids是子资源ID，只能查询自己。 0：查询主资源及附属资源。1：只查询主资源。 默认值为0。  说明： 主资源是指有关联的几个资源中，处于主导位置的资源。 对于ECS而言，虚拟机VM是主资源，磁盘EVS是辅资源。对于VPC而言，共享带宽的情况下，带宽为主资源，对应的从资源为弹性IP（可能包含多个IP）；独享带宽的情况下，弹性IP为主资源，对应的从资源为带宽。
    * statusList  资源状态。 查询指定状态的资源。多个状态以英文逗号分隔。 2：使用中4：已冻结5：已过期 此参数不携带或携带值为空列表时，不作为筛选条件，返回所有状态的资源列表。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的条数。默认值为10。
    * expireTimeBegin  查询指定时间段内失效的资源列表，时间段的起始时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * expireTimeEnd  查询指定时间段内失效的资源列表，时间段的结束时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带、携带值为null，不作为筛选条件。此参数不允许为空串，有参数校验。
    *
    * @var string[]
    */
    protected static $setters = [
            'resourceIds' => 'setResourceIds',
            'orderId' => 'setOrderId',
            'onlyMainResource' => 'setOnlyMainResource',
            'statusList' => 'setStatusList',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'expireTimeBegin' => 'setExpireTimeBegin',
            'expireTimeEnd' => 'setExpireTimeEnd',
            'serviceTypeCode' => 'setServiceTypeCode'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * resourceIds  资源ID列表。 查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。 此参数不携带或携带值为空列表时，不作为筛选条件，返回其他条件匹配的记录。不支持携带值为null。  说明： 资源ID是指开通资源以后，云服务针对该资源分配的标志，譬如云主机ECS的资源ID是server_id。
    * orderId  订单号。查询指定订单下的资源。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。  说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    * onlyMainResource  是否只查询主资源，该参数对于请求参数是子资源ID的时候无效，如果resource_ids是子资源ID，只能查询自己。 0：查询主资源及附属资源。1：只查询主资源。 默认值为0。  说明： 主资源是指有关联的几个资源中，处于主导位置的资源。 对于ECS而言，虚拟机VM是主资源，磁盘EVS是辅资源。对于VPC而言，共享带宽的情况下，带宽为主资源，对应的从资源为弹性IP（可能包含多个IP）；独享带宽的情况下，弹性IP为主资源，对应的从资源为带宽。
    * statusList  资源状态。 查询指定状态的资源。多个状态以英文逗号分隔。 2：使用中4：已冻结5：已过期 此参数不携带或携带值为空列表时，不作为筛选条件，返回所有状态的资源列表。
    * offset  偏移量，从0开始。默认值为0。  说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。 例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的条数。默认值为10。
    * expireTimeBegin  查询指定时间段内失效的资源列表，时间段的起始时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * expireTimeEnd  查询指定时间段内失效的资源列表，时间段的结束时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带、携带值为null，不作为筛选条件。此参数不允许为空串，有参数校验。
    *
    * @var string[]
    */
    protected static $getters = [
            'resourceIds' => 'getResourceIds',
            'orderId' => 'getOrderId',
            'onlyMainResource' => 'getOnlyMainResource',
            'statusList' => 'getStatusList',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'expireTimeBegin' => 'getExpireTimeBegin',
            'expireTimeEnd' => 'getExpireTimeEnd',
            'serviceTypeCode' => 'getServiceTypeCode'
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
        $this->container['resourceIds'] = isset($data['resourceIds']) ? $data['resourceIds'] : null;
        $this->container['orderId'] = isset($data['orderId']) ? $data['orderId'] : null;
        $this->container['onlyMainResource'] = isset($data['onlyMainResource']) ? $data['onlyMainResource'] : null;
        $this->container['statusList'] = isset($data['statusList']) ? $data['statusList'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['expireTimeBegin'] = isset($data['expireTimeBegin']) ? $data['expireTimeBegin'] : null;
        $this->container['expireTimeEnd'] = isset($data['expireTimeEnd']) ? $data['expireTimeEnd'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) > 64)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['orderId']) && (mb_strlen($this->container['orderId']) < 0)) {
                $invalidProperties[] = "invalid value for 'orderId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['onlyMainResource']) && ($this->container['onlyMainResource'] > 1)) {
                $invalidProperties[] = "invalid value for 'onlyMainResource', must be smaller than or equal to 1.";
            }
            if (!is_null($this->container['onlyMainResource']) && ($this->container['onlyMainResource'] < 0)) {
                $invalidProperties[] = "invalid value for 'onlyMainResource', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483646)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483646.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 500)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 500.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 1)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['expireTimeBegin']) && (mb_strlen($this->container['expireTimeBegin']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTimeBegin', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTimeBegin']) && (mb_strlen($this->container['expireTimeBegin']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTimeBegin', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTimeEnd']) && (mb_strlen($this->container['expireTimeEnd']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTimeEnd', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTimeEnd']) && (mb_strlen($this->container['expireTimeEnd']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTimeEnd', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['serviceTypeCode']) && (mb_strlen($this->container['serviceTypeCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'serviceTypeCode', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serviceTypeCode']) && (mb_strlen($this->container['serviceTypeCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'serviceTypeCode', the character length must be bigger than or equal to 1.";
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
    * Gets resourceIds
    *  资源ID列表。 查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。 此参数不携带或携带值为空列表时，不作为筛选条件，返回其他条件匹配的记录。不支持携带值为null。  说明： 资源ID是指开通资源以后，云服务针对该资源分配的标志，譬如云主机ECS的资源ID是server_id。
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
    * @param string[]|null $resourceIds 资源ID列表。 查询指定资源ID的资源（当only_main_resource=0时，查询指定资源及其附属资源）。最大支持50个ID同时作为条件查询。 此参数不携带或携带值为空列表时，不作为筛选条件，返回其他条件匹配的记录。不支持携带值为null。  说明： 资源ID是指开通资源以后，云服务针对该资源分配的标志，譬如云主机ECS的资源ID是server_id。
    *
    * @return $this
    */
    public function setResourceIds($resourceIds)
    {
        $this->container['resourceIds'] = $resourceIds;
        return $this;
    }

    /**
    * Gets orderId
    *  订单号。查询指定订单下的资源。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。  说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    *
    * @return string|null
    */
    public function getOrderId()
    {
        return $this->container['orderId'];
    }

    /**
    * Sets orderId
    *
    * @param string|null $orderId 订单号。查询指定订单下的资源。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。  说明： 使用特殊字符进行查询的时候，请注意进行URL编码转换，如“%”的转码应为“%25”。
    *
    * @return $this
    */
    public function setOrderId($orderId)
    {
        $this->container['orderId'] = $orderId;
        return $this;
    }

    /**
    * Gets onlyMainResource
    *  是否只查询主资源，该参数对于请求参数是子资源ID的时候无效，如果resource_ids是子资源ID，只能查询自己。 0：查询主资源及附属资源。1：只查询主资源。 默认值为0。  说明： 主资源是指有关联的几个资源中，处于主导位置的资源。 对于ECS而言，虚拟机VM是主资源，磁盘EVS是辅资源。对于VPC而言，共享带宽的情况下，带宽为主资源，对应的从资源为弹性IP（可能包含多个IP）；独享带宽的情况下，弹性IP为主资源，对应的从资源为带宽。
    *
    * @return int|null
    */
    public function getOnlyMainResource()
    {
        return $this->container['onlyMainResource'];
    }

    /**
    * Sets onlyMainResource
    *
    * @param int|null $onlyMainResource 是否只查询主资源，该参数对于请求参数是子资源ID的时候无效，如果resource_ids是子资源ID，只能查询自己。 0：查询主资源及附属资源。1：只查询主资源。 默认值为0。  说明： 主资源是指有关联的几个资源中，处于主导位置的资源。 对于ECS而言，虚拟机VM是主资源，磁盘EVS是辅资源。对于VPC而言，共享带宽的情况下，带宽为主资源，对应的从资源为弹性IP（可能包含多个IP）；独享带宽的情况下，弹性IP为主资源，对应的从资源为带宽。
    *
    * @return $this
    */
    public function setOnlyMainResource($onlyMainResource)
    {
        $this->container['onlyMainResource'] = $onlyMainResource;
        return $this;
    }

    /**
    * Gets statusList
    *  资源状态。 查询指定状态的资源。多个状态以英文逗号分隔。 2：使用中4：已冻结5：已过期 此参数不携带或携带值为空列表时，不作为筛选条件，返回所有状态的资源列表。
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
    * @param int[]|null $statusList 资源状态。 查询指定状态的资源。多个状态以英文逗号分隔。 2：使用中4：已冻结5：已过期 此参数不携带或携带值为空列表时，不作为筛选条件，返回所有状态的资源列表。
    *
    * @return $this
    */
    public function setStatusList($statusList)
    {
        $this->container['statusList'] = $statusList;
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
    *  每次查询的条数。默认值为10。
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
    * @param int|null $limit 每次查询的条数。默认值为10。
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets expireTimeBegin
    *  查询指定时间段内失效的资源列表，时间段的起始时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    *
    * @return string|null
    */
    public function getExpireTimeBegin()
    {
        return $this->container['expireTimeBegin'];
    }

    /**
    * Sets expireTimeBegin
    *
    * @param string|null $expireTimeBegin 查询指定时间段内失效的资源列表，时间段的起始时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    *
    * @return $this
    */
    public function setExpireTimeBegin($expireTimeBegin)
    {
        $this->container['expireTimeBegin'] = $expireTimeBegin;
        return $this;
    }

    /**
    * Gets expireTimeEnd
    *  查询指定时间段内失效的资源列表，时间段的结束时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    *
    * @return string|null
    */
    public function getExpireTimeEnd()
    {
        return $this->container['expireTimeEnd'];
    }

    /**
    * Sets expireTimeEnd
    *
    * @param string|null $expireTimeEnd 查询指定时间段内失效的资源列表，时间段的结束时间，UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。 此参数不携带或携带值为空串或携带值为null时，不作为筛选条件，返回其他条件匹配的记录。
    *
    * @return $this
    */
    public function setExpireTimeEnd($expireTimeEnd)
    {
        $this->container['expireTimeEnd'] = $expireTimeEnd;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带、携带值为null，不作为筛选条件。此参数不允许为空串，有参数校验。
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
    * @param string|null $serviceTypeCode 云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。 此参数不携带、携带值为null，不作为筛选条件。此参数不允许为空串，有参数校验。
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
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

