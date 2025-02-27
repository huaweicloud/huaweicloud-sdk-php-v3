<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class L7Policy implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'L7Policy';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * action  参数解释：转发策略的转发动作。  约束限制： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时， 只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  取值范围： - REDIRECT_TO_POOL：转发到后端服务器组； - REDIRECT_TO_LISTENER：重定向到监听器； - REDIRECT_TO_URL：重定向到URL； - FIXED_RESPONSE：返回固定响应体。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * adminStateUp  参数解释：转发策略的管理状态。  约束限制：只支持设置为true。
    * description  参数解释：转发策略描述信息。
    * id  参数解释：转发策略ID。
    * listenerId  参数解释：转发策略所属的监听器ID。
    * name  参数解释：转发策略名称
    * position  参数解释：转发策略的优先级，不支持更新。  不支持该字段，请勿使用。
    * priority  参数解释：转发策略的优先级。数字越小表示优先级越高。  约束限制： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。 不同域名优先级独立。相同域名下，按path的compare_type排序， 精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。 若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。 [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  默认取值： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  参数解释：转发策略所在的项目ID。
    * provisioningStatus  参数解释：转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 [- ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)
    * redirectPoolId  参数解释：转发到pool的ID。  约束限制：当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  参数解释：转发到的listener的ID。  约束限制： - 当action为REDIRECT_TO_LISTENER时必选。 - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。
    * redirectUrl  参数解释：转发到的url。  取值范围：必须满足格式: protocol://host:port/path?query。  不支持该字段，请勿使用。
    * rules  参数解释：转发策略关联的转发规则列表。
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  参数解释：转发到多个主机组列表。  约束限制：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * fixedResponseConfig  fixedResponseConfig
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * enterpriseProjectId  参数解释：企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'action' => 'string',
            'adminStateUp' => 'bool',
            'description' => 'string',
            'id' => 'string',
            'listenerId' => 'string',
            'name' => 'string',
            'position' => 'int',
            'priority' => 'int',
            'projectId' => 'string',
            'provisioningStatus' => 'string',
            'redirectPoolId' => 'string',
            'redirectListenerId' => 'string',
            'redirectUrl' => 'string',
            'rules' => '\HuaweiCloud\SDK\Elb\V3\Model\RuleRef[]',
            'redirectUrlConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\RedirectUrlConfig',
            'redirectPoolsConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsConfig[]',
            'redirectPoolsStickySessionConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsStickySessionConfig',
            'redirectPoolsExtendConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsExtendConfig',
            'fixedResponseConfig' => '\HuaweiCloud\SDK\Elb\V3\Model\FixtedResponseConfig',
            'createdAt' => 'string',
            'updatedAt' => 'string',
            'enterpriseProjectId' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * action  参数解释：转发策略的转发动作。  约束限制： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时， 只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  取值范围： - REDIRECT_TO_POOL：转发到后端服务器组； - REDIRECT_TO_LISTENER：重定向到监听器； - REDIRECT_TO_URL：重定向到URL； - FIXED_RESPONSE：返回固定响应体。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * adminStateUp  参数解释：转发策略的管理状态。  约束限制：只支持设置为true。
    * description  参数解释：转发策略描述信息。
    * id  参数解释：转发策略ID。
    * listenerId  参数解释：转发策略所属的监听器ID。
    * name  参数解释：转发策略名称
    * position  参数解释：转发策略的优先级，不支持更新。  不支持该字段，请勿使用。
    * priority  参数解释：转发策略的优先级。数字越小表示优先级越高。  约束限制： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。 不同域名优先级独立。相同域名下，按path的compare_type排序， 精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。 若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。 [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  默认取值： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  参数解释：转发策略所在的项目ID。
    * provisioningStatus  参数解释：转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 [- ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)
    * redirectPoolId  参数解释：转发到pool的ID。  约束限制：当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  参数解释：转发到的listener的ID。  约束限制： - 当action为REDIRECT_TO_LISTENER时必选。 - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。
    * redirectUrl  参数解释：转发到的url。  取值范围：必须满足格式: protocol://host:port/path?query。  不支持该字段，请勿使用。
    * rules  参数解释：转发策略关联的转发规则列表。
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  参数解释：转发到多个主机组列表。  约束限制：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * fixedResponseConfig  fixedResponseConfig
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * enterpriseProjectId  参数解释：企业项目ID。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'action' => null,
        'adminStateUp' => null,
        'description' => null,
        'id' => null,
        'listenerId' => null,
        'name' => null,
        'position' => 'int32',
        'priority' => 'int32',
        'projectId' => null,
        'provisioningStatus' => null,
        'redirectPoolId' => null,
        'redirectListenerId' => null,
        'redirectUrl' => null,
        'rules' => null,
        'redirectUrlConfig' => null,
        'redirectPoolsConfig' => null,
        'redirectPoolsStickySessionConfig' => null,
        'redirectPoolsExtendConfig' => null,
        'fixedResponseConfig' => null,
        'createdAt' => null,
        'updatedAt' => null,
        'enterpriseProjectId' => null
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
    * action  参数解释：转发策略的转发动作。  约束限制： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时， 只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  取值范围： - REDIRECT_TO_POOL：转发到后端服务器组； - REDIRECT_TO_LISTENER：重定向到监听器； - REDIRECT_TO_URL：重定向到URL； - FIXED_RESPONSE：返回固定响应体。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * adminStateUp  参数解释：转发策略的管理状态。  约束限制：只支持设置为true。
    * description  参数解释：转发策略描述信息。
    * id  参数解释：转发策略ID。
    * listenerId  参数解释：转发策略所属的监听器ID。
    * name  参数解释：转发策略名称
    * position  参数解释：转发策略的优先级，不支持更新。  不支持该字段，请勿使用。
    * priority  参数解释：转发策略的优先级。数字越小表示优先级越高。  约束限制： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。 不同域名优先级独立。相同域名下，按path的compare_type排序， 精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。 若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。 [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  默认取值： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  参数解释：转发策略所在的项目ID。
    * provisioningStatus  参数解释：转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 [- ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)
    * redirectPoolId  参数解释：转发到pool的ID。  约束限制：当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  参数解释：转发到的listener的ID。  约束限制： - 当action为REDIRECT_TO_LISTENER时必选。 - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。
    * redirectUrl  参数解释：转发到的url。  取值范围：必须满足格式: protocol://host:port/path?query。  不支持该字段，请勿使用。
    * rules  参数解释：转发策略关联的转发规则列表。
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  参数解释：转发到多个主机组列表。  约束限制：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * fixedResponseConfig  fixedResponseConfig
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * enterpriseProjectId  参数解释：企业项目ID。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'action' => 'action',
            'adminStateUp' => 'admin_state_up',
            'description' => 'description',
            'id' => 'id',
            'listenerId' => 'listener_id',
            'name' => 'name',
            'position' => 'position',
            'priority' => 'priority',
            'projectId' => 'project_id',
            'provisioningStatus' => 'provisioning_status',
            'redirectPoolId' => 'redirect_pool_id',
            'redirectListenerId' => 'redirect_listener_id',
            'redirectUrl' => 'redirect_url',
            'rules' => 'rules',
            'redirectUrlConfig' => 'redirect_url_config',
            'redirectPoolsConfig' => 'redirect_pools_config',
            'redirectPoolsStickySessionConfig' => 'redirect_pools_sticky_session_config',
            'redirectPoolsExtendConfig' => 'redirect_pools_extend_config',
            'fixedResponseConfig' => 'fixed_response_config',
            'createdAt' => 'created_at',
            'updatedAt' => 'updated_at',
            'enterpriseProjectId' => 'enterprise_project_id'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * action  参数解释：转发策略的转发动作。  约束限制： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时， 只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  取值范围： - REDIRECT_TO_POOL：转发到后端服务器组； - REDIRECT_TO_LISTENER：重定向到监听器； - REDIRECT_TO_URL：重定向到URL； - FIXED_RESPONSE：返回固定响应体。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * adminStateUp  参数解释：转发策略的管理状态。  约束限制：只支持设置为true。
    * description  参数解释：转发策略描述信息。
    * id  参数解释：转发策略ID。
    * listenerId  参数解释：转发策略所属的监听器ID。
    * name  参数解释：转发策略名称
    * position  参数解释：转发策略的优先级，不支持更新。  不支持该字段，请勿使用。
    * priority  参数解释：转发策略的优先级。数字越小表示优先级越高。  约束限制： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。 不同域名优先级独立。相同域名下，按path的compare_type排序， 精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。 若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。 [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  默认取值： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  参数解释：转发策略所在的项目ID。
    * provisioningStatus  参数解释：转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 [- ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)
    * redirectPoolId  参数解释：转发到pool的ID。  约束限制：当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  参数解释：转发到的listener的ID。  约束限制： - 当action为REDIRECT_TO_LISTENER时必选。 - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。
    * redirectUrl  参数解释：转发到的url。  取值范围：必须满足格式: protocol://host:port/path?query。  不支持该字段，请勿使用。
    * rules  参数解释：转发策略关联的转发规则列表。
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  参数解释：转发到多个主机组列表。  约束限制：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * fixedResponseConfig  fixedResponseConfig
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * enterpriseProjectId  参数解释：企业项目ID。
    *
    * @var string[]
    */
    protected static $setters = [
            'action' => 'setAction',
            'adminStateUp' => 'setAdminStateUp',
            'description' => 'setDescription',
            'id' => 'setId',
            'listenerId' => 'setListenerId',
            'name' => 'setName',
            'position' => 'setPosition',
            'priority' => 'setPriority',
            'projectId' => 'setProjectId',
            'provisioningStatus' => 'setProvisioningStatus',
            'redirectPoolId' => 'setRedirectPoolId',
            'redirectListenerId' => 'setRedirectListenerId',
            'redirectUrl' => 'setRedirectUrl',
            'rules' => 'setRules',
            'redirectUrlConfig' => 'setRedirectUrlConfig',
            'redirectPoolsConfig' => 'setRedirectPoolsConfig',
            'redirectPoolsStickySessionConfig' => 'setRedirectPoolsStickySessionConfig',
            'redirectPoolsExtendConfig' => 'setRedirectPoolsExtendConfig',
            'fixedResponseConfig' => 'setFixedResponseConfig',
            'createdAt' => 'setCreatedAt',
            'updatedAt' => 'setUpdatedAt',
            'enterpriseProjectId' => 'setEnterpriseProjectId'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * action  参数解释：转发策略的转发动作。  约束限制： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时， 只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  取值范围： - REDIRECT_TO_POOL：转发到后端服务器组； - REDIRECT_TO_LISTENER：重定向到监听器； - REDIRECT_TO_URL：重定向到URL； - FIXED_RESPONSE：返回固定响应体。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
    * adminStateUp  参数解释：转发策略的管理状态。  约束限制：只支持设置为true。
    * description  参数解释：转发策略描述信息。
    * id  参数解释：转发策略ID。
    * listenerId  参数解释：转发策略所属的监听器ID。
    * name  参数解释：转发策略名称
    * position  参数解释：转发策略的优先级，不支持更新。  不支持该字段，请勿使用。
    * priority  参数解释：转发策略的优先级。数字越小表示优先级越高。  约束限制： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。 不同域名优先级独立。相同域名下，按path的compare_type排序， 精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。 若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。 [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  默认取值： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
    * projectId  参数解释：转发策略所在的项目ID。
    * provisioningStatus  参数解释：转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 [- ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)
    * redirectPoolId  参数解释：转发到pool的ID。  约束限制：当action为REDIRECT_TO_POOL时生效。
    * redirectListenerId  参数解释：转发到的listener的ID。  约束限制： - 当action为REDIRECT_TO_LISTENER时必选。 - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。
    * redirectUrl  参数解释：转发到的url。  取值范围：必须满足格式: protocol://host:port/path?query。  不支持该字段，请勿使用。
    * rules  参数解释：转发策略关联的转发规则列表。
    * redirectUrlConfig  redirectUrlConfig
    * redirectPoolsConfig  参数解释：转发到多个主机组列表。  约束限制：一个policy最多配置5个pool。
    * redirectPoolsStickySessionConfig  redirectPoolsStickySessionConfig
    * redirectPoolsExtendConfig  redirectPoolsExtendConfig
    * fixedResponseConfig  fixedResponseConfig
    * createdAt  参数解释：创建时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * updatedAt  参数解释：更新时间。  取值范围：格式：yyyy-MM-dd'T'HH:mm:ss'Z'，UTC时区。  [注意：独享型实例的历史数据以及共享型实例下的资源，不返回该字段。 ](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)
    * enterpriseProjectId  参数解释：企业项目ID。
    *
    * @var string[]
    */
    protected static $getters = [
            'action' => 'getAction',
            'adminStateUp' => 'getAdminStateUp',
            'description' => 'getDescription',
            'id' => 'getId',
            'listenerId' => 'getListenerId',
            'name' => 'getName',
            'position' => 'getPosition',
            'priority' => 'getPriority',
            'projectId' => 'getProjectId',
            'provisioningStatus' => 'getProvisioningStatus',
            'redirectPoolId' => 'getRedirectPoolId',
            'redirectListenerId' => 'getRedirectListenerId',
            'redirectUrl' => 'getRedirectUrl',
            'rules' => 'getRules',
            'redirectUrlConfig' => 'getRedirectUrlConfig',
            'redirectPoolsConfig' => 'getRedirectPoolsConfig',
            'redirectPoolsStickySessionConfig' => 'getRedirectPoolsStickySessionConfig',
            'redirectPoolsExtendConfig' => 'getRedirectPoolsExtendConfig',
            'fixedResponseConfig' => 'getFixedResponseConfig',
            'createdAt' => 'getCreatedAt',
            'updatedAt' => 'getUpdatedAt',
            'enterpriseProjectId' => 'getEnterpriseProjectId'
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['listenerId'] = isset($data['listenerId']) ? $data['listenerId'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['position'] = isset($data['position']) ? $data['position'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : null;
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['provisioningStatus'] = isset($data['provisioningStatus']) ? $data['provisioningStatus'] : null;
        $this->container['redirectPoolId'] = isset($data['redirectPoolId']) ? $data['redirectPoolId'] : null;
        $this->container['redirectListenerId'] = isset($data['redirectListenerId']) ? $data['redirectListenerId'] : null;
        $this->container['redirectUrl'] = isset($data['redirectUrl']) ? $data['redirectUrl'] : null;
        $this->container['rules'] = isset($data['rules']) ? $data['rules'] : null;
        $this->container['redirectUrlConfig'] = isset($data['redirectUrlConfig']) ? $data['redirectUrlConfig'] : null;
        $this->container['redirectPoolsConfig'] = isset($data['redirectPoolsConfig']) ? $data['redirectPoolsConfig'] : null;
        $this->container['redirectPoolsStickySessionConfig'] = isset($data['redirectPoolsStickySessionConfig']) ? $data['redirectPoolsStickySessionConfig'] : null;
        $this->container['redirectPoolsExtendConfig'] = isset($data['redirectPoolsExtendConfig']) ? $data['redirectPoolsExtendConfig'] : null;
        $this->container['fixedResponseConfig'] = isset($data['fixedResponseConfig']) ? $data['fixedResponseConfig'] : null;
        $this->container['createdAt'] = isset($data['createdAt']) ? $data['createdAt'] : null;
        $this->container['updatedAt'] = isset($data['updatedAt']) ? $data['updatedAt'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
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
        if ($this->container['adminStateUp'] === null) {
            $invalidProperties[] = "'adminStateUp' can't be null";
        }
        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['listenerId'] === null) {
            $invalidProperties[] = "'listenerId' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 255)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 255.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
        if ($this->container['position'] === null) {
            $invalidProperties[] = "'position' can't be null";
        }
            if (($this->container['position'] > 100)) {
                $invalidProperties[] = "invalid value for 'position', must be smaller than or equal to 100.";
            }
            if (($this->container['position'] < 1)) {
                $invalidProperties[] = "invalid value for 'position', must be bigger than or equal to 1.";
            }
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['provisioningStatus'] === null) {
            $invalidProperties[] = "'provisioningStatus' can't be null";
        }
        if ($this->container['redirectPoolId'] === null) {
            $invalidProperties[] = "'redirectPoolId' can't be null";
        }
        if ($this->container['redirectListenerId'] === null) {
            $invalidProperties[] = "'redirectListenerId' can't be null";
        }
        if ($this->container['redirectUrl'] === null) {
            $invalidProperties[] = "'redirectUrl' can't be null";
        }
            if (!preg_match("/(https?|ftp|file):\/\/[-A-Za-z0-9+&amp;@#\/%?=~_|!:,.;]+[-A-Za-z0-9+&amp;@#\/%=~_|]/", $this->container['redirectUrl'])) {
                $invalidProperties[] = "invalid value for 'redirectUrl', must be conform to the pattern /(https?|ftp|file):\/\/[-A-Za-z0-9+&amp;@#\/%?=~_|!:,.;]+[-A-Za-z0-9+&amp;@#\/%=~_|]/.";
            }
        if ($this->container['rules'] === null) {
            $invalidProperties[] = "'rules' can't be null";
        }
        if ($this->container['redirectUrlConfig'] === null) {
            $invalidProperties[] = "'redirectUrlConfig' can't be null";
        }
        if ($this->container['fixedResponseConfig'] === null) {
            $invalidProperties[] = "'fixedResponseConfig' can't be null";
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
    *  参数解释：转发策略的转发动作。  约束限制： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时， 只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  取值范围： - REDIRECT_TO_POOL：转发到后端服务器组； - REDIRECT_TO_LISTENER：重定向到监听器； - REDIRECT_TO_URL：重定向到URL； - FIXED_RESPONSE：返回固定响应体。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
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
    * @param string $action 参数解释：转发策略的转发动作。  约束限制： - REDIRECT_TO_LISTENER的优先级最高，配置了以后，该监听器下的其他policy会失效。 - 当action为REDIRECT_TO_POOL时， 只支持创建在PROTOCOL为HTTP、HTTPS、TERMINATED_HTTPS的listener上。 - 当action为REDIRECT_TO_LISTENER时，只支持创建在PROTOCOL为HTTP的listener上。  取值范围： - REDIRECT_TO_POOL：转发到后端服务器组； - REDIRECT_TO_LISTENER：重定向到监听器； - REDIRECT_TO_URL：重定向到URL； - FIXED_RESPONSE：返回固定响应体。  [不支持REDIRECT_TO_URL和FIXED_RESPONSE](tag:hcso_dt)
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
    *  参数解释：转发策略的管理状态。  约束限制：只支持设置为true。
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
    * @param bool $adminStateUp 参数解释：转发策略的管理状态。  约束限制：只支持设置为true。
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
    *  参数解释：转发策略描述信息。
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
    * @param string $description 参数解释：转发策略描述信息。
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
    *  参数解释：转发策略ID。
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
    * @param string $id 参数解释：转发策略ID。
    *
    * @return $this
    */
    public function setId($id)
    {
        $this->container['id'] = $id;
        return $this;
    }

    /**
    * Gets listenerId
    *  参数解释：转发策略所属的监听器ID。
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
    * @param string $listenerId 参数解释：转发策略所属的监听器ID。
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
    *  参数解释：转发策略名称
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
    * @param string $name 参数解释：转发策略名称
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
    *  参数解释：转发策略的优先级，不支持更新。  不支持该字段，请勿使用。
    *
    * @return int
    */
    public function getPosition()
    {
        return $this->container['position'];
    }

    /**
    * Sets position
    *
    * @param int $position 参数解释：转发策略的优先级，不支持更新。  不支持该字段，请勿使用。
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
    *  参数解释：转发策略的优先级。数字越小表示优先级越高。  约束限制： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。 不同域名优先级独立。相同域名下，按path的compare_type排序， 精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。 若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。 [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  默认取值： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    * @param int|null $priority 参数解释：转发策略的优先级。数字越小表示优先级越高。  约束限制： - 同一个监听器下不同转发策略之间不允许重复的优先级数值。  - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）开启后才会生效，未开启传入该字段会报错。 - 当关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，按原有policy的排序逻辑，自动排序。 不同域名优先级独立。相同域名下，按path的compare_type排序， 精确>前缀>正则，匹配类型相同时，path的长度越长优先级越高。 若policy下只有域名rule，没有路径rule，默认path为前缀匹配/。 [- 共享型负载均衡器下的转发策略不支持该字段。](tag:hws,hws_hk,ocb,ctc,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs,dt,hk_tm)  取值范围： - 当action为REDIRECT_TO_LISTENER时，支持指定为0-10000。 - 其它action取值，支持指定为1-10000。  默认取值： - 若关联的监听器的高级转发策略功能（enhance_l7policy_enable）未开启，且不传入该字段，则新创建的转发策略的优先级的值为1。 - 当action为REDIRECT_TO_LISTENER时，则新创建的转发策略的优先级的值为0。 - 其它action取值，新创建的转发策略的优先级的值为同一监听器下已有转发策略的优先级的最大值+1。   + 若监听器下没有转发策略，则新建的转发策略的优先级为1。   + 若当前已有转发策略的优先级的最大值是10000，则新创建的转发策略会因超出取值范围10000而失败。此时可通过传入指定priority，或调整原有policy的优先级来避免错误。  [不支持该字段，请勿使用。](tag:hcso_dt)  [荷兰region不支持该字段，请勿使用。](tag:dt)
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
    *  参数解释：转发策略所在的项目ID。
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
    * @param string $projectId 参数解释：转发策略所在的项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets provisioningStatus
    *  参数解释：转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 [- ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)
    *
    * @return string
    */
    public function getProvisioningStatus()
    {
        return $this->container['provisioningStatus'];
    }

    /**
    * Sets provisioningStatus
    *
    * @param string $provisioningStatus 参数解释：转发策略的配置状态。  取值范围： - ACTIVE: 默认值，表示正常。 [- ERROR: 表示当前策略与同一监听器下的其他策略存在相同的规则配置。 ](tag:hws,hws_hk,ocb,ctc,hcs,g42,tm,cmcc,hk_g42,hws_ocb,hk_vdf,srg,fcs)
    *
    * @return $this
    */
    public function setProvisioningStatus($provisioningStatus)
    {
        $this->container['provisioningStatus'] = $provisioningStatus;
        return $this;
    }

    /**
    * Gets redirectPoolId
    *  参数解释：转发到pool的ID。  约束限制：当action为REDIRECT_TO_POOL时生效。
    *
    * @return string
    */
    public function getRedirectPoolId()
    {
        return $this->container['redirectPoolId'];
    }

    /**
    * Sets redirectPoolId
    *
    * @param string $redirectPoolId 参数解释：转发到pool的ID。  约束限制：当action为REDIRECT_TO_POOL时生效。
    *
    * @return $this
    */
    public function setRedirectPoolId($redirectPoolId)
    {
        $this->container['redirectPoolId'] = $redirectPoolId;
        return $this;
    }

    /**
    * Gets redirectListenerId
    *  参数解释：转发到的listener的ID。  约束限制： - 当action为REDIRECT_TO_LISTENER时必选。 - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。
    *
    * @return string
    */
    public function getRedirectListenerId()
    {
        return $this->container['redirectListenerId'];
    }

    /**
    * Sets redirectListenerId
    *
    * @param string $redirectListenerId 参数解释：转发到的listener的ID。  约束限制： - 当action为REDIRECT_TO_LISTENER时必选。 - 只支持protocol为HTTPS/TERMINATED_HTTPS的listener。 - 不能指定为其他loadbalancer下的listener。 - 当action为REDIRECT_TO_POOL时，创建或更新时不能传入该参数。
    *
    * @return $this
    */
    public function setRedirectListenerId($redirectListenerId)
    {
        $this->container['redirectListenerId'] = $redirectListenerId;
        return $this;
    }

    /**
    * Gets redirectUrl
    *  参数解释：转发到的url。  取值范围：必须满足格式: protocol://host:port/path?query。  不支持该字段，请勿使用。
    *
    * @return string
    */
    public function getRedirectUrl()
    {
        return $this->container['redirectUrl'];
    }

    /**
    * Sets redirectUrl
    *
    * @param string $redirectUrl 参数解释：转发到的url。  取值范围：必须满足格式: protocol://host:port/path?query。  不支持该字段，请勿使用。
    *
    * @return $this
    */
    public function setRedirectUrl($redirectUrl)
    {
        $this->container['redirectUrl'] = $redirectUrl;
        return $this;
    }

    /**
    * Gets rules
    *  参数解释：转发策略关联的转发规则列表。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\RuleRef[]
    */
    public function getRules()
    {
        return $this->container['rules'];
    }

    /**
    * Sets rules
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\RuleRef[] $rules 参数解释：转发策略关联的转发规则列表。
    *
    * @return $this
    */
    public function setRules($rules)
    {
        $this->container['rules'] = $rules;
        return $this;
    }

    /**
    * Gets redirectUrlConfig
    *  redirectUrlConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\RedirectUrlConfig
    */
    public function getRedirectUrlConfig()
    {
        return $this->container['redirectUrlConfig'];
    }

    /**
    * Sets redirectUrlConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\RedirectUrlConfig $redirectUrlConfig redirectUrlConfig
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
    *  参数解释：转发到多个主机组列表。  约束限制：一个policy最多配置5个pool。
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsConfig[]|null
    */
    public function getRedirectPoolsConfig()
    {
        return $this->container['redirectPoolsConfig'];
    }

    /**
    * Sets redirectPoolsConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsConfig[]|null $redirectPoolsConfig 参数解释：转发到多个主机组列表。  约束限制：一个policy最多配置5个pool。
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
    * @return \HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsStickySessionConfig|null
    */
    public function getRedirectPoolsStickySessionConfig()
    {
        return $this->container['redirectPoolsStickySessionConfig'];
    }

    /**
    * Sets redirectPoolsStickySessionConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsStickySessionConfig|null $redirectPoolsStickySessionConfig redirectPoolsStickySessionConfig
    *
    * @return $this
    */
    public function setRedirectPoolsStickySessionConfig($redirectPoolsStickySessionConfig)
    {
        $this->container['redirectPoolsStickySessionConfig'] = $redirectPoolsStickySessionConfig;
        return $this;
    }

    /**
    * Gets redirectPoolsExtendConfig
    *  redirectPoolsExtendConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsExtendConfig|null
    */
    public function getRedirectPoolsExtendConfig()
    {
        return $this->container['redirectPoolsExtendConfig'];
    }

    /**
    * Sets redirectPoolsExtendConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\RedirectPoolsExtendConfig|null $redirectPoolsExtendConfig redirectPoolsExtendConfig
    *
    * @return $this
    */
    public function setRedirectPoolsExtendConfig($redirectPoolsExtendConfig)
    {
        $this->container['redirectPoolsExtendConfig'] = $redirectPoolsExtendConfig;
        return $this;
    }

    /**
    * Gets fixedResponseConfig
    *  fixedResponseConfig
    *
    * @return \HuaweiCloud\SDK\Elb\V3\Model\FixtedResponseConfig
    */
    public function getFixedResponseConfig()
    {
        return $this->container['fixedResponseConfig'];
    }

    /**
    * Sets fixedResponseConfig
    *
    * @param \HuaweiCloud\SDK\Elb\V3\Model\FixtedResponseConfig $fixedResponseConfig fixedResponseConfig
    *
    * @return $this
    */
    public function setFixedResponseConfig($fixedResponseConfig)
    {
        $this->container['fixedResponseConfig'] = $fixedResponseConfig;
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
    * Gets enterpriseProjectId
    *  参数解释：企业项目ID。
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
    * @param string|null $enterpriseProjectId 参数解释：企业项目ID。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
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

