<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class MasterSlavePool implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'MasterSlavePool';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * description  **参数解释**：后端服务器组的描述信息。  **取值范围**：不涉及
    * id  **参数解释**：后端服务器组的ID。  **取值范围**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **取值范围**：不涉及 - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  **参数解释**：后端服务器组关联的监听器ID列表。
    * loadbalancers  **参数解释**：后端服务器组关联的负载均衡器ID列表。
    * members  **参数解释**：后端服务器组中的后端服务器列表。
    * name  **参数解释**：后端服务器组的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：后端服务器组所在的项目ID。  **取值范围**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。  **取值范围**：不涉及TCP、UDP、QUIC、TLS。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * createdAt  **参数解释**：创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **取值范围**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **取值范围**：不涉及 - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false 不开启，true 开启。  **取值范围**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'description' => 'string',
            'id' => 'string',
            'lbAlgorithm' => 'string',
            'listeners' => '\HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[]',
            'loadbalancers' => '\HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerRef[]',
            'members' => '\HuaweiCloud\SDK\Elb\V3\Model\MasterSlaveMember[]',
            'name' => 'string',
            'projectId' => 'string',
            'protocol' => 'string',
            'sessionPersistence' => '\HuaweiCloud\SDK\Elb\V3\Model\SessionPersistence',
            'ipVersion' => 'string',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'vpcId' => 'string',
            'type' => 'string',
            'enterpriseProjectId' => 'string',
            'healthmonitor' => '\HuaweiCloud\SDK\Elb\V3\Model\MasterSlaveHealthMonitor',
            'anyPortEnable' => 'bool',
            'connectionDrain' => '\HuaweiCloud\SDK\Elb\V3\Model\ConnectionDrain',
            'quicCidHashStrategy' => '\HuaweiCloud\SDK\Elb\V3\Model\QuicCidHashStrategy'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * description  **参数解释**：后端服务器组的描述信息。  **取值范围**：不涉及
    * id  **参数解释**：后端服务器组的ID。  **取值范围**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **取值范围**：不涉及 - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  **参数解释**：后端服务器组关联的监听器ID列表。
    * loadbalancers  **参数解释**：后端服务器组关联的负载均衡器ID列表。
    * members  **参数解释**：后端服务器组中的后端服务器列表。
    * name  **参数解释**：后端服务器组的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：后端服务器组所在的项目ID。  **取值范围**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。  **取值范围**：不涉及TCP、UDP、QUIC、TLS。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * createdAt  **参数解释**：创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **取值范围**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **取值范围**：不涉及 - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false 不开启，true 开启。  **取值范围**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'description' => null,
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
        'createdAt' => null,
        'updatedAt' => null,
        'vpcId' => null,
        'type' => null,
        'enterpriseProjectId' => null,
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
    * description  **参数解释**：后端服务器组的描述信息。  **取值范围**：不涉及
    * id  **参数解释**：后端服务器组的ID。  **取值范围**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **取值范围**：不涉及 - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  **参数解释**：后端服务器组关联的监听器ID列表。
    * loadbalancers  **参数解释**：后端服务器组关联的负载均衡器ID列表。
    * members  **参数解释**：后端服务器组中的后端服务器列表。
    * name  **参数解释**：后端服务器组的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：后端服务器组所在的项目ID。  **取值范围**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。  **取值范围**：不涉及TCP、UDP、QUIC、TLS。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * createdAt  **参数解释**：创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **取值范围**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **取值范围**：不涉及 - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false 不开启，true 开启。  **取值范围**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'description' => 'description',
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
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'vpcId' => 'vpc_id',
            'type' => 'type',
            'enterpriseProjectId' => 'enterprise_project_id',
            'healthmonitor' => 'healthmonitor',
            'anyPortEnable' => 'any_port_enable',
            'connectionDrain' => 'connection_drain',
            'quicCidHashStrategy' => 'quic_cid_hash_strategy'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * description  **参数解释**：后端服务器组的描述信息。  **取值范围**：不涉及
    * id  **参数解释**：后端服务器组的ID。  **取值范围**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **取值范围**：不涉及 - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  **参数解释**：后端服务器组关联的监听器ID列表。
    * loadbalancers  **参数解释**：后端服务器组关联的负载均衡器ID列表。
    * members  **参数解释**：后端服务器组中的后端服务器列表。
    * name  **参数解释**：后端服务器组的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：后端服务器组所在的项目ID。  **取值范围**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。  **取值范围**：不涉及TCP、UDP、QUIC、TLS。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * createdAt  **参数解释**：创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **取值范围**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **取值范围**：不涉及 - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false 不开启，true 开启。  **取值范围**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $setters = [
            'description' => 'setDescription',
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
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'vpcId' => 'setVpcId',
            'type' => 'setType',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'healthmonitor' => 'setHealthmonitor',
            'anyPortEnable' => 'setAnyPortEnable',
            'connectionDrain' => 'setConnectionDrain',
            'quicCidHashStrategy' => 'setQuicCidHashStrategy'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * description  **参数解释**：后端服务器组的描述信息。  **取值范围**：不涉及
    * id  **参数解释**：后端服务器组的ID。  **取值范围**：不涉及
    * lbAlgorithm  **参数解释**：后端服务器组的负载均衡算法。  **取值范围**：不涉及 - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * listeners  **参数解释**：后端服务器组关联的监听器ID列表。
    * loadbalancers  **参数解释**：后端服务器组关联的负载均衡器ID列表。
    * members  **参数解释**：后端服务器组中的后端服务器列表。
    * name  **参数解释**：后端服务器组的名称。  **取值范围**：不涉及
    * projectId  **参数解释**：后端服务器组所在的项目ID。  **取值范围**：不涉及
    * protocol  **参数解释**：后端服务器组的后端协议。  **取值范围**：不涉及TCP、UDP、QUIC、TLS。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
    * sessionPersistence  sessionPersistence
    * ipVersion  **参数解释**：后端服务器组支持的IP版本。  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    * createdAt  **参数解释**：创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  **参数解释**：更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * vpcId  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **取值范围**：不涉及
    * type  **参数解释**：后端服务器组的类型。  **取值范围**：不涉及 - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    * enterpriseProjectId  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * healthmonitor  healthmonitor
    * anyPortEnable  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false 不开启，true 开启。  **取值范围**：不涉及
    * connectionDrain  connectionDrain
    * quicCidHashStrategy  quicCidHashStrategy
    *
    * @var string[]
    */
    protected static $getters = [
            'description' => 'getDescription',
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
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'vpcId' => 'getVpcId',
            'type' => 'getType',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
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
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
        if ($this->container['createdAt'] === null) {
            $invalidProperties[] = "'createdAt' can't be null";
        }
        if ($this->container['updatedAt'] === null) {
            $invalidProperties[] = "'updatedAt' can't be null";
        }
        if ($this->container['vpcId'] === null) {
            $invalidProperties[] = "'vpcId' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['enterpriseProjectId'] === null) {
            $invalidProperties[] = "'enterpriseProjectId' can't be null";
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
    *  **参数解释**：后端服务器组的描述信息。  **取值范围**：不涉及
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
    * @param string $description **参数解释**：后端服务器组的描述信息。  **取值范围**：不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets id
    *  **参数解释**：后端服务器组的ID。  **取值范围**：不涉及
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
    * @param string $id **参数解释**：后端服务器组的ID。  **取值范围**：不涉及
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
    *  **参数解释**：后端服务器组的负载均衡算法。  **取值范围**：不涉及 - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
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
    * @param string $lbAlgorithm **参数解释**：后端服务器组的负载均衡算法。  **取值范围**：不涉及 - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
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
    *  **参数解释**：后端服务器组关联的监听器ID列表。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\ListenerRef[] $listeners **参数解释**：后端服务器组关联的监听器ID列表。
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
    *  **参数解释**：后端服务器组关联的负载均衡器ID列表。
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
    * @param \HuaweiCloud\SDK\Elb\V3\Model\LoadBalancerRef[] $loadbalancers **参数解释**：后端服务器组关联的负载均衡器ID列表。
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
    *  **参数解释**：后端服务器组中的后端服务器列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MasterSlaveMember[]
    */
    public function getMembers()
    {
        return $this->container['members'];
    }

    /**
    * Sets members
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MasterSlaveMember[] $members **参数解释**：后端服务器组中的后端服务器列表。
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
    *  **参数解释**：后端服务器组的名称。  **取值范围**：不涉及
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
    * @param string $name **参数解释**：后端服务器组的名称。  **取值范围**：不涉及
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
    *  **参数解释**：后端服务器组所在的项目ID。  **取值范围**：不涉及
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
    * @param string $projectId **参数解释**：后端服务器组所在的项目ID。  **取值范围**：不涉及
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
    *  **参数解释**：后端服务器组的后端协议。  **取值范围**：不涉及TCP、UDP、QUIC、TLS。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
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
    * @param string $protocol **参数解释**：后端服务器组的后端协议。  **取值范围**：不涉及TCP、UDP、QUIC、TLS。  [不支持QUIC。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC。](tag:dt)
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
    *  **参数解释**：后端服务器组支持的IP版本。  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
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
    * @param string $ipVersion **参数解释**：后端服务器组支持的IP版本。  [**取值范围**： - 共享型：固定为v4； - 独享型：取值dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)  [**取值范围**：dualstack、v4。当协议为TCP/UDP时，ip_version为dualstack，表示双栈。当协议为HTTP时，ip_version为v4。](tag:hcso_dt)  [不支持IPv6，只会返回v4。](tag:dt)
    *
    * @return $this
    */
    public function setIpVersion($ipVersion)
    {
        $this->container['ipVersion'] = $ipVersion;
        return $this;
    }

    /**
    * Gets createdAt
    *  **参数解释**：创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return string
    */
    public function getCreatedAt()
    {
        return $this->container['createdAt'];
    }

    /**
    * Sets createdAt
    *
    * @param string $createdAt **参数解释**：创建时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
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
    *  **参数解释**：更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    *
    * @return string
    */
    public function getUpdatedAt()
    {
        return $this->container['updatedAt'];
    }

    /**
    * Sets updatedAt
    *
    * @param string $updatedAt **参数解释**：更新时间。格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  **取值范围**：不涉及  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
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
    *  **参数解释**：后端服务器组关联的虚拟私有云的ID。  **取值范围**：不涉及
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
    * @param string $vpcId **参数解释**：后端服务器组关联的虚拟私有云的ID。  **取值范围**：不涉及
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
    *  **参数解释**：后端服务器组的类型。  **取值范围**：不涉及 - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
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
    * @param string $type **参数解释**：后端服务器组的类型。  **取值范围**：不涉及 - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加IP类型后端，type指定为该类型时，vpc_id不允许指定。 - 空字符串（\"\"）：允许任意类型的后端
    *
    * @return $this
    */
    public function setType($type)
    {
        $this->container['type'] = $type;
        return $this;
    }

    /**
    * Gets enterpriseProjectId
    *  **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return string
    */
    public function getEnterpriseProjectId()
    {
        return $this->container['enterpriseProjectId'];
    }

    /**
    * Sets enterpriseProjectId
    *
    * @param string $enterpriseProjectId **参数解释**：资源所属的企业项目ID。  **取值范围**： - \"0\"：表示资源属于default企业项目。 - UUID格式的字符串，表示非默认企业项目。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets healthmonitor
    *  healthmonitor
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\MasterSlaveHealthMonitor
    */
    public function getHealthmonitor()
    {
        return $this->container['healthmonitor'];
    }

    /**
    * Sets healthmonitor
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\MasterSlaveHealthMonitor $healthmonitor healthmonitor
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
    *  **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false 不开启，true 开启。  **取值范围**：不涉及
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
    * @param bool|null $anyPortEnable **参数解释**：后端是否开启全端口转发。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false 不开启，true 开启。  **取值范围**：不涉及
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

