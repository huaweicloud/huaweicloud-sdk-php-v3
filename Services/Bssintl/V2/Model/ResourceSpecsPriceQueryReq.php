<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceSpecsPriceQueryReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceSpecsPriceQueryReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceType  云服务类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * regionCode  区域编码，必填，范围1-64。
    * filters  过滤条件列表，非必填，最多1个。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * needAttributes  是否返回资源规格属性信息，非必填，false：不返回（默认）true：返回
    * needPrice  是否返回资源规格官网定价信息，非必填，false：不返回（默认）true：返回
    * marker  翻页信息，非必填，首页查询不携带此参数或携带值为null，非首页查询传入上一页响应返回的next_marker
    * limit  查询条数，非必填，取值范围1-50，默认值50
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'regionCode' => 'string',
            'filters' => '\HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsPriceFilter[]',
            'needAttributes' => 'bool',
            'needPrice' => 'bool',
            'marker' => 'string',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceType  云服务类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * regionCode  区域编码，必填，范围1-64。
    * filters  过滤条件列表，非必填，最多1个。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * needAttributes  是否返回资源规格属性信息，非必填，false：不返回（默认）true：返回
    * needPrice  是否返回资源规格官网定价信息，非必填，false：不返回（默认）true：返回
    * marker  翻页信息，非必填，首页查询不携带此参数或携带值为null，非首页查询传入上一页响应返回的next_marker
    * limit  查询条数，非必填，取值范围1-50，默认值50
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceType' => null,
        'resourceType' => null,
        'regionCode' => null,
        'filters' => null,
        'needAttributes' => null,
        'needPrice' => null,
        'marker' => null,
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
    * cloudServiceType  云服务类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * regionCode  区域编码，必填，范围1-64。
    * filters  过滤条件列表，非必填，最多1个。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * needAttributes  是否返回资源规格属性信息，非必填，false：不返回（默认）true：返回
    * needPrice  是否返回资源规格官网定价信息，非必填，false：不返回（默认）true：返回
    * marker  翻页信息，非必填，首页查询不携带此参数或携带值为null，非首页查询传入上一页响应返回的next_marker
    * limit  查询条数，非必填，取值范围1-50，默认值50
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'regionCode' => 'region_code',
            'filters' => 'filters',
            'needAttributes' => 'need_attributes',
            'needPrice' => 'need_price',
            'marker' => 'marker',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceType  云服务类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * regionCode  区域编码，必填，范围1-64。
    * filters  过滤条件列表，非必填，最多1个。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * needAttributes  是否返回资源规格属性信息，非必填，false：不返回（默认）true：返回
    * needPrice  是否返回资源规格官网定价信息，非必填，false：不返回（默认）true：返回
    * marker  翻页信息，非必填，首页查询不携带此参数或携带值为null，非首页查询传入上一页响应返回的next_marker
    * limit  查询条数，非必填，取值范围1-50，默认值50
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'regionCode' => 'setRegionCode',
            'filters' => 'setFilters',
            'needAttributes' => 'setNeedAttributes',
            'needPrice' => 'setNeedPrice',
            'marker' => 'setMarker',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceType  云服务类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * resourceType  资源类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    * regionCode  区域编码，必填，范围1-64。
    * filters  过滤条件列表，非必填，最多1个。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    * needAttributes  是否返回资源规格属性信息，非必填，false：不返回（默认）true：返回
    * needPrice  是否返回资源规格官网定价信息，非必填，false：不返回（默认）true：返回
    * marker  翻页信息，非必填，首页查询不携带此参数或携带值为null，非首页查询传入上一页响应返回的next_marker
    * limit  查询条数，非必填，取值范围1-50，默认值50
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'regionCode' => 'getRegionCode',
            'filters' => 'getFilters',
            'needAttributes' => 'getNeedAttributes',
            'needPrice' => 'getNeedPrice',
            'marker' => 'getMarker',
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
        $this->container['cloudServiceType'] = isset($data['cloudServiceType']) ? $data['cloudServiceType'] : null;
        $this->container['resourceType'] = isset($data['resourceType']) ? $data['resourceType'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
        $this->container['needAttributes'] = isset($data['needAttributes']) ? $data['needAttributes'] : null;
        $this->container['needPrice'] = isset($data['needPrice']) ? $data['needPrice'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
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
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['cloudServiceType']) && (mb_strlen($this->container['cloudServiceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['resourceType']) && (mb_strlen($this->container['resourceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['regionCode'] === null) {
            $invalidProperties[] = "'regionCode' can't be null";
        }
            if ((mb_strlen($this->container['regionCode']) > 64)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['regionCode']) < 1)) {
                $invalidProperties[] = "invalid value for 'regionCode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 256)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 1)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 50)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 50.";
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
    * Gets cloudServiceType
    *  云服务类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string|null $cloudServiceType 云服务类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setCloudServiceType($cloudServiceType)
    {
        $this->container['cloudServiceType'] = $cloudServiceType;
        return $this;
    }

    /**
    * Gets resourceType
    *  资源类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return string|null
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string|null $resourceType 资源类型编码，非必填，范围1-64，此参数不携带或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setResourceType($resourceType)
    {
        $this->container['resourceType'] = $resourceType;
        return $this;
    }

    /**
    * Gets regionCode
    *  区域编码，必填，范围1-64。
    *
    * @return string
    */
    public function getRegionCode()
    {
        return $this->container['regionCode'];
    }

    /**
    * Sets regionCode
    *
    * @param string $regionCode 区域编码，必填，范围1-64。
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets filters
    *  过滤条件列表，非必填，最多1个。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsPriceFilter[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsPriceFilter[]|null $filters 过滤条件列表，非必填，最多1个。此参数不携带或携带值为空列表或携带值为null时，不作为筛选条件。
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
        return $this;
    }

    /**
    * Gets needAttributes
    *  是否返回资源规格属性信息，非必填，false：不返回（默认）true：返回
    *
    * @return bool|null
    */
    public function getNeedAttributes()
    {
        return $this->container['needAttributes'];
    }

    /**
    * Sets needAttributes
    *
    * @param bool|null $needAttributes 是否返回资源规格属性信息，非必填，false：不返回（默认）true：返回
    *
    * @return $this
    */
    public function setNeedAttributes($needAttributes)
    {
        $this->container['needAttributes'] = $needAttributes;
        return $this;
    }

    /**
    * Gets needPrice
    *  是否返回资源规格官网定价信息，非必填，false：不返回（默认）true：返回
    *
    * @return bool|null
    */
    public function getNeedPrice()
    {
        return $this->container['needPrice'];
    }

    /**
    * Sets needPrice
    *
    * @param bool|null $needPrice 是否返回资源规格官网定价信息，非必填，false：不返回（默认）true：返回
    *
    * @return $this
    */
    public function setNeedPrice($needPrice)
    {
        $this->container['needPrice'] = $needPrice;
        return $this;
    }

    /**
    * Gets marker
    *  翻页信息，非必填，首页查询不携带此参数或携带值为null，非首页查询传入上一页响应返回的next_marker
    *
    * @return string|null
    */
    public function getMarker()
    {
        return $this->container['marker'];
    }

    /**
    * Sets marker
    *
    * @param string|null $marker 翻页信息，非必填，首页查询不携带此参数或携带值为null，非首页查询传入上一页响应返回的next_marker
    *
    * @return $this
    */
    public function setMarker($marker)
    {
        $this->container['marker'] = $marker;
        return $this;
    }

    /**
    * Gets limit
    *  查询条数，非必填，取值范围1-50，默认值50
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
    * @param int|null $limit 查询条数，非必填，取值范围1-50，默认值50
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

