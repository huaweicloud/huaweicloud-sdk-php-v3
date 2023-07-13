<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CustomerOnDemandResource implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CustomerOnDemandResource';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availabilityZoneCode  所属可用区的编码。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceId  资源ID。
    * resourceName  资源实例名称。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * resourceInfo  按需资源的容量大小。 格式如：\"resourceInfo\": \"{\\\"specSize\\\":40.0}\"
    * productSpecDesc  产品规格描述。例如： 虚拟机：“通用计算增强型|c6.2xlarge.4|8vCPUs|32GB|linux”硬盘：“云硬盘_SATA_LXH01|40.0GB”
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'customerId' => 'string',
            'regionCode' => 'string',
            'availabilityZoneCode' => 'string',
            'serviceTypeCode' => 'string',
            'resourceTypeCode' => 'string',
            'serviceTypeName' => 'string',
            'resourceTypeName' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'status' => 'int',
            'resourceSpecCode' => 'string',
            'resourceInfo' => 'string',
            'productSpecDesc' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * customerId  客户账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availabilityZoneCode  所属可用区的编码。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceId  资源ID。
    * resourceName  资源实例名称。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * resourceInfo  按需资源的容量大小。 格式如：\"resourceInfo\": \"{\\\"specSize\\\":40.0}\"
    * productSpecDesc  产品规格描述。例如： 虚拟机：“通用计算增强型|c6.2xlarge.4|8vCPUs|32GB|linux”硬盘：“云硬盘_SATA_LXH01|40.0GB”
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'customerId' => null,
        'regionCode' => null,
        'availabilityZoneCode' => null,
        'serviceTypeCode' => null,
        'resourceTypeCode' => null,
        'serviceTypeName' => null,
        'resourceTypeName' => null,
        'resourceId' => null,
        'resourceName' => null,
        'effectiveTime' => null,
        'expireTime' => null,
        'status' => 'int32',
        'resourceSpecCode' => null,
        'resourceInfo' => null,
        'productSpecDesc' => null
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
    * customerId  客户账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availabilityZoneCode  所属可用区的编码。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceId  资源ID。
    * resourceName  资源实例名称。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * resourceInfo  按需资源的容量大小。 格式如：\"resourceInfo\": \"{\\\"specSize\\\":40.0}\"
    * productSpecDesc  产品规格描述。例如： 虚拟机：“通用计算增强型|c6.2xlarge.4|8vCPUs|32GB|linux”硬盘：“云硬盘_SATA_LXH01|40.0GB”
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'customerId' => 'customer_id',
            'regionCode' => 'region_code',
            'availabilityZoneCode' => 'availability_zone_code',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeCode' => 'resource_type_code',
            'serviceTypeName' => 'service_type_name',
            'resourceTypeName' => 'resource_type_name',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'status' => 'status',
            'resourceSpecCode' => 'resource_spec_code',
            'resourceInfo' => 'resource_info',
            'productSpecDesc' => 'product_spec_desc'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * customerId  客户账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availabilityZoneCode  所属可用区的编码。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceId  资源ID。
    * resourceName  资源实例名称。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * resourceInfo  按需资源的容量大小。 格式如：\"resourceInfo\": \"{\\\"specSize\\\":40.0}\"
    * productSpecDesc  产品规格描述。例如： 虚拟机：“通用计算增强型|c6.2xlarge.4|8vCPUs|32GB|linux”硬盘：“云硬盘_SATA_LXH01|40.0GB”
    *
    * @var string[]
    */
    protected static $setters = [
            'customerId' => 'setCustomerId',
            'regionCode' => 'setRegionCode',
            'availabilityZoneCode' => 'setAvailabilityZoneCode',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeCode' => 'setResourceTypeCode',
            'serviceTypeName' => 'setServiceTypeName',
            'resourceTypeName' => 'setResourceTypeName',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'status' => 'setStatus',
            'resourceSpecCode' => 'setResourceSpecCode',
            'resourceInfo' => 'setResourceInfo',
            'productSpecDesc' => 'setProductSpecDesc'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * customerId  客户账号ID。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * availabilityZoneCode  所属可用区的编码。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * resourceId  资源ID。
    * resourceName  资源实例名称。
    * effectiveTime  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * expireTime  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    * status  资源状态： 1：正常（已开通）2：宽限期3：冻结中4：变更中5：正在关闭6：已关闭
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * resourceInfo  按需资源的容量大小。 格式如：\"resourceInfo\": \"{\\\"specSize\\\":40.0}\"
    * productSpecDesc  产品规格描述。例如： 虚拟机：“通用计算增强型|c6.2xlarge.4|8vCPUs|32GB|linux”硬盘：“云硬盘_SATA_LXH01|40.0GB”
    *
    * @var string[]
    */
    protected static $getters = [
            'customerId' => 'getCustomerId',
            'regionCode' => 'getRegionCode',
            'availabilityZoneCode' => 'getAvailabilityZoneCode',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeCode' => 'getResourceTypeCode',
            'serviceTypeName' => 'getServiceTypeName',
            'resourceTypeName' => 'getResourceTypeName',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'status' => 'getStatus',
            'resourceSpecCode' => 'getResourceSpecCode',
            'resourceInfo' => 'getResourceInfo',
            'productSpecDesc' => 'getProductSpecDesc'
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
        $this->container['availabilityZoneCode'] = isset($data['availabilityZoneCode']) ? $data['availabilityZoneCode'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['resourceInfo'] = isset($data['resourceInfo']) ? $data['resourceInfo'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    *  客户账号ID。
    *
    * @return string|null
    */
    public function getCustomerId()
    {
        return $this->container['customerId'];
    }

    /**
    * Sets customerId
    *
    * @param string|null $customerId 客户账号ID。
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
    * Gets availabilityZoneCode
    *  所属可用区的编码。
    *
    * @return string|null
    */
    public function getAvailabilityZoneCode()
    {
        return $this->container['availabilityZoneCode'];
    }

    /**
    * Sets availabilityZoneCode
    *
    * @param string|null $availabilityZoneCode 所属可用区的编码。
    *
    * @return $this
    */
    public function setAvailabilityZoneCode($availabilityZoneCode)
    {
        $this->container['availabilityZoneCode'] = $availabilityZoneCode;
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
    * Gets resourceTypeCode
    *  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    *
    * @return string|null
    */
    public function getResourceTypeCode()
    {
        return $this->container['resourceTypeCode'];
    }

    /**
    * Sets resourceTypeCode
    *
    * @param string|null $resourceTypeCode 资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    *
    * @return $this
    */
    public function setResourceTypeCode($resourceTypeCode)
    {
        $this->container['resourceTypeCode'] = $resourceTypeCode;
        return $this;
    }

    /**
    * Gets serviceTypeName
    *  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    *
    * @return string|null
    */
    public function getServiceTypeName()
    {
        return $this->container['serviceTypeName'];
    }

    /**
    * Sets serviceTypeName
    *
    * @param string|null $serviceTypeName 云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    *
    * @return $this
    */
    public function setServiceTypeName($serviceTypeName)
    {
        $this->container['serviceTypeName'] = $serviceTypeName;
        return $this;
    }

    /**
    * Gets resourceTypeName
    *  资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @return string|null
    */
    public function getResourceTypeName()
    {
        return $this->container['resourceTypeName'];
    }

    /**
    * Sets resourceTypeName
    *
    * @param string|null $resourceTypeName 资源类型名称。例如ECS的资源类型名称为“云主机”。
    *
    * @return $this
    */
    public function setResourceTypeName($resourceTypeName)
    {
        $this->container['resourceTypeName'] = $resourceTypeName;
        return $this;
    }

    /**
    * Gets resourceId
    *  资源ID。
    *
    * @return string|null
    */
    public function getResourceId()
    {
        return $this->container['resourceId'];
    }

    /**
    * Sets resourceId
    *
    * @param string|null $resourceId 资源ID。
    *
    * @return $this
    */
    public function setResourceId($resourceId)
    {
        $this->container['resourceId'] = $resourceId;
        return $this;
    }

    /**
    * Gets resourceName
    *  资源实例名称。
    *
    * @return string|null
    */
    public function getResourceName()
    {
        return $this->container['resourceName'];
    }

    /**
    * Sets resourceName
    *
    * @param string|null $resourceName 资源实例名称。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return string|null
    */
    public function getEffectiveTime()
    {
        return $this->container['effectiveTime'];
    }

    /**
    * Sets effectiveTime
    *
    * @param string|null $effectiveTime 生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setEffectiveTime($effectiveTime)
    {
        $this->container['effectiveTime'] = $effectiveTime;
        return $this;
    }

    /**
    * Gets expireTime
    *  失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
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
    * @param string|null $expireTime 失效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。 其中，HH范围是0～23，mm和ss范围是0～59。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
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
    * Gets resourceSpecCode
    *  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    *
    * @return string|null
    */
    public function getResourceSpecCode()
    {
        return $this->container['resourceSpecCode'];
    }

    /**
    * Sets resourceSpecCode
    *
    * @param string|null $resourceSpecCode 云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    *
    * @return $this
    */
    public function setResourceSpecCode($resourceSpecCode)
    {
        $this->container['resourceSpecCode'] = $resourceSpecCode;
        return $this;
    }

    /**
    * Gets resourceInfo
    *  按需资源的容量大小。 格式如：\"resourceInfo\": \"{\\\"specSize\\\":40.0}\"
    *
    * @return string|null
    */
    public function getResourceInfo()
    {
        return $this->container['resourceInfo'];
    }

    /**
    * Sets resourceInfo
    *
    * @param string|null $resourceInfo 按需资源的容量大小。 格式如：\"resourceInfo\": \"{\\\"specSize\\\":40.0}\"
    *
    * @return $this
    */
    public function setResourceInfo($resourceInfo)
    {
        $this->container['resourceInfo'] = $resourceInfo;
        return $this;
    }

    /**
    * Gets productSpecDesc
    *  产品规格描述。例如： 虚拟机：“通用计算增强型|c6.2xlarge.4|8vCPUs|32GB|linux”硬盘：“云硬盘_SATA_LXH01|40.0GB”
    *
    * @return string|null
    */
    public function getProductSpecDesc()
    {
        return $this->container['productSpecDesc'];
    }

    /**
    * Sets productSpecDesc
    *
    * @param string|null $productSpecDesc 产品规格描述。例如： 虚拟机：“通用计算增强型|c6.2xlarge.4|8vCPUs|32GB|linux”硬盘：“云硬盘_SATA_LXH01|40.0GB”
    *
    * @return $this
    */
    public function setProductSpecDesc($productSpecDesc)
    {
        $this->container['productSpecDesc'] = $productSpecDesc;
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

