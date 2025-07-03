<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreatePoolOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreatePoolOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  参数解释：后端服务器组的管理状态，只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * azAffinity  azAffinity
    * description  参数解释：后端服务器组的描述信息。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listenerId  参数解释：后端服务器组关联的监听器的ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * loadbalancerId  参数解释：后端服务器组关联的负载均衡器ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所属的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器的http2_enable必须为true。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。  约束限制： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。
    * type  参数解释：后端服务器组的类型。  约束限制： - 不传表示允许任意类型的后端，并返回type为空字符串。 - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)]
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  取值范围：false不开启，true开启。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'azAffinity' => '\HuaweiCloud\SDK\Elb\V3\Model\AzAffinity',
            'description' => 'string',
            'lbAlgorithm' => 'string',
            'listenerId' => 'string',
            'loadbalancerId' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'protocol' => 'string',
            'sessionPersistence' => '\HuaweiCloud\SDK\Elb\V3\Model\CreatePoolSessionPersistenceOption',
            'slowStart' => '\HuaweiCloud\SDK\Elb\V3\Model\CreatePoolSlowStartOption',
            'memberDeletionProtectionEnable' => 'bool',
            'vpcId' => 'string',
            'type' => 'string',
            'ipVersion' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'anyPortEnable' => 'bool',
            'connectionDrain' => '\HuaweiCloud\SDK\Elb\V3\Model\ConnectionDrain',
            'poolHealth' => '\HuaweiCloud\SDK\Elb\V3\Model\PoolHealth',
            'publicBorderGroup' => 'string',
            'quicCidHashStrategy' => '\HuaweiCloud\SDK\Elb\V3\Model\QuicCidHashStrategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  参数解释：后端服务器组的管理状态，只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * azAffinity  azAffinity
    * description  参数解释：后端服务器组的描述信息。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listenerId  参数解释：后端服务器组关联的监听器的ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * loadbalancerId  参数解释：后端服务器组关联的负载均衡器ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所属的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器的http2_enable必须为true。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。  约束限制： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。
    * type  参数解释：后端服务器组的类型。  约束限制： - 不传表示允许任意类型的后端，并返回type为空字符串。 - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)]
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  取值范围：false不开启，true开启。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'azAffinity' => null,
        'description' => null,
        'lbAlgorithm' => null,
        'listenerId' => null,
        'loadbalancerId' => null,
        'name' => null,
        'projectId' => null,
        'protocol' => null,
        'sessionPersistence' => null,
        'slowStart' => null,
        'memberDeletionProtectionEnable' => null,
        'vpcId' => null,
        'type' => null,
        'ipVersion' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'anyPortEnable' => null,
        'connectionDrain' => null,
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
    * adminStateUp  参数解释：后端服务器组的管理状态，只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * azAffinity  azAffinity
    * description  参数解释：后端服务器组的描述信息。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listenerId  参数解释：后端服务器组关联的监听器的ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * loadbalancerId  参数解释：后端服务器组关联的负载均衡器ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所属的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器的http2_enable必须为true。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。  约束限制： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。
    * type  参数解释：后端服务器组的类型。  约束限制： - 不传表示允许任意类型的后端，并返回type为空字符串。 - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)]
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  取值范围：false不开启，true开启。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'azAffinity' => 'az_affinity',
            'description' => 'description',
            'lbAlgorithm' => 'lb_algorithm',
            'listenerId' => 'listener_id',
            'loadbalancerId' => 'loadbalancer_id',
            'name' => 'name',
            'projectId' => 'project_id',
            'protocol' => 'protocol',
            'sessionPersistence' => 'session_persistence',
            'slowStart' => 'slow_start',
            'memberDeletionProtectionEnable' => 'member_deletion_protection_enable',
            'vpcId' => 'vpc_id',
            'type' => 'type',
            'ipVersion' => 'ip_version',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'anyPortEnable' => 'any_port_enable',
            'connectionDrain' => 'connection_drain',
            'poolHealth' => 'pool_health',
            'publicBorderGroup' => 'public_border_group',
            'quicCidHashStrategy' => 'quic_cid_hash_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  参数解释：后端服务器组的管理状态，只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * azAffinity  azAffinity
    * description  参数解释：后端服务器组的描述信息。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listenerId  参数解释：后端服务器组关联的监听器的ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * loadbalancerId  参数解释：后端服务器组关联的负载均衡器ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所属的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器的http2_enable必须为true。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。  约束限制： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。
    * type  参数解释：后端服务器组的类型。  约束限制： - 不传表示允许任意类型的后端，并返回type为空字符串。 - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)]
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  取值范围：false不开启，true开启。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'azAffinity' => 'setAzAffinity',
            'description' => 'setDescription',
            'lbAlgorithm' => 'setLbAlgorithm',
            'listenerId' => 'setListenerId',
            'loadbalancerId' => 'setLoadbalancerId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'protocol' => 'setProtocol',
            'sessionPersistence' => 'setSessionPersistence',
            'slowStart' => 'setSlowStart',
            'memberDeletionProtectionEnable' => 'setMemberDeletionProtectionEnable',
            'vpcId' => 'setVpcId',
            'type' => 'setType',
            'ipVersion' => 'setIpVersion',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'anyPortEnable' => 'setAnyPortEnable',
            'connectionDrain' => 'setConnectionDrain',
            'poolHealth' => 'setPoolHealth',
            'publicBorderGroup' => 'setPublicBorderGroup',
            'quicCidHashStrategy' => 'setQuicCidHashStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  参数解释：后端服务器组的管理状态，只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * azAffinity  azAffinity
    * description  参数解释：后端服务器组的描述信息。
    * lbAlgorithm  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listenerId  参数解释：后端服务器组关联的监听器的ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * loadbalancerId  参数解释：后端服务器组关联的负载均衡器ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * name  参数解释：后端服务器组的名称。
    * projectId  参数解释：后端服务器组所属的项目ID。
    * protocol  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器的http2_enable必须为true。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  参数解释：后端服务器组关联的虚拟私有云的ID。  约束限制： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。
    * type  参数解释：后端服务器组的类型。  约束限制： - 不传表示允许任意类型的后端，并返回type为空字符串。 - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)]
    * ipVersion  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * protectionStatus  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  取值范围：false不开启，true开启。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * publicBorderGroup  参数解释：网络公共边界组，如：center
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'azAffinity' => 'getAzAffinity',
            'description' => 'getDescription',
            'lbAlgorithm' => 'getLbAlgorithm',
            'listenerId' => 'getListenerId',
            'loadbalancerId' => 'getLoadbalancerId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'protocol' => 'getProtocol',
            'sessionPersistence' => 'getSessionPersistence',
            'slowStart' => 'getSlowStart',
            'memberDeletionProtectionEnable' => 'getMemberDeletionProtectionEnable',
            'vpcId' => 'getVpcId',
            'type' => 'getType',
            'ipVersion' => 'getIpVersion',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'anyPortEnable' => 'getAnyPortEnable',
            'connectionDrain' => 'getConnectionDrain',
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
        $this->container['azAffinity'] = isset($data['azAffinity']) ? $data['azAffinity'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['sessionPersistence'] = isset($data['sessionPersistence']) ? $data['sessionPersistence'] : null;
        $this->container['slowStart'] = isset($data['slowStart']) ? $data['slowStart'] : null;
        $this->container['memberDeletionProtectionEnable'] = isset($data['memberDeletionProtectionEnable']) ? $data['memberDeletionProtectionEnable'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['anyPortEnable'] = isset($data['anyPortEnable']) ? $data['anyPortEnable'] : null;
        $this->container['connectionDrain'] = isset($data['connectionDrain']) ? $data['connectionDrain'] : null;
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
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['lbAlgorithm'] === null) {
            $invalidProperties[] = "'lbAlgorithm' can't be null";
        }
            if (!is_null($this->container['listenerId']) && (mb_strlen($this->container['listenerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'listenerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['listenerId']) && (mb_strlen($this->container['listenerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'listenerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) > 32)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['projectId']) && (mb_strlen($this->container['projectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'projectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['projectId']) && !preg_match("/[0-9a-fA-F]{32}/", $this->container['projectId'])) {
                $invalidProperties[] = "invalid value for 'projectId', must be conform to the pattern /[0-9a-fA-F]{32}/.";
            }
        if ($this->container['protocol'] === null) {
            $invalidProperties[] = "'protocol' can't be null";
        }
            if ((mb_strlen($this->container['protocol']) > 255)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['protocol']) < 1)) {
                $invalidProperties[] = "invalid value for 'protocol', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) < 0)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['ipVersion']) && (mb_strlen($this->container['ipVersion']) > 20)) {
                $invalidProperties[] = "invalid value for 'ipVersion', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['ipVersion']) && (mb_strlen($this->container['ipVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipVersion', the character length must be bigger than or equal to 1.";
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
    *  参数解释：后端服务器组的管理状态，只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
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
    * @param bool|null $adminStateUp 参数解释：后端服务器组的管理状态，只支持设置为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return $this
    */
    public function setAdminStateUp($adminStateUp)
    {
        $this->container['adminStateUp'] = $adminStateUp;
        return $this;
    }

    /**
    * Gets azAffinity
    *  azAffinity
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\AzAffinity|null
    */
    public function getAzAffinity()
    {
        return $this->container['azAffinity'];
    }

    /**
    * Sets azAffinity
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\AzAffinity|null $azAffinity azAffinity
    *
    * @return $this
    */
    public function setAzAffinity($azAffinity)
    {
        $this->container['azAffinity'] = $azAffinity;
        return $this;
    }

    /**
    * Gets description
    *  参数解释：后端服务器组的描述信息。
    *
    * @return string|null
    */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
    * Sets description
    *
    * @param string|null $description 参数解释：后端服务器组的描述信息。
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets lbAlgorithm
    *  参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
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
    * @param string $lbAlgorithm 参数解释：后端服务器组的负载均衡算法。  约束限制： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  取值范围： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets listenerId
    *  参数解释：后端服务器组关联的监听器的ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return string|null
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string|null $listenerId 参数解释：后端服务器组关联的监听器的ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  参数解释：后端服务器组关联的负载均衡器ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return string|null
    */
    public function getLoadbalancerId()
    {
        return $this->container['loadbalancerId'];
    }

    /**
    * Sets loadbalancerId
    *
    * @param string|null $loadbalancerId 参数解释：后端服务器组关联的负载均衡器ID。  约束限制： - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets name
    *  参数解释：后端服务器组的名称。
    *
    * @return string|null
    */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
    * Sets name
    *
    * @param string|null $name 参数解释：后端服务器组的名称。
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
    *  参数解释：后端服务器组所属的项目ID。
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
    * @param string|null $projectId 参数解释：后端服务器组所属的项目ID。
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
    *  参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器的http2_enable必须为true。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
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
    * @param string $protocol 参数解释：后端服务器组的后端协议。  约束限制： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时pool的protocol必须为TCP。 [- listener的protocol为IP时，pool的protocol必须为IP。](tag:hws_eu) - listener的protocol为HTTP时，pool的protocol必须为HTTP。 - listener的protocol为HTTPS时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TERMINATED_HTTPS时，pool的protocol必须为HTTP。 - listener的protocol为QUIC时，pool的protocol必须为HTTP、HTTPS或GRPC。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 若pool的protocol为QUIC，则必须开启session_persistence且type为SOURCE_IP。 - 若pool的protocol为GRPC，关联监听器的http2_enable必须为true。  取值范围：TCP、UDP、[IP、](tag:hws_eu)TLS、GRPC、HTTP、HTTPS和QUIC。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
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
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreatePoolSessionPersistenceOption|null
    */
    public function getSessionPersistence()
    {
        return $this->container['sessionPersistence'];
    }

    /**
    * Sets sessionPersistence
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreatePoolSessionPersistenceOption|null $sessionPersistence sessionPersistence
    *
    * @return $this
    */
    public function setSessionPersistence($sessionPersistence)
    {
        $this->container['sessionPersistence'] = $sessionPersistence;
        return $this;
    }

    /**
    * Gets slowStart
    *  slowStart
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreatePoolSlowStartOption|null
    */
    public function getSlowStart()
    {
        return $this->container['slowStart'];
    }

    /**
    * Sets slowStart
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreatePoolSlowStartOption|null $slowStart slowStart
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
    *  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    * @param bool|null $memberDeletionProtectionEnable 参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setMemberDeletionProtectionEnable($memberDeletionProtectionEnable)
    {
        $this->container['memberDeletionProtectionEnable'] = $memberDeletionProtectionEnable;
        return $this;
    }

    /**
    * Gets vpcId
    *  参数解释：后端服务器组关联的虚拟私有云的ID。  约束限制： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。
    *
    * @return string|null
    */
    public function getVpcId()
    {
        return $this->container['vpcId'];
    }

    /**
    * Sets vpcId
    *
    * @param string|null $vpcId 参数解释：后端服务器组关联的虚拟私有云的ID。  约束限制： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。
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
    *  参数解释：后端服务器组的类型。  约束限制： - 不传表示允许任意类型的后端，并返回type为空字符串。 - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)]
    *
    * @return string|null
    */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
    * Sets type
    *
    * @param string|null $type 参数解释：后端服务器组的类型。  约束限制： - 不传表示允许任意类型的后端，并返回type为空字符串。 - listener_id，loadbalancer_id，type至少指定一个。 [- 独享型实例的后端服务器组loadbalancer_id和listener_id可以都不指定，但共享型实例至少指定一个。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)]
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets ipVersion
    *  参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    *
    * @return string|null
    */
    public function getIpVersion()
    {
        return $this->container['ipVersion'];
    }

    /**
    * Sets ipVersion
    *
    * @param string|null $ipVersion 参数解释：后端服务器组支持的IP版本。  [取值范围： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [取值范围：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets protectionStatus
    *  参数解释：修改保护状态。  取值范围： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
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
    * @param string|null $protectionStatus 参数解释：修改保护状态。  取值范围： - nonProtection: 不保护，默认值为nonProtection - consoleProtection: 控制台修改保护
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
    *  参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  取值范围：false不开启，true开启。
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
    * @param bool|null $anyPortEnable 参数解释：后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  约束限制： - 仅QUIC,TCP,UDP的pool支持。  取值范围：false不开启，true开启。
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
    *  参数解释：网络公共边界组，如：center
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
    * @param string|null $publicBorderGroup 参数解释：网络公共边界组，如：center
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

