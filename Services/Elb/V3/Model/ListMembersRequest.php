<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMembersRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMembersRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * poolId  **参数解释**：后端服务器组ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * name  **参数解释**：后端服务器名称。注意：该名称并非ECS名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * weight  **参数解释**：后端服务器的权重，请求将根据pool配置的负载均衡算法和后端服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。 支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。  **约束限制**：不涉及  **取值范围**：0-100  **默认取值**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。  **约束限制**：不涉及  **取值范围**：true、false  **默认取值**：不涉及
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * address  **参数解释**：后端服务器对应的IPv4或IPv6地址。 支持多值查询，查询条件格式：*address=xxx&address=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocolPort  **参数解释**：后端服务器业务端口号。 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * operatingStatus  **参数解释**：后端服务器的健康状态。 支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。  **约束限制**：不涉及  **取值范围**： - NO_MONITOR：后端服务器所在的服务器组没有开启健康检查。 - INITIAL：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。 - ONLINE：后端服务器正常。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - UNKNOWN：未关联LB实例的pool下的member，或者创建后从未关联ECS的云服务器类型member，状态置为UNKNOWN。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:members:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本。  **约束限制**：不涉及  **取值范围**：v4、v6。  **默认取值**：不涉及
    * memberType  **参数解释**：后端服务器的类型。 支持多值查询，查询条件格式：*member_type=xxx&member_type=xxx*。  **约束限制**：不涉及  **取值范围**： - ip：跨VPC的member。 - instance：关联到ECS的member。  **默认取值**：不涉及
    * instanceId  **参数解释**：member关联的ECS实例ID，空表示跨VPC场景的member。 支持多值查询，查询条件格式：*instance_id=xxx&instance_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZone  **参数解释**：后端服务器的可用区。 支持多值查询，查询条件格式：*availability_zone=xxx&availability_zone=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'poolId' => 'string',
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'name' => 'string[]',
            'weight' => 'int[]',
            'adminStateUp' => 'bool',
            'subnetCidrId' => 'string[]',
            'address' => 'string[]',
            'protocolPort' => 'int[]',
            'id' => 'string[]',
            'operatingStatus' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'ipVersion' => 'string[]',
            'memberType' => 'string[]',
            'instanceId' => 'string[]',
            'availabilityZone' => 'string[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * poolId  **参数解释**：后端服务器组ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * name  **参数解释**：后端服务器名称。注意：该名称并非ECS名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * weight  **参数解释**：后端服务器的权重，请求将根据pool配置的负载均衡算法和后端服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。 支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。  **约束限制**：不涉及  **取值范围**：0-100  **默认取值**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。  **约束限制**：不涉及  **取值范围**：true、false  **默认取值**：不涉及
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * address  **参数解释**：后端服务器对应的IPv4或IPv6地址。 支持多值查询，查询条件格式：*address=xxx&address=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocolPort  **参数解释**：后端服务器业务端口号。 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * operatingStatus  **参数解释**：后端服务器的健康状态。 支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。  **约束限制**：不涉及  **取值范围**： - NO_MONITOR：后端服务器所在的服务器组没有开启健康检查。 - INITIAL：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。 - ONLINE：后端服务器正常。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - UNKNOWN：未关联LB实例的pool下的member，或者创建后从未关联ECS的云服务器类型member，状态置为UNKNOWN。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:members:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本。  **约束限制**：不涉及  **取值范围**：v4、v6。  **默认取值**：不涉及
    * memberType  **参数解释**：后端服务器的类型。 支持多值查询，查询条件格式：*member_type=xxx&member_type=xxx*。  **约束限制**：不涉及  **取值范围**： - ip：跨VPC的member。 - instance：关联到ECS的member。  **默认取值**：不涉及
    * instanceId  **参数解释**：member关联的ECS实例ID，空表示跨VPC场景的member。 支持多值查询，查询条件格式：*instance_id=xxx&instance_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZone  **参数解释**：后端服务器的可用区。 支持多值查询，查询条件格式：*availability_zone=xxx&availability_zone=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'poolId' => null,
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'name' => null,
        'weight' => 'int32',
        'adminStateUp' => null,
        'subnetCidrId' => null,
        'address' => null,
        'protocolPort' => 'int32',
        'id' => null,
        'operatingStatus' => null,
        'enterpriseProjectId' => null,
        'ipVersion' => null,
        'memberType' => null,
        'instanceId' => null,
        'availabilityZone' => null
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
    * poolId  **参数解释**：后端服务器组ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * name  **参数解释**：后端服务器名称。注意：该名称并非ECS名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * weight  **参数解释**：后端服务器的权重，请求将根据pool配置的负载均衡算法和后端服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。 支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。  **约束限制**：不涉及  **取值范围**：0-100  **默认取值**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。  **约束限制**：不涉及  **取值范围**：true、false  **默认取值**：不涉及
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * address  **参数解释**：后端服务器对应的IPv4或IPv6地址。 支持多值查询，查询条件格式：*address=xxx&address=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocolPort  **参数解释**：后端服务器业务端口号。 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * operatingStatus  **参数解释**：后端服务器的健康状态。 支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。  **约束限制**：不涉及  **取值范围**： - NO_MONITOR：后端服务器所在的服务器组没有开启健康检查。 - INITIAL：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。 - ONLINE：后端服务器正常。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - UNKNOWN：未关联LB实例的pool下的member，或者创建后从未关联ECS的云服务器类型member，状态置为UNKNOWN。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:members:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本。  **约束限制**：不涉及  **取值范围**：v4、v6。  **默认取值**：不涉及
    * memberType  **参数解释**：后端服务器的类型。 支持多值查询，查询条件格式：*member_type=xxx&member_type=xxx*。  **约束限制**：不涉及  **取值范围**： - ip：跨VPC的member。 - instance：关联到ECS的member。  **默认取值**：不涉及
    * instanceId  **参数解释**：member关联的ECS实例ID，空表示跨VPC场景的member。 支持多值查询，查询条件格式：*instance_id=xxx&instance_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZone  **参数解释**：后端服务器的可用区。 支持多值查询，查询条件格式：*availability_zone=xxx&availability_zone=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'poolId' => 'pool_id',
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'name' => 'name',
            'weight' => 'weight',
            'adminStateUp' => 'admin_state_up',
            'subnetCidrId' => 'subnet_cidr_id',
            'address' => 'address',
            'protocolPort' => 'protocol_port',
            'id' => 'id',
            'operatingStatus' => 'operating_status',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ipVersion' => 'ip_version',
            'memberType' => 'member_type',
            'instanceId' => 'instance_id',
            'availabilityZone' => 'availability_zone'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * poolId  **参数解释**：后端服务器组ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * name  **参数解释**：后端服务器名称。注意：该名称并非ECS名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * weight  **参数解释**：后端服务器的权重，请求将根据pool配置的负载均衡算法和后端服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。 支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。  **约束限制**：不涉及  **取值范围**：0-100  **默认取值**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。  **约束限制**：不涉及  **取值范围**：true、false  **默认取值**：不涉及
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * address  **参数解释**：后端服务器对应的IPv4或IPv6地址。 支持多值查询，查询条件格式：*address=xxx&address=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocolPort  **参数解释**：后端服务器业务端口号。 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * operatingStatus  **参数解释**：后端服务器的健康状态。 支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。  **约束限制**：不涉及  **取值范围**： - NO_MONITOR：后端服务器所在的服务器组没有开启健康检查。 - INITIAL：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。 - ONLINE：后端服务器正常。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - UNKNOWN：未关联LB实例的pool下的member，或者创建后从未关联ECS的云服务器类型member，状态置为UNKNOWN。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:members:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本。  **约束限制**：不涉及  **取值范围**：v4、v6。  **默认取值**：不涉及
    * memberType  **参数解释**：后端服务器的类型。 支持多值查询，查询条件格式：*member_type=xxx&member_type=xxx*。  **约束限制**：不涉及  **取值范围**： - ip：跨VPC的member。 - instance：关联到ECS的member。  **默认取值**：不涉及
    * instanceId  **参数解释**：member关联的ECS实例ID，空表示跨VPC场景的member。 支持多值查询，查询条件格式：*instance_id=xxx&instance_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZone  **参数解释**：后端服务器的可用区。 支持多值查询，查询条件格式：*availability_zone=xxx&availability_zone=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'poolId' => 'setPoolId',
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'name' => 'setName',
            'weight' => 'setWeight',
            'adminStateUp' => 'setAdminStateUp',
            'subnetCidrId' => 'setSubnetCidrId',
            'address' => 'setAddress',
            'protocolPort' => 'setProtocolPort',
            'id' => 'setId',
            'operatingStatus' => 'setOperatingStatus',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ipVersion' => 'setIpVersion',
            'memberType' => 'setMemberType',
            'instanceId' => 'setInstanceId',
            'availabilityZone' => 'setAvailabilityZone'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * poolId  **参数解释**：后端服务器组ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * name  **参数解释**：后端服务器名称。注意：该名称并非ECS名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * weight  **参数解释**：后端服务器的权重，请求将根据pool配置的负载均衡算法和后端服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。 支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。  **约束限制**：不涉及  **取值范围**：0-100  **默认取值**：不涉及
    * adminStateUp  **参数解释**：后端服务器的管理状态。  **约束限制**：不涉及  **取值范围**：true、false  **默认取值**：不涉及
    * subnetCidrId  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * address  **参数解释**：后端服务器对应的IPv4或IPv6地址。 支持多值查询，查询条件格式：*address=xxx&address=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocolPort  **参数解释**：后端服务器业务端口号。 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * operatingStatus  **参数解释**：后端服务器的健康状态。 支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。  **约束限制**：不涉及  **取值范围**： - NO_MONITOR：后端服务器所在的服务器组没有开启健康检查。 - INITIAL：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。 - ONLINE：后端服务器正常。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - UNKNOWN：未关联LB实例的pool下的member，或者创建后从未关联ECS的云服务器类型member，状态置为UNKNOWN。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:members:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：当前后端服务器的IP地址版本。  **约束限制**：不涉及  **取值范围**：v4、v6。  **默认取值**：不涉及
    * memberType  **参数解释**：后端服务器的类型。 支持多值查询，查询条件格式：*member_type=xxx&member_type=xxx*。  **约束限制**：不涉及  **取值范围**： - ip：跨VPC的member。 - instance：关联到ECS的member。  **默认取值**：不涉及
    * instanceId  **参数解释**：member关联的ECS实例ID，空表示跨VPC场景的member。 支持多值查询，查询条件格式：*instance_id=xxx&instance_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * availabilityZone  **参数解释**：后端服务器的可用区。 支持多值查询，查询条件格式：*availability_zone=xxx&availability_zone=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'poolId' => 'getPoolId',
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'name' => 'getName',
            'weight' => 'getWeight',
            'adminStateUp' => 'getAdminStateUp',
            'subnetCidrId' => 'getSubnetCidrId',
            'address' => 'getAddress',
            'protocolPort' => 'getProtocolPort',
            'id' => 'getId',
            'operatingStatus' => 'getOperatingStatus',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ipVersion' => 'getIpVersion',
            'memberType' => 'getMemberType',
            'instanceId' => 'getInstanceId',
            'availabilityZone' => 'getAvailabilityZone'
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
        $this->container['poolId'] = isset($data['poolId']) ? $data['poolId'] : null;
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['weight'] = isset($data['weight']) ? $data['weight'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['subnetCidrId'] = isset($data['subnetCidrId']) ? $data['subnetCidrId'] : null;
        $this->container['address'] = isset($data['address']) ? $data['address'] : null;
        $this->container['protocolPort'] = isset($data['protocolPort']) ? $data['protocolPort'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['operatingStatus'] = isset($data['operatingStatus']) ? $data['operatingStatus'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['memberType'] = isset($data['memberType']) ? $data['memberType'] : null;
        $this->container['instanceId'] = isset($data['instanceId']) ? $data['instanceId'] : null;
        $this->container['availabilityZone'] = isset($data['availabilityZone']) ? $data['availabilityZone'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['poolId'] === null) {
            $invalidProperties[] = "'poolId' can't be null";
        }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 2000)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 2000.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 0)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 0.";
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
    * Gets poolId
    *  **参数解释**：后端服务器组ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string
    */
    public function getPoolId()
    {
        return $this->container['poolId'];
    }

    /**
    * Sets poolId
    *
    * @param string $poolId **参数解释**：后端服务器组ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setPoolId($poolId)
    {
        $this->container['poolId'] = $poolId;
        return $this;
    }

    /**
    * Gets marker
    *  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $marker **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
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
    * @param int|null $limit **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets pageReverse
    *  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    *
    * @return bool|null
    */
    public function getPageReverse()
    {
        return $this->container['pageReverse'];
    }

    /**
    * Sets pageReverse
    *
    * @param bool|null $pageReverse **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    *
    * @return $this
    */
    public function setPageReverse($pageReverse)
    {
        $this->container['pageReverse'] = $pageReverse;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：后端服务器名称。注意：该名称并非ECS名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string[]|null $name **参数解释**：后端服务器名称。注意：该名称并非ECS名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets weight
    *  **参数解释**：后端服务器的权重，请求将根据pool配置的负载均衡算法和后端服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。 支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。  **约束限制**：不涉及  **取值范围**：0-100  **默认取值**：不涉及
    *
    * @return int[]|null
    */
    public function getWeight()
    {
        return $this->container['weight'];
    }

    /**
    * Sets weight
    *
    * @param int[]|null $weight **参数解释**：后端服务器的权重，请求将根据pool配置的负载均衡算法和后端服务器的权重进行负载分发。 权重值越大，分发的请求越多。权重为0的后端不再接受新的请求。 支持多值查询，查询条件格式：*weight=xxx&weight=xxx*。  **约束限制**：不涉及  **取值范围**：0-100  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setWeight($weight)
    {
        $this->container['weight'] = $weight;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  **参数解释**：后端服务器的管理状态。  **约束限制**：不涉及  **取值范围**：true、false  **默认取值**：不涉及
    *
    * @return bool|null
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool|null $adminStateUp **参数解释**：后端服务器的管理状态。  **约束限制**：不涉及  **取值范围**：true、false  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets subnetCidrId
    *  **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getSubnetCidrId()
    {
        return $this->container['subnetCidrId'];
    }

    /**
    * Sets subnetCidrId
    *
    * @param string[]|null $subnetCidrId **参数解释**：后端服务器所在子网的IPv4子网ID或IPv6子网ID。 支持多值查询，查询条件格式：***subnet_cidr_id=xxx&subnet_cidr_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setSubnetCidrId($subnetCidrId)
    {
        $this->container['subnetCidrId'] = $subnetCidrId;
        return $this;
    }

    /**
    * Gets address
    *  **参数解释**：后端服务器对应的IPv4或IPv6地址。 支持多值查询，查询条件格式：*address=xxx&address=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getAddress()
    {
        return $this->container['address'];
    }

    /**
    * Sets address
    *
    * @param string[]|null $address **参数解释**：后端服务器对应的IPv4或IPv6地址。 支持多值查询，查询条件格式：*address=xxx&address=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAddress($address)
    {
        $this->container['address'] = $address;
        return $this;
    }

    /**
    * Gets protocolPort
    *  **参数解释**：后端服务器业务端口号。 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return int[]|null
    */
    public function getProtocolPort()
    {
        return $this->container['protocolPort'];
    }

    /**
    * Sets protocolPort
    *
    * @param int[]|null $protocolPort **参数解释**：后端服务器业务端口号。 支持多值查询，查询条件格式：*protocol_port=xxx&protocol_port=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setProtocolPort($protocolPort)
    {
        $this->container['protocolPort'] = $protocolPort;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string[]|null $id **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets operatingStatus
    *  **参数解释**：后端服务器的健康状态。 支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。  **约束限制**：不涉及  **取值范围**： - NO_MONITOR：后端服务器所在的服务器组没有开启健康检查。 - INITIAL：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。 - ONLINE：后端服务器正常。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - UNKNOWN：未关联LB实例的pool下的member，或者创建后从未关联ECS的云服务器类型member，状态置为UNKNOWN。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getOperatingStatus()
    {
        return $this->container['operatingStatus'];
    }

    /**
    * Sets operatingStatus
    *
    * @param string[]|null $operatingStatus **参数解释**：后端服务器的健康状态。 支持多值查询，查询条件格式：*operating_status=xxx&operating_status=xxx*。  **约束限制**：不涉及  **取值范围**： - NO_MONITOR：后端服务器所在的服务器组没有开启健康检查。 - INITIAL：初始化中，表示负载均衡实例配置了健康检查，但查不到数据。 - ONLINE：后端服务器正常。 - OFFLINE：后端服务器关联的ECS服务器不存在或已关机。 - UNKNOWN：未关联LB实例的pool下的member，或者创建后从未关联ECS的云服务器类型member，状态置为UNKNOWN。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setOperatingStatus($operatingStatus)
    {
        $this->container['operatingStatus'] = $operatingStatus;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:members:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return string[]|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string[]|null $enterpriseProjectId **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:members:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets ipVersion
    *  **参数解释**：当前后端服务器的IP地址版本。  **约束限制**：不涉及  **取值范围**：v4、v6。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param string[]|null $ipVersion **参数解释**：当前后端服务器的IP地址版本。  **约束限制**：不涉及  **取值范围**：v4、v6。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets memberType
    *  **参数解释**：后端服务器的类型。 支持多值查询，查询条件格式：*member_type=xxx&member_type=xxx*。  **约束限制**：不涉及  **取值范围**： - ip：跨VPC的member。 - instance：关联到ECS的member。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getMemberType()
    {
        return $this->container['memberType'];
    }

    /**
    * Sets memberType
    *
    * @param string[]|null $memberType **参数解释**：后端服务器的类型。 支持多值查询，查询条件格式：*member_type=xxx&member_type=xxx*。  **约束限制**：不涉及  **取值范围**： - ip：跨VPC的member。 - instance：关联到ECS的member。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMemberType($memberType)
    {
        $this->container['memberType'] = $memberType;
        return $this;
    }

    /**
    * Gets instanceId
    *  **参数解释**：member关联的ECS实例ID，空表示跨VPC场景的member。 支持多值查询，查询条件格式：*instance_id=xxx&instance_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getInstanceId()
    {
        return $this->container['instanceId'];
    }

    /**
    * Sets instanceId
    *
    * @param string[]|null $instanceId **参数解释**：member关联的ECS实例ID，空表示跨VPC场景的member。 支持多值查询，查询条件格式：*instance_id=xxx&instance_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setInstanceId($instanceId)
    {
        $this->container['instanceId'] = $instanceId;
        return $this;
    }

    /**
    * Gets availabilityZone
    *  **参数解释**：后端服务器的可用区。 支持多值查询，查询条件格式：*availability_zone=xxx&availability_zone=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getAvailabilityZone()
    {
        return $this->container['availabilityZone'];
    }

    /**
    * Sets availabilityZone
    *
    * @param string[]|null $availabilityZone **参数解释**：后端服务器的可用区。 支持多值查询，查询条件格式：*availability_zone=xxx&availability_zone=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAvailabilityZone($availabilityZone)
    {
        $this->container['availabilityZone'] = $availabilityZone;
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

