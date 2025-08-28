<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class CreateL7PolicyOption implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'CreateL7PolicyOption';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  **参数解释**：转发策略的转发动作。  **约束限制**： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。 [- 不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)  **取值范围**： - REDIRECT_TO_POOL：转发到后端服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  **默认取值**：不涉及
    * adminStateUp  **参数解释**：转发策略的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：转发策略描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：转发策略对应的监听器ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP或HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：转发策略名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * position  **参数解释**：转发策略的优先级。  **约束限制**：不支持更新。  **取值范围**：不涉及  **默认取值**：不涉及  不支持该字段，请勿使用。
    * priority  **参数解释**：转发策略的优先级。数字越小表示优先级越高。  **约束限制**： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。不同域名优先级独立。相同域名下，按path的compare_type排序，精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。  [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  **取值范围**： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  **默认取值**： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  **参数解释**：转发策略所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectListenerId  **参数解释**：转发到的listener的ID，当action为REDIRECT_TO_LISTENER时必选。  **约束限制**： - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectPoolId  **参数解释**：转发到pool的ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时生效。 - 当action为REDIRECT_TO_LISTENER时，传入会报错。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectUrl  **参数解释**：转发到的url。  **约束限制**：必须满足格式: protocol://host:port/path?query。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  **参数解释**：转发到多个服务器组列表。  **约束限制**：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * fixedResponseConfig  fixedResponseConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * rules  **参数解释**：转发策略关联的转发规则对象。  **约束限制**： - rules列表中最多含有10个rule规则（若rule中包含conditions字段，一条condition算一个规则），且列表中type为HOST_NAME，PATH，METHOD，SOURCE_IP的rule不能重复，至多指定一条。 - 仅支持全量替换。 - 如果l7policy 是重定向到listener的话，不允许创建l7rule。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'adminStateUp' => 'bool',
            'description' => 'string',
            'listenerId' => 'string',
            'name' => 'string',
            'position' => 'int',
            'priority' => 'int',
            'projectId' => 'string',
            'redirectListenerId' => 'string',
            'redirectPoolId' => 'string',
            'redirectUrl' => 'string',
            'redirectUrlConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectUrlConfig',
            'redirectPoolsConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsConfig[]',
            'redirectPoolsStickySessionConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsStickySessionConfig',
            'fixedResponseConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateFixtedResponseConfig',
            'redirectPoolsExtendConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsExtendConfig',
            'rules' => '\HuaweiCloud\SDK\Elb\V3\Model\CreateL7PolicyRuleOption[]'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  **参数解释**：转发策略的转发动作。  **约束限制**： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。 [- 不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)  **取值范围**： - REDIRECT_TO_POOL：转发到后端服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  **默认取值**：不涉及
    * adminStateUp  **参数解释**：转发策略的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：转发策略描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：转发策略对应的监听器ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP或HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：转发策略名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * position  **参数解释**：转发策略的优先级。  **约束限制**：不支持更新。  **取值范围**：不涉及  **默认取值**：不涉及  不支持该字段，请勿使用。
    * priority  **参数解释**：转发策略的优先级。数字越小表示优先级越高。  **约束限制**： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。不同域名优先级独立。相同域名下，按path的compare_type排序，精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。  [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  **取值范围**： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  **默认取值**： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  **参数解释**：转发策略所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectListenerId  **参数解释**：转发到的listener的ID，当action为REDIRECT_TO_LISTENER时必选。  **约束限制**： - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectPoolId  **参数解释**：转发到pool的ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时生效。 - 当action为REDIRECT_TO_LISTENER时，传入会报错。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectUrl  **参数解释**：转发到的url。  **约束限制**：必须满足格式: protocol://host:port/path?query。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  **参数解释**：转发到多个服务器组列表。  **约束限制**：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * fixedResponseConfig  fixedResponseConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * rules  **参数解释**：转发策略关联的转发规则对象。  **约束限制**： - rules列表中最多含有10个rule规则（若rule中包含conditions字段，一条condition算一个规则），且列表中type为HOST_NAME，PATH，METHOD，SOURCE_IP的rule不能重复，至多指定一条。 - 仅支持全量替换。 - 如果l7policy 是重定向到listener的话，不允许创建l7rule。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'adminStateUp' => null,
        'description' => null,
        'listenerId' => null,
        'name' => null,
        'position' => 'int32',
        'priority' => 'int32',
        'projectId' => null,
        'redirectListenerId' => null,
        'redirectPoolId' => null,
        'redirectUrl' => null,
        'redirectUrlConfig' => null,
        'redirectPoolsConfig' => null,
        'redirectPoolsStickySessionConfig' => null,
        'fixedResponseConfig' => null,
        'redirectPoolsExtendConfig' => null,
        'rules' => null
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
    * action  **参数解释**：转发策略的转发动作。  **约束限制**： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。 [- 不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)  **取值范围**： - REDIRECT_TO_POOL：转发到后端服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  **默认取值**：不涉及
    * adminStateUp  **参数解释**：转发策略的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：转发策略描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：转发策略对应的监听器ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP或HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：转发策略名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * position  **参数解释**：转发策略的优先级。  **约束限制**：不支持更新。  **取值范围**：不涉及  **默认取值**：不涉及  不支持该字段，请勿使用。
    * priority  **参数解释**：转发策略的优先级。数字越小表示优先级越高。  **约束限制**： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。不同域名优先级独立。相同域名下，按path的compare_type排序，精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。  [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  **取值范围**： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  **默认取值**： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  **参数解释**：转发策略所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectListenerId  **参数解释**：转发到的listener的ID，当action为REDIRECT_TO_LISTENER时必选。  **约束限制**： - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectPoolId  **参数解释**：转发到pool的ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时生效。 - 当action为REDIRECT_TO_LISTENER时，传入会报错。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectUrl  **参数解释**：转发到的url。  **约束限制**：必须满足格式: protocol://host:port/path?query。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  **参数解释**：转发到多个服务器组列表。  **约束限制**：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * fixedResponseConfig  fixedResponseConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * rules  **参数解释**：转发策略关联的转发规则对象。  **约束限制**： - rules列表中最多含有10个rule规则（若rule中包含conditions字段，一条condition算一个规则），且列表中type为HOST_NAME，PATH，METHOD，SOURCE_IP的rule不能重复，至多指定一条。 - 仅支持全量替换。 - 如果l7policy 是重定向到listener的话，不允许创建l7rule。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'adminStateUp' => 'admin_state_up',
            'description' => 'description',
            'listenerId' => 'listener_id',
            'name' => 'name',
            'position' => 'position',
            'priority' => 'priority',
            'projectId' => 'project_id',
            'redirectListenerId' => 'redirect_listener_id',
            'redirectPoolId' => 'redirect_pool_id',
            'redirectUrl' => 'redirect_url',
            'redirectUrlConfig' => 'redirect_url_config',
            'redirectPoolsConfig' => 'redirect_pools_config',
            'redirectPoolsStickySessionConfig' => 'redirect_pools_sticky_session_config',
            'fixedResponseConfig' => 'fixed_response_config',
            'redirectPoolsExtendConfig' => 'redirect_pools_extend_config',
            'rules' => 'rules'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  **参数解释**：转发策略的转发动作。  **约束限制**： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。 [- 不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)  **取值范围**： - REDIRECT_TO_POOL：转发到后端服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  **默认取值**：不涉及
    * adminStateUp  **参数解释**：转发策略的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：转发策略描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：转发策略对应的监听器ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP或HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：转发策略名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * position  **参数解释**：转发策略的优先级。  **约束限制**：不支持更新。  **取值范围**：不涉及  **默认取值**：不涉及  不支持该字段，请勿使用。
    * priority  **参数解释**：转发策略的优先级。数字越小表示优先级越高。  **约束限制**： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。不同域名优先级独立。相同域名下，按path的compare_type排序，精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。  [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  **取值范围**： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  **默认取值**： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  **参数解释**：转发策略所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectListenerId  **参数解释**：转发到的listener的ID，当action为REDIRECT_TO_LISTENER时必选。  **约束限制**： - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectPoolId  **参数解释**：转发到pool的ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时生效。 - 当action为REDIRECT_TO_LISTENER时，传入会报错。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectUrl  **参数解释**：转发到的url。  **约束限制**：必须满足格式: protocol://host:port/path?query。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  **参数解释**：转发到多个服务器组列表。  **约束限制**：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * fixedResponseConfig  fixedResponseConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * rules  **参数解释**：转发策略关联的转发规则对象。  **约束限制**： - rules列表中最多含有10个rule规则（若rule中包含conditions字段，一条condition算一个规则），且列表中type为HOST_NAME，PATH，METHOD，SOURCE_IP的rule不能重复，至多指定一条。 - 仅支持全量替换。 - 如果l7policy 是重定向到listener的话，不允许创建l7rule。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'adminStateUp' => 'setAdminStateUp',
            'description' => 'setDescription',
            'listenerId' => 'setListenerId',
            'name' => 'setName',
            'position' => 'setPosition',
            'priority' => 'setPriority',
            'projectId' => 'setProjectId',
            'redirectListenerId' => 'setRedirectListenerId',
            'redirectPoolId' => 'setRedirectPoolId',
            'redirectUrl' => 'setRedirectUrl',
            'redirectUrlConfig' => 'setRedirectUrlConfig',
            'redirectPoolsConfig' => 'setRedirectPoolsConfig',
            'redirectPoolsStickySessionConfig' => 'setRedirectPoolsStickySessionConfig',
            'fixedResponseConfig' => 'setFixedResponseConfig',
            'redirectPoolsExtendConfig' => 'setRedirectPoolsExtendConfig',
            'rules' => 'setRules'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  **参数解释**：转发策略的转发动作。  **约束限制**： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。 [- 不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)  **取值范围**： - REDIRECT_TO_POOL：转发到后端服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  **默认取值**：不涉及
    * adminStateUp  **参数解释**：转发策略的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：不涉及  **默认取值**：不涉及
    * description  **参数解释**：转发策略描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * listenerId  **参数解释**：转发策略对应的监听器ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP或HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  **取值范围**：不涉及  **默认取值**：不涉及
    * name  **参数解释**：转发策略名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * position  **参数解释**：转发策略的优先级。  **约束限制**：不支持更新。  **取值范围**：不涉及  **默认取值**：不涉及  不支持该字段，请勿使用。
    * priority  **参数解释**：转发策略的优先级。数字越小表示优先级越高。  **约束限制**： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。不同域名优先级独立。相同域名下，按path的compare_type排序，精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。  [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  **取值范围**： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  **默认取值**： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  **参数解释**：转发策略所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectListenerId  **参数解释**：转发到的listener的ID，当action为REDIRECT_TO_LISTENER时必选。  **约束限制**： - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectPoolId  **参数解释**：转发到pool的ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时生效。 - 当action为REDIRECT_TO_LISTENER时，传入会报错。  **取值范围**：不涉及  **默认取值**：不涉及
    * redirectUrl  **参数解释**：转发到的url。  **约束限制**：必须满足格式: protocol://host:port/path?query。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  **参数解释**：转发到多个服务器组列表。  **约束限制**：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * fixedResponseConfig  fixedResponseConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * rules  **参数解释**：转发策略关联的转发规则对象。  **约束限制**： - rules列表中最多含有10个rule规则（若rule中包含conditions字段，一条condition算一个规则），且列表中type为HOST_NAME，PATH，METHOD，SOURCE_IP的rule不能重复，至多指定一条。 - 仅支持全量替换。 - 如果l7policy 是重定向到listener的话，不允许创建l7rule。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'adminStateUp' => 'getAdminStateUp',
            'description' => 'getDescription',
            'listenerId' => 'getListenerId',
            'name' => 'getName',
            'position' => 'getPosition',
            'priority' => 'getPriority',
            'projectId' => 'getProjectId',
            'redirectListenerId' => 'getRedirectListenerId',
            'redirectPoolId' => 'getRedirectPoolId',
            'redirectUrl' => 'getRedirectUrl',
            'redirectUrlConfig' => 'getRedirectUrlConfig',
            'redirectPoolsConfig' => 'getRedirectPoolsConfig',
            'redirectPoolsStickySessionConfig' => 'getRedirectPoolsStickySessionConfig',
            'fixedResponseConfig' => 'getFixedResponseConfig',
            'redirectPoolsExtendConfig' => 'getRedirectPoolsExtendConfig',
            'rules' => 'getRules'
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
        $this->container['action'] = isset($data['action']) ? $data['action'] : null;
        $this->container['adminStateUp'] = isset($data['adminStateUp']) ? $data['adminStateUp'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['redirectListenerId'] = isset($data['redirectListenerId']) ? $data['redirectListenerId'] : null;
        $this->container['redirectPoolId'] = isset($data['redirectPoolId']) ? $data['redirectPoolId'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['redirectUrlConfig'] = isset($data['redirectUrlConfig']) ? $data['redirectUrlConfig'] : null;
        $this->container['redirectPoolsConfig'] = isset($data['redirectPoolsConfig']) ? $data['redirectPoolsConfig'] : null;
        $this->container['redirectPoolsStickySessionConfig'] = isset($data['redirectPoolsStickySessionConfig']) ? $data['redirectPoolsStickySessionConfig'] : null;
        $this->container['fixedResponseConfig'] = isset($data['fixedResponseConfig']) ? $data['fixedResponseConfig'] : null;
        $this->container['redirectPoolsExtendConfig'] = isset($data['redirectPoolsExtendConfig']) ? $data['redirectPoolsExtendConfig'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['action'] === null) {
            $invalidProperties[] = "'action' can't be null";
        }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 255)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) < 0)) {
                $invalidProperties[] = "invalid value for 'description', the character length must be bigger than or equal to 0.";
            }
        if ($this->container['listenerId'] === null) {
            $invalidProperties[] = "'listenerId' can't be null";
        }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) < 0)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['position']) && ($this->container['position'] > 100)) {
                $invalidProperties[] = "invalid value for 'position', must be smaller than or equal to 100.";
            }
            if (!is_null($this->container['position']) && ($this->container['position'] < 1)) {
                $invalidProperties[] = "invalid value for 'position', must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] > 10000)) {
                $invalidProperties[] = "invalid value for 'priority', must be smaller than or equal to 10000.";
            }
            if (!is_null($this->container['priority']) && ($this->container['priority'] < 0)) {
                $invalidProperties[] = "invalid value for 'priority', must be bigger than or equal to 0.";
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
            if (!is_null($this->container['redirectUrl']) && (mb_strlen($this->container['redirectUrl']) > 255)) {
                $invalidProperties[] = "invalid value for 'redirectUrl', the character length must be smaller than or equal to 255.";
            }
            if (!is_null($this->container['redirectUrl']) && (mb_strlen($this->container['redirectUrl']) < 1)) {
                $invalidProperties[] = "invalid value for 'redirectUrl', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['redirectUrl']) && !preg_match("/(https?|ftp|file):\/\/[-A-Za-z0-9+&amp;@#\/%?=~_|!:,.;]+[-A-Za-z0-9+&amp;@#\/%=~_|]/", $this->container['redirectUrl'])) {
                $invalidProperties[] = "invalid value for 'redirectUrl', must be conform to the pattern /(https?|ftp|file):\/\/[-A-Za-z0-9+&amp;@#\/%?=~_|!:,.;]+[-A-Za-z0-9+&amp;@#\/%=~_|]/.";
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
    * Gets action
    *  **参数解释**：转发策略的转发动作。  **约束限制**： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。 [- 不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)  **取值范围**： - REDIRECT_TO_POOL：转发到后端服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  **默认取值**：不涉及
    *
    * @return string
    */
    public function getAction()
    {
        return $this->container['action'];
    }

    /**
    * Sets action
    *
    * @param string $action **参数解释**：转发策略的转发动作。  **约束限制**： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。 [- 不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)  **取值范围**： - REDIRECT_TO_POOL：转发到后端服务器组。 - REDIRECT_TO_LISTENER：重定向到监听器。 - REDIRECT_TO_URL：重定向到URL。 - FIXED_RESPONSE：返回固定响应体。  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setAction($action)
    {
        $this->container['action'] = $action;
        return $this;
    }

    /**
    * Gets adminStateUp
    *  **参数解释**：转发策略的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param bool|null $adminStateUp **参数解释**：转发策略的管理状态。  **约束限制**：只支持设置为true。  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：转发策略描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $description **参数解释**：转发策略描述信息。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setDescription($description)
    {
        $this->container['description'] = $description;
        return $this;
    }

    /**
    * Gets listenerId
    *  **参数解释**：转发策略对应的监听器ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP或HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string
    */
    public function getListenerId()
    {
        return $this->container['listenerId'];
    }

    /**
    * Sets listenerId
    *
    * @param string $listenerId **参数解释**：转发策略对应的监听器ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时，只支持创建在PROTOCOL为HTTP或HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  **取值范围**：不涉及  **默认取值**：不涉及
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
    *  **参数解释**：转发策略名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $name **参数解释**：转发策略名称。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets position
    *  **参数解释**：转发策略的优先级。  **约束限制**：不支持更新。  **取值范围**：不涉及  **默认取值**：不涉及  不支持该字段，请勿使用。
    *
    * @return int|null
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param int|null $position **参数解释**：转发策略的优先级。  **约束限制**：不支持更新。  **取值范围**：不涉及  **默认取值**：不涉及  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setPosition($position)
    {
        $this->container['position'] = $position;
        return $this;
    }

    /**
    * Gets priority
    *  **参数解释**：转发策略的优先级。数字越小表示优先级越高。  **约束限制**： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。不同域名优先级独立。相同域名下，按path的compare_type排序，精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。  [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  **取值范围**： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  **默认取值**： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return int|null
    */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
    * Sets priority
    *
    * @param int|null $priority **参数解释**：转发策略的优先级。数字越小表示优先级越高。  **约束限制**： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。不同域名优先级独立。相同域名下，按path的compare_type排序，精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。  [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  **取值范围**： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  **默认取值**： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    *
    * @return $this
    */
    public function setPriority($priority)
    {
        $this->container['priority'] = $priority;
        return $this;
    }

    /**
    * Gets projectId
    *  **参数解释**：转发策略所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
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
    * @param string|null $projectId **参数解释**：转发策略所在的项目ID。  **约束限制**：不涉及  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets redirectListenerId
    *  **参数解释**：转发到的listener的ID，当action为REDIRECT_TO_LISTENER时必选。  **约束限制**： - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getRedirectListenerId()
    {
        return $this->container['redirectListenerId'];
    }

    /**
    * Sets redirectListenerId
    *
    * @param string|null $redirectListenerId **参数解释**：转发到的listener的ID，当action为REDIRECT_TO_LISTENER时必选。  **约束限制**： - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setRedirectListenerId($redirectListenerId)
    {
        $this->container['redirectListenerId'] = $redirectListenerId;
        return $this;
    }

    /**
    * Gets redirectPoolId
    *  **参数解释**：转发到pool的ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时生效。 - 当action为REDIRECT_TO_LISTENER时，传入会报错。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return string|null
    */
    public function getRedirectPoolId()
    {
        return $this->container['redirectPoolId'];
    }

    /**
    * Sets redirectPoolId
    *
    * @param string|null $redirectPoolId **参数解释**：转发到pool的ID。  **约束限制**： - 当action为REDIRECT_TO_POOL时生效。 - 当action为REDIRECT_TO_LISTENER时，传入会报错。  **取值范围**：不涉及  **默认取值**：不涉及
    *
    * @return $this
    */
    public function setRedirectPoolId($redirectPoolId)
    {
        $this->container['redirectPoolId'] = $redirectPoolId;
        return $this;
    }

    /**
    * Gets redirectUrl
    *  **参数解释**：转发到的url。  **约束限制**：必须满足格式: protocol://host:port/path?query。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return string|null
    */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
    * Sets redirectUrl
    *
    * @param string|null $redirectUrl **参数解释**：转发到的url。  **约束限制**：必须满足格式: protocol://host:port/path?query。  **取值范围**：不涉及  **默认取值**：不涉及  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;
        return $this;
    }

    /**
    * Gets redirectUrlConfig
    *  redirectUrlConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectUrlConfig|null
    */
    public function getRedirectUrlConfig()
    {
        return $this->container['redirectUrlConfig'];
    }

    /**
    * Sets redirectUrlConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectUrlConfig|null $redirectUrlConfig redirectUrlConfig
    *
    * @return $this
    */
    public function setRedirectUrlConfig($redirectUrlConfig)
    {
        $this->container['redirectUrlConfig'] = $redirectUrlConfig;
        return $this;
    }

    /**
    * Gets redirectPoolsConfig
    *  **参数解释**：转发到多个服务器组列表。  **约束限制**：一个policy最多配置5个pool。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsConfig[]|null
    */
    public function getRedirectPoolsConfig()
    {
        return $this->container['redirectPoolsConfig'];
    }

    /**
    * Sets redirectPoolsConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsConfig[]|null $redirectPoolsConfig **参数解释**：转发到多个服务器组列表。  **约束限制**：一个policy最多配置5个pool。
    *
    * @return $this
    */
    public function setRedirectPoolsConfig($redirectPoolsConfig)
    {
        $this->container['redirectPoolsConfig'] = $redirectPoolsConfig;
        return $this;
    }

    /**
    * Gets redirectPoolsStickySessionConfig
    *  redirectPoolsStickySessionConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsStickySessionConfig|null
    */
    public function getRedirectPoolsStickySessionConfig()
    {
        return $this->container['redirectPoolsStickySessionConfig'];
    }

    /**
    * Sets redirectPoolsStickySessionConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsStickySessionConfig|null $redirectPoolsStickySessionConfig redirectPoolsStickySessionConfig
    *
    * @return $this
    */
    public function setRedirectPoolsStickySessionConfig($redirectPoolsStickySessionConfig)
    {
        $this->container['redirectPoolsStickySessionConfig'] = $redirectPoolsStickySessionConfig;
        return $this;
    }

    /**
    * Gets fixedResponseConfig
    *  fixedResponseConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateFixtedResponseConfig|null
    */
    public function getFixedResponseConfig()
    {
        return $this->container['fixedResponseConfig'];
    }

    /**
    * Sets fixedResponseConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateFixtedResponseConfig|null $fixedResponseConfig fixedResponseConfig
    *
    * @return $this
    */
    public function setFixedResponseConfig($fixedResponseConfig)
    {
        $this->container['fixedResponseConfig'] = $fixedResponseConfig;
        return $this;
    }

    /**
    * Gets redirectPoolsExtendConfig
    *  redirectPoolsExtendConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsExtendConfig|null
    */
    public function getRedirectPoolsExtendConfig()
    {
        return $this->container['redirectPoolsExtendConfig'];
    }

    /**
    * Sets redirectPoolsExtendConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateRedirectPoolsExtendConfig|null $redirectPoolsExtendConfig redirectPoolsExtendConfig
    *
    * @return $this
    */
    public function setRedirectPoolsExtendConfig($redirectPoolsExtendConfig)
    {
        $this->container['redirectPoolsExtendConfig'] = $redirectPoolsExtendConfig;
        return $this;
    }

    /**
    * Gets rules
    *  **参数解释**：转发策略关联的转发规则对象。  **约束限制**： - rules列表中最多含有10个rule规则（若rule中包含conditions字段，一条condition算一个规则），且列表中type为HOST_NAME，PATH，METHOD，SOURCE_IP的rule不能重复，至多指定一条。 - 仅支持全量替换。 - 如果l7policy 是重定向到listener的话，不允许创建l7rule。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\CreateL7PolicyRuleOption[]|null
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\CreateL7PolicyRuleOption[]|null $rules **参数解释**：转发策略关联的转发规则对象。  **约束限制**： - rules列表中最多含有10个rule规则（若rule中包含conditions字段，一条condition算一个规则），且列表中type为HOST_NAME，PATH，METHOD，SOURCE_IP的rule不能重复，至多指定一条。 - 仅支持全量替换。 - 如果l7policy 是重定向到listener的话，不允许创建l7rule。
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
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

