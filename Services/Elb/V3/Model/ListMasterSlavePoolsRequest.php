<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListMasterSlavePoolsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListMasterSlavePoolsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * description  **参数解释**：后端服务器组的描述信息。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * healthmonitorId  **参数解释**：后端服务器组关联的健康检查的ID。 支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器组的ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * loadbalancerId  **参数解释**：后端服务器组绑定的负载均衡器ID。 支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。 支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  **约束限制**：不涉及  **取值范围**：TCP、UDP、IP、TLS、GRPC、HTTP、HTTPS和QUIC。  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。 支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  **约束限制**：不涉及  **取值范围**： 1、ROUND_ROBIN：加权轮询算法。 2、LEAST_CONNECTIONS：加权最少连接算法。 3、SOURCE_IP：源IP算法。 4、QUIC_CID：连接ID算法。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:pools:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。 支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberAddress  **参数解释**：后端服务器的IP地址。 支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * memberDeviceId  **参数解释**：后端服务器对应的弹性云服务器的ID。 支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：关联的监听器ID，包括通过l7policy关联的。 支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberInstanceId  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端  **默认取值**：不涉及
    * connectionDrain  **参数解释**：查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false  **约束限制**：不涉及  **取值范围**：true 开启，false 不开启。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'description' => 'string[]',
            'healthmonitorId' => 'string[]',
            'id' => 'string[]',
            'name' => 'string[]',
            'loadbalancerId' => 'string[]',
            'protocol' => 'string[]',
            'lbAlgorithm' => 'string[]',
            'enterpriseProjectId' => 'string[]',
            'ipVersion' => 'string[]',
            'memberAddress' => 'string[]',
            'memberDeviceId' => 'string[]',
            'listenerId' => 'string[]',
            'memberInstanceId' => 'string[]',
            'vpcId' => 'string[]',
            'type' => 'string[]',
            'connectionDrain' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * description  **参数解释**：后端服务器组的描述信息。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * healthmonitorId  **参数解释**：后端服务器组关联的健康检查的ID。 支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器组的ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * loadbalancerId  **参数解释**：后端服务器组绑定的负载均衡器ID。 支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。 支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  **约束限制**：不涉及  **取值范围**：TCP、UDP、IP、TLS、GRPC、HTTP、HTTPS和QUIC。  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。 支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  **约束限制**：不涉及  **取值范围**： 1、ROUND_ROBIN：加权轮询算法。 2、LEAST_CONNECTIONS：加权最少连接算法。 3、SOURCE_IP：源IP算法。 4、QUIC_CID：连接ID算法。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:pools:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。 支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberAddress  **参数解释**：后端服务器的IP地址。 支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * memberDeviceId  **参数解释**：后端服务器对应的弹性云服务器的ID。 支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：关联的监听器ID，包括通过l7policy关联的。 支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberInstanceId  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端  **默认取值**：不涉及
    * connectionDrain  **参数解释**：查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false  **约束限制**：不涉及  **取值范围**：true 开启，false 不开启。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'description' => null,
        'healthmonitorId' => null,
        'id' => null,
        'name' => null,
        'loadbalancerId' => null,
        'protocol' => null,
        'lbAlgorithm' => null,
        'enterpriseProjectId' => null,
        'ipVersion' => null,
        'memberAddress' => null,
        'memberDeviceId' => null,
        'listenerId' => null,
        'memberInstanceId' => null,
        'vpcId' => null,
        'type' => null,
        'connectionDrain' => null
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
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * description  **参数解释**：后端服务器组的描述信息。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * healthmonitorId  **参数解释**：后端服务器组关联的健康检查的ID。 支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器组的ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * loadbalancerId  **参数解释**：后端服务器组绑定的负载均衡器ID。 支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。 支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  **约束限制**：不涉及  **取值范围**：TCP、UDP、IP、TLS、GRPC、HTTP、HTTPS和QUIC。  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。 支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  **约束限制**：不涉及  **取值范围**： 1、ROUND_ROBIN：加权轮询算法。 2、LEAST_CONNECTIONS：加权最少连接算法。 3、SOURCE_IP：源IP算法。 4、QUIC_CID：连接ID算法。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:pools:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。 支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberAddress  **参数解释**：后端服务器的IP地址。 支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * memberDeviceId  **参数解释**：后端服务器对应的弹性云服务器的ID。 支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：关联的监听器ID，包括通过l7policy关联的。 支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberInstanceId  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端  **默认取值**：不涉及
    * connectionDrain  **参数解释**：查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false  **约束限制**：不涉及  **取值范围**：true 开启，false 不开启。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'description' => 'description',
            'healthmonitorId' => 'healthmonitor_id',
            'id' => 'id',
            'name' => 'name',
            'loadbalancerId' => 'loadbalancer_id',
            'protocol' => 'protocol',
            'lbAlgorithm' => 'lb_algorithm',
            'enterpriseProjectId' => 'enterprise_project_id',
            'ipVersion' => 'ip_version',
            'memberAddress' => 'member_address',
            'memberDeviceId' => 'member_device_id',
            'listenerId' => 'listener_id',
            'memberInstanceId' => 'member_instance_id',
            'vpcId' => 'vpc_id',
            'type' => 'type',
            'connectionDrain' => 'connection_drain'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * description  **参数解释**：后端服务器组的描述信息。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * healthmonitorId  **参数解释**：后端服务器组关联的健康检查的ID。 支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器组的ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * loadbalancerId  **参数解释**：后端服务器组绑定的负载均衡器ID。 支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。 支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  **约束限制**：不涉及  **取值范围**：TCP、UDP、IP、TLS、GRPC、HTTP、HTTPS和QUIC。  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。 支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  **约束限制**：不涉及  **取值范围**： 1、ROUND_ROBIN：加权轮询算法。 2、LEAST_CONNECTIONS：加权最少连接算法。 3、SOURCE_IP：源IP算法。 4、QUIC_CID：连接ID算法。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:pools:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。 支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberAddress  **参数解释**：后端服务器的IP地址。 支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * memberDeviceId  **参数解释**：后端服务器对应的弹性云服务器的ID。 支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：关联的监听器ID，包括通过l7policy关联的。 支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberInstanceId  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端  **默认取值**：不涉及
    * connectionDrain  **参数解释**：查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false  **约束限制**：不涉及  **取值范围**：true 开启，false 不开启。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'description' => 'setDescription',
            'healthmonitorId' => 'setHealthmonitorId',
            'id' => 'setId',
            'name' => 'setName',
            'loadbalancerId' => 'setLoadbalancerId',
            'protocol' => 'setProtocol',
            'lbAlgorithm' => 'setLbAlgorithm',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'ipVersion' => 'setIpVersion',
            'memberAddress' => 'setMemberAddress',
            'memberDeviceId' => 'setMemberDeviceId',
            'listenerId' => 'setListenerId',
            'memberInstanceId' => 'setMemberInstanceId',
            'vpcId' => 'setVpcId',
            'type' => 'setType',
            'connectionDrain' => 'setConnectionDrain'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  **参数解释**：上一页最后一条记录的ID。  **约束限制**： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。  **取值范围**：不涉及  **默认取值**：不涉及
    * limit  **参数解释**：每页返回的个数。  **约束限制**：不涉及  **取值范围**：0-2000  **默认取值**：2000
    * pageReverse  **参数解释**：是否反向查询。  **约束限制**： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。  **取值范围**： - true：查询上一页。 - false：查询下一页。  **默认取值**：false
    * description  **参数解释**：后端服务器组的描述信息。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * healthmonitorId  **参数解释**：后端服务器组关联的健康检查的ID。 支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * id  **参数解释**：后端服务器组的ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * loadbalancerId  **参数解释**：后端服务器组绑定的负载均衡器ID。 支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。 支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  **约束限制**：不涉及  **取值范围**：TCP、UDP、IP、TLS、GRPC、HTTP、HTTPS和QUIC。  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。 支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  **约束限制**：不涉及  **取值范围**： 1、ROUND_ROBIN：加权轮询算法。 2、LEAST_CONNECTIONS：加权最少连接算法。 3、SOURCE_IP：源IP算法。 4、QUIC_CID：连接ID算法。  **默认取值**：不涉及
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:pools:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。 支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberAddress  **参数解释**：后端服务器的IP地址。 支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * memberDeviceId  **参数解释**：后端服务器对应的弹性云服务器的ID。 支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：关联的监听器ID，包括通过l7policy关联的。 支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * memberInstanceId  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端  **默认取值**：不涉及
    * connectionDrain  **参数解释**：查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false  **约束限制**：不涉及  **取值范围**：true 开启，false 不开启。  **默认取值**：不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'description' => 'getDescription',
            'healthmonitorId' => 'getHealthmonitorId',
            'id' => 'getId',
            'name' => 'getName',
            'loadbalancerId' => 'getLoadbalancerId',
            'protocol' => 'getProtocol',
            'lbAlgorithm' => 'getLbAlgorithm',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'ipVersion' => 'getIpVersion',
            'memberAddress' => 'getMemberAddress',
            'memberDeviceId' => 'getMemberDeviceId',
            'listenerId' => 'getListenerId',
            'memberInstanceId' => 'getMemberInstanceId',
            'vpcId' => 'getVpcId',
            'type' => 'getType',
            'connectionDrain' => 'getConnectionDrain'
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
        $this->container['marker'] = isset($data['marker']) ? $data['marker'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['pageReverse'] = isset($data['pageReverse']) ? $data['pageReverse'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['healthmonitorId'] = isset($data['healthmonitorId']) ? $data['healthmonitorId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['memberAddress'] = isset($data['memberAddress']) ? $data['memberAddress'] : null;
        $this->container['memberDeviceId'] = isset($data['memberDeviceId']) ? $data['memberDeviceId'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['memberInstanceId'] = isset($data['memberInstanceId']) ? $data['memberInstanceId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['connectionDrain'] = isset($data['connectionDrain']) ? $data['connectionDrain'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
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
    * Gets description
    *  **参数解释**：后端服务器组的描述信息。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string[]|null $description **参数解释**：后端服务器组的描述信息。 支持多值查询，查询条件格式：*description=xxx&description=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets healthmonitorId
    *  **参数解释**：后端服务器组关联的健康检查的ID。 支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getHealthmonitorId()
    {
        return $this->container['healthmonitorId'];
    }

    /**
    * Sets healthmonitorId
    *
    * @param string[]|null $healthmonitorId **参数解释**：后端服务器组关联的健康检查的ID。 支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setHealthmonitorId($healthmonitorId)
    {
        $this->container['healthmonitorId'] = $healthmonitorId;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：后端服务器组的ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string[]|null $id **参数解释**：后端服务器组的ID。 支持多值查询，查询条件格式：*id=xxx&id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：后端服务器组的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string[]|null $name **参数解释**：后端服务器组的名称。 支持多值查询，查询条件格式：*name=xxx&name=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  **参数解释**：后端服务器组绑定的负载均衡器ID。 支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string[]|null $loadbalancerId **参数解释**：后端服务器组绑定的负载均衡器ID。 支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets protocol
    *  **参数解释**：后端服务器组的后端协议。 支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  **约束限制**：不涉及  **取值范围**：TCP、UDP、IP、TLS、GRPC、HTTP、HTTPS和QUIC。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string[]|null $protocol **参数解释**：后端服务器组的后端协议。 支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  **约束限制**：不涉及  **取值范围**：TCP、UDP、IP、TLS、GRPC、HTTP、HTTPS和QUIC。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets lbAlgorithm
    *  **参数解释**：后端服务器组的负载均衡算法。 支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  **约束限制**：不涉及  **取值范围**： 1、ROUND_ROBIN：加权轮询算法。 2、LEAST_CONNECTIONS：加权最少连接算法。 3、SOURCE_IP：源IP算法。 4、QUIC_CID：连接ID算法。  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getLbAlgorithm()
    {
        return $this->container['lbAlgorithm'];
    }

    /**
    * Sets lbAlgorithm
    *
    * @param string[]|null $lbAlgorithm **参数解释**：后端服务器组的负载均衡算法。 支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  **约束限制**：不涉及  **取值范围**： 1、ROUND_ROBIN：加权轮询算法。 2、LEAST_CONNECTIONS：加权最少连接算法。 3、SOURCE_IP：源IP算法。 4、QUIC_CID：连接ID算法。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:pools:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
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
    * @param string[]|null $enterpriseProjectId **参数解释**：资源所属的企业项目ID。 支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  **约束限制**： - 如果enterprise_project_id不传值，默认查询所有企业项目下的资源，鉴权按照细粒度权限鉴权，必须在用户组下分配elb:pools:list权限。 - 如果enterprise_project_id传值，鉴权按照企业项目权限鉴权，分为传入具体eps_id和all_granted_eps两种场景，前者查询指定eps_id的eps下的资源，后者查询的是所有有list权限的eps下的资源。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
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
    *  **参数解释**：后端服务器组支持的IP版本。 支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string[]|null $ipVersion **参数解释**：后端服务器组支持的IP版本。 支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets memberAddress
    *  **参数解释**：后端服务器的IP地址。 支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getMemberAddress()
    {
        return $this->container['memberAddress'];
    }

    /**
    * Sets memberAddress
    *
    * @param string[]|null $memberAddress **参数解释**：后端服务器的IP地址。 支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMemberAddress($memberAddress)
    {
        $this->container['memberAddress'] = $memberAddress;
        return $this;
    }

    /**
    * Gets memberDeviceId
    *  **参数解释**：后端服务器对应的弹性云服务器的ID。 支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getMemberDeviceId()
    {
        return $this->container['memberDeviceId'];
    }

    /**
    * Sets memberDeviceId
    *
    * @param string[]|null $memberDeviceId **参数解释**：后端服务器对应的弹性云服务器的ID。 支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMemberDeviceId($memberDeviceId)
    {
        $this->container['memberDeviceId'] = $memberDeviceId;
        return $this;
    }

    /**
    * Gets listenerId
    *  **参数解释**：关联的监听器ID，包括通过l7policy关联的。 支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string[]|null $listenerId **参数解释**：关联的监听器ID，包括通过l7policy关联的。 支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets memberInstanceId
    *  **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getMemberInstanceId()
    {
        return $this->container['memberInstanceId'];
    }

    /**
    * Sets memberInstanceId
    *
    * @param string[]|null $memberInstanceId **参数解释**：后端服务器ID。 支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。  **约束限制**：仅用于查询条件，不作为响应参数字段。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setMemberInstanceId($memberInstanceId)
    {
        $this->container['memberInstanceId'] = $memberInstanceId;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string[]|null $vpcId **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets type
    *  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端  **默认取值**：不涉及
    *
    * @return string[]|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string[]|null $type **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets connectionDrain
    *  **参数解释**：查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false  **约束限制**：不涉及  **取值范围**：true 开启，false 不开启。  **默认取值**：不涉及
    *
    * @return bool|null
    */
    public function getConnectionDrain()
    {
        return $this->container['connectionDrain'];
    }

    /**
    * Sets connectionDrain
    *
    * @param bool|null $connectionDrain **参数解释**：查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false  **约束限制**：不涉及  **取值范围**：true 开启，false 不开启。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setConnectionDrain($connectionDrain)
    {
        $this->container['connectionDrain'] = $connectionDrain;
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

