<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Pool implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Pool';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  参数解释：后端服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  参数解释：后端服务器组的描述信息。
    * healthmonitorId  参数解释：后端服务器组关联的健康检查的ID。
    * id  参数解释：后端服务器组的ID。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID算法。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  参数解释：后端服务器组关联的监听器ID列表。
    * loadbalancers  参数解释：后端服务器组关联的负载均衡器ID列表。
    * members  参数解释：后端服务器组中的后端服务器ID列表。
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所在的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器必须开启HTTP2。 - 若pool的protocol为TCP,则pool的ip_version字段取值必须是4。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启误删保护。  取值范围：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。
    * type  参数解释：后端服务器组的类型。  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  参数解释：修改保护状态,。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * connectionDrain  connectionDrain
    * enterpriseProjectId  参数解释：后端服务器组所在的企业项目ID。
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'description' => 'string',
            'healthmonitorId' => 'string',
            'id' => 'string',
            'lbAlgorithm' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]',
            'loadbalancers' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerRef[]',
            'members' => '\HuaweiCloud\SDK\Elb\V3\Model\MemberRef[]',
            'name' => 'string',
            'projectId' => 'string',
            'protocol' => 'string',
            'sessionPersistence' => '\HuaweiCloud\SDK\Elb\V3\Model\SessionPersistence',
            'ipVersion' => 'string',
            'slowStart' => '\HuaweiCloud\SDK\Elb\V3\Model\SlowStart',
            'memberDeletionProtectionEnable' => 'bool',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'vpcId' => 'string',
            'type' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'anyPortEnable' => 'bool',
            'connectionDrain' => '\HuaweiCloud\SDK\Elb\V3\Model\ConnectionDrain',
            'enterpriseProjectId' => 'string',
            'poolHealth' => '\HuaweiCloud\SDK\Elb\V3\Model\PoolHealth',
            'publicBorderGroup' => 'string',
            'quicCidHashStrategy' => '\HuaweiCloud\SDK\Elb\V3\Model\QuicCidHashStrategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  参数解释：后端服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  参数解释：后端服务器组的描述信息。
    * healthmonitorId  参数解释：后端服务器组关联的健康检查的ID。
    * id  参数解释：后端服务器组的ID。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID算法。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  参数解释：后端服务器组关联的监听器ID列表。
    * loadbalancers  参数解释：后端服务器组关联的负载均衡器ID列表。
    * members  参数解释：后端服务器组中的后端服务器ID列表。
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所在的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器必须开启HTTP2。 - 若pool的protocol为TCP,则pool的ip_version字段取值必须是4。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启误删保护。  取值范围：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。
    * type  参数解释：后端服务器组的类型。  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  参数解释：修改保护状态,。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * connectionDrain  connectionDrain
    * enterpriseProjectId  参数解释：后端服务器组所在的企业项目ID。
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'description' => null,
        'healthmonitorId' => null,
        'id' => null,
        'lbAlgorithm' => null,
        'listeners' => null,
        'loadbalancers' => null,
        'members' => null,
        'name' => null,
        'projectId' => null,
        'protocol' => null,
        'sessionPersistence' => null,
        'ipVersion' => null,
        'slowStart' => null,
        'memberDeletionProtectionEnable' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'vpcId' => null,
        'type' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'anyPortEnable' => null,
        'connectionDrain' => null,
        'enterpriseProjectId' => null,
        'poolHealth' => null,
        'publicBorderGroup' => null,
        'quicCidHashStrategy' => null
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
    * adminStateUp  参数解释：后端服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  参数解释：后端服务器组的描述信息。
    * healthmonitorId  参数解释：后端服务器组关联的健康检查的ID。
    * id  参数解释：后端服务器组的ID。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID算法。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  参数解释：后端服务器组关联的监听器ID列表。
    * loadbalancers  参数解释：后端服务器组关联的负载均衡器ID列表。
    * members  参数解释：后端服务器组中的后端服务器ID列表。
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所在的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器必须开启HTTP2。 - 若pool的protocol为TCP,则pool的ip_version字段取值必须是4。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启误删保护。  取值范围：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。
    * type  参数解释：后端服务器组的类型。  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  参数解释：修改保护状态,。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * connectionDrain  connectionDrain
    * enterpriseProjectId  参数解释：后端服务器组所在的企业项目ID。
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'description' => 'description',
            'healthmonitorId' => 'healthmonitor_id',
            'id' => 'id',
            'lbAlgorithm' => 'lb_algorithm',
            'listeners' => 'listeners',
            'loadbalancers' => 'loadbalancers',
            'members' => 'members',
            'name' => 'name',
            'projectId' => 'project_id',
            'protocol' => 'protocol',
            'sessionPersistence' => 'session_persistence',
            'ipVersion' => 'ip_version',
            'slowStart' => 'slow_start',
            'memberDeletionProtectionEnable' => 'member_deletion_protection_enable',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'vpcId' => 'vpc_id',
            'type' => 'type',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'anyPortEnable' => 'any_port_enable',
            'connectionDrain' => 'connection_drain',
            'enterpriseProjectId' => 'enterprise_project_id',
            'poolHealth' => 'pool_health',
            'publicBorderGroup' => 'public_border_group',
            'quicCidHashStrategy' => 'quic_cid_hash_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  参数解释：后端服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  参数解释：后端服务器组的描述信息。
    * healthmonitorId  参数解释：后端服务器组关联的健康检查的ID。
    * id  参数解释：后端服务器组的ID。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID算法。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  参数解释：后端服务器组关联的监听器ID列表。
    * loadbalancers  参数解释：后端服务器组关联的负载均衡器ID列表。
    * members  参数解释：后端服务器组中的后端服务器ID列表。
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所在的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器必须开启HTTP2。 - 若pool的protocol为TCP,则pool的ip_version字段取值必须是4。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启误删保护。  取值范围：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。
    * type  参数解释：后端服务器组的类型。  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  参数解释：修改保护状态,。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * connectionDrain  connectionDrain
    * enterpriseProjectId  参数解释：后端服务器组所在的企业项目ID。
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'description' => 'setDescription',
            'healthmonitorId' => 'setHealthmonitorId',
            'id' => 'setId',
            'lbAlgorithm' => 'setLbAlgorithm',
            'listeners' => 'setListeners',
            'loadbalancers' => 'setLoadbalancers',
            'members' => 'setMembers',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'protocol' => 'setProtocol',
            'sessionPersistence' => 'setSessionPersistence',
            'ipVersion' => 'setIpVersion',
            'slowStart' => 'setSlowStart',
            'memberDeletionProtectionEnable' => 'setMemberDeletionProtectionEnable',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'vpcId' => 'setVpcId',
            'type' => 'setType',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'anyPortEnable' => 'setAnyPortEnable',
            'connectionDrain' => 'setConnectionDrain',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'poolHealth' => 'setPoolHealth',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'quicCidHashStrategy' => 'setQuicCidHashStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  参数解释：后端服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  参数解释：后端服务器组的描述信息。
    * healthmonitorId  参数解释：后端服务器组关联的健康检查的ID。
    * id  参数解释：后端服务器组的ID。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID算法。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  参数解释：后端服务器组关联的监听器ID列表。
    * loadbalancers  参数解释：后端服务器组关联的负载均衡器ID列表。
    * members  参数解释：后端服务器组中的后端服务器ID列表。
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所在的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器必须开启HTTP2。 - 若pool的protocol为TCP,则pool的ip_version字段取值必须是4。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启误删保护。  取值范围：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。
    * type  参数解释：后端服务器组的类型。  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端
    * protectionStatus  参数解释：修改保护状态,。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * connectionDrain  connectionDrain
    * enterpriseProjectId  参数解释：后端服务器组所在的企业项目ID。
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'description' => 'getDescription',
            'healthmonitorId' => 'getHealthmonitorId',
            'id' => 'getId',
            'lbAlgorithm' => 'getLbAlgorithm',
            'listeners' => 'getListeners',
            'loadbalancers' => 'getLoadbalancers',
            'members' => 'getMembers',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'protocol' => 'getProtocol',
            'sessionPersistence' => 'getSessionPersistence',
            'ipVersion' => 'getIpVersion',
            'slowStart' => 'getSlowStart',
            'memberDeletionProtectionEnable' => 'getMemberDeletionProtectionEnable',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'vpcId' => 'getVpcId',
            'type' => 'getType',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'anyPortEnable' => 'getAnyPortEnable',
            'connectionDrain' => 'getConnectionDrain',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'poolHealth' => 'getPoolHealth',
            'publicBorderGroup' => 'getPublicBorderGroup',
            'quicCidHashStrategy' => 'getQuicCidHashStrategy'
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
    const PROTECTION_STATUS_NON_PROTECTION = 'nonProtection';
    const PROTECTION_STATUS_CONSOLE_PROTECTION = 'consoleProtection';
    

    /**
    * Gets allowable values of the enum
    *
    * @return string[]
    */
    public function getProtectionStatusAllowableValues()
    {
        return [
            self::PROTECTION_STATUS_NON_PROTECTION,
            self::PROTECTION_STATUS_CONSOLE_PROTECTION,
        ];
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
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['healthmonitorId'] = isset($data['healthmonitorId']) ? $data['healthmonitorId'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['listeners'] = isset($data['listeners']) ? $data['listeners'] : null;
        $this->container['loadbalancers'] = isset($data['loadbalancers']) ? $data['loadbalancers'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['sessionPersistence'] = isset($data['sessionPersistence']) ? $data['sessionPersistence'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['slowStart'] = isset($data['slowStart']) ? $data['slowStart'] : null;
        $this->container['memberDeletionProtectionEnable'] = isset($data['memberDeletionProtectionEnable']) ? $data['memberDeletionProtectionEnable'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['anyPortEnable'] = isset($data['anyPortEnable']) ? $data['anyPortEnable'] : null;
        $this->container['connectionDrain'] = isset($data['connectionDrain']) ? $data['connectionDrain'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['poolHealth'] = isset($data['poolHealth']) ? $data['poolHealth'] : null;
        $this->container['publicBorderGroup'] = isset($data['publicBorderGroup']) ? $data['publicBorderGroup'] : null;
        $this->container['quicCidHashStrategy'] = isset($data['quicCidHashStrategy']) ? $data['quicCidHashStrategy'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['healthmonitorId'] === null) {
            $invalidProperties[] = "'healthmonitorId' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['lbAlgorithm'] === null) {
            $invalidProperties[] = "'lbAlgorithm' can't be null";
        }
        if ($this->container['listeners'] === null) {
            $invalidProperties[] = "'listeners' can't be null";
        }
        if ($this->container['loadbalancers'] === null) {
            $invalidProperties[] = "'loadbalancers' can't be null";
        }
        if ($this->container['members'] === null) {
            $invalidProperties[] = "'members' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
        if ($this->container['sessionPersistence'] === null) {
            $invalidProperties[] = "'sessionPersistence' can't be null";
        }
        if ($this->container['ipVersion'] === null) {
            $invalidProperties[] = "'ipVersion' can't be null";
        }
        if ($this->container['slowStart'] === null) {
            $invalidProperties[] = "'slowStart' can't be null";
        }
        if ($this->container['memberDeletionProtectionEnable'] === null) {
            $invalidProperties[] = "'memberDeletionProtectionEnable' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            $allowedValues = $this->getProtectionStatusAllowableValues();
                if (!is_null($this->container['protectionStatus']) && !in_array($this->container['protectionStatus'], $allowedValues, true)) {
                $invalidProperties[] = sprintf(
                "invalid value for 'protectionStatus', must be one of '%s'",
                implode("', '", $allowedValues)
                );
            }

            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) > 255)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['protectionReason']) && (mb_strlen($this->container['protectionReason']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectionReason', the character length must be bigger than or equal to 0.";
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
    * Gets adminStateUp
    *  参数解释：后端服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return bool
    */
    public function getAdminStateUp()
    {
        return $this->container['adminStateUp'];
    }

    /**
    * Sets adminStateUp
    *
    * @param bool $adminStateUp 参数解释：后端服务器组的管理状态。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets description
    *  参数解释：后端服务器组的描述信息。
    *
    * @return string
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string $description 参数解释：后端服务器组的描述信息。
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
    *  参数解释：后端服务器组关联的健康检查的ID。
    *
    * @return string
    */
    public function getHealthmonitorId()
    {
        return $this->container['healthmonitorId'];
    }

    /**
    * Sets healthmonitorId
    *
    * @param string $healthmonitorId 参数解释：后端服务器组关联的健康检查的ID。
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
    *  参数解释：后端服务器组的ID。
    *
    * @return string
    */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
    * Sets id
    *
    * @param string $id 参数解释：后端服务器组的ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets lbAlgorithm
    *  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID算法。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    *
    * @return string
    */
    public function getLbAlgorithm()
    {
        return $this->container['lbAlgorithm'];
    }

    /**
    * Sets lbAlgorithm
    *
    * @param string $lbAlgorithm 参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID算法。](tag:hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets listeners
    *  参数解释：后端服务器组关联的监听器ID列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]
    */
    public function getListeners()
    {
        return $this->container['listeners'];
    }

    /**
    * Sets listeners
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[] $listeners 参数解释：后端服务器组关联的监听器ID列表。
    *
    * @return $this
    */
    public function setListeners($listeners)
    {
        $this->container['listeners'] = $listeners;
        return $this;
    }

    /**
    * Gets loadbalancers
    *  参数解释：后端服务器组关联的负载均衡器ID列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerRef[]
    */
    public function getLoadbalancers()
    {
        return $this->container['loadbalancers'];
    }

    /**
    * Sets loadbalancers
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerRef[] $loadbalancers 参数解释：后端服务器组关联的负载均衡器ID列表。
    *
    * @return $this
    */
    public function setLoadbalancers($loadbalancers)
    {
        $this->container['loadbalancers'] = $loadbalancers;
        return $this;
    }

    /**
    * Gets members
    *  参数解释：后端服务器组中的后端服务器ID列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MemberRef[]
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MemberRef[] $members 参数解释：后端服务器组中的后端服务器ID列表。
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets name
    *  参数解释：后端服务器组的名称。
    *
    * @return string
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string $name 参数解释：后端服务器组的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets projectId
    *  参数解释：后端服务器组所在的项目ID。
    *
    * @return string
    */
    public function getProjectId()
    {
        return $this->container['projectId'];
    }

    /**
    * Sets projectId
    *
    * @param string $projectId 参数解释：后端服务器组所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets protocol
    *  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器必须开启HTTP2。 - 若pool的protocol为TCP,则pool的ip_version字段取值必须是4。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @return string
    */
    public function getProtocol()
    {
        return $this->container['protocol'];
    }

    /**
    * Sets protocol
    *
    * @param string $protocol 参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器必须开启HTTP2。 - 若pool的protocol为TCP,则pool的ip_version字段取值必须是4。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    *
    * @return $this
    */
    public function setProtocol($protocol)
    {
        $this->container['protocol'] = $protocol;
        return $this;
    }

    /**
    * Gets sessionPersistence
    *  sessionPersistence
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\SessionPersistence
    */
    public function getSessionPersistence()
    {
        return $this->container['sessionPersistence'];
    }

    /**
    * Sets sessionPersistence
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\SessionPersistence $sessionPersistence sessionPersistence
    *
    * @return $this
    */
    public function setSessionPersistence($sessionPersistence)
    {
        $this->container['sessionPersistence'] = $sessionPersistence;
        return $this;
    }

    /**
    * Gets ipVersion
    *  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    *
    * @return string
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param string $ipVersion 参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets slowStart
    *  slowStart
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\SlowStart
    */
    public function getSlowStart()
    {
        return $this->container['slowStart'];
    }

    /**
    * Sets slowStart
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\SlowStart $slowStart slowStart
    *
    * @return $this
    */
    public function setSlowStart($slowStart)
    {
        $this->container['slowStart'] = $slowStart;
        return $this;
    }

    /**
    * Gets memberDeletionProtectionEnable
    *  参数解释：是否开启误删保护。  取值范围：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return bool
    */
    public function getMemberDeletionProtectionEnable()
    {
        return $this->container['memberDeletionProtectionEnable'];
    }

    /**
    * Sets memberDeletionProtectionEnable
    *
    * @param bool $memberDeletionProtectionEnable 参数解释：是否开启误删保护。  取值范围：false不开启，true开启。  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setMemberDeletionProtectionEnable($memberDeletionProtectionEnable)
    {
        $this->container['memberDeletionProtectionEnable'] = $memberDeletionProtectionEnable;
        return $this;
    }

    /**
    * Gets createdAt
    *  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return string|null
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string|null $createdAt 参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setCreatedAt($createdAt)
    {
        $this->container['createdAt'] = $createdAt;
        return $this;
    }

    /**
    * Gets updatedAt
    *  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return string|null
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string|null $updatedAt 参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setUpdatedAt($updatedAt)
    {
        $this->container['updatedAt'] = $updatedAt;
        return $this;
    }

    /**
    * Gets vpcId
    *  参数解释：后端服务器组关联的虚拟私有云的ID。
    *
    * @return string
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string $vpcId 参数解释：后端服务器组关联的虚拟私有云的ID。
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
    *  参数解释：后端服务器组的类型。  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端
    *
    * @return string
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string $type 参数解释：后端服务器组的类型。  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端
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
    *  参数解释：修改保护状态,。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    *
    * @return string|null
    */
    public function getProtectionStatus()
    {
        return $this->container['protectionStatus'];
    }

    /**
    * Sets protectionStatus
    *
    * @param string|null $protectionStatus 参数解释：修改保护状态,。  取值范围： - nonProtection: 不保护。 - consoleProtection: 控制台修改保护。  默认取值：nonProtection
    *
    * @return $this
    */
    public function setProtectionStatus($protectionStatus)
    {
        $this->container['protectionStatus'] = $protectionStatus;
        return $this;
    }

    /**
    * Gets protectionReason
    *  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    *
    * @return string|null
    */
    public function getProtectionReason()
    {
        return $this->container['protectionReason'];
    }

    /**
    * Sets protectionReason
    *
    * @param string|null $protectionReason 参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    *
    * @return $this
    */
    public function setProtectionReason($protectionReason)
    {
        $this->container['protectionReason'] = $protectionReason;
        return $this;
    }

    /**
    * Gets anyPortEnable
    *  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
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
    * @param bool|null $anyPortEnable 参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @return $this
    */
    public function setAnyPortEnable($anyPortEnable)
    {
        $this->container['anyPortEnable'] = $anyPortEnable;
        return $this;
    }

    /**
    * Gets connectionDrain
    *  connectionDrain
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\ConnectionDrain|null
    */
    public function getConnectionDrain()
    {
        return $this->container['connectionDrain'];
    }

    /**
    * Sets connectionDrain
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ConnectionDrain|null $connectionDrain connectionDrain
    *
    * @return $this
    */
    public function setConnectionDrain($connectionDrain)
    {
        $this->container['connectionDrain'] = $connectionDrain;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  参数解释：后端服务器组所在的企业项目ID。
    *
    * @return string|null
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string|null $enterpriseProjectId 参数解释：后端服务器组所在的企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets poolHealth
    *  poolHealth
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\PoolHealth|null
    */
    public function getPoolHealth()
    {
        return $this->container['poolHealth'];
    }

    /**
    * Sets poolHealth
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\PoolHealth|null $poolHealth poolHealth
    *
    * @return $this
    */
    public function setPoolHealth($poolHealth)
    {
        $this->container['poolHealth'] = $poolHealth;
        return $this;
    }

    /**
    * Gets publicBorderGroup
    *  参数解释：网络公共边界组，如：center。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
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
    * @param string|null $publicBorderGroup 参数解释：网络公共边界组，如：center。  [不支持该字段，请勿使用。](tag:hws_eu,hws_eu_wb,hws_test,fcs,dt,hcso_dt,ctc,cmcc,tm,sbc,hk_sbc,hk_tm,hk_vdf,srg,g42,hk_g42)
    *
    * @return $this
    */
    public function setPublicBorderGroup($publicBorderGroup)
    {
        $this->container['publicBorderGroup'] = $publicBorderGroup;
        return $this;
    }

    /**
    * Gets quicCidHashStrategy
    *  quicCidHashStrategy
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\QuicCidHashStrategy|null
    */
    public function getQuicCidHashStrategy()
    {
        return $this->container['quicCidHashStrategy'];
    }

    /**
    * Sets quicCidHashStrategy
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\QuicCidHashStrategy|null $quicCidHashStrategy quicCidHashStrategy
    *
    * @return $this
    */
    public function setQuicCidHashStrategy($quicCidHashStrategy)
    {
        $this->container['quicCidHashStrategy'] = $quicCidHashStrategy;
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

