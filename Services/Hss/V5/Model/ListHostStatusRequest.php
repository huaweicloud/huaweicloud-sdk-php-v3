<?php

namespace HuaweiCloud\SDK\Hss\V5\Model;

use \ArrayAccess;
use HuaweiCloud\SDK\Core\Utils\ObjectSerializer;
use HuaweiCloud\SDK\Core\Utils\ModelInterface;
use HuaweiCloud\SDK\Core\SdkResponse;

class ListHostStatusRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
    * The original name of the model.
    *
    * @var string
    */
    protected static $openAPIModelName = 'ListHostStatusRequest';

    /**
    * Array of property to type mappings. Used for (de)serialization
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 **默认取值**: 不涉及
    * agentStatus  **参数解释**: Agent的状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - installed：已安装。已安装状态包含以下四种情况：   - online：在线。表示Agent已经成功安装并且与HSS云端防护中心保持连接。   - offline：离线。表示虽然Agent已经安装，但当前与HSS云端防护中心的连接中断。   - install_failed：安装失败。表示在尝试安装过程中遇到错误或问题，导致安装未能完成。   - installing：安装中。表示当前正在进行Agent安装。 - not_installed ：未安装。表示服务器中尚未安装Agent。 如果您要筛选除在线以外所有状态的Agent，可设置not_online（仅作为查询条件） **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种。   - undetected ：未检测。   - clean ：无风险。   - risk ：有风险。   - scanning ：检测中。 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种。 - ACTIVE ：正在运行。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。 **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型 **约束限制**: 不涉及 **取值范围**: 包含如下2种。 - Linux ：Linux。 - Windows ：Windows。 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed ：关闭。 - opened ：开启。 - protection_exception ：防护异常。 **默认取值**: 不涉及
    * groupId  服务器组ID
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vpcId  **参数解释**: VPC的ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasVul  **参数解释**: 存在漏洞风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasBaseline  **参数解释**: 存在基线风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序字段 **约束限制**: 不涉及 **取值范围**: 只支持risk_num **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**: - asc: 正序 - desc: 倒序 **默认取值**: 不涉及
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。 **默认取值**: 不涉及
    * refresh  **参数解释** : 是否强制从ECS同步主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * getCommonLoginLocations  **参数解释** : 是否获取主机常用登录地信息 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * aboveVersion  **参数解释** : 是否返回比当前版本高的所有版本 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * outsideHost  **参数解释** : 是否华为云主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * assetValue  **参数解释** : 资产重要性 **约束限制** : 不涉及 **取值范围** : 包含如下4种 - important ：重要资产 - common ：一般资产 - test ：测试资产 **默认取值** : 不涉及
    * label  **参数解释** : 资产标签 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * serverGroup  **参数解释** : 资产服务器组 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * agentUpgradable  **参数解释** : agent是否可升级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * installMode  **参数解释** : 是否安装模式场景 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * bindingKey  **参数解释** : 是否绑定DEW密钥 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectInterrupt  **参数解释** : 是否防护中断 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * incluster  **参数解释** : 是否集群内节点 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectDegradation  **参数解释** : 是否防护降级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $openAPITypes = [
            'region' => 'string',
            'enterpriseProjectId' => 'string',
            'version' => 'string',
            'agentStatus' => 'string',
            'detectResult' => 'string',
            'hostName' => 'string',
            'hostId' => 'string',
            'hostStatus' => 'string',
            'osType' => 'string',
            'privateIp' => 'string',
            'publicIp' => 'string',
            'ipAddr' => 'string',
            'protectStatus' => 'string',
            'groupId' => 'string',
            'groupName' => 'string',
            'vpcId' => 'string',
            'hasIntrusion' => 'bool',
            'hasVul' => 'bool',
            'hasBaseline' => 'bool',
            'sortKey' => 'string',
            'sortDir' => 'string',
            'policyGroupId' => 'string',
            'policyGroupName' => 'string',
            'chargingMode' => 'string',
            'refresh' => 'bool',
            'getCommonLoginLocations' => 'bool',
            'aboveVersion' => 'bool',
            'outsideHost' => 'bool',
            'assetValue' => 'string',
            'label' => 'string',
            'serverGroup' => 'string',
            'agentUpgradable' => 'bool',
            'installMode' => 'bool',
            'bindingKey' => 'bool',
            'protectInterrupt' => 'bool',
            'incluster' => 'bool',
            'protectDegradation' => 'bool',
            'clusterId' => 'string',
            'offset' => 'int',
            'limit' => 'int'
    ];

    /**
    * Array of property to format mappings. Used for (de)serialization
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 **默认取值**: 不涉及
    * agentStatus  **参数解释**: Agent的状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - installed：已安装。已安装状态包含以下四种情况：   - online：在线。表示Agent已经成功安装并且与HSS云端防护中心保持连接。   - offline：离线。表示虽然Agent已经安装，但当前与HSS云端防护中心的连接中断。   - install_failed：安装失败。表示在尝试安装过程中遇到错误或问题，导致安装未能完成。   - installing：安装中。表示当前正在进行Agent安装。 - not_installed ：未安装。表示服务器中尚未安装Agent。 如果您要筛选除在线以外所有状态的Agent，可设置not_online（仅作为查询条件） **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种。   - undetected ：未检测。   - clean ：无风险。   - risk ：有风险。   - scanning ：检测中。 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种。 - ACTIVE ：正在运行。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。 **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型 **约束限制**: 不涉及 **取值范围**: 包含如下2种。 - Linux ：Linux。 - Windows ：Windows。 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed ：关闭。 - opened ：开启。 - protection_exception ：防护异常。 **默认取值**: 不涉及
    * groupId  服务器组ID
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vpcId  **参数解释**: VPC的ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasVul  **参数解释**: 存在漏洞风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasBaseline  **参数解释**: 存在基线风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序字段 **约束限制**: 不涉及 **取值范围**: 只支持risk_num **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**: - asc: 正序 - desc: 倒序 **默认取值**: 不涉及
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。 **默认取值**: 不涉及
    * refresh  **参数解释** : 是否强制从ECS同步主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * getCommonLoginLocations  **参数解释** : 是否获取主机常用登录地信息 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * aboveVersion  **参数解释** : 是否返回比当前版本高的所有版本 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * outsideHost  **参数解释** : 是否华为云主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * assetValue  **参数解释** : 资产重要性 **约束限制** : 不涉及 **取值范围** : 包含如下4种 - important ：重要资产 - common ：一般资产 - test ：测试资产 **默认取值** : 不涉及
    * label  **参数解释** : 资产标签 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * serverGroup  **参数解释** : 资产服务器组 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * agentUpgradable  **参数解释** : agent是否可升级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * installMode  **参数解释** : 是否安装模式场景 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * bindingKey  **参数解释** : 是否绑定DEW密钥 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectInterrupt  **参数解释** : 是否防护中断 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * incluster  **参数解释** : 是否集群内节点 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectDegradation  **参数解释** : 是否防护降级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $openAPIFormats = [
        'region' => null,
        'enterpriseProjectId' => null,
        'version' => null,
        'agentStatus' => null,
        'detectResult' => null,
        'hostName' => null,
        'hostId' => null,
        'hostStatus' => null,
        'osType' => null,
        'privateIp' => null,
        'publicIp' => null,
        'ipAddr' => null,
        'protectStatus' => null,
        'groupId' => null,
        'groupName' => null,
        'vpcId' => null,
        'hasIntrusion' => null,
        'hasVul' => null,
        'hasBaseline' => null,
        'sortKey' => null,
        'sortDir' => null,
        'policyGroupId' => null,
        'policyGroupName' => null,
        'chargingMode' => null,
        'refresh' => null,
        'getCommonLoginLocations' => null,
        'aboveVersion' => null,
        'outsideHost' => null,
        'assetValue' => null,
        'label' => null,
        'serverGroup' => null,
        'agentUpgradable' => null,
        'installMode' => null,
        'bindingKey' => null,
        'protectInterrupt' => null,
        'incluster' => null,
        'protectDegradation' => null,
        'clusterId' => null,
        'offset' => 'int32',
        'limit' => 'int32'
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
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 **默认取值**: 不涉及
    * agentStatus  **参数解释**: Agent的状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - installed：已安装。已安装状态包含以下四种情况：   - online：在线。表示Agent已经成功安装并且与HSS云端防护中心保持连接。   - offline：离线。表示虽然Agent已经安装，但当前与HSS云端防护中心的连接中断。   - install_failed：安装失败。表示在尝试安装过程中遇到错误或问题，导致安装未能完成。   - installing：安装中。表示当前正在进行Agent安装。 - not_installed ：未安装。表示服务器中尚未安装Agent。 如果您要筛选除在线以外所有状态的Agent，可设置not_online（仅作为查询条件） **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种。   - undetected ：未检测。   - clean ：无风险。   - risk ：有风险。   - scanning ：检测中。 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种。 - ACTIVE ：正在运行。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。 **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型 **约束限制**: 不涉及 **取值范围**: 包含如下2种。 - Linux ：Linux。 - Windows ：Windows。 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed ：关闭。 - opened ：开启。 - protection_exception ：防护异常。 **默认取值**: 不涉及
    * groupId  服务器组ID
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vpcId  **参数解释**: VPC的ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasVul  **参数解释**: 存在漏洞风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasBaseline  **参数解释**: 存在基线风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序字段 **约束限制**: 不涉及 **取值范围**: 只支持risk_num **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**: - asc: 正序 - desc: 倒序 **默认取值**: 不涉及
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。 **默认取值**: 不涉及
    * refresh  **参数解释** : 是否强制从ECS同步主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * getCommonLoginLocations  **参数解释** : 是否获取主机常用登录地信息 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * aboveVersion  **参数解释** : 是否返回比当前版本高的所有版本 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * outsideHost  **参数解释** : 是否华为云主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * assetValue  **参数解释** : 资产重要性 **约束限制** : 不涉及 **取值范围** : 包含如下4种 - important ：重要资产 - common ：一般资产 - test ：测试资产 **默认取值** : 不涉及
    * label  **参数解释** : 资产标签 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * serverGroup  **参数解释** : 资产服务器组 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * agentUpgradable  **参数解释** : agent是否可升级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * installMode  **参数解释** : 是否安装模式场景 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * bindingKey  **参数解释** : 是否绑定DEW密钥 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectInterrupt  **参数解释** : 是否防护中断 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * incluster  **参数解释** : 是否集群内节点 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectDegradation  **参数解释** : 是否防护降级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $attributeMap = [
            'region' => 'region',
            'enterpriseProjectId' => 'enterprise_project_id',
            'version' => 'version',
            'agentStatus' => 'agent_status',
            'detectResult' => 'detect_result',
            'hostName' => 'host_name',
            'hostId' => 'host_id',
            'hostStatus' => 'host_status',
            'osType' => 'os_type',
            'privateIp' => 'private_ip',
            'publicIp' => 'public_ip',
            'ipAddr' => 'ip_addr',
            'protectStatus' => 'protect_status',
            'groupId' => 'group_id',
            'groupName' => 'group_name',
            'vpcId' => 'vpc_id',
            'hasIntrusion' => 'has_intrusion',
            'hasVul' => 'has_vul',
            'hasBaseline' => 'has_baseline',
            'sortKey' => 'sort_key',
            'sortDir' => 'sort_dir',
            'policyGroupId' => 'policy_group_id',
            'policyGroupName' => 'policy_group_name',
            'chargingMode' => 'charging_mode',
            'refresh' => 'refresh',
            'getCommonLoginLocations' => 'get_common_login_locations',
            'aboveVersion' => 'above_version',
            'outsideHost' => 'outside_host',
            'assetValue' => 'asset_value',
            'label' => 'label',
            'serverGroup' => 'server_group',
            'agentUpgradable' => 'agent_upgradable',
            'installMode' => 'install_mode',
            'bindingKey' => 'binding_key',
            'protectInterrupt' => 'protect_interrupt',
            'incluster' => 'incluster',
            'protectDegradation' => 'protect_degradation',
            'clusterId' => 'cluster_id',
            'offset' => 'offset',
            'limit' => 'limit'
    ];

    /**
    * Array of attributes to setter functions (for deserialization of responses)
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 **默认取值**: 不涉及
    * agentStatus  **参数解释**: Agent的状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - installed：已安装。已安装状态包含以下四种情况：   - online：在线。表示Agent已经成功安装并且与HSS云端防护中心保持连接。   - offline：离线。表示虽然Agent已经安装，但当前与HSS云端防护中心的连接中断。   - install_failed：安装失败。表示在尝试安装过程中遇到错误或问题，导致安装未能完成。   - installing：安装中。表示当前正在进行Agent安装。 - not_installed ：未安装。表示服务器中尚未安装Agent。 如果您要筛选除在线以外所有状态的Agent，可设置not_online（仅作为查询条件） **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种。   - undetected ：未检测。   - clean ：无风险。   - risk ：有风险。   - scanning ：检测中。 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种。 - ACTIVE ：正在运行。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。 **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型 **约束限制**: 不涉及 **取值范围**: 包含如下2种。 - Linux ：Linux。 - Windows ：Windows。 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed ：关闭。 - opened ：开启。 - protection_exception ：防护异常。 **默认取值**: 不涉及
    * groupId  服务器组ID
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vpcId  **参数解释**: VPC的ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasVul  **参数解释**: 存在漏洞风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasBaseline  **参数解释**: 存在基线风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序字段 **约束限制**: 不涉及 **取值范围**: 只支持risk_num **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**: - asc: 正序 - desc: 倒序 **默认取值**: 不涉及
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。 **默认取值**: 不涉及
    * refresh  **参数解释** : 是否强制从ECS同步主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * getCommonLoginLocations  **参数解释** : 是否获取主机常用登录地信息 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * aboveVersion  **参数解释** : 是否返回比当前版本高的所有版本 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * outsideHost  **参数解释** : 是否华为云主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * assetValue  **参数解释** : 资产重要性 **约束限制** : 不涉及 **取值范围** : 包含如下4种 - important ：重要资产 - common ：一般资产 - test ：测试资产 **默认取值** : 不涉及
    * label  **参数解释** : 资产标签 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * serverGroup  **参数解释** : 资产服务器组 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * agentUpgradable  **参数解释** : agent是否可升级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * installMode  **参数解释** : 是否安装模式场景 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * bindingKey  **参数解释** : 是否绑定DEW密钥 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectInterrupt  **参数解释** : 是否防护中断 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * incluster  **参数解释** : 是否集群内节点 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectDegradation  **参数解释** : 是否防护降级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $setters = [
            'region' => 'setRegion',
            'enterpriseProjectId' => 'setEnterpriseProjectId',
            'version' => 'setVersion',
            'agentStatus' => 'setAgentStatus',
            'detectResult' => 'setDetectResult',
            'hostName' => 'setHostName',
            'hostId' => 'setHostId',
            'hostStatus' => 'setHostStatus',
            'osType' => 'setOsType',
            'privateIp' => 'setPrivateIp',
            'publicIp' => 'setPublicIp',
            'ipAddr' => 'setIpAddr',
            'protectStatus' => 'setProtectStatus',
            'groupId' => 'setGroupId',
            'groupName' => 'setGroupName',
            'vpcId' => 'setVpcId',
            'hasIntrusion' => 'setHasIntrusion',
            'hasVul' => 'setHasVul',
            'hasBaseline' => 'setHasBaseline',
            'sortKey' => 'setSortKey',
            'sortDir' => 'setSortDir',
            'policyGroupId' => 'setPolicyGroupId',
            'policyGroupName' => 'setPolicyGroupName',
            'chargingMode' => 'setChargingMode',
            'refresh' => 'setRefresh',
            'getCommonLoginLocations' => 'setGetCommonLoginLocations',
            'aboveVersion' => 'setAboveVersion',
            'outsideHost' => 'setOutsideHost',
            'assetValue' => 'setAssetValue',
            'label' => 'setLabel',
            'serverGroup' => 'setServerGroup',
            'agentUpgradable' => 'setAgentUpgradable',
            'installMode' => 'setInstallMode',
            'bindingKey' => 'setBindingKey',
            'protectInterrupt' => 'setProtectInterrupt',
            'incluster' => 'setIncluster',
            'protectDegradation' => 'setProtectDegradation',
            'clusterId' => 'setClusterId',
            'offset' => 'setOffset',
            'limit' => 'setLimit'
    ];

    /**
    * Array of attributes to getter functions (for serialization of requests)
    * region  **参数解释**: 区域ID，用于查询目的区域内的资产。获取方式请参见[获取区域ID](hss_02_0026.xml)。 **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * enterpriseProjectId  **参数解释**: 企业项目ID，用于过滤不同企业项目下的资产。获取方式请参见[获取企业项目ID](hss_02_0027.xml)。 如需查询所有企业项目下的资产请传参“all_granted_eps”。 **约束限制**: 开通企业项目功能后才需要配置企业项目ID参数。 **取值范围**: 字符长度1-256位 **默认取值**: 0，表示默认企业项目（default）。
    * version  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 **默认取值**: 不涉及
    * agentStatus  **参数解释**: Agent的状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - installed：已安装。已安装状态包含以下四种情况：   - online：在线。表示Agent已经成功安装并且与HSS云端防护中心保持连接。   - offline：离线。表示虽然Agent已经安装，但当前与HSS云端防护中心的连接中断。   - install_failed：安装失败。表示在尝试安装过程中遇到错误或问题，导致安装未能完成。   - installing：安装中。表示当前正在进行Agent安装。 - not_installed ：未安装。表示服务器中尚未安装Agent。 如果您要筛选除在线以外所有状态的Agent，可设置not_online（仅作为查询条件） **默认取值**: 不涉及
    * detectResult  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种。   - undetected ：未检测。   - clean ：无风险。   - risk ：有风险。   - scanning ：检测中。 **默认取值**: 不涉及
    * hostName  **参数解释**: 服务器名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * hostId  **参数解释**: 服务器ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * hostStatus  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种。 - ACTIVE ：正在运行。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。 **默认取值**: 不涉及
    * osType  **参数解释**: 操作系统类型 **约束限制**: 不涉及 **取值范围**: 包含如下2种。 - Linux ：Linux。 - Windows ：Windows。 **默认取值**: 不涉及
    * privateIp  **参数解释**: 服务器私有IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * publicIp  服务器公网IP
    * ipAddr  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * protectStatus  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed ：关闭。 - opened ：开启。 - protection_exception ：防护异常。 **默认取值**: 不涉及
    * groupId  服务器组ID
    * groupName  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * vpcId  **参数解释**: VPC的ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    * hasIntrusion  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasVul  **参数解释**: 存在漏洞风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * hasBaseline  **参数解释**: 存在基线风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    * sortKey  **参数解释**: 排序字段 **约束限制**: 不涉及 **取值范围**: 只支持risk_num **默认取值**: 不涉及
    * sortDir  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**: - asc: 正序 - desc: 倒序 **默认取值**: 不涉及
    * policyGroupId  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
    * policyGroupName  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    * chargingMode  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。 **默认取值**: 不涉及
    * refresh  **参数解释** : 是否强制从ECS同步主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * getCommonLoginLocations  **参数解释** : 是否获取主机常用登录地信息 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * aboveVersion  **参数解释** : 是否返回比当前版本高的所有版本 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * outsideHost  **参数解释** : 是否华为云主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * assetValue  **参数解释** : 资产重要性 **约束限制** : 不涉及 **取值范围** : 包含如下4种 - important ：重要资产 - common ：一般资产 - test ：测试资产 **默认取值** : 不涉及
    * label  **参数解释** : 资产标签 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * serverGroup  **参数解释** : 资产服务器组 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    * agentUpgradable  **参数解释** : agent是否可升级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * installMode  **参数解释** : 是否安装模式场景 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * bindingKey  **参数解释** : 是否绑定DEW密钥 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectInterrupt  **参数解释** : 是否防护中断 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * incluster  **参数解释** : 是否集群内节点 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * protectDegradation  **参数解释** : 是否防护降级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    * clusterId  **参数解释**: 集群ID **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    * offset  **参数解释**: 偏移量：指定返回记录的开始位置 **约束限制**: 不涉及 **取值范围**: 最小值0，最大值2000000 **默认取值**: 默认为0
    * limit  **参数解释**: 每页显示个数 **约束限制**: 不涉及 **取值范围**: 取值10-200 **默认取值**: 10
    *
    * @var string[]
    */
    protected static $getters = [
            'region' => 'getRegion',
            'enterpriseProjectId' => 'getEnterpriseProjectId',
            'version' => 'getVersion',
            'agentStatus' => 'getAgentStatus',
            'detectResult' => 'getDetectResult',
            'hostName' => 'getHostName',
            'hostId' => 'getHostId',
            'hostStatus' => 'getHostStatus',
            'osType' => 'getOsType',
            'privateIp' => 'getPrivateIp',
            'publicIp' => 'getPublicIp',
            'ipAddr' => 'getIpAddr',
            'protectStatus' => 'getProtectStatus',
            'groupId' => 'getGroupId',
            'groupName' => 'getGroupName',
            'vpcId' => 'getVpcId',
            'hasIntrusion' => 'getHasIntrusion',
            'hasVul' => 'getHasVul',
            'hasBaseline' => 'getHasBaseline',
            'sortKey' => 'getSortKey',
            'sortDir' => 'getSortDir',
            'policyGroupId' => 'getPolicyGroupId',
            'policyGroupName' => 'getPolicyGroupName',
            'chargingMode' => 'getChargingMode',
            'refresh' => 'getRefresh',
            'getCommonLoginLocations' => 'getGetCommonLoginLocations',
            'aboveVersion' => 'getAboveVersion',
            'outsideHost' => 'getOutsideHost',
            'assetValue' => 'getAssetValue',
            'label' => 'getLabel',
            'serverGroup' => 'getServerGroup',
            'agentUpgradable' => 'getAgentUpgradable',
            'installMode' => 'getInstallMode',
            'bindingKey' => 'getBindingKey',
            'protectInterrupt' => 'getProtectInterrupt',
            'incluster' => 'getIncluster',
            'protectDegradation' => 'getProtectDegradation',
            'clusterId' => 'getClusterId',
            'offset' => 'getOffset',
            'limit' => 'getLimit'
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
        $this->container['region'] = isset($data['region']) ? $data['region'] : null;
        $this->container['enterpriseProjectId'] = isset($data['enterpriseProjectId']) ? $data['enterpriseProjectId'] : null;
        $this->container['version'] = isset($data['version']) ? $data['version'] : null;
        $this->container['agentStatus'] = isset($data['agentStatus']) ? $data['agentStatus'] : null;
        $this->container['detectResult'] = isset($data['detectResult']) ? $data['detectResult'] : null;
        $this->container['hostName'] = isset($data['hostName']) ? $data['hostName'] : null;
        $this->container['hostId'] = isset($data['hostId']) ? $data['hostId'] : null;
        $this->container['hostStatus'] = isset($data['hostStatus']) ? $data['hostStatus'] : null;
        $this->container['osType'] = isset($data['osType']) ? $data['osType'] : null;
        $this->container['privateIp'] = isset($data['privateIp']) ? $data['privateIp'] : null;
        $this->container['publicIp'] = isset($data['publicIp']) ? $data['publicIp'] : null;
        $this->container['ipAddr'] = isset($data['ipAddr']) ? $data['ipAddr'] : null;
        $this->container['protectStatus'] = isset($data['protectStatus']) ? $data['protectStatus'] : null;
        $this->container['groupId'] = isset($data['groupId']) ? $data['groupId'] : null;
        $this->container['groupName'] = isset($data['groupName']) ? $data['groupName'] : null;
        $this->container['vpcId'] = isset($data['vpcId']) ? $data['vpcId'] : null;
        $this->container['hasIntrusion'] = isset($data['hasIntrusion']) ? $data['hasIntrusion'] : null;
        $this->container['hasVul'] = isset($data['hasVul']) ? $data['hasVul'] : null;
        $this->container['hasBaseline'] = isset($data['hasBaseline']) ? $data['hasBaseline'] : null;
        $this->container['sortKey'] = isset($data['sortKey']) ? $data['sortKey'] : null;
        $this->container['sortDir'] = isset($data['sortDir']) ? $data['sortDir'] : null;
        $this->container['policyGroupId'] = isset($data['policyGroupId']) ? $data['policyGroupId'] : null;
        $this->container['policyGroupName'] = isset($data['policyGroupName']) ? $data['policyGroupName'] : null;
        $this->container['chargingMode'] = isset($data['chargingMode']) ? $data['chargingMode'] : null;
        $this->container['refresh'] = isset($data['refresh']) ? $data['refresh'] : null;
        $this->container['getCommonLoginLocations'] = isset($data['getCommonLoginLocations']) ? $data['getCommonLoginLocations'] : null;
        $this->container['aboveVersion'] = isset($data['aboveVersion']) ? $data['aboveVersion'] : null;
        $this->container['outsideHost'] = isset($data['outsideHost']) ? $data['outsideHost'] : null;
        $this->container['assetValue'] = isset($data['assetValue']) ? $data['assetValue'] : null;
        $this->container['label'] = isset($data['label']) ? $data['label'] : null;
        $this->container['serverGroup'] = isset($data['serverGroup']) ? $data['serverGroup'] : null;
        $this->container['agentUpgradable'] = isset($data['agentUpgradable']) ? $data['agentUpgradable'] : null;
        $this->container['installMode'] = isset($data['installMode']) ? $data['installMode'] : null;
        $this->container['bindingKey'] = isset($data['bindingKey']) ? $data['bindingKey'] : null;
        $this->container['protectInterrupt'] = isset($data['protectInterrupt']) ? $data['protectInterrupt'] : null;
        $this->container['incluster'] = isset($data['incluster']) ? $data['incluster'] : null;
        $this->container['protectDegradation'] = isset($data['protectDegradation']) ? $data['protectDegradation'] : null;
        $this->container['clusterId'] = isset($data['clusterId']) ? $data['clusterId'] : null;
        $this->container['offset'] = isset($data['offset']) ? $data['offset'] : null;
        $this->container['limit'] = isset($data['limit']) ? $data['limit'] : null;
    }

    /**
    * Show all the invalid properties with reasons.
    *
    * @return array invalid properties with reasons
    */
    public function listInvalidProperties()
    {
        $invalidProperties = [];
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) > 128)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['region']) && (mb_strlen($this->container['region']) < 0)) {
                $invalidProperties[] = "invalid value for 'region', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['region']) && !preg_match("/^.*$/", $this->container['region'])) {
                $invalidProperties[] = "invalid value for 'region', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) > 256)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && (mb_strlen($this->container['enterpriseProjectId']) < 1)) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['enterpriseProjectId']) && !preg_match("/^.*$/", $this->container['enterpriseProjectId'])) {
                $invalidProperties[] = "invalid value for 'enterpriseProjectId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) > 64)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['version']) && (mb_strlen($this->container['version']) < 1)) {
                $invalidProperties[] = "invalid value for 'version', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) > 20)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be smaller than or equal to 20.";
            }
            if (!is_null($this->container['agentStatus']) && (mb_strlen($this->container['agentStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'agentStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) > 32)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['detectResult']) && (mb_strlen($this->container['detectResult']) < 1)) {
                $invalidProperties[] = "invalid value for 'detectResult', the character length must be bigger than or equal to 1.";
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
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['hostStatus']) && (mb_strlen($this->container['hostStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'hostStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) > 64)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['osType']) && (mb_strlen($this->container['osType']) < 0)) {
                $invalidProperties[] = "invalid value for 'osType', the character length must be bigger than or equal to 0.";
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
            if (!is_null($this->container['ipAddr']) && !preg_match("/^.*$/", $this->container['ipAddr'])) {
                $invalidProperties[] = "invalid value for 'ipAddr', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) > 32)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['protectStatus']) && (mb_strlen($this->container['protectStatus']) < 1)) {
                $invalidProperties[] = "invalid value for 'protectStatus', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['protectStatus']) && !preg_match("/^.*$/", $this->container['protectStatus'])) {
                $invalidProperties[] = "invalid value for 'protectStatus', must be conform to the pattern /^.*$/.";
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
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) > 64)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['groupName']) && (mb_strlen($this->container['groupName']) < 1)) {
                $invalidProperties[] = "invalid value for 'groupName', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['groupName']) && !preg_match("/^.*$/", $this->container['groupName'])) {
                $invalidProperties[] = "invalid value for 'groupName', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) > 128)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['vpcId']) && (mb_strlen($this->container['vpcId']) < 1)) {
                $invalidProperties[] = "invalid value for 'vpcId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['vpcId']) && !preg_match("/^.*$/", $this->container['vpcId'])) {
                $invalidProperties[] = "invalid value for 'vpcId', must be conform to the pattern /^.*$/.";
            }
            if (!is_null($this->container['sortKey']) && !preg_match("/^risk_num$/", $this->container['sortKey'])) {
                $invalidProperties[] = "invalid value for 'sortKey', must be conform to the pattern /^risk_num$/.";
            }
            if (!is_null($this->container['sortDir']) && !preg_match("/^asc|desc$/", $this->container['sortDir'])) {
                $invalidProperties[] = "invalid value for 'sortDir', must be conform to the pattern /^asc|desc$/.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) > 128)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['policyGroupId']) && (mb_strlen($this->container['policyGroupId']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyGroupId', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) > 256)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be smaller than or equal to 256.";
            }
            if (!is_null($this->container['policyGroupName']) && (mb_strlen($this->container['policyGroupName']) < 0)) {
                $invalidProperties[] = "invalid value for 'policyGroupName', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) > 32)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be smaller than or equal to 32.";
            }
            if (!is_null($this->container['chargingMode']) && (mb_strlen($this->container['chargingMode']) < 1)) {
                $invalidProperties[] = "invalid value for 'chargingMode', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) > 128)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be smaller than or equal to 128.";
            }
            if (!is_null($this->container['assetValue']) && (mb_strlen($this->container['assetValue']) < 0)) {
                $invalidProperties[] = "invalid value for 'assetValue', the character length must be bigger than or equal to 0.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) > 64)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['label']) && (mb_strlen($this->container['label']) < 1)) {
                $invalidProperties[] = "invalid value for 'label', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['serverGroup']) && (mb_strlen($this->container['serverGroup']) > 64)) {
                $invalidProperties[] = "invalid value for 'serverGroup', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['serverGroup']) && (mb_strlen($this->container['serverGroup']) < 1)) {
                $invalidProperties[] = "invalid value for 'serverGroup', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) > 64)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be smaller than or equal to 64.";
            }
            if (!is_null($this->container['clusterId']) && (mb_strlen($this->container['clusterId']) < 1)) {
                $invalidProperties[] = "invalid value for 'clusterId', the character length must be bigger than or equal to 1.";
            }
            if (!is_null($this->container['clusterId']) && !preg_match("/^.*$/", $this->container['clusterId'])) {
                $invalidProperties[] = "invalid value for 'clusterId', must be conform to the pattern /^.*$/.";
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
    * Gets version
    *  **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 **默认取值**: 不涉及
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
    * @param string|null $version **参数解释**： 主机开通的版本 **约束限制**: 不涉及 **取值范围**： 包含如下7种输入。 - hss.version.null ：无。 - hss.version.basic ：基础版。 - hss.version.advanced ：专业版。 - hss.version.enterprise ：企业版。 - hss.version.premium ：旗舰版。 - hss.version.wtp ：网页防篡改版。 - hss.version.container.enterprise：容器版。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVersion($version)
    {
        $this->container['version'] = $version;
        return $this;
    }

    /**
    * Gets agentStatus
    *  **参数解释**: Agent的状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - installed：已安装。已安装状态包含以下四种情况：   - online：在线。表示Agent已经成功安装并且与HSS云端防护中心保持连接。   - offline：离线。表示虽然Agent已经安装，但当前与HSS云端防护中心的连接中断。   - install_failed：安装失败。表示在尝试安装过程中遇到错误或问题，导致安装未能完成。   - installing：安装中。表示当前正在进行Agent安装。 - not_installed ：未安装。表示服务器中尚未安装Agent。 如果您要筛选除在线以外所有状态的Agent，可设置not_online（仅作为查询条件） **默认取值**: 不涉及
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
    * @param string|null $agentStatus **参数解释**: Agent的状态 **约束限制**: 不涉及 **取值范围**: Agent的状态分为两类： - installed：已安装。已安装状态包含以下四种情况：   - online：在线。表示Agent已经成功安装并且与HSS云端防护中心保持连接。   - offline：离线。表示虽然Agent已经安装，但当前与HSS云端防护中心的连接中断。   - install_failed：安装失败。表示在尝试安装过程中遇到错误或问题，导致安装未能完成。   - installing：安装中。表示当前正在进行Agent安装。 - not_installed ：未安装。表示服务器中尚未安装Agent。 如果您要筛选除在线以外所有状态的Agent，可设置not_online（仅作为查询条件） **默认取值**: 不涉及
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
    *  **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种。   - undetected ：未检测。   - clean ：无风险。   - risk ：有风险。   - scanning ：检测中。 **默认取值**: 不涉及
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
    * @param string|null $detectResult **参数解释**: 检测结果 **约束限制**: 不涉及 **取值范围**: 包含如下4种。   - undetected ：未检测。   - clean ：无风险。   - risk ：有风险。   - scanning ：检测中。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setDetectResult($detectResult)
    {
        $this->container['detectResult'] = $detectResult;
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
    * Gets hostStatus
    *  **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种。 - ACTIVE ：正在运行。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。 **默认取值**: 不涉及
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
    * @param string|null $hostStatus **参数解释**: 主机状态 **约束限制**: 不涉及 **取值范围**: 包含如下4种。 - ACTIVE ：正在运行。 - SHUTOFF ：关机。 - BUILDING ：创建中。 - ERROR ：故障。 **默认取值**: 不涉及
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
    *  **参数解释**: 操作系统类型 **约束限制**: 不涉及 **取值范围**: 包含如下2种。 - Linux ：Linux。 - Windows ：Windows。 **默认取值**: 不涉及
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
    * @param string|null $osType **参数解释**: 操作系统类型 **约束限制**: 不涉及 **取值范围**: 包含如下2种。 - Linux ：Linux。 - Windows ：Windows。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setOsType($osType)
    {
        $this->container['osType'] = $osType;
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
    * Gets ipAddr
    *  **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    * @param string|null $ipAddr **参数解释**: 公网或私网IP **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    *  **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed ：关闭。 - opened ：开启。 - protection_exception ：防护异常。 **默认取值**: 不涉及
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
    * @param string|null $protectStatus **参数解释**: 防护状态 **约束限制**: 不涉及 **取值范围**: 包含如下3种： - closed ：关闭。 - opened ：开启。 - protection_exception ：防护异常。 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setProtectStatus($protectStatus)
    {
        $this->container['protectStatus'] = $protectStatus;
        return $this;
    }

    /**
    * Gets groupId
    *  服务器组ID
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
    * @param string|null $groupId 服务器组ID
    *
    * @return $this
    */
    public function setGroupId($groupId)
    {
        $this->container['groupId'] = $groupId;
        return $this;
    }

    /**
    * Gets groupName
    *  **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
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
    * @param string|null $groupName **参数解释**: 服务器组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-64位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setGroupName($groupName)
    {
        $this->container['groupName'] = $groupName;
        return $this;
    }

    /**
    * Gets vpcId
    *  **参数解释**: VPC的ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
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
    * @param string|null $vpcId **参数解释**: VPC的ID **约束限制**: 不涉及 **取值范围**: 字符长度1-128位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setVpcId($vpcId)
    {
        $this->container['vpcId'] = $vpcId;
        return $this;
    }

    /**
    * Gets hasIntrusion
    *  **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getHasIntrusion()
    {
        return $this->container['hasIntrusion'];
    }

    /**
    * Sets hasIntrusion
    *
    * @param bool|null $hasIntrusion **参数解释**: 存在告警事件 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasIntrusion($hasIntrusion)
    {
        $this->container['hasIntrusion'] = $hasIntrusion;
        return $this;
    }

    /**
    * Gets hasVul
    *  **参数解释**: 存在漏洞风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getHasVul()
    {
        return $this->container['hasVul'];
    }

    /**
    * Sets hasVul
    *
    * @param bool|null $hasVul **参数解释**: 存在漏洞风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasVul($hasVul)
    {
        $this->container['hasVul'] = $hasVul;
        return $this;
    }

    /**
    * Gets hasBaseline
    *  **参数解释**: 存在基线风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    *
    * @return bool|null
    */
    public function getHasBaseline()
    {
        return $this->container['hasBaseline'];
    }

    /**
    * Sets hasBaseline
    *
    * @param bool|null $hasBaseline **参数解释**: 存在基线风险 **约束限制**: 不涉及 **取值范围**: true或者false **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setHasBaseline($hasBaseline)
    {
        $this->container['hasBaseline'] = $hasBaseline;
        return $this;
    }

    /**
    * Gets sortKey
    *  **参数解释**: 排序字段 **约束限制**: 不涉及 **取值范围**: 只支持risk_num **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSortKey()
    {
        return $this->container['sortKey'];
    }

    /**
    * Sets sortKey
    *
    * @param string|null $sortKey **参数解释**: 排序字段 **约束限制**: 不涉及 **取值范围**: 只支持risk_num **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSortKey($sortKey)
    {
        $this->container['sortKey'] = $sortKey;
        return $this;
    }

    /**
    * Gets sortDir
    *  **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**: - asc: 正序 - desc: 倒序 **默认取值**: 不涉及
    *
    * @return string|null
    */
    public function getSortDir()
    {
        return $this->container['sortDir'];
    }

    /**
    * Sets sortDir
    *
    * @param string|null $sortDir **参数解释**: 排序的顺序 **约束限制**: 不涉及 **取值范围**: - asc: 正序 - desc: 倒序 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setSortDir($sortDir)
    {
        $this->container['sortDir'] = $sortDir;
        return $this;
    }

    /**
    * Gets policyGroupId
    *  **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    * @param string|null $policyGroupId **参数解释**: 策略组ID **约束限制**: 不涉及 **取值范围**: 字符长度0-128位 **默认取值**: 不涉及
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
    *  **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
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
    * @param string|null $policyGroupName **参数解释**: 策略组名称 **约束限制**: 不涉及 **取值范围**: 字符长度1-256位 **默认取值**: 不涉及
    *
    * @return $this
    */
    public function setPolicyGroupName($policyGroupName)
    {
        $this->container['policyGroupName'] = $policyGroupName;
        return $this;
    }

    /**
    * Gets chargingMode
    *  **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。 **默认取值**: 不涉及
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
    * @param string|null $chargingMode **参数解释**： 收费模式 **约束限制**: 不涉及 **取值范围**: - packet_cycle ：包年/包月。 - on_demand ：按需。 **默认取值**: 不涉及
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
    *  **参数解释** : 是否强制从ECS同步主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
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
    * @param bool|null $refresh **参数解释** : 是否强制从ECS同步主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setRefresh($refresh)
    {
        $this->container['refresh'] = $refresh;
        return $this;
    }

    /**
    * Gets getCommonLoginLocations
    *  **参数解释** : 是否获取主机常用登录地信息 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return bool|null
    */
    public function getGetCommonLoginLocations()
    {
        return $this->container['getCommonLoginLocations'];
    }

    /**
    * Sets getCommonLoginLocations
    *
    * @param bool|null $getCommonLoginLocations **参数解释** : 是否获取主机常用登录地信息 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setGetCommonLoginLocations($getCommonLoginLocations)
    {
        $this->container['getCommonLoginLocations'] = $getCommonLoginLocations;
        return $this;
    }

    /**
    * Gets aboveVersion
    *  **参数解释** : 是否返回比当前版本高的所有版本 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
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
    * @param bool|null $aboveVersion **参数解释** : 是否返回比当前版本高的所有版本 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setAboveVersion($aboveVersion)
    {
        $this->container['aboveVersion'] = $aboveVersion;
        return $this;
    }

    /**
    * Gets outsideHost
    *  **参数解释** : 是否华为云主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
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
    * @param bool|null $outsideHost **参数解释** : 是否华为云主机 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setOutsideHost($outsideHost)
    {
        $this->container['outsideHost'] = $outsideHost;
        return $this;
    }

    /**
    * Gets assetValue
    *  **参数解释** : 资产重要性 **约束限制** : 不涉及 **取值范围** : 包含如下4种 - important ：重要资产 - common ：一般资产 - test ：测试资产 **默认取值** : 不涉及
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
    * @param string|null $assetValue **参数解释** : 资产重要性 **约束限制** : 不涉及 **取值范围** : 包含如下4种 - important ：重要资产 - common ：一般资产 - test ：测试资产 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setAssetValue($assetValue)
    {
        $this->container['assetValue'] = $assetValue;
        return $this;
    }

    /**
    * Gets label
    *  **参数解释** : 资产标签 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
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
    * @param string|null $label **参数解释** : 资产标签 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setLabel($label)
    {
        $this->container['label'] = $label;
        return $this;
    }

    /**
    * Gets serverGroup
    *  **参数解释** : 资产服务器组 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    *
    * @return string|null
    */
    public function getServerGroup()
    {
        return $this->container['serverGroup'];
    }

    /**
    * Sets serverGroup
    *
    * @param string|null $serverGroup **参数解释** : 资产服务器组 **约束限制** : 不涉及 **取值范围** : 字符长度1-64位 **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setServerGroup($serverGroup)
    {
        $this->container['serverGroup'] = $serverGroup;
        return $this;
    }

    /**
    * Gets agentUpgradable
    *  **参数解释** : agent是否可升级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return bool|null
    */
    public function getAgentUpgradable()
    {
        return $this->container['agentUpgradable'];
    }

    /**
    * Sets agentUpgradable
    *
    * @param bool|null $agentUpgradable **参数解释** : agent是否可升级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setAgentUpgradable($agentUpgradable)
    {
        $this->container['agentUpgradable'] = $agentUpgradable;
        return $this;
    }

    /**
    * Gets installMode
    *  **参数解释** : 是否安装模式场景 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return bool|null
    */
    public function getInstallMode()
    {
        return $this->container['installMode'];
    }

    /**
    * Sets installMode
    *
    * @param bool|null $installMode **参数解释** : 是否安装模式场景 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setInstallMode($installMode)
    {
        $this->container['installMode'] = $installMode;
        return $this;
    }

    /**
    * Gets bindingKey
    *  **参数解释** : 是否绑定DEW密钥 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return bool|null
    */
    public function getBindingKey()
    {
        return $this->container['bindingKey'];
    }

    /**
    * Sets bindingKey
    *
    * @param bool|null $bindingKey **参数解释** : 是否绑定DEW密钥 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setBindingKey($bindingKey)
    {
        $this->container['bindingKey'] = $bindingKey;
        return $this;
    }

    /**
    * Gets protectInterrupt
    *  **参数解释** : 是否防护中断 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return bool|null
    */
    public function getProtectInterrupt()
    {
        return $this->container['protectInterrupt'];
    }

    /**
    * Sets protectInterrupt
    *
    * @param bool|null $protectInterrupt **参数解释** : 是否防护中断 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setProtectInterrupt($protectInterrupt)
    {
        $this->container['protectInterrupt'] = $protectInterrupt;
        return $this;
    }

    /**
    * Gets incluster
    *  **参数解释** : 是否集群内节点 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return bool|null
    */
    public function getIncluster()
    {
        return $this->container['incluster'];
    }

    /**
    * Sets incluster
    *
    * @param bool|null $incluster **参数解释** : 是否集群内节点 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setIncluster($incluster)
    {
        $this->container['incluster'] = $incluster;
        return $this;
    }

    /**
    * Gets protectDegradation
    *  **参数解释** : 是否防护降级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return bool|null
    */
    public function getProtectDegradation()
    {
        return $this->container['protectDegradation'];
    }

    /**
    * Sets protectDegradation
    *
    * @param bool|null $protectDegradation **参数解释** : 是否防护降级 **约束限制** : 不涉及 **取值范围** : true或者false **默认取值** : 不涉及
    *
    * @return $this
    */
    public function setProtectDegradation($protectDegradation)
    {
        $this->container['protectDegradation'] = $protectDegradation;
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

