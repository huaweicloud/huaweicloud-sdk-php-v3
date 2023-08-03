<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListResourceUsageSummaryRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListResourceUsageSummaryRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * xLanguage  语言。en_US：英文；zh_CN：中文。默认：zh_CN：中文
    * billCycle  账期，东八区时间，格式为yyyy-MM。
    * serviceTypeCode  云服务类型，当前仅支持：hws.service.type.cdn：内容分发网络,hws.service.type.obs：对象存储服务,hws.service.type.vpc：虚拟私有云,hws.service.type.iec：智能边缘云
    * resourceTypeCode  资源类型编码，当前仅支持：hws.resource.type.cdn：CDN,hws.resource.type.obs：云存储,hws.resource.type.bandwidth：固定带宽,hws.resource.type.edgebandwidth：边缘固定带宽.资源类型和云服务类型的对应关系可调用[根据云服务类型查询资源列表](https://support.huaweicloud.com/api-oce/qct_00003.html)接口获取。
    * usageType  使用量类型编码，目前仅支持：95Peak：中国大陆月95峰值带宽_1024进制,95peak_1000：中国大陆月95峰值带宽_1000进制,bandwidth95peak：95峰值带宽,95peak_plus：增强型95峰值.资源类型和使用量类型的对应关系可调用[查询使用量类型列表接](https://support.huaweicloud.com/api-oce/qct_00004.html)口获取。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'xLanguage' => 'string',
            'billCycle' => 'string',
            'serviceTypeCode' => 'string',
            'resourceTypeCode' => 'string',
            'usageType' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * xLanguage  语言。en_US：英文；zh_CN：中文。默认：zh_CN：中文
    * billCycle  账期，东八区时间，格式为yyyy-MM。
    * serviceTypeCode  云服务类型，当前仅支持：hws.service.type.cdn：内容分发网络,hws.service.type.obs：对象存储服务,hws.service.type.vpc：虚拟私有云,hws.service.type.iec：智能边缘云
    * resourceTypeCode  资源类型编码，当前仅支持：hws.resource.type.cdn：CDN,hws.resource.type.obs：云存储,hws.resource.type.bandwidth：固定带宽,hws.resource.type.edgebandwidth：边缘固定带宽.资源类型和云服务类型的对应关系可调用[根据云服务类型查询资源列表](https://support.huaweicloud.com/api-oce/qct_00003.html)接口获取。
    * usageType  使用量类型编码，目前仅支持：95Peak：中国大陆月95峰值带宽_1024进制,95peak_1000：中国大陆月95峰值带宽_1000进制,bandwidth95peak：95峰值带宽,95peak_plus：增强型95峰值.资源类型和使用量类型的对应关系可调用[查询使用量类型列表接](https://support.huaweicloud.com/api-oce/qct_00004.html)口获取。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'xLanguage' => null,
        'billCycle' => null,
        'serviceTypeCode' => null,
        'resourceTypeCode' => null,
        'usageType' => null,
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
    * xLanguage  语言。en_US：英文；zh_CN：中文。默认：zh_CN：中文
    * billCycle  账期，东八区时间，格式为yyyy-MM。
    * serviceTypeCode  云服务类型，当前仅支持：hws.service.type.cdn：内容分发网络,hws.service.type.obs：对象存储服务,hws.service.type.vpc：虚拟私有云,hws.service.type.iec：智能边缘云
    * resourceTypeCode  资源类型编码，当前仅支持：hws.resource.type.cdn：CDN,hws.resource.type.obs：云存储,hws.resource.type.bandwidth：固定带宽,hws.resource.type.edgebandwidth：边缘固定带宽.资源类型和云服务类型的对应关系可调用[根据云服务类型查询资源列表](https://support.huaweicloud.com/api-oce/qct_00003.html)接口获取。
    * usageType  使用量类型编码，目前仅支持：95Peak：中国大陆月95峰值带宽_1024进制,95peak_1000：中国大陆月95峰值带宽_1000进制,bandwidth95peak：95峰值带宽,95peak_plus：增强型95峰值.资源类型和使用量类型的对应关系可调用[查询使用量类型列表接](https://support.huaweicloud.com/api-oce/qct_00004.html)口获取。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'xLanguage' => 'X-Language',
            'billCycle' => 'bill_cycle',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeCode' => 'resource_type_code',
            'usageType' => 'usage_type',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * xLanguage  语言。en_US：英文；zh_CN：中文。默认：zh_CN：中文
    * billCycle  账期，东八区时间，格式为yyyy-MM。
    * serviceTypeCode  云服务类型，当前仅支持：hws.service.type.cdn：内容分发网络,hws.service.type.obs：对象存储服务,hws.service.type.vpc：虚拟私有云,hws.service.type.iec：智能边缘云
    * resourceTypeCode  资源类型编码，当前仅支持：hws.resource.type.cdn：CDN,hws.resource.type.obs：云存储,hws.resource.type.bandwidth：固定带宽,hws.resource.type.edgebandwidth：边缘固定带宽.资源类型和云服务类型的对应关系可调用[根据云服务类型查询资源列表](https://support.huaweicloud.com/api-oce/qct_00003.html)接口获取。
    * usageType  使用量类型编码，目前仅支持：95Peak：中国大陆月95峰值带宽_1024进制,95peak_1000：中国大陆月95峰值带宽_1000进制,bandwidth95peak：95峰值带宽,95peak_plus：增强型95峰值.资源类型和使用量类型的对应关系可调用[查询使用量类型列表接](https://support.huaweicloud.com/api-oce/qct_00004.html)口获取。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $setters = [
            'xLanguage' => 'setXLanguage',
            'billCycle' => 'setBillCycle',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeCode' => 'setResourceTypeCode',
            'usageType' => 'setUsageType',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * xLanguage  语言。en_US：英文；zh_CN：中文。默认：zh_CN：中文
    * billCycle  账期，东八区时间，格式为yyyy-MM。
    * serviceTypeCode  云服务类型，当前仅支持：hws.service.type.cdn：内容分发网络,hws.service.type.obs：对象存储服务,hws.service.type.vpc：虚拟私有云,hws.service.type.iec：智能边缘云
    * resourceTypeCode  资源类型编码，当前仅支持：hws.resource.type.cdn：CDN,hws.resource.type.obs：云存储,hws.resource.type.bandwidth：固定带宽,hws.resource.type.edgebandwidth：边缘固定带宽.资源类型和云服务类型的对应关系可调用[根据云服务类型查询资源列表](https://support.huaweicloud.com/api-oce/qct_00003.html)接口获取。
    * usageType  使用量类型编码，目前仅支持：95Peak：中国大陆月95峰值带宽_1024进制,95peak_1000：中国大陆月95峰值带宽_1000进制,bandwidth95peak：95峰值带宽,95peak_plus：增强型95峰值.资源类型和使用量类型的对应关系可调用[查询使用量类型列表接](https://support.huaweicloud.com/api-oce/qct_00004.html)口获取。
    * offset  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
    * limit  每次查询的数量限制。默认值为10。
    *
    * @var string[]
    */
    protected static $getters = [
            'xLanguage' => 'getXLanguage',
            'billCycle' => 'getBillCycle',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeCode' => 'getResourceTypeCode',
            'usageType' => 'getUsageType',
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
        $this->container['xLanguage'] = isset($data['xLanguage']) ? $data['xLanguage'] : null;
        $this->container['billCycle'] = isset($data['billCycle']) ? $data['billCycle'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['usageType'] = isset($data['usageType']) ? $data['usageType'] : null;
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
        if ($this->container['billCycle'] === null) {
            $invalidProperties[] = "'billCycle' can't be null";
        }
        if ($this->container['serviceTypeCode'] === null) {
            $invalidProperties[] = "'serviceTypeCode' can't be null";
        }
        if ($this->container['resourceTypeCode'] === null) {
            $invalidProperties[] = "'resourceTypeCode' can't be null";
        }
        if ($this->container['usageType'] === null) {
            $invalidProperties[] = "'usageType' can't be null";
        }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2147483647)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2147483647.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 1000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 1000.";
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
    * Gets xLanguage
    *  语言。en_US：英文；zh_CN：中文。默认：zh_CN：中文
    *
    * @return string|null
    */
    public function getXLanguage()
    {
        return $this->container['xLanguage'];
    }

    /**
    * Sets xLanguage
    *
    * @param string|null $xLanguage 语言。en_US：英文；zh_CN：中文。默认：zh_CN：中文
    *
    * @return $this
    */
    public function setXLanguage($xLanguage)
    {
        $this->container['xLanguage'] = $xLanguage;
        return $this;
    }

    /**
    * Gets billCycle
    *  账期，东八区时间，格式为yyyy-MM。
    *
    * @return string
    */
    public function getBillCycle()
    {
        return $this->container['billCycle'];
    }

    /**
    * Sets billCycle
    *
    * @param string $billCycle 账期，东八区时间，格式为yyyy-MM。
    *
    * @return $this
    */
    public function setBillCycle($billCycle)
    {
        $this->container['billCycle'] = $billCycle;
        return $this;
    }

    /**
    * Gets serviceTypeCode
    *  云服务类型，当前仅支持：hws.service.type.cdn：内容分发网络,hws.service.type.obs：对象存储服务,hws.service.type.vpc：虚拟私有云,hws.service.type.iec：智能边缘云
    *
    * @return string
    */
    public function getServiceTypeCode()
    {
        return $this->container['serviceTypeCode'];
    }

    /**
    * Sets serviceTypeCode
    *
    * @param string $serviceTypeCode 云服务类型，当前仅支持：hws.service.type.cdn：内容分发网络,hws.service.type.obs：对象存储服务,hws.service.type.vpc：虚拟私有云,hws.service.type.iec：智能边缘云
    *
    * @return $this
    */
    public function setServiceTypeCode($serviceTypeCode)
    {
        $this->container['serviceTypeCode'] = $serviceTypeCode;
        return $this;
    }

    /**
    * Gets resourceTypeCode
    *  资源类型编码，当前仅支持：hws.resource.type.cdn：CDN,hws.resource.type.obs：云存储,hws.resource.type.bandwidth：固定带宽,hws.resource.type.edgebandwidth：边缘固定带宽.资源类型和云服务类型的对应关系可调用[根据云服务类型查询资源列表](https://support.huaweicloud.com/api-oce/qct_00003.html)接口获取。
    *
    * @return string
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string $resourceTypeCode 资源类型编码，当前仅支持：hws.resource.type.cdn：CDN,hws.resource.type.obs：云存储,hws.resource.type.bandwidth：固定带宽,hws.resource.type.edgebandwidth：边缘固定带宽.资源类型和云服务类型的对应关系可调用[根据云服务类型查询资源列表](https://support.huaweicloud.com/api-oce/qct_00003.html)接口获取。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets usageType
    *  使用量类型编码，目前仅支持：95Peak：中国大陆月95峰值带宽_1024进制,95peak_1000：中国大陆月95峰值带宽_1000进制,bandwidth95peak：95峰值带宽,95peak_plus：增强型95峰值.资源类型和使用量类型的对应关系可调用[查询使用量类型列表接](https://support.huaweicloud.com/api-oce/qct_00004.html)口获取。
    *
    * @return string
    */
    public function getUsageType()
    {
        return $this->container['usageType'];
    }

    /**
    * Sets usageType
    *
    * @param string $usageType 使用量类型编码，目前仅支持：95Peak：中国大陆月95峰值带宽_1024进制,95peak_1000：中国大陆月95峰值带宽_1000进制,bandwidth95peak：95峰值带宽,95peak_plus：增强型95峰值.资源类型和使用量类型的对应关系可调用[查询使用量类型列表接](https://support.huaweicloud.com/api-oce/qct_00004.html)口获取。
    *
    * @return $this
    */
    public function setUsageType($usageType)
    {
        $this->container['usageType'] = $usageType;
        return $this;
    }

    /**
    * Gets offset
    *  偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    * @param int|null $offset 偏移量，从0开始。默认值为0。 说明： offset用于分页处理，如不涉及分页，请使用默认值0。offset表示相对于满足条件的第一个数据的偏移量。如offset = 1，则返回满足条件的第二个数据至最后一个数据。例如，满足查询条件的结果共10条数据，limit取值为10，offset取值为1，则返回的数据为2~10，第一条数据不返回。
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
    *  每次查询的数量限制。默认值为10。
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
    * @param int|null $limit 每次查询的数量限制。默认值为10。
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

