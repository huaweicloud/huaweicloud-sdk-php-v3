<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListCommonHostRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListCommonHostRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 必填 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * featureName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: **取值范围**: - av_detect_feature：AV策略  **默认取值**: 无
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterName  **参数解释**: 集群名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * versionNameUpper  **参数解释**： 主机开通的版本,高于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * versionNameLower  **参数解释**： 主机开通的版本,低于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'hostId' => 'string',
            'hostName' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'featureName' => 'string',
            'groupId' => 'string',
            'assetValue' => 'string',
            'agentStatus' => 'string',
            'clusterId' => 'string',
            'clusterName' => 'string',
            'versionNameUpper' => 'string',
            'versionNameLower' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 必填 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * featureName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: **取值范围**: - av_detect_feature：AV策略  **默认取值**: 无
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterName  **参数解释**: 集群名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * versionNameUpper  **参数解释**： 主机开通的版本,高于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * versionNameLower  **参数解释**： 主机开通的版本,低于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'hostId' => null,
        'hostName' => null,
        'privateIp' => null,
        'publicIp' => null,
        'featureName' => null,
        'groupId' => null,
        'assetValue' => null,
        'agentStatus' => null,
        'clusterId' => null,
        'clusterName' => null,
        'versionNameUpper' => null,
        'versionNameLower' => null
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
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 必填 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * featureName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: **取值范围**: - av_detect_feature：AV策略  **默认取值**: 无
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterName  **参数解释**: 集群名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * versionNameUpper  **参数解释**： 主机开通的版本,高于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * versionNameLower  **参数解释**： 主机开通的版本,低于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'offset' => 'offset',
            'limit' => 'limit',
            'hostId' => 'host_id',
            'hostName' => 'host_name',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'featureName' => 'feature_name',
            'groupId' => 'group_id',
            'assetValue' => 'asset_value',
            'agentStatus' => 'agent_status',
            'clusterId' => 'cluster_id',
            'clusterName' => 'cluster_name',
            'versionNameUpper' => 'version_name_upper',
            'versionNameLower' => 'version_name_lower'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 必填 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * featureName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: **取值范围**: - av_detect_feature：AV策略  **默认取值**: 无
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterName  **参数解释**: 集群名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * versionNameUpper  **参数解释**： 主机开通的版本,高于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * versionNameLower  **参数解释**： 主机开通的版本,低于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'hostId' => 'setHostId',
            'hostName' => 'setHostName',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'featureName' => 'setFeatureName',
            'groupId' => 'setGroupId',
            'assetValue' => 'setAssetValue',
            'agentStatus' => 'setAgentStatus',
            'clusterId' => 'setClusterId',
            'clusterName' => 'setClusterName',
            'versionNameUpper' => 'setVersionNameUpper',
            'versionNameLower' => 'setVersionNameLower'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    * limit  **参数解释**: 每页显示个数 **约束限制**: 必填 **取值范围**: 取值10-200 **默认取值**: 10
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * featureName  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: **取值范围**: - av_detect_feature：AV策略  **默认取值**: 无
    * groupId  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * assetValue  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    * agentStatus  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * clusterName  **参数解释**: 集群名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * versionNameUpper  **参数解释**： 主机开通的版本,高于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    * versionNameLower  **参数解释**： 主机开通的版本,低于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'hostId' => 'getHostId',
            'hostName' => 'getHostName',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'featureName' => 'getFeatureName',
            'groupId' => 'getGroupId',
            'assetValue' => 'getAssetValue',
            'agentStatus' => 'getAgentStatus',
            'clusterId' => 'getClusterId',
            'clusterName' => 'getClusterName',
            'versionNameUpper' => 'getVersionNameUpper',
            'versionNameLower' => 'getVersionNameLower'
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
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['featureName'] = isset($data['featureName']) ? $data['featureName'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['clusterName'] = isset($data['clusterName']) ? $data['clusterName'] : null;
        $this->container['versionNameUpper'] = isset($data['versionNameUpper']) ? $data['versionNameUpper'] : null;
        $this->container['versionNameLower'] = isset($data['versionNameLower']) ? $data['versionNameLower'] : null;
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
        if ($this->container['offset'] === null) {
            $invalidProperties[] = "'offset' can't be null";
        }
            if (($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
        if ($this->container['limit'] === null) {
            $invalidProperties[] = "'limit' can't be null";
        }
            if (($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
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
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) > 256)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['hostName']) && (mb_strlen($this->container['hostName']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['hostName']) && !preg_match("/^.*$/", $this->container['hostName'])) {
                $invalidProperties[] = "invalid value for 'hostName', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['featureName']) && (mb_strlen($this->container['featureName']) > 128)) {
                $invalidProperties[] = "invalid value for 'featureName', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['featureName']) && (mb_strlen($this->container['featureName']) < 1)) {
                $invalidProperties[] = "invalid value for 'featureName', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 10)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 1)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && !preg_match("/^important|common|test$/", $this->container['assetValue'])) {
                $invalidProperties[] = "invalid value for 'assetValue', must be conform to the pattern /^important|common|test$/.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) > 256)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['clusterName']) && (mb_strlen($this->container['clusterName']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['versionNameUpper']) && (mb_strlen($this->container['versionNameUpper']) > 60)) {
                $invalidProperties[] = "invalid value for 'versionNameUpper', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['versionNameUpper']) && (mb_strlen($this->container['versionNameUpper']) < 1)) {
                $invalidProperties[] = "invalid value for 'versionNameUpper', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['versionNameLower']) && (mb_strlen($this->container['versionNameLower']) > 60)) {
                $invalidProperties[] = "invalid value for 'versionNameLower', the character length must be smaller than or equal to 60.";
            }
            if (!is_null($this->container['versionNameLower']) && (mb_strlen($this->container['versionNameLower']) < 1)) {
                $invalidProperties[] = "invalid value for 'versionNameLower', the character length must be bigger than or equal to 1.";
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
    * Gets offset
    *  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return int
    */
    public function getOffset()
    {
        return $this->container['offset'];
    }

    /**
    * Sets offset
    *
    * @param int $offset **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOffset($offset)
    {
        $this->container['offset'] = $offset;
        return $this;
    }

    /**
    * Gets limit
    *  **参数解释**: 每页显示个数 **约束限制**: 必填 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return int
    */
    public function getLimit()
    {
        return $this->container['limit'];
    }

    /**
    * Sets limit
    *
    * @param int $limit **参数解释**: 每页显示个数 **约束限制**: 必填 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @return $this
    */
    public function setLimit($limit)
    {
        $this->container['limit'] = $limit;
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
    *  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
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
    * @param string|null $publicIp **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    *
    * @return $this
    */
    public function setPublicIp($publicIp)
    {
        $this->container['publicIp'] = $publicIp;
        return $this;
    }

    /**
    * Gets featureName
    *  **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: **取值范围**: - av_detect_feature：AV策略  **默认取值**: 无
    *
    * @return string|null
    */
    public function getFeatureName()
    {
        return $this->container['featureName'];
    }

    /**
    * Sets featureName
    *
    * @param string|null $featureName **参数解释**: 策略名称 **约束限制**: 不涉及 **取值范围**: **取值范围**: - av_detect_feature：AV策略  **默认取值**: 无
    *
    * @return $this
    */
    public function setFeatureName($featureName)
    {
        $this->container['featureName'] = $featureName;
        return $this;
    }

    /**
    * Gets groupId
    *  **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $groupId **参数解释**: 服务器组的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    *  **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
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
    * @param string|null $assetValue **参数解释**: 资产重要性 **约束限制**: 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
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
    * @param string|null $agentStatus **参数解释**： Agent状态 **约束限制**: 不涉及 **取值范围**： - installed：已安装 - not_installed：未安装 - online：在线 - offline：离线 - install_failed：安装失败 - installing：安装中  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets clusterId
    *  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterId()
    {
        return $this->container['clusterId'];
    }

    /**
    * Sets clusterId
    *
    * @param string|null $clusterId **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterId($clusterId)
    {
        $this->container['clusterId'] = $clusterId;
        return $this;
    }

    /**
    * Gets clusterName
    *  **参数解释**: 集群名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getClusterName()
    {
        return $this->container['clusterName'];
    }

    /**
    * Sets clusterName
    *
    * @param string|null $clusterName **参数解释**: 集群名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setClusterName($clusterName)
    {
        $this->container['clusterName'] = $clusterName;
        return $this;
    }

    /**
    * Gets versionNameUpper
    *  **参数解释**： 主机开通的版本,高于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getVersionNameUpper()
    {
        return $this->container['versionNameUpper'];
    }

    /**
    * Sets versionNameUpper
    *
    * @param string|null $versionNameUpper **参数解释**： 主机开通的版本,高于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVersionNameUpper($versionNameUpper)
    {
        $this->container['versionNameUpper'] = $versionNameUpper;
        return $this;
    }

    /**
    * Gets versionNameLower
    *  **参数解释**： 主机开通的版本,低于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getVersionNameLower()
    {
        return $this->container['versionNameLower'];
    }

    /**
    * Sets versionNameLower
    *
    * @param string|null $versionNameLower **参数解释**： 主机开通的版本,低于该版本 **约束限制**: 不涉及 **取值范围**： - hss.version.basic：基础版。 - hss.version.advanced：专业版。 - hss.version.enterprise：企业版。 - hss.version.premium：旗舰版。 - hss.version.wtp：网页防篡改版。 - hss.version.container.enterprise：容器版。  **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVersionNameLower($versionNameLower)
    {
        $this->container['versionNameLower'] = $versionNameLower;
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

