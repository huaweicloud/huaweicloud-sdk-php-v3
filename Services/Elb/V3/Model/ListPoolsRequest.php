<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPoolsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPoolsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * description  后端云服务器组的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  后端云服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * healthmonitorId  后端云服务器组关联的健康检查的ID。  支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。
    * id  后端云服务器组的ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  后端云服务器组的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * loadbalancerId  后端云服务器组绑定的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * protocol  后端云服务器组的后端协议。  取值：TCP、UDP、[IP、](tag:hws_eu)TLS、HTTP、HTTPS、QUIC和gRPC。  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC协议。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * lbAlgorithm  后端云服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 4_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。](tag:hws_eu)  支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  [不支持QUIC_CID。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt,dt_test)
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  后端云服务器组支持的IP版本。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberDeletionProtectionEnable  是否开启删除保护，false不开启，true开启，不传查询全部。 [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * listenerId  关联的监听器ID，包括通过l7policy关联的。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * vpcId  后端云服务器组关联的虚拟私有云的ID。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * connectionDrain  查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false
    * poolHealth  查询是否开启后端全下线转发功能，查询条件格式：*pool_health=minimum_healthy_member_count=0或者*pool_health=minimum_healthy_member_count=1
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。取值：false不开启，true开启。
    * publicBorderGroup  可用区组
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'marker' => 'string',
            'limit' => 'int',
            'pageReverse' => 'bool',
            'description' => 'string[]',
            'adminStateUp' => 'bool',
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
            'memberDeletionProtectionEnable' => 'bool',
            'listenerId' => 'string[]',
            'memberInstanceId' => 'string[]',
            'vpcId' => 'string[]',
            'type' => 'string[]',
            'protectionStatus' => 'string[]',
            'connectionDrain' => 'bool',
            'poolHealth' => 'string',
            'anyPortEnable' => 'bool',
            'publicBorderGroup' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * description  后端云服务器组的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  后端云服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * healthmonitorId  后端云服务器组关联的健康检查的ID。  支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。
    * id  后端云服务器组的ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  后端云服务器组的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * loadbalancerId  后端云服务器组绑定的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * protocol  后端云服务器组的后端协议。  取值：TCP、UDP、[IP、](tag:hws_eu)TLS、HTTP、HTTPS、QUIC和gRPC。  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC协议。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * lbAlgorithm  后端云服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 4_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。](tag:hws_eu)  支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  [不支持QUIC_CID。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt,dt_test)
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  后端云服务器组支持的IP版本。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberDeletionProtectionEnable  是否开启删除保护，false不开启，true开启，不传查询全部。 [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * listenerId  关联的监听器ID，包括通过l7policy关联的。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * vpcId  后端云服务器组关联的虚拟私有云的ID。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * connectionDrain  查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false
    * poolHealth  查询是否开启后端全下线转发功能，查询条件格式：*pool_health=minimum_healthy_member_count=0或者*pool_health=minimum_healthy_member_count=1
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。取值：false不开启，true开启。
    * publicBorderGroup  可用区组
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'marker' => null,
        'limit' => 'int32',
        'pageReverse' => null,
        'description' => null,
        'adminStateUp' => null,
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
        'memberDeletionProtectionEnable' => null,
        'listenerId' => null,
        'memberInstanceId' => null,
        'vpcId' => null,
        'type' => null,
        'protectionStatus' => null,
        'connectionDrain' => null,
        'poolHealth' => null,
        'anyPortEnable' => null,
        'publicBorderGroup' => null
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
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * description  后端云服务器组的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  后端云服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * healthmonitorId  后端云服务器组关联的健康检查的ID。  支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。
    * id  后端云服务器组的ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  后端云服务器组的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * loadbalancerId  后端云服务器组绑定的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * protocol  后端云服务器组的后端协议。  取值：TCP、UDP、[IP、](tag:hws_eu)TLS、HTTP、HTTPS、QUIC和gRPC。  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC协议。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * lbAlgorithm  后端云服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 4_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。](tag:hws_eu)  支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  [不支持QUIC_CID。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt,dt_test)
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  后端云服务器组支持的IP版本。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberDeletionProtectionEnable  是否开启删除保护，false不开启，true开启，不传查询全部。 [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * listenerId  关联的监听器ID，包括通过l7policy关联的。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * vpcId  后端云服务器组关联的虚拟私有云的ID。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * connectionDrain  查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false
    * poolHealth  查询是否开启后端全下线转发功能，查询条件格式：*pool_health=minimum_healthy_member_count=0或者*pool_health=minimum_healthy_member_count=1
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。取值：false不开启，true开启。
    * publicBorderGroup  可用区组
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'marker' => 'marker',
            'limit' => 'limit',
            'pageReverse' => 'page_reverse',
            'description' => 'description',
            'adminStateUp' => 'admin_state_up',
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
            'memberDeletionProtectionEnable' => 'member_deletion_protection_enable',
            'listenerId' => 'listener_id',
            'memberInstanceId' => 'member_instance_id',
            'vpcId' => 'vpc_id',
            'type' => 'type',
            'protectionStatus' => 'protection_status',
            'connectionDrain' => 'connection_drain',
            'poolHealth' => 'pool_health',
            'anyPortEnable' => 'any_port_enable',
            'publicBorderGroup' => 'public_border_group'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * description  后端云服务器组的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  后端云服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * healthmonitorId  后端云服务器组关联的健康检查的ID。  支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。
    * id  后端云服务器组的ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  后端云服务器组的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * loadbalancerId  后端云服务器组绑定的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * protocol  后端云服务器组的后端协议。  取值：TCP、UDP、[IP、](tag:hws_eu)TLS、HTTP、HTTPS、QUIC和gRPC。  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC协议。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * lbAlgorithm  后端云服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 4_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。](tag:hws_eu)  支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  [不支持QUIC_CID。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt,dt_test)
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  后端云服务器组支持的IP版本。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberDeletionProtectionEnable  是否开启删除保护，false不开启，true开启，不传查询全部。 [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * listenerId  关联的监听器ID，包括通过l7policy关联的。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * vpcId  后端云服务器组关联的虚拟私有云的ID。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * connectionDrain  查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false
    * poolHealth  查询是否开启后端全下线转发功能，查询条件格式：*pool_health=minimum_healthy_member_count=0或者*pool_health=minimum_healthy_member_count=1
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。取值：false不开启，true开启。
    * publicBorderGroup  可用区组
    *
    * @var string[]
    */
    protected static $setters = [
            'marker' => 'setMarker',
            'limit' => 'setLimit',
            'pageReverse' => 'setPageReverse',
            'description' => 'setDescription',
            'adminStateUp' => 'setAdminStateUp',
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
            'memberDeletionProtectionEnable' => 'setMemberDeletionProtectionEnable',
            'listenerId' => 'setListenerId',
            'memberInstanceId' => 'setMemberInstanceId',
            'vpcId' => 'setVpcId',
            'type' => 'setType',
            'protectionStatus' => 'setProtectionStatus',
            'connectionDrain' => 'setConnectionDrain',
            'poolHealth' => 'setPoolHealth',
            'anyPortEnable' => 'setAnyPortEnable',
            'publicBorderGroup' => 'setPublicBorderGroup'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * marker  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
    * limit  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
    * pageReverse  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
    * description  后端云服务器组的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    * adminStateUp  后端云服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * healthmonitorId  后端云服务器组关联的健康检查的ID。  支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。
    * id  后端云服务器组的ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
    * name  后端云服务器组的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
    * loadbalancerId  后端云服务器组绑定的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
    * protocol  后端云服务器组的后端协议。  取值：TCP、UDP、[IP、](tag:hws_eu)TLS、HTTP、HTTPS、QUIC和gRPC。  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC协议。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
    * lbAlgorithm  后端云服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 4_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。](tag:hws_eu)  支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  [不支持QUIC_CID。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt,dt_test)
    * enterpriseProjectId  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    * ipVersion  后端云服务器组支持的IP版本。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
    * memberAddress  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
    * memberDeviceId  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    * memberDeletionProtectionEnable  是否开启删除保护，false不开启，true开启，不传查询全部。 [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    * listenerId  关联的监听器ID，包括通过l7policy关联的。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
    * memberInstanceId  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
    * vpcId  后端云服务器组关联的虚拟私有云的ID。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * connectionDrain  查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false
    * poolHealth  查询是否开启后端全下线转发功能，查询条件格式：*pool_health=minimum_healthy_member_count=0或者*pool_health=minimum_healthy_member_count=1
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。取值：false不开启，true开启。
    * publicBorderGroup  可用区组
    *
    * @var string[]
    */
    protected static $getters = [
            'marker' => 'getMarker',
            'limit' => 'getLimit',
            'pageReverse' => 'getPageReverse',
            'description' => 'getDescription',
            'adminStateUp' => 'getAdminStateUp',
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
            'memberDeletionProtectionEnable' => 'getMemberDeletionProtectionEnable',
            'listenerId' => 'getListenerId',
            'memberInstanceId' => 'getMemberInstanceId',
            'vpcId' => 'getVpcId',
            'type' => 'getType',
            'protectionStatus' => 'getProtectionStatus',
            'connectionDrain' => 'getConnectionDrain',
            'poolHealth' => 'getPoolHealth',
            'anyPortEnable' => 'getAnyPortEnable',
            'publicBorderGroup' => 'getPublicBorderGroup'
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
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
        $this->container['memberDeletionProtectionEnable'] = isset($data['memberDeletionProtectionEnable']) ? $data['memberDeletionProtectionEnable'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['memberInstanceId'] = isset($data['memberInstanceId']) ? $data['memberInstanceId'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['connectionDrain'] = isset($data['connectionDrain']) ? $data['connectionDrain'] : null;
        $this->container['poolHealth'] = isset($data['poolHealth']) ? $data['poolHealth'] : null;
        $this->container['anyPortEnable'] = isset($data['anyPortEnable']) ? $data['anyPortEnable'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
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
    *  上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
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
    * @param string|null $marker 上一页最后一条记录的ID。  使用说明： - 必须与limit一起使用。 - 不指定时表示查询第一页。 - 该字段不允许为空或无效的ID。
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
    *  参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
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
    * @param int|null $limit 参数解释：每页返回的个数。  取值范围：0-2000  默认取值：2000
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
    *  是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
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
    * @param bool|null $pageReverse 是否反向查询。  取值： - true：查询上一页。 - false：查询下一页，默认。  使用说明： - 必须与limit一起使用。 - 当page_reverse=true时，若要查询上一页，marker取值为当前页返回值的previous_marker。
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
    *  后端云服务器组的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
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
    * @param string[]|null $description 后端云服务器组的描述信息。  支持多值查询，查询条件格式：*description=xxx&description=xxx*。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  后端云服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    * @param bool|null $adminStateUp 后端云服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets healthmonitorId
    *  后端云服务器组关联的健康检查的ID。  支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。
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
    * @param string[]|null $healthmonitorId 后端云服务器组关联的健康检查的ID。  支持多值查询，查询条件格式：*healthmonitor_id=xxx&healthmonitor_id=xxx*。
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
    *  后端云服务器组的ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
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
    * @param string[]|null $id 后端云服务器组的ID。  支持多值查询，查询条件格式：*id=xxx&id=xxx*。
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
    *  后端云服务器组的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
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
    * @param string[]|null $name 后端云服务器组的名称。  支持多值查询，查询条件格式：*name=xxx&name=xxx*。
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
    *  后端云服务器组绑定的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
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
    * @param string[]|null $loadbalancerId 后端云服务器组绑定的负载均衡器ID。  支持多值查询，查询条件格式：*loadbalancer_id=xxx&loadbalancer_id=xxx*。
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
    *  后端云服务器组的后端协议。  取值：TCP、UDP、[IP、](tag:hws_eu)TLS、HTTP、HTTPS、QUIC和gRPC。  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC协议。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
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
    * @param string[]|null $protocol 后端云服务器组的后端协议。  取值：TCP、UDP、[IP、](tag:hws_eu)TLS、HTTP、HTTPS、QUIC和gRPC。  支持多值查询，查询条件格式：*protocol=xxx&protocol=xxx*。  [不支持QUIC协议。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt,dt_test)
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
    *  后端云服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 4_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。](tag:hws_eu)  支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  [不支持QUIC_CID。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt,dt_test)
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
    * @param string[]|null $lbAlgorithm 后端云服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 4_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。](tag:hws_eu)  支持多值查询，查询条件格式：*lb_algorithm=xxx&lb_algorithm=xxx*。  [不支持QUIC_CID。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt,dt_test)
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
    *  企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    * @param string[]|null $enterpriseProjectId 企业项目ID。不传时查询default企业项目\"0\"下的资源，鉴权按照default企业项目鉴权； 如果传值，则传已存在的企业项目ID或all_granted_eps（表示查询所有企业项目）进行查询。  支持多值查询，查询条件格式：*enterprise_project_id=xxx&enterprise_project_id=xxx*。  [不支持该字段，请勿使用。](tag:dt,dt_test,hcso_dt)
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
    *  后端云服务器组支持的IP版本。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
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
    * @param string[]|null $ipVersion 后端云服务器组支持的IP版本。  支持多值查询，查询条件格式：*ip_version=xxx&ip_version=xxx*。
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
    *  后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
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
    * @param string[]|null $memberAddress 后端云服务器的IP地址。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_address=xxx&member_address=xxx*。
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
    *  后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
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
    * @param string[]|null $memberDeviceId 后端云服务器对应的弹性云服务器的ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_device_id=xxx&member_device_id=xxx*。
    *
    * @return $this
    */
    public function setMemberDeviceId($memberDeviceId)
    {
        $this->container['memberDeviceId'] = $memberDeviceId;
        return $this;
    }

    /**
    * Gets memberDeletionProtectionEnable
    *  是否开启删除保护，false不开启，true开启，不传查询全部。 [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    *
    * @return bool|null
    */
    public function getMemberDeletionProtectionEnable()
    {
        return $this->container['memberDeletionProtectionEnable'];
    }

    /**
    * Sets memberDeletionProtectionEnable
    *
    * @param bool|null $memberDeletionProtectionEnable 是否开启删除保护，false不开启，true开启，不传查询全部。 [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt,dt_test)
    *
    * @return $this
    */
    public function setMemberDeletionProtectionEnable($memberDeletionProtectionEnable)
    {
        $this->container['memberDeletionProtectionEnable'] = $memberDeletionProtectionEnable;
        return $this;
    }

    /**
    * Gets listenerId
    *  关联的监听器ID，包括通过l7policy关联的。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
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
    * @param string[]|null $listenerId 关联的监听器ID，包括通过l7policy关联的。  支持多值查询，查询条件格式：*listener_id=xxx&listener_id=xxx*。
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
    *  后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
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
    * @param string[]|null $memberInstanceId 后端云服务器ID。仅用于查询条件，不作为响应参数字段。  支持多值查询，查询条件格式：*member_instance_id=xxx&member_instance_id=xxx*。
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
    *  后端云服务器组关联的虚拟私有云的ID。
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
    * @param string[]|null $vpcId 后端云服务器组关联的虚拟私有云的ID。
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
    *  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
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
    * @param string[]|null $type 后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return string[]|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string[]|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets connectionDrain
    *  查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false
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
    * @param bool|null $connectionDrain 查询是否开启延迟注销的功能，查询条件格式：*connection_drain=true或者*connection_drain=false
    *
    * @return $this
    */
    public function setConnectionDrain($connectionDrain)
    {
        $this->container['connectionDrain'] = $connectionDrain;
        return $this;
    }

    /**
    * Gets poolHealth
    *  查询是否开启后端全下线转发功能，查询条件格式：*pool_health=minimum_healthy_member_count=0或者*pool_health=minimum_healthy_member_count=1
    *
    * @return string|null
    */
    public function getPoolHealth()
    {
        return $this->container['poolHealth'];
    }

    /**
    * Sets poolHealth
    *
    * @param string|null $poolHealth 查询是否开启后端全下线转发功能，查询条件格式：*pool_health=minimum_healthy_member_count=0或者*pool_health=minimum_healthy_member_count=1
    *
    * @return $this
    */
    public function setPoolHealth($poolHealth)
    {
        $this->container['poolHealth'] = $poolHealth;
        return $this;
    }

    /**
    * Gets anyPortEnable
    *  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。取值：false不开启，true开启。
    *
    * @return bool|null
    */
    public function getAnyPortEnable()
    {
        return $this->container['anyPortEnable'];
    }

    /**
    * Sets anyPortEnable
    *
    * @param bool|null $anyPortEnable 后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。取值：false不开启，true开启。
    *
    * @return $this
    */
    public function setAnyPortEnable($anyPortEnable)
    {
        $this->container['anyPortEnable'] = $anyPortEnable;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  可用区组
    *
    * @return string|null
    */
    public function getPublicBorderGroup()
    {
        return $this->container['publicBorderGroup'];
    }

    /**
    * Sets publicBorderGroup
    *
    * @param string|null $publicBorderGroup 可用区组
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
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

