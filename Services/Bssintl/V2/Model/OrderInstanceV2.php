<?php

namespace HuaweiCloud\SDK\Bssintl\V2\Model;

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
    * id  |参数名称：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。| |参数约束及描述：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。|
    * resourceId  |参数名称：资源实例ID。| |参数约束及描述：资源实例ID。|
    * resourceName  |参数名称：资源实例名。| |参数约束及描述：资源实例名。|
    * regionCode  |参数名称：云服务资源池区域编码。| |参数约束及描述：云服务资源池区域编码。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * resourceSpecCode  |参数名称：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。| |参数约束及描述：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。|
    * projectId  |参数名称：资源项目ID。| |参数约束及描述：资源项目ID。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * parentResourceId  |参数名称：父资源实例ID。| |参数约束及描述：父资源实例ID。|
    * isMainResource  |参数名称：是否是主资源。0：非主资源1：主资源| |参数的约束及描述：是否是主资源。0：非主资源1：主资源|
    * status  |参数名称：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数的约束及描述：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * effectiveTime  |参数名称：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expireTime  |参数名称：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expirePolicy  |参数名称：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）| |参数的约束及描述：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）|
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
            'expirePolicy' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * id  |参数名称：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。| |参数约束及描述：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。|
    * resourceId  |参数名称：资源实例ID。| |参数约束及描述：资源实例ID。|
    * resourceName  |参数名称：资源实例名。| |参数约束及描述：资源实例名。|
    * regionCode  |参数名称：云服务资源池区域编码。| |参数约束及描述：云服务资源池区域编码。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * resourceSpecCode  |参数名称：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。| |参数约束及描述：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。|
    * projectId  |参数名称：资源项目ID。| |参数约束及描述：资源项目ID。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * parentResourceId  |参数名称：父资源实例ID。| |参数约束及描述：父资源实例ID。|
    * isMainResource  |参数名称：是否是主资源。0：非主资源1：主资源| |参数的约束及描述：是否是主资源。0：非主资源1：主资源|
    * status  |参数名称：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数的约束及描述：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * effectiveTime  |参数名称：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expireTime  |参数名称：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expirePolicy  |参数名称：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）| |参数的约束及描述：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）|
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
        'expirePolicy' => 'int32'
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
    * id  |参数名称：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。| |参数约束及描述：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。|
    * resourceId  |参数名称：资源实例ID。| |参数约束及描述：资源实例ID。|
    * resourceName  |参数名称：资源实例名。| |参数约束及描述：资源实例名。|
    * regionCode  |参数名称：云服务资源池区域编码。| |参数约束及描述：云服务资源池区域编码。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * resourceSpecCode  |参数名称：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。| |参数约束及描述：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。|
    * projectId  |参数名称：资源项目ID。| |参数约束及描述：资源项目ID。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * parentResourceId  |参数名称：父资源实例ID。| |参数约束及描述：父资源实例ID。|
    * isMainResource  |参数名称：是否是主资源。0：非主资源1：主资源| |参数的约束及描述：是否是主资源。0：非主资源1：主资源|
    * status  |参数名称：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数的约束及描述：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * effectiveTime  |参数名称：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expireTime  |参数名称：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expirePolicy  |参数名称：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）| |参数的约束及描述：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）|
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
            'expirePolicy' => 'expire_policy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * id  |参数名称：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。| |参数约束及描述：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。|
    * resourceId  |参数名称：资源实例ID。| |参数约束及描述：资源实例ID。|
    * resourceName  |参数名称：资源实例名。| |参数约束及描述：资源实例名。|
    * regionCode  |参数名称：云服务资源池区域编码。| |参数约束及描述：云服务资源池区域编码。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * resourceSpecCode  |参数名称：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。| |参数约束及描述：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。|
    * projectId  |参数名称：资源项目ID。| |参数约束及描述：资源项目ID。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * parentResourceId  |参数名称：父资源实例ID。| |参数约束及描述：父资源实例ID。|
    * isMainResource  |参数名称：是否是主资源。0：非主资源1：主资源| |参数的约束及描述：是否是主资源。0：非主资源1：主资源|
    * status  |参数名称：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数的约束及描述：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * effectiveTime  |参数名称：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expireTime  |参数名称：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expirePolicy  |参数名称：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）| |参数的约束及描述：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）|
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
            'expirePolicy' => 'setExpirePolicy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * id  |参数名称：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。| |参数约束及描述：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。|
    * resourceId  |参数名称：资源实例ID。| |参数约束及描述：资源实例ID。|
    * resourceName  |参数名称：资源实例名。| |参数约束及描述：资源实例名。|
    * regionCode  |参数名称：云服务资源池区域编码。| |参数约束及描述：云服务资源池区域编码。|
    * serviceTypeCode  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
    * resourceTypeCode  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
    * resourceTypeName  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
    * serviceTypeName  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
    * resourceSpecCode  |参数名称：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。| |参数约束及描述：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。|
    * projectId  |参数名称：资源项目ID。| |参数约束及描述：资源项目ID。|
    * productId  |参数名称：产品ID。| |参数约束及描述：产品ID。|
    * parentResourceId  |参数名称：父资源实例ID。| |参数约束及描述：父资源实例ID。|
    * isMainResource  |参数名称：是否是主资源。0：非主资源1：主资源| |参数的约束及描述：是否是主资源。0：非主资源1：主资源|
    * status  |参数名称：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数的约束及描述：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
    * effectiveTime  |参数名称：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expireTime  |参数名称：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
    * expirePolicy  |参数名称：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）| |参数的约束及描述：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）|
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
            'expirePolicy' => 'getExpirePolicy'
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
    * Gets id
    *  |参数名称：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。| |参数约束及描述：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。|
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
    * @param string|null $id |参数名称：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。| |参数约束及描述：标识要开通资源的内部ID，资源开通以后生成的ID为resource_id。对应订购关系ID。|
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
    *  |参数名称：资源实例ID。| |参数约束及描述：资源实例ID。|
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
    * @param string|null $resourceId |参数名称：资源实例ID。| |参数约束及描述：资源实例ID。|
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
    *  |参数名称：资源实例名。| |参数约束及描述：资源实例名。|
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
    * @param string|null $resourceName |参数名称：资源实例名。| |参数约束及描述：资源实例名。|
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
    *  |参数名称：云服务资源池区域编码。| |参数约束及描述：云服务资源池区域编码。|
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
    * @param string|null $regionCode |参数名称：云服务资源池区域编码。| |参数约束及描述：云服务资源池区域编码。|
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
    *  |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
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
    * @param string|null $serviceTypeCode |参数名称：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。| |参数约束及描述：云服务类型编码，例如OBS的云服务类型编码为“hws.service.type.obs”。具体请参见云服务类型云服务类型云服务类型云服务类型。|
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
    *  |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
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
    * @param string|null $resourceTypeCode |参数名称：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。| |参数约束及描述：资源类型编码，例如ECS的VM为“hws.resource.type.vm”。具体请参见资源类型资源类型资源类型资源类型。|
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
    *  |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
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
    * @param string|null $resourceTypeName |参数名称：资源类型编码名称| |参数约束及描述：资源类型编码名称|
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
    *  |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
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
    * @param string|null $serviceTypeName |参数名称：服务类型编码名称| |参数约束及描述：服务类型编码名称|
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
    *  |参数名称：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。| |参数约束及描述：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。|
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
    * @param string|null $resourceSpecCode |参数名称：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。| |参数约束及描述：云服务产品的资源规格，例如VM的资源规格举例为“s2.small.1.linux”。具体请参见对应云服务的相关介绍。|
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
    *  |参数名称：资源项目ID。| |参数约束及描述：资源项目ID。|
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
    * @param string|null $projectId |参数名称：资源项目ID。| |参数约束及描述：资源项目ID。|
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
    *  |参数名称：产品ID。| |参数约束及描述：产品ID。|
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
    * @param string|null $productId |参数名称：产品ID。| |参数约束及描述：产品ID。|
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
    *  |参数名称：父资源实例ID。| |参数约束及描述：父资源实例ID。|
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
    * @param string|null $parentResourceId |参数名称：父资源实例ID。| |参数约束及描述：父资源实例ID。|
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
    *  |参数名称：是否是主资源。0：非主资源1：主资源| |参数的约束及描述：是否是主资源。0：非主资源1：主资源|
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
    * @param int|null $isMainResource |参数名称：是否是主资源。0：非主资源1：主资源| |参数的约束及描述：是否是主资源。0：非主资源1：主资源|
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
    *  |参数名称：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数的约束及描述：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
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
    * @param int|null $status |参数名称：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭| |参数的约束及描述：资源状态：1：初始化2：已生效3：已过期4：已冻结5：宽限期6：冻结中7：冻结恢复中（预留，未启用）8：正在关闭|
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
    *  |参数名称：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
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
    * @param string|null $effectiveTime |参数名称：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源生效时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
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
    *  |参数名称：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
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
    * @param string|null $expireTime |参数名称：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。| |参数约束及描述：资源过期时间。UTC时间，格式：yyyy-MM-ddTHH:mm:ssZ，如“2019-05-06T08:05:01Z”。|
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
    *  |参数名称：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）| |参数的约束及描述：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）|
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
    * @param int|null $expirePolicy |参数名称：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）| |参数的约束及描述：到期策略：0：到期进入宽限期1：到期转按需2：到期后自动删除（从生效中直接删除）3：到期后自动续费4：到期后冻结5：到期后删除（从保留期删除）|
    *
    * @return $this
    */
    public function setExpirePolicy($expirePolicy)
    {
        $this->container['expirePolicy'] = $expirePolicy;
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

