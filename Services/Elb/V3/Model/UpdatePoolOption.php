<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class UpdatePoolOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'UpdatePoolOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * adminStateUp  后端服务器组的管理状态，只支持更新为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  后端服务器组的描述信息。
    * lbAlgorithm  后端服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  使用说明： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * name  后端服务器组的名称。
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  后端服务器组关联的虚拟私有云的ID。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu)  只有vpc_id为空时允许更新。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端  使用说明： - 只有type为空时允许更新，不允许从非空更新为空。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  使用说明： - 仅QUIC,TCP,UDP的pool支持。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * quicCidHashStrategy  quicCidHashStrategy
    * azAffinity  azAffinity
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'adminStateUp' => 'bool',
            'description' => 'string',
            'lbAlgorithm' => 'string',
            'name' => 'string',
            'sessionPersistence' => '\HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolSessionPersistenceOption',
            'slowStart' => '\HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolSlowStartOption',
            'memberDeletionProtectionEnable' => 'bool',
            'vpcId' => 'string',
            'type' => 'string',
            'protectionStatus' => 'string',
            'protectionReason' => 'string',
            'anyPortEnable' => 'bool',
            'connectionDrain' => '\HuaweiCloud\SDK\Elb\V3\Model\ConnectionDrain',
            'poolHealth' => '\HuaweiCloud\SDK\Elb\V3\Model\PoolHealth',
            'quicCidHashStrategy' => '\HuaweiCloud\SDK\Elb\V3\Model\QuicCidHashStrategy',
            'azAffinity' => '\HuaweiCloud\SDK\Elb\V3\Model\UpdateAzAffinity'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * adminStateUp  后端服务器组的管理状态，只支持更新为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  后端服务器组的描述信息。
    * lbAlgorithm  后端服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  使用说明： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * name  后端服务器组的名称。
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  后端服务器组关联的虚拟私有云的ID。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu)  只有vpc_id为空时允许更新。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端  使用说明： - 只有type为空时允许更新，不允许从非空更新为空。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  使用说明： - 仅QUIC,TCP,UDP的pool支持。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * quicCidHashStrategy  quicCidHashStrategy
    * azAffinity  azAffinity
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'adminStateUp' => null,
        'description' => null,
        'lbAlgorithm' => null,
        'name' => null,
        'sessionPersistence' => null,
        'slowStart' => null,
        'memberDeletionProtectionEnable' => null,
        'vpcId' => null,
        'type' => null,
        'protectionStatus' => null,
        'protectionReason' => null,
        'anyPortEnable' => null,
        'connectionDrain' => null,
        'poolHealth' => null,
        'quicCidHashStrategy' => null,
        'azAffinity' => null
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
    * adminStateUp  后端服务器组的管理状态，只支持更新为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  后端服务器组的描述信息。
    * lbAlgorithm  后端服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  使用说明： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * name  后端服务器组的名称。
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  后端服务器组关联的虚拟私有云的ID。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu)  只有vpc_id为空时允许更新。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端  使用说明： - 只有type为空时允许更新，不允许从非空更新为空。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  使用说明： - 仅QUIC,TCP,UDP的pool支持。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * quicCidHashStrategy  quicCidHashStrategy
    * azAffinity  azAffinity
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'adminStateUp' => 'admin_state_up',
            'description' => 'description',
            'lbAlgorithm' => 'lb_algorithm',
            'name' => 'name',
            'sessionPersistence' => 'session_persistence',
            'slowStart' => 'slow_start',
            'memberDeletionProtectionEnable' => 'member_deletion_protection_enable',
            'vpcId' => 'vpc_id',
            'type' => 'type',
            'protectionStatus' => 'protection_status',
            'protectionReason' => 'protection_reason',
            'anyPortEnable' => 'any_port_enable',
            'connectionDrain' => 'connection_drain',
            'poolHealth' => 'pool_health',
            'quicCidHashStrategy' => 'quic_cid_hash_strategy',
            'azAffinity' => 'az_affinity'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * adminStateUp  后端服务器组的管理状态，只支持更新为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  后端服务器组的描述信息。
    * lbAlgorithm  后端服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  使用说明： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * name  后端服务器组的名称。
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  后端服务器组关联的虚拟私有云的ID。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu)  只有vpc_id为空时允许更新。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端  使用说明： - 只有type为空时允许更新，不允许从非空更新为空。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  使用说明： - 仅QUIC,TCP,UDP的pool支持。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * quicCidHashStrategy  quicCidHashStrategy
    * azAffinity  azAffinity
    *
    * @var string[]
    */
    protected static $setters = [
            'adminStateUp' => 'setAdminStateUp',
            'description' => 'setDescription',
            'lbAlgorithm' => 'setLbAlgorithm',
            'name' => 'setName',
            'sessionPersistence' => 'setSessionPersistence',
            'slowStart' => 'setSlowStart',
            'memberDeletionProtectionEnable' => 'setMemberDeletionProtectionEnable',
            'vpcId' => 'setVpcId',
            'type' => 'setType',
            'protectionStatus' => 'setProtectionStatus',
            'protectionReason' => 'setProtectionReason',
            'anyPortEnable' => 'setAnyPortEnable',
            'connectionDrain' => 'setConnectionDrain',
            'poolHealth' => 'setPoolHealth',
            'quicCidHashStrategy' => 'setQuicCidHashStrategy',
            'azAffinity' => 'setAzAffinity'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * adminStateUp  后端服务器组的管理状态，只支持更新为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
    * description  后端服务器组的描述信息。
    * lbAlgorithm  后端服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  使用说明： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    * name  后端服务器组的名称。
    * sessionPersistence  sessionPersistence
    * slowStart  slowStart
    * memberDeletionProtectionEnable  参数解释：是否开启后端服务器移除保护。开关开启后，不允许从该ELB后端服务器组下移除后端服务器。  约束限制： - 开关开启后，移除member会报错拦截，涉及如下API:   + 级联删除负载均衡器（DELETE /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/force-elb）   + 级联删除负载均衡器及关联EIP（POST /v3/{project_id}/elb/loadbalancers/{loadbalancer_id}/delete-cascade）   + 级联删除监听器（DELETE /v3/{project_id}/elb/listeners/{listener_id}/force）   + 级联删除后端服务器组（DELETE /v3/{project_id}/elb/pools/{pool_id}/delete-cascade）   + 删除后端服务器（DELETE /v3/{project_id}/elb/pools/{pool_id}/members/{member_id}）   + 批量删除后端服务器（POST /v3/{project_id}/elb/pools/{pool_id}/members/batch-delete）  取值范围：false不开启，true开启。  默认取值：false  > 退场时需要先关闭所有资源的删除保护开关。  [不支持该字段，请勿使用。](tag:hws_eu,g42,hk_g42)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * vpcId  后端服务器组关联的虚拟私有云的ID。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu)  只有vpc_id为空时允许更新。
    * type  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端  使用说明： - 只有type为空时允许更新，不允许从非空更新为空。
    * protectionStatus  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
    * protectionReason  参数解释：设置保护的原因。作为protection_status的转态设置的原因。  约束限制：仅当protection_status为consoleProtection时有效。  取值范围：除'<'和'>'外通用Unicode字符集字符，最大255个字符。
    * anyPortEnable  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  使用说明： - 仅QUIC,TCP,UDP的pool支持。
    * connectionDrain  connectionDrain
    * poolHealth  poolHealth
    * quicCidHashStrategy  quicCidHashStrategy
    * azAffinity  azAffinity
    *
    * @var string[]
    */
    protected static $getters = [
            'adminStateUp' => 'getAdminStateUp',
            'description' => 'getDescription',
            'lbAlgorithm' => 'getLbAlgorithm',
            'name' => 'getName',
            'sessionPersistence' => 'getSessionPersistence',
            'slowStart' => 'getSlowStart',
            'memberDeletionProtectionEnable' => 'getMemberDeletionProtectionEnable',
            'vpcId' => 'getVpcId',
            'type' => 'getType',
            'protectionStatus' => 'getProtectionStatus',
            'protectionReason' => 'getProtectionReason',
            'anyPortEnable' => 'getAnyPortEnable',
            'connectionDrain' => 'getConnectionDrain',
            'poolHealth' => 'getPoolHealth',
            'quicCidHashStrategy' => 'getQuicCidHashStrategy',
            'azAffinity' => 'getAzAffinity'
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
        $this->container['lbAlgorithm'] = isset($data['lbAlgorithm']) ? $data['lbAlgorithm'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['sessionPersistence'] = isset($data['sessionPersistence']) ? $data['sessionPersistence'] : null;
        $this->container['slowStart'] = isset($data['slowStart']) ? $data['slowStart'] : null;
        $this->container['memberDeletionProtectionEnable'] = isset($data['memberDeletionProtectionEnable']) ? $data['memberDeletionProtectionEnable'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['protectionStatus'] = isset($data['protectionStatus']) ? $data['protectionStatus'] : null;
        $this->container['protectionReason'] = isset($data['protectionReason']) ? $data['protectionReason'] : null;
        $this->container['anyPortEnable'] = isset($data['anyPortEnable']) ? $data['anyPortEnable'] : null;
        $this->container['connectionDrain'] = isset($data['connectionDrain']) ? $data['connectionDrain'] : null;
        $this->container['poolHealth'] = isset($data['poolHealth']) ? $data['poolHealth'] : null;
        $this->container['quicCidHashStrategy'] = isset($data['quicCidHashStrategy']) ? $data['quicCidHashStrategy'] : null;
        $this->container['azAffinity'] = isset($data['azAffinity']) ? $data['azAffinity'] : null;
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
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 36)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 36.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 0)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 0.";
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
    *  后端服务器组的管理状态，只支持更新为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
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
    * @param bool|null $adminStateUp 后端服务器组的管理状态，只支持更新为true。  [不支持该字段，请勿使用。](tag:dt,hcso_dt)
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
    *  后端服务器组的描述信息。
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
    * @param string|null $description 后端服务器组的描述信息。
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
    *  后端服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  使用说明： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    *
    * @return string|null
    */
    public function getLbAlgorithm()
    {
        return $this->container['lbAlgorithm'];
    }

    /**
    * Sets lbAlgorithm
    *
    * @param string|null $lbAlgorithm 后端服务器组的负载均衡算法。  取值： - ROUND_ROBIN：加权轮询算法。 - LEAST_CONNECTIONS：加权最少连接算法。 - SOURCE_IP：源IP算法。 - QUIC_CID：连接ID算法。 [- 2_TUPLE_HASH：二元组hash算法，仅IP类型的pool支持。 - 3_TUPLE_HASH：三元组hash算法，仅IP类型的pool支持。 - 5_TUPLE_HASH：五元组hash算法，仅IP类型的pool支持。 - IP型pool不指定该字段时，默认设置为5_TUPLE_HASH。](tag:hws_eu)  使用说明： - 当该字段的取值为SOURCE_IP或QUIC_CID时，后端服务器组绑定的后端服务器的weight字段无效。 - 只有pool的protocol为QUIC时，才支持QUIC_CID算法。  [不支持QUIC_CID。](tag:tm,hws_eu,g42,hk_g42,hcso_dt)  [荷兰region不支持QUIC_CID。](tag:dt)
    *
    * @return $this
    */
    public function setLbAlgorithm($lbAlgorithm)
    {
        $this->container['lbAlgorithm'] = $lbAlgorithm;
        return $this;
    }

    /**
    * Gets name
    *  后端服务器组的名称。
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
    * @param string|null $name 后端服务器组的名称。
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets sessionPersistence
    *  sessionPersistence
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolSessionPersistenceOption|null
    */
    public function getSessionPersistence()
    {
        return $this->container['sessionPersistence'];
    }

    /**
    * Sets sessionPersistence
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolSessionPersistenceOption|null $sessionPersistence sessionPersistence
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
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolSlowStartOption|null
    */
    public function getSlowStart()
    {
        return $this->container['slowStart'];
    }

    /**
    * Sets slowStart
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpdatePoolSlowStartOption|null $slowStart slowStart
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
    *  后端服务器组关联的虚拟私有云的ID。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu)  只有vpc_id为空时允许更新。
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
    * @param string|null $vpcId 后端服务器组关联的虚拟私有云的ID。 [- pool的protocol为IP时，必须指定vpc_id，且与LB的vpc_id相同。](tag:hws_eu)  只有vpc_id为空时允许更新。
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
    *  后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端  使用说明： - 只有type为空时允许更新，不允许从非空更新为空。
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
    * @param string|null $type 后端服务器组的类型。  取值： - instance：允许任意类型的后端，type指定为该类型时，vpc_id是必选字段。 - ip：只能添加跨VPC后端，type指定为该类型时，vpc_id不允许指定。[pool的protocol为IP时，type不允许设置为ip。](tag:hws_eu)] - 空字符串（\"\"）：允许任意类型的后端  使用说明： - 只有type为空时允许更新，不允许从非空更新为空。
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
    *  修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
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
    * @param string|null $protectionStatus 修改保护状态, 取值： - nonProtection: 不保护 - consoleProtection: 控制台修改保护
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
    *  后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  使用说明： - 仅QUIC,TCP,UDP的pool支持。
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
    * @param bool|null $anyPortEnable 后端是否开启端口透传。开启后，后端服务器端口与前端监听器端口保持一致。关闭后，请求会转发给后端服务器protocol_port字段指定端口。取值：false不开启，true开启。  使用说明： - 仅QUIC,TCP,UDP的pool支持。
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
    * Gets azAffinity
    *  azAffinity
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\UpdateAzAffinity|null
    */
    public function getAzAffinity()
    {
        return $this->container['azAffinity'];
    }

    /**
    * Sets azAffinity
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\UpdateAzAffinity|null $azAffinity azAffinity
    *
    * @return $this
    */
    public function setAzAffinity($azAffinity)
    {
        $this->container['azAffinity'] = $azAffinity;
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

