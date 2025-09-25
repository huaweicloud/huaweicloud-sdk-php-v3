<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListPluginsRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListPluginsRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentStatus  **参数解释**： 客户端状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * detectResult  **参数解释**： 检测结果 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * hostStatus  **参数解释**： 主机状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**： 不涉及 **取值范围**： - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**： 不涉及
    * ipAddr  公网或私网IP
    * protectStatus  防护状态
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * label  资产标签
    * chargingMode  收费模式
    * refresh  **参数解释**： 是否强制从ECS同步主机 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * aboveVersion  是否返回比当前版本高的所有版本
    * name  **参数解释**： 插件名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： opa-docker-authz
    * version  **参数解释**： 主机开通的版本 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'groupId' => 'string',
            'assetValue' => 'string',
            'limit' => 'int',
            'offset' => 'int',
            'agentStatus' => 'string',
            'detectResult' => 'string',
            'hostStatus' => 'string',
            'osType' => 'string',
            'ipAddr' => 'string',
            'protectStatus' => 'string',
            'groupName' => 'string',
            'policyGroupId' => 'string',
            'policyGroupName' => 'string',
            'label' => 'string',
            'chargingMode' => 'string',
            'refresh' => 'bool',
            'aboveVersion' => 'bool',
            'name' => 'string',
            'version' => 'string',
            'plugin' => 'string',
            'outsideHost' => 'bool'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentStatus  **参数解释**： 客户端状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * detectResult  **参数解释**： 检测结果 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * hostStatus  **参数解释**： 主机状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**： 不涉及 **取值范围**： - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**： 不涉及
    * ipAddr  公网或私网IP
    * protectStatus  防护状态
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * label  资产标签
    * chargingMode  收费模式
    * refresh  **参数解释**： 是否强制从ECS同步主机 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * aboveVersion  是否返回比当前版本高的所有版本
    * name  **参数解释**： 插件名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： opa-docker-authz
    * version  **参数解释**： 主机开通的版本 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'hostName' => null,
        'hostId' => null,
        'privateIp' => null,
        'publicIp' => null,
        'groupId' => null,
        'assetValue' => null,
        'limit' => 'int32',
        'offset' => 'int32',
        'agentStatus' => null,
        'detectResult' => null,
        'hostStatus' => null,
        'osType' => null,
        'ipAddr' => null,
        'protectStatus' => null,
        'groupName' => null,
        'policyGroupId' => null,
        'policyGroupName' => null,
        'label' => null,
        'chargingMode' => null,
        'refresh' => null,
        'aboveVersion' => null,
        'name' => null,
        'version' => null,
        'plugin' => null,
        'outsideHost' => null
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
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentStatus  **参数解释**： 客户端状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * detectResult  **参数解释**： 检测结果 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * hostStatus  **参数解释**： 主机状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**： 不涉及 **取值范围**： - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**： 不涉及
    * ipAddr  公网或私网IP
    * protectStatus  防护状态
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * label  资产标签
    * chargingMode  收费模式
    * refresh  **参数解释**： 是否强制从ECS同步主机 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * aboveVersion  是否返回比当前版本高的所有版本
    * name  **参数解释**： 插件名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： opa-docker-authz
    * version  **参数解释**： 主机开通的版本 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'groupId' => 'group_id',
            'assetValue' => 'asset_value',
            'limit' => 'limit',
            'offset' => 'offset',
            'agentStatus' => 'agent_status',
            'detectResult' => 'detect_result',
            'hostStatus' => 'host_status',
            'osType' => 'os_type',
            'ipAddr' => 'ip_addr',
            'protectStatus' => 'protect_status',
            'groupName' => 'group_name',
            'policyGroupId' => 'policy_group_id',
            'policyGroupName' => 'policy_group_name',
            'label' => 'label',
            'chargingMode' => 'charging_mode',
            'refresh' => 'refresh',
            'aboveVersion' => 'above_version',
            'name' => 'name',
            'version' => 'version',
            'plugin' => 'plugin',
            'outsideHost' => 'outside_host'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentStatus  **参数解释**： 客户端状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * detectResult  **参数解释**： 检测结果 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * hostStatus  **参数解释**： 主机状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**： 不涉及 **取值范围**： - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**： 不涉及
    * ipAddr  公网或私网IP
    * protectStatus  防护状态
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * label  资产标签
    * chargingMode  收费模式
    * refresh  **参数解释**： 是否强制从ECS同步主机 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * aboveVersion  是否返回比当前版本高的所有版本
    * name  **参数解释**： 插件名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： opa-docker-authz
    * version  **参数解释**： 主机开通的版本 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'groupId' => 'setGroupId',
            'assetValue' => 'setAssetValue',
            'limit' => 'setLimit',
            'offset' => 'setOffset',
            'agentStatus' => 'setAgentStatus',
            'detectResult' => 'setDetectResult',
            'hostStatus' => 'setHostStatus',
            'osType' => 'setOsType',
            'ipAddr' => 'setIpAddr',
            'protectStatus' => 'setProtectStatus',
            'groupName' => 'setGroupName',
            'policyGroupId' => 'setPolicyGroupId',
            'policyGroupName' => 'setPolicyGroupName',
            'label' => 'setLabel',
            'chargingMode' => 'setChargingMode',
            'refresh' => 'setRefresh',
            'aboveVersion' => 'setAboveVersion',
            'name' => 'setName',
            'version' => 'setVersion',
            'plugin' => 'setPlugin',
            'outsideHost' => 'setOutsideHost'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * groupId  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * agentStatus  **参数解释**： 客户端状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * detectResult  **参数解释**： 检测结果 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * hostStatus  **参数解释**： 主机状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * osType  **参数解释**： 操作系统类型 **约束限制**： 不涉及 **取值范围**： - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**： 不涉及
    * ipAddr  公网或私网IP
    * protectStatus  防护状态
    * groupName  服务器组名称
    * policyGroupId  策略组ID
    * policyGroupName  策略组名称
    * label  资产标签
    * chargingMode  收费模式
    * refresh  **参数解释**： 是否强制从ECS同步主机 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    * aboveVersion  是否返回比当前版本高的所有版本
    * name  **参数解释**： 插件名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： opa-docker-authz
    * version  **参数解释**： 主机开通的版本 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    * plugin  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    * outsideHost  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'groupId' => 'getGroupId',
            'assetValue' => 'getAssetValue',
            'limit' => 'getLimit',
            'offset' => 'getOffset',
            'agentStatus' => 'getAgentStatus',
            'detectResult' => 'getDetectResult',
            'hostStatus' => 'getHostStatus',
            'osType' => 'getOsType',
            'ipAddr' => 'getIpAddr',
            'protectStatus' => 'getProtectStatus',
            'groupName' => 'getGroupName',
            'policyGroupId' => 'getPolicyGroupId',
            'policyGroupName' => 'getPolicyGroupName',
            'label' => 'getLabel',
            'chargingMode' => 'getChargingMode',
            'refresh' => 'getRefresh',
            'aboveVersion' => 'getAboveVersion',
            'name' => 'getName',
            'version' => 'getVersion',
            'plugin' => 'getPlugin',
            'outsideHost' => 'getOutsideHost'
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
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['ipAddr'] = isset($data['ipAddr']) ? $data['ipAddr'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['policyGroupName'] = isset($data['policyGroupName']) ? $data['policyGroupName'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['refresh'] = isset($data['refresh']) ? $data['refresh'] : null;
        $this->container['aboveVersion'] = isset($data['aboveVersion']) ? $data['aboveVersion'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['plugin'] = isset($data['plugin']) ? $data['plugin'] : null;
        $this->container['outsideHost'] = isset($data['outsideHost']) ? $data['outsideHost'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) > 64)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['hostId']) && (mb_strlen($this->container['hostId']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostId']) && !preg_match("/^.*$/", $this->container['hostId'])) {
                $invalidProperties[] = "invalid value for 'hostId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['privateIp']) && (mb_strlen($this->container['privateIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'privateIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['privateIp']) && !preg_match("/^.*$/", $this->container['privateIp'])) {
                $invalidProperties[] = "invalid value for 'privateIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupId']) && (mb_strlen($this->container['groupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupId']) && !preg_match("/^.*$/", $this->container['groupId'])) {
                $invalidProperties[] = "invalid value for 'groupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && !preg_match("/^.*$/", $this->container['agentStatus'])) {
                $invalidProperties[] = "invalid value for 'agentStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) > 256)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['detectResult']) && !preg_match("/^.*$/", $this->container['detectResult'])) {
                $invalidProperties[] = "invalid value for 'detectResult', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostStatus']) && !preg_match("/^.*$/", $this->container['hostStatus'])) {
                $invalidProperties[] = "invalid value for 'hostStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 1)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipAddr']) && (mb_strlen($this->container['ipAddr']) > 256)) {
                $invalidProperties[] = "invalid value for 'ipAddr', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['ipAddr']) && (mb_strlen($this->container['ipAddr']) < 1)) {
                $invalidProperties[] = "invalid value for 'ipAddr', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['ipAddr']) && !preg_match("/^.*$/", $this->container['ipAddr'])) {
                $invalidProperties[] = "invalid value for 'ipAddr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 256)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && !preg_match("/^.*$/", $this->container['protectStatus'])) {
                $invalidProperties[] = "invalid value for 'protectStatus', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^.*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyGroupId']) && !preg_match("/^.*$/", $this->container['policyGroupId'])) {
                $invalidProperties[] = "invalid value for 'policyGroupId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['policyGroupName']) && !preg_match("/^.*$/", $this->container['policyGroupName'])) {
                $invalidProperties[] = "invalid value for 'policyGroupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 256)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 1)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['label']) && !preg_match("/^.*$/", $this->container['label'])) {
                $invalidProperties[] = "invalid value for 'label', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 256)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['chargingMode']) && !preg_match("/^.*$/", $this->container['chargingMode'])) {
                $invalidProperties[] = "invalid value for 'chargingMode', must be conform to the pattern /^.*$/.";
            }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
            if ((mb_strlen($this->container['name']) > 256)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
            }
            if ((mb_strlen($this->container['name']) < 1)) {
                $invalidProperties[] = "invalid value for 'name', the character length must be bigger than or equal to 1.";
            }
            if (!preg_match("/^.*$/", $this->container['name'])) {
                $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 256)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['version']) && !preg_match("/^.*$/", $this->container['version'])) {
                $invalidProperties[] = "invalid value for 'version', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['plugin']) && (mb_strlen($this->container['plugin']) > 256)) {
                $invalidProperties[] = "invalid value for 'plugin', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['plugin']) && (mb_strlen($this->container['plugin']) < 1)) {
                $invalidProperties[] = "invalid value for 'plugin', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['plugin']) && !preg_match("/^.*$/", $this->container['plugin'])) {
                $invalidProperties[] = "invalid value for 'plugin', must be conform to the pattern /^.*$/.";
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
    * Gets enterpriseProjectId
    *  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
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
    * @param string|null $enterpriseProjectId **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    *
    * @return $this
    */
    public function setEnterpriseProjectId($enterpriseProjectId)
    {
        $this->container['enterpriseProjectId'] = $enterpriseProjectId;
        return $this;
    }

    /**
    * Gets hostName
    *  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostName()
    {
        return $this->container['hostName'];
    }

    /**
    * Sets hostName
    *
    * @param string|null $hostName **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostName($hostName)
    {
        $this->container['hostName'] = $hostName;
        return $this;
    }

    /**
    * Gets hostId
    *  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getHostId()
    {
        return $this->container['hostId'];
    }

    /**
    * Sets hostId
    *
    * @param string|null $hostId **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
        return $this;
    }

    /**
    * Gets privateIp
    *  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getPrivateIp()
    {
        return $this->container['privateIp'];
    }

    /**
    * Sets privateIp
    *
    * @param string|null $privateIp **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPrivateIp($privateIp)
    {
        $this->container['privateIp'] = $privateIp;
        return $this;
    }

    /**
    * Gets publicIp
    *  服务器公网IP
    *
    * @return string|null
    */
    public function getPublicIp()
    {
        return $this->container['publicIp'];
    }

    /**
    * Sets publicIp
    *
    * @param string|null $publicIp 服务器公网IP
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getGroupId()
    {
        return $this->container['groupId'];
    }

    /**
    * Sets groupId
    *
    * @param string|null $groupId **参数解释**: 服务器组ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets assetValue
    *  资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    *
    * @return string|null
    */
    public function getAssetValue()
    {
        return $this->container['assetValue'];
    }

    /**
    * Sets assetValue
    *
    * @param string|null $assetValue 资产重要性，包含如下3种   - important ：重要资产   - common ：一般资产   - test ：测试资产
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
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
    * @param int|null $limit **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
        return $this;
    }

    /**
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return int|null
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int|null $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**： 客户端状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getAgentStatus()
    {
        return $this->container['agentStatus'];
    }

    /**
    * Sets agentStatus
    *
    * @param string|null $agentStatus **参数解释**： 客户端状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets detectResult
    *  **参数解释**： 检测结果 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getDetectResult()
    {
        return $this->container['detectResult'];
    }

    /**
    * Sets detectResult
    *
    * @param string|null $detectResult **参数解释**： 检测结果 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setDetectResult($detectResult)
    {
        $this->container['detectResult'] = $detectResult;
        return $this;
    }

    /**
    * Gets hostStatus
    *  **参数解释**： 主机状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getHostStatus()
    {
        return $this->container['hostStatus'];
    }

    /**
    * Sets hostStatus
    *
    * @param string|null $hostStatus **参数解释**： 主机状态 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setHostStatus($hostStatus)
    {
        $this->container['hostStatus'] = $hostStatus;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**： 操作系统类型 **约束限制**： 不涉及 **取值范围**： - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getOsType()
    {
        return $this->container['osType'];
    }

    /**
    * Sets osType
    *
    * @param string|null $osType **参数解释**： 操作系统类型 **约束限制**： 不涉及 **取值范围**： - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets ipAddr
    *  公网或私网IP
    *
    * @return string|null
    */
    public function getIpAddr()
    {
        return $this->container['ipAddr'];
    }

    /**
    * Sets ipAddr
    *
    * @param string|null $ipAddr 公网或私网IP
    *
    * @return $this
    */
    public function setIpAddr($ipAddr)
    {
        $this->container['ipAddr'] = $ipAddr;
        return $this;
    }

    /**
    * Gets protectStatus
    *  防护状态
    *
    * @return string|null
    */
    public function getProtectStatus()
    {
        return $this->container['protectStatus'];
    }

    /**
    * Sets protectStatus
    *
    * @param string|null $protectStatus 防护状态
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets groupName
    *  服务器组名称
    *
    * @return string|null
    */
    public function getGroupName()
    {
        return $this->container['groupName'];
    }

    /**
    * Sets groupName
    *
    * @param string|null $groupName 服务器组名称
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  策略组ID
    *
    * @return string|null
    */
    public function getPolicyGroupId()
    {
        return $this->container['policyGroupId'];
    }

    /**
    * Sets policyGroupId
    *
    * @param string|null $policyGroupId 策略组ID
    *
    * @return $this
    */
    public function setPolicyGroupId($policyGroupId)
    {
        $this->container['policyGroupId'] = $policyGroupId;
        return $this;
    }

    /**
    * Gets policyGroupName
    *  策略组名称
    *
    * @return string|null
    */
    public function getPolicyGroupName()
    {
        return $this->container['policyGroupName'];
    }

    /**
    * Sets policyGroupName
    *
    * @param string|null $policyGroupName 策略组名称
    *
    * @return $this
    */
    public function setPolicyGroupName($policyGroupName)
    {
        $this->container['policyGroupName'] = $policyGroupName;
        return $this;
    }

    /**
    * Gets label
    *  资产标签
    *
    * @return string|null
    */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
    * Sets label
    *
    * @param string|null $label 资产标签
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets chargingMode
    *  收费模式
    *
    * @return string|null
    */
    public function getChargingMode()
    {
        return $this->container['chargingMode'];
    }

    /**
    * Sets chargingMode
    *
    * @param string|null $chargingMode 收费模式
    *
    * @return $this
    */
    public function setChargingMode($chargingMode)
    {
        $this->container['chargingMode'] = $chargingMode;
        return $this;
    }

    /**
    * Gets refresh
    *  **参数解释**： 是否强制从ECS同步主机 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @return bool|null
    */
    public function getRefresh()
    {
        return $this->container['refresh'];
    }

    /**
    * Sets refresh
    *
    * @param bool|null $refresh **参数解释**： 是否强制从ECS同步主机 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @return $this
    */
    public function setRefresh($refresh)
    {
        $this->container['refresh'] = $refresh;
        return $this;
    }

    /**
    * Gets aboveVersion
    *  是否返回比当前版本高的所有版本
    *
    * @return bool|null
    */
    public function getAboveVersion()
    {
        return $this->container['aboveVersion'];
    }

    /**
    * Sets aboveVersion
    *
    * @param bool|null $aboveVersion 是否返回比当前版本高的所有版本
    *
    * @return $this
    */
    public function setAboveVersion($aboveVersion)
    {
        $this->container['aboveVersion'] = $aboveVersion;
        return $this;
    }

    /**
    * Gets name
    *  **参数解释**： 插件名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： opa-docker-authz
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
    * @param string $name **参数解释**： 插件名称 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： opa-docker-authz
    *
    * @return $this
    */
    public function setName($name)
    {
        $this->container['name'] = $name;
        return $this;
    }

    /**
    * Gets version
    *  **参数解释**： 主机开通的版本 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    *
    * @return string|null
    */
    public function getVersion()
    {
        return $this->container['version'];
    }

    /**
    * Sets version
    *
    * @param string|null $version **参数解释**： 主机开通的版本 **约束限制**： 不涉及 **取值范围**： 字符长度1-256位  **默认取值**： 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets plugin
    *  **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    *
    * @return string|null
    */
    public function getPlugin()
    {
        return $this->container['plugin'];
    }

    /**
    * Sets plugin
    *
    * @param string|null $plugin **参数解释**： 插件类型 **约束限制**： 不涉及 **取值范围**： - opa-docker-authz：docker插件。  **默认取值**： opa-docker-authz
    *
    * @return $this
    */
    public function setPlugin($plugin)
    {
        $this->container['plugin'] = $plugin;
        return $this;
    }

    /**
    * Gets outsideHost
    *  **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @return bool|null
    */
    public function getOutsideHost()
    {
        return $this->container['outsideHost'];
    }

    /**
    * Sets outsideHost
    *
    * @param bool|null $outsideHost **参数解释**： 是否非华为云 **约束限制**： 不涉及 **取值范围**： - true：是。 - false：否。  **默认取值**： false
    *
    * @return $this
    */
    public function setOutsideHost($outsideHost)
    {
        $this->container['outsideHost'] = $outsideHost;
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

