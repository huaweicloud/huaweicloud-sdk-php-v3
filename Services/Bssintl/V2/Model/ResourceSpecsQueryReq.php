<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ResourceSpecsQueryReq implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ResourceSpecsQueryReq';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：必填，云服务类型编码|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：必填，资源类型编码|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：必填，区域编码|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：必填，1：包年/包月，3：按需|
    * filters  |参数名称：过滤条件| |参数的约束及描述：非必填，过滤条件列表，最多1个|
    * marker  |参数名称：翻页信息| |参数的约束及描述：非必填，首页查询不携带此参数，非首页查询传入上一页响应返回的next_marker|
    * limit  |参数名称：查询条数| |参数的约束及描述：非必填，取值范围1-100，默认值100|
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'cloudServiceType' => 'string',
            'resourceType' => 'string',
            'regionCode' => 'string',
            'chargeMode' => 'string',
            'filters' => '\HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsFilter[]',
            'marker' => 'string',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：必填，云服务类型编码|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：必填，资源类型编码|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：必填，区域编码|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：必填，1：包年/包月，3：按需|
    * filters  |参数名称：过滤条件| |参数的约束及描述：非必填，过滤条件列表，最多1个|
    * marker  |参数名称：翻页信息| |参数的约束及描述：非必填，首页查询不携带此参数，非首页查询传入上一页响应返回的next_marker|
    * limit  |参数名称：查询条数| |参数的约束及描述：非必填，取值范围1-100，默认值100|
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'cloudServiceType' => null,
        'resourceType' => null,
        'regionCode' => null,
        'chargeMode' => null,
        'filters' => null,
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
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：必填，云服务类型编码|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：必填，资源类型编码|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：必填，区域编码|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：必填，1：包年/包月，3：按需|
    * filters  |参数名称：过滤条件| |参数的约束及描述：非必填，过滤条件列表，最多1个|
    * marker  |参数名称：翻页信息| |参数的约束及描述：非必填，首页查询不携带此参数，非首页查询传入上一页响应返回的next_marker|
    * limit  |参数名称：查询条数| |参数的约束及描述：非必填，取值范围1-100，默认值100|
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'cloudServiceType' => 'cloud_service_type',
            'resourceType' => 'resource_type',
            'regionCode' => 'region_code',
            'chargeMode' => 'charge_mode',
            'filters' => 'filters',
            'marker' => 'marker',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：必填，云服务类型编码|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：必填，资源类型编码|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：必填，区域编码|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：必填，1：包年/包月，3：按需|
    * filters  |参数名称：过滤条件| |参数的约束及描述：非必填，过滤条件列表，最多1个|
    * marker  |参数名称：翻页信息| |参数的约束及描述：非必填，首页查询不携带此参数，非首页查询传入上一页响应返回的next_marker|
    * limit  |参数名称：查询条数| |参数的约束及描述：非必填，取值范围1-100，默认值100|
    *
    * @var string[]
    */
    protected static $setters = [
            'cloudServiceType' => 'setCloudServiceType',
            'resourceType' => 'setResourceType',
            'regionCode' => 'setRegionCode',
            'chargeMode' => 'setChargeMode',
            'filters' => 'setFilters',
            'marker' => 'setMarker',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * cloudServiceType  |参数名称：云服务类型编码| |参数的约束及描述：必填，云服务类型编码|
    * resourceType  |参数名称：资源类型编码| |参数的约束及描述：必填，资源类型编码|
    * regionCode  |参数名称：区域编码| |参数的约束及描述：必填，区域编码|
    * chargeMode  |参数名称：计费模式| |参数的约束及描述：必填，1：包年/包月，3：按需|
    * filters  |参数名称：过滤条件| |参数的约束及描述：非必填，过滤条件列表，最多1个|
    * marker  |参数名称：翻页信息| |参数的约束及描述：非必填，首页查询不携带此参数，非首页查询传入上一页响应返回的next_marker|
    * limit  |参数名称：查询条数| |参数的约束及描述：非必填，取值范围1-100，默认值100|
    *
    * @var string[]
    */
    protected static $getters = [
            'cloudServiceType' => 'getCloudServiceType',
            'resourceType' => 'getResourceType',
            'regionCode' => 'getRegionCode',
            'chargeMode' => 'getChargeMode',
            'filters' => 'getFilters',
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
        $this->container['chargeMode'] = isset($data['chargeMode']) ? $data['chargeMode'] : null;
        $this->container['filters'] = isset($data['filters']) ? $data['filters'] : null;
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
        if ($this->container['cloudServiceType'] === null) {
            $invalidProperties[] = "'cloudServiceType' can't be null";
        }
            if ((mb_strlen($this->container['cloudServiceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['cloudServiceType']) < 1)) {
                $invalidProperties[] = "invalid value for 'cloudServiceType', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['resourceType'] === null) {
            $invalidProperties[] = "'resourceType' can't be null";
        }
            if ((mb_strlen($this->container['resourceType']) > 64)) {
                $invalidProperties[] = "invalid value for 'resourceType', the character length must be smaller than or equal to 64.";
            }
            if ((mb_strlen($this->container['resourceType']) < 1)) {
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
        if ($this->container['chargeMode'] === null) {
            $invalidProperties[] = "'chargeMode' can't be null";
        }
            if ((mb_strlen($this->container['chargeMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be smaller than or equal to 32.";
            }
            if ((mb_strlen($this->container['chargeMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargeMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) > 128)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['marker']) && (mb_strlen($this->container['marker']) < 0)) {
                $invalidProperties[] = "invalid value for 'marker', the character length must be bigger than or equal to 0.";
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
    * Gets cloudServiceType
    *  |参数名称：云服务类型编码| |参数的约束及描述：必填，云服务类型编码|
    *
    * @return string
    */
    public function getCloudServiceType()
    {
        return $this->container['cloudServiceType'];
    }

    /**
    * Sets cloudServiceType
    *
    * @param string $cloudServiceType |参数名称：云服务类型编码| |参数的约束及描述：必填，云服务类型编码|
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
    *  |参数名称：资源类型编码| |参数的约束及描述：必填，资源类型编码|
    *
    * @return string
    */
    public function getResourceType()
    {
        return $this->container['resourceType'];
    }

    /**
    * Sets resourceType
    *
    * @param string $resourceType |参数名称：资源类型编码| |参数的约束及描述：必填，资源类型编码|
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
    *  |参数名称：区域编码| |参数的约束及描述：必填，区域编码|
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
    * @param string $regionCode |参数名称：区域编码| |参数的约束及描述：必填，区域编码|
    *
    * @return $this
    */
    public function setRegionCode($regionCode)
    {
        $this->container['regionCode'] = $regionCode;
        return $this;
    }

    /**
    * Gets chargeMode
    *  |参数名称：计费模式| |参数的约束及描述：必填，1：包年/包月，3：按需|
    *
    * @return string
    */
    public function getChargeMode()
    {
        return $this->container['chargeMode'];
    }

    /**
    * Sets chargeMode
    *
    * @param string $chargeMode |参数名称：计费模式| |参数的约束及描述：必填，1：包年/包月，3：按需|
    *
    * @return $this
    */
    public function setChargeMode($chargeMode)
    {
        $this->container['chargeMode'] = $chargeMode;
        return $this;
    }

    /**
    * Gets filters
    *  |参数名称：过滤条件| |参数的约束及描述：非必填，过滤条件列表，最多1个|
    *
    * @return \HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsFilter[]|null
    */
    public function getFilters()
    {
        return $this->container['filters'];
    }

    /**
    * Sets filters
    *
    * @param \HuaweiCloud\SDK\Bssintl\V2\Model\ResourceSpecsFilter[]|null $filters |参数名称：过滤条件| |参数的约束及描述：非必填，过滤条件列表，最多1个|
    *
    * @return $this
    */
    public function setFilters($filters)
    {
        $this->container['filters'] = $filters;
        return $this;
    }

    /**
    * Gets marker
    *  |参数名称：翻页信息| |参数的约束及描述：非必填，首页查询不携带此参数，非首页查询传入上一页响应返回的next_marker|
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
    * @param string|null $marker |参数名称：翻页信息| |参数的约束及描述：非必填，首页查询不携带此参数，非首页查询传入上一页响应返回的next_marker|
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
    *  |参数名称：查询条数| |参数的约束及描述：非必填，取值范围1-100，默认值100|
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
    * @param int|null $limit |参数名称：查询条数| |参数的约束及描述：非必填，取值范围1-100，默认值100|
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

