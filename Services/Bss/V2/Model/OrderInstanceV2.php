<?php

namespace HuaweiCloud\SDK\Bss\V2\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class OrderInstanceV2 implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'OrderInstanceV2';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * id  标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。
    * resourceId  资源ID。
    * resourceName  资源实例名。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * projectId  资源项目ID。
    * productId  产品ID。
    * parentResourceId  父资源ID。
    * isMainResource  是否是主资源。 0：非主资源1：主资源
    * status  资源状态。状态说明请参见资源状态说明。 2：使用中3：已关闭（页面不展示这个状态）4：已冻结5：已过期
    * effectiveTime  资源生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  资源过期时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expirePolicy  资源到期后的扣费策略： 0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）  说明： 只有“3”表示该资源是自动续订，其他情况下，都是非自动续订下的到期策略。
    * productSpecDesc  产品规格描述
    * specSize  线性大小
    * specSizeMeasureId  线性大小单位
    * updateTime  |参数名称：资源更新时间。| |参数约束及描述：资源更新时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-12-25T07:32:04Z”。|
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'id' => 'string',
            'resourceId' => 'string',
            'resourceName' => 'string',
            'regionCode' => 'string',
            'serviceTypeCode' => 'string',
            'resourceTypeCode' => 'string',
            'resourceTypeName' => 'string',
            'serviceTypeName' => 'string',
            'resourceSpecCode' => 'string',
            'projectId' => 'string',
            'productId' => 'string',
            'parentResourceId' => 'string',
            'isMainResource' => 'int',
            'status' => 'int',
            'effectiveTime' => 'string',
            'expireTime' => 'string',
            'expirePolicy' => 'int',
            'productSpecDesc' => 'string',
            'specSize' => 'float',
            'specSizeMeasureId' => 'int',
            'updateTime' => 'string',
            'enterpriseProject' => '\HuaweiCloud\SDK\Bss\V2\Model\EnterpriseProject'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。
    * resourceId  资源ID。
    * resourceName  资源实例名。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * projectId  资源项目ID。
    * productId  产品ID。
    * parentResourceId  父资源ID。
    * isMainResource  是否是主资源。 0：非主资源1：主资源
    * status  资源状态。状态说明请参见资源状态说明。 2：使用中3：已关闭（页面不展示这个状态）4：已冻结5：已过期
    * effectiveTime  资源生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  资源过期时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expirePolicy  资源到期后的扣费策略： 0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）  说明： 只有“3”表示该资源是自动续订，其他情况下，都是非自动续订下的到期策略。
    * productSpecDesc  产品规格描述
    * specSize  线性大小
    * specSizeMeasureId  线性大小单位
    * updateTime  |参数名称：资源更新时间。| |参数约束及描述：资源更新时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-12-25T07:32:04Z”。|
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'id' => null,
        'resourceId' => null,
        'resourceName' => null,
        'regionCode' => null,
        'serviceTypeCode' => null,
        'resourceTypeCode' => null,
        'resourceTypeName' => null,
        'serviceTypeName' => null,
        'resourceSpecCode' => null,
        'projectId' => null,
        'productId' => null,
        'parentResourceId' => null,
        'isMainResource' => 'int32',
        'status' => 'int32',
        'effectiveTime' => null,
        'expireTime' => null,
        'expirePolicy' => 'int32',
        'productSpecDesc' => null,
        'specSize' => 'bigdecimal',
        'specSizeMeasureId' => 'int32',
        'updateTime' => null,
        'enterpriseProject' => null
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
    * id  标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。
    * resourceId  资源ID。
    * resourceName  资源实例名。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * projectId  资源项目ID。
    * productId  产品ID。
    * parentResourceId  父资源ID。
    * isMainResource  是否是主资源。 0：非主资源1：主资源
    * status  资源状态。状态说明请参见资源状态说明。 2：使用中3：已关闭（页面不展示这个状态）4：已冻结5：已过期
    * effectiveTime  资源生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  资源过期时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expirePolicy  资源到期后的扣费策略： 0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）  说明： 只有“3”表示该资源是自动续订，其他情况下，都是非自动续订下的到期策略。
    * productSpecDesc  产品规格描述
    * specSize  线性大小
    * specSizeMeasureId  线性大小单位
    * updateTime  |参数名称：资源更新时间。| |参数约束及描述：资源更新时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-12-25T07:32:04Z”。|
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'id' => 'id',
            'resourceId' => 'resource_id',
            'resourceName' => 'resource_name',
            'regionCode' => 'region_code',
            'serviceTypeCode' => 'service_type_code',
            'resourceTypeCode' => 'resource_type_code',
            'resourceTypeName' => 'resource_type_name',
            'serviceTypeName' => 'service_type_name',
            'resourceSpecCode' => 'resource_spec_code',
            'projectId' => 'project_id',
            'productId' => 'product_id',
            'parentResourceId' => 'parent_resource_id',
            'isMainResource' => 'is_main_resource',
            'status' => 'status',
            'effectiveTime' => 'effective_time',
            'expireTime' => 'expire_time',
            'expirePolicy' => 'expire_policy',
            'productSpecDesc' => 'product_spec_desc',
            'specSize' => 'spec_size',
            'specSizeMeasureId' => 'spec_size_measure_id',
            'updateTime' => 'update_time',
            'enterpriseProject' => 'enterprise_project'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。
    * resourceId  资源ID。
    * resourceName  资源实例名。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * projectId  资源项目ID。
    * productId  产品ID。
    * parentResourceId  父资源ID。
    * isMainResource  是否是主资源。 0：非主资源1：主资源
    * status  资源状态。状态说明请参见资源状态说明。 2：使用中3：已关闭（页面不展示这个状态）4：已冻结5：已过期
    * effectiveTime  资源生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  资源过期时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expirePolicy  资源到期后的扣费策略： 0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）  说明： 只有“3”表示该资源是自动续订，其他情况下，都是非自动续订下的到期策略。
    * productSpecDesc  产品规格描述
    * specSize  线性大小
    * specSizeMeasureId  线性大小单位
    * updateTime  |参数名称：资源更新时间。| |参数约束及描述：资源更新时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-12-25T07:32:04Z”。|
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $setters = [
            'id' => 'setId',
            'resourceId' => 'setResourceId',
            'resourceName' => 'setResourceName',
            'regionCode' => 'setRegionCode',
            'serviceTypeCode' => 'setServiceTypeCode',
            'resourceTypeCode' => 'setResourceTypeCode',
            'resourceTypeName' => 'setResourceTypeName',
            'serviceTypeName' => 'setServiceTypeName',
            'resourceSpecCode' => 'setResourceSpecCode',
            'projectId' => 'setProjectId',
            'productId' => 'setProductId',
            'parentResourceId' => 'setParentResourceId',
            'isMainResource' => 'setIsMainResource',
            'status' => 'setStatus',
            'effectiveTime' => 'setEffectiveTime',
            'expireTime' => 'setExpireTime',
            'expirePolicy' => 'setExpirePolicy',
            'productSpecDesc' => 'setProductSpecDesc',
            'specSize' => 'setSpecSize',
            'specSizeMeasureId' => 'setSpecSizeMeasureId',
            'updateTime' => 'setUpdateTime',
            'enterpriseProject' => 'setEnterpriseProject'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。
    * resourceId  资源ID。
    * resourceName  资源实例名。
    * regionCode  云服务区编码，例如：“cn-north-1”。具体请参见地区和终端节点对应云服务的“区域”列的值。
    * serviceTypeCode  云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。您可以调用查询云服务类型列表接口获取。
    * resourceTypeCode  资源类型编码，例如ECS的VM为“hws.resource.type.vm”。您可以调用查询资源类型列表接口获取。
    * resourceTypeName  资源类型名称。例如ECS的资源类型名称为“云主机”。
    * serviceTypeName  云服务类型名称。例如ECS的云服务类型名称为“弹性云服务器”。
    * resourceSpecCode  云服务产品的资源规格。如果是VM的资源规格，则需要在规格后面添加“.win”或“.linux”，例如“s2.small.1.linux”。
    * projectId  资源项目ID。
    * productId  产品ID。
    * parentResourceId  父资源ID。
    * isMainResource  是否是主资源。 0：非主资源1：主资源
    * status  资源状态。状态说明请参见资源状态说明。 2：使用中3：已关闭（页面不展示这个状态）4：已冻结5：已过期
    * effectiveTime  资源生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expireTime  资源过期时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    * expirePolicy  资源到期后的扣费策略： 0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）  说明： 只有“3”表示该资源是自动续订，其他情况下，都是非自动续订下的到期策略。
    * productSpecDesc  产品规格描述
    * specSize  线性大小
    * specSizeMeasureId  线性大小单位
    * updateTime  |参数名称：资源更新时间。| |参数约束及描述：资源更新时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-12-25T07:32:04Z”。|
    * enterpriseProject  enterpriseProject
    *
    * @var string[]
    */
    protected static $getters = [
            'id' => 'getId',
            'resourceId' => 'getResourceId',
            'resourceName' => 'getResourceName',
            'regionCode' => 'getRegionCode',
            'serviceTypeCode' => 'getServiceTypeCode',
            'resourceTypeCode' => 'getResourceTypeCode',
            'resourceTypeName' => 'getResourceTypeName',
            'serviceTypeName' => 'getServiceTypeName',
            'resourceSpecCode' => 'getResourceSpecCode',
            'projectId' => 'getProjectId',
            'productId' => 'getProductId',
            'parentResourceId' => 'getParentResourceId',
            'isMainResource' => 'getIsMainResource',
            'status' => 'getStatus',
            'effectiveTime' => 'getEffectiveTime',
            'expireTime' => 'getExpireTime',
            'expirePolicy' => 'getExpirePolicy',
            'productSpecDesc' => 'getProductSpecDesc',
            'specSize' => 'getSpecSize',
            'specSizeMeasureId' => 'getSpecSizeMeasureId',
            'updateTime' => 'getUpdateTime',
            'enterpriseProject' => 'getEnterpriseProject'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['resourceId'] = isset($data['resourceId']) ? $data['resourceId'] : null;
        $this->container['resourceName'] = isset($data['resourceName']) ? $data['resourceName'] : null;
        $this->container['regionCode'] = isset($data['regionCode']) ? $data['regionCode'] : null;
        $this->container['serviceTypeCode'] = isset($data['serviceTypeCode']) ? $data['serviceTypeCode'] : null;
        $this->container['resourceTypeCode'] = isset($data['resourceTypeCode']) ? $data['resourceTypeCode'] : null;
        $this->container['resourceTypeName'] = isset($data['resourceTypeName']) ? $data['resourceTypeName'] : null;
        $this->container['serviceTypeName'] = isset($data['serviceTypeName']) ? $data['serviceTypeName'] : null;
        $this->container['resourceSpecCode'] = isset($data['resourceSpecCode']) ? $data['resourceSpecCode'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['productId'] = isset($data['productId']) ? $data['productId'] : null;
        $this->container['parentResourceId'] = isset($data['parentResourceId']) ? $data['parentResourceId'] : null;
        $this->container['isMainResource'] = isset($data['isMainResource']) ? $data['isMainResource'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['effectiveTime'] = isset($data['effectiveTime']) ? $data['effectiveTime'] : null;
        $this->container['expireTime'] = isset($data['expireTime']) ? $data['expireTime'] : null;
        $this->container['expirePolicy'] = isset($data['expirePolicy']) ? $data['expirePolicy'] : null;
        $this->container['productSpecDesc'] = isset($data['productSpecDesc']) ? $data['productSpecDesc'] : null;
        $this->container['specSize'] = isset($data['specSize']) ? $data['specSize'] : null;
        $this->container['specSizeMeasureId'] = isset($data['specSizeMeasureId']) ? $data['specSizeMeasureId'] : null;
        $this->container['updateTime'] = isset($data['updateTime']) ? $data['updateTime'] : null;
        $this->container['enterpriseProject'] = isset($data['enterpriseProject']) ? $data['enterpriseProject'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['productSpecDesc']) && (mb_strlen($this->container['productSpecDesc']) > 512)) {
                $invalidProperties[] = "invalid value for 'productSpecDesc', the character length must be smaller than or equal to 512.";
            }
            if (!is_null($this->container['productSpecDesc']) && (mb_strlen($this->container['productSpecDesc']) < 0)) {
                $invalidProperties[] = "invalid value for 'productSpecDesc', the character length must be bigger than or equal to 0.";
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
    * Gets id
    *  标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。
    *
    * @return string|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string|null $id 标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
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
    *  资源实例名。
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
    * @param string|null $resourceName 资源实例名。
    *
    * @return $this
    */
    public function setResourceName($resourceName)
    {
        $this->container['resourceName'] = $resourceName;
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
    * Gets projectId
    *  资源项目ID。
    *
    * @return string|null
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string|null $projectId 资源项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets productId
    *  产品ID。
    *
    * @return string|null
    */
    public function getProductId()
    {
        return $this->container['productId'];
    }

    /**
    * Sets productId
    *
    * @param string|null $productId 产品ID。
    *
    * @return $this
    */
    public function setProductId($productId)
    {
        $this->container['productId'] = $productId;
        return $this;
    }

    /**
    * Gets parentResourceId
    *  父资源ID。
    *
    * @return string|null
    */
    public function getParentResourceId()
    {
        return $this->container['parentResourceId'];
    }

    /**
    * Sets parentResourceId
    *
    * @param string|null $parentResourceId 父资源ID。
    *
    * @return $this
    */
    public function setParentResourceId($parentResourceId)
    {
        $this->container['parentResourceId'] = $parentResourceId;
        return $this;
    }

    /**
    * Gets isMainResource
    *  是否是主资源。 0：非主资源1：主资源
    *
    * @return int|null
    */
    public function getIsMainResource()
    {
        return $this->container['isMainResource'];
    }

    /**
    * Sets isMainResource
    *
    * @param int|null $isMainResource 是否是主资源。 0：非主资源1：主资源
    *
    * @return $this
    */
    public function setIsMainResource($isMainResource)
    {
        $this->container['isMainResource'] = $isMainResource;
        return $this;
    }

    /**
    * Gets status
    *  资源状态。状态说明请参见资源状态说明。 2：使用中3：已关闭（页面不展示这个状态）4：已冻结5：已过期
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
    * @param int|null $status 资源状态。状态说明请参见资源状态说明。 2：使用中3：已关闭（页面不展示这个状态）4：已冻结5：已过期
    *
    * @return $this
    */
    public function setStatus($status)
    {
        $this->container['status'] = $status;
        return $this;
    }

    /**
    * Gets effectiveTime
    *  资源生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    * @param string|null $effectiveTime 资源生效时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    *  资源过期时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
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
    * @param string|null $expireTime 资源过期时间。 UTC时间，格式：yyyy-MM-dd'T'HH:mm:ss'Z'，如“2019-05-06T08:05:01Z”。
    *
    * @return $this
    */
    public function setExpireTime($expireTime)
    {
        $this->container['expireTime'] = $expireTime;
        return $this;
    }

    /**
    * Gets expirePolicy
    *  资源到期后的扣费策略： 0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）  说明： 只有“3”表示该资源是自动续订，其他情况下，都是非自动续订下的到期策略。
    *
    * @return int|null
    */
    public function getExpirePolicy()
    {
        return $this->container['expirePolicy'];
    }

    /**
    * Sets expirePolicy
    *
    * @param int|null $expirePolicy 资源到期后的扣费策略： 0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）  说明： 只有“3”表示该资源是自动续订，其他情况下，都是非自动续订下的到期策略。
    *
    * @return $this
    */
    public function setExpirePolicy($expirePolicy)
    {
        $this->container['expirePolicy'] = $expirePolicy;
        return $this;
    }

    /**
    * Gets productSpecDesc
    *  产品规格描述
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
    * @param string|null $productSpecDesc 产品规格描述
    *
    * @return $this
    */
    public function setProductSpecDesc($productSpecDesc)
    {
        $this->container['productSpecDesc'] = $productSpecDesc;
        return $this;
    }

    /**
    * Gets specSize
    *  线性大小
    *
    * @return float|null
    */
    public function getSpecSize()
    {
        return $this->container['specSize'];
    }

    /**
    * Sets specSize
    *
    * @param float|null $specSize 线性大小
    *
    * @return $this
    */
    public function setSpecSize($specSize)
    {
        $this->container['specSize'] = $specSize;
        return $this;
    }

    /**
    * Gets specSizeMeasureId
    *  线性大小单位
    *
    * @return int|null
    */
    public function getSpecSizeMeasureId()
    {
        return $this->container['specSizeMeasureId'];
    }

    /**
    * Sets specSizeMeasureId
    *
    * @param int|null $specSizeMeasureId 线性大小单位
    *
    * @return $this
    */
    public function setSpecSizeMeasureId($specSizeMeasureId)
    {
        $this->container['specSizeMeasureId'] = $specSizeMeasureId;
        return $this;
    }

    /**
    * Gets updateTime
    *  |参数名称：资源更新时间。| |参数约束及描述：资源更新时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-12-25T07:32:04Z”。|
    *
    * @return string|null
    */
    public function getUpdateTime()
    {
        return $this->container['updateTime'];
    }

    /**
    * Sets updateTime
    *
    * @param string|null $updateTime |参数名称：资源更新时间。| |参数约束及描述：资源更新时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-12-25T07:32:04Z”。|
    *
    * @return $this
    */
    public function setUpdateTime($updateTime)
    {
        $this->container['updateTime'] = $updateTime;
        return $this;
    }

    /**
    * Gets enterpriseProject
    *  enterpriseProject
    *
    * @return \HuaweiCloud\SDK\Bss\V2\Model\EnterpriseProject|null
    */
    public function getEnterpriseProject()
    {
        return $this->container['enterpriseProject'];
    }

    /**
    * Sets enterpriseProject
    *
    * @param \HuaweiCloud\SDK\Bss\V2\Model\EnterpriseProject|null $enterpriseProject enterpriseProject
    *
    * @return $this
    */
    public function setEnterpriseProject($enterpriseProject)
    {
        $this->container['enterpriseProject'] = $enterpriseProject;
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

