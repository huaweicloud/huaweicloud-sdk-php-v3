<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListWtpProtectHostRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListWtpProtectHostRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * protectStatus  **参数解释**: 网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启网页防篡改防护。  **默认取值**: 无
    * wtpStatus  **参数解释**: 网页防篡改详细防护状态。 **约束限制**: 不涉及 **取值范围**: - opened : 防护中。 - opening : 开启中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。  **默认取值**: 无
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed : agent未安装。 - online : agent在线。 - offline : agent不在线。  **默认取值**: 无
    * raspStatus  **参数解释**: 动态网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。  **默认取值**: 无
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'enterpriseProjectId' => 'string',
            'region' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'publicIp' => 'string',
            'privateIp' => 'string',
            'groupName' => 'string',
            'osType' => 'string',
            'assetValue' => 'string',
            'offset' => 'int',
            'limit' => 'int',
            'protectStatus' => 'string',
            'wtpStatus' => 'string',
            'agentStatus' => 'string',
            'raspStatus' => 'string'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * protectStatus  **参数解释**: 网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启网页防篡改防护。  **默认取值**: 无
    * wtpStatus  **参数解释**: 网页防篡改详细防护状态。 **约束限制**: 不涉及 **取值范围**: - opened : 防护中。 - opening : 开启中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。  **默认取值**: 无
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed : agent未安装。 - online : agent在线。 - offline : agent不在线。  **默认取值**: 无
    * raspStatus  **参数解释**: 动态网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。  **默认取值**: 无
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'enterpriseProjectId' => null,
        'region' => null,
        'hostName' => null,
        'hostId' => null,
        'publicIp' => null,
        'privateIp' => null,
        'groupName' => null,
        'osType' => null,
        'assetValue' => null,
        'offset' => 'int32',
        'limit' => 'int32',
        'protectStatus' => null,
        'wtpStatus' => null,
        'agentStatus' => null,
        'raspStatus' => null
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
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * protectStatus  **参数解释**: 网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启网页防篡改防护。  **默认取值**: 无
    * wtpStatus  **参数解释**: 网页防篡改详细防护状态。 **约束限制**: 不涉及 **取值范围**: - opened : 防护中。 - opening : 开启中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。  **默认取值**: 无
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed : agent未安装。 - online : agent在线。 - offline : agent不在线。  **默认取值**: 无
    * raspStatus  **参数解释**: 动态网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。  **默认取值**: 无
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'enterpriseProjectId' => 'enterprise_project_id',
            'region' => 'region',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'publicIp' => 'public_ip',
            'privateIp' => 'private_ip',
            'groupName' => 'group_name',
            'osType' => 'os_type',
            'assetValue' => 'asset_value',
            'offset' => 'offset',
            'limit' => 'limit',
            'protectStatus' => 'protect_status',
            'wtpStatus' => 'wtp_status',
            'agentStatus' => 'agent_status',
            'raspStatus' => 'rasp_status'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * protectStatus  **参数解释**: 网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启网页防篡改防护。  **默认取值**: 无
    * wtpStatus  **参数解释**: 网页防篡改详细防护状态。 **约束限制**: 不涉及 **取值范围**: - opened : 防护中。 - opening : 开启中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。  **默认取值**: 无
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed : agent未安装。 - online : agent在线。 - offline : agent不在线。  **默认取值**: 无
    * raspStatus  **参数解释**: 动态网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。  **默认取值**: 无
    *
    * @var string[]
    */
    protected static $setters = [
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'region' => 'setRegion',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'publicIp' => 'setPublicIp',
            'privateIp' => 'setPrivateIp',
            'groupName' => 'setGroupName',
            'osType' => 'setOsType',
            'assetValue' => 'setAssetValue',
            'offset' => 'setOffset',
            'limit' => 'setLimit',
            'protectStatus' => 'setProtectStatus',
            'wtpStatus' => 'setWtpStatus',
            'agentStatus' => 'setAgentStatus',
            'raspStatus' => 'setRaspStatus'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * publicIp  **参数解释**: 服务器弹性IP地址 **约束限制**: 不涉及 **取值范围**: IPv4格式（长度7-15位）、IPv6格式（长度15-39位） **默认取值**: 无
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * groupName  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    * osType  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    * assetValue  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    * protectStatus  **参数解释**: 网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启网页防篡改防护。  **默认取值**: 无
    * wtpStatus  **参数解释**: 网页防篡改详细防护状态。 **约束限制**: 不涉及 **取值范围**: - opened : 防护中。 - opening : 开启中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。  **默认取值**: 无
    * agentStatus  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed : agent未安装。 - online : agent在线。 - offline : agent不在线。  **默认取值**: 无
    * raspStatus  **参数解释**: 动态网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。  **默认取值**: 无
    *
    * @var string[]
    */
    protected static $getters = [
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'region' => 'getRegion',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'publicIp' => 'getPublicIp',
            'privateIp' => 'getPrivateIp',
            'groupName' => 'getGroupName',
            'osType' => 'getOsType',
            'assetValue' => 'getAssetValue',
            'offset' => 'getOffset',
            'limit' => 'getLimit',
            'protectStatus' => 'getProtectStatus',
            'wtpStatus' => 'getWtpStatus',
            'agentStatus' => 'getAgentStatus',
            'raspStatus' => 'getRaspStatus'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['wtpStatus'] = isset($data['wtpStatus']) ? $data['wtpStatus'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['raspStatus'] = isset($data['raspStatus']) ? $data['raspStatus'] : null;
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
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && !preg_match("/^.*$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) > 128)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['publicIp']) && (mb_strlen($this->container['publicIp']) < 1)) {
                $invalidProperties[] = "invalid value for 'publicIp', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['publicIp']) && !preg_match("/^.*$/", $this->container['publicIp'])) {
                $invalidProperties[] = "invalid value for 'publicIp', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^.*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 10)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 10.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['offset']) && ($this->container['offset'] > 2000000)) {
                $invalidProperties[] = "invalid value for 'offset', must be smaller than or equal to 2000000.";
            }
            if (!is_null($this->container['offset']) && ($this->container['offset'] < 0)) {
                $invalidProperties[] = "invalid value for 'offset', must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] > 200)) {
                $invalidProperties[] = "invalid value for 'limit', must be smaller than or equal to 200.";
            }
            if (!is_null($this->container['limit']) && ($this->container['limit'] < 10)) {
                $invalidProperties[] = "invalid value for 'limit', must be bigger than or equal to 10.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['wtpStatus']) && (mb_strlen($this->container['wtpStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'wtpStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['wtpStatus']) && (mb_strlen($this->container['wtpStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'wtpStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['raspStatus']) && (mb_strlen($this->container['raspStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'raspStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['raspStatus']) && (mb_strlen($this->container['raspStatus']) < 0)) {
                $invalidProperties[] = "invalid value for 'raspStatus', the character length must be bigger than or equal to 0.";
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
    * Gets region
    *  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getRegion()
    {
        return $this->container['region'];
    }

    /**
    * Sets region
    *
    * @param string|null $region **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setRegion($region)
    {
        $this->container['region'] = $region;
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
    *  **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $hostId **参数解释**: 服务器的唯一标识ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHostId($hostId)
    {
        $this->container['hostId'] = $hostId;
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
    * Gets groupName
    *  **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
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
    * @param string|null $groupName **参数解释**: 服务器组名称。 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 无
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets osType
    *  **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
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
    * @param string|null $osType **参数解释**: 操作系统类型。 **约束限制**: 不涉及 **取值范围**: - Linux：Linux操作系统。 - Windows：Windows操作系统。  **默认取值**: 无
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
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
    * @param string|null $assetValue **参数解释**： 资产重要性 **约束限制**： 不涉及 **取值范围**： - important：重要资产 - common：一般资产 - test：测试资产  **默认取值**： 无
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
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
    * Gets protectStatus
    *  **参数解释**: 网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启网页防篡改防护。  **默认取值**: 无
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
    * @param string|null $protectStatus **参数解释**: 网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启网页防篡改防护。  **默认取值**: 无
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets wtpStatus
    *  **参数解释**: 网页防篡改详细防护状态。 **约束限制**: 不涉及 **取值范围**: - opened : 防护中。 - opening : 开启中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。  **默认取值**: 无
    *
    * @return string|null
    */
    public function getWtpStatus()
    {
        return $this->container['wtpStatus'];
    }

    /**
    * Sets wtpStatus
    *
    * @param string|null $wtpStatus **参数解释**: 网页防篡改详细防护状态。 **约束限制**: 不涉及 **取值范围**: - opened : 防护中。 - opening : 开启中。 - open_failed : 防护失败。 - partial_protection : 部分防护。 - protection_interruption : 防护中断。  **默认取值**: 无
    *
    * @return $this
    */
    public function setWtpStatus($wtpStatus)
    {
        $this->container['wtpStatus'] = $wtpStatus;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed : agent未安装。 - online : agent在线。 - offline : agent不在线。  **默认取值**: 无
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
    * @param string|null $agentStatus **参数解释**: Agent状态。 **约束限制**: 不涉及 **取值范围**: - not_installed : agent未安装。 - online : agent在线。 - offline : agent不在线。  **默认取值**: 无
    *
    * @return $this
    */
    public function setAgentStatus($agentStatus)
    {
        $this->container['agentStatus'] = $agentStatus;
        return $this;
    }

    /**
    * Gets raspStatus
    *  **参数解释**: 动态网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。  **默认取值**: 无
    *
    * @return string|null
    */
    public function getRaspStatus()
    {
        return $this->container['raspStatus'];
    }

    /**
    * Sets raspStatus
    *
    * @param string|null $raspStatus **参数解释**: 动态网页防篡改防护开启状态。 **约束限制**: 不涉及 **取值范围**: - opened ：已开启动态网页防篡改防护。 - closed ：未开启动态网页防篡改防护。  **默认取值**: 无
    *
    * @return $this
    */
    public function setRaspStatus($raspStatus)
    {
        $this->container['raspStatus'] = $raspStatus;
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

