<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePartnerCouponsReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePartnerCouponsReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * quotaId  优惠券额度ID。该值在查询优惠券额度接口的响应参数中获取。
    * customerIds  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * faceValue  代金券面值。 单位：元。取值大于0且精确到小数点后2位。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的生效时间。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的失效时间。
    * cloudServiceTypes  允许使用的云服务列表，您可以调用查询云服务类型列表接口获取。 多个云服务产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制云服务类型列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定云服务类型。
    * productIds  允许使用的产品列表。 多个产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制产品列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定产品ID。 产品ID需要合作伙伴通过线下获得。
    * memo  发券时的备注信息。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。云经销商给子客户发放优惠券时，需要携带该参数。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'quotaId' => 'string',
            'customerIds' => 'string[]',
            'faceValue' => 'float',
            'validTime' => 'string',
            'expireTime' => 'string',
            'cloudServiceTypes' => 'string[]',
            'productIds' => 'string[]',
            'memo' => 'string',
            'indirectPartnerId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * quotaId  优惠券额度ID。该值在查询优惠券额度接口的响应参数中获取。
    * customerIds  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * faceValue  代金券面值。 单位：元。取值大于0且精确到小数点后2位。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的生效时间。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的失效时间。
    * cloudServiceTypes  允许使用的云服务列表，您可以调用查询云服务类型列表接口获取。 多个云服务产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制云服务类型列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定云服务类型。
    * productIds  允许使用的产品列表。 多个产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制产品列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定产品ID。 产品ID需要合作伙伴通过线下获得。
    * memo  发券时的备注信息。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。云经销商给子客户发放优惠券时，需要携带该参数。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'quotaId' => null,
        'customerIds' => null,
        'faceValue' => 'bigdecimal',
        'validTime' => null,
        'expireTime' => null,
        'cloudServiceTypes' => null,
        'productIds' => null,
        'memo' => null,
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
    * quotaId  优惠券额度ID。该值在查询优惠券额度接口的响应参数中获取。
    * customerIds  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * faceValue  代金券面值。 单位：元。取值大于0且精确到小数点后2位。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的生效时间。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的失效时间。
    * cloudServiceTypes  允许使用的云服务列表，您可以调用查询云服务类型列表接口获取。 多个云服务产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制云服务类型列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定云服务类型。
    * productIds  允许使用的产品列表。 多个产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制产品列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定产品ID。 产品ID需要合作伙伴通过线下获得。
    * memo  发券时的备注信息。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。云经销商给子客户发放优惠券时，需要携带该参数。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'quotaId' => 'quota_id',
            'customerIds' => 'customer_ids',
            'faceValue' => 'face_value',
            'validTime' => 'valid_time',
            'expireTime' => 'expire_time',
            'cloudServiceTypes' => 'cloud_service_types',
            'productIds' => 'product_ids',
            'memo' => 'memo',
            'indirectPartnerId' => 'indirect_partner_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * quotaId  优惠券额度ID。该值在查询优惠券额度接口的响应参数中获取。
    * customerIds  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * faceValue  代金券面值。 单位：元。取值大于0且精确到小数点后2位。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的生效时间。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的失效时间。
    * cloudServiceTypes  允许使用的云服务列表，您可以调用查询云服务类型列表接口获取。 多个云服务产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制云服务类型列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定云服务类型。
    * productIds  允许使用的产品列表。 多个产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制产品列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定产品ID。 产品ID需要合作伙伴通过线下获得。
    * memo  发券时的备注信息。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。云经销商给子客户发放优惠券时，需要携带该参数。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $setters = [
            'quotaId' => 'setQuotaId',
            'customerIds' => 'setCustomerIds',
            'faceValue' => 'setFaceValue',
            'validTime' => 'setValidTime',
            'expireTime' => 'setExpireTime',
            'cloudServiceTypes' => 'setCloudServiceTypes',
            'productIds' => 'setProductIds',
            'memo' => 'setMemo',
            'indirectPartnerId' => 'setIndirectPartnerId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * quotaId  优惠券额度ID。该值在查询优惠券额度接口的响应参数中获取。
    * customerIds  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    * faceValue  代金券面值。 单位：元。取值大于0且精确到小数点后2位。
    * validTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的生效时间。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的失效时间。
    * cloudServiceTypes  允许使用的云服务列表，您可以调用查询云服务类型列表接口获取。 多个云服务产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制云服务类型列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定云服务类型。
    * productIds  允许使用的产品列表。 多个产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制产品列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定产品ID。 产品ID需要合作伙伴通过线下获得。
    * memo  发券时的备注信息。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    * indirectPartnerId  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。云经销商给子客户发放优惠券时，需要携带该参数。除此之外，此参数不做处理。
    *
    * @var string[]
    */
    protected static $getters = [
            'quotaId' => 'getQuotaId',
            'customerIds' => 'getCustomerIds',
            'faceValue' => 'getFaceValue',
            'validTime' => 'getValidTime',
            'expireTime' => 'getExpireTime',
            'cloudServiceTypes' => 'getCloudServiceTypes',
            'productIds' => 'getProductIds',
            'memo' => 'getMemo',
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
        $this->container['quotaId'] = isset($data['quotaId']) ? $data['quotaId'] : null;
        $this->container['customerIds'] = isset($data['customerIds']) ? $data['customerIds'] : null;
        $this->container['faceValue'] = isset($data['faceValue']) ? $data['faceValue'] : null;
        $this->container['validTime'] = isset($data['validTime']) ? $data['validTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['cloudServiceTypes'] = isset($data['cloudServiceTypes']) ? $data['cloudServiceTypes'] : null;
        $this->container['productIds'] = isset($data['productIds']) ? $data['productIds'] : null;
        $this->container['memo'] = isset($data['memo']) ? $data['memo'] : null;
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
        if ($this->container['quotaId'] === null) {
            $invalidProperties[] = "'quotaId' can't be null";
        }
            if ((mb_strlen($this->container['quotaId']) > 64)) {
                $invalidProperties[] = "invalid value for 'quotaId', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['quotaId']) < 1)) {
                $invalidProperties[] = "invalid value for 'quotaId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['customerIds'] === null) {
            $invalidProperties[] = "'customerIds' can't be null";
        }
        if ($this->container['faceValue'] === null) {
            $invalidProperties[] = "'faceValue' can't be null";
        }
            if (($this->container['faceValue'] > 99999999999)) {
                $invalidProperties[] = "invalid value for 'faceValue', must be smaller than or equal to 99999999999.";
            }
            if (($this->container['faceValue'] < 0.01)) {
                $invalidProperties[] = "invalid value for 'faceValue', must be bigger than or equal to 0.01.";
            }
            if (!is_null($this->container['validTime']) && (mb_strlen($this->container['validTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'validTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['validTime']) && (mb_strlen($this->container['validTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'validTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) > 20)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['expireTime']) && (mb_strlen($this->container['expireTime']) < 0)) {
                $invalidProperties[] = "invalid value for 'expireTime', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) > 512)) {
                $invalidProperties[] = "invalid value for 'memo', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['memo']) && (mb_strlen($this->container['memo']) < 0)) {
                $invalidProperties[] = "invalid value for 'memo', the character length must be bigger than or equal to 0.";
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
    * Gets quotaId
    *  优惠券额度ID。该值在查询优惠券额度接口的响应参数中获取。
    *
    * @return string
    */
    public function getQuotaId()
    {
        return $this->container['quotaId'];
    }

    /**
    * Sets quotaId
    *
    * @param string $quotaId 优惠券额度ID。该值在查询优惠券额度接口的响应参数中获取。
    *
    * @return $this
    */
    public function setQuotaId($quotaId)
    {
        $this->container['quotaId'] = $quotaId;
        return $this;
    }

    /**
    * Gets customerIds
    *  客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    *
    * @return string[]
    */
    public function getCustomerIds()
    {
        return $this->container['customerIds'];
    }

    /**
    * Sets customerIds
    *
    * @param string[] $customerIds 客户账号ID。您可以调用[查询客户列表](https://support.huaweicloud.com/api-bpconsole/mc_00021.html)接口获取customer_id。
    *
    * @return $this
    */
    public function setCustomerIds($customerIds)
    {
        $this->container['customerIds'] = $customerIds;
        return $this;
    }

    /**
    * Gets faceValue
    *  代金券面值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @return float
    */
    public function getFaceValue()
    {
        return $this->container['faceValue'];
    }

    /**
    * Sets faceValue
    *
    * @param float $faceValue 代金券面值。 单位：元。取值大于0且精确到小数点后2位。
    *
    * @return $this
    */
    public function setFaceValue($faceValue)
    {
        $this->container['faceValue'] = $faceValue;
        return $this;
    }

    /**
    * Gets validTime
    *  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的生效时间。
    *
    * @return string|null
    */
    public function getValidTime()
    {
        return $this->container['validTime'];
    }

    /**
    * Sets validTime
    *
    * @param string|null $validTime 生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的生效时间。
    *
    * @return $this
    */
    public function setValidTime($validTime)
    {
        $this->container['validTime'] = $validTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的失效时间。
    *
    * @return string|null
    */
    public function getExpireTime()
    {
        return $this->container['expireTime'];
    }

    /**
    * Sets expireTime
    *
    * @param string|null $expireTime 失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 此参数不携带或携带值为null时，赋值为发放优惠券额度的失效时间。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets cloudServiceTypes
    *  允许使用的云服务列表，您可以调用查询云服务类型列表接口获取。 多个云服务产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制云服务类型列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定云服务类型。
    *
    * @return string[]|null
    */
    public function getCloudServiceTypes()
    {
        return $this->container['cloudServiceTypes'];
    }

    /**
    * Sets cloudServiceTypes
    *
    * @param string[]|null $cloudServiceTypes 允许使用的云服务列表，您可以调用查询云服务类型列表接口获取。 多个云服务产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制云服务类型列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定云服务类型。
    *
    * @return $this
    */
    public function setCloudServiceTypes($cloudServiceTypes)
    {
        $this->container['cloudServiceTypes'] = $cloudServiceTypes;
        return $this;
    }

    /**
    * Gets productIds
    *  允许使用的产品列表。 多个产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制产品列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定产品ID。 产品ID需要合作伙伴通过线下获得。
    *
    * @return string[]|null
    */
    public function getProductIds()
    {
        return $this->container['productIds'];
    }

    /**
    * Sets productIds
    *
    * @param string[]|null $productIds 允许使用的产品列表。 多个产品以“,”隔开，最多支持10个。 默认：空（继承额度上的限制）  说明： 如果额度上有限制产品列表，则优惠券上的限制不能超过额度的限制。如果额度上没有限制，则优惠券上可以随意指定产品ID。 产品ID需要合作伙伴通过线下获得。
    *
    * @return $this
    */
    public function setProductIds($productIds)
    {
        $this->container['productIds'] = $productIds;
        return $this;
    }

    /**
    * Gets memo
    *  发券时的备注信息。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @return string|null
    */
    public function getMemo()
    {
        return $this->container['memo'];
    }

    /**
    * Sets memo
    *
    * @param string|null $memo 发券时的备注信息。 此参数不携带或携带值为null时，不赋值；携带值为空串时，赋值空串。
    *
    * @return $this
    */
    public function setMemo($memo)
    {
        $this->container['memo'] = $memo;
        return $this;
    }

    /**
    * Gets indirectPartnerId
    *  云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。云经销商给子客户发放优惠券时，需要携带该参数。除此之外，此参数不做处理。
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
    * @param string|null $indirectPartnerId 云经销商ID。获取方法请参见[查询云经销商列表](https://support.huaweicloud.com/api-bpconsole/espp_00003.html)。云经销商给子客户发放优惠券时，需要携带该参数。除此之外，此参数不做处理。
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

