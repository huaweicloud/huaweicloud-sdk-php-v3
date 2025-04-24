<?php

namespace HuaweiCloud\SDK\Elb\V3\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class Quota implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'Quota';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * projectId  参数解释：项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  单个转发策略下所有转发规则的condition总数配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool器关联的监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  单个IP地址组可以关联的监听器数量配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  单个监听器下关联的所有IP地址组的ip列表中的IP总数不能超过ipgroup_max_length。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    * ipgroupsPerListener  单个监听器下的IP地址组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * poolsPerL7policy  单个转发策略下的后端服务器组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policiesPerListener  单个监听器下的转发策略配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceMembersPerPool  单个pool实例下的免费member配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceListenersPerLoadbalancer  单个LB实例下的免费监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'projectId' => 'string',
            'loadbalancer' => 'int',
            'certificate' => 'int',
            'listener' => 'int',
            'l7policy' => 'int',
            'conditionPerPolicy' => 'int',
            'pool' => 'int',
            'healthmonitor' => 'int',
            'member' => 'int',
            'membersPerPool' => 'int',
            'listenersPerPool' => 'int',
            'ipgroup' => 'int',
            'ipgroupBindings' => 'int',
            'ipgroupMaxLength' => 'int',
            'securityPolicy' => 'int',
            'listenersPerLoadbalancer' => 'int',
            'ipgroupsPerListener' => 'int',
            'poolsPerL7policy' => 'int',
            'l7policiesPerListener' => 'int',
            'freeInstanceMembersPerPool' => 'int',
            'freeInstanceListenersPerLoadbalancer' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * projectId  参数解释：项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  单个转发策略下所有转发规则的condition总数配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool器关联的监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  单个IP地址组可以关联的监听器数量配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  单个监听器下关联的所有IP地址组的ip列表中的IP总数不能超过ipgroup_max_length。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    * ipgroupsPerListener  单个监听器下的IP地址组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * poolsPerL7policy  单个转发策略下的后端服务器组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policiesPerListener  单个监听器下的转发策略配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceMembersPerPool  单个pool实例下的免费member配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceListenersPerLoadbalancer  单个LB实例下的免费监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'projectId' => null,
        'loadbalancer' => 'int32',
        'certificate' => 'int32',
        'listener' => 'int32',
        'l7policy' => 'int32',
        'conditionPerPolicy' => 'int32',
        'pool' => 'int32',
        'healthmonitor' => 'int32',
        'member' => 'int32',
        'membersPerPool' => 'int32',
        'listenersPerPool' => 'int32',
        'ipgroup' => 'int32',
        'ipgroupBindings' => 'int32',
        'ipgroupMaxLength' => 'int32',
        'securityPolicy' => 'int32',
        'listenersPerLoadbalancer' => 'int32',
        'ipgroupsPerListener' => 'int32',
        'poolsPerL7policy' => 'int32',
        'l7policiesPerListener' => 'int32',
        'freeInstanceMembersPerPool' => 'int32',
        'freeInstanceListenersPerLoadbalancer' => 'int32'
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
    * projectId  参数解释：项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  单个转发策略下所有转发规则的condition总数配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool器关联的监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  单个IP地址组可以关联的监听器数量配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  单个监听器下关联的所有IP地址组的ip列表中的IP总数不能超过ipgroup_max_length。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    * ipgroupsPerListener  单个监听器下的IP地址组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * poolsPerL7policy  单个转发策略下的后端服务器组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policiesPerListener  单个监听器下的转发策略配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceMembersPerPool  单个pool实例下的免费member配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceListenersPerLoadbalancer  单个LB实例下的免费监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'projectId' => 'project_id',
            'loadbalancer' => 'loadbalancer',
            'certificate' => 'certificate',
            'listener' => 'listener',
            'l7policy' => 'l7policy',
            'conditionPerPolicy' => 'condition_per_policy',
            'pool' => 'pool',
            'healthmonitor' => 'healthmonitor',
            'member' => 'member',
            'membersPerPool' => 'members_per_pool',
            'listenersPerPool' => 'listeners_per_pool',
            'ipgroup' => 'ipgroup',
            'ipgroupBindings' => 'ipgroup_bindings',
            'ipgroupMaxLength' => 'ipgroup_max_length',
            'securityPolicy' => 'security_policy',
            'listenersPerLoadbalancer' => 'listeners_per_loadbalancer',
            'ipgroupsPerListener' => 'ipgroups_per_listener',
            'poolsPerL7policy' => 'pools_per_l7policy',
            'l7policiesPerListener' => 'l7policies_per_listener',
            'freeInstanceMembersPerPool' => 'free_instance_members_per_pool',
            'freeInstanceListenersPerLoadbalancer' => 'free_instance_listeners_per_loadbalancer'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * projectId  参数解释：项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  单个转发策略下所有转发规则的condition总数配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool器关联的监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  单个IP地址组可以关联的监听器数量配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  单个监听器下关联的所有IP地址组的ip列表中的IP总数不能超过ipgroup_max_length。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    * ipgroupsPerListener  单个监听器下的IP地址组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * poolsPerL7policy  单个转发策略下的后端服务器组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policiesPerListener  单个监听器下的转发策略配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceMembersPerPool  单个pool实例下的免费member配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceListenersPerLoadbalancer  单个LB实例下的免费监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @var string[]
    */
    protected static $setters = [
            'projectId' => 'setProjectId',
            'loadbalancer' => 'setLoadbalancer',
            'certificate' => 'setCertificate',
            'listener' => 'setListener',
            'l7policy' => 'setL7policy',
            'conditionPerPolicy' => 'setConditionPerPolicy',
            'pool' => 'setPool',
            'healthmonitor' => 'setHealthmonitor',
            'member' => 'setMember',
            'membersPerPool' => 'setMembersPerPool',
            'listenersPerPool' => 'setListenersPerPool',
            'ipgroup' => 'setIpgroup',
            'ipgroupBindings' => 'setIpgroupBindings',
            'ipgroupMaxLength' => 'setIpgroupMaxLength',
            'securityPolicy' => 'setSecurityPolicy',
            'listenersPerLoadbalancer' => 'setListenersPerLoadbalancer',
            'ipgroupsPerListener' => 'setIpgroupsPerListener',
            'poolsPerL7policy' => 'setPoolsPerL7policy',
            'l7policiesPerListener' => 'setL7policiesPerListener',
            'freeInstanceMembersPerPool' => 'setFreeInstanceMembersPerPool',
            'freeInstanceListenersPerLoadbalancer' => 'setFreeInstanceListenersPerLoadbalancer'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * projectId  参数解释：项目ID。
    * loadbalancer  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * certificate  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listener  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policy  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * conditionPerPolicy  单个转发策略下所有转发规则的condition总数配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * pool  后端服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * healthmonitor  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * member  后端服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * membersPerPool  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * listenersPerPool  单个pool器关联的监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * ipgroup  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupBindings  单个IP地址组可以关联的监听器数量配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * ipgroupMaxLength  单个监听器下关联的所有IP地址组的ip列表中的IP总数不能超过ipgroup_max_length。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * securityPolicy  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    * listenersPerLoadbalancer  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    * ipgroupsPerListener  单个监听器下的IP地址组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * poolsPerL7policy  单个转发策略下的后端服务器组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * l7policiesPerListener  单个监听器下的转发策略配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceMembersPerPool  单个pool实例下的免费member配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    * freeInstanceListenersPerLoadbalancer  单个LB实例下的免费监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @var string[]
    */
    protected static $getters = [
            'projectId' => 'getProjectId',
            'loadbalancer' => 'getLoadbalancer',
            'certificate' => 'getCertificate',
            'listener' => 'getListener',
            'l7policy' => 'getL7policy',
            'conditionPerPolicy' => 'getConditionPerPolicy',
            'pool' => 'getPool',
            'healthmonitor' => 'getHealthmonitor',
            'member' => 'getMember',
            'membersPerPool' => 'getMembersPerPool',
            'listenersPerPool' => 'getListenersPerPool',
            'ipgroup' => 'getIpgroup',
            'ipgroupBindings' => 'getIpgroupBindings',
            'ipgroupMaxLength' => 'getIpgroupMaxLength',
            'securityPolicy' => 'getSecurityPolicy',
            'listenersPerLoadbalancer' => 'getListenersPerLoadbalancer',
            'ipgroupsPerListener' => 'getIpgroupsPerListener',
            'poolsPerL7policy' => 'getPoolsPerL7policy',
            'l7policiesPerListener' => 'getL7policiesPerListener',
            'freeInstanceMembersPerPool' => 'getFreeInstanceMembersPerPool',
            'freeInstanceListenersPerLoadbalancer' => 'getFreeInstanceListenersPerLoadbalancer'
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
        $this->container['projectId'] = isset($data['projectId']) ? $data['projectId'] : null;
        $this->container['loadbalancer'] = isset($data['loadbalancer']) ? $data['loadbalancer'] : null;
        $this->container['certificate'] = isset($data['certificate']) ? $data['certificate'] : null;
        $this->container['listener'] = isset($data['listener']) ? $data['listener'] : null;
        $this->container['l7policy'] = isset($data['l7policy']) ? $data['l7policy'] : null;
        $this->container['conditionPerPolicy'] = isset($data['conditionPerPolicy']) ? $data['conditionPerPolicy'] : null;
        $this->container['pool'] = isset($data['pool']) ? $data['pool'] : null;
        $this->container['healthmonitor'] = isset($data['healthmonitor']) ? $data['healthmonitor'] : null;
        $this->container['member'] = isset($data['member']) ? $data['member'] : null;
        $this->container['membersPerPool'] = isset($data['membersPerPool']) ? $data['membersPerPool'] : null;
        $this->container['listenersPerPool'] = isset($data['listenersPerPool']) ? $data['listenersPerPool'] : null;
        $this->container['ipgroup'] = isset($data['ipgroup']) ? $data['ipgroup'] : null;
        $this->container['ipgroupBindings'] = isset($data['ipgroupBindings']) ? $data['ipgroupBindings'] : null;
        $this->container['ipgroupMaxLength'] = isset($data['ipgroupMaxLength']) ? $data['ipgroupMaxLength'] : null;
        $this->container['securityPolicy'] = isset($data['securityPolicy']) ? $data['securityPolicy'] : null;
        $this->container['listenersPerLoadbalancer'] = isset($data['listenersPerLoadbalancer']) ? $data['listenersPerLoadbalancer'] : null;
        $this->container['ipgroupsPerListener'] = isset($data['ipgroupsPerListener']) ? $data['ipgroupsPerListener'] : null;
        $this->container['poolsPerL7policy'] = isset($data['poolsPerL7policy']) ? $data['poolsPerL7policy'] : null;
        $this->container['l7policiesPerListener'] = isset($data['l7policiesPerListener']) ? $data['l7policiesPerListener'] : null;
        $this->container['freeInstanceMembersPerPool'] = isset($data['freeInstanceMembersPerPool']) ? $data['freeInstanceMembersPerPool'] : null;
        $this->container['freeInstanceListenersPerLoadbalancer'] = isset($data['freeInstanceListenersPerLoadbalancer']) ? $data['freeInstanceListenersPerLoadbalancer'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
        if ($this->container['projectId'] === null) {
            $invalidProperties[] = "'projectId' can't be null";
        }
        if ($this->container['loadbalancer'] === null) {
            $invalidProperties[] = "'loadbalancer' can't be null";
        }
        if ($this->container['certificate'] === null) {
            $invalidProperties[] = "'certificate' can't be null";
        }
        if ($this->container['listener'] === null) {
            $invalidProperties[] = "'listener' can't be null";
        }
        if ($this->container['l7policy'] === null) {
            $invalidProperties[] = "'l7policy' can't be null";
        }
        if ($this->container['conditionPerPolicy'] === null) {
            $invalidProperties[] = "'conditionPerPolicy' can't be null";
        }
        if ($this->container['pool'] === null) {
            $invalidProperties[] = "'pool' can't be null";
        }
        if ($this->container['healthmonitor'] === null) {
            $invalidProperties[] = "'healthmonitor' can't be null";
        }
        if ($this->container['member'] === null) {
            $invalidProperties[] = "'member' can't be null";
        }
        if ($this->container['membersPerPool'] === null) {
            $invalidProperties[] = "'membersPerPool' can't be null";
        }
        if ($this->container['listenersPerPool'] === null) {
            $invalidProperties[] = "'listenersPerPool' can't be null";
        }
        if ($this->container['ipgroup'] === null) {
            $invalidProperties[] = "'ipgroup' can't be null";
        }
        if ($this->container['ipgroupBindings'] === null) {
            $invalidProperties[] = "'ipgroupBindings' can't be null";
        }
        if ($this->container['ipgroupMaxLength'] === null) {
            $invalidProperties[] = "'ipgroupMaxLength' can't be null";
        }
        if ($this->container['securityPolicy'] === null) {
            $invalidProperties[] = "'securityPolicy' can't be null";
        }
        if ($this->container['listenersPerLoadbalancer'] === null) {
            $invalidProperties[] = "'listenersPerLoadbalancer' can't be null";
        }
        if ($this->container['ipgroupsPerListener'] === null) {
            $invalidProperties[] = "'ipgroupsPerListener' can't be null";
        }
        if ($this->container['poolsPerL7policy'] === null) {
            $invalidProperties[] = "'poolsPerL7policy' can't be null";
        }
        if ($this->container['l7policiesPerListener'] === null) {
            $invalidProperties[] = "'l7policiesPerListener' can't be null";
        }
        if ($this->container['freeInstanceMembersPerPool'] === null) {
            $invalidProperties[] = "'freeInstanceMembersPerPool' can't be null";
        }
        if ($this->container['freeInstanceListenersPerLoadbalancer'] === null) {
            $invalidProperties[] = "'freeInstanceListenersPerLoadbalancer' can't be null";
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
    * Gets projectId
    *  参数解释：项目ID。
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
    * @param string $projectId 参数解释：项目ID。
    *
    * @return $this
    */
    public function setProjectId($projectId)
    {
        $this->container['projectId'] = $projectId;
        return $this;
    }

    /**
    * Gets loadbalancer
    *  负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getLoadbalancer()
    {
        return $this->container['loadbalancer'];
    }

    /**
    * Sets loadbalancer
    *
    * @param int $loadbalancer 负载均衡器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setLoadbalancer($loadbalancer)
    {
        $this->container['loadbalancer'] = $loadbalancer;
        return $this;
    }

    /**
    * Gets certificate
    *  证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getCertificate()
    {
        return $this->container['certificate'];
    }

    /**
    * Sets certificate
    *
    * @param int $certificate 证书配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setCertificate($certificate)
    {
        $this->container['certificate'] = $certificate;
        return $this;
    }

    /**
    * Gets listener
    *  监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getListener()
    {
        return $this->container['listener'];
    }

    /**
    * Sets listener
    *
    * @param int $listener 监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setListener($listener)
    {
        $this->container['listener'] = $listener;
        return $this;
    }

    /**
    * Gets l7policy
    *  转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getL7policy()
    {
        return $this->container['l7policy'];
    }

    /**
    * Sets l7policy
    *
    * @param int $l7policy 转发策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setL7policy($l7policy)
    {
        $this->container['l7policy'] = $l7policy;
        return $this;
    }

    /**
    * Gets conditionPerPolicy
    *  单个转发策略下所有转发规则的condition总数配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getConditionPerPolicy()
    {
        return $this->container['conditionPerPolicy'];
    }

    /**
    * Sets conditionPerPolicy
    *
    * @param int $conditionPerPolicy 单个转发策略下所有转发规则的condition总数配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setConditionPerPolicy($conditionPerPolicy)
    {
        $this->container['conditionPerPolicy'] = $conditionPerPolicy;
        return $this;
    }

    /**
    * Gets pool
    *  后端服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getPool()
    {
        return $this->container['pool'];
    }

    /**
    * Sets pool
    *
    * @param int $pool 后端服务器组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setPool($pool)
    {
        $this->container['pool'] = $pool;
        return $this;
    }

    /**
    * Gets healthmonitor
    *  健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getHealthmonitor()
    {
        return $this->container['healthmonitor'];
    }

    /**
    * Sets healthmonitor
    *
    * @param int $healthmonitor 健康检查配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setHealthmonitor($healthmonitor)
    {
        $this->container['healthmonitor'] = $healthmonitor;
        return $this;
    }

    /**
    * Gets member
    *  后端服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getMember()
    {
        return $this->container['member'];
    }

    /**
    * Sets member
    *
    * @param int $member 后端服务器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setMember($member)
    {
        $this->container['member'] = $member;
        return $this;
    }

    /**
    * Gets membersPerPool
    *  单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getMembersPerPool()
    {
        return $this->container['membersPerPool'];
    }

    /**
    * Sets membersPerPool
    *
    * @param int $membersPerPool 单个pool下的member的配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setMembersPerPool($membersPerPool)
    {
        $this->container['membersPerPool'] = $membersPerPool;
        return $this;
    }

    /**
    * Gets listenersPerPool
    *  单个pool器关联的监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getListenersPerPool()
    {
        return $this->container['listenersPerPool'];
    }

    /**
    * Sets listenersPerPool
    *
    * @param int $listenersPerPool 单个pool器关联的监听器配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setListenersPerPool($listenersPerPool)
    {
        $this->container['listenersPerPool'] = $listenersPerPool;
        return $this;
    }

    /**
    * Gets ipgroup
    *  IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int
    */
    public function getIpgroup()
    {
        return $this->container['ipgroup'];
    }

    /**
    * Sets ipgroup
    *
    * @param int $ipgroup IP地址组配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setIpgroup($ipgroup)
    {
        $this->container['ipgroup'] = $ipgroup;
        return $this;
    }

    /**
    * Gets ipgroupBindings
    *  单个IP地址组可以关联的监听器数量配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int
    */
    public function getIpgroupBindings()
    {
        return $this->container['ipgroupBindings'];
    }

    /**
    * Sets ipgroupBindings
    *
    * @param int $ipgroupBindings 单个IP地址组可以关联的监听器数量配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setIpgroupBindings($ipgroupBindings)
    {
        $this->container['ipgroupBindings'] = $ipgroupBindings;
        return $this;
    }

    /**
    * Gets ipgroupMaxLength
    *  单个监听器下关联的所有IP地址组的ip列表中的IP总数不能超过ipgroup_max_length。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int
    */
    public function getIpgroupMaxLength()
    {
        return $this->container['ipgroupMaxLength'];
    }

    /**
    * Sets ipgroupMaxLength
    *
    * @param int $ipgroupMaxLength 单个监听器下关联的所有IP地址组的ip列表中的IP总数不能超过ipgroup_max_length。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setIpgroupMaxLength($ipgroupMaxLength)
    {
        $this->container['ipgroupMaxLength'] = $ipgroupMaxLength;
        return $this;
    }

    /**
    * Gets securityPolicy
    *  自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return int
    */
    public function getSecurityPolicy()
    {
        return $this->container['securityPolicy'];
    }

    /**
    * Sets securityPolicy
    *
    * @param int $securityPolicy 自定义安全策略配额。  取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  [不支持该字段，请勿使用。](tag:hcso_dt)
    *
    * @return $this
    */
    public function setSecurityPolicy($securityPolicy)
    {
        $this->container['securityPolicy'] = $securityPolicy;
        return $this;
    }

    /**
    * Gets listenersPerLoadbalancer
    *  单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @return int
    */
    public function getListenersPerLoadbalancer()
    {
        return $this->container['listenersPerLoadbalancer'];
    }

    /**
    * Sets listenersPerLoadbalancer
    *
    * @param int $listenersPerLoadbalancer 单个LB实例下的监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。  > 当前单个LB下监听器配额实际未限制，但建议不要超过默认配额。
    *
    * @return $this
    */
    public function setListenersPerLoadbalancer($listenersPerLoadbalancer)
    {
        $this->container['listenersPerLoadbalancer'] = $listenersPerLoadbalancer;
        return $this;
    }

    /**
    * Gets ipgroupsPerListener
    *  单个监听器下的IP地址组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getIpgroupsPerListener()
    {
        return $this->container['ipgroupsPerListener'];
    }

    /**
    * Sets ipgroupsPerListener
    *
    * @param int $ipgroupsPerListener 单个监听器下的IP地址组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setIpgroupsPerListener($ipgroupsPerListener)
    {
        $this->container['ipgroupsPerListener'] = $ipgroupsPerListener;
        return $this;
    }

    /**
    * Gets poolsPerL7policy
    *  单个转发策略下的后端服务器组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getPoolsPerL7policy()
    {
        return $this->container['poolsPerL7policy'];
    }

    /**
    * Sets poolsPerL7policy
    *
    * @param int $poolsPerL7policy 单个转发策略下的后端服务器组配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setPoolsPerL7policy($poolsPerL7policy)
    {
        $this->container['poolsPerL7policy'] = $poolsPerL7policy;
        return $this;
    }

    /**
    * Gets l7policiesPerListener
    *  单个监听器下的转发策略配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getL7policiesPerListener()
    {
        return $this->container['l7policiesPerListener'];
    }

    /**
    * Sets l7policiesPerListener
    *
    * @param int $l7policiesPerListener 单个监听器下的转发策略配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setL7policiesPerListener($l7policiesPerListener)
    {
        $this->container['l7policiesPerListener'] = $l7policiesPerListener;
        return $this;
    }

    /**
    * Gets freeInstanceMembersPerPool
    *  单个pool实例下的免费member配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getFreeInstanceMembersPerPool()
    {
        return $this->container['freeInstanceMembersPerPool'];
    }

    /**
    * Sets freeInstanceMembersPerPool
    *
    * @param int $freeInstanceMembersPerPool 单个pool实例下的免费member配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setFreeInstanceMembersPerPool($freeInstanceMembersPerPool)
    {
        $this->container['freeInstanceMembersPerPool'] = $freeInstanceMembersPerPool;
        return $this;
    }

    /**
    * Gets freeInstanceListenersPerLoadbalancer
    *  单个LB实例下的免费监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return int
    */
    public function getFreeInstanceListenersPerLoadbalancer()
    {
        return $this->container['freeInstanceListenersPerLoadbalancer'];
    }

    /**
    * Sets freeInstanceListenersPerLoadbalancer
    *
    * @param int $freeInstanceListenersPerLoadbalancer 单个LB实例下的免费监听器配额。 取值： - 大于等于0：表示当前配额数量。 - -1：表示无配额限制。
    *
    * @return $this
    */
    public function setFreeInstanceListenersPerLoadbalancer($freeInstanceListenersPerLoadbalancer)
    {
        $this->container['freeInstanceListenersPerLoadbalancer'] = $freeInstanceListenersPerLoadbalancer;
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

