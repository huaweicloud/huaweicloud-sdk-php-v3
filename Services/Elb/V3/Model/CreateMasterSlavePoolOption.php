<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateMasterSlavePoolOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateMasterSlavePoolOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**：后端服务器组的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **约束限制**：不涉及  **取值范围**： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  **默认取值**：不涉及  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * loadbalancerId  **参数解释**：后端服务器组关联的LB的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：后端服务器组关联的监听器的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：后端服务器组的后端协议。  **约束限制**： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时，pool的protocol必须为TCP。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 其他协议监听器不支持主备后端服务器组。  **取值范围**：TCP、UDP、QUIC、TLS。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。  **默认取值**：不涉及
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  **约束限制**：不涉及  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  **默认取值**：不涉及  [不支持IPv6，只会返回v4。](tag:dt)
    * members  **参数解释**：主备服务器组的后端服务器。  **约束限制**：只能添加2个后端服务器，必须有一个为主，一个为备。
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  **约束限制**：仅QUIC,TCP,UDP的pool支持。  **取值范围**：false 不开启，true 开启。  **默认取值**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'lbAlgorithm' => 'string',
            'loadbalancerId' => 'string',
            'listenerId' => 'string',
            'name' => 'string',
            'projectId' => 'string',
            'protocol' => 'string',
            'sessionPersistence' => '\HuaweiCloud\SDK\Elb\V3\Model\CreatePoolSessionPersistenceOption',
            'vpcId' => 'string',
            'type' => 'string',
            'ipVersion' => 'string',
            'members' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlaveMemberOption[]',
            'healthmonitor' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlaveHealthMonitorOption',
            'anyPortEnable' => 'bool',
            'connectionDrain' => '\HuaweiCloud\SDK\Elb\V3\Model\ConnectionDrain',
            'quicCidHashStrategy' => '\HuaweiCloud\SDK\Elb\V3\Model\QuicCidHashStrategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**：后端服务器组的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **约束限制**：不涉及  **取值范围**： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  **默认取值**：不涉及  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * loadbalancerId  **参数解释**：后端服务器组关联的LB的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：后端服务器组关联的监听器的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：后端服务器组的后端协议。  **约束限制**： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时，pool的protocol必须为TCP。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 其他协议监听器不支持主备后端服务器组。  **取值范围**：TCP、UDP、QUIC、TLS。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。  **默认取值**：不涉及
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  **约束限制**：不涉及  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  **默认取值**：不涉及  [不支持IPv6，只会返回v4。](tag:dt)
    * members  **参数解释**：主备服务器组的后端服务器。  **约束限制**：只能添加2个后端服务器，必须有一个为主，一个为备。
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  **约束限制**：仅QUIC,TCP,UDP的pool支持。  **取值范围**：false 不开启，true 开启。  **默认取值**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
        'lbAlgorithm' => null,
        'loadbalancerId' => null,
        'listenerId' => null,
        'name' => null,
        'projectId' => null,
        'protocol' => null,
        'sessionPersistence' => null,
        'vpcId' => null,
        'type' => null,
        'ipVersion' => null,
        'members' => null,
        'healthmonitor' => null,
        'anyPortEnable' => null,
        'connectionDrain' => null,
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
    * description  **参数解释**：后端服务器组的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **约束限制**：不涉及  **取值范围**： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  **默认取值**：不涉及  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * loadbalancerId  **参数解释**：后端服务器组关联的LB的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：后端服务器组关联的监听器的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：后端服务器组的后端协议。  **约束限制**： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时，pool的protocol必须为TCP。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 其他协议监听器不支持主备后端服务器组。  **取值范围**：TCP、UDP、QUIC、TLS。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。  **默认取值**：不涉及
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  **约束限制**：不涉及  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  **默认取值**：不涉及  [不支持IPv6，只会返回v4。](tag:dt)
    * members  **参数解释**：主备服务器组的后端服务器。  **约束限制**：只能添加2个后端服务器，必须有一个为主，一个为备。
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  **约束限制**：仅QUIC,TCP,UDP的pool支持。  **取值范围**：false 不开启，true 开启。  **默认取值**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
            'lbAlgorithm' => 'lb_algorithm',
            'loadbalancerId' => 'loadbalancer_id',
            'listenerId' => 'listener_id',
            'name' => 'name',
            'projectId' => 'project_id',
            'protocol' => 'protocol',
            'sessionPersistence' => 'session_persistence',
            'vpcId' => 'vpc_id',
            'type' => 'type',
            'ipVersion' => 'ip_version',
            'members' => 'members',
            'healthmonitor' => 'healthmonitor',
            'anyPortEnable' => 'any_port_enable',
            'connectionDrain' => 'connection_drain',
            'quicCidHashStrategy' => 'quic_cid_hash_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**：后端服务器组的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **约束限制**：不涉及  **取值范围**： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  **默认取值**：不涉及  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * loadbalancerId  **参数解释**：后端服务器组关联的LB的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：后端服务器组关联的监听器的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：后端服务器组的后端协议。  **约束限制**： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时，pool的protocol必须为TCP。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 其他协议监听器不支持主备后端服务器组。  **取值范围**：TCP、UDP、QUIC、TLS。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。  **默认取值**：不涉及
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  **约束限制**：不涉及  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  **默认取值**：不涉及  [不支持IPv6，只会返回v4。](tag:dt)
    * members  **参数解释**：主备服务器组的后端服务器。  **约束限制**：只能添加2个后端服务器，必须有一个为主，一个为备。
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  **约束限制**：仅QUIC,TCP,UDP的pool支持。  **取值范围**：false 不开启，true 开启。  **默认取值**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
            'lbAlgorithm' => 'setLbAlgorithm',
            'loadbalancerId' => 'setLoadbalancerId',
            'listenerId' => 'setListenerId',
            'name' => 'setName',
            'projectId' => 'setProjectId',
            'protocol' => 'setProtocol',
            'sessionPersistence' => 'setSessionPersistence',
            'vpcId' => 'setVpcId',
            'type' => 'setType',
            'ipVersion' => 'setIpVersion',
            'members' => 'setMembers',
            'healthmonitor' => 'setHealthmonitor',
            'anyPortEnable' => 'setAnyPortEnable',
            'connectionDrain' => 'setConnectionDrain',
            'quicCidHashStrategy' => 'setQuicCidHashStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**：后端服务器组的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **约束限制**：不涉及  **取值范围**： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  **默认取值**：不涉及  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * loadbalancerId  **参数解释**：后端服务器组关联的LB的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：后端服务器组关联的监听器的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：后端服务器组的名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * projectId  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
    * protocol  **参数解释**：后端服务器组的后端协议。  **约束限制**： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时，pool的protocol必须为TCP。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 其他协议监听器不支持主备后端服务器组。  **取值范围**：TCP、UDP、QUIC、TLS。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。  **取值范围**：不涉及  **默认取值**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。  **默认取值**：不涉及
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  **约束限制**：不涉及  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  **默认取值**：不涉及  [不支持IPv6，只会返回v4。](tag:dt)
    * members  **参数解释**：主备服务器组的后端服务器。  **约束限制**：只能添加2个后端服务器，必须有一个为主，一个为备。
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  **约束限制**：仅QUIC,TCP,UDP的pool支持。  **取值范围**：false 不开启，true 开启。  **默认取值**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
            'lbAlgorithm' => 'getLbAlgorithm',
            'loadbalancerId' => 'getLoadbalancerId',
            'listenerId' => 'getListenerId',
            'name' => 'getName',
            'projectId' => 'getProjectId',
            'protocol' => 'getProtocol',
            'sessionPersistence' => 'getSessionPersistence',
            'vpcId' => 'getVpcId',
            'type' => 'getType',
            'ipVersion' => 'getIpVersion',
            'members' => 'getMembers',
            'healthmonitor' => 'getHealthmonitor',
            'anyPortEnable' => 'getAnyPortEnable',
            'connectionDrain' => 'getConnectionDrain',
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
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['loadbalancerId'] = isset($data['loadbalancerId']) ? $data['loadbalancerId'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['protocol'] = isset($data['protocol']) ? $data['protocol'] : null;
        $this->container['sessionPersistence'] = isset($data['sessionPersistence']) ? $data['sessionPersistence'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['ipVersion'] = isset($data['ipVersion']) ? $data['ipVersion'] : null;
        $this->container['members'] = isset($data['members']) ? $data['members'] : null;
        $this->container['healthmonitor'] = isset($data['healthmonitor']) ? $data['healthmonitor'] : null;
        $this->container['anyPortEnable'] = isset($data['anyPortEnable']) ? $data['anyPortEnable'] : null;
        $this->container['connectionDrain'] = isset($data['connectionDrain']) ? $data['connectionDrain'] : null;
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
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['loadbalancerId']) && (mb_strlen($this->container['loadbalancerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'loadbalancerId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['listenerId']) && (mb_strlen($this->container['listenerId']) > 36)) {
                $invalidProperties[] = "invalid value for 'listenerId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['listenerId']) && (mb_strlen($this->container['listenerId']) < 1)) {
                $invalidProperties[] = "invalid value for 'listenerId', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
            if ((mb_strlen($this->container['type']) > 36)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 36.";
            }
            if ((mb_strlen($this->container['type']) < 1)) {
                $invalidProperties[] = "invalid value for 'type', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipVersion']) && (mb_strlen($this->container['ipVersion']) > 20)) {
                $invalidProperties[] = "invalid value for 'ipVersion', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['ipVersion']) && (mb_strlen($this->container['ipVersion']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipVersion', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['members'] === null) {
            $invalidProperties[] = "'members' can't be null";
        }
        if ($this->container['healthmonitor'] === null) {
            $invalidProperties[] = "'healthmonitor' can't be null";
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
    * Gets description
    *  **参数解释**：后端服务器组的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $description **参数解释**：后端服务器组的描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：后端服务器组的负载均衡算法。  **约束限制**：不涉及  **取值范围**： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  **默认取值**：不涉及  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
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
    * @param string $lbAlgorithm **参数解释**：后端服务器组的负载均衡算法。  **约束限制**：不涉及  **取值范围**： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  **默认取值**：不涉及  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets loadbalancerId
    *  **参数解释**：后端服务器组关联的LB的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $loadbalancerId **参数解释**：后端服务器组关联的LB的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setLoadbalancerId($loadbalancerId)
    {
        $this->container['loadbalancerId'] = $loadbalancerId;
        return $this;
    }

    /**
    * Gets listenerId
    *  **参数解释**：后端服务器组关联的监听器的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $listenerId **参数解释**：后端服务器组关联的监听器的ID。  **约束限制**：listener_id，loadbalancer_id，type至少指定一个。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setListenerId($listenerId)
    {
        $this->container['listenerId'] = $listenerId;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**：后端服务器组的名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $name **参数解释**：后端服务器组的名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
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
    * @param string|null $projectId **参数解释**：项目ID。获取方式请参见[获取项目ID](elb_fl_0008.xml)。  **约束限制**：不涉及  **取值范围**：长度为32个字符，由小写字母和数字组成。  **默认取值**：不涉及  > 该字段实际无效，最终使用url中的project_id。
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
    *  **参数解释**：后端服务器组的后端协议。  **约束限制**： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时，pool的protocol必须为TCP。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 其他协议监听器不支持主备后端服务器组。  **取值范围**：TCP、UDP、QUIC、TLS。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
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
    * @param string $protocol **参数解释**：后端服务器组的后端协议。  **约束限制**： - listener的protocol为UDP时，pool的protocol必须为UDP或QUIC。 - listener的protocol为TCP时，pool的protocol必须为TCP。 - listener的protocol为TLS时，pool的protocol必须为TLS或TCP（且只能使用ip_version为v4的TCP pool）。 - 其他协议监听器不支持主备后端服务器组。  **取值范围**：TCP、UDP、QUIC、TLS。  **默认取值**：不涉及  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
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
    * Gets vpcId
    *  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $vpcId **参数解释**：后端服务器组关联的虚拟私有云的ID。  **约束限制**： - 只能挂载到该虚拟私有云下。 - 只能添加该虚拟私有云下的后端服务器或跨VPC的后端服务器。 - type必须指定为instance。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu) - 若未指定vpc_id，则后续添加后端服务器时，vpc_id由后端服务器所在的虚拟私有云确定。  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。  **默认取值**：不涉及
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
    * @param string $type **参数解释**：后端服务器组的类型。  **约束限制**：不涉及  **取值范围**： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。  **默认取值**：不涉及
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
    *  **参数解释**：后端服务器组支持的IP版本。  **约束限制**：不涉及  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  **默认取值**：不涉及  [不支持IPv6，只会返回v4。](tag:dt)
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
    * @param string|null $ipVersion **参数解释**：后端服务器组支持的IP版本。  **约束限制**：不涉及  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  **默认取值**：不涉及  [不支持IPv6，只会返回v4。](tag:dt)
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets members
    *  **参数解释**：主备服务器组的后端服务器。  **约束限制**：只能添加2个后端服务器，必须有一个为主，一个为备。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlaveMemberOption[]
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlaveMemberOption[] $members **参数解释**：主备服务器组的后端服务器。  **约束限制**：只能添加2个后端服务器，必须有一个为主，一个为备。
    *
    * @return $this
    */
    public function setMembers($members)
    {
        $this->container['members'] = $members;
        return $this;
    }

    /**
    * Gets healthmonitor
    *  healthmonitor
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlaveHealthMonitorOption
    */
    public function getHealthmonitor()
    {
        return $this->container['healthmonitor'];
    }

    /**
    * Sets healthmonitor
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateMasterSlaveHealthMonitorOption $healthmonitor healthmonitor
    *
    * @return $this
    */
    public function setHealthmonitor($healthmonitor)
    {
        $this->container['healthmonitor'] = $healthmonitor;
        return $this;
    }

    /**
    * Gets anyPortEnable
    *  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  **约束限制**：仅QUIC,TCP,UDP的pool支持。  **取值范围**：false 不开启，true 开启。  **默认取值**：不涉及
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
    * @param bool|null $anyPortEnable **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。  **约束限制**：仅QUIC,TCP,UDP的pool支持。  **取值范围**：false 不开启，true 开启。  **默认取值**：不涉及
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

